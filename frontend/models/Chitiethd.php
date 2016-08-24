<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethd".
 *
 * @property integer $MaHD
 * @property integer $MaSP
 * @property string $TenSP
 * @property string $SoLuong
 * @property integer $Gia
 * @property integer $HoaDon_MaHD
 * @property integer $SanPham_MaSP
 */
class Chitiethd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHD', 'MaSP', 'TenSP', 'SoLuong', 'Gia', 'HoaDon_MaHD', 'SanPham_MaSP'], 'required'],
            [['MaHD', 'MaSP', 'Gia', 'HoaDon_MaHD', 'SanPham_MaSP'], 'integer'],
            [['TenSP'], 'string', 'max' => 250],
            [['SoLuong'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaHD' => 'Ma Hd',
            'MaSP' => 'Ma Sp',
            'TenSP' => 'Ten Sp',
            'SoLuong' => 'So Luong',
            'Gia' => 'Gia',
            'HoaDon_MaHD' => 'Hoa Don  Ma Hd',
            'SanPham_MaSP' => 'San Pham  Ma Sp',
        ];
    }
}
