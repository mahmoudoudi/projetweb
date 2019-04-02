function test(){
var mail = f.mail.value;
var pwd = f.pwd.value;
var a = "@";

if( mail.length== 0 || pwd.length== 0 || name.length==0 || lastname.length==0 || phone-number.length==0 || adresse.length==0)
{
alert("Vérifiez vos paramètres.");
}


else
{if( pwd.length< 8){alert("Votre mot de passe doit contenir au moins 8 caractères."):}
//else if (){}	
else
{
var prenom = f.lastname.value;
var nom = f.name.value;
alert( prenom + " " + nom+ ",votre compte a ete crée ") ;
window.location="index.html";} //trajeek lel page edhika
}
}

