<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license https://vistart.name/license/
 */

namespace common\models\user\relation;

/**
 * Description of FollowRelation
 *
 * @property-read Follow[] $follows
 * @author vistart <i@vistart.name>
 */
trait FollowRelation
{

    /**
     * 
     * @param \common\models\user\User $recipient
     * @param string $remark
     * @param boolean $isFavorite
     */
    public function createFollow($recipient, $remark = '', $isFavorite = false)
    {
        return $this->create(Follow::className(), ['other_guid' => $recipient->guid, 'remark' => $remark, 'isFavorite' => $isFavorite]);
    }

    public function getFollows()
    {
        $model = Follow::buildNoInitModel();
        return $this->hasMany(Follow::className(), [$model->createdByAttribute => $this->guidAttribute])->inverseOf('user');
    }
}
