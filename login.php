<?php
include_once 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="text-center text-primary">Log In</h1>
                <form action="includes/login.inc.php" method="post"><br>
                    <input name="name" class="form-control" type="text" placeholder="Username/Email"><br>
                    <input name="pwd" class="form-control" type="password" placeholder="Password"><br>
                    <button name="submit" class="btn btn-block btn-outline-primary" type="submit">Log In</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>


<?php
include_once 'footer.php';
?>