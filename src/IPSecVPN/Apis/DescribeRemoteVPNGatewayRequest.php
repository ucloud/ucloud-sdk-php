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
namespace UCloud\IPSecVPN\Apis;

use UCloud\Core\Request\Request;

class DescribeRemoteVPNGatewayRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeRemoteVPNGateway"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * RemoteVPNGatewayIds: 客户VPN网关的资源ID，例如RemoteVPNGatewayIds.0代表希望获取客户VPN网关1的信息，RemoteVPNGatewayIds.1代表客户VPN网关2，如果为空，则返回当前Region中所有客户VPN网关实例的信息
     *
     * @return string[]|null
     */
    public function getRemoteVPNGatewayIds(): array {
        return $this->get("RemoteVPNGatewayIds");
    }

    /**
     * RemoteVPNGatewayIds: 客户VPN网关的资源ID，例如RemoteVPNGatewayIds.0代表希望获取客户VPN网关1的信息，RemoteVPNGatewayIds.1代表客户VPN网关2，如果为空，则返回当前Region中所有客户VPN网关实例的信息
     *
     * @param string[] $remoteVPNGatewayIds
     */
    public function setRemoteVPNGatewayIds(array $remoteVPNGatewayIds) {
        $this->set("RemoteVPNGatewayIds", $remoteVPNGatewayIds);
    }

    /**
     * Tag: 业务组名称，若指定则返回业务组下所有客户VPN网关信息
     *
     * @return string|null
     */
    public function getTag(): string {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称，若指定则返回业务组下所有客户VPN网关信息
     *
     * @param string $tag
     */
    public function setTag(string $tag) {
        $this->set("Tag", $tag);
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @return int|null
     */
    public function getOffset(): int {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset) {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 数据分页值, 默认为20
     *
     * @return int|null
     */
    public function getLimit(): int {
        return $this->get("Limit");
    }

    /**
     * Limit: 数据分页值, 默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit) {
        $this->set("Limit", $limit);
    }


}
