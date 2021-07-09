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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Request\Request;

class CloneUDiskSnapshotRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "CloneUDiskSnapshot"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("SourceId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Name: 实例名称
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * SourceId: 克隆父Snapshot的Id
     *
     * @return string|null
     */
    public function getSourceId(): string {
        return $this->get("SourceId");
    }

    /**
     * SourceId: 克隆父Snapshot的Id
     *
     * @param string $sourceId
     */
    public function setSourceId(string $sourceId) {
        $this->set("SourceId", $sourceId);
    }

    /**
     * Size: 购买UDisk大小,单位:GB,范围[1~8000]。(UDisk大小设定对本地盘快照有效，对云盘快照无效)
     *
     * @return int|null
     */
    public function getSize(): int {
        return $this->get("Size");
    }

    /**
     * Size: 购买UDisk大小,单位:GB,范围[1~8000]。(UDisk大小设定对本地盘快照有效，对云盘快照无效)
     *
     * @param int $size
     */
    public function setSize(int $size) {
        $this->set("Size", $size);
    }

    /**
     * Comment: Disk注释
     *
     * @return string|null
     */
    public function getComment(): string {
        return $this->get("Comment");
    }

    /**
     * Comment: Disk注释
     *
     * @param string $comment
     */
    public function setComment(string $comment) {
        $this->set("Comment", $comment);
    }

    /**
     * ChargeType: Year , Month, Dynamic，Postpay 默认: Dynamic
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year , Month, Dynamic，Postpay 默认: Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @return int|null
     */
    public function getQuantity(): int {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity) {
        $this->set("Quantity", $quantity);
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @return string|null
     */
    public function getUDataArkMode(): string {
        return $this->get("UDataArkMode");
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @param string $uDataArkMode
     */
    public function setUDataArkMode(string $uDataArkMode) {
        $this->set("UDataArkMode", $uDataArkMode);
    }

    /**
     * SnapshotService: 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *
     * @return string|null
     */
    public function getSnapshotService(): string {
        return $this->get("SnapshotService");
    }

    /**
     * SnapshotService: 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *
     * @param string $snapshotService
     */
    public function setSnapshotService(string $snapshotService) {
        $this->set("SnapshotService", $snapshotService);
    }

    /**
     * Tag: 业务组 默认：Default
     *
     * @return string|null
     */
    public function getTag(): string {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组 默认：Default
     *
     * @param string $tag
     */
    public function setTag(string $tag) {
        $this->set("Tag", $tag);
    }

    /**
     * RdmaClusterId: RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *
     * @return string|null
     */
    public function getRdmaClusterId(): string {
        return $this->get("RdmaClusterId");
    }

    /**
     * RdmaClusterId: RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *
     * @param string $rdmaClusterId
     */
    public function setRdmaClusterId(string $rdmaClusterId) {
        $this->set("RdmaClusterId", $rdmaClusterId);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId(): string {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId) {
        $this->set("CouponId", $couponId);
    }


}
