<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;;
use app\models\Mradepartmetnsopd;
use app\models\Mraoverall;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MraopdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'แบบบันทึกความสมบูรณ์เวชระเบียนผู้ป่วยนอก');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mraopd-index">
<div class='well'>

    <p>
        <?= Html::a(Yii::t('app', '<span class="glyphicon  glyphicon-plus" aria-hidden="true"></span>เพิ่มบันทึกผู้ป่วยนอก'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php $newUnitId = Yii::$app->session->getFlash('new_unit_id'); ?>
    <?php 
    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'filename' => 'drugs',
        'showConfirmAlert' => false,
        'fontAwesome' => true,
        // 'columns' => [
        //     ['class' => 'yii\grid\SerialColumn'],
        //     'hospcode',
        //     'hospname',
        //     'didstd'
        // ],
        'clearBuffers' => true, //optional
    ]);
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		 'rowOptions' => function($model) use ($focusId) {
        if ($model->mra_id == $focusId) {
            return ['class' => 'highlight-row', 'id' => 'focus-row'];
        }
        return [];
    },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'mra_id',
             [
                 'attribute' => 'unit.unit_name',
                 'header' => 'แผนก',
                 'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
             ],
			/*
            [
                'attribute' => 'unit.id',
                'value'=> 'unit.unit_name',
				'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
                'filter' => Html::activeDropDownList($searchModel, 'unit_id',
                ArrayHelper::map(mradepartmetnsopd::find()->all(), 'unit_id', 'unit_name'),
                ['class' => 'form-control'])
              ],
            */
            [
                'attribute' => 'HN',
                //'header' => 'แผนก',
               'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
            ],
            //'AN',
            //'dr_license',
            //'date_admit',
            //'date_discharge',
			
            [
            'attribute' => 'date_audit',
            'header' => 'วันตรวจสอบ',
            'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
           ],
		   [
            'attribute' => 'visit',
            'header' => 'ครั้งที่',
            'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
           ],
		   [
                'attribute' => 'overall_id',
                'value'=> 'overall.overall_name_th',
				'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
            ],   
		   [
            'attribute' => 'note',
            'header' => 'หมายเหตุ',
            'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
           ],
		   [
            'attribute' => 'dr_license',
            'header' => 'Audit By',
            'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
           ],
           
            
			[
			  'class' => 'yii\grid\ActionColumn',
			  'buttonOptions'=>['class'=>'btn btn-default'],
			  'template'=>'<div class="btn-group btn-group-sm text-center" role="group">  {update}  </div>'
			  # 'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
			],
             ['class' => 'yii\grid\ActionColumn',
           'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to(['scan-batch/view',  'id' => $key, 'id' => $model->mra_id]);
           },
                'header'=>'คลิกดู',
                
                'headerOptions' => ['style' => 'width:15%'],
                'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {detail} {edit} {del} </div>',
                'buttons'=>[
                    'detail' => function($url,$model,$key){
                        return Html::a('คะแนน',
                            ['mrasum', 'id' => $model->mra_id,'hn' => $model->HN],
                           // ['class' => 'btn btn-inverse'],
                            ['class' => 'btn btn-info'],
							//['class' => 'btn btn-info', 'id'=>'modalButton'],
                            $url);	     
                    },
					'edit' => function($url,$model,$key){
                        return Html::a('ร้อยละ',
                            ['pdf', 'id' => $model->mra_id,'hn' => $model->HN],
                           // ['class' => 'btn btn-inverse'],
                            ['class' => 'btn btn-warning'],
							//['class' => 'btn btn-info', 'id'=>'modalButton'],
                            $url);	     
                    },
                /*
                    'edit' => function($url,$model,$key){
                                      return Html::a('แก้ไข',
                                          ['update', 'id' => $model->mra_id],
                                          ['class' => 'btn btn-warning'],
                                       $url);
                    },
					
					'del' => function($url,$model,$key){
							 return Html::a('ลบ',
							 ['delete', 'id' => $model->mra_id],
							 ['class' => 'btn btn-danger'],
							 $url);
					 },
					 */
                ],
            ],
        ],
    ]);
     ?>

</div>

<?php
$css = <<<CSS
.highlight-border {
    background-color: #ffff99 !important; /* สีเหลือง */
    border-left: 6px solid #FFD700; /* เส้นขอบซ้ายสีทอง */
    box-shadow: inset 6px 0 0 #FFD700;
    transition: background-color 1s ease, border-left 1s ease;
}
CSS;
$this->registerCss($css);

$js = <<<JS
document.addEventListener("DOMContentLoaded", function() {
    const row = document.getElementById('focus-row');
    if (row) {
        row.scrollIntoView({ behavior: 'smooth', block: 'center' });

        // ล้างสีหลังจาก 4 วินาที
        setTimeout(() => {
            row.classList.remove('highlight-border');
        }, 4000);
    }
});
JS;
$this->registerJs($js);
?>


<!-- <?php
$this->registerJsFile('@web/js/main.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?> -->
<?php
  $this->registerJs("$(function() {
   $('#modalButton').click(function(e) {
     e.preventDefault();
     $('#modal').modal('show').find('.modal-content')
     .load($(this).attr('value'));
   });
});");
?>



</div>
