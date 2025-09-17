
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
    <p align="center" >ความสมบูรณ์เวชระเบียนผู้ป่วยนอก แยกตามเกณฑ์  </p>
  </div>

    <table class="table table-striped" style="border: 1px solid #ddd; border-collapse: collapse;" width="450" align="center">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>แผนก</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>Content</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>Miss</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>No</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์1</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์2</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์3</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์4</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์5</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์6</a></th>
            <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);"><a>เกณฑ์7</a></th>
            <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, pink, #d9ead3);">จำนวน</th>
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
                    
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataProvider->getModels() as $key => $value): ?>
            <tr>
                <td style="border: 1px solid #ddd;"><?= $value["unit_name"]; ?></td>
                <td style="border: 1px solid #ddd;">1.Patient's Profile</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na01"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi01"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC011"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P011"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC012"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P012"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC013"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P013"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC014"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P014"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC015"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P015"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC016"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P016"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC017"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["P017"]; ?></td>
   
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge1"]; ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">2.History (1<sup>st</sup> visit)</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC021"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P021"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC022"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P022"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC023"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P023"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC024"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P024"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC025"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P025"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC026"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P026"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC027"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P027"]; ?></td>
              
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge2"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">3.Physical examination</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi02"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC031"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P031"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC032"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P032"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC033"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P023"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC034"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P024"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC035"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P025"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC036"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P026"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC037"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P027"]; ?></td>
                
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge3"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">4.Teatment/Investigation</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na04"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi04"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC041"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P041"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC042"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P042"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC043"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P043"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC044"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P044"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC045"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P045"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC046"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P046"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC047"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P047"]; ?></td>
               
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge4"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">5.Follow up ครั้งที่ 1</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na05"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi05"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC051"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P051"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC052"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P052"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC053"]; ?></td>
				 <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P053"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC054"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P054"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC055"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P055"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC066"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P056"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC057"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P057"]; ?></td>
               
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge5"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">Follow up ครั้งที่ 2</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na06"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi06"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC061"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P061"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC062"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P062"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC063"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P063"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC064"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P064"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC065"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P065"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC066"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P066"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC067"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P067"]; ?></td>
               
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge6"]; ?></td>
            </tr>
			<tr>
                <td style="border: 1px solid #ddd;"></td>
                <td style="border: 1px solid #ddd;">Follow up ครั้งที่ 3</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na07"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi07"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC071"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P071"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC072"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P072"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC073"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P073"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC074"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P074"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC075"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P075"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC076"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P076"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC077"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P077"]; ?></td>
               
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge7"]; ?></td>
            </tr>
			<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">6.Operative note</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na08"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi08"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC081"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P081"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC082"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P082"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC083"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P083"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC084"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P084"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC085"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P085"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC086"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P086"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC087"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P087"]; ?></td>
              
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge8"]; ?></td>
			</tr>
				<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">7.Informed consent</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na09"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi09"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC091"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P091"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC092"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P092"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC093"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P093"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC094"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P094"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC095"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P095"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC096"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P096"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC097"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P097"]; ?></td>
                
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge9"]; ?></td>
			</tr>
				<tr>
				<td style="border: 1px solid #ddd;"></td>
				<td style="border: 1px solid #ddd;">8.Rehabilitation record *</td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["na10"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["mi10"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC101"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P101"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC102"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P102"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC103"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P103"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC104"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P104"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC105"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P105"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC106"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P106"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["SC107"]; ?></td>
                <td style="border: 1px solid #ddd; text-align: center; "><?= $value["P107"]; ?></td>
                
                <td style="border: 1px solid #ddd; text-align: center;"><?= $value["charge10"]; ?></td>
			</tr>
			
        <?php endforeach; ?>
    </tbody>
</table>
