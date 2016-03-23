<div class="right_col" role="main">
<div class="container"> 
  
    <fieldset><legend>Update Job &nbsp; <i class="glyphicon glyphicon-briefcase"></i></legend></fieldset>

<?php echo form_open('job_controller/updateJobPosition/'.$list[0]->id_job_position); ?>
    <form class="form-horizontal form-label-left input_mask">
            <form class="form-horizontal form-label-left input_mask">
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">ตำแหน่ง </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="job_name" class="select2_single form-control" tabindex="-1">
                                                    <?php foreach ($this->job_model->getjob() as $row) 
                                                    {      
                                                        if($list[0]->id_job==$row['id_job'])echo "<option value=".$row['id_job']." selected>".$row['job_name']."</option>";  
                                                        else echo "<option value=".$row['id_job']." >".$row['job_name']."</option>";               
                                                    } 
                                                    ?>                                                                                                     
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">สาขา </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <?php foreach ($this->major_model->getmajor() as $row) 
                                                    { ?>                   
                                                           <label>
                                                            <input type='checkbox'  class='js-switch' name='major_name[]' value="<?php echo $row['major_name']; ?>" 
                                                            <?php foreach($list as $value){  
                                                            if($value->id_major == $row['id_major'] ){
                                                            echo "checked";
                                                            }
                                                            } ?>    >
                                                           <?php echo $row['major_name']; ?>
                                                          </label>
                                                            
                                                    <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">บริษัท/หน่วยงาน </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="company_name" class="select2_single form-control" tabindex="-1">
                                                    <?php foreach ($this->company_model->getcompany() as $row) 
                                                    {         
                                                    if($list[0]->id_company==$row['id_company'])echo "<option value=".$row['id_company']." selected>".$row['company_name']."</option>";  
                                                    else echo "<option value=".$row['id_company']." >".$row['company_name']."</option>";             
                                                    ;} 
                                                ?></option>                                                  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">จำนวนที่รับสมัคร </label>
                                            <input type="text" name="amount" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $list[0]->amount; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">สถานที่ปฎิบัติงาน </label>
                                            <input type="text" name="work_place" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $list[0]->work_place; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">เงินเดือน </label>
                                            <input type="text" name="salary" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $list[0]->salary; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">เพศ </label>
                                            <input type="text" name="sex" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $list[0]->sex; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">อายุ </label>
                                            <input type="text" name="age" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $list[0]->age; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ระดับการศึกษา </label>
                                            <input type="text" name="education" class="form-control has-feedback-left" id="inputSuccess4" value="<?php echo $list[0]->education; ?>">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div> 
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ความสามารถพิเศษ </label>
                                            <textarea name="skill" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;" ><?php echo $list[0]->skill; ?> 
                                            </textarea>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">รายละเอียดอื่น ๆ </label>
                                            <textarea name="detail" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;" ><?php echo $list[0]->detail; ?>
                                            </textarea><br>
                                        </div>
                                        
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <a href="<?php echo site_url('job_controller/list_position');?>" class="btn btn-primary" role="button">Cancel</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>            

    </form>

              


<style type="text/css">
#file1 {
    display: none;
}
</style>

<script type="text/javascript">
$('#btn').click(function () {
    $('#file1').click();
});

$('input[type=file]').change(function () {
      console.dir(this.files[0])
      $('#txtFile').val(this.files[0].name);
});

$('#btn').click(function () {
    $('#file1').click();
});

$('input[type=file]').change(function () {
      console.dir(this.files[0])
      $('#txtFile').val(this.files[0].name);
});

</script>