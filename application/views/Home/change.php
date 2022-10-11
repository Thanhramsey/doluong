
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
                <form role="form" method="post" action="<?php echo base_url("Home/change/". $id); ?>">
                    <div class="box-body">
                         <div class="form-group">
                            <span style="color:#EA3838">(*)<?php if(isset($error)){echo $error;} ?></span>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Mật khẩu cũ<span style="color:#EA3838">(*)<?php echo form_error('old'); ?></span></label>
                            <input type="password" class="form-control" id="exampleInputUsername" name="old" placeholder="Nhập tên đăng nhập" value="<?php echo set_value('username'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu mới<span style="color:#EA3838">(*)<?php echo form_error('new'); ?></span></label>
                            <input  type="password" class="form-control" id="exampleInputEmail1" name="new" placeholder="Nhập tên email" value="<?php echo set_value('email'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFullname">Nhập lại mật khẩu mới<span style="color:#EA3838">(*)<?php echo form_error('renew'); ?></span></label>
                            <input  type="password" class="form-control" id="exampleInputFullname" name="renew" placeholder="Nhập tên đầy đủ" value="<?php echo set_value('fullname'); ?>">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu trữ</button>
                       
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
