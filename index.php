<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title>Pocok : E-napló</title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
	<?php
        include "./connect.php";
        include "./adatok.php";
		session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["listaelem"])) {
            $_SESSION["ev"] = $_POST["listaelem"];
            }
        ?>
        <div class="hatter">
            <!--<a name="gomb" class="gomb" value="gomb1" id="gomb1">Évek</a>-->
                <input type="submit" name="ujev" class="gomb" value="Új év" id="gomb2">
            <div class="helyzetsav">
                <div class="ev"></div>
                <div class="osztaly"></div>
                <div class="diak"></div>
                <div class="targy"></div>
            </div>
            <div class="lista">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"><?php 
                $sql = "select ev from ev";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $str = $row["ev"];
                        echo "<input type=\"submit\" name=\"listaelem\" value=\"$str\"></br>";
                    }
                }
                ?>
            </form>
			</div>
			<a href="1osztalyok.php" class="gomb" id="gomb3" >Osztályokra</a>
        </div>
    

