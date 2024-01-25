		<?php
		include_once "functions.php";
		$result = getSlider();
		$theloais = getAllTheLoai();
		?>

		<!-- Page Content -->
		<div class="col-md-3 ">
						<ul class="list-group" id="menu">
							<li href="#" class="list-group-item menu1 active">
								Danh sách Thể Loại
							</li>
							<?php
								while ($rowTheLoai = mysqli_fetch_array($theloais)) {

							?>
							<li href="#" class="list-group-item menu1" style="cursor:pointer">
								<?php echo $rowTheLoai["Ten"] ?>
							</li>
							<ul>
								<?php	
									$loaiTinByTheLoai = getLoaiTinByTheLoai($rowTheLoai["id"]);
									while ($rowLoaiTin = mysqli_fetch_array($loaiTinByTheLoai)) {
								?>
								<li class="list-group-item">
									<a class="chonloaitin" data-idlt="<?php echo $rowLoaiTin["id"]; ?>" href="loaitin.php?idlt=<?php echo $rowLoaiTin["id"]; ?>" ><?php echo $rowLoaiTin["Ten"] ?></a>
								</li>
								<?php
										if ($rowLoaiTin["id"] == $idlt) {
											$tenTheLoai = $rowLoaiTin["Ten"];
										}
									}
								?>
							</ul>

							<?php
									
								}
							?>
						</ul>
					</div>
		<!-- end Page Content -->