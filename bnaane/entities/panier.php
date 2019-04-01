<?php 
class evenement
{
	private $ide;
	private $typee;
	private $descriptione;
	private $prixe;

	function __construct($ide,$typee,$descriptione,$prixe)
	{	
		$this->ide=$ide;
		$this->typee=$typee;
		$this->descriptione=$descriptione;
		$this->prixe=$prixe;
		


	}
    function getide() {return $this->ide ;}
    function gettypee() {return $this->typee ;}
    function getdescriptione() {return $this->descriptione ;}
    function getprixe() {return $this->prixe ;}
   

    function setide($ide) {$this->ide=$ide ;}
    function settypee($typee) {$this->typee=$typee ;}
    function setqt($descriptione) {$this->descriptione=$descriptione ;}   
    function setprix($prixe) {$this->prixe=$prixe ;}


}


 ?>