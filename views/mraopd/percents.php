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
<br>
<h3><a>ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยนอก</a></h3>
<div  class='well' style='
    background: linear-gradient(to bottom, #e6ffe6, #d9ead3); /* ไล่สีแบบ gradient */
    padding: 20px; 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* ขอบเงาเพื่อเอฟเฟกต์ 3 มิติ */
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
         echo Html::a('Pdf', [ 'mraopd/percentpdf', 'id' => $model->id,], [ 'class' => 'btn btn-warning','target' => '_blank',]);   
       // echo Html::a('CreatePDF', [ 'covid/createpdf', 'id' => $model->id,], [ 'class' => 'btn btn-success','target' => '_blank',]); 
       // echo Html::a('Demo1', [ 'covid/demo1', 'id' => $model->id,], [ 'class' => 'btn btn-success','target' => '_blank',]); 
  
    ActiveForm::end();?>
        <?php $form = ActiveForm::begin([ ]);
    //echo Html::a('ทั้งหมด', ['thaimed/surgeon_9007810all'], ['class' => 'btn btn-success', 'style' => 'margin-left:5px','target'=>'_blank']);
   // echo Html::a('แยกเดือน', ['thaimed/surgeon_9007810month'], ['class' => 'btn btn-info', 'style' => 'margin-left:5px','target'=>'_blank']);
    
    ActiveForm::end();?>
   
</div>
<div>
<?php
echo GridView::widget([
        'dataProvider' => $dataProvider,
        
        'panel' => [
            'before'=>'<b style="color:info">ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยนอก</b>',
           // 'after'=>'<b style="color:red">ประมวลผลจากวันที่ </b>'.$date1   .'<b style="color:red">ถึงวันที่</b>' .$date2 
                   ],
               'columns' => [
                   // ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'hosp_name',
                        'header' => 'รพ.',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 'unit_name',
                        'header' => 'หน่วยบริการ',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
					[
                        'attribute' => 'No',
                        'header' => 'ครั้งที่',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's1',
                        'header' => 'Profile',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's2',
                        'header' => 'Hist',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's3',
                        'header' => 'Phys',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's4',
                        'header' => 'Teat',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's5',
                        'header' => 'Foll1',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's6',
                        'header' => 'Foll2',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's7',
                        'header' => 'Foll3',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's8',
                        'header' => 'Oper',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's9',
                        'header' => 'Ins',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 's10',
                        'header' => 'Reh',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    
                    [
                        'attribute' => 'sum',
                        'header' => 'คะแนนได้',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                
                    [
                        'attribute' => 'full',
                        'header' => 'คะแนนเต็ม',
                       'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
                    [
                        'attribute' => 'percent',
                        'header' => 'ร้อยละ',
                        'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                    ],
					[
                        'attribute' => 'amounts',
                        'header' => 'จำนวนราย',
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
               <!-- </div>-->
                <div class="well">
                <table class="table table-striped" width="450" border="0" align="center" cellspacing="0" >
        <thead>
        <tr>
            <th><a>Content  medical record</a></th><th>Profile</th><th>Hist</th>
        <th>Phys</th><th>Teat</th><th>Foll1</th><th>Foll2</th><th>Foll3</th><th>Oper</th><th>Inf</th><th>Sum</th><th>Full</th>
        <!-- <th>Phys</th><th>Teat</th><th>Foll1</th><th>Foll2</th><th>Foll3</th><th>Oper</th><th>Inf</th><th>Reh</th><th>Sum</th><th>Full</th> -->
        </tr>
        
        <?php
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
            <td align="center"><?=$value["s10"];?></td>
           
               
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
            <td align="center"><?=$value["s10"];?></td>
           
            
        </tr>
        
         <?php ActiveForm::end(); ?>
         <?php endforeach; ?>
        </table>
		
                            </div>
                         </div>
                    </div>
             </div>
        </div>
		
        