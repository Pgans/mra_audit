
<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use dosamigos\datepicker\DatePicker;
use kartik\datecontrol\DateControl;
use app\models\Departmetnsipd;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'วันAudit: {name}', [
    'name' => $model->date_audit
	]);
$this->title = 'pdf_view';

?>

  <br>
   <p align="center"><img src="images/logo.jpg" alt="" srcset="สปสช." width="120" height="50"></p>
    <p align="center"><b>โรงพยาบาลม่วงสามสิบ</b></p>
    <p align="center" >ความสมบูรณ์เวชระเบียนผู้ป่วยใน แยกตามเกณฑ์</p>
  </div>

    <table class="table table-striped" style="border: 1px solid #ddd; border-collapse: collapse;" width="450" align="center">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #e6ffe6, #d9ead3);"><a>แผนก</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>Content</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>Miss</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>No</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์1</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์2</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์3</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์4</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์5</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์6</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์7</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์8</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์9</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);">จำนวน</th>
        </tr>
        <tr height="25">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            <td style="border: 1px solid #ddd; text-align: center;">จำนวน</td>
            <td style="border: 1px solid #ddd; text-align: center;">%</td>
            
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataProvider->getModels() as $key => $value): ?>
            <tr>
                <td style="border: 1px solid #ddd;"><?= $value["unit_name"]; ?></td>
                <td style="border: 1px solid #ddd;">1.Discharge: Dx, Op</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na01"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi01"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P011"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P012"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P013"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P014"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P015"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P016"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["P017"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P018"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["dxop9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["P019"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge1"]; ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">2.Discharge : Dx, Other</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P021"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P022"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P023"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P024"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P025"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P026"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P027"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P028"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P029"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge2"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">3.Informed consent</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["infc1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P031"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["infc2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P032"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P023"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P024"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P025"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P026"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P027"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P028"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["other9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P029"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge3"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">4.History</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P041"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P042"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P043"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P044"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P045"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P046"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P047"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P048"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["hist9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P049"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge4"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">5.Physical</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P051"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P052"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P053"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P054"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P055"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P056"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P057"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P058"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pe9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P059"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge5"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">6.Progress Note</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na06"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi06"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P061"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P062"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P063"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P064"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P065"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P066"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P067"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P068"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["pn9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P069"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge6"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">7.Consultation record</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na07"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi07"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P071"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P072"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P073"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P074"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P075"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P076"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P077"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P078"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["cr9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P079"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge7"]; ?></td>
            </tr>
			<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">8.Anaesthetic record</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na08"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi08"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P081"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P082"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P083"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P084"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P085"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P086"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P087"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P088"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["ar9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P089"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge8"]; ?></td>
			</tr>
				<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">9.Operative note</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na09"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi09"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P091"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P092"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P093"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P094"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P095"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P096"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P097"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P098"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["on9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P099"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge9"]; ?></td>
			</tr>
				<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">10.Labour record</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na10"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi10"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P101"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P102"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P103"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P104"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P105"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P106"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P107"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P108"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["lr9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P109"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge10"]; ?></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">11.Rehabilitation record</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na11"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi11"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P111"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P112"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P113"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P114"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P115"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P116"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P117"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P118"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["rr9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P119"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge11"]; ?></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">12.Nurses' note helpful</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na12"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi12"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn1"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P121"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn2"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P122"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn3"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P123"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn4"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P124"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn5"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P125"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn6"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P126"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn7"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P127"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn8"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P128"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["nn9"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; c"><?= $value["P129"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge12"]; ?></td>
			</tr>
        <?php endforeach; ?>
    </tbody>
</table>
