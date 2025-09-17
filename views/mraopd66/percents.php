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


$this->title = 'OPD-2566';
$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['mraipd66/index']];
$this->params['breadcrumbs'][] = 'ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยนอก2566';
?>
<style>
    .vibrant-bg {
    background-color: lightblue;
    border: 1px solid #a0c4ff; /* a border that complements the background color */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* subtle shadow */
}

</style>
<br>
<b><a>ประมวลผลความสมบูรณ์เวชระเบียนผู้ป่วยนอก2566</a></b>
<div class='well' style='background-color: lightblue;'>

    <?php $form = ActiveForm::begin(); ?>
    หน่วยงาน:
    <?php
        $items = ArrayHelper::map(Mradepartmetnsopd::find()->all(), 'unit_id', 'unit_name');
        echo Html::dropDownList('unit_id',$unit_name, $items, ['prompt' => '--- ทั้งหมด ---']);
        ?>
    
        <button class='btn btn-success'> ประมวลผล </button>
        <input class="btn btn-primary" name="btnButton" type="button" value="Print Results" onClick="JavaScript:window.print();">
        <?php $form = ActiveForm::begin([ ]);
         echo Html::a('Pdf', [ 'mraopd66/percentpdf', 'id' => $model->id,], [ 'class' => 'btn btn-warning','target' => '_blank',]);   
      
  
    ActiveForm::end();?>
        <?php $form = ActiveForm::begin([ ]);
   
    
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
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 'unit_name',
                        'header' => 'หน่วยบริการ',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's1',
                        'header' => 'Profile',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's2',
                        'header' => 'Hist',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's3',
                        'header' => 'Phys',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's4',
                        'header' => 'Teat',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's5',
                        'header' => 'Foll1',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's6',
                        'header' => 'Foll2',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's7',
                        'header' => 'Foll3',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's8',
                        'header' => 'Oper',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's9',
                        'header' => 'Ins',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 's10',
                        'header' => 'Reh',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    
                    [
                        'attribute' => 'sum',
                        'header' => 'คะแนนได้',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                
                    [
                        'attribute' => 'full',
                        'header' => 'คะแนนเต็ม',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
                    [
                        'attribute' => 'percent',
                        'header' => 'ร้อยละ',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
                    ],
					[
                        'attribute' => 'amounts',
                        'header' => 'จำนวนราย',
                        'headerOptions'=>[ 'style'=>'background-color:#E3E4FA'] ,
						 'format'=> 'raw', //จำเป็นต้องมี ไม่งั้นจะไม่แสดงสี
						  'value' => function ($model) {
                        return '<span class="badge" style="background-color:#147FF1">' . $model['amounts'] . '</span>';
                    },
						
                    ],
                 
                    ]
                ]);
                    
                    ?>
               <!-- </div>-->
               <div class='well' style='background-color: lightblue;'>
    
                <table class="table table-striped" width="450" border="0" align="center" cellspacing="0" >
        <thead>
        <tr>
<th style="background-color:gray; border: 1px solid white; border-radius: 50%; color: white; text-align: center;">Content medical record</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Profile</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Hist</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Phys</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Teat</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Foll1</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Foll2</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Foll3</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Oper</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Inf</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Sum</th>
<th style="background-color: gray; border-radius: 50%; color: white; text-align: center;">Full</th>
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
		
        