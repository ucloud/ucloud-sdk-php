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

class CacheConf extends Response {
    

    /**
     * PathPattern: 路径模式，支持正则
     *
     * @return string|null
     */
    public function getPathPattern(): string {
        return $this->get("PathPattern");
    }

    /**
     * PathPattern: 路径模式，支持正则
     *
     * @param string $pathPattern
     */
    public function setPathPattern(string $pathPattern) {
        $this->set("PathPattern", $pathPattern);
    }

    /**
     * CacheTTL: 缓存时间
     *
     * @return int|null
     */
    public function getCacheTTL(): int {
        return $this->get("CacheTTL");
    }

    /**
     * CacheTTL: 缓存时间
     *
     * @param int $cacheTTL
     */
    public function setCacheTTL(int $cacheTTL) {
        $this->set("CacheTTL", $cacheTTL);
    }

    /**
     * CacheUnit: 缓存时间的单位。sec（秒），min（分钟），hour（小时），day（天）。上限1年。
     *
     * @return string|null
     */
    public function getCacheUnit(): string {
        return $this->get("CacheUnit");
    }

    /**
     * CacheUnit: 缓存时间的单位。sec（秒），min（分钟），hour（小时），day（天）。上限1年。
     *
     * @param string $cacheUnit
     */
    public function setCacheUnit(string $cacheUnit) {
        $this->set("CacheUnit", $cacheUnit);
    }

    /**
     * CacheBehavior: 是否缓存，true为缓存，flase为不缓存。为flase的情况下，CacheTTL和CacheUnit强制不生效
     *
     * @return boolean|null
     */
    public function getCacheBehavior(): bool {
        return $this->get("CacheBehavior");
    }

    /**
     * CacheBehavior: 是否缓存，true为缓存，flase为不缓存。为flase的情况下，CacheTTL和CacheUnit强制不生效
     *
     * @param boolean $cacheBehavior
     */
    public function setCacheBehavior(bool $cacheBehavior) {
        $this->set("CacheBehavior", $cacheBehavior);
    }

    /**
     * HttpCodePattern: 状态码模式，非200，206状态码，多个状态码用竖线(|)分隔，该属性仅仅在状态码缓存配置列表中返回
     *
     * @return string|null
     */
    public function getHttpCodePattern(): string {
        return $this->get("HttpCodePattern");
    }

    /**
     * HttpCodePattern: 状态码模式，非200，206状态码，多个状态码用竖线(|)分隔，该属性仅仅在状态码缓存配置列表中返回
     *
     * @param string $httpCodePattern
     */
    public function setHttpCodePattern(string $httpCodePattern) {
        $this->set("HttpCodePattern", $httpCodePattern);
    }

    /**
     * Description: 缓存规则描述
     *
     * @return string|null
     */
    public function getDescription(): string {
        return $this->get("Description");
    }

    /**
     * Description: 缓存规则描述
     *
     * @param string $description
     */
    public function setDescription(string $description) {
        $this->set("Description", $description);
    }

    /**
     * FollowOriginRule: 是否优先遵循源站头部缓存策略，false为不优先遵循源站，true为优先遵循源站缓存头部。默认为0
     *
     * @return boolean|null
     */
    public function getFollowOriginRule(): bool {
        return $this->get("FollowOriginRule");
    }

    /**
     * FollowOriginRule: 是否优先遵循源站头部缓存策略，false为不优先遵循源站，true为优先遵循源站缓存头部。默认为0
     *
     * @param boolean $followOriginRule
     */
    public function setFollowOriginRule(bool $followOriginRule) {
        $this->set("FollowOriginRule", $followOriginRule);
    }


}
