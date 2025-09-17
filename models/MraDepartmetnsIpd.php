<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mra_departmetns_ipd".
 *
 * @property int $unit_id auto_id
 * @property string $unit_name ชื่อแผนก
 *
 * @property MraIpd[] $mraIpds
 * @property MraIpd1[] $mraIpd1s
 * @property MraIpd66[] $mraIpd66s
 * @property MraIpd66x[] $mraIpd66xes
 * @property MraIpdCopy[] $mraIpdCopies
 * @property MraIpdCopy5[] $mraIpdCopy5s
 * @property MraIpdNew[] $mraIpdNews
 */
class MraDepartmetnsIpd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mra_departmetns_ipd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_name'], 'required'],
            [['unit_name'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unit_id' => 'Unit ID',
            'unit_name' => 'Unit Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpds()
    {
        return $this->hasMany(MraIpd::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpd1s()
    {
        return $this->hasMany(MraIpd1::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpd66s()
    {
        return $this->hasMany(MraIpd66::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpd66xes()
    {
        return $this->hasMany(MraIpd66x::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpdCopies()
    {
        return $this->hasMany(MraIpdCopy::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpdCopy5s()
    {
        return $this->hasMany(MraIpdCopy5::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMraIpdNews()
    {
        return $this->hasMany(MraIpdNew::className(), ['unit_id' => 'unit_id']);
    }
}
