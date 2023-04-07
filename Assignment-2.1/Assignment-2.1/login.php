<?php include 'header.php' ?>
<?php include 'assets/user.php' ?>


<div class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <h2 class="m-5 text-bg-success p-3  ">Login</h2>

            <?php
            if(isset($_POST['submit'])){
                $user= new user;
                $checkOneUser = $user->checkOneUser($_POST['username'],$_POST['password']);
                if(count($checkOneUser) == 1){
                    

                }else{
                    echo "<p class='alert alert-info'> Credinsial Does not match </p>";
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
              <label for="inputPassword" class="col-sm-2 col-form-label text-danger"><h5>Password</h5></label> 
                 <div class="col-sm-10">
                    <input type="password" name="password" class="form-control p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3" id="inputPassword">
                 </div>
             </div>
         <button class=" btn btn-light" type ="submit" name ="submit">SEND</button>
         <button class=" btn btn-danger "><a href="register.php" class="text-white">Register</a></button>
   
            </form>
        </div>
    </div>
</div>

