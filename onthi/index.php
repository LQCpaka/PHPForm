<?php
    include_once "functions.php";
    $cn = isset($_GET["cn"]) ? $_GET["cn"] : 1;
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Giao diện mẫu</title>

		<!-- Khai báo CSS -->
		<link rel="stylesheet" href="MyScript/bootstrap.min.css">
		<link rel="stylesheet" href="MyScript/mystyle.css">
	</head>
	<body>
		<div class="container">
			
            <?php
                include_once("menu.php");
				
                if($cn == 1){
                    include_once("xemsach.php");
                } 
				if($cn == 2){
                    include_once("themsach.php");
                }
                include_once("footer.php");
            ?>
			
		</div>
		
		<!-- Khai báo và sử dụng Script -->
		<script src="MyScript/jquery-3.6.0.min.js"></script>
		<script src="MyScript/popper.min.js"></script>
		<script src="MyScript/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				function laySach(macd = 5){
					$.ajax({
						url: "xulyxemsach.php",
						type: "GET",
						data: {MaCD: macd},
						success : function(data){
							$("#ketqua").html(data);
						}
					});
				}
				$(".chude").click(function(e){
					var maCD = $(this).attr("macd");
					laySach(maCD);
				});
				laySach();
			});
		</script>
	</body>
</html>
