<?php
use kartik\grid\GridView;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use dosamigos\datepicker\DatePicker;
use kartik\datecontrol\DateControl;
use app\models\Departmetnsipd;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;


$this->title = 'IPD';
$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['mraipd/index']];
$this->params['breadcrumbs'][] = 'ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยใน';
?>
<style>
    .well-3d {
        border: 1px solid #ccc;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2), -3px -3px 5px rgba(255, 255, 255, 0.8);
        padding: 10px;
        background-color: #f8f8f8;
    }
</style>
<br>
<h3><a>ความสมบูรณ์เวชระเบียนผู้ป่วยใน  คะแนนแยกตามเกณฑ์</a></h3>
<div class='well' style='
    background: linear-gradient(to bottom, lightpink, #d9ead3); /* ไล่สีจากฟ้าอ่อนถึงเขียวอ่อน */
    padding: 20px; 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* ขอบ 3 มิติ */
    border: 1px solid #ccc; /* ขอบ */
    '>
    <?php $form = ActiveForm::begin(); ?>

    หน่วยงาน:
    <?php
        $items = ArrayHelper::map(Departmetnsipd::find()->all(), 'unit_id', 'unit_name');
		echo Html::dropDownList('unit_id', $unit_name, $items, [
		'prompt' => '--- ทั้งหมด ---',
		'style' => 'background-color: #e0f7fa; border: 3px solid #dda0dd;'
			]);
        
        ?>
  
        <button class='btn btn-success'><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ประมวลผล </button>
         <button class="btn btn-primary" type="button" onClick="JavaScript:window.print();">
            <i class="fa fa-print" aria-hidden="true"></i> Print Results
        </button>
        <?php $form = ActiveForm::begin([ ]);
         echo Html::a('<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf', [ 'iclause/percentpdf', 'id' => $model->id,], [ 'class' => 'btn btn-warning','target' => '_blank',]);   
       
  
    ActiveForm::end();?>
        <?php $form = ActiveForm::begin([ ]);
    ActiveForm::end();?>
   
</div>



               <div class="well" style="border: 1px solid #ccc; box-shadow: 3px 3px 5px #aaa; padding: 15px; border-radius: 5px;">


                <table class="table table-striped" style="border: 1px solid #ddd; border-collapse: collapse;" width="450" align="center">
        <thead>
       <tr>
    <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #e6ffe6, #d9ead3);"><a>แผนก</a></th>
    <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>Content of medical record</a></th>
    <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>Miss (M)</a></th>
    <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>No (O)</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์1</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์2</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์3</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์4</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์5</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์6</a></th>
    <th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์7</a></th>
	<th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์8</a></th>
	<th colspan="2" style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #f0f8ff, #d9ead3);"><a>เกณฑ์9</a></th>
    <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);"><a>เวชระเบียน</a></th>
	</tr>
	<tr height="25">
    <td colspan="2"></td>
    <td style="border: 1px solid #ddd; align="center"></td>
    <td style="border: 1px solid #ddd; align="center"></td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
     <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
     <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
     <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
     <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
     <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
	 <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
	 <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
	 <td style="border: 1px solid #ddd; text-align: center; color: green;">จำนวน</td>
    <td style="border: 1px solid #ddd; text-align: center; color: green;">ร้อยละ</td>
	
    <td></td>
</tr>


        
        <?php
        foreach($dataProvider->getModels() as $key => $value):
        ?>
        <tr>
		<td style="border: 1px solid #ddd; align="left"><a><?=$value["unit_name"];?></a></td>
      <td style="border: 1px solid #ddd;align="left"><a >1.Discharge summary : Dx, Op</a></td>
            <td style="border: 1px solid #ddd; align="center"><?=$value["na01"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi01"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["dxop1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P011"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["dxop2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P012"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["dxop3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P013"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["dxop4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P014"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["dxop5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P015"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["dxop6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P016"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["dxop7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P017"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["dxop8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P018"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["dxop9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P019"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge1"]; ?></span>
			</td>
				
        </tr>
           <tr>
		   <td style="border: 1px solid #ddd; align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>2.Discharge summary : Dx, Other</a></td>
            <td style="border: 1px solid #ddd; align="center"><?=$value["na02"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi02"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P021"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P022"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P023"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P024"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P025"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P026"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["other7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P027"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["other8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P028"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["other9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P029"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge2"]; ?></span>
			</td>
        </tr>
        <tr>
		<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>3.Informed consent</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na03"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi03"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P031"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P032"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P033"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P034"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P035"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P036"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["infc7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P037"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["infc8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P038"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["infc9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P039"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge3"]; ?></span>
			</td>
            
        </tr>
		<td style="border: 1px solid #ddd;align="left"><a></a></td>
         <td style="border: 1px solid #ddd;align="left"><a>4.History</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na04"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi04"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P041"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P042"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P043"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P044"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P045"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P046"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["hist7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P047"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["hist8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P048"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["hist9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P049"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge4"]; ?></span>
			</td>
           
        </tr>
		  <tr>
		  <td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>5.Physical</a><?=$value["Followdate1"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na05"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi05"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P051"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P052"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P053"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P054"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P054"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P056"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pe7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P057"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["pe8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P058"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["pe9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P059"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge5"]; ?></span>
			</td>
           
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>6.Progress Note</a><?=$value["Followdate2"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na06"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi06"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P061"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P062"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P063"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P064"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P065"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P066"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["pn7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P067"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["pn8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P068"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["pn9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P069"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge6"]; ?></span>
			</td>
            
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
           <td style="border: 1px solid #ddd;align="left"><a>7.Consultation record</a><?=$value["Followdate3"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na07"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi07"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P071"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P072"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P073"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P074"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P075"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P076"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["cr7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P077"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["cr8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P078"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["cr9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P079"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge7"]; ?></span>
			</td>
            
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>8.Anaesthetic record</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na08"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi08"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P081"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P082"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P083"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P084"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P085"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P086"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["ar7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P087"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["ar8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P088"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["ar9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P089"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge8"]; ?></span>
			</td>
           
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>9.Operative note</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na09"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi09"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P091"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P092"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P093"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P094"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P095"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P096"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["on7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P097"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["on8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P098"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["on9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P099"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge9"]; ?></span>
			</td>
            
        </tr>
         <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>10.Labour record</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P101"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P102"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P103"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P104"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P105"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P106"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["lr7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P107"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["lr8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P108"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["lr9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P109"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge10"]; ?></span>
			</td>
        </tr> 
		 <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>11.Rehabilitation record</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P111"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P112"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P113"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P114"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P115"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P116"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["rr7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P117"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["rr8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P118"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["rr9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P119"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge11"]; ?></span>
			</td>
        </tr> 
		 <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>12.Nurses' note helpful</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn1"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P121"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn2"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P122"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn3"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P123"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn4"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P124"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn5"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P125"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn6"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P126"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["nn7"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P127"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["nn8"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P128"];?></td>
			 <td style="border: 1px solid #ddd;align="center"><?=$value["nn9"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P129"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge12"]; ?></span>
			</td>
        </tr> 
         <?php ActiveForm::end(); ?>
         <?php endforeach; ?>
        </table>
		
                            </div>
                         </div>
                    </div>
             </div>
        </div>
		
        