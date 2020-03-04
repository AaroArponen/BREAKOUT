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
<link href="tyyli.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<title>BREAKOUT</title>



</head>

<body>



<div id="main">   



    <div class="gameover">

        <script>

            //Using sessionStorage the highscore from the played game is given and shown in console as and integer.

            var hiscore = sessionStorage.getItem("hiscore");

            console.log(hiscore);

            var integer = parseInt(hiscore, 10);

        </script>



    <?php
        echo "<span>GAME OVER</span><br>"
    ?>

    </div>

            <!-- A form for sending the highscore and nickname to the database. Only the English alphabet can be used.
            All letters are automatically changed to upper case. Three characters must be given and no more than that can be given.
            Pasting is forbidden.
            The highscore is included hidden.  -->

            <form action="insert.php" method="post">              

                <p>Nickname:   <input type="text" name="tunnus" pattern=".{3,}" required title="3 characters minimum" maxlength="3" 
                oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" 
                onkeypress="return (event.charCode > 64 && 
                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"
                onpaste = "return false">

                    <p>Score:   <span id='hiscore'></span></p>
                    <input type="hidden" name="hiscore" value="">
                    <input type="submit" value="Save score" style=background:aquamarine>           

                </p>
            </form>

            <script>

            //Getting the score from the played game
            var hiscore = sessionStorage.getItem("hiscore");
            $('#hiscore').html( hiscore );
            $('[name="hiscore"]').val( hiscore );

            function myFunction() {
                $.post("game.php", function(data){
                    $('#main').html(data);
                });

            }

            </script>

            <!-- If the player wishes not to save their score they can go streight back to the starting screen -->
            <button onclick="myFunction()"  style=background:red>Don't save score</button>

</div>
</body>
</html>