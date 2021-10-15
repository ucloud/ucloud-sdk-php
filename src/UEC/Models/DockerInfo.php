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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class DockerInfo extends Response
{
    

    /**
     * CpuCores: CPU核数（/核）精度0.1核
     *
     * @return float|null
     */
    public function getCpuCores()
    {
        return $this->get("CpuCores");
    }

    /**
     * CpuCores: CPU核数（/核）精度0.1核
     *
     * @param float $cpuCores
     */
    public function setCpuCores($cpuCores)
    {
        $this->set("CpuCores", $cpuCores);
    }

    /**
     * MemSize: 内存大小（Gi）
     *
     * @return float|null
     */
    public function getMemSize()
    {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 内存大小（Gi）
     *
     * @param float $memSize
     */
    public function setMemSize($memSize)
    {
        $this->set("MemSize", $memSize);
    }

    /**
     * Name: 容器名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 容器名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * State: 容器状态，0：初始化；1：拉取镜像；2：拉取镜像失败；3：启动中；4：运行中；5：正在停止；6：已停止；7：已删除；8：镜像拉取成功；9：启动失败；99：异常
     *
     * @return integer|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 容器状态，0：初始化；1：拉取镜像；2：拉取镜像失败；3：启动中；4：运行中；5：正在停止；6：已停止；7：已删除；8：镜像拉取成功；9：启动失败；99：异常
     *
     * @param int $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * WorkDir: 工作目录
     *
     * @return string|null
     */
    public function getWorkDir()
    {
        return $this->get("WorkDir");
    }

    /**
     * WorkDir: 工作目录
     *
     * @param string $workDir
     */
    public function setWorkDir($workDir)
    {
        $this->set("WorkDir", $workDir);
    }

    /**
     * Command: 命令
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->get("Command");
    }

    /**
     * Command: 命令
     *
     * @param string $command
     */
    public function setCommand($command)
    {
        $this->set("Command", $command);
    }

    /**
     * Args: 参数
     *
     * @return string|null
     */
    public function getArgs()
    {
        return $this->get("Args");
    }

    /**
     * Args: 参数
     *
     * @param string $args
     */
    public function setArgs($args)
    {
        $this->set("Args", $args);
    }

    /**
     * EnvList: 环境变量（详情参考EnvList）
     *
     * @return EnvList[]|null
     */
    public function getEnvList()
    {
        $items = $this->get("EnvList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new EnvList($item));
        }
        return $result;
    }

    /**
     * EnvList: 环境变量（详情参考EnvList）
     *
     * @param EnvList[] $envList
     */
    public function setEnvList(array $envList)
    {
        $result = [];
        foreach ($envList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CfgDictList: 容器配置字典（详情参考CfgDictList）
     *
     * @return CfgDictList[]|null
     */
    public function getCfgDictList()
    {
        $items = $this->get("CfgDictList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CfgDictList($item));
        }
        return $result;
    }

    /**
     * CfgDictList: 容器配置字典（详情参考CfgDictList）
     *
     * @param CfgDictList[] $cfgDictList
     */
    public function setCfgDictList(array $cfgDictList)
    {
        $result = [];
        foreach ($cfgDictList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
