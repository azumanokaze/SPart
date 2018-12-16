<?php $this->load->view('public/partials/view_public_header.php'); ?>
<div class="banner">
	<div class="container">
		<script src="<?= base_url('assets/js/responsiveslides.min.js'); ?>"></script>
		<script>
		$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
		namespace: "callbacks",
		pager: true,
		});
		});
		</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					
					<div class="banner-text">
						<h3>Pusat Spare Part Terlengkap</h3>
						<p>Anda akan menemukan spare part yang anda cari di tempat kami, mau Rem? Ban Mobil? Wiper?
						   Silahkan anda pilih sendiri!</p>
						
					</div>
					
				</li>
				<li>
					
					<div class="banner-text">
						<h3>Tak Perlu Khawatir Tidak Bawa Uang</h3>
						<p>Anda lupa membawa uang? jangan khawatir, kami menerima pembayaran dalam bentuk kredit, barter, maupun gadai motor yang anda gunakan!</p>
						
					</div>
					
				</li>
				<li>
					<div class="banner-text">
						<h3>Tersedia Dari Berbagai Macam Pabrikan</h3>
						<p>Brembo, Unicorn, Goodyear, Michellin; Semua pilihand ari pabrikan terkenal tersedia di tempat kami, anda hanya tinggal memilih yang anda inginkan!</p>
						
					</div>
					
				</li>
			</ul>
		</div>
	</div>
</div>
<!--content-->
<div class="container">
	<div class="cont">
		<div class="content">
			<div class="content-top-bottom">
				<h2>PRODUK Unggulan</h2>
				<?php foreach($featured as $feature) : ?>
					<div class="col-md-4 men">
						<a href="<?php echo base_url('pages/show') . '/' . $feature['vehicle_id']; ?> " class="b-link-stripe b-animate-go  thickbox">
							<img style="height: 260px;" class="img-responsive" src="<?= base_url('uploads'); ?>/<?php echo $feature['image']; ?>" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in   b-delay03 ">
								<span><?php echo $feature['model_name']; ?></span>
								</h3>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top">
				<h1>NEW PRODUCTS</h1>
				
				<div class="grid-in">
					{vehicles}
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="<?= base_url(); ?>pages/show/{vehicle_id}" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="<?= base_url('uploads/'); ?>/{image}" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
									<span>{model_name}</span>
									
									</h3>
								</div>
							</a>
							
							<p><a href="single.html">{model_name}</a></p>
						</div>
					{/vehicles}
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
<?php $this->load->view('public/partials/view_public_footer.php'); ?>