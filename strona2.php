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
        <form method="post">
        <table>
            <thread>
                    <tr>
                        <th>Lp.</th>
                        <th>Imię i nazwisko</th>
                        <th>Czy jest obecny</th>
                    </tr>
            </thread>
            <tbody>
            <?php
            for($i=0;$i<count($imie);$i++){
                echo "<tr>";
                echo "<th>$idosoba[$i]</th>";
                echo "<td>$imie[$i] $nazwisko[$i]</td>";
                echo "<td><input type='checkbox' name='obecny' id='obecny$idosoba[$i]'></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <input type="submit" value="Zapisz obecność">
        </form>




        
</main>
<footer>
    Strone wykonał Aleksander
</footer>
</body>
</html>