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
namespace UCloud\UDisk;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UDisk\Apis\AttachUDiskRequest;
use UCloud\UDisk\Apis\AttachUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\CloneUDiskRequest;
use UCloud\UDisk\Apis\CloneUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\CloneUDiskSnapshotRequest;
use UCloud\UDisk\Apis\CloneUDiskSnapshotResponse;
        
        
        
use UCloud\UDisk\Apis\CloneUDiskUDataArkRequest;
use UCloud\UDisk\Apis\CloneUDiskUDataArkResponse;
        
        
        
use UCloud\UDisk\Apis\CreateAttachUDiskRequest;
use UCloud\UDisk\Apis\CreateAttachUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\CreateUDiskRequest;
use UCloud\UDisk\Apis\CreateUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\CreateUDiskSnapshotRequest;
use UCloud\UDisk\Apis\CreateUDiskSnapshotResponse;
        
        
        
use UCloud\UDisk\Apis\DeleteUDiskRequest;
use UCloud\UDisk\Apis\DeleteUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\DeleteUDiskSnapshotRequest;
use UCloud\UDisk\Apis\DeleteUDiskSnapshotResponse;
        
        
        
use UCloud\UDisk\Apis\DescribeRecycleUDiskRequest;
use UCloud\UDisk\Apis\DescribeRecycleUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\DescribeUDiskRequest;
use UCloud\UDisk\Apis\DescribeUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\DescribeUDiskPriceRequest;
use UCloud\UDisk\Apis\DescribeUDiskPriceResponse;
        
        
        
use UCloud\UDisk\Apis\DescribeUDiskSnapshotRequest;
use UCloud\UDisk\Apis\DescribeUDiskSnapshotResponse;
        
        
        
use UCloud\UDisk\Apis\DescribeUDiskUpgradePriceRequest;
use UCloud\UDisk\Apis\DescribeUDiskUpgradePriceResponse;
        
        
        
use UCloud\UDisk\Apis\DetachUDiskRequest;
use UCloud\UDisk\Apis\DetachUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\RecoverUDiskRequest;
use UCloud\UDisk\Apis\RecoverUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\RenameUDiskRequest;
use UCloud\UDisk\Apis\RenameUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\ResizeUDiskRequest;
use UCloud\UDisk\Apis\ResizeUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\RestoreUDiskRequest;
use UCloud\UDisk\Apis\RestoreUDiskResponse;
        
        
        
use UCloud\UDisk\Apis\SetUDiskUDataArkModeRequest;
use UCloud\UDisk\Apis\SetUDiskUDataArkModeResponse;

/**
 * This client is used to call actions of **UDisk** service
 */
class UDiskClient extends Client
{
        
        
        
        
    /**
     * AttachUDisk - 将一个可用的UDisk挂载到某台主机上，当UDisk挂载成功后，还需要在主机内部进行文件系统操作
     *
     * @throws UCloudException
     */
    public function attachUDisk(AttachUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AttachUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CloneUDisk - 从UDisk创建UDisk克隆
     *
     * @throws UCloudException
     */
    public function cloneUDisk(CloneUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CloneUDiskSnapshot - 从快照创建UDisk克隆
     *
     * @throws UCloudException
     */
    public function cloneUDiskSnapshot(CloneUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CloneUDiskUDataArk - 从数据方舟的备份创建UDisk
     *
     * @throws UCloudException
     */
    public function cloneUDiskUDataArk(CloneUDiskUDataArkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneUDiskUDataArkResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateAttachUDisk - 创建并挂载UDisk磁盘
     *
     * @throws UCloudException
     */
    public function createAttachUDisk(CreateAttachUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateAttachUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDisk - 创建UDisk磁盘
     *
     * @throws UCloudException
     */
    public function createUDisk(CreateUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDiskSnapshot - 创建snapshot快照
     *
     * @throws UCloudException
     */
    public function createUDiskSnapshot(CreateUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUDisk - 删除UDisk
     *
     * @throws UCloudException
     */
    public function deleteUDisk(DeleteUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUDiskSnapshot - 删除Snapshot
     *
     * @throws UCloudException
     */
    public function deleteUDiskSnapshot(DeleteUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeRecycleUDisk - 拉取回收站中云硬盘列表
     *
     * @throws UCloudException
     */
    public function describeRecycleUDisk(DescribeRecycleUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeRecycleUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDisk - 获取UDisk实例
     *
     * @throws UCloudException
     */
    public function describeUDisk(DescribeUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDiskPrice - 获取UDisk实例价格信息
     *
     * @throws UCloudException
     */
    public function describeUDiskPrice(DescribeUDiskPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDiskSnapshot - 获取UDisk快照
     *
     * @throws UCloudException
     */
    public function describeUDiskSnapshot(DescribeUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDiskUpgradePrice - 获取UDisk升级价格信息
     *
     * @throws UCloudException
     */
    public function describeUDiskUpgradePrice(DescribeUDiskUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DetachUDisk - 卸载某个已经挂载在指定UHost实例上的UDisk
     *
     * @throws UCloudException
     */
    public function detachUDisk(DetachUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DetachUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RecoverUDisk - 从回收站中恢复云硬盘
     *
     * @throws UCloudException
     */
    public function recoverUDisk(RecoverUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RecoverUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RenameUDisk - 重命名UDisk
     *
     * @throws UCloudException
     */
    public function renameUDisk(RenameUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RenameUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeUDisk - 调整UDisk容量
     *
     * @throws UCloudException
     */
    public function resizeUDisk(ResizeUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestoreUDisk - 从备份恢复数据至UDisk
     *
     * @throws UCloudException
     */
    public function restoreUDisk(RestoreUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestoreUDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SetUDiskUDataArkMode - 设置UDisk数据方舟的状态
     *
     * @throws UCloudException
     */
    public function setUDiskUDataArkMode(SetUDiskUDataArkModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetUDiskUDataArkModeResponse($resp->toArray(), $resp->getRequestId());
    }
}
