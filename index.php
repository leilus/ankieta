<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    $action = "imie.php";
    $imie = $naziwsko = $plec = $klasa = $opis = $szkola = $hobby = "";
    $imieErr = $nazwiskoErr = $plecErr = $klasaErr = $opisErr = $szkolaErr= $hobbyErr ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["imie"])){
        $imieErr = "Imię jest wymagane";
    }else{
        $imie = test_input($_POST["imie"]);
    }

    if(empty($_POST["nazwisko"])){
        $nazwiskoErr = "Nazwisko jest wymagane";
    }else{
        $nazwisko = test_input($_POST["nazwisko"]);
    }

    if(empty($_POST["plec"])){
        $plecErr = "Płeć jest wymagana";
    }else{
        $plec = test_input($_POST["plec"]);
    }

    if(empty($_POST["opis"])){
        $opisErr = "";
    }else{
        $opis = test_input($_POST["opis"]);
    }

    if(empty($_POST["szkola"])){
        $szkolaErr = "";
    }else{
        $szkola = test_input($_POST["szkola"]);
    }

    if(empty($_POST["klasa"])){
        $klasaErr = "";
    }else{
        $klasa = test_input($_POST["klasa"]);
    }

    if(empty($imieErr) && empty($nazwiskoErr) && empty($plecErr)){
        header("Location: imie.php?imie=$imie&nazwisko=$nazwisko&plec=$plec&opis=$opis&klasa=$klasa&szkola=$szkola");
    }


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    ?>

    <div class="formularz">
        <h1>Ankieta</h1>
        <form name="pole_tekstowe" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Imię: <span class="error">* <?php echo $imieErr?></span></label>
        <input type="text" name="imie"><br>
        <label>Nazwisko: <span class="error">* <?php echo $nazwiskoErr?></span></label></label> 
        <input type="text" name="nazwisko"><br>
        <label>Plec: <span class="error">* <?php echo $plecErr?></span></label>
        <div class="sex">
        <input type="radio" name="plec" value="Mężczyzna">Mężczyzna
        <input type="radio" name="plec" value="Kobieta"> Kobieta
        </div><br>
        <label>Klasa:</label>
        <input type="text" name="klasa"><br>
        <label>Szkoła:</label>
        <select name="szkola">
            <option value="">---</option>
            <option value="Podstawowa">Podstawowa</option>
            <option value="Średnia">Średnia</option>
            <option value="Wyższa">Wyższa</option>
        </select><br>
        <label>Twój opis: </label><br>
        <textarea name="opis" rows="5" cols="30" placeholder="Napisz coś o sobie..."></textarea><br>
        <input type="submit" value="Prześlij ankietę">
        </form>
    </div>
    </body>
</html>
