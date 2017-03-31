<?php

get_header(); ?>

<div>
  <main id="main" class="site-main" role="main">
    <div>
      <script>
        (function() {
          var cx = '013902001624287574807:jgjwx4wvqtu';
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        })();
      </script>
      <gcse:search></gcse:search>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

