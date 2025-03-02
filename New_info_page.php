<?php 
include 'connectBD.php';
include 'data_array.php';
$click_new_id = 0
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="Styles/Style.css">
    <link rel="stylesheet" href="Styles/Pages_new_info.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php 
        include 'get_id_new.php';
    ?>
    <header>
        <div class="container">
            <a href="ind.php?page=1">
                <div class="header-logo">
                    <img src="Image/logo.svg" alt="">
                </div>
            </a> 
        </div>            
        <div class="header-line"></div>
    </header>
    <main>
        <div class="info_detail">
            <div class="container">
                <div class="nav_panel">
                    <?php
                        include 'type_pages.php';  
                            $num_page = $_GET['page'];
                            foreach ($types as $url => $type) {
                                $t = "&nbsp/&nbsp";
                                if ($type == "ДИНАМИЧЕСКАЯ СТРАНИЦА")
                                {
                                    echo '<div style="color: #BBBBBB; cursor: default;">'.$news_titles[$id_news].'</div>';
                                }
                                else 
                                {
                                    echo '<a href="'.$url.'?page='.$num_page.'" > <span>'.$type.''.$t.'</span> </a>';
                                }
                            
                            }
                        
                    ?>
                </div>
                <div class="info_detail_titles">
                    <h1><?php echo $news_titles[$id_news]?> </h1>
                </div>
                <div class="data info_detail_main_data">
                    <b>
                        <?php echo $news_date[$id_news]?>
                    </b>
                </div>
                <div class="info_detail_main">   
                    
                    <div class="info_detail_main_text">
                        
                        <div class="info_detail_main_text_announce"><h2><?php echo $news_announce[$id_news] ?></h2> </div>
                        <div class="info_detail_main_text_content">
                            <p>
                                <?php echo $news_content[$id_news] ?>  
                            </p>
                        </div>
                        
                    </div>
                        <?php 
                
                        echo '<div class="info_detail_main_image" style="background-image: url(BD/images/'.$news_image[$id_news].')"></div>'  
                
                        ?>
                    </div> 
                    <?php 
                            
                    echo 
                    '<a href="/ind.php?page='.$num_page.'">
                        <div class="info_detail_main_text_button">
                            <div class="detail_main_text_button-content">
                                 <div class="detail_info_button_icon"></div>
                            </div>
                            <b>НАЗАД К НОВОСТЯМ</b>
                        </div>
                    </a>';            
            ?>      
                </div>
                
            </div>
            
            
        </div>
        
    </main>
    <footer>
        <div class="container">
            <div class="footer-line"></div>
            <div class="footer-text">© 2023 — 2412 «Галактический вестник»</div>
        </div>
    </footer>
    
</body>
</html>