<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/layout.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Poppins:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    @yield('css')
    <script src="/js/layout.js" defer></script>
    @yield('js')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>MIA</h1>
        <nav>
            <div id="menu-button" onclick="toggleMenuMobile()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul id="menu-list">
                <li><a href="/" id="home">Home</a></li>
                <li><a href="/doces" id="doces">Doces</a></li>
                <li><a href="/sobre" id="sobre">Sobre</a></li>
                <li><a href="/contato" id="contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© MatheusRamosDeLima 2023</p>
    </footer>
    <div id="dark-background" onclick="disableMenuMobile()"></div>
</body>
</html>