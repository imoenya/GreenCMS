<?php
/**
 * Created by Green Studio.
 * File: UserModel.class.php
 * User: TianShuo
 * Date: 14-1-16
 * Time: 上午12:51
 */
namespace Home\Model;
use \Think\Model\RelationModel;


class UserModel extends RelationModel{

    public $_link = array (

        'Name' => array (

            'mapping_type' => MANY_TO_MANY,

            'class_name' => 'Role',

            'mapping_name' => 'role_info',

            'foreign_key' => 'user_id',

            'relation_foreign_key' => 'role_id',

            'relation_table' => 'role_users'
        ),

        'Role' => array (

            'mapping_type' => BELONGS_TO,

            'class_name' => 'Role_users',

            'mapping_name' => 'user_role',

            'mapping_key' => 'user_id',

            'foreign_key' => 'user_id',

            'parent_key' => 'user_id',
        )
    )
    ;


}