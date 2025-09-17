<?php

namespace app\controllers;

class DashopdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sql = "SELECT
			SUM(CASE WHEN unit_id = '1' THEN 1 ELSE 0 END) AS 'ER',
			SUM(CASE WHEN unit_id = '2' THEN 1 ELSE 0 END) AS 'OPD',
			SUM(CASE WHEN unit_id = '3' THEN 1 ELSE 0 END) AS 'ไตเทียม',
				SUM(CASE WHEN unit_id = '4' THEN 1 ELSE 0 END) AS 'หอบหืด',
			SUM(CASE WHEN unit_id = '5' THEN 1 ELSE 0 END) AS 'จิตเวช',
			SUM(CASE WHEN unit_id = '6' THEN 1 ELSE 0 END) AS 'กายภาพ',
				SUM(CASE WHEN unit_id = '7' THEN 1 ELSE 0 END) AS 'ไตเรื้อรัง',
				SUM(CASE WHEN unit_id = '13' THEN 1 ELSE 0 END) AS 'DM',
			SUM(CASE WHEN unit_id = '14' THEN 1 ELSE 0 END) AS 'HT',
			SUM(CASE WHEN unit_id = '15' THEN 1 ELSE 0 END) AS 'CAPD',
				SUM(CASE WHEN unit_id = '16' THEN 1 ELSE 0 END) AS 'THAIMED',
			SUM(CASE WHEN unit_id = '17' THEN 1 ELSE 0 END) AS 'คอพอก',
			SUM(CASE WHEN unit_id = '18' THEN 1 ELSE 0 END) AS 'ไตเทียม',
				SUM(CASE WHEN unit_id = '19' THEN 1 ELSE 0 END) AS 'ANC',
			SUM(CASE WHEN unit_id = '20' THEN 1 ELSE 0 END) AS 'VIP',
			SUM(CASE WHEN unit_id = '21' THEN 1 ELSE 0 END) AS 'TB',
				SUM(CASE WHEN unit_id = '22' THEN 1 ELSE 0 END) AS 'FITTEST',
			SUM(CASE WHEN unit_id = '23' THEN 1 ELSE 0 END) AS 'LR',
				SUM(CASE WHEN unit_id = '25' THEN 1 ELSE 0 END) AS 'DENT',
			SUM(CASE WHEN unit_id = '27' THEN 1 ELSE 0 END) AS 'บำบัดฟื้นฟู',
				SUM(CASE WHEN unit_id = '28' THEN 1 ELSE 0 END) AS 'อดเหล้า',
			SUM(CASE WHEN unit_id = '29' THEN 1 ELSE 0 END) AS 'นิรนาม',
			SUM(CASE WHEN unit_id = '30' THEN 1 ELSE 0 END) AS 'ตรวจโรคทั่วไป',
				SUM(CASE WHEN unit_id = '31' THEN 1 ELSE 0 END) AS 'NCD',
			SUM(CASE WHEN unit_id = '32' THEN 1 ELSE 0 END) AS 'HD',
		 
			COUNT(hn) AS total
		FROM mra_opd;

			";
        $rawData = \yii::$app->db_mra->createCommand($sql)->queryAll();
       try {
           $rawData = \Yii::$app->db_mra->createCommand($sql)->queryAll();
       } catch (\yii\db\Exception $e) {
           throw new \yii\web\ConflictHttpException('sql error');
       }
       
       $dataProvider = new \yii\data\ArrayDataProvider([
           'allModels' => $rawData,
           'pagination' => [
            'pageSize' => 5,
            ],
       ]);
			
		return $this->render('index',[
              'dataProvider' => $dataProvider,
              'sql'=>$sql,
			 
          ]);
    }
    

}
