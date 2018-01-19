<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'AccueilUtilisateur.php';
    ?>
    <div class="bg-info " style="padding-bottom:50px;color:white">
    <h3>Vous avez demander la liste des utilisateurs ?</h3>
    <table border="2" style="width: 800px; margin-left: 200px;">
        <tr style="background: grey;height: 35px">
            <th>Utilisateur</th>
            <th>Login</th>
            <th>Password</th>
            <th>Profil</th>

        </tr>
        <?php
        include 'nameSpace.php';
        $User = new location\dao\Utilisateur();
        $don = $User->listeUser();
        while($row = $don->fetch()){
    ?>
            <tr>
                <th><?php echo $row['UserName']?></th>
                <th><?php echo $row['Login']?></th>
                <th><?php echo $row['Password']?></th>
                <th value=""> <?php echo $row['NomProfil'];?>
                            </th>
                      <?php
                        }
                    
                        ?>
           
            </tr>
          
       
    </table></div>

</body>
</html>