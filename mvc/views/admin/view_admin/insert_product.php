<div class="container-fluid">
<!-- DataTales Example -->
<a href="home_admin"><button class="btn btn-success">Quay lai</button></a> 
<div class="card shadow mb-4">
    <div class="card-header py-3">
    
        <h3 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        
           <form action="home_admin/insert" method="POST">
               <div class="form-group">
                   <label for="">Tên sản phẩm</label>
                   <input type="text" name="title_product" class="form-control" placeholder="Nhập tên sản phẩm" required>
               </div>
               <div class="form-group">
                   <label for="">Giá sản phẩm</label>
                   <input type="text" name="price_product" class="form-control" placeholder="Nhập giá sản phẩm" required>
               </div>
               <div class="form-group">
                   <label for="">Loại sản phẩm</label>
                   <select name="id_catgory_product" >
                        <option value="1">Pizza</option>
                        <option value="2">Salad</option>
                        <option value="3">Noodle</option>
                    </select>
               </div>
               <div class="form-group">
                   <label for="">Hình ảnh</label>
                   <input type="file" name="img_product" class="form-control" placeholder="Nhập ảnh sản phẩm" required>
               </div>
               <div class="form-group">
                   <label for="">Chi tiết sản phẩm</label>
                   <input type="text" name="desc_product" class="form-control" placeholder="Chi tiết về sản phẩm" required>
               </div>
               <div class="form-group">
                 <input type="submit" name="submit" class="form-control btn btn-warning" value="Thêm">
               </div>
           </form>
           <?php
           if (isset($data["result"])) {
              if ($data["result"] == "true") {?>
                     <h3 class="alert alert-success">
                      <?php echo "Them thanh cong"?>
                </h3>
                <?php
              }
              else{?>
                <h3 class="alert alert-warning">
                      <?php echo "Them that bai"?>
                </h3>
                <?php
              }
           }
           ?>
        </div>
    </div>
</div>

</div>