<?php 
class promotion
{
	private $idprod;
	private $valeur;
	private $nomp;
	private $dateA;
	private $dateE;
	private $prix1;
	
	

	function __construct($idprod,$nomp,$valeur,$dateE,$prix1)
	{
		$this->idprod=$idprod;
		$this->nomp=$nomp;
		$this->valeur=$valeur;
		$this->dateA=date("Y-m-d");
		$this->dateE=$dateE;
		$this->prix1=$prix1;
		
		
	}

    function getidprod() {return $this->idprod ;}
    function getnomp() {return $this->nomp ;}
    function getvaleur() {return $this->valeur ;}
    function getdateE() {return $this->dateE ;}
    function getdateA() {return $this->dateA ;}
    function getprix1() {return $this->prix1 ;}
 
    

    function setidprod($idprod) {$this->idprod=$idprod ;}
    function setnomp($nomp) {$this->nomp=$nomp ;}
    function setvaleur($valeur) {$this->valeur=$valeur ;}
    function setdateE($dateE) {$this->dateE=$dateE ;}
    function setprix1($prix1) {$this->prix1=$prix1 ;}
    

}


 ?>