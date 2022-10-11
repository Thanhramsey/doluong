<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        <?php echo $title_page; ?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trung tâm anh ngữ</a></li>
        <li class="active"><?php echo $title_page; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="col-xl-12">
        <div class="box">
            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url($controllername.'/create'); ?>" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Tên học viên/Full name<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Nhập tên khóa học" value="<?php echo set_value('name'); ?>">
                        </div>
                     
                        <div class="form-group">
                            <label>Giới tính/Gender</label>
                            <select name="gender" class="form-control" style="width: 100%;">
                                <option <?php echo set_select('status', 1, true); ?>value="1">Nam</option>
                                <option  <?php echo set_select('status', 0, false); ?> value="0">Nữ</option>
                                <option  <?php echo set_select('status',3, false); ?> value="3">Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Ngày sinh<?php echo form_error('birthdate'); ?></span></label>
                            <input type="text" class="form-control timepicker" id="exampleInputUsername" name="birthdate" placeholder="Ngày sinh" value="<?php echo set_value('birthdate'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nơi ở hiện tại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="address" placeholder="Địa chỉ" value="<?php echo set_value('address'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Di động</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="phone" placeholder="Địa chỉ" value="<?php echo set_value('phone'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Năng khiếu</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="talent" placeholder="Địa chỉ" value="<?php echo set_value('talent'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Sở thích</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="hobbies" placeholder="Địa chỉ" value="<?php echo set_value('hobbies'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Học trường</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="school" placeholder="Địa chỉ" value="<?php echo set_value('school'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Họ và tên bố</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="dad" placeholder="Địa chỉ" value="<?php echo set_value('dad'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="tel1" placeholder="Địa chỉ" value="<?php echo set_value('tel1'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nghề nghiệp</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="job1" placeholder="Địa chỉ" value="<?php echo set_value('job1'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Họ và tên mẹ</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="mom" placeholder="Địa chỉ" value="<?php echo set_value('mom'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="tel2" placeholder="Địa chỉ" value="<?php echo set_value('tel2'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nghề nghiệp</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="job2" placeholder="Địa chỉ" value="<?php echo set_value('job2'); ?>">
                        </div>
               
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control" style="width: 100%;">
                                <option <?php echo set_select('status', 1, true); ?>value="1">Đang hoạt động</option>
                                <option  <?php echo set_select('status', 0, false); ?> value="0">Khóa</option>
                            </select>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btnadd">Tạo mới</button>
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
