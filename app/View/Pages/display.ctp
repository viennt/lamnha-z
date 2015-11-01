<!-- Products -->
<div class="list-items">
	<div class="row" id="load-content">
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<a href="#" class=""><img src="img/product.jpg" alt=""></a>
				<div class="detail">
					<h5><strong>Brown Wood Chair</strong></h5>
					<h5><small>Suplier's name</small></h5>
					<span>244.000 VNĐ</span>
				</div>
			</div>
		</div>
	</div>
</div>
<button id="load">More</button>
<script type="text/javascript">
$("#load").on("click", function() {
	$.ajax({
		"url": "/lamnha-z/load.php",
		"type": "get",
		"dataType": "html",
		"success": function(data) {
			console.log(data);
			$("#load-content").append(data);
		}
	});
});
</script>