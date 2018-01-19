<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Accueil logg</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>

<body>
    <div class="container">
        <!-- Codrops top bar -->
        <div class="codrops-top">

            <!--  <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Retour à l'accueil</strong>
                    </a>
                </span>
            <div class="clr"></div>-->
        </div>
        <!--/ Codrops top bar -->

        <section>
            <div id="container_demo" style="margin-top:90px">

                <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>

                <div id="wrapper">

                    <div id="login" class="animate form">
                        <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:50px;margin-top:-270px;margin-bottom:130px">
                        <img src="pont.png" alt="" style="margin-left:-435px;margin-top:-165px;">

                        <form action="#" methode="post" autocomplete="on" style="margin-top:-90px">
                            <h1>EasyConnection</h1>

                            <p>
                                <label for="username" class="uname" data-icon="u">Login </label>
                                <input id="username" name="log" required="required" type="text" placeholder="Login" />
                            </p>
                            <p>
                                <label for="password" class="youpasswd" data-icon="p"> Mot de passe</label>
                                <input id="password" name="pwd" required="required" type="password" placeholder="Mot de passe" />
                            </p>
                            <p class="keeplogin">
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                <label for="loginkeeping">Je reste connecter</label>
                            </p>
                            <p class="login button">
                                <input type="submit" value="Connexion" />
                            </p>
                            <p class="change_link">
                                J'ai pas de compte
                                <a href="#toregister" class="to_register">Join us</a>
                            </p>
                        </form>
                    </div>

                    <div id="register" class="animate form">
                        <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:50px;margin-top:-270px;margin-bottom:130px">
                        <img src="pont.png" alt="" style="margin-left:-435px;margin-top:-165px;">

                        <form action="#" autocomplete="on" style="margin-top:-90px">
                            <h1> EasyChange</h1>
                            <p>
                                <label for="usernamesignup" class="uname" data-icon="u">Login</label>
                                <input id="usernamesignup" name="log" required="required" type="text" placeholder="Login" />
                            </p>

                            <p>
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Mot De Passe </label>
                                <input id="passwordsignup" name="pwd" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p>
                                <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirme</label>
                                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p class="signin button">
                                <input type="submit" value="Sign up" />
                            </p>
                            <p class="change_link">
                                Already a member ?
                                <a href="#tologin" class="to_register"> Go and log in </a>
                            </p>
                        </form>
                    </div>
                    <div id="register" class="animate form">
                        <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:50px;margin-top:-270px;margin-bottom:130px">
                        <img src="pont.png" alt="" style="margin-left:-435px;margin-top:-165px;">

                        <form action="" autocomplete="on" style="margin-top:-90px">
                            <h1> EasyRegistration</h1>
                            <p>
                                <label for="usernamesignup" class="uname" data-icon="u">Login</label>
                                <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Login" />
                            </p>

                            <p>
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Mot De Passe </label>
                                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p>

                            </p>
                            <p class="signin button">
                                <input type="submit" value="Sign up" />
                            </p>
                            <p class="change_link">
                                Already a member ?
                                <a href="#tologin" class="to_register"> Go and log in </a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </div>
</body>

</html>
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

        $exist=true;

    }
if(!$exist){
    echo "<h4 style='border-bottom: 1px solid black;width:600px'>Désoler Vous n'étes pas autorisés à acceder au contenue cette page</h4>";
}

}

?>