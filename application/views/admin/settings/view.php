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
                <th class="yellow header headerSortDown">Module</th>
                <th class="yellow header headerSortDown">Content</th>
                <th class="yellow header headerSortDown">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach($settings as $row)
              {
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$row['menu'].'</td>';
                echo '<td>'.$row['content'].'</td>';
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/settings/edit/?id='.$row['id'].'" class="btn btn-info">view & edit</a>  
                 </td>';
                echo '</tr>';
                $i++;
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>