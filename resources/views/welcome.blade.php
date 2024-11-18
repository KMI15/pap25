<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background-color: #ff6347;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Restaurante</h1>
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#footer">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Nossas Especialidades</h2>
            <p>Descubra os pratos deliciosos que temos para oferecer. Venha experimentar um sabor único!</p>
        </section>

        <section id="menu">
            <h2>Nossos Pratos</h2>
            <ul>
                <li>Pizza - 15</li>
                <li>Lasanha -  12</li>
                <li>Francesinha - 10</li>
            </ul>
        </section>
    </main>

    <footer id="footer">
        <div class="container">
            <p>&copy; 2024 Restaurante . Todos os direitos reservados.</p>
            <p>Contato: <a href="mailto:contato@restaurante.com" style="color: white;">contato@restaurante.com</a></p>
        </div>
    </footer>
</body>
</html>