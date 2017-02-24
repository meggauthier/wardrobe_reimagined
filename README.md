# wardrobe_reimagined
Wardrobe Reimagined is an image consultant agency for women 50+. This was built with a bootstrap
carousel on the landing page and html, css and php. 

To allow the owner of Wardrobe Reimagined to add blog posts and other updates, I added some PHP 
scripts to package this into a private WordPress theme. They can now utilize the WP dashboard for these purposes.

I have included Photoshop templates for the testimonial page so that more may be added as neccessary. No additional CSS is needed
to create the flip effect. Just paste the following snippet into the bottom of the testimonial page (using your text editor) and update the content to 
with the new testimony:


            <div class="test">
  <div class="card">
    <div class="face front">
      <img width="180px" src="/images/enter_new_image_name_here.jpg">
    </div>
    <div class="face back">
      <p> ENTER THE PARAGRAPH OF THE TESTIMONY HERE INBETWEEN THE <p> tags.  
          <br>
          <br>-ENTER NAME OF PERSON GIVING TESTIMONY HERE
        </p>
    </div><!--closes face back-->
  </div><!--closes card-->
</div><!--closes test-->

Now all you have to do is save this file and upload it to the C-Panel. It will ask you if you would like to replace the file and you
should say yes. Refresh the site and there you have it!
