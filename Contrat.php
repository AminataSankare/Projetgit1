<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bomohgfotstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <div class="alert alert-danger row" id="ni">
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
   
    
            
 <!--Trigger the modal with a button-->
<!-- Trigger the modal with a button -->
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>


     </body>