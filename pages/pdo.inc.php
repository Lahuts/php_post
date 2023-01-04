<?php
try {
    //code...
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost;dbname=posts','root','root');
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
    $response = $_bdd->query('Select * from posts');
    while ($row = $response->fetch()){
        include './pages/article.php';
    }
    $response->closeCursor();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>