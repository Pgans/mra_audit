<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel app\models\MraipdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'โปรแกรมบันทึกความสมบูรณ์เวชระเบียนผู้ป่วยใน');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mraipd-index">
   <div class='well' style='box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);'>


    <p>
        <?= Html::a(Yii::t('app', '<i class="glyphicon glyphicon-plus"></i>เพิ่มข้อมูล'), ['create'], ['class' => 'btn btn-success']) ?>
      
    
    </p>
    <?php Modal::begin([
        'id' => 'modal',
        'header' => '<h4>รวมคะแนนที่ได้</h4>',
        'size'=>'modal-lg',
        'footer' => '<a href="#" class="btn btn-danger" data-dismiss="modal">ปิด</a>',
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>

<?php Pjax::begin(); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        //'showPageSummary' => true,
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
            [
                'attribute' => 'HN',
                //'header' => 'แผนก',
                 'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
            ],
            [
                'attribute' => 'AN',
                //'header' => 'แผนก',
                 'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
            ],
           // 'dr_license',
           [
            'attribute' => 'date_audit',
            'header' => 'วันตรวจสอบ',
             'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
           ],
             [
				'attribute' => 'finding_id',
				'value' => function ($model) {
					return $model->finding_id !== null ? $model->finding->finding_name : '';
				},
				'headerOptions' => [
					'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
				],
			],

			[
			'attribute' => 'overall_id',
			'value' => function ($model) {
				return $model->overall_id !== null ? $model->overall->overall_name_th : '';
			},
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
				'value' => function ($model) {
					return $model->note !== null ? $model->note : '';
				},
			],

		   [
            'attribute' => 'dr_license',
            'header' => 'Audit By',
            'headerOptions' => [
						'style' => 'background: linear-gradient(to bottom, #E3E4FA, #A9A9F5);'
					],
           ],
           

           // ['class' => 'yii\grid\ActionColumn'],
           ['class' => 'yii\grid\ActionColumn',
           'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to(['mraipd/view',  'id' => $key, 'id' => $model->mra_id]);
           },
                'header'=>'คลิกดู',
                
                'headerOptions' => ['style' => 'width:15%'],
                'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {detail} {edit} {delete} </div>',
                'buttons'=>[
                    // 'detail' => function($url,$model,$key){
                    //     return Html::a('ดูคะแนน',
                    //         ['mrasum', 'id' => $model->mra_id,'an' => $model->AN],
                    //         ['class' => 'btn btn-warning','id'=>'modalButton'],
					// 		//['class' => 'btn btn-warning', 'id'=>'modalButton'],
                    //         $url);	     
                    // },
                
                    'edit' => function($url,$model,$key){
                                      return Html::a('แก้ไข',
                                          ['update', 'id' => $model->mra_id],
                                          ['class' => 'btn btn-success'],
                                       $url);
                    },
					'delete' => function($url,$model,$key){
                        return Html::a('ร้อยละ',
                            ['pdf', 'id' => $model->mra_id,'an' => $model->AN],
                           // ['class' => 'btn btn-inverse'],
                            ['class' => 'btn btn-info','id'=>'modalButton'],
							//['class' => 'btn btn-info', 'id'=>'modalButton'],
                            $url);	     
                    },
                    'view' => function ($url, $model) {  // render your custom button

                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [  
    
                            'title' => Yii::t('app', 'View'), 
    
                            'class'=>"btn btn-primary", 
                            'id'=>'modalButton'   ,                              
    
                            'data-toggle'=>"modal",
    
                           // 'data-target'=>"#modalButton",
    
                            'data-title'=> "Viewing: ".$model->mra_id,   // this title must be same as it is written in the modal view file
    
                        ]); 
    
                    }, 
					//yii2 Actioncolumn view  modal
                ],
            ],
        ],
    ]);
     ?>
<?php Pjax::end() ?>
</div>
<?php
             Modal::begin(['id'=>'modalView', 'size'=>'modal-md']);
             echo "<div id='modalButton'></div>";
             Modal::end();
     ?>
<!-- <?php
  $this->registerJs("$(function() {
   $('#modalButton').click(function(e) {
     e.preventDefault();
     $('#modal').modal('show').find('.modal-content')
     .load($(this).attr('value'));
   });
});");
?> -->
