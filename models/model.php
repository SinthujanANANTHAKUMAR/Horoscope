<?php
include 'models/data.php';
        function getConnexion($username,$password){
            $sql="SELECT COUNT(*) as nb FROM connexion WHERE username='$username' and password='$password'";
            return executerRequete($sql)->fetch();
        }
         
    
    function getDataSignes(){
        $sql="SELECT * FROM astrologie";
        var_dump($sql);
        return executerRequete($sql)->fetchAll();
    }
    function getLesSignes(){
       $tab=getDataSignes();
       foreach ($tab as $k):
        $signes[$k['signe']]=$k['horoscope'];
        endforeach;
        return $signes;
    }
    
    
    function getLeSigne($liste){
        $sql="SELECT * FROM astrologie where signe = '$liste'";
        return executerRequete($sql)->fetch();
    }
    