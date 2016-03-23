 <div class="right_col" role="main">
 <div class="x_title">
    <h2>List News <small>หัวข้อข่ว</small></h2>                                    
    <table id="newsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>หัวข้อข่าว</th>      
                                    <th>แก้ไข</th>                  
                                </tr>
                            </thead>
                            <?php 
                                foreach ($this->news_model->getNews() as $row) 
                                {
                                    echo '<tr>';
                                        echo '<td>';
                                            echo $row['news_topic'];  
                                        echo '<td>';
                                        echo '<button><a href="readNewsID/'.$row['id_news'].'" title="Read" > Read  </a></button>
                                        <button><a href="getNewsID/'.$row['id_news'].'" ><i class="fa fa-wrench" title="Edit"></i></a></button>
                                        <button class="delete_item"><a href="deleteNews/'.$row['id_news'].'" ><i class="fa fa-trash" title="Delete"></i></a></button>
                                        ';                                    
                                        echo '</td>';
                                        echo '</td>';
                                    echo '</tr>';       
                                }
                            ?>
                            </table>  
                            
<script>
$(".delete_item").click(function(){
    var answer = confirm('ต้องการลบ ใช่หรือไม่');
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