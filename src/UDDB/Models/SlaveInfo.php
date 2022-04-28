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
namespace UCloud\UDDB\Models;

use UCloud\Core\Response\Response;

class SlaveInfo extends Response
{
    

    /**
     * Id: 只读实例ID
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 只读实例ID
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * DataNodeId: 对应数据节点的ID
     *
     * @return string|null
     */
    public function getDataNodeId()
    {
        return $this->get("DataNodeId");
    }

    /**
     * DataNodeId: 对应数据节点的ID
     *
     * @param string $dataNodeId
     */
    public function setDataNodeId($dataNodeId)
    {
        $this->set("DataNodeId", $dataNodeId);
    }

    /**
     * State: 只读实例状态, 状态列表如下: Init: 初始化中 Fail: 安装失败 Starting: 启动中 Running: 系统正常运行中 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 Upgrading: 系统升级中
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 只读实例状态, 状态列表如下: Init: 初始化中 Fail: 安装失败 Starting: 启动中 Running: 系统正常运行中 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 Upgrading: 系统升级中
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }
}
