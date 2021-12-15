<?php

/* @var $this yii\web\View */
/* @var $model1 User */
/* @var $count \common\models\Auctions */
/* @var $counts \common\models\Auctions */
/* @var $count_order \common\models\Orders */
/* @var $counts_order \common\models\Orders */
use common\helpers\TextHelper;
use common\helpers\LangHelper;
use common\models\Companies;
use common\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Xarid | Samauto.uz';

$lang = Yii::$app->session->get('lang');
if($lang=='') $lang = 'ru';

$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;



if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>



<div id="demo-1" style="height: 100vh" data-zs-src='["/img/1.jpg", "/img/2.jpg"]' data-zs-overlay="dots"></div>


<div class="sp-wrapper" style="margin-top: 0">
    <div class="buy-sale">

        <a href="<?= yii\helpers\Url::to(['order/index']) ?>" style="background-image: url('/img/11.jpg');">
            <div  class="buy-sale_text">
                <div class="buy-sale_bg"></div>
                <img src="/img/buy.png">
                <h1><?= LangHelper::t("Конкурсы на закупки", "Xarid uchun tenderlar", " Contests for purchases"); ?></h1>
    </div>
        </a>
        <a href="<?= yii\helpers\Url::to(['auctions/index']) ?>" style="background-image: url('/img/2.png');">
            <div  class="buy-sale_text">
                <div class="buy-sale_bg"></div>
                <img src="/img/sell.png">
                <h1><?= LangHelper::t("Конкурсы на продажи", "Onlayn savdolar", "Contests for sale"); ?></h1>
            </div>
        </a>
    </div>
    <div style="margin-top: 100px;margin-bottom: 100px;">
        <div class="container">
            <section class="order-use">
                <div class="flex-1">
                    <a href="#">
                        <h1><?= LangHelper::t("Порядок пользования порталом", "Portaldan foydalanish tartibi", "Order of use of the portal"); ?> <br></h1>
                    </a>
                    <a href="<?= yii\helpers\Url::to(['document/index']) ?>" class="ButtonBox_2" style="margin-top: 12px">
                        <?= LangHelper::t("ПЕРЕЙТИ", "O'TISH", "GO TO"); ?>
                        <svg viewBox="0 0 16 14" width="100%" height="100%">
                            <path d="M9.8.5H8.2l5.6 5.9H.1v1.2h13.7l-5.6 5.9h1.6L15.9 7z"></path>
                        </svg>
                    </a>
                </div>
                <ul class="flex-1 staps">
                    <li>
                        <section>
                            <img src="/img/b2.svg">
                        </section>
                        <span>   <?= LangHelper::t("Зарегистрироваться", "Ro'yxatdan o'ting ", "Register"); ?>  </span>
                    </li>
                    <li>
                        <section>
                            <img src="/img/b1.svg">
                        </section>
                        <span> <?= LangHelper::t("Участвовать", "Qatnashing", "Participate"); ?> </span>
                    </li>
                    <li>
                        <section>
                            <img src="/img/b3.svg">
                        </section>
                        <span><?= LangHelper::t("Выиграть", " G'olib bo'ling", "Win"); ?> </span>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="mb_parallax_container" id="mb_parallax_one">
        <div style="position: absolute;width: 100%;height: 100%;background: #000;opacity: 0.5;top: 0;z-index: 0"></div>
        <div class="line_top"></div>
        <div class="mb_parallax_overlay" style="z-index: 2;position: relative;">
            <h1>
                <?= $count ?>
                <p>
                    <?= LangHelper::t("Активные конкурсы", " Faol tenderlar", "Active contests"); ?>
                </p>
            </h1>
            <h1>
                <?= $counts ?>
                <p>
                    <?= LangHelper::t("Все конкурсы", "Barcha tenderlar", "All contests"); ?>
                </p>
            </h1>
            <h1>
                <?= $count_order ?>
                <p>
                    <?= LangHelper::t("Активные продажи ", " Faol savdolar", "Active sales"); ?>
                </p>
            </h1>
            <h1>
                <?= $counts_order ?>
                <p>
                    <?= LangHelper::t("Все продажи", " Barcha savdolar", "All sales "); ?>
                </p>
            </h1>
        </div>
        <div class="line_bottom"></div>
    </div>
    <div class="container">
        <div class="FAQ">
            <a href="<?= yii\helpers\Url::to(['question/index']) ?>">
                <div class="faq-item">
                    <img src="/img/f1.png">
                    <p> <?= LangHelper::t("Часто задаваемые ", "Ko'p so'raladigan ", "Frequently asked "); ?>   <span> <?= LangHelper::t("вопросы", "savollar", "questions"); ?></span> </p>
                </div>
            </a>
            <a href="<?= yii\helpers\Url::to(['feedback/create']) ?>">
                <div class="faq-item">
                    <img src="/img/f2.png">
                    <p> <?= LangHelper::t("Спрашивайте ", " Savol bering", "Ask we"); ?>  <span> <?= LangHelper::t("отвечаем", "javob beramiz", "answer"); ?> </span></p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="modal fade profile-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;"><?=LangHelper::t("Фойдаланувчининг маълумотларини ўзгартириш", "Фойдаланувчининг маълумотларини ўзгартириш", "Фойдаланувчининг маълумотларини ўзгартириш"); ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $form = ActiveForm::begin([
                    'id' => 'update-form',
                    'options' => ['class' => 'form-group'],
                ]); ?>

                <?= $form->field($model1, 'username')->textInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Login')])->label(false); ?>
                <?= $form->field($model1, 'email')->textInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Email')])->label(false); ?>
                <?= $form->field($model1, 'phone')->textInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Phone')])->label(false); ?>
                <?= $form->field($model1, 'title_company')->textInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Title Company')])->label(false); ?>

                <div class="modal-footer">
                    <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= LangHelper::t("Бекор қилиш", "Бекор қилиш", "Бекор қилиш"); ?></button>
                </div>
                <?php ActiveForm::end(); ?>
            </div>


        </div>
    </div>
</div>
<div class="modal fade profile-modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= LangHelper::t("Изменить пароль", "Паролни ўзгартириш", "Change password"); ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                $form = ActiveForm::begin([
                    'id' => 'reset-form',
                    'options' => ['class' => 'form-group'],
                ]); ?>

                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                        <div class="alert alert-success">
                            <?= Yii::$app->session->getFlash('success') ?>
                        </div>
                    <?php endif; ?>
                    <?= $form->field($model, 'password')->textInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Ески паролни киритинг')])->label(false); ?>
                    <?= $form->field($model, 'new_password')->passwordInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Янги паролни киритинг')])->label(false); ?>
                    <?= $form->field($model, 'again_new_password')->passwordInput(['rows' => 6, 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Янги паролни тасдиқланг')])->label(false); ?>



            <div class="modal-footer">
                <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= LangHelper::t("Бекор қилиш", "Бекор қилиш", "Бекор қилиш"); ?></button>
            </div>
                <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

