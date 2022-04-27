<?php

/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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

use UCloud\UCDN\Models\CacheKeyInfo;
use UCloud\UCDN\Models\GetUcdnDomainConfigResponse;
use UCloud\UCDN\Models\CacheConf;
use UCloud\UCDN\Models\DomainConfigInfo;
use UCloud\UCDN\Models\GetUcdnDomainConfigV2Response;

class CacheAllConfig extends Response
{

    /**
     * CacheHost: 缓存Host，不同的域名可以配置为同一个CacheHost来实现缓存共享，默认为加速域名
     *
     * @return string|null
     */
    public function getCacheHost()
    {
        return $this->get("CacheHost");
    }

    /**
     * CacheHost: 缓存Host，不同的域名可以配置为同一个CacheHost来实现缓存共享，默认为加速域名
     *
     * @param string $cacheHost
     */
    public function setCacheHost(string $cacheHost)
    {
        $this->set("CacheHost", $cacheHost);
    }
    /**
     * CacheList: 缓存配置列表，参见CacheConf
     *
     * @return CacheConfModel[]|null
     */
    public function getCacheList()
    {
        $items = $this->get("CacheList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CacheConfModel($item));
        }
        return $result;
    }

    /**
     * CacheList: 缓存配置列表，参见CacheConf
     *
     * @param CacheConfModel[] $cacheList
     */
    public function setCacheList(array $cacheList)
    {
        $result = [];
        foreach ($cacheList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * HttpCodeCacheList: 状态码缓存配置列表，参见CacheConf
     *
     * @return CacheConfModel[]|null
     */
    public function getHttpCodeCacheList()
    {
        $items = $this->get("HttpCodeCacheList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CacheConfModel($item));
        }
        return $result;
    }

    /**
     * HttpCodeCacheList: 状态码缓存配置列表，参见CacheConf
     *
     * @param CacheConfModel[] $httpCodeCacheList
     */
    public function setHttpCodeCacheList(array $httpCodeCacheList)
    {
        $result = [];
        foreach ($httpCodeCacheList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * CacheKeyList: 忽略参数缓存配置列表，参见CacheKeyInfo
     *
     * @return CacheKeyInfoModel[]|null
     */
    public function getCacheKeyList()
    {
        $items = $this->get("CacheKeyList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CacheKeyInfoModel($item));
        }
        return $result;
    }

    /**
     * CacheKeyList: 忽略参数缓存配置列表，参见CacheKeyInfo
     *
     * @param CacheKeyInfoModel[] $cacheKeyList
     */
    public function setCacheKeyList(array $cacheKeyList)
    {
        $result = [];
        foreach ($cacheKeyList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
