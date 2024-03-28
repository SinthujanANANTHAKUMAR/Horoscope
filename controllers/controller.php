<?php
switch ($action)
{
    case 'reponse':
        {
            var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            $horoscopes= getLeSigne($liste);
            var_dump($horoscopes);
            $horoscope=$horoscopes['horoscope'];
            include 'views/reponse.php';
            
            break;
        }
        case 'connexion':{
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            $flag = getConnexion($username,$password);
            var_dump($flag);

            if ($flag['nb']==1){

                 $signe = getLesSignes();
               

                include 'views/choix.php';
            }
            else{
                include 'views/connexion.php';
            }
            break;
            
        }

        case 'modifier':{  
            $signe = getLesSignes();
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

