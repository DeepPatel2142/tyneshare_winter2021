<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuneshare 2021</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
 <header>
    <h1>Tuneshare 2021 - Share your favtune & join your community</h1>
 </header>
 <main>
      <form action="process.php" method="post">
         <lable for="fname">First Name</lable>
         <input type="text" name="fname" id="fname">

         <lable for="lname">Last Name</lable>
         <input type="text" name="lname" id="lname">
        
         <lable for="genre">Favourite Genre</lable>
         <input type="text" name="genre" id="genre">

         <lable for="location">Your Location</lable>
         <input type="text" name="location" id="location">

         <lable for="email">Your Email</lable>
         <input type="email" name="email" id="email">

         <lable for="age">Your Age</lable>
         <input type="number" name="age" id="age">

         <lable for="favsong">What Are You Listening To Right Now!!!!</lable>
         <input type="text" name="favsong" id="favsong">

         <input type="submit" value="submit" name="submit">
       </form>
 </main>
 <footer>
         <p> &copy; <?php echo getdate()['year']; ?></p>
 </footer>
</body>
</html>