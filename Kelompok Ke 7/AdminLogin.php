
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="Foto/Icon DW.png" type="image/x-icon" />
    <title>DiosWeb</title>
  </head>
  <body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #343b3f">
      <div class="container d-flex">
        <a class="navbar-brand" href="index.html"><img src="Foto/DIOSWEB.png" alt="Logo" style="height: 30px" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
<div  class="card border-secondary mb-3 position-absolute top-50 start-50 translate-middle" style="max-width: 18rem;" >
  <h3 class="text-center">Login Admin</h3>
  <?php if( isset($error) ) : ?>
    <p class="primary">username / password salah</p>
<?php endif; ?>
  <form action="" method="post">
   <ul>
       <li>
           <label for="username">Username :</label>
           <input type="text" name="username" id="username">
       </li>
       <li>
           <label for="password">Password :</label>
           <input type="password" name="password" id="password
            ">
       </li>
       <li>
           <button type="submit" name="login">Login</button>
       </li>
  </form>
</div>
</body>