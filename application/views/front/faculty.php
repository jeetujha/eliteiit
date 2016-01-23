<section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">Our Faculty</h2>
                        <p align="justify" id="tp">Our teaching faculty includes highly qualified and experienced teachers, who with their simple and lucid methods and conceptual short cut tricks and techniques help the students, solve maximum number of questions in minimum time, facilitating the students not only to get selected but also to secure topmost positions. Our students are excelling largely due to the faculties’ unique unparalleled teaching methodology, commitment and dedication. All the students’ doubts are solved and concepts are made crystal clear to them in the classroom itself.</p>
                        <p align="justify" id="tp"> With the distinguished and expertise faculties for every subject, ELITE IIT stands head high much ahead of all other institutes. ELITE IITtoday is an exemplary household name in the field of education for its innovative andenhancedteaching methodologies which includes impeccable dedicated quality and honesty.</p>
                    </div>
                </div>
                <?php 
        		$i=1;
            		foreach($faculty_list as $facultyInfo) {
            		if($i%4==0){echo '<div class="row">';}
        		?>
			    <div class="col-md-3">
				    <img class="forInner2" src="<?php echo base_url()."public/images/faculties/".$facultyInfo['faculty_image_path'];?>" alt="<?php echo $facultyInfo['faculty_name'];?>"/>
				    <div class="personNamefac">
                        <h4><?php echo $facultyInfo['faculty_name'];?></h4>
                        <p><span class="persondeg">Degree : </span><?php echo $facultyInfo['faculty_qualification'];?></p>
                    </div>
			     </div>
		        <?php if($i%4==0){echo '</div>';} $i++;}?>
            </div>
            <?php $this->load->view('front/side_bar');?>
        </div>       
    </div>                
</section>
