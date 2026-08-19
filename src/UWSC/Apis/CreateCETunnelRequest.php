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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Request\Request;
use UCloud\UWSC\Params\CreateCETunnelParamIKEConf;
use UCloud\UWSC\Params\CreateCETunnelParamIPSecConf;
use UCloud\UWSC\Params\CreateCETunnelParamDPDConf;
use UCloud\UWSC\Params\CreateCETunnelParamBGPConf;

class CreateCETunnelRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateCETunnel"]);
        $this->markRequired("VPNId");
        $this->markRequired("CloseAction");
        $this->markRequired("Mode");
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
     * VPNId: 所属CE网关资源ID
     *
     * @return string|null
     */
    public function getVPNId()
    {
        return $this->get("VPNId");
    }

    /**
     * VPNId: 所属CE网关资源ID
     *
     * @param string $vpnId
     */
    public function setVPNId($vpnId)
    {
        $this->set("VPNId", $vpnId);
    }

    /**
     * IKEConf:
     *
     * @return CreateCETunnelParamIKEConf|null
     */
    public function getIKEConf()
    {
        return new CreateCETunnelParamIKEConf($this->get("IKEConf"));
    }

    /**
     * IKEConf:
     *
     * @param CreateCETunnelParamIKEConf $ikeConf
     */
    public function setIKEConf(array $ikeConf)
    {
        $this->set("IKEConf", $ikeConf->getAll());
    }

    /**
     * IPSecConf:
     *
     * @return CreateCETunnelParamIPSecConf|null
     */
    public function getIPSecConf()
    {
        return new CreateCETunnelParamIPSecConf($this->get("IPSecConf"));
    }

    /**
     * IPSecConf:
     *
     * @param CreateCETunnelParamIPSecConf $ipSecConf
     */
    public function setIPSecConf(array $ipSecConf)
    {
        $this->set("IPSecConf", $ipSecConf->getAll());
    }

    /**
     * CloseAction: IPSec 关闭后动作，枚举值：restart、trap、none
     *
     * @return string|null
     */
    public function getCloseAction()
    {
        return $this->get("CloseAction");
    }

    /**
     * CloseAction: IPSec 关闭后动作，枚举值：restart、trap、none
     *
     * @param string $closeAction
     */
    public function setCloseAction($closeAction)
    {
        $this->set("CloseAction", $closeAction);
    }

    /**
     * DPDConf:
     *
     * @return CreateCETunnelParamDPDConf|null
     */
    public function getDPDConf()
    {
        return new CreateCETunnelParamDPDConf($this->get("DPDConf"));
    }

    /**
     * DPDConf:
     *
     * @param CreateCETunnelParamDPDConf $dpdConf
     */
    public function setDPDConf(array $dpdConf)
    {
        $this->set("DPDConf", $dpdConf->getAll());
    }

    /**
     * Mode: 路由模式，枚举值：感兴趣流(FLow) | BGP(BGP)
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->get("Mode");
    }

    /**
     * Mode: 路由模式，枚举值：感兴趣流(FLow) | BGP(BGP)
     *
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->set("Mode", $mode);
    }

    /**
     * BGPConf:
     *
     * @return CreateCETunnelParamBGPConf|null
     */
    public function getBGPConf()
    {
        return new CreateCETunnelParamBGPConf($this->get("BGPConf"));
    }

    /**
     * BGPConf:
     *
     * @param CreateCETunnelParamBGPConf $bgpConf
     */
    public function setBGPConf(array $bgpConf)
    {
        $this->set("BGPConf", $bgpConf->getAll());
    }

    /**
     * Name: 资源名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 资源名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
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
}
