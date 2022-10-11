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
                         <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Danh sách QC</a>
                         <a class="btn btn-primary" href="<?php echo base_url($controllername.'/create'); ?>">Tạo mới</a>
                </div>
    </div>
    
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="box-body">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Mã QC<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Nhập tên" value="<?php echo $info['name']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Mã QC<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="ten" placeholder="Nhập tên" value="<?php echo $info['ten']; ?>" disabled>
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
 
 
    <!-- /.row -->
</section>
<!-- /.content -->
