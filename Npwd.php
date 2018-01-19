<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
      </head>
  <body>
  <div style="background: blue; height: 800px;margin-top:-5px;color: white">
    <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:425px;margin-top:100px">
    <ul style="list-style-type: none;display:flex;">
        <li><a href="formUser.php">Nouveau Utilisateur</a></li>
        <li><a href="tableUser.php">Les utilisateurs déjà disponibles</a></li>
        <li><a href="Accueil.php">Accueil</a></li>
    </ul>
    <h1 style="margin-left: 350px">Changer mot de passe</h1>
  <form class="form-inline" action="#" method="post" style="margin-left: 200px">
        <fieldset style="width: 700px">
          <small>  <a href="formUser.php">J'ai pas de compte EasyLife</a></small><br/><br/>
            <label for="">Login :</label>
            <input type="text" class="form-control" name="Login" style="margin-left: 124px" required='required'><br/>
            <label for="">Nouveau mot de passe :</label>
            <input type="password" class="form-control" name="Password" style="margin-left: 0px" required='required'><br/><br/><br/>
           <small><a href="connect.php">Non je n'ai rien oublié</a></small>
            <input type="submit" value="Connexion" name="Change" class="btn ">
        </fieldset>
    </form>
</div>



    </body>
    <style>
li {
        margin-left: 15px;
        border: 2px solid grey;
        width: 350px;
        text-align: center;
        padding-top: 20px;
        height: 40px;
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
.form-control {
    width: 500px;
    height: 30px;
    border-radius: 0px;
    border: 2px solid grey;
    margin-top: 20px;
}
.btn {
    float: right;
    background: white;
    border: 2px solid white;
    color:  blue;
    height: 30px;
}

</style>
</html>
<?php
include 'nameSpace.php';
include 'connexion.php';
$Use = new location\dao\Utilisateur();
if (isset($_POST['Change'])){
extract($_POST);
$Us->Login = $Login;
$Us->Password = $Password;
$ligneTest = $bdd->query('SELECT * FROM Utilisateurs WHERE  Login = "'.$Login.'" ,Password = "'.$Password.'" ');
$exist=true;
if($donneeTest = $ligneTest->fetch())
{
    $exist=true;
   // $Us->loggon();

}
else
{
    $exist=false; 
   // $User->addUser();
    //Ce nom n'éxiste pas dans notre base de donnée
}
if($exist==true)                   
{
    echo "<label>Ancien mot de passe :</label>
    <input type='password' class='form-control' name='NPassword' style='margin-left: 65px' required='required'><br/><br/><br/>";
    //header('location:Accueil.php');


      }
      else {
          echo 'Entrer infos';
      }
    }
      else {


          echo "Veuillez entrez vos infos";
      }

?>
