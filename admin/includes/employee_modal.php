<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>إضافة موظف</b></h4>
          	</div>
            <div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                <div class="col-sm-11">
                    	<input type="text" class="form-control " id="firstname" name="firstname" required>
                  	</div>
                  	<label for="firstname" class=" control-label">الاسم</label>
                  </div>
                <div class="form-group">
                <div class="col-sm-11">
                    	<input type="text" class="form-control" id="lastname" name="lastname" required>
                  	</div>
                  	<label for="lastname" class="control-label">اللقب</label>
                </div>
                <div class="form-group">

                <div class="col-sm-11">
                      <textarea class="form-control" name="address" id="address"></textarea>
                  	</div>
                  	<label for="address" class="control-label">العنوان</label>
                </div>

                <div class="form-group">
                
                      <div class="col-sm-10 date">
                        <input type="text" class="form-control" id="datepicker_add" name="birthdate">
                        </div>
                  	<label for="datepicker_add" class=" control-label">تاريخ الميلاد</label>
                    
                    
                </div>

                <div class="form-group">
                <div class="col-sm-10">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                    <label for="contact" class=" control-label">معلومات الاتصال</label>

                  
                </div>


                <div class="form-group">
                <div class="col-sm-11"> 
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>- اختيار -</option>
                        <option value="Male">ذكر</option>
                        <option value="Female">أنثى</option>
                      </select>
                    </div>
                    <label for="gender" class=" control-label">الجنس</label>

                   
                </div>
                <div class="form-group">
                <div class="col-sm-11">
                      <select class="form-control" name="position" id="position" required>
                        <option value="" selected>- اختيار -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                    <label for="position" class="control-label">الوظيفة</label>
                </div>
                <div class="form-group">
                <div class="col-sm-11">
                      <select class="form-control" id="schedule" name="schedule" required>
                        <option value="" selected>- اختيار -</option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                    <label for="schedule" class=" control-label">الجدول</label>
                </div>
                <div class="form-group">

                <div class="col-sm-11">
                      <input type="file" name="photo" id="photo">
                    </div>
                    <label for="photo" class=" control-label">الصورة</label>
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
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                <div class="col-sm-11">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                    <label for="edit_firstname" class=" control-label">الاسم</label>
                </div>
                <div class="form-group">
                <div class="col-sm-11">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                    <label for="edit_lastname" class=" control-label">اللقب</label>
                </div>
                <div class="form-group">
                <div class="col-sm-11">
                      <textarea class="form-control" name="address" id="edit_address"></textarea>
                    </div>
                    <label for="edit_address" class="control-label">العنوان</label>
                </div>
                <div class="form-group">
                      <div class="col-sm-10 date">
                        <input type="text" class="form-control" id="datepicker_edit" name="birthdate">
                      </div>
                    
                    <label for="datepicker_edit" class="control-label">تاريخ الميلاد</label>
                </div>
                <div class="form-group">
                <div class="col-sm-10">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                    <label for="edit_contact" class="control-label">معلومات الاتصال</label>

                    
                </div>
                <div class="form-group">
                <div class="col-sm-11"> 
                      <select class="form-control" name="gender" id="edit_gender">
                        <option selected id="gender_val"></option>
                        <option value="Male">ذكر</option>
                        <option value="Female">أنثى</option>
                      </select>
                    </div>
                    <label for="edit_gender" class="control-label">الجنس</label>
                </div>
                <div class="form-group">
                <div class="col-sm-11">
                      <select class="form-control" name="position" id="edit_position">
                        <option selected id="position_val"></option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                    <label for="edit_position" class="control-label">الوظيفة</label>
                </div>
                <div class="form-group">
                <div class="col-sm-11">
                      <select class="form-control" id="edit_schedule" name="schedule">
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                    <label for="edit_schedule" class="control-label">الجدول</label>
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
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>حذف الموظف</p>
	                	<h2 class="bold del_employee_name"></h2>
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

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">الصورة</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> تحديث</button>
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> إغلاق</button>
              </form>
            </div>
        </div>
    </div>
</div>    