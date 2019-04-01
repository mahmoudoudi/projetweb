<?php 
class client
{
	private $idc;
	private $ndc;
	private $mdp;
	private $categoriec;

	

	function __construct($idc,$ndc,$mdp,$categoriec)
	{
		$this->idc=$idc;
		$this->ndc=$ndc;
		$this->mdp=$mdp;
				$this->categoriec=$categoriec;

	
		

	}

    function getidc() {return $this->idc ;}
    function getndc() {return $this->ndc ;}
    function getmdp() {return $this->mdp ;}
    function getcategoriec() {return $this->categoriec ;}
   
    

    function setidc($idc) {$this->idc=$idc ;}
    function setndc($ndc) {$this->ndc=$ndc ;}
    function setmdp($mdp) {$this->mdp=$mdp ;}
    function setcategoriec($categoriec) {$this->categoriec=$categoriec;}
  


}


 ?>