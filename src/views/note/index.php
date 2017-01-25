<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
/*
 * @var yii\web\View $this
 */

$this->title = Yii::t('note', 'Notes');
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>
    <i class="glyphicon glyphicon-tags"></i> <?= Html::encode($this->title) ?><br>
    <small>标签不仅能组织和归类你的内容，还能关联相似的内容。正确的使用标签可让你更容易的找到需要的源代码。</small>
</h1>

<?= ListView::widget([
    'options' => [
        'class' => 'row list-note'
    ],
    'layout' => '{items} <div class="text-center">{pager}</div>',
    'pager' => [
        'maxButtonCount' => 10,
        'nextPageLabel' => Yii::t('app', 'Next page'),
        'prevPageLabel' => Yii::t('app', 'Previous page'),
    ],
    'dataProvider' => $dataProvider,
    'itemView' => '_item'
]);
?>