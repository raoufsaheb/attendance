<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>إضافة خصم</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="deduction_add.php">
          		  <div class="form-group">
                  	<label for="description" class="col-sm-3 control-label">الوصف</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="description" name="description" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">المبلغ</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="amount" name="amount" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> إغلاق</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> حفظ</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>تحديث الخصم</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="deduction_edit.php">
            		<input type="hidden" class="decid" name="id">
                <div class="form-group">
                    <label for="edit_description" class="col-sm-3 control-label">الوصف</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_description" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-3 control-label">المبلغ</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_amount" name="amount">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> إغلاق</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> تحديث</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>جاري الحذف...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="deduction_delete.php">
            		<input type="hidden" class="decid" name="id">
            		<div class="text-center">
	                	<p>حذف الخصم</p>
	                	<h2 id="del_deduction" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> إغلاق</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> حذف</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     