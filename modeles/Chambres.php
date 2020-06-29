<?php
    class  Chambres implements IEtudiants{
        private $numchbr;
        private $typechbr;
        private $numbat;
    public function __construct($row=null){
            $this->initialize($row);

        }
    public function initialize( $row = null)
    {
        $this->numchbr=$row['numchbr'];
        $this->typechbr=$row['typechbr'];
        $this->numbat=$row['numbat'];
    }
    }
?>