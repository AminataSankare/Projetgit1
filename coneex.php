<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
  </head>
  <style>
      footer{
          width:500px;
          height:30px;
          margin-left:150px;
          background: ;
          padding-top:20px;
          

      }
      a {
        color:#2F4F4F;
      }
     footer a {
         font-size: xx-small;
      }
      .mike {
          width:500px;
          background:url('background.png');
          margin-top:-158px;
          margin-left:150px;
border:2px solid grey;
padding:10px;
box-shadow:2px 2px 2px #C0C0C0 inset;      }
    .vat {
          margin-top:-10px
      }
      .va {
          margin-top:-30px
      }
      .btn {
         margin-right:5px;
          float:right;
          background:#2F4F4F;
          color:#C1CDCD;
      }

      .form-control{
width:400px;
margin-left: 60px;
border-radius:0px;
      }
      span {
          float:left;
          margin-top:-38px;
          margin-left:28px;
          width:35px;
          height:38px;
          background:#C1CDCD;
          padding-left:12px;
          padding-top:8px;
          border-top-left-radius:2px;
          border-bottom-left-radius:2px;
      }
      span i {
          color:#2F4F4F;
      }
      #mie span{
        float:left;
          margin-top:32px;
          margin-left:;
          width:35px;
          height:38px;
          background:#C1CDCD;
          padding-left:12px;
          padding-top:8px;
          border-top-left-radius:2px;
          border-bottom-left-radius:2px;
      
      }
  </style>
  <body style="background: #C1CDCD;">
  <div class="container " id="mina" >
 


  <!-- Trigger the modal with a button -->

  <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:220px;margin-top:60px">
  <img src="pont.png" alt="" style="margin-left:145px;margin-top:-170px">
   
  <form class="form mike" action="" method="post" id="con" >
        <fieldset >
            <legend>EasyConnexion</legend>
            <div class="alert alert-danger" id="ni">
  <strong>Danger!</strong>Remplir correctement   <ul></ul>
</div>
            <label for="">Login :</label>
            <input type="text" class="form-control log" id="control" name="log" val-champ="Login" >           <span> <i class="fa fa-user fa-dark" aria-hidden="true"></i></span>
<br/>
            <h6 class="vat" ></h6>
            <label for="">Mot de passe :</label>
            <input type="password" class="form-control" id="form" name="pwd" val-champ="Password" ><span>   <i class="fa fa-lock" aria-hidden="true"></i>
</span><br/><br/>
            <h6 class="va" ></h6>
            <small><a href="#" id="pwd">Mot de passe oubliée?</a></small><br/><br/>
         <a href="#" style="float:right;margin-top:8px;text-decoration:underline;" id="tik"> S'inscrire </a>
       <a href="#" id="ki" class="btn ">Connexion</a>

        </fieldset>
    </form>
    <form class="form mike" action="ajoutuser.php" method="post" style="" id="mik">
        <fieldset style="">
            <legend>Inscription EasyLife</legend>
            <div class="alert alert-danger" id="ni">0
  <strong>Danger!</strong>Remplir correctement   <ul></ul>
</div>
        
           <small><a href="#" id="li">J'ai déjà un compte</a></small> <br/><br/>
            <label for="">Nom de l'utilisateur :</label>
            <input type="text" id="UserName" class="form-control" name="UserName" style="" value=""><br/>
            <label for="">Login :</label>
            <input type="text" id="Login" class="form-control log" name="Login" style="" val-champ="Login"  value=""><br/>
            <label for="">Mot de passe :</label>
            <span>   <i class="fa fa-lock" aria-hidden="true"></i>
</span> <input type="password" id="Password" class="form-control" name="Password" style=""  ><br/><br/>
                   <a href="#" id="i" class="btn ">Enregistrer</a>
        </fieldset>
    </form>
    <form class="form mike" action="#" method="post" id="mie">
        <fieldset >
            <legend>Changer mot de passe EasyConnexion</legend>
            <div class="alert alert-danger" id="ni">
  <strong>Danger!</strong>Remplir correctement   <ul></ul>
</div>
        
          <small>  <a href="formUser.php" id="compte+
">J'ai pas de compte EasyLife</a></small><br/><br/>
            <label for="">Login :</label>
            <span> <i class="fa fa-user fa-dark" aria-hidden="true"></i></span> <input type="text" class="form-control log" id="control" name="log" val-champ="Login" required='required'><br/>
            <h6 class="vat" ></h6>
            <label for="">Nouveau mot de passe :</label>
            <span>   <i class="fa fa-lock" aria-hidden="true"></i>
</span> <input type="password" class="form-control" id="form" name="pwd"  required='required'><br/>
            <label for="">Nouveau mot de passe :</label>
            <span>   <i class="fa fa-lock" aria-hidden="true"></i>
</span> <input type="password" class="form-control" id="form" name="pwd"  required='required'><br/>
           <br/>
            <h6 class="va" ></h6>
         <a href=""> <input type="submit" value="Annuler" name="Annuler" class="btn "></a>
       <a href="#" id="k" class="btn ">Valider</a>

        </fieldset>
    </form>
    <footer>

    </footer>
</div>
     </body>
     <script src="query1.js">
       /*  $('#mik').hide();
$('#mie').hide();
$('#ni').hide();
    $(document).ready(function(){

// notre code ici

$('#control').keyup(function(){

if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
    $('#ni').show();
    $(this).css({ // on rend le champ rouge

        borderColor : 'red',

    color : 'red'

    });
    $('.vat').html("Login trop courts");
    $('#ni').show();

 }

 else{
   // $(this).css({});
    $(this).css({ // si tout est bon, on le rend vert

     borderColor : 'green',

     color : 'green'

 });
 $('.vat').html("Parfait");
 $('#ni').hide();

 }

});

});

$(document).ready(function(){
$('#form').keyup(function(){

if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5

    $(this).css({ // on rend le champ rouge

        borderColor : 'red',

    color : 'red'

    });
    $('#ni').show();
    $('.va').html("Mot de passe trop court");
 }

 else{
   // $(this).css({});
    $(this).css({ // si tout est bon, on le rend vert

     borderColor : 'green',

     color : 'green'

 });
 $('.va').html("Parfait !");
 $('#ni').hide();

 }

});


});
$(document).ready(function(){
    $('#ki').click(function(){
        if($('.form-control').val().length < 1){
            $('#ni').show();
        }
        else {
            $('#ni').hide();
        }
    });
});*/
</script>

     <style>

</style>
<?php
if (isset($_POST['Connexion']))
{
    extract($_POST);
    require_once ('nameSpace.php');
    $con = new location\dao\Utilisateur();
    $dataVerifs = $con->logon($log, $pwd);
    $exist=false;
    while($dataverif = $dataVerifs->fetch())
    {
       // echo"Bienvenue ! <br/>";
       echo "<div class='bg-info' style='margin-top:-200px;color:white;padding-top:50px;padding-bottom:20px'>
        <h1>Bonjours<br/> ".$dataverif['UserName']."</h1></div>";

       // include_once 'accueiluser.php';
      // header("Location:accueiluser.php");

      ?>
      <script>
      

                $("#mina").load("accueiluser.php", function() {


                    consol.log("accueiluser.php");

        });
        </script>
        <?php
        $exist=true;

    }
if(!$exist){
    echo "<h4 style='border-bottom: 1px solid black;width:600px'>Désoler Vous n'étes pas autorisés à acceder au contenue cette page</h4>";
}

}

?>
<?php

/*if (isset($_POST['Connexion']))
{
    extract($_POST);
    include 'nameSpace.php';
    $con = new location\dao\Utilisateur();
    $dataVerifs = $con->logon($log, $pwd);
    $exist=false;
    while($dataverif = $dataVerifs->fetch())
    {
       // echo"Bienvenue ! <br/>";
        echo "<div class='bg-info' style='margin-top:-800px;color:white;padding-top:50px;padding-bottom:20px'>
        <h1>Bonjours<br/> ".$dataverif['UserName']."</h1></div>";
        include 'AccueilUtilisateur.php';
        ?>
         <script>
         document.getElementById('mina').style.visibility = "hidden";
    </script>
            <?php
        $exist=true;

    }
if(!$exist){
    echo "<h4 style='border-bottom: 1px solid black;width:600px'>Désoler Vous n'étes pas autorisés à acceder au contenue cette page</h4>";
}

}
*/
?>
</html>
