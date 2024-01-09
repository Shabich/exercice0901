

<!DOCTYPE html>
<html>
<head>

    <title>Page d'accueil</title>
    <style>
      
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        
        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .article {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        
        .article h3 {
            color: #666;
        }
        
        .article p {
            color: #999;
        }
        
        .article button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href='pageaccueil.php'>Accueil</a>
        <a href="pageproduit.php">Produits</a>
        <a href="pageinscription.php">Inscription</a>
    </div>
    
    <h1>Bienvenue sur notre site de vente en ligne !</h1>
    
    <h2>Nos articles en vedette :</h2>
    <?php

$connexion = mysqli_connect('localhost', 'root', '', 'site_ecommerce');
$requete = "SELECT * FROM produits";
$Produits = $connexion->query($requete);

foreach ($Produits as $Produit) {
    echo "<div class='article'>";
    echo $Produit['nom_produit'] . '<br>';
    echo $Produit['prix'] .' €'. '<br>';
    echo $Produit['description'] . '<br>';
    echo 'quantité en stock : ' . $Produit['quantite_stock'] . '<br>';
    echo '<button>Ajouter au panier</button>';
    echo "</div>";
}

$connexion->close();

?>
    
</body>
</html>
