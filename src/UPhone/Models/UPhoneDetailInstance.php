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

class UPhoneDetailInstance extends Response
{
    

    /**
     * UPhoneName: 云手机的名称，不超过65个字符。
     *
     * @return string|null
     */
    public function getUPhoneName()
    {
        return $this->get("UPhoneName");
    }

    /**
     * UPhoneName: 云手机的名称，不超过65个字符。
     *
     * @param string $uPhoneName
     */
    public function setUPhoneName($uPhoneName)
    {
        $this->set("UPhoneName", $uPhoneName);
    }

    /**
     * UPhoneId: 云手机的唯一标识，不超过32个字节。
     *
     * @return string|null
     */
    public function getUPhoneId()
    {
        return $this->get("UPhoneId");
    }

    /**
     * UPhoneId: 云手机的唯一标识，不超过32个字节。
     *
     * @param string $uPhoneId
     */
    public function setUPhoneId($uPhoneId)
    {
        $this->set("UPhoneId", $uPhoneId);
    }

    /**
     * UPhoneModelName: 云手机规格名称
     *
     * @return string|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: 云手机规格名称
     *
     * @param string $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
    }

    /**
     * CPU: 虚拟CPU核数。
     *
     * @return int|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位MB
     *
     * @return int|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位MB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * DiskSize: 磁盘大小，单位: GB
     *
     * @return int|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 磁盘大小，单位: GB
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * Resolution: 分辨率
     *
     * @return string|null
     */
    public function getResolution()
    {
        return $this->get("Resolution");
    }

    /**
     * Resolution: 分辨率
     *
     * @param string $resolution
     */
    public function setResolution($resolution)
    {
        $this->set("Resolution", $resolution);
    }

    /**
     * Refresh: 刷新率
     *
     * @return int|null
     */
    public function getRefresh()
    {
        return $this->get("Refresh");
    }

    /**
     * Refresh: 刷新率
     *
     * @param int $refresh
     */
    public function setRefresh($refresh)
    {
        $this->set("Refresh", $refresh);
    }

    /**
     * ServerId: 云手机所在的服务器ID，不超过32个字节。
     *
     * @return string|null
     */
    public function getServerId()
    {
        return $this->get("ServerId");
    }

    /**
     * ServerId: 云手机所在的服务器ID，不超过32个字节。
     *
     * @param string $serverId
     */
    public function setServerId($serverId)
    {
        $this->set("ServerId", $serverId);
    }

    /**
     * ImageId: 云手机镜像ID，不超过32个字节。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 云手机镜像ID，不超过32个字节。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * OsType: 云手机镜像系统，如"Android armv8"
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 云手机镜像系统，如"Android armv8"
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * State: 云手机状态<br />* 启动中: STARTING; <br />* 运行中: RUNNING; <br />* 关机中: STOPPING; <br />* 关机: STOPPED <br />* 重启中: REBOOTING; <br />* 重置中: RESETTING; <br />* 启动失败: START_FAILED; <br />* 关机失败: STOP_FAILED; <br />* 重启失败: REBOOT_FAILED; <br />* 重置失败: RESET_FAILED; <br />* 未知状态：UNDEFINED或""
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 云手机状态<br />* 启动中: STARTING; <br />* 运行中: RUNNING; <br />* 关机中: STOPPING; <br />* 关机: STOPPED <br />* 重启中: REBOOTING; <br />* 重置中: RESETTING; <br />* 启动失败: START_FAILED; <br />* 关机失败: STOP_FAILED; <br />* 重启失败: REBOOT_FAILED; <br />* 重置失败: RESET_FAILED; <br />* 未知状态：UNDEFINED或""
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
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
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * AppVersion: 应用版本实例，每项参数可见数据模型 [AppVersionInstance](#AppVersionInstance)
     *
     * @return AppVersionInstance|null
     */
    public function getAppVersion()
    {
        return new AppVersionInstance($this->get("AppVersion"));
    }

    /**
     * AppVersion: 应用版本实例，每项参数可见数据模型 [AppVersionInstance](#AppVersionInstance)
     *
     * @param AppVersionInstance $appVersion
     */
    public function setAppVersion(array $appVersion)
    {
        $this->set("AppVersion", $appVersion->getAll());
    }


}
