<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/28
 * Time: 15:43
 */

namespace Action\Patterns\Factory;


class ChinaFactory implements KidFactoryImp
{

    public function createBoy()
    {
        return new ChinaBoy();
    }

    public function createGirl()
    {
        return new ChinaGirl();
    }
}
