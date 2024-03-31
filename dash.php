<?php

/*
$bool = 0;

if($bool){
    echo "true";
}
else{

    echo "false";
}

*/

/*

$bool = 'ff';

if($bool){
    echo "true";
}
else{

    echo "false";
}


$user_is_male = false;

if($user_is_male){

    $gender = "user is male";
}

else{

    $gender = "user is female";
}

echo $gender;

*/

/*
$user_is_male = true;

echo ($user_is_male) ?  "user is male" : "user is female";
*/

// $a =  NULL;

/*

$a =  "some text";

if($a){

    $b = $a;
}
else{
    $b = "default value";
}

echo $b;

*/


/*

$a = "rewq";
echo $a ?? "default value";



function getGender($user_is_male ){

    if($user_is_male){
        return "user is male";
    }

    else{
        return "user is female";
    }

}

echo getGender(true);

*/


$a = [

    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 
        [
            'nestedkey1' => 'nestedvalue1'
        ],

 ];


echo $a['key1'] ?? "default" ;


echo $a['key6'] ?? "default" ;


// $value = $a['key3']['nestedkey3'] ?? trigger_error("the item was not found");

// $value = $a['key3']['nestedkey3'] ?? throw new Error("the item was not found");


/*
function myfunc(){

    // return "myone";
    return null;
}


function myfunc2(){

    return "mysec";
}

echo myfunc() ?? myfunc2();

*/

/*

$array = ["firstName","LastName"];

$a = null;

echo $array[$a ?? 0];
*/


/*
$myvar = NULL;

if(isset($myvar)){

   echo "my var is set";
}
else{

    echo "my var is not set";
}

print_r(get_defined_vars());

*/

/*
$myvar = null;

$vars = get_defined_vars();

if(isset($vars['myvar'])){

    echo "my var is set";
}

else{
 
    echo "my var is not set";

}

*/

 /*

$myvar = null;

if(array_key_exists('myvar',get_defined_vars())){

    echo "my var is set";
}

else{

    echo "my var is not set";
}

*/

echo "<br>";

/*

$a = 1;

function myfunc($a){

    $a = 11;
    return $a;
   
}

echo myfunc($a);
echo "<br>";
echo $a;

*/

/*
$a = 1;

function myfunc(&$a){

    $a = 11;
    return $a;
   
}

echo myfunc($a);
echo "<br>";
echo $a;


*/

/*

$a = ['John','Peter'];

function sayHi($a){

    if(is_string($a)){

        echo "Hi, ".$a ."<br>";
    }

    if(is_array($a)){

        foreach($a as $name){

            echo "Hi, ".$name ."<br>";
        }
    }


}

sayHi($a);

*/


/*
$a = ['John','Peter'];
// $a = "happy";
function sayHi($a){

    if(is_string($a)){

        echo "Hi, ".$a ."<br>";
    }

    if(is_array($a)){

        foreach($a as $name){

            sayHi($name);
        }
    }


}

sayHi($a);

*/


/*
$items= ['myproduct1','myproduct2','myproduct3'];


foreach($items as  $item){

    echo "  
     <div style = 'border:solid thin #aaaa;margin:10px'>
       <h3>{$item}</h3>
     </div> ";
    

}

*/


/*
$password = "some textg";
$hashed_p = password_hash($password,PASSWORD_DEFAULT);

echo $hashed_p;

$password = "some text";
if(password_verify($password,$hashed_p)){

    echo "<br>password correct";
}

else{
    echo "not a correct password";
}

*/

//set_error_handler('err');
/*
function err(){

    echo "error occurred";
}
*/

/*
function err($errlevel,$error,$file,$line){

    echo "level of error: $errlevel<br>";
    echo "error:$error <br>";
    echo "file name:$file<br>";
    echo "line number: $line <br>";
}

// err();
*/


// $num = "something";
// echo $num/3;
// echo $num[50];


//$data = @file_get_contents("filename.txt");  //suppresses the error
//ini_set("display_errors",0);  // will not display error  1 for error


// $data = file_get_contents("filename.txt");
// var_dump($data);



function showError($e){

    echo " 
    <style>

      tr,td,th{

        border:solid thin #aaa;
        padding: 4px;
        font-size:12px;

      }

    </style>

    <table style = 'border-collapse:collapse;width:100%;background-color:#eee'>

     <tr><th>Error:</th><td>$e[message]</td></tr>
     <tr><th>file:</th><td>$e[file]</td></tr>
     <tr><th>line Number:</th><td>$e[line]</td></tr>

    </table>

    ";

}


try{
    $data = @file_get_contents("filename.txt") or throw new Exception("could not find the file");
    var_dump($data);
}

catch(Exception $e){

    // print_r($e);

    // echo $e->getMessage() ;
    showError(error_get_last());
}


// php 8 and above


$a = "1234";
$b = [0,1,2];

//void,mixed,string,bool,array
//function getItem(?array $arr = [])  //in case not passing items value ? null
function getItem(array|string $arr):void    //:string|null
{

   $items = [

    'Books',
    'Pen',
    'Cover',
    
   ];

   echo "Item is :" .$items[$arr[1]];

//    return null;

}

getItem($a); 

// getItem($b);

















?>


<?php $items= ['myproduct1','myproduct2','myproduct3']; ?>

<?php  foreach($items as  $item) : ?>

   
     <div style = 'border:solid thin #aaaa;margin:10px'>
        <h3> <?php echo $item ?> </h3> 
       <h3> <?= $item ?> </h3>
     </div> ;
    
    <?php endforeach ?> 
