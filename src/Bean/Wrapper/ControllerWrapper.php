<?php

namespace EasyMS\Bean\Wrapper;

use EasyMS\Bean\Annotation\Cache;
use EasyMS\Bean\Annotation\Description;
use EasyMS\Bean\Annotation\Example;
use EasyMS\Bean\Annotation\Firewall;
use EasyMS\Bean\Annotation\Group;
use EasyMS\Bean\Annotation\Param;
use EasyMS\Bean\Annotation\Point;
use EasyMS\Bean\Annotation\Scopes;
use EasyMS\Bean\Annotation\Version;


/**
 * 路由注解封装器
 *
 * @uses      ControllerWrapper
 * @version   2017年09月04日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ControllerWrapper extends AbstractWrapper
{
    /**
     * 类注解
     *
     * @var array
     */
    protected $classAnnotations = [
       Group::class
    ];

    /**
     * 方法注解
     *
     * @var array
     */
    protected $methodAnnotations = [
        Point::class,
        Example::class,
        Param::class,
        Cache::class,
        Description::class,
        Scopes::class,
        Version::class,
        Firewall::class
    ];

    /**
     * 是否解析类注解
     *
     * @param array $annotations
     * @return bool
     */
    public function isParseClassAnnotations(array $annotations): bool
    {
        return isset($annotations[Group::class]);
    }

    /**
     * 是否解析属性注解
     *
     * @param array $annotations
     * @return bool
     */
    public function isParsePropertyAnnotations(array $annotations): bool
    {
        return false;
    }

    /**
     * 是否解析方法注解
     *
     * @param array $annotations
     * @return bool
     */
    public function isParseMethodAnnotations(array $annotations): bool
    {
        return true;
    }
}
