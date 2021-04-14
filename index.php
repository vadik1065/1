<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Тестовое задание</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>  
    <div class="effect-1 effect">
        <a href="content/home.php">Главная</a>
    </div>
    <div class="effect-2 effect">
        <a href="content/news.php">Новости</a>
    </div>
    <div id=app>

         <div class="container">
            <a href="content/home.php"><img src="img/logo.png" width="114px"> </a>
            <form action="index1.php" method="post">
                <div class="dws-input">
                    <input type="text" required  placeholder="Введите ФИО" name="fio" class="us">
                    <input type="text" required  placeholder="Введите адрес" name="adres" class="us">
                  <input type="tel" required  placeholder="Введите телефон" name="tel" class="us"> <!--  pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" --> 
                    <input type="email" required  placeholder="Введите e-mail"  name="email" class="us">
                </div>
                <input class="dws-submit go" type="submit" name="submit" value="Отправить" >
        
            </form>
        </div>
        
    </div>

    </body>
</html>