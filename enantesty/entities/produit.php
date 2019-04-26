<?PHP
class Produit
{
	private $identifiant;
	private $nom;
	private $url;
	private $numcat;
	private $quantite;
	private $prix;
	/****constructeur*****/
	function __construct($id,$nom,$url,$numcat,$qt,$prix){
		$this->identifiant=$id;
		$this->nom=$nom;
		$this->url=$url;
		$this->numcat=$numcat;
		$this->quantite=$qt;
		$this->prix=$prix;
	}
	/***getters et setters****/
	function getCin(){
		return $this->identifiant;
	}
	function getNom(){
		return $this->nom;
	}
	function getUrl(){
	return $this->url;
	}
	function getNumcat(){
	return $this->numcat;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
    function setUrl($url)
	{  $this->url=$url;
	}
	function setNumcat($numcat)
	{  $this->numcat=$numcat;
	}
	function setQuantite($qt){
		$this->quantite=$qt;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
}

?>