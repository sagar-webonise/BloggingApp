<?php
class User extends  AppModel{
    public $name='User';
     public $validate = array(
         'username' => array(
             'required' => array(
                 'rule' => array('notEmpty'),
                 'message' => 'A username is required'
             )
         ),
         'password' => array(
             'required' => array(
                 'rule' => array('notEmpty'),
                 'message' => 'A password is required'
             )
         )
     );

    var $hasMany=array(
    'Post'=>array(
        'className'=>'Post',
        'foreignKey'=>'user_id',
        'order'=>'Post.created DESC',
    )

);
    public function beforeSave($options){
        $this->data['User']['password'] = md5($this->data['User']['password']);

    }

}