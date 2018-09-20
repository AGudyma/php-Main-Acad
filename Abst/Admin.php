<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 17.09.2018
 * Time: 19:22
 */
namespace Abst;
class Admin extends BaseUser
{
    public function getPermitions()
    {
        $parent = parent::getPermitions();

        return [
            'CREATE_USER' ,
            'DELETE_USER' ,

        ];
    }
}