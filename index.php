<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title>Pocok : E-napló</title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
	<?php
        include "./connect.php";
        include "./adatok.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST["ujev"]) || isset($_POST["listaelem"]))) {
            switch ($_POST["ujev"]) {
                case "Új év":
                    echo "új év";
                    break;
                case "200":
                    echo "új év 200";
                    break;
                }
            switch ($_POST["listaelem"]) {
                case "Új év":
                    echo "új év lista";
                    break;
                case "200":
                    echo "200";
                    break;
                }
            }
        ?>
        <div class="hatter">
            <!--<a name="gomb" class="gomb" value="gomb1" id="gomb1">Évek</a>-->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="submit" name="ujev" class="gomb" value="Új év" id="gomb2">
            </form>
            <div class="helyzetsav">
                <div class="ev"></div>
                <div class="osztaly"></div>
                <div class="diak"></div>
                <div class="targy"></div>
            </div>
            <div class="lista"><?php 
                include './connect.php';
                $sql = "select ev from ev";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $str = $row["ev"];
                        echo " <input type=\"submit\" name=\"listaelem\" value=\"$str\"></br>";//href=\"1osztalyok.php\"
                    }
                }
                ?></div>
        </div>
    

