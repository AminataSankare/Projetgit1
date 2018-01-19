<?php

namespace location\dao;
use \PDO;
       
                    class Utilisateur
                         {
                            var $idUser;
                            var $UserName;
                            var $Login;
                            var $Password;
                            var $Profil;
                           // idUser 	UserName 	Login 	Password 	Profil
                            private $bdd;
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
                            public function Npwd(){

                            }
                            public function logon($log,$pwd){
                                //loger un utilisateur
                                $this->getconnexion();
                                $sql = "SELECT * FROM Utilisateurs WHERE Login ='".$log."' AND Password='".$pwd."'" ;
                                $donnees = $this->bdd->query($sql);
                                return $donnees;
                            }
                            public function addUser()
                            {
                                $this->getConnexion();
                            // requete a executer
                           $sql = "insert into Utilisateurs(UserName,Login,Password,IdProfil)
                                      values(:UserName,:Login,:Password,:IdProfil)";
                            // preparation de la requete
                            $req = $this->bdd->prepare($sql);
                            //execution de la requete
                            $don = $req->execute(
                                array(
                                      'UserName'=>$this->UserName,
                                      'Login'=>$this->Login,
                                      'Password'=>$this->Password,
                                      'IdProfil'=>$this->IdProfil,
                                   
                                 

                            ));
                            return $don;
                                // echo 'Hello world ! <br>';
                            }
                            function listeUser()
                            {
                                $this->getConnexion();
                                // requete a executer
                               $sql = "select * from Utilisateurs,Profil where Utilisateurs.IdProfil=Profil.IdProfil";
                                // preparation de la requete
                                $donnees = $this->bdd->query($sql);
                                return $donnees;
                            }
                          
                         }
?>
