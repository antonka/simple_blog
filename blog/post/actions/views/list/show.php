<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use Yii;

$this->title =  Yii::t('post', 'List of Posts');
$this->params['breadcrumbs'][] = $this->title;

?>

<style>
    .post-list-item {}
    .post-list-item__descr {
        color: gray;
        font-style: italic;
    }
</style> 

<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <div>
        <?= ListView::widget([
            'dataProvider' => $postsListActiveDataProvider,
            'itemView' => '_item',
        ]) ?>
    </div>
</div>