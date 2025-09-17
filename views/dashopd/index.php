<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use \miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
    <div class="panel-body">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> ความสมบูรณ์เวชระเบียนผู้ป่วยนอก </<i></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> Audit OPD 2567</<i></div>
                        <div class="panel-body">
                            <div>
                            <?php
                                //use yii\grid\GridView;

                                echo GridView::widget([
                                    'dataProvider' => $dataProvider,
                                    'responsive' => true,
                                   'hover' => true,
                                    
                                  
                                    'pjax' => true,
                                    'pjaxSettings' => [
                                        'neverTimeout' => true,
                                    ],
                                    'columns' => [
                                       // ['class' => 'yii\grid\SerialColumn'],
                                        
                                        [
                                            'label' => 'ER',
                                            'attribute' => 'ER',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
                                        [
                                            'label' => 'OPD',
                                            'attribute' => 'OPD',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
                                        [
                                           // 'label' => 'OPD',
                                            'attribute' => 'ไตเทียม',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           // 'label' => 'OPD',
                                            'attribute' => 'หอบหืด',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
                                        [
                                           // 'label' => 'OPD',
                                            'attribute' => 'จิตเวช',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           // 'label' => 'OPD',
                                            'attribute' => 'กายภาพ',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           // 'label' => 'OPD',
                                            'attribute' => 'ไตเรื้อรัง',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            'label' => 'เบาหวาน',
                                            'attribute' => 'DM',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            'label' => 'ความดัน',
                                            'attribute' => 'HT',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'CAPD',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            'label' => 'แผนไทย',
                                            'attribute' => 'THAIMED',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'คอพอก',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'ไตเทียม',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           // 'label' => 'ความดัน',
                                            'attribute' => 'ANC',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           // 'label' => 'ความดัน',
                                            'attribute' => 'VIP',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'TB',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            'label' => 'มะเร็งตับ',
                                            'attribute' => 'FITTEST',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'LR',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'DENT',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            'label' => 'ความดัน',
                                            'attribute' => 'HT',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'บำบัดฟื้นฟู',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           //'label' => 'ความดัน',
                                            'attribute' => 'อดเหล้า',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                           //'label' => 'ความดัน',
                                            'attribute' => 'อดเหล้า',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'นิรนาม',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'ตรวจโรคทั่วไป',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'NCD',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],
										[
                                            //'label' => 'ความดัน',
                                            'attribute' => 'HD',
                                           'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
                                        ],										
										[
											'attribute' => 'total',
											//'header' => 'จำนวนราย',
											'headerOptions'=>[ 'style'=>'background-color:#a4e7df'] ,
											 'format'=> 'raw', //จำเป็นต้องมี ไม่งั้นจะไม่แสดงสี
											  'value' => function ($model) {
											return '<span class="badge" style="background-color:#147FF1">' . $model['total'] . '</span>';
										},
						
										],
                                    ],
                                ]);
                                ?>
                            </div>


                            