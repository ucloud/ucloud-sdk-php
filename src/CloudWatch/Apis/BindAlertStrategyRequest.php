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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Request\Request;

class BindAlertStrategyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "BindAlertStrategy"]);
        $this->markRequired("ProjectId");
        $this->markRequired("AlertStrategyIDs");
        $this->markRequired("Resources");
        $this->markRequired("ProductKey");
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
     * AlertStrategyIDs: 告警策略id数组
     *
     * @return int[]|null
     */
    public function getAlertStrategyIDs()
    {
        return $this->get("AlertStrategyIDs");
    }

    /**
     * AlertStrategyIDs: 告警策略id数组
     *
     * @param int[] $alertStrategyIDs
     */
    public function setAlertStrategyIDs(array $alertStrategyIDs)
    {
        $this->set("AlertStrategyIDs", $alertStrategyIDs);
    }

    /**
     * Resources: 资源数组
     *
     * @return string[]|null
     */
    public function getResources()
    {
        return $this->get("Resources");
    }

    /**
     * Resources: 资源数组
     *
     * @param string[] $resources
     */
    public function setResources(array $resources)
    {
        $this->set("Resources", $resources);
    }

    /**
     * ProductKey: 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }
}
