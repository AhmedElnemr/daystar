<?php $this->load->view('backend/requires/header'); ?>
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

	<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
		<i class="la la-close"></i></button>
	<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
		<!-- BEGIN: Aside Menu -->
		<?php
		if ($_SESSION["user_type"] == "admin") {
			$this->load->view('backend/requires/sidebar');
		}
		else {
			$this->load->view('backend/requires/sidebar_market');
		}
	    ?>
		<!-- END: Aside Menu -->
	</div>


	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Left Aside -->
		<?php // $this->load->view('backend/requires/top_menu');?>
		<!-- END: Left Aside -->
		<!-- BEGIN: content -->
		<div class="m-content">
			<?php if (isset($addLink)): ?>
				<div class="row form-group">
					<div class="col-lg-10"></div>
					<div class="col-lg-2">
						<a href="<?=base_url().$addLink?>">
							<button type="button" class="btn btn-success">
								<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span> أضف جديد
							</button>
						</a>
					</div>
				</div>
			<?php endif ?>
			<div class="row">


				<div class="col-lg-12">
					<!--begin::Portlet-->
					<div class="m-portlet">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
									<h3 class="m-portlet__head-text">
										<?= (isset($title)) ? $title : lang('home') ?>
									</h3>
								</div>
							</div>
						</div>
						<!--begin::Form-->
						<?php $this->load->view('backend/' . $subview); ?>
						<!--end::Form-->
					</div>
					<!--end::Portlet-->
				</div>
			</div>
		</div>
		<!-- END: content -->
	</div>
</div>
<?php $this->load->view('backend/requires/footer'); ?>
