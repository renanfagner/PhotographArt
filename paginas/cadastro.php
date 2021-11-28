<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro-Fotógrafo</title>
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-light bg-dark">
        <div>
          <img class="rounded-circle border border-white mr-2" src="../img/photo_logo.png" width="50x50" alt="Photo Logo">
          <span class="navbar-brand mb-0 h1 text-white">PhotoArt</span>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active text-white" href="../index.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="https://youtube.com" target="_blank">PRODUTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="cadastro.php">CADASTRE-SE</a>
          </li>
        </ul>
      </nav>
    </header>



    <section>
      <div class="container-fluid ">
        <div class="row text-center">
          <div class="col-12 my-3">

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../img/card11.png" alt="Photo Carousel1">
                <div class="carousel-caption d-none d-md-block">
              </div>
                </div>
                <div class="carousel-item">
                  <img src="../img/card22.png" class=" w-25" alt="Photo Carousel2">
                <div class="carousel-caption d-none d-md-block">
              </div>
                </div>
                <div class="carousel-item">
                  <img src="../img/card3.png" class=" w-25" alt="Photo Carousel3">
                <div class="carousel-caption d-none d-md-block">
              </div>
                </div>
              </div>
            </div>

          </div>  
        </div>    
      </div>    
    </section>



    

    <section>
      <div class="container-fluid bg-light">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h4>Junte-se ao nosso time de Artistas, Cadastre-se!</h4>       
          </div>
        </div>
      </div>
    </section>

    <div class="text-center">
      <?php
        if(isset($_SESSION['msg'])){
            echo "<p style='color: #FF0000;'>".$_SESSION['msg']."</p>";
            unset($_SESSION['msg']);
        }
        elseif (isset($_SESSION['cadastrado'])){
          echo "<p style='color: #FF0000;'>".$_SESSION['cadastrado']."</p>";
            unset($_SESSION['cadastrado']);
        }
      ?>
    </div>
    
    <section>
      <div class="container">
        <div class="row border border-dark p-3 my-3">
            <div class="col-12">
              <h1>Contato</h1>

              <form action="processa.php" method="POST">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input class="form-control mb-3" type="text" name="nome" id="nome" placeholder="Digite seu nome..." checked>
                </div>
                <div class="form-group">
                  <label for="email">E-mail:</label>
                  <input class="form-control mb-3" type="email" name="email" id="email" placeholder="Digite seu e-mail...">
                </div>
                <!-- div class="form-group">
                  <label for="mensagem" class="form-label">Mensagem:</label>
                  <textarea class="form-control mb-3" type="mensagem" name="mensagem" id="mensagem" placeholder="Digite sua mensagem..." rows="3"></textarea>
                </div -->
                <div class="d-grid gap-2 col-2 mx-auto mt-3">
                  <input type="submit" value="Enviar" class="btn btn-outline-dark" >
                  <!-- button type="button" class="btn btn-outline-dark">Enviar</button -->
                  
                </div>
              </form> 

        </div>      
      </div>
    </section>
    
    <footer class="footer navbar-fixed-bottom ">
      <div class="container-fluid bg-dark text-white text-center align-center p-1">
        <div class="row">
          <div class="col-sm-12">
            <span>&copy; Desenvolvido por <b>Renan Fagner</b> - Web Program II</span>       
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>