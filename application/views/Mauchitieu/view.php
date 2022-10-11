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
                         <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Danh sách năng loại năng lực thử nghiệm</a>
                         <a class="btn btn-primary" href="<?php echo base_url($controllername.'/create'); ?>">Tạo mới</a>
                </div>
    </div>
    
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="box-body">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Tên mẫu<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Nhập tên" value="<?php echo $info['name']; ?>" disabled>
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
