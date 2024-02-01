<?php
switch ($action)
{
    case 'reponse':
        {
            var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            echo $signe[$liste];
 
            break;
        }
        case 'connexion':{
            var_dump($_REQUEST);
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            
            break;
        }
            
    default:
    {include 'views/connexion.php';}
}

