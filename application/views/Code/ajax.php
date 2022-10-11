<script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>asserts/bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
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
                var search_name = $("#search_name").val();
                var search_id = $("#search_id").val();
                var search_category = $("#search_category").val();
                var dataString = { search_name:search_name, search_id:search_id,search_category:search_category}; 
                var base_url = '<?php echo site_url('Code/index_ajax/') ?>';
                
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
                    dateFormat: 'yy-mm-dd'
                });
                $('.select2').select2();
                $('#category').on('change', function () {
                    var data = this.value;
                    LoaddetailChitieu(data);

                });
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
                                
                                $('#method').select2('destroy').html(html).prop('disable', true).select2();
                                // SetListChitieu(optObj);
                            }
                        });
                    //  SetListBienLai01();

                    }
            });
        </script>