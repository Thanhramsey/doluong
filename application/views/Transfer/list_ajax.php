<div>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Mã số phiếu</th>
                        <th>Ngày tạo</th>
                        <th>Tạo phiếu chuyển mẫu</th>
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
                                <td><?php echo date("d/m/Y", strtotime($item->createdate)); ?></td>
                                <td><a href="<?php echo base_url('Transfer/create/'.$item->id); ?>">
                                        Tạo phiếu chuyển mẫu
                                    </a></td>

                                <td style="text-align: center;">
                                <a class="btn btn-primary" href="<?php echo base_url($controllername."/changestatus/".$item->id."/0"); ?>">
                                        Trả về
                                    </a>
                                 <span>|</span>
                                <a class="btn btn-primary" href="<?php echo base_url($controllername.'/phieuchuyenmau/'.$item->id) ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                <span>|</span>
                                <a class="btn btn-danger" href="<?php echo base_url($controllername."/changestatus/". $item->id."/2"); ?>">
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
                        <th>Mã số phiếu</th>
                     
                        <th>Ngày tạo</th>
                        <th>Tạo phiếu chuyển mẫu</th>
                        <th>Xuất mẫu</th>

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