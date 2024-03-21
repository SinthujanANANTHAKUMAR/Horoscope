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
                
                $data = getLesSignes();
                
                $signe[$data[0]['signe']]=$data[0]['horoscope'];
                foreach ($data as $k): 
                    $signe[$data['signe']]=$data['horoscope'];
                endforeach;
                var_dump($data);
                include 'views/choix.php';
            }
            else{
                include 'views/connexion.php';
            }
            break;
            
        }

        case 'modifier':{  
            $signe = signe();
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

