<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dowawanie ocen</title>
</head>
<body>
    <header>
        <h1>Dodawanie ocen</h1>
    </header>
    <main>
    <?php 
        $polaczenie=mysqli_connect('localhost','root','','4ti');
        if($polaczenie){
            echo "Połączyliśmy się z bazą";
            $zapytanie="SELECT * FROM przedmiot";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                $przedmiot[]=$wiersz['nazwaPrzedmiot'];
                $idprzedmiot[]=$wiersz['id'];

            }
        }else{
            echo "błąd połączenia z bazą";
        }
        mysqli_close($polaczenie);
    ?>
    <label for="przedmiot">Wybierz przedmiot</label>
    <select name="przedmiot" id="przedmiot">
        <?php
            for($i=0;$i<count($przedmiot);$i++){
                echo "<option value=$idprzedmiot[$i]> $przedmiot[$i]</option>";
            }
        ?>
    </select>

    <?php 
        $polaczenie=mysqli_connect('localhost','root','','4ti');
        if($polaczenie){
            echo "Połączyliśmy się z bazą";
            $zapytanie="SELECT * FROM dane";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                $imie[]=$wiersz['imie'];
                $nazwisko[]=$wiersz['nazwisko'];
                $iddane[]=$wiersz['id'];

            }
        }else{
            echo "błąd połączenia z bazą";
        }
        mysqli_close($polaczenie);
    ?>

        <label for="dane">Wybierz dane</label>
    <select name="dane" id="dane">
        <?php
            for($i=0;$i<count($imie);$i++){
                echo "<option value=$iddane[$i],> $imie[$i],$nazwisko[$i]</option>";
            }
        ?>
    </select>
</main>
    <footer>
        Strone wykonał Aleksander
    </footer>
</body>
</html>