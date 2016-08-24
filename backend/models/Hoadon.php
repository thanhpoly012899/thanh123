<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $MaHD
 * @property string $NgayXuat
 * @property integer $MaKH
 * @property integer $KhachHang_MaKH
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHD', 'NgayXuat', 'MaKH', 'KhachHang_MaKH'], 'required'],
            [['MaHD', 'MaKH', 'KhachHang_MaKH'], 'integer'],
            [['NgayXuat'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaHD' => 'Ma Hd',
            'NgayXuat' => 'Ngay Xuat',
            'MaKH' => 'Ma Kh',
            'KhachHang_MaKH' => 'Khach Hang  Ma Kh',
        ];
    }
}
