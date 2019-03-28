<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/28
 * Time: 15:25
 */

namespace Action\Patterns\Factory;


class ChinaGirl implements Kid
{

    public function say()
    {
        echo '我是女孩，我来自中国';
    }
}
