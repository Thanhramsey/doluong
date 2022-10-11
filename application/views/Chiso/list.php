
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title_page; ?> của <?php echo $info['name']; ?>- <?php echo $info['ten']; ?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Chi cục đăng kiểm</a></li>
        <li class="active"><?php echo $info['name']; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <div class="col-lg-2">
                        <label>Tên mẫu</label>
                        <input class="form-control" type="text" name="name" id="chiso" value="" placeholder="Tên chỉ số"/>
                    </div>
                    <div class="col-lg-2">
                        <label>Chỉ số 1</label>
                        <input class="form-control" type="text" name="method" id="chisodau" value="" placeholder="Chỉ số 1"/>
                    </div>
                    <div class="col-lg-2">
                        <label>Chỉ số 2</label>
                        <input class="form-control" type="text" name="method" id="chisocuoi" value="" placeholder="Chỉ số 2"/>
                    </div>
                    <div class="col-lg-2">
                        <label>Chỉ số 3</label>
                        <input class="form-control" type="text" name="method" id="chisoba" value="" placeholder="Nhập tên 3"/>
                    </div>
                    <div class="col-lg-2">
                        <label></label></br>
                        <button type="button" id="gialai" class="btn btn-success" onclick="AddChiso(<?php echo $info['id'];; ?>)"><i class="fa fa-plus" aria-hidden="true"></i>Thêm</button>
                    </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tên chỉ số</th>
                        <th>Chỉ số 1</th>
                        <th>Chỉ số 2</th>
                        <th>Chỉ số 3</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody id="example3">
                    <?php
                    if (count($list) > 0) {
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" name="method" id="chiso<?php echo $item['id']; ?>" value="<?php echo $item['chiso']; ?>" placeholder="Chỉ số"/>
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="method" id="chisodau<?php echo $item['id']; ?>" value="<?php echo $item['chisodau']; ?>" placeholder="Chỉ số"/>
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="method" id="chisocuoi<?php echo $item['id']; ?>" value="<?php echo $item['chisocuoi']; ?>" placeholder="Chỉ số"/>
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="method" id="chisoba<?php echo $item['id']; ?>" value="<?php echo $item['chisoba']; ?>" placeholder="Chỉ số"/>
                                </td>
                         
                                
                      
                                <td>
                                <?php  $id = $item['id']; $code = $item['code']?>
                                    <button class='btn btn-danger btn-xs' onclick='Edit("<?php echo $id;?>","<?php echo $code;?>")'><i class='fa fa-edit-o' aria-hidden='true'></i>Lưu</button>
                                    <button class='btn btn-danger btn-xs' onclick='Delete("<?php echo $id;?>","<?php echo $code;?>")'><i class='fa fa-edit-o' aria-hidden='true'></i> Xóa</button>
                                    
                                </td>

            
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                        <th>Tên chỉ số</th>
                        <th>Chỉ số 1</th>
                        <th>Chỉ số 2</th>
                        <th>Chỉ số 3</th>
                        <th>Hoạt động</th>
                    </tr>
                </tfoot>
            </table>
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


