<section class="promo">
    <div class="promo__wrapper">
      <div class="vedeo">
        <img src="<?php the_field('golovna_kartynka')?>" alt="<?php the_title()?>">
      </div>
      <div class="content">
        <div class="content__wrapper">
          <h1 class="content__title">
            <?php the_field('zagolovok_promo')?>
          </h1>
          <p class="content__desc">
            <?php the_field('korotkyj_opys_promo')?>
          </p>

          <a class="content__btn btn" href="<?php the_field('posylannya_knopky')?>"><?php the_field('btn_text')?></a>
        </div>

        <div class="social">
          <a class="social__link" href="https://www.facebook.com/rodnikzhizni/">Facebook</a>
          <a class="social__link" href="https://www.instagram.com/rodnikzhizni/">Instagram</a>
        </div>
      </div>
    </div>
  </section>
