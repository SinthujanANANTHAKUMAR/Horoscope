<?php
include 'models/data.php';
    function getConnexion($username,$password){
                $login = connexion();
                $flag = false;
                foreach ($login as $userId => $userData){
                if(isset($userData[$username]) && $userData[$username]== $password)
                {
                    $flag=true;
                }
                }
             return $flag;   
    }
    
    function getLesSignes(){
        $signe = signe();
        return $signe;
    }
    
    
    function getLeSigne($liste){
               $signe = signe(); 
             echo $signe[$liste];
    }
    