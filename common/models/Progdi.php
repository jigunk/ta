<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "progdi".
 *
 * @property integer $id_progdi
 * @property string $nama_progdi
 */
class Progdi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'progdi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_progdi'], 'required'],
            [['nama_progdi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_progdi' => 'Id Progdi',
            'nama_progdi' => 'Nama Progdi',
        ];
    }


    
}
