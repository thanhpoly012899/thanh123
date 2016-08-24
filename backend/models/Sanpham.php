<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $MaSP
 * @property string $TenSP
 * @property string $SoLuong
 * @property string $MoTa
 * @property integer $MaLoaiSP
 * @property integer $LoaiSanPham_MaLoaiSP
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'TenSP', 'SoLuong', 'MoTa', 'MaLoaiSP', 'LoaiSanPham_MaLoaiSP'], 'required'],
            [['MaSP', 'MaLoaiSP', 'LoaiSanPham_MaLoaiSP'], 'integer'],
            [['TenSP', 'MoTa'], 'string', 'max' => 250],
            [['SoLuong'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'TenSP' => 'Ten Sp',
            'SoLuong' => 'So Luong',
            'MoTa' => 'Mo Ta',
            'MaLoaiSP' => 'Ma Loai Sp',
            'LoaiSanPham_MaLoaiSP' => 'Loai San Pham  Ma Loai Sp',
        ];
    }
}
