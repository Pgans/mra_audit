<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mra_ipd".
 *
 * @property int $mra_id
 * @property int $unit_id
 * @property int $overall_id
 * @property int $finding_id
 * @property string $visits
 * @property string $note
 * @property string $HN เลขโรงพยาบาล
 * @property string $AN เลขผู้ป่วยใน
 * @property string $dr_license เลข ว แพทย์
 * @property string $date_admit วันเข้ารักษา
 * @property string $date_discharge วันออกโรงพยาบาล
 * @property string $date_audit วันตรวจเวชระเบียน
 * @property string $NA1
 * @property string $Missing1
 * @property string $No1
 * @property string $dxop1 dxopข้อ1
 * @property string $dxop2 เกณฑ์ข้อ2
 * @property string $dxop3 เกณฑ์ข้อ3
 * @property string $dxop4 เกณฑ์ข้อ4
 * @property string $dxop5 เกณฑ์ข้อ5
 * @property string $dxop6 เกณฑ์ข้อ6
 * @property string $dxop7 เกณฑ์ข้อ7
 * @property string $dxop8 เกณฑ์ข้อ8
 * @property string $dxop9 เกณฑ์ข้อ9
 * @property string $dxop_huk หักคะแนน
 * @property string $NA2
 * @property string $Missing2
 * @property string $No2
 * @property string $other1 ข้อ1
 * @property string $other2 ข้อ2
 * @property string $other3 ข้อ3
 * @property string $other4 ข้อ4
 * @property string $other5 ข้อ5
 * @property string $other6 เกณฑ์ข้อ6
 * @property string $other7 เกณฑ์ข้อ7
 * @property string $other8 เกณฑ์ข้อ8
 * @property string $other9 เกณฑ์ข้อ9
 * @property string $other_huk หักคะแนน
 * @property string $NA3
 * @property string $Missing3
 * @property string $No3
 * @property string $infc1 ข้อ1
 * @property string $infc2 ข้อ2
 * @property string $infc3 ข้อ3
 * @property string $infc4 ข้อ4
 * @property string $infc5 ข้อ5
 * @property string $infc6 เกณฑ์ข้อ6
 * @property string $infc7 เกณฑ์ข้อ7
 * @property string $infc8 เกณฑ์ข้อ8
 * @property string $infc9 เกณฑ์ข้อ9
 * @property string $infc_huk หักคะแนน
 * @property string $NA4
 * @property string $Missing4
 * @property string $No4
 * @property string $hist1 ข้อ1
 * @property string $hist2 ข้อ2
 * @property string $hist3 ข้อ3
 * @property string $hist4 ข้อ4
 * @property string $hist5 ข้อ5
 * @property string $hist6 เกณฑ์ข้อ6
 * @property string $hist7 เกณฑ์ข้อ7
 * @property string $hist8 เกณฑ์ข้อ8
 * @property string $hist9 เกณฑ์ข้อ9
 * @property string $hist_huk หักคะแนน
 * @property string $NA5
 * @property string $Missing5
 * @property string $No5
 * @property string $pe1 ข้อ1
 * @property string $pe2 ข้อ2
 * @property string $pe3 ข้อ3
 * @property string $pe4 ข้อ4
 * @property string $pe5 ข้อ5
 * @property string $pe6 เกณฑ์ข้อ6
 * @property string $pe7 เกณฑ์ข้อ7
 * @property string $pe8 เกณฑ์ข้อ8
 * @property string $pe9 เกณฑ์ข้อ9
 * @property string $pe_huk หักคะแนน
 * @property string $NA6
 * @property string $Missing6
 * @property string $No6
 * @property string $pn1 ข้อ1
 * @property string $pn2 ข้อ2
 * @property string $pn3 ข้อ3
 * @property string $pn4 ข้อ4
 * @property string $pn5 ข้อ5
 * @property string $pn6 เกณฑ์ข้อ6
 * @property string $pn7 เกณฑ์ข้อ7
 * @property string $pn8 เกณฑ์ข้อ8
 * @property string $pn9 เกณฑ์ข้อ9
 * @property string $pn_huk หักคะแนน
 * @property string $NA7
 * @property string $Missing7
 * @property string $No7
 * @property string $cr1 ข้อ1
 * @property string $cr2 ข้อ2
 * @property string $cr3 ข้อ3
 * @property string $cr4 ข้อ4
 * @property string $cr5 ข้อ5
 * @property string $cr6 เกณฑ์ข้อ6
 * @property string $cr7 เกณฑ์ข้อ7
 * @property string $cr8 เกณฑ์ข้อ8
 * @property string $cr9 เกณฑ์ข้อ9
 * @property string $cr_huk หักคะแนน
 * @property string $NA8
 * @property string $Missing8
 * @property string $No8
 * @property string $ar1 ข้อ1
 * @property string $ar2 ข้อ2
 * @property string $ar3 ข้อ3
 * @property string $ar4 ข้อ4
 * @property string $ar5 ข้อ5
 * @property string $ar6 เกณฑ์ข้อ6
 * @property string $ar7 เกณฑ์ข้อ7
 * @property string $ar8 เกณฑ์ข้อ8
 * @property string $ar9 เกณฑ์ข้อ9
 * @property string $ar_huk หักคะแนน
 * @property string $NA9
 * @property string $Missing9
 * @property string $No9
 * @property string $on1 ข้อ1
 * @property string $on2 ข้อ2
 * @property string $on3 ข้อ3
 * @property string $on4 ข้อ4
 * @property string $on5 ข้อ5
 * @property string $on6 เกณฑ์ข้อ6
 * @property string $on7 เกณฑ์ข้อ7
 * @property string $on8 เกณฑ์ข้อ8
 * @property string $on9 เกณฑ์ข้อ9
 * @property string $on_huk หักคะแนน
 * @property string $NA10
 * @property string $Missing10
 * @property string $No10
 * @property string $lr1 ข้อ1
 * @property string $lr2 ข้อ2
 * @property string $lr3 ข้อ3
 * @property string $lr4 ข้อ4
 * @property string $lr5 ข้อ5
 * @property string $lr6 เกณฑ์ข้อ6
 * @property string $lr7 เกณฑ์ข้อ7
 * @property string $lr8 เกณฑ์ข้อ8
 * @property string $lr9 เกณฑ์ข้อ9
 * @property string $lr_huk หักคะแนน
 * @property string $NA11
 * @property string $Missing11
 * @property string $No11
 * @property string $rr1 ข้อ1
 * @property string $rr2 ข้อ2
 * @property string $rr3 ข้อ3
 * @property string $rr4 ข้อ4
 * @property string $rr5 ข้อ5
 * @property string $rr6 เกณฑ์ข้อ6
 * @property string $rr7 เกณฑ์ข้อ7
 * @property string $rr8 เกณฑ์ข้อ8
 * @property string $rr9 เกณฑ์ข้อ9
 * @property string $rr_huk หักคะแนน
 * @property string $NA12
 * @property string $Missing12
 * @property string $No12
 * @property string $nn1 ข้อ1
 * @property string $nn2 ข้อ2
 * @property string $nn3 ข้อ3
 * @property string $nn4 ข้อ4
 * @property string $nn5 ข้อ5
 * @property string $nn6 เกณฑ์ข้อ6
 * @property string $nn7 เกณฑ์ข้อ7
 * @property string $nn8 เกณฑ์ข้อ8
 * @property string $nn9 เกณฑ์ข้อ9
 * @property string $nn_huk หักคะแนน
 * @property string $hospcode รหัสโรงพยาบาล
 *
 * @property MraDepartmetnsIpd $unit
 */
class Mraipd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mra_ipd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_id', 'HN', 'AN'], 'required'],
            [['unit_id', 'overall_id', 'finding_id'], 'integer'],
            [['note'], 'string'],
            [['date_admit', 'date_discharge', 'date_audit'], 'safe'],
            [['visits', 'Missing1', 'No1', 'dxop1', 'dxop5', 'dxop6', 'dxop8', 'dxop9', 'dxop_huk', 'Missing2', 'No2', 'other1', 'other2', 'other3', 'other4', 'other5', 'other6', 'other7', 'other8', 'other9', 'other_huk', 'Missing3', 'No3', 'infc1', 'infc2', 'infc3', 'infc4', 'infc5', 'infc6', 'infc7', 'infc8', 'infc9', 'infc_huk', 'Missing4', 'No4', 'hist1', 'hist2', 'hist3', 'hist4', 'hist5', 'hist6', 'hist7', 'hist8', 'hist9', 'hist_huk', 'Missing5', 'No5', 'pe1', 'pe2', 'pe3', 'pe5', 'pe6', 'pe8', 'pe9', 'pe_huk', 'Missing6', 'No6', 'pn1', 'pn2', 'pn3', 'pn4', 'pn5', 'pn6', 'pn7', 'pn8', 'pn9', 'pn_huk', 'Missing7', 'No7', 'cr1', 'cr2', 'cr3', 'cr4', 'cr5', 'cr6', 'cr7', 'cr8', 'cr9', 'cr_huk', 'Missing8', 'No8', 'ar1', 'ar2', 'ar3', 'ar4', 'ar5', 'ar6', 'ar7', 'ar8', 'ar9', 'ar_huk', 'Missing9', 'No9', 'on1', 'on2', 'on3', 'on4', 'on5', 'on6', 'on7', 'on8', 'on9', 'on_huk', 'Missing10', 'No10', 'lr1', 'lr2', 'lr3', 'lr4', 'lr5', 'lr6', 'lr7', 'lr8', 'lr9', 'lr_huk', 'Missing11', 'No11', 'rr1', 'rr2', 'rr3', 'rr4', 'rr5', 'rr6', 'rr7', 'rr8', 'rr9', 'rr_huk', 'Missing12', 'No12', 'nn1', 'nn5', 'nn6', 'nn8', 'nn9', 'nn_huk'], 'string', 'max' => 1],
            [['HN', 'AN'], 'string', 'max' => 10],
            [['dr_license'], 'string', 'max' => 200],
            [['NA1', 'dxop2', 'dxop3', 'dxop4', 'dxop7', 'NA2', 'NA3', 'NA4', 'NA5', 'pe4', 'pe7', 'NA6', 'NA7', 'NA8', 'NA9', 'NA10', 'NA11', 'NA12', 'nn2', 'nn3', 'nn4', 'nn7'], 'string', 'max' => 2],
            [['hospcode'], 'string', 'max' => 5],
            [['AN'], 'unique'],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => MraDepartmetnsIpd::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mra_id' => 'Mra ID',
            'unit_id' => 'Unit ID',
            'overall_id' => 'Overall ID',
            'finding_id' => 'Finding ID',
            'visits' => 'Visits',
            'note' => 'Note',
            'HN' => 'Hn',
            'AN' => 'An',
            'dr_license' => 'Dr License',
            'date_admit' => 'Date Admit',
            'date_discharge' => 'Date Discharge',
            'date_audit' => 'Date Audit',
            'NA1' => 'Na1',
            'Missing1' => 'Missing1',
            'No1' => 'No1',
            'dxop1' => 'Dxop1',
            'dxop2' => 'Dxop2',
            'dxop3' => 'Dxop3',
            'dxop4' => 'Dxop4',
            'dxop5' => 'Dxop5',
            'dxop6' => 'Dxop6',
            'dxop7' => 'Dxop7',
            'dxop8' => 'Dxop8',
            'dxop9' => 'Dxop9',
            'dxop_huk' => 'Dxop Huk',
            'NA2' => 'Na2',
            'Missing2' => 'Missing2',
            'No2' => 'No2',
            'other1' => 'Other1',
            'other2' => 'Other2',
            'other3' => 'Other3',
            'other4' => 'Other4',
            'other5' => 'Other5',
            'other6' => 'Other6',
            'other7' => 'Other7',
            'other8' => 'Other8',
            'other9' => 'Other9',
            'other_huk' => 'Other Huk',
            'NA3' => 'Na3',
            'Missing3' => 'Missing3',
            'No3' => 'No3',
            'infc1' => 'Infc1',
            'infc2' => 'Infc2',
            'infc3' => 'Infc3',
            'infc4' => 'Infc4',
            'infc5' => 'Infc5',
            'infc6' => 'Infc6',
            'infc7' => 'Infc7',
            'infc8' => 'Infc8',
            'infc9' => 'Infc9',
            'infc_huk' => 'Infc Huk',
            'NA4' => 'Na4',
            'Missing4' => 'Missing4',
            'No4' => 'No4',
            'hist1' => 'Hist1',
            'hist2' => 'Hist2',
            'hist3' => 'Hist3',
            'hist4' => 'Hist4',
            'hist5' => 'Hist5',
            'hist6' => 'Hist6',
            'hist7' => 'Hist7',
            'hist8' => 'Hist8',
            'hist9' => 'Hist9',
            'hist_huk' => 'Hist Huk',
            'NA5' => 'Na5',
            'Missing5' => 'Missing5',
            'No5' => 'No5',
            'pe1' => 'Pe1',
            'pe2' => 'Pe2',
            'pe3' => 'Pe3',
            'pe4' => 'Pe4',
            'pe5' => 'Pe5',
            'pe6' => 'Pe6',
            'pe7' => 'Pe7',
            'pe8' => 'Pe8',
            'pe9' => 'Pe9',
            'pe_huk' => 'Pe Huk',
            'NA6' => 'Na6',
            'Missing6' => 'Missing6',
            'No6' => 'No6',
            'pn1' => 'Pn1',
            'pn2' => 'Pn2',
            'pn3' => 'Pn3',
            'pn4' => 'Pn4',
            'pn5' => 'Pn5',
            'pn6' => 'Pn6',
            'pn7' => 'Pn7',
            'pn8' => 'Pn8',
            'pn9' => 'Pn9',
            'pn_huk' => 'Pn Huk',
            'NA7' => 'Na7',
            'Missing7' => 'Missing7',
            'No7' => 'No7',
            'cr1' => 'Cr1',
            'cr2' => 'Cr2',
            'cr3' => 'Cr3',
            'cr4' => 'Cr4',
            'cr5' => 'Cr5',
            'cr6' => 'Cr6',
            'cr7' => 'Cr7',
            'cr8' => 'Cr8',
            'cr9' => 'Cr9',
            'cr_huk' => 'Cr Huk',
            'NA8' => 'Na8',
            'Missing8' => 'Missing8',
            'No8' => 'No8',
            'ar1' => 'Ar1',
            'ar2' => 'Ar2',
            'ar3' => 'Ar3',
            'ar4' => 'Ar4',
            'ar5' => 'Ar5',
            'ar6' => 'Ar6',
            'ar7' => 'Ar7',
            'ar8' => 'Ar8',
            'ar9' => 'Ar9',
            'ar_huk' => 'Ar Huk',
            'NA9' => 'Na9',
            'Missing9' => 'Missing9',
            'No9' => 'No9',
            'on1' => 'On1',
            'on2' => 'On2',
            'on3' => 'On3',
            'on4' => 'On4',
            'on5' => 'On5',
            'on6' => 'On6',
            'on7' => 'On7',
            'on8' => 'On8',
            'on9' => 'On9',
            'on_huk' => 'On Huk',
            'NA10' => 'Na10',
            'Missing10' => 'Missing10',
            'No10' => 'No10',
            'lr1' => 'Lr1',
            'lr2' => 'Lr2',
            'lr3' => 'Lr3',
            'lr4' => 'Lr4',
            'lr5' => 'Lr5',
            'lr6' => 'Lr6',
            'lr7' => 'Lr7',
            'lr8' => 'Lr8',
            'lr9' => 'Lr9',
            'lr_huk' => 'Lr Huk',
            'NA11' => 'Na11',
            'Missing11' => 'Missing11',
            'No11' => 'No11',
            'rr1' => 'Rr1',
            'rr2' => 'Rr2',
            'rr3' => 'Rr3',
            'rr4' => 'Rr4',
            'rr5' => 'Rr5',
            'rr6' => 'Rr6',
            'rr7' => 'Rr7',
            'rr8' => 'Rr8',
            'rr9' => 'Rr9',
            'rr_huk' => 'Rr Huk',
            'NA12' => 'Na12',
            'Missing12' => 'Missing12',
            'No12' => 'No12',
            'nn1' => 'Nn1',
            'nn2' => 'Nn2',
            'nn3' => 'Nn3',
            'nn4' => 'Nn4',
            'nn5' => 'Nn5',
            'nn6' => 'Nn6',
            'nn7' => 'Nn7',
            'nn8' => 'Nn8',
            'nn9' => 'Nn9',
            'nn_huk' => 'Nn Huk',
            'hospcode' => 'Hospcode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(MraDepartmetnsIpd::className(), ['unit_id' => 'unit_id']);
    }
	public function getOverall()
    {
        return $this->hasOne(Mraoverall::className(), ['overall_id' => 'overall_id']);
    }
	public function getFinding()
    {
        return $this->hasOne(MraFinding::className(), ['finding_id' => 'finding_id']);
    }
}
