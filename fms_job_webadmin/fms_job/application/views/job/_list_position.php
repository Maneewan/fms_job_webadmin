<div class="right_col" role="main">
<div class="row">
                        <!-- <div class="col-md-6 col-xs-12"> -->
                            <div class="page-title">
                        <div class="title_left">
                            <h3>ตำแหน่งงานที่เปิดรับสมัคร</h3>
                        </div>
                        
                    </div>
                <div class="x_panel">
                                
                                <br />
                                    <div class="x_title">
                                    <h2>List Jobs Position <small>ตำแหน่งงานที่เปิดรับสมัคร</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
            <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ตำแหน่ง</th>
                        <th>สาขาวิชา</th>                          
                        <th>บริษัท/หน่วยงาน</th>
                        <th>แก้ไขข้อมูล</th> 

                    </tr>
                </thead>
                <?php 
                    foreach ($this->job_model->getJob_position() as $row) 
                    {
                        echo '<tr>';
                            echo '<td>';
                                echo $row['job_name'];  
                            echo '<td>';
                                echo $row['major_name'];  
                            echo '<td>';
                                echo $row['company_name'];
                            echo '<td>';
                                echo '<button><a href="getJobPositionID/'.$row['id_job_position'].'" ><i class="fa fa-wrench" title="Edit"></i></a></button>
                                <button><a href="deleteJobPosition/'.$row['id_job_position'].'" class="delete_item" ><i class="fa fa-trash" title="Delete"></i></a></button>';                                                            
                            echo '</td>';
                            echo '</td>';
                                

                        echo '</tr>';       
                    }
                ?>
            </table> 
                                </div>
                            </div>
                        </div>
<script>
$(".delete_item").click(function(){
    var answer = confirm('ต้องการลบ ใช่หรือไม่');
    return answer
  });
</script>
<script>
$(".save").click(function(){
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
