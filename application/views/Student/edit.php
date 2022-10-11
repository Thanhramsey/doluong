<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title_page; ?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang admin</a></li>
        <li class="active"><?php echo $title_page; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="col-xl-12">
        <div class="box">
            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url($controllername."/edit/".$info["id"]); ?>" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Tên học viên<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Nhập tên" value="<?php echo $info['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Giới tính</span></label>
                            <select name="gender" class="form-control" style="width: 100%;">
                                <option value="1"  <?php
                                if ($info['gender'] == 1) {
                                    echo 'selected';
                                }
                                ?> >Nam</option>
                                <option  <?php
                                if ($info['gender'] == 0) {
                                    echo 'selected';
                                }
                                ?> value="0">nữ</option>
                                 <option  <?php
                                if ($info['gender'] ==3) {
                                    echo 'selected';
                                }
                                ?> value="0">Khác</option>


                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername">Ngày sinh: <?php echo $info['birthdate']; ?></label>
                            <input type="text" class="form-control timepicker" id="exampleInputUsername" name="birthdate" placeholder="Nhập ngày bắt đầu" value="<?php echo date("d-m-Y", strtotime($info['birthdate'])); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Địa chỉ</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="address" placeholder="Nhập địa chỉ" value="<?php echo $info['address']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Di động</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="phone" placeholder="Nhập số điện thoại" value="<?php echo $info['phone']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Năng khiếu</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="talent" placeholder="Nhập số năng khiếu" value="<?php echo $info['talent']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Sở thích cá nhân</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="hobbies" placeholder="Nhập sở thích" value="<?php echo $info['hobbies']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Học trường</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="school" placeholder="Nhập trường học" value="<?php echo $info['school']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Họ và tên bố</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="dad" placeholder="Nhập tên bố" value="<?php echo $info['dad']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="tel1" placeholder="Nhập số điện thoại" value="<?php echo $info['tel1']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nghế nghiệp</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="job1" placeholder="Nhập số điện thoại" value="<?php echo $info['job1']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Họ và tên mẹ</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="mom" placeholder="Nhập tên bố" value="<?php echo $info['mom']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="tel2" placeholder="Nhập số điện thoại" value="<?php echo $info['tel2']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nghế nghiệp</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="job2" placeholder="Nhập số điện thoại" value="<?php echo $info['job2']; ?>">
                        </div>
                    
                    
                        
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control" style="width: 100%;">
                                <option value="1"  <?php
                                if ($info['status'] == 1) {
                                    echo 'selected';
                                }
                                ?> >Đang hoạt động</option>
                                <option  <?php
                                if ($info['status'] == 0) {
                                    echo 'selected';
                                }
                                ?> value="0">Khóa</option>

                            </select>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Quay lại</a>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <!-- /.row -->
</section>
<!-- /.content -->
