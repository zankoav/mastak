<?php
$mainMenuArgs = [
  'theme_location' => 'main_menu',
  'container' => false,
  'menu_class' => 'menu__list',
  'menu_id' => '',
  'echo' => true,
  'fallback_cb' => 'wp_page_menu',
  'before' => '',
  'after' => '',
  'link_before' => '',
  'link_after' => '',
  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth' => 2,
];

$options = SingletonOptions::getOptions();
$addresses= $options['mastak_addresses'];
?>

<nav class="menu">
  <div class="menu__top">
    <h3 class="menu__title">menu</h3>
    <?php wp_nav_menu($mainMenuArgs); ?>
  </div>
  <div class="menu__bottom">
    <?php foreach ($addresses as $address): {
      $address["address"];
      $address["contact_phone"];
      $address["contact_email"];
    }
      ?>
      <div class="menu__info">
        <h4 class="menu__info-title"><?= $address["address_title"]?></h4>
        <p class="menu__info-text"><?=  $address["address"]?></p>
        <p class="menu__info-text menu__info-text_phone"><?= $address["contact_phone"]?></p>
        <a class="menu__info-text menu__info-text_link" href="<?= $address["contact_email"];?>"><?= $address["contact_email"]?></a>
      </div>
    <?php endforeach;?>
    <div class="menu__info menu__info_social">
      <a class="menu__info-social-link" href="<?= $options["vk_link"];?>">
        <img class="menu__info-social-icon" src="/wp-content/themes/mastak/src/icons/vk.833707.svg">
      </a>
      <a class="menu__info-social-link" href="<?= $options["insta_link"];?>">
        <img class="menu__info-social-icon" src="/wp-content/themes/mastak/src/icons/instagram.ac8c11.svg">
      </a>
      <a class="menu__info-social-link" href="<?= $options["twitter_link"];?>">
        <img class="menu__info-social-icon" src="/wp-content/themes/mastak/src/icons/twitter-logo.0cf989.svg">
      </a>
      <a class="menu__info-social-link" href="<?= $options["fb_link"];?>">
        <img class="menu__info-social-icon" src="/wp-content/themes/mastak/src/icons/facebook-logo.27933b.svg">
      </a>
    </div>
  </div>
</nav>