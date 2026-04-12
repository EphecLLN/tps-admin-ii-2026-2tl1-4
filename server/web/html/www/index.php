<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Catalogue WoodyToys</title>
    <style>
       table, th, td {
         padding: 10px;
         border: 1px solid black;
         border-collapse: collapse;
       }
       th {
         background-color: #f2f2f2;
       }
    </style>
</head>

<body>
    <h1>Catalogue WoodyToys</h1>

    <?php
    $dbname = 'woodytoys';
    $dbuser = 'root';
    $dbpass = 'mypass';
    $dbhost = '172.17.0.5'; 
    
    // Connexion à la base de données
    $connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Impossible de se connecter à '$dbhost'");
    mysqli_select_db($connect, $dbname) or die("Impossible d'ouvrir la base '$dbname'");
    
    // Récupération des données
    $result = mysqli_query($connect, "SELECT id, product_name, product_price FROM products");
    ?>

    <table>
        <tr>
            <th>Numéro de produit</th>
            <th>Descriptif</th>
            <th>Prix</th>
        </tr>

        <?php 
        while ($row = mysqli_fetch_array($result)) {
            printf("<tr><td>%s</td> <td>%s</td> <td>%s €</td></tr>", $row[0], $row[1], $row[2]);
        }
        ?>

    </table>
</body>
</html>
