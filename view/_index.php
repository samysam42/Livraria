<?php
  require_once("cabecalho.php");
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Livraria Holiday</title>
</head>
<body class="mb-5">
  <container id="carrousel" class="w-100 d-flex justify-content-center">
  <div id="carouselExampleControls" class="carousel slide w-100 mb-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/livroheader.jpg" class="d-block w-100 mb-4" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/livroheader2.jpg" class="d-block w-100 mb-1" alt="..."><br>
    </div>
  </div>

<?php
  if(isset($_SESSION['mensagem'])) {
?>
    <div class="alert alert-success w-25 m-auto text-center" role="alert">
      <?=$_SESSION['mensagem'] ?>
    </div>
<?php
    session_destroy();
  }
?>

  <div class="h1 mt-5 text-center">
    <b>NOVIDADES</b>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"></button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"></button>
  </div>
  </div>
  
  </container>
  <div id="mensagem">

    <?php
      if(isset($_GET['String']) && $_GET['String'] != ''){
        $consulta = "SELECT * FROM livro where nome like '%$_GET[String]%'"; 
      } else{
        $consulta = "SELECT * FROM livro limit 3";
      }
      $resultado = mysqli_query($conexao, $consulta);

      if($resultado->num_rows === 0){
        echo "<script>alert('Nenhum produto encontrado.');</script>";
      }
    ?>

  </div>
  <container class="text-center row">
    <div>
      <?php
        while($row_livro = mysqli_fetch_assoc($resultado)){
      ?>
      <div class="col">
        <div>
          <a href="livro.php?img=<?php echo $row_livro['nome']?>"><img src="../img/<?php echo $row_livro['foto_livro']?>" id="img_index"></a><br>
          <b><?php echo $row_livro['nome']; ?></b><br>
          <b>R$<?php echo $row_livro['preco'];?>,00</b><br>
        </div>
        <br>
      </div>
      <?php
          }
          ?>
      </div>
    </div>
  </container>
</body>

<?php
  require_once("rodape.php");
?>

</html>