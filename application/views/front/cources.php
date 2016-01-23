<!-- Course Page Satrt -->
<div class="course">
    <!-- Container -->
    <div class="container">
        <div class="panel with-nav-tabs panel-default">
        <div class="row">
            <div class="col-md-2">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                      <?php 
                        $i = 1;
                        foreach($query as $course) {  ?>
                        <li><a href="#tab<?php echo $i;?>default" data-toggle="tab"><?php echo $course['course_name'] ?></a></li>
                        <?php 
                            $i++;
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel-body">
                    <div class="tab-content">
                     <?php 
                     $i = 1;
                     foreach($query as $course) {  
                     if($i == 1) {?>
                     <div class="tab-pane fade in active"  id="tab<?php echo $i;?>default">
                     <?php }
                      else{
                     ?>
                         <div class="tab-pane fade in" id="tab<?php echo $i;?>default">
                         <?php } ?>
                               <p> <?php echo $course['content'] ?></p>
                         </div>
                      <?php 
                            $i++;
                      } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Course Page end -->