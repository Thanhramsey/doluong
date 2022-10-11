
<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>QC</th>
                        <th>Chỉ số</th>
                        <th>Tình trạng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($list) > 0) {
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item->qc; ?></td>
                                <td><?php echo $item->chiso; ?></td>
                            
                                <td><?php echo ($item->status=='1'? 'Hoạt động' : 'Chưa hoạt động' ); ?></td>
                      
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url($controllername."/"."view/". $item->id); ?>">
                                        <i class="fa fa-eye "></i>
                                    </a>
                                    <a href="<?php echo base_url($controllername."/"."edit/". $item->id); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <span>|</span>
                                    <a href="<?php echo base_url($controllername."/"."delete/".$item->id); ?>">
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
                        <th>QC</th>
                        <th>Chỉ số</th>
                        <th>Tình trạng</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
         
            <div class="box-footer">
                <ul class="pagination">
                    <?php echo $pagelinks ?>
                </ul>
            </div>
      