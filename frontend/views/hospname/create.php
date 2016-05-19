<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Hospname */

$this->title = 'เพิ่มสถานบริการ';
$this->params['breadcrumbs'][] = ['label' => 'รายชื่อสถานบริการ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
