<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>  
<?php
    include 'menu.php';
    include '../functions/funct.php';
    $news = getNews(3);
?>

    <div id=app>

        <div class="home">
            <?php
                for ($i=0; $i < count($news); $i++){
                    echo '            <section class="new" id ="new'.$news[$i]["id"].'">
                     <img src="../img/news/'.$news[$i]["id"].'.jpg">
                <article>
                    <h3>'.$news[$i]["title"].'</h3>
                    <p>'.$news[$i]["text_prev"].'</p>
                 <a href="news.php#new'.$news[$i]["id"].'"><button> продолжение </button></a>
                </article>
            </section>';
                    if ((($i) - ($news[$i]["id"])) != 0){
                        echo '<hr>';
                    }
                }
            ?>
        </div>
        
    </div>

    </body>
</html>