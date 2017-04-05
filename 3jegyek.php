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
                <a name="gomb" class="gomb" value="gomb1" id="gomb1" href="2diakok.php">Diákokra vissza</a>
                <a name="gomb" class="gomb" value="gomb2" id="gomb2">Új jegy</a>
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
                            echo " <a>$str</a></br>";
                        }
                    }
                    ?></div>
            </div>
        </form>
    </body>
</html>
