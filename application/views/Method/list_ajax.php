
<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tên thử nghiệm</th>
                        <th>Phương pháp thử</th>
                        <th>Khối lượng mẫu yêu cầu</th>
                        <th>Điều kiện lưu mẫu</th>
                        <th>Giá</th>
                        <th>Danh sách qc</th>
                        <th>Hoạt động</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($list) > 0) {
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item->name; ?></td>
                                <td><?php echo $item->method; ?></td>
                                <td><?php echo $item->mass; ?></td>
                                <td><?php echo $item->conditions; ?></td>
                                <td><?php echo $item->price; ?></td>
                                <td><a href="<?php echo base_url("/Code/index/".$item->id); ?>"  target="_blank">
                                        <i class="fa fa-eye "></i>
                                    </a></td>
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
                    <th>Tên thử nghiệm</th>
                        <th>Phương pháp thử</th>
                        <th>Khối lượng mẫu yêu cầu</th>
                        <th>Điều kiện lưu mẫu</th>
                        <th>Giá</th>
                        <th>Danh sách qc</th>
                        <th>Hoạt động</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
         
            <div class="box-footer">
                <ul class="pagination">
                    <?php echo $pagelinks ?>
                </ul>
            </div>
      