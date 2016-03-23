<div class="right_col" role="main">
<div class="row">
                        <!-- <div class="col-md-6 col-xs-12"> -->
                            <div class="page-title">
                        <div class="title_left">
                            <h3>เพิ่มข้อมูลการจัดงาน</h3>
                        </div>
                        
                    </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Event Information <small>เพิ่มข้อมูลการจัดงาน</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                    <br />
                                    <?php echo form_open('event_controller/addevent') ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="event_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="ชื่องาน">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="event_location" class="form-control has-feedback-left" id="inputSuccess2" placeholder="สถานที่จัดงาน">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="date" name="date_from" class="form-control has-feedback-left" id="inputSuccess2" >
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="date" name="date_to" class="form-control has-feedback-left" id="inputSuccess2" >
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <a href="<?php echo site_url('event_controller/list_event_master');?>" class="btn btn-primary" role="button">Cancle</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div> 
                                    </form>
                                    