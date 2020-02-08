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
        <input type="submit" value="Login" name="log">
        
    </div>
    </form>
    <form  id="rejform" method="POST">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" class="log" name="username">
        <label for="mail">Mail:</label>
        <input type="email" class="log" name="mail">
        <label for="password">Hasło:</label>
        <input type="password" class="log" name="password">
        <label for="password">Powtórz Hasło:</label>
        <input type="password" class="log" name="password1">
        <div id="lower">
        <span><a href="#" id="logg">Logowanie!</a></span>
        <input type="submit" value="Zarejestruj" name="zar" id="subrej">
       
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
          echo "błąd rejestracji";
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
            <li id="li"><a href="index.php"><img alt="menu" src="obrazki/home2.svg"></a></li>
            <li id="li"><a href="slowniczek.php" >Słowniczek</a></li>
            <li id="li"><a href="o_mnie.php">O mnie</a></li>
            <?php
            if(isset($_SESSION['user']))
                echo "<li id='li'>Witaj ".$_SESSION['user']."</li>";
            ?>
            <li id="li"><img alt="login" src="obrazki/login.svg" id="login"></a></li>
        </ol>
    </header>

<nav>
    <div id="flex">
    <div class="flex-child"> <h2 id="h2">FISZKI</h2>
        <hr class="hr">
    </div>
   
    <div class="flex-child"> <p class="option" id="create">Stwórz zestaw </p>
        <hr class="hr">
    </div>
    
    <div class="flex-child"><p class="option" id="create2">Gotowe zestawy</p>
        <hr class="hr">
    </div>
  
   <div class="flex-child"> <p class="option" id="create3">Zestawy</p>
    <hr class="hr">
</div>
   
</div>
</nav>
    
<section>
    <div id="se1" class="zmienny">
        <div id="fiszka">
        </div>
    </div>
    <div id="se2" class="zmienny hide" >
        <div class="flex-area">
            <div class="div-area">
                <textarea class="textarea" placeholder="wpisz słowo" id="slowo" ></textarea> 
                
            </div>
            
            <div class="div-area">
                <textarea class="textarea"  placeholder="wpisz tłumaczenie" id="tlumaczenie" ></textarea>
            </div> 
        </div>
       
        <ol id="lista">
           
        </ol>
    </div>
    <div id="se3" class="zmienny hide">
        <p>Wczytany zestaw</p>
    </div>
</section>

<aside>
    <div  id="as1">
         <ul class="aside">
                
            <img alt="umiem" src="obrazki/umiem.svg" id="umiem" >
            <hr class="hr">
            <img alt="nieumiem" src="obrazki/nieumiem.svg" >
            <hr class="hr">
            <img alt="revers" src="obrazki/revers.svg" id="revers">
        </ul>
        <hr class="hr">
     
      <table class="zmienny">
          <tr >
              <th id="ez">EASY</th>
              <th id="normal">NORMAL</th>
              <th id="hard">HARD</th>
          </tr>
       
      </table>
      
        <hr class="hr">
        
    </div>

    <div class="hide" id="as2">
        <div id="flex" > 
                <ul class="aside">
                <div class="flex-child" > 
            <img alt="plus" src="obrazki/plus.svg" id="plus" >
            <hr class="hr">
        </div>
        <div class="flex-child"> 
            <img alt="minus" src="obrazki/minus.svg" id="minus">
            <hr class="hr">
        </div>
            <div class="flex-child"> 
            <select id="jezyk">
                <option>Angielski</option>
                <option>Niemiecki</option>
            </select>
            <hr class="hr">
        </div>
            <div class="flex-child"> 
            <button id="stw">Stwórz</button>
        <hr class="hr">
    </div>
    </ul>
    </div>
    </div>
    <div class="hide" id="as3">
            <div id="flex">
                    <div class="flex-child"> <h2 id="h2">Zestawy</h2>
                        <hr class="hr">
                    </div>
                   
                    <div class="flex-child" id="div-zestaw"> 
                        <ol id="zestaw">
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                            <li class="zestaw"><p>Zwierzęta</p></li>
                         
                      
                        </ol>
                        <hr class="hr">
                    
    </div>
   
</div>
</aside>
    

<footer>
    <p id="footer">Create by Mateusz Wiemann</p>
</footer>
</div>
<script src="JS/wyswietlaniefiszek.js"></script>
<script src="JS/stworz_zestaw.js"></script>
<script src="JS/login.js"></script>


</body> 
</html>