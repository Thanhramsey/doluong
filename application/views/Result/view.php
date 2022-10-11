<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title_page; ?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"><?php echo $title_page; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
                   
        </div>
        <!-- /.box-header -->
        <div class="box-body row">
                
       
                    <div class="col-lg-12">
                        <table id="TableBienLai" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>stt</th>
                                    <th>Mẫu</th>
                                    <th>Trả kết quả</th>
                                    <th>Trả kết quả</th>
                                    <th>Ngày trả kết quả</th>
                                </tr>
                             
                            </thead>
                            <tbody id="NoiDungTableBienLai">
                                <tr>
                                <?php
                                 $all = 0;
                    if (count($list) > 0) {
                        $stt = 1;
                       
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $item['name']; ?></td>
                                <td>
                              
                                
                                        <a href="<?php echo base_url('Result/create/'.$item['id']); ?>">
                                                Sửa
                                        </a>
                                </td>
                                 
                                            
                                <td>
                                            <a href="<?php echo base_url('Result/xuatphieutraketqua/'.$item['id']); ?>" target="_blank">
                                                Xem kết quả
                                            </a>
                                </td>
                                <td>
                                <?php 
                                      $ngayxacnhan = ($item['ngayxacnhan']=='0000-00-00')?"":date("d/m/Y", strtotime($item['ngayxacnhan']));     
                                ?>
                                    <?php echo $ngayxacnhan; ?>
                                </td>


                                
                            </tr>
                            <?php $stt++;
                        }
                    }
                    ?>
                                </tr>
                               
                             
                            </tbody>
                        </table>
                    </div>
        </div>
        <!-- /.box-body -->
    </div>
    <div>
    <div class="box-footer">
                      
                    </div>
   
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

