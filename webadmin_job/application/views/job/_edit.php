<div class="right_col" role="main">
<div class="container"> 
  
    <fieldset><legend>Update Job &nbsp; <i class="glyphicon glyphicon-briefcase"></i></legend></fieldset>
    <?php 
foreach($list as $item){?>
<?php echo form_open('job_controller/updateJob/'.$item->id_job); ?>
    <form class="form-horizontal form-label-left input_mask">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="job_name" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->job_name; ?>">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <button type="submit" class="btn btn-primary">Cancel</button>
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