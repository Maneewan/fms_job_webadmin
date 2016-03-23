<div class="right_col" role="main">
<div class="x_title">
                                    <h2>List Event <small>ประวัติการจัดงาน</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ชื่องาน</th>    
                                            <th>สถานที่จัดงาน</th>
                                            <th>วันที่จัดงาน</th>
                                            <th>แก้ไข</th>                                                 
                                        </tr>
                                    </thead>
                                    <?php 
                                        foreach ($this->event_model->getevent() as $row) 
                                        {
                                            echo '<tr>';
                                                echo '<td>';
                                                    echo $row['event_name'];
                                                echo '</td>'; 
                                                echo '<td>';
                                                    echo $row['event_location'];
                                                echo '</td>';        
                                                echo '<td>';
                                                    echo $row['date_from']; echo ' ถึง '; echo $row['date_to'];
                                                echo '</td>';                                                                                                                          
                                                echo '<td>';
                                                    echo '<button><a href="getEventID/'.$row['event_no'].'" ><i class="fa fa-wrench" title="Edit"></i></a></button>'
                                                    ;
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
    var answer = confirm('ต้องการลบข้อมูลการจัดงานครั้งนี้ ใช่หรือไม่');
    return answer
  });
</script>