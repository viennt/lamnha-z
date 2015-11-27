<div class="panel panel-default">
<div class="panel-body">
    <div class="row">
        <div class="col-all-8">
            <div class="row">
                <div class="col-all-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="active">
                                <th width="60%">Tên dịch vụ</th>
                                <th width="15%">Giá</th>
                                <th width="15%">Tổng</th>
                                <th width="10%">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $totalService = 0;?>
                            <?php foreach ($services as $service):?>
                            <tr>
                                <td><?php echo $service['Service']['name'];?></td>
                                <td>$<?php echo '1000';?></td>
                                <td>$<?php echo $service['Service']['count'] * 1000; ?></td>
                                <td><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'deleteService', $service['Service']['id']), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Xác nhận xóa khỏi giỏ hàng?'), 'escape' => false)); ?></td>
                            </tr>
                            <?php $totalService = $totalService + $service['Service']['count'] * 1000;?>
                            <?php endforeach;?>
                            <tr>
                                <td colspan=2></td>
                                <td><?php echo $totalService;?> VNĐ</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <?php echo $this->Form->create('Cart',array('url'=>array('action'=>'updateProduct')));?>
                <div class="col-all-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="active">
                                <th width="40%">Tên sản phẩm</th>
                                <th width="20%">Số lượng</th>
                                <th width="15%">Giá</th>
                                <th width="15%">Tổng</th>
                                <th width="10%">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $totalProduct = 0;?>
                            <?php foreach ($products as $product):?>
                            <tr>
                                <td><?php echo $product['Product']['name'];?></td>
                                <td>
                                    <?php echo $this->Form->hidden('product_id.',array('value'=>$product['Product']['id']));?>
                                    <?php echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                                    'class'=>'form-control input-sm', 'value'=>$product['Product']['count']));?>
                                </td>
                                <td>$<?php echo '1000';?></td>
                                <td>$<?php echo $product['Product']['count'] * 1000; ?></td>
                                <td><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'deleteProduct', $product['Product']['id']), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Xác nhận xóa khỏi giỏ hàng?'), 'escape' => false)); ?></td>
                            </tr>
                            <?php $totalProduct = $totalProduct + $product['Product']['count'] * 1000;?>
                            <?php endforeach;?>
             
                            <tr>
                                <td colspan=3></td>
                                <td><?php echo $totalProduct;?> VNĐ</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
             
                    <p class="text-right">
                        <?php echo $this->Form->submit('Cập nhập giỏ hàng',array('class'=>'btn btn-flat btn-warning', 'div'=>false));?>
                    </p>
             
                </div>
                <?php echo $this->Form->end();?>
            </div>
        </div>
        <div class="col-all-4">
            <div class="left-sidebar">
                <div class="panel">
                    <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item row non-margin"><div class="col-all-6">Tạm tính:</div><div class="col-all-6"><?php echo $totalService + $totalProduct; ?> VNĐ</div></li>
                        <li class="list-group-item row non-margin"><div class="col-all-6">Thành tiền:</div><div class="col-all-6"><?php echo $totalService + $totalProduct; ?> VNĐ</div></li>
                        <a class="btn btn-flat btn-warning col-all-12" onclick="alert('Thực hiện thanh toán');">Thanh toán</a>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>