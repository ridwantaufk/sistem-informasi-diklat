<?php

class User extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return array(
            array('username, password', 'required'),
            // tambahkan aturan validasi lainnya jika diperlukan
        );
    }

    public function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        }

        return parent::beforeSave();
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        );
    }
}
