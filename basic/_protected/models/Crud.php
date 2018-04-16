<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crud".
 *
 * @property string $NO
 * @property string $NIM
 * @property string $NAMA
 * @property string $ALAMAT
 */
class Crud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NO', 'NIM', 'NAMA', 'ALAMAT'], 'required'],
            [['NO', 'NIM', 'NAMA'], 'string', 'max' => 25],
            [['ALAMAT'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NO' => 'No',
            'NIM' => 'Nim',
            'NAMA' => 'Nama',
            'ALAMAT' => 'Alamat',
        ];
    }
}
