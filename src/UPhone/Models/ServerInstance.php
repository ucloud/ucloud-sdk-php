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

class ServerInstance extends Response
{
    

    /**
     * ServerId: 云手机服务器的唯一标识。
     *
     * @return string|null
     */
    public function getServerId()
    {
        return $this->get("ServerId");
    }

    /**
     * ServerId: 云手机服务器的唯一标识。
     *
     * @param string $serverId
     */
    public function setServerId($serverId)
    {
        $this->set("ServerId", $serverId);
    }

    /**
     * ServerName: 云手机服务器名称。
     *
     * @return string|null
     */
    public function getServerName()
    {
        return $this->get("ServerName");
    }

    /**
     * ServerName: 云手机服务器名称。
     *
     * @param string $serverName
     */
    public function setServerName($serverName)
    {
        $this->set("ServerName", $serverName);
    }

    /**
     * ServerModel: 云服务器规格。
     *
     * @return ServerModelInstance|null
     */
    public function getServerModel()
    {
        return new ServerModelInstance($this->get("ServerModel"));
    }

    /**
     * ServerModel: 云服务器规格。
     *
     * @param ServerModelInstance $serverModel
     */
    public function setServerModel(array $serverModel)
    {
        $this->set("ServerModel", $serverModel->getAll());
    }

    /**
     * UPhoneModelName: 云手机规格名称。
     *
     * @return string|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: 云手机规格名称。
     *
     * @param string $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
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
     * ExpireTime: 到期时间，格式为Unix时间戳。
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间，格式为Unix时间戳。
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ChargeType: 计费模式。枚举值为：<br />  *Year，按年付费；<br />*  Month，按月付费；<br />默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为：<br />  *Year，按年付费；<br />*  Month，按月付费；<br />默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CityId: 城市Id，eg: cn-shanghai, cn-jinan
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，eg: cn-shanghai, cn-jinan
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * CityName: 城市名称，eg:上海二、济南市
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->get("CityName");
    }

    /**
     * CityName: 城市名称，eg:上海二、济南市
     *
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->set("CityName", $cityName);
    }

    /**
     * Remark: 云服务器备注。
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 云服务器备注。
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * UPhoneCount: 云手机开数。
     *
     * @return integer|null
     */
    public function getUPhoneCount()
    {
        return $this->get("UPhoneCount");
    }

    /**
     * UPhoneCount: 云手机开数。
     *
     * @param int $uPhoneCount
     */
    public function setUPhoneCount($uPhoneCount)
    {
        $this->set("UPhoneCount", $uPhoneCount);
    }

    /**
     * State: 实例状态，枚举值： * 初始化: Initializing; * 云手机创建中: UPhoneCreating;* 运行中: Running; * 删除中: Deleting; * 创建失败: CreateFailed * 未知(空字符串，获取状态超时或出错)：""
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态，枚举值： * 初始化: Initializing; * 云手机创建中: UPhoneCreating;* 运行中: Running; * 删除中: Deleting; * 创建失败: CreateFailed * 未知(空字符串，获取状态超时或出错)：""
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * IpSet: 服务器IP信息
     *
     * @return IpSet[]|null
     */
    public function getIpSet()
    {
        $items = $this->get("IpSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IpSet($item));
        }
        return $result;
    }

    /**
     * IpSet: 服务器IP信息
     *
     * @param IpSet[] $ipSet
     */
    public function setIpSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
