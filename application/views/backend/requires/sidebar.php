<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1"
	 m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
	<?php $dir = ($this->AdminLang == "ar") ? "la-angle-left" : "la-angle-right"; ?>
	<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
		<li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
			<a href="<?= base_url() . 'Dashboard' ?>" class="m-menu__link ">
				<i class="m-menu__link-icon flaticon-line-graph"></i>
				<span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                            <?= lang("home") ?>
                        </span>

                    </span>
                </span>
			</a>
		</li>
		<?php if (isset($_SESSION['is_developer']) && $_SESSION['is_developer'] == 1) { ?>
			<!-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">إدارة النظام </span>
                <i class="m-menu__ver-arrow la <? /*=$dir*/ ?>"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">إدارة النظام</span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="<? /*=base_url().""*/ ?>" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span></i>
                            <span class="m-menu__link-text">الإدارات</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="<? /*=base_url().""*/ ?>" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span></i>
                            <span class="m-menu__link-text">الصفحات</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="<? /*=base_url().""*/ ?>" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span></i>
                            <span class="m-menu__link-text">الصلاحيات</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>-->
		<?php } ?>
		<!--
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-web"></i>
                <span class="m-menu__link-text">المركز الاعلامي</span>
                <i class="m-menu__ver-arrow la <?= $dir ?>"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">المركز الاعلامي</span>
                        </span>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">level 2</span>
                            <i class="m-menu__ver-arrow la <?= $dir ?>"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true">
                                    <a href="#" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                        <span class="m-menu__link-text">level 3</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="#" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">level 2</span></a>
                    </li>
                </ul>
            </div>
        </li>
        -->
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">مستخدمى لوحة التحكم  </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">مستخدمى لوحة التحكم </span>
                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-users" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">عرض</span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-users/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">اضافة  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-users/register" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">طلبات تسجيل الوكلاء  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-users/registerRefuse" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">طلبات تسجيل الوكلاء المرفوضة  </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">البيانات الاساسية </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">البيانات الاساسية </span>
                        </span>
					</li>
					<!---------------------------------------------------->
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "main-setting" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">بيانات الموقع</span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "main-setting/about" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">عنـا</span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "main-setting/terms" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">شروط و أحكام التطبيق </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-contact" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">رسائل التواصل </span></a>
					</li>
					<!---------------------------------------------------->
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-slider" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض بنرات الموقع </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-slider/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة بنر الموقع </span></a>
					</li>
                    <!---------------------------------------------------->
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-coupons" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الكوبونات </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-coupons/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة كوبون </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-coupons/user_coupons" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">الكوبونات المستخدمة</span></a>
					</li>

					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-slider" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض بنر التطبيق  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-slider/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة بنر التطبيق </span></a>
					</li>
					<!---------------------------------------------------->
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-area" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض المناطق </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-area/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة منطقة </span></a>
					</li>
					<!---------------------------------------------------->
				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">الخدمات  </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">الخدمات </span>
                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-main-service" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> الخدمات الرئيسية </span></a>
					</li>
					<?php if ($_SESSION['is_developer'] == 1): ?>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="<?= base_url() . "admin-main-service/add" ?>" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">إضافة  خدمة رئيسية</span></a>
						</li>
					<?php endif ?>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-main-service/deleted" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> الخدمات الرئيسية المحذوفة </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-sub-service" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> الخدمات الفرعية  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-sub-service/deleted" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> الخدمات الفرعية المحذوفة </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-sub-service/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة  خدمة فرعية </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-specialties/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة تخصص </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-specialties" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">التخصصات  </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">مقدمى الخدمات   </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">مقدمى الخدمات  </span>
                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-provider/apply" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> طلبات التسجيل  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-provider" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-provider/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة  </span></a>
					</li>
					<!------------------------------------------------>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-accounts/cashing" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">سندات الصرف   </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-accounts/exchange" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">سندات القبض  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-accounts/statement" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">كشف الحساب   </span></a>
					</li>

					<!------------------------------------------------>
				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">عملاء التطبيق   </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">عملاء التطبيق  </span>
                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-person" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض العملاء </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-person/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة  عميل</span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">الطلبات   </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">الطلبات  </span>
                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-orders/new" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> الجديدة </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-orders/current" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> الحالية   </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-orders/old" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> السابقة  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-orders/client" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> طلبات عميل  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-orders/provider" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> طلبات مقدم خدمة  </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">شركائنا  </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                <span class="m-menu__link">
                                    <span class="m-menu__link-text">شركائنا</span>
                                </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-partners" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-partners/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">المسوقين  </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                <span class="m-menu__link">
                                    <span class="m-menu__link-text">المسوقين</span>
                                </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-announcer" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-announcer/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text"> Distributors   </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text"> Distributors </span>
                                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-supplier" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-supplier/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">السياحة العلاجية    </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">السياحة العلاجية  </span>
                                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-medical-tourism" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الاقسام  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-medical-tourism/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة قسم  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-place" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الاماكن  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "admin-place/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة مكان  </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">أقسام المتجر    </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">أقسام المتجر  </span>
                                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-main-dep" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الاقسام الرئيسية </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-main-dep/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة قسم رئيسى  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-main-dep/deleted" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">الأقسام الرئيسية المحذوفة  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-sub-dep" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الاقسام الفرعية  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-sub-dep/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة قسم فرعى </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-sub-dep/deleted" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">الأقسام الفرعية المحذوفة  </span></a>
					</li>

				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">المنتجات     </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">المنتجات  </span>
                                        </span>
					</li>
					<?php if ($_SESSION['is_developer'] == 1): ?>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="<?= base_url() . "app-prices-countries" ?>" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text"> بلدان التسوق </span></a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="<?= base_url() . "app-prices-countries/add" ?>" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">إضافة بلدان التسوق </span></a>
						</li>
					<?php endif ?>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-product-campanies" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الشركات </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-product-campanies/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة الشركات  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-products-partners" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الوكاء </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-products-partners/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة الوكاء  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-products" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض المنتجات </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-products/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافة منتج  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-products/deleted" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">المنتجات المحذوفة   </span></a>
					</li>
				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">الأخبار    </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">الأخبار </span>
                                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-news" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text"> عرض الأخبار </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-news/add" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">إضافةخبر  </span></a>
					</li>
				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">طلبات تطبيق المتجر       </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">طلبات تطبيق المتجر      </span>
                                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-orders/main?type=new" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">الجديدة  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-orders/main?type=ready" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">الجاهزة للشحن للعميل  </span></a>
					</li>

					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-orders/main?type=old" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">السابقة   </span></a>
					</li>
					<!--<li class="m-menu__item " aria-haspopup="true">
						<a href="<? /*= base_url() . "app-products/deleted" */ ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">المنتجات المحذوفة   </span></a>
					</li>-->
				</ul>
			</div>
		</li>
		<!------------------------------------------>
		<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="javascript:;" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon flaticon-web"></i>
				<span class="m-menu__link-text">طلبات متجر Daystar     </span>
				<i class="m-menu__ver-arrow la <?= $dir ?>"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">طلبات متجر Daystar   </span>
                                        </span>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-orders" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">الجديدة  </span></a>
					</li>
					<li class="m-menu__item " aria-haspopup="true">
						<a href="<?= base_url() . "app-orders/old" ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">السابقة  </span></a>
					</li>
					<!--<li class="m-menu__item " aria-haspopup="true">
						<a href="<? /*= base_url() . "app-products/deleted" */ ?>" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
							<span class="m-menu__link-text">المنتجات المحذوفة   </span></a>
					</li>-->
				</ul>
			</div>
		</li>
		<!------------------------------------------>

	</ul>
</div>
