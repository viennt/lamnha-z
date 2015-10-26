<!-- Products -->
<div class="list-items">
	<div class="row" id="load-content">
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