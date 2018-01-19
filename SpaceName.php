<?php

namespace location\dao;
use PDO;
class Biens
        {
            var $IdBien;
            var $NomBien;
            var $Addresse;
            var $Price;
            var $Commission;
            private $bdd;
           // IdBien 	NomBien 	Addresse 	Price 	Commission 	IdType 	IdProp 
           private function getConnexion(){
            try{
                if($this->bdd == null){
                    $this->bdd = new PDO('mysql:host=;dbname=BdLocation;charset=utf8', 'root', 'Minetou&É',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }
            }
            catch(Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
        }
    
            public function addBiens()
            {
            
                $this->getConnexion();
                // requete a executer
               $sql = "insert into Biens(NomBien,Addresse,Price,Commission,Etat,IdType,IdProp)
                          values(:NomBien,:Addresse,:Price,:Commission,:Etat,:IdType,:IdProp )";
                // preparation de la requete
                $req = $this->bdd->prepare($sql);
                //execution de la requete
                $donn = $req->execute(
                    array(
                          'NomBien'=>$this->NomBien,
                          'Addresse'=>$this->Addresse,
                          'Price'=>$this->Price,
                          'Commission'=>$this->Commission,
                          'Etat'=>$this->Etat,
                          'IdType'=>$this->IdType,
                          'IdProp'=>$this->IdProp
                       ));
                return $donn;
              //  header('Location:Accueilbiens.php');
               // echo 'Helloadd world ! <br>';
            }
  /*'IdType'=>$this->IdType,
                          'IdProp'=>$this->IdProp*/

            function listeBien()
            {
                $this->getConnexion();
                $sl = 'SELECT * FROM Biens, Propriétaires,TypeBien WHERE Biens.IdProp = Propriétaires.IdProp && Biens.IdType = TypeBien.IdType';
                $onnes = $this->bdd->query($sl);
                return $onnes;
                /*$this->getConnexion();
                // requete a executer
               $sl = "select * from Biens";
                // preparation de la requete
                $donnes = $this->bdd->query($sl);
                return $donnes;
            }*/
        }
        function listeEtat(){
            $this->getConnexion();
            $sl = "select * from Biens";
                // preparation de la requete
                $onn = $this->bdd->query($sl);
                return $onn;
       
        }
        function listeBYtype(){
            $this->getConnexion();
                $sl = 'SELECT * FROM Biens,TypeBien WHERE Biens.IdType = TypeBien.IdType';
                $ones = $this->bdd->query($sl);
                return $ones;
        }
        function listeBYprop(){
            $this->getConnexion();
            $sl = 'SELECT * FROM Biens,Propriétaires WHERE Biens.IdProp = Propriétaires.IdProp';
            $donnes = $this->bdd->query($sl);
            return $donnes;
        }
        function modifBien(){
            $this->getConnexion();
//$dat="select * from Biens";
           
           // $onn = $this->bdd->query($dat);
            $sql = ('UPDATE Biens
        SET
        NomBien=":NomBien", Addresse=":Addresse",Price=":Price",Commission=":Commission",Etat=":Etat"');
                   $donn = $this->bdd->query($sql);
       $donn = $sql->execute(
                    array(
                          'NomBien'=>$this->NomBien,
                          'Addresse'=>$this->Addresse,
                          'Price'=>$this->Price,
                          'Commission'=>$this->Commission,
                          'Etat'=>$this->Etat,
                         // 'IdType'=>$this->IdType,
                         // 'IdProp'=>$this->IdProp

                       ));
                return $donn;
           

        }
    
    }