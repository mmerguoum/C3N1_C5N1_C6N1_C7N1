<?php   

include '../core/init.php';

if(isset($_POST['LOGOUT'])){

    if(isset($_SESSION)){
        session_unset();
        session_destroy();
        header('location: '.BASE_URI.'login/login.php');
        exit;
    }
    
}

?>
<?php  include 'composante/head.php'; ?>

<?php  include 'composante/header.php';  ?>

<?php  

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $page=trim(strtolower($_GET['page']));
}

else
{
    $page="home";
}



$allpages = scandir('composante/pages/');


if(in_array($page.'.php',$allpages))
{
    include_once 'composante/pages/'.$page.'.php';
}


?>

<?php  include 'composante/footer.php'; ?>