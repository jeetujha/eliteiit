<section class="about">
    <div class="container about">
        <div class="row">
            
            <div class="col-md-8">
                <h2 class="block-title">List Of Batches</h2>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Batches Details
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Duration</th>
                                        <!--<th>Timing</th>-->
                                        <th>Start Date</th>
                                      <!--  <th>Faculty</th>
                                        <th>Type</th>-->

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($batches_list as $batchesInfo) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $batchesInfo['course_name']; ?></td>
                                            <td><?php echo $batchesInfo['course_duration']; ?></td>
                                           <!-- <td><?php echo date('h:i:s a', strtotime($batchesInfo['course_from_timing']))."-".date('h:i:s a', strtotime($batchesInfo['course_to_timing'])); ?></td> -->
                                            <td><?php echo $batchesInfo['course_start_date']; ?></td>
                                          <!--  <td><?php echo $batchesInfo['faculty_name']; ?></td>
                                            <td><?php echo $batchesInfo['track']; ?></td>-->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!--End Advanced Tables -->
            </div>
             <?php $this->load->view('front/side_bar');?>
        </div>
        
    </div>

</section>