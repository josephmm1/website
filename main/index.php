<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="/css/style.css?ver=1.1.0">
    <script src="js/script.js"></script>
    <body>
        <div class="header flex" id="myHeader">
            <ul class="navigation">
                <li class="navItem">Questions</li>
                <li class="navItem">Apps</li>
                <li class="navItem">About</li>
            </ul>
        </div>
        <div class="spaceDiv">
        </div>
        <div>
             <?php
                include("php/database.php");
             ?>
        </div>
        <div class="spaceDiv">
        </div>
        <div class="footer">
            <p>some text</p>
        </div>
    </body>
</html>