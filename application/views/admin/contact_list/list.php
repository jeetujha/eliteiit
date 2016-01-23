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
  <div class="row">
    <div class="span12 columns">
      <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th class="header">#</th>
            <th class="yellow header headerSortDown">Name</th>
            <th class="yellow header headerSortDown">Mobile No.</th>
            <th class="yellow header headerSortDown">Cource</th>
            <th class="yellow header headerSortDown">Date</th>
            <th class="yellow header headerSortDown">Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i =1;
            foreach($list as $row)
            {
              echo '<tr>';
              echo '<td>'.$i.'</td>';
              echo '<td>'.$row['name'].'</td>';
              echo '<td>'.$row['mobile'].'</td>';
              echo '<td>'.$row['courcename'].'</td>';
              echo '<td>'.$row['send_data'].'</td>';
              echo '<td>'.$row['message'].'</td>';
              echo '<td class="crud-actions">
                <a href="'.site_url("admin").'/contcat_list/delete/?id='.$row['id'].'" class="btn btn-danger">delete</a>
                </td>';
                echo '</tr>';
                $i=$i+1;
              }
          ?>      
      </tbody>
    </table>
    <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>
  </div>
</div>