<?php
    $num_pages = intdiv($rowsCount, 4);
    $devision_module = fmod($rowsCount, 4);
    if ($devision_module != 0)
    {
        $num_pages++;
    };

    for ($i = 1; $i <= $num_pages; $i++)
    {
        echo    '<a href="" id="'.$i.'">
                    <div class="qwert">'.$i.'</div>
                </a>';
    }
    


?>