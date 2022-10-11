
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title_page; ?>  <?php echo (isset($detail)? "của " . $detail['name'] :""); ?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Cục đo lương</a></li>
        <li class="active"><?php echo $title_page; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <a class="btn btn-primary" href="<?php echo base_url($controllername.'/create'); ?>">Tạo mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Mã năng lực thử nghiệm</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="search_id" id="search_id" placeholder="Tìm theo mã năng lực">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Tên năng lực</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="search_name" id="search_name" placeholder="Tìm theo tên">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Mã loại năng lực thử nghiệp</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="search_category" id="search_category" value="<?php echo $category; ?>">
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="search-button">
                                    <button type="button" id="searchBtn" class="btn btn-info">Tìm kiếm</button>
                                    <button type="button" id="resetBtn" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="ajaxContent" class="box-body">
                    </div>
                </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->


