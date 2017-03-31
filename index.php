<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pocok : E-napló</title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php 
	
		$evszam = 2017;
		$evszam++;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
		switch ($_POST['akcio']) {
			case 'ujev':
            
				$sql = "insert into ev(ev) value($evszam)";
				$conn->query($sql);
				break;
				}
        
			}
		?>
        <form name="aform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="hatter">
                <!--<a name="gomb" class="gomb" value="gomb1" id="gomb1">Évek</a>-->
                <form style='display: none'  action="" method="POST">
				<a name="ujev" class="gomb" value="gomb2" id="gomb2">Új év</a>
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
                            echo " <a href=\"1osztalyok.php\">$str</a></br>";
                        }
                    }
                    ?></div>
            </div>
        </form>
    </body>
</html>
