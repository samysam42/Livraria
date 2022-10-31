<?php
  require_once("../model/conexao.php")
?>
<?php
    if(isset($_GET['img']) && $_GET['img'] != ''){
    $consulta = "SELECT * FROM livro where nome like '%$_GET[img]%'"; 
    } 
    $resultado = mysqli_query($conexao, $consulta);
    $produto = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Livro</title>
</head>
<body class="mt-5">
<container>
<div class="row">
    <div class="col">
        <div class="mt-5 ms-5">
            <img src="../img/<?php echo $livro['foto_livro']?>" class="mt-5 ps-5 ms-5 w-50">
        </div>
    </div>

    <p><div class="col">

        <h1><?php echo $livro['nome'];?></h1>
        <div>
        <form>
            <div>
                <p><b>Quantidade em estoque:</b> <?php echo $livro['qtd_estoque'];?></p>
            </div>
        </form>
        </div>

        <div class="me-5 p-5">
            <div class="me-5 p-5">
                <h1>Harry Potter e o Enigma do Príncipe<h1>
                <h5>Editora Rocco, Por JK. Rowling<h5><br>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat<h5><br>
                <h1>R$00,00<h1>
                <button type="button" class="btn btn-success">Comprar</button>
            </div>
        </div>
    </div>
</p>
</container>