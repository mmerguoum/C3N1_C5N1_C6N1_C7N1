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