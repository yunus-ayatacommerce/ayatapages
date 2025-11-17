<div data-aos="<?php print $animation_name1;?>" data-aos-duration="500" data-aos-delay="0" style="max-width:800px;margin:0 auto;">
    <p class="text-start text-md-center pt-2 mb-2">A one-stop business solution consultancy. An implementation centre that encompasses both business and technology inventively. We clearly define the business inter-operations between various systems implemented through an effective IT strategy. A highly experienced management team. Proven track records in project management. We apply leading-edge technology and best operating practices from our global strategic partners.</p>
    <p class="text-start text-md-center pt-2 mb-2">A one-stop business solution consultancy. An implementation centre that encompasses both business and technology inventively. We clearly define the business inter-operations between various systems implemented through an effective IT strategy. A highly experienced management team. Proven track records in project management. We apply leading-edge technology and best operating practices from our global strategic partners.</p>
    </div>
     <div class="d-flex justify-content-center pt-4 count-data">
     <div class="px-3" data-aos="<?php print $animation_name2;?>" data-aos-duration="300" data-aos-delay="400">
      <h3>432K+<?php //print $data['wo are we']['count'][0]['label'] ;?></h3>
      <p>Projects<?php //print $data['wo are we']['count'][0]['title'] ;?></p>
     </div>
     <div class="px-3" data-aos="<?php print $animation_name2;?>" data-aos-duration="300" data-aos-delay="700">
        <h3>200K+<?php //print $data['wo are we']['count'][1]['label'] ;?></h3>
        <p>Clients<?php //print $data['wo are we']['count'][1]['title'] ;?></p>
     </div>
     <div class="px-3" data-aos="<?php print $animation_name2;?>" data-aos-duration="300" data-aos-delay="1000">
        <h3>10K+<?php //print $data['wo are we']['count'][2]['label'] ;?></h3>
        <p>Employees<?php //print $data['wo are we']['count'][2]['title'] ;?></p>
     </div>
     </div>
     <?php if(is_home()):?>
     <div class="text-center" data-aos="<?php print $animation_name1;?>" data-aos-duration="200" data-aos-delay="1200">
        <a class="btn btn-secondary  rounded rounded-pill mt-4" href="<?php print site_url().'/about';?>">Read More<?php //print $data['wo are we']['button']['label'] ;?></a>
     </div>
     <?php endif;?>
</div>

<div>
<div class="bg-secondary d-none d-lg-block" style="position: absolute;width: 100%;height: 350px;margin-top: 300px;<?php if(!is_home()){print ' height:250px!important';}?>"> </div>
<div class="video-box-wrapper text-center big-video mt-3" data-aos="<?php print $animation_name1;?>" data-aos-duration="500" data-aos-delay="1300">
        <div class="video-box-inner"><div class="video-box"><div class="iframe">
            <div class="position-relative" id="youtubethumb">
                  <img src="<?php print $theme_url;?>/content/video.jpg" />
                  <div class="video-play">
                      <div class="iframe d-flex align-items-center justify-content-center">
                          <div class="video-play-in">
                              <div class="position-relative text-start">
                                  <span class="rippple position-absolute"></span>
                                  <span class="play-btn"></span>
                              </div>
                          </div>
                      </div>
                  </div>                  
            </div>
            <div class="d-none position-relative" id="youtube">
            <iframe id="youtube-iframe" width="960" height="540" src="https://www.youtube.com/embed/<?php print $data['wo are we']['youtube'] ;?>?controls=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>                
        </div></div></div>      
</div>
<div class="d-none"><img src="<?php print $theme_url;?>/images/btn-video-hover.png"> </div> 
<?php if(!is_home()):?> 
<div class="container-xl">
        <div class="my-1 mt-lg-5 mb-lg-3 py-4"  style="max-width:800px;margin:0 auto;">
        
        <p class="text-start text-md-center pt-2 mb-2">

        A one-stop business solution consultancy. An implementation centre that encompasses both business and technology inventively. We clearly define the business inter-operations between various systems implemented through an effective IT strategy. A highly experienced management team. Proven track records in project management. We apply leading-edge technology and best operating practices from our global strategic partners.
        </p>
        <p class="text-start text-md-center pt-2 mb-2">
        A one-stop business solution consultancy. An implementation centre that encompasses both business and technology inventively. We clearly define the business inter-operations between various systems implemented through an effective IT strategy. A highly experienced management team. Proven track records in project management. We apply leading-edge technology and best operating practices from our global strategic partners.
        </p>
        </div>
</div>
<?php endif;?>