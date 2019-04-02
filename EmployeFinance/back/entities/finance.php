<?PHP
class employe{
	private $id;
	private $pain;
	private $patisserie;
	private $viennoiserie;
	private $divers;
	private $premiere;
	private $charge;
	private $recette;
	private $net;

    
    function __construct($id,$pain,$patisserie,$viennoiserie,$divers,$premiere,$charge,$recette,$net)
    {
		$this->id=$id;
		$this->pain=$pain;
		$this->patisserie=$patisserie;
		$this->viennoiserie=$viennoiserie;
		$this->divers=$divers;
		$this->premiere=$premiere;
		$this->charge=$charge;
		$this->recette=$recette;
		$this->net=$net;
		
	}
	
	function getid(){
		return $this->id;
	}
	
	function getpain(){
		return $this->pain;
	}
	function getpatisserie(){
		return $this->patisserie;
	}
	function getviennoiserie(){
		return $this->viennoiserie;
	}
	function getdivers(){
		return $this->divers;
	}
	function getpremiere(){
		return $this->premiere;
	}
	function getcharge(){
		return $this->charge;
	}
	function getrecette(){
		return $this->recette;
	}
	function getnet(){
		return $this->net;
	}
	
	
	function setpain($pain){
		return $this->pain=$pain;
	}
	function setpatisserie($patisserie){
		return $this->patisserie=$patisserie;
	}
	function setviennoiserie($viennoiserie){
		return $this->viennoiserie=$viennoiserie;
	}
	function setdivers($divers){
		return $this->divers=$divers;
	}
	function setpremiere($premiere){
		return $this->premiere=$premiere;
	}
	function setcharge($charge){
		return $this->charge=$charge;
	}
	function setrecette($recette){
		return $this->recette=$recette;
	}
	
	
}

?>
