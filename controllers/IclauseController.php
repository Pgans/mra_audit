<?php

namespace app\controllers;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use kartik\mpdf\Pdf;
use mPDF;

class IclauseController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$p = array(1,2,3,4,5,6,7,8,9,10,11,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35);
        $data = Yii::$app->request->post();
        $unit =isset($data['unit_id'])  ? $data['unit_id'] : '';
		 // ถ้าค่าว่างหรือเลือก "01", จะใช้ค่าเริ่มต้นคือหน่วยงานทั้งหมด
        // ถ้าไม่เลือกหน่วยงานใด ๆ หรือเลือกเป็น "01", ให้ใช้หน่วยงานทั้งหมด
    if (empty($unit) || $unit === '01') {
        $units = implode(",", $p); // ใช้หน่วยงานทั้งหมด
        $unitName = 'ทั้งหมด'; // ชื่อสำหรับการแสดงผล
    } else {
        // แปลงหน่วยงานที่เลือกมาเป็น array, ใช้เฉพาะตัวเลข
        $unitArray = array_unique(array_filter(array_map('trim', explode(',', $unit)), 'is_numeric'));
        $units = implode(",", $unitArray);
        $unitName = null; // ไม่มีชื่อเฉพาะ
    }
		$sql = "SELECT k.unit_id,COALESCE(:unitName, k.unit_name) AS unit_name,
dxop1 ,ROUND((dxop1/charge1)*100,2)P011,
dxop2,ROUND((dxop2/charge1)*100,2)P012,
dxop3,ROUND((dxop3/charge1)*100,2)P013,
dxop4,ROUND((dxop4/charge1)*100,2)P014,
dxop5,ROUND((dxop5/charge1)*100,2)P015,
dxop6,ROUND((dxop6/charge1)*100,2)P016,
dxop7,ROUND((dxop7/charge1)*100,2)P017,
dxop8,ROUND((dxop8/charge1)*100,2)P018,
dxop9,ROUND((dxop9/charge1)*100,2)P019, charge1,
other1,ROUND((other1/charge2)*100,2)P021,
other2,ROUND((other2/charge2)*100,2)P022,
other3,ROUND((other3/charge2)*100,2)P023,
other4,ROUND((other4/charge2)*100,2)P024,
other5,ROUND((other5/charge2)*100,2)P025,
other6,ROUND((other6/charge2)*100,2)P026,
other7,ROUND((other7/charge2)*100,2)P027,
other8,ROUND((other8/charge2)*100,2)P028,
other9,ROUND((other9/charge2)*100,2)P029, charge2,
infc1,ROUND((infc1/charge3)*100,2)P031,
infc2,ROUND((infc2/charge3)*100,2)P032,
infc3,ROUND((infc3/charge3)*100,2)P033,
infc4,ROUND((infc4/charge3)*100,2)P034,
infc5,ROUND((infc5/charge3)*100,2)P035,
infc6,ROUND((infc6/charge3)*100,2)P036,
infc7,ROUND((infc7/charge3)*100,2)P037,
infc8,ROUND((infc8/charge3)*100,2)P038,
infc9,ROUND((infc9/charge3)*100,2)P039, charge3,
hist1,ROUND((hist1/charge4)*100,2)P041,
hist2,ROUND((hist2/charge4)*100,2)P042,
hist3,ROUND((hist3/charge4)*100,2)P043,
hist4,ROUND((hist4/charge4)*100,2)P044,
hist5,ROUND((hist5/charge4)*100,2)P045,
hist6,ROUND((hist6/charge4)*100,2)P046,
hist7,ROUND((hist7/charge4)*100,2)P047,
hist8,ROUND((hist8/charge4)*100,2)P048,
hist9,ROUND((hist9/charge4)*100,2)P049, charge4,
pe1,ROUND((pe1/charge5)*100,2)P051,
pe2,ROUND((pe2/charge5)*100,2)P052,
pe3,ROUND((pe3/charge5)*100,2)P053,
pe4,ROUND((pe4/charge5)*100,2)P054,
pe5,ROUND((pe5/charge5)*100,2)P055,
pe6,ROUND((pe6/charge5)*100,2)P056,
pe7,ROUND((pe7/charge5)*100,2)P057,
pe8,ROUND((pe8/charge5)*100,2)P058,
pe9,ROUND((pe9/charge5)*100,2)P059, charge5,
pn1,ROUND((pn1/charge6)*100,2)P061,
pn2,ROUND((pn2/charge6)*100,2)P062,
pn3,ROUND((pn3/charge6)*100,2)P063,
pn4,ROUND((pn4/charge6)*100,2)P064,
pn5,ROUND((pn5/charge6)*100,2)P065,
pn6,ROUND((pn6/charge6)*100,2)P066,
pn7,ROUND((pn7/charge6)*100,2)P067,
pn8,ROUND((pn8/charge6)*100,2)P068,
pn9,ROUND((pn9/charge6)*100,2)P069, charge6,
cr1,ROUND((cr1/charge7)*100,2)P071,
cr2,ROUND((cr2/charge7)*100,2)P072,
cr3,ROUND((cr3/charge7)*100,2)P073,
cr4,ROUND((cr4/charge7)*100,2)P074,
cr5,ROUND((cr5/charge7)*100,2)P075,
cr6,ROUND((cr6/charge7)*100,2)P076,
cr7,ROUND((cr7/charge7)*100,2)P077,
cr8,ROUND((cr8/charge7)*100,2)P078,
cr9,ROUND((cr9/charge7)*100,2)P079, charge7,
ar1,ROUND((ar1/charge8)*100,2)P081,
ar2,ROUND((ar2/charge8)*100,2)P082,
ar3,ROUND((ar3/charge8)*100,2)P083,
ar4,ROUND((ar4/charge8)*100,2)P084,
ar5,ROUND((ar5/charge8)*100,2)P085,
ar6,ROUND((ar6/charge8)*100,2)P086,
ar7,ROUND((ar7/charge8)*100,2)P087,
ar8,ROUND((ar8/charge8)*100,2)P088,
ar9,ROUND((ar9/charge8)*100,2)P089, charge8,
on1,ROUND((on1/charge9)*100,2)P091,
on2,ROUND((on2/charge9)*100,2)P092,
on3,ROUND((on3/charge9)*100,2)P093,
on4,ROUND((on4/charge9)*100,2)P094,
on5,ROUND((on5/charge9)*100,2)P095,
on6,ROUND((on6/charge9)*100,2)P096,
on7,ROUND((on7/charge9)*100,2)P097,
on8,ROUND((on8/charge9)*100,2)P098,
on9,ROUND((on9/charge9)*100,2)P099, charge9,
lr1,ROUND((lr1/charge10)*100,2)P101,
lr2,ROUND((lr2/charge10)*100,2)P102,
lr3,ROUND((lr3/charge10)*100,2)P103,
lr4,ROUND((lr4/charge10)*100,2)P104,
lr5,ROUND((lr5/charge10)*100,2)P105,
lr6,ROUND((lr6/charge10)*100,2)P106,
lr7,ROUND((lr7/charge10)*100,2)P107,
lr8,ROUND((lr8/charge10)*100,2)P108,
lr9,ROUND((lr9/charge10)*100,2)P109, charge10,
rr1,ROUND((rr1/charge11)*100,2)P111,
rr2,ROUND((rr2/charge11)*100,2)P112,
rr3,ROUND((rr3/charge11)*100,2)P113,
rr4,ROUND((rr4/charge11)*100,2)P114,
rr5,ROUND((rr5/charge11)*100,2)P115,
rr6,ROUND((rr6/charge11)*100,2)P116,
rr7,ROUND((rr7/charge11)*100,2)P117,
rr8,ROUND((rr8/charge11)*100,2)P118,
rr9,ROUND((rr9/charge11)*100,2)P119, charge11,
nn1,ROUND((nn1/charge12)*100,2)P121,
nn2,ROUND((nn2/charge12)*100,2)P122,
nn3,ROUND((nn3/charge12)*100,2)P123,
nn4,ROUND((nn4/charge12)*100,2)P124,
nn5,ROUND((nn5/charge12)*100,2)P125,
nn6,ROUND((nn6/charge12)*100,2)P126,
nn7,ROUND((nn7/charge12)*100,2)P127,
nn8,ROUND((nn8/charge12)*100,2)P128,
nn9,ROUND((nn9/charge12)*100,2)P129, charge12

FROM (
SELECT m.unit_id, d.unit_name,
 SUM(m.Missing1) as miss,
 SUM(m.No1) as no,
 SUM(m.dxop1)dxop1, SUM(m.dxop2) dxop2, SUM(m.dxop3) dxop3, SUM(m.dxop4) dxop4, SUM(m.dxop5) dxop5, SUM(m.dxop6) dxop6, SUM(m.dxop7)dxop7,
 SUM(m.dxop8)dxop8, SUM(m.dxop9) dxop9, count(m.unit_id) as charge1,

 SUM(m.other1) other1, SUM(m.other2) other2, SUM(m.other3) other3, SUM(m.other4) other4, SUM(m.other5) other5, SUM(m.other6) other6, SUM(m.other7)other7,
 SUM(m.other8)other8, SUM(m.other9) other9, count(m.an) as charge2,

 SUM(m.infc1) infc1, SUM(m.infc2) infc2, SUM(m.infc3) infc3, SUM(m.infc4) infc4, SUM(m.infc5) infc5, SUM(m.infc6) infc6, SUM(m.infc7)infc7,
 SUM(m.infc8)infc8, SUM(m.infc9) infc9, count(m.an) as charge3,

 SUM(m.hist1) hist1, SUM(m.hist2) hist2, SUM(m.hist3) hist3, SUM(m.hist4) hist4, SUM(m.hist5) hist5, SUM(m.hist6) hist6, SUM(m.hist7)hist7,
 SUM(m.hist8)hist8, SUM(m.hist9) hist9, count(m.an) as charge4,

 SUM(m.pe1) pe1, SUM(m.pe2) pe2, SUM(m.pe3) pe3, SUM(m.pe4) pe4, SUM(m.pe5) pe5, SUM(m.pe6) pe6, SUM(m.pe7)pe7,
 SUM(m.pe8)pe8, SUM(m.pe9) pe9, count(m.an) as charge5,
 
 SUM(m.pn1) pn1, SUM(m.pn2) pn2, SUM(m.pn3) pn3, SUM(m.pn4) pn4, SUM(m.pn5) pn5, SUM(m.pn6) pn6, SUM(m.pn7)pn7,
 SUM(m.pn8)pn8, SUM(m.pn9) pn9, count(m.an) as charge6,

 SUM(m.cr1) cr1, SUM(m.cr2) cr2, SUM(m.cr3) cr3, SUM(m.cr4) cr4, SUM(m.cr5) cr5, SUM(m.cr6) cr6 ,SUM(m.cr7)cr7,
 SUM(m.cr8)cr8, SUM(m.cr9) cr9, GREATEST(SUM(m.cr1),SUM(m.cr2),SUM(m.cr3),SUM(m.cr4),SUM(m.cr5),SUM(m.cr6),SUM(m.cr7), SUM(m.cr8), SUM(m.cr9))  as charge7,

 SUM(m.ar1) ar1, SUM(m.ar2) ar2, SUM(m.ar3) ar3, SUM(m.ar4) ar4, SUM(m.ar5) ar5, SUM(m.ar6) ar6 ,SUM(m.ar7)ar7,
 SUM(m.ar8)ar8, SUM(m.ar9) ar9,GREATEST(SUM(m.ar1),SUM(m.ar2),SUM(m.ar3),SUM(m.ar4),SUM(m.ar5),SUM(m.ar6),SUM(m.ar7), SUM(m.ar8), SUM(m.ar9))  as charge8,
 
 SUM(m.on1) on1, SUM(m.on2) on2, SUM(m.on3) on3, SUM(m.on4) on4, SUM(m.on5) on5, SUM(m.on6) on6 ,SUM(m.on7)on7,
 SUM(m.on8)on8, SUM(m.on9) on9,GREATEST(SUM(m.on1),SUM(m.on2),SUM(m.on3),SUM(m.on4),SUM(m.on5),SUM(m.on6),SUM(m.on7), SUM(m.on8), SUM(m.on9))  as charge9,

 SUM(m.lr1)lr1, SUM(m.lr2) lr2, SUM(m.lr3) lr3, SUM(m.lr4) lr4, SUM(m.lr5) lr5, SUM(m.lr6) lr6 ,SUM(m.lr7)lr7,
 SUM(m.lr8)lr8, SUM(m.lr9) lr9, GREATEST(SUM(m.lr1),SUM(m.lr2),SUM(m.lr3),SUM(m.lr4),SUM(m.lr5),SUM(m.lr6),SUM(m.lr7), SUM(m.lr8), SUM(m.lr9))  as charge10,

 SUM(m.rr1)rr1, SUM(m.rr2) rr2, SUM(m.rr3) rr3, SUM(m.rr4) rr4, SUM(m.rr5) rr5, SUM(m.rr6) rr6 ,SUM(m.rr7)rr7,
 SUM(m.rr8)rr8, SUM(m.rr9) rr9, GREATEST(SUM(m.rr1),SUM(m.rr2),SUM(m.rr3),SUM(m.rr4),SUM(m.rr5),SUM(m.rr6),SUM(m.rr7), SUM(m.rr8), SUM(m.rr9))  as charge11,


 SUM(m.nn1)nn1, SUM(m.nn2) nn2, SUM(m.nn3) nn3, SUM(m.nn4) nn4, SUM(m.nn5) nn5, SUM(m.nn6) nn6 ,SUM(m.nn7)nn7,
 SUM(m.nn8)nn8, SUM(m.nn9) nn9 , GREATEST(SUM(m.nn1),SUM(m.nn2),SUM(m.nn3),SUM(m.nn4),SUM(m.nn5),SUM(m.nn6),SUM(m.nn7), SUM(m.nn8),count(m.an))  as charge12

FROM mra_ipd m
left JOIN mra_departmetns_ipd d ON m.unit_id = d.unit_id
LEFT JOIN hospitals h ON h.hospcode = m.hospcode
WHERE 
 m.unit_id in ($units) ) as k  ";
	 // สร้าง SQL command
    $command = Yii::$app->db_mra->createCommand($sql);
    $command->bindValue(':unitName', $unitName); // เพิ่มค่า unitName
    try {
        $rawData = $command->queryAll();
    } catch (\yii\db\Exception $e) {
        throw new \yii\web\ConflictHttpException('SQL error');
    }

    // ตรวจสอบค่าจำนวน (amount)
    $amount = count($rawData);
    //print_r($amount);

    $dataProvider = new \yii\data\ArrayDataProvider([
        'allModels' => $rawData,
        'pagination' => [
            'pageSize' => 400,
        ],
    ]);
		 Yii::$app->session['unit_id'] =$units;
         return $this->render('index', [
                    
                   // 'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'sql'=>$sql,               
                 
        ]);   
      }
     public function actionPercentpdf() {
       $units = Yii::$app->session['unit_id'];

          $sql = "SELECT k.unit_id,CASE 
			   WHEN k.charge1 > 70 THEN 'IPD'
			   WHEN k.charge1 < 70 THEN k.unit_name
			   ELSE k.unit_name
			   END as unit_name,
dxop1 ,ROUND((dxop1/charge1)*100,2)P011,
dxop2,ROUND((dxop2/charge1)*100,2)P012,
dxop3,ROUND((dxop3/charge1)*100,2)P013,
dxop4,ROUND((dxop4/charge1)*100,2)P014,
dxop5,ROUND((dxop5/charge1)*100,2)P015,
dxop6,ROUND((dxop6/charge1)*100,2)P016,
dxop7,ROUND((dxop7/charge1)*100,2)P017,
dxop8,ROUND((dxop8/charge1)*100,2)P018,
dxop9,ROUND((dxop9/charge1)*100,2)P019, charge1,
other1,ROUND((other1/charge2)*100,2)P021,
other2,ROUND((other2/charge2)*100,2)P022,
other3,ROUND((other3/charge2)*100,2)P023,
other4,ROUND((other4/charge2)*100,2)P024,
other5,ROUND((other5/charge2)*100,2)P025,
other6,ROUND((other6/charge2)*100,2)P026,
other7,ROUND((other7/charge2)*100,2)P027,
other8,ROUND((other8/charge2)*100,2)P028,
other9,ROUND((other9/charge2)*100,2)P029, charge2,
infc1,ROUND((infc1/charge3)*100,2)P031,
infc2,ROUND((infc2/charge3)*100,2)P032,
infc3,ROUND((infc3/charge3)*100,2)P033,
infc4,ROUND((infc4/charge3)*100,2)P034,
infc5,ROUND((infc5/charge3)*100,2)P035,
infc6,ROUND((infc6/charge3)*100,2)P036,
infc7,ROUND((infc7/charge3)*100,2)P037,
infc8,ROUND((infc8/charge3)*100,2)P038,
infc9,ROUND((infc9/charge3)*100,2)P039, charge3,
hist1,ROUND((hist1/charge4)*100,2)P041,
hist2,ROUND((hist2/charge4)*100,2)P042,
hist3,ROUND((hist3/charge4)*100,2)P043,
hist4,ROUND((hist4/charge4)*100,2)P044,
hist5,ROUND((hist5/charge4)*100,2)P045,
hist6,ROUND((hist6/charge4)*100,2)P046,
hist7,ROUND((hist7/charge4)*100,2)P047,
hist8,ROUND((hist8/charge4)*100,2)P048,
hist9,ROUND((hist9/charge4)*100,2)P049, charge4,
pe1,ROUND((pe1/charge5)*100,2)P051,
pe2,ROUND((pe2/charge5)*100,2)P052,
pe3,ROUND((pe3/charge5)*100,2)P053,
pe4,ROUND((pe4/charge5)*100,2)P054,
pe5,ROUND((pe5/charge5)*100,2)P055,
pe6,ROUND((pe6/charge5)*100,2)P056,
pe7,ROUND((pe7/charge5)*100,2)P057,
pe8,ROUND((pe8/charge5)*100,2)P058,
pe9,ROUND((pe9/charge5)*100,2)P059, charge5,
pn1,ROUND((pn1/charge6)*100,2)P061,
pn2,ROUND((pn2/charge6)*100,2)P062,
pn3,ROUND((pn3/charge6)*100,2)P063,
pn4,ROUND((pn4/charge6)*100,2)P064,
pn5,ROUND((pn5/charge6)*100,2)P065,
pn6,ROUND((pn6/charge6)*100,2)P066,
pn7,ROUND((pn7/charge6)*100,2)P067,
pn8,ROUND((pn8/charge6)*100,2)P068,
pn9,ROUND((pn9/charge6)*100,2)P069, charge6,
cr1,ROUND((cr1/charge7)*100,2)P071,
cr2,ROUND((cr2/charge7)*100,2)P072,
cr3,ROUND((cr3/charge7)*100,2)P073,
cr4,ROUND((cr4/charge7)*100,2)P074,
cr5,ROUND((cr5/charge7)*100,2)P075,
cr6,ROUND((cr6/charge7)*100,2)P076,
cr7,ROUND((cr7/charge7)*100,2)P077,
cr8,ROUND((cr8/charge7)*100,2)P078,
cr9,ROUND((cr9/charge7)*100,2)P079, charge7,
ar1,ROUND((ar1/charge8)*100,2)P081,
ar2,ROUND((ar2/charge8)*100,2)P082,
ar3,ROUND((ar3/charge8)*100,2)P083,
ar4,ROUND((ar4/charge8)*100,2)P084,
ar5,ROUND((ar5/charge8)*100,2)P085,
ar6,ROUND((ar6/charge8)*100,2)P086,
ar7,ROUND((ar7/charge8)*100,2)P087,
ar8,ROUND((ar8/charge8)*100,2)P088,
ar9,ROUND((ar9/charge8)*100,2)P089, charge8,
on1,ROUND((on1/charge9)*100,2)P091,
on2,ROUND((on2/charge9)*100,2)P092,
on3,ROUND((on3/charge9)*100,2)P093,
on4,ROUND((on4/charge9)*100,2)P094,
on5,ROUND((on5/charge9)*100,2)P095,
on6,ROUND((on6/charge9)*100,2)P096,
on7,ROUND((on7/charge9)*100,2)P097,
on8,ROUND((on8/charge9)*100,2)P098,
on9,ROUND((on9/charge9)*100,2)P099, charge9,
lr1,ROUND((lr1/charge10)*100,2)P101,
lr2,ROUND((lr2/charge10)*100,2)P102,
lr3,ROUND((lr3/charge10)*100,2)P103,
lr4,ROUND((lr4/charge10)*100,2)P104,
lr5,ROUND((lr5/charge10)*100,2)P105,
lr6,ROUND((lr6/charge10)*100,2)P106,
lr7,ROUND((lr7/charge10)*100,2)P107,
lr8,ROUND((lr8/charge10)*100,2)P108,
lr9,ROUND((lr9/charge10)*100,2)P109, charge10,
rr1,ROUND((rr1/charge11)*100,2)P111,
rr2,ROUND((rr2/charge11)*100,2)P112,
rr3,ROUND((rr3/charge11)*100,2)P113,
rr4,ROUND((rr4/charge11)*100,2)P114,
rr5,ROUND((rr5/charge11)*100,2)P115,
rr6,ROUND((rr6/charge11)*100,2)P116,
rr7,ROUND((rr7/charge11)*100,2)P117,
rr8,ROUND((rr8/charge11)*100,2)P118,
rr9,ROUND((rr9/charge11)*100,2)P119, charge11,
nn1,ROUND((nn1/charge12)*100,2)P121,
nn2,ROUND((nn2/charge12)*100,2)P122,
nn3,ROUND((nn3/charge12)*100,2)P123,
nn4,ROUND((nn4/charge12)*100,2)P124,
nn5,ROUND((nn5/charge12)*100,2)P125,
nn6,ROUND((nn6/charge12)*100,2)P126,
nn7,ROUND((nn7/charge12)*100,2)P127,
nn8,ROUND((nn8/charge12)*100,2)P128,
nn9,ROUND((nn9/charge12)*100,2)P129, charge12

FROM (
SELECT m.unit_id, d.unit_name,
 SUM(m.Missing1) as miss,
 SUM(m.No1) as no,
 SUM(m.dxop1)dxop1, SUM(m.dxop2) dxop2, SUM(m.dxop3) dxop3, SUM(m.dxop4) dxop4, SUM(m.dxop5) dxop5, SUM(m.dxop6) dxop6, SUM(m.dxop7)dxop7,
 SUM(m.dxop8)dxop8, SUM(m.dxop9) dxop9, count(m.unit_id) as charge1,

 SUM(m.other1) other1, SUM(m.other2) other2, SUM(m.other3) other3, SUM(m.other4) other4, SUM(m.other5) other5, SUM(m.other6) other6, SUM(m.other7)other7,
 SUM(m.other8)other8, SUM(m.other9) other9, count(m.an) as charge2,

 SUM(m.infc1) infc1, SUM(m.infc2) infc2, SUM(m.infc3) infc3, SUM(m.infc4) infc4, SUM(m.infc5) infc5, SUM(m.infc6) infc6, SUM(m.infc7)infc7,
 SUM(m.infc8)infc8, SUM(m.infc9) infc9, count(m.an) as charge3,

 SUM(m.hist1) hist1, SUM(m.hist2) hist2, SUM(m.hist3) hist3, SUM(m.hist4) hist4, SUM(m.hist5) hist5, SUM(m.hist6) hist6, SUM(m.hist7)hist7,
 SUM(m.hist8)hist8, SUM(m.hist9) hist9, count(m.an) as charge4,

 SUM(m.pe1) pe1, SUM(m.pe2) pe2, SUM(m.pe3) pe3, SUM(m.pe4) pe4, SUM(m.pe5) pe5, SUM(m.pe6) pe6, SUM(m.pe7)pe7,
 SUM(m.pe8)pe8, SUM(m.pe9) pe9, count(m.an) as charge5,
 
 SUM(m.pn1) pn1, SUM(m.pn2) pn2, SUM(m.pn3) pn3, SUM(m.pn4) pn4, SUM(m.pn5) pn5, SUM(m.pn6) pn6, SUM(m.pn7)pn7,
 SUM(m.pn8)pn8, SUM(m.pn9) pn9, count(m.an) as charge6,

 SUM(m.cr1) cr1, SUM(m.cr2) cr2, SUM(m.cr3) cr3, SUM(m.cr4) cr4, SUM(m.cr5) cr5, SUM(m.cr6) cr6 ,SUM(m.cr7)cr7,
 SUM(m.cr8)cr8, SUM(m.cr9) cr9, GREATEST(SUM(m.cr1),SUM(m.cr2),SUM(m.cr3),SUM(m.cr4),SUM(m.cr5),SUM(m.cr6),SUM(m.cr7), SUM(m.cr8), SUM(m.cr9))  as charge7,

 SUM(m.ar1) ar1, SUM(m.ar2) ar2, SUM(m.ar3) ar3, SUM(m.ar4) ar4, SUM(m.ar5) ar5, SUM(m.ar6) ar6 ,SUM(m.ar7)ar7,
 SUM(m.ar8)ar8, SUM(m.ar9) ar9,GREATEST(SUM(m.ar1),SUM(m.ar2),SUM(m.ar3),SUM(m.ar4),SUM(m.ar5),SUM(m.ar6),SUM(m.ar7), SUM(m.ar8), SUM(m.ar9))  as charge8,
 
 SUM(m.on1) on1, SUM(m.on2) on2, SUM(m.on3) on3, SUM(m.on4) on4, SUM(m.on5) on5, SUM(m.on6) on6 ,SUM(m.on7)on7,
 SUM(m.on8)on8, SUM(m.on9) on9,GREATEST(SUM(m.on1),SUM(m.on2),SUM(m.on3),SUM(m.on4),SUM(m.on5),SUM(m.on6),SUM(m.on7), SUM(m.on8), SUM(m.on9))  as charge9,

 SUM(m.lr1)lr1, SUM(m.lr2) lr2, SUM(m.lr3) lr3, SUM(m.lr4) lr4, SUM(m.lr5) lr5, SUM(m.lr6) lr6 ,SUM(m.lr7)lr7,
 SUM(m.lr8)lr8, SUM(m.lr9) lr9, GREATEST(SUM(m.lr1),SUM(m.lr2),SUM(m.lr3),SUM(m.lr4),SUM(m.lr5),SUM(m.lr6),SUM(m.lr7), SUM(m.lr8), SUM(m.lr9))  as charge10,

 SUM(m.rr1)rr1, SUM(m.rr2) rr2, SUM(m.rr3) rr3, SUM(m.rr4) rr4, SUM(m.rr5) rr5, SUM(m.rr6) rr6 ,SUM(m.rr7)rr7,
 SUM(m.rr8)rr8, SUM(m.rr9) rr9, GREATEST(SUM(m.rr1),SUM(m.rr2),SUM(m.rr3),SUM(m.rr4),SUM(m.rr5),SUM(m.rr6),SUM(m.rr7), SUM(m.rr8), SUM(m.rr9))  as charge11,


 SUM(m.nn1)nn1, SUM(m.nn2) nn2, SUM(m.nn3) nn3, SUM(m.nn4) nn4, SUM(m.nn5) nn5, SUM(m.nn6) nn6 ,SUM(m.nn7)nn7,
 SUM(m.nn8)nn8, SUM(m.nn9) nn9 , GREATEST(SUM(m.nn1),SUM(m.nn2),SUM(m.nn3),SUM(m.nn4),SUM(m.nn5),SUM(m.nn6),SUM(m.nn7), SUM(m.nn8),count(m.an))  as charge12

FROM mra_ipd m
left JOIN mra_departmetns_ipd d ON m.unit_id = d.unit_id
LEFT JOIN hospitals h ON h.hospcode = m.hospcode
WHERE 
 m.unit_id in ($units) ) as k
           ";
		// สร้าง SQL command
		$command = Yii::$app->db_mra->createCommand($sql);
		$command->bindValue(':unitName', $unitName); // เพิ่มค่า unitName
		try {
			$rawData = $command->queryAll();
		} catch (\yii\db\Exception $e) {
			throw new \yii\web\ConflictHttpException('SQL error');
		}

			// ตรวจสอบค่าจำนวน (amount)
			$amount = count($rawData);
			//print_r($amount);

           $dataProvider = new \yii\data\ArrayDataProvider([
               'allModels' => $rawData,
               'pagination' => [
                'pageSize' => FALSE,
                ],
           ]);
						   
			Yii::$app->session['date1'] = $date1;
			Yii::$app->session['date2'] = $date2;
			
			$content = $this->renderPartial('pdf_view', ['model', 'dataProvider' => $dataProvider]);
            $destination = Pdf::DEST_BROWSER;
            //$destination = Pdf::DEST_DOWNLOAD;
           //$filename = $data->_reportView. ".pdf";
			$pdf = new Pdf([
			
			     //'default_font_size' => 13,
                // set to use core fonts only
                'mode' => Pdf::MODE_UTF8,
                // A4 paper format
                //'format' => Pdf::FORMAT_A4,
				'format' => 'A4-L',
                // portrait orientation
                'orientation' => Pdf::ORIENT_PORTRAIT,
                // stream to browser inline
                'destination' => $destination,
               // 'filename' => $filename,
                // your html content input
                'content' => $content,
				/*
				 'content' => $this->renderPartial('pdf', [
				'searchModel' => $searchModel,
				'atkProvider' => $atkProvider
                ]),
				*/
                // format content from your own css file if needed or use the
                // enhanced bootstrap css built by Krajee for mPDF formatting 
                //'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
                'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.css', 
                // any css to be embedded if required
                //'cssInline' => '.bd{border:1.5px solid; text-align: center;} .ar{text-align:right} .imgbd{border:1px solid}',
				//'cssInline' => '.kv-heading-1{font-size:28px}',
				'cssInline'=> '.kv-heading-1{font-size:20px}',
				'marginLeft' => 5, 'marginTop' => 5, 'marginRight' => 5, 'marginBottom' => 5,
                'marginFooter' => 5,
				'defaultFont' => 'Garuda',
				  // 'default_font_size' => 16, 
                 //call mPDF methods on the fly
                'methods' => [
                    'SetTitle' => ['MraIPD'],
                    //'SetHeader' => ['SAMPLE'],
                    'SetFooter' => ['{PAGENO}'],
                ]
            ]);
    
            // return the pdf output as per the destination setting
            return $pdf->render();
			
        }

}
