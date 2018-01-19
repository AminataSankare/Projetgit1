<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
</head>
  <body>
  <div style="background: blue; height: 800px;margin-top:-5px;color: white;" id="mina">
    <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:425px;margin-top:100px" >
    <ul style="list-style-type: none;display:flex;">
        <li><a href="formUser.php">Nouveau Utilisateur</a></li>
        <li><a href="tableUser.php">Les utilisateurs déjà disponibles</a></li>
        <li><a href="Accueil.php">Accueil</a></li>
    </ul>
    <h1 style="margin-left: 350px">Easy Registration</h1>
  <form class="form-inline" action="#" method="post" style="margin-left: 200px">
        <fieldset style="width: 700px">
            <legend>Inscription EasyLife</legend>
           <small><a href="connect.php">J'ai déjà un compte</a></small> <br/><br/>
            <label for="">Nom de l'utilisateur :</label>
            <input type="text" class="form-control" name="UserName" style="margin-left: 10px" value=""><br/>
            <label for="">Login :</label>
            <input type="text" class="form-control" name="Login" style="margin-left: 124px"   value=""><br/>
            <label for="">Mot de passe :</label>
            <input type="password" class="form-control" name="Password" style="margin-left: 65px"  ><br/><br/>
            <label for="">Profil :</label>
            <select class="form-group custom-select form-control" style="margin-left: 24px;width: 510px; height: 35px;border-radius:0px" name="IdProfil" required="required">
                            <option value="" >Séléctionner Votre Profil</option>
                        <?php
                        include 'connexion.php';
                        $ligne0 = $bdd->query('SELECT * FROM Profil');
                        while ($donnee0 = $ligne0->fetch())
                        {
                        ?>
                            <option value="<?php echo $donnee0['IdProfil'];?>"> <?php echo $donnee0['NomProfil'];?> </option>
                        <?php
                        }
                        ?>
                        </select><br/><br/><br/>
            <input type="submit" value="Enregistrer" name="Enregistrer" class="btn ">
        </fieldset>
    </form>
</div>
</body>
<script>
    $(document).ready(function(){

// notre code ici

$('.form-control').keyup(function(){

if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5

    $(this).css({ // on rend le champ rouge

        borderColor : 'red',

    color : 'red'

    });
    $(this).append("");

 }

 else{

    $(this).css({ // si tout est bon, on le rend vert

     borderColor : 'green',

     color : 'green'

 });

 }

});
});

</script>
<style>
option {
    background: red;
}
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
<?php
include 'connexion.php';
include 'nameSpace.php';
$User = new location\dao\Utilisateur();
if (isset($_POST['Enregistrer']) && isset($_POST['Login'])){
extract($_POST);
$User->UserName = $UserName;
$User->Login = $Login;
$User->Password =$Password;
$User->IdProfil = $IdProfil;
$ligneTest = $bdd->query('SELECT * FROM Utilisateurs WHERE  Login = "'.$Login.'" ');
$exist=true;                        //verifier si le nouveau employé existe dans notre base de donnée
if($donneeTest = $ligneTest->fetch())
{
    $exist=true;
                        //Ce nom existe dans notre base de donnée
}
else
{
    $exist=false;
    $User->addUser();
    //Ce nom n'éxiste pas dans notre base de donnée
}



if($exist==true)                    // Si le nouveau nom existe dans notre base de donnnée alors execute tout les lignes qui sont dans le if
{
    echo "<h6 style='width: 800px; margin: auto; border-bottom: 1px solid black;'>Un utilisateur nommé <span>".$donneeTest['UserName']."</span> existe dans notre base de donnée avec <span>le même login</span> que vous nous avez renseigner !</h6>";
}
if ($exist==false) {
   //.

  //include 'AccueilUtilisateur.php';
 // echo 'Bienvenue'.$UserName.'<br/>Votre login est :'.$Login;
 ?>
 <?php

   
   ?><script>
                       $("#mina").load("accueiluser.php");

       // document.getElementById('mina').style.visibility = "hidden";
   </script>
<div class="bg-info" style="margin-top:-800px;color:white;padding-top:50px;">
   <h2>Bienvenue <?php
  echo  $UserName;
 ?></h2>
 <?php
    include 'AccueilUtilisateur.php';
 ?>
 </div>
   <?php
}

}

?>
