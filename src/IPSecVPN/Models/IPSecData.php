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
namespace UCloud\IPSecVPN\Models;

use UCloud\Core\Response\Response;

class IPSecData extends Response {
    

    /**
     * IPSecAuthenticationAlgorithm: IPSec通道中使用的认证算法
     *
     * @return string|null
     */
    public function getIPSecAuthenticationAlgorithm(): string {
        return $this->get("IPSecAuthenticationAlgorithm");
    }

    /**
     * IPSecAuthenticationAlgorithm: IPSec通道中使用的认证算法
     *
     * @param string $ipSecAuthenticationAlgorithm
     */
    public function setIPSecAuthenticationAlgorithm(string $ipSecAuthenticationAlgorithm) {
        $this->set("IPSecAuthenticationAlgorithm", $ipSecAuthenticationAlgorithm);
    }

    /**
     * IPSecEncryptionAlgorithm: IPSec通道中使用的加密算法
     *
     * @return string|null
     */
    public function getIPSecEncryptionAlgorithm(): string {
        return $this->get("IPSecEncryptionAlgorithm");
    }

    /**
     * IPSecEncryptionAlgorithm: IPSec通道中使用的加密算法
     *
     * @param string $ipSecEncryptionAlgorithm
     */
    public function setIPSecEncryptionAlgorithm(string $ipSecEncryptionAlgorithm) {
        $this->set("IPSecEncryptionAlgorithm", $ipSecEncryptionAlgorithm);
    }

    /**
     * IPSecLocalSubnetIds: 指定VPN连接的本地子网，用逗号分隔
     *
     * @return string[]|null
     */
    public function getIPSecLocalSubnetIds(): array {
        return $this->get("IPSecLocalSubnetIds");
    }

    /**
     * IPSecLocalSubnetIds: 指定VPN连接的本地子网，用逗号分隔
     *
     * @param string[] $ipSecLocalSubnetIds
     */
    public function setIPSecLocalSubnetIds(array $ipSecLocalSubnetIds) {
        $this->set("IPSecLocalSubnetIds", $ipSecLocalSubnetIds);
    }

    /**
     * IPSecProtocol: 使用的安全协议，ESP或AH
     *
     * @return string|null
     */
    public function getIPSecProtocol(): string {
        return $this->get("IPSecProtocol");
    }

    /**
     * IPSecProtocol: 使用的安全协议，ESP或AH
     *
     * @param string $ipSecProtocol
     */
    public function setIPSecProtocol(string $ipSecProtocol) {
        $this->set("IPSecProtocol", $ipSecProtocol);
    }

    /**
     * IPSecRemoteSubnets: 指定VPN连接的客户网段，用逗号分隔
     *
     * @return string[]|null
     */
    public function getIPSecRemoteSubnets(): array {
        return $this->get("IPSecRemoteSubnets");
    }

    /**
     * IPSecRemoteSubnets: 指定VPN连接的客户网段，用逗号分隔
     *
     * @param string[] $ipSecRemoteSubnets
     */
    public function setIPSecRemoteSubnets(array $ipSecRemoteSubnets) {
        $this->set("IPSecRemoteSubnets", $ipSecRemoteSubnets);
    }

    /**
     * IPSecSALifetime: IPSec中SA的生存时间
     *
     * @return string|null
     */
    public function getIPSecSALifetime(): string {
        return $this->get("IPSecSALifetime");
    }

    /**
     * IPSecSALifetime: IPSec中SA的生存时间
     *
     * @param string $ipSecSALifetime
     */
    public function setIPSecSALifetime(string $ipSecSALifetime) {
        $this->set("IPSecSALifetime", $ipSecSALifetime);
    }

    /**
     * IPSecSALifetimeBytes: IPSec中SA的生存时间（以字节计）
     *
     * @return string|null
     */
    public function getIPSecSALifetimeBytes(): string {
        return $this->get("IPSecSALifetimeBytes");
    }

    /**
     * IPSecSALifetimeBytes: IPSec中SA的生存时间（以字节计）
     *
     * @param string $ipSecSALifetimeBytes
     */
    public function setIPSecSALifetimeBytes(string $ipSecSALifetimeBytes) {
        $this->set("IPSecSALifetimeBytes", $ipSecSALifetimeBytes);
    }

    /**
     * IPSecPFSDhGroup: 是否开启PFS功能,Disable表示关闭，数字表示DH组
     *
     * @return string|null
     */
    public function getIPSecPFSDhGroup(): string {
        return $this->get("IPSecPFSDhGroup");
    }

    /**
     * IPSecPFSDhGroup: 是否开启PFS功能,Disable表示关闭，数字表示DH组
     *
     * @param string $ipSecPFSDhGroup
     */
    public function setIPSecPFSDhGroup(string $ipSecPFSDhGroup) {
        $this->set("IPSecPFSDhGroup", $ipSecPFSDhGroup);
    }


}
