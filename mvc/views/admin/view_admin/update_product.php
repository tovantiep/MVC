<div class="container-fluid">
<!-- DataTales Example -->
<a href="home_admin"><button class="btn btn-success">Quay lai</button></a> 
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php
            while ($home_admin = mysqli_fetch_array($data["update"])) { ?>
              <form action="home_admin/edit/<?php echo $home_admin["id_product"]; ?>" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="">Tên sản phẩm</label>
                   <input type="text" name="title_product" class="form-control" value="<?php echo $home_admin["title_product"]; ?>" required>
               </div>
               <div class="form-group">
                   <label for="">Giá sản phẩm</label>
                   <input type="text" name="price_product" class="form-control" value="<?php echo $home_admin["price_product"]; ?>" required>
               </div>
               <div class="form-group">
                   <label for="">Loại sản phẩm</label>
                   <select name="id_catgory_product" value="<?php echo $home_admin["id_catgory_product"]; ?>" >
                        <option value="<?php echo $home_admin["id_catgory_product"]; ?>">Pizza</option>
                        <option value="<?php echo $home_admin["id_catgory_product"]; ?>">Salad</option>
                        <option value="<?php echo $home_admin["id_catgory_product"]; ?>">Noodle</option>
                    </select>
               </div>
               <!-- <div class="form-group">
                   <label for="">Hình ảnh</label>
                   <input type="file" name="img_product" class="form-control"  value="<?php echo $home_admin["img_product"]; ?>">
                </div> -->
               <div class="form-group">
                   <label for="">Chi tiết sản phẩm</label>
                   <input type="text" name="desc_product" class="form-control"  value="<?php echo $home_admin["desc_product"]; ?>" required>
               </div>
               <div class="form-group">
                 <input type="submit" name="submit" class="form-control btn btn-warning" value="Update">
               </div>
           </form>
             <?php
            }
            ?>
           <?php
           if (isset($data["result"])) {
              if ($data["result"] == "true") {?>
                     <h3 class="alert alert-success">
                      <?php echo "Sua thanh cong"?>
                </h3>
                <?php
              }
              else{?>
                <h3 class="alert alert-warning">
                      <?php echo "Sua that bai"?>
                </h3>
                <?php
              }
           }
           ?>
        </div>
    </div>
</div>

</div>