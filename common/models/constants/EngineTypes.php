<?php

namespace common\models\constants;

use Yii;


class EngineTypes
{
    const STATUS_PETROL = 'benzin';
    const STATUS_DIESEL = 'diesel';
    const STATUS_HYBRID = 'hybrid';

    public static function getString($num)
    {
        switch ($num) {
            case self::STATUS_PETROL:
                return Yii::t('app', 'Бензин');
            case self::STATUS_DIESEL:
                return Yii::t('app', 'Дизель');
            case self::STATUS_HYBRID:
                return Yii::t('app', 'Гибрид');
        }
    }

    public static function getList()
    {
        return [
            self::STATUS_PETROL => self::getString(self::STATUS_PETROL),
            self::STATUS_DIESEL => self::getString(self::STATUS_DIESEL),
            self::STATUS_HYBRID => self::getString(self::STATUS_HYBRID),
        ];
    }

    public static function getArray()
    {
        $statuses[self::STATUS_PETROL] = Yii::t('app', 'Бензин');
        $statuses[self::STATUS_DIESEL] = Yii::t('app', 'Дизель');
        $statuses[self::STATUS_HYBRID] = Yii::t('app', 'Гибрид');

        return $statuses;
    }

}