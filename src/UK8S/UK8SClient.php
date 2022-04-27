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
namespace UCloud\UK8S;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UK8S\Apis\AddUK8SExistingUHostRequest;
use UCloud\UK8S\Apis\AddUK8SExistingUHostResponse;
        
        
        
use UCloud\UK8S\Apis\AddUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\AddUK8SNodeGroupResponse;
        
        
        
use UCloud\UK8S\Apis\AddUK8SPHostNodeRequest;
use UCloud\UK8S\Apis\AddUK8SPHostNodeResponse;
        
        
        
use UCloud\UK8S\Apis\AddUK8SUHostNodeRequest;
use UCloud\UK8S\Apis\AddUK8SUHostNodeResponse;
        
        
        
use UCloud\UK8S\Apis\CreateUK8SClusterV2Request;
use UCloud\UK8S\Apis\CreateUK8SClusterV2Response;
        
        
        
use UCloud\UK8S\Apis\DelUK8SClusterRequest;
use UCloud\UK8S\Apis\DelUK8SClusterResponse;
        
        
        
use UCloud\UK8S\Apis\DelUK8SClusterNodeV2Request;
use UCloud\UK8S\Apis\DelUK8SClusterNodeV2Response;
        
        
        
use UCloud\UK8S\Apis\DescribeUK8SClusterRequest;
use UCloud\UK8S\Apis\DescribeUK8SClusterResponse;
        
        
        
use UCloud\UK8S\Apis\DescribeUK8SImageRequest;
use UCloud\UK8S\Apis\DescribeUK8SImageResponse;
        
        
        
use UCloud\UK8S\Apis\DescribeUK8SNodeRequest;
use UCloud\UK8S\Apis\DescribeUK8SNodeResponse;
        
        
        
use UCloud\UK8S\Apis\ListUK8SClusterNodeV2Request;
use UCloud\UK8S\Apis\ListUK8SClusterNodeV2Response;
        
        
        
use UCloud\UK8S\Apis\ListUK8SClusterV2Request;
use UCloud\UK8S\Apis\ListUK8SClusterV2Response;
        
        
        
use UCloud\UK8S\Apis\ListUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\ListUK8SNodeGroupResponse;
        
        
        
use UCloud\UK8S\Apis\RemoveUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\RemoveUK8SNodeGroupResponse;

/**
 * This client is used to call actions of **UK8S** service
 */
class UK8SClient extends Client
{
        
        
        
        
    /**
     * AddUK8SExistingUHost - 将预先创建好的云主机加入到UK8S集群，需要注意的是，该云主机依然会执行重装系统的操作。
     *
     * @throws UCloudException
     */
    public function addUK8SExistingUHost(AddUK8SExistingUHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SExistingUHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AddUK8SNodeGroup - 添加UK8S节点池
     *
     * @throws UCloudException
     */
    public function addUK8SNodeGroup(AddUK8SNodeGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SNodeGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AddUK8SPHostNode - 为UK8S集群添加一台或多台物理云主机类型的节点。
     *
     * @throws UCloudException
     */
    public function addUK8SPHostNode(AddUK8SPHostNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SPHostNodeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AddUK8SUHostNode - 为UK8S集群添加一台Node节点，机型类型为云主机
     *
     * @throws UCloudException
     */
    public function addUK8SUHostNode(AddUK8SUHostNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SUHostNodeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUK8SClusterV2 - 创建UK8S集群
     *
     * @throws UCloudException
     */
    public function createUK8SClusterV2(CreateUK8SClusterV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUK8SClusterV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DelUK8SCluster - 删除UK8S集群
     *
     * @throws UCloudException
     */
    public function delUK8SCluster(DelUK8SClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DelUK8SClusterResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DelUK8SClusterNodeV2 - 删除集群中的Node节点，删除前务必先将其中的Pod驱逐。
     *
     * @throws UCloudException
     */
    public function delUK8SClusterNodeV2(DelUK8SClusterNodeV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DelUK8SClusterNodeV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUK8SCluster - 获取集群信息
     *
     * @throws UCloudException
     */
    public function describeUK8SCluster(DescribeUK8SClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUK8SClusterResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUK8SImage - 获取UK8S支持的Node节点操作系统，可基于该操作系统制定自定义镜像
     *
     * @throws UCloudException
     */
    public function describeUK8SImage(DescribeUK8SImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUK8SImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUK8SNode - 用于获取 UK8S 节点详情
     *
     * @throws UCloudException
     */
    public function describeUK8SNode(DescribeUK8SNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUK8SNodeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListUK8SClusterNodeV2 - 获取UK8S集群节点信息
     *
     * @throws UCloudException
     */
    public function listUK8SClusterNodeV2(ListUK8SClusterNodeV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SClusterNodeV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListUK8SClusterV2 - 获取UK8S集群列表信息
     *
     * @throws UCloudException
     */
    public function listUK8SClusterV2(ListUK8SClusterV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SClusterV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListUK8SNodeGroup - 列出UK8S节点池
     *
     * @throws UCloudException
     */
    public function listUK8SNodeGroup(ListUK8SNodeGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SNodeGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RemoveUK8SNodeGroup - 删除UK8S节点池
     *
     * @throws UCloudException
     */
    public function removeUK8SNodeGroup(RemoveUK8SNodeGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUK8SNodeGroupResponse($resp->toArray(), $resp->getRequestId());
    }
}
