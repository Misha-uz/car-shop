<?php

namespace common\models\constants;

use Yii;


class GeneralStatus
{
    const STATUS_DELETED = 0;
    const STATUS_NOT_ACTIVE = 10;
    const STATUS_ACTIVE = 20;

    public static function getString($num)
    {
        switch ($num) {
            case self::STATUS_DELETED:
                return Yii::t('app', 'Deleted');
            case self::STATUS_NOT_ACTIVE:
                return Yii::t('app', 'Not active');
            case self::STATUS_ACTIVE:
                return Yii::t('app', 'Active');
        }
    }

    public static function getList()
    {
        return [
            self::STATUS_ACTIVE => self::getString(self::STATUS_ACTIVE),
            self::STATUS_NOT_ACTIVE => self::getString(self::STATUS_NOT_ACTIVE),
        ];
    }

    public static function getArray()
    {
        $statuses[self::STATUS_ACTIVE] = Yii::t('app', 'Active');
        $statuses[self::STATUS_NOT_ACTIVE] = Yii::t('app', 'Not active');

        return $statuses;
    }

    public static function getProposalString($status)
    {
        switch ($status) {
            case self::STATUS_DELETED:
                return Yii::t('app', 'Waiting');
            case self::STATUS_NOT_ACTIVE:
                return Yii::t('app', 'Declined');
            case self::STATUS_ACTIVE:
                return Yii::t('app', 'Accepted');
        }
    }
}