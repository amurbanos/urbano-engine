<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Scraper - Documentação</title>
    <style>
        /* Cores baseadas no Filament */
        :root {
            --primary-color: #D97706; /* Laranja do botão */
            --primary-hover: #B45309; /* Laranja mais escuro */
            --background-gradient: linear-gradient(to bottom, #FFF7ED, #FFFFFF);
            --text-color: #374151; /* Cinza escuro */
            --card-bg: #ffffff; /* Branco */
            --border-color: #E5E7EB; /* Cinza claro */
            --button-text: #ffffff; /* Texto dos botões */
        }

        /* Reset e estilos gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: var(--background-gradient);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        /* Cabeçalho */
        header {
            background: var(--primary-color);
            color: var(--button-text);
            text-align: center;
            padding: 20px;
            font-size: 26px;
            font-weight: bold;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 900px;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px;
        }

        /* Títulos */
        h1, h2 {
            color: var(--text-color);
            margin-bottom: 15px;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
        }

        ul {
            padding-left: 20px;
            margin-bottom: 20px;
            text-align: left;
        }

        li {
            margin-bottom: 8px;
        }

        /* Botão de Login */
        .button {
            display: block;
            text-align: center;
            width: 100%;
            max-width: 300px;
            padding: 12px;
            font-size: 18px;
            color: var(--button-text);
            background-color: var(--primary-color);
            text-decoration: none;
            border-radius: 5px;
            margin: 20px auto;
            font-weight: bold;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: var(--primary-hover);
        }

        /* Seções */
        .section {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border-color);
            text-align: left;
        }

        /* Links úteis */
        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            color: var(--button-text);
            background: var(--primary-color);
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .links a:hover {
            background: var(--primary-hover);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }
            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

    <header>
        Ecommerce Scraper - Extração e Monitoramento de Produtos 🛍️
    </header>

    <div class="container">
        <h1>Bem-vindo ao Ecommerce Scraper</h1>
        <p><strong>Ecommerce Scraper</strong> é um sistema automatizado para capturar e exibir produtos do <strong>Mercado Livre</strong>. Ele permite a extração de produtos de forma eficiente, armazenando e processando os dados automaticamente.</p>

        <div class="section">
            <h2>🚀 Funcionalidades do Sistema</h2>
            <ul>
                <li>📌 Scraper inteligente para capturar produtos automaticamente.</li>
                <li>🛒 Armazena informações de preço, imagem, desconto, vendedor, etc.</li>
                <li>📊 Painel administrativo com filtros avançados.</li>
                <li>⏳ Sincronização manual e automática via fila de processamento.</li>
                <li>🔔 Notificações via banco de dados e e-mail.</li>
            </ul>
        </div>

        <div class="section">
            <h2>🛠 Ferramentas Auxiliares</h2>
            <ul>
                <li><strong>📡 Laravel Telescope</strong> - Monitoramento e debug: <a href="http://localhost:8000/telescope" target="_blank">Acesse aqui</a>.</li>
                <li><strong>📧 MailHog</strong> - Testes de e-mail: <a href="http://localhost:8025" target="_blank">Acesse aqui</a>.</li>
                <li><strong>🔗 Filas de Processamento</strong> - Executado com Redis e Laravel Queues.</li>
            </ul>
        </div>

        <div class="section">
            <h2>📌 Como Acessar o Sistema</h2>
            <p><strong>URL:</strong> <a href="http://localhost:8000/admin" target="_blank">http://localhost:8000/admin</a></p>
            <p><strong>Usuário:</strong> admin@gmail.com</p>
            <p><strong>Senha:</strong> 123456789</p>

            <button class="button" onclick="window.location.href='http://localhost:8000/admin'">🔑 Fazer Login no Painel</button>
        </div>

        <div class="footer">
            <p>© 2025 - Ecommerce Scraper 🚀</p>
        </div>
    </div>

</body>
</html>
