 <div class="right_col" role="main">
<div class="container"> 
<fieldset><legend>Update Company &nbsp; <i class="glyphicon glyphicon-briefcase"></i></legend></fieldset>
<?php 
foreach($list as $item){?>
<?php echo form_open_multipart('news_controller/updateNews/'.$item->id_news); ?>
    <form class="form-horizontal form-label-left input_mask">
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">หัวข้อข่าว </label>
                                            <input type="text" name="news_topic" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->news_topic; ?>" >
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ภาพประกอบ </label>
                                            <input type="text" class="form-control has-feedback-left" id="txtFile" value="<?php echo $item->news_image; ?>" >
                                            <input type="button" id="btn" value="Browse" />
                                            <input type="file" id="file1" name="news_image" />
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">วันที่อัพเดต </label>
                                            <input type="date" name="news_date_update" class="form-control" value="<?php echo $item->news_date_update; ?>">
                                        </div>                    
                       
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <label class="col-md-6 col-sm-6 col-xs-12">รายละเอียดอื่น ๆ </label>
                                            <textarea name="news_detail" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;" >
                                                <?php echo $item->news_detail; ?>
                                            </textarea><br>
                                        </div>   
                                        
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <a href="<?php echo site_url('news_controller/list_news');?>" class="btn btn-primary" role="button">Cancel</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    <?php }?>
                        </form>

                </div>
            </div>
        </div>

<style type="text/css">
#file1 {
    display: none;
}
</style>

<script type="text/javascript">
$('#btn').click(function () {
    $('#file1').click();
});

$('input[type=file]').change(function () {
      console.dir(this.files[0])
      $('#txtFile').val(this.files[0].name);
});

</script>