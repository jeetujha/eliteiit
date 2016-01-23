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
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> manufacturer updated with success.';
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
      $reuestedId = $_REQUEST['id'];
      echo form_open_multipart('admin/faculties/update/?id='.$reuestedId, $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Faculty Name</label>
            <div class="controls">
              <input type="text" id="facultyName" name="facultyName" value="<?php  echo $manufacturers[0]['faculty_name']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
            
       <!--    <div class="control-group">
            <label for="inputError" class="control-label">Joined Date</label>
            <div class="controls">
              <input type="date" name="joinedDate" value="<?php  echo $manufacturers[0]['faculty_joined_date']; ?>" min="2014-10-31">
              <!--<span class="help-inline">OOps</span>--
            </div>
          </div>-->
            
          <div class="control-group">
            <label for="inputError" class="control-label">Qualification</label>
            <div class="controls">
              <input type="text" id="facultyQualification" name="facultyQualification" value="<?php  echo $manufacturers[0]['faculty_qualification']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
            
         <!-- <div class="control-group">
            <label for="inputError" class="control-label">Subjects Handle</label>
            <div class="controls">
              <input type="text" id="facultyHandleSubject" name="facultyHandleSubject" value="<?php  echo $manufacturers[0]['faculty_subject_hand']; ?>" >
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
            $description = $manufacturers[0]['faculty_description'];
            $data = array(
                'name'        => 'facultyDescription',
                'id'          => 'facultyDescription',
                'value'       => $description,
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
     