<?php
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $name = $_SESSION["name"];
    }

?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top "  role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"  ">Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                

                <form action="timkiem.php" class="textbox1 navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input name="tuKhoa" type="text" class="textbox"  placeholder="Search">
                      
			        </div>
			        <button type="submit" class="btn-search "><i class="fa-solid fa-magnifying-glass"></i></button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    
                    <li>
                        <a href="gioithieu.php">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="lienhe.html">Liên hệ</a>
                    </li>

                    <?php
                        if(!isset($id)){
                    ?>
                    <li>
                        <a href="dangki.php">Đăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap.php">Đăng nhập</a>
                    </li>
                    <?php }else{ ?>
                    <li>
                    	<a>
                    		<span class ="glyphicon glyphicon-user"></span>
                    		<?php echo $name; ?>
                    	</a>
                    </li>
                        
                    <li>
                    	<a href="dangxuat.php">Đăng xuất</a>
                    </li>
                    <?php } ?>

                </ul>
            </div>



            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>