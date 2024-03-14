<?php
include 'models/data.php';
        function getConnexion($username,$password){
            $sql="SELECT COUNT(*) FROM connexion WHERE username='$username' and password='$password'";
            return executerRequete($sql)->fetchAll();
        }
         
    
    function getLesSignes(){
        $signe = signe();
        return $signe;
    }
    
    
    function getLeSigne($liste){
               $signe = signe(); 
             return $signe[$liste];
    }
    