
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
            <a class="btn btn-primary" href="<?php echo base_url($controllername.'/create'); ?>">Tạo mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tên học viên</th>
                        <th>Di động</th>
                        <th>Các lớp đã học</th>
                        <th>Tình hình đóng học phí</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($list) > 0) {
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td><?php echo $item['phone']; ?></td>
         
                                <td><a href="<?php echo base_url('Register/index/'.$item['id']); ?>">Xem tại đây</a></td>
                                <td><a href="<?php echo base_url('Register/index/'.$item['id']); ?>">Xem tại đây</a></td>
                                <td><a href="<?php echo base_url('Arrange/index/'.$item['id']); ?>">Xem tại đây</a></td>
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url($controllername."/"."view/". $item['id']); ?>">
                                        <i class="fa fa-eye "></i>
                                    </a>
                                    <a href="<?php echo base_url($controllername."/"."edit/". $item['id']); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <span>|</span>
                                    <a href="<?php echo base_url($controllername."/"."delete/". $item['id']); ?>">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Tên khóa học</th>
                        <th>Số tuần học</th>
                        <th>Số tháng học</th>
                        <th>Danh sách lớp học</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
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


