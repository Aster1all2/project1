<?php 
include 'connectBD.php';


$sql = "SELECT * FROM `news` ORDER BY date DESC";
if($result = $contention->query($sql)){

    $rowsCount = $result->num_rows; // количество полученных строк
    $news_id=array();
    $news_date=array();
    $news_titles=array();
    $news_announce=array();
    $news_content=array();
    $news_image=array();
    foreach($result as $row){
        $news_id[]=$row['id'];
        $news_date[]=formatDate(substr($row['date'], 0, 10));
        $news_titles[]=$row['title'];
        $news_announce[]=$row['announce'];
        $news_content[]=$row['content'];
        $news_image[]=$row['image'];
    }
    $result->free();
} else{
    echo "Ошибка: " . $contention->error;
}
//Функция для коррекции даты
function formatDate($date)
{
    $dataTime = DateTime::createFromFormat('Y-m-d', $date);
    return $dataTime->format('d.m.Y');
}


$contention->close();
?>
