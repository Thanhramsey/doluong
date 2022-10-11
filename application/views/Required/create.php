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
                    <div class="box-body row">
					     <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Ngày<span style="color:#EA3838">(*)<?php echo form_error('date'); ?></span></label>
                            <input type="text" id ="startdate" class="form-control timepicker" name="date" placeholder="Nhập ngày" value="<?php echo set_value('date'); ?>">
                        </div>
                   
                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Mã số mẫu<span style="color:#EA3838">(*)<?php echo form_error('macode'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="macode" placeholder="Nhập mã code" value="<?php echo set_value('macode'); ?>">
                        </div>
                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Tên đơn vị yêu cầu<span style="color:#EA3838">(*)<?php echo form_error('com'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="com" placeholder="Nhập tên  đơn vị yêu cầu" value="<?php echo set_value('com'); ?>">
                        </div>
                     
                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Địa chỉ</span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="address" placeholder="Nhập địa chỉ" value="<?php echo set_value('address'); ?>">
                        </div>
                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Mã số thuế</span></label>
                            <input type="text" class="form-control" id="tax" name="tax" placeholder="Nhập MST" value="<?php echo set_value('tax'); ?>">
                        </div>
						   <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Người đại diện</span></label>
                            <input type="text" class="form-control" id="buyer" name="buyer" placeholder="Nhập người đại diện" value="<?php echo set_value('buyer'); ?>">
                        </div>
						 <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Chức vụ</span></label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Nhập chức vụ" value="<?php echo set_value('role'); ?>">
                        </div>
                      	 <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Điện thoại</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập điện thoại" value="<?php echo set_value('phone'); ?>">
                        </div>
						<div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Fax</span></label>
                            <input type="text" class="form-control" id="fax" name="fax" placeholder="Nhập fax" value="<?php echo set_value('fax'); ?>">
                        </div>
						<div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Email</span></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Nhập email" value="<?php echo set_value('email'); ?>">
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
