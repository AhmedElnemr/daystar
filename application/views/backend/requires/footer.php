<!-- end:: Body -->
<div class="modal fade" id="m_modal_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">التفاصيل</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="option_details">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
			</div>
		</div>
	</div>
</div>

<!-- begin::Footer -->
<footer class="m-grid__item		m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
						<!--	<span class="m-footer__copyright">
								<?/*=date("Y")*/?> &copy; Metronic theme by <a href="#" class="m-link">Keenthemes</a>
							</span>-->
            </div>
            <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
               <!-- <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">About</span>
                        </a>
                    </li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">Privacy</span>
                        </a>
                    </li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">T&C</span>
                        </a>
                    </li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">Purchase</span>
                        </a>
                    </li>
                    <li class="m-nav__item m-nav__item">
                        <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                            <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                        </a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>
</footer>

<!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
<?php  // $this->load->view('backend/requires/second_sidbar');?>
<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->
<?php  // $this->load->view('backend/requires/quick_nav');?>
<!-- begin::Quick Nav -->

<!--begin::Global Theme Bundle -->
<script src="<?= base_url() . ADMINASSETS ?>vendors/base/vendors.bundle.js?v=<?=VER?>" type="text/javascript"></script>
<script src="<?= base_url() . ADMINASSETS ?>demo/default/base/scripts.bundle.js?v=<?=VER?>" type="text/javascript"></script>

<!--end::Global Theme Bundle -->
<?php   $this->load->view('backend/requires/config_js');?>
<script src="<?= base_url() . ASS ?>script/my_script.js?v=<?=time()?>" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<script>
    $("#country-ids").on("change",function () {
        if($(this).val() != ""){
            var url = '<?=base_url()?>getCity/'+$(this).val();
            // console.log(url)
            $.ajax({
                type:'get',
                url: url,
                dataType: 'html',
                cache:false,
                success: function(html){
                    $("#city-ids").html(html);
                    $('#city-ids').selectpicker("refresh");
                },
                error:function(error){
                    console.log(error.responseText);
                }
            });
        }
    })

	$("#type-coupon").on("change",function (){
		let typeCoupon  = $(this).val();
		if(typeCoupon == "val"){
			$("#limit_value").show();
			$("input",$(this)).attr('data-validation','required');
		}
		if(typeCoupon =="per"){
			$("#limit_value").hide();
			$("input",$(this)).removeAttr('data-validation');
		}
	})

	$("#type-announcer").on("change",function (){
		let typeAnnouncer  = $(this).val();
		if(typeAnnouncer == "doctor"){
			$("#specialization").show();
			$("input",$(this)).attr('data-validation','required');
		}
		if(typeAnnouncer =="hospital"){ //
			$("#specialization").hide();
			$("input",$(this)).removeAttr('data-validation');
		}
	})
</script>

<!--begin::Page Vendors -->
<?php if (isset($my_footer)) { ?>
    <!----------------------------------------------------------->
    <?php if(in_array("multi_upload",$my_footer)):?>
        <script type="text/javascript" src="<?=base_url().ASS?>multi-upload/imageuploadify.min.js?v=<?=VER?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.multi-up').imageuploadify();
            })
        </script>
    <?php endif;  ?>
    <!----------------------------------------------------------->
    <?php if(in_array("dash",$my_footer)):?>
        <script src="<?= base_url() . ADMINASSETS ?>app/js/dashboard.js?v=<?=VER?>" type="text/javascript"></script>
    <?php endif;  ?>
    <!----------------------------------------------------------->
    <?php if (in_array("date", $my_footer)): ?>
        <script src="<?=base_url().ASS?>date-picker/jquery.datetimepicker.full.js?v=<?=VER?>"></script>
        <script>
            $('.datepicker-m').datetimepicker({
                format:'Y-m-d',
				timepicker:  false
            });
        </script>
    <?php endif ?>
    <!----------------------------------------------------------->
    <?php if (in_array("upload",$my_footer)): ?>
        <!-- file upload -->
        <script src="<?=base_url().ASS ?>dropify/js/jasny-bootstrap.js?v=<?=VER?>"></script>
        <!-- This is data table -->
        <!-- jQuery file upload -->
        <script src="<?=base_url().ASS ?>dropify/dist/js/dropify.min.js?v=<?=VER?>"></script>
        <script>
            $(document).ready(function () {
                // Basic
                $('.dropify').dropify();
                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-d�posez un fichier ici ou cliquez',
                        replace: 'Glissez-d�posez un fichier ou cliquez pour remplacer',
                        remove: 'Supprimer',
                        error: 'D�sol�, le fichier trop volumineux'
                    }
                });
                // Used events
                var drEvent = $('#input-file-events').dropify();
                drEvent.on('dropify.beforeClear', function (event, element) {
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });
                drEvent.on('dropify.afterClear', function (event, element) {
                    alert('File deleted');
                });
                drEvent.on('dropify.errors', function (event, element) {
                    console.log('Has Errors');
                });
                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function (e) {
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>
    <?php endif ?>
    <!----------------------------------------------------------->
    <?php if (in_array("table", $my_footer)) : ?>
        <!-- datatables-->
        <script src="<?= base_url().ASS ?>mydatatables/js/jquery.dataTables.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/dataTables.buttons.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/buttons.flash.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/jszip.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/pdfmake.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/vfs_fonts.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/buttons.html5.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/buttons.print.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/buttons.colVis.min.js?v=<?=VER?>"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/dataTables.responsive.min.js?v=<?=VER?>" id="responsive-dt"></script>
        <script src="<?= base_url().ASS ?>mydatatables/js/plugin.js?v=<?=VER?>"></script>
    <?php endif; ?>
    <!----------------------------------------------------------->
    <?php if (in_array("valid",$my_footer)): ?>
        <script src="<?= base_url().ASS ?>validator/jquery.form-validator.js?v=<?=VER?>"></script>
        <script>
            $(function () {
                $.validate({
                    validateHiddenInputs: true
                });
            });
        </script>
    <?php endif ?>
    <!----------------------------------------------------------->

<?php } ?>
<!--end ::Page Vendors -->


 <script>

    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "   صباحــــاَ  ";

        if(h == 0){
            h = 12;
        }

        if(h >= 12 && m > 0){
            h = h - 12;
            session = "   مســــاءَ   ";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + "  "  ;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        document.getElementById("session-name").innerText = session;
        document.getElementById("session-name").textContent = session;


        setTimeout(showTime, 1000);

    }

    showTime();

 </script>
</body>

<!-- end::Body -->
</html>
