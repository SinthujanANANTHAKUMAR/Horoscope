<?php
include 'models/data.php';
        function getConnexion($username,$password){
            $sql="SELECT COUNT(*) FROM connexion WHERE username='$username' and password='$password'";
            return executerRequete($sql)->fetchAll();
        }
         
    
    function getLesSignes(){
        $sql="SELECT * from astrologie ";
        return executerRequete($sql)->fetchAll();
    }
    
    
    function getLeSigne($liste){
        $sql="SELECT horoscope='$liste' from astrologie";
        return executerRequete($sql)->fetchAll();
    }
    