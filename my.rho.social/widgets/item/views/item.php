<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link http://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license http://vistart.name/license/
 */
use yii\bootstrap\Button;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $model common\models\user\BaseUserItem */
/* @var $action array */
?>
<div class="item-content">
    <div class="item-content-content">
        <h4 id="item-<?= $model->id ?>" class="item-content-heading"><span><?= Html::encode($model->content) ?></span></h4>
        <h5><?= $model->contentTypes[$model->type] . ' | ' . $model->permissions[$model->permission] ?></h5>
        <p>
            <?= Html::encode($model->description) ?>
        </p>
    </div>
    <div class="item-content-div">
        <?=
        Button::widget([
            'label' => '<span class="glyphicon glyphicon-edit"></span> ' . 'Edit',
            'encodeLabel' => false,
            'options' => [
                'class' => 'btn-primary',
                'data-toggle' => 'modal',
                'data-target' => '#modal-edit-' . $model->id,
            ]
        ])
        ?>
        <?=
        Button::widget([
            'label' => '<span class="glyphicon glyphicon-trash"></span> ' . 'Remove',
            'encodeLabel' => false,
            'options' => [
                'class' => 'btn-danger',
                'data-toggle' => 'modal',
                'data-target' => '#modal-remove-' . $model->id,
            ]
        ])
        ?>
    </div>
</div>

<?= \rho_my\widgets\item\FormWidget::widget(['model' => $model, 'action' => [$action, 'id' => $model->id]]) ?>
<?php
Modal::begin([
    'id' => 'modal-remove-' . $model->id,
    'header' => '<h4>' . 'Confirm' . '</h4>',
    'options' => [
        'aria-hidden' => 'true'
    ],
    'footer' => Html::a('Yes, I am!', Url::toRoute(['delete', 'id' => $model->id]), ['type' => 'button', 'class' => 'btn btn-danger', 'data-method' => 'post']) . Html::button('No', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']),
]);
echo "Are you sure to delete $model->content ? " . 'This operation can not be reversed. ';
Modal::end();
?>