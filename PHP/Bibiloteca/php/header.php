<header class="blog-header">
    <div class=" d-flex row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <h3 class="text-light text-uppercase">
                <?php 
                if(isset($_POST['login'])){
                    // echo $_SESSION['usuario']['tipo'];
                    if ($_POST['login']=='true' && $_SESSION['usuario']['tipo'] != "none") {
                
                    echo 'hi !!! '.$_SESSION['usuario']['nombre'];
                    }
                }?>
             </h3>
        </div>
        <div class="col-4 text-center logo">
        <a class="blog-header-logo text-light" href="#">BIBLIOTECA</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
           <nav class="nav navbar-dark bg-black">
            <?php include('php/Util/navbar.php');?>
           </nav>
        </div>
    </div>
    <?php if ($_SESSION['usuario']['tipo'] != 'none') {?>
        <div>
            <?php include('php/Util/nav_buttom.php'); ?>
        </div>
    <?php } ?>
   
</header>