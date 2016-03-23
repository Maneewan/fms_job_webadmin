 <div class="right_col" role="main">
<div class="container"> 

    <fieldset><legend>Company Information &nbsp; <i class="glyphicon glyphicon-briefcase"></i></legend></fieldset>
    <?php 
        foreach($list as $item)
        {
            ?>
    <div class="col-md-6">
            <center><img src="<?php echo base_url()?>/assets/uploads/<?php echo $item->company_logo; ?>" width="200" height="150"></center>
    </div>
    <div>
        <ul class="form-style-1">
        
            <h3><li><?php echo $item->company_name; ?></li></h3>
            <li><?php echo $item->company_group; ?></li>
            <li><?php echo $item->company_detail; ?></li>
        </ul>
        <a href="<?php echo site_url('company_controller/list_company'); ?>">Back</a>           
        
            <?php
        }
    ?>
