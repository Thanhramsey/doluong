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
    <div class="col-md-12">
    <div class="box">
                 <div class="box-body">
                         <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Đăng ký thi</a>
                         <a class="btn btn-primary" href="<?php echo base_url("Register/index/".$info['id'] ); ?>">Đăng ký khóa học</a>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Xếp lớp</a>
                </div>
    </div>
    
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="box-body">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Tên học viên<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Nhập tên" value="<?php echo $info['name']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Giới tính</span></label>
                            <select name="gender" class="form-control" style="width: 100%;" disabled>
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
                                        if ($info['gender'] == 3) {
                                            echo 'selected';
                                        }
                                        ?> value="0">Khác</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername">Ngày sinh: <?php echo $info['birthdate']; ?></label>
                            <input type="text" class="form-control timepicker" id="exampleInputUsername" name="birthdate" placeholder="Nhập ngày bắt đầu" value="<?php echo date("d-m-Y", strtotime($info['birthdate'])); ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Địa chỉ</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="address" placeholder="Nhập địa chỉ" value="<?php echo $info['address']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Di động</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="phone" placeholder="Nhập số điện thoại" value="<?php echo $info['phone']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Năng khiếu</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="talent" placeholder="Nhập số năng khiếu" value="<?php echo $info['talent']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Sở thích cá nhân</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="hobbies" placeholder="Nhập sở thích" value="<?php echo $info['hobbies']; ?>" disabled>
                        </div>



                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control" style="width: 100%;" disabled>
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

                 
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-6">
            <div class="box">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Học trường</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="school" placeholder="Nhập trường học" value="<?php echo $info['school']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Họ và tên bố</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="dad" placeholder="Nhập tên bố" value="<?php echo $info['dad']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="tel1" placeholder="Nhập số điện thoại" value="<?php echo $info['tel1']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nghế nghiệp</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="job1" placeholder="Nhập số điện thoại" value="<?php echo $info['job1']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Họ và tên mẹ</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="mom" placeholder="Nhập tên bố" value="<?php echo $info['mom']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="tel2" placeholder="Nhập số điện thoại" value="<?php echo $info['tel2']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nghế nghiệp</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="job2" placeholder="Nhập số điện thoại" value="<?php echo $info['job2']; ?>" disabled>
                        </div>
                    </div>
            </div>
    </div>
    <div class="col-md-12">

    <div class="box-footer">
                            
                            <a class="btn btn-primary" href="<?php echo base_url("Register/index/".$info['id'] ); ?>">Danh sách khóa học đã tham gia</a>
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>">Danh sách lớp học đã tham gia</a>
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>">Quay lại</a>
                        </div>
    
    </div>
    
    <!-- /.row -->
</section>
<!-- /.content -->
