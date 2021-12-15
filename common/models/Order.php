<?php

namespace common\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $razdel
 * @property string|null $file
 * @property string|null $obyom
 * @property int $company_id
 * @property string|null $address_ru
 * @property string|null $address_uz
 * @property string|null $address_en
 * @property string $start_price
 * @property string|null $next_price
 * @property string $start_date
 * @property string $end_date
 * @property string|null $description_ru
 * @property string|null $description_uz
 * @property string|null $description_en
 * @property string|null $contacts_auction_ru
 * @property string|null $contacts_auction_uz
 * @property string|null $contacts_auction_en
 * @property string|null $price_auction_ru
 * @property string|null $price_auction_uz
 * @property string|null $price_auction_en
 * @property string|null $predmet_auction_ru
 * @property string|null $predmet_auction_uz
 * @property string|null $predmet_auction_en
 * @property string|null $date_auction_ru
 * @property string|null $date_auction_uz
 * @property string|null $date_auction_en
 * @property string|null $payment_auction_ru
 * @property string|null $payment_auction_uz
 * @property string|null $payment_auction_en
 * @property string|null $payments_ru
 * @property string|null $payments_uz
 * @property string|null $payments_en
 * @property string|null $conditions_ru
 * @property string|null $conditions_uz
 * @property string|null $conditions_en
 * @property string|null $subjects_ru
 * @property string|null $subjects_uz
 * @property string|null $subjects_en
 * @property string|null $contacts
 * @property int $status
 *
 * @property Companies $company
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    public $file1;
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'company_id'], 'required'],
            [['user_id', 'company_id', 'status'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'address_ru', 'address_uz', 'address_en', 'description_ru', 'description_uz', 'description_en', 'contacts_auction_ru', 'contacts_auction_uz', 'contacts_auction_en', 'price_auction_ru', 'price_auction_uz', 'price_auction_en', 'predmet_auction_ru', 'predmet_auction_uz', 'predmet_auction_en', 'date_auction_ru', 'date_auction_uz', 'date_auction_en', 'payment_auction_ru', 'payment_auction_uz', 'payment_auction_en', 'payments_ru', 'payments_uz', 'payments_en', 'conditions_ru', 'conditions_uz', 'conditions_en', 'subjects_ru', 'subjects_uz', 'subjects_en', 'contacts'], 'string'],
            [['razdel', 'file', 'obyom', 'start_price', 'next_price', 'start_date', 'end_date'], 'string', 'max' => 255],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['company_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['file'], 'string', 'max' => 255],
            [['file1'], 'file', 'skipOnEmpty' => true, 'extensions' => 'doc, docx, xls, xlsx, pdf']
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['start_date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['start_date'],
                ],
                'value' => function() {
                    return strtotime($this->start_date);
                },

            ],
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['end_date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['end_date'],
                ],
                'value' => function() {
                    return strtotime($this->end_date);

                },
            ],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $name = $this->file1->baseName . '_' . Yii::$app->security->generateRandomString(5) . '.' . $this->file1->extension;

            if ($this->file !== null && !empty($this->file)) {
                unlink(Yii::getAlias('@backend').'/web/uploads/auctions/' . $this->file);
            }
            $this->file = $name;
            $this->file1->saveAs(Yii::getAlias('@backend').'/web/uploads/auctions/' . $name);
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'razdel' => Yii::t('app', 'Razdel'),
            'file' => Yii::t('app', 'File'),
            'obyom' => Yii::t('app', 'Obyom'),
            'company_id' => Yii::t('app', 'Company ID'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'address_en' => Yii::t('app', 'Address En'),
            'start_price' => Yii::t('app', 'Start Price'),
            'next_price' => Yii::t('app', 'Next Price'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
            'contacts_auction_ru' => Yii::t('app', 'Contacts Auction Ru'),
            'contacts_auction_uz' => Yii::t('app', 'Contacts Auction Uz'),
            'contacts_auction_en' => Yii::t('app', 'Contacts Auction En'),
            'price_auction_ru' => Yii::t('app', 'Price Auction Ru'),
            'price_auction_uz' => Yii::t('app', 'Price Auction Uz'),
            'price_auction_en' => Yii::t('app', 'Price Auction En'),
            'predmet_auction_ru' => Yii::t('app', 'Predmet Auction Ru'),
            'predmet_auction_uz' => Yii::t('app', 'Predmet Auction Uz'),
            'predmet_auction_en' => Yii::t('app', 'Predmet Auction En'),
            'date_auction_ru' => Yii::t('app', 'Date Auction Ru'),
            'date_auction_uz' => Yii::t('app', 'Date Auction Uz'),
            'date_auction_en' => Yii::t('app', 'Date Auction En'),
            'payment_auction_ru' => Yii::t('app', 'Payment Auction Ru'),
            'payment_auction_uz' => Yii::t('app', 'Payment Auction Uz'),
            'payment_auction_en' => Yii::t('app', 'Payment Auction En'),
            'payments_ru' => Yii::t('app', 'Payments Ru'),
            'payments_uz' => Yii::t('app', 'Payments Uz'),
            'payments_en' => Yii::t('app', 'Payments En'),
            'conditions_ru' => Yii::t('app', 'Conditions Ru'),
            'conditions_uz' => Yii::t('app', 'Conditions Uz'),
            'conditions_en' => Yii::t('app', 'Conditions En'),
            'subjects_ru' => Yii::t('app', 'Subjects Ru'),
            'subjects_uz' => Yii::t('app', 'Subjects Uz'),
            'subjects_en' => Yii::t('app', 'Subjects En'),
            'contacts' => Yii::t('app', 'Contacts'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public function getCompany()
    {
        return $this->hasOne(Companies::className(), ['id' => 'company_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
    public function isWait()
    {
        return $this->status === self::STATUS_WAIT;
    }
    public function isActive()
    {
        return $this->status === self::STATUS_ACTIVE;
    }
}
