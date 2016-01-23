<link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('public/css/master.css'); ?>" rel="stylesheet" />

        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
        function msieversion() {
             var ua = window.navigator.userAgent;
             var msie = ua.indexOf("MSIE");
             var currentVersion = parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
             if (currentVersion < 9 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  {    // If Internet Explorer, return version number
                 alert("Please upgrade your Browser,currently you are using IE= " + parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))) + " upgrade it to IE 9,10 or 11 for the actual view of the Website otherwise it will load a basic html page!!!!!");
                 return false;
             }
        }
</script>​
<div id="k-footer">
    <div class="container">
    	<div class="foot-heading">
	    	<div class="row">
	    		<div class="col-md-4">
	    			<h1>Site MAp</h1>
	    		</div>
	    		<div class="col-md-4">
	    			<h1>COURSES</h1>
	    		</div>
	    		<div class="col-md-4">
	    			 <h1>Contact Information</h1>
	    		</div>
	    	</div>
	 </div>
        <div class="row no-gutter"><!-- row -->
            <div class="col-lg-4 col-md-4"><!-- widgets column left -->
                <div class="col-padded col-naked">
                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                        <li class="widget-container widget_nav_menu"><!-- widgets list -->
                            <ul>
                                <li><a href="<?php echo base_url();?>" title="menu item">Home</a></li>
                                <li><a href="<?php echo base_url().'about';?>" title="menu item">About Us</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Courses</a></li>
                                <li><a href="<?php echo base_url().'faculty';?>" title="menu item">Faculty</a></li>
                                <li><a href="<?php echo base_url().'whychooseus';?>" title="menu item">Why Elite IIT?</a></li>
                                <li><a href="<?php echo base_url().'infrastructure';?>" title="menu item">Infrastructure</a></li>
                                <li><a href="<?php echo base_url().'contact';?>" title="menu item">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- widgets column left end -->
            <div class="col-lg-4 col-md-6"><!-- widgets column center -->
                <div class="col-padded col-naked">
                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                        <li class="widget-container widget_nav_menu"><!-- widgets list -->
                            <ul>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Primary Coaching</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Secondary Coaching</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Degree Entrance Exams</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">PG Entrance Exams</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">CA, CS, ICWA (CMA)</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Competative Entrance Exams</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Languages Classes</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Software Training</a></li>
                                <li><a href="<?php echo base_url().'Cources';?>" title="menu item">Subjects Coaching</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- widgets column center end -->
            <?php
            $segementOne = "";
            $segementOne = trim($this->uri->segment(1));
            if ($segementOne != "feedback" && $segementOne != "contact") {
                ?>
                <div class="col-lg-4 col-md-6"><!-- widgets column right -->
                    <div class="col-padded col-naked">
                        <form method="POST">
                            <ul class="list-unstyled clear-margins">
                                <li class="widget-container widget_recent_news">
                                    <div class="row margin10">
                                        <div class="col-lg-5 col-md-5">
                                            <span class="title-form">Your Name <span class="mand">*</span> : </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <input type="text" id="name" name="dname" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="row margin10">
                                        <div class="col-lg-5 col-md-5">
                                            <span class="title-form">Contact Number <span class="mand">*</span> : </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <input type="text" id="cnum" name="dmobile" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="row margin10">
                                        <div class="col-lg-5 col-md-5">
                                            <span class="title-form">Course Name  :</span> 
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                        	<input type="text" name="courcename" value="" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="row margin10">
                                        <div class="col-lg-5 col-md-5">
                                            <span class="title-form"> Message : </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <textarea row="4" cols="40" name="cmessage" style="width:100%;"></textarea> 
                                        </div>
                                    </div>
                                    <div class="row  margin10 fdreset">
                                        <!--<input type="submit" id="submit" name="submit" class="btn btn-primary pull-right">-->
                                         <button class="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </li>

                            </ul>
                        </form>
                    </div>

                </div><!-- widgets column right end -->
            <?php } else { ?>
                <div class="col-lg-4 col-md-4">
                    <div class="col-padded col-naked">
                         <h1 class="title-widget">Our Clients</h1>
                        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($home_client_list as $key => $clientInfo) { ?>
                                    <div class="item  <?php if ($key == 0) {
                                echo "active";
                                } ?>">
                                        <img class="kjhk" src="<?php echo base_url() . "public/images/" . $clientInfo['client_logo']; ?>" alt="<?php echo $clientInfo['client_name']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Pr-footer Ends hr-->


<!-- footer starts hr-->
<div id="l-footer">
    <div class="container">
        <div class="col-lg-4 col-md-4"><!-- widgets column left -->
		<div class="col-padded col-naked">
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_nav_menu"><!-- widgets list -->
                        <h1 class="title-widget">Contact Us</h1>
                        <div itemscope="" class="contactform"> 
                            <h2 class="title-median m-contact-subject" itemprop="name">ELITE IIT</h2>
                            <div class="m-contact-address">
                                <p class="formenc">
                                    353/63, 41st Cross,<br>
                                   2nd Main Road,<br>
                                    8th Block Jayanagar, ,<br>
                                    Bangalore – 560082 (Karnataka)  
                                </p>
                               <a href="mailto:contact@eliteiit.com?Subject=Hello%20again"> Email Add :  <span>contact@eliteiit.com</span></a>
                            </div>
                            <div class="m-contact-tel-fax">
                                <span class="m-contact-tel">Tel: <span itemprop="tel"> 080-41160870 / 8050506222 / 8050506333</span></span><br>
                                <a href="http://eliteiit.com" target="_blank">www.eliteiit.com</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>	
        </div><!-- widgets column left end -->
        <div class="col-lg-4 col-md-4"><!-- widgets column left -->
        </div><!-- widgets column left end -->
        <div class="col-lg-4 col-md-4"><!-- widgets column left -->
            <div class="col-padded col-naked">
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_nav_menu"><!-- widgets list -->
                        <h1 class="title-widget">Social Links</h1>
                        <div class="social-icons">
                            <ul class="list-unstyled list-inline">
                                <li><a href="https://plus.google.com/107900139378290210928/photos?gl=in&hl=en" target="_blank" title="Contact us"><i class="fa fa-google google-plus"></i></a></li>
                                <li><a href="https://twitter.com/eliteiit" title="Twitter" target="_blank"><i class="fa fa-twitter twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/eliteiit?ref=hl" target="_blank" title="Facebook"><i class="fa fa-facebook facebook"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- widgets column left end -->
    </div>
</div>
<!-- footer Ends hr-->


<!-- Copy rgt section starts hr-->
<div id="k-subfooter"><!-- subfooter -->
    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <div class="col-lg-12">
                <p class="copy-text text-inverse">
                    &COPY; 2015 <a href="http://www.iwebtechnik.com" target="_blank">IwebTechnik.com</a> All rights reserved.
                </p>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</div>
<?php
$segementOne = "";
$segementOne = $this->uri->segment(1);
if ($segementOne != 'batch') {
    ?>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url() . 'public/' ?>js/bootstrap.min.js"></script>
    <?php } else {
    ?>

    <script src="<?php echo base_url() . 'public/' ?>js/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() . 'public/' ?>js/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() . 'public/' ?>js/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() . 'public/' ?>js/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url() . 'public/' ?>js/js/custom.js"></script>
    <?php
}
?>
<script src="<?php echo base_url() . 'public/' ?>js/js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'public/' ?>js/js/sweetalert.css">
<script type="text/javascript">
(function($){
    $(document).ready(function(){
        $("button.submit").click(function(event){
            event.preventDefault();
            $.ajax({
                url: 'http://eliteiit.com/contact/contact_data',
                type: "POST",
                data: $(this).closest('form').serialize(),
                success : function(res){
                    // console.log(res.type);
                    swal("Contact Us!", "Thanks for your interest! We'll contact you soon.", "success");
                }
            });
        });
    });
})(jQuery);
</script>
</body>
</html>