<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Hospname */

$this->title = 'Create Hospname';
$this->params['breadcrumbs'][] = ['label' => 'Hospnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
