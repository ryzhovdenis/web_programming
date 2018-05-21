<DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Новости Opel Antara" />
    <meta name="keywords" content="Opel, Opel Antara, Awards, новости Opel Antara" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
 
<body>
    <div id="container">
        <div id="topmenu">
            <table>
                <tr>
                    <td>
                        <a href="index.php">Главная</a>
                    </td>
                    <td>
                        <a href="info.html">Характеристики</a>
                    </td>
                    <td>
                        <a href="complectations.html">Комплектации</a>
                    </td>
                    <td>
                        <a href="gallery.html">Галерея</a>
                    </td>
                </tr>
            </table>
        </div>
        <div id="logo">
            <img src="images/logo_15.png" alt="Лого" />
        </div>
        <div id="info">
			<div id="article">
			    <?php
                    $mysqli = new mysqli("localhost", "ryzhovdenis95", "", "opel_antara");
                    $mysqli->set_charset("utf8");
                    $query = "select title, image, full_description from news where id=" . $_GET["id"];
                    $result = $mysqli->query($query);
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                ?>
				<h2><?php echo $row["title"] ?></h2>
				<?php
				    $positions = array("left", "right");
                    $position = $positions[array_rand($positions)];
				?>
				<img class=<?php echo $position?> src=<?php echo $row["image"]?>>
				<?php echo $row["full_description"]?>
			</div>
        </div>
        <div id="basement">
          <table>
                <tr>
                    <td>
						<a href="about.html">©Ryzhov Denis</a>
                    </td>
                    <td>
                        <a class="external" href="http://www.opel.ru">opel.ru</a>
                    </td>
                </tr>
            </table>  
        </div>

    </div>
    <div id="motto">
		<img src="images/opel.png">
		<img class="motto" src="images/motto.png">
	</div>
</body>   
</html>