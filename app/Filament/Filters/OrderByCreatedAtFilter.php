<?php

namespace App\Filament\Filters;

use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class OrderByCreatedAtFilter extends Filter
{
    protected function setUp(): void
    {
        $this->label('Ordenar por');

        $this->form([
            \Filament\Forms\Components\Select::make('order')
                ->options([
                    'recent' => 'Mais Recentes',
                    'oldest' => 'Mais Antigos',
                ])
                ->default('recent')
                ->label('Ordenação'),
        ]);
    }

    public function applyToBaseQuery(Builder $query, array $data = []): Builder
    {
        return $query->when(
            $data['order'] === 'oldest',
            fn (Builder $query) => $query->orderBy('created_at', 'asc'),
            fn (Builder $query) => $query->orderBy('created_at', 'desc')
        );
    }
}
