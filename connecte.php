<?php
/*include 'connexion.php';

if (isset($_POST['Login']) && isset($_POST['Password'])){
extract($_POST);
$ligneTest = $bdd->query('SELECT * FROM Utilisateurs WHERE  Login = "'.$Login.'" &&  Password = "'.$Password.'" ');
$exist=true;                        //verifier si le nouveau employé existe dans notre base de donnée
if($donneeTest = $ligneTest->fetch())
{
    $exist=true;
                        //Ce nom existe dans notre base de donnée
}
else
{
    $exist=false;
   
    //Ce nom n'éxiste pas dans notre base de donnée
}



if($exist==true)                    // Si le nouveau nom existe dans notre base de donnnée alors execute tout les lignes qui sont dans le if
{
    echo 'Bienvenue'.$donneeTest['Prenom'].'<br/>Votre login est :'.$Login;
    }
if ($exist==false) {
   //.

  //include 'AccueilUtilisateur.php';
 // echo 'Bienvenue'.$UserName.'<br/>Votre login est :'.$Login;
echo 'Désolé';
 // echo  $UserName;
}
}*/


// enregistre les données dans un formulaire après avoir validé le nonce ainsi que les données en tant que tel

// ce code est destiné à être appelé via AJAX

// retournera true (encodé en json) si a réussi l'enregistrement

 
/*
require_once 'connexion.php';

 

// branchement à la base de données

// ...

 

// la valeur de retour sera à true seulement si l'enregistrement est réussi

$retour = false;

 

// si le code serveur effectuait une tâche réservée à certains usagers,

// il faudrait mettre en place un mécanisme pour vérifier les droits de l'usager authentifié. 

// rien de particulier à faire ici puisque le nonce assure que l'usager est authentifié.

 

// valider le nonce

$nonce_valide = false;

if (isset($_POST['nonce'])) {   // le nonce est stocké dans un champ caché du formulaire

    $nonce_valide = verifier_nonce($_POST['nonce'], 'enregistrer');

}

 

if ($nonce_valide) {

    // retrouver les données du formulaire qui ont été envoyées par AJAX

       $Prenom = $_POST['Prenom'];
    $Nom = $_POST['Nom'];
    $Login = $_POST['Login'];
        $Password = $_POST['Password'];

 

    // valider les données côté serveur

    $donneesValides = true;

    if ('' == $Nom) {

        $donneesValides = false;

    }
     if ('' == $Prenom) {

        $donneesValides = false;

    }

 */

   /* if ('' == $courriel) || (!filter_var($courriel, FILTER_VALIDATE_EMAIL)) {

        $donneesValides = false;

    }
*/
 

   /* if ('' == $Password) {

        $donneesValides = false;

    }
     if ('' == $Login) {

        $donneesValides = false;

    }

 

    if ($donneesValides) {

        // enregistrer les données
  $requete = "insert into Utilisateurs(IdUser,Prenom,Nom,Login,Password)
                                      values(null,:Prenom,:Nom,:Login,:Password)";
                                        $stmt = $bdd->prepare($requete);
            $stmt->execute(array(
                                     'Prenom'=>$Prenom,
                                      'Nom'=>$Nom,
                                      'Login'=>$Login,
                                      'Password'=>$Password
                                      
    ));
      


 

       

            if ($mysqli->affected_rows > 0) {

                // si problème dans la requête ou dans les paramètres, le retour est déjà à false  

                $retour = true;

            }

            $stmt->close();

        }

    }

}

 

echo json_encode($retour);

//La page Web affichant le formulaire pourra faire appel à ce code par AJAX comme suit :
//HTML
*/

// PHP
session_start();
 
include('connexion.php');
$retour = array(); //initialisation variable de retour


//Récupération PROPRE des variables AVANT de les utilser
$Login = !empty($_POST['Login']) ? $_POST['Login'] : NULL;
$Login = !empty($_POST['Password']) ? $_POST['Password'] : NULL;
$valider = !empty($_POST['Connexion']) ? $_POST['Connexion'] : NULL;


// Traitement connexion
if ($valider) {
 if ($email) {
        $sql = "SELECT * FROM users WHERE Login = :Login && Password= :Password GROUP BY email";
  $q = array(':Login'=>$Login,
  'Password'=>$Password);
  
  try{
    $req = $db->prepare($sql);
    $req->execute($q);
    $data = $req->fetch(PDO::FETCH_ASSOC);
  }catch(Exception $e){
    //en cas d'erreur dans la requete
    $retour['valid'] = 0;
    $retour['message'] = $e->getMessage();
  }
  
        if($data['nbr'] == 1) {
          $_SESSION['auth'] = 'ok';
          $_SESSION['id'] = $data ['id'];
          $_SESSION['email'] = $email;
          $retour["message"]= '<p class="success">Vous avez été connecté avec succès.</p>;';
          $retour['valid'] = 1;
          $retour['myVar']= $_SESSION['id'];
        } else {
    $retour['valid'] = 0;
    $retour["message"] = '<p class="error">Erreur lors de la connexion, veuillez vérifier votre adresse mail !</p>';
        }
    } else {
      $retour['valid'] = 0;
      $retour["message"] = '<p class="error">Vous avez oublié de remplir le champ !</p>';
    }
}else{
 $retour['valid'] = 0;
 $retour['message'] = "<p class='error'>valider n'existe pas !</p>";
}

//on retourne le résultat
/*if(isset($_POST['Password']) && isset($_POST['Login']))
{
extract($_POST);
$ligneTest = $bdd->query('SELECT * FROM Utilisateurs WHERE  Login = "'.$Login.'" &&  Password = "'.$Password.'" ');
$exist=true;                        //verifier si le nouveau employé existe dans notre base de donnée
if($donneeTest = $ligneTest->fetch())
{
    $exist=true;
                        //Ce nom existe dans notre base de donnée
}
else
{
    $exist=false;
   
      //Ce nom n'éxiste pas dans notre base de donnée
}
    if ( $exist=true)
    {
    
      $reponse = 'ok';
    }
    else
    {
      $reponse = 'Utilisateur ou mot de passe incorrect !';
    }
  }
 
}
else
{
  $reponse = 'Des valeurs ne sont pas envoyées';
}
echo json_encode($reponse);

?> 
