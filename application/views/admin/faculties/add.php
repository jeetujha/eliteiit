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
            echo '<strong>Well done!</strong> new manufacturer created with success.';
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
      
      echo form_open_multipart('admin/faculties/add', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Faculty Name</label>
            <div class="controls">
              <input type="text" id="facultyName" name="facultyName" value="<?php echo set_value('facultyName'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
            
           <!--<div class="control-group">
            <label for="inputError" class="control-label">Joined Date</label>
            <div class="controls">
              <input type="date" name="joinedDate" value="<?php echo set_value('joinedDate'); ?>" min="2014-10-31">
              <!--<span class="help-inline">OOps</span>--
            </div>
          </div>-->
            
          <div class="control-group">
            <label for="inputError" class="control-label">Qualification</label>
            <div class="controls">
              <input type="text" id="facultyQualification" name="facultyQualification" value="<?php echo set_value('facultyQualification'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
            
        <!--  <div class="control-group">
            <label for="inputError" class="control-label">Subjects Handle</label>
            <div class="controls">
              <input type="text" id="facultyHandleSubject" name="facultyHandleSubject" value="<?php echo set_value('facultyHandleSubject'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>--
            </div>
          </div>-->
          
          <div class="control-group">
            <label for="inputError" class="control-label">Faculty Image</label>
            <div class="controls">
              <input type="file" name="image" id="clientLogo" size="20" />
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          
         <!-- <div class="control-group">
            <label for="inputError" class="control-label">Description</label>
            <div class="controls">
            <?php
            $data = array(
                'name'        => 'facultyDescription',
                'id'          => 'facultyDescription',
                'value'       => set_value('facultyDescription'),
                'rows'        => '5',
                'cols'        => '10',
                'style'       => 'width:50%',
              );

            echo form_textarea($data);
            
            ?>
            <!--<span class="help-inline">Woohoo!</span>--
            </div>
          </div>-->
            
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     