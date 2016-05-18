<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hospname".
 *
 * @property integer $id
 * @property string $hospname
 */
class Hospname extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospname';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['hospname'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสสถานบริการ',
            'hospname' => 'ชื่อสถานบริการ',
        ];
    }
}
