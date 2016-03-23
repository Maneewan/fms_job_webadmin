<div class="right_col" role="main">
<div class="row">
                        <!-- <div class="col-md-6 col-xs-12"> -->
                            <div class="page-title">
                        <div class="title_left">
                            <h3>รายละเอียดข่าว</h3>
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
                                foreach($list as $item){?>
                                    <?php echo $item->news_topic; ?>
                                    <br><br>
                                    <?php echo $item->news_detail; ?>
                                <?php }?>
                                <br><br><br>
                                <a href="<?php echo site_url('news_controller/list_news') ?>" >back</a>