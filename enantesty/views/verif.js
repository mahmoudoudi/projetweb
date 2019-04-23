document.getElementById("form").addEventListener("submit", function(e)
{

   var erreur; 
   var ide = document.getElementById("ide"); 
   var typee = document.getElementById("typee"); 
   var prixe = document.getElementById("prixe");
   var descriptione=document.getElementById("descriptione");

   if (!ide.value)
   {
      erreur="Veuillez remplir tous les champs"
   }

   if (!typee.value)
   {
      erreur="Veuillez remplir tous les champs"
   }

   if (!prixe.value)
   {
      erreur="Veuillez remplir tous les champs"
   }
   if(!descriptione.value)
   {
   erreur="Veuillez remplir tous les champs"
   }
  
   
   if (erreur)
   {
      e.preventDefault(); 
      alert(erreur);
      return false; 
   }
    else
    {
         alert('evenement ajouté');
    }


});