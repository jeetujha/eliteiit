<?php
$segementStr = $this->uri->segment(2);
switch ($segementStr) {
    case 'online' :
?><section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/onlinetranng.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">Online Training</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp"></p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
        break;
?>
<?php
    case 'corporate':
?>
<section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/corptr.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">Corporate Training</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp">Excellent Technical knowledge is essential in organizations
 that helps organizational growth and, Improved the technical 
skills make work teams more effective, and allow representatives
 to achieve their potential.</p>
                        <p align="justify" id="tp">
To help meet the demand for higher level Technical Knowledge 
in the workplace, Testing Palace offers a high level technical 
training on different technologies like(Big Data, JAVA,Software 
Testing,SQL Server Development,SQL Server DBA ect..), as well as 
benchmarking and evaluation of Technical skills. </p>
                        <p align="justify" id="tp">Our expertise and excellent track record in Technical training
 allow our training teams to adorn your staff with the excellent
 technical terms in a professional context.</p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
break;
    case 'class_room':
?>
<section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/classroomtr.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">Class Room Training</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp">Classroom training has been the foundation of student and
 employees education for years. Participant learn best and have
 the greatest opportunity for retention when they learn from a live
 instructor in a classroom. Classroom training gives the opportunity 
to incorporate various learning principle, also includes lectures, 
brief demonstrations, computer Lab for execution, and retention quizzes.</p>
                        <p align="justify" id="tp">Testing palace classroom training provides instructor-led classes
 in a dynamic learning environment. Courses give you a good skills
 in the real world and are delivered where it's convenient.
</p>
                        <p align="justify" id="tp">In classroom training student can learn the things effectively.
 Classroom training gives you valuable hands-on training from a 
certified Testing Palace trainer that will help you quickly learn 
how to make the most from Testing.</p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
break;
    case 'college':
?>
<section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/collegetr.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">College Training</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp"></p>
                        <p align="justify" id="tp"></p>
                        <p align="justify" id="tp"></p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
break;
    case 'istqb_certificate':
?>
<section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/istqbtrn.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">ISTQB Certification Training</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp">
ISTQB Certification is an internationally accepted software testing
 certification that is conducted online by its Member Boards through 
a testing Exam Provider. An Exam Provider is an organization licensed
 by a Member Board(s) to offer exams locally and internationally including 
online testing certification. Candidates who successfully pass the exam are 
given the ISTQB Certified Tester certificate. This website provides all the QA
 Training material needed to pass the ISTQB Foundation level exam.</p
                        <p align="justify" id="tp">International Software Testing Qualifications Board (ISTQB) Certification 
is available in 70 countries where ISTQB is represented by a Member Board.
 Member Board names differ from country to country. For example, the member 
board in United States is called American Software Testing Qualifications Board (ASTQB),
 in India its called Indian Testing Board (ITB). However the syllabus for the exam,
 the questions, pattern of the exam and all other details remain the same.
 ISTQB is a non profit organization run volunteers and industry experts.
</p>
                        <p align="justify" id="tp">
Testing Palace will train the respective students and help them 
to clear ISTQB certification.</p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
break;
    case 'recruitment':
?>
<section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/requrmentservice.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">Recruitment Service</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp">Testing Palace recruitment
                        services has been serving the Industry since 2014.
                        Our high profile attracts a constant stream Of quality
                        employment from local, national Companies making use
                        a recruitment agency of popular choice.</p>
                        <p align="justify" id="tp">Whether you are seeking
                        employment or looking for staff, Testing Palace recruitment
                        solutions helps place skilled professionals in temporary and
                        permanent positions, and find a perfect professional for your
                        company.</p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
    break;
    default :
?><section class="about">
    <div class="container about">
        <div class="row">
            <div class="col-md-8">
                <div class="row inner1">
                    <div class="col-md-12">
                        <img class="forInner" src="<?php echo base_url() . 'public/' ?>images/teachingwithtech.jpg" alt="..."/>
                    </div>

                </div>
                <div class="row inner pages">
                    <div class="col-md-12">
                        <h2 class="block-title">Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify" id="tp">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                            PageMaker including versions of Lorem Ipsum.</p>
                    </div>

                </div>
            </div>
<?php $this->load->view('front/side_bar'); ?>
        </div>

    </div>

</section>
<?php
        break;
}
