<?php
use kartik\grid\GridView;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use dosamigos\datepicker\DatePicker;
use kartik\datecontrol\DateControl;
use app\models\Mradepartmetnsopd;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;


$this->title = 'OPD';
$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['mraipd/index']];
$this->params['breadcrumbs'][] = 'ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยนอก';
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
<h3><a>ความสมบูรณ์เวชระเบียนผู้ป่วยนอก  คะแนนแยกตามเกณฑ์</a></h3>
<div class='well' style='
    background: linear-gradient(to bottom, #d9ead3, #d9ead3); /* ไล่สีจากฟ้าอ่อนถึงเขียวอ่อน */
    padding: 20px; 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* ขอบ 3 มิติ */
    border: 1px solid #ccc; /* ขอบ */
    '>
    <?php $form = ActiveForm::begin(); ?>

    หน่วยงาน:
    <?php
        $items = ArrayHelper::map(Mradepartmetnsopd::find()->all(), 'unit_id', 'unit_name');
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
         echo Html::a('<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf', [ 'oclause/percentpdf', 'id' => $model->id,], [ 'class' => 'btn btn-warning','target' => '_blank',]);   
       
  
    ActiveForm::end();?>
        <?php $form = ActiveForm::begin([ ]);
    ActiveForm::end();?>
   
</div>



                <div class="well well-3d">
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
    <th style="border: 1px solid #ddd; text-align: center; background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);"><a>เวชระเบียน</a></th>
<a>เวชระเบียน</a></th>
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
    <td></td>
</tr>


        
        <?php
        foreach($dataProvider->getModels() as $key => $value):
        ?>
        <tr>
		<td style="border: 1px solid #ddd; align="left"><a><?=$value["unit_name"];?></a></td>
      <td style="border: 1px solid #ddd;align="left"><a >1.Patient's Profile</a></td>
	   
            <td style="border: 1px solid #ddd; align="center"><?=$value["na01"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi01"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC011"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P011"];?></td>
			<td style="border: 1px solid #ddd;align="center"><?=$value["SC012"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P012"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC013"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P013"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC014"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P014"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC015"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P015"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC016"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P016"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC017"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P017"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge1"]; ?></span>
			</td>
				
        </tr>
           <tr>
		   <td style="border: 1px solid #ddd; align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>2.History (1<sup>st</sup> visit)</a></td>
            <td style="border: 1px solid #ddd; align="center"><?=$value["na02"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi02"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC021"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P021"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC022"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P022"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC023"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P023"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC024"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P024"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC025"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P025"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC026"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P026"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC027"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P027"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge2"]; ?></span>
			</td>
        </tr>
        <tr>
		<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>3.Physical examination</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na03"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi03"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC031"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P031"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC032"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P032"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC033"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P033"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC034"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P034"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC035"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P035"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC036"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P036"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC037"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P037"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge3"]; ?></span>
			</td>
            
        </tr>
		<td style="border: 1px solid #ddd;align="left"><a></a></td>
         <td style="border: 1px solid #ddd;align="left"><a>4.Teatment/Investigation</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na04"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi04"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC041"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P041"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC042"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P042"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC043"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P043"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC044"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P044"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC045"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P045"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC046"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P046"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC047"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P047"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge4"]; ?></span>
			</td>
           
        </tr>
		  <tr>
		  <td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>5.Follow up ครั้งที่ 1</a><?=$value["Followdate1"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na05"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi05"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC051"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P051"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC052"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P052"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC053"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P053"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC054"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P054"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC055"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P054"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC056"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P056"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC057"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P057"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge5"]; ?></span>
			</td>
           
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>Follow up ครั้งที่ 2</a><?=$value["Followdate2"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na06"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi06"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC061"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P061"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC062"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P062"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC063"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P063"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC064"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P064"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC065"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P065"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC066"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P066"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC067"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P067"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge6"]; ?></span>
			</td>
            
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
           <td style="border: 1px solid #ddd;align="left"><a>Follow up ครั้งที่ 3</a><?=$value["Followdate3"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na07"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi07"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC071"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P071"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC072"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P072"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC073"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P073"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC074"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P074"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC075"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P075"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC076"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P076"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC077"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P077"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge7"]; ?></span>
			</td>
            
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>6.Operative note</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na08"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi08"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC081"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P081"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC082"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P082"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC083"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P083"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC084"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P084"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC085"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P085"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC086"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P086"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC087"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P087"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge8"]; ?></span>
			</td>
           
        </tr>
        <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>7.Informed consent</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na09"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi09"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC091"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P091"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC092"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P092"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC093"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P093"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC094"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P094"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC095"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P095"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC096"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P096"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC097"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P097"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge9"]; ?></span>
			</td>
            
        </tr>
         <tr>
			<td style="border: 1px solid #ddd;align="left"><a></a></td>
            <td style="border: 1px solid #ddd;align="left"><a>8.Rehabilitation record *</a></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["na10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["mi10"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC101"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P101"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC102"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P102"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC103"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P103"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC104"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P104"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC105"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P105"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC106"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P106"];?></td>
            <td style="border: 1px solid #ddd;align="center"><?=$value["SC107"];?></td>
			<td style="border: 1px solid #ddd; text-align: center; color: green;"> <?=$value["P107"];?></td>
			<td style="border: 1px solid #ddd; text-align: center;">
				<span class="badge" style="background-color: #007bff;"><?= $value["charge10"]; ?></span>
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
		
        