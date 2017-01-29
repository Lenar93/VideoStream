<?php
if($_FILES['videofile']){
    $my_file = $_FILES['videofile'];
    $my_blob = file_get_contents($my_file['tmp_name']);
    $date = new DateTime();
    file_put_contents( 'video/'.$date->getTimestamp().'.webm', $my_blob);
    }
?>