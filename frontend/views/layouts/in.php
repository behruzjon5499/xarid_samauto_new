<?php

/* @var $this View */
/* @var $content string */

use frontend\models\Profile;
use mdm\admin\components\MenuHelper;
use yii\helpers\Html;
use frontend\assets\InAsset;
//use common\widgets\Alert;
use dominus77\sweetalert2\Alert;
use yii\web\View;

InAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/in/js/plugins/dropzone/dropzone.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8DFpSGoKPof5ZoW7Nx-4iWdObowtVFNc"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Insert this line above script imports  213-->
    <script>if (typeof module === 'object') {
            window.module = module;
            module = undefined;
        }</script>
    <script>

        var backend_vesion = '<?=\Yii::$app->params['vesion']?>';
        //         $('a#file_downloadLink').on('click', function () {
        // //            window.alert();
        //         });
        if (window.isElectron) {

            // if (backend_vesion != window.version) {
            //     window.location.href = "/page/info";
            // }
            window.ipcRenderer.on('pong', function (event, msg) {
                console.log(msg)
            });
            window.ipcRenderer.send('ping', JSON.stringify({uid:<?=(\Yii::$app->user->id !== null) ? \Yii::$app->user->id : 0 ?>}));
        } else {
            // window.location.href = "/page/info";
        }
    </script>
    <?php $this->head() ?>
    <style>
        .tabs-left > .tab-content > .tab-pane > .panel-body > .row {
            overflow: hidden;
        }

        .forum-item {
            overflow: hidden;
        }
    </style>
</head>
<body class="">
<?php $this->beginBody() ?>
<div id="wrapper">
    <?= $this->render('_sidebar') ?>
    <div id="page-wrapper" class="gray-bg">
        <?php
        $messages = \Yii::$app->profile->getMessages(['_to' => \Yii::$app->user->id, 'unreaded' => 1, '_type' => 'message']);
        $profile = Profile::findOne(\Yii::$app->user->id);
        ?>
        <?= $this->render('_top', ['routes' => MenuHelper::getAssignedMenu(Yii::$app->user->id, NULL, NULL, true), 'messages' => $messages]) ?>
        <?= $this->render('_breadcrumb') ?>
        <?=\branch\rating\widgets\AlertBlockWidget::widget()?>

        <div class="wrapper wrapper-content animated fadeIn">

            <?= Alert::widget(['useSessionFlash' => true]) ?>
            <?= $content ?>

        </div>

        <?php if (!Yii::$app->user->isGuest): ?>
            <footer class="footer">
                <a class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></a>
            </footer>
        <?php endif; ?>

    </div>
</div>
<?//if($profile!=null){?>
<!--    <div id="small-chat">-->
<!--        --><?php //if ($messages['count'] > 0): ?>
<!--            <span class="badge badge-warning pull-right">--><?//= $messages['count'] ?><!--</span>-->
<!--        --><?php //endif; ?>
<!--        <a class="open-small-chat" onclick="runMessanger()">-->
<!--            <i class="fa fa-comments"></i>-->
<!--        </a>-->
<!--    </div>-->
<?//}?>

<?=\survey\widgets\ActiveSurveyWidget::widget()?>
<?php $this->endBody();
$js=<<<JS
    $(function() {
      $('#small-chat').click(function() {
        if(!window.isElectron){
            window.location.href = "/page/info"; 
        }
      })
    })
JS;
$this->registerJs($js);

?>
<!-- Insert this line after script imports -->
<script>if (window.module) module = window.module;</script>
</body>
</html>
<?php $this->endPage() ?>
