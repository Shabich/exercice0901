

<!DOCTYPE html>
<html>
<head>

    <title>Page d'accueil</title>
    <style>
        /* Fancy CSS styles */
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
    



    <form method="POST" action="pageinscription.php">
    <label for="username">Nom:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <input type="submit" value="Connexion">
    <button><a href="pagedeconnexion.php">Déconnexion</a></button>
</form>

<?php

if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username = $_POST['username'];
    setcookie('user', $username, time() + (7 * 24 * 60 * 60), '/');
    header('Location: pageaccueil.php');
}
?>

    
</body>
</html>
