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

namespace rho_my\controllers;

use Yii;

/**
 * Description of NotificationTrait
 *
 * @author vistart <i@vistart.name>
 */
trait NotificationTrait
{

    public static $messageUpdateSuccess = [
        'alert_class' => 'alert-success',
        'title' => 'Congrats!',
        'content' => 'Update succeeded!',
    ];
    public static $messageUpdateFail = [
        'alert_class' => 'alert-danger',
        'title' => 'Sorry!',
        'content' => 'Some errors occured.',
    ];

    public static function setFlashNotificationByResult($key, $result = 1)
    {
        if ($result) {
            static::setFlashNotificationSucceeded($key);
        } else {
            static::setFlashNotificationFailed($key);
        }
    }

    public static function setFlashNotificationSucceeded($key)
    {
        static::setFlashNotification($key, self::$messageUpdateSuccess);
    }

    public static function setFlashNotificationFailed($key)
    {
        static::setFlashNotification($key, self::$messageUpdateFail);
    }

    public static function setFlashNotification($key, $value)
    {
        Yii::$app->session->setFlash($key, $value);
    }

    public static function getFlashNotifification($key)
    {
        return Yii::$app->session->getFlash($key);
    }
}
