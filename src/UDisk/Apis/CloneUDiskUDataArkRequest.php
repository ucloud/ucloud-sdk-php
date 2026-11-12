<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Request\Request;

class CloneUDiskUDataArkRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CloneUDiskUDataArk"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("UDiskId");
        $this->markRequired("SnapshotTime");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
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
     * UDiskId: 需要克隆的源盘id
     *
     * @return string|null
     */
    public function getUDiskId()
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 需要克隆的源盘id
     *
     * @param string $uDiskId
     */
    public function setUDiskId($uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * SnapshotTime: 指定从方舟克隆的备份时间点
     *
     * @return integer|null
     */
    public function getSnapshotTime()
    {
        return $this->get("SnapshotTime");
    }

    /**
     * SnapshotTime: 指定从方舟克隆的备份时间点
     *
     * @param int $snapshotTime
     */
    public function setSnapshotTime($snapshotTime)
    {
        $this->set("SnapshotTime", $snapshotTime);
    }

    /**
     * Comment: Disk注释
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->get("Comment");
    }

    /**
     * Comment: Disk注释
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->set("Comment", $comment);
    }

    /**
     * ChargeType: Year , Month, Dynamic，Postpay 默认: Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year , Month, Dynamic，Postpay 默认: Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @return string|null
     */
    public function getUDataArkMode()
    {
        return $this->get("UDataArkMode");
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @param string $uDataArkMode
     */
    public function setUDataArkMode($uDataArkMode)
    {
        $this->set("UDataArkMode", $uDataArkMode);
    }

    /**
     * SnapshotService: 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *
     * @return string|null
     */
    public function getSnapshotService()
    {
        return $this->get("SnapshotService");
    }

    /**
     * SnapshotService: 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *
     * @param string $snapshotService
     */
    public function setSnapshotService($snapshotService)
    {
        $this->set("SnapshotService", $snapshotService);
    }

    /**
     * Size: 新克隆UDisk的大小,单位:GB。指定Size须大于等于源盘Size，小于源盘Size或者不指定该参数均按源盘Size克隆新盘。普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；RSSD数据盘：范围[1~32000]；高效数据盘：范围[1~32000]。
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 新克隆UDisk的大小,单位:GB。指定Size须大于等于源盘Size，小于源盘Size或者不指定该参数均按源盘Size克隆新盘。普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；RSSD数据盘：范围[1~32000]；高效数据盘：范围[1~32000]。
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Tag: 业务组 默认：Default
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组 默认：Default
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * RdmaClusterId: RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *
     * @return string|null
     */
    public function getRdmaClusterId()
    {
        return $this->get("RdmaClusterId");
    }

    /**
     * RdmaClusterId: RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *
     * @param string $rdmaClusterId
     */
    public function setRdmaClusterId($rdmaClusterId)
    {
        $this->set("RdmaClusterId", $rdmaClusterId);
    }

    /**
     * HostId: Host实例ID。克隆出的云盘可直接挂载到该主机上。
     *
     * @return string|null
     */
    public function getHostId()
    {
        return $this->get("HostId");
    }

    /**
     * HostId: Host实例ID。克隆出的云盘可直接挂载到该主机上。
     *
     * @param string $hostId
     */
    public function setHostId($hostId)
    {
        $this->set("HostId", $hostId);
    }

    /**
     * BackupMode: 快照服务备份策略。默认采用基础版套餐开通，“Base”：基础版，“ Ultimate”：旗舰版，“ Custom”：自定义备份链
     *
     * @return string|null
     */
    public function getBackupMode()
    {
        return $this->get("BackupMode");
    }

    /**
     * BackupMode: 快照服务备份策略。默认采用基础版套餐开通，“Base”：基础版，“ Ultimate”：旗舰版，“ Custom”：自定义备份链
     *
     * @param string $backupMode
     */
    public function setBackupMode($backupMode)
    {
        $this->set("BackupMode", $backupMode);
    }

    /**
     * Journal: BackupMode为Custom时，进行设置, 以12小时秒级为基础进行倍数扩增，如12、24、36、48
     *
     * @return integer|null
     */
    public function getJournal()
    {
        return $this->get("Journal");
    }

    /**
     * Journal: BackupMode为Custom时，进行设置, 以12小时秒级为基础进行倍数扩增，如12、24、36、48
     *
     * @param int $journal
     */
    public function setJournal($journal)
    {
        $this->set("Journal", $journal);
    }

    /**
     * Hour: BackupMode为Custom时，进行设置, 以24小时级为基础进行倍数扩增，如24、48、72、96
     *
     * @return integer|null
     */
    public function getHour()
    {
        return $this->get("Hour");
    }

    /**
     * Hour: BackupMode为Custom时，进行设置, 以24小时级为基础进行倍数扩增，如24、48、72、96
     *
     * @param int $hour
     */
    public function setHour($hour)
    {
        $this->set("Hour", $hour);
    }

    /**
     * Day: BackupMode为Custom时，进行设置, 以5天级为基础进行倍数扩增，如5、10、15、20、25、30
     *
     * @return integer|null
     */
    public function getDay()
    {
        return $this->get("Day");
    }

    /**
     * Day: BackupMode为Custom时，进行设置, 以5天级为基础进行倍数扩增，如5、10、15、20、25、30
     *
     * @param int $day
     */
    public function setDay($day)
    {
        $this->set("Day", $day);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
