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
            echo '<strong>Well done!</strong> News updated with success.';
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
      echo form_open_multipart('admin/news/update/?id='.$reuestedId, $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">News Heading</label>
            <div class="controls">
              <input type="text" id="newsHeading" name="newsHeading" value="<?php echo $manufacturers[0]['news_heading']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          
          <div class="control-group">
            <label for="inputError" class="control-label">News Summary</label>
            <div class="controls">
              <input type="text" id="newsHeading" name="newsSummary" value="<?php echo $manufacturers[0]['news_summary']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
            
         <div class="control-group">
            <label for="inputError" class="control-label">News Description</label>
            <div class="controls">
              <input type="text" id="newsHeading" name="newsDescription" value="<?php echo $manufacturers[0]['news_description']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
            
          <div class="control-group">
            <label for="inputError" class="control-label">Events Start Date</label>
            <div class="controls">
              <input type="date" name="eventsStartDate" value="<?php echo $manufacturers[0]['news_start_date']; ?>" min="2014-11-09">
              <!--<span class="help-inline">OOps</span>-->
            </div>
          </div>
            
         <div class="control-group">
            <label for="inputError" class="control-label">Events End Date</label>
            <div class="controls">
              <input type="date" name="eventsEndDate" value="<?php echo $manufacturers[0]['news_end_date']; ?>" min="2014-11-11">
              <!--<span class="help-inline">OOps</span>-->
            </div>
          </div>
            
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     