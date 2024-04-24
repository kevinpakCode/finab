<header class="header">
    <div class="container">
    <div class="header__content">
      <a href="<?=$baseUrl;?>" class="header__logo">
        <img src="./assets/images/logo.svg" alt="logo">
      </a>
      <ul class="header__menu" id="header-menu">
        <li class="header__menu__item"><a href="<?=$baseUrl;?>" class="active">Accueil</a></li>
        <li class="header__menu__item">
            <a href="#" class="header__menu__item-link--acc">FinAB</a>
          <ul class="header__menu-list">
            <li class="header__menu-list-item">
              <a href="<?=$baseUrl."2023";?>">FinAB-2023</a>
            </li>
          </ul>
        </li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}programme.php";?>">Programmation</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}partners.php";?>">Sponsoring & partenaires</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}2023/média.php";?>">Actualités</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}media.php";?>">Médiathèque</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}2023/contact.php";?>">Contact</a></li>
      </ul>
      <a href="#" class="header__action">Inscrivez-vous</a>
      <a href="#" class="header__btnClose" id="js-btn-menu"><span></span></a>
    </div>
  </div>
</header>