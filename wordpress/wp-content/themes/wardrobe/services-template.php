<?php /* Template Name: Services Template */ 
?>


    <?php get_header(); ?>
        
     <br>
     <br>
     <br>    
     <br> 
     <br>
     <br>
     <br>
    <fieldset>
     
        <img src="<?php bloginfo('template_directory');?>/Logos/Restart.png" width="100%" id="logoPic"/>
        
        <div class="rightStart">
            <?php $restart = get_post_meta($post->ID, 'Restart', false); ?>
             
        <p> This package incorporates a systematic and customized approach to provide a total wardrobe make-over.  
        </p>
			
Package includes:
        <ul>
            <li> Color Analysis</li>
            <li> Body Type Assessment</li>
            <li> Fashion Personality Evaluation</li>
            <li> Closet Audit & Reorganization</li>
            <li> Shop Your Closet</li>
            <li> Compilation of Future Acquisition List</li>
        </ul>

    </div><!--closes rightStart div-->
 </fieldset>   
    
    
<fieldset>
        
    <img src="<?php bloginfo('template_directory');?>/Logos/Revamp.png" width="100%" id="logoPic">
        
        <div class="rightVamp">
            <p> This package builds on the ReStart Package by adding 4-5 hours of personal shopping.</p>
        
        </div><!--closes rightVamp-->
        
 </fieldset>
    
    
  <fieldset>  
        
        <img src="<?php bloginfo('template_directory');?>/Logos/Reinvent.png" width="100%" id="logoPic">
             <div class="rightVamp">
            <p> This package builds on the ReVamp Package by adding 3 additional consultations and/or
personal shopping outings quarterly throughout the year.                </p>
      </div><!--closes rightVamp div-->
      
  </fieldset>
    
    <fieldset>      
        <img src="<?php bloginfo('template_directory');?>/Logos/Review.png" width="100%" id="logoPic">
            <div class="rightLation">
                <p>
                Hourly consultations if you need specific help with:
          <ul>        
	<li>Finding or putting together an outfit for a wedding, formal affair, or other special occasion. </li>
	<li>Assessing or pulling together the best outfit for a job interview or sales presentation.</li>
	<li>Dressing for a first date. </li>
                </ul>
</p>
        <br>
        <br>
        
        </div><!--closes rightVamp div class-->
    </fieldset>
    
    <fieldset>
         <img src="<?php bloginfo('template_directory');?>/Logos/Relate.png" width="100%" id="logoPic">
            <div class="rightLation">
            <p>Speaking engagements for women’s organizations, corporate events, conferences, and           entrepreneur 
                networking groups.
                                

                Topics include:
                <ul>

                    <li>Simplifying Your Wardrobe in Three Easy Steps</li>
                    <li>Is Your Appearance Sabotaging Your Business or Career Advancement?</li>
                    <li>Over 50 is NOT Over the Hill!</li>
                </ul>
                                  

            </div><!--closes rightVamp-->
    
            </fieldset>
                                 
                                    </html>                          
                                    

<?php get_footer(); ?>