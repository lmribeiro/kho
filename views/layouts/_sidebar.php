<?php

use yii\helpers\Url;

?>
<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="<?= Yii::$app->params['avatar']['url'] ?>"
                         class="card-img-top rounded-circle border-white"
                         alt="<?= Yii::$app->params['avatar']['name'] ?>">
                </div>
                <div class="d-block">
                    <h2 class="h6"><?= Yii::t('app', 'Olá')." ".Yii::$app->user->identity->name ?></h2>
                    <a href="<?= Url::to(['/logout']) ?>" class="btn btn-secondary text-dark btn-xs">
                        <span class="mr-2">
                            <span class="fas fa-sign-out-alt"></span>
                        </span>
                        <?= Yii::t('app', 'Logout'); ?>
                    </a>
                </div>
            </div>
            <div class="collapse-close ">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                   data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                   aria-label="Toggle navigation">
                </a>
            </div>
        </div>
        <ul class="nav flex-column">

            <li class="nav-item <?= Yii::$app->controller->id == "site" ? 'active' : '' ?>">
                <a href="<?= Url::to(['/site']) ?>" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span><?= Yii::t('app', 'Dashboard'); ?></span>
                </a>
            </li>

            <li class="nav-item <?= Yii::$app->controller->id == "education" ? 'active' : '' ?>">
                <a href="<?= Url::to(['/education']) ?>" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-graduation-cap"></span></span>
                    <span><?= Yii::t('app', 'Education'); ?></span>
                </a>
            </li>

            <li class="nav-item <?= Yii::$app->controller->id == "experience" ? 'active' : '' ?>">
                <a href="<?= Url::to(['/experience']) ?>" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-briefcase"></span></span>
                    <span><?= Yii::t('app', 'Experience'); ?></span>
                </a>
            </li>

            <li class="nav-item <?= Yii::$app->controller->id == "projects" ? 'active' : '' ?>">
                <a href="<?= Url::to(['/projects']) ?>" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-project-diagram"></span></span>
                    <span><?= Yii::t('app', 'Projects'); ?></span>
                </a>
            </li>

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

            <li class="nav-item <?= Yii::$app->controller->id == "settings" ? 'active' : '' ?>">
                <a href="<?= Url::to(['/settings']) ?>" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                    <span><?= Yii::t('app', 'Settings'); ?></span>
                </a>
            </li>

        </ul>
    </div>
</nav>








