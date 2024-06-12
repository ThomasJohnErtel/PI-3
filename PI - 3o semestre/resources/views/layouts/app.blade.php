<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /*Header*/
        .bold {
            font-weight: bold;
        }

        .logo {
            width: 30%;
        }

        #header {
            background-color: #eeeeee;
            padding: 10px;
            margin-right: 0;
            margin-left: 0;
        }

        .navbar-itens {
            padding-left: 20px;
            padding-right: 20px;
        }

        .login-cadastro,
        a:hover {
            color: aqua;
        }

        .centralize {
            align-items: center;
            text-align: center;
            justify-content: center;
            width: 100%;
        }

        .menu-itens {
            box-sizing: border-box;
        }

        #searchbar {
            width: 140%;
        }

        .header-text {
            font-size: 19px;
        }

        .dropdown {
            list-style-type: none;
        }

        .float-left {
            color: #ff711e;
            float: left;
            width: 23px;
            height: 23px;
            margin-left: 15%;
            margin-right: 3%;
            margin-top: 13px;
        }

        .col {
            margin-right: 6%;
        }

        .row-width {
            width: 100%;

            align-items: center;
            text-align: center;
            justify-content: center;
        }

        #cart {
            color: #ff711e;
            width: 45px;
            height: auto;
            padding: 5px;
            background-color: #e0e0e0;
            border: 2px solid #cccccc;
            border-radius: 25%;
        }

        .info-destaque {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(107, 107, 107);
        }

        .info-texto {
            margin: 5px;
            color: white;
        }

        #cabecalho {
            background-color: whitesmoke;
        }

        .home-img {
            width: 100%;
            height: 400px;
            padding: 0px;
        }

        /*Navbar de destaque: Parcelamento, frete etc.*/
        #navbarNav {
            height: 100px;
        }

        .h2,
        h2 {
            margin: 20px;
        }

        .nav-item {
            text-align: center;
        }

        nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70%;
            height: 40px;
            margin: 0px 0px 0px 250px;
        }

        li {
            flex-grow: 1;
        }

        /*Configuração de todos os Cards*/
        .card {
            border-radius: 10px;
            margin: 20px;
            width: 280px;
            /* Defina a largura desejada para os cards */
            height: 780px;
            /* Defina a altura desejada para os cards */
            background-color: rgba(245, 245, 245, 0.445);
        }

        .card-img-top {
            width: 60%;
            height: 200px;
            /* Defina a altura desejada para a imagem */
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 16px 58px;
        }

        .row-fluid,
        .titulo-categoria,
        .h2 {
            text-align: center;
        }

        .list-grouplist-group-flush {
            text-align: center;
        }

        button {
            width: 160px;
            height: auto;
            border-radius: 10px;
            background-color: #ff711e;
            color: white;
        }

        button,
        a {
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 9px;
        }

        button:hover {
            background-color: #43adda;
        }

        .destaque {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-depoimento {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /*Div com componentes da avaliação dos usuários.*/
        #secao-avaliacao {
            background-color: #43adda;
            width: 100%;
            height: auto;
            margin: 20px 0px 30px 0px;
        }

        /*Seção de avaliação, arrendondar bordas.*/
        div#secao-avaliacao {
            border-radius: 10px;
        }

        /*h2-avaliacao*/

        #secao-avaliacao,
        .titulo-categoria,
        #h2-avaliacao {
            text-align: center;
            margin-top: 60px;
        }

        /**/
        #h2-avaliacao {
            color: white;
            padding-top: 20px;
        }

        /*Card de depoimentos*/
        .card-depoimentos {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: auto;
            padding-bottom: 20px;
            border-radius: 10px;
        }

        /*1°Depoimento*/
        #depoimento1 {
            background-color: white;
            text-align: justify;
            width: 280px;
            height: 150px;
            margin: 10px;
            border-radius: 10px;
        }

        /*dp-nome1 - Seletor do nome do card de depoimentos 1*/
        .dep-nome1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        /*dep-estrelas1*/
        .dep-estrelas1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            margin-left: 100px;
        }

        /*2°Depoimento*/
        #depoimento2 {
            background-color: white;
            text-align: justify;
            width: 280px;
            height: 150px;
            border-radius: 10px;
        }

        /*dp-nome2 - Seletor do nome do card de depoimentos 1*/
        .dep-nome2 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: -28px;
            margin-left: 10px;
            margin-bottom: 2px;
        }

        /*dep-estrelas2*/
        .dep-estrelas2 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            margin-left: 100px;
        }

        /*3°Depoimento - Seletor do card inteiro do 3°Depoimento*/
        #depoimento3 {
            background-color: white;
            text-align: justify;
            width: 280px;
            height: 150px;
            margin: 10px;
            border-radius: 10px;
        }

        /*.dep-nome3 - Seletor do nome do card de depoimentos 3*/
        .dep-nome3 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: -28px;
            margin-left: 10px;
            margin-bottom: 2px;
        }

        /*dep-estrelas3*/
        .dep-estrelas3 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            margin-left: 100px;
        }

        /*4°Depoimento - Seletor do card inteiro do 4°Depoimento*/
        #depoimento4 {
            background-color: white;
            text-align: center;
            width: 280px;
            height: 150px;
            padding: 10px;
            border-radius: 10px;
        }

        /*dp-nome4*/
        #dp-nome4 {
            text-align: center;
            margin-top: 40px;
            margin-left: 20px;
            margin-bottom: 0px;
        }

        .dep-msg {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 10px;
            margin-bottom: 30px;
        }

        .dep-nome {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 85%;
        }

        #botao-confirm {
            width: 200px;
            height: auto;
        }

        /*Footer*/
        footer {
            background-color: whitesmoke;
            color: #131111;
            margin-top: 10px;
            border-radius: 10px;
        }

        .footer-home {
            width: 100%;
            height: 180px;
            text-align: center;
        }

        /*Informações do footer*/
        .footer-info {
            list-style-type: none;
            text-align: center;
        }

        /*Direitos Autorais*/
        .direitos-autor {
            padding-top: 10px;
            padding-bottom: 20px;
        }

        /*Responsividade da tela home.*/
        @media screen and(max-width: 1169px) {
            .card-depoimentos {
                width: auto;
                height: auto;
            }

            #depoimento1 {
                flex-direction: column;
                width: auto;
                height: 110vh;
                margin: 0;
                padding: 0;
            }

            #depoimento2 {
                flex-direction: column;
                width: auto;
                height: 110vh;
                margin: 0;
                padding: 0;
            }

            #depoimento3 {
                flex-direction: column;
                width: auto;
                height: 110vh;
                margin: 0;
                padding: 0;
            }

            #depoimento4 {
                flex-direction: column;
                width: 100px;
                height: 110vh;
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
            <!--Cards de Avaliação-->
            <div class="row-fluid" id="secao-avaliacao">
                <div class="titulo-categoria">
                    <h2 class="h2" id="h2-avaliacao">Quem já comprou e recomenda</h2>
                </div>
                <!--Depoimentos-->
                <div class="card-depoimentos">
                    <!--1°Depoimento-->
                    <div class="depoimento" id="depoimento1">
                        <!--Div com div's de depoimento-->
                        <div class="dep-msg">
                            <span>
                                <i class="fa fa-quote-left"></i>
                                "O produto chegou perfeitamente."
                                <i class="fa fa-quote-right"></i>
                            </span>
                        </div>
                        <div class="dep-content">
                            <span class="dep-nome1">Pedro Henrique</span>
                            <!--Estrelas-->
                            <img src="https://cdn.awsli.com.br/1781/1781687/arquivos/estrelas.png" class="dep-estrelas1">
                        </div>
                    </div>
                    <!--2°Depoimento-->
                    <div class="depoimento" id="depoimento2">
                        <div class="dep-msg">
                            <span>
                                <i class="fa fa-quote-left"></i>
                                "Amei os blocos educativos! Ótimos para o desenvolvimento do meu filho."
                                <i class="fa fa-quote-right"></i>
                            </span>
                        </div>
                        <div class="dep-content">
                            <span class="dep-nome2">Ana Beatriz Carvalho</span>
                            <!--Estrelas-->
                            <img src="https://cdn.awsli.com.br/1781/1781687/arquivos/estrelas.png" class="dep-estrelas2">
                        </div>
                    </div>
                    <!--3°Depoimento-->
                    <div class="depoimento" id="depoimento3">
                        <div class="dep-msg">
                            <span>
                                <i class="fa fa-quote-left"></i>
                                "Variedade fantástica de brinquedos educativos. Perfeitos para meus alunos."
                                <i class="fa fa-quote-right"></i>
                            </span>
                        </div>
                        <div class="dep-content">
                            <span class="dep-nome3">Juliana Martins</span>
                            <!--Estrelas-->
                            <img src="https://cdn.awsli.com.br/1781/1781687/arquivos/estrelas.png" class="dep-estrelas3">
                        </div>
                    </div>
                    <!--4°Depoimento-->
                    <div class="depoimento" id="depoimento4">
                        <div class="msg-depoimento">
                            <span class="text-dp4">
                                <i class="fa fa-quote-left"></i>
                                "Excelente qualidade e preço justo. Super recomendo!"
                                <i class="fa fa-quote-right"></i>
                            </span>
                        </div>
                        <div class="dep-content">
                            <span class="dep-nome" id="dp-nome4">Marcos Vinícius</span>
                            <!--Estrelas-->
                            <img src="https://cdn.awsli.com.br/1781/1781687/arquivos/estrelas.png" class="dep-estrelas">
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <!--Footer-->
        <footer class="footer-home">
            <p class="direitos-autor">&copy; 2024 - Todos os direitos reservados</p>
            <p>Entre em contato pelo e-mail: FoxBrinquedos@Pi.com</p>
            <nav>
                <ul>
                    <!--Informações do footer-->
                    <li class="footer-info"><a href="#">Termos de uso</a></li>
                    <li class="footer-info"><a href="#">Política de privacidade</a></li>
                    <li class="footer-info"><a href="#">Sobre nós</a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>

</html>