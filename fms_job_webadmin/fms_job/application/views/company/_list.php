 <div class="right_col" role="main">
 <div class="x_title">
    <h2>List Company <small>รายชื่อบริษัทและข้อมูลการติดต่อ</small></h2>                                    
    <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ชื่อบริษัท</th>      
                                    <th>แก้ไข</th>                  
                                </tr>
                            </thead>
                            <?php 
                                foreach ($this->company_model->getCompany() as $row) 
                                {
                                    echo '<tr>';
                                        echo '<td>';
                                            echo $row['company_name'];  
                                        echo '<td>';
                                        echo '
                                        <button><a href="readComID/'.$row['id_company'].'" title="Read" > Read  </a></button>
                                        <button><a href="getComID/'.$row['id_company'].'" ><i class="fa fa-wrench" title="Edit"></i></a></button>';                                    
                                        echo '</td>';
                                        echo '</td>';
                                    echo '</tr>';       
                                }
                            ?>
                            </table>  
                            
<script>
$(".delete_item").click(function(){
    var answer = confirm('ต้องการลบข้อมูลหน่วยงานนี้ ใช่หรือไม่');
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