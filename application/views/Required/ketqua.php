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
            <div class="box-body row">
                <form role="form" method="post" action="<?php echo base_url($controllername."/addketqua/".$info["id"]); ?>" enctype="multipart/form-data">
                    
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-lg-12">
                                    <label>Kết luận</label>
                                        <select name="ketluan" class="form-control" style="width: 100%;">
                                            <option <?php
                                            if ($info['ketluan'] == 1) {
                                                echo 'selected';
                                            }
                                            ?> value="1" >Có</option>
                                            <option  <?php
                                            if ($info['ketluan'] == 0) {
                                                echo 'selected';
                                            }
                                            ?> value="0">Không</option>

                                        </select>
                                </div>
                                <div class="col-lg-6 col-lg-12">
                                     <label>Tên tiêu chuẩn/yêu cầu quy định</label>
                                     <input type="text" class="form-control" name="tentieuchuan" placeholder="Nhập tên tiêu chuẩn/yêu cầu quy định" value="<?php echo $info['tentieuchuan']; ?>">   
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-lg-12">
                                    <label>Ngày trả kết quả</label>
                                    <?php $ngaytraketqua = ($info['ngaytraketqua']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaytraketqua'])); ?>
                                    <input type="text" class="form-control timepicker" id="exampleInputUsername" name="ngaytraketqua" placeholder="Nhập ngày trả kết quả" value="<?php echo $ngaytraketqua; ?>">  
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                     <label>Số bản KQ</label>
                                     <input type="text" class="form-control" name="sobankq" placeholder="Nhập số bản kết quả" value="<?php echo $info['sobankq']; ?>">   
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                     <label>Nhận kết quả tại</label>
                                     <select name="nhanketqua" class="form-control" style="width: 100%;">
                                            <option <?php
                                            if ($info['nhanketqua'] == 1) {
                                                echo 'selected';
                                            }
                                            ?> value="1" >Trung tâm</option>
                                            <option  <?php
                                            if ($info['nhanketqua'] == 0) {
                                                echo 'selected';
                                            }
                                            ?> value="0">Bưu điện</option>

                                        </select>
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-lg-12">
                                     <label>Giao nhận mẫu</label>
                                     <select name="giaonhanmau" class="form-control" style="width: 100%;">
                                            <option <?php
                                            if ($info['giaonhanmau'] == 1) {
                                                echo 'selected';
                                            }
                                            ?> value="1" >Trực tiếp</option>
                                            <option  <?php
                                            if ($info['giaonhanmau'] == 0) {
                                                echo 'selected';
                                            }
                                            ?> value="0">Bưu điện</option>

                                        </select>
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                    <label>Ngày dự kiến trả KQ</label>
                                    <?php $ngaydukien= ($info['ngaydukien']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaydukien'])); ?>
                                    <input type="text" class="form-control timepicker" id="exampleInputUsername" name="ngaydukien" placeholder="Nhập ngày trả kết quả" value="<?php echo $ngaydukien; ?>">  
                                </div>
                              
                               
                            </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu trữ</button>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername."/"."Xembiennhan"."/".$info["id"]); ?>" target="_blank">Xem trước</a>
                        <a class="btn btn-danger" href=" <?php echo base_url($controllername.'/changestatus/'.$info['id']); ?>">Xác nhận</a>  
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
