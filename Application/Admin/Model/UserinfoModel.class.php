<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25
 * Time: 23:21
 */

namespace Admin\Model;


use Think\Model\RelationModel;

class UserinfoModel extends RelationModel
{
    protected $_link = [
        'Question' => [
            'mapping_type' => self::HAS_MANY ,
            'class_name' => 'Question' ,
            'foreign_key' => 'userid' ,
        ] ,
        'Answer' => [
            'mapping_type' => self::HAS_MANY ,
            'class_name' => 'Answer' ,
            'foreign_key' => 'userid' ,
        ]
    ];
}