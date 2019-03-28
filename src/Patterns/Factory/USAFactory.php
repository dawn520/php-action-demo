<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/28
 * Time: 15:44
 */

namespace Action\Patterns\Factory;


class USAFactory implements KidFactoryImp
{

    public function createBoy()
    {
        return new UsaBoy();
    }

    public function createGirl()
    {
        return new UsaGirl();
    }
}
