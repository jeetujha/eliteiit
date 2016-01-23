
<section class="about">
	<div class="c-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8198408138564!2d77.577822!3d12.919298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15763973d41d%3A0xc9f625bd8d772f89!2sELITE+IIT!5e0!3m2!1sen!2sin!4v1431424082084" width="100%" height="450" frameborder="0" style="border:0"></iframe>
	</div>
    <div class="container about">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-6">
                        <h2 class="block-title">Contact Address</h2>
                        <h3>ELITE IIT</h3>
                        <p class="formenc">	
                            353/63, 41st Cross,<br>
                           2nd Main Road,<br>
                            8th Block Jayanagar, ,<br>
                            Bangalore – 560082 (Karnataka)  <br>
                            Add Web : <a href="http://elite.iwebtechnik.com">www.eliteiit.com</a><br>
                            Contact Number: 080-41160870 / 8050506222 / 8050506333 / 7795400010 <br>
                            Email ADDRESS : contact@eliteiit.com <br>
                            <br>
                            <br></p>
                    </div>
                    <form  method="POST" name="contact" id="contact">
                    <!--<?php // $attributes = array("name" => "contact" , "id" => "contact" , "method" => "POST");
                        //echo form_open($attributes);?>-->
                        <div class="col-md-6">
                            <h2 class="block-title">Contact Us</h2>

                            <div class="row margin10">
                                <div class="col-lg-5 col-md-5">
                                    <span class="title-form">Your Name <span class="mand">*</span> : </span>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <input type="text" id="dname" name="dname" class="form-control"> 
                                </div>
                            </div>
                            
                            <div class="row margin10">
                                <div class="col-lg-5 col-md-5">
                                    <span class="title-form">Contact Number <span class="mand">*</span> : </span>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <input type="text" id="dmobile" name="dmobile" class="form-control"> 
                                </div>
                            </div>
                            
                            <div class="row margin10">
                                <div class="col-lg-5 col-md-5">
                                    <span class="title-form">Course Name  :</span> 
                                </div>
                                <div class="col-lg-7 col-md-7">
                                	<input type="text" name="courcename" class="form-control">
                                </div>
                            </div>
                            <div class="row margin10">
                                <div class="col-lg-5 col-md-5">
                                    <span class="title-form"> Message : </span>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <input type="text" id="dOtherCourse" name="cmessage" class="form-control"> 
                                </div>
                            </div>
                            
                            <div class="row  margin10 fdreset">
                                <button class="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                            <div class="error">
                                <?php 
                                if(isset($message) && $message!=""){ echo $message;} 
                                ?>
                            </div>
                        </div>
                    <?php // echo form_close(); ?>
                   </form>
                </div>


            </div>

        </div>

    </div>

</section>
<!-- Container/section1 Ends hr-->