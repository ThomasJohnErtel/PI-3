<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .bold {
    font-weight: bold;
}

#header {
    background-color: #EEEEEE;
    padding: 30px;
}

#svg-menu {
    color: #FF711E;
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
    font-size: 19px
}

.dropdown {
    list-style-type: none;  
}

.float-left {
    color: #FF711E;
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
    color: #FF711E;
    width: 55px;
    height: 55px;
    padding: 5px;
    background-color: #E0E0E0;
    border: 2px solid #CCCCCC;
    border-radius: 25%;
}

.register {
    font-size: 21px;
    margin-bottom: 20px;
}

.login {
    font-size: 19px;
}

.submit {
    padding-left: 110px;
    background-color: #FF711E;
}

#login-now {
    font-size: 22px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.card-padding {
    padding-bottom: 50px;
}

/*Footer*/
footer {
    background-color: #ffffff;
    color: #131111;
    padding: 5px;
    text-align: center;
    margin-top: 10px;
    border: 1px solid rgb(214, 210, 210);
   
  }
  .footer-item{
    list-style-type: none;
  }
   
  
  /*Direitos Autorais*/
  .direitos-autor{
    margin-top: 10px;
  }
    </style>
  </head>
  <body>
    <header>
      <div class="row row-width" id="header">
        <div class="col feature-box">
          <img src="images-login/logo provisoria.png" alt="">
        </div>
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
            <ul class="navbar-nav centralize navbar-itens">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg id="svg-menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                  </svg> Menu
                </a>
                <ul class="dropdown-menu navbar-itens">
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

    <section>
      <div class="container">
        <div id="login-now">
          <p>
            <span class="bold">Identificação:   </span>Faça o seu login ou crie uma
            conta caso ainda não possua cadastro
          </p>
        </div>

        <div class="row">
          <div class="col-sm-6 card-padding">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <div class="register">
                      <svg
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
                      <span class="bold">Já sou cadastrado</span>
                    </div>
                    <label for="exampleInputEmail1" class="form-label login">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label login">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary submit">Prosseguir</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-6 card-padding">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <div class="register">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg>
                      <span class="bold">Ainda não possuo cadastro</span>
                    </div>
                    <label for="exampleInputEmail1" class="form-label login">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label login">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary submit">Prosseguir</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a href="https://wa.me/+" class="whatsapp-button" target="_blank" style="position: fixed; right: 15px; bottom: 15px; z-index: 15"> <img src="images-login/whatsapp-button.png" alt="botão whatsapp" /> </a>
    
    <footer>
      <p class="direitos-autor">&copy; 2024 - Todos os direitos reservados</p>
      <p>Entre em contato pelo e-mail: FoxBrinquedos@Pi.com</p>
      <nav>
          <ul>
              <li class="footer-item"><a href="#">Termos de uso</a></li>
              <li class="footer-item"><a href="#">Política de privacidade</a></li>
              <li class="footer-item"><a href="#">Sobre nós</a></li>
          </ul>
      </nav>
  </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
