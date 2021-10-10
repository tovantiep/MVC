<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Bảng tài khoản admin</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while($account = mysqli_fetch_array($data["account"])){?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $account["username"];?></td>
                        <td><?php echo $account["fullname"];?></td>
                        <td><?php echo $account["email"];?></td>
                        <td><?php echo $account["phone"];?></td>
                        <td><?php echo $account["address"];?></td>
                         <td><a class="btn btn-danger" href="login/delete/<?php echo $account["id_account"]; ?>" >Xóa</a></td>
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