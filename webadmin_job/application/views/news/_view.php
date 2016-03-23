<div class="right_col" role="main">
<div class="row">
                        <!-- <div class="col-md-6 col-xs-12"> -->
                            <div class="page-title">
                        <div class="title_left">
                            <h3>ฟีดข่าว</h3>
                        </div>
                        
                    </div>
                            <div class="x_panel">
                                
                                <br />
                                    <div class="x_title">
                                    <h2>News Feed <small>ข่าวประชาสัมพันธ์</small></h2>                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div>
                                	<?php 
                                	foreach ($this->news_model->getNews() as $row)
                                	{
                                		echo '<a href="readNewsID/'.$row['id_news'].'">';
                                		echo $row['news_topic'];
                                		echo '</a>';
                                		echo '<br>';
                                	}
                                	 ?>
                                </div>