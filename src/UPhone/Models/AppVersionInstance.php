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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class AppVersionInstance extends Response
{
    

    /**
     * AppId: 应用的唯一标识ID
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->get("AppId");
    }

    /**
     * AppId: 应用的唯一标识ID
     *
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->set("AppId", $appId);
    }

    /**
     * AppVersionId: 应用版本的唯一标识ID
     *
     * @return string|null
     */
    public function getAppVersionId()
    {
        return $this->get("AppVersionId");
    }

    /**
     * AppVersionId: 应用版本的唯一标识ID
     *
     * @param string $appVersionId
     */
    public function setAppVersionId($appVersionId)
    {
        $this->set("AppVersionId", $appVersionId);
    }

    /**
     * AppVersionName: 应用版本名。
     *
     * @return string|null
     */
    public function getAppVersionName()
    {
        return $this->get("AppVersionName");
    }

    /**
     * AppVersionName: 应用版本名。
     *
     * @param string $appVersionName
     */
    public function setAppVersionName($appVersionName)
    {
        $this->set("AppVersionName", $appVersionName);
    }

    /**
     * PackageName: 应用包名。
     *
     * @return string|null
     */
    public function getPackageName()
    {
        return $this->get("PackageName");
    }

    /**
     * PackageName: 应用包名。
     *
     * @param string $packageName
     */
    public function setPackageName($packageName)
    {
        $this->set("PackageName", $packageName);
    }

    /**
     * URL: 应用版本相关的Apk文件存放的公网URL地址。
     *
     * @return string|null
     */
    public function getURL()
    {
        return $this->get("URL");
    }

    /**
     * URL: 应用版本相关的Apk文件存放的公网URL地址。
     *
     * @param string $url
     */
    public function setURL($url)
    {
        $this->set("URL", $url);
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳。
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳。
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间，格式为Unix时间戳。
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间，格式为Unix时间戳。
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * Description: 应用版本描述。
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 应用版本描述。
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }
}
