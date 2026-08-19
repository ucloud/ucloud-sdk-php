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
use UCloud\UWSC\Params\UpdateCETunnelParamIKEConf;
use UCloud\UWSC\Params\UpdateCETunnelParamIPSecConf;
use UCloud\UWSC\Params\UpdateCETunnelParamDPDConf;
use UCloud\UWSC\Params\UpdateCETunnelParamBGPConf;

class UpdateCETunnelRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateCETunnel"]);
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
     * VPNTunnelId: 资源ID
     *
     * @return string|null
     */
    public function getVPNTunnelId()
    {
        return $this->get("VPNTunnelId");
    }

    /**
     * VPNTunnelId: 资源ID
     *
     * @param string $vpnTunnelId
     */
    public function setVPNTunnelId($vpnTunnelId)
    {
        $this->set("VPNTunnelId", $vpnTunnelId);
    }

    /**
     * IKEConf:
     *
     * @return UpdateCETunnelParamIKEConf|null
     */
    public function getIKEConf()
    {
        return new UpdateCETunnelParamIKEConf($this->get("IKEConf"));
    }

    /**
     * IKEConf:
     *
     * @param UpdateCETunnelParamIKEConf $ikeConf
     */
    public function setIKEConf(array $ikeConf)
    {
        $this->set("IKEConf", $ikeConf->getAll());
    }

    /**
     * IPSecConf:
     *
     * @return UpdateCETunnelParamIPSecConf|null
     */
    public function getIPSecConf()
    {
        return new UpdateCETunnelParamIPSecConf($this->get("IPSecConf"));
    }

    /**
     * IPSecConf:
     *
     * @param UpdateCETunnelParamIPSecConf $ipSecConf
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
     * @return UpdateCETunnelParamDPDConf|null
     */
    public function getDPDConf()
    {
        return new UpdateCETunnelParamDPDConf($this->get("DPDConf"));
    }

    /**
     * DPDConf:
     *
     * @param UpdateCETunnelParamDPDConf $dpdConf
     */
    public function setDPDConf(array $dpdConf)
    {
        $this->set("DPDConf", $dpdConf->getAll());
    }

    /**
     * BGPConf:
     *
     * @return UpdateCETunnelParamBGPConf|null
     */
    public function getBGPConf()
    {
        return new UpdateCETunnelParamBGPConf($this->get("BGPConf"));
    }

    /**
     * BGPConf:
     *
     * @param UpdateCETunnelParamBGPConf $bgpConf
     */
    public function setBGPConf(array $bgpConf)
    {
        $this->set("BGPConf", $bgpConf->getAll());
    }
}
