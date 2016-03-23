 <div class="right_col" role="main">
 <div class="x_title">
            <h2>List Jobs <small>ชื่อตำแหน่งงานทั้งหมด</small></h2>                                    
                <div class="clearfix"></div>
            </div>
            <div>
                <a href="<?php echo site_url('job_controller');?>" class="btn btn-danger" role="button">เพิ่มตำแหน่งงาน</a>
            </div>

            <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ชื่อตำแหน่งงาน</th>      
                        <th>แก้ไข</th>                  
                    </tr>
                </thead>
                <?php 
                    foreach ($this->job_model->getjob() as $row) 
                    {
                        echo '<tr>';
                            echo '<td>';
                                echo $row['job_name'];                                                              
                            echo '<td>';
                                echo '<button><a href="deleteJob/'.$row['id_job'].'" class="delete_item" title="Delete"><i class="fa fa-trash"></i></a></button>';
                            echo '</td>';
                        echo '</tr>';       
                    }
                ?>
            </table> 
            

            <script>
$(".delete_item").click(function(){
    var answer = confirm('ต้องการลบตำแหน่งงานนี้ ใช่หรือไม่');
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