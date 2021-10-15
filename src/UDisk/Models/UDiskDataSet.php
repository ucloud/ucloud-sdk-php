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
namespace UCloud\UDisk\Models;

use UCloud\Core\Response\Response;

class UDiskDataSet extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * UDiskId: UDisk实例Id
     *
     * @return string|null
     */
    public function getUDiskId()
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: UDisk实例Id
     *
     * @param string $uDiskId
     */
    public function setUDiskId($uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * Name: 实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Size: 容量单位GB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 容量单位GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Status: 状态:Available(可用),Attaching(挂载中), InUse(已挂载), Detaching(卸载中), Initializating(分配中), Failed(创建失败),Cloning(克隆中),Restoring(恢复中),RestoreFailed(恢复失败),
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态:Available(可用),Attaching(挂载中), InUse(已挂载), Detaching(卸载中), Initializating(分配中), Failed(创建失败),Cloning(克隆中),Restoring(恢复中),RestoreFailed(恢复失败),
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * UHostId: 挂载的UHost的Id。【即将废弃，建议使用HostId】
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 挂载的UHost的Id。【即将废弃，建议使用HostId】
     *
     * @param string $uHostId
     */
    public function setUHostId($uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * UHostName: 挂载的UHost的Name。【即将废弃，建议使用HostName】
     *
     * @return string|null
     */
    public function getUHostName()
    {
        return $this->get("UHostName");
    }

    /**
     * UHostName: 挂载的UHost的Name。【即将废弃，建议使用HostName】
     *
     * @param string $uHostName
     */
    public function setUHostName($uHostName)
    {
        $this->set("UHostName", $uHostName);
    }

    /**
     * UHostIP: 挂载的UHost的IP。【即将废弃，建议使用HostIP】
     *
     * @return string|null
     */
    public function getUHostIP()
    {
        return $this->get("UHostIP");
    }

    /**
     * UHostIP: 挂载的UHost的IP。【即将废弃，建议使用HostIP】
     *
     * @param string $uHostIP
     */
    public function setUHostIP($uHostIP)
    {
        $this->set("UHostIP", $uHostIP);
    }

    /**
     * HostId: 挂载的Host的Id
     *
     * @return string|null
     */
    public function getHostId()
    {
        return $this->get("HostId");
    }

    /**
     * HostId: 挂载的Host的Id
     *
     * @param string $hostId
     */
    public function setHostId($hostId)
    {
        $this->set("HostId", $hostId);
    }

    /**
     * HostName: 挂载的Host的Name
     *
     * @return string|null
     */
    public function getHostName()
    {
        return $this->get("HostName");
    }

    /**
     * HostName: 挂载的Host的Name
     *
     * @param string $hostName
     */
    public function setHostName($hostName)
    {
        $this->set("HostName", $hostName);
    }

    /**
     * HostIP: 挂载的Host的IP
     *
     * @return string|null
     */
    public function getHostIP()
    {
        return $this->get("HostIP");
    }

    /**
     * HostIP: 挂载的Host的IP
     *
     * @param string $hostIP
     */
    public function setHostIP($hostIP)
    {
        $this->set("HostIP", $hostIP);
    }

    /**
     * DeviceName: 挂载的设备名称
     *
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->get("DeviceName");
    }

    /**
     * DeviceName: 挂载的设备名称
     *
     * @param string $deviceName
     */
    public function setDeviceName($deviceName)
    {
        $this->set("DeviceName", $deviceName);
    }

    /**
     * ChargeType: Year,Month,Dynamic,Trial,Postpay
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year,Month,Dynamic,Trial,Postpay
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * IsExpire: 资源是否过期，过期:"Yes", 未过期:"No"
     *
     * @return string|null
     */
    public function getIsExpire()
    {
        return $this->get("IsExpire");
    }

    /**
     * IsExpire: 资源是否过期，过期:"Yes", 未过期:"No"
     *
     * @param string $isExpire
     */
    public function setIsExpire($isExpire)
    {
        $this->set("IsExpire", $isExpire);
    }

    /**
     * Version: 是否支持数据方舟，支持:"2.0", 不支持:"1.0"
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 是否支持数据方舟，支持:"2.0", 不支持:"1.0"
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * UDataArkMode: 是否开启数据方舟，开启:"Yes", 不支持:"No"
     *
     * @return string|null
     */
    public function getUDataArkMode()
    {
        return $this->get("UDataArkMode");
    }

    /**
     * UDataArkMode: 是否开启数据方舟，开启:"Yes", 不支持:"No"
     *
     * @param string $uDataArkMode
     */
    public function setUDataArkMode($uDataArkMode)
    {
        $this->set("UDataArkMode", $uDataArkMode);
    }

    /**
     * SnapshotCount: 该盘快照个数
     *
     * @return integer|null
     */
    public function getSnapshotCount()
    {
        return $this->get("SnapshotCount");
    }

    /**
     * SnapshotCount: 该盘快照个数
     *
     * @param int $snapshotCount
     */
    public function setSnapshotCount($snapshotCount)
    {
        $this->set("SnapshotCount", $snapshotCount);
    }

    /**
     * SnapshotLimit: 该盘快照上限
     *
     * @return integer|null
     */
    public function getSnapshotLimit()
    {
        return $this->get("SnapshotLimit");
    }

    /**
     * SnapshotLimit: 该盘快照上限
     *
     * @param int $snapshotLimit
     */
    public function setSnapshotLimit($snapshotLimit)
    {
        $this->set("SnapshotLimit", $snapshotLimit);
    }

    /**
     * DiskType: 请求中的ProtocolVersion字段为1时，需结合IsBoot确定具体磁盘类型:普通数据盘：DiskType:"CLOUD_NORMAL",IsBoot:"False"； 普通系统盘：DiskType:"CLOUD_NORMAL",IsBoot:"True"；SSD数据盘：DiskType:"CLOUD_SSD",IsBoot:"False"；SSD系统盘：DiskType:"CLOUD_SSD",IsBoot:"True"；RSSD数据盘：DiskType:"CLOUD_RSSD",IsBoot:"False"；RSSD系统盘：DiskType:"CLOUD_RSSD",IsBoot:"True"；高效数据盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"False"；高效系统盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"True"。请求中的ProtocolVersion字段为0或没有该字段时，云硬盘类型参照如下:普通数据盘：DataDisk；普通系统盘：SystemDisk；SSD数据盘：SSDDataDisk；SSD系统盘：SSDSystemDisk；RSSD数据盘：RSSDDataDisk；RSSD系统盘：RSSDSystemDisk；高效数据盘：EfficiencyDataDisk；高效系统盘：EfficiencySystemDisk。
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 请求中的ProtocolVersion字段为1时，需结合IsBoot确定具体磁盘类型:普通数据盘：DiskType:"CLOUD_NORMAL",IsBoot:"False"； 普通系统盘：DiskType:"CLOUD_NORMAL",IsBoot:"True"；SSD数据盘：DiskType:"CLOUD_SSD",IsBoot:"False"；SSD系统盘：DiskType:"CLOUD_SSD",IsBoot:"True"；RSSD数据盘：DiskType:"CLOUD_RSSD",IsBoot:"False"；RSSD系统盘：DiskType:"CLOUD_RSSD",IsBoot:"True"；高效数据盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"False"；高效系统盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"True"。请求中的ProtocolVersion字段为0或没有该字段时，云硬盘类型参照如下:普通数据盘：DataDisk；普通系统盘：SystemDisk；SSD数据盘：SSDDataDisk；SSD系统盘：SSDSystemDisk；RSSD数据盘：RSSDDataDisk；RSSD系统盘：RSSDSystemDisk；高效数据盘：EfficiencyDataDisk；高效系统盘：EfficiencySystemDisk。
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * CloneEnable: 是否支持克隆，1支持 ，0不支持
     *
     * @return integer|null
     */
    public function getCloneEnable()
    {
        return $this->get("CloneEnable");
    }

    /**
     * CloneEnable: 是否支持克隆，1支持 ，0不支持
     *
     * @param int $cloneEnable
     */
    public function setCloneEnable($cloneEnable)
    {
        $this->set("CloneEnable", $cloneEnable);
    }

    /**
     * SnapEnable: 是否支持快照，1支持 ，0不支持
     *
     * @return integer|null
     */
    public function getSnapEnable()
    {
        return $this->get("SnapEnable");
    }

    /**
     * SnapEnable: 是否支持快照，1支持 ，0不支持
     *
     * @param int $snapEnable
     */
    public function setSnapEnable($snapEnable)
    {
        $this->set("SnapEnable", $snapEnable);
    }

    /**
     * ArkSwitchEnable: 是否支持开启方舟，1支持 ，0不支持
     *
     * @return integer|null
     */
    public function getArkSwitchEnable()
    {
        return $this->get("ArkSwitchEnable");
    }

    /**
     * ArkSwitchEnable: 是否支持开启方舟，1支持 ，0不支持
     *
     * @param int $arkSwitchEnable
     */
    public function setArkSwitchEnable($arkSwitchEnable)
    {
        $this->set("ArkSwitchEnable", $arkSwitchEnable);
    }

    /**
     * UKmsMode: 是否是加密盘，是:"Yes", 否:"No"
     *
     * @return string|null
     */
    public function getUKmsMode()
    {
        return $this->get("UKmsMode");
    }

    /**
     * UKmsMode: 是否是加密盘，是:"Yes", 否:"No"
     *
     * @param string $uKmsMode
     */
    public function setUKmsMode($uKmsMode)
    {
        $this->set("UKmsMode", $uKmsMode);
    }

    /**
     * CmkId: 该盘的cmk id
     *
     * @return string|null
     */
    public function getCmkId()
    {
        return $this->get("CmkId");
    }

    /**
     * CmkId: 该盘的cmk id
     *
     * @param string $cmkId
     */
    public function setCmkId($cmkId)
    {
        $this->set("CmkId", $cmkId);
    }

    /**
     * DataKey: 该盘的密文密钥
     *
     * @return string|null
     */
    public function getDataKey()
    {
        return $this->get("DataKey");
    }

    /**
     * DataKey: 该盘的密文密钥
     *
     * @param string $dataKey
     */
    public function setDataKey($dataKey)
    {
        $this->set("DataKey", $dataKey);
    }

    /**
     * CmkIdStatus: 该盘cmk的状态, Enabled(正常)，Disabled(失效)，Deleted(删除)，NoCmkId(非加密盘)
     *
     * @return string|null
     */
    public function getCmkIdStatus()
    {
        return $this->get("CmkIdStatus");
    }

    /**
     * CmkIdStatus: 该盘cmk的状态, Enabled(正常)，Disabled(失效)，Deleted(删除)，NoCmkId(非加密盘)
     *
     * @param string $cmkIdStatus
     */
    public function setCmkIdStatus($cmkIdStatus)
    {
        $this->set("CmkIdStatus", $cmkIdStatus);
    }

    /**
     * CmkIdAlias: cmk id 别名
     *
     * @return string|null
     */
    public function getCmkIdAlias()
    {
        return $this->get("CmkIdAlias");
    }

    /**
     * CmkIdAlias: cmk id 别名
     *
     * @param string $cmkIdAlias
     */
    public function setCmkIdAlias($cmkIdAlias)
    {
        $this->set("CmkIdAlias", $cmkIdAlias);
    }

    /**
     * IsBoot: 是否是系统盘，是："True", 否："False"
     *
     * @return string|null
     */
    public function getIsBoot()
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 是否是系统盘，是："True", 否："False"
     *
     * @param string $isBoot
     */
    public function setIsBoot($isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * BackupMode: 该盘的备份方式。快照服务："SnapshotService"；数据方舟："UDataArk"；无备份方式：""
     *
     * @return string|null
     */
    public function getBackupMode()
    {
        return $this->get("BackupMode");
    }

    /**
     * BackupMode: 该盘的备份方式。快照服务："SnapshotService"；数据方舟："UDataArk"；无备份方式：""
     *
     * @param string $backupMode
     */
    public function setBackupMode($backupMode)
    {
        $this->set("BackupMode", $backupMode);
    }

    /**
     * RdmaClusterId: RDMA集群id，仅RSSD返回该值；其他类型云盘返回""。当云盘的此值与快杰云主机的RdmaClusterId相同时，RSSD可以挂载到这台云主机。
     *
     * @return string|null
     */
    public function getRdmaClusterId()
    {
        return $this->get("RdmaClusterId");
    }

    /**
     * RdmaClusterId: RDMA集群id，仅RSSD返回该值；其他类型云盘返回""。当云盘的此值与快杰云主机的RdmaClusterId相同时，RSSD可以挂载到这台云主机。
     *
     * @param string $rdmaClusterId
     */
    public function setRdmaClusterId($rdmaClusterId)
    {
        $this->set("RdmaClusterId", $rdmaClusterId);
    }
}
