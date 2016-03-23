<div class="right_col" role="main">
    <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>เพิ่มข้อมูลตำแหน่งงาน</h3>
                        </div>                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Job Position Detail <small>เพิ่มข้อมูลตำแหน่งงานที่เปิดรับสมัคร</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <?php echo form_open('job_controller/addjob_position'); ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">ตำแหน่ง </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="job_name" class="select2_single form-control" tabindex="-1">
                                                    <option value=""><?php foreach ($this->job_model->getjob() as $row) 
                                                    {                      
                                                          echo "<option value=".$row['id_job'].">".$row['job_name']."</option>";  
                                                                          
                                                        ;
                                                    } 
                                                     ?></option>                                                                                                       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">สาขา </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <?php foreach ($this->major_model->getmajor() as $row) 
                                                    {                      
                                                          echo "<label>";  
                                                            echo "&nbsp;";
                                                            echo "<input type='checkbox'  class='js-switch' name='major_name[]' value=".$row['id_major'].">";
                                                            echo "&nbsp;";
                                                            echo $row['major_name'];
                                                          echo "</label";
                                                                          
                                                        ;
                                                    } 
                                                     ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">บริษัท/หน่วยงาน </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="company_name" class="select2_single form-control" tabindex="-1">
                                                    <option value=""><?php foreach ($this->company_model->getcompany() as $row) 

                                                    {                      
                                                      echo "<option value=".$row['id_company'].">".$row['company_name']."</option>";  
                                                                      
                                                    ;} 
                                                ?></option>                                                  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">จำนวนที่รับสมัคร </label>
                                            <input type="text" name="amount" class="form-control has-feedback-left" id="inputSuccess2" placeholder="กรอกเฉพาะตัวเลข เช่น 4">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">สถานที่ปฎิบัติงาน </label>
                                            <input type="text" name="work_place" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">เงินเดือน </label>
                                            <input type="text" name="salary" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">เพศ </label>
                                            <input type="text" name="sex" class="form-control has-feedback-left" id="inputSuccess3" placeholder="ชาย หญิง">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">อายุ </label>
                                            <input type="text" name="age" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ระดับการศึกษา </label>
                                            <input type="text" name="education" class="form-control has-feedback-left" id="inputSuccess4" placeholder="เช่น ปริญญาตรี อุดมศึกษา ">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div> 
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ความสามารถพิเศษ </label>
                                            <textarea name="skill" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">
                                            </textarea>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">รายละเอียดอื่น ๆ </label>
                                            <textarea name="detail" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">
                                            </textarea><br>
                                        </div>
                                        
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>