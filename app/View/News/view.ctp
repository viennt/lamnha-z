<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'css/magnify.css'; ?> media='all'>
<div class="publicView row" style="margin: 0">
	<div class="col-lg-8" style="border-right: 1px dashed #E5E5E5">
		<div class="row">
			<div class="images visible-lg col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<figure class="thumbnail publicViewImage">
					<?php
					if(isset($news['NewsImage'][0]['name']))
						echo $this->Html->image(
							'uploads/news/'.$news['NewsImage'][0]['name'], 
							array('alt' => $news['NewsImage'][0]['description'], 'id' => 'mainImg', 'data-magnify-src' => $this->webroot.'img/uploads/news/'.$news['NewsImage'][0]['name'])
						); ?>
				</figure>
			</div>
			<div class="detail col-sx-12 col-sm-12 col-md-12 col-lg-7">
				<h1><?php echo h($news['News']['title']); ?></h1>
				<h2><?php echo h($news['NewsCategory']['name']); ?></h2>
				<div class="row">
					<div class="col-all-5">
						<?php echo 'Người đăng: ', h($news['News']['user_id']); ?>
					</div>
					<div class="col-all-7">
						<?php echo 'Ngày đăng: ', h($news['News']['created']); ?></div>
				</div><br/>
				<div class="row">
					<div class="line col-all-12">
						<?php echo h($news['News']['abstract']); ?>
					</div>
				</div>
			</div>
			<div class="col-all-12">
				<?php echo $news['News']['detail']; ?>
			</div>
			<div class="moreImages row">
				<?php if(isset($news['NewsImage'])): ?>
				<div class="col-all-12">
				<?php foreach ($news['NewsImage'] as $newsImage): ?>
					<figure class="thumbnail col-all-3">
						<?php echo $this->Html->image(
							'uploads/news/'.$newsImage['name'], 
							array('alt' => $newsImage['description'], 'id' => 'subImg-'.$newsImage['id'], 'onclick' => 'changeImage(this)',  'style' => 'height: 100px')
						); ?>
					</figure>
				<?php endforeach; ?>
				</div>
				<?php endif;?>
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

<script src=<?php echo $this->webroot,'js/jquery.magnify.js'; ?>></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#mainImg").magnify();
});	
var changeImage = function(subImg) {
	$("#mainImg").attr("src", $(subImg).attr("src"));
	$("#mainImg").attr("data-magnify-src", $(subImg).attr("src"));
	$("#mainImg").magnify();
};
</script>