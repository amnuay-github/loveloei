<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pop_loei".
 *
 * @property string $hoscode
 * @property string $hosname
 * @property string $hostype
 * @property string $distid
 * @property string $total
 */
class PopLoei extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pop_loei';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoscode'], 'required'],
            [['total'], 'integer'],
            [['hoscode'], 'string', 'max' => 5],
            [['hosname'], 'string', 'max' => 255],
            [['hostype'], 'string', 'max' => 2],
            [['distid'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hoscode' => 'Hoscode',
            'hosname' => 'Hosname',
            'hostype' => 'Hostype',
            'distid' => 'Distid',
            'total' => 'Total',
        ];
    }
}
