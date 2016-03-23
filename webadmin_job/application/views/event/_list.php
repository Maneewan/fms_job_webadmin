<div class="right_col" role="main">
<div class="x_title">
                                    <h2>List Event Time<small>ประวัติการจัดงานแต่ละครั้ง</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ชื่องาน</th>    
                                            <th>บริษัทที่เข้าร่วม</th>    
                                            <th>ลบข้อมูล</th>                                                                                 
                                        </tr>
                                    </thead>
                                    <?php 
                                        foreach ($this->event_model->getEvent_time() as $row) 
                                        {
                                            echo '<tr>';
                                                echo '<td>';
                                                    echo $row['event_name'];                                                   
                                                echo '<td>';
                                                    echo $row['company_name'];   
                                                echo '<td>';
                                                    echo '<button><a href="deleteEventTime/'.$row['id_event_time'].'" class="delete_item" ><i class="fa fa-trash" title="Delete"></i></a></button>';                                                         
                                                echo '</td>'; 
                                                echo '</td>'; 
                                                echo '</td>';                                                    
                                            echo '</tr>';       
                                        }
                                    ?>
                                </table>   
                                </div>
                    <script>
                    $(".delete_item").click(function(){
                        var answer = confirm('ต้องการลบข้อมูล ใช่หรือไม่');
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