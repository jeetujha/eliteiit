<?php ob_start();?>
<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>Elite Control Panel</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>public/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand">Elite-IIT</a>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'batches'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/batches">Batches</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'faculties'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/faculties">Faculties</a>
	        </li>
                <li <?php if($this->uri->segment(2) == 'settings'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/settings">Settings</a>
	        </li>
                <li <?php if($this->uri->segment(2) == 'clients'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/clients">Clients</a>
	        </li>
                <li <?php if($this->uri->segment(2) == 'courses'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/courses">Courses</a>
	        </li>
                <li <?php if($this->uri->segment(2) == 'news'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/news">News And Events</a>
	        </li>
	        <li>
	        	<a href="<?php echo base_url();?>admin/testimonials">Testimonial</a>
	        </li>
	        <li>
	        	<a href="<?php echo base_url();?>admin/menus">Menu</a>
	        </li>
	        <li>
	        	<a href="<?php echo base_url();?>admin/latest_updates">Letest</a>
	        </li>
	        <li>
	        	<a href="<?php echo base_url();?>admin/contcat_list">Contact</a>
	        </li>
	    
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>	
