function controle ()
{
    
    	var mail1=document.getElementById("mail").value;
            	var add=document.getElementById("adresse").value;

            	var reclamation=document.getElementById("description").value;

	var a="@";
    	var pt=".";
 
var name1=document.getElementById("nom").value;
var name2=document.getElementById("prenom").value;

var numero=document.getElementById("tel").value;

var position=mail1.search("@");
var position1=add.search (",");
var position2=name1.search (" ");
var nom =mail1.substring(0,mail1.indexOf(pt));
	var prenom = mail1.substring(mail1.indexOf(pt)+1,mail1.indexOf(a));
if (name1.length == 0)  {alert("Veuillez remplir le champ nom   ");}
if (name2.length == 0)  {alert("Veuillez remplir le champ prenom   ");}

else if (numero.length!=8  ) {alert("Votre numéro doit comporter 8 chiffres ")}
else if (add.length == 0)  {alert("Veuillez saisir votre adresse  ");}
else if (position1 == -1) {alert("L'adresse doit contenir le caractére ',' ");}
else if (mail1.length == 0)  {alert("Veuillez saisir votre adresse mail  ");}
else if  (position == -1) {alert("L'adresse mail doit contenir le caractére '@' : veuillez la saisir correctement ")}
else if (reclamation.length < 15) {alert("Une reclamation doit contenir au moins 15 caractéres ")}
else
	alert ("Merci pour votre contribution "+ name1);




}


function controle2()
{

document.getElementById("form").addEventListener("submit", function(e)
{

   var erreur; 
   var idc = document.getElementById("idc"); 
   var ndc = document.getElementById("ndc"); 
   var mdp = document.getElementById("mdp");
   var categorie =document.getElementById("categoriec");
  

   if (!idc.value)
   {
      erreur="Veuillez renseigner l'id du client"
   }

   if (!ndc.value)
   {
      erreur="Veuillez renseigner le nom de compte"
   }

   if (!mdp.value)
   {
      erreur="Veuillez renseigner le mot de passe"
   }
   if(!categorie.value)
   {
   erreur="Veuillez renseigner la categorie du client"
   }
  
   
   if (erreur)
   {
      e.preventDefault(); 
    
      alert('erreur');
      return false; 
   }
    else
    {
         alert('Ajout de client effectué');
    }


});



function controlemdp()
{
		var mdp1=document.getElementById("mdp").value;
            	var mdp2=document.getElementById("cmdp").value;
					
					
					if (mdp1 == mdp2 )
					alert("Inscription réussie");
					else
					alert ("Les mots de passe sont différents !");
	
}
}
