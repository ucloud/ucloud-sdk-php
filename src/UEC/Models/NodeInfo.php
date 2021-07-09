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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class NodeInfo extends Response {
    

    /**
     * NodeName: 节点名称
     *
     * @return string|null
     */
    public function getNodeName(): string {
        return $this->get("NodeName");
    }

    /**
     * NodeName: 节点名称
     *
     * @param string $nodeName
     */
    public function setNodeName(string $nodeName) {
        $this->set("NodeName", $nodeName);
    }

    /**
     * NodeId: 节点ID
     *
     * @return string|null
     */
    public function getNodeId(): string {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点ID
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId) {
        $this->set("NodeId", $nodeId);
    }

    /**
     * CoreNum: Cpu核数
     *
     * @return int|null
     */
    public function getCoreNum(): int {
        return $this->get("CoreNum");
    }

    /**
     * CoreNum: Cpu核数
     *
     * @param int $coreNum
     */
    public function setCoreNum(int $coreNum) {
        $this->set("CoreNum", $coreNum);
    }

    /**
     * MemSize: 节点内存大小，单位GB
     *
     * @return int|null
     */
    public function getMemSize(): int {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 节点内存大小，单位GB
     *
     * @param int $memSize
     */
    public function setMemSize(int $memSize) {
        $this->set("MemSize", $memSize);
    }

    /**
     * SysDiskSize: 系统盘大小， 单位GB
     *
     * @return int|null
     */
    public function getSysDiskSize(): int {
        return $this->get("SysDiskSize");
    }

    /**
     * SysDiskSize: 系统盘大小， 单位GB
     *
     * @param int $sysDiskSize
     */
    public function setSysDiskSize(int $sysDiskSize) {
        $this->set("SysDiskSize", $sysDiskSize);
    }

    /**
     * DiskSize: 数据盘大小， 单位GB
     *
     * @return int|null
     */
    public function getDiskSize(): int {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 数据盘大小， 单位GB
     *
     * @param int $diskSize
     */
    public function setDiskSize(int $diskSize) {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * State: 节点状态，1部署中，2待启动，3启动中，4运行中，5正在停止，6已停止，7正在更新，8正在重启，9正在删除， 10已经删除,11异常
     *
     * @return int|null
     */
    public function getState(): int {
        return $this->get("State");
    }

    /**
     * State: 节点状态，1部署中，2待启动，3启动中，4运行中，5正在停止，6已停止，7正在更新，8正在重启，9正在删除， 10已经删除,11异常
     *
     * @param int $state
     */
    public function setState(int $state) {
        $this->set("State", $state);
    }

    /**
     * NetLimit: 节点带宽限制， 单位Mbs
     *
     * @return int|null
     */
    public function getNetLimit(): int {
        return $this->get("NetLimit");
    }

    /**
     * NetLimit: 节点带宽限制， 单位Mbs
     *
     * @param int $netLimit
     */
    public function setNetLimit(int $netLimit) {
        $this->set("NetLimit", $netLimit);
    }

    /**
     * IdcId: 机房ID
     *
     * @return string|null
     */
    public function getIdcId(): string {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房ID
     *
     * @param string $idcId
     */
    public function setIdcId(string $idcId) {
        $this->set("IdcId", $idcId);
    }

    /**
     * OcName: 机房名称
     *
     * @return string|null
     */
    public function getOcName(): string {
        return $this->get("OcName");
    }

    /**
     * OcName: 机房名称
     *
     * @param string $ocName
     */
    public function setOcName(string $ocName) {
        $this->set("OcName", $ocName);
    }

    /**
     * Province: 省份
     *
     * @return string|null
     */
    public function getProvince(): string {
        return $this->get("Province");
    }

    /**
     * Province: 省份
     *
     * @param string $province
     */
    public function setProvince(string $province) {
        $this->set("Province", $province);
    }

    /**
     * City: 城市
     *
     * @return string|null
     */
    public function getCity(): string {
        return $this->get("City");
    }

    /**
     * City: 城市
     *
     * @param string $city
     */
    public function setCity(string $city) {
        $this->set("City", $city);
    }

    /**
     * Type: 运营商类型： 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *
     * @return int|null
     */
    public function getType(): int {
        return $this->get("Type");
    }

    /**
     * Type: 运营商类型： 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *
     * @param int $type
     */
    public function setType(int $type) {
        $this->set("Type", $type);
    }

    /**
     * ChargeType: 付费类型：1按时, 2按月,3按年
     *
     * @return int|null
     */
    public function getChargeType(): int {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费类型：1按时, 2按月,3按年
     *
     * @param int $chargeType
     */
    public function setChargeType(int $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @return int|null
     */
    public function getExpiredTime(): int {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @param int $expiredTime
     */
    public function setExpiredTime(int $expiredTime) {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName(): string {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName(string $imageName) {
        $this->set("ImageName", $imageName);
    }

    /**
     * NodeIpList: 外网ip集合（详情参考NodeIpList）
     *
     * @return NodeIpList[]|null
     */
    public function getNodeIpList(): array {
        $items = $this->get("NodeIpList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeIpList($item));
        }
        return $result;
    }

    /**
     * NodeIpList: 外网ip集合（详情参考NodeIpList）
     *
     * @param NodeIpList[] $nodeIpList
     */
    public function setNodeIpList(array $nodeIpList) {
        $result = [];
        foreach ($nodeIpList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * FirewallId: 防火墙Id
     *
     * @return string|null
     */
    public function getFirewallId(): string {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 防火墙Id
     *
     * @param string $firewallId
     */
    public function setFirewallId(string $firewallId) {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * ProductType: 机器类型
     *
     * @return string|null
     */
    public function getProductType(): string {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 机器类型
     *
     * @param string $productType
     */
    public function setProductType(string $productType) {
        $this->set("ProductType", $productType);
    }


}
