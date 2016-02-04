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
use rho_contact\widgets\contact\PanelItemWidget;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Dropdown;
use yii\helpers\Url;
use yii\web\View;
use rho_contact\widgets\contact\assets\PanelAsset;

$this->registerJs('var get_item_url = "' . Url::toRoute($getItemUrl) . '"', View::POS_BEGIN);
$this->registerJs('var get_count_url = "' . Url::toRoute($getCountUrl) . '"', View::POS_BEGIN);
PanelAsset::register($this);

/* @var $models \common\models\user\relation\Follow[] */
?>
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <span style="font-weight: bold; font-size: 16px;"> Contacts</span> All
            <div class="pull-right">
                <!--<a class="btn btn-info" href="/humhub-master/index.php?r=mail/mail/create&ajax=1" data-target="#globalModal" data-toggle="modal"><span class="glyphicon glyphicon-refresh"></span> 刷新</a>-->
                <?=
                ButtonDropdown::widget([
                    'label' => 'Action',
                    'dropdown' => [
                        'items' => [
                            ['label' => '<span class="glyphicon glyphicon-plus"></span> Contact', 'url' => '#', 'options' => ['onclick' => "javascript:$('#contact_1').html('Hello, world.').show(1000)", 'data-target' => '#globalModal', 'data-toggle' => 'modal']],
                            '<li role="presentation" class="divider"></li>',
                            ['label' => '<span class="glyphicon glyphicon-refresh"></span> Refresh', 'url' => '#'],
                        ],
                        'encodeLabels' => false,
                    ],
                ])
                ?>
                <?=
                ButtonDropdown::widget([
                    'label' => 'Group',
                    'dropdown' => [
                        'items' => [
                            ['label' => 'Group 1', 'url' => '#'],
                            ['label' => 'Group 2', 'url' => '#'],
                            ['label' => 'All', 'url' => '#'],
                            '<li role="presentation" class="divider"></li>',
                            ['label' => 'Manage', 'url' => '#'],
                        ],
                    ],
                ])
                ?>
            </div>
        </div>
        <hr>
        <div style="height: 700px;overflow: auto;">
            <ul id="inbox" class="media-list">
                <nav id="pagination" class="hidden">
                    <ul class="pager">
                        <li id="li-prev"><a id="btn-prev" href="#"><span class="glyphicon glyphicon-arrow-left"></span><span class="hidden-xs"> Prev</span></a></li>
                        <li>
                            <span id="page-current">1</span> / <span id="page-total">3</span>
                        </li>
                        <li id="li-next"><a id="btn-next" href="#"><span class="hidden-xs">Next </span><span class="glyphicon glyphicon-arrow-right"></span></a></li>
                    </ul>
                </nav>
                <div id="item-list">
                    <div id="loader" class="loader">
                        <div class="sk-spinner sk-spinner-three-bounce">
                            <div class="sk-bounce1"></div>
                            <div class="sk-bounce2"></div>
                            <div class="sk-bounce3"></div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>