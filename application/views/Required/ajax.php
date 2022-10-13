<script src="<?php echo base_url(); ?>asserts//bower_components/moment/min/moment.min.js"></script>

<script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/dist/js/common.js"></script>
<script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
            ajaxlist(page_url=false);
            $('#chitieumau').select2();
            /*-- Search keyword--*/
            $(document).on('click', "#searchBtn", function(event) {
                ajaxlist(page_url=false);
                event.preventDefault();
            });

            /*-- Reset Search--*/
            $(document).on('click', "#resetBtn", function(event) {
                $("#search_key").val('');
                ajaxlist(page_url=false);
                event.preventDefault();
            });

            /*-- Page click --*/
            $(document).on('click', ".pagination li a", function(event) {
                var page_url = $(this).attr('href');
                ajaxlist(page_url);
                event.preventDefault();
            });

            /*-- create function ajaxlist --*/
            function ajaxlist(page_url = false)
            {
                var search_name = $("#name").val();
                var search_id = $("#id").val();
                var search_mst = $("#mst").val();

                var dataString = { name:search_name, id:search_id,mst:search_mst};
                var base_url = '<?php echo site_url('Required/index_ajax/') ?>';

                if(page_url == false) {
                    var page_url = base_url;
                }

                $.ajax({
                type: "POST",
                url: page_url,
                data: dataString,
                success: function(response) {
                   // console.log(response);
                    $("#ajaxContent").html(response);
                }
                });
            }


      });
</script>
<script type="text/javascript">
var idmau = 0;
var namemau="";
var tongtienallchitieu = 0;
var tongtienchitieu = 0;
var dsmauchitieu = [];
  $(function () {
       $('.timepicker').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
      });
		$('.select2').select2();
        $('#chitieumau').on('change', function () {
            $('#typechitieu').val($('select#chitieumau option:selected').html().trim());

        });
       $('#typechitieu').on('change', function () {
            LoaddetailChitieu(this.value);
        });

});
var maso=parseInt($('#stt').val());
function Addmau(id) {

        var name = $('#name').val();
        var method = $('#method').val();
        var macode = $('#macode').val();
        var statusmau = $('#statusmau').val();
        var massmau =  $('#massmau').val();
        var stt = maso+1;
        $.ajax({
            url     : '<?php echo base_url($load.'/luumau'); ?>',
            type    : 'POST',
            data: {id: id, name: name,macode:macode, method:method, statusmau:statusmau, massmau:massmau,stt:stt },
            success: function(data)
                {

                      var optObj = JSON.parse(data);
                      SetListBienLai01(optObj)
                }
         });
      //  SetListBienLai01();

}

function LoadChitieu(id) {
       // var idname = $("#name"+id).text();
       // var code = $("#code"+id).text();
        var idname = $("#name"+id).val();
        var code = $("#code"+id).val();
        $("#idmau1").val(id);
        $('#title').html('<h1 class="modal-title">'+code+"-"+idname +'</h1>');
        $.ajax({
            url     : '<?php echo base_url($load.'/loadchitieu'); ?>',
            type    : 'POST',
            data: {id: id},
            success: function(data)
                {
                      var optObj = JSON.parse(data);
                      SetListChitieu(optObj)
                }
         });
      //  SetListBienLai01();

}

function SetListBienLai01(listchitietphi) {
    var html = "";
    var stt = 1;
    var tongtienchitieu = 0;
    //console.log(datasettablebl);
    for (i = 0; i < listchitietphi.length; i++) {

        html += "<tr>";

        html += "<td>" + stt + "</td>";
        html += "<td><input class='form-control' type='text' name='phi' id='name"+ listchitietphi[i]["id"] + "' value='" + listchitietphi[i]["name"]+"' placeholder='Nhập tên mẫu'/></td>";
        html += "<td id='phi"+listchitietphi[i]["id"]+"'>" + listchitietphi[i]["chitieu"] + "</td>";
        html += "<td><input class='form-control' type='text' id='method"+ listchitietphi[i]["id"] +"' value='" + listchitietphi[i]["method"]+"' placeholder='Nhập tên mẫu'/></td>";
        html += "<td><input class='form-control' type='text' id='statusmau"+ listchitietphi[i]["id"] +"' value='" + listchitietphi[i]["statusmau"]+"' placeholder='Nhập tên mẫu'/></td>";
        html += "<td><input class='form-control' type='text' id='mass"+ listchitietphi[i]["id"] +"' value='" + listchitietphi[i]["mass"]+"' placeholder='Nhập tên mẫu'/></td>";
        html += "<td><input class='form-control' type='text' id='code"+ listchitietphi[i]["id"] +"' value='" + listchitietphi[i]["code"]+"' placeholder='Nhập tên mẫu'/></td>";
      //  html += "<td><label id='sum"+listchitietphi[i]["id"]+"'>" + listchitietphi[i]["sum"]+ "</label></td>"
        tongtienchitieu =tongtienchitieu + parseInt(listchitietphi[i]["sum"]);
        console.log(tongtienchitieu);

        html +="<td><button class='btn btn-sm btn-primary btn-flat' data-toggle='modal' data-target='#myModal-criteria' onclick='LoadChitieu("+listchitietphi[i]["id"]+")'><i class='fa fa-plus'></i>Chỉ tiêu</button></br>"
        html += "<button class='btn btn-danger btn-xs' onclick='EditMau("+listchitietphi[i]["id"]+","+listchitietphi[i]["mathunghiem"]+")'><i class='fa fa-plus' aria-hidden='true'></i>Lưu</button></br>"
        html += "<button class='btn btn-danger btn-xs' onclick='Delete("+listchitietphi[i]["id"]+","+listchitietphi[i]["mathunghiem"]+")'><i class='fa fa-trash-o' aria-hidden='true'></i>Xóa</button></td>";
        html +="</tr>";
        stt++;
    }
    html += "<tr>";
    html += "<td colspan='6' style='text-align: left;'>Tổng tiền</td>";
    html += "<td style='text-align: left'>"+formatNumber(tongtienchitieu, ',', '.')+"</td>";
    html += "<td style='text-align: left'></td>";
    html += "</tr>"
    html += "<tr>";
    html += "<td colspan='6' style='text-align: left;'>Đọc bằng chữ</td>";
    html += "<td style='text-align: left;'>"+ convertCharacterNumber.doc(tongtienchitieu) + "</td>";
    html += "<td style='text-align: left;'></td>";
    html +="</tr>"
    maso=parseInt(listchitietphi.length);

    $("#NoiDungTableBienLai").html(html);
}


function EditMau(id,idmau){
    var name = $('#name'+id).val();
    var method = $('#method'+id).val();
    var statusmau = $('#statusmau'+id).val();
    var massmau =  $('#mass'+id).val();
    var codemau =  $('#code'+id).val();

    console.log(name);
    $.ajax({
            url     : '<?php echo base_url($load.'/Editmau'); ?>',
            type    : 'POST',
            data: {id: id, name: name,method:method, statusmau:statusmau, massmau:massmau,idmau:idmau,code: codemau},
            success: function(data)
                {
                     alert("Thành công");
                     // var optObj = JSON.parse(data);
                      //SetListBienLai01(optObj)
                }
         });
}



function Delete(id, idmau){
    $.ajax({
            url     : '<?php echo base_url($load.'/deletemau'); ?>',
            type    : 'POST',
            data: {id:id,idmau:idmau},
            success: function(data)
                {var optObj = JSON.parse(data);
                    SetListBienLai01(optObj);
                }
         });
}


//Load chi tiết chỉ tiêu
function LoaddetailChitieu(id) {
   console.log(id);
   $.ajax({
       url     : '<?php echo base_url($load.'/loaddetailchitieu'); ?>',
       type    : 'POST',
       data: {id: id},
       success: function(data)
           {
            var optObj = JSON.parse(data);
            html="";
                 var optObj = JSON.parse(data);
                 for (i = 0; i < optObj.length; i++) {
                    html += "<option value=" +  optObj[i]["id"] + ">" +  optObj[i]["name"]+"</option>";

                }

               $('#chitieumau').select2('destroy').html(html).prop('disable', true).select2();
              // SetListChitieu(optObj);
           }
    });
 //  SetListBienLai01();

}

function bosungchitieu(){
    var chitieu = $('#typechitieu').val();
    var chitieumau = $('#chitieumau').val();
    var id = $('#idmau1').val();
    idmau = id;
    if(chitieu!=""){
        $.ajax({
                url     : '<?php echo base_url($load.'/bosungchitieu'); ?>',
                type    : 'POST',
                data: {id: id,chitieu:chitieu, chitieumau:chitieumau },
                success: function(data)
                    {
                        var optObj = JSON.parse(data);
                        SetListChitieu(optObj);
                    }
        });
    } else {
        alert("Moi ban nhap ten chi tieu");
    }
}
function luuchitieumau(){
    var tenmaucosanchitieu = $('#tenmaucosan').val();
    console.log(tenmaucosanchitieu);
    console.log(dsmauchitieu);
    if(tenmaucosanchitieu!=""){
        $.ajax({
                url     : '<?php echo base_url($load.'/luuchitieumau'); ?>',
                type    : 'POST',
                data: {tenmau: tenmaucosanchitieu, dschitiet:JSON.stringify(dsmauchitieu)},
                success: function(data)
                    {
                        html="";
                        var optObj = JSON.parse(data);
                        for (i = 0; i < optObj.length; i++) {
                            html += "<option value=" +  optObj[i]["id"] + ">" +  optObj[i]["name"]+"</option>";

                        }
                        $('#mauthuongdung').select2('destroy').html(html).prop('disable', true).select2();
                    }
        });
    } else {
        alert("Moi ban nhap tên mẫu có sẵn");
    }
}
function loaddsmaucosan(){
    var mauthuongdung = $('select#mamauthuongdung option:selected').val();
    console.log(mauthuongdung);
    var id = $('#idmau1').val();
    idmau = id;
        $.ajax({
                url     : '<?php echo base_url($load.'/loaddsmaucosan'); ?>',
                type    : 'POST',
                data: {id: id, mauthuongdung:mauthuongdung},
                success: function(data)
                {var optObj = JSON.parse(data);
                      SetListChitieu(optObj);
                }
        });

}
function DeleteChitieu(id,idmau1){
    idmau = idmau1;
    $.ajax({
            url     : '<?php echo base_url($load.'/deletechitieu'); ?>',
            type    : 'POST',
            data: {id:id, idmau:idmau1},
            success: function(data)
                {var optObj = JSON.parse(data);
                      SetListChitieu(optObj);
                }
         });
}
function SetListChitieu(listchitietphi) {
    var html = "";
    var listchitiet = "<ul>";
    var listbiennhan=""
    var stt = 1;
    var stt1 =0;
    dsmauchitieu = [];
    tongtienchitieu = 0;
    //console.log(datasettablebl);
    for (i = 0; i < listchitietphi.length; i++) {
        var thanhtien = 0;
        html += "<tr>";
        html += "<td>" + stt + "</td>";
        html += "<td>"+ "<sup>"+listchitietphi[i]["note"]+"</sup>" + listchitietphi[i]["name"]+ "</td>";
        listchitiet += "<li>"+"<sup>"+listchitietphi[i]["note"]+"</sup>"+ listchitietphi[i]["name"]+ "</li>";
        listbiennhan += ",<sup>"+listchitietphi[i]["note"]+"</sup>"+listchitietphi[i]["name"];
        html += "<td>" + listchitietphi[i]["method"] + "</td>";
        html += "<td>" + listchitietphi[i]["mass"] + "</td>";
        html += "<td>" + listchitietphi[i]["price"] + "</td>";
        tongtienchitieu =tongtienchitieu + parseInt(listchitietphi[i]["price"]);
        html += "<td><button class='btn btn-danger btn-xs' onclick='DeleteChitieu("+listchitietphi[i]["id"]+","+listchitietphi[i]["tenmau"]+")'><i class='fa fa-trash-o' aria-hidden='true'></i> Xóa</button></td>";
        stt++;
        stt1++;
        var newthongtin = {
            id: listchitietphi[i]["id"],
            name: listchitietphi[i]["name"],
            note: listchitietphi[i]["note"],
            method: listchitietphi[i]["method"],
            mass: listchitietphi[i]["mass"],
            price: listchitietphi[i]["price"],
            tenmau:listchitietphi[i]["tenmau"]
        };
        dsmauchitieu.push(newthongtin);
        html += "</tr>";
    }
    listchitiet += "</ul>";
    html += "<tr>";
    html += "<td colspan='4' style='text-align: left;'>Tổng tiền</td>";
    html += "<td style='text-align: left;'><span id='TongCongSoTien'>"+formatNumber(tongtienchitieu, ',', '.')+"</span></td>";
    html += "<td style='text-align: left;'></td>";
    html +="</tr>"
    html += "<tr>";
    html += "<td colspan='4' style='text-align: left;'>Đọc bằng chữ</td>";
    html += "<td style='text-align: left;'>"+convertCharacterNumber.doc(tongtienchitieu)+"</td>";
    html += "<td style='text-align: left;'></td>";
    html +="</tr>"
    $("#NoiDungChitieu").html(html);
    // console.log(dsmauchitieu);
	$("#sotien").val(tongtienchitieu);
	$("#method_sotienchu").val(convertCharacterNumber.doc(tongtienchitieu));

    $("#sum"+idmau).empty();
   $("#sum"+idmau).append(tongtienchitieu);
    $("#phi"+idmau).html(listchitiet);
    calculate(idmau,tongtienchitieu,listchitiet,listbiennhan);
}


function calculate(id,tongtienchitieu,listchitiet,listbiennhan){
    console.log(id);
    /*console.log(tongtienchitieu);
    console.log(listchitiet);
    console.log(listbiennhan);*/
    $.ajax({
            url     : '<?php echo base_url($load.'/calculate'); ?>',
            type    : 'POST',
            data: {id:id,tongtienchitieu:tongtienchitieu,listchitiet: listchitiet,listbiennhan:listbiennhan},
            success: function(data){
               console.log(data);
            }
         });
}

function Search(){
    var id = $('#id').val();
    var name = $('#name').val();
    var mst = $('#mst').val();
    $.ajax({
            url     : '<?php echo base_url($load.'/search'); ?>',
            type    : 'POST',
            data: {id:id,name:name,mst:mst},
            success: function(data){
                listsearch(data);
            }
    });
}

// Định dạng tiền tệ
function formatNumber(nStr, decSeperate, groupSeperate) {
    nStr += '';
    x = nStr.split(decSeperate);
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
    }
    return x1 + x2;
}

</script>
