<?php
    class Boursiers extends Etudiants{
        private  $typeBourse;
        public function__construct($row= null){
            $this->initialize($row);

        }
    public function initialize( $row = null)
    {
        $this->$typeBourse=$row['typeBourse'];
    }
    }
?>