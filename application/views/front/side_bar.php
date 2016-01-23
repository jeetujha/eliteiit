<?php

?>
<link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('public/css/master.css'); ?>" rel="stylesheet" />
<div class="col-md-4 msg">
            <div class="">
                <h2 class="block-title-news">News And Events</h2>
                <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="height:300px;">
                    <!-- events calender -->
                    <div class="calenderNews">
                        <?php foreach ($home_news_events as $newsList) {
                            $dateExplode = explode('-', $newsList['news_start_date']);
                            $monthNum  = $dateExplode[1];
                            $dateNum  = $dateExplode[2];
                            $monthName = date('M', mktime(0, 0, 0, $monthNum, 10));
                        ?>
                            <div class="calender">
                                <!--<div class="calendar-small">
                                   <span class="s-month"><?php //echo $monthName; ?></span>
                                    <span class="s-date"><?php // echo $dateNum;?></span>
                                </div>-->
                                <div class="event-small-details">
                                    <h5 class="event-small-title">
                                       <a href="contact" ><?php echo $newsList['news_heading'];?></a>
                                    </h5>
                                     <!--<p class="event-small-meta small-text"><?php //echo $newsList['news_summary'];?>.<a href="<?php //echo base_url()."contact"?>">read more..</a></p>-->
                                 </div>
                            </div>
                        <?php }?>
                    </div>
                </marquee>
                <!-- events calender ends -->
            </div>
            <div>
                <h2 class="block-title">Our Clients</h2>
                <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($home_client_list as $key=>$clientInfo) {?>
                            <div class="item  <?php if($key==0){ echo "active";}?>">
                                <img class="kjhk" src="<?php echo base_url()."public/images/".$clientInfo['client_logo'];?>" alt="<?php echo $clientInfo['client_name'];?>">
                            </div>
                        <?php } ?>
                    </div>
                <!-- Controls -->
                </div>
            </div>
       
    </div>
</div>