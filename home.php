<?php get_header();
?>
<div class="landing-page" id="fullpage">
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="landing-nav">
		<div class="container">
			<a class="navbar-brand" href="">
				<img src="<?php echo THEME_URL  ?>/assets/images/logo.png" alt="Feliz Homes" />
			</a>

			<div class="navbar__content">
				<div class="navbar__contact">
					<ul class="align-self-end d-flex">
						<li>
							<a class="" href="#" target="_blank">
								<img src="<?php echo THEME_URL  ?>/assets/images/icon-fb.png" alt="Facebook" />
							</a>
						</li>
						<li>
							<a class="" href="#" target="_blank">
								<img src="<?php echo THEME_URL  ?>/assets/images/icon-youtube.png" alt="Youtube" />
							</a>
						</li>
						<li>
							<a class="" href="#" target="_blank">
								<img src="<?php echo THEME_URL  ?>/assets/images/icon-hotline.png" alt="Hotline" />
							</a>
						</li>
						<li class="navbar__contact-hotline">
							<a href="tel:0916321919">091 632 1919</a>
						</li>
					</ul>
				</div>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav" id="navbar-menu">
						<li class="nav-item">
							<a class="nav-link" href="#section0">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#section1">Giới thiệu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="location" href="#section2">Vị trí</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="utilities" href="#section3">Tiện ích</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="ground" href="#section6">Mặt bằng</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="apartment" href="#section7">Căn hộ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="furniture" href="#section8">Nội thất</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="news" href="#section9">Tin tức</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-value="contact" href="#section10">Liên hệ</a>
						</li>
					</ul>

				</div>
			</div>

		</div>
	</nav>

	<!-- header -->
	<div class="header section" id="section0">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<!-- <h4>
						Tropical Resort</br>
						Tận hưởng 365 ngày thanh khiết
					</h4>
					<img src="<?php echo THEME_URL  ?>/assets/images/title-header.png" /> -->
				</div>
			</div>
		</div>
	</div>

	<!-- about section -->
	<div class="about section" id="section1">
		<div class="container-fluid">
			<div class="row">
				<div class="about__content wow fadeInLeftBig d-flex align-items-center">
					<ul class="about__content-body">
						<li class="wow fadeInLeftBig" data-wow-delay="0.2s">
							<div>
								<p>Chủ đầu tư:</p>
								<strong>Công ty Cổ Phần KLB</strong>
							</div>
						</li>
						<li class="wow fadeInLeftBig" data-wow-delay="0.6s">
							<div>
								<p>Vị trí:</p>
								<strong>P. Hoàng Văn Thụ, Q. Hoàng Mai, Hà Nội</strong>
							</div>
						</li>
						<li class="wow fadeInLeftBig" data-wow-delay="1s">
							<div>
								<p>Sản phẩm:</p>
								<strong>Căn hộ chung cư cao cấp sổ hồng lâu dài</strong>
							</div>
						</li>
						<li class="wow fadeInLeftBig" data-wow-delay="1.4s">
							<div>
								<p>Diện tích đất:</p>
								<strong>22.500m2</strong>
							</div>
						</li>
						<li class="wow fadeInLeftBig" data-wow-delay="1.8s">
							<div>
								<p>Quy mô:</p>
								<strong>03 tòa tháp chung cư</strong>
								<strong>Công viên cây xanh và tiện ích</strong>
								<strong>Trường mầm non</strong>
								<strong>Nhà đỗ xe thông minh</strong>
							</div>
						</li>
						<li class="wow fadeInLeftBig" data-wow-delay="2.2s">
							<div>
								<p>TỔNG SỐ CĂN HỘ:</p>
								<strong>1.248 căn</strong>
							</div>
						</li>
						<li class="wow fadeInLeftBig" data-wow-delay="2.6s">
							<div>
								<p>THỜI GIAN HOÀN THÀNH:</p>
								<strong>Dự kiến Quý II/2022</strong>
							</div>
						</li>
					</ul>
				</div>
				<div class="wow about__img fadeInRightBig d-flex flex-column justify-content-center align-items-end">
					<img src="<?php echo THEME_URL  ?>/assets/images/about.png" />
				</div>
			</div>
		</div>
	</div>

	<!-- location-other section -->
	<!-- <div class="location-other section" id="section2">
		<div class="container">
			<div class="location-other__header">
				<h4 class="text-center wow bounceIn">ĐỦ YÊN TĨNH ĐỂ NGHỈ DƯỠNG<br> ĐỦ GẦN ĐỂ TIỆN NGHI</h4>
			</div>
			<div class="location-other__content">
				<div class="row location-other__content-one mb-4">
					<div class="text-center wow fadeInLeftBig">
						<img src="<?php echo THEME_URL  ?>/assets/images/util-1.png" />
						<p class="mt-2">Thuận tiện di chuyển đến <br> các tuyến bệnh viện</p>
					</div>
					<div class="location-other__icon-two text-center wow fadeInUpBig d-flex flex-column align-items-center" data-wow-delay="0.5s">
						<div class="location-other__line">
							<span></span>
						</div>
						<img src="<?php echo THEME_URL  ?>/assets/images/util-2.png" />
						<p class="mt-2">Thuận tiện di chuyển đến <br> các trục đường lớn</p>
					</div>
					<div class="text-center wow fadeInRightBig">
						<img src="<?php echo THEME_URL  ?>/assets/images/util-3.png" />
						<p class="mt-2">Thuận tiện di chuyển đến <br> các tuyến trường học</p>
					</div>
				</div>
				<div class="row location-other__content-two">
					<div class="text-center wow fadeInUpBig" data-wow-delay="1s">
						<img src="<?php echo THEME_URL  ?>/assets/images/util-4.png" />
						<strong class="d-block">Sân Bay Nội Bài</strong>
					</div>
					<div class="text-center wow fadeInUpBig" data-wow-delay="1.4s">
						<img src="<?php echo THEME_URL  ?>/assets/images/util-5.png" />
						<strong class="d-block">Ga Hà Nội</strong>
					</div>
					<div class="text-center wow fadeInUpBig" data-wow-delay="1.8s">
						<img src="<?php echo THEME_URL  ?>/assets/images/util-6.png" />
						<strong class="d-block">Hồ Hoàn Kiếm</strong>
					</div>
					<div class="text-center wow fadeInUpBig" data-wow-delay="2.2s">
						<img src="<?php echo THEME_URL  ?>/assets/images/util-7.png" />
						<strong class="d-block">Nhà Hát Lớn Hà Nội</strong>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- location section -->
	<div class="location section" id="section2">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="location__content wow zoomInDown" data-wow-delay="0.5s">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 text-center">
								<div class="location__content-title"><img class="mb-3 wow bounceInDown" src="<?php echo THEME_URL  ?>/assets/images/text_tam_diem_phon_hoa.png" /></div>
								<p class="wow bounceInUp" data-wow-delay="0.8s">
								Toạ lạc tại “trái tim” quận Hoàng Mai, được bao quanh bởi 6 con đường sầm uất, 
								Feliz Homes kiến tạo một “thị tứ” phồn hoa, một “vòng xuyến giao thông” của khu vực, nơi giao thông thuận lợi, giao thương thuận tiện.
								</p>
								<img class="wow bounceInDown" src="<?php echo THEME_URL  ?>/assets/images/5_phut.png" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-7 pl-lg-5 pl-xl-0 location__title text-center wow zoomIn">
					<img src="<?php echo THEME_URL  ?>/assets/images/map.png" />
				</div>
			</div>
		</div>
	</div>

	<!-- utilities section -->
	<div class="utilities section" id="section3">
		<div class="container-fluid">
			<div class="row">
				<div class="utilities__slides col-lg-8 wow bounceInLeft" data-wow-delay="0.5s">
					<div class="utilities__list owl-carousel">
						<div class="utilities__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-1.jpg"/>
							<!-- <div class="utilities__item-title">
								Công viên tổ hợp tiện ích 4000m2
							</div> -->
						</div>
						<div class="utilities__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-2.jpg" />
							<!-- <div class="utilities__item-title">
								Hồ bơi Điện Phân Đồng 300m2
							</div> -->
						</div>
						<div class="utilities__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-3.jpg" />
							<!-- <div class="utilities__item-title">
								Hồ bơi Điện Phân Đồng 300m2
							</div> -->
						</div>
						<div class="utilities__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-4.jpg" />
							<!-- <div class="utilities__item-title">
								Vườn thiền thủy cực
							</div> -->
						</div>
					</div>
					<div class="utilities__arrow">

					</div>
				</div>
				<div class="wow col-lg-4 slideInRight utilities__content">
					<div class="utilities__content-title">
						<img src="<?php echo THEME_URL  ?>/assets/images/text_xanh_mat_nghi_duong.png" />
					</div>
					<h4 class="text-center wow bounceInDown">Gần <strong>80%</strong> diện tích dành cho không gian xanh và tiện ích</h4>
					<p class="wow bounceInUp" data-wow-delay="0.4s">
					Một dự án hiếm hoi giữa lòng thủ đô mang đến không gian thanh khiết với bạt ngàn cây xanh và mặt nước. 
					Bước vào Feliz Homes, cư dân không chỉ có cảm giác như đang lạc bước trong một khu vườn nhiệt đới mà còn cảm thấy như đang bước chân vào một thành phố xanh thu nhỏ. 
					Ở đó, tiếng còi xe inh ỏi được thay thế bởi những thanh âm tuyệt diệu: Tiếng nước chảy róc rách, tiếng chim kêu ríu rít, tiếng gió đuổi nhau xào xạc trong những tán cây. Mọi lo toan, mỏi mệt nhường chỗ cho sự an nhiên với hương hoa thoang thoảng, mùi cỏ non quyện trong vị nắng.
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- utilities section -->
	<div class="utilities section utilities-2" id="section4">
		<div class="container-fluid">
			<div class="row">
				<div class="wow col-lg-4 slideInLeft utilities__content">
					<div class="utilities__content-title">
						<img src="<?php echo THEME_URL  ?>/assets/images/text_tron_ven_tien_nghi.png" />
					</div>
					<p class="wow bounceInUp" data-wow-delay="0.4s">
					Sở hữu không gian sống xanh và độc đáo như resort nhiệt đới cùng hàng loạt tiện ích từ chăm sóc sức khoẻ đến vui chơi cho trẻ nhỏ, 
					tại Feliz Homes, mỗi cư dân đều tìm thấy một không gian được thiết kế và “may đo” cho riêng mình, 
					nơi tận hưởng mỗi ngày đều tràn đầy cảm hứng.
					</p>
				</div>

				<div class="utilities__slides col-lg-8 wow bounceInRight" data-wow-delay="0.5s">
					<div class="utilities__list owl-carousel">
						<div class="utilities__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/tien-ich/2-1.jpg" />
							<div class="utilities__item-title">
								HỒ CẢNH QUAN
							</div>
						</div>
						<div class="utilities__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/tien-ich/2-2.jpg" />
							<div class="utilities__item-title">
								HỒ BƠI ỐC ĐẢO
							</div>
						</div>
					</div>
					<div class="utilities__arrow">

					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="utilities-3 section" id="section5">
		<div class="container-fluid">
			<div class="row">
				<div class="wow col-lg-7 bounceInLeft utilities-3__img">
					<img src="<?php echo THEME_URL  ?>/assets/images/tien-ich-3-1.png" />
				</div>

				<div class="utilities-3__content col-lg-5 wow slideInRight" data-wow-delay="0.5s">
					<h4><p><span>HƠN</span> <strong>40</strong> <span>TIỆN ÍCH<span></p> NỘI KHU ĐẲNG CẤP</h4>
					<div>
						<img src="<?php echo THEME_URL  ?>/assets/images/tien-ich-3-2.png" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ground section -->
	<div class="ground section" id="section6">
		<div class="container-fluid">
			<h4 class="text-center mb-3">MẶT BẰNG TẦNG ĐIỂN HÌNH</h4>
			<div class="ground__slides">
				<div class="ground__list owl-carousel">
					<div class="ground__item">
						<div class="ground__item-img">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/FANTASY-2-15.jpg" />
							<div class="ground__item-search">
								<img src="<?php echo THEME_URL  ?>/assets/images/search.png" data-fancybox href="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/FANTASY-2-15.jpg"/>
							</div>
						</div>
						<!-- <div class="ground__item-title row">
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a1"></span>CĂN HỘ LOẠI A1-119.16M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a2"></span>CĂN HỘ LOẠI A2-113.17M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a3"></span>CĂN HỘ LOẠI A3-109.0M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b1"></span>CĂN HỘ LOẠI B1-76.32M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b2"></span>CĂN HỘ LOẠI B2-65.84M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b3"></span>CĂN HỘ LOẠI B3-66.27M2
							</div>
						</div> -->
					</div>
					<div class="ground__item">
						<div class="ground__item-img">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/TROPICAL-2-15.jpg" />
							<div class="ground__item-search">
								<img src="<?php echo THEME_URL  ?>/assets/images/search.png" data-fancybox href="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/TROPICAL-2-15.jpg"/>
							</div>
						</div>
						<!-- <div class="ground__item-title row">
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a1"></span>CĂN HỘ LOẠI A1-119.16M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a2"></span>CĂN HỘ LOẠI A2-113.17M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a3"></span>CĂN HỘ LOẠI A3-109.0M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b1"></span>CĂN HỘ LOẠI B1-76.32M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b2"></span>CĂN HỘ LOẠI B2-65.84M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b3"></span>CĂN HỘ LOẠI B3-66.27M2
							</div>
						</div> -->
					</div>
					<div class="ground__item">
						<div class="ground__item-img">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/TROPICAL-16-25.jpg" />
							<div class="ground__item-search">
								<img src="<?php echo THEME_URL  ?>/assets/images/search.png" data-fancybox href="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/TROPICAL-16-25.jpg"/>
							</div>
						</div>
						<!-- <div class="ground__item-title row">
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a1"></span>CĂN HỘ LOẠI A1-119.16M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a2"></span>CĂN HỘ LOẠI A2-113.17M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a3"></span>CĂN HỘ LOẠI A3-109.0M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b1"></span>CĂN HỘ LOẠI B1-76.32M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b2"></span>CĂN HỘ LOẠI B2-65.84M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b3"></span>CĂN HỘ LOẠI B3-66.27M2
							</div>
						</div> -->
					</div>
					<div class="ground__item">
						<div class="ground__item-img">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/FANTASY-16-27.jpg" />
							<div class="ground__item-search">
								<img src="<?php echo THEME_URL  ?>/assets/images/search.png" data-fancybox href="<?php echo THEME_URL  ?>/assets/images/mat-bang-tang/TROPICAL-16-25.jpg"/>
							</div>
						</div>
						<!-- <div class="ground__item-title row">
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a1"></span>CĂN HỘ LOẠI A1-119.16M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a2"></span>CĂN HỘ LOẠI A2-113.17M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-a3"></span>CĂN HỘ LOẠI A3-109.0M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b1"></span>CĂN HỘ LOẠI B1-76.32M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b2"></span>CĂN HỘ LOẠI B2-65.84M2
							</div>
							<div class="col-md-4 col-6 ground__item-color">
								<span class="color-b3"></span>CĂN HỘ LOẠI B3-66.27M2
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- apartment section -->
	<div class="apartment section" id="section7">
		<div class="container">
			<ul class="apartment__nav nav">
				<li class="wow bounceInRight">
					<a class="nav-link active" id="apartment-1" data-toggle="tab" href="#apartment-tab-1" role="tab" aria-controls="apartment-tab-1" aria-selected="true">
						TROPICAL
					</a>
				</li>
				<li class="wow bounceInRight" data-wow-delay="0.8s">
					<a class="nav-link" id="apartment-3" data-toggle="tab" href="#apartment-tab-3" role="tab" aria-controls="apartment-tab-3" aria-selected="false">
						FANTASY
					</a>
				</li>
			</ul>
			<div class="apartment__slides tab-content wow zoomIn">
				<div class="tab-pane fade show active" id="apartment-tab-1" role="tab" aria-controls="apartment-tab-1" aria-selected="true">
					<div class="apartment__list owl-carousel">
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/tropical/2pn_2wc.jpg"/>
							<div class="apartment__item-title">
								<h4>T10 - 2PN 2WC</h4>
								<p>DT Tim Tường : 69.12m2 </p>
								<p>DT Thông Thuỷ : 65.06m2 - 65.28m2</p>
							</div>
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/tropical/2pn_2wc_1.jpg"/>
							<div class="apartment__item-title">
								<h4>T11 - 2PN 2WC</h4>
								<p>DT Tim Tường : 80.01m2 </p>
								<p>DT Thông Thuỷ : 75.37m2 - 76.49m2</p>
							</div>
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/tropical/4pn_2wc.jpg"/>
							<div class="apartment__item-title">
								<h4>T01 - 4PN 2WC</h4>
								<p>DT Tim Tường : 123.9m2 </p>
								<p>DT Thông Thuỷ : 117.08m2 - 117.44m2</p>
							</div>
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/tropical/3pn_2wc.jpg"/>
							<div class="apartment__item-title">
								<h4>T02 - 3PN 2WC</h4>
								<p>DT Tim Tường : 113.5m2 </p>
								<p>DT Thông Thuỷ : 106.99m2 - 107.58m2</p>
							</div>
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/tropical/2pn_2wc_2.jpg"/>
							<div class="apartment__item-title">
								<h4>T03-T04 & T06-T09 & T12-T12A - 2PN 2WC</h4>
								<p>DT Tim Tường : 69.12m2 </p>
								<p>DT Thông Thuỷ : 65.55m2 - 65.79m2</p>
							</div>
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/tropical/3pn_2wc_1.jpg"/>
							<div class="apartment__item-title">
								<h4>T05 - 3PN 2WC</h4>
								<p>DT Tim Tường : 118m2</p>
								<p>DT Thông Thuỷ : 111.40m2 - 111.81m2</p>
							</div>
						</div>	
					</div>
				</div>
				<div class="tab-pane fade" id="apartment-tab-3" role="tab" aria-controls="apartment-tab-3" aria-selected="true">
					<div class="apartment__list owl-carousel">
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/fantasy/1.jpg"/>
							<!-- <div class="apartment__item-title">
								<h4>Căn hộ 3PN + 2WC</h4>
								<p>DT Tim Tường: 00 - 00 m2 </p>
								<p>DT Thông Thủy: 3</p>
							</div> -->
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/fantasy/2.jpg"/>
							<!-- <div class="apartment__item-title">
								Công viên tổ hợp tiện ích 1000m2 3
							</div> -->
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/fantasy/4.jpg"/>
							<!-- <div class="apartment__item-title">
								Công viên tổ hợp tiện ích 1000m2 3
							</div> -->
						</div>
						<div class="apartment__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/can-ho/fantasy/5.jpg"/>
							<!-- <div class="apartment__item-title">
								Công viên tổ hợp tiện ích 1000m2 3
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- furniture section -->
	<div class="furniture section" id="section8">
		<div class="container-fluid">
			<div class="container">
				<ul class="furniture__nav nav">
					<!-- <li class="wow bounceInLeft" data-wow-delay="1.2s">
							<a class="nav-link active" data-toggle="tab" href="#furniture-tab-1" role="tab" aria-controls="furniture-tab-1" aria-selected="true">
								1 phòng ngủ
							</a>
						</li> -->
					<li class="wow bounceInLeft" data-wow-delay="0.8s">
						<a class="nav-link active" data-toggle="tab" href="#furniture-tab-2" role="tab" aria-controls="furniture-tab-2" aria-selected="true">
							2 phòng ngủ
						</a>
					</li>
					<li class="wow bounceInLeft" data-wow-delay="0.4s">
						<a class="nav-link" data-toggle="tab" href="#furniture-tab-3" role="tab" aria-controls="furniture-tab-3" aria-selected="false">
							3 phòng ngủ
						</a>
					</li>
					<li class="wow bounceInLeft">
						<a class="nav-link" data-toggle="tab" href="#furniture-tab-4" role="tab" aria-controls="furniture-tab-4" aria-selected="false">
							4 phòng ngủ
						</a>
					</li>
				</ul>
			</div>
			<div class="furniture__slides tab-content wow zoomIn">
				<!-- <div class="tab-pane fade show active" id="furniture-tab-1" role="tab" aria-controls="furniture-tab-1" aria-selected="true">
						<div class="furniture__list owl-carousel">
							<div class="furniture__item">
								<img src="<?php echo THEME_URL  ?>/assets/images/furniture-1.png" />
							</div>
							<div class="furniture__item">
								<img src="<?php echo THEME_URL  ?>/assets/images/furniture-1.png" />
							</div>
							<div class="furniture__item">
								<img src="<?php echo THEME_URL  ?>/assets/images/furniture-1.png" />
							</div>
						</div>
					</div> -->
				<div class="tab-pane fade  show active" id="furniture-tab-2" role="tab" aria-controls="furniture-tab-2" aria-selected="true">
					<div class="furniture__list owl-carousel">
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/main.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/1.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/2.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/3.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/4.jpg"/>
						</div>	
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/z1.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/z2.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/z3.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/z4.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/z5.jpg"/>
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/2pn/z6.jpg"/>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="furniture-tab-3" role="tab" aria-controls="furniture-tab-3" aria-selected="true">
					<div class="furniture__list owl-carousel">
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/3pn/1.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/3pn/2.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/3pn/3.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/3pn/4.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/3pn/5.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/3pn/6.jpg" />
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="furniture-tab-4" role="tab" aria-controls="furniture-tab-4" aria-selected="true">
					<div class="furniture__list owl-carousel">
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/1.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/2.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/3.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/4.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/5.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/6.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/7.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/8.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/9.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/10.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/10_1.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/10_2.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/11.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/12.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/13.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/14.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/15.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/16.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/17.jpg" />
						</div>
						<div class="furniture__item">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/noithat/dua-key/20.jpg" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- news section -->
	<div class="news section" id="section9">
		<div class="container">
			<div class="news__list owl-carousel">
				<div class="news__item">
					<img src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-3.jpg" />
					<h6>Chung cư xanh ở nội đô: Nhu cầu cao nhưng nguồn cung ít ỏi</h6>
					<p>
						Mặc dù xu hướng xanh hóa đã rộ lên trong vài năm trở lại đây, 
						tuy nhiên số lượng dự án xanh tại Hà Nội vẫn rất ít ỏi. Cơn khát dự án xanh ngày càng trở nên gay gắt.
					</p>
				</div>
				<div class="news__item">
					<img src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-1.jpg" />
					<h6>Thời điểm vàng để mua chung cư Hà Nội</h6>
					<p>
						Chung cư Hà Nội lại hội tụ đầy đủ các yếu tố thuận lợi để người mua tạo lập một tổ ấm hoặc đầu tư sinh lợi lâu dài...
					</p>
				</div>
				<div class="news__item">
					<img src="<?php echo THEME_URL  ?>/assets/images/tien-ich/1-2.jpg" />
					<h6>Hà Nội: Thiếu hụt dự án xanh khu trung tâm</h6>
					<p>
						Tại Hà Nội, các chủ đầu tư tập trung thường phát triển các dự án với mật độ xây dựng cao để tối đa hóa diện tích thương phẩm...
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- contact section -->
	<div class="contact section" id="section10">
		<div class="container-fluid">
			<div class="contact__logo container">
				<h4>Đối tác phát triển uy tín</h4>
				<div class="text-center">
					<img src="<?php echo THEME_URL  ?>/assets/images/logo_doi_tac.png" />
				</div>
			</div>
			<form class="contact__content">
				<div class="contact__body container">
					<div class="row contact__info justify-content-md-center">
						<div class="col-md-6 wow slideInLeft">
							<h5 class="text-center">CÔNG TY CỔ PHẦN KLB</h5>
							<p class="d-flex align-items-start">
								<img src="<?php echo THEME_URL  ?>/assets/images/icon-ad.png" class="mr-3" />
								<span>Tòa nhà Licogi 13, số 164 Khuất Duy Tiến,
									Phường Nhân Chính, Quận Thanh Xuân - Hà Nội</span>
							</p>
							<div class="d-lg-flex justify-content-between">
								<div class="">
									<img class="mr-2" src="<?php echo THEME_URL  ?>/assets/images/icon-tel.png" />
									091 632 1919
								</div>
								<div>
									<img class="mr-2" src="<?php echo THEME_URL  ?>/assets/images/icon-web.png" />
									www.felizhomes.vn
								</div>
							</div>
						</div>
						<!-- <div class="col-md-6 wow slideInRight">
								<h5>VĂN PHÒNG ĐẠI DIỆN</h5>
								<p class="d-flex align-items-start">
									<img src="<?php echo THEME_URL  ?>/assets/images/icon-ad.png" class="mr-3"/>
									<span>Tầng 14 tòa nhà Licogi 13, số 164 khuất duy tiến, Phường nhân chính, quận thanh xuân, Hà Nội</span>
								</p>
								<div class="d-lg-flex justify-content-between">
									<div class="mb-3">
										<img class="mr-2" src="<?php echo THEME_URL  ?>/assets/images/icon-tel.png" />
										(+84) 9 0504 1514
									</div>
									<div>
										<img class="mr-2" src="<?php echo THEME_URL  ?>/assets/images/icon-web.png" />
										www.felizhomes.vn
									</div>
								</div>
							</div> -->
					</div>
					<div class="contact__form wow fadeInUpBig">
						<div>
							<div class="row">
								<div class="col-12 col-md-6">
									<input type="text" class="form-control" placeholder="Họ và Tên..." name="c_name">
								</div>
								<div class="col-12 col-md-6">
									<input type="text" class="form-control" placeholder="Email..." name="c_email">
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-6">
									<input type="text" class="form-control" placeholder="Số điện thoại..." name="c_phone">
								</div>
								<div class="col-12 col-md-6">
									<input type="text" class="form-control" placeholder="Địa chỉ..." name="c_address">
								</div>
							</div>
						</div>
						<div class="text-center">
							<input type="hidden" name="action" value="ajaxRegister">
							<button type="submit" class="btn btn-light">Gửi Liên Hệ</button>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="call-now-button">
		<div>
			<p class="call-text"> <b>Gọi Ngay!</b> </p>
			<a href="tel:0123456789" title="Call Now">
				<div class="quick-alo-ph-circle active"></div>
				<div class="quick-alo-ph-circle-fill active"></div>
				<div class="quick-alo-phone-img-circle shake"></div>
			</a>
		</div>
	</div>

	<div class="info-fixed dark">
		<h6>NHẬN THÔNG TIN</h6>
		<div class="info-fixed__icon info-fixed--dark">
			<a href="#"><img src="<?php echo THEME_URL  ?>/assets/images/icon-hotline-fixed.png"/></a>
			<a href="#"><img src="<?php echo THEME_URL  ?>/assets/images/icon-fb-fixed.png"/></a>
			<a href="#"><img src="<?php echo THEME_URL  ?>/assets/images/icon-youtube-fixed.png"/></a>
		</div>
		<div class="info-fixed__icon info-fixed--light">
			<a href="#"><img src="<?php echo THEME_URL  ?>/assets/images/icon-hotline-fixed-2.png"/></a>
			<a href="#"><img src="<?php echo THEME_URL  ?>/assets/images/icon-fb-fixed-2.png"/></a>
			<a href="#"><img src="<?php echo THEME_URL  ?>/assets/images/icon-youtube-fixed-2.png"/></a>
		</div>
		<span class="info-fixed__line"></span>
	</div>
</div>

<!-- scroll top top -->
<!-- <div class="scroll-to-top">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
			  </svg>
		</div> -->
</div>

<?php get_footer() ?>