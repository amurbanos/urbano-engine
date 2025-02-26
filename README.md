<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Instruções de Execução

## Configuração Inicial

1. **Copie o arquivo `.env.example`** para criar o arquivo `.env`:

   ```bash
   cp .env.example .env

2. **Execute e aguarde o build do docker:

   ```bash
   make setup

Na página inicial se encontram os links para o painel, o Telescope para monitorar o sistema e o Mailhog para email reportando ações importantes do sistema
http://localhost:8000

// Aqui Mailhog:
http://localhost:8025

Lembrando que o projeto é:

O projeto é uma aplicação Laravel escalável para scraping de produtos de e-commerce, processamento de dados e exibição em um painel administrativo.
1️⃣ Entrada (Input) – Coleta dos Dados

✅ O scraper acessa uma página de e-commerce e captura:
✔ Nome do produto
✔ Preço
✔ Descrição
✔ Imagem


✅ A extração pode ser feita:
✔ Manualmente via comando
✔ Automaticamente via Laravel Scheduler (agendador de tarefas)

📌 Ferramentas usadas:

    Goutte + DomCrawler para scraping
    Guzzle para requisições HTTP

2️⃣ Processamento – Organização e Armazenamento

✅ O sistema armazena os produtos no banco de dados, verificando se há atualizações antes de salvar.

✅ Scraping processado de forma assíncrona com Laravel Queues, evitando travamento do sistema.

✅ Otimização com Redis, para evitar recarregar os mesmos dados.

📌 Ferramentas usadas:

    Laravel (MVC) para estruturação do código
    PostgreSQL/MySQL para armazenar os produtos
    Laravel Queues para processar scraping em background
    Redis para cache e otimização

3️⃣ Saída (Output) – Exibição e Monitoramento

✅ Página pública onde os produtos são exibidos com filtros e paginação.

✅ Painel Administrativo para monitorar logs, tarefas e falhas.

📌 Ferramentas usadas:

    Filament para o painel administrativo
    Laravel Telescope para monitoramento e debug

4️⃣ Ambiente – Padronização e Consistência

✅ Docker Compose para garantir um ambiente de desenvolvimento padronizado.

📌 Stack final:
✅ Laravel + Filament + Goutte + Queues + Redis + PostgreSQL/MySQL + Docker Compose + Laravel Telescope

🔥 Com essa estrutura, o projeto será rápido, escalável e fácil de manter! 🚀

E a Estratégia que estamos utilizandoo:

📌 Estratégia de Implementação

🔹 Começar simples (Júnior) → Melhorar estrutura e funcionalidades (Pleno) → Otimizar e escalar (Sênior)
1️⃣ Nível Júnior (MVP - Mínimo Viável)

✅ Criar o scraper básico para coletar nome e preço dos produtos.

✅ Salvar os dados no banco de dados.

✅ Criar uma página simples para exibir os produtos.

📌 Objetivo: Validar que o scraping funciona e que os dados podem ser armazenados e exibidos.
2️⃣ Nível Pleno (Melhorando Estrutura e Funcionalidades)

✅ Expandir o scraper para capturar descrição e imagem dos produtos.

✅ Refatorar o código para padrão MVC (Controllers, Models e Views).

✅ Implementar filtros e paginação na exibição dos produtos.

✅ Adicionar tratamento de erros e logs básicos para monitoramento.

📌 Objetivo: Estruturar melhor o código e melhorar a experiência do usuário.
3️⃣ Nível Sênior (Escalabilidade e Otimização)

✅ Criar agendamento automático via Laravel Scheduler para atualização dos produtos.

✅ Implementar queues (filas) para processamento assíncrono, evitando sobrecarga no servidor.

✅ Usar Redis para caching, melhorando a velocidade de carregamento.

✅ Criar um Painel Administrativo (Filament) para gerenciar logs e monitoramento.

✅ Integrar Laravel Telescope para depuração e monitoramento avançado.


📌 Objetivo: Tornar a aplicação escalável, rápida e otimizada para grandes volumes de dados.


                <div class="items">
                    <div class="items-list">
                        <div class="items-with-smart-groups">
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra1j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_866895-MLU71779339266_092023-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://www.mercadolivre.com.br/smart-tv-40-s5400a-led-fhd-android-preta-tcl/p/MLB27171087?pdp_filters=item_id%3AMLB4090579210#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=1&amp;wid=MLB4090579210&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv 40 S5400a Led Fhd Android
                                        Preta Tcl</a><span class="poly-component__seller">Por TCL <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1949 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.949</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1440 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.440</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">26%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="144 reales con 05 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">144</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">05</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra2j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_986779-MLB79622996181_092024-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3393117269-parafusadeira-furadeira-21v-2-baterias-profissional-bivolt-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=2"
                                        target="_self" class="poly-component__title">Parafusadeira Furadeira 21v 2
                                        Baterias Profissional Bivolt</a><span class="poly-component__seller">Por THE
                                        BLACK TOOLS <svg aria-label="Loja oficial" width="12" height="12"
                                            viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 336 reales con 93 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">336</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">93</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="199 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">199</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 6x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="33 reales con 17 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">33</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">17</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra3j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_613368-MLB81895446340_012025-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-2874132176-kit-com-2-camisetas-masculinas-basicas-hering-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=3"
                                        target="_self" class="poly-component__title">Kit Com 2 Camisetas Masculinas
                                        Básicas Hering</a><span class="poly-component__seller">Por Hering <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 79 reales con 99 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">79</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">99</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="54 reales con 99 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">54</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">99</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">31%
                                                OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra4j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_726671-MLA79372127728_092024-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://www.mercadolivre.com.br/creatina-monohidratada-100-pura-pote-300g-ftw/p/MLB20581836?pdp_filters=item_id%3AMLB3897921973#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=4&amp;wid=MLB3897921973&amp;sid=offers"
                                        target="_self" class="poly-component__title">Creatina Monohidratada 100% Pura
                                        Pote 300g - Ftw</a><span class="poly-component__seller">Por FTW <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 70 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">70</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="40 reales con 60 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">40</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">60</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">42%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="3 reales con 98 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">3</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">98</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span class="poly-shipping--next_day">Chegará
                                            amanhã</span></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra5j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_932400-MLU77117788070_062024-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://www.mercadolivre.com.br/fone-de-ouvido-headphone-dapon-h02d-bluetooth-51-com-microfone-cor-preto/p/MLB24117280?pdp_filters=item_id%3AMLB3934867789#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=5&amp;wid=MLB3934867789&amp;sid=offers"
                                        target="_self" class="poly-component__title">Fone De Ouvido Headphone Dapon H02d
                                        Bluetooth 5.1 Com Microfone Cor Preto</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 144 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">144</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="75 reales con 34 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">75</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">34</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">48%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="7 reales con 39 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">7</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">39</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra6j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_996225-MLB54342848616_032023-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3254583335-short-praia-masculino-bermudas-vero-academia-treino-corrida-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=6"
                                        target="_self" class="poly-component__title">Short Praia Masculino Bermudas
                                        Verão Academia Treino Corrida</a><span class="poly-component__seller">Por Voker
                                        Style <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 49 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">49</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="32 reales con 70 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">32</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">70</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">34%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="3 reales con 20 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">3</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">20</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra7j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_893522-MLU76546474137_052024-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><a
                                        href="https://click1.mercadolivre.com.br/mclics/clicks/external/MLB/count?a=nL0EOPHxr%2FqpOkeEPOo8O%2F2Sm%2F6xa1oOsf%2BWRppBo6ciNWKgUyhT2F9icWyQAGgsHwI0Pg%2Fy8LPTWaAyDqatFFLG4AmIbOwb0R8TxR3KsAJ262UPVWUVQ%2BUHiThArhbDH0Z%2B8UsGw0RCNNgRSNQalIVpobQ8WHfY4K9St7XKP7sd2p93%2BN63pG%2Bg0YOIabWugguZgsHaEhmPzfjD7Wf0RDG1piBmtG21f01lB7CfAuM8Sp4Ti47qizXzP38xELL5y9%2BY1laplGoEGfmLt8oEwKKdk72KgTv94MpIi9TZMqjPgP4LAHIGnyC%2FbxsVeCD77llOsg7fAH%2Fy8Rgex%2BO11R3T8TNk0NDzGBhgxpzItNmsn2Z8BFrFJJMsB6To4opDM6Z06wi54AyG5nGwN9pbbelrsvsvAV0ZOyn01bXteo2gafzrv4dp3qmYhcrzMhTszaphg0%2FbCyiujTyw88cY0EKZYf6vihSrLigfFkKV3sBf8xeA7lCMqKOSgh%2FQ27gRiS4cUUFjIf7Id21DjqdzxHxIbKAqWEadxiKCBV1u1RdwxLVokCTDRrVUyq7WXC5gvy7Tw2r3xclCNsJYl%2F5uSZDOjqngsQS8%2FHRYTuiZ5U3aJwhOSjU7tqYr3wVVMoyFOwfXHjCwtvLWVa8rNSnFrCguxBIc0H%2BaAKNQk6EnOpNUFWlyqfOODwoNyHZsRGLuxXZ8Lm1aTOSMLZHLtGuawWCOS3FckztS0VTeMQZnNhCAvPGOLo9Ae%2BYpLoyL%2F6C2pnYABqHyDJFMiPYxJolJku4SEyLZtK3td2c780qoeRJFKhquspgecQ10Kmun%2B%2BbzeMdEcoNnCzlBkqma7juX64J8%2F6ZPyTqpmIkeoL0NSixSJKOXScw%2BgTC4KI1NC0Zf3TIeGtAu9MZIqU2vlbizajkp5qru0gHaucW8naZxfaFVJ1zZnG4O660zsXfoWqcs9nTUDo2yLEKvHKo1DBRLTPyMkaE%2Fr2bpAFtfzwc%3D&amp;e=mclics%2Fmax-bid-capped%2B36382%2Cmclics%2Fmax-bid-item-factor%2B23927%2Cmclics%2Foverride-min-seasonality%2B49092%2Cmclics%2Fmin-budget-throttling%2B54896%2Cmclics%2Fgmv-predictor%2B52393%2Cmclics%2Fmore-ads-migration%2B58320%2Cmclics%2Fdiscard-bid-lt-min%2B45363#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=7&amp;wid=MLB4812130742&amp;sid=offers"
                                        target="_self" class="poly-component__title">Creatina Monohidratada Pura 1kg
                                        Dark Lab Unidade Sem Sabor</a><span class="poly-component__seller">Por Dark Lab
                                        <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 199 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">199</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="145 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">145</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">27%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="14 reales con 21 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">14</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">21</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                                <div class="poly-card__footer"><a href="https://publicidade.mercadolivre.com.br"
                                        target="_blank" class="poly-component__ads-promotions">Patrocinado</a></div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra8j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_716089-MLU77178495056_072024-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><a
                                        href="https://click1.mercadolivre.com.br/mclics/clicks/external/MLB/count?a=NlKaZ3iYtPsWz1PSVebG9BgtAOxdoC6Wjz1IrRT2w%2FN0oUvLLNmM9I7uPvom%2Fgc2uII2LiuHqEMuCnor15xel0sq96vNfCiLoNBoATvzLZc6A2R2TPJmoqSbtCsEVXzRWKVtoxyOyBB0oNp0PaY%2B1gVsqOTwPuwczMeK6IsAmGllJkCAQzGHuo0LPo1URm5lX2lSoUuB%2BywoRebeLDC60Tu3F0GW1ex99b6UE5CrdED0WzHZsxxYr8uA53JUgUNXOV%2FizUb2mTjFD%2BZL%2F5UUULETWYpXecQ9ixGtnpfEX2d5ggKrRfRixxB7VTj9NzQlkaB%2FUnlCW6Q%2FrDULNSlLJ%2Bhs3zD%2FNk2AE7Df%2BylSd5eM2BiQHMDpfYPJP3HSUu%2BCwAkIcwJHIP1PBykUyIbarm50xYQ%2F0SyJvGWfcfcTqCv4oreV9OHr2r0F8oAzLH%2F8AQqTTxpXa7ydUsU0tuzsbDn5TLEh%2FaGtFvCS6VmfIBmW8JEa56mD%2FJw37mSXGPXCZpVE29XtEi%2BjcI340%2BhvQ4Nv0jlp26YnA0Ik9QKK613bXIcoEvdweay0HaJz%2FH80csD0UVR3nNY%2Bu%2F7mm3wUOJw7e%2B%2FbMdZieALbxIKaX8U2OXcICq9LixbEMRJfgltJ7qzAOlJGHQ7mIrld2aUofvaKG6T2bXe%2B1xH8vrYhRKKJxbbxZvS46hCQLdEgKiby2oFA2I4dWYl32Jzk8wFEnI%2Fj1eaX8dYZH7LSJlVdsiJIvLmFIY3oxShGMKf%2FnNLacLcsK5zJGAp%2BKG9up3c65TNaELbkSlHs1QbCLgGCO4o5dkTD6BGbjEYzM%2FL%2ByUYE1AmE5aLARi6vMf32aKuitJRHK%2F4I0%2FInzGymWuSq%2BC%2B86Xczbr%2F9%2BYzukZkEjtcU%2B8S8swIkscMdGbldMkGwZsRdeXPJMpEjatUm0ZKPnCjNXu%2FQW%2B87i5GMymaaWzAlzajs5blqubQdt7aZvKbP5FaEriLhljl0V9C3AW%2FVUYpbMFMqH7iKwtkQqJ6HtAzgS7qN71NB%2FWjT9tvB4Se4zDM%2F3Y3tug%3D%3D&amp;e=mclics%2Fmax-bid-capped%2B36382%2Cmclics%2Fmax-bid-item-factor%2B23927%2Cmclics%2Foverride-min-seasonality%2B49092%2Cmclics%2Fmin-budget-throttling%2B54896%2Cmclics%2Fgmv-predictor%2B52393%2Cmclics%2Fmore-ads-migration%2B58320%2Cmclics%2Fdiscard-bid-lt-min%2B45363#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=8&amp;wid=MLB3616725881&amp;sid=offers"
                                        target="_self" class="poly-component__title">Parafusadeira Furadeira Sem Fio The
                                        Black Tools Bateria 12v Cor Amarelo E Preto Frequência 60 110v/220v</a><span
                                        class="poly-component__seller">Por Ismafer Ferramentas <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 244 reales con 62 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">244</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">62</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="149 reales con 22 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">149</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">22</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">39%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 4x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="37 reales con 30 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">37</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">30</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span class="poly-shipping--next_day">Chegará
                                            grátis amanhã</span></div>
                                </div>
                                <div class="poly-card__footer"><a href="https://publicidade.mercadolivre.com.br"
                                        target="_blank" class="poly-component__ads-promotions">Patrocinado</a></div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ra9j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="https://http2.mlstatic.com/D_Q_NP_2X_857103-MLU78417026458_082024-AB.webp"
                                        class="poly-component__picture" alt=""></div>
                                <div class="poly-card__content"><a
                                        href="https://click1.mercadolivre.com.br/mclics/clicks/external/MLB/count?a=1p6O0OY72tug08V49VDMYOfIK%2BQ7rcx9L%2BnVJPzEoDruJvky0ebZYXf2dg5NT516PBDawD%2FMvhaBrxBTH7iSUFpRWe%2FQdzHwx8VusOOziwU%2FC8I0H9Q9UxeU3JXzZEdywLdmZZ1DtN%2BWsMW32ELmLQPPtYmnApgixITL%2FjcQtCD6zyvXAa01lk7L1pcMjmLsHTx4dz9%2F5FivOdiwactWJZT2aS4n%2FwxQ7Yd71pTLZBoiQDpo%2FTam2EbG2ecxtiRlmPBaxkKstHiBITWi7lC0clHy7RBDNFVkQFyHZVoFXyhD0hIKN%2FNEiuxHT3pUkp%2F6z34AFmu3l80p4%2BzCjH2%2FD416Lc5wYQkgmDmsk1J7tln1q26gGUyrQ0W%2F9WdaGBXfl7QMDG1h3WlRZNA5SXQMZjEN8lCuET9g2YYTdhibududL75ToQsVGIpCwZ14ZvLXDMqcy%2B3Smw0mYxxARbNtv%2FUkO5LSORTnZBS5vQV6hlk3NExo9RO%2FQHYfm9f9bnJBCx%2FQlsgUgTsIu%2FdK%2BQcdVhDSvRu3zqQn7HcAmHJziBifZmjxyBmOqAxQO8ZDN2E7yv33VeWFjxWIkALmzvYCrQRyvVU6Ds8roGHZ8ZtWDqdmUelZNxJceODi8qRNgMm%2FKM5yDbcPNCtt70BH19aDlSBIX2XCCmOXYh4qZPwOXmRZtw05X8me%2FzSKCPEOjLjOmKMWKxCSMy8U2H04Y7BLK%2F6%2B1InwGd7Wf17Pu21xYZ2tz8Ca3TAmL%2BugzwH30v%2Fe7A1xWjig3dRJ4Ujk6Ji8RtWXU1gERNaNcEaStjUyzjCb%2BgDCdq6QQgL2eRLr1U%2BNIntuGCsotwafeWq8dRPvOd7fJSim9CPqdQTkvq%2Bayt5342rFty9yGolQ7shWXapUVNPHrs88K%2Fj70i7u%2FGnO5jJEf5CP%2F%2B7II70WHptEuql0LU1VZP2Me5SSRmVMMixSK9Z%2FfxWo7IdixdfyzZ3Lfi3MPkgrR%2FakDMavfGbnMIpT6XYvV0R3dE9SGEI0m0SlgJqSm5yIOAdLv5WGMqKbdVztzCF%2FlaZKRzIQRWBXl3IOOYhwNzrUh8DgSoJgZuI3Po8%3D&amp;e=mclics%2Fmax-bid-capped%2B36382%2Cmclics%2Fmax-bid-item-factor%2B23927%2Cmclics%2Foverride-min-seasonality%2B49092%2Cmclics%2Fmin-budget-throttling%2B54896%2Cmclics%2Fgmv-predictor%2B52393%2Cmclics%2Fmore-ads-migration%2B58320%2Cmclics%2Fdiscard-bid-lt-min%2B45363#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=9&amp;wid=MLB3967046457&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv 4k 65 LG Uhd 65ut8050
                                        Processador 5 Ger7 Ai Alexa/chromecast Integrado Otimizador De Jogos Webos 24
                                        Controle Smart Magic</a><span class="poly-component__seller">Por Webfones <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 4499 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">4.499</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="3499 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">3.499</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">22%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="349 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">349</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                                <div class="poly-card__footer"><a href="https://publicidade.mercadolivre.com.br"
                                        target="_blank" class="poly-component__ads-promotions">Patrocinado</a></div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Raaj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_930002-MLU77325534205_062024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://www.mercadolivre.com.br/bicicleta-aro-29-gts-alumunio-rdx-21v-cmbio-shimano-a-disco-cor-brancopreto-tamanho-do-quadro-21/p/MLB33978635?pdp_filters=item_id%3AMLB3613220083#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=10&amp;wid=MLB3613220083&amp;sid=offers"
                                        target="_self" class="poly-component__title">Bicicleta Aro 29 Gts Alumunio Rdx
                                        21v Câmbio Shimano A Disco Cor Branco/preto Tamanho Do Quadro 21</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1199 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.199</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="971 reales con 19 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">971</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">19</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">19%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="97 reales con 12 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">97</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">12</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rabj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_901610-MLU77335319929_062024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://www.mercadolivre.com.br/furadeira-parafusadeira-sem-fio-de-10mm-philco-ppf12m-12v-acessorio-110v220v/p/MLB37741420?pdp_filters=item_id%3AMLB4791040280#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=11&amp;wid=MLB4791040280&amp;sid=offers"
                                        target="_self" class="poly-component__title">Furadeira Parafusadeira Sem Fio De
                                        10mm Philco Ppf12m 12v + Acessório 110v/220v</a><span
                                        class="poly-component__seller">Por Ismafer Ferramentas <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 307 reales con 54 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">307</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">54</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="179 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">179</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">90</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">41%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 5x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="35 reales con 98 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">35</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">98</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Racj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_617361-MLB54128842596_032023-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3239976866-kit-6-pares-meias-puma-cano-medio-masculino-adulto-original-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=12"
                                        target="_self" class="poly-component__title">Kit 6 Pares Meias Puma Cano Médio
                                        Masculino Adulto Original</a><span class="poly-component__seller">Por Osure <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 127 reales con 98 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">127</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">98</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="64 reales con 50 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">64</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">50</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">49%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="6 reales con 32 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">6</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">32</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Radj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_789776-MLB72355902017_102023-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#BA0095"
                                        class="poly-component__highlight">OFERTA RELÂMPAGO</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3430343629-tnis-masculino-pride-3-olympikus-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=13"
                                        target="_self" class="poly-component__title">Tênis Masculino Pride 3
                                        Olympikus</a><span class="poly-component__seller">Por Mercado Livre <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 399 reales con 99 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">399</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">99</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="213 reales con 29 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">213</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">29</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">46% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img"
                                                    aria-label="236 reales con 99 centavos"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">236</span><span
                                                        aria-hidden="true">,</span><span
                                                        class="andes-money-amount__cents"
                                                        aria-hidden="true">99</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 6x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="39 reales con 50 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">39</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">50</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__rebates">
                                        <div class="poly-rebates__wrapper"><span class="poly-rebates__pill">5% OFF Saldo
                                                no Mercado Pago</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Raej7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_651977-MLA76009505043_042024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/samsung-galaxy-m55-5g-dual-sim-256-gb-azul-escuro-8-gb-ram/p/MLB36208238?pdp_filters=item_id%3AMLB3874990175#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=14&amp;wid=MLB3874990175&amp;sid=offers"
                                        target="_self" class="poly-component__title">Samsung Galaxy M55 5g Dual Sim 256
                                        Gb Azul Escuro 8 Gb Ram</a><span class="poly-component__seller">Por 123 Comprou
                                        <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 2565 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">2.565</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1385 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.385</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">46% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="1539 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">1.539</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="153 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">153</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rafj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_803762-MLB82452061979_022025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-4649175458-camisa-social-masculina-manga-curta-gola-padre-slim-premium-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=15"
                                        target="_self" class="poly-component__title">Camisa Social Masculina Manga Curta
                                        Gola Padre Slim Premium</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 74 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">74</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="46 reales con 09 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">46</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">09</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">38%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="4 reales con 52 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">4</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">52</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ragj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_931205-MLB82351784788_022025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3459002623-torneira-com-filtro-parede-gourmet-flexivel-3-refil-vela-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=16"
                                        target="_self" class="poly-component__title">Torneira Com Filtro Parede Gourmet
                                        Flexível + 3 Refil Vela</a><span class="poly-component__seller">Por Casa Premier
                                        <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 179 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">179</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="147 reales con 51 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">147</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">51</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">18%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="14 reales con 46 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">14</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">46</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rahj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_926686-MLA82152705273_012025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://www.mercadolivre.com.br/kit-parafusadeira-furadeira-de-impacto-profissional-com-luz-2-baterias-24v-com-maleta-acessorios/p/MLB45746059?pdp_filters=item_id%3AMLB3952584487#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=17&amp;wid=MLB3952584487&amp;sid=offers"
                                        target="_self" class="poly-component__title">Kit Parafusadeira Furadeira De
                                        Impacto Profissional Com Luz 2 Baterias 24v Com Maleta + Acessórios</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 249 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">249</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="157 reales con 43 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">157</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">43</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">37%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="15 reales con 43 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">15</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">43</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Raij7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_876091-MLU78776215826_092024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/notebook-samsung-galaxy-book4-intel-inside-u300-8gb-256gb-ssd-uhd-graphics-156-full-hd-led-155kg-windows-11-home-np750xgj-kg7br/p/MLB40347107?pdp_filters=item_id%3AMLB5194930972#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=18&amp;wid=MLB5194930972&amp;sid=offers"
                                        target="_self" class="poly-component__title">Notebook Samsung Galaxy Book4 Intel
                                        Inside U300, 8gb, 256gb Ssd, Uhd Graphics, 15.6 Full Hd Led, 1.55kg, Windows 11
                                        Home, Np750xgj-kg7br</a><span class="poly-component__seller">Por Vikings <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 3665 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">3.665</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="2489 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">2.489</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">32%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="248 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">248</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rajj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_699045-MLU77991092536_082024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/creatina-monohidratada-pura-600g-dark-lab-unidade/p/MLB39089853?pdp_filters=item_id%3AMLB3807070759#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=19&amp;wid=MLB3807070759&amp;sid=offers"
                                        target="_self" class="poly-component__title">Creatina Monohidratada Pura 600g
                                        Dark Lab Unidade</a><span class="poly-component__seller">Por Dark Lab <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 124 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">124</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="76 reales con 08 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">76</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">08</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">39%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="7 reales con 46 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">7</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">46</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rakj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_822441-MLU75950846226_052024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smartphone-motorola-moto-g04s-128gb-8gb-4gb-ram4gb-ram-boost-ai-camera-16mp-sensor-fps-lateral/p/MLB36337426?pdp_filters=item_id%3AMLB3683576875#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=20&amp;wid=MLB3683576875&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smartphone Motorola Moto G04s -
                                        128gb 8gb (4gb Ram+4gb Ram Boost) Ai Camera 16mp Sensor Fps Lateral</a><span
                                        class="poly-component__seller">Por Motorola <svg aria-label="Loja oficial"
                                            width="12" height="12" viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 899 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">899</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="687 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">687</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">23%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="68 reales con 70 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">68</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">70</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ralj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_763352-MLU77595801805_072024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smart-tv-samsung-ls32betblggxzd-32-hd-led/p/MLB30999973?pdp_filters=item_id%3AMLB5017144176#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=21&amp;wid=MLB5017144176&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv Samsung Ls32betblggxzd 32
                                        Hd Led</a><span class="poly-component__seller">Por Vikings <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1798 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.798</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1079 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.079</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="107 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">107</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ramj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_669649-MLU75692530388_042024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/colcho-inflavel-casal-com-inflador-acoplado-multiuso-mor/p/MLB22983247?pdp_filters=item_id%3AMLB3304782835#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=22&amp;wid=MLB3304782835&amp;sid=offers"
                                        target="_self" class="poly-component__title">Colchão Inflável Casal Com Inflador
                                        Acoplado Multiuso Mor</a><span class="poly-component__seller">Por Planeta do
                                        Bebe <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 189 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">189</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="129 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">129</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">90</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">31%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="12 reales con 73 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">12</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">73</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span class="poly-shipping--next_day">Chegará
                                            grátis amanhã</span></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ranj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_813328-MLB73954443902_012024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><a
                                        href="https://produto.mercadolivre.com.br/MLB-3319485613-pc-completo-mancer-intel-i7-16gb-ram-ssd-480gb-monitor-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=23&amp;wid=MLB3319485613&amp;sid=offers"
                                        target="_self" class="poly-component__title">Pc Completo Mancer, Intel I7, 16gb
                                        Ram, Ssd 480gb, Monitor</a><span class="poly-component__seller">Por Pichau <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 2179 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">2.179</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1399 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.399</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">35%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="139 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">139</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Raoj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_762415-MLA82117693746_022025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/ventilador-coluna-50cm-180w-8-pas-silencioso-wap-flow-turbo-frequncia-60-hz-127v/p/MLB23434212?pdp_filters=item_id%3AMLB3452059359#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=24&amp;wid=MLB3452059359&amp;sid=offers"
                                        target="_self" class="poly-component__title">Ventilador Coluna 50cm 180w 8 Pás
                                        Silencioso Wap Flow Turbo Frequência 60 Hz 127v</a><span
                                        class="poly-component__seller">Por 123 Comprou <svg aria-label="Loja oficial"
                                            width="12" height="12" viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 516 reales con 50 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">516</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">50</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="309 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">309</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">90</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="30 reales con 30 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">30</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">30</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rapj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_682905-MLB73104779367_112023-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-4226793452-bicicleta-aro-29-aco-carbono-ksvj-freios-disco-suspenso-21v-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=25"
                                        target="_self" class="poly-component__title">Bicicleta Aro 29 Aço Carbono Ksvj
                                        Freios Disco Suspensão 21v</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 998 reales con 80 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">998</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">80</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="799 reales con 04 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">799</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">04</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">20%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="79 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">79</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Raqj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_668543-MLA75547177771_042024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/samsung-galaxy-a15-4g-dual-sim-128-gb-azul-escuro-4-gb-ram/p/MLB32175033?pdp_filters=item_id%3AMLB3878029789#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=26&amp;wid=MLB3878029789&amp;sid=offers"
                                        target="_self" class="poly-component__title">Samsung Galaxy A15 4g Dual Sim 128
                                        Gb Azul-escuro 4 Gb Ram</a><span class="poly-component__seller">Por Vikings <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1498 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.498</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="899 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">899</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="86 reales con 78 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">86</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">78</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rarj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_662943-MLB81953448086_022025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3783995717-short-academia-feminino-poliamida-selene-zero-transparncia-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=27"
                                        target="_self" class="poly-component__title">Short Academia Feminino Poliamida
                                        Selene Zero Transparência</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 83 reales con 16 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">83</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">16</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="47 reales con 40 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">47</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">40</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">43%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 2x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="23 reales con 70 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">23</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">70</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__coupons">
                                        <div class="poly-coupons__wrapper"><span class="poly-coupons__pill"><svg
                                                    aria-label="Cupom" class="poly-coupons__icon" width="13" height="11"
                                                    viewBox="0 0 13 11" role="img">
                                                    <use href="#poly_coupon"></use>
                                                </svg> Cupom <span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="2 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">2</span></span> OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rasj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_882829-MLU78389491823_082024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smart-tv-samsung-55-crystal-uhd-4k-55du8000-2024/p/MLB35479919?pdp_filters=item_id%3AMLB4605187288#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=28&amp;wid=MLB4605187288&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv Samsung 55 Crystal Uhd 4k
                                        55du8000 2024</a><span class="poly-component__seller">Por Samsung <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 5846 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">5.846</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="2659 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">2.659</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">54% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="2799 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">2.799</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="279 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">279</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__rebates">
                                        <div class="poly-rebates__wrapper"><span class="poly-rebates__pill">5% OFF Saldo
                                                no Mercado Pago</span></div>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ratj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_608050-MLU77315438809_062024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/cooktop-a-gas-itatiaia-preto-5-bocas-essencial-bivolt-127v220v-620ct50153/p/MLB23997577?pdp_filters=item_id%3AMLB3975580803#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=29&amp;wid=MLB3975580803&amp;sid=offers"
                                        target="_self" class="poly-component__title">Cooktop A Gás Itatiaia Preto 5
                                        Bocas Essencial Bivolt 127v/220v 620ct50153</a>
                                    <div class="poly-component__price">
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="634 reales con 12 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">634</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">12</span></span></div><span
                                            style="color:#000000e6" class="poly-price__installments"><span
                                                class="poly-phrase-label">em</span> 12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="61 reales con 21 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">61</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">21</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rauj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_797624-MLU77183763308_072024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/console-sony-playstation-5-digital-slim-1tb-branco-jogos-returnal-e-ratchet-clank-controle-sem-fio-dualsense-branco/p/MLB37494438?pdp_filters=item_id%3AMLB5283889284#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=30&amp;wid=MLB5283889284&amp;sid=offers"
                                        target="_self" class="poly-component__title">Console Sony Playstation 5 Digital
                                        Slim 1tb Branco + Jogos Returnal E Ratchet &amp; Clank + Controle Sem Fio
                                        Dualsense Branco</a><span class="poly-component__seller">Por Webfones <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 4999 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">4.999</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="3497 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">3.497</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">30%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="349 reales con 70 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">349</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">70</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Ravj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_705485-MLB78404993279_082024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3624497213-kit-12-cuecas-boxer-masculina-sem-costura-microfibra-reebok-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=31"
                                        target="_self" class="poly-component__title">Kit 12 Cuecas Boxer Masculina Sem
                                        Costura Microfibra Reebok</a><span class="poly-component__seller">Por Usee
                                        Brasil <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 239 reales con 80 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">239</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">80</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="119 reales con 99 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">119</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">99</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">49%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 3x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img" aria-label="40 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">40</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb0j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_925482-MLA81822892666_012025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smartphone-motorola-moto-g34-5g-128gb-8gb-4gb-ram4gb-ram-boost-ai-camera-50mp-nfc-preto/p/MLB29736241?pdp_filters=item_id%3AMLB4433686558#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=32&amp;wid=MLB4433686558&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smartphone Motorola Moto G34 5g -
                                        128gb 8gb (4gb Ram+4gb Ram Boost) Ai Camera 50mp Nfc - Preto</a><span
                                        class="poly-component__seller">Por Motorola <svg aria-label="Loja oficial"
                                            width="12" height="12" viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1399 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.399</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="816 reales con 05 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">816</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">05</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">41% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="859 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">859</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="85 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">85</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__rebates">
                                        <div class="poly-rebates__wrapper"><span class="poly-rebates__pill">5% OFF Saldo
                                                no Mercado Pago</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb1j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_767082-MLB78213456668_082024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-3565527910-kit-2cmera-ip-icsee-prova-dagua-infravermelho-externa-wifi-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=33"
                                        target="_self" class="poly-component__title">Kit 2câmera Ip Icsee Prova D'água
                                        Infravermelho Externa Wifi</a><span class="poly-component__seller">Por PS
                                        Imports <svg aria-label="Loja oficial" width="12" height="12"
                                            viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 339 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">339</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="203 reales con 40 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">203</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">40</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="19 reales con 94 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">19</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">94</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span class="poly-shipping--next_day">Chegará
                                            grátis amanhã</span></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb2j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_629848-MLB70767320080_072023-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-1016176283-combo-duplo-whey-fusion-2x-bcaa-2x-creatina-shaker-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=34"
                                        target="_self" class="poly-component__title">Combo Duplo Whey Fusion + 2x Bcaa +
                                        2x Creatina + Shaker</a><span class="poly-component__seller">Por Espartanos
                                        Oficial <svg aria-label="Loja oficial" width="12" height="12"
                                            viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 179 reales con 90 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">179</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">90</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="139 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">139</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">90</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">22%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 4x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="34 reales con 98 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">34</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">98</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__coupons">
                                        <div class="poly-coupons__wrapper"><span class="poly-coupons__pill"><svg
                                                    aria-label="Cupom" class="poly-coupons__icon" width="13" height="11"
                                                    viewBox="0 0 13 11" role="img">
                                                    <use href="#poly_coupon"></use>
                                                </svg> Cupom 5% OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb3j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_945720-MLU73871363382_012024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smart-tv-samsung-un43t5300-43-full-hd/p/MLB15796379?pdp_filters=item_id%3AMLB5264387392#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=35&amp;wid=MLB5264387392&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv Samsung Un43t5300 43 Full
                                        Hd</a><span class="poly-component__seller">Por Vikings <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 2998 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">2.998</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1799 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.799</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="179 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">179</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb4j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_774768-MLB82367315033_022025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-5282514866-ventilador-de-cho-3-velocidades-coluna-ajustavel-eco-turbo-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=36"
                                        target="_self" class="poly-component__title">Ventilador De Chão 3 Velocidades
                                        Coluna Ajustável Eco Turbo</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 239 reales con 61 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">239</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">61</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="170 reales con 12 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">170</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">12</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">29%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="16 reales con 68 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">16</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">68</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb5j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_829603-MLU75230591366_032024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/impressora-multifuncional-cor-hp-multifuncional-deskjet-ink-advantage-2874-127220v/p/MLB34923702?pdp_filters=item_id%3AMLB3974743165#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=37&amp;wid=MLB3974743165&amp;sid=offers"
                                        target="_self" class="poly-component__title">Impressora Multifuncional Cor Hp
                                        Multifuncional Deskjet Ink Advantage 2874 127/220v</a><span
                                        class="poly-component__seller">Por Mega Mamute <svg aria-label="Loja oficial"
                                            width="12" height="12" viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 665 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">665</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="399 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">399</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">40%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 7x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img" aria-label="57 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">57</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb6j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_997572-MLA79863727184_102024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smartphone-moto-g85-5g-256gb-16gb-ram-boost-50mp-sony-ai-camera-tela-infinita-poled-nfc-grafite/p/MLB38621319?pdp_filters=item_id%3AMLB3817328159#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=38&amp;wid=MLB3817328159&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smartphone Moto G85 5g - 256gb 16gb
                                        Ram Boost 50mp Sony Ai Camera Tela Infinita Poled Nfc - Grafite</a><span
                                        class="poly-component__seller">Por Motorola <svg aria-label="Loja oficial"
                                            width="12" height="12" viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 2299 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">2.299</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1529 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.529</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">33% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="1699 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">1.699</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="169 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">169</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__rebates">
                                        <div class="poly-rebates__wrapper"><span class="poly-rebates__pill">10% OFF
                                                Saldo no Mercado Pago</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb7j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_741007-MLB81754603267_012025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#BA0095"
                                        class="poly-component__highlight">OFERTA RELÂMPAGO</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-1812088724-kit-12-cuecas-masculinas-boxer-polo-wear-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=39"
                                        target="_self" class="poly-component__title">Kit 12 Cuecas Masculinas Boxer Polo
                                        Wear</a><span class="poly-component__seller">Por Polo Wear <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price">
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="129 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">129</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">90</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">3%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="12 reales con 73 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">12</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">73</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb8j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_776795-MLU77113382332_062024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/fogo-cooktop-fischer-5-queimadores-tc-infinity-gas-mesa-inox-bivolt/p/MLB11467740?pdp_filters=item_id%3AMLB3095225697#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=40&amp;wid=MLB3095225697&amp;sid=offers"
                                        target="_self" class="poly-component__title">Fogão Cooktop Fischer 5 Queimadores
                                        Tc Infinity Gás Mesa Inox Bivolt</a><span class="poly-component__seller">Por
                                        2Eletro <svg aria-label="Loja oficial" width="12" height="12"
                                            viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price">
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1899 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.899</span></span></div><span
                                            style="color:#00a650" class="poly-price__installments"><span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="189 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">189</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rb9j7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_807543-MLA82434515801_022025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smart-tv-43-philco-led-roku-tv-dolby-audio-ptv43va4regb/p/MLB43943869?pdp_filters=item_id%3AMLB3966368759#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=41&amp;wid=MLB3966368759&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv 43 Philco Led Roku Tv
                                        Dolby Audio Ptv43va4regb</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 2999 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">2.999</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1589 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.589</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">47%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="158 reales con 95 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">158</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">95</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__coupons">
                                        <div class="poly-coupons__wrapper"><span class="poly-coupons__pill"><svg
                                                    aria-label="Cupom" class="poly-coupons__icon" width="13" height="11"
                                                    viewBox="0 0 13 11" role="img">
                                                    <use href="#poly_coupon"></use>
                                                </svg> Cupom 5% OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbaj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_755123-MLB80224540744_112024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><a
                                        href="https://produto.mercadolivre.com.br/MLB-4780423714-tnis-casual-masculino-advantage-base-20-adidas-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=42"
                                        target="_self" class="poly-component__title">Tênis Casual Masculino Advantage
                                        Base 2.0 adidas</a><span class="poly-component__seller">Por adidas <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 299 reales con 99 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">299</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">99</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="210 reales con 52 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">210</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">52</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">29%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="20 reales con 64 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">20</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">64</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbbj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_938589-MLU74143252617_012024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/purificador-de-agua-gelada-fria-e-natural-eletrnico-placa-compacto-electrolux-pe12g-com-filtro-carvo-6-meses-ou-3000l-painel-touch-cinza-bivolt/p/MLB24804661?pdp_filters=item_id%3AMLB4780018962#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=43&amp;wid=MLB4780018962&amp;sid=offers"
                                        target="_self" class="poly-component__title">Purificador De Água Gelada Fria E
                                        Natural Eletrônico Placa Compacto Electrolux Pe12g Com Filtro Carvão 6 Meses Ou
                                        3000l Painel Touch Cinza Bivolt</a><span class="poly-component__seller">Por
                                        2Eletro <svg aria-label="Loja oficial" width="12" height="12"
                                            viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 899 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">899</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="648 reales con 96 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">648</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">96</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">27%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="62 reales con 65 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">62</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">65</span></span></span>
                                    </div>
                                    <div class="poly-component__coupons">
                                        <div class="poly-coupons__wrapper"><span class="poly-coupons__pill"><svg
                                                    aria-label="Cupom" class="poly-coupons__icon" width="13" height="11"
                                                    viewBox="0 0 13 11" role="img">
                                                    <use href="#poly_coupon"></use>
                                                </svg> Cupom 10% OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbcj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_959973-MLA80053831640_102024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/smartphone-motorola-moto-g34-5g-128gb-8gb-4gb-ram4gb-ram-boost-ai-camera-50mp-nfc-azul/p/MLB29736240?pdp_filters=item_id%3AMLB4433635074#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=44&amp;wid=MLB4433635074&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smartphone Motorola Moto G34 5g -
                                        128gb 8gb (4gb Ram+4gb Ram Boost) Ai Camera 50mp Nfc - Azul</a><span
                                        class="poly-component__seller">Por Motorola <svg aria-label="Loja oficial"
                                            width="12" height="12" viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1399 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.399</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img"
                                                aria-label="816 reales con 05 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">816</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">05</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">41% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="859 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">859</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="85 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">85</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__rebates">
                                        <div class="poly-rebates__wrapper"><span class="poly-rebates__pill">5% OFF Saldo
                                                no Mercado Pago</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbdj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_675975-MLU73992711646_012024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/gazebo-dobravel-mor-3x3-articulado-x-flex-3m-x-3m-x-25m-azul/p/MLB29077386?pdp_filters=item_id%3AMLB5246601452#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=45&amp;wid=MLB5246601452&amp;sid=offers"
                                        target="_self" class="poly-component__title">Gazebo Dobrável Mor 3x3 Articulado
                                        X-flex 3m X 3m X 2.5m - Azul</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 650 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">650</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="546 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">546</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">16%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="54 reales con 60 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">54</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">60</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbej7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_713249-MLA72428771637_102023-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/maquina-de-lavar-bwk13ab-13kg-branca-brastemp-cor-branco-110v/p/MLB27592682?pdp_filters=item_id%3AMLB5177698130#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=46&amp;wid=MLB5177698130&amp;sid=offers"
                                        target="_self" class="poly-component__title">Máquina De Lavar Bwk13ab 13kg
                                        Branca Brastemp Cor Branco 110v</a><span class="poly-component__seller">Por Mega
                                        Mamute <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 3048 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">3.048</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1925 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.925</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">36%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="192 reales con 50 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">192</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">50</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbfj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_948279-MLU73960922955_012024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/tablet-samsung-galaxy-tab-a9-wi-fi-64gb-4gb-ram-tela-11-grafite-sm-x210nzaazto/p/MLB29687357?pdp_filters=item_id%3AMLB3957870693#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=47&amp;wid=MLB3957870693&amp;sid=offers"
                                        target="_self" class="poly-component__title">Tablet Samsung Galaxy Tab A9+ Wi-fi
                                        64gb 4gb Ram Tela 11 Grafite - Sm-x210nzaazto</a>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 1599 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">1.599</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="1279 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">1.279</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">20%
                                                OFF</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="127 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">127</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__shipping"><span>Frete grátis</span><svg
                                            aria-label="Enviado pelo FULL" class="poly-shipping__promise-icon--full"
                                            width="41" height="13" viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbgj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_726833-MLU77492684902_072024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/creatina-monohidratada-pura-500g-dark-lab-unidade/p/MLB26796581?pdp_filters=item_id%3AMLB4812143184#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=48&amp;wid=MLB4812143184&amp;sid=offers"
                                        target="_self" class="poly-component__title">Creatina Monohidratada Pura 500g
                                        Dark Lab Unidade</a><span class="poly-component__seller">Por Dark Lab <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 93 reales con 62 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">93</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">62</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="72 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">72</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">90</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">22%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="7 reales con 15 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">7</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">15</span></span></span>
                                    </div>
                                    <div class="poly-component__coupons">
                                        <div class="poly-coupons__wrapper"><span class="poly-coupons__pill"><svg
                                                    aria-label="Cupom" class="poly-coupons__icon" width="13" height="11"
                                                    viewBox="0 0 13 11" role="img">
                                                    <use href="#poly_coupon"></use>
                                                </svg> Cupom <span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="20 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">20</span></span> OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping"><svg aria-label="Enviado pelo FULL"
                                            class="poly-shipping__promise-icon--full" width="41" height="13"
                                            viewBox="0 0 41 13" role="img">
                                            <use href="#poly_full"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbhj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_784623-MLU77107728782_062024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#FF7733"
                                        class="poly-component__highlight">MAIS VENDIDO</span><a
                                        href="https://www.mercadolivre.com.br/ventilador-de-teto-silencioso-de-3-modos-com-lmpada-controle-branco/p/MLB32379892?pdp_filters=item_id%3AMLB5295291950#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=49&amp;wid=MLB5295291950&amp;sid=offers"
                                        target="_self" class="poly-component__title">Ventilador De Teto Silencioso De 3
                                        Modos Com Lâmpada Controle Branco</a><span class="poly-component__seller">Por PS
                                        Imports <svg aria-label="Loja oficial" width="12" height="12"
                                            viewBox="0 0 12 12" role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 199 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">199</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="71 reales con 64 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">71</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">64</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">64%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="7 reales con 02 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">7</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">02</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span class="poly-shipping--next_day">Chegará
                                            amanhã</span></div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbij7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_936699-MLU78162026252_082024-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#BA0095"
                                        class="poly-component__highlight">OFERTA RELÂMPAGO</span><a
                                        href="https://www.mercadolivre.com.br/smart-tv-75-crystal-uhd-4k-75du8000-2024-samsung/p/MLB35715122?pdp_filters=item_id%3AMLB3670240997#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=50&amp;wid=MLB3670240997&amp;sid=offers"
                                        target="_self" class="poly-component__title">Smart Tv 75'' Crystal Uhd 4k
                                        75du8000 2024 Samsung</a><span class="poly-component__seller">Por Samsung <svg
                                            aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img" aria-label="Antes: 11110 reales"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">11.110</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="5157 reales"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">5.157</span></span><span
                                                class="andes-money-amount__discount poly-price__disc_label">53% OFF no
                                                Pix</span></div><span style="color:#00a650"
                                            class="poly-price__installments"><span style="color:#000000e6"
                                                class="poly-phrase-label">ou</span> <span style="color:#000000e6"><span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="5429 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">5.429</span></span></span> <span
                                                style="color:#000000e6" class="poly-phrase-label">em</span> 10x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="542 reales con 90 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">542</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">90</span></span> sem juros</span>
                                    </div>
                                    <div class="poly-component__rebates">
                                        <div class="poly-rebates__wrapper"><span class="poly-rebates__pill">5% OFF Saldo
                                                no Mercado Pago</span></div>
                                    </div>
                                    <div class="poly-component__coupons">
                                        <div class="poly-coupons__wrapper"><span class="poly-coupons__pill"><svg
                                                    aria-label="Cupom" class="poly-coupons__icon" width="13" height="11"
                                                    viewBox="0 0 13 11" role="img">
                                                    <use href="#poly_coupon"></use>
                                                </svg> Cupom <span
                                                    class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                    style="font-size:inherit" role="img" aria-label="500 reales"
                                                    aria-roledescription="Monto"><span
                                                        class="andes-money-amount__currency-symbol"
                                                        aria-hidden="true">R$</span><span
                                                        class="andes-money-amount__fraction"
                                                        aria-hidden="true">500</span></span> OFF</span></div>
                                    </div>
                                    <div class="poly-component__shipping">Frete grátis</div>
                                </div>
                            </div>
                            <div class="andes-card poly-card poly-card--grid-card andes-card--flat andes-card--padding-0 andes-card--animated"
                                id=":Rbjj7:">
                                <div class="poly-card__portada"><img width="150" height="150" decoding="async"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                        class="poly-component__picture lazy-loadable"
                                        data-src="https://http2.mlstatic.com/D_Q_NP_2X_881905-MLB82136514727_012025-AB.webp"
                                        alt=""></div>
                                <div class="poly-card__content"><span style="color:#FFFFFF;background-color:#3483FA"
                                        class="poly-component__highlight">OFERTA DO DIA</span><a
                                        href="https://produto.mercadolivre.com.br/MLB-5173616898-kit-6-pares-de-meias-puma-cano-medio-sport-original-lisa-_JM#polycard_client=offers&amp;deal_print_id=357cdb13-eed9-4340-840c-ee362f8c5f87&amp;position=51"
                                        target="_self" class="poly-component__title">Kit 6 Pares De Meias Puma Cano
                                        Médio Sport Original Lisa</a><span class="poly-component__seller">Por Decco Moda
                                        Intima <svg aria-label="Loja oficial" width="12" height="12" viewBox="0 0 12 12"
                                            role="img">
                                            <use href="#poly_cockade"></use>
                                        </svg></span>
                                    <div class="poly-component__price"><s
                                            class="andes-money-amount andes-money-amount--previous andes-money-amount--cents-comma"
                                            style="font-size:12px" role="img"
                                            aria-label="Antes: 116 reales con 18 centavos"
                                            aria-roledescription="Monto"><span
                                                class="andes-money-amount__currency-symbol"
                                                aria-hidden="true">R$</span><span class="andes-money-amount__fraction"
                                                aria-hidden="true">116</span><span aria-hidden="true">,</span><span
                                                class="andes-money-amount__cents" aria-hidden="true">18</span></s>
                                        <div class="poly-price__current"><span
                                                class="andes-money-amount andes-money-amount--cents-superscript"
                                                style="font-size:24px" role="img" aria-label="57 reales con 47 centavos"
                                                aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">57</span><span class="andes-visually-hidden"
                                                    aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents andes-money-amount__cents--superscript-24"
                                                    style="font-size:12px;margin-top:4px"
                                                    aria-hidden="true">47</span></span><span
                                                class="andes-money-amount__discount" style="font-size:14px">50%
                                                OFF</span></div><span style="color:#000000e6"
                                            class="poly-price__installments"><span class="poly-phrase-label">em</span>
                                            12x <span
                                                class="andes-money-amount poly-phrase-price andes-money-amount--cents-comma"
                                                style="font-size:inherit" role="img"
                                                aria-label="5 reales con 63 centavos" aria-roledescription="Monto"><span
                                                    class="andes-money-amount__currency-symbol"
                                                    aria-hidden="true">R$</span><span
                                                    class="andes-money-amount__fraction"
                                                    aria-hidden="true">5</span><span aria-hidden="true">,</span><span
                                                    class="andes-money-amount__cents"
                                                    aria-hidden="true">63</span></span></span>
                                    </div>
                                    <div class="poly-component__shipping"><span class="poly-shipping--next_day">Chegará
                                            amanhã</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Paginación">
                        <ul class="andes-pagination andes-pagination--large">
                            <li
                                class="andes-pagination__button andes-pagination__button--back andes-pagination__button--disabled">
                                <a href="https://www.mercadolivre.com.br/ofertas?page=0" class="andes-pagination__link"
                                    title="Anterior"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 20 20"
                                        fill="rgba(0, 0, 0, 0.9)">
                                        <path
                                            d="M12.6287 5.19496L7.83304 9.99059L12.6337 14.7912L11.7851 15.6397L6.13599 9.99059L11.7801 4.34644L12.6287 5.19496Z"
                                            fill="rgba(0, 0, 0, 0.9)"></path>
                                    </svg><span class="andes-pagination__arrow-title">Anterior</span></a></li>
                            <li class="andes-pagination__button andes-pagination__button--current"><a
                                    aria-current="page" href="https://www.mercadolivre.com.br/ofertas?page=1"
                                    class="andes-pagination__link" aria-label="Ir a la página 1">1</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=2" class="andes-pagination__link"
                                    aria-label="Ir a la página 2">2</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=3" class="andes-pagination__link"
                                    aria-label="Ir a la página 3">3</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=4" class="andes-pagination__link"
                                    aria-label="Ir a la página 4">4</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=5" class="andes-pagination__link"
                                    aria-label="Ir a la página 5">5</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=6" class="andes-pagination__link"
                                    aria-label="Ir a la página 6">6</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=7" class="andes-pagination__link"
                                    aria-label="Ir a la página 7">7</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=8" class="andes-pagination__link"
                                    aria-label="Ir a la página 8">8</a></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=9" class="andes-pagination__link"
                                    aria-label="Ir a la página 9">9</a></li>
                            <li aria-hidden="true" class="andes-pagination__button andes-pagination__dots"><i
                                    class="andes-pagination__dot"></i><i class="andes-pagination__dot"></i><i
                                    class="andes-pagination__dot"></i></li>
                            <li class="andes-pagination__button"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=20"
                                    class="andes-pagination__link" aria-label="Ir a la página 20">20</a></li>
                            <li class="andes-pagination__button andes-pagination__button--next"><a
                                    href="https://www.mercadolivre.com.br/ofertas?page=2" class="andes-pagination__link"
                                    title="Siguiente"><span class="andes-pagination__arrow-title">Siguiente</span><svg
                                        aria-hidden="true" width="20" height="20" viewBox="0 0 20 20"
                                        fill="rgba(0, 0, 0, 0.9)">
                                        <path
                                            d="M8.27686 4.34644L7.42834 5.19496L12.224 9.99059L7.42334 14.7912L8.27187 15.6397L13.921 9.99059L8.27686 4.34644Z"
                                            fill="rgba(0, 0, 0, 0.9)"></path>
                                    </svg></a></li>
                        </ul>
                    </nav>
                </div>
