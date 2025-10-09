<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class UpdateSSLBindingRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateSSLBinding"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("OldSSLId");
        $this->markRequired("NewSSLId");
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
     * OldSSLId: 监听器实例绑定的旧的证书
     *
     * @return string|null
     */
    public function getOldSSLId()
    {
        return $this->get("OldSSLId");
    }

    /**
     * OldSSLId: 监听器实例绑定的旧的证书
     *
     * @param string $oldSSLId
     */
    public function setOldSSLId($oldSSLId)
    {
        $this->set("OldSSLId", $oldSSLId);
    }

    /**
     * NewSSLId: 监听器实例需要绑定的新的证书
     *
     * @return string|null
     */
    public function getNewSSLId()
    {
        return $this->get("NewSSLId");
    }

    /**
     * NewSSLId: 监听器实例需要绑定的新的证书
     *
     * @param string $newSSLId
     */
    public function setNewSSLId($newSSLId)
    {
        $this->set("NewSSLId", $newSSLId);
    }

    /**
     * LoadBalancerId: 所操作LB实例ID（仅LoadBalancerId传参时，将更换该LB所有原证书为OldSSLId的绑定关系；LoadBalancerId和ListenerId都不传参则将更新该项目下所有原证书为OldSSLId的绑定关系）（LB指CLB或ALB）
     *
     * @return string|null
     */
    public function getLoadBalancerId()
    {
        return $this->get("LoadBalancerId");
    }

    /**
     * LoadBalancerId: 所操作LB实例ID（仅LoadBalancerId传参时，将更换该LB所有原证书为OldSSLId的绑定关系；LoadBalancerId和ListenerId都不传参则将更新该项目下所有原证书为OldSSLId的绑定关系）（LB指CLB或ALB）
     *
     * @param string $loadBalancerId
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->set("LoadBalancerId", $loadBalancerId);
    }

    /**
     * ListenerId: 所操作监听器实例ID（仅ListenerId传参时，将更换该监听器所有原证书为OldSSLId的绑定关系；LoadBalancerId和ListenerId都不传参则将更新该项目下所有原证书为OldSSLId的绑定关系；若LoadBalancerId与ListenerId皆有传参，则会强校验ULB与Vsserver的所属关系，将更换该ulb下vserver所绑定的OldSSLId为NewSSLId）（监听器指VServer或Listener）
     *
     * @return string|null
     */
    public function getListenerId()
    {
        return $this->get("ListenerId");
    }

    /**
     * ListenerId: 所操作监听器实例ID（仅ListenerId传参时，将更换该监听器所有原证书为OldSSLId的绑定关系；LoadBalancerId和ListenerId都不传参则将更新该项目下所有原证书为OldSSLId的绑定关系；若LoadBalancerId与ListenerId皆有传参，则会强校验ULB与Vsserver的所属关系，将更换该ulb下vserver所绑定的OldSSLId为NewSSLId）（监听器指VServer或Listener）
     *
     * @param string $listenerId
     */
    public function setListenerId($listenerId)
    {
        $this->set("ListenerId", $listenerId);
    }
}
