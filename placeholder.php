<?php
if(isset($_GET["page"])){
    $page=$_GET["page"];
    $not_found=1;
    if($page=="index"){
        include("pages/index.php");
        $not_found=0;
     
    }elseif($page=="about"){
        include("pages/about.php");
        $not_found=1;
       
    }elseif($page=="services"){
        include("pages/services.php");
        $not_found=1; 
              
    }elseif($page=="team"){
        include("pages/team.php");
        $i = 'team';
        $not_found=1; 
              
    }elseif($page=="payment-solution"){
        include("pages/payment-solution.php");
        $i = 'payment-solution';
        $not_found=1; 
              
    }elseif($page=="contact"){
        include("pages/contact.php");
        $i = 'contact';
        $not_found=1;

    }elseif($not_found){

        include("pages/error-403.php");

    }
}else{
    include("pages/index.php");
}
?>