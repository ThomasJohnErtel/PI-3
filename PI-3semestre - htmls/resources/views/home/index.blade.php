<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

#svg-menu {
  color: #43adda;
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
  margin-top: 3px;
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
  width: 280px; /* Defina a largura desejada para os cards */
  height: 620px; /* Defina a altura desejada para os cards */
  background-color: rgba(245, 245, 245, 0.445);
}
.card-img-top {
  width: 60%;
  height: 200px; /* Defina a altura desejada para a imagem */
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
/*Div com componentes da avaliação.*/
#secao-avaliacao {
  background-color: #43adda;
  width: 100%;
  height: auto;
  margin: 20px 0px 30px 0px;
}
/*h2-avaliacao*/

#secao-avaliacao,
.titulo-categoria,
#h2-avaliacao {
  text-align: center;
  margin-top: 60px;
}
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

/*Área newsletter*/
.barraNewsletter {
  padding-bottom: 20px;
}

#botao-confirm {
  width: 200px;
  height: auto;
}

.input-email {
  font-family: none;
  text-align: center;
  width: 25%;
  height: auto;
  border-radius: 10px;
}

/*Footer*/
footer {
  background-color: #ffffff;
  color: #131111;
  padding: 5px;
  padding-bottom: 50px;
  text-align: center;
  margin-top: 10px;
  border: 1px solid rgb(214, 210, 210);
  border-radius: 10px;
}

.footer-home {
  width: 85vw;
  height: 180px;
  margin: 0;
  padding: 0;
  text-align: center;
  margin-bottom: 10px;
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
<body>
  <header>
    <!--Topo do site-->
    <div class="row row-width" id="header">
      <div class="col feature-box">
        <a href="home.html">
          <img src="imagens/fox.svg" alt="" class="logo">
        </a>
      </div>
      <!--Campo de busca e botão.-->
      <div class="col feature-box">
        <form class="d-flex" role="search" id="searchbar">
          <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
          <button class="btn-group" type="submit">Buscar</button>
      </div>
      <div class="col feature-box">
        <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
          <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
          <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
        </svg>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="header-text">Central de <span class="bold">Atendimento</span></span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Estamos no whatsapp! 11 9999999</a></li>
              <li><a class="dropdown-item" href="#">Email: lojafox@gmail.com</a></li>
              <li><a class="dropdown-item" href="#">Horário de atendimento: Seg a Sex de 09h às 17h</a></li>
            </ul>
          </li>
      </div>
      <div class="col feature-box">
        <svg
          class="float-left"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-person-circle"
          viewBox="0 0 16 16"
        >
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
          <path
            fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
          />
        </svg>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="login-cadastro">
              <span class="header-text"><span class="bold">Entrar</span> ou <span class="bold">Cadastrar</span></span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Minha Conta</a></li>
              <li><a class="dropdown-item" href="#">Meus Pedidos</a></li>
              <li><a class="dropdown-item" href="#">Lista de Desejos</a></li>
            </ul>
          </li>
      </div>
      <div class="col feature-box">
        <svg id="cart" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg>
      </div>
        </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary centralize bold">
      <div class="container-fluid" id="navbar">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav navbar-itens">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg id="svg-menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg> Menu
              </a>
              <ul class="dropdown-menu navbar-itens" id="navhome">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item navbar-itens">
              <a class="nav-link" href="#mais-vendidos">Mais Vendidos</a>
            </li>
            <li class="nav-item navbar-itens">
              <a class="nav-link" href="#lancamentos">Lançamentos</a>
            </li>
            <li class="nav-item dropdown navbar-itens">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Jogos
              </a>
              <ul class="dropdown-menu navbar-itens">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown navbar-itens">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Livros
              </a>
              <ul class="dropdown-menu navbar-itens">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown navbar-itens">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu navbar-itens">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown navbar-itens">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Promoções
              </a>
              <ul class="dropdown-menu navbar-itens">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    <main>
        <!--Imagem do topo da home-->
        <img class="home-img" src="./imagens/home.png" alt="Aquarela Brinquedos">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navoptions">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!--Nav Opções-->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                        <img src="" alt="">
                        <h5>Parcelamento</h5>
                        <p>Em até 6x sem juros</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="" alt="">
                        <h5>Frete Grátis</h5>
                        <p>Compras acima de R$: 99</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="" alt="">
                        <h5>Site Super Seguro</h5>
                        <p>Suas informações protegidas</p>
                    </a>
                    </li>
                    <li class="nav-item">
                        <img src="" alt="">
                        <a class="nav-link" href="#">
                            <h5>Primeira troca grátis</h5>
                            <p>Confira regras e condições</p>
                      </a>
                      </li>
               </ul>
              </div>
            </div>
            </nav>

          <div class="col-md-12 buttom-area">
            <div class="text-center button-disciplina button-border">
              <h2 class="h2" id="mais-vendidos"><strong>Mais Vendidos</strong></h2>
            </div>
            </div>

          <!--Cards-->
          <div class="container">
            <div class="row">
              <!--Card 1-->
              <div class="col-md-3">
                  <div class="card" id="card1">
                      <img src="https://brincamundo.com.br/wp-content/uploads/2023/05/barco-brinquedo-pista-carros-luz-acessorios.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Navio Lego</h5>
                          <p class="card-text">Venha comprar, só hoje em promoção imperdível. Confira!</p>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">R$ 47,53 via pix</li>
                              <li class="list-group-item"><strong>R$ 49,54</strong></li>
                              <li class="list-group-item">Até 4x de R$ 12,24</li>
                          </ul>
                          <div class="card-body">
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>Adicionar ao Carrinho</button></a>
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg> Pagar pelo whatsapp</button></a>
                          </div>
                      </div>
                  </div>
              </div>
     
              <!--Card 2-->
              <div class="col-md-3">
                <div class="card" id="card2">
                  <img src="https://images.tcdn.com.br/img/img_prod/841280/carrinhos_de_brinquedo_pequenos_metal_5_carros_sortidos_mini_704539_1_9a235d581e320319dc350f238710a0d0.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Carrinho de Brinquedo</h5>
                    <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$ 90,53  via pix</li>
                        <li class="list-group-item"><strong>R$ 49,54</strong></li>
                        <li class="list-group-item">até 4x de R$24,24</li>
                      </ul>
                      <div class="card-body">
                        <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                          <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                        </svg>Adicionar ao Carrinho</button></a>
                        <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg> Pagar pelo whatsapp</button></a>
                      </div>
                  </div>
              </div>
          </div>
                <!--Card 3-->
                <div class="col-md-3">
                  <div class="card" id="card3">
                    <img src="https://ludopia.com.br/wp-content/uploads/2022/08/Brinquedo-terapeutico-brinquedo-de-apertar-banana-ludopia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Brinquedo de aperta</h5>
                      <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">R$ 47,53  via pix</li>
                          <li class="list-group-item"><strong>R$ 49,54</strong></li>
                          <li class="list-group-item">até 4x de R$12,24</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>Adicionar ao Carrinho</button></a>
                          <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg> Pagar pelo whatsapp</button></a>
                        </div>
                    </div>
                </div>
            </div>
           
              <!--Card 4-->
                <div class="col-md-3">
                    <div class="card" id="card4">
                        <img src="https://cdn.awsli.com.br/1832/1832576/produto/90422431/e18946799a.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casa de brinquedo</h5>
            <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">R$ 47,53  via pix</li>
                <li class="list-group-item"><strong>R$ 49,54</strong></li>
                <li class="list-group-item">até 4x de R$12,24</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>Adicionar ao Carrinho</button></a>
                <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg> Pagar pelo whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                  <!--Card 5-->
                  <div class="col-md-3">
                      <div class="card" id="card5">
                          <img src="https://brincamundo.com.br/wp-content/uploads/2023/05/barco-brinquedo-pista-carros-luz-acessorios.jpeg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Navio Lego</h5>
                              <p class="card-text">Venha comprar, só hoje em promoção imperdível. Confira!</p>
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">R$ 47,53 via pix</li>
                                  <li class="list-group-item"><strong>R$ 49,54</strong></li>
                                  <li class="list-group-item">Até 4x de R$ 12,24</li>
                              </ul>
                              <div class="card-body">
                                  <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                  </svg>Adicionar ao Carrinho</button></a>
                                  <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                  </svg> Pagar pelo whatsapp</button></a>
                              </div>
                          </div>
                      </div>
                  </div>
         
                  <!--Card 6-->
                  <div class="col-md-3">
                    <div class="card" id="card6">
                      <img src="https://images.tcdn.com.br/img/img_prod/841280/carrinhos_de_brinquedo_pequenos_metal_5_carros_sortidos_mini_704539_1_9a235d581e320319dc350f238710a0d0.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Carrinho de Brinquedo</h5>
                        <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">R$ 90,53  via pix</li>
                            <li class="list-group-item"><strong>R$ 49,54</strong></li>
                            <li class="list-group-item">até 4x de R$24,24</li>
                          </ul>
                          <div class="card-body">
                            <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>Adicionar ao Carrinho</button></a>
                            <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                              <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg> Pagar pelo whatsapp</button></a>
                          </div>
                      </div>
                  </div>
              </div>
                    <!--Card 7-->
                    <div class="col-md-3">
                      <div class="card" id="card7">
                        <img src="https://ludopia.com.br/wp-content/uploads/2022/08/Brinquedo-terapeutico-brinquedo-de-apertar-banana-ludopia.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Brinquedo de aperta</h5>
                          <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">R$ 47,53  via pix</li>
                              <li class="list-group-item"><strong>R$ 49,54</strong></li>
                              <li class="list-group-item">até 4x de R$12,24</li>
                            </ul>
                            <div class="card-body">
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>Adicionar ao Carrinho</button></a>
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg> Pagar pelo whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                  <!--Card 8-->
                    <div class="col-md-3">
                        <div class="card" id="card8">
                            <img src="https://cdn.awsli.com.br/1832/1832576/produto/90422431/e18946799a.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Casa de brinquedo</h5>
                <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">R$ 47,53  via pix</li>
                    <li class="list-group-item"><strong>R$ 49,54</strong></li>
                    <li class="list-group-item">até 4x de R$12,24</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>Adicionar ao Carrinho</button></a>
                    <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg> Pagar pelo whatsapp</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
          
        <div class="col-md-12 buttom-area">
            <div class="text-center button-disciplina button-border">
              <h2 class="h2" id="lancamentos"><strong>Lançamentos</strong></h2>
            </div>
            </div>

          <!--Cards-->
          <div class="container">
            <div class="row">
              <!--Card 1-->
              <div class="col-md-3">
                  <div class="card" id="card1">
                      <img src="https://brincamundo.com.br/wp-content/uploads/2023/05/barco-brinquedo-pista-carros-luz-acessorios.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Navio Lego</h5>
                          <p class="card-text">Venha comprar, só hoje em promoção imperdível. Confira!</p>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">R$ 47,53 via pix</li>
                              <li class="list-group-item"><strong>R$ 49,54</strong></li>
                              <li class="list-group-item">Até 4x de R$ 12,24</li>
                          </ul>
                          <div class="card-body">
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>Adicionar ao Carrinho</button></a>
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg> Pagar pelo whatsapp</button></a>
                          </div>
                      </div>
                  </div>
              </div>
     
              <!--Card 2-->
              <div class="col-md-3">
                <div class="card" id="card2">
                  <img src="https://images.tcdn.com.br/img/img_prod/841280/carrinhos_de_brinquedo_pequenos_metal_5_carros_sortidos_mini_704539_1_9a235d581e320319dc350f238710a0d0.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Carrinho de Brinquedo</h5>
                    <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$ 90,53  via pix</li>
                        <li class="list-group-item"><strong>R$ 49,54</strong></li>
                        <li class="list-group-item">até 4x de R$24,24</li>
                      </ul>
                      <div class="card-body">
                        <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                          <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                        </svg>Adicionar ao Carrinho</button></a>
                        <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg> Pagar pelo whatsapp</button></a>
                      </div>
                  </div>
              </div>
          </div>
                <!--Card 3-->
                <div class="col-md-3">
                  <div class="card" id="card3">
                    <img src="https://ludopia.com.br/wp-content/uploads/2022/08/Brinquedo-terapeutico-brinquedo-de-apertar-banana-ludopia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Brinquedo de aperta</h5>
                      <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">R$ 47,53  via pix</li>
                          <li class="list-group-item"><strong>R$ 49,54</strong></li>
                          <li class="list-group-item">até 4x de R$12,24</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>Adicionar ao Carrinho</button></a>
                          <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg> Pagar pelo whatsapp</button></a>
                        </div>
                    </div>
                </div>
            </div>
           
              <!--Card 4-->
                <div class="col-md-3">
                    <div class="card" id="card4">
                        <img src="https://cdn.awsli.com.br/1832/1832576/produto/90422431/e18946799a.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casa de brinquedo</h5>
            <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">R$ 47,53  via pix</li>
                <li class="list-group-item"><strong>R$ 49,54</strong></li>
                <li class="list-group-item">até 4x de R$12,24</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>Adicionar ao Carrinho</button></a>
                <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg> Pagar pelo whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                  <!--Card 5-->
                  <div class="col-md-3">
                      <div class="card" id="card5">
                          <img src="https://brincamundo.com.br/wp-content/uploads/2023/05/barco-brinquedo-pista-carros-luz-acessorios.jpeg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Navio Lego</h5>
                              <p class="card-text">Venha comprar, só hoje em promoção imperdível. Confira!</p>
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">R$ 47,53 via pix</li>
                                  <li class="list-group-item"><strong>R$ 49,54</strong></li>
                                  <li class="list-group-item">Até 4x de R$ 12,24</li>
                              </ul>
                              <div class="card-body">
                                  <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                  </svg>Adicionar ao Carrinho</button></a>
                                  <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                  </svg> Pagar pelo whatsapp</button></a>
                              </div>
                          </div>
                      </div>
                  </div>
         
                  <!--Card 6-->
                  <div class="col-md-3">
                    <div class="card" id="card6">
                      <img src="https://images.tcdn.com.br/img/img_prod/841280/carrinhos_de_brinquedo_pequenos_metal_5_carros_sortidos_mini_704539_1_9a235d581e320319dc350f238710a0d0.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Carrinho de Brinquedo</h5>
                        <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">R$ 90,53  via pix</li>
                            <li class="list-group-item"><strong>R$ 49,54</strong></li>
                            <li class="list-group-item">até 4x de R$24,24</li>
                          </ul>
                          <div class="card-body">
                            <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>Adicionar ao Carrinho</button></a>
                            <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                              <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg> Pagar pelo whatsapp</button></a>
                          </div>
                      </div>
                  </div>
              </div>
                    <!--Card 7-->
                    <div class="col-md-3">
                      <div class="card" id="card7">
                        <img src="https://ludopia.com.br/wp-content/uploads/2022/08/Brinquedo-terapeutico-brinquedo-de-apertar-banana-ludopia.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Brinquedo de aperta</h5>
                          <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">R$ 47,53  via pix</li>
                              <li class="list-group-item"><strong>R$ 49,54</strong></li>
                              <li class="list-group-item">até 4x de R$12,24</li>
                            </ul>
                            <div class="card-body">
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>Adicionar ao Carrinho</button></a>
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg> Pagar pelo whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                  <!--Card 8-->
                    <div class="col-md-3">
                        <div class="card" id="card8">
                            <img src="https://cdn.awsli.com.br/1832/1832576/produto/90422431/e18946799a.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Casa de brinquedo</h5>
                <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">R$ 47,53  via pix</li>
                    <li class="list-group-item"><strong>R$ 49,54</strong></li>
                    <li class="list-group-item">até 4x de R$12,24</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>Adicionar ao Carrinho</button></a>
                    <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg> Pagar pelo whatsapp</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       
        <div class="col-md-12 buttom-area">
            <div class="text-center button-disciplina button-border">
              <h2 class="h2" id="destaques"><strong>Destaques</strong></h2>
            </div>
            </div>

          <!--Cards-->
          <div class="container">
            <div class="row">
              <!--Card 1-->
              <div class="col-md-3">
                  <div class="card" id="card1">
                      <img src="https://brincamundo.com.br/wp-content/uploads/2023/05/barco-brinquedo-pista-carros-luz-acessorios.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Navio Lego</h5>
                          <p class="card-text">Venha comprar, só hoje em promoção imperdível. Confira!</p>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">R$ 47,53 via pix</li>
                              <li class="list-group-item"><strong>R$ 49,54</strong></li>
                              <li class="list-group-item">Até 4x de R$ 12,24</li>
                          </ul>
                          <div class="card-body">
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>Adicionar ao Carrinho</button></a>
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg> Pagar pelo whatsapp</button></a>
                          </div>
                      </div>
                  </div>
              </div>
     
              <!--Card 2-->
              <div class="col-md-3">
                <div class="card" id="card2">
                  <img src="https://images.tcdn.com.br/img/img_prod/841280/carrinhos_de_brinquedo_pequenos_metal_5_carros_sortidos_mini_704539_1_9a235d581e320319dc350f238710a0d0.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Carrinho de Brinquedo</h5>
                    <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$ 90,53  via pix</li>
                        <li class="list-group-item"><strong>R$ 49,54</strong></li>
                        <li class="list-group-item">até 4x de R$24,24</li>
                      </ul>
                      <div class="card-body">
                        <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                          <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                        </svg>Adicionar ao Carrinho</button></a>
                        <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg> Pagar pelo whatsapp</button></a>
                      </div>
                  </div>
              </div>
          </div>
                <!--Card 3-->
                <div class="col-md-3">
                  <div class="card" id="card3">
                    <img src="https://ludopia.com.br/wp-content/uploads/2022/08/Brinquedo-terapeutico-brinquedo-de-apertar-banana-ludopia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Brinquedo de aperta</h5>
                      <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">R$ 47,53  via pix</li>
                          <li class="list-group-item"><strong>R$ 49,54</strong></li>
                          <li class="list-group-item">até 4x de R$12,24</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>Adicionar ao Carrinho</button></a>
                          <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg> Pagar pelo whatsapp</button></a>
                        </div>
                    </div>
                </div>
            </div>
           
              <!--Card 4-->
                <div class="col-md-3">
                    <div class="card" id="card4">
                        <img src="https://cdn.awsli.com.br/1832/1832576/produto/90422431/e18946799a.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casa de brinquedo</h5>
            <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">R$ 47,53  via pix</li>
                <li class="list-group-item"><strong>R$ 49,54</strong></li>
                <li class="list-group-item">até 4x de R$12,24</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>Adicionar ao Carrinho</button></a>
                <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg> Pagar pelo whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                  <!--Card 5-->
                  <div class="col-md-3">
                      <div class="card" id="card5">
                          <img src="https://brincamundo.com.br/wp-content/uploads/2023/05/barco-brinquedo-pista-carros-luz-acessorios.jpeg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Navio Lego</h5>
                              <p class="card-text">Venha comprar, só hoje em promoção imperdível. Confira!</p>
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">R$ 47,53 via pix</li>
                                  <li class="list-group-item"><strong>R$ 49,54</strong></li>
                                  <li class="list-group-item">Até 4x de R$ 12,24</li>
                              </ul>
                              <div class="card-body">
                                  <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                  </svg>Adicionar ao Carrinho</button></a>
                                  <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                  </svg> Pagar pelo whatsapp</button></a>
                              </div>
                          </div>
                      </div>
                  </div>
         
                  <!--Card 6-->
                  <div class="col-md-3">
                    <div class="card" id="card6">
                      <img src="https://images.tcdn.com.br/img/img_prod/841280/carrinhos_de_brinquedo_pequenos_metal_5_carros_sortidos_mini_704539_1_9a235d581e320319dc350f238710a0d0.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Carrinho de Brinquedo</h5>
                        <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">R$ 90,53  via pix</li>
                            <li class="list-group-item"><strong>R$ 49,54</strong></li>
                            <li class="list-group-item">até 4x de R$24,24</li>
                          </ul>
                          <div class="card-body">
                            <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>Adicionar ao Carrinho</button></a>
                            <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                              <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg> Pagar pelo whatsapp</button></a>
                          </div>
                      </div>
                  </div>
              </div>
                    <!--Card 7-->
                    <div class="col-md-3">
                      <div class="card" id="card7">
                        <img src="https://ludopia.com.br/wp-content/uploads/2022/08/Brinquedo-terapeutico-brinquedo-de-apertar-banana-ludopia.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Brinquedo de aperta</h5>
                          <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">R$ 47,53  via pix</li>
                              <li class="list-group-item"><strong>R$ 49,54</strong></li>
                              <li class="list-group-item">até 4x de R$12,24</li>
                            </ul>
                            <div class="card-body">
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>Adicionar ao Carrinho</button></a>
                              <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg> Pagar pelo whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                  <!--Card 8-->
                    <div class="col-md-3">
                        <div class="card" id="card8">
                            <img src="https://cdn.awsli.com.br/1832/1832576/produto/90422431/e18946799a.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Casa de brinquedo</h5>
                <p class="card-text">venha comprar, so hoje em promoçao imperdiver confira.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">R$ 47,53  via pix</li>
                    <li class="list-group-item"><strong>R$ 49,54</strong></li>
                    <li class="list-group-item">até 4x de R$12,24</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>Adicionar ao Carrinho</button></a>
                    <a href="#" class="card-link"><button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg> Pagar pelo whatsapp</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

<!--Cards de Avaliação-->
<div class="row-fluid" id="secao-avaliacao">
    <div class="titulo-categoria">
        <h2 class="h2" id="h2-avaliacao">Quem já comprou e recomenda</h2>
      </div>
      <!--Depoimentos-->
      <div class="card-depoimentos">
        <!--1°Depoimento-->
        <div class="depoimento" id="depoimento1"><!--Div com div's de depoimento-->
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
                <span class="dep-nome3" >Juliana Martins</span>
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
<!--Barra Newsletter-->
    <div class="barraNewsletter">
        <div class="container">
            <div class="row-fluid">
                <div class="componente newsletter">

                    <!--Título da newsletter-->
                    <div class="newsletter-titulo">
                      <h5 class="h4"><strong>"Garanta já seu desconto! "</strong></h5>

                    <!--Conteúdo de texto da newsletter.-->
                        <p class="texto-newsletter">
                            "Cadastre-se aqui que eu te envio um descontinho e ainda te atualizo sobre nossas novidades. É rapidinho! 😉"
                        </p>
                    </div>

                    <!--Campo de busca e botão-->
                    <div class="interno-conteudo">
                        <div class="newletter-cadastro">

                            <!--Campo de busca-->
                            <input type="text" name="email" placeholder="Digite o seu melhor e-mail" class="input-email">

                            <!--Botão-->
                            <button class="botao" data-action="#" aria-label="Assinar" id="botao-confirm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                                  </svg>
                                  <span>Botão de Confirmação</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Whatsapp fixado, botão.-->
<a href="https://wa.me/+" class="whatsapp-button" target="_blank" style="position: fixed; right: 15px; bottom: 15px; z-index: 15"> <img src="imagens/whatsapp-button.png" alt="botão whatsapp" /></a>

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
      
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>