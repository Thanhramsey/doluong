
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
    <div class="box">
        <div class="box-header">
                 <div class="col-lg-3">
                        <label>Mã số mẫu</label>
                        <input class="form-control" type="text" name="id" id="id" value="" placeholder="Nhập mã số"/>
                    </div>
                  
                    <div class="col-lg-3">
                        <label>Mã số thuế</label>
                        <input class="form-control" type="text" name="mst" id="mst" value="" placeholder="Mã số thuế"/>
                    </div>
           
                    <div class="col-lg-3">
                        <label></label></br>
                        <button id="searchBtn" class="btn btn-primary">Tìm kiếm</button>
                    </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="ajaxContent">
          
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


