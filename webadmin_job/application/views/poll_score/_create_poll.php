<div class="right_col" role="main">
                            <div class="page-title">
                        <div class="title_left">
                            <h3>แบบประเมิน</h3>
                        </div>
                        
                    </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Add Event Name  <small>เพิ่มชื่องานสำหรับการประเมินการจัดงาน</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                    <br />
                                    <?php echo form_open('poll_controller/addPoll_event'); ?>
                                    <form class="form-horizontal form-label-left input_mask">
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
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

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <a href="<?php echo site_url('poll_controller');?>" class="btn btn-primary" role="button">Cancle</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>                                         
                                    </form>                                    
                                </div>
                            </div>
                        </div>

<script>
$(".btn btn-success").click(function(){
    var answer = confirm('ต้องการบันทึก ใช่หรือไม่');
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