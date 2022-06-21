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
namespace UCloud\IPSecVPN\Apis;

use UCloud\Core\Request\Request;

class UpdateVPNTunnelAttributeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateVPNTunnelAttribute"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("VPNTunnelId");
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
     * VPNTunnelId: VPN隧道的资源ID
     *
     * @return string|null
     */
    public function getVPNTunnelId()
    {
        return $this->get("VPNTunnelId");
    }

    /**
     * VPNTunnelId: VPN隧道的资源ID
     *
     * @param string $vpnTunnelId
     */
    public function setVPNTunnelId($vpnTunnelId)
    {
        $this->set("VPNTunnelId", $vpnTunnelId);
    }

    /**
     * IKEPreSharedKey: 预共享密钥
     *
     * @return string|null
     */
    public function getIKEPreSharedKey()
    {
        return $this->get("IKEPreSharedKey");
    }

    /**
     * IKEPreSharedKey: 预共享密钥
     *
     * @param string $ikePreSharedKey
     */
    public function setIKEPreSharedKey($ikePreSharedKey)
    {
        $this->set("IKEPreSharedKey", $ikePreSharedKey);
    }

    /**
     * IKEEncryptionAlgorithm: IKE协商过程中使用的加密算法
     *
     * @return string|null
     */
    public function getIKEEncryptionAlgorithm()
    {
        return $this->get("IKEEncryptionAlgorithm");
    }

    /**
     * IKEEncryptionAlgorithm: IKE协商过程中使用的加密算法
     *
     * @param string $ikeEncryptionAlgorithm
     */
    public function setIKEEncryptionAlgorithm($ikeEncryptionAlgorithm)
    {
        $this->set("IKEEncryptionAlgorithm", $ikeEncryptionAlgorithm);
    }

    /**
     * IKEAuthenticationAlgorithm: IKE协商过程中使用的认证算法
     *
     * @return string|null
     */
    public function getIKEAuthenticationAlgorithm()
    {
        return $this->get("IKEAuthenticationAlgorithm");
    }

    /**
     * IKEAuthenticationAlgorithm: IKE协商过程中使用的认证算法
     *
     * @param string $ikeAuthenticationAlgorithm
     */
    public function setIKEAuthenticationAlgorithm($ikeAuthenticationAlgorithm)
    {
        $this->set("IKEAuthenticationAlgorithm", $ikeAuthenticationAlgorithm);
    }

    /**
     * IKEExchangeMode: IKE协商过程中使用的模式，可选“主动模式”与“野蛮模式”。IKEV2不使用该参数。
     *
     * @return string|null
     */
    public function getIKEExchangeMode()
    {
        return $this->get("IKEExchangeMode");
    }

    /**
     * IKEExchangeMode: IKE协商过程中使用的模式，可选“主动模式”与“野蛮模式”。IKEV2不使用该参数。
     *
     * @param string $ikeExchangeMode
     */
    public function setIKEExchangeMode($ikeExchangeMode)
    {
        $this->set("IKEExchangeMode", $ikeExchangeMode);
    }

    /**
     * IKELocalId: 本端标识。不填时默认使用之前的参数，结合IKEversion进行校验，IKEV2时不能为auto。
     *
     * @return string|null
     */
    public function getIKELocalId()
    {
        return $this->get("IKELocalId");
    }

    /**
     * IKELocalId: 本端标识。不填时默认使用之前的参数，结合IKEversion进行校验，IKEV2时不能为auto。
     *
     * @param string $ikeLocalId
     */
    public function setIKELocalId($ikeLocalId)
    {
        $this->set("IKELocalId", $ikeLocalId);
    }

    /**
     * IKERemoteId: 客户端标识。不填时默认使用之前的参数，结合IKEversion进行校验，IKEV2时不能为auto。
     *
     * @return string|null
     */
    public function getIKERemoteId()
    {
        return $this->get("IKERemoteId");
    }

    /**
     * IKERemoteId: 客户端标识。不填时默认使用之前的参数，结合IKEversion进行校验，IKEV2时不能为auto。
     *
     * @param string $ikeRemoteId
     */
    public function setIKERemoteId($ikeRemoteId)
    {
        $this->set("IKERemoteId", $ikeRemoteId);
    }

    /**
     * IKEDhGroup: IKE协商过程中使用的DH组
     *
     * @return string|null
     */
    public function getIKEDhGroup()
    {
        return $this->get("IKEDhGroup");
    }

    /**
     * IKEDhGroup: IKE协商过程中使用的DH组
     *
     * @param string $ikeDhGroup
     */
    public function setIKEDhGroup($ikeDhGroup)
    {
        $this->set("IKEDhGroup", $ikeDhGroup);
    }

    /**
     * IKESALifetime: IKE中SA的生存时间
     *
     * @return string|null
     */
    public function getIKESALifetime()
    {
        return $this->get("IKESALifetime");
    }

    /**
     * IKESALifetime: IKE中SA的生存时间
     *
     * @param string $ikesaLifetime
     */
    public function setIKESALifetime($ikesaLifetime)
    {
        $this->set("IKESALifetime", $ikesaLifetime);
    }

    /**
     * IPSecProtocol: 使用的安全协议，ESP或AH
     *
     * @return string|null
     */
    public function getIPSecProtocol()
    {
        return $this->get("IPSecProtocol");
    }

    /**
     * IPSecProtocol: 使用的安全协议，ESP或AH
     *
     * @param string $ipSecProtocol
     */
    public function setIPSecProtocol($ipSecProtocol)
    {
        $this->set("IPSecProtocol", $ipSecProtocol);
    }

    /**
     * IPSecLocalSubnetIds: 指定VPN连接的本地子网的id，用逗号分隔
     *
     * @return string[]|null
     */
    public function getIPSecLocalSubnetIds()
    {
        return $this->get("IPSecLocalSubnetIds");
    }

    /**
     * IPSecLocalSubnetIds: 指定VPN连接的本地子网的id，用逗号分隔
     *
     * @param string[] $ipSecLocalSubnetIds
     */
    public function setIPSecLocalSubnetIds(array $ipSecLocalSubnetIds)
    {
        $this->set("IPSecLocalSubnetIds", $ipSecLocalSubnetIds);
    }

    /**
     * IPSecRemoteSubnets: 指定VPN连接的客户网段，用逗号分隔
     *
     * @return string[]|null
     */
    public function getIPSecRemoteSubnets()
    {
        return $this->get("IPSecRemoteSubnets");
    }

    /**
     * IPSecRemoteSubnets: 指定VPN连接的客户网段，用逗号分隔
     *
     * @param string[] $ipSecRemoteSubnets
     */
    public function setIPSecRemoteSubnets(array $ipSecRemoteSubnets)
    {
        $this->set("IPSecRemoteSubnets", $ipSecRemoteSubnets);
    }

    /**
     * IPSecEncryptionAlgorithm: IPSec隧道中使用的加密算法
     *
     * @return string|null
     */
    public function getIPSecEncryptionAlgorithm()
    {
        return $this->get("IPSecEncryptionAlgorithm");
    }

    /**
     * IPSecEncryptionAlgorithm: IPSec隧道中使用的加密算法
     *
     * @param string $ipSecEncryptionAlgorithm
     */
    public function setIPSecEncryptionAlgorithm($ipSecEncryptionAlgorithm)
    {
        $this->set("IPSecEncryptionAlgorithm", $ipSecEncryptionAlgorithm);
    }

    /**
     * IPSecAuthenticationAlgorithm: IPSec隧道中使用的认证算法
     *
     * @return string|null
     */
    public function getIPSecAuthenticationAlgorithm()
    {
        return $this->get("IPSecAuthenticationAlgorithm");
    }

    /**
     * IPSecAuthenticationAlgorithm: IPSec隧道中使用的认证算法
     *
     * @param string $ipSecAuthenticationAlgorithm
     */
    public function setIPSecAuthenticationAlgorithm($ipSecAuthenticationAlgorithm)
    {
        $this->set("IPSecAuthenticationAlgorithm", $ipSecAuthenticationAlgorithm);
    }

    /**
     * IPSecSALifetime: IPSec中SA的生存时间
     *
     * @return string|null
     */
    public function getIPSecSALifetime()
    {
        return $this->get("IPSecSALifetime");
    }

    /**
     * IPSecSALifetime: IPSec中SA的生存时间
     *
     * @param string $ipSecSALifetime
     */
    public function setIPSecSALifetime($ipSecSALifetime)
    {
        $this->set("IPSecSALifetime", $ipSecSALifetime);
    }

    /**
     * IPSecSALifetimeBytes: IPSec中SA的生存时间（以字节计）
     *
     * @return string|null
     */
    public function getIPSecSALifetimeBytes()
    {
        return $this->get("IPSecSALifetimeBytes");
    }

    /**
     * IPSecSALifetimeBytes: IPSec中SA的生存时间（以字节计）
     *
     * @param string $ipSecSALifetimeBytes
     */
    public function setIPSecSALifetimeBytes($ipSecSALifetimeBytes)
    {
        $this->set("IPSecSALifetimeBytes", $ipSecSALifetimeBytes);
    }

    /**
     * IPSecPFSDhGroup: IPSec中的PFS是否开启
     *
     * @return string|null
     */
    public function getIPSecPFSDhGroup()
    {
        return $this->get("IPSecPFSDhGroup");
    }

    /**
     * IPSecPFSDhGroup: IPSec中的PFS是否开启
     *
     * @param string $ipSecPFSDhGroup
     */
    public function setIPSecPFSDhGroup($ipSecPFSDhGroup)
    {
        $this->set("IPSecPFSDhGroup", $ipSecPFSDhGroup);
    }

    /**
     * IKEVersion: 枚举值："IKE V1","IKE V2"
     *
     * @return string|null
     */
    public function getIKEVersion()
    {
        return $this->get("IKEVersion");
    }

    /**
     * IKEVersion: 枚举值："IKE V1","IKE V2"
     *
     * @param string $ikeVersion
     */
    public function setIKEVersion($ikeVersion)
    {
        $this->set("IKEVersion", $ikeVersion);
    }

    /**
     * IPSecCloseAction: IPSec隧道关闭后的处理动作，默认与原本一致，若原本为空，必传。枚举值：“none”,不处理（推荐为none，流量会自动触发隧道重建）；“restart”重建
     *
     * @return string|null
     */
    public function getIPSecCloseAction()
    {
        return $this->get("IPSecCloseAction");
    }

    /**
     * IPSecCloseAction: IPSec隧道关闭后的处理动作，默认与原本一致，若原本为空，必传。枚举值：“none”,不处理（推荐为none，流量会自动触发隧道重建）；“restart”重建
     *
     * @param string $ipSecCloseAction
     */
    public function setIPSecCloseAction($ipSecCloseAction)
    {
        $this->set("IPSecCloseAction", $ipSecCloseAction);
    }


}
