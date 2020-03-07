<?php wp_footer();?>
<div class="footer">
<div class="footer-grid">
    <div class="contact-info">
        <h2>Contact Info</h2>
        <p> <i class="fas fa-envelope"></i>
        <a href="mailto:info@inhabitent.com">  
        info@inhabitent.com</a> 
        </p>
        <p> <i class="fas fa-phone"></i>
        778-456-7891
        </p>
        <div class="media-icons">
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter-square"></i>
        <i class="fab fa-google-plus-square"></i>
        </div>
    </div>
    
    <div class="business-hours">
    <h2>Business Hours</h2>
        <p><span>Monday-Friday:</span> 9am to 5pm</p>
        <p><span>Saturday:</span> 10am to 2pm</p>
        <p><span>Sunday:</span> Closed</p>
    </div>

 
    <div class="footer-logo">
    <a href="<?php echo get_home_url(); ?>">
            <img src='<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-text.svg";?>'>
            </a>
    </div>
</div>
<div class="copyright">
    <p>Copyright &copy 2019 Inhabitent</p>

</div>
</body>
</html>