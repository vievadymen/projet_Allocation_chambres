<?php
    class Etudiants  implements IEtudiants{
        private $mat;
        private $id;
        private $nom;
        private $prenom;
        private $email;
        private $tel;
        private $adr;
        private $naiss;
    public function __construct($row=null){
            $this->initialize($row);

        }
    public function initialize( $row = null)
    {
        if($row!=null){
        $this->mat=$row['mat'];
        $this->prenom=$row['prenom'];
        $this->nom=$row['nom'];
        $this->email=$row['email'];
        }
    }
 }
?>