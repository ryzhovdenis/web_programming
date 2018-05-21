<DOCTYPE html>
<html>
<head>
    <title>Opel Antara</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Данный сайт посвящен кроссоверу Opel Antara" />
    <meta name="keywords" content="Opel, Antara, Opel Antara" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
 
<body>
    <div id="container">
        <div id="topmenu">
            <table>
                <tr>
                    <td>
                        <a class="current" href="index.php">Главная</a>
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
            <img src="images/logo_2.png" alt="Лого" />
        </div>
        <div id="info">
		  <div id="news">
            <?php
                $mysqli = new mysqli("localhost", "ryzhovdenis95", "", "opel_antara");
                $mysqli->set_charset("utf8");
                $query = "select * from news";
                $result = $mysqli->query($query);
                while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            ?>
    			<div class ="new">
    				 <h2><?php echo $row["title"]?></h2>
    				 <img src=<?php echo $row["image"]?>>
    				 <?php echo $row["short_description"]?>
    				   <ul class="read_more">
    					  <li><a href=<?php echo "opel_news.php"."?id=".$row["id"]?>>Читать далее</a></li>
    				  </ul>
    			 </div>
			 <?php
                }
              ?>
			 <div class ="new">
				<h2>Загрузки</h2>
				  <ul class="pdf">
					  <li><a class="external" href="http://www.opel.ru/content/dam/Opel/Europe/russia/nscwebsite/ru/01_Vehicles/01_PassengerCars/Antara/01_ModelOverview/04_PDF/Opel_Antara_Pricelist_112014.pdf">Комлектации на 2018 год</a></li>
					  <li><a class="external" href="http://www.opel.ru/content/dam/Opel/Europe/russia/nscwebsite/ru/01_Vehicles/01_PassengerCars/Antara/01_ModelOverview/04_PDF/Opel_Antara_Technical_Leaflets_112014.pdf">Технические данные</a></li>                      
				  </ul>
			 </div>
			 
		   </div>
           
          <div id="right">
              <div id="article">
                  <h2>OPEL ANTARA</h2>
                  <img class="right" src="images/index_1.png">
                  <p><b>Узнайте больше о кроссовере Opel.</b>
                        <br>
                        <br>
                        Более привлекательный, мощный и усовершенствованный Opel Antara сочетает в себе высококачественный интерьер, изысканность и надежность.
                        Самые современные технологии двигателя и коробки передач обеспечивают выдающиеся ходовые качества.
                        <br>
                        <br>
                        Все дороги открыты для вас – мир огромен, и автомобиль Opel Antara готов его покорять. Узнайте, что делает этот автомобиль таким уникальным.</p>   
                  <ul>
                         <li>Непревзойденная динамика</li>
                         <li>Дизайн мощного кроссовера</li>
                         <li>Впечатляющие ходовые качества</li>
                         <li>Превосходный комфорт и универсальность</li>
                  </ul>
                  <br>
                  <br>
                  <img class="right" src="images/index_3.png">
                  <p><b>Солидность и функциональность</b>
                     <br>
                     <br>
                     Четкие линии и мускулистый силуэт Opel Antara гармонично смотрятся как на бездорожье, так и на стоянке супермаркета. 
                     Благодаря скульптурной точности языка дизайна Opel автомобиль выглядит мощным, но при этом совершенно неагрессивным.</p>

              </div>
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