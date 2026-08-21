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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class ResourceSummary extends Response
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
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目id
     *
     * @return integer|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目id
     *
     * @param int $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ResourceExtendAttrList: 资源扩展属性列表
     *
     * @return ResourceMonitorItem[]|null
     */
    public function getResourceExtendAttrList()
    {
        $items = $this->get("ResourceExtendAttrList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceMonitorItem($item));
        }
        return $result;
    }

    /**
     * ResourceExtendAttrList: 资源扩展属性列表
     *
     * @param ResourceMonitorItem[] $resourceExtendAttrList
     */
    public function setResourceExtendAttrList(array $resourceExtendAttrList)
    {
        $result = [];
        foreach ($resourceExtendAttrList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * LabelAttrList: 资源标签属性列表
     *
     * @return ResourceMonitorItem[]|null
     */
    public function getLabelAttrList()
    {
        $items = $this->get("LabelAttrList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceMonitorItem($item));
        }
        return $result;
    }

    /**
     * LabelAttrList: 资源标签属性列表
     *
     * @param ResourceMonitorItem[] $labelAttrList
     */
    public function setLabelAttrList(array $labelAttrList)
    {
        $result = [];
        foreach ($labelAttrList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CompanyId: 公司id
     *
     * @return integer|null
     */
    public function getCompanyId()
    {
        return $this->get("CompanyId");
    }

    /**
     * CompanyId: 公司id
     *
     * @param int $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->set("CompanyId", $companyId);
    }

    /**
     * ResourceId: 资源id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
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
     * RegionCN: 地域中文名
     *
     * @return string|null
     */
    public function getRegionCN()
    {
        return $this->get("RegionCN");
    }

    /**
     * RegionCN: 地域中文名
     *
     * @param string $regionCN
     */
    public function setRegionCN($regionCN)
    {
        $this->set("RegionCN", $regionCN);
    }

    /**
     * ZoneCN: 可用区中文
     *
     * @return string|null
     */
    public function getZoneCN()
    {
        return $this->get("ZoneCN");
    }

    /**
     * ZoneCN: 可用区中文
     *
     * @param string $zoneCN
     */
    public function setZoneCN($zoneCN)
    {
        $this->set("ZoneCN", $zoneCN);
    }

    /**
     * ProductKey: 产品类型
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 产品类型
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }

    /**
     * OrganizationId: 项目id
     *
     * @return integer|null
     */
    public function getOrganizationId()
    {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: 项目id
     *
     * @param int $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->set("OrganizationId", $organizationId);
    }

    /**
     * Status: 资源状态
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 资源状态
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * MonitorAttr: 资源的各项指标当前值列表
     *
     * @return ResourceMonitorItem[]|null
     */
    public function getMonitorAttr()
    {
        $items = $this->get("MonitorAttr");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceMonitorItem($item));
        }
        return $result;
    }

    /**
     * MonitorAttr: 资源的各项指标当前值列表
     *
     * @param ResourceMonitorItem[] $monitorAttr
     */
    public function setMonitorAttr(array $monitorAttr)
    {
        $result = [];
        foreach ($monitorAttr as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
