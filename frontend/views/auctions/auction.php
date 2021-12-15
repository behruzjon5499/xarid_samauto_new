<?php

use common\helpers\LangHelper;
use common\models\Auctions;
use common\models\UserAuctions;
use kartik\datetime\DateTimePicker;

/* @var $auctions Auctions
 */
$time = new \DateTime('now');
$today = $time->format('d-m-Y H:i:s');
$t = strtotime($today);

$this->title = 'Xarid | Samauto.uz';

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';

$title = 'title_' . $lang;
$address = 'address_' . $lang;
$answer = 'answer_' . $lang;
$signup = 'signup_' . $lang;
$support = 'support_' . $lang;
$podacha = 'podacha_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;

?>
<style>
    tr td{
        text-align: center;
    }
</style>


<div class="sp-wrapper">
    <form class="container">
        <div class="mTitle aos-init aos-animate" data-aos="fade-right"> <?= LangHelper::t("Конкурсы на продажи", "Onlayn savdolar", "Contests for sale"); ?></div>
        <div class="table_filter d-flex">
            <section class="my-auctions">
                <a href="<?= yii\helpers\Url::to(['auctions/index']) ?>"  class="filter-input active"> <?= LangHelper::t("Текущие аукционы", "Текущие аукционы", "Текущие аукционы"); ?></a>
                  </section>

        </div>
        <form action="auction" method="get">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-lg-4">
                <?php
                echo DateTimePicker::widget([
                    'name' => 'start_time',
                    'value' => '24-04-2021 00:00:00',
                    'options' => ['placeholder' => 'Select end time ...'],
                    'pluginOptions' => [
                        'format' => 'dd-mm-yyyy h:i:s',
                        'todayHighlight' => true
                    ]
                ]);?>

            </div>
            <div class="col-lg-4">
                <?php
                echo DateTimePicker::widget([
                    'name' => 'end_time',
                    'value' => '24-04-2021 00:00:00',
                    'options' => ['placeholder' => 'Select end time ...'],
                    'pluginOptions' => [
                       'format' => 'dd-mm-yyyy hh:ii:ss',
                        'todayHighlight' => true
                    ]
                ]);?>
            </div>
            <div class="col-lg-4">

                <button class="btn btn-info" type="submit"
                ><?= Yii::t(
                    'yii',
                    'search'
                    ) ?></button>
            </div>
        </div>
        </form>

        <table id="auction_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>  <?= LangHelper::t("номер лота", "номер лота", "номер лота"); ?></th>
                <th><?= LangHelper::t("Дата начала", "Boshlanish sanasi ", "Start date"); ?></th>
                <th><?= LangHelper::t("Наименование аукциона", " Auksion nomi", " Auction name"); ?></th>
                <th><?= LangHelper::t("Местонахождение", "Manzil", "Location"); ?></th>
                <th><?= LangHelper::t("Объем", "Hajmi", "Volume"); ?></th>
                <th><?= LangHelper::t("Стартовая цена с НДС за единицу", " Boshlang'ich narx", "Starting price"); ?></th>
                <th><?= LangHelper::t("цена реализации", "цена реализации", "цена реализации"); ?></th>
                <th><?= LangHelper::t("Победитель", "Победитель", "Победитель"); ?> </th>
                <th><?= LangHelper::t("Статус", "Xolati", "Status"); ?></th>
            </tr>
            </thead>
            <?php foreach($auctions as $auction):?>
                <tbody>
                <tr onclick="location.href='<?= yii\helpers\Url::to(['auctions/win','id'=>$auction->id
                ]) ?>'">
                    <td><?= $auction->id ?></td>
                    <td><?= Yii::$app->formatter->asDate($auction->start_date, 'yyyy-MM-dd'); ?></td>
                    <td><?= $auction->$title ?></td>
                    <td><?= $auction->address ?></td>
                    <td><?= $auction->obyom ?></td>
                    <td><?= $auction->start_price ?></td>
                    <td><?= $auction->price;  ?></td>
                    <td><?=  $auction->company ?> </td>
                         <td> <?=  $auction->status ?> </td>

                    <td></td>

                </tr>
                </tbody>

            <?php endforeach;?>
        </table>

    </div>
</div>

<div class="site_bread">
    <div class="centerBox">
        <a href="<?= yii\helpers\Url::to(['site/index']) ?>"><?= LangHelper::t("Главная", "Bosh sahifa", "Homepage"); ?></a>
        <span> <?= LangHelper::t("Конкурсы на продажи", "Onlayn savdolar", "Contests for sale"); ?></span>
    </div>
</div>
