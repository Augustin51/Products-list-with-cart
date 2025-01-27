<?php
ini_set('display_errors', 1);
//require_once '../autoload.php';

$billets = $products->getAll();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Mon Blog</title>
</head>
<body>
<div id="global">
    <header>
        <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>
    <div id="contenu">
         <?php
         foreach ($billets as $billet):
              ?>
             <article>
                 <header>
                     <h1 class="titreBillet"><?= $billet['name'] ?></h1>
                     <time><?= $billet['created_at'] ?></time>
                     <p><?= $billet['price'] ?></p>
                 </header>
                 <p><?= $billet['description'] ?></p>
             </article>
             <hr/>
         <?php endforeach; ?>
    </div> <!-- #contenu -->
    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
</div> <!-- #global -->
</body>
</html>
