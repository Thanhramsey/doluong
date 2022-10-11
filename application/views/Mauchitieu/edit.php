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
