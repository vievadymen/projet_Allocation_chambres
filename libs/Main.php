<?php
class Main {
    private $pdo = null;
    protected $ClassName;
    
    private function getConnexion(){
        if($this->pdo==null){
            try {
               $this->pdo = new PDO('mysql:host=localhost;dbname=gestion_allocation_logement', "root", "");
               $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO :: FETCH_ASSOC);
            } catch (PDOException $e) {
                die ("Erreur de connexion".$e->getMessage());
            }
        }
    }
    private function CloseConnexion(){
        if($this->pdo!=null){
            $this->pdo=null;
    }

}
//pour les requetes select
public function executeSelect($req){
    $this->getConnexion();
    $result=$this->pdo->query($req);
    $tab=[];
    foreach ($result as $value) {
       $tab[]= new $this->ClassName($value);
    }
    return $tab;
    $this->CloseConnexion();
}
//pour les mise à jour
 
public function executeUpdate($req){
    $this->getConnexion();
    $row=$this->pdo->exec($req);
}