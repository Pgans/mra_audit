<?php

namespace backend\modules\api\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $user_id รหัสบุคคล
 * @property string $firstname ชื่อ
 * @property string $lastname นามสกุล
 * @property string $photo รูปภาพ
 * @property string $birthdate วันเกิด
 * @property string $start_date วันย้ายเข้า
 * @property string $stop_date วันย้ายออก
 * @property string $dep_id แผนก
 * @property int $positions_id ตำแหน่ง
 *
 * @property Permitsori[] $permitsoris
 * @property Departments $dep
 * @property Positions $positions
 * @property User $user
 */
class Person extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'firstname', 'lastname', 'birthdate', 'start_date', 'stop_date', 'dep_id', 'positions_id'], 'required'],
            [['user_id', 'dep_id', 'positions_id'], 'integer'],
            [['birthdate', 'start_date', 'stop_date'], 'safe'],
            [['firstname', 'lastname', 'photo'], 'string', 'max' => 100],
            [['user_id', 'dep_id', 'positions_id'], 'unique', 'targetAttribute' => ['user_id', 'dep_id', 'positions_id']],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['dep_id' => 'dep_id']],
            [['positions_id'], 'exist', 'skipOnError' => true, 'targetClass' => Positions::className(), 'targetAttribute' => ['positions_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    public function scenarios()
 {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['Name','Last_Name','Email']; 
        return $scenarios; 
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'photo' => 'Photo',
            'birthdate' => 'Birthdate',
            'start_date' => 'Start Date',
            'stop_date' => 'Stop Date',
            'dep_id' => 'Dep ID',
            'positions_id' => 'Positions ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermitsoris()
    {
        return $this->hasMany(Permitsori::className(), ['created_by' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Departments::className(), ['dep_id' => 'dep_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions()
    {
        return $this->hasOne(Positions::className(), ['id' => 'positions_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
