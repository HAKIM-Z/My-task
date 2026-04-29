<?php

//  echo "Hello world";

// echo "hell";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";

// $price_after_sale = 50;  //number   int  price_after_sale = 50;
// echo gettype($price_after_sale );
// echo "<br>";

// $price_after_sale = "mm"; 
// echo gettype($price_after_sale );
// echo "<br>";
// $name = "mohamed";   //string
// $isAdmin = true    ;
// echo $name ;
// $num = 15.3;


// echo "5"+5;

// echo  (int) "ahmed"+5;
// echo  (int) 10.5 + 20;

// $name = "mohamed";
// echo "Hello ".$name;



// $age = 25;
// if($age >18){
//     echo "enter";
// }
// if($age < 20){
//   echo "sorry you cant";
// }
// if($age < 20){
//   echo "sorry you cant";
// }
// else{

// }


// $gender = "male";

// if($gender == "female" ){
//     echo "hello";
// }
// elseif($gender == "mal"){
//      echo "hello male";
// }
// else{
//     echo "other";
// }

// $num = '10';  //string
// if($num === 10){   //number
//     echo "success";
// }
// else{
//     echo " not valid";
// }


// $a = 200;
// $b = 33;
// $c = 500;

// if ($a > $b || $a > $c ) {
//   echo "Both conditions are true";
// }


// $day = 1;
// if($day == 1){
//     echo "today is satrday";
// }
// elseif($day == 2){
//      echo "today is sunday";
// }
// elseif($day == 3){
//      echo "today is monday";
// }
// elseif($day == 4){
//      echo "today is thr";
// }
// elseif($day == 5){
//      echo "today is w";
// }

$day = 4;
switch($day){
    case '1' :
         echo "today is satrday";
         break;

            case '2' :
         echo "today is sun";
          break;


            case '3' :
         echo "today is mon";
          break;

            case '4' :
         echo "today is th";
          break;
        
            case '5' :
         echo "today is we";
          break;

          default :
          echo "not found";

}

echo "<hr>";
    // dry
$fruit = "carrot";
switch($fruit){

    case "apple" :
      case "orange" :

       echo "this ia s fruit";
       break ;

         case "carrot" :
         case "tomato" :

       echo "this ia s vegetable";
       break ;

       default :
       echo "not found";

}

// if(){

// }

// if():  
//   echo "hello";
// endif;


/**
 *  %  19%10  => 9    2%2 =0   3%2 =1
 *  2**2 
 */
// echo 2**2;

echo "<hr>";
// $x = 5;

//      $x *= 2;         //$x = $x+1;   
// echo $x ;

/**increment 7decrement
//post increment
pre increment
 * 
 *  */ 



// $i = 5;
// echo $i++ ;   //5   post
// echo $i;


// $i = 5;
// echo  ++$i ;   //5   post
// echo $i;
  //   5    2     7   14 
// $y = $i++ + 2 + ++$i;
// echo $y;


// $a =10;
// $b = ++$a ;
// echo $a ;   //10   11  11
// echo "<br>";
// echo $b ;  //10    10   11


// $x = 6;
// //     6    4   7    3       9
// $y = $x++ + 4 + $x++ +3  + ++$x ;
// echo $y; 

  /////////////////////////////////////
  //looping  for   while   do while

// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";

// for(  ;  ;  ){
//    echo "hello <br>"; 
// }

// for($i=0 ; $i<10 ; $i++){
//    echo "hello <br>"; 
// } 


// $i=0;
// while($i<10){
//    echo "hello  while <br>"; 
//    $i++;
// }

// $correctPin = 123456;
// $enterPin = null;

// while($correctPin != $enterPin){  //563
//   echo "please enter your pin";
//   $enterPin = 123456;

// }


// $age = 18;

// while($age >20){
//   echo "hello";
// }

// do{
//  echo "hello"; 
// }
// while($age >20);


/*
//break
continue
*/
// for($i = 1 ; $i<10 ; $i++){
// if($i==6){
//   continue;
// }
// echo $i;
// }


/**
 * 1234 Boom 6789 Boom 11 12 13 14 Boom 
 * 
 */

// for($i=1 ; $i<=50 ; $i++){
//   if($i %5 == 0){
//     echo "BOOM";
//     continue;
//   }
//   echo $i."<br>";
// }


///////////////////array /////////////////

// $student1 = "ahmed";
// $student2 = "mohamed";
// $student3 = "ali";

// $student = [];
// $students = array();

//              0        1          2      3          4  5      6
// $students = ['ahmed' , 'mohamed' ,'ali','ibrahim' , 50 ,true , 'math'];

// echo $students;
// print_r($students);
// echo "<br>";
// var_dump($students);

// $x = 10;  //x=10
// echo $students[3];
//  echo "<br>";
// echo $students[0];
//  echo "<br>";
// echo $students[5];
// echo count($students );  //1

// for($i=0 ; $i<count($students ) ; $i++){
//   echo $students[$i];
// }

// foreach($students as $student){
//   echo $student ."<br>";

// }


// $persons=[
//  "name" => 'ahmed',
//  "age" => 20 ,
//  "gender" => 'male'
// ];

// print_r($persons);
// echo "<br>";
// // echo $persons['name'];
// $persons[] = 'mohamed';
// echo "<br>";
// print_r($persons);


// $persons['name'] = 'ali';
// echo "<br>";
// print_r($persons);

// for($i =0 ;$i<count($persons) ; $i++){
//   $persons[$i];
// }

// foreach($persons as $key=>$value){
//     echo $key . " : ".$value ."<br>";
// }

// $students = [
// //   0        1      2
//   ['ahmed' , 27 , 'male'],   //0
//   //   0        1      2
//   ['nour' , 20 , 'female'],  //1
//   //   0        1      2
//   ['mona' , 22 , 'female'],   //2
//   ['mohamed' , 25 , 'male']  //3
// ];

// print_r($students[2]);

//  echo $students[1][1];



// $students = [
//   'a' => ['ahmed' , 27 , 'male'] ,
//   'b' => ['nour' , 20 , 'female'] ,
//   'c' =>['mona' , 22 , 'female'] ,
//   'd' => ['name'=>  'mohamed' , 'age'=> 25 , 'gender' => 'male']  

// ];
// echo $students['d']['gender'];



// $students = [

//   'a' => ['name'=>  'mohamed' , 'age'=> 25 , 'gender' => 'male'] , 
//   'b' => ['name'=>  'ahmed' , 'age'=> 20 , 'gender' => 'male'] , 
//   'c' => ['name'=>  'malik' , 'age'=> 10 , 'gender' => 'male']  

// ];

// foreach($students as $student){
//   // echo $student;
//   foreach($student as $key=>$valu){
//     echo $key ," : ". $valu ."<br>";
//   }
// }









////////////////////////////////////////////////////////////////////////
    //ps
   



$students = [

'marwa' => ['arabic'=> 75 , 'english'=>90 , 'math'=>80],   //245
'mohamed' => ['arabic'=> 70 , 'english'=>95 , 'math'=>63], //228
'ahmed' => ['arabic'=> 80 , 'english'=>89 , 'math'=>87]  //256

];
// $arr = [1,3,5];
// echo array_sum($arr);
/*
1-get the average with the name of the student
2-get the top student name and his marks
*/


   /////sort//// 
// $numbers = [4,3,5,7];   //index 3


// $num = count($numbers);  //4

// for($i=0 ; $i< $num-1 ; $i++){
//     for($j=0 ;$j< $num-$i-1 ;$j++){
//         if($numbers[$j] > $numbers[$j+1]){    //$number[0]   $number [1] 
//             $temp = $numbers[$j] ; 
//              $numbers[$j] = $numbers[$j+1];
//              $numbers[$j+1] = $temp;
//         }
//     }
// }
// print_r($numbers);
// $num = count($numbers);
// for($i=0 ; $i< $num   ; $i++){
//   // echo  $numbers[$i];
//   for($j=0 ; $j<$num-1 ;$j++ ){
//     if($numbers[$j] > $numbers[$j+1] ){  //$numbers[0]   $numbers[1] 
//       $temp = $numbers[$j] ;
//       $numbers[$j]  = $numbers[$j+1] ;
//       $numbers[$j+1] = $temp;

//     }
//   }
// }

// print_r($numbers);



// $students = [

// 'marwa' => ['arabic'=> 75 , 'english'=>90 , 'math'=>80],   //245
// 'mohamed' => ['arabic'=> 70 , 'english'=>95 , 'math'=>63], //228
// 'ahmed' => ['arabic'=> 80 , 'english'=>89 , 'math'=>87]  //256

// ];

// /*
// 1-get the average with the name of the student
// 2-get the top student name and his marks
// */

// $arr = [1,2,3,5,9];
// echo array_sum($arr);


// foreach($students as $name => $student){
//     $average = array_sum($student) / count($student);
//     echo "The Average is : ".$name . " : ".$average ."<br>";
// }


// echo "<hr>";
// $total = 0 ;
//  $topStudent ="";
// foreach($students as $name=>$value){

//      $totalMark = array_sum($value);

//     if($totalMark  > $total){

//       $total = $totalMark;
//         $topStudent = $name;

//     }
// }
// echo $topStudent . " : ".$total;




////////////////////////////////////////////////////
/**
 * pass by value &pass by refrence
 * 
 */

// $x = 10;  //125d
// echo $x ;
// echo "<br>";

// $y = &$x ; 
//  echo $y;
// echo "<br>";


//  $x = 20;

//  echo $x ;
// echo "<br>";

//  echo $y ;
// echo "<br>";


/////////////////////////////////////////////////



// function Clac($rev=500 , $expen=10 , $taxsRate=0.14 , $otherExpe=50){

// $income = $rev - $expen;
// $incomeWithTaxs = $income*$taxsRate;
// $icomeAfetrTaxs =$income- $incomeWithTaxs;
// $total = $icomeAfetrTaxs-$otherExpe;
// echo $total ;
// }

// function Clac($rev , $expen , $taxsRate , $otherExpe){

// $income = $rev - $expen;
// $incomeWithTaxs = $income*$taxsRate;
// $icomeAfetrTaxs =$income- $incomeWithTaxs;
// $total = $icomeAfetrTaxs-$otherExpe;
// echo $total ;
// }


// Clac(500,20,0.14,100);
// echo "<br>";
// Clac(1000,20,0.14,100);
// echo "<br>";
// Clac(5000,20,0.14,200);
// echo "<br>";
// Clac(taxsRate:0.15);
// echo "<br>";
// Clac();
// echo "<br>";
// Clac();
// echo "<br>";
// Clac();

// $x =10;
// $x = 20;
// echo $x;

// $echo = 50;


// function greate($name){
//   return "Hello ".$name;
//     return "welcome ".$name;
// }
// $userName = 'ahmed';
// $funName=  greate($userName);
// echo $funName ;


/////////////////////////////////////
//scope   local global  

$x =10;   //global


// function age(){
//   $y=10;   //local
//   $y++;
//   echo $y;
//   // echo $x;
// }
// age();
// echo $y; 

// function age($var){
//   $y =10;
//   $y++ ;
//   echo $y;
//   echo $var;
// }
// age($x);

// function age(){
//   global $x;
//   $y =10;
//   $y++ ;
//   echo $y;
//   echo $x;
// }
// age();


// function age(){
//   // global $x;    $GLOBALS['x']
//   $y =10;
//   $y++ ;
//   return $y;
//   // echo $x;
// }
// echo age();

// print_r($GLOBALS);
// echo $GLOBALS['x'];

// function age(){
//   static $y =10;
//   $y++;
//   echo $y;
// }
// age();  //11
// echo "<br>";
// age();   //12
// echo "<br>";
// age();  //13

// function trackVisit(){
//   static $count = 0;
//   $count ++ ;
//   echo $count ;
// }
// trackVisit();
// echo "<br>";
// trackVisit();
// echo "<br>";
// trackVisit();
// echo "<br>";
// trackVisit();

// const $name = "marwa";

//define('x',20);

// const NAME = 'marwa';

// function greet(){
//   echo NAME;
// }
// greet();



//  * 3-write function that takes an array of numbers and return the total of them
//  * 4-write function that return the max number of an array
$arr = [2,5,8,1];

// function sumAraay($arr){
// $sum = 0;
// for($i=0 ; $i<count($arr) ; $i++){
//   $sum += $arr[$i];
// }
// return $sum;
// }
// echo sumAraay($arr);

// function maxArray($arr){
//   $max = $arr[0];
//   for($i=1 ; $i<count($arr) ; $i++){
//     if($arr[$i] >$max){
//       $max = $arr[$i] ;
//     } 

//   }
//       return $max;
// }
// echo maxArray($arr);