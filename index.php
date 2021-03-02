<?php require('header.php')?>
 <main>
      <form action="process.php" method="post">
         <div class = "form-group">
         <lable for="fname">First Name</lable>
         <input type="text" name="fname" id="fname" class="form-control">
         </div>

         <div class = "form-group">
         <lable for="lname">Last Name</lable>
         <input type="text" name="lname" id="lname" class="form-control">
         </div>

         <div class = "form-group">
         <lable for="genre">Favourite Genre</lable>
         <input type="text" name="genre" id="genre" class="form-control">
         </div>

         <div class = "form-group">
         <lable for="location">Your Location</lable>
         <input type="text" name="location" id="location" class="form-control">
         </div>

         <div class = "form-group">
         <lable for="email">Your Email</lable>
         <input type="email" name="email" id="email" class="form-control">
         </div>

         <div class = "form-group">
         <lable for="age">Your Age</lable>
         <input type="number" name="age" id="age" class="form-control">
         </div>

         <div class = "form-group">
         <lable for="favsong">What Are You Listening To Right Now!!!!</lable>
         <input type="text" name="favsong" id="favsong" class="form-control">
         </div>

         <input type="submit" value="submit" name="submit" class="btn btn-primary">
       </form>
 </main>
 <?php require('footer.php')?>