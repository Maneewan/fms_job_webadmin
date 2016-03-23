<div class="right_col" role="main">
<div class="row">
                        <!-- <div class="col-md-6 col-xs-12"> -->
                            <div class="page-title">
                        <div class="title_left">
                            <h3>เพิ่มสาขา</h3>
                        </div>
                        
                    </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Major Name <small>เพิ่มชื่อสาขา</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                    <br />
                                    <?php echo form_open('major_controller/addmajor') ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="major_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Major Name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <a href="<?php echo site_url('major_controller/list_major');?>" class="btn btn-primary" role="button">Cancle</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div> 
                                    </form>
            <div>
                <a href="<?php echo site_url('Major_controller/list_major');?>" class="btn btn-danger" role="button">ดูรายชื่อสาขา</a>
            </div>
                         


