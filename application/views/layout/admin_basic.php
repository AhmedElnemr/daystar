<?php $this->load->view('backend/requires/header');?>
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
                <div class="row">

                            <!--begin::Form-->
                            <?php $this->load->view('backend/' . $subview); ?>
                            <!--end::Form-->
                        <!--end::Portlet-->
                </div>
            </div>
            <!-- END: content -->
        </div>
    </div>
<?php $this->load->view('backend/requires/footer'); ?>
