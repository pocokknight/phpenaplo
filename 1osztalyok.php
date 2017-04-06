<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pocok : E-napló</title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form name="aform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="hatter">
                <a name="gomb" class="gomb" value="gomb1" id="gomb1" href="index.php">Évekre vissza</a>
                <a name="gomb" class="gomb" value="gomb2" id="gomb2">Új osztály</a>
                <div class="helyzetsav">
                    <div class="ev"></div>
                    <div class="osztaly"></div>
                    <div class="diak"></div>
                    <div class="targy"></div>
                </div>
                <div class="lista"><?php 
                    include './connect.php';
					include './adatok.php';
					session_start();
					$ev = $_SESSION["ev"];
					echo $ev;
                    $sql = "
						select osztalyok.nev 
						from osztalyok , ev_oszt_kapcs , ev
						where ev.ev = $ev
						and ev.ev = ev_oszt_kapcs.evid
						and osztalyok.id = ev_oszt_kapcs.osztid
					";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $str = $row["nev"];
                            echo "<input href=\"2diakok.php\">$str</a></br>";
                        }
                    }
                    ?></div>
            </div>
        </form>
    </body>
</html>
