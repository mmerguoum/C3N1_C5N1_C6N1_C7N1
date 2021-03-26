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

<?php  include 'component/head.php'; ?>

<?php  include 'component/header.php';  ?>
 
<?php  

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $page=trim(strtolower($_GET['page']));
}

else
{
    $page="home";
}



$allpages = scandir('component/pages/');


if(in_array($page.'.php',$allpages))
{
    include_once 'component/pages/'.$page.'.php';
}


?>


<?php  include 'component/footer.php'; ?>

    
