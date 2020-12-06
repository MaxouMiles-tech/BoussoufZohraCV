// validation java du formulaire contact
document .querySelector("#verifcontact").onsubmit = function checkForm()
{
    // variable a true qui sera verifier à chaque condition
    let check = true;

// creation des variable obligatoire: on recupere les valeurs entrées grace à l'identifiant
    let nom = document.getElementById("nom").value;
    let email = document.getElementById("mail").value;
    let message = document.getElementById("message").value;

// regex qui accepte tous les caracteres de l'alphabet avec un min d'un caractere
    let filtrealpha = new RegExp (/^[A-Za-z -]+$/);

// chaque champ est teste par une expression reguliere et retourne la variable à false
    if (!filtrealpha.test(nom) )
    {
// un message d'erreur est ecrit à la suite du champ
        document.getElementById("errorNom").innerHTML = "Le Nom doit comporter au moins 1 caractère !";
        check = false;
    }
    else
    {
// reinitialise le champ erreur
        document.getElementById("errorNom").innerHTML = "";
    }

// regex qui controle la presence d'un @
    let filtremail = new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
    if (!filtremail.test(email))
    {
        document.getElementById("errorMail").innerHTML = "L'adresse email doit comporter un '@' !";
        check =  false;
    }
    else
    {
        document.getElementById("errorMail").innerHTML = "";
    }
    if (!filtrealpha.test(message))
    {
        document.getElementById("errorMessage").innerHTML = "Votre message doit comporter au moins 1 caractère !";
        check = false;
    }
    else
    {
        document.getElementById("errorMessage").innerHTML = "";
    }

// si tout se passe bien la variable est retourner sans modification
    return check;
}
