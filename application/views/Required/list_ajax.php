<div>
<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Số</th>
                        <th>Tên đơn vị</th>
                        <th>Mã số thuế</th>
                        <th>Ngày tiếp nhận</th>
                        <th>Ngày tạo</th>
                        <th>Hoạt động</th>
                        <th>Xem giay to</th>
                    


                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($list) > 0) {
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item->id; ?></td>
                                <td><?php echo $item->com; ?></td>
                                <td><?php echo $item->tax; ?></td>
                                <td><?php echo date("d/m/Y", strtotime($item->date)); ?></td>
                                <td><?php echo date("d/m/Y", strtotime($item->createdate)); ?></td>
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url($controllername."/"."edit/". $item->id); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <span>|</span>
                                    <a href="<?php echo base_url();?>Transfer/create/<?php echo $item->id; ?>">
                                         <i class="fa fa-share"></i>
                                    </a>
                                    <span>|</span>
                                    <a href="<?php echo base_url();?>Result/view/<?php echo $item->id; ?>">
                                         <i class="fa fa-eye"></i>
                                    </a>
                                    <?php if($item->status==0){?>
                                        <a href="<?php echo base_url($controllername."/"."delete/". $item->id); ?>">
                                                    <i class="fa fa-trash"></i>
                                        </a>
                                    <?php } ?> 
                                    <span>|</span>
                                </td>
                                <td>
                                
                                    <a class="btn btn-success" href="<?php echo base_url($controllername."/"."Xembiennhan/". $item->id); ?>"> Xem giấy biên nhận</a>
                                    <?php if($item->status==0){?>
                                        <form role="form" method="post" action="<?php echo base_url($controllername.'/changestatus/'. $item->id); ?>" enctype="multipart/form-data">
                                                <button type="submit" class="btn btn-danger">Chuyển Phòng Trên</button>
                                        </form>
                                <?php }?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                    <th>Số</th>
                        <th>Tên đơn vị</th>
                        <th>Mã số thuế</th>
                        <th>Ngày tiếp nhận</th>
                        <th>Ngày tạo</th>
                        <th>Hoạt động</th>
                        <th>Xem giay to</th>
                       

                    </tr>
                </tfoot>
            </table>
            </div>
            <div class="box-footer">
                <ul class="pagination">
                    <?php echo $pagelinks ?>
                </ul>
            </div>
        </div>