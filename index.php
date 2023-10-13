<?php include('functions.php');?>
<form action="index.php" method="post">
    <p><input type="text" name="nombre1" placeholder="Nombre a"></p>
    <p><input type="text" name="operateur" placeholder="Opérateurs"></p>
    <p><input type="text" name="nombre2" placeholder="Nombre b"></p>
    <p><button type="submit">Résultat</button></p>
</form>

<?php
    if(isset($_POST['nombre1'])&&isset($_POST['nombre2'])&&isset($_POST['operateur'])){
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $operateur = $_POST['operateur'];
        echo calcul($nombre1,$nombre2,$operateur);
    }
?>