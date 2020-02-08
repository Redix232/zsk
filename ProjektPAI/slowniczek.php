<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,JavaScript">

  <meta name="author" content="Mateusz Wiemann">
    <title>Projekt</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
 
<body>
    <div id="logowanie">
    

        <form id="logform" method="POST">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" class="log" name="username">
        <label for="password">Hasło:</label>
        <input type="password" class="log" name="password">
        <div id="lower">
        <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
        <span><a href="#" id="rejestracja">Zarejestruj się!</a></span>
        <input type="submit" value="Login">
        
        </div>
        </form>
        <form  id="rejform" method="POST">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" class="log" name="username">
            <label for="mail">Mail:</label>
            <input type="text" class="log" name="mail">
            <label for="password">Hasło:</label>
            <input type="password" class="log" name="password">
            <label for="password">Powtórz Hasło:</label>
            <input type="password" class="log" name="password">
            <div id="lower">
            <span><a href="#" id="logg">Logowanie!</a></span>
            <input type="submit" value="Zarejestruj" id="subrej">
            
            </div>
        </form>
        <?php
        if(isset($_POST['zar']))
  {
     
      $connect = mysqli_connect("localhost","root","","baza_na_projekt");
      mysqli_set_charset($connect, 'utf8');
     
     
     
          $login = $_POST['username'];
          $haslo1 = $_POST['password'];
          $haslo2 = $_POST['password1'];
          $mail = $_POST['mail'];
          if($haslo1==$haslo2){
            $sql = "INSERT INTO logowanie(login,haslo,mail) VALUES ('$login','".password_hash($haslo1,PASSWORD_ARGON2ID)."','$mail')";
                 
            mysqli_query($connect, $sql);
          }        
          else
          echo "nie udało się zarejestrować";
          echo mysqli_error($connect);           
            
      
          mysqli_close($connect);
              }

    ?>
    <?php 
   
    
   if(isset($_POST['log']))
   {
      
       $connect = mysqli_connect("localhost","root","","baza_na_projekt");
       mysqli_set_charset($connect, 'utf8');
      
      $user = $_POST['username'];
      $sql = "SELECT haslo FROM logowanie WHERE login='" . $user . "'";
     $result=mysqli_query($connect, $sql);
      echo mysqli_error($connect);
    $haslo = $_POST['password'];

    $hashedpassword = mysqli_fetch_assoc($result)['haslo'];
    if(password_verify($haslo, $hashedpassword)) {
        $_SESSION['user'] = $user;
    }
    else
    echo "nie udało się zalogować";
           mysqli_close($connect);
               }
 
     ?>
        </div>
        
<div id="blure">


    <header>
        <ol id="ol">
            <li id="li"><a href="index.php"><img alt="menu" src="obrazki/home.svg" id="dom"></a></li>
            <li id="li"><a href="slowniczek.php" id="slowniczek" style="color: white;">Słowniczek</a></li>
            <li id="li"><a href="o_mnie.php" >O MNIE</a></li>
            <?php
            if(isset($_SESSION['user']))
                echo "<li id='li'>Witaj ".$_SESSION['user']."</li>";
            ?>
            <li id="li"><img alt="login" src="obrazki/login.svg" id="login"></a></li>
        </ol>
    </header>

    <nav>
        <div id="flex">
        <div class="flex-child"> <h2 id="h2">SZUKAJ</h2>
            <hr class="hr">
        </div>
       
        <div class="flex-child"> <p class="option" >Zestaw </p>
            <hr class="hr">
        </div>
        
        <div class="flex-child"><p class="option">Fiszki</p>
            <hr class="hr">
        </div>
      
       <div class="flex-child"> <p class="option">Zestaw i Fiszki</p>
        <hr class="hr">
    </div>
       
    </div>
    </nav>
    
<section>
  
     
    
</section>

<aside>
    
    <div id="flex">
        <div class="flex-child"> <h2 id="h2">Szukaj</h2>
            <hr class="hr">
        </div>
       
        <div class="flex-child"><p class="ja"><input type="search" id="szukaj" placeholder="wyszukaj"></p>
            <hr class="hr">
        </div>
        
        <div class="flex-child"><p class="ja"><button>Szukaj</button></p>
            <hr class="hr">
        </div>
     
    </div>
       
   
</aside>
    

<footer>
    <p id="footer">Create by Mateusz Wiemann</p>
</footer>
</div>

<script src="JS/login.js"></script>
</body> 
</html>