<!DOCTYPE html>
<html>
 <head>
  <title>Entry Form</title>
  
 </head>
 <body>
 
 <div>
  <?php
  if(isset($_POST['create'])){
    echo 'User submitted.';
  }
  ?>

 </div>

 <div>
   <form action="entryform2.php" method="post">
     <div class="container">
       <h1><p style="color:navy;">Entry Form</h1>
	   <hr/>

       <label for="firstname"><b>First Name</b></label>
       <input type="text" name="firstname" required>

       <p><label for="lastname"><b>Last Name</b></label>
       <input type="text" name="lastname" required>
	   
	   <p><label for="age"><b>Age</b></label>
       <input type="number" name="age" id="age" 
	   min="1" max="200">
	   
	   <p><label for="birthdate"><b>Birthdate</b></label>
       <input type="date" name="date" required>
	   
       <p><label for="phonenumber"><b>Phone Number</b></label>
       <input type="text" name="phonenumber" required>
	   
       <p><label for="email"><b>Email</b></label>
       <input type="email" name="email" required>


       <p><label for="password"><b>Password</b></label>
       <input type="password" name="password" 
	   pattern=".{8,}" title="Eight or more characters" required>

       <p><input type="submit" name="create" value="Sign up">
     </div>
   </form>
 </div>

 </body>
</html>