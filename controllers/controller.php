<?php
switch ($action)
{
    case 'reponse':
        {
            var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            $texte= getLeSigne($liste);
            include 'views/reponse.php';
            break;
        }
        case 'connexion':{
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            $flag = getConnexion($username,$password);
            
            if ($flag){
                $signe = getLesSignes();
                include 'views/choix.php';
            }
            else{
                include 'views/connexion.php';
            }
            break;
            
        }

        case 'modifier':{  
            
            include 'views/admin.php';
            break;
        }

        case 'administrer':{
            var_dump($_REQUEST);
            break;
        }
           
            
    default:
    {include 'views/connexion.php';}
}

