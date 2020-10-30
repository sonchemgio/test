<?php
//$nameFile = "list.txt";
    //$fp = fopen("./".$nameFile, "w+");
    echo "Nhập Chủ đề thư, Nội dung theo dạng: Chủ đề|Nội dung\n";
    $string = trim(fgets(STDIN));
    //fwrite($fp,trim(fgets(STDIN)));
    echo $string;
?>