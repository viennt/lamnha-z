<div class="left-sidebar">
    <div class="drop-cart" style="height: 100px"></div>
    <div class="panel panel-primary">
        <ul class="list-group list-group-unbordered" id="cart-items"></ul>
    </div>
</div>
<?php echo $this->Form->create('Cart', array('id'=>'add-form-product','url'=>array('controller'=>'carts','action'=>'addProduct')));
echo $this->Form->hidden('product_id', array('id'=> 'product_id'));
echo $this->Form->end(); ?>
<?php echo $this->Form->create('Cart', array('id'=>'add-form-service','url'=>array('controller'=>'carts','action'=>'addService')));
echo $this->Form->hidden('service_id', array('id'=> 'service_id'));
echo $this->Form->end(); ?>