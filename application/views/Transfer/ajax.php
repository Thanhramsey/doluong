<script src="<?php echo base_url(); ?>asserts//bower_components/moment/min/moment.min.js"></script>

<script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/dist/js/common.js"></script>
<script type="text/javascript">
var idmau = 0;
var namemau="";
var tongtienchitieu = 0;
  $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
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

function Save(id) {
   
        var result = $('#phi'+id).val();
        var name = $("#name"+id).val();
        var mass = $("#mass"+id).val();
        console.log(mass);
        var method = $("#method"+id).val();
        var note = $("#note"+id).val();
       $.ajax({
            url     : '<?php echo base_url($load.'/saveresult'); ?>',
            type    : 'POST',
            data: {id: id, result: result, name: name, mass: mass, method:method,note:note },
            success: function(data)
                {
                    alert("Lưu thành công");
                }
         });
      //  SetListBienLai01();
    
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
            
               $('.chitieu').select2('destroy').html(html).prop('disable', true).select2();
              // SetListChitieu(optObj);
           }
    });
 //  SetListBienLai01();

}


function LoadTransferChitieu(id) {
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
            
               $('.chitieu').select2('destroy').html(html).prop('disable', true).select2();
              // SetListChitieu(optObj);
           }
    });
 //  SetListBienLai01();

}

function Getchitieu(id){
   
    var result = $("#chitieu"+id).val();
    console.log(result);
   $.ajax({
       url     : '<?php echo base_url($load.'/LoadTransferChiTieu'); ?>',
       type    : 'POST',
       data: {id: result},
       success: function(data)
           {
             var optObj = JSON.parse(data);
             console.log(optObj);
             $("#name"+id).val(optObj["name"]);
             $("#mass"+id).val(optObj["mass"]);
             $("#mass"+id).val(optObj["mass"]);
             $("#method"+id).val(optObj["method"]);
             $("#note"+id).val(optObj["note"]);
           }
    });
}

</script>