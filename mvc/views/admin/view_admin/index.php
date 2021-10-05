<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Bảng sản phẩm</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Chi tiết sản phẩm</th>
                        <th>Tình Trạng</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while($product = mysqli_fetch_array($data["product"])){?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $product["title_product"];?></td>
                        <td><?php echo $product["price_product"];?></td>
                        <?php 
                            if($product["id_catgory_product"]==1){
                        ?>
                            <td>Pizza</td>
                        <?php 
                            }
                            else if(($product["id_catgory_product"]==2)){
                        ?>
                            <td>Salad</td>
                        <?php }
                            else if(($product["id_catgory_product"]==3)){
                        ?>
                            <td>Noodle</td>
                        <?php 
                        
                            }
                        ?>
                        <td><?php echo $product["img_product"];?></td>
                        <td><?php echo $product["desc_product"];?></td>
                        <td><?php echo $product["status"];?></td>
                        <td><?php echo $product["id_product"];?></td>
                    </tr>
                    <?php  
                    $i++;      
                    }
                    ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>