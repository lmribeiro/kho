<?php

use yii\helpers\Url;

?>
<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex">
                <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                        <input type="text" class="form-control" id="topbarInputIconLeft"
                               placeholder="<?= Yii::t('app', 'Procurar'); ?>"
                               aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="user-avatar md-avatar rounded-circle"
                                 alt="<?= Yii::$app->params['avatar']['name'] ?>"
                                 src="<?= Yii::$app->params['avatar']['url'] ?>">
                            <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small font-weight-bold"><?= Yii::$app->user->identity->name ?></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                        <a class="dropdown-item font-weight-bold" href="#">
                            <span class="far fa-user-circle"></span>
                            <?= Yii::t('app', 'Perfil'); ?>
                        </a>
                        <a class="dropdown-item font-weight-bold" href="#">
                            <span class="fas fa-cog"></span>
                            <?= Yii::t('app', 'Definições'); ?>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="<?= Url::to(['/logout']) ?>">
                            <span class="fas fa-sign-out-alt text-danger"></span>
                            <?= Yii::t('app', 'Sair'); ?>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
