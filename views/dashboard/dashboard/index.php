<?php

/**
 * @var \humhub\modules\user\models\User $contentContainer
 * @var bool $showProfilePostForm
 */
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 layout-sidebar-container">
            <ul class="nav" id="top-menu-nav">
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                    <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
			        <?= \humhub\widgets\TopMenu::widget(); ?>
			</ul>
			<ul class="nav pull-right" id="search-menu-nav">
                    <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
            </ul>
            <?=
            \humhub\modules\dashboard\widgets\Sidebar::widget([
                'widgets' => [
                    [
                        \humhub\modules\activity\widgets\Stream::className(),
                        ['streamAction' => '/dashboard/dashboard/stream'],
                        ['sortOrder' => 150]
                    ]
                ]
            ]);
            ?>
            </div>
            <div class="col-md-8 layout-content-container">
                <?= \humhub\modules\dashboard\widgets\DashboardContent::widget([
                'contentContainer' => $contentContainer,
                'showProfilePostForm' => $showProfilePostForm
            ])?>

            <?=
            \humhub\modules\content\widgets\Stream::widget([
                'streamAction' => '/dashboard/dashboard/stream',
                'showFilters' => false,
                'messageStreamEmpty' => Yii::t('DashboardModule.views_dashboard_index', '<b>Your dashboard is empty!</b><br>Post something on your profile or join some spaces!'),
            ]);
            ?>
        </div>
    </div>
</div>
