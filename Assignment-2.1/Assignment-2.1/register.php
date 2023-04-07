<?php include 'header.php'?>
<?php include 'assets/user.php'?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <h2 class="m-5 text-bg-info p-3 text-white">:REGISTER:</h2>

            <?php
            if(isset($_POST['submit'])){
                $user= new user;
                $userCount = $user->checkPreviousUser($_POST['username'],$_POST['email']);
                if(Count($userCount) > 0){
                    echo "<p class='alert alert-warning'> Name/Email all ready exist</p>";
                }else {
                    
                    $user->register($_POST['username'],$_POST['email'],md5($_POST['password']));
                    echo "<p class='alert alert-info'> REGISTER SUCCESSFULLY </p>";
                }
           
            }
            ?>
            <br>
            <form action="" method="POST">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label text-success"><h5>User Name</h5></label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3" >
                    
                </div>
            </div>
            <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label text-info"><h5>Email :</h5></label>
    <div class="col-sm-10">
        <input type="email" name="email" class="form-control p-3 text-info-emphasis bg-info-subtle border border-info-subtle rounded-3" >
      
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label text-danger"><h5>Password</h4></label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3" id="inputPassword">
    </div>
  </div>
         <button class=" btn btn-light" type ="submit" name ="submit">SEND</button>
         <button class=" btn btn-danger "><a href="login.php" class="text-white">Login</a></button>

   
            </form>
        </div>
    </div>
</div>











<?php include 'footer.php'?>