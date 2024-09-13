<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- // using php in html 6/9/2024-->
    <?php
    echo "<h1>Tutorial</h1>";
        echo ('hello world').'<br>' ;
         echo date("Y-m-d").'<br>';    
    ?>
    <br>

         <!-- 7/9/2024// VARIABLES IN PHP variable is like a container to store peice of information in our program and keep track of them -->
    <?php 
        $name = 'Tayo';
        $age = 30;

        // echo "There was once a man named $name <br>";
        // echo "he was $age years old <br>";
        // $name = "Tobi";
        // echo "He really liked the $name John <br>";
        // echo "But didn't like being $age years old <br>";
    ?>
    <br>

        <!-- Basic PHP Data-Types. Different types of data in php-->
    <?php
        $string = "String data-type";//strings are plain-text
        $age = 30; //number/interger 
        $gpa = 30.3; //number/float
        $isMale = false; //boolean true or false
        null  //meaning no value and not exactly a php data type
    ?>
    <br>

        <!-- Working with strings...Using basic functions like tolower -->  
     <?php 
        // $animal = "Brown Pandas";
        // // basic string functions
        // echo strtolower($animal);
        // echo "<br>";
        // $animal = "Brown Pandas";
        // echo strtoupper($animal)."<br>";
        // echo strtolower("golden-fish").'<br>';
        // echo strlen("golden-fish").'<br>';
        // // first character in a string i.e index
        // echo $animal[-1]."<br>";
        //     $animal[0] = "W"; //changing the single letters
        // echo str_replace("Wrown", "Brown", $animal)."<br>";//replacing word character
        // // echo $animal;
        // echo substr($animal, 6)."<br>";//replacing
        // echo substr($animal, 6, 5);
     ?>   
     <br>

        <!-- Working with numbers -->
      <?php 
      echo 40 % 40; //php honors the order of operations as well BODMAS. Addition, subtract, multiply, divide, modulas
      $num = 10;
        //$num++;
        //$num += 35;
      echo "<br>";
      //echo $num;
        //maths functions in PHP to carry out maths operators/operations
    //   echo abs(-10);
    //   echo "<br>";
    //   echo pow(3,2);
    //   echo "<br>";
    //   echo sqrt(4);
    //   echo "<br>";
    //   echo max(10,2); //for comparison big/small
    //   echo "<br>";
    //   echo min (10,2); //for comparison
    //   echo "<br>";
    //   echo round(6.6775);
    //   echo "<br>";
    //   echo ceil(3.3); //ceil always round up regardless of the decimal
    //   echo "<br>";
    //   echo floor(5.9); // floor wouldn't round up regardles of the decimal
      ?>
    <br>

        <!-- Getting users input in php  9/9/2024-->
     <!-- this can be achieved using a form. A form is a special html element that allows users to input info and pass it over to our php programs. It is like a middleman btw html and php   -->
     <!-- 
     </form> -->
    <br>
    <!-- inside the php tag we can access the information that was submitted from html -->
    <!-- Your name is <?php echo $_GET["name"]?>
    <br>
   and your are <?php echo $_GET["age"] ?> -->
  <br>

       <!-- Building a basic calculator using PHP -->
    <!-- <form action="index.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">

        <input type="submit">
    </form> -->
    <?php  
    //  here the user will enter numbers and the result will be given.
    //  echo $_GET["num1"] + $_GET["num2"]
    ?>
 <br>
    
     <!-- Building a mad libs game using php. Here users will be able to enter bunch of different words and put it in the story -->
   <!-- <form action="index.php" method="get">
        color: <input type="text" name="color"> <br>
         plural-noun: <input type="text" name="plural-noun"> <br>
        celebrity: <input type="text" name="celebrity"> <br>
     <input type="submit">
   </form> -->
   <br>
 <?php 
//   intead if this 
    // echo "roses are red <br>";
    // echo "violets are blue <br>";
    // echo "I love you <br>";
// users should use this to get users input for the mad libs games.
   //store the get in the variable
// $color = $_GET["color"];
//  $pluralNoun = $_GET["plural-noun"];
//  $celebrity = $_GET["celebrity"];
// //  set a variable to effect the change after set the form to get input
// echo "roses are $color <br>";
// echo "$pluralNoun are blue <br>";
// echo "I love $celebrity <br>";
//  ?>
<br>

    <!-- URL parameters i.e values that can be tacked at the end of the url -->
  <!-- <form action="index.php" method="get">
         Name: <input type="text" name="name">
         <br> 
         <input type="submit">
  </form>     
    <?php echo $_GET["name"]?> -->
 <br>

    <!-- POST & GET in PHP -->
    <!-- <form action="index.php" method="post">
         Paaword: <input type="password" name="password">
         <br> 
         <input type="submit">
    </form>     
    <?php echo $_POST["password"]?> -->
 <br>

     <!-- arrays in php...array stores multiple data  -->
 <!-- <?php 
  $friends = array("mary", "tayo", "mai");
  $friends[1] = "Titi";
    echo $friends[1];
 ?> -->
 <br>

      <!-- Using checkboxes in PHP -->
  <form action="index.php" method="post">
   <!-- <label for="Fruits">Apple</label>  -->
    <!-- Apple: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Orange: <input type="checkbox" name="fruits[]" value="orange"> <br>
    Avocado: <input type="checkbox" name="fruits[]" value="avocado"> <br> -->
    <!-- Cherry: <input type="checkbox" name="fun" value="cherry"> <br> -->
 
    <!-- <input type="submit"> -->
  </form>

  <?php 
  //  $fruits = isset($_POST["fruits"]) ? $_POST["fruits"] : [];
  //     if(!empty($fruits)){
  //       echo "You selected:".implode(",", $fruits);
  //     } else {
  //       echo "You did not select any fruits.";
  //     }
    // echo $fruits[0];
    // if(isset( $_POST["fun"])){
    //   echo "you selected:". $_POST["fun"];
    // } else {
    //   echo "you did not select cherry";
    // }
    // echo $fruits[1];
    // echo $fruits[2];
    // echo $fruits[3];
  ?>
 <br> 
  
      <!-- Associaive Arrays(key value pairs can be stored e.g mapping value to student name as seen below) -->
  <!-- a website where the user can write out the name and print out what grade the user got  -->
  <!-- <form action="index.php" method="post" >
    <input type="text" name="student">
    <input type="submit">
  </form> -->
  <?php 
      // $grades = array("Jim"=>"A+", "Jane"=>"B-", "John"=>"C+");
      //  $grades["Jim"] = "F";
      // // echo $grades["Jim"]. "<br>";
      // // echo count($grades);
      // echo $grades[$_POST["student"]];
  ?>
  <br>

       <!-- Function (function is a reusab le block of code) 11/09/2024-->
        <?php 
          // function sayHi($name, $age){
          //   return "Hello $name and your are $age years old"; 
          // }
          //  echo sayHi("Tom", 30);
          //  sayHi("Dave", 20);
          //  sayHi("Tony", 25);
        ?>
        <br>

            <!-- If statement makes the programme more smarter -->
        <?php 
            // $isFemale = false;
            // $isPettier = true;
            // if( $isFemale && $isPettier){
            //   echo "I am a pettie female";
            // } elseif ( $isFemale && !$isPettier){
            //     echo "I am a female";
            // } elseif ( !$isFemale && $isPettier){
            //   echo "I am a pettie";
            // }
            // else {
            //   echo "I am not a pettie female";
            // }
               echo "<br>";
            // function getMax($num1, $num2, $num3){
            //     if($num1 >= $num2 && $num1 >= $num3){
            //         return $num1;
            //     } elseif($num2 >= $num1 && $num2 >= $num3){
            //         return $num2;
            //     } else{
            //         return $num3;
            //     }
            // } 
                // echo getMax(90, 400, 1000)
        ?>
        <br>

              <!-- Building a Better Calculator...It allows the users to decide the function it wants to perform -->
            <!-- <form action="index.php" method="post">
             First Number:<input type="number" step="0.0001" name="num1"> <br>
             OP: <input type="text" name="op"> <br>
             Second Number:<input type="number" name="num2"> <br>

             <input type="submit">
            </form>
           -->
          <?php
            //  $num1 = $_POST["num1"];
            //  $num2 = $_POST["num2"];
            //  $op = $_POST["op"];

            //  if($op =="+"){
            //       echo $num1 + $num2;
            //  } elseif($op =="-"){
            //     echo $num1 - $num2;
            //  } elseif($op =="/"){
            //     echo $num1 / $num2;
            // }  elseif($op =="*"){
            //   echo $num1 * $num2;
            // } else {
            //   echo "Invalid Operator";
            // }
          ?>
          <br>

               <!-- Switch Statement (is a special type of if statement used to compare one value to a bunch of differnt value)-->
          <!-- <form action="index.php" method="post">
              what was your grade?
              <input type="text" name="grade">
              <input type="submit">
          </form> -->
          <?php
              // $grade = $_POST["grade"];
              // switch($grade){
              //   case "A":
              //     echo " A+: You did amazing";
              //     break;
              //   case "B":
              //     echo " B+: You did great";
              //     break;
              //   case "C":
              //     echo " C+: There room for improvement";
              //     break;
              //   case "F":
              //     echo " F+: You failed";
              //     break;
              //   default:
              //   echo "Invalid grade/input";
              // }
          ?>
          <br>

               <!-- LOOPS -while loop is used to loop over a certain block of code while a condition and stops when it isn't true -->
            <?php
              //  WHILE LOOP- checks the condition first before executing the loop.
            //  $index = 1;
            //  while($index <= 5){
            //     echo "$index <br>";
            //     $index++;
            //  }
                  // DO WHILE LOOP- does not check before executing the loop.
            // $index = 6;
            // do{
            //   echo "$index <br>";
            //   $index++;
            // } while($index <= 5);
            // result is 6...and stops looping because 6 is greater than 5.
           
               //FOR LOOPS - is a special type of loop used in conjunction with indexing variables.
              //  for($i = 1; $i <= 6; $i++){
              //   echo "$i <br>";
              //  }
            // $luckyNumbers = array(5, 4, 10, 200, 1);
            //  for($i = 0; $i <= count($luckyNumbers); $i++){
            //   echo "$luckyNumbers[i] <br>";
            //  }
           ?> 
          <br>

              <!-- Include keyword (to include content of file easily example header/footer)-->
          <?php include "header.html"?>
              <p>Hhello User</p>
          <?php include "footer.html"?>
          <br>

               <!-- classes and object 12/09/2024 -->
        <!--In PHP custom data type can be created using class that allows one to model it in the real world   -->
        <!-- example a library model-->
         <?php 
        //A book model. A templete of what a book is inside of out programme. blueprint of a book
            class Boook {
              var $title;
              var $author;
              var $pages;

               function __construct(){
                
               }
            }
            // This is called an object, an object is an instant of a class. This is an actual book
          //  this is creating a new book data type
            $book1 = new Boook;
            $book1 ->title ="About Them";
            $book1 ->author = "Maryam Oladipo";
            $book1 ->pages = 200;

            echo $book1 ->title;
           
            $book2 = new Boook;
            $book2 ->title ="Mori";
            $book2 ->author = "Maryam Oladipo";
            $book2 ->pages = 100;

            echo $book2 ->title;
        ?>
        <br>

              <!-- Constructor - Is a special function we can put inside of a class which is going to get called when we create a object of that class -->
        <?php 
             class Book {
              var $title;
              var $author;
              var $pages;

               function __construct($title, $author, $pages){
                $this ->title = $title;
                $this -> author = $author;
                $this -> pages = $pages;
               }
            }

            $book1 = new Book( "bookkeeping", "SHelock", 100);
            $book2 = new Book( "Baking Book", "Latifat",120);

            echo $book1->title;
            echo $book2->title
        ?>
        <br>

              <!-- Object Function in PHP. An Object function is a function that can be defined inside a class and  then the differnt objects of that class can be used -->
            <?php
              class Student {
                var $name;
                var $major;
                var $gpa;

                  function __construct($name, $major, $gpa){
                      $this ->name = $name;
                      $this ->major = $major;
                      $this ->gpa = $gpa;
                  }
                    // object function
                  function hasHonors(){
                    if($this->gpa >= 3.5){
                      return "$this->name Congratulations";
                    } 
                    return "No Honors";
                  }

              }
                  // Student Object
              $student1 =new Student("Azeezat", "Science", 3.5);
              $student2 =new Student("Kafi", "English", 3.0);
                echo $student1-> hasHonors();
                echo $student2-> hasHonors();
            ?>
            <br>

                  <!-- 13/09/2024  Getter and Setter (are specal functions we can create inside PHP class which allow us to control the access that people have to the attribute of thosee classes ) -->
            <?php 
              class Movie {
                //the keyword public means the code is accessible to everyone.If it is private, it wouldn't be accesssed outside that line of code.
                public $title;
                private $rating;

                  function __construct($title, $rating){
                      $this->title = $title;
            //Private attribute. Visibility modifier is a key word/code that is going to tell PHP, what code is able to acces and reuse differnt attributes in our programs.
                      $this->setRating($rating);
                  }

                  function getRating() {
                   return $this->rating;
                  }

                  function setRating($rating) {
                    if($rating == "G" || $rating == "PG" || $rating == "R" || $rating == "NR " || $rating == "PG-13"){
                        $this->rating = $rating;
                    } else {
                      $this->rating = "NR";
                    }
                  }
              } 

                $avengers = new Movie("Avengers", "dog");

                echo $avengers->getRating();
            ?>
            <br>

                   <!-- Inheritance in PHP (is basically where a class can inherit all of the functionality, all the attributes from from another class in PHP ) -->
                    <!-- e.g -->
          <?php
              class Chef{
                function makeChicken(){
                  echo "The Chef makes chicken <br>";
                }
                function makeSalad(){
                  echo "The chef makes salad <br>";
                }
                function makeSpecialDish(){
                  echo "The chef makes bbq ribs <br>";
                }
              }

              // Here the italian chef can inherit the functions of the normal chef
                class italianChef extends Chef{
                    function makePasta(){
                      echo "makes Pasta";
                    }
                    // this over rides the inheritance
                    function makeSpecialDish()
                    {
                      echo "The chef makes chicken parm";
                    }
                }

              $chef = new Chef();
              $chef->makeSpecialDish();

              $italianChef = new italianChef();
              $italianChef->makeSpecialDish()
          ?>

  
            
    </body>
</html> 