<?php

namespace App\Filament\Resources;

use App\Filament\Filters\OrderByCreatedAtFilter;
use App\Filament\Resources\ProductResource\Pages;
use Filament\{Tables, Forms};
use Filament\Resources\{Table, Resource, Form};
use Illuminate\Support\HtmlString;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Actions\Action as ActionForm;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\RateLimiter;

class ProductResource extends Resource
{
    protected const SYNC_RATE_LIMIT_TIME = 250;
    
    protected static ?string $model = \App\Models\Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Produtos';
    
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Placeholder::make('image_preview')
                ->label('Preview')
                ->content(fn($record) => $record && !empty($record->image_url) 
                    ? new HtmlString('<img src="' . e($record->image_url) . '" width="350" height="350" style="border-radius: 10px;" />') 
                    : 'No Image'
                )
                ->columnSpanFull(),

            Forms\Components\TextInput::make('name')
                ->label('Nome do Produto')
                ->columnSpanFull()
                ->required(),

            Forms\Components\Fieldset::make('Valores do Produto')->schema([
                Forms\Components\TextInput::make('price')
                    ->label('Preço Atual')
                    ->mask(fn($mask) => $mask->money(prefix: '', thousandsSeparator: ',', decimalPlaces: 2))
                    ->prefix('R$ ')
                    ->columnSpan(4),

                Forms\Components\TextInput::make('old_price')
                    ->label('Preço Antigo')
                    ->mask(fn($mask) => $mask->money(prefix: '', thousandsSeparator: ',', decimalPlaces: 2))
                    ->prefix('R$ ')
                    ->columnSpan(4),

                Forms\Components\TextInput::make('discount')
                    ->label('Desconto')
                    ->suffix('%')
                    ->columnSpan(4),
            ])->columns(12),

            Forms\Components\Fieldset::make('Detalhes Adicionais')->schema([
                Forms\Components\TextInput::make('installments')
                    ->label('Parcelamento')
                    ->columnSpan(4),

                Forms\Components\TextInput::make('shipping')
                    ->label('Frete')
                    ->columnSpan(4),

                Forms\Components\TextInput::make('seller')
                    ->label('Vendedor')
                    ->columnSpan(4),
            ])->columns(12),

            Forms\Components\TextInput::make('link')
                ->label('Link do Produto')
                ->suffixAction(
                    fn(?string $state): ActionForm =>
                        ActionForm::make('visit')
                            ->icon('heroicon-s-external-link')
                            ->url(filled($state) ? $state : null, shouldOpenInNewTab: true)
                )
                ->columnSpanFull(),

            Forms\Components\Textarea::make('description')
                ->label('Descrição')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')
                ->label('#SKU')
                ->sortable(),

            Tables\Columns\ImageColumn::make('image_url')
                ->label('Imagem')
                ->circular()
                ->action(
                    fn($record) => $record->link ? redirect()->away($record->link) : null
                ),

            Tables\Columns\TextColumn::make('name')
                ->label('Nome')
                ->sortable()
                ->limit(35)
                ->searchable(),

            Tables\Columns\TextColumn::make('price')
                ->label('Preço Atual')
                ->sortable()
                ->formatStateUsing(fn($state) => 'R$ ' . number_format($state, 2, ',', '.')),

            Tables\Columns\TextColumn::make('old_price')
                ->label('Preço Antigo')
                ->sortable()
                ->formatStateUsing(fn($state) => 'R$ ' . number_format($state, 2, ',', '.')),

            Tables\Columns\TextColumn::make('discount')
                ->label('Desconto')
                ->sortable()
                ->formatStateUsing(fn($state) => $state ? "{$state}%" : '0%'),

            Tables\Columns\TextColumn::make('installments')
                ->label('Parcelamento')
                ->limit(20),

            Tables\Columns\TextColumn::make('link')
                ->label('Ver Produto')
                ->formatStateUsing(fn($state) => new HtmlString(
                    '<a href="' . e($state) . '" target="_blank" class="text-blue-500 underline">Abrir</a>'
                )),

            Tables\Columns\TextColumn::make('shipping')
                ->label('Frete')
                ->limit(20),
        ])
        ->filters([
            Tables\Filters\Filter::make('price_above_100')
                ->label('Preço acima de R$ 100')
                ->query(fn($query) => $query->where('price', '>', 100)),

            Tables\Filters\Filter::make('price_below_100')
                ->label('Preço abaixo de R$ 100')
                ->query(fn($query) => $query->where('price', '<', 100)),

            OrderByCreatedAtFilter::make('order_by_created_at'),
        ])
        ->defaultSort('price', 'asc')
        ->headerActions([
            Action::make('Sincronizar')
                ->label('Sincronizar Produtos')
                ->icon('heroicon-o-refresh')
                ->color('primary')
                ->action(function () {
                    $key = 'sync-products-' . auth()->id();

                    if (RateLimiter::tooManyAttempts($key, 1)) {
                        $secondsRemaining = RateLimiter::availableIn($key);
                        
                        Notification::make()
                            ->title('Aguarde para nova sincronização')
                            ->body("Aguarde **$secondsRemaining segundos** antes de iniciar uma nova sincronização.")
                            ->warning()
                            ->send();
            
                        return;
                    }
            
                    RateLimiter::hit($key, self::SYNC_RATE_LIMIT_TIME);
            
                    app()->make(\App\Services\ScraperService::class)->dispatchJob();
            
                    Notification::make()
                        ->title('Sincronização iniciada')
                        ->body('A sincronização foi iniciada e está sendo processada em background.')
                        ->success()
                        ->send();
                })
                ->successNotificationTitle('Sincronização iniciada!'),
        ])
        ->actions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
