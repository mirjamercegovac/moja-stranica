<?php require_once 'contact.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Moja stranica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
</head>
<body>
  <!---------------------------------Navbar----------------------------------->
    <header>
      <div class="menu">
        <i class="fas fa-bars"></i>
      </div>
      <div class="navbar">
        <ul class="nav justify-content-center">
          <li><a href="index.html">Naslovna</a></li>
          |<li><a href="Moj grad.html">Moj grad</a></li>
          |<li><a href="O meni.html">O meni</a></li>
          |<li><a href="Galerija.html">Galerija</a></li>
          |<li><a href="#" class="active">Kontakt</a></li>
        </ul>
      </div>
    </header>
  <!---------------------------------Navbar----------------------------------->

    
  <!-------------------------------Contact-form-------------------------------->
    <div class="contact">
      <form action="" method="post">
        <label for="name">Ime:</label>
          <input type="text" class="name" name="name" id="name" required>
        <label for="email">Email:</label>
          <input type="email" class="email" name="email" id="email" required>
        <label for="message">Poruka:</label>
          <textarea name="message" cols="30" rows="5" required></textarea>
        <input type="submit" name="submit" class="contact-btn" value="Pošalji">
      </form>
    </div>
  <!-------------------------------Contact-form-------------------------------->  




  <!----------------------------------Footer------------------------------------>

  <footer>
    <h2>MOJA STRANICA. All Rights Reserved ©&nbsp;<h2 id="date"></h2></h2>
  </footer>

  <!----------------------------------Footer------------------------------------>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="funkcije.js"></script>
    
</body>
</html>

<?php

    if(!empty($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, message) values ('$name', '$email', '$message')";

        if(mysqli_query($conn, $sql)){
            echo "<h6 style='background: #9fd2a1; 
                              width: 20%; 
                              margin: 1rem auto;
                              padding: 5px 10px;
                              text-align: center;
                              color: #326b07;
                              border-radius: 3px;'>Poruka je poslana.</h6>";
        }else{
          echo "Error : ". $sql . "<br>" . mysqli_query($conn);
        }
        mysqli_close($conn);

    }

    ?>