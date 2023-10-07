<?php

function retrieveDB($requete, $colonne){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'cicuriz';
    
    //On essaie de se connecter
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dataBase", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($requete);
        $stmt->execute();
        $dataTable = array(array());
        $i = 0;
        $state = "success";
        while ($result=$stmt->fetch()) {
            for ($j=0; $j < $colonne ; $j++) { 
                $dataTable[$i][$j] = $result[$j];
            }
            $i++;
        }
    }

    /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        $state = "Failed";
    }
    return $dataTable;
    $conn = null;
}

function retrieveLineDB($requete){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'cicuriz';
    $i = 0;
    //On essaie de se connecter
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dataBase", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($requete);
        $stmt->execute();
        
        $state = "success";
        while ($result=$stmt->fetch()) {            
            $i++;
        }
    }

    /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    $state = "Failed";
    }
    $conn = null;
    return $i;
}

function queryDB($requete){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'cicuriz';
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dataBase", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec($requete);
        $resultat = 1;
    }

    /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage() . "<br> Requête : " . $requete;
        $resultat = 0;
    }
    $conn = null;
    return $resultat;
}
?>