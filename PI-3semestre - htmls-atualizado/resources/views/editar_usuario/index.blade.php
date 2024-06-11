<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="shortcut icon" href="https://imgur.com/B6AP4Fc" type="image/x-icon">
   <style>

.col-sm-6 card-padding{
 
    align-items: center;
  text-align: center;
  justify-content: center;

}


    
.bold {
  font-weight: bold;
}

.logo{
  width: 30%;
}

#header {
  background-color: #eeeeee;
  padding: 30px;
  
}

#svg-menu {
  color: #ff711e;
}

.navbar-itens {
  padding-left: 20px;
  padding-right: 20px;
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
  width: 55px;
  height: 55px;
  padding: 5px;
  background-color: #e0e0e0;
  border: 2px solid #cccccc;
  border-radius: 25%;
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

.nav-item {
  text-align: center;
}

#login-now, h2{
  text-align: center;
  margin: 32px;
}

nav ul {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 70%;
  height: 40px;
  margin: 0px 0px 0px 220px;
}

li {
  flex-grow: 1;
}

/*Footer*/
footer {
  background-color: #ffffff;
  color: #131111;
  padding: 5px;
  padding-bottom: 50px;
  text-align: center;
  margin-top: 40px;
  border: 1px solid rgb(214, 210, 210);
}

/*Informações do footer*/
.footer-info {
  list-style-type: none;
  width: 200px;
  text-decoration: none;
}


/*Direitos Autorais*/
.direitos-autor {
  padding-top: 10px;
  padding-bottom: 20px;
}

/*Responsividade da tela home.*/
@media screen and(max-width: 1169px){
  .card-depoimentos{
    height: auto;
    
  }

  
}

   </style>
</head>
<body>
  <header>
    <!--Topo do site-->
    <div class="row row-width" id="header">
      <div class="col feature-box">
        <a href="home.blade.php">
          <img src="imagens/fox.svg" alt="" class="logo">
        </a>
      </div>
      <!--Campo de busca e botão.-->
      <div class="col feature-box">
        <form class="d-flex" role="search" id="searchbar">
          <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
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
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <li class="nav-item dropdown navbar-itens">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Por Preço
              </a>
              <ul class="dropdown-menu navbar-itens">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
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
            <li class="nav-item navbar-itens">
              <a class="nav-link" href="#">Mais Vendidos</a>
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

      <section>
        <div class="container">
          <div id="login-now">
           <h2>Editar Usuario</h2>
          </div>
          
          <!--Editar Usuario-->
          <div class="row">
            <div class="col-sm-6 card-padding">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <div class="produto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                        </svg>
                        <span class="bold">Editar Usuario</span>
                      </div>
                      <!--Nome do Usuario-->
                      <label for="produtonome" class="form-label-nome">Nome do Usuario</label>
                      <input type="text" class="form-control" id="form-label-nome" aria-describedby="producthelp">
                    </div>
                    <!--Preço-->
                    <div class="mb-3">
                      <label for="preco" class="form-label-preco">Senha</label>
                      <input type="float" class="form-control" id="preco">
                    </div>
                     <!--Desconto-->
                     <div class="mb-3">
                      <label for="desconto" class="form-label-desconto">Email</label>
                      <input type="float" class="form-control" id="desconto">
                    </div>
                    <!--Descrição-->
                    <div class="mb-3">
                      <label for="descricao" class="form-label-descricao">Cpf</label>
                      <input type="text" class="form-control" id="preco">
                    </div>
                     <!--Estoque do Produto-->
                  
                    </div>
                    <p>
                      <label for="ativo">Ativo:</label>
                      <input type="checkbox" name="ativo" id="ativo" value="1" >
                  <p>
                    <button type="submit" class="btn btn-primary submit">Prosseguir</button>
                  </form>
                </div>
              </div>
            </div>

           
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       
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