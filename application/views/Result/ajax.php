<script src="<?php echo base_url(); ?>asserts//bower_components/moment/min/moment.min.js"></script>

<script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/dist/js/common.js"></script>
<script type="text/javascript">
var idmau = 0;
var namemau="";
var tongtienchitieu = 0;
  $(function () {
             ajaxlist(page_url=false);
            
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
              
                var search_id = $("#id").val();
                var search_mst = $("#mst").val();
           
                var dataString = { id:search_id,mst:search_mst}; 
                var base_url = '<?php echo site_url('Transfer/index_ajax/') ?>';
                
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

       $('.timepicker').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
      });
		$('.select2').select2();           
       $('#typechitieu').on('change', function () {
        LoaddetailChitieu(this.value);
        });     

});

function SaveMau(id){
    var name = $('#name'+id).val();
    var method = $('#method'+id).val();
    var massmau =  $('#mass'+id).val();
    var result = $('#result'+id).val();
    var phi = $('#phi'+id).val();
    console.log(name);
    $.ajax({
            url     : '<?php echo base_url($load.'/EditChitieu'); ?>',
            type    : 'POST',
            data: {id: id, name: name,method:method,massmau:massmau,result:result,phi:phi},
            success: function(data)
                {   console.log(data);
                    alert("Thành công");
                      
                }
    });
}


function getChiso(id) {
   
   var id1 = $('#quydinh'+id).val();
    if(id1!=0){
        $.ajax({
                    url     : '<?php echo base_url($load.'/Changechiso'); ?>',
                    type    : 'POST',
                    data: {id: id1},
                    success: function(data)
                        {
                            html="";
                            var optObj = JSON.parse(data);
                            html += "<option value='0'>Chọn chỉ số</option>";
                            for (i = 0; i < optObj.length; i++) {
                                html += "<option value=" +  optObj[i]["id"] + ">" +  optObj[i]["chiso"]+"</option>";
                                
                            }
                            console.log(html);
                            $('#chiso'+id).html(html);
                        }
                });
    } else {
        alert("Bạn chưa chọn thông tư");
    }
 //  SetListBienLai01();

}


function getChisoCon(id) {
   
   var id1 = $('#chiso'+id).val();
    if(id1!=0){
        $.ajax({
                    url     : '<?php echo base_url($load.'/Changechisocon'); ?>',
                    type    : 'POST',
                    data: {id: id1},
                    success: function(data)
                        {
                            html="";
                            var optObj = JSON.parse(data);
                            console.log(optObj);
                            html += "<option value='0'>Chọn chỉ số</option>";
                            html += "<option value='1'>" +  optObj["chisodau"]+"</option>";
                            html += "<option value='2'>" +  optObj["chisocuoi"]+"</option>";
                            console.log(data);
                            $('#chisocon'+id).html(html);
                        }
                });
    } else {
        alert("Bạn chưa chọn chỉ số");
    }
 //  SetListBienLai01();

}

function Savechiso(id) {
   
    var id1 = $('#chisocon'+id ).val();
  
   var result = $('#chisocon'+id +' option:selected').text();
    if(id1!=0){
        $.ajax({
                    url     : '<?php echo base_url($load.'/Savechiso'); ?>',
                    type    : 'POST',
                    data: {id: id,result:result},
                    success: function(data)
                        {
                           $('#phi'+id).val($('#chisocon'+id +' option:selected').text());
                        }
                });
    } else {
        alert("Bạn chưa chọn chỉ số");
    }
 //  SetListBienLai01();

}





function Xacnhan(id) {
    var r = confirm("Bạn có chắc chắn các thông tin ở trên là đúng!");
    if (r == true) {
    
       $.ajax({
                   url     : '<?php echo base_url($load.'/Xacnhan'); ?>',
                   type    : 'POST',
                   data: {id: id},
                   success: function(data)
                       {
                         alert('Xác nhận thành công');
                       }
               });
   } else {
       alert("Bạn chưa chọn chỉ số");
   }
//  SetListBienLai01();

}






</script>