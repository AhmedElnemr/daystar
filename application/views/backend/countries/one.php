<?php if($op == 'UPDTATE' ):
    $out['input']='UPDTATE';
    $out['input_title']='تعديل ';
else:
    $out['input']='INSERT';
    $out['input_title']='حفظ ';
endif?>

<?=form_open_multipart($form,["class"=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']);?>

<div class="m-portlet__body">
    <div class="form-group m-form__group row">
        <div class="col-lg-6">
            <label>الاسم :</label>
            <input type="text" name="Pdata[ar_name]" value="<?= $out['ar_name'] ?>" class="form-control m-input"
                   data-validation="required">
        </div>
    </div>

</div>

<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
    <div class="m-form__actions m-form__actions--solid">
        <div class="row">
            <div class="col-lg-6">
                <button type="submit" name="<?php echo $out['input']?>" value="<?php echo $out['input']?>"
                        class="btn btn-primary">
                    <span><i class="fa fa-floppy-o" aria-hidden="true"></i></span> <?php echo $out['input_title']?>
                </button>
                <!--     <button type="reset" class="btn btn-secondary">Cancel</button>-->
            </div>
            <div class="col-lg-6 m--align-right">
                <!--  <button type="reset" class="btn btn-danger">Delete</button>-->
            </div>
        </div>
    </div>
</div>
<?= form_close()?>



