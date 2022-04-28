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

class CreateVPNTunnelRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateVPNTunnel"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("VPNTunnelName");
        $this->markRequired("VPNGatewayId");
        $this->markRequired("RemoteVPNGatewayId");
        $this->markRequired("IKEPreSharedKey");
        $this->markRequired("VPCId");
        $this->markRequired("IKEVersion");
        $this->markRequired("IPSecLocalSubnetIds");
        $this->markRequired("IPSecRemoteSubnets");
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
     * VPNTunnelName: VPN隧道名称
     *
     * @return string|null
     */
    public function getVPNTunnelName()
    {
        return $this->get("VPNTunnelName");
    }

    /**
     * VPNTunnelName: VPN隧道名称
     *
     * @param string $vpnTunnelName
     */
    public function setVPNTunnelName($vpnTunnelName)
    {
        $this->set("VPNTunnelName", $vpnTunnelName);
    }

    /**
     * VPNGatewayId: VPN网关的资源ID
     *
     * @return string|null
     */
    public function getVPNGatewayId()
    {
        return $this->get("VPNGatewayId");
    }

    /**
     * VPNGatewayId: VPN网关的资源ID
     *
     * @param string $vpnGatewayId
     */
    public function setVPNGatewayId($vpnGatewayId)
    {
        $this->set("VPNGatewayId", $vpnGatewayId);
    }

    /**
     * RemoteVPNGatewayId: 客户VPN网关的资源ID
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayId()
    {
        return $this->get("RemoteVPNGatewayId");
    }

    /**
     * RemoteVPNGatewayId: 客户VPN网关的资源ID
     *
     * @param string $remoteVPNGatewayId
     */
    public function setRemoteVPNGatewayId($remoteVPNGatewayId)
    {
        $this->set("RemoteVPNGatewayId", $remoteVPNGatewayId);
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
     * VPCId: vpcId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: vpcId
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * IKEVersion: ike版本，枚举值： "IKE V1"，"IKE V2"，默认v1
     *
     * @return string|null
     */
    public function getIKEVersion()
    {
        return $this->get("IKEVersion");
    }

    /**
     * IKEVersion: ike版本，枚举值： "IKE V1"，"IKE V2"，默认v1
     *
     * @param string $ikeVersion
     */
    public function setIKEVersion($ikeVersion)
    {
        $this->set("IKEVersion", $ikeVersion);
    }

    /**
     * IPSecLocalSubnetIds: 指定VPN连接的本地子网的资源ID，最多可填写10个。
     *
     * @return string[]|null
     */
    public function getIPSecLocalSubnetIds()
    {
        return $this->get("IPSecLocalSubnetIds");
    }

    /**
     * IPSecLocalSubnetIds: 指定VPN连接的本地子网的资源ID，最多可填写10个。
     *
     * @param string[] $ipSecLocalSubnetIds
     */
    public function setIPSecLocalSubnetIds(array $ipSecLocalSubnetIds)
    {
        $this->set("IPSecLocalSubnetIds", $ipSecLocalSubnetIds);
    }

    /**
     * IPSecRemoteSubnets: 指定VPN连接的客户网段，最多可填写20个。
     *
     * @return string[]|null
     */
    public function getIPSecRemoteSubnets()
    {
        return $this->get("IPSecRemoteSubnets");
    }

    /**
     * IPSecRemoteSubnets: 指定VPN连接的客户网段，最多可填写20个。
     *
     * @param string[] $ipSecRemoteSubnets
     */
    public function setIPSecRemoteSubnets(array $ipSecRemoteSubnets)
    {
        $this->set("IPSecRemoteSubnets", $ipSecRemoteSubnets);
    }

    /**
     * Tag: 业务组，默认为“Default”
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组，默认为“Default”
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注，默认为空
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注，默认为空
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * IKEEncryptionAlgorithm: IKE协商过程中使用的加密算法，枚举值，"aes128", "aes192", "aes256", "aes512", "3des"。默认值为“aes128”
     *
     * @return string|null
     */
    public function getIKEEncryptionAlgorithm()
    {
        return $this->get("IKEEncryptionAlgorithm");
    }

    /**
     * IKEEncryptionAlgorithm: IKE协商过程中使用的加密算法，枚举值，"aes128", "aes192", "aes256", "aes512", "3des"。默认值为“aes128”
     *
     * @param string $ikeEncryptionAlgorithm
     */
    public function setIKEEncryptionAlgorithm($ikeEncryptionAlgorithm)
    {
        $this->set("IKEEncryptionAlgorithm", $ikeEncryptionAlgorithm);
    }

    /**
     * IKEAuthenticationAlgorithm: IKE协商过程中使用的认证算法，"md5", "sha1", "sha2-256"。默认值为“sha1”
     *
     * @return string|null
     */
    public function getIKEAuthenticationAlgorithm()
    {
        return $this->get("IKEAuthenticationAlgorithm");
    }

    /**
     * IKEAuthenticationAlgorithm: IKE协商过程中使用的认证算法，"md5", "sha1", "sha2-256"。默认值为“sha1”
     *
     * @param string $ikeAuthenticationAlgorithm
     */
    public function setIKEAuthenticationAlgorithm($ikeAuthenticationAlgorithm)
    {
        $this->set("IKEAuthenticationAlgorithm", $ikeAuthenticationAlgorithm);
    }

    /**
     * IKEExchangeMode: IKE协商过程中使用的模式，枚举值，主模式，“main”；野蛮模式，“aggressive”。IKEV1默认为主模式“main”，IKEV2时不使用该参数。
     *
     * @return string|null
     */
    public function getIKEExchangeMode()
    {
        return $this->get("IKEExchangeMode");
    }

    /**
     * IKEExchangeMode: IKE协商过程中使用的模式，枚举值，主模式，“main”；野蛮模式，“aggressive”。IKEV1默认为主模式“main”，IKEV2时不使用该参数。
     *
     * @param string $ikeExchangeMode
     */
    public function setIKEExchangeMode($ikeExchangeMode)
    {
        $this->set("IKEExchangeMode", $ikeExchangeMode);
    }

    /**
     * IKELocalId: 本端标识。枚举值，自动识别，“auto”；IP地址或域名。默认为自动识别“auto”。IKEV2必填该参数
     *
     * @return string|null
     */
    public function getIKELocalId()
    {
        return $this->get("IKELocalId");
    }

    /**
     * IKELocalId: 本端标识。枚举值，自动识别，“auto”；IP地址或域名。默认为自动识别“auto”。IKEV2必填该参数
     *
     * @param string $ikeLocalId
     */
    public function setIKELocalId($ikeLocalId)
    {
        $this->set("IKELocalId", $ikeLocalId);
    }

    /**
     * IKERemoteId: 客户端标识。枚举值，自动识别，“auto”；IP地址或域名。默认为“自动识别“auto”。IKEV2必填该参数
     *
     * @return string|null
     */
    public function getIKERemoteId()
    {
        return $this->get("IKERemoteId");
    }

    /**
     * IKERemoteId: 客户端标识。枚举值，自动识别，“auto”；IP地址或域名。默认为“自动识别“auto”。IKEV2必填该参数
     *
     * @param string $ikeRemoteId
     */
    public function setIKERemoteId($ikeRemoteId)
    {
        $this->set("IKERemoteId", $ikeRemoteId);
    }

    /**
     * IKEDhGroup: IKE协商过程中使用的DH组，枚举值，"1", "2", "5", "14", "15", "16"。默认为“15”
     *
     * @return string|null
     */
    public function getIKEDhGroup()
    {
        return $this->get("IKEDhGroup");
    }

    /**
     * IKEDhGroup: IKE协商过程中使用的DH组，枚举值，"1", "2", "5", "14", "15", "16"。默认为“15”
     *
     * @param string $ikeDhGroup
     */
    public function setIKEDhGroup($ikeDhGroup)
    {
        $this->set("IKEDhGroup", $ikeDhGroup);
    }

    /**
     * IKESALifetime: IKE中SA的生存时间，可填写范围为600-604800。默认为86400。
     *
     * @return string|null
     */
    public function getIKESALifetime()
    {
        return $this->get("IKESALifetime");
    }

    /**
     * IKESALifetime: IKE中SA的生存时间，可填写范围为600-604800。默认为86400。
     *
     * @param string $ikesaLifetime
     */
    public function setIKESALifetime($ikesaLifetime)
    {
        $this->set("IKESALifetime", $ikesaLifetime);
    }

    /**
     * IPSecProtocol: 使用的安全协议，枚举值，“esp”，“ah”。默认为“esp”
     *
     * @return string|null
     */
    public function getIPSecProtocol()
    {
        return $this->get("IPSecProtocol");
    }

    /**
     * IPSecProtocol: 使用的安全协议，枚举值，“esp”，“ah”。默认为“esp”
     *
     * @param string $ipSecProtocol
     */
    public function setIPSecProtocol($ipSecProtocol)
    {
        $this->set("IPSecProtocol", $ipSecProtocol);
    }

    /**
     * IPSecEncryptionAlgorithm: IPSec隧道中使用的加密算法，枚举值，"aes128", "aes192", "aes256", "aes512", "3des"。默认值为“aes128”
     *
     * @return string|null
     */
    public function getIPSecEncryptionAlgorithm()
    {
        return $this->get("IPSecEncryptionAlgorithm");
    }

    /**
     * IPSecEncryptionAlgorithm: IPSec隧道中使用的加密算法，枚举值，"aes128", "aes192", "aes256", "aes512", "3des"。默认值为“aes128”
     *
     * @param string $ipSecEncryptionAlgorithm
     */
    public function setIPSecEncryptionAlgorithm($ipSecEncryptionAlgorithm)
    {
        $this->set("IPSecEncryptionAlgorithm", $ipSecEncryptionAlgorithm);
    }

    /**
     * IPSecAuthenticationAlgorithm: IPSec隧道中使用的认证算法，枚举值，"md5", "sha1","sha2-256"。默认值为“sha1”
     *
     * @return string|null
     */
    public function getIPSecAuthenticationAlgorithm()
    {
        return $this->get("IPSecAuthenticationAlgorithm");
    }

    /**
     * IPSecAuthenticationAlgorithm: IPSec隧道中使用的认证算法，枚举值，"md5", "sha1","sha2-256"。默认值为“sha1”
     *
     * @param string $ipSecAuthenticationAlgorithm
     */
    public function setIPSecAuthenticationAlgorithm($ipSecAuthenticationAlgorithm)
    {
        $this->set("IPSecAuthenticationAlgorithm", $ipSecAuthenticationAlgorithm);
    }

    /**
     * IPSecSALifetime: IPSec中SA的生存时间，可填写范围为1200 - 604800。默认为3600
     *
     * @return string|null
     */
    public function getIPSecSALifetime()
    {
        return $this->get("IPSecSALifetime");
    }

    /**
     * IPSecSALifetime: IPSec中SA的生存时间，可填写范围为1200 - 604800。默认为3600
     *
     * @param string $ipSecSALifetime
     */
    public function setIPSecSALifetime($ipSecSALifetime)
    {
        $this->set("IPSecSALifetime", $ipSecSALifetime);
    }

    /**
     * IPSecSALifetimeBytes: IPSec中SA的生存时间（以字节计）。可选为8000 – 20000000。默认使用SA生存时间，
     *
     * @return string|null
     */
    public function getIPSecSALifetimeBytes()
    {
        return $this->get("IPSecSALifetimeBytes");
    }

    /**
     * IPSecSALifetimeBytes: IPSec中SA的生存时间（以字节计）。可选为8000 – 20000000。默认使用SA生存时间，
     *
     * @param string $ipSecSALifetimeBytes
     */
    public function setIPSecSALifetimeBytes($ipSecSALifetimeBytes)
    {
        $this->set("IPSecSALifetimeBytes", $ipSecSALifetimeBytes);
    }

    /**
     * IPSecPFSDhGroup: IPSec的PFS是否开启，枚举值，，不开启，"disable"；数字表示DH组, "1", "2", "5", "14", "15", "16"。默认为“disable”。
     *
     * @return string|null
     */
    public function getIPSecPFSDhGroup()
    {
        return $this->get("IPSecPFSDhGroup");
    }

    /**
     * IPSecPFSDhGroup: IPSec的PFS是否开启，枚举值，，不开启，"disable"；数字表示DH组, "1", "2", "5", "14", "15", "16"。默认为“disable”。
     *
     * @param string $ipSecPFSDhGroup
     */
    public function setIPSecPFSDhGroup($ipSecPFSDhGroup)
    {
        $this->set("IPSecPFSDhGroup", $ipSecPFSDhGroup);
    }

    /**
     * IPSecCloseAction: IPSec隧道关闭后的处理动作，枚举值：“none”，流量触发；“restart”，自动重联，默认为none
     *
     * @return string|null
     */
    public function getIPSecCloseAction()
    {
        return $this->get("IPSecCloseAction");
    }

    /**
     * IPSecCloseAction: IPSec隧道关闭后的处理动作，枚举值：“none”，流量触发；“restart”，自动重联，默认为none
     *
     * @param string $ipSecCloseAction
     */
    public function setIPSecCloseAction($ipSecCloseAction)
    {
        $this->set("IPSecCloseAction", $ipSecCloseAction);
    }
}
