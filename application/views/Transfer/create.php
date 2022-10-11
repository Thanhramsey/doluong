<?php   $tinhtrangmau = '';
                       $ghichu = ''; ?>
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
        <select id ="typechitieu" name="typechitieu" class="form-control select2" style="width: 100%">
                                        <option value="0">Chọn loại chỉ tiêu</option>
                                        <?php foreach ($categorys as $category) { ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                         <?php }?>
                                        </select>   
        </div>
        <!-- /.box-header -->
        <div class="box-body row">
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-12">
                        <table id="TableBienLai" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>stt</th>
                                    <th style="width:250px">Chỉ tiêu PT</th>
                                    <th style="width:50px">Mã mẫu</th>
                                    <th>Tên mẫu</th>
                                    <th>Kết quả</th>
                                    <th>Đơn vị</th>
                                    <th>Phương pháp phân rích</th>
                                    
                                   
                                </tr>
                             
                            </thead>
                            <tbody id="NoiDungTableBienLai">
                                <tr>
                                <?php
                                 $all = 0;
                                        if (count($list) > 0) {
                                            $stt = 1;
                                            $mamau="";
                                            foreach ($list as $item) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $stt; ?></td>
                                                    <td>
                                                    Tên gốc: <?php echo $item['name']; ?>
                                                    <input type="text" class="form-control" id="name<?php echo $item['id']; ?>" name="phone" placeholder="Nhập tên" value="<?php echo $item['name']; ?>">
                                                    <input type="text" class="form-control" id="note<?php echo $item['id']; ?>" name="phone" placeholder="Nhập tên" value="<?php echo $item['note']; ?>">
                                                        <div class="form-group" id="ds">
                                                            
                                                            <select id ="chitieu<?php echo $item['id']; ?>" name="typechitieu" class="form-control chitieu select2" style="width: 100%">
                                                                <option value="0">Chọn chỉ tiêu</option>
                                                              
                                                            </select>
                                                            <button class="btn btn-danger btn-xs" onclick="Getchitieu(<?php echo $item['id'];?>)"><i class="fa fa-add-o" aria-hidden="true"></i>Lấy chỉ tiêu</button>
                                                        </div>  

                                                    
                                                    </td>
                                                    <td><?php echo $item['code']; ?></td>
                                                    <td><?php echo $item['ghichu']; ?></td>
                                                    <td>
                                                    <input type="text" class="form-control"  id="phi<?php echo $item['id'];?>" placeholder="Nhập kết quả" value="<?php echo $item['result']; ?>">
                                                    <button class="btn btn-danger btn-xs" onclick="Save(<?php echo $item['id'];?>)"><i class="fa fa-add-o" aria-hidden="true"></i> Lưu</button>
                                                    </td>
                                                    <td>
                                                    <input type="text" class="form-control" id="mass<?php echo $item['id']; ?>" placeholder="Nhập tên" value="<?php echo $item['mass']; ?>">
                                                    
                                                    </td>
                                                    <td>
                                                    <input type="text" class="form-control" id="method<?php echo $item['id']; ?>" placeholder="Nhập tên" value="<?php echo $item['method']; ?>">
                                                    
                                                    </td>
                                                    <?php if($mamau!=$item['mamau']){?>
                                                        <?php $mamau = $item['mamau']; ?>
                                                        <?php $tinhtrangmau = $tinhtrangmau.','.$item['statusmau'].'('.$item['mass'].')'; ?>
                                                        <?php $ghichu = $ghichu.','.$item['ghichu'].'('.$item['code'].')'; ?>
                                                    <?php } ?>
                                                </tr>
                                                <?php $stt++;
                                            }
                                        }
                              ?>
                                </tr>
                            <form role="form" method="post" action="<?php echo base_url($controllername.'/luuthongtin/'.$id); ?>" enctype="multipart/form-data"> 
                                <tr>
                                    <td colspan="4" style="text-align: left;">
                                        <div class="col-lg-6">
                                            <label>Ngày chuyển mẫu:</label>
                                            <?php $ngaychuyenmau = ($info['ngaychuyenmau']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaychuyenmau'])); ?>
                                      
                                            <input class="form-control timepicker" type="text" name="ngaychuyenmau" id="ngaychuyenmau" value="<?php echo $ngaychuyenmau ?>" placeholder=""/>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Người chuyển mẫu:</label>
                                            <input class="form-control" type="text" name="nguoichuyenmau" id="nguoichuyenmau" value="<?php echo $info['nguoichuyenmau'] ?>" placeholder=""/>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Người nhận mẫu:</label>
                                            <input class="form-control" type="text" name="nguoinhanmau" id="nguoinhanmau" value="<?php echo $info['nguoinhanmau'] ?>" placeholder=""/>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Ngày trả kết quả theo nguyên tắc:  </label>
                                            <?php $ngaytrakqnt = ($info['ngaytrakqnt']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaytrakqnt'])); ?>
                                            <input class="form-control timepicker" type="text" name="ngaytrakqnt" id="ngaytrakqnt" value="<?php echo $ngaytrakqnt ?>" placeholder=""/>
                                        </div>

                                        <div class="col-lg-12">
                                            <label>Tình trạng mẫu: </label>
                                            <input class="form-control" type="text" name="tinhtrangmau" id="tinhtrangmau" value="<?php echo $tinhtrangmau ?>" placeholder=""/>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Ghi chú: </label>
                                            <input class="form-control" type="text" name="ghichu" id="ghichu" value="<?php echo $ghichu ?>" placeholder=""/>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Tài liệu đính kèm: </label>
                                           
                                            <select name="tailieukemtheo" class="form-control" style="width: 100%;">
                                <option value="1"  <?php
                                if ($info['tailieukemtheo'] == 1) {
                                    echo 'selected';
                                }
                                ?> >Có</option>
                                <option  <?php
                                if ($info['tailieukemtheo'] == 0) {
                                    echo 'selected';
                                }
                                ?> value="0">Không</option>

                            </select>
                                        
                                        </div>
                                  
                                  
                                    </td>
                                    <td colspan="2" style="text-align: left;">
                                            <div class="col-lg-12">
                                                <label>Ngày chuyển kết quả:  </label>
                                                <?php $ngaychuyenketqua = ($info['ngaychuyenketqua']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['date'])); ?>
                                                <input class="form-control timepicker" type="text" name="ngaychuyenketqua" id="ngaychuyenketqua" value="<?php echo $ngaychuyenketqua ?>" placeholder=""/>
                                            </div>
                                    
                                    
                                    
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td colspan="6" style="text-align: left;">
                                             <div class="col-lg-6">
                                                <label>Ngày chuyển kết quả:  </label>
                                                <?php $ngaynhanketqua = ($info['ngaynhanketqua']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaynhanketqua'])); ?>
                                                <input class="form-control timepicker" type="text" name="ngaynhanketqua" id="ngaynhanketqua" value="<?php echo $ngaynhanketqua ?>" placeholder=""/>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Người nhận kết quả::  </label>
                                                <input class="form-control" type="text" name="nguoinhanketqua" id="nguoinhanketqua" value="<?php echo $info['nguoinhanketqua'] ?>" placeholder=""/>
                                            </div>
                                    
                                    
                                    
                                    </td>
                             
                                </tr>
                                <tr>

                                <td colspan="6" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary">Lưu thông tin ghi chú</button>
                                    <a class="btn btn-primary" href="<?php echo base_url($controllername.'/phieuchuyenmau/'.$id) ?>" target="_blank">Xuất mẫu</a>
                                    <a class="btn btn-danger" href="<?php echo base_url($controllername."/changestatus/". $id."/2"); ?>">
                                        Chuyển trả kết quả
                                    </a>
                               
                                </td>

                                </tr>
                            </form>
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
