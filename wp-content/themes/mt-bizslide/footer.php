<?php
/**
 * The template for displaying the footer.
 * 
 * @package WordPress
 * @subpackage mt-bizslide
 * @copyright nuarharuha <nhnoah+mt-bizslide@gmail.com>
 * ================================================================
 * SVN revision information:
 * @version $Revision$:
 * @author  $Author$:
 * @date    $Date$:
 * ================================================================
 * @category template
 * @since 0.1
 */ 
?> 
  <footer role="contentinfo" class="container_12">
    <nav class="footer-menu">
        <ul class="clearfix">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/partner">Partner</a></li>
            <li><a href="/group">Group of Companies</a></li>
            <li><a href="/privacy">Privacy</a></li>
            <li><a href="/contact-us">Contact Us</a></li>  
        </ul>      
    </nav>
  </div>
  <p class="copyright">&copy; Copyright 2012. Menestys Technologies, All Rights Reserved.</p>
  </footer>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php echo mt_get_public_uri('plugins.js','js');?>"></script>
  <script src="<?php echo mt_get_public_uri('script.js','js');?>"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <!-- hide for now       
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  -->
</body>
</html>