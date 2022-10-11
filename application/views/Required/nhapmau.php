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
                    <div class="col-lg-2">
                        <label>Tên mẫu</label>
                        <input class="form-control" type="text" name="name" id="name" value="" placeholder="Nhập tên mẫu"/>
                    </div>
                    <div class="col-lg-2">
                        <label>Phương pháp thử</label>
                        <input class="form-control" type="text" name="method" id="method" value="" placeholder="Nhập tên mẫu"/>
                    </div>
                    <div class="col-lg-2">
                        <label>Tình trạng mẫu</label>
                        <input class="form-control" type="text" name="statusmau" id="statusmau" value="" placeholder="Nhập tên mẫu"/>
                      <!-- <select name="statusmau" id="statusmau"  class="form-control select2" style="width: 100%">
                            <option value="Mẫu dạng lỏng, nước trong đựng trong chai nhựa">Mẫu dạng lỏng, nước trong đựng trong chai nhựa</option>
                            <option value="Mẫu dạng lỏng, nước vàng nhạt đựng trong chai nhựa">Mẫu dạng lỏng, nước vàng nhạt đựng trong chai nhựa</option>
                            <option value="Mẫu đựng trong bì giấy kín">Mẫu đựng trong bì giấy kín</option>
                            <option value="Mẫu dạng bột, màu đen đựng bì nilông">Mẫu dạng bột, màu đen đựng bì nilông</option>
                            <option value="Mẫu dạng hạt, màu trắng đựng bì nilông">Mẫu dạng hạt, màu trắng đựng bì nilông</option>
                            <option value="Mẫu dạng bột, màu đỏ cam đựng bì nilông">Mẫu dạng bột, màu đỏ cam đựng bì nilông</option>
                            <option value="Mẫu dạng hạt, màu kem đựng bì nilông">Mẫu dạng hạt, màu kem đựng bì nilông</option>
                            <option value="Mẫu dạng hạt, màu xanh đựng bì nilông">Mẫu dạng hạt, màu xanh đựng bì nilông</option>
                            <option value="Mẫu dạng bột, màu xám đựng bì nilông">Mẫu dạng bột, màu xám đựng bì nilông</option>
                         </select>-->
                    </div>
                    <div class="col-lg-2">
                        <label>Khối lượng mẫu</label>
                        <input class="form-control" type="text" name="massmau" id="massmau" value="" placeholder="Nhập tên mẫu"/>
                          <!--   <select name="massmau" id="massmau"  class="form-control select2" style="width: 100%">
                            <option value="1.5L/M">1.5L/M</option>
                            <option value="1.5L*2 chai">1.5L*2 chai</option>
                            <option value="1.5L*3chai">1.5L*3chai</option>
                            <option value="0.5kg/M">0.5kg/M</option>
                            <option value="1.0kg/M">1.0kg/M</option>
                         </select>-->
                    
                    </div>
                    <div class="col-lg-2">
                        <label></label></br>
                        <button type="button" id="gialai" class="btn btn-success" onclick="Addmau(<?php echo $id; ?>)"><i class="fa fa-plus" aria-hidden="true"></i>Thêm</button>
                    </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body row">
                
       
                    <div class="col-lg-12">
                        <table id="TableBienLai" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>stt</th>
                                    <th style="width:150px">Tên mẫu</th>
                                    <th>Chỉ tiêu yêu cầu</th>
                                    <th>Phương pháp thử</th>
                                    <th>Tình trạng mẫu</th>
                                    <th>Khối lượng mẫu</th>
                                    <th>Mã hóa mẫu</th>
                                    <th>Phí thử nghiệm</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th style="padding: 2px 0;">1</th>
                                    <th style="padding: 2px 0;">2</th>
                                    <th style="padding: 2px 0;">3</th>
                                    <th style="padding: 2px 0;">4</th>
                                    <th style="padding: 2px 0;">5</th>
                                    <th style="padding: 2px 0;">6</th>
                                    <th style="padding: 2px 0;">7</th>
                                    <th style="padding: 2px 0;">8</th>
                                    <th style="padding: 2px 0;">9</th>
                                </tr>
                            </thead>
                            <tbody id="NoiDungTableBienLai">
                                <tr>
                                <?php
                                 $all = 0;
                                 $stt0 = 0;
                    if (count($list) > 0) {
                        $stt = 1;
                        foreach ($list as $item) {
                            ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><label id="name<?php echo $item['id'];?>"><?php echo $item['name']; ?></label></td>
                                <td id="phi<?php echo $item['id'];?>">
                                    <?php echo $item['chitieu']; ?>
                                </td>
                                <td><?php echo $item['method']; ?></td>
                                <td><?php echo $item['statusmau']; ?></td>
                                <td><?php echo $item['mass']; ?></td>
                                <td><label id="code<?php echo $item['id'];?>"><?php echo $item['code']; ?></label></td>
                                <td id="sum<?php echo $item['id'];?>"><?php echo $item['sum']; ?></td>
                                <?php $all=$all+$item['sum'];?>
                                <td>
                                <button class='btn btn-sm btn-primary btn-xs' data-toggle='modal' data-target='#myModal-criteria' onclick='LoadChitieu(<?php echo $item["id"]?>)'><i class='fa fa-plus'></i>Chỉ tiêu</button></br>
                                <button class="btn btn-danger btn-xs" onclick="Delete(<?php echo $item['id'];?>,<?php echo $id;?>)"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                </td>
                            </tr>
                            <?php $stt++; $stt0++;
                        }
                    }
                    ?>
                                </tr>
                               
                                <tr>
                                    <td colspan="7" style="text-align: right;">Tổng cộng:</td>
                                    <td><?php echo $all;?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="7" style="text-align: left;">Số tiền viết bằng chữ:</td>
                                    <td></td>
                                    <td></td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        <!-- /.box-body -->
        </div>
    <div>
    <div class="box-footer">
                        <a class="btn btn-primary" href="<?php echo base_url($controllername."/addketqua/".$id); ?>">Tiếp tục</a>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Quay lại</a>
                        <input class="form-control" type="text" name="stt" id="stt" value="<?php echo $stt0; ?>" placeholder="Nhập tên mẫu" style="display:none">
    </div>
   
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

<div class="modal fade" tabindex="-1" role="dialog" id="myModal-criteria">
	<div class="modal-dialog" role="document" style="width: 100%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close-popup" data-dismiss="modal" aria-label="Close" onclick="resetPoint()">
					<span aria-hidden="true">&times;</span>
				</button>
				<div style="text-align: center" id="title">
					<h1 class="modal-title">Yếu tố thành phần chi tiết</h1>
				</div>
			</div>
			<div class="modal-body">
                <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <div class="form-group" id="ds">
                                    <label>Loại chỉ tiêu</label>
                                    <select id ="typechitieu" name="typechitieu" class="form-control select2" style="width: 100%">
                                        <option value="0">Chọn loại chỉ tiêu</option>
                                        <?php foreach ($categorys as $category) { ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                         <?php }?>
                                        </select>
                                    
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group" id="ds">
                                    <label>Chỉ tiêu</label>
                                    <select id ="chitieu" name="typechitieu" class="form-control select2" style="width: 100%">
                                        <option value="0">Chọn chỉ tiêu</option>
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group" id="ds">
                                    <label></label>
                                    </br>
                                    <button class='btn btn-sm btn-primary btn-flat' onclick="bosungchitieu()"><i class='fa fa-plus'></i>Thêm</button>
                                </div>
                            </div>


                        </div>
                </div>
				<div class="row">
					<div class="col-xs-12">
					     <div class="box-body">
                             <table id="example" class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                     <th>stt</th>
                                        <th>Tên thử nghiệm</th>
                                        <th>Phương pháp thử</th>
                                        <th>Khối lượng mẫu yêu cầu</th>
                         
                                        <th>Giá</th>
                                        <th></th>
                                     </tr>
                                 </thead>
                                 <tbody id="NoiDungChitieu">
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td>Chưa có dữ liệu</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                 </tbody>
                                 <tfoot>
                                 </tfoot>
                             </table>
                          </div>
						  <div style="text-align:center">
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
