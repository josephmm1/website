<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="/css/style.css?ver=1.1.3">
    <script src="js/script.js"></script>
    <body>
    <div id="nav-placeholder">

    </div>
        <div class="spaceDiv">
        </div>
        <div class="center border">
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
        <script>
        $(function(){
          $("#navbar-placeholder").load("pages/navigation.html");
        });
        </script>
    </body>
</html>