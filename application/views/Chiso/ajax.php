<script type="text/javascript">
  function AddChiso(id) {
   
        var chiso = $('#chiso').val();
        var chisodau = $('#chisodau').val();
        var chisocuoi = $('#chisocuoi').val();
        var chisoba =  $('#chisoba').val();
        $.ajax({
            url     : '<?php echo base_url($load.'/savechiso'); ?>',
            type    : 'POST',
            data: {code: id, chiso: chiso,chisodau:chisodau, chisocuoi:chisocuoi,chisoba:chisoba},
            success: function(data)
                {
                        
                        var optObj = JSON.parse(data);
                        SetTable(optObj)
                }
            });
 //  SetListBienLai01();

    }

    function Edit(id,code) {
        var chiso = $('#chiso'+id).val();
        var chisodau = $('#chisodau'+id).val();
        var chisocuoi = $('#chisocuoi'+id).val();
        var chisoba =  $('#chisoba'+id).val();
        $.ajax({
            url     : '<?php echo base_url($load.'/editchiso'); ?>',
            type    : 'POST',
            data: {id: id, chiso: chiso,chisodau:chisodau, chisocuoi:chisocuoi,chisoba:chisoba, code:code},
            success: function(data)
                {
                        
                        var optObj = JSON.parse(data);
                        SetTable(optObj)
                }
            });

    }

    
    function Delete(id,code) {
       
        $.ajax({
            url     : '<?php echo base_url($load.'/deletechiso'); ?>',
            type    : 'POST',
            data: {id: id,code:code},
            success: function(data)
                {
                        
                        var optObj = JSON.parse(data);
                        SetTable(optObj)
                }
            });

    }

    function SetTable(listtable) {
        var html = "";
        var stt = 1;
        var tongtienchitieu = 0;
        //console.log(datasettablebl);
        for (i = 0; i < listtable.length; i++) {
        
            html += "<tr>";
 
            html += "<td><input class='form-control' type='text' id='chiso"+listtable[i]["id"]+"' value="+listtable[i]["chiso"]+ "></td>";
            html += "<td><input class='form-control' type='text' id='chisodau"+listtable[i]["id"]+"' value="+listtable[i]["chisodau"]+ "></td>";
            html += "<td><input class='form-control' type='text' id='chisocuoi"+listtable[i]["id"]+"' value="+listtable[i]["chisocuoi"]+ "></td>";
            html += "<td><input class='form-control' type='text' id='chisoba"+listtable[i]["id"]+"' value="+listtable[i]["chisoba"]+ "></td>";

            html += "<td><button class='btn btn-danger btn-xs' onclick='Edit("+listtable[i]["id"]+","+listtable[i]["code"]+")'><i class='fa fa-edit-o' aria-hidden='true'></i>Sửa</button>";
            html += "<button class='btn btn-danger btn-xs' onclick='Delete("+listtable[i]["id"]+","+listtable[i]["code"]+")'><i class='fa fa-trash-o' aria-hidden='true'></i>Xóa</button></td>";
                 
            html +="</tr>";
            stt++;
        }
        
        $("#example3").html(html);
 
    }

</script>