<?php 
    include_once 'urls.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>九宮格</title>
    </head>
    <link rel="stylesheet" type="text/css" href="style/default.css">
    <body>
        <div class="header">
            <img height="92" src="googlelogo_color_272x92dp.png" width="272" alt="Google"><br />
            <input id="goosearch" type="text" placeholder="在 Google 上搜尋或輸入網址" onkeydown="if (event.keyCode == 13 || event.which == 13) { location='http://www.google.com/search?q=' + encodeURIComponent(document.getElementById('goosearch').value);}" autofocus />
        </div>
        <?php if( ! empty($list)){ foreach($list as $row): ?>
        
        <div class="box" onclick="javascript:location.href='<?=$row['url']?>'">
            <div class="image"><img src="snapshot/<?=$row['img']?>" /></div>
            <div class="name"><?=$row['name']?></div>
        </div>
        
        <?php endforeach;}?>
    </body>
</html>
