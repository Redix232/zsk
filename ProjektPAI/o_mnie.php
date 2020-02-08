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
            <li id="li"><a href="slowniczek.php"  id="slowniczek">Słowniczek</a></li>
            <li id="li"><a href="o_mnie.php" style="color: white;">O MNIE</a></li>
            <?php
            if(isset($_SESSION['user']))
                echo "<li id='li'>Witaj ".$_SESSION['user']."</li>";
            ?>
            <li id="li"><img alt="login" src="obrazki/login.svg" id="login"></a></li>
        </ol>
    </header>

<nav>
    <div id="flex">
        <div class="flex-child"> <h2 id="h2">O TWÓRCY</h2>
            <hr class="hr">
        </div>
       
        <div class="flex-child"><p class="ja">Mateusz Wiemann </p>
            <hr class="hr">
        </div>
        
        <div class="flex-child"><p class="ja">Klasa 4D</p>
            <hr class="hr">
        </div>
      
       <div class="flex-child"> <p class="ja">Projekt na PAI</p>
        <hr class="hr">
    </div>
       
    </div>
</nav>
    
<section>
  
        
    <div id="ja-flex">
            <p id="ja-section"> Różnica pomiędzy wielkimi ludźmi a innymi polega na tym,</p>
            <p id="ja-section">    że wielcy ludzie tworzą aktywnie swoje życie,</p>
            <p id="ja-section">   podczas gdy pozostali poddają się temu,</p>
            <p id="ja-section">   co przynosi im życie,</p>
            <p id="ja-section">  pasywnie czekając na to, gdzie ich poniesie.</p>
            <p id="ja-section">  Różnica pomiędzy nimi to różnica</p>
            <p id="ja-section"> pomiędzy życiem w pełni a zwykłą egzystencją.</p>

            - Michael E. Gerber
    </div>
    
</section>

<aside>
    
    <div id="flex">
        <div class="flex-child"> <h2 id="h2">O TWÓRCY</h2>
            <hr class="hr">
        </div>
       
        <div class="flex-child"><p class="ja">Mateusz Wiemann </p>
            <hr class="hr">
        </div>
        
        <div class="flex-child"><p class="ja">Klasa 4D</p>
            <hr class="hr">
        </div>
      
       <div class="flex-child"> <p class="ja">Projekt na PAI</p>
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