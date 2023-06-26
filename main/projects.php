<!DOCTYPE html>
<html lang="en">
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<body>
    <div id="navbar-placeholder">
    </div>
    <div>
        <p>Project Page<p>
    </div>
    <script>
    $(function(){
      $("#navbar-placeholder").load("pages/navigation.html");
    });
    </script>
</body>
