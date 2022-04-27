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
namespace UCloud\UAccount;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UAccount\Apis\AddMemberToProjectRequest;
use UCloud\UAccount\Apis\AddMemberToProjectResponse;
        
        
        
use UCloud\UAccount\Apis\FreezeMemberRequest;
use UCloud\UAccount\Apis\FreezeMemberResponse;
        
        
        
use UCloud\UAccount\Apis\GetNetworkMaskRequest;
use UCloud\UAccount\Apis\GetNetworkMaskResponse;
        
        
        
use UCloud\UAccount\Apis\GetProjectListRequest;
use UCloud\UAccount\Apis\GetProjectListResponse;
        
        
        
use UCloud\UAccount\Apis\GetRegionRequest;
use UCloud\UAccount\Apis\GetRegionResponse;
        
        
        
use UCloud\UAccount\Apis\InviteSubaccountRequest;
use UCloud\UAccount\Apis\InviteSubaccountResponse;
        
        
        
use UCloud\UAccount\Apis\RemoveMemberFromProjectRequest;
use UCloud\UAccount\Apis\RemoveMemberFromProjectResponse;
        
        
        
use UCloud\UAccount\Apis\SetNetworkMaskRequest;
use UCloud\UAccount\Apis\SetNetworkMaskResponse;

/**
 * This client is used to call actions of **UAccount** service
 */
class UAccountClient extends Client
{
        
        
        
        
    /**
     * AddMemberToProject - 添加成员到项目
     *
     * @throws UCloudException
     */
    public function addMemberToProject(AddMemberToProjectRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddMemberToProjectResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * FreezeMember - 冻结成员
     *
     * @throws UCloudException
     */
    public function freezeMember(FreezeMemberRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new FreezeMemberResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetNetworkMask - 查询登录与API调用的网络掩码
     *
     * @throws UCloudException
     */
    public function getNetworkMask(GetNetworkMaskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetNetworkMaskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetProjectList - 获取项目列表
     *
     * @throws UCloudException
     */
    public function getProjectList(GetProjectListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetProjectListResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetRegion - 获取用户在各数据中心的权限等信息
     *
     * @throws UCloudException
     */
    public function getRegion(GetRegionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetRegionResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * InviteSubaccount - 邀请子帐号成员
     *
     * @throws UCloudException
     */
    public function inviteSubaccount(InviteSubaccountRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new InviteSubaccountResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RemoveMemberFromProject - 从项目中移除成员
     *
     * @throws UCloudException
     */
    public function removeMemberFromProject(RemoveMemberFromProjectRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveMemberFromProjectResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SetNetworkMask - 设置登录与API调用的网络掩码
     *
     * @throws UCloudException
     */
    public function setNetworkMask(SetNetworkMaskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetNetworkMaskResponse($resp->toArray(), $resp->getRequestId());
    }
}
