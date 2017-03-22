<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pocok : E-napló</title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        //include './connect.php';
        //if (isset($_REQUEST['gomb1'])) {
        //    $sql = "INSERT INTO ev (ev) VALUES (2018)";
        //    $conn->update($sql);
        //}else if(isset($_REQUEST['gomb2'])) {
        //}
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="hatter">
                <button class="gomb" id="gomb1">uj ev</button>
                <button class="gomb" id="gomb2">uj osztaly</button>
                <button class="gomb" id="gomb3">uj diak</button>
                <button class="gomb" id="gomb4">uj targy</button>
                <div class="helyzetsav">
                    <div class="ev"></div>
                    <div class="osztaly"></div>
                    <div class="diak"></div>
                    <div class="targy"></div>
                </div>
                <div class="lista">
                    <?php 
                    /*$sql = "select ev from ev";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $str = $row["ev"];
                            echo "<div>$str</div>";
                        }
                    }*/
                    ?>
                </div>
            </div>
        </form>
    </body>
</html>
