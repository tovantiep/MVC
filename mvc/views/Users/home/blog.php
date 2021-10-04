 <main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Tiep restaurant</h2>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
					</ul>
				</nav>
			</div>
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <?php 
                    while ($pizza = mysqli_fetch_array($data["pizza"])) {?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                        <div class="card" style="padding-top: 15px;">
                        <a href="">  <img src="./public/img/gallery/<?php echo $pizza["img_product"];?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $pizza["title_product"];?></h4> <br>
                                <i class="card-text"><?php echo $pizza["desc_product"];?></i>
                                <p class="card-text"><?php echo number_format ($pizza['price_product'],0,',','.').'đ' ?></p>
                                <a href="#" class="tm-btn tm-btn-primary tm-right">Mua</a>
                            </div>
                        </div>            
                    </div> 
                    <?php
                    }
                    ?>
                 </div>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <?php 
                    while ($salad = mysqli_fetch_array($data["salad"])) {?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                        <div class="card" style="padding-top: 15px;">
                        <a href="">  <img src="./public/img/gallery/<?php echo $salad["img_product"];?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $salad["title_product"];?></h4> <br>
                                <i class="card-text"><?php echo $salad["desc_product"];?></i>
                                <p class="card-text"><?php echo number_format ($salad['price_product'],0,',','.').'đ' ?></p>
                                <a href="#" class="tm-btn tm-btn-primary tm-right">Mua</a>
                            </div>
                        </div>            
                    </div> 
                    <?php
                    }
                    ?>
                </div>
				</div> <!-- gallery page 2 -->
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <?php 
                    while ($noodle = mysqli_fetch_array($data["noodle"])) {?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                        <div class="card" style="padding-top: 15px;">
                        <a href="">  <img src="./public/img/gallery/<?php echo $noodle["img_product"];?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $noodle["title_product"];?></h4> <br>
                                <i class="card-text"><?php echo $noodle["desc_product"];?></i>
                                <p class="card-text"><?php echo number_format ($noodle['price_product'],0,',','.').'đ' ?></p>
                                <a href="#" class="tm-btn tm-btn-primary tm-right">Mua</a>
                            </div>
                        </div>            
                    </div> 
                    <?php
                    }
                    ?>
                </div>
				</div> <!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="./public/img/anhdaden.jpeg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">To Van Tiep</h4>
							<p class="tm-mb-45">Đẹp trai nha` nghèo có xe đạp riêng không đeo dép trái, nắng mưa biết chạy vào nhà. CHi tiết nhà hàng vui lòng tìm hiểu thêm <a rel="nofollow" href="https://templatemo.com/contact">tại đây</a> Còn về chủ nhà hàng vui lòng ấn nút READ MORE bên dưới. Cảm ơn quý khách !</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</main>

