<div class="right_col" role="main">

                        <!-- <div class="col-md-6 col-xs-12"> -->
                            <div class="page-title">
                        <div class="title_left">
                            <h3>ตำแหน่งงาน</h3>
                        </div>
                        
                    </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Job Name <small>เพิ่มชื่อตำแหน่งงาน</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                    <br />
                                    <?php echo form_open('job_controller/addjob'); ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="job_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Job Name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <a href="<?php echo site_url('job_controller/list_job');?>" class="btn btn-primary" role="button">Cancle</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div> 
                                        <div>
                                            <a href="<?php echo site_url('job_controller/list_job');?>" class="btn btn-danger" role="button">ดูตำแหน่งงานทั้งหมด</a>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>

<script>
$(".btn btn-success").click(function(){
    var answer = confirm('ต้องการบันทึกตำแหน่งงานนี้ ใช่หรือไม่');
    return answer
  });
</script>

<script>
    $(document).ready(function() {
    $('#newsTable').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    } );
} );
</script>
