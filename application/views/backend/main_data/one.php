<?php if($op == 'UPDTATE' ):
    $out['input']='UPDTATE';
    $out['input_title']='تعديل ';
else:
    $out['input']='INSERT';
    $out['input_title']='حفظ ';
endif?>

<?=form_open_multipart($form,["class"=>'m-form m-form--label-align-right']);?>

<div class="m-portlet__body">
    <?php if (isset($settings) && !empty($settings)) { ?>
        <?php $x = 0;
        foreach ($settings as $row) { ?>
            <div class="form-group m-form__group row">
                <label class="col-lg-3 col-form-label"><?= ($row->type == "social")? $row->fild_key:lang($row->world_key);?> :</label>
                <div class="col-lg-9">
                    <?= setHtml($row->type, $row->fild_key, $row->value, $row->is_valid); ?>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
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
