<?php
  require_once("cabecalho.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style1.css">
  <title>Livraria Holiday</title>
</head>
<body>
<div class="container emp-profile mb-5">
            <form method="post">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="profile-img">
                            <img src="../img/iconperfil.png" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="profile-head">
                                    <h5>
                                        Nome exemplo
                                    </h5>
                                    <h6>
                                        exemplo
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4 mb-5">
                    </div>
                    <div class="col-md-8 mb-5">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Usuário</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>userexample</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>emailexemplo@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CEP</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>1234567890</p>
                                            </div>
                                        </div>
                                        
                            </div>
                           
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</body>