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
            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url($controllername."/edit/".$info["id"]); ?>" enctype="multipart/form-data">
                <div class="box-body row">
					     <div class="col-lg-6 col-lg-12">
                         <?php $date1 = ($info["date"]=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info["date"])); ?>
                            <label for="exampleInputUsername">Ngày<span style="color:#EA3838">(*)<?php echo form_error('date'); ?></span></label>
                            <input type="text" id ="startdate" class="form-control timepicker" name="date" placeholder="Nhập ngày" value="<?php echo $date1; ?>">
                        </div>
                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Mã số mẫu<span style="color:#EA3838">(*)<?php echo form_error('macode'); ?></span></label>
                            <input type="text" class="form-control" id="macode" name="macode" placeholder="Nhập mã code" value="<?php echo $info['macode']; ?>">
                        </div>
                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Tên đơn vị yêu cầu<span style="color:#EA3838">(*)<?php echo form_error('com'); ?></span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="com" placeholder="Nhập tên  đơn vị yêu cầu" value="<?php echo $info['com']; ?>">
                        </div>

                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Địa chỉ</span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="address" placeholder="Nhập địa chỉ" value="<?php echo $info['address']; ?>">
                        </div>


                        <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Mã số thuế</span></label>
                            <input type="text" class="form-control" id="tax" name="tax" placeholder="Nhập MST" value="<?php echo $info['tax']; ?>">
                        </div>
						   <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Người đại diện</span></label>
                            <input type="text" class="form-control" id="buyer" name="buyer" placeholder="Nhập người đại diện" value="<?php echo $info['buyer']; ?>">
                        </div>
						 <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Chức vụ</span></label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Nhập chức vụ" value="<?php echo $info['role']; ?>">
                        </div>
                      	 <div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Điện thoại</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập điện thoại" value="<?php echo $info['phone']; ?>">
                        </div>
						<div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Fax</span></label>
                            <input type="text" class="form-control" id="fax" name="fax" placeholder="Nhập fax" value="<?php echo $info['fax']; ?>">
                        </div>
						<div class="col-lg-6 col-lg-12">
                            <label for="exampleInputUsername">Email</span></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Nhập email" value="<?php echo $info['email']; ?>">
                        </div>
                    <!-- /.box-body -->
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Chỉnh sửa lại thông tin</button>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Quay lại</a>
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
                            <div class="col-lg-2">
                                    <label>Số lượng</label>
                                    <input class="form-control" type="text" name="stt" id="stt" readonly value="<?php echo count($list); ?>"/>
                                </div>
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
                                                <!--<th>Phí thử nghiệm</th>-->
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
                                                  <!--<th style="padding: 2px 0;">8</th>-->
                                                <th style="padding: 2px 0;">8</th>
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
                                                    <td>

                                                    <input class="form-control" type="text" name='phi' id="name<?php echo $item['id'];?>" value="<?php echo $item['name']; ?>" placeholder='Nhập tên mẫu'/>

                                                    </td>
                                                    <td id="phi<?php echo $item['id'];?>">
                                                        <?php echo $item['chitieu']; ?>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="method<?php echo $item['id'];?>" value="<?php echo $item['method']; ?>" placeholder='Nhập tên mẫu'/>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="statusmau<?php echo $item['id'];?>" value="<?php echo $item['statusmau']; ?>" placeholder='Nhập tên mẫu'/>
                                                    </td>
                                                    <td>
                                                    <input class="form-control" type="text" id="mass<?php echo $item['id'];?>" value="<?php echo $item['mass']; ?>" placeholder='Nhập tên mẫu'/>

                                                    </td>
                                                    <td>
                                                    <input class="form-control" type="text" name='phi' id="code<?php echo $item['id'];?>" value="<?php echo $item['code']; ?>" placeholder='Nhập tên mẫu'/>

                                                    </td>
                                                <!--<td id="sum<?php// echo $item['id'];?>"><?php// echo $item['sum']; ?></td>
                                                    //<?php// $all=$all+$item['sum'];?>-->
                                                    <td>
                                                    <button class='btn btn-sm btn-primary btn-xs' data-toggle='modal' data-target='#myModal-criteria' onclick='LoadChitieu(<?php echo $item["id"];?>)'><i class='fa fa-plus'></i>Chỉ tiêu</button></br>
                                                        <button class="btn btn-danger btn-xs" onclick="EditMau(<?php echo $item['id'];?>,<?php echo $id;?>)"><i class="fa fa-plus" aria-hidden="true"></i>Luu</button></br>

                                                        <button class="btn btn-danger btn-xs" onclick="Delete(<?php echo $item['id'];?>,<?php echo $id;?>)"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                                    </td>
                                                </tr>
                                                <?php $stt++; $stt0++;
                                            }
                                    }
                                    ?>
                                            </tr>

                                            <tr>
                                                <td colspan="6" style="text-align: left;">Tổng cộng:</td>
                                                <td> <input class="form-control" type="text" name="method" id="sotien" value="<?php echo $item['sum']; ?>" placeholder="Nhập tên mẫu"/></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="text-align: left;">Số tiền viết bằng chữ:</td>
                                                <td><input class="form-control" type="text" name="method" id="method_sotienchu"  value="<?php echo $item['sum']; ?>" placeholder="Nhập tên mẫu"/></td>
                                                <td></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                    </div>
                    <!-- /.box-header -->



            </div>

    </div>

    <div class="col-xl-12">
        <div class="box">
            <div class="box-body row">
                <form role="form" method="post" action="<?php echo base_url($controllername."/addketqua/".$info["id"]); ?>" enctype="multipart/form-data">
						<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12 col-lg-12">
											<label>Số tiền tạm ứng</label>
											<input onchange="tinhTien()" id="tratruoc" type="text" class="form-control" name="khachhangtratruoc" placeholder="Nhập tên tiêu chuẩn/yêu cầu quy định" value="<?php echo $info['khachhangtratruoc']; ?>">
										</div>

									</div>
						</div>
                        <div class="col-lg-12 col-lg-12">
                            <label for="exampleInputUsername">Tổng số tiền cần thanh toán</span></label>
                            <input type="text" class="form-control" id="sum" name="sum" placeholder="Tổng số tiền khách cần thanh toán" value="<?php echo $info['sum']; ?>">
                        </div>


                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-lg-12">
                                    <label>Kết luận</label>
                                        <select name="ketluan" class="form-control" style="width: 100%;">
                                            <option <?php
                                            if ($info['ketluan'] == 1) {
                                                echo 'selected';
                                            }
                                            ?> value="1" >Có</option>
                                            <option  <?php
                                            if ($info['ketluan'] == 0) {
                                                echo 'selected';
                                            }
                                            ?> value="0">Không</option>

                                        </select>
                                </div>
                                <div class="col-lg-6 col-lg-12">
                                     <label>Tên tiêu chuẩn/yêu cầu quy định</label>
                                     <input type="text" class="form-control" name="tentieuchuan" placeholder="Nhập tên tiêu chuẩn/yêu cầu quy định" value="<?php echo $info['tentieuchuan']; ?>">
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-lg-12">
                                    <label>Ngày trả kết quả</label>
                                    <?php $ngaytraketqua = ($info['ngaytraketqua']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaytraketqua'])); ?>
                                    <input type="text" class="form-control timepicker" id="exampleInputUsername" name="ngaytraketqua" placeholder="Nhập ngày trả kết quả" value="<?php echo $ngaytraketqua; ?>">
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                     <label>Số bản KQ</label>
                                     <input type="text" class="form-control" name="sobankq" placeholder="Nhập số bản kết quả" value="<?php echo $info['sobankq']; ?>">
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                     <label>Nhận kết quả tại</label>
                                     <select name="nhanketqua" class="form-control" style="width: 100%;">
                                            <option <?php
                                            if ($info['nhanketqua'] == 1) {
                                                echo 'selected';
                                            }
                                            ?> value="1" >Trung tâm</option>
                                            <option  <?php
                                            if ($info['nhanketqua'] == 0) {
                                                echo 'selected';
                                            }
                                            ?> value="0">Bưu điện</option>

                                        </select>
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-lg-12">
                                     <label>Giao nhận mẫu</label>
                                     <select name="giaonhanmau" class="form-control" style="width: 100%;">
                                            <option <?php
                                            if ($info['giaonhanmau'] == 1) {
                                                echo 'selected';
                                            }
                                            ?> value="1" >Trực tiếp</option>
                                            <option  <?php
                                            if ($info['giaonhanmau'] == 0) {
                                                echo 'selected';
                                            }
                                            ?> value="0">Bưu điện</option>

                                        </select>
                                </div>
                                <div class="col-lg-4 col-lg-12">
                                    <label>Ngày dự kiến trả KQ</label>
                                    <?php $ngaydukien= ($info['ngaydukien']=='0000-00-00')?date("d/m/Y"):date("d/m/Y", strtotime($info['ngaydukien'])); ?>
                                    <input type="text" class="form-control timepicker" id="exampleInputUsername" name="ngaydukien" placeholder="Nhập ngày trả kết quả" value="<?php echo $ngaydukien; ?>">
                                </div>


                            </div>
                    </div>
                    <!-- /.box-body -->
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu trữ</button>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername."/"."Xembiennhan"."/".$info["id"]); ?>" target="_blank">Xem trước</a>
                        <a class="btn btn-danger" href=" <?php echo base_url($controllername.'/changestatus/'.$info['id']); ?>">Xác nhận</a>
                        <a class="btn btn-primary" href="<?php echo base_url($controllername); ?>">Quay lại</a>

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
<div class="modal fade" role="dialog" id="myModal-criteria">
	<div class="modal-dialog" role="document" style="width: 100%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close-popup" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div style="text-align: center" id="title">
					<h1 class="modal-title">Yếu tố thành phần chi tiết</h1>
				</div>

                <input type="text" style="display:none;" class="form-control" id="idmau1" placeholder="Nhập số bản kết quả" readonly>
			</div>
			<div class="modal-body">
                <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <div class="form-group" id="ds">
                                    <label>Loại chỉ tiêu</label>
                                   <!--<input class="form-control" type="text" name='typechitieu' id="typechitieu" value="" placeholder='Nhập tên chi tieu'/>-->
                                    <select id ="typechitieu" name="typechitieu" class="form-control select2" style="width: 100%">
                                        <option value="0">Chọn loại chỉ tiêu</option>
                                        <?php foreach ($categorys as $category) { ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                         <?php } ?>
                                        </select>

                                </div>
                            </div>
                            <div class="col-xs-4">

                                <div class="form-group">
                                    <label>Chỉ tiêu mẫu</label>
                                    <select name="chitieumau" id="chitieumau" class="form-control select2" style="width: 100%;">

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
                        <div class="col-xs-4">
                              <div class="form-group" id="ds">
                                  <label>Các mẫu thường dùng</label>
                                  <select name="mamauthuongdung" id="mamauthuongdung" class="form-control select2" style="width: 100%;">
                                    <?php  foreach ($listmau as $item) { ?>
                                            <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                                        <?php }
                                        ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-xs-4">
                              <div class="form-group" id="ds">
                                  <label>Tên mẫu</label>
                                  <input type="text" class="form-control" id="tenmaucosan" name="tenmaucosan" placeholder="Nhập tên mẫu có sẵn" value="">
                              </div>
                          </div>
                          <div class="col-xs-4">
                                <div class="form-group" id="ds">
                                    <label></label>
                                    </br>
                                    <button class='btn btn-sm btn-danger btn-flat' onclick="luuchitieumau()"><i class='fa fa-plus'></i>Lưu Mẫu</button>
                                    <button class='btn btn-sm btn-primary btn-flat' onclick="loaddsmaucosan()"><i class='fa fa-plus'></i>Load mẫu có sẵn</button>
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

                                      <!--<th>Giá</th>-->
                                        <th>Giá</th>
                                     </tr>
                                 </thead>
                                 <tbody id="NoiDungChitieu">
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td>Chưa có dữ liệu</td>
                                         <td></td>
                                         <td></td>
                                        <!-- <td></td>-->
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

<script>
function tinhTien() {

	console.log($("#sotien").val());
	var tienPhi = $("#sotien").val();
	var traTruoc = $("#tratruoc").val();
	if(traTruoc > tienPhi){
		alert("tiền trả trước ít hơn tiền phí");
	}else{
		var tien = tienPhi - traTruoc;
		$("#sum").val(tien);
	}

}
</script>
