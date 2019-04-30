function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

/**********************************************************************************/
function veriflong()
{var name = document.getElementById("name").value;
var pwd = f.pwd.value;
var lastname = f.lastname.value;
var mail = f.mail.value;
var adresse= f.adresse.value;
var phonenumber=f.phonenumber.value;
if( mail.length== 0 || pwd.length== 0 || name.length==0 || lastname.length==0 || phonenumber.length==0 || adresse.length==0 )
{
alert("Tous les champs doivent être remplis.");
return false;
}
else return true;
}
/**************************************************************************************/
function verifmail(champ)
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

/***************************************************************************/
function verifpwd(champ)
{ if(champ.value.length < 8)
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
/*******************************************************************************/
function veriftel(champ)
{ var num = parseInt(champ.value);
   if(isNaN(num) || champ.value.length!=8)
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
/*****************************************************************************/
function verifForm(f)
{
  
   var mailOk = verifmail(f.mail);
   var pwdOk=verifpwd(f.pwd);
   var telOk=veriftel(f.phonenumber);
   
   if( mailOk && pwdOk && telOk)
   { var longOk = veriflong();
     if(longOk)
	 { alert( f.lastname.value + " " + f.name.value + ",votre compte a été crée ");  
       window.location="index.html";
      return true;
	 }
	  
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}