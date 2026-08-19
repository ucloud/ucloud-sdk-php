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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class VPNTunnelInfo extends Response
{
    

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * VPNId: CE 网关 ID
     *
     * @return string|null
     */
    public function getVPNId()
    {
        return $this->get("VPNId");
    }

    /**
     * VPNId: CE 网关 ID
     *
     * @param string $vpnId
     */
    public function setVPNId($vpnId)
    {
        $this->set("VPNId", $vpnId);
    }

    /**
     * VPNTunnelId: 隧道 ID
     *
     * @return string|null
     */
    public function getVPNTunnelId()
    {
        return $this->get("VPNTunnelId");
    }

    /**
     * VPNTunnelId: 隧道 ID
     *
     * @param string $vpnTunnelId
     */
    public function setVPNTunnelId($vpnTunnelId)
    {
        $this->set("VPNTunnelId", $vpnTunnelId);
    }

    /**
     * Name: 隧道名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 隧道名称
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
     * IKEConf: IKE 配置信息
     *
     * @return IKEConf|null
     */
    public function getIKEConf()
    {
        return new IKEConf($this->get("IKEConf"));
    }

    /**
     * IKEConf: IKE 配置信息
     *
     * @param IKEConf $ikeConf
     */
    public function setIKEConf(array $ikeConf)
    {
        $this->set("IKEConf", $ikeConf->getAll());
    }

    /**
     * IPSecConf: IPSec 配置信息
     *
     * @return IPSecConf|null
     */
    public function getIPSecConf()
    {
        return new IPSecConf($this->get("IPSecConf"));
    }

    /**
     * IPSecConf: IPSec 配置信息
     *
     * @param IPSecConf $ipSecConf
     */
    public function setIPSecConf(array $ipSecConf)
    {
        $this->set("IPSecConf", $ipSecConf->getAll());
    }

    /**
     * CloseAction: 隧道关闭后动作
     *
     * @return string|null
     */
    public function getCloseAction()
    {
        return $this->get("CloseAction");
    }

    /**
     * CloseAction: 隧道关闭后动作
     *
     * @param string $closeAction
     */
    public function setCloseAction($closeAction)
    {
        $this->set("CloseAction", $closeAction);
    }

    /**
     * BGPConf: BGP 配置信息
     *
     * @return BGPConf|null
     */
    public function getBGPConf()
    {
        return new BGPConf($this->get("BGPConf"));
    }

    /**
     * BGPConf: BGP 配置信息
     *
     * @param BGPConf $bgpConf
     */
    public function setBGPConf(array $bgpConf)
    {
        $this->set("BGPConf", $bgpConf->getAll());
    }

    /**
     * Mode: 路由模式
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->get("Mode");
    }

    /**
     * Mode: 路由模式
     *
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->set("Mode", $mode);
    }

    /**
     * DPDConf: DPD 配置信息
     *
     * @return DPDConf|null
     */
    public function getDPDConf()
    {
        return new DPDConf($this->get("DPDConf"));
    }

    /**
     * DPDConf: DPD 配置信息
     *
     * @param DPDConf $dpdConf
     */
    public function setDPDConf(array $dpdConf)
    {
        $this->set("DPDConf", $dpdConf->getAll());
    }

    /**
     * StartAction: 隧道协商动作
     *
     * @return string|null
     */
    public function getStartAction()
    {
        return $this->get("StartAction");
    }

    /**
     * StartAction: 隧道协商动作
     *
     * @param string $startAction
     */
    public function setStartAction($startAction)
    {
        $this->set("StartAction", $startAction);
    }
}
