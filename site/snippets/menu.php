<nav class="navigation column navbar  navbar-expand-lg navbar-light " role="navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="menu navbar-nav">
    <?php foreach($pages->visible() as $item): ?>
    <li class="nav-item menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>