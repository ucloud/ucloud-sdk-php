<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class CacheKeyInfo extends Response
{
    

    /**
     * Ignore: 是否忽略
     *
     * @return boolean|null
     */
    public function getIgnore()
    {
        return $this->get("Ignore");
    }

    /**
     * Ignore: 是否忽略
     *
     * @param boolean $ignore
     */
    public function setIgnore($ignore)
    {
        $this->set("Ignore", $ignore);
    }

    /**
     * PathPattern: 路径模式，支持正则
     *
     * @return string|null
     */
    public function getPathPattern()
    {
        return $this->get("PathPattern");
    }

    /**
     * PathPattern: 路径模式，支持正则
     *
     * @param string $pathPattern
     */
    public function setPathPattern($pathPattern)
    {
        $this->set("PathPattern", $pathPattern);
    }

    /**
     * QueryString: 自定义变量,以$符号开头，多个变量用加号(+)连接，$querystring表示所有变量
     *
     * @return string|null
     */
    public function getQueryString()
    {
        return $this->get("QueryString");
    }

    /**
     * QueryString: 自定义变量,以$符号开头，多个变量用加号(+)连接，$querystring表示所有变量
     *
     * @param string $queryString
     */
    public function setQueryString($queryString)
    {
        $this->set("QueryString", $queryString);
    }
}
