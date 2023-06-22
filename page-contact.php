<?php get_header(); ?>
<section class="page page__contact">
      <div class="page__contact__wrapper">
        <div class="page__contact__info">
          <h2 class="block__header">LET’S TALK ABOUT <br />SOMETHING NICE</h2>
          <ul>
            <li>
              <i class="fas fa-map-marker"></i>
              <span
                >356 Yonge Street, Toronto,<br />
                Ontario M5B 1S5 Canada.</span
              >
            </li>

            <li>
              <i class="fas fa-envelope"></i>
              <span>info@theblog.com</span>
            </li>

            <li>
              <i class="fas fa-phone"></i>
              <span>0921 902 0192</span>
            </li>
          </ul>
        </div>
        <div class="page__contact__form">
          <?php echo do_shortcode('[contact-form-7 id="143" title="Contact form 1"]') ?>
        
        </div>
      </div>
    </section>
<?php get_footer(); ?>