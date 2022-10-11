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

            <div class="form-group">
                            <label for="exampleInputUsername">Tên loại QC<span style="color:#EA3838">(*)<?php echo form_error('qc'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="qc" placeholder="Nhập tên QC" value="<?php echo $info['qc'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Chỉ số<span style="color:#EA3838">(*)<?php echo form_error('chiso'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="chiso" placeholder="Nhập tên QC" value="<?php echo $info['chiso'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Loại</label>
                            <select name="category" class="form-control select2" style="width: 100%;">
                                <?php foreach ($category as $item) { ?>
                                    <option value="<?php echo $item['id']; ?>"  <?php echo ($item['id']==$info['category'])? 'selected':'';?>><?php echo $item['name']; ?></option>
                                <?php }
                                ?>
                            </select>
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
