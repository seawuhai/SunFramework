/**
 * 定义 QeePHP 核心类，并初始化框架基本设置
 *
 * @link 
 * @copyright Copyright (c) 2013-2013 HiSun Software Inc. {@link }
 * @license New BSD License {@link }
 * @version $Id: Sun.php 1 2013-06-11 21:00:17Z Henry $
 * @package core
 */
 /**
 * 定义系统运行开始时间 
 */
defined('SUN_BEGIN_TIME') or define('SUN_BEGIN_TIME',microtime(true));

/**
 * SunFramework 框架基本库所在路径
 */
defined('SUN_PATH') or define('SUN_PATH',dirname(__FILE__));

/**
 * 是否开启调试 默认关闭
 */
 
defined('SUN_DEBUG') or define('SUN_DEBUG',false);
/**
 * 地址分隔符 DIRECTORY_SEPARATOR 的简写
 */
defined('DS') define('DS', DIRECTORY_SEPARATOR);

class Sun
{
    /**
     * 定义SumFramework核心类库
     */
    private static $sunCoreClass = array();

    /**
     * 返回 SunFramework 版本号
     *
     * @return string QeePHP 版本号
     */
    static function getVersion()
    {
        return '1.0';
    }
}
