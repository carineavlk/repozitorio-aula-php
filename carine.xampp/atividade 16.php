<!DOCTYPE html>
<body>
    <?php
    //Radio Button
    echo "<b>Seu sistema operacional é: </b>" . $POST["sistema"] ."<br><br>";

    //Checkbox
    if(isset($_POST["numeros"]))
    {
        echo "<b>Os numeros de sua preferencia são:</b></BR>";

        // Faz loop pelo array dos numeros
        foreach($_POST["numeros"] as $numero)
        {
            echo "-". $numero ."<BR><br>";
        }

    echo "<b>Voce não escolheu número preferido!<b><br><br>";
    }

    // 
    echo "<b>Seu processador é: </b>" . $_POST["processador"] . "<BR>";
    ?>
 </body>
</html>