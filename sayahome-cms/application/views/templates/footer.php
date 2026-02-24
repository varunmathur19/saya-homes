
           <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SayaHomes <?php echo date('Y'); ?></div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="confirm-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete?</h4>
        <input type="hidden" name="delete_id" id="delete_id" value="">
        <input type="hidden" name="delete_type" id="delete_type" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default remove">Yes</button>
        <button type="button" class="btn btn-primary" onclick="return $('#confirm-modal').modal('hide')">No</button>
      </div>
    </div>
  </div>
</div>
       
    </body>
    <!--<script src="https://cdn.ckeditor.com/4.18.0/basic/ckeditor.js"></script>-->
    <script src="<?php echo  base_url();?>assets/js/ckeditor/ckeditor.js"></script>
    <script>
    $( function() {

        $('#date').datepicker({
              dateFormat: 'yy-mm-dd',
              maxDate: new Date()
        });
        
        $("#year").datepicker({
            changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy',
                onClose: function(dateText, inst) { 
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, 1));
                }
        });
                
        $(document).on('click', '#navbarDropdown', function() {
            
            if($('.dropdown-menu').is(':visible')){
                $('.dropdown-menu').css('display','none');
            } else{
               $('.dropdown-menu').css('display','block'); 
            }
        });
        
        $(document).on('click', '.remove', function() {
            
            var $id = $('#delete_id').val();
            var $type = $('#delete_type').val();
            
            $.ajax({
                url: "<?php echo base_url() . 'general/remove'; ?>",
                type: "POST",
                data: {id : $id, type : $type},
                async: true,
                success: function (response) {
                    location.reload();
                }
            });
        });
        
        $('#confirm-modal').on('show.bs.modal', function(e) {

            var id = $(e.relatedTarget).data('id');
            var type = $(e.relatedTarget).data('type');
        
            //populate the textbox
            $(e.currentTarget).find('input[name="delete_id"]').val(id);
            $(e.currentTarget).find('input[name="delete_type"]').val(type);
        });
            CKEDITOR.replace( 'editor1' );
    });
    </script>
</html>
        
        
  