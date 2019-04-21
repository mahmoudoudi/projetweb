/*********************************/

/****************************************/


 function surligne(champ, erreur)
{
   if(erreur)
   { champ.style.backgroundColor = "#fba";  
   }
   else
      champ.style.backgroundColor = "";
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifref(champ)
{
	 var zip = parseInt(champ.value);
   if(isNaN(zip) || zip <0 || zip >999)
   {  document.getElementById("identifiant").addEventListener("submit", function(event){
     event.preventDefault()
   });
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function veriftel(champ)
{
    var zip = parseInt(champ.value);
   if(isNaN(zip) || zip.length==8 )
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifnom(champ)
{
      var exp = new RegExp("^[a-z\- ]+$","i");
       if(!exp.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }

}

/*******************Boulangerie***************************/
document.getElementById("form").addEventListener("submit", function(e)
{

   var erreur; 
   var Nom = document.getElementById("nom"); 
   var Quantite = document.getElementById("quantite");
   var Identifiant =document.getElementById("identifiant");
   var Prix=document.getElementById("prix");

   if (!Nom.value)
   {
      erreur="Veuillez renseigner le nom"
   }

   

   if (!Quantite.value)
   {
      erreur="Veuillez renseigner la quantité"
   }
   if(!Identifiant.value)
   {
   erreur="Veuillez renseigner l'identifiant"
   }
   if(!Prix.value)
    {
   erreur="Veuillez renseigner le prix"

     }   
   
   if (erreur)
   {
      e.preventDefault(); 
      
      alert('erreur veuillez remplir tous les champs');
      return false; 
   }
    else
    {
         alert('formulaire envoye avec succés');
    }


});

/*******************Patisserie***************************/
document.getElementById("form1").addEventListener("submit", function(e)
{

   var erreur; 
   var Nom = document.getElementById("nom1"); 
   
   var Quantite = document.getElementById("quantite1");
   var Identifiant =document.getElementById("identifiant1");
   var Prix=document.getElementById("prix1");

   if (!Nom.value)
   {
      erreur="Veuillez renseigner le nom"
   }

   

   if (!Quantite.value)
   {
      erreur="Veuillez renseigner la quantité"
   }
   if(!Identifiant.value)
   {
   erreur="Veuillez renseigner l'identifiant"
   }
   if(!Prix.value)
    {
   erreur="Veuillez renseigner le prix"

     }   
   
   if (erreur)
   {
      e.preventDefault(); 
      
      alert('erreur veuillez remplir tous les champs');
      return false; 
   }
    else
    {
         alert('formulaire envoye avec succés');
    }


});
