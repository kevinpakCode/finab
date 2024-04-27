<header class="header">
    <div class="container">
    <div class="header__content">
      <a href="<?=$baseUrl;?>" class="header__logo">
        <img src="./assets/images/logo.svg" alt="logo">
      </a>
      <ul class="header__menu" id="header-menu">
        <li class="header__menu__item"><a href="<?=$baseUrl;?>" class="<?=($_SERVER['REQUEST_URI']=="/")?'active':'';?>">Accueil</a></li>
        <li class="header__menu__item">
            <a href="#" class="header__menu__item-link--acc">FinAB</a>
          <ul class="header__menu-list">
            <li class="header__menu-list-item">
              <a href="<?=$baseUrl."2023";?>">FinAB-2023</a>
            </li>
          </ul>
        </li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}programme.php";?>" class="<?=($_SERVER['REQUEST_URI']=="/programme.php")?'active':'';?>">Programmation</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}partners.php";?>" class="<?=($_SERVER['REQUEST_URI']=="/partners.php")?'active':'';?>">Sponsoring & partenaires</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}actualite.php";?>" class="<?=($_SERVER['REQUEST_URI']=="/actualite.php")?'active':'';?>">Actualités</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}media.php";?>" class="<?=($_SERVER['REQUEST_URI']=="/media.php")?'active':'';?>">Médiathèque</a></li>
        <li class="header__menu__item"><a href="<?="{$baseUrl}contact.php";?>" class="<?=($_SERVER['REQUEST_URI']=="/contact.php")?'active':'';?>">Contact</a></li>

      </ul>
      <a href="#" class="header__action" id="subcriptionBtn">Inscrivez-vous</a>
      <a href="#" class="header__btnClose" id="js-btn-menu"><span></span></a>
    </div>
  </div>
</header>