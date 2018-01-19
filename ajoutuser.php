<?php
include 'connexion.php';

if (isset($_POST['Login'])){
extract($_POST);

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

                            // requete a executer
                           $sql = "insert into Utilisateurs(IdUser,Prenom,Nom,Login,Password)
                                      values(null,:Prenom,:Nom,:Login,:Password)";
                                        $req = $bdd->prepare($sql);
            $req->execute(array(
                                     'Prenom'=>$Prenom,
                                      'Nom'=>$Nom,
                                      'Login'=>$Login,
                                      'Password'=>$Password
                                      
    ));
    //Ce nom n'éxiste pas dans notre base de donnée


}

if($exist==true)                    // Si le nouveau nom existe dans notre base de donnnée alors execute tout les lignes qui sont dans le if
{
   // echo "<h6 style='width: 800px; margin: auto; border-bottom: 1px solid black;'>Un utilisateur nommé <span>".$donneeTest['Prenom']."</span> existe dans notre base de donnée avec <span>le même login</span> que vous nous avez renseigner !</h6>";
}
if ($exist==false) {
   //.

  //include 'AccueilUtilisateur.php';
 echo 'Bienvenue'.$Prenom.'<br/>Votre login est :'.$Login;
 }
        
}


?>

