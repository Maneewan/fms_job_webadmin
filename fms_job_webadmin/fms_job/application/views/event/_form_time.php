<div class="right_col" role="main">
    <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>ประวัติการจัดงานแต่ละครั้ง</h3>
                        </div>                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Event Time Detail<small>ประวัติการจัดงานแต่ละครั้ง</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <?php echo form_open('event_controller/addevent_time'); ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                         <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">ชื่องาน </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="event_name" class="select2_single form-control" tabindex="-1">
                                                    <option value=""><?php foreach ($this->event_model->getEvent() as $row) 
                                                    {                      
                                                          echo "<option value=".$row['event_no'].">".$row['event_name']."</option>";  
                                                                          
                                                        ;
                                                    } 
                                                     ?></option>                                                                                                       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">หน่วยงานที่เข้าร่วม </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <?php foreach ($this->company_model->getCompany() as $row) 
                                                    {                      
                                                          echo "<label>";  
                                                            echo "&nbsp;";
                                                            echo "<input type='checkbox'  class='js-switch' name='company_name[]' value=".$row['id_company'].">";
                                                            echo "&nbsp;";
                                                            echo $row['company_name'];
                                                            echo '</br>';
                                                          echo "</label";
                                                                          
                                                        ;
                                                    } 
                                                     ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">สถานที่ตั้งบูธ </label>
                                                <input type="text" name="location_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Location Name">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                                                                
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <a href="<?php echo site_url('event_controller/list_event');?>" class="btn btn-primary" role="button">Cancel</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                    
                            </div>
                        </div>
                    </div>

                    
                 