<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="img/me pic.png" alt="">
        <h3 class="name">Vince Edward Tan</h3>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio"> My Portfolio</a></li>
            <li><a href="#contact">Contact Me</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="guests.php">Guests</a></li>           
            <button class="btn" onclick="light()"><i class="fas fa-sun"></i></button>
            <script>function light() {document.documentElement.style.setProperty('--white', '#080808'); document.documentElement.style.setProperty('--black', '#f0fff0');}</script>
            <button class="btn" onclick="dark()"><i class="fas fa-moon"></i></button>
            <script>function dark() {document.documentElement.style.setProperty('--white', '#f0fff0'); document.documentElement.style.setProperty('--black', '#080808');}</script>                          
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>Hello There!</h3>
    <h1>I am<span> Vince Edward Tan</span></h1>
    <p id="demo">I'm currently in my 2nd year studying Information Technology at Asia Pacific College. I have experienced programming using Java, Python and a little bit of web developing with HTML, CSS, and SQL. I like to play video games and watch anime, TV series, and movies on my free time.
    </p>
    <button class="btn" onclick="document.getElementById('demo').style.display='none'">Hide</button>
    <button class="btn" onclick="document.getElementById('demo').style.display='block'">Show</button>
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>About</span> Me </h1>

<div class="row">

    <div class="info">
        <h3> <span> Name : </span> Vince Edward Tan </h3>
        <h3> <span> Age : </span> 20 </h3>
        <h3> <span> Senior High School Graduated From : </span> Asia Pacific College </h3>
        <h3> <span> Course : </span> BSIT-MI </h3>
    </div>
</div>

</section>

<!-- about section ends -->


<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> My <span>Portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="" alt="">
    </div>

    <div class="box">
        <img src="" alt="">
    </div>

    <div class="box">
        <img src="" alt="">
    </div>

    <div class="box">
        <img src="" alt="">
    </div>

    <div class="box">
        <img src="" alt="">
    </div>


</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>Contact</span> Me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">Contact Info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> vmtan@student.apc.edu.ph</h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Parañaque, Philippines - 1711. </h3>
        </div>

    </div>
    <?php
    // define variables and set to empty values
    $name = $email = $project = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $project = test_input($_POST["project"]);
      $message = test_input($_POST["message"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <form method="post" action="form.php">  
      <input type="text" name="name" placeholder="Name" class="box">
      <br><br>
      <input type="email" name="email" placeholder="Email" class="box">
      <br><br>
      <input type="text" name="project" placeholder="Project" class="box">
      <br><br>
      <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="Message"></textarea>
      <br><br>
      <button type="submit" name="submit" value="Submit" class="btn"> Submit <i class="fas fa-paper-plane"></i> </button>
    </form>  
</div>
</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>


</body>
</html>