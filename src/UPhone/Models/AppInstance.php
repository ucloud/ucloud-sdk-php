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

class AppInstance extends Response
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
     * AppName: 应用名称。
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->get("AppName");
    }

    /**
     * AppName: 应用名称。
     *
     * @param string $appName
     */
    public function setAppName($appName)
    {
        $this->set("AppName", $appName);
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳。
     *
     * @return int|null
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
     * @return int|null
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
     * Description: 应用描述。
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 应用描述。
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }


}
