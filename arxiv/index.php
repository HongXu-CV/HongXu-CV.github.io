<?php
$d=opendir('./');
while($file=readdir($d)){
    if(is_file($file)) {
        $strFile = substr($file,-3);
        if($strFile == 'zip' || $strFile == 'rar') {
            echo "<a href='".$file."'>".$file."</a><br />";
        }
    }
}
closedir($d);
?>
