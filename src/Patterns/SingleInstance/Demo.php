<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2020/7/7
 * Time: 11:33
 */

namespace Action\Patterns\SingleInstance;


class Demo
{

    private static $instance = null;
    private $setting = [];

    private function __construct()
    {
    }

    private function __clone()
    {
    }
    public static function getInstance()
    {
        //检测当前类属性$instance是否已经保存了当前类的实例
        if (self::$instance == null) {
            //如果没有,则创建当前类的实例
            self::$instance = new self();
        }
        //如果已经有了当前类实例,就直接返回,不要重复创建类实例
        return self::$instance;
    }

//设置配置项
    public function set($index, $value)
    {
        $this->setting[$index] = $value;
    }

//读取配置项
    public function get($index)
    {
        return $this->setting[$index];
    }
}
