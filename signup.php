<?php
include_once 'header.php';
?>
    <div class="container">
   <div class="row">
       <div class="col-3"></div>
         <div class="col-6">
               <h1 class="text-center text-primary">Sign Up</h1>
                 <form action="includes/signup.inc.php" method="post"><br>
                   <input name="name" class="form-control" type="text" placeholder="Full Name"><br>
                   <input name="email" class="form-control" type="email" placeholder="Email"><br>
                   <input name="uid" class="form-control" type="text" placeholder="Username"><br>
                   <input name="pwd" class="form-control" type="password" placeholder="Password"><br>
                   <input name="repeatpwd" class="form-control" type="password" placeholder="Repeat password"><br>
                   <button name="submit" class="btn btn-block btn-outline-primary" type="submit">Sign Up</button>
                 </form>
         </div>
       <div class="col-3"></div>
     </div>
    </div>


<?php
include_once 'footer.php';
?>