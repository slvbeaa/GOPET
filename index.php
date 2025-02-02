<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="style.css">

    <title>Gopet</title>
</head>
<body>

  <nav class="navbar fixed-top" style="background-color: #0DA0C0;">
    <div class="container justify-content-center">
      <div class="navbar-header">
      </div>
      <div class="links">
        <ul class="nav-itens">
          <li><a href="registro.php">Cadastre suas Clínicas</a></li>
          <li><a href="registroclinica.html">Minhas Clínicas</a></li>
        </ul>
      </div>
    </div>

    <button class="Btnnav">
                  <a href="sair.php">
        <div class="sign">
            <svg viewBox="0 0 512 512">
                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
            </svg>
        </div>
        </a>
    </button>
 </nav>



        <div class="s130">
          <form>
            <div class="inner-form">
              <div class="input-field first-wrap">
                <div class="svg-wrapper">
                </div>
                <input id="search" type="text" placeholder=""/>
              </div>
              <div class="input-field second-wrap">
                <button class="btn-search" type="button">BUSCAR</button>
              </div>
            </div>
            <span class="info">Clínica Veterinária, PetShop, ONG's.</span>
          </form>
        </div>
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        <div class="col">

              <div class="card">
                  <img src="img1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-center">PATINHAS PROTEGIDAS</h5>
                      <p class="card-text text-center">Seg á Sex 09:00 - 18:00 | Sab 09:00 - 12:00</p>
                      <p class="card-text text-center">Email: patinhas@gmail.com</p>
                      <p class="card-text text-center">Contato: (00) 0000-0000</p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn">Localizar</button>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card">
                  <img src="img2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-center">AUMIGOS DE QUATRO PATAS</h5>
                      <p class="card-text text-center">Atendimento 24hrs</p>
                      <p class="card-text text-center">Email: aumigosdequatropatas@gmail.com</p>
                      <p class="card-text text-center">Contato: (00) 0000-0000</p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn">Localizar</button>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card">
                  <img src="img3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-center">AMIGO FELIZ</h5>
                      <p class="card-text text-center">Seg á Sex 09:00 - 18:00 | Sab 09:00 - 12:00</p>
                      <p class="card-text text-center">Email: amigofeliz@gmail.com</p>
                      <p class="card-text text-center">Contato: (00) 0000-0000</p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn">Localizar</button>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card">
                  <img src="img4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-center">SANTUÁRIO DOS PATUDOS</h5>
                      <p class="card-text text-center">Atendimento 24hrs</p>
                      <p class="card-text text-center">Email: patudos@gmail.com</p>
                      <p class="card-text text-center">Contato: (00) 0000-0000</p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn">Localizar</button>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card">
                  <img src="img5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-center">ASAS E PATAS</h5>
                      <p class="card-text text-center">Aberto 24 horas</p>
                      <p class="card-text text-center">Email: asasepatas@gmail.com</p>
                      <p class="card-text text-center">Contato: (00) 0000-0000</p>                    
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn" >Localizar</button>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card">
                  <img src="img6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-center">SOS BICHINHOS</h5>
                      <p class="card-text text-center">Aberto 24 horas</p>
                      <p class="card-text text-center">Email: sosbichinhos@gmail.com</p>
                      <p class="card-text text-center">Contato: (00) 0000-0000</p>                    
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn" >Localizar</button>
                  </div>
              </div>
          </div>

      </div>
  </div>

  <footer>
      <section class="top">
  <div class="footer-content">
  
      <ul class="sociais">
          <img src="logo2.png" style="width:125px; height:40px">
      
          
          <li><a href="https://whatsapp.com/channel/0029VabW8Gk9cDDfDJQgDH1V"><i class="fa-brands fa-whatsapp"></i></a></li>
          <li><a href="https://pt-br.facebook.com/login/device-based/regular/login/"><i class="fa-brands fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/tcc.gopet?igsh=dDM1dGlvaHhheW1n"><i class="fa-brands fa-instagram"></i></a></li>
      </ul>

  </div>
        </div>
      </section>
      <section class="bottom">
        <p class="copyright">© 2024 Todos os direitos reservados</p>
        <div class="legal">
          <a> Contato</a>
          <a> Termos de uso </a>
          <a> Política de Privacidade </a>
        </div>
        </div>
      </section>
    </footer>
  </body>
</html> 