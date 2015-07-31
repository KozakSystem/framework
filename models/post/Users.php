<?php

namespace app\models\post;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public function getPosts()
    {
        return $this->hasOne(Posts::className(), ['post_author' => 'user_id']);
    }
}

