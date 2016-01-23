<!-- Container/section1 starts hr-->
<section class="contanr1">
    <div class="rgtCor">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active" style="color:#ffffff;"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" style="color:#ffffff;"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" style="color:#ffffff;"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3" style="color:#ffffff;"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!--<img class="imgSize" src="<?php echo base_url().'public/'?>images/slide3.jpg" alt="...">-->
                    <img class="imgSize" src="<?php echo base_url().'public/'?>images/photo1.PNG" alt="...">
                    <div class="carousel-caption">
                        <h2 style="color:#ffffff;"></h2>
                        <h4 style="color:#ffffff;"></h4>
                        <a href="<?php echo base_url().'services/recruitment';?>" class="btn btn-primary"></a>
                    </div>

                </div>
                <div class="item">
                    <img class="imgSize" src="<?php echo base_url().'public/'?>images/grads_1.jpg" alt="...">
                    
                    <div class="carousel-caption">
                        <h2 style="color:#ffffff;"></h2>
                        <h4 style="color:#ffffff;"></h4>
                        <a href="<?php echo base_url().'services/online';?>" class="btn btn-primary"></a>
                    </div>
                </div>
                <div class="item">
                    <img class="imgSize" src="<?php echo base_url().'public/'?>images/el-slider.png" alt="...">
                    
                    <div class="carousel-caption">
                        <h2 style="color:#ffffff;"></h2>
                        <h4 style="color:#ffffff;"></h4>
                        <a href="<?php echo base_url().'services/online';?>" class="btn btn-primary"></a>
                    </div>
                </div>
                 
                <div class="item">
                    <img class="imgSize" src="<?php echo base_url().'public/'?>images/elite-slider.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2 style="color:#ffffff;"></h2>
                        <h4 style="color:#ffffff;"></h4>
                        <a href="#" class="btn btn-primary"></a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
        </div>
    </div>
</section>

<!-- Container/section1 Ends hr-->
<!-- Container/section2 starts hr-->
<section class="part2">
    <div class="container">
        <div class="row paddingBtm">


            <div class="col-md-8">
                <div class="row welcomemassege">
                    <h2 class="block-title2">Welcome to ELITE IIT</h2>
                    <p align="justify" id="tp">ELITE IIT was established with the sole and sacred objective of imparting quality education to the students indesirousCompetitive Examinations, Academic Coaching and Software Training at an affordablefee structure. The core members of ELITE IIT team adopt the mostInnovative, Meticulous and Extremely Lucid methods of teaching supplemented by self developed conceptual think tanks and techniques. ELITE IIT was started in a small room with just 12 students, but with strong self determination, belief and hard work.</p><p> Today ELITE IIT is equipped with all modern amenities to facilitate the students with a conducive and comfortable learning environment. Excellence in multi  branch of education ultimately depends on the faculties  and we have those who are among the best in the respective branch. Faculties at ELITE IIT possesses outstanding academic credentials. Our faculty members are known for their exemplary teaching skill. Teaching in ELITE IIT is a life time mission. </p>
                </div>
                <!--<div class="paddingFro">
                    <div class="row studentsandfaculty">
                        <div class="col-md-6 leftbook">
                            <div class="bookcontentrgt">
                                <h3 class="fontKaushan">New Courses</h3>
                                <div class="row">
                                    <div id="carousel-example-generic5" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->

                                        <!-- Wrapper for slides -->
                                        <!--<div class="carousel-inner">
                                            <?php // foreach ($index_batch_list as $key=>$batchInfo) {
                                            ?>
                                            <div class="item <?php // if($key==0){ echo "active";}?>">
                                                <div class="row corpad">
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="startDate">Course :</span>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="datefield"><?php // echo $batchInfo['course_name'];?></span>
                                                    </div>
                                                </div>
                                                <div class="row corpad">
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="startDate">Duration :</span>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="datefield"><?php // echo $batchInfo['course_duration'];?></span>
                                                    </div>
                                                </div>
                                                <div class="row corpad">
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="startDate">Batches:</span>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="datefield"><?php // echo $batchInfo['course_type'];?></span>
                                                    </div>
                                                </div>-->
                                                <!--<div class="row corpad">
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="startDate">Timings :</span>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="datefield"><?php //echo date('h:i:s a', strtotime($batchInfo['course_from_timing']))."-".date('h:i:s a', strtotime($batchInfo['course_to_timing']));?></span>
                                                    </div>
                                                </div>-->
                                                <!--<div class="row corpad">
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="startDate">Starting Date :</span>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <span class="datefield"><?php // echo $batchInfo['course_start_date'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php // } ?>
                                        </div>
                                        <!-- Controls -->
                                        <!--<div class="row controler">
                                            <div class="col-lg-5 col-md-5 tprdm">
                                                <a href="<?php // echo base_url().'batch';?>" class="btn btn-primary">More Info..</a>
                                            </div>
                                            <div class="col-lg-7 col-md-7 arrow1">
                                                <a class="left" href="<?php // echo base_url()."index/"?>#carousel-example-generic5" role="button" data-slide="prev"><img src="<?php echo base_url().'public/'?>images/arrlft.png" alt="..."></a>
                                                <a class="right" href="<?php  // echo base_url()."index/"?>#carousel-example-generic5" role="button" data-slide="next"><img src="<?php echo base_url().'public/'?>images/arrrgt.png" alt="..."></a>

                                            </div>
                                        </div>
                                        <!-- Controls -->

                                   <!-- </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 rgtbook">
                            <div class="bookcontentleft">
                                <h3 class="fontKaushan">Faculties</h3>
                                <div class="row corpad">
                                    <div id="carousel-example-generic7" class="carousel slide vertical" data-ride="carousel">
                                        <!-- Indicators -->

                                        <!-- Wrapper for slides -->
                                       <!-- <div class="carousel-inner">
                                            <?php // foreach ($index_faculty_list as $key=>$facultyInfo) {?>
                                            <div class="item <?php // if($key==0){ echo "active";}?>">
                                                <div class="row corpad1">
                                                    <div class="col-lg-4 col-md-4">
                                                        <?php // if($facultyInfo['faculty_image_path']!=""){?>
                                                           <img class="imageplaceholder" src="<?php // echo base_url()."public/images/faculties/".$facultyInfo['faculty_image_path'];?>" alt="<?php echo $facultyInfo['faculty_name'];?>"/>
                                                        <?php  // }else{?>
                                                            <img class="imageplaceholder" src="<?php // echo base_url().'public/'?>images/placeholder.png" alt="<?php echo $facultyInfo['faculty_name'];?>"/>
                                                        <?php // }?>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 namepaggingTop">
                                                        <span class="datefield"><?php // echo $facultyInfo['faculty_name'];?></span>
                                                        <span class="datefield">(<?php // echo $facultyInfo['faculty_qualification'];?>)</span>
                                                    </div>
                                                </div>
                                                <div class="row corpad1">
                                                   <!-- <div class="col-lg-4 col-md-4">
                                                        <span class="startDate">Degree :</span>
                                                    </div>-->
                                                   <!-- <div class="col-lg-8 col-md-8">
                                                        
                                                    </div>
                                                </div>
                                             <!--   <div class="row corpad1">
                                                    <?php // echo $facultyInfo['faculty_description'];?>
                                                </div>-->
                                         <!--</div>
                                        <?php // } ?>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <a href="<?php // echo base_url().'faculty';?>" class="btn btn-primary" style="margin-left: 20px;">More Info..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <!--<div class="row">
                    <h2 class="block-title">Testimonial</h2>
                    <div class="row testmon">
                        <div class="col-md-12 bgImagetestimonial">
                            <div id="carousel-example-generic9" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- Wrapper for slides -->
                                <!--<div class="carousel-inner">
                                    <?php
                                    // foreach ($index_testimonial_list as $key=>$testimoniesInfo) {?>
                                    <div class="item  <?php // if($key==0){ echo "active";}?>">
                                        <p><i class="fa fa-quote-left"></i><?php // echo $testimoniesInfo['description'];?><i class="fa fa-quote-right"></i></p>
                                        <div class="row">
                                            <div class="col-md-5 ">
                                                <?php // if($testimoniesInfo['student_img_path']!=""){?>
                                                        <img class="imageplaceholder pull-right" src="<?php // echo base_url()."public/images/testimonials/".$testimoniesInfo['student_img_path'];?>" alt="<?php echo $testimoniesInfo['student_name'];?>"/>
                                                <?php // }else{?>
                                                        <img class="imageplaceholder pull-right" src="<?php // echo base_url().'public/'?>images/placeholder.png" alt="<?php echo $testimoniesInfo['student_name'];?>"/>
                                                <?php // }?>
                                            </div>
                                            <div class="col-md-7">
                                                <?php // echo $testimoniesInfo['student_name'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php // } ?>
                                </div>

                                <!-- Controls -->

                            <!--</div> 
                        </div>
                    </div>
                </div>-->

                
            </div>
            <?php $this->load->view('front/side_bar.php');?>
        </div>
</section>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript" defer="defer" src="https://mylivechat.com/chatinline.aspx?hccid=50196712"></script>

<!-- Container/section2 Ends hr-->