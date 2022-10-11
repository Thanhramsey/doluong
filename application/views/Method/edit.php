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
                            <label for="exampleInputUsername">Loại năng lực thử nghiệm<span style="color:#EA3838">(*)<?php echo form_error('name'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Nhập tên" value="<?php echo $info['name']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Phương pháp thử<span style="color:#EA3838">(*)<?php echo form_error('method'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="method" placeholder="Nhập phương pháp thử" value="<?php echo $info['method']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Khối lượng mẫu yêu cầu<span style="color:#EA3838">(*)<?php echo form_error('mass'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="mass" placeholder="Nhập khối lượng mẫu yêu cầu" value="<?php echo $info['mass']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Điều kiện lưu mẫu<span style="color:#EA3838">(*)<?php echo form_error('conditions'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="conditions" placeholder="Nhập điều kiện lưu mẫu" value="<?php echo $info['conditions']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Giá(đồng)<span style="color:#EA3838">(*)<?php echo form_error('price'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="price" placeholder="Nhập giá" value="<?php echo $info['price']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Note<span style="color:#EA3838">(*)<?php echo form_error('note'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="note" placeholder="Nhập chỉ tiêu" value="<?php echo $info['note']; ?>">
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


                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control" style="width: 100%;" >
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
