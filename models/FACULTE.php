<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "FACULTE0000".
 *
 * @property string $FACCODE
 * @property string|null $FAC
 * @property string|null $FACAr
 */
class FACULTE extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'FACULTE0000';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FACCODE'], 'required'],
            [['FACCODE'], 'string', 'max' => 20],
            [['FAC', 'FACAr'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FACCODE' => 'Faccode',
            'FAC' => 'Fac',
            'FACAr' => 'Fac Ar',
        ];
    }
}
