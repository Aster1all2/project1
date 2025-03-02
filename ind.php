<?php 
include 'connectBD.php';
include 'data_array.php';
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="Styles/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
</head>
<body>
    
    <script src="script/ajax.js"></script>
    <script src="script/script.js"></script>
    <header>
        <div class="container">
            <a href="ind.php?page=1">
                <div class="header-logo">
                    <img src="Image/logo.svg" alt="">
                </div>
            </a>      
        </div>
    </header>
    <main>
        <?php
            $num_pages = $_GET['page'];
            echo
            '<div class="main-wrap-top" style="background-image: url(BD/images/'.$news_image[($num_pages-1)*4].');" >
            <div class="container">
                <div class="main-wrap-top_text">
                    <h1>'. $news_titles[($num_pages-1)*4].'</h1>
                    <p> '.$news_announce[($num_pages-1)*4].'</p>
                </div>
            </div>
            </div>';
        ?>
        
        <div class="main-title"><div class="container"><h1>Новости</h1></div></div>
        <section class="main-wrap-center">
            <div class="container">
                <div class="news">
                
                    <?php
                    
                    for ($i = ($num_pages-1)*4; $i < ($num_pages-1)*4 + 4; $i++) 
                    {
                        if ($i >= $rowsCount) 
                            echo 
                            '<a>
                                <div class="new" " id="'.$i.'" style="visibility: hidden;">
                                
                                    <div class="data">
                                        <b>
                                            
                                        </b>
                                    </div>
                                    <h2 class="asd" ></h2>
                                    <p>
                                        
                                    </p>
                                    <div class="new-button">
                                        <div class="new-button-content">
                                            <b>ПОДРОБНЕЕ</b>
                                        <div class="arrow-button_icon"></div>
                                    </div>
                                </div>
                                
                                
                                </div>
                            </a>';
                        
                        else 
                        
                            echo 
                            '<a href="/New_info_page.php?page='.$num_pages.'&id='.$i.'">
                                
                                <div class="new" " id="'.$i.'">
                                    <div class="back-img-name" style="visibility: hidden; width: 0; heigth: 0; position: absolute">'.$news_image[$i].'</div>
                                    <div class="data">
                                        <b>'
                                            .$news_date[$i].'
                                        </b>
                                    </div>
                                    <h2 class="asd" >'.$news_titles[$i].'</h2>
                                    <p>'
                                        .$news_announce[$i].
                                    '</p>
                                    <div class="new-button">
                                        <div class="new-button-content">
                                            <b>ПОДРОБНЕЕ</b>
                                        <div class="arrow-button_icon"></div>
                                    </div>
                                </div>
                                
                                
                                </div>
                            </a>';
                        
                    }
                    ?>
                </div>
            </div>
        </section>
        <div class="main-wrap-bottom">
            <div class="container container1">
                <div class="page-navigation">
                    <?php
                        include 'number_of_pages.php';
                    ?>
                    <script>
                        let y = document.getElementsByClassName('qwert');
                        for (let i = 0; i < y.length; i++)
                        {
                            y[i].parentNode.href = "ind.php?page=" + y[i].parentNode.id;
                        }
                    </script>
                    <?php
                
                        $num_next_page = $_GET['page'] + 1;
                        if ($num_next_page <= $num_pages)
                        {
                            echo
                            '<a href="ind.php?page='.$num_next_page.'">
                                <div class="qwert1"><div class="asdf"></div></div>
                            </a>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </main>
    <script src="script/script1.js"></script>
    <footer>
        <div class="container">
            <div class="footer-line"></div>
            <div class="footer-text">© 2023 — 2412 «Галактический вестник»</div>
        </div>
    </footer>
</body>
</html>