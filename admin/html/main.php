<div class="wrapper">
    <div class="row" style="background: #909090">
    <?php 
    if(!isset($_REQUEST['Search'])){

    
    if(isset($_REQUEST['type'])){
        $page = $_REQUEST['type'] . '.php';
        include "page/".$page;
    } } else {
        include "page/search.php";
    } ?>
        
    </div>