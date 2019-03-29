<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\helpers;


use Symfony\Component\Yaml\Yaml;
use yii\helpers\ArrayHelper;

class YamlHelper
{
    protected static $config;


    /**
     * 从文件加载内容
     *
     * @param $filename
     * @param bool $replaceFromEnv
     */
    public static function load(string $filename, bool $replaceFromEnv = false)
    {
        $replacePairs = [];
        $contents = file_get_contents($filename);
        if ($replaceFromEnv) {
            preg_match_all('/\{.*\}/', $contents, $matches);
            foreach ($matches[0] as $match) {
                list($var, $defaultValue) = explode('??', strtr($match, ['{' => null, '}' => null]));
                $replacePairs[$match] = getenv($var) === false ? $defaultValue : getenv($var);
            }

            $contents = strtr($contents, $replacePairs);
        }

        static::$config = Yaml::parse($contents);
    }

    /**
     * @param string $name
     * @param mixed $defaultValue
     * @return mixed
     */
    public static function get(string $name, $defaultValue = null)
    {
        return ArrayHelper::getValue(static::$config, $name, $defaultValue);
    }
}