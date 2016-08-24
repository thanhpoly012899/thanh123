<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $MaKH
 * @property string $TenKH
 * @property string $DiaChi
 * @property string $SDT
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKH', 'TenKH', 'DiaChi', 'SDT'], 'required'],
            [['MaKH'], 'integer'],
            [['TenKH', 'DiaChi'], 'string', 'max' => 250],
            [['SDT'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKH' => 'Ma Kh',
            'TenKH' => 'Ten Kh',
            'DiaChi' => 'Dia Chi',
            'SDT' => 'Sdt',
        ];
    }
}
