<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>Amber Station</title>
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-confirm/jquery-confirm.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-confirm/jquery-confirm.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/date-range-picker/daterangepicker.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/open-sans/style.min.css"> <!-- common font  styles  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/tagify/tagify.css"> <!-- styles for tags -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" id="stylesheet"> <!-- universeadmin styles -->

	<script src="<?php echo base_url(); ?>assets/js/ie.assign.fix.min.js"></script>
</head>
<body>
	<div class="navbar navbar-light navbar-expand-lg">
		<button class="sidebar-toggler" type="button">
			<span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
			<span class="ua-icon-alert-close sidebar-toggler__close"></span>
		</button>

		<span class="navbar-brand">
			<a href="/"><img src="<?php echo base_url(); ?>assets/img/amber/amber_logo.png" style="width: 170px;" alt="" class="navbar-brand__logo"></a>
			<span class="ua-icon-menu slide-nav-toggle"></span>
		</span>

		<span class="navbar-brand-sm">
			<a href="/"><img src="<?php echo base_url(); ?>assets/img/amber/amber_logo.png" alt="" class="navbar-brand__logo"></a>
			<span class="ua-icon-menu slide-nav-toggle"></span>
		</span>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="ua-icon-navbar-open navbar-toggler__open"></span>
			<span class="ua-icon-alert-close navbar-toggler__close"></span>
		</button>

			
<style>	
	.badge-notification {
	    position: absolute;
	    font-size: .6rem;
	    margin-top: -1rem;
	    margin-left: 2rem;
	    padding: .2em .45em;
	}
	.bg-danger {
	    background-color: #f93154!important;
	}
	.rounded-pill {
	    border-radius: 50rem!important;
	}
	.badge {
	    display: inline-block;
	    padding: .35em .65em;
	    font-size: .75em;
	    font-weight: 700;
	    line-height: 1;
	    color: #fff;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: baseline;
	    border-radius: .25rem;
	}
	</style>	   

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<div class="navbar__menu"></div>	
				    
			<div class="dropdown navbar-dropdown" style="padding-right: 1rem;">
				<a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" id="btn_notice_list" data-toggle="dropdown" href="#">
					<img src="<?php echo base_url(); ?>assets/img/bell.ico" alt="" class="navbar-dropdown-toggle__user-avatar">
			      	<span id="notice_count" class="badge rounded-pill badge-notification bg-danger"></span>
				</a>
				<div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user" id="notice_list" style="padding-top:1rem; min-width: 250px;">
				</div>
			</div>
			
			<div class="dropdown navbar-dropdown">
				<a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
					<img src="<?php echo base_url(); ?>assets/img/users/user-empty-avatar.png" alt="" class="navbar-dropdown-toggle__user-avatar">
					<span class="navbar-dropdown__user-name"><?php echo $name; ?></span>
				</a>
				<div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
					<div class="navbar-dropdown-user-content">
						<div class="dropdown-user__avatar"><img src="<?php echo base_url(); ?>assets/img/users/user-empty-avatar.png" alt=""/></div>
						<div class="dropdown-info">
							<div class="dropdown-info__name"><?php echo $name; ?></div>
							<div class="dropdown-info-buttons">
								<a class="dropdown-info__viewprofile" href="<?php echo site_url('station/profile'); ?>">View Profile</a>
							</div>
						</div>
					</div>
					<a class="dropdown-item navbar-dropdown__item" href="<?php echo site_url('signin/out'); ?>">Sign Out</a>
				</div>
			</div>
		</div>
	</div>
	<div class="page-wrap">
		<div class="sidebar-section">
			<div class="sidebar-section__scroll">
				<div>
					<div class="sidebar-section__separator">Main</div>
					<ul class="sidebar-section-nav">
						<li class="sidebar-section-nav__item <?php if($page_title == 'dashboard') echo 'is-active'; ?>">
							<a class="sidebar-section-nav__link" href="<?php echo site_url('station/dashboard'); ?>">
								<span class="sidebar-section-nav__item-icon ua-icon-home"></span>
								<span class="sidebar-section-nav__item-text">Dashboard</span>
							</a>
						</li>
						<!--<li class="sidebar-section-nav__item <?php if($page_title == 'customers') echo 'is-active'; ?>">
							<a class="sidebar-section-nav__link" href="<?php echo site_url('station/customers'); ?>">
								<span class="sidebar-section-nav__item-icon ua-icon-user"></span>
								<span class="sidebar-section-nav__item-text">Customers</span>
							</a>
						</li>-->
						<li class="sidebar-section-nav__item <?php if($parent_title == 'customers') echo 'is-active'; ?>">
							<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
								<span class="sidebar-section-nav__item-icon ua-icon-user"></span>
								<span class="sidebar-section-nav__item-text">Customers</span>
							</a>
							<ul class="sidebar-section-subnav" <?php if($parent_title == 'customers') echo 'style="display: block;"'; ?>>
								<li class="sidebar-section-subnav__item">
									<a class="sidebar-section-subnav__link <?php if($page_title == 'customers') echo 'is-active'; ?>" href="<?php echo site_url('station/customers'); ?>">Customers</a>
								</li>								
								<li class="sidebar-section-subnav__item">
									<a class="sidebar-section-subnav__link <?php if($page_title == 'add_customer') echo 'is-active'; ?>" href="<?php echo site_url('station/customers/add_customer'); ?>">Add New</a>
								</li>
							</ul>
						</li>
						<li class="sidebar-section-nav__item <?php if($page_title == 'drivers') echo 'is-active'; ?>">
							<a class="sidebar-section-nav__link" href="<?php echo site_url('station/drivers'); ?>">
								<span class="sidebar-section-nav__item-icon ua-icon-user"></span>
								<span class="sidebar-section-nav__item-text">Drivers</span>
							</a>
						</li>
						<li class="sidebar-section-nav__item <?php if($parent_title == 'trackingnumbers') echo 'is-active'; ?>">
							<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
								<span class="mdi mdi-clipboard-text sidebar-section-nav__item-icon"></span>
								<span class="sidebar-section-nav__item-text">Tracking Numbers</span>
							</a>
							<ul class="sidebar-section-subnav" <?php if($parent_title == 'trackingnumbers') echo 'style="display: block;"'; ?>>
								<li class="sidebar-section-subnav__item">
									<a class="sidebar-section-subnav__link <?php if($page_title == 'trackingnumbers') echo 'is-active'; ?>" href="<?php echo site_url('station/trackingnumbers'); ?>">Tracking Numbers</a>
								</li>
								<li class="sidebar-section-subnav__item">
									<a class="sidebar-section-subnav__link <?php if($page_title == 'getTrackingnumbers_pickup') echo 'is-active'; ?>" href="<?php echo site_url('station/trackingnumbers/getTrackingnumbers_pickup'); ?>">Pickup Request</a>
								</li>
								<li class="sidebar-section-subnav__item">
									<a class="sidebar-section-subnav__link <?php if($page_title == 'add_trackingnumber') echo 'is-active'; ?>" href="<?php echo site_url('station/trackingnumbers/add_trackingnumber'); ?>">Add New</a>
								</li>
								<li class="sidebar-section-subnav__item">
									<a class="sidebar-section-subnav__link <?php if($page_title == 'uploadexcel') echo 'is-active'; ?>" href="<?php echo site_url('station/uploadexcel'); ?>">Upload Excel file</a>
								</li>
							</ul>
						</li>
						
						<li class="sidebar-section-nav__item <?php if($page_title == 'notifications') echo 'is-active'; ?>">
							<a class="sidebar-section-nav__link" href="<?php echo site_url('station/Notifications'); ?>">
								<span class="sidebar-section-nav__item-icon ua-icon-bell"></span>
								<span class="sidebar-section-nav__item-text">Notifications</span>
							</a>
						</li>
					</ul>
				</div>    
			</div>
		</div>