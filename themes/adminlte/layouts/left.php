<?php

use yii\bootstrap\Html;
use yii\helpers\Url;

// $command3 = Yii::$app->db->createCommand("SELECT company FROM setting WHERE id='1'");
// $company = $command3->queryScalar();
//
// $command4 = Yii::$app->db->createCommand("SELECT photo FROM setting WHERE id='1'");
// $logo = $command4->queryScalar();
if (Yii::$app->user->isGuest) {
    $name='Guest';
    $username='Guest';
 }else{
 $user_id = Yii::$app->user->identity->id;
 $command3 = Yii::$app->db->createCommand("SELECT name FROM profile WHERE user_id='$user_id'");
 $name = $command3->queryScalar();

 $username = Yii::$app->user->identity->username;
 }

?>
<style>
    .sidebar-menu .active {
    background-color: #8080ff;
}

</style>

<!-- <script>
    $(document).ready(function() {
    // Sidebar menu item click handler
    $('.sidebar-menu li a').on('click', function() {
        // Remove 'active' from all menu items
        $('.sidebar-menu li').removeClass('active');

        // Add 'active' to the clicked menu item
        $(this).parent().addClass('active');
    });
});

</script> -->
<aside class="main-sidebar" style="background: linear-gradient(to bottom, #00b3b3, #009191, #00b3b3);">


    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web') . '/images/moph.png' ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">

                <?php if (Yii::$app->user->isGuest) { ?>

                    <a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                <?php } else { ?>
                    <p><?= $name ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                <?php } ?>


            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'เวชระเบียนผู้ป่วยนอก', 'options' => ['class' => 'header','style' => 'background-color: #006f6f; color: white;']],
                    
							['label' => 'Dashboard', 'icon' => 'cog text-orange', 'url' => ['/dashopd/index']],
                            ['label' => 'บันทึกเวชระเบียนผู้ป่วยนอก', 'icon' => 'cog text-orange', 'url' => ['/mraopd/index']],
							['label' => 'ประมวลผล', 'icon' => 'cog text-orange', 'url' => ['/mraopd/percent']],
							['label' => 'คะแนนตามเกณฑ์', 'icon' => 'cog text-orange', 'url' => ['/oclause/index']],
							//['label' => 'ร้อยละตามเกณฑ์', 'icon' => 'cog text-orange', 'url' => ['/oclause/percent']],
							['label' => 'จัดการแผนก OPD', 'icon' => 'cog text-orange', 'url' => ['/mradepartmetnsopd/index']],
                    
                    ['label' => 'เวชระเบียนผู้ป่วยใน', 'options' => ['class' => 'header', 'style' => 'background-color: #006f6f; color: white;']],
					       
                            ['label' => 'บันทึกเวชระเบียนผู้ป่วยใน', 'icon' => 'cog text-orange', 'url' => ['/mraipd/index']],
							['label' => 'ประมวลผล', 'icon' => 'cog text-orange', 'url' => ['/mraipd/percent']],
							['label' => 'คะแนนตามเกณฑ์', 'icon' => 'cog text-orange', 'url' => ['/iclause/index']],
							['label' => 'จัดการแผนก IPD', 'icon' => 'cog text-orange', 'url' => ['/departmetnsipd/index']],
                        
                    ['label' => 'รายงาน', 'options' => ['class' => 'header', 'style' => 'background-color: #006f6f; color: white;']],
					[
                        'label' => 'รายงานแยกรายปี OPD', 'icon' => 'cog text-orange', 
                        'items' => [
                            ['label' => 'OPD 2566', 'icon' => 'fas fa-play text-aqua', 'url' => ['/mraopd66/percent']],
							['label' => 'OPD 1/2567', 'icon' => 'fas fa-play text-aqua', 'url' => ['/mraopd67/percent']],
							['label' => 'OPD2/2567', 'icon' => 'fas fa-play text-aqua', 'url' => ['/mraopd672/percent']],
						
							//['label' => 'AdjRW', 'icon' => 'fas fa-play text-aqua', 'url' => ['/rep/adjrw']],
                        ],
                    ],
					[
                        'label' => 'รายงานแยกรายปี IPD', 'icon' => 'cog text-orange', 
                        'items' => [
                            ['label' => 'IPD 2566', 'icon' => 'fas fa-play text-aqua', 'url' => ['/mraipd66/percent']],
							['label' => 'IPD 1/2567', 'icon' => 'fas fa-play text-aqua', 'url' => ['/mraipd67/percent']],
							['label' => 'IPD2/2567', 'icon' => 'fas fa-play text-aqua', 'url' => ['/mraipd672/percent']],
						
							//['label' => 'AdjRW', 'icon' => 'fas fa-play text-aqua', 'url' => ['/rep/adjrw']],
                        ],
                    ],
					// [
                    //     'label' => 'รายงานเวชระเบียน[mBase]', 'icon' => 'cog text-orange', 
                    //     'items' => [
                    //         ['label' => 'Rep-Admit28', 'icon' => 'fa fa-check-square-o text-aqua', 'url' => ['/readmit/readmit']],
					// 		['label' => 'Rep-Visit48', 'icon' => 'fa fa-check-square-o text-aqua', 'url' => ['/readmit/revisit']],
					// 		['label' => 'Unplan-Refer', 'icon' => 'fa fa-check-square-o text-aqua', 'url' => ['/readmit/unplan']],
                    //     ],
                    // ],
					
                    // ['label' => 'Login', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'จัดการเว็บไซต์', 'icon' => 'cog', 'visible' => !Yii::$app->user->isGuest,
                        'items' => [
                            ['label' => 'หมวดหมู่หลัก', 'icon' => 'fas fa-play text-aqua', 'url' => ['/hacategory/index'], 'visible' => !Yii::$app->user->isGuest],
                            ['label' => 'หมวดหมู่ย่อย', 'icon' => 'fas fa-play text-aqua', 'url' => ['/group/index'], 'visible' => !Yii::$app->user->isGuest],
                            ['label' => 'อัพโหลดไฟล์', 'icon' => 'fas fa-play text-aqua', 'url' => ['/hadocuments/admin'], 'visible' => !Yii::$app->user->isGuest],
                        ],
                    ],
					// [
                    //     'label' => 'นำเข้าไฟล์', 'icon' => 'cog text-orange', 
                    //     'items' => [
                    //         ['label' => 'นำเข้าไฟล์excel', 'icon' => 'fas fa-play text-aqua', 'url' => ['repimport/imports']],
					// 		['label' => 'นำเข้าไฟล์csv', 'icon' => 'fas fa-play text-aqua', 'url' => ['site/import']],
					// 		['label' => 'Upload excel', 'icon' => 'fas fa-play text-aqua', 'url' => ['import/index']],
					// 		['label' => 'นำเข้าไฟล์excelทดสอบ', 'icon' => 'fas fa-play text-aqua', 'url' => ['repimport/index']],
                    //     ],
                    // ],
                    // [
                    //     'label' => 'จัดการเว็บไซต์', 'icon' => 'cog', 'visible' => !Yii::$app->user->isGuest,
                    //     'items' => [
                    //         ['label' => 'หมวดหมู่', 'icon' => 'circle-o text-aqua', 'url' => ['/newscategory/index'], 'visible' => !Yii::$app->user->isGuest],
                    //         ['label' => 'หัวข้อ', 'icon' => 'circle-o text-aqua', 'url' => ['/news/admin'], 'visible' => !Yii::$app->user->isGuest],
                    //     ],
                    // ],
                    Yii::$app->user->isGuest ?
                        ['label' => 'เข้าสู่ระบบ', 'icon' => 'sign-in text-green', 'url' => ['/user/security/login']] : [
                            'label' => 'ยินดีต้อนรับ (' . Yii::$app->user->identity->username . ')',
                            'items' => [
                                ['label' => 'โพรไฟล์', 'icon' => 'user', 'url' => ['/user/profile']],
                                ['label' => 'จัดการผู้ใช้', 'icon' => 'user-secret', 'url' => ['/user/admin/index']],
                            ]
                        ],
                ],
            ]
			
        ) ?>
        <ul class="sidebar-menu tree" data-widget="tree">
            <!-- <li class="header"></li> -->
            <?php
            if (Yii::$app->user->isGuest) {
                ?>
                <li>
                    <!-- <a href="<?= Url::to('index.php?r=user/security/login') ?>">
                                    <i class="fa fa-sign-in text-green"></i> <span>เข้าสูระบบ</span>
                                </a> -->
                </li>
            <?php } else { ?>
                <li>
                    <?php
                    echo Html::a(
                        '<i class="fa fa-sign-out text-red"></i>ออกจากระบบ',
                        ['/user/security/logout'],
                        [
                            'data' => [
                                'icon' => 'fa fa-sign-out text-red',
                                'method' => 'post',
                            ],
                        ]
                    );
                    ?>
                </li>
            <?php } ?>
        </ul>
    </section>

</aside>
