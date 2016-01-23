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
      <?php echo "Latest News";?> 
      <?php $menuId=$_REQUEST['id'] ?>
      <a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2).'/add?id='.$menuId; ?>" class="btn btn-success">Add a new</a>
    </h2>
  </div>
  <div class="row">
    <div class="span12 columns">

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Title</th>
                <th class="yellow header headerSortDown">Type</th>
                <th class="red header">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach($batches as $row)
              {
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$row['title'].'</td>';
                if($row['type'] == 1)
                {
                  echo '<td>Simple Menu</td>';
                }
                else
                {
                 echo '<td>Category</td>';
                }
                echo '<td>'.$row['url'].'</td>';
                if($row['type']==1)
                {
                  echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/menus/update/?id='.$row['id'].'" class="btn btn-info">edit</a> 
                  <a href="'.site_url("admin").'/menus/delete/?id='.$row['id'].'" class="btn btn-danger">delete</a>
                  </td>';
                }
                else
                {
                  echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/menus/update/?id='.$row['id'].'" class="btn btn-info">edit</a> 
                   <a href="'.site_url("admin").'/sub_menus/?id='.$row['id'].'" class="btn btn-info">Add</a>
                  <a href="'.site_url("admin").'/menus/delete/?id='.$row['id'].'" class="btn btn-danger">delete</a>
                  </td>';
                }

                echo '</tr>';
                $i=$i+1;
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>