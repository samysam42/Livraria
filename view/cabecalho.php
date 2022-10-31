<?php 
  require_once("../model/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Livraria Holiday™</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="text" name="String" placeholder="Procurar por Produtos">
      <button class="btn btn-success" type="submit"><b>PESQUISAR</b></button>
    </form>

    <div class="d-flex justify-content-between">
      <a href="_index.php" class="text-decoration-none"><button class="bg-success mt-1 me-3 mb-2 ps-3 pe-3 pb-2 pt-2 border-0 rounded text-light" type="text"><b>INÍCIO</b></button></a>
      <a href="perfil.php" class="text-decoration-none"><button class="bg-success mt-1 me-3 mb-2 ps-3 pe-3 pb-2 pt-2 border-0 rounded align-items-center text-light" type="text">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
      </button></a>

      <div class="bg-success p-1 ps-2 pe-2 rounded h4 align-items-center d-flex text-dark">
        <b class="border-bottom border-light ms-2 text-light">GÊNEROS</b>
        <button class="navbar-toggler bg-dark ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon text-light"></span>
        </button>
      </div>
    </div>
    
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><b>Gêneros Literários</b></h3>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 h5">
          <li class="nav-item">
            <a class="nav-link active border-bottom" aria-current="page" href="#">▸Romance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active border-bottom" aria-current="page" href="#">▸Aventura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active border-bottom" aria-current="page" href="#">▸Drama</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>