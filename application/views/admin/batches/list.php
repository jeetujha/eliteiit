<div class="container top">
  <ul class="breadcrumb">
    <li>
      <a href="<?php echo site_url("admin"); ?>">
        <?php echo ucfirst($this->uri->segment(1));?>
      </a> 
      <span class="divider">/</span>
    </li>
    <li class="active">
      <?php echo ucfirst($this->uri->segment(2));?>
    </li>
  </ul>
  <div class="page-header users-header">
    <h2>
      <?php echo ucfirst($this->uri->segment(2));?> 
      <a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Add a new</a>
    </h2>
  </div>
  <div class="row">
    <div class="span12 columns">

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Course Name</th>
                <th class="green header">Course Duration</th>
                <th class="red header">Course Timing</th>
                <th class="red header">Course Start Date</th>
                <th class="red header">Faculty</th>
                <th class="red header">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($batches as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['course_duration'].'</td>';
                echo '<td>'.$row['course_from_timing'].'-'.$row['course_to_timing'].'</td>';
                echo '<td>'.$row['course_start_date'].'</td>';
                echo '<td>'.$row['faculty_name'].'</td>';
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/batches/update/?id='.$row['id'].'" class="btn btn-info">view & edit</a>  
                  <a href="'.site_url("admin").'/batches/delete/?id='.$row['id'].'" class="btn btn-danger">delete</a>
                </td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>