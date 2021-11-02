<?php

// 1
$test  = "Janek";


  // 2.
   // string -  tekst
  //  float - liczby zmiennoprzecinkowe 
  //  int - liczby całkowite
  //  bool - true/false
  

  //3
  echo $test;
 ?>
 <br>
 <?php


 //4
  echo $test . $test;   ?> <br>  <?php


//5
$isAuthorised = false;
$isClicked = true;
  if($isAuthorised ==true && $isClicked == true){
    echo "operacja udana";   
    }else{
        echo "operacja nieudana";   ?> <br> <?php
    }


//6
if($isAuthorised ==true && $isClicked == false) {
    echo "operacja udana";   
    }else{
      
    }
    if($isAuthorised ==false && $isClicked == true) {
        echo "operacja udana";   
        }else{
          
        }
?>
<br> <?php

//7
$tablica['FavAnimal'] ='Żułw';
$tablica['FavFood'] ='Pizza';
$tablica['FavMovie'] ='TheRoom';


//8
echo $tablica["FavAnimal"] . " ". $tablica['FavMovie'] . " ".  $tablica['FavMovie'] ;


//9
$tekst = "123456789";
?> <br> 
<?php
echo substr ($tekst, 5, 1);
?> <br><br> <br><br> <br> <?php
//10


$katalog    = 'C:';

$pliki = scandir($katalog);
 foreach($pliki as $plik) echo '<p>'.$plik.'</p>';



//11
foreach($pliki as $plik){
 if($plik[0] == "$" ){
    echo '<p>'.$plik.'</p>';
 }
}


?>
//18



 <form method="post" action="index.php">
<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="username" class="inpUsername">
<label for="password">Hasło:</label>
<input type="password" id="password" name="password">
    <div id="lower">
        <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj</label>
        <input type="submit" name="wyslano" value="Logowanie" class="inpLogowanie">
        <a href="rejestracja.php" class="inpRejestracja">Rejestracja</a>
    </div>
</form>









