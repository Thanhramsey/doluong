<div>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Số</th>
                        <th>Tên đơn vị</th>
                        <th>Mã số thuế</th>
                        <th>Trả kết quả</th>
                       
                        <th>Hoạt động</th>


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
                                <td><a href="<?php echo base_url('Result/view/'.$item->id); ?>">
                                       Điều chỉnh kết quả
                                    </a></td>
                               
                                    <td style="text-align: center;">
                                <a class="btn btn-primary" href="<?php echo base_url($controllername."/changestatus/". $item->id."/1"); ?>"  target="_blank">
                                        Trả về
                                    </a>
                                 <span>|</span>
                                <a class="btn btn-primary" href="<?php echo base_url($controllername.'/xuatphieutraketqua/'.$item->id) ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                <span>|</span>
                                <a class="btn btn-primary" href="<?php echo base_url($controllername."/changestatus/". $item->id."/3"); ?>">
                                        Chuyển trả kết quả
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
                         <th>Số</th>
                        <th>Tên đơn vị</th>
                        <th>Mã số thuế</th>
                        <th>Xem mẫu</th>
                        <th>Hoạt động</th>

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