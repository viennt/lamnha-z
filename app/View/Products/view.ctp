<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/bootstrap-slider/slider.css'; ?> media='all'>
<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'css/magnify.css'; ?> media='all'>
<?php // pre process
	$product['Product']['price'] = '0';
	foreach ($product["ProductPrice"] as $key => $value) {
		if (!isset($value["finished"])) {
			$product['Product']['price'] = $value["price"];
		}
	}
?>

<div class="publicView row" style="margin: 0">
	<div class="name col-all-12"><h1><?php echo h($product['Product']['name']); ?></h1><hr></div>
	<div class="col-lg-8" style="border-right: 1px dashed #E5E5E5">
		<div class="row">
			<div class="images col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<figure class="thumbnail publicViewImage">
					<?php
					if(isset($product['ProductImage'][0]['name']))
						echo $this->Html->image(
							'uploads/products/'.$product['ProductImage'][0]['name'], 
							array('alt' => $product['ProductImage'][0]['description'], 'id' => 'mainImg', 'data-magnify-src' => $this->webroot.'img/uploads/products/'.$product['ProductImage'][0]['name'])
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
								'uploads/products/'.$productImage['name'], 
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
			<div class="detail col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<h2><?php echo $product['ProductCategory']['name']; ?></h2>
				<div class="info">
					<div class="price col-sx-12"><?php 
						echo $this->Number->currency($product['Product']['price'], '', array('wholeSymbol' => ' ₫', 'wholePosition' => 'after', 'places' => 0, 'thousands' => '.')); 
					?></div>
					<div class="row">
						<div class="line col-all-5">Nhà cung cấp:</div>
						<div class="line col-all-7">Công ty ABC</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Danh mục:</div>
						<div class="line col-all-7">
							<?php echo $this->Html->link($product['ProductCategory']['name'], array('controller' => 'productCategories', 'action' => 'view', 'id' => $product['ProductCategory']['id'], 'slug' => $this->Common->convertViToEn($product['ProductCategory']['name'], true))); ?>
						</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Đặc điểm:</div>
						<div class="line col-all-7">
							<?php echo h($product['Product']['specification']); ?>
						</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Đánh giá:</div>
						<div class="line col-all-7">* * * * *</div>
					</div>
					<!-- <div class="row">
						<div class="line col-all-5">S.lượng (<?php echo h($product['Product']['unit']); ?>):</div>
						<div class="line row col-all-7">
							<div class="col-all-9">
								<input id="quantity" type="text" data-slider-min="1" data-slider-max="20" data-slider-step="1" data-slider-value="1" data-slider-tooltip="hide">
							</div>
							<input id="quantityVal" class="form-control non-left non-right col-all-3" type="number" name="quantity" min="1" max="20" value="1">
						</div>
					</div> -->
				</div>
				<div class="row">
					<div class="col-all-12">
					<?php echo $this->Form->create('Cart', array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'addProduct')));
						echo $this->Form->hidden('product_id',array('value'=>$product['Product']['id']));
						echo $this->Form->submit('Add to cart',array('class'=>'btn btn-block btn-flat btn-warning'));
						echo $this->Form->end(); ?>
					</div>     
				</div>
			</div>
			<div class="col-all-12">
			<hr>
				<?php echo $product['Product']['description']; ?>
			</div>
			<div class="col-all-12">
			<hr>
				<div class="row">
					<?php foreach ($product['ProductVideo'] as $productVideo): ?>
						<div class="col-sx-12 col-sm-12 col-md-6 col-lg-6">
							<div class="thumbnail ">
								<div class="embed-responsive embed-responsive-16by9">
								<iframe src=<?php echo 'https://www.youtube.com/embed/'.$productVideo['code'] ?> frameborder="0" allowfullscreen></iframe></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="row">
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