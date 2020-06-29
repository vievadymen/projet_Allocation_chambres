<?php
    class Boursiers extends Etudiants{
        private  $adr;
        public function__construct($row= null){
            $this->initialize($row);

        }
    public function initialize( $row = null)
    {
        $this->$adr=$row['adr'];
    }
    }
?>