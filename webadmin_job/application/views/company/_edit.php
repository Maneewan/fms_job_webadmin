 <div class="right_col" role="main">
<div class="container"> 
<fieldset><legend>Update Company &nbsp; <i class="glyphicon glyphicon-briefcase"></i></legend></fieldset>
<?php 
foreach($list as $item){?>
<?php echo form_open_multipart('company_controller/updateCompany/'.$item->id_company); ?>
    <form class="form-horizontal form-label-left input_mask">
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ชื่อบริษัท </label>
                                            <input type="text" name="company_name" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->company_name; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">โลโก้บริษัท </label>
                                            

                                            <input type="text" id="txtFile" class="form-control has-feedback-left" readonly="true" value="<?php echo $item->company_logo; ?>"/>
                                            <input type="button" id="btn" value="Browse" />
                                            <input type="file" id="file1" name="company_logo" />
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">บริษัท/หน่วยงาน </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="company_group" class="select2_single form-control" tabindex="-1">
                                                    <option value="<?php echo $item->company_group; ?>"><?php echo $item->company_group; ?></option>
                                                    <option value="กลุ่มธนาคารและการลงทุน">กลุ่มธนาคารและการลงทุน</option>
                                                    <option value="กลุ่มจัดจำหน่ายและกระจายสินค้า">กลุ่มจัดจำหน่ายและกระจายสินค้า</option>
                                                    <option value="กลุ่มเทคโนโลยีและการสื่อสาร">กลุ่มเทคโนโลยีและการสื่อสาร</option>
                                                    <option value="กลุ่มศึกษาต่อและพัฒนาตนเอง">กลุ่มศึกษาต่อและพัฒนาตนเอง</option>
                                                    <option value="กลุ่มผลิตและแปรรูป">กลุ่มผลิตและแปรรูป</option>                                                 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ชื่อผู้ติดต่อ </label>
                                            <input type="text" name="name_contact" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $item->name_contact; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-8 col-sm-4 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">ที่อยู่ </label>
                                            <input type="text" name="address" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $item->address; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">เบอร์โทร. </label>
                                            <input type="text" name="tel" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $item->tel; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">หมายเลขแฟลกซ์ </label>
                                            <input type="text" name="fax" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $item->fax; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">Email </label>
                                            <input type="text" name="email" class="form-control has-feedback-left" id="inputSuccess3" value="<?php echo $item->email; ?>">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">Website </label>
                                            <input type="text" name="website" class="form-control has-feedback-left" id="inputSuccess4" value="<?php echo $item->website; ?>">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div> 
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">Booth Position </label>
                                            <input type="number" name="booth_position" class="form-control has-feedback-left" id="inputSuccess4" value="<?php echo $item->booth_position; ?>">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div> 
                                        <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                                            <label class="col-md-6 col-sm-6 col-xs-12">รายละเอียดอื่น ๆ</label>
                                            <textarea name="company_detail"  id="detail" class="form-control has-feedback-right" value="<?php echo $item->company_detail; ?>">
                                                <?php echo $item->company_detail; ?></textarea><br>
                                        </div>
                                        
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <a href="<?php echo site_url('company_controller/list_company');?>" class="btn btn-primary" role="button">Cancel</a>
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