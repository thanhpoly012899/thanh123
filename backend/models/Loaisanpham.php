<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property integer $MaLoaiSP
 * @property string $TenLoaiSP
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaLoaiSP', 'TenLoaiSP'], 'required'],
            [['MaLoaiSP'], 'integer'],
            [['TenLoaiSP'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLoaiSP' => 'Ma Loai Sp',
            'TenLoaiSP' => 'Ten Loai Sp',
        ];
    }
}
