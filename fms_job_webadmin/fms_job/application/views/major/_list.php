<div class="right_col" role="main">
<div class="row">
    <h2>List Major <small>ชื่อสาขาทั้งหมด</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
            <div>
                <a href="<?php echo site_url('Major_controller');?>" class="btn btn-danger" role="button">เพิ่มสาขา</a>
            </div>
            <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Event No</th>    
                        <th>Event Name</th>                                                 
                    </tr>
                </thead>
                <?php 
                    foreach ($this->major_model->getmajor() as $row) 
                    {
                        echo '<tr>';
                            echo '<td>';
                                echo $row['major_name'];
                            echo '</td>';                                                                                                           
                            echo '<td>';
                                echo '<button><a href="getMajorID/'.$row['id_major'].'" ><i class="fa fa-wrench" title="Edit"></i></a></button>
                                <button><a href="deleteMajor/'.$row['id_major'].'" class="delete_item" ><i class="fa fa-trash" title="Delete"></i></a></button>';
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
    var answer = confirm('ต้องการลบสาขานี้ ใช่หรือไม่');
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