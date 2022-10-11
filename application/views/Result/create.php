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
                <form role="form" method="post" action="<?php echo base_url($controllername."/saveketqua/".$info["id"]); ?>" enctype="multipart/form-data">
                    
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-lg-12">
                                     <label>Tên mẫu</label>
                                     <input type="text" class="form-control" name="name" placeholder="Nhập tên mẫu" value="<?php echo $info['name']; ?>">   
                                </div>
                                
                                <div class="col-lg-6 col-lg-12">
                                     <label>Mô tả mẫu</label>
                                     <input type="text" class="form-control" name="statusmau" placeholder="" value="<?php echo $info['statusmau']; ?>">   
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-lg-12">
                                    <label>Ngày lấy mẫu</label>
                                    <?php $ngaylaymau = ($info['ngaylaymau']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaylaymau'])); ?>
                                    <input type="text" class="form-control timepicker" id="exampleInputUsername" name="ngaylaymau" placeholder="Nhập ngày lấy mẫu" value="<?php echo $ngaylaymau; ?>">  
                                </div>
                            
                                <div class="col-lg-6 col-lg-12">
                                     <label>Ngày nhận mẫu</label>
                                     <?php $ngaynhanmau = ($info['ngaynhanmau']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaynhanmau'])); ?>
                                     <input type="text" class="form-control timepicker" id="exampleInputUsername" name="ngaynhanmau" placeholder="Nhập ngày nhận mẫu" value="<?php echo $ngaynhanmau ; ?>">  
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-lg-12">
                                    <label>Thời gian kiếm nghiệm</label>
                                    <input type="text" class="form-control" id="exampleInputUsername" name="thoigiankiemnghiem" placeholder="Thời gian kiểm nghiệm" value="<?php echo $info['thoigiankiemnghiem']; ?>">  
                                </div>
                            
                                <div class="col-lg-6 col-lg-12">
                                     <label>Thời gian lưu mẫu</label>
                                     <input type="text" class="form-control" id="exampleInputUsername" name="thoigianluumau" placeholder="Thời gian lưu mẫu" value="<?php echo $info['thoigianluumau']; ?>"><p>ngày (kể từ ngày trả kết quả)</p> 
                                      
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-lg-12">
                                    <label>Nơi gửi mẫu</label>
                                    <input type="text" class="form-control" id="exampleInputUsername" name="noiguimau" placeholder="Nơi gửi mẫu" value="<?php echo $mauthunghiem['com']; ?>">  
                                </div>
                            
                                <div class="col-lg-4 col-lg-12">
                                     <label>Địa chỉ</label>
                                     <input type="text" class="form-control" id="exampleInputUsername" name="diachimau" placeholder="Địa chỉ" value="<?php echo $mauthunghiem['address']; ?>">  
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                     <label>Tài liệu đính kèm</label>
                                     <input type="text" class="form-control" id="exampleInputUsername" name="tailieudinhkem" placeholder="Tài liệu đính kèm" value="<?php echo $mauthunghiem['tailieukemtheo']; ?>">  
                                </div>
                            </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu trữ</button>
                    
    
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <div class="col-xl-12">
        <div class="box">
            <div class="box-body row">
            <div class="col-lg-12">
                        <table id="TableBienLai" class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    <th>CHỈ TIÊU KIỂM NGHIỆM</th>
                                    <th>PHƯƠNG PHÁP KIỂM NGHIỆM</th>
                                    <th>ĐƠN VỊ</th>
                                    <th>KẾT QUẢ</th>
                                    <th>QUY ĐỊNH</th>
                                    <th>TT</th>
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
                               
                                <td>
                                <input type="text" class="form-control" id="name<?php echo $item['id'] ?>" name="name<?php echo $item['id'] ?>" placeholder="Tên chỉ tiêu" value="<?php echo $item['name']; ?>">
                                
                                </td>
                                <td><input type="text" class="form-control" id="method<?php echo $item['id'] ?>" method="method<?php echo $item['id'] ?>" placeholder="Tên phương thức" value="<?php echo $item['method']; ?>"></td>
                                <td><input type="text" class="form-control" id="mass<?php echo $item['id'] ?>" mass="mass<?php echo $item['id'] ?>" placeholder="Đơn vị" value="<?php echo $item['mass']; ?>"></td>
                                <td><input type="text" class="form-control" id="result<?php echo $item['id'] ?>" mass="result<?php echo $item['id'] ?>" placeholder="Kết quả" value="<?php echo $item['result']; ?>"></td>
                                <td>
                                    <select id ="quydinh<?php echo $item['id'] ?>" name="typechitieu" class="form-control" style="width: 100%" onchange="getChiso(<?php echo $item['id'] ?>)">
                                            <option value="0">Chọn thông tư</option> 
                                                    <?php  foreach ($codes as $code) { ?>
                                                            <option value="<?php echo $code['id'] ?>"><?php echo $code['name'] ?></option>  
                                                    <?php } ?>     
                                            </select>
                                     <select id ="chiso<?php echo $item['id'] ?>" name="typechitieu" class="form-control" style="width: 100%" onchange="getChisoCon(<?php echo $item['id'] ?>)">
                                          <option value="0">Chọn chỉ tiêu</option>       
                                     </select>
                                     <select id ="chisocon<?php echo $item['id'] ?>" name="typechitieu" class="form-control" style="width: 100%" onchange="Savechiso(<?php echo $item['id'] ?>)">
                                          <option value="0">Chọn chỉ tiêu</option>       
                                     </select>
                                     <input type="text" class="form-control"  id="phi<?php echo $item['id'];?>" placeholder="Nhập kết quả" value="<?php echo $item['quydinh']; ?>">
                                   
                                </td>
                                <td><button class="btn btn-danger btn-xs" onclick="SaveMau(<?php echo $item['id'];?>)"><i class="fa fa-plus" aria-hidden="true"></i>Luu</button></br></td>
                                
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
        <!-- /.box -->
    </div>


    <div class="col-xl-12">
        <div class="box">
            <div class="box-body row">
            <form role="form" method="post" action="<?php echo base_url($controllername."/luuketluan/".$info["id"]); ?>" enctype="multipart/form-data">
                      
                     <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-lg-12">
                                    <label>Kết luận</label>
                                    <input type="text" class="form-control" id="exampleInputUsername" name="ketluan" placeholder="Kết luận" value="<?php echo $info['ketluan']; ?>">  
                                </div>
                            
                             
                            </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu kết luận</button>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername.'/xuatphieutraketqua/'.$id) ?>" target="_blank">Xem trước mẫu</a>
                       
                                <button type="submit" class="btn btn-danger" onclick="Xacnhan(<?php echo $id; ?>)">Xác nhận</button>
                      
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
