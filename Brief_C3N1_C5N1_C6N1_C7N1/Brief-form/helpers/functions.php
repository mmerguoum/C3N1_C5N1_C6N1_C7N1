<?php


function debug($var)
{
   echo "<pre>";
    var_dump($var);
   echo "</pre>";
   exit;
}


function printArray($var)
{
   echo "<pre>";
    print_r($var);
   echo "</pre>";
   exit;
}

function createSession($key,$value)
{

    $_SESSION[$key] = $value;
}


function dataQuery($conn,$query)
{
     $result = mysqli_query($conn,$query);
     if($result)
     {
        while($data = mysqli_fetch_assoc($result))
        {
           return $data;
        }
     }

     return $result;

}

// function toDate($date)
// {

//    return date('Y-m-d',$date);

// }