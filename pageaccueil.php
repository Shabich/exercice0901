

<!DOCTYPE html>
<html>
<head>

    <title>Page d'accueil</title>
    <style>
        /* Fancy CSS styles */

        /* Style pour le pop-up */
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

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
    <a href='pageproduit.php'>voir tout nos produits</a>


    <script>
        // Fonction pour afficher le pop-up
        function afficherPopup() {
            document.getElementById('popup').style.display = 'block';
        }

        // Fonction pour cacher le pop-up
        function cacherPopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
</body>
</html>