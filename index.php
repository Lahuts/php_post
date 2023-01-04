<?php include_once './pages/header.inc.php'; ?>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le <?=$_date_php?></h2>
            <p>
           

                Mise à jour PHP <?php print $_modif_php?><br>
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