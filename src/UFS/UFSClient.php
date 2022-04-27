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
namespace UCloud\UFS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UFS\Apis\AddUFSVolumeMountPointRequest;
use UCloud\UFS\Apis\AddUFSVolumeMountPointResponse;
        
        
        
use UCloud\UFS\Apis\CreateUFSVolumeRequest;
use UCloud\UFS\Apis\CreateUFSVolumeResponse;
        
        
        
use UCloud\UFS\Apis\DescribeUFSVolume2Request;
use UCloud\UFS\Apis\DescribeUFSVolume2Response;
        
        
        
use UCloud\UFS\Apis\DescribeUFSVolumeMountpointRequest;
use UCloud\UFS\Apis\DescribeUFSVolumeMountpointResponse;
        
        
        
use UCloud\UFS\Apis\DescribeUFSVolumePriceRequest;
use UCloud\UFS\Apis\DescribeUFSVolumePriceResponse;
        
        
        
use UCloud\UFS\Apis\ExtendUFSVolumeRequest;
use UCloud\UFS\Apis\ExtendUFSVolumeResponse;
        
        
        
use UCloud\UFS\Apis\RemoveUFSVolumeRequest;
use UCloud\UFS\Apis\RemoveUFSVolumeResponse;
        
        
        
use UCloud\UFS\Apis\RemoveUFSVolumeMountPointRequest;
use UCloud\UFS\Apis\RemoveUFSVolumeMountPointResponse;
        
        
        
use UCloud\UFS\Apis\UpdateUFSVolumeInfoRequest;
use UCloud\UFS\Apis\UpdateUFSVolumeInfoResponse;

/**
 * This client is used to call actions of **UFS** service
 */
class UFSClient extends Client
{
        
        
        
        
    /**
     * AddUFSVolumeMountPoint - 添加文件系统挂载点
     *
     * @throws UCloudException
     */
    public function addUFSVolumeMountPoint(AddUFSVolumeMountPointRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUFSVolumeMountPointResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUFSVolume - 创建文件系统
     *
     * @throws UCloudException
     */
    public function createUFSVolume(CreateUFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUFSVolume2 - 获取文件系统列表
     *
     * @throws UCloudException
     */
    public function describeUFSVolume2(DescribeUFSVolume2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFSVolume2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUFSVolumeMountpoint - 获取文件系统挂载点信息
     *
     * @throws UCloudException
     */
    public function describeUFSVolumeMountpoint(DescribeUFSVolumeMountpointRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFSVolumeMountpointResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUFSVolumePrice - 获取文件系统价格
     *
     * @throws UCloudException
     */
    public function describeUFSVolumePrice(DescribeUFSVolumePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFSVolumePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ExtendUFSVolume - 文件系统扩容
     *
     * @throws UCloudException
     */
    public function extendUFSVolume(ExtendUFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ExtendUFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RemoveUFSVolume - 删除UFS文件系统
     *
     * @throws UCloudException
     */
    public function removeUFSVolume(RemoveUFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RemoveUFSVolumeMountPoint - 删除文件系统挂载点
     *
     * @throws UCloudException
     */
    public function removeUFSVolumeMountPoint(RemoveUFSVolumeMountPointRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUFSVolumeMountPointResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUFSVolumeInfo - 更改文件系统相关信息（名称／备注）
     *
     * @throws UCloudException
     */
    public function updateUFSVolumeInfo(UpdateUFSVolumeInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFSVolumeInfoResponse($resp->toArray(), $resp->getRequestId());
    }
}
