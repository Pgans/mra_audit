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


$this->title = 'IPD 2567_2 ';
$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['mraipd/index']];
$this->params['breadcrumbs'][] = 'ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยใน';
?>
<br>
<h3><a>ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยใน ปีงบ 2567 ครั้งที่2</a></h3>
<div  class='well' style='
    background: linear-gradient(to bottom, #E3E4FA, #A9A9F5); /* ไล่สีแบบ gradient */
    padding: 20px; 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* ขอบเงาเพื่อเอฟเฟกต์ 3 มิติ */
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
         ครั้งที่:
	 <select name="txt_visit">
     <!--<option value="">-ครั้งที่---</option>-->
     <?php
     $visits = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
     $txtVisit = isset($_POST['txt_visit']) && $_POST['txt_visit'] != '' ? $_POST['txt_visit'] : '1';
     foreach($visits as $i=>$mName) {
      $selected = '';
      if($txtVisit == $i) $selected = 'selected="selected"';
      echo '<option value="'.$i.'" '.$selected.'>'. $mName .'</option>'."\n";
     }
     ?>
    </select>
  
        <button class='btn btn-warning'> ประมวลผล </button>
        <input class="btn btn-primary" name="btnButton" type="button" value="Print Results" onClick="JavaScript:window.print();">
        <?php $form = ActiveForm::begin([ ]);
         echo Html::a('<i class="glyphicon glyphicon-print"></i> Pdf', [ 'mraipd/percentpdf', 'id' => $model->id,], [ 'class' => 'btn btn-success','target' => '_blank',]);  
 	 
    ActiveForm::end();?>
        <?php $form = ActiveForm::begin([ ]);
    //echo Html::a('ทั้งหมด', ['thaimed/surgeon_9007810all'], ['class' => 'btn btn-success', 'style' => 'margin-left:5px','target'=>'_blank']);
   // echo Html::a('แยกเดือน', ['thaimed/surgeon_9007810month'], ['class' => 'btn btn-info', 'style' => 'margin-left:5px','target'=>'_blank']);
    
    ActiveForm::end();?>
    <?php ActiveForm::end(); ?>
</div>
<div>
<?php
echo GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'panel' => [
            'before'=>'<b style="color:info">ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยใน</b>',
           // 'after'=>'<b style="color:red">ประมวลผลจากวันที่ </b>'.$date1   .'<b style="color:red">ถึงวันที่</b>' .$date2 
          ],
               'columns' => [
                   // ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'hosp_name',
                        'header' => 'หน่วยบริการ',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 'unit_name',
                        'header' => 'แผนก',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 'No',
                        'header' => 'ครั้งที่',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
					
					
                    [
                        'attribute' => 's1',
                        'header' => 'DxOp',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's2',
                        'header' => 'Other',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's3',
                        'header' => 'InfoC',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's4',
                        'header' => 'Hist',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's5',
                        'header' => 'PhyE',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's6',
                        'header' => 'PrgN',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's7',
                        'header' => 'ConR',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's8',
                        'header' => 'Anes',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's9',
                        'header' => 'OprNt',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's10',
                        'header' => 'LaboR',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's11',
                        'header' => 'Rehap',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 's12',
                        'header' => 'NursNt',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    
                    [
                        'attribute' => 'sum',
                        'header' => 'คะแนนได้',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                
                    [
                        'attribute' => 'full',
                        'header' => 'คะแนนเต็ม',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 'percent',
                        'header' => 'ร้อยละ',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
                    ],
                    [
                        'attribute' => 'amounts',
                        'header' => 'จำนวน',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'],
						 'format'=> 'raw', //จำเป็นต้องมี ไม่งั้นจะไม่แสดงสี
						  'value' => function ($model) {
                        return '<span class="badge" style="background-color:#147FF1">' . $model['amounts'] . '</span>';
                    },
						
                    ],
                    ]
                ]);
                    
                    ?>
                </div>
	<style>
    /* กำหนดให้มีเส้นขีดแนวนอน */
    table {
        border-collapse: collapse;
    }

    /* กำหนดสีและความหนาของเส้นขีดแนวนอน */
    table, th, td {
        border-bottom: 1px solid #ddd;
    }
</style>
                <div class="well">
               <table class="table table-striped" width="450" border="0" align="center" cellspacing="0">
        <thead>
        <tr>
            <th><a>Content  medical record</a></th><th><a>DxOp</a></th><th><a>Other</a></th>
        <th><a>InfoC</a></th><th><a>Hist</a></th><th><a>PhyE</a></th><th><a>PrgN</a></th><th><a>ConR</a></th><th><a>Anes</a></th><th><a>OprNt</a>
		</th><th><a>LaboR</a></th><th><a>Rehap</a></th><th><a>NursNt</a></th>
        </tr>
        
        <?php
        //while($objResult = mysql_fetch_array($dataeProvider))
        foreach($dataProvider->getModels() as $key => $value):
        ?>
        <tr>
        <td><a>sum</a></td>
            <td align="center"><?=$value["s1"];?></td>
            <td align="center"><?=$value["s2"];?></td>
            <td align="center"><?=$value["s3"];?></td>
            <td align="center"><?=$value["s4"];?></td>
            <td align="center"><?=$value["s5"];?></td>
            <td align="center"><?=$value["s6"];?></td>
            <td align="center"><?=$value["s7"];?></td>
            <td align="center"><?=$value["s8"];?></td>
            <td align="center"><?=$value["s9"];?></td>
            <td align="center"><?=$value["s10"];?></td>
            <td align="center"><?=$value["s11"];?></td>
            <td align="center"><?=$value["s12"];?></td>
        <tr>
            <td><a>full</a></td>
            <td align="center"><?=$value["f1"];?></td>
            <td align="center"><?=$value["f2"];?></td>
            <td align="center"><?=$value["f3"];?></td>
            <td align="center"><?=$value["f4"];?></td>
            <td align="center"><?=$value["f5"];?></td>
            <td align="center"><?=$value["f6"];?></td>
            <td align="center"><?=$value["f7"];?></td>
            <td align="center"><?=$value["f8"];?></td>
            <td align="center"><?=$value["f9"];?></td>
            <td align="center"><?=$value["f10"];?></td>
            <td align="center"><?=$value["f11"];?></td>
            <td align="center"><?=$value["f12"];?></td>
            
        </tr>
        <tr>
            <td><a>Percent</a></td>
            <td align="center"><?=$value["p1"];?></td>
            <td align="center"><?=$value["p2"];?></td>
            <td align="center"><?=$value["p3"];?></td>
            <td align="center"><?=$value["p4"];?></td>
            <td align="center"><?=$value["p5"];?></td>
            <td align="center"><?=$value["p6"];?></td>
            <td align="center"><?=$value["p7"];?></td>
            <td align="center"><?=$value["p8"];?></td>
            <td align="center"><?=$value["p9"];?></td>
            <td align="center"><?=$value["p10"];?></td>
            <td align="center"><?=$value["p11"];?></td>
            <td align="center"><?=$value["p12"];?></td>  
        </tr>
        
        
         <?php endforeach; ?>
        </table>
                            </div>
                         </div>
                    </div>
             </div>

        </div>
        