<?php

        if(!function_exists('confirm_mail')) {

            function confirm_mail($company) {

                $destinataire = $company->email;
                $sujet = "Activer votre compte";
                $entete = "From: https://www.itfreakz.bplaced.net/fixsave/register";

                $message ="Bienvenue sur votre Site,
                Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
                ou copier/coller dans votre navigateur Internet 
                
                http://localhost:8000/register_mail/".$company->name."/".$company->password." 
                
                
                -------------------
                Ceci est un maail automatique , merci de ne pas y repondre .";


                return mail($destinataire, $sujet, $message, $entete);



            }
        }




?>
