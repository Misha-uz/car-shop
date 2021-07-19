<?php

namespace common\models\constants;

use Yii;


class DriveTypes
{
    const STATUS_FULL = 'full';
    const STATUS_FRONT = 'front';


    public static function getString($num)
    {
        switch ($num) {
            case self::STATUS_FULL:
                return Yii::t('app', 'Полный');
            case self::STATUS_FRONT:
                return Yii::t('app', 'Передний');

        }
    }

    public static function getList()
    {
        return [
            self::STATUS_FULL => self::getString(self::STATUS_FULL),
            self::STATUS_FRONT => self::getString(self::STATUS_FRONT),
        ];
    }

    public static function getArray()
    {
        $statuses[self::STATUS_FULL] = Yii::t('app', 'Полный');
        $statuses[self::STATUS_FRONT] = Yii::t('app', 'Передний');

        return $statuses;
    }

}