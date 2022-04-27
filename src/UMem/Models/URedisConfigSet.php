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

namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

use UCloud\UMem\Models\DescribeURedisConfigResponse;

class URedisConfigSet extends Response
{

    /**
     * Zone: Zone
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: Zone
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
    /**
     * ConfigId: 配置ID
     *
     * @return string|null
     */
    public function getConfigId()
    {
        return $this->get("ConfigId");
    }

    /**
     * ConfigId: 配置ID
     *
     * @param string $configId
     */
    public function setConfigId(string $configId)
    {
        $this->set("ConfigId", $configId);
    }
    /**
     * Name: 配置名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 配置名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * Description: 配置描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 配置描述
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->set("Description", $description);
    }
    /**
     * Version: 配置对应的Redis版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 配置对应的Redis版本
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }
    /**
     * IsModify: 置是否可以修改
     *
     * @return string|null
     */
    public function getIsModify()
    {
        return $this->get("IsModify");
    }

    /**
     * IsModify: 置是否可以修改
     *
     * @param string $isModify
     */
    public function setIsModify(string $isModify)
    {
        $this->set("IsModify", $isModify);
    }
    /**
     * State: 配置所处的状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 配置所处的状态
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }
    /**
     * CreateTime: 创建时间 (UNIX时间戳)
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间 (UNIX时间戳)
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * ModifyTime: 修改时间 (UNIX时间戳)
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间 (UNIX时间戳)
     *
     * @param int $modifyTime
     */
    public function setModifyTime(int $modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }
    /**
     * RegionFlag: 是否是跨机房URedis(默认false)
     *
     * @return boolean|null
     */
    public function getRegionFlag()
    {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 是否是跨机房URedis(默认false)
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag(bool $regionFlag)
    {
        $this->set("RegionFlag", $regionFlag);
    }
}
