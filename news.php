<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Новости</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>  
<?php
    include 'menu.php';
    include '../functions/funct.php';
    $news = getNews(99);
?>

    <div id=app>

        <div class="news">
            <?php
                for ($i=0; $i < count($news); $i++){
                    $next = $news[$i]["id"]-1;
                    echo '    <div>        <section class="new" id ="new'.$news[$i]["id"].'">
                     <img src="../img/news/'.$news[$i]["id"].'.jpg">
                <article>';
                if (($news[$i]["id"]) != 1){
                    echo '       <a href="#new'.$next.'"><button class="next" >  </button></a>' ;
                }
          
                echo '
                    <h3>'.$news[$i]["title"].'</h3>              
                    <p>'.$news[$i]["text"].'</p>
                </article> 
            </section>
                 <p class="full">'.$news[$i]["full_text"].'</p>
                </div> ';
                        
                    if (($news[$i]["id"]) != 1){
                        echo '
                        <hr>';
                    }
                }
            ?>
        </div>

    </div>

    </body>
</html>