<div class="right_col" role="main">
<div class="container"> 
  
                    <fieldset><legend>Update Major &nbsp; <i class="glyphicon glyphicon-briefcase"></i></legend></fieldset>
                    <?php 
                            foreach($list as $item){?>
                            <?php echo form_open('event_controller/updateEvent/'.$item->event_no); ?>
                                <form class="form-horizontal form-label-left input_mask">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="event_name" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->event_name; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="event_location" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->event_location; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="date" name="date_from" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->date_from; ?>" >
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="date" name="date_to" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->date_to; ?>" >
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        
                                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <a href="<?php echo site_url('event_controller/list_event');?>" class="btn btn-primary" role="button">Cancle</a>
                                          <button type="submit" class="btn btn-success">Submit</button>
                                      </div> 
                            <?php }?>
                                </form>

              


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

$('#btn').click(function () {
    $('#file1').click();
});

$('input[type=file]').change(function () {
      console.dir(this.files[0])
      $('#txtFile').val(this.files[0].name);
});

</script>