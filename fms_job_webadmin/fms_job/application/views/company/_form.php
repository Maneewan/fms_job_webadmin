<div class="right_col" role="main">
    <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>เพิ่มข้อมูลบริษัท</h3>
                        </div>                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Company Detail <small>เพิ่มข้อมูลบริษัท</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <?php echo form_open_multipart('company_controller/addcompany'); ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ชื่อบริษัท </label>
                                            <input type="text" name="company_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="ชื่อบริษัท หรือ หน่วยงาน">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">โลโก้บริษัท </label>
                                            <input type="file" name="company_logo" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">บริษัท/หน่วยงาน </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="company_group" class="select2_single form-control" tabindex="-1">
                                                    <option value="กลุ่มธนาคารและการลงทุน">กลุ่มธนาคารและการลงทุน</option>
                                                    <option value="กลุ่มจัดจำหน่ายและกระจายสินค้า">กลุ่มจัดจำหน่ายและกระจายสินค้า</option>
                                                    <option value="กลุ่มเทคโนโลยีและการสื่อสาร">กลุ่มเทคโนโลยีและการสื่อสาร</option>
                                                    <option value="กลุ่มศึกษาต่อและพัฒนาตนเอง">กลุ่มศึกษาต่อและพัฒนาตนเอง</option>
                                                    <option value="กลุ่มผลิตและแปรรูป">กลุ่มผลิตและแปรรูป</option>                                                 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ชื่อผู้ติดต่อ </label>
                                            <input type="text" name="name_contact" class="form-control has-feedback-left" id="inputSuccess2" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ที่อยู่ </label>
                                            <input type="text" name="address" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">เบอร์โทร. </label>
                                            <input type="text" name="tel" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">หมายเลขแฟลกซ์ </label>
                                            <input type="text" name="fax" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">Email </label>
                                            <input type="text" name="email" class="form-control has-feedback-left" id="inputSuccess3" placeholder="">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">Website </label>
                                            <input type="text" name="website" class="form-control has-feedback-left" id="inputSuccess4" placeholder="">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div> 
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">Booth Position </label>
                                            <input type="number" name="booth_position" class="form-control has-feedback-left" id="inputSuccess4" placeholder="">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div> 

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">รายละเอียดอื่น ๆ </label>
                                            <textarea name="company_detail" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">
                                            </textarea><br>
                                        </div>

                                        
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <a href="<?php echo site_url('company_controller/list_company');?>" class="btn btn-primary" role="button">Cancle</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                    
                                </div>
                   
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