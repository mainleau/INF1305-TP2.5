<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Magasin d'Halloween</title>
        <link rel="icon" type="image/x-icon" href="./favicon.ico">
        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <main>

            <?php require('./components/header.php'); ?>

            <?php require('./components/nav.php'); ?>

            <div id="products">
                <ul id="products-categories">
                    <li>Accessoires</li>
                    <li>Costumes</li>
                    <li>Effets spéciaux</li>
                    <li>Masques</li>
                </ul>
                
                <?php require('./views/products/components/list.php'); ?>
            </div>

            <?php require('./components/footer.php'); ?>
            
        </main>
    </body>
</html>