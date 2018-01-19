<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bomohgfotstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

      #control{
width:400px;
margin-left: 60px;
border-radius:0px;
      }
      #form{
width:400px;
margin-left: 60px;
border-radius:0px;
      }
    .mark {
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
  .mark i {
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
  <body>
<div class="container " id="mina">
  <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:220px;margin-top:60px">
  <img src="pont.png" alt="" style="margin-left:145px;margin-top:-170px">

  <form class="form mike" action="" method="post" id="con" >
    <fieldset >
        <legend>EasyConnexion</legend>
        <div class="alert alert-danger" id="ni">
         <div class="loader"></div> 
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
  <form class="form mike" action="ajoutuser.php" method="post" style="visibility:hidden" id="mik">
        <fieldset style="">
            <legend>Inscription EasyLife</legend>
            <div class="alert alert-danger" id="ni">
  <strong>Danger!</strong>Remplir correctement   <ul></ul>
</div>
        
           <small><a href="#" id="li">J'ai déjà un compte</a></small> <br/><br/>
            <label for="">Prenom de l'utilisateur :</label>
            <input type="text" id="Prenom" class="form-control" name="UserName" style="" value=""><br/>
            <label for="">Nom de l'utilisateur :</label>
            <input type="text" id="Nom" class="form-control" name="UserName" style="" value=""><br/>
            <label for="">Login :</label>
            <input type="text" id="Login" class="form-control log" name="Login" style="" val-champ="Login"  value=""><br/>
            <label for="">Mot de passe :</label>
            <span>   <i class="fa fa-lock" aria-hidden="true"></i>
</span> <input type="password" id="Password" class="form-control" name="Password" style=""  ><br/><br/>

                   <a href="#" id="i" class="btn ">Enregistrer</a>
        </fieldset>

    </form>
   
    
            
  <!-- Trigger the modal with a button -->
 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Nouveau Enregistrement</button>
 -->
  <!-- Modal -->
  <!--<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
   -->
      <!-- Modal content-->
    <!--    <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fiche d'Enregistrement</h4>
            </div>
            <div class="modal-body">
            <form action="ajoutuser.php" method="post">

              <table> 
              <tr>
                        <td>Prenom</td>
                        <td><input type="text" id="Prenom" name="Prenom" placeholder="Prenom"></td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><input type="text" id="Nom" name="Nom" placeholder="Nom"></td>
                    </tr>
                    
                    <tr>
                        <td>LOgin</td>
                        <td><input type="text" name="nom" id="Login" placeholder="Login"></td>
                    </tr>
                    <tr>
                        <td>Mot de Passe</td>
                        <td><input type="text" name="tel" id="Password" placeholder="Mot de passe"></td>
                    </tr>
                    <tr>
                    <td><label for="">Profil :</label></td>
           <td> <select class="form-group custom-select form-control" style="margin-left: 24px; height: 35px;border-radius:0px" id="IdProfil" name="IdProfil" >
                            <option value="" >Séléctionner Votre Profil</option>-->
                        <?php
                      /*  include 'connexion.php';
                        $ligne0 = $bdd->query('SELECT * FROM Profil');
                        while ($donnee0 = $ligne0->fetch())
                        {
                        ?>
                            <option value="<?php echo $donnee0['IdProfil'];?>"> <?php echo $donnee0['NomProfil'];?> </option>
                        <?php
                        }*/
                        ?>
                      <!--  </select></td>
                    </tr>
              </table>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" id="mya" name="Enregistrer" class="btn btn-default" data-dismiss="modal">Enregistrer</button>

            </div>
        </div>
    </div>
  </div> -->
 

  


     </body>
     <script>
             function champObligatoire(champ) {
      if (champ.val() == "") {

          return "Veuillez Remplir le champ " + champ.attr("val-champ");
      } else

          return "";
  }
        $('#ki').click(function connexion() {
    
        var champs = $("#con input:text,#con input:password");
        $.each(champs, function() {
            var error = (champObligatoire($(this)));
            if (error != "") {
                // $("#ni ul").html("");
                //$('#ki').attr('href', "accueiluser.php");
                $("#ni ul").append("<li>" + error + "</li>");

                $("#ni ul li").css("color", "black");

            } else {
                      var Login = $("#control").val();
        var Password = $("#form").val();

        /* DATASTRING */
        var dataString = 'Login=' + Login + '&Password=' + Password;

        console.log(dataString);


        $.ajax({
            type: "POST",
            url: "connecte.php",
            data: dataString,
            /* UNCOMMNENT TO SEND TO CONSOLE */
            /*
            console.log (dataString);	
            console.log ("AJAX DONE");
            */
            success: function(server_reponse) {
                console.log(server_reponse);
                /* UNCOMMNENT TO SEND TO CONSOLE */
                /*
                console.log (dataString);	
                console.log ("AJAX DONE");
                */
            }
        });

            }


        });
       
        //EOC

    }); //EOF

 /* $(document).ready(function(){

// notre code ici

$('#control').keyup(function(){

if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5

    $(this).css({ // on rend le champ rouge

        borderColor : 'red',

    color : 'red'

    });
    $('.vat').html("Login trop courts");
    $('.vat').css({ // on rend le champ rouge

borderColor: 'red',

color: 'red'

});
 }

 else{
   // $(this).css({});
    $(this).css({ // si tout est bon, on le rend vert

     borderColor : 'green',

     color : 'green'

 });
 $('.vat').html("Parfait");
 $('.vat').css({ // on rend le champ rouge

borderColor: 'green',

color: 'green'

});
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
    $('.va').html("Mot de passe trop court");
    $('.va').css({ // on rend le champ rouge

borderColor: 'red',

color: 'red'

});
 }

 else{
   // $(this).css({});
    $(this).css({ // si tout est bon, on le rend vert

     borderColor : 'green',

     color : 'green'

 });

 $('.va').html("Parfait !");
 $('.va').css({ // on rend le champ rouge

borderColor: 'green',

color: 'green'

});
 }

});
});
*/
</script>
<?php
/*if (isset($_POST['Connexion']))
{
    extract($_POST);
    require_once ('nameSpace.php');
    $con = new location\dao\Utilisateur();
    $dataVerifs = $con->logon($log, $pwd);
    $exist=false;
    while($dataverif = $dataVerifs->fetch())
    {
       // echo"Bienvenue ! <br/>";
    //   echo "<div class='bg-info' style='margin-top:-200px;color:white;padding-top:50px;padding-bottom:20px'>
      //  <h1>Bonjours<br/> ".$dataverif['UserName']."</h1></div>";

       include 'accueiluser.php';
    

      ?>
       <script>
              $('#mina').hide();
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
