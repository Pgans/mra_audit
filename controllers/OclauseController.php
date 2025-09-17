<?php

namespace app\controllers;
namespace app\controllers;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use kartik\mpdf\Pdf;
use mPDF;
class OclauseController extends \yii\web\Controller
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
		SC011 ,ROUND((SC011/charge1)*100,2)P011 ,SC012,ROUND((SC012/charge1)*100,2)P012 ,SC013,ROUND((SC013/charge1)*100,2)P013,
 SC014,ROUND((SC014/charge1)*100,2)P014,  SC015,ROUND((SC015/charge1)*100,2)P015, SC016,ROUND((SC016/charge1)*100,2)P016, SC017,ROUND((SC017/charge1)*100,2)P017, charge1,

SC021 ,ROUND((SC021/charge2)*100,2)P021 ,SC022,ROUND((SC022/charge2)*100,2)P022 ,SC023,ROUND((SC023/charge2)*100,2)P023,
SC024,ROUND((SC024/charge2)*100,2)P024,  SC025,ROUND((SC025/charge2)*100,2)P025, SC026,ROUND((SC026/charge2)*100,2)P026, SC027,ROUND((SC027/charge2)*100,2)P027, charge2,

SC031 ,ROUND((SC031/charge3)*100,2)P031 ,SC032,ROUND((SC032/charge3)*100,2)P032 ,SC033,ROUND((SC033/charge3)*100,2)P033,
SC034,ROUND((SC034/charge3)*100,2)P034,  SC035,ROUND((SC035/charge3)*100,2)P035, SC036,ROUND((SC036/charge3)*100,2)P036, SC037,ROUND((SC037/charge3)*100,2)P037, charge3,

SC041 ,ROUND((SC041/charge4)*100,2)P041 ,SC042,ROUND((SC042/charge4)*100,2)P042 ,SC043,ROUND((SC043/charge4)*100,2)P043,
SC044,ROUND((SC044/charge4)*100,2)P044,  SC045,ROUND((SC045/charge4)*100,2)P045, SC046,ROUND((SC046/charge4)*100,2)P046, SC047,ROUND((SC047/charge4)*100,2)P047, charge4,

SC051 ,ROUND((SC051/charge5)*100,2)P051 ,SC052,ROUND((SC052/charge5)*100,2)P052 ,SC053,ROUND((SC053/charge5)*100,2)P053,
SC054,ROUND((SC054/charge5)*100,2)P054,  SC055,ROUND((SC055/charge5)*100,2)P055, SC056,ROUND((SC056/charge5)*100,2)P056, SC057,ROUND((SC057/charge5)*100,2)P057, charge5,

SC061 ,ROUND((SC061/charge6)*100,2)P061 ,SC062,ROUND((SC062/charge6)*100,2)P062 ,SC063,ROUND((SC063/charge6)*100,2)P063,
SC064,ROUND((SC064/charge6)*100,2)P064,  SC065,ROUND((SC065/charge6)*100,2)P065, SC066,ROUND((SC066/charge6)*100,2)P066, SC067,ROUND((SC067/charge6)*100,2)P067, charge6,

SC071 ,ROUND((SC071/charge7)*100,2)P071 ,SC072,ROUND((SC072/charge7)*100,2)P072 ,SC073,ROUND((SC073/charge7)*100,2)P073,
SC074,ROUND((SC074/charge7)*100,2)P074,  SC075,ROUND((SC075/charge7)*100,2)P075, SC076,ROUND((SC076/charge7)*100,2)P076, SC077,ROUND((SC077/charge7)*100,2)P077, charge7,

SC081 ,ROUND((SC081 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P081
,SC082,ROUND((SC082/charge8)*100,2)P082 
,SC083,ROUND((SC083/charge8)*100,2)P083
,SC084,ROUND((SC084/charge8)*100,2)P084
,SC085,ROUND((SC085/charge8)*100,2)P085
,SC086,ROUND((SC086/charge8)*100,2)P086
,SC087,ROUND((SC087/charge8)*100,2)P087
,charge8,

SC091 ,ROUND((SC091/charge9)*100,2)P091 ,SC092,ROUND((SC092/charge9)*100,2)P092 ,SC093,ROUND((SC093/charge9)*100,2)P093,
SC094,ROUND((SC094/charge9)*100,2)P094,  SC095,ROUND((SC095/charge9)*100,2)P095, SC096,ROUND((SC096/charge9)*100,2)P096, SC097,ROUND((SC097/charge9)*100,2)P097, charge9,

SC101 ,ROUND((SC101/charge10)*100,2)P0101 ,SC102,ROUND((SC102/charge10)*100,2)P102 ,SC103,ROUND((SC103/charge10)*100,2)P103,
SC104,ROUND((SC104/charge10)*100,2)P104,  SC105,ROUND((SC105/charge10)*100,2)P105, SC106,ROUND((SC106/charge10)*100,2)P106, SC107,ROUND((SC107/charge10)*100,2)P107, charge10
FROM (
		SELECT m.unit_id,
d.unit_name,
SUM(m.MI01) as miss,
SUM(m.NA01) as no,
SUM(m.SC011)SC011, SUM(m.SC012) SC012, SUM(m.SC013) SC013, SUM(m.SC014) SC014, SUM(m.SC015) SC015, SUM(m.SC016) SC016, SUM(m.SC017)SC017,count(m.visit) as charge1,
SUM(m.SC021)SC021, SUM(m.SC022) SC022, SUM(m.SC023) SC023, SUM(m.SC024) SC024, SUM(m.SC025) SC025, SUM(m.SC026) SC026, SUM(m.SC027)SC027,count(m.visit) as charge2,
SUM(m.SC031)SC031, SUM(m.SC032) SC032, SUM(m.SC033) SC033, SUM(m.SC034) SC034, SUM(m.SC035) SC035, SUM(m.SC036) SC036, SUM(m.SC037)SC037,count(m.visit) as charge3,
SUM(m.SC041)SC041, SUM(m.SC042) SC042, SUM(m.SC043) SC043, SUM(m.SC044) SC044, SUM(m.SC045) SC045, SUM(m.SC046) SC046, SUM(m.SC047)SC047,count(m.visit) as charge4,
SUM(m.SC051)SC051, SUM(m.SC052) SC052, SUM(m.SC053) SC053, SUM(m.SC054) SC054, SUM(m.SC055) SC055, SUM(m.SC056) SC056, SUM(m.SC057)SC057,
	GREATEST(SUM(m.SC051),SUM(m.SC052),SUM(m.SC053),SUM(m.SC054),SUM(m.SC055),SUM(m.SC056),SUM(m.SC057)) AS charge5,
SUM(m.SC061)SC061, SUM(m.SC062) SC062, SUM(m.SC063) SC063, SUM(m.SC064) SC064, SUM(m.SC065) SC065, SUM(m.SC066) SC066, SUM(m.SC067)SC067,
	GREATEST(SUM(m.SC061),SUM(m.SC062),SUM(m.SC063),SUM(m.SC064),SUM(m.SC065),SUM(m.SC066),SUM(m.SC067)) AS charge6,
SUM(m.SC071)SC071, SUM(m.SC072) SC072, SUM(m.SC073) SC073, SUM(m.SC074) SC074, SUM(m.SC075) SC075, SUM(m.SC076) SC076, SUM(m.SC077)SC077,
	GREATEST(SUM(m.SC071),SUM(m.SC072),SUM(m.SC073),SUM(m.SC074),SUM(m.SC075),SUM(m.SC076),SUM(m.SC077)) AS charge7,
SUM(m.SC081)SC081, SUM(m.SC082) SC082, SUM(m.SC083) SC083, SUM(m.SC084) SC084, SUM(m.SC085) SC085, SUM(m.SC086) SC086, SUM(m.SC087)SC087,
	GREATEST(SUM(m.SC081),SUM(m.SC082),SUM(m.SC083),SUM(m.SC084),SUM(m.SC085),SUM(m.SC086),SUM(m.SC087)) AS charge8,
SUM(m.SC091)SC091, SUM(m.SC092) SC092, SUM(m.SC093) SC093, SUM(m.SC094) SC094, SUM(m.SC095) SC095, SUM(m.SC096) SC096, SUM(m.SC097)SC097,
	GREATEST(SUM(m.SC091),SUM(m.SC092),SUM(m.SC093),SUM(m.SC094),SUM(m.SC095),SUM(m.SC096),SUM(m.SC097)) AS charge9,
SUM(m.SC101)SC101, SUM(m.SC102) SC102, SUM(m.SC103) SC103, SUM(m.SC104) SC104, SUM(m.SC105) SC105, SUM(m.SC106) SC106, SUM(m.SC107)SC107,
	GREATEST(SUM(m.SC101),SUM(m.SC102),SUM(m.SC103),SUM(m.SC104),SUM(m.SC105),SUM(m.SC106),SUM(m.SC107)) AS charge10
FROM mra_opd m
left JOIN mra_departmetns_opd d ON m.unit_id = d.unit_id
LEFT JOIN hospitals h ON h.hospcode = m.hospcode
WHERE #m.date_audit BETWEEN '2023-01-01' AND '2023-09-30'
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
            'pageSize' => 400,
        ],
    ]);
		 Yii::$app->session['unit_id'] =$units;
		  Yii::$app->session['unit_name'] =$unitName;
         return $this->render('index', [
                    
                   // 'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'sql'=>$sql,               
                 
        ]);   
      }
     public function actionPercentpdf() {
		  $units = Yii::$app->session['unit_id'];
       $sql = "SELECT k.unit_id,
	   CASE 
			   WHEN k.charge1 > 40 THEN 'ทั้งหมด'
			   WHEN k.charge1 < 20 THEN k.unit_name
			   ELSE k.unit_name
			   END as unit_name,
		SC011 ,ROUND((SC011/charge1)*100,2)P011 ,SC012,ROUND((SC012/charge1)*100,2)P012 ,SC013,ROUND((SC013/charge1)*100,2)P013,
 SC014,ROUND((SC014/charge1)*100,2)P014,  SC015,ROUND((SC015/charge1)*100,2)P015, SC016,ROUND((SC016/charge1)*100,2)P016, SC017,ROUND((SC017/charge1)*100,2)P017, charge1,

SC021 ,ROUND((SC021/charge2)*100,2)P021 ,SC022,ROUND((SC022/charge2)*100,2)P022 ,SC023,ROUND((SC023/charge2)*100,2)P023,
SC024,ROUND((SC024/charge2)*100,2)P024,  SC025,ROUND((SC025/charge2)*100,2)P025, SC026,ROUND((SC026/charge2)*100,2)P026, SC027,ROUND((SC027/charge2)*100,2)P027, charge2,

SC031 ,ROUND((SC031/charge3)*100,2)P031 ,SC032,ROUND((SC032/charge3)*100,2)P032 ,SC033,ROUND((SC033/charge3)*100,2)P033,
SC034,ROUND((SC034/charge3)*100,2)P034,  SC035,ROUND((SC035/charge3)*100,2)P035, SC036,ROUND((SC036/charge3)*100,2)P036, SC037,ROUND((SC037/charge3)*100,2)P037, charge3,

SC041 ,ROUND((SC041/charge4)*100,2)P041 ,SC042,ROUND((SC042/charge4)*100,2)P042 ,SC043,ROUND((SC043/charge4)*100,2)P043,
SC044,ROUND((SC044/charge4)*100,2)P044,  SC045,ROUND((SC045/charge4)*100,2)P045, SC046,ROUND((SC046/charge4)*100,2)P046, SC047,ROUND((SC047/charge4)*100,2)P047, charge4,

SC051 ,ROUND((SC051/charge5)*100,2)P051 ,SC052,ROUND((SC052/charge5)*100,2)P052 ,SC053,ROUND((SC053/charge5)*100,2)P053,
SC054,ROUND((SC054/charge5)*100,2)P054,  SC055,ROUND((SC055/charge5)*100,2)P055, SC056,ROUND((SC056/charge5)*100,2)P056, SC057,ROUND((SC057/charge5)*100,2)P057, charge5,

SC061 ,ROUND((SC061/charge6)*100,2)P061 ,SC062,ROUND((SC062/charge6)*100,2)P062 ,SC063,ROUND((SC063/charge6)*100,2)P063,
SC064,ROUND((SC064/charge6)*100,2)P064,  SC065,ROUND((SC065/charge6)*100,2)P065, SC066,ROUND((SC066/charge6)*100,2)P066, SC067,ROUND((SC067/charge6)*100,2)P067, charge6,

SC071 ,ROUND((SC071/charge7)*100,2)P071 ,SC072,ROUND((SC072/charge7)*100,2)P072 ,SC073,ROUND((SC073/charge7)*100,2)P073,
SC074,ROUND((SC074/charge7)*100,2)P074,  SC075,ROUND((SC075/charge7)*100,2)P075, SC076,ROUND((SC076/charge7)*100,2)P076, SC077,ROUND((SC077/charge7)*100,2)P077, charge7,

SC081 ,ROUND((SC081 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P081
,SC082 ,ROUND((SC082 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P082
,SC083 ,ROUND((SC083 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P083
,SC084 ,ROUND((SC084 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P084
,SC085 ,ROUND((SC085 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P085
,SC086 ,ROUND((SC086 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P086
,SC087 ,ROUND((SC087 / CASE WHEN charge8 IS NULL OR charge8 = 0 THEN 1 ELSE charge8 END) * 100, 2) AS P087
,charge8,

SC091 ,ROUND((SC091/charge9)*100,2)P091 ,SC092,ROUND((SC092/charge9)*100,2)P092 ,SC093,ROUND((SC093/charge9)*100,2)P093,
SC094,ROUND((SC094/charge9)*100,2)P094,  SC095,ROUND((SC095/charge9)*100,2)P095, SC096,ROUND((SC096/charge9)*100,2)P096, SC097,ROUND((SC097/charge9)*100,2)P097, charge9,

SC101 ,ROUND((SC101/charge10)*100,2)P0101 ,SC102,ROUND((SC102/charge10)*100,2)P102 ,SC103,ROUND((SC103/charge10)*100,2)P103,
SC104,ROUND((SC104/charge10)*100,2)P104,  SC105,ROUND((SC105/charge10)*100,2)P105, SC106,ROUND((SC106/charge10)*100,2)P106, SC107,ROUND((SC107/charge10)*100,2)P107, charge10
FROM (
		SELECT m.unit_id,
d.unit_name,
SUM(m.MI01) as miss,
SUM(m.NA01) as no,
SUM(m.SC011)SC011, SUM(m.SC012) SC012, SUM(m.SC013) SC013, SUM(m.SC014) SC014, SUM(m.SC015) SC015, SUM(m.SC016) SC016, SUM(m.SC017)SC017,count(m.visit) as charge1,
SUM(m.SC021)SC021, SUM(m.SC022) SC022, SUM(m.SC023) SC023, SUM(m.SC024) SC024, SUM(m.SC025) SC025, SUM(m.SC026) SC026, SUM(m.SC027)SC027,count(m.visit) as charge2,
SUM(m.SC031)SC031, SUM(m.SC032) SC032, SUM(m.SC033) SC033, SUM(m.SC034) SC034, SUM(m.SC035) SC035, SUM(m.SC036) SC036, SUM(m.SC037)SC037,count(m.visit) as charge3,
SUM(m.SC041)SC041, SUM(m.SC042) SC042, SUM(m.SC043) SC043, SUM(m.SC044) SC044, SUM(m.SC045) SC045, SUM(m.SC046) SC046, SUM(m.SC047)SC047,count(m.visit) as charge4,
SUM(m.SC051)SC051, SUM(m.SC052) SC052, SUM(m.SC053) SC053, SUM(m.SC054) SC054, SUM(m.SC055) SC055, SUM(m.SC056) SC056, SUM(m.SC057)SC057,
	GREATEST(SUM(m.SC051),SUM(m.SC052),SUM(m.SC053),SUM(m.SC054),SUM(m.SC055),SUM(m.SC056),SUM(m.SC057)) AS charge5,
SUM(m.SC061)SC061, SUM(m.SC062) SC062, SUM(m.SC063) SC063, SUM(m.SC064) SC064, SUM(m.SC065) SC065, SUM(m.SC066) SC066, SUM(m.SC067)SC067,
	GREATEST(SUM(m.SC061),SUM(m.SC062),SUM(m.SC063),SUM(m.SC064),SUM(m.SC065),SUM(m.SC066),SUM(m.SC067)) AS charge6,
SUM(m.SC071)SC071, SUM(m.SC072) SC072, SUM(m.SC073) SC073, SUM(m.SC074) SC074, SUM(m.SC075) SC075, SUM(m.SC076) SC076, SUM(m.SC077)SC077,
	GREATEST(SUM(m.SC071),SUM(m.SC072),SUM(m.SC073),SUM(m.SC074),SUM(m.SC075),SUM(m.SC076),SUM(m.SC077)) AS charge7,
SUM(m.SC081)SC081, SUM(m.SC082) SC082, SUM(m.SC083) SC083, SUM(m.SC084) SC084, SUM(m.SC085) SC085, SUM(m.SC086) SC086, SUM(m.SC087)SC087,
	GREATEST(SUM(m.SC081),SUM(m.SC082),SUM(m.SC083),SUM(m.SC084),SUM(m.SC085),SUM(m.SC086),SUM(m.SC087)) AS charge8,
SUM(m.SC091)SC091, SUM(m.SC092) SC092, SUM(m.SC093) SC093, SUM(m.SC094) SC094, SUM(m.SC095) SC095, SUM(m.SC096) SC096, SUM(m.SC097)SC097,
	GREATEST(SUM(m.SC091),SUM(m.SC092),SUM(m.SC093),SUM(m.SC094),SUM(m.SC095),SUM(m.SC096),SUM(m.SC097)) AS charge9,
SUM(m.SC101)SC101, SUM(m.SC102) SC102, SUM(m.SC103) SC103, SUM(m.SC104) SC104, SUM(m.SC105) SC105, SUM(m.SC106) SC106, SUM(m.SC107)SC107,
	GREATEST(SUM(m.SC101),SUM(m.SC102),SUM(m.SC103),SUM(m.SC104),SUM(m.SC105),SUM(m.SC106),SUM(m.SC107)) AS charge10
FROM mra_opd m
left JOIN mra_departmetns_opd d ON m.unit_id = d.unit_id
LEFT JOIN hospitals h ON h.hospcode = m.hospcode
WHERE #m.date_audit BETWEEN '2023-01-01' AND '2023-09-30'
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
