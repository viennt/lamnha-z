<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
    var mapProp = {
        center: new google.maps.LatLng(16.0706827,108.2007502),
        zoom: 16,
        panControl:false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl:false,
        streetViewControl:false,
        overviewMapControl:false,
        rotateControl:false,
        mapTypeId: google.maps.MapTypeId.ROADMAP   
        //MapTypeId.ROADMAP displays the default road map view. This is the default map type.
        //MapTypeId.SATELLITE displays Google Earth satellite images
        //MapTypeId.HYBRID displays a mixture of normal and satellite views
        //MapTypeId.TERRAIN displays a physical map based on terrain information.
    };
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker=new google.maps.Marker({ position:mapProp.center });
	marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/bootstrap-slider/slider.css'; ?> media='all'>
<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'css/magnify.css'; ?> media='all'>
<div class="publicView row" style="margin: 0">
	<div class="name col-all-12"><h1><?php echo h($project['Project']['name']); ?></h1><hr></div>
	<div class="col-lg-8" style="border-right: 1px dashed #E5E5E5">
		<div class="row">
			<div class="images col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<figure class="thumbnail publicViewImage">
					<?php
					if(isset($product['ProductImage'][0]['name']))
						echo $this->Html->image(
							'uploads/projects/'.$product['ProductImage'][0]['name'], 
							array('alt' => $product['ProductImage'][0]['description'], 'id' => 'mainImg', 'data-magnify-src' => $this->webroot.'img/uploads/projects/'.$product['ProductImage'][0]['name'])
						); ?>
				</figure>
				<div class="moreImages row">
					<?php if(isset($product['ProductImage'])): ?>
					<a href="#" class="btn btn-sm" style="float: left">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<div class="non-border non-padding col-all-9">
					<?php foreach ($product['ProductImage'] as $productImage): ?>
						<figure class="thumbnail non-border pointer col-all-4">
							<?php echo $this->Html->image(
								'uploads/projects/'.$productImage['name'], 
								array('alt' => $productImage['description'], 'id' => 'subImg-'.$productImage['id'], 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
					<?php endforeach; ?>
					</div>
					<a href="#" class="btn btn-sm" style="float: right">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
					<?php endif;?>
				</div>
			</div>
			<div class="col-sx-2 col-sm-12 col-md-5 col-lg-5">
				
			</div>
		</div>
		<div class="row">
			<div class="detail col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<h2><?php echo h($product['ProductCategory']['name']); ?></h2>
				<div class="info">
					<div class="price col-sx-12"><?php echo $this->Number->currency($project['Project']['budget'], '', array('wholeSymbol' => ' ₫', 'wholePosition' => 'after', 'places' => 0, 'thousands' => '.')); ?></div>
					<div class="row">
						<div class="line col-all-5">Người tạo:</div>
						<div class="line col-all-7"><?php echo h($project['User']['id']); ?></div>
					</div>
					<div class="row">
						<div class="line col-all-5">Đánh giá:</div>
						<div class="line col-all-7">* * * *</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Ngày khởi công:</div>
						<div class="line col-all-7"><?php echo date("d/m/y", strtotime($project['Project']['started'])); ?></div>
					</div>
					<div class="row">
						<div class="line col-all-5">Dự kiến hoàn thành:</div>
						<div class="line col-all-7"><?php echo date("d/m/y", strtotime($project['Project']['expected'])); ?></div>
					</div>
					<div class="row">
						<div class="line col-all-5">Ngày hoàn thành:</div>
						<div class="line col-all-7"><?php echo date("d/m/y", strtotime($project['Project']['finished'])); ?></div>
					</div>
					<div class="row">
						<div class="line col-all-5">Tổng chi phí:</div>
						<div class="line col-all-7"><?php echo h($project['Project']['total_amount']); ?></div>
					</div>
				</div>
				<div class="row">
					<div class="col-all-12">
						<button class="btn btn-block btn-flat btn-warning">Chọn dự án này</button>
					</div>
				</div>
			</div>
			<div class="col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<div id="googleMap" style="width: 100%;height: 215px;"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-all-12"><hr>
				<?php echo $project['Project']['description']; ?>
			</div>
		</div>
		<div class="row">
			<div class="image col-all-12"><hr>
				<h4>BẢN THIẾT KẾ DỰ ÁN: </h4>
				<?php echo $this->Html->link(__(' Thêm bản thiết kế '),
					array('controller' => 'projectDesigns', 'action' => 'add', $project['Project']['id']),
					array('class'=>'btn btn-sm btn-warning btn-flat col-lg-12')
					); ?>
				<div class="row">
					<?php foreach ($project['ProjectDesign'] as $projectDesign): ?>
					<div class="col-sx-12 col-sm-6 col-md-4 col-lg-4">
						<div class="thumbnail">
							<?php echo $this->Html->image(
								'uploads/projects/designs/'.$projectDesign['name'], 
								array('alt' => 'name')
								); ?>
							<div class="caption">
								<p>
								<?php echo $this->Html->link(
									'<span class="glyphicon glyphicon-edit"></span>',
									array('controller'=> 'projectDesigns', 'action' => 'edit', $projectDesign['id']),
									array('class' => 'btn btn-xs col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa hình ảnh')
									);?>
								<?php echo $this->Html->link(
									'<span class="glyphicon glyphicon-remove"></span>',
									array('controller'=> 'projectDesigns', 'action' => 'delete', $projectDesign['id']),
									array('class' => 'btn btn-xs col-all-6 btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $projectDesign['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa hình ảnh')
									);?>
								</p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="image col-all-12"><hr>
				<h4>HÌNH ẢNH DỰ ÁN: </h4>
				<?php echo $this->Html->link(__(' Thêm bản thiết kế '),
					array('controller' => 'projectImages', 'action' => 'add', $project['Project']['id']),
					array('class'=>'btn btn-sm btn-warning btn-flat col-lg-12')
					); ?>
				<div class="row">
					<?php foreach ($project['ProjectImage'] as $projectImage): ?>
					<div class="col-sx-12 col-sm-6 col-md-4 col-lg-4">
						<div class="thumbnail">
							<?php echo $this->Html->image(
								'uploads/projects/images/'.$projectImage['name'], 
								array('alt' => 'name')
								); ?>
							<div class="caption">
								<p>
								<?php echo $this->Html->link(
									'<span class="glyphicon glyphicon-edit"></span>',
									array('controller'=> 'projectImages', 'action' => 'edit', $projectImage['id']),
									array('class' => 'btn btn-xs col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa hình ảnh')
									);?>
								<?php echo $this->Html->link(
									'<span class="glyphicon glyphicon-remove"></span>',
									array('controller'=> 'projectImages', 'action' => 'delete', $projectImage['id']),
									array('class' => 'btn btn-xs col-all-6 btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $projectImage['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa hình ảnh')
									);?>
								</p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4" style="border-left: 1px dashed #E5E5E5;">
		<div class="comment">
			<div class="row">
				<div class="form-group col-all-12">
					<span class="glyphicon glyphicon-star star-rating"></span> 
					<span class="glyphicon glyphicon-star star-rating"></span> 
					<span class="glyphicon glyphicon-star star-rating"></span> 
					<span class="glyphicon glyphicon-star-empty star-rating"></span> 
					<span class="glyphicon glyphicon-star-empty star-rating"></span> 
					<textarea class="form-control content" rows="3" placeholder="Nhận xét của bạn"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-all-12">
					<input type="text" class="form-control col-all-6" placeholder="Tên">
					<button class="btn btn-flat btn-warning submit col-all-5">Thêm bình luận</button>
				</div>
			</div>
		</div>
	</div>
</div>


<script src=<?php echo $this->webroot,'plugins/bootstrap-slider/bootstrap-slider.js'; ?>></script>
<script src=<?php echo $this->webroot,'js/jquery.magnify.js'; ?>></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#quantity").slider();
	$("#quantity").on("slide", function(slideEvt) {
		$("#quantityVal").val(slideEvt.value);
	});

	$("#mainImg").magnify();
});	
var changeImage = function(subImg) {
	console.log("a");
	$("#mainImg").attr("src", $(subImg).attr("src"));
	$("#mainImg").attr("data-magnify-src", $(subImg).attr("src"));
	$("#mainImg").magnify();
};
</script>