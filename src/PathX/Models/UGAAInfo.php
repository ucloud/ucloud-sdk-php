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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class UGAAInfo extends Response {
    

    /**
     * UGAId: 加速配置实例ID
     *
     * @return string|null
     */
    public function getUGAId(): string {
        return $this->get("UGAId");
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @param string $ugaId
     */
    public function setUGAId(string $ugaId) {
        $this->set("UGAId", $ugaId);
    }

    /**
     * CName: 加速域名，请在加速区域配置您的业务域名的CName记录值为加速域名
     *
     * @return string|null
     */
    public function getCName(): string {
        return $this->get("CName");
    }

    /**
     * CName: 加速域名，请在加速区域配置您的业务域名的CName记录值为加速域名
     *
     * @param string $cName
     */
    public function setCName(string $cName) {
        $this->set("CName", $cName);
    }

    /**
     * UGAName: 加速配置名称
     *
     * @return string|null
     */
    public function getUGAName(): string {
        return $this->get("UGAName");
    }

    /**
     * UGAName: 加速配置名称
     *
     * @param string $ugaName
     */
    public function setUGAName(string $ugaName) {
        $this->set("UGAName", $ugaName);
    }

    /**
     * IPList: 源站IP列表，多个值由半角英文逗号相隔
     *
     * @return string[]|null
     */
    public function getIPList(): array {
        return $this->get("IPList");
    }

    /**
     * IPList: 源站IP列表，多个值由半角英文逗号相隔
     *
     * @param string[] $ipList
     */
    public function setIPList(array $ipList) {
        $this->set("IPList", $ipList);
    }

    /**
     * Domain: 源站域名
     *
     * @return string|null
     */
    public function getDomain(): string {
        return $this->get("Domain");
    }

    /**
     * Domain: 源站域名
     *
     * @param string $domain
     */
    public function setDomain(string $domain) {
        $this->set("Domain", $domain);
    }

    /**
     * Location: 源站所在区域，加速实例在绑定线路后会自动设置该值。console页面上通过该值过滤加速实例可以绑定的upath实例。注意：缺少该值会导致在console上无法修改线路
     *
     * @return string|null
     */
    public function getLocation(): string {
        return $this->get("Location");
    }

    /**
     * Location: 源站所在区域，加速实例在绑定线路后会自动设置该值。console页面上通过该值过滤加速实例可以绑定的upath实例。注意：缺少该值会导致在console上无法修改线路
     *
     * @param string $location
     */
    public function setLocation(string $location) {
        $this->set("Location", $location);
    }

    /**
     * UPathSet: 绑定的加速线路
     *
     * @return UPathSet[]|null
     */
    public function getUPathSet(): array {
        $items = $this->get("UPathSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UPathSet($item));
        }
        return $result;
    }

    /**
     * UPathSet: 绑定的加速线路
     *
     * @param UPathSet[] $uPathSet
     */
    public function setUPathSet(array $uPathSet) {
        $result = [];
        foreach ($uPathSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TaskSet: 端口配置信息（不再维护，建议使用ForwarderSet）
     *
     * @return UGAATask[]|null
     */
    public function getTaskSet(): array {
        $items = $this->get("TaskSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGAATask($item));
        }
        return $result;
    }

    /**
     * TaskSet: 端口配置信息（不再维护，建议使用ForwarderSet）
     *
     * @param UGAATask[] $taskSet
     */
    public function setTaskSet(array $taskSet) {
        $result = [];
        foreach ($taskSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * L4ForwarderSet: UGA 4层转发器配置，记录接入或回源端口，接入或回源协议信息
     *
     * @return UGAL4Forwarder[]|null
     */
    public function getL4ForwarderSet(): array {
        $items = $this->get("L4ForwarderSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGAL4Forwarder($item));
        }
        return $result;
    }

    /**
     * L4ForwarderSet: UGA 4层转发器配置，记录接入或回源端口，接入或回源协议信息
     *
     * @param UGAL4Forwarder[] $l4ForwarderSet
     */
    public function setL4ForwarderSet(array $l4ForwarderSet) {
        $result = [];
        foreach ($l4ForwarderSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * L7ForwarderSet: UGA 7层转发器配置，记录接入或回源端口，接入或回源协议信息 如绑定证书会返回证书ID
     *
     * @return UGAL7Forwarder[]|null
     */
    public function getL7ForwarderSet(): array {
        $items = $this->get("L7ForwarderSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGAL7Forwarder($item));
        }
        return $result;
    }

    /**
     * L7ForwarderSet: UGA 7层转发器配置，记录接入或回源端口，接入或回源协议信息 如绑定证书会返回证书ID
     *
     * @param UGAL7Forwarder[] $l7ForwarderSet
     */
    public function setL7ForwarderSet(array $l7ForwarderSet) {
        $result = [];
        foreach ($l7ForwarderSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * OutPublicIpList: 线路出口IP地址
     *
     * @return OutPublicIpInfo[]|null
     */
    public function getOutPublicIpList(): array {
        $items = $this->get("OutPublicIpList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new OutPublicIpInfo($item));
        }
        return $result;
    }

    /**
     * OutPublicIpList: 线路出口IP地址
     *
     * @param OutPublicIpInfo[] $outPublicIpList
     */
    public function setOutPublicIpList(array $outPublicIpList) {
        $result = [];
        foreach ($outPublicIpList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
