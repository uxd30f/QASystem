<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25
 * Time: 23:21
 */

namespace Home\Model;


use Think\Model\RelationModel;

class UserinfoModel extends RelationModel
{
    protected $_link =[
        'Question'=>[
            'mapping_type' => self::HAS_MANY,
            'class_name' => 'Question',
            'foreign_key' => 'userid',
        ],
        'Question1'=>[
            'mapping_type' => self::HAS_MANY,
            'class_name' => 'Question',
            'foreign_key' => 'userid',
        ]
    ];
}