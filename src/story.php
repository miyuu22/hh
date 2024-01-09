<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/story.css">
    <script src="js/story.js" defer></script>
</head>
<body>
    <header>
        <div class="header">
                    <img src="img/logo.png" class="logo">
            <div class="item">
                <a href="top.html" class="a2">トップ</a>
                <a href="character.html" class="a2">キャラクター</a>
                <a href="story.php" class="a1">ストーリー</a>
                <a href="keyword.html" class="a2">用語解説</a>
                <a href="h-letter.php" class="a2">ハンター文字</a>
                <a href="correlation.html" class="a2">相関図</a>
                <a href="staff.html" class="a2">スタッフ・キャスト</a>
                <a href="music.html" class="a2">音楽</a>
            </div>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="msg-flex">
                <p class="p7">STORY</p>
            </div>
    <?php
        $pdo = new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('select * from hh');
        $sql -> execute();
            echo '<div class="list">';
            foreach($sql as $row){
                echo '<ul class="ul" id="ul">';
                echo '<li class="li"><img alt="image" class="img" onclick="showPopup(',$row['id'],')" src="img/',$row['image'],'"></li>';
                echo '<li class="li">第',$row['id'],'話';
                echo '</li><li class="li">',$row['title'];
                echo '</li></ul>';

                // ポップ
                echo '<ul class="ul-pop" id="ulPopup',$row['id'],'" onclick="showPopup(',$row['id'],')">';
                echo '<div class="ul-pop1" id="ulPopupback',$row['id'],'">';
                echo '<li class="li-pop"><img src="img/',$row['image'],'" class="popup-image"></li>';
                echo '<li class="li-pop-in">第',$row['id'],'話</li>';
                echo '<li class="li-pop-in">',$row['title'],'</li>';
                echo '<li class="li-pop-in">',$row['episode'],'</li>';
                echo '</div>';
                echo '</ul>';

            }
            echo '</div>';

    ?> 
        </div>
    </main>
</body>
</html>