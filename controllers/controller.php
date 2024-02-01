<?php
switch ($action)
{
    case 'reponse':
        {
            var_dump($_REQUEST);
            echo $signe["Sagittaire"];
            $liste=$_REQUEST['nom'];
            break;
        }
    default:
    {include 'views/choix.php';}
}
