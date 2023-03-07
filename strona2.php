<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obecnosc</title>
</head>
<body>
<?php 
    $polaczenie=mysqli_connect('localhost','root','','4ti');
    if($polaczenie){
        $zapytanie="SELECT * FROM dane";
        $wynik=mysqli_query($polaczenie,$zapytanie);
        while($wiersz=mysqli_fetch_array($wynik)){
            $imie[]=$wiersz['imie'];
            $nazwisko[]=$wiersz['nazwisko'];
            $idosoba[]=$wiersz['id'];
    }
}
    else{
        echo "blad polaczenia";
    }
    ?>
    <header>
        <h1>Obecnosc</h1>
    </header>
    <main>
    <?php
    for($i=0;$i<count($imie);$i++){
        echo
    }
    ?>
</main>
<footer>
    Strone wykonał Aleksander
</footer>
</body>
</html>