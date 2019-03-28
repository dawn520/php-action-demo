<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/28
 * Time: 15:24
 */

namespace Action\Patterns\Factory;


class ChinaBoy implements Kid
{

    public function say()
    {
        echo '我是男孩，我来自中国';
    }
}
