<script src="<?php echo base_url().'public/ckeditor/ckeditor.js'?>"></script>
<link rel = "<?php echo base_url().'public/ckeditor/sample/sample.css'?>"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script href="<?php echo base_url().'public/ckeditor//adapters/jquery.js';?>"></script>
    <div class="container top">
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
        <a href="<?php echo site_url("admin/courses"); ?>">
          <?php echo ucfirst($this->uri->segment(2));?>
        </a>  
          <span class="divider">/</span>
        </li>
         <li class="active">
          <?php echo ucfirst($this->uri->segment(3));?>
        </li>
      </ul>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
          </div>  <form action="<?php echo base_url().'admin/courses/add'; ?>" method="post">
          Course Name<input type="text" name="course_name" required>
		      <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
			  <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" onclick="location.href='<?php echo base_url();?>admin/courses'">Cancel</button>
          </div>
	</form>
  </div>
 </div>