<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "question_answer".
 *
 * @property int $id
 * @property string $question_ru
 * @property string $question_uz
 * @property string $question_en
 * @property string $answer_ru
 * @property string $answer_uz
 * @property string $answer_en
 */
class QuestionAnswer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question_answer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_ru', 'question_uz', 'question_en', 'answer_ru', 'answer_uz', 'answer_en'], 'required'],
            [['question_ru', 'question_uz', 'question_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'question_ru' => Yii::t('app', 'Вопрос Ru'),
            'question_uz' => Yii::t('app', 'Вопрос Uz'),
            'question_en' => Yii::t('app', 'Вопрос Eng'),
            'answer_ru' => Yii::t('app', 'Ответ Ru'),
            'answer_uz' => Yii::t('app', 'Ответ Uz'),
            'answer_en' => Yii::t('app', 'Ответ Eng'),
        ];
    }
}
