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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class UFileDomainSet extends Response
{
    

    /**
     * Src: 源站域名
     *
     * @return string[]|null
     */
    public function getSrc()
    {
        return $this->get("Src");
    }

    /**
     * Src: 源站域名
     *
     * @param string[] $src
     */
    public function setSrc(array $src)
    {
        $this->set("Src", $src);
    }

    /**
     * Cdn: UCDN加速域名
     *
     * @return string[]|null
     */
    public function getCdn()
    {
        return $this->get("Cdn");
    }

    /**
     * Cdn: UCDN加速域名
     *
     * @param string[] $cdn
     */
    public function setCdn(array $cdn)
    {
        $this->set("Cdn", $cdn);
    }

    /**
     * CustomSrc: 用户自定义源站域名
     *
     * @return string[]|null
     */
    public function getCustomSrc()
    {
        return $this->get("CustomSrc");
    }

    /**
     * CustomSrc: 用户自定义源站域名
     *
     * @param string[] $customSrc
     */
    public function setCustomSrc(array $customSrc)
    {
        $this->set("CustomSrc", $customSrc);
    }

    /**
     * CustomCdn: 用户自定义CDN加速域名
     *
     * @return string[]|null
     */
    public function getCustomCdn()
    {
        return $this->get("CustomCdn");
    }

    /**
     * CustomCdn: 用户自定义CDN加速域名
     *
     * @param string[] $customCdn
     */
    public function setCustomCdn(array $customCdn)
    {
        $this->set("CustomCdn", $customCdn);
    }
}
