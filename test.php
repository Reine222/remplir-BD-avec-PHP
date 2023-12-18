<?php
// Database 1 new
$mysqli1 = new mysqli('localhost', 'root', '', 'insertbd');

// Check the connection
if ($mysqli1->connect_error) {
    die('Erreur de connexion à la base de données 1: ' . $mysqli1->connect_error);
}

// Database 2 dealtoo
$mysqli2 = new mysqli('localhost', 'root', '', 'c2255845c_ecommerce');

// Check the connection
if ($mysqli2->connect_error) {
    die('Erreur de connexion à la base de données 2: ' . $mysqli2->connect_error);
}

// Database 3 mondial
$mysqli3 = new mysqli('localhost', 'root', '', 'mondial');

// Check the connection
if ($mysqli3->connect_error) {
    die('Erreur de connexion à la base de données 3: ' . $mysqli3->connect_error);
}

/*

$sql2 = 'SELECT * FROM countries';
$result2 = $mysqli2->query($sql2);

$sql3 = 'SELECT * FROM country';
$result3 = $mysqli3->query($sql3);

// Vérifier si la requête a réussi
if (!$result2 && !$result3) {
    die('Erreur SQL : ' . $mysqli2->error . $mysqli3->error);
}

// Utiliser une boucle foreach pour parcourir les enregistrements

foreach ($result3 as $row3) {
    if ($row3['Name']) {

        // Données à insérer
        $name = $row3['Name'];
        $code = $row3['Code'];

        // Requête d'insertion
        $sql1 = "INSERT INTO countries (name, code) VALUES ('$name', '$code')";

        // Exécution de la requête
        if ($mysqli1->query($sql1) === TRUE) {
            echo 'Enregistrement ajouté avec succès.';
        } else {
            echo 'Erreur lors de l\'ajout de l\'enregistrement : ' . $mysqli1->error;
        }
        
    }

}
*/


/*

$sql2 = 'SELECT * FROM countries';
$result2 = $mysqli2->query($sql2);

$sql3 = 'SELECT * FROM country';
$result3 = $mysqli3->query($sql3);

// Vérifier si la requête a réussi
if (!$result2 && !$result3) {
    die('Erreur SQL : ' . $mysqli2->error . $mysqli3->error);
}

// Utiliser une boucle foreach pour parcourir les enregistrements
foreach ($result2 as $row2) {
    foreach ($result3 as $row3) {
        if ($row3['Name'] == $row2['name']) {

            // Données à insérer
            $name = $row3['Name'];
            $code = $row3['Code'];
            $status = $row2['status'];
            $created_at = $row2['created_at'];
            $updated_at = $row2['updated_at'];

            // Requête d'insertion
            $sql1 = "INSERT INTO countries (name, code, status, created_at, updated_at) VALUES ('$name', '$code', '$status', '$created_at', '$updated_at')";

            // Exécution de la requête
            if ($mysqli1->query($sql1) === TRUE) {
                echo 'Enregistrement ajouté avec succès.';
            } else {
                echo 'Erreur lors de l\'ajout de l\'enregistrement : ' . $mysqli1->error;
            }
            
        }

    }
}
*/

/*
$sql2 = 'SELECT * FROM countries';
$result2 = $mysqli1->query($sql2);

// Requête SQL avec une jointure
$sql3 = "SELECT city.*, Country.Name AS CountryName
FROM city
JOIN country ON city.Country = country.Code";


$result3 = $mysqli3->query($sql3);
// Vérifier si la requête a réussi
if (!$result3) {
    die('Erreur SQL : ' . $mysqli3->error);
} else {
    echo 'OK.';
}


// Utiliser une boucle foreach pour parcourir les enregistrements
foreach ($result2 as $row2) {
    
    foreach ($result3 as $row3) {
        echo $row3['Country'] ;
        if ($row3['Country'] == $row2['code']) {

            // Données à insérer
            $name = $row3['Name'];
            $country_id = $row2['id'];
            $state_id = $row2['id'];
            $status = $row2['status'];

            // Requête d'insertion
            $sql1 = "INSERT INTO cities (name, country_id, state_id, status) VALUES ('$name', $country_id, $state_id, '$status')";
            
            // Exécution de la requête
            if ($mysqli1->query($sql1) === TRUE) {
                echo 'Enregistrement ajouté avec succès.';
            } else {
                echo 'Erreur lors de l\'ajout de l\'enregistrement : ' . $mysqli1->error;
            }
        }

    }
}
*/


$sql2 = 'SELECT * FROM countries';
$result2 = $mysqli1->query($sql2);

// Requête SQL avec une jointure
$sql3 = "SELECT city.*, Country.Name AS CountryName
FROM city
JOIN country ON city.Country = country.Code";


$result3 = $mysqli3->query($sql3);
// Vérifier si la requête a réussi
if (!$result3) {
    die('Erreur SQL : ' . $mysqli3->error);
} else {
    echo 'OK.';
}


// Utiliser une boucle foreach pour parcourir les enregistrements
foreach ($result2 as $row2) {
    
    foreach ($result3 as $row3) {
        echo $row3['Country'] ;
        if ($row3['Country'] == $row2['code']) {

            // Données à insérer
            $name = $row3['Province'];
            $country_id = $row2['id'];

            // Requête d'insertion
            $sql1 = "INSERT INTO states (name, country_id) VALUES ('$name', '$country_id')";
            
            // Exécution de la requête
            if ($mysqli1->query($sql1) === TRUE) {
                echo 'Enregistrement ajouté avec succès.';
            } else {
                echo 'Erreur lors de l\'ajout de l\'enregistrement : ' . $mysqli1->error;
            }
        }

    }
}

// Handle results as needed

// Close connections
$mysqli1->close();
$mysqli2->close();
$mysqli3->close();
?>
