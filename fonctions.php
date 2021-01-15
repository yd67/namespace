<?php

    /*
        - créer un namespace (première lettre du prénom + nom | ex.: dhurtrel)
        - créer une fonction checkPassword permettant de vérifier la composition d'un mot de passe :
            - 8 caractères
            - 1 caractère spécial
            - 1 minuscule
            - 1 majuscule
            - 1 chiffre
        - afficher un message 
    */
    
namespace ydarius;

$mdp='';

 /*function checkPassword($mdp){

  if(strlen($mdp>=8)){

         if (!ctype_lower($mdp)){

                if( preg_match('/([0-9])/',$mdp)){
                        
                    
                       }
                 }else{  
                      echo' votre mot de passe doit comporter au moins un chiffre';  }

        }else {
            echo'votre mot de passe doit comporter au moins  une majuscule ou un minuscule';
             }
  
     } else {
 };     echo'le mot de passe doit comporter au moins  8 caracteres'; }
*/

   function checkPassword($mdp){
                  if(strlen($mdp )>=8){
                    if (  preg_match("~[0-9]~", $mdp) ){

                        if (  preg_match("~[A-Z]~", $mdp) ){
                                 if( preg_match("~[a-z]~", $mdp)){
                                     if(preg_match("/[^a-zA-Z\d]/",$mdp)){
                                        echo' votre  mot de passe remplie tout les criteres Bravo ' ;

                                    }else{
                                        echo'le mot de passe doit contenir un caractere special ';
                                    }
                                        
                                    

                                 }else{
                                  echo'votre mot de pase ne comporte pas de minuscule';
                              }

  
                          }else{
                              echo 'votre mot de passe doit comporter une majuscule';
                          }

                      }else{
                          echo'votre mot de passe doit comporter au moins un chiffre';
                      }

                  }
              else{
                  echo'le mot de passe doit comporter au moins  8 caracteres';
              }
            
            
            }



 
?> 