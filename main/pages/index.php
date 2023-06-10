<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="/css/style.css?ver=1.1.3">
    <script src="js/script.js"></script>
    <body>
        <div class="header flex" id="myHeader">
        <div>This is a logo WIP</div>
            <ul class="navigation">
                <li class="nav-item">
                    <div>Questions
                    </div>
                </li>
                <li class="nav-item">
                    <div>Apps
                    </div>
                </li>
                <li class="nav-item">
                    <div>About
                    </div>
                </li>
            </ul>
        </div>
        <div class="spaceDiv">
        </div>
        <div class='center border'>
            <form>
                <input type="text">
                <input type="submit">
            </form>
        </div>
        <div class="spaceDiv">
        </div>
        <div>
             <?
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