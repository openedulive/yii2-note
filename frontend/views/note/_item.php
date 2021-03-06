<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="summary">
    <h2 class="title"><a href="<?= Url::to(['/note/note/view', 'uuid' => $model->uuid]); ?>"
                         target="_blank"><?= Html::encode($model->title) ?></a></h2>

    <ul class="author list-inline mt-20">

        <li>
            <a href="<?= Url::to(['/user/space/view', 'id' => $model->user_id]) ?>" target="_blank">
                <img class="avatar-20 mr-10 hidden-xs" src="<?= $model->user->getAvatar('small') ?>"
                     alt="<?= $model->user->name ?>"> <?= $model->user->name ?>
            </a>
        </li>
        <li><?= Yii::t('note', 'Published in'); ?> <?= Yii::$app->formatter->asRelativeTime($model->created_at); ?></li>

    </ul>


</div>
