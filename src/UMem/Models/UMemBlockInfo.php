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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class UMemBlockInfo extends Response
{
    

    /**
     * BlockId: 分片id
     *
     * @return string|null
     */
    public function getBlockId()
    {
        return $this->get("BlockId");
    }

    /**
     * BlockId: 分片id
     *
     * @param string $blockId
     */
    public function setBlockId($blockId)
    {
        $this->set("BlockId", $blockId);
    }

    /**
     * BlockPort: 分片端口
     *
     * @return integer|null
     */
    public function getBlockPort()
    {
        return $this->get("BlockPort");
    }

    /**
     * BlockPort: 分片端口
     *
     * @param int $blockPort
     */
    public function setBlockPort($blockPort)
    {
        $this->set("BlockPort", $blockPort);
    }

    /**
     * BlockSize: 容量单位GB
     *
     * @return integer|null
     */
    public function getBlockSize()
    {
        return $this->get("BlockSize");
    }

    /**
     * BlockSize: 容量单位GB
     *
     * @param int $blockSize
     */
    public function setBlockSize($blockSize)
    {
        $this->set("BlockSize", $blockSize);
    }

    /**
     * BlockState: 实例状态 Starting // 创建中 Creating // 初始化中 CreateFail // 创建失败 Fail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败Restarting // 重启中 SetPasswordFail //设置密码失败
     *
     * @return string|null
     */
    public function getBlockState()
    {
        return $this->get("BlockState");
    }

    /**
     * BlockState: 实例状态 Starting // 创建中 Creating // 初始化中 CreateFail // 创建失败 Fail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败Restarting // 重启中 SetPasswordFail //设置密码失败
     *
     * @param string $blockState
     */
    public function setBlockState($blockState)
    {
        $this->set("BlockState", $blockState);
    }

    /**
     * BlockSlotBegin: 分片维护的键槽起始值
     *
     * @return integer|null
     */
    public function getBlockSlotBegin()
    {
        return $this->get("BlockSlotBegin");
    }

    /**
     * BlockSlotBegin: 分片维护的键槽起始值
     *
     * @param int $blockSlotBegin
     */
    public function setBlockSlotBegin($blockSlotBegin)
    {
        $this->set("BlockSlotBegin", $blockSlotBegin);
    }

    /**
     * BlockSlotEnd: 分片维护的键槽结束值
     *
     * @return integer|null
     */
    public function getBlockSlotEnd()
    {
        return $this->get("BlockSlotEnd");
    }

    /**
     * BlockSlotEnd: 分片维护的键槽结束值
     *
     * @param int $blockSlotEnd
     */
    public function setBlockSlotEnd($blockSlotEnd)
    {
        $this->set("BlockSlotEnd", $blockSlotEnd);
    }

    /**
     * BlockVip: 分片ip
     *
     * @return string|null
     */
    public function getBlockVip()
    {
        return $this->get("BlockVip");
    }

    /**
     * BlockVip: 分片ip
     *
     * @param string $blockVip
     */
    public function setBlockVip($blockVip)
    {
        $this->set("BlockVip", $blockVip);
    }

    /**
     * BlockUsedSize: 使用量单位MB
     *
     * @return integer|null
     */
    public function getBlockUsedSize()
    {
        return $this->get("BlockUsedSize");
    }

    /**
     * BlockUsedSize: 使用量单位MB
     *
     * @param int $blockUsedSize
     */
    public function setBlockUsedSize($blockUsedSize)
    {
        $this->set("BlockUsedSize", $blockUsedSize);
    }
}
