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

            <section>
                <div id="presentation">
                    <h2>Bienvenue sur mon site.<br>Veuillez entrer et rester un peu..</h2>

                    <p>
                        J'ai créé ce site Web parce que Halloween a toujours été ma fête préférée.
                        Mais l'année dernière, j'ai commencé vendant certains de mes produits
                        d'Halloween préférés, et ils sont devenus un véritable succès.
                    </p>

                    <p>
                        Si vous cliquez sur le lien Personnel, vous pouvez parcourir mes photos, histoires et films
                        d'Halloween préférés. Et si vous rejoignez ma liste de diffusion, je vous tiendrai au courant de
                        tout ce qui concerne Halloween.
                    </p>

                    <h3>Ma garantie</h3>

                    <p>
                        Si vous n'êtes pas entièrement satisfait de tout ce que vous achetez sur mon site, vous pouvez
                        le retourner pour un remboursement complet.
                    </p>
                </div>
    
                <ul id="home-categories">
                    <li><a href="">Accessoires</a></li>
                    <li><a href="">Costumes</a></li>
                    <li><a href="">Effets spéciaux</a></li>
                    <li><a href="">Masques</a></li>
                </ul>
            </section>

            <?php require('./components/footer.php'); ?>
            
        </main>
    </body>
</html>