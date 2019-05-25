
</div>
<!-- END WRAPPER -->  

<!-- FOOTER -->
<footer class="footer">

  <?php if ( 'minimal' == get_theme_mod( 'variants_footer', true ) ) : ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 footer-inner">
        <div class="phone-email-wrap">
<?php
            $contact = get_field('contact_info', 'option');
						$phone = $contact['phone'];
						$phone1 = substr($phone, 0 , 3);
						$phone2 = substr($phone, 3 , 3);
						$phone3 = substr($phone, 6 , 4);
						if($phone){
?>
          <a href="tel: <?php echo $phone ?>"><span class="phone" title="Rifugio Modern Phone"><?php echo $phone1 . "&middot" . $phone2 . "&middot" . $phone3 ?></span></a>
<?php
						}
						$email = $contact['email'];
						if($email){
?>
          <a href="mailto:<?php echo $email ?>"><span class="email" title="Rifugio Modern Email"><?php echo $email ?></span></a>
<?php
						}
?>

<?php
?>
        </div><!-- /.phone-email-wrap -->
        <div class="social-wrap">
<?php
        $social = get_field('social_media', 'option');
        $ig = $social['instagram'];
        $pin = $social['pinterest'];
        
        if($ig):
?>
        <a href="<?php echo $ig?>" class="social-ig" target="_blank">
            <div class="social-icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400.01"><title>Instagram</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="IG"><path d="M399.9,200.63c0,27.5.21,55-.06,82.49-.26,28-6.77,54.11-25,76.28-17.76,21.66-41,34.15-68.36,38.08-14,2-28.41,2-42.63,2-51.43.19-102.89,1.13-154.28-.31-57-1.6-99.23-39.9-107.11-93.39C.53,292.4.55,278.6.51,265,.35,212.51-.78,160,1,107.58,2.85,50,41.18,8.44,97.35,1.94,116.59-.29,136.2.28,155.64.17Q219-.16,282.28.16c32.33.17,61.48,9.09,84.89,32.65,17.89,18,28.72,39.76,31,64.93,1.73,19,1.4,38.26,1.7,57.41.24,15.16.05,30.32.05,45.48ZM201,37.41v0c-9.07,0-18.13-.08-27.2,0-23.46.26-47-.69-70.36,1.23C75.67,40.89,55,55.07,43.84,81.48,39,93,37.35,105.2,37.32,117.59c-.08,42.65-.22,85.3,0,128,.1,18.55-.41,37.27,2,55.58,3.33,25.7,17.44,44.57,42,54.8,11.71,4.88,24,6.74,36.5,6.78,42.8.13,85.6.21,128.4,0,17.95-.1,36,.07,53.81-1.78,20.13-2.09,36.78-12,49.08-28.38,11.54-15.37,15.37-33.11,15.37-51.94,0-40.28.08-80.55,0-120.82-.06-18.12.35-36.31-1-54.34-1.53-19.88-9.85-37.19-25.29-50.38-14.39-12.31-31.62-17.36-50.2-17.57C258.92,37.17,229.94,37.41,201,37.41Z"/><path d="M303.05,199.67C303,256.32,256.53,302.38,199.56,302.3S96.8,255.94,96.93,198.4C97.06,142.1,143.73,96,200.39,96.18S303.13,142.84,303.05,199.67ZM200,265.08a66.24,66.24,0,0,0,66.13-65.89c.09-36-29.93-66-66.07-66.11s-65.87,29.66-65.92,66A65.76,65.76,0,0,0,200,265.08Z"/><path d="M307.23,116.89a23.25,23.25,0,1,1-.1-46.5,23.25,23.25,0,1,1,.1,46.5Z"/></g></g></g></svg>
            </div>
            <!-- /.social-icon-wrap -->
        </a>
        <!-- /.social-ig -->
<?php
        endif;
        if($pin):
?>
        <a href="<?php echo $pin?>" class="social-pin" target="_blank">
            <div class="social-icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400.15"><title>Pinterest</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="Pin" d="M126.69,385.3C38.94,353.06-26.07,248.69,10.29,136.86,45.4,28.83,165.11-27.42,271.87,13.25c106.05,40.4,157.31,162.48,111.05,267.08C335.56,387.44,219.66,418.05,142.68,390.72c7.19-15.79,15.44-31.27,21.32-47.61,5.82-16.14,9.24-33.14,14-50.78,9.91,12.24,22.2,19.28,37,21,30.35,3.45,55.78-7.15,77.06-28.46C325.78,251,337.8,189,319,145.16c-21.76-50.65-74.29-75-126.84-70.87-31.77,2.52-60.58,12.18-84.12,34.57C67.77,147.14,60.15,212,91.51,253.93c5.31,7.11,13.13,12.45,20.21,18.07,3.76,3,7.18,2,8.2-3.4a32.65,32.65,0,0,1,1.38-5.13c4-11.14,2.9-20.57-3.17-31.83-26.79-49.74,7.16-113,63.79-121.17,18-2.6,35.51-1.57,52.39,5.22,34,13.68,52.53,47.84,47.91,87.32-2.11,18.07-6,35.56-16.1,51-9.9,15.08-22.91,25.49-41.61,27.65-23.31,2.69-39.51-15.23-33.6-37.91,4.66-17.9,9.93-35.63,14.65-53.51a45.6,45.6,0,0,0,1.15-12.07c-.13-10.56-3.63-19.73-13.66-24.53s-19.9-3.29-28.81,3.09c-11.74,8.41-17.55,20.73-18.34,34.5-.61,10.69,1.9,21.55,2.87,32.35.4,4.39,1.4,9,.47,13.19-7.29,32.64-16.15,65-22.05,97.86C124.3,350.8,126.69,367.9,126.69,385.3Z"/></g></g></svg>
            </div>
            <!-- /.social-icon-wrap -->
        </a>
        <!-- /.social-pin -->
<?php
        endif;
?>
        
        </div>
        <!-- /.social-wrap -->
     </div>
    </div>
  </div>

  <?php endif; ?>

  <?php if ( 'widgets' == get_theme_mod( 'variants_footer' ) ) : ?>

  <div class="container">
    <div class="row-flex">

        <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

             <?php dynamic_sidebar( 'footer-sidebar' ); ?>

         <?php endif; ?>

    </div>
  </div>

  <?php endif; ?>

</footer>
<!-- END FOOTER -->


<!-- Javascript files -->
<?php wp_footer(); ?>

</body>
</html>


