<!DOCTYPE html>
<html lang="en">
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <body>
        <div id="navbar-placeholder">
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
          $("#navbar-placeholder").load("navigation.html");
        });
        </script>
    </body>
</html>