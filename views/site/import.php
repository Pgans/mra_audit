<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\UploadCSV;
/* @var $this yii\web\View */
/* @var $model app\models\Import */


?>
<?php
				$model=new UploadCSV();
				
				if (!empty($filename)) 
				{		
			?>
						    <div class="jumbotron">
							<h1>ได้รับไฟล์ข้อมูลแล้ว</h1>
							
							
							<p class="lead">โปรดตรวจสอบเนื้อหาอีกครั้ง เพื่อเช็คความเรียบร้อย</p>

							<p><a class="btn btn-lg btn-success" href="index.php">กลับสู่หน้าแรก</a></p>
							<h2><?=$filename; ?></h2>
							<?php if (($_FILES["UploadCSV"]["type"]["file"]=="image/jpeg")||
											($_FILES["UploadCSV"]["type"]["file"]=="image/gif")||
											($_FILES["UploadCSV"]["type"]["file"]=="image/png")) 
											echo "<img src=upload/".$filename.">"; ?>
											
							<?php  if ($_FILES["UploadCSV"]["type"]["file"]=="text/comma-separated-values") 
											echo "<h1>CSV</h1>";
							?>
							</div>
							
							
<?php				
				//echo phpinfo();
				}				
				else
				{
?>


<div class="upload-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'file')->fileInput() ?>

   
    <div class="form-group">
        <?= Html::submitButton( 'ส่งข้อมูล', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
				}
?>