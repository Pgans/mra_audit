<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mra_opd".
 *
 * @property int $mra_id
 * @property int|null $unit_id
 * @property string $HN เลขโรงพยาบาล
 * @property string|null $AN เลขผู้ป่วยใน
 * @property string|null $dr_license เลข ว แพทย์
 * @property string|null $date_admit วันเข้ารักษา
 * @property string|null $date_discharge วันออกโรงพยาบาล
 * @property string|null $date_audit วันตรวจเวชระเบียน
 * @property string|null $NA01
 * @property string|null $MI01
 * @property string|null $NO01
 * @property string|null $SC011 dxopข้อ1
 * @property string|null $SC012 เกณฑ์ข้อ2
 * @property string|null $SC013 เกณฑ์ข้อ3
 * @property string|null $SC014 เกณฑ์ข้อ4
 * @property string|null $SC015 เกณฑ์ข้อ5
 * @property string|null $SC016 เกณฑ์ข้อ6
 * @property string|null $SC017 เกณฑ์ข้อ7
 * @property string|null $SC018 เกณฑ์ข้อ8
 * @property string|null $SC019 เกณฑ์ข้อ9
 * @property string|null $PEIM01 หักคะแนน
 * @property string|null $DEC01
 * @property string|null $NA02
 * @property string|null $MI02
 * @property string|null $NO02
 * @property string|null $SC021 ข้อ1
 * @property string|null $SC022 ข้อ2
 * @property string|null $SC023 ข้อ3
 * @property string|null $SC024 ข้อ4
 * @property string|null $SC025 ข้อ5
 * @property string|null $SC026 เกณฑ์ข้อ6
 * @property string|null $SC027 เกณฑ์ข้อ7
 * @property string|null $SC028 เกณฑ์ข้อ8
 * @property string|null $SC029 เกณฑ์ข้อ9
 * @property string|null $PEIM02 หักคะแนน
 * @property string|null $DEC02
 * @property string|null $NA03
 * @property string|null $MI03
 * @property string|null $NO03
 * @property string|null $SC031 ข้อ1
 * @property string|null $SC032 ข้อ2
 * @property string|null $SC033 ข้อ3
 * @property string|null $SC034 ข้อ4
 * @property string|null $SC035 ข้อ5
 * @property string|null $SC036 เกณฑ์ข้อ6
 * @property string|null $SC037 เกณฑ์ข้อ7
 * @property string|null $SC038 เกณฑ์ข้อ8
 * @property string|null $SC039 เกณฑ์ข้อ9
 * @property string|null $PEIM03
 * @property string|null $DEC03 หักคะแนน
 * @property string|null $NA04
 * @property string|null $MI04
 * @property string|null $NO04
 * @property string|null $SC041 ข้อ1
 * @property string|null $SC042 ข้อ2
 * @property string|null $SC043 ข้อ3
 * @property string|null $SC044 ข้อ4
 * @property string|null $SC045 ข้อ5
 * @property string|null $SC046 เกณฑ์ข้อ6
 * @property string|null $SC047 เกณฑ์ข้อ7
 * @property string|null $SC048 เกณฑ์ข้อ8
 * @property string|null $SC049 เกณฑ์ข้อ9
 * @property string|null $PEIM04
 * @property string|null $DEC04 หักคะแนน
 * @property string|null $NA05
 * @property string|null $MI05
 * @property string|null $NO05
 * @property string|null $SC051 ข้อ1
 * @property string|null $SC052 ข้อ2
 * @property string|null $SC053 ข้อ3
 * @property string|null $SC054 ข้อ4
 * @property string|null $SC055 ข้อ5
 * @property string|null $SC056 เกณฑ์ข้อ6
 * @property string|null $SC057 เกณฑ์ข้อ7
 * @property string|null $SC058 เกณฑ์ข้อ8
 * @property string|null $SC059 เกณฑ์ข้อ9
 * @property string|null $PEIM05 หักคะแนน
 * @property string|null $DEC05 หักคะแนน
 * @property string|null $Followdate1
 * @property string|null $Followdate2
 * @property string|null $NA06
 * @property string|null $MI06
 * @property string|null $NO06
 * @property string|null $SC061 ข้อ1
 * @property string|null $SC062 ข้อ2
 * @property string|null $SC063 ข้อ3
 * @property string|null $SC064 ข้อ4
 * @property string|null $SC065 ข้อ5
 * @property string|null $SC066 เกณฑ์ข้อ6
 * @property string|null $SC067 เกณฑ์ข้อ7
 * @property string|null $SC068 เกณฑ์ข้อ8
 * @property string|null $SC069 เกณฑ์ข้อ9
 * @property string|null $PEIM06 หักคะแนน
 * @property string|null $DEC06 หักคะแนน
 * @property string|null $Followdate3
 * @property string|null $NA07
 * @property string|null $MI07
 * @property string|null $NO07
 * @property string|null $SC071 ข้อ1
 * @property string|null $SC072 ข้อ2
 * @property string|null $SC073 ข้อ3
 * @property string|null $SC074 ข้อ4
 * @property string|null $SC075 ข้อ5
 * @property string|null $SC076 เกณฑ์ข้อ6
 * @property string|null $SC077 เกณฑ์ข้อ7
 * @property string|null $SC078 เกณฑ์ข้อ8
 * @property string|null $SC079 เกณฑ์ข้อ9
 * @property string|null $PEIM07 หักคะแนน
 * @property string|null $DEC07 หักคะแนน
 * @property string|null $NA08
 * @property string|null $MI08
 * @property string|null $NO08
 * @property string|null $SC081 ข้อ1
 * @property string|null $SC082 ข้อ2
 * @property string|null $SC083 ข้อ3
 * @property string|null $SC084 ข้อ4
 * @property string|null $SC085 ข้อ5
 * @property string|null $SC086 เกณฑ์ข้อ6
 * @property string|null $SC087 เกณฑ์ข้อ7
 * @property string|null $SC088 เกณฑ์ข้อ8
 * @property string|null $SC089 เกณฑ์ข้อ9
 * @property string|null $PEIM08 หักคะแนน
 * @property string|null $DEC08 หักคะแนน
 * @property string|null $NA09
 * @property string|null $MI09
 * @property string|null $NO09
 * @property string|null $SC091 ข้อ1
 * @property string|null $SC092 ข้อ2
 * @property string|null $SC093 ข้อ3
 * @property string|null $SC094 ข้อ4
 * @property string|null $SC095 ข้อ5
 * @property string|null $SC096 เกณฑ์ข้อ6
 * @property string|null $SC097 เกณฑ์ข้อ7
 * @property string|null $SC098 เกณฑ์ข้อ8
 * @property string|null $SC099 เกณฑ์ข้อ9
 * @property string|null $PEIM09 หักคะแนน
 * @property string|null $DEC09 หักคะแนน
 * @property string|null $NA10
 * @property string|null $MI10
 * @property string|null $NO10
 * @property string|null $SC101 ข้อ1
 * @property string|null $SC102 ข้อ2
 * @property string|null $SC103 ข้อ3
 * @property string|null $SC104 ข้อ4
 * @property string|null $SC105 ข้อ5
 * @property string|null $SC106 เกณฑ์ข้อ6
 * @property string|null $SC107 เกณฑ์ข้อ7
 * @property string|null $SC108 เกณฑ์ข้อ8
 * @property string|null $SC109 เกณฑ์ข้อ9
 * @property string|null $PEIM10 หักคะแนน
 * @property string|null $DEC10 หักคะแนน
 * @property string|null $hospcode รหัสโรงพยาบาล
 *
 * @property MraDepartmetnsOpd $unit
 */
class Mraopd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mra_opd66';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
	 /*
    public static function getDb()
    {
        return Yii::$app->get('mdevices_a');
    }
*/
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_id'], 'integer'],
            [['HN'], 'required'],
            [['date_admit', 'date_discharge', 'date_audit', 'Followdate1', 'Followdate2', 'Followdate3'], 'safe'],
            [['HN', 'AN'], 'string', 'max' => 10],
            [['dr_license'], 'string', 'max' => 7],
            [['NA01', 'SC012', 'SC013', 'SC014', 'SC017', 'NA02', 'NA03', 'NA04', 'NA05', 'SC054', 'SC057', 'NA06', 'NA07', 'NA08', 'NA09', 'NA10'], 'string', 'max' => 2],
            [['MI01', 'NO01', 'SC011', 'SC015', 'SC016', 'SC018', 'SC019', 'PEIM01', 'DEC01', 'MI02', 'NO02', 'SC021', 'SC022', 'SC023', 'SC024', 'SC025', 'SC026', 'SC027', 'SC028', 'SC029', 'PEIM02', 'DEC02', 'MI03', 'NO03', 'SC031', 'SC032', 'SC033', 'SC034', 'SC035', 'SC036', 'SC037', 'SC038', 'SC039', 'PEIM03', 'DEC03', 'MI04', 'NO04', 'SC041', 'SC042', 'SC043', 'SC044', 'SC045', 'SC046', 'SC047', 'SC048', 'SC049', 'PEIM04', 'DEC04', 'MI05', 'NO05', 'SC051', 'SC052', 'SC053', 'SC055', 'SC056', 'SC058', 'SC059', 'PEIM05', 'DEC05', 'MI06', 'NO06', 'SC061', 'SC062', 'SC063', 'SC064', 'SC065', 'SC066', 'SC067', 'SC068', 'SC069', 'PEIM06', 'DEC06', 'MI07', 'NO07', 'SC071', 'SC072', 'SC073', 'SC074', 'SC075', 'SC076', 'SC077', 'SC078', 'SC079', 'PEIM07', 'DEC07', 'MI08', 'NO08', 'SC081', 'SC082', 'SC083', 'SC084', 'SC085', 'SC086', 'SC087', 'SC088', 'SC089', 'PEIM08', 'DEC08', 'MI09', 'NO09', 'SC091', 'SC092', 'SC093', 'SC094', 'SC095', 'SC096', 'SC097', 'SC098', 'SC099', 'PEIM09', 'DEC09', 'MI10', 'NO10', 'SC101', 'SC102', 'SC103', 'SC104', 'SC105', 'SC106', 'SC107', 'SC108', 'SC109', 'PEIM10', 'DEC10'], 'string', 'max' => 1],
            [['hospcode'], 'string', 'max' => 5],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mradepartmetnsopd::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mra_id' => 'Mra ID',
            'unit_id' => 'แผนก',
			'visit' => 'ครั้งที่',
            'HN' => 'Hn',
            'AN' => 'An',
            'dr_license' => 'Dr License',
            'date_admit' => 'วันรับบริการ',
            'date_discharge' => 'Date Discharge',
            'date_audit' => 'วันตรวจสอบ',
            'NA01' => 'Na01',
            'MI01' => 'Mi01',
            'NO01' => 'No01',
            'SC011' => 'Sc011',
            'SC012' => 'Sc012',
            'SC013' => 'Sc013',
            'SC014' => 'Sc014',
            'SC015' => 'Sc015',
            'SC016' => 'Sc016',
            'SC017' => 'Sc017',
            'SC018' => 'Sc018',
            'SC019' => 'Sc019',
            'PEIM01' => 'Peim01',
            'DEC01' => 'Dec01',
            'NA02' => 'Na02',
            'MI02' => 'Mi02',
            'NO02' => 'No02',
            'SC021' => 'Sc021',
            'SC022' => 'Sc022',
            'SC023' => 'Sc023',
            'SC024' => 'Sc024',
            'SC025' => 'Sc025',
            'SC026' => 'Sc026',
            'SC027' => 'Sc027',
            'SC028' => 'Sc028',
            'SC029' => 'Sc029',
            'PEIM02' => 'Peim02',
            'DEC02' => 'Dec02',
            'NA03' => 'Na03',
            'MI03' => 'Mi03',
            'NO03' => 'No03',
            'SC031' => 'Sc031',
            'SC032' => 'Sc032',
            'SC033' => 'Sc033',
            'SC034' => 'Sc034',
            'SC035' => 'Sc035',
            'SC036' => 'Sc036',
            'SC037' => 'Sc037',
            'SC038' => 'Sc038',
            'SC039' => 'Sc039',
            'PEIM03' => 'Peim03',
            'DEC03' => 'Dec03',
            'NA04' => 'Na04',
            'MI04' => 'Mi04',
            'NO04' => 'No04',
            'SC041' => 'Sc041',
            'SC042' => 'Sc042',
            'SC043' => 'Sc043',
            'SC044' => 'Sc044',
            'SC045' => 'Sc045',
            'SC046' => 'Sc046',
            'SC047' => 'Sc047',
            'SC048' => 'Sc048',
            'SC049' => 'Sc049',
            'PEIM04' => 'Peim04',
            'DEC04' => 'Dec04',
            'NA05' => 'Na05',
            'MI05' => 'Mi05',
            'NO05' => 'No05',
            'SC051' => 'Sc051',
            'SC052' => 'Sc052',
            'SC053' => 'Sc053',
            'SC054' => 'Sc054',
            'SC055' => 'Sc055',
            'SC056' => 'Sc056',
            'SC057' => 'Sc057',
            'SC058' => 'Sc058',
            'SC059' => 'Sc059',
            'PEIM05' => 'Peim05',
            'DEC05' => 'Dec05',
            'Followdate1' => 'Followdate1',
            'Followdate2' => 'Followdate2',
            'NA06' => 'Na06',
            'MI06' => 'Mi06',
            'NO06' => 'No06',
            'SC061' => 'Sc061',
            'SC062' => 'Sc062',
            'SC063' => 'Sc063',
            'SC064' => 'Sc064',
            'SC065' => 'Sc065',
            'SC066' => 'Sc066',
            'SC067' => 'Sc067',
            'SC068' => 'Sc068',
            'SC069' => 'Sc069',
            'PEIM06' => 'Peim06',
            'DEC06' => 'Dec06',
            'Followdate3' => 'Followdate3',
            'NA07' => 'Na07',
            'MI07' => 'Mi07',
            'NO07' => 'No07',
            'SC071' => 'Sc071',
            'SC072' => 'Sc072',
            'SC073' => 'Sc073',
            'SC074' => 'Sc074',
            'SC075' => 'Sc075',
            'SC076' => 'Sc076',
            'SC077' => 'Sc077',
            'SC078' => 'Sc078',
            'SC079' => 'Sc079',
            'PEIM07' => 'Peim07',
            'DEC07' => 'Dec07',
            'NA08' => 'Na08',
            'MI08' => 'Mi08',
            'NO08' => 'No08',
            'SC081' => 'Sc081',
            'SC082' => 'Sc082',
            'SC083' => 'Sc083',
            'SC084' => 'Sc084',
            'SC085' => 'Sc085',
            'SC086' => 'Sc086',
            'SC087' => 'Sc087',
            'SC088' => 'Sc088',
            'SC089' => 'Sc089',
            'PEIM08' => 'Peim08',
            'DEC08' => 'Dec08',
            'NA09' => 'Na09',
            'MI09' => 'Mi09',
            'NO09' => 'No09',
            'SC091' => 'Sc091',
            'SC092' => 'Sc092',
            'SC093' => 'Sc093',
            'SC094' => 'Sc094',
            'SC095' => 'Sc095',
            'SC096' => 'Sc096',
            'SC097' => 'Sc097',
            'SC098' => 'Sc098',
            'SC099' => 'Sc099',
            'PEIM09' => 'Peim09',
            'DEC09' => 'Dec09',
            'NA10' => 'Na10',
            'MI10' => 'Mi10',
            'NO10' => 'No10',
            'SC101' => 'Sc101',
            'SC102' => 'Sc102',
            'SC103' => 'Sc103',
            'SC104' => 'Sc104',
            'SC105' => 'Sc105',
            'SC106' => 'Sc106',
            'SC107' => 'Sc107',
            'SC108' => 'Sc108',
            'SC109' => 'Sc109',
            'PEIM10' => 'Peim10',
            'DEC10' => 'Dec10',
            'hospcode' => 'Hospcode',
        ];
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Mradepartmetnsopd::className(), ['unit_id' => 'unit_id']);
    }
}
