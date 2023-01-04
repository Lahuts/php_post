<?php include_once './pages/header.inc.php'; ?>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le <?=date?></h2>
            <p>
           

                Mise à jour PHP 8.1.10<br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->

        <!--itération avec la bdd -->
        <?php include_once "./pages/pdo.inc.php"?>
 
    
    <!--end -->
<?php include_once './pages/nav.inc.php'; ?>

    </main>
<?php include_once "./pages/footer.inc.php"; ?>
   
</body>
</html>