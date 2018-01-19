<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="bg-info" style="height: 770px;text-align: center;padding-top: 50px;">
<h1 style="color: gray">Bienvenue dans notre agence EasyLife  </h1>
                <img src="Capture du 2018-01-06 13-11-45.png" alt="" >

                <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:20px;">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active" style="margin-top:-40px"></li>
                        <li data-target="#demo" data-slide-to="1" style="margin-top:-40px"></li>
                        <li data-target="#demo" data-slide-to="2" style="margin-top:-40px"></li>
                    </ul>
    
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="01.jpg" class=img-responsive alt="Los Angeles">
                            <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>

                        </div>
                        <div class="carousel-item">
                            <img src="02.jpg" class=img-responsive alt="Chicago">
                            <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>

                        </div>
                        <div class="carousel-item">
                            <img src="03.jpg" class=img-responsive alt="New York">
                            <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>

                        </div>
                    </div>
    
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
    
                </div>
                <h2>Veuillez </h2>
                <ul style="list-style-type: none;display:flex;">
        <li class="bg-info" style="margin-left: -20px;"><a href="connect.php">Votre Espace Utilisateur</a></li>
        <li class="bg-info"><a href="Accueilbiens.php">Voir Les Offres proposés</a></li>
        <li class="bg-info"><a href="AccueilPartenaire.php">Les Propriétaires Patenaires</a></li>
    </ul>
            </div>
   
</body>
<style>
#fin {
    width: 776px;
    height: 40px;
    background: rgb(73, 70, 70);
    opacity: 0.6;
    -ms-filter: "alpha(opacity=10)";
    margin-top: -40px;
    margin-left: 206px;
             }
li {
        margin-left: 50px;
        border: 2px solid grey;
        width: 350px;
        text-align: center;
        padding-top: 20px;
        height: 60px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin-top: 10px;
    }
    li:hover {
        background: grey;
        border: 2px solid pink;
    }
    a {
        text-decoration: none;
        color: white;
    }
</style>
</html>