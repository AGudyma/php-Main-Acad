<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 17.09.2018
 * Time: 19:23
 */
namespace Abst;
class SuperAdmin extends BaseUser
{
    public function getPermitions()
    {
        return ['DELETE USER',
        'DELETE ADMIN',
        'CREATE ADMIN'];

    }
}