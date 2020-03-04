<!DOCTYPE html>

<?php
    require_once('db.php');
    // connect to db
    $conn = db_connect();
?>

<html> 
<head>
<meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet"> 
<link href="tyyli_mobile.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<title>BREAKOUT</title>

</head>

<body>
<div id="main">

        <div class="vertical_align">

        <?php

        //Previous players and highscores are shown here. Data is fetched and shown as row of arrays.

        $result = $conn->query("select * FROM breakout ORDER BY hiscore DESC, id ASC");
        echo  "<tr></td><td><p><b>HIGH SCORES:       </p></b></td></tr>"; 
        for ($i=0; $i < 5; $i++) { 
        $row = $result->fetch_assoc();
        $tunnus = $row['tunnus'];
        $hiscore = $row['hiscore'];
        $ruutu = "ruutu" . $i;

        echo "<tr><td>$tunnus   $hiscore<br></td><td></tr>"; 
            }

        ?>

    <div class="vertical_align2">
                <?php

                //The most important text is shown in individually blinking words. Each word has it's own class and are brought together as a row of arrays.

                $begin1 = ["TAP"];
                foreach($begin1 as $text1);

                $begin2 = ["SCREEN"];
                foreach($begin2 as $text2);

                $begin3 = ["TO"];
                foreach($begin3 as $text3);

                $begin4 = ["BEGIN"];
                foreach($begin4 as $text4);

                $row = "<div class=\"begin1\"> ".$text1." </div>
                        <div class=\"begin2\"> ".$text2." </div>
                        <div class=\"begin3\"> ".$text3." </div>
                        <div class=\"begin4\"> ".$text4." </div><br>";
                echo $row;

                ?>

                </div>
        </div>
</div>
</body>
</html>

<script>

//upon clicking/pressing anywhere the normal mode starts
$( "body" ).click(function(event) {
  
    if(jQuery().click) {
        window.location.href = "mobile.html";
}
});

                //The main screen and the instructions are shown after one another when a certain amount of time passes
                var jatkuva = setTimeout(function(){
                $.post("intro.php", function(data){
                    $('#main').html(data);
                });
            
                    },20000);
        
                var jatkuva = setTimeout(function(){
                $.post("game_mobile.php", function(data){
                    $('#main').html(data);
                });
            
                    },40000);


</script>