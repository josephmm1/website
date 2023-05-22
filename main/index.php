<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <body>
        <div class="header" id="myHeader">
            <div class="navigation">
                <nav>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Page 3?</a></li>
                    </ul>
                </nav>
            </div>
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