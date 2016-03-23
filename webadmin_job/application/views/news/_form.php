<div class="right_col" role="main">
    <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>เพิ่มข่าวสาร</h3>
                        </div>                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Job Fair News <small>เพิ่มข้อมูลข่าวสาาร เพื่อประชาสัมพันธ์การจัดงาน</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <?php echo form_open_multipart('news_controller/addnews'); ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">หัวข้อข่าว </label>
                                            <input type="text" name="news_topic" class="form-control has-feedback-left" id="inputSuccess2" >
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ภาพประกอบ </label>
                                            <input type="file" name="news_image" class="form-control has-feedback-left" id="inputSuccess3" >
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">วันที่อัพเดต </label>
                                            <input type="date" name="news_date_update" class="form-control">
                                        </div>                    
                       
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">รายละเอียดอื่น ๆ </label>
                                            <textarea name="news_detail" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">
                                            </textarea><br>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <a href="<?php echo site_url('news_controller/list_news');?>" class="btn btn-primary" role="button">Cancle</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>                                 
                                
                                    
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