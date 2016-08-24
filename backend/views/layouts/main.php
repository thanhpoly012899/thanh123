<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <div class="container" id="page">

            <a href="index.php">
                <div id="header">

                </div></a>

            <div id="mainmenu">

                <ul>

                    <li>
                        <a href="index.php?r=sanpham" title="sanpham"><p>Sản phẩm</p><!--Line--></a>
                    </li>
                    <li>
                        <a href="index.php?r=loaisanpham" title="loaisanpham"><p>Loại sản phẩm</p><!--Station--></a>
                    </li>
                    <li>
                        <a href="index.php?r=khachhang" title="khachhang"><p>Khách hàng</p><!--Vehicle--></a>
                    </li>
                    <li>
                        <a href="index.php?r=hoadon" title="hoadon"><p>Hóa đơn</p><!--Driver--></a>
                    </li>
                    <li>
                        <a href="index.php?r=chitiethd" title="chitiethd"><p>Chi tiết HĐ</p><!--XML Schema--></a>
                    </li>
                    
                </ul>

                <!-- Login / Logout -->

            </div>

            <!-- mainmenu --><!-- breadcrumbs -->


            <div id="content" style="width: 700px;">

                <div class="wrap">
    
    <div class="container" style="width: auto;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
            <!-- content -->
            <div class="clear"></div>

                </div></div><br>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
