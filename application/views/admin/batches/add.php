    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">New</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Adding <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>
 
      <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new bactch created with success.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');
      
      //form validation
      echo validation_errors();
      
      echo form_open('admin/batches/add', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Course </label>
            <div class="controls">
              <input type="text" id="courseName" name="courseName" value="<?php echo set_value('courseName'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label"> Duration</label>
            <div class="controls">
              <input type="text" id="courseDuration" name="courseDuration" value="<?php echo set_value('courseDuration'); ?>">
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>          
          <!--<div class="control-group">
            <label for="inputError" class="control-label">Course From Timing</label>
            <div class="controls">
              <input type="time" id="courseFrmTiming" name="courseFrmTiming" value="<?php echo set_value('courseFrmTiming'); ?>">
              <!--<span class="help-inline">Cost Price</span>--
            </div>
          </div>
            
           <div class="control-group">
            <label for="inputError" class="control-label">Course To Timing</label>
            <div class="controls">
              <input type="time" id="" name="courseToTiming" value="<?php echo set_value('courseToTiming'); ?>">
              <!--<span class="help-inline">Cost Price</span>--
            </div>
           </div>-->
            <?php
          $optionsCourseType = array( '-1' =>  'Select Course Type',
                               'regular'=> 'Regular',
                               'weekend'=>'Weekend',
                                 'regular/Weekend'=> 'Regular/Weekend',
                               'online'=>'Online',
                               'cooperate'=>'cooperate',
                                'project'=>'Project');
          echo '<div class="control-group">';
            echo '<label for="courseType" class="control-label">Batches</label>';
            echo '<div class="controls">';
              //echo form_dropdown('manufacture_id', $options_manufacture, '', 'class="span2"');
              
              echo form_dropdown('courseType', $optionsCourseType, set_value('courseType'), 'class="span2"');

            echo '</div>';
          echo '</div>';
          ?>
        
            
          <div class="control-group">
            <label for="inputError" class="control-label">Starting Date</label>
            <div class="controls">
              <input type="text" name="courseDate" value="<?php echo set_value('courseDate'); ?>" min="2014-10-31">
              <!--<span class="help-inline">OOps</span>-->
            </div>
          </div>
         <!-- <div class="control-group">
            <label for="inputError" class="control-label">Faculty Name</label>
            <div class="controls">
              <input type="text" id="courseFacultyName" name="courseFacultyName" value="<?php echo set_value('courseFacultyName'); ?>">
              <!--<span class="help-inline">Cost Price</span>--
            </div>
          </div>-->
         
            
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     