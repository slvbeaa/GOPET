

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GOPET</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="login.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar fixed-top" style="background-color: #0DA0C0;">
  <div class="container-fluid" style="justify-content: center;">
    <a href="index.php">
    </a>

    <div class="links">
      <ul class="nav-itens">
        <li><a href="index.html">Home</a></li>
      </ul>
    </div>
    
    </div>
</nav>

    <div class="container" id="container">
      <div class="form-container sign-up">
          <form action="cadastro.php" method="POST" >
            <input type="hidden" name="acao" value="cadastrar">
              <h1>Crie uma conta</h1>

              <div class="social-icons">
                  <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=http%3A%2F%2Fsupport.google.com%2Fmail%2Fanswer%2F56256%3Fhl%3Dpt-BR&ec=GAZAdQ&hl=pt-BR&passive=true&sjid=946030399266973548-SA&ifkv=ARZ0qKI9vzXqGKlU2zvxGJFt8qq5ZLNUR3pdNxiWeEI2PCOpi29hGKWzsmwJU7xJcr8Yv6mKZfFOxA&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=61558233816640&mibextid=ZbWKwL" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
              </div>

              <span>Use seu email para cadastro.</span>
              <input type="text" placeholder="Nome" id="nome" name="nome" required>
              <input type="email" placeholder="Email" id="email" name="email" required>
              <input type="password" placeholder="Senha" id="senha" name="senha" required>
              <button input type="submit" name="submit" id="submit">Cadastrar</button>

             
          </form>
      </div>
      <div class="form-container sign-in">
        <form action="login.php" method="POST" >
              <h1>Entrar</h1>
              <div class="social-icons">
                  <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=http%3A%2F%2Fsupport.google.com%2Fmail%2Fanswer%2F56256%3Fhl%3Dpt-BR&ec=GAZAdQ&hl=pt-BR&passive=true&sjid=946030399266973548-SA&ifkv=ARZ0qKI9vzXqGKlU2zvxGJFt8qq5ZLNUR3pdNxiWeEI2PCOpi29hGKWzsmwJU7xJcr8Yv6mKZfFOxA&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                  <a href="https://pt-br.facebook.com/login/device-based/regular/login/" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
              </div>
              <span>Use seu email e senha.</span>
              <input type="email" placeholder="Email" name="email" autofocus="">
              <input type="password" placeholder="Senha" name="senha" autofocus="">
              <a href="index.html"><span>Esqueci minha senha.</span></a>


              <button input type="submit" name="submit" value="enviar">Entrar</button>

          </form>
      </div>
      <div class="toggle-container">
          <div class="toggle">
              <div class="toggle-panel toggle-left">
                  <h1>Bem-vindo de volta!</h1>
                  <p>Insira seus dados pessoais para usar todos os recursos do site.</p>
                  <button class="hidden" id="login">Entrar</button>
              </div>
              <div class="toggle-panel toggle-right">
                  <h1>Bem-vindo!</h1>
                  <p>Registre-se com seus dados pessoais para usar todos os recursos do site.</p>
                  <button class="hidden" id="register">Cadastrar</button>
              </div>
          </div>
      </div>
  </div>


<footer>
      <section class="bottom">
        <p class="copyright">© 2024 Todos os direitos reservados</p>
        <div class="legal">
          <a> Contato</a>
          <a> Termos de uso </a>
          <a> Política de Privacidade </a>
        </div>
      </section>
</footer>

    <script src="script.js"></script>

  </body>
</html>

