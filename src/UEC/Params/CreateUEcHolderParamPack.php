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
namespace UCloud\UEC\Params;

use UCloud\Core\Request\Request;

class CreateUEcHolderParamPack extends Request {
    

    /**
     * Name: 容器名称
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 容器名称
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * CpuCore: 容器Cpu核数
     *
     * @return float|null
     */
    public function getCpuCore(): float {
        return $this->get("CpuCore");
    }

    /**
     * CpuCore: 容器Cpu核数
     *
     * @param float $cpuCore
     */
    public function setCpuCore(float $cpuCore) {
        $this->set("CpuCore", $cpuCore);
    }

    /**
     * MemSize: 容器内存，单位MB
     *
     * @return int|null
     */
    public function getMemSize(): int {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 容器内存，单位MB
     *
     * @param int $memSize
     */
    public function setMemSize(int $memSize) {
        $this->set("MemSize", $memSize);
    }

    /**
     * ImageName: 容器镜像名称
     *
     * @return string|null
     */
    public function getImageName(): string {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 容器镜像名称
     *
     * @param string $imageName
     */
    public function setImageName(string $imageName) {
        $this->set("ImageName", $imageName);
    }

    /**
     * WorkDir: 容器工作目录
     *
     * @return string|null
     */
    public function getWorkDir(): string {
        return $this->get("WorkDir");
    }

    /**
     * WorkDir: 容器工作目录
     *
     * @param string $workDir
     */
    public function setWorkDir(string $workDir) {
        $this->set("WorkDir", $workDir);
    }

    /**
     * Cmd: 开启容器的命令
     *
     * @return string|null
     */
    public function getCmd(): string {
        return $this->get("Cmd");
    }

    /**
     * Cmd: 开启容器的命令
     *
     * @param string $cmd
     */
    public function setCmd(string $cmd) {
        $this->set("Cmd", $cmd);
    }

    /**
     * Args: 容器参数（多个用；隔开）
     *
     * @return string|null
     */
    public function getArgs(): string {
        return $this->get("Args");
    }

    /**
     * Args: 容器参数（多个用；隔开）
     *
     * @param string $args
     */
    public function setArgs(string $args) {
        $this->set("Args", $args);
    }

    /**
     * Environment: 容器环境变量（多个用；隔开,如：key1:value1;key2:value2）
     *
     * @return string|null
     */
    public function getEnvironment(): string {
        return $this->get("Environment");
    }

    /**
     * Environment: 容器环境变量（多个用；隔开,如：key1:value1;key2:value2）
     *
     * @param string $environment
     */
    public function setEnvironment(string $environment) {
        $this->set("Environment", $environment);
    }

    /**
     * ConfigDict: 容器配置字典（多个用；隔开，如：/data1:resId1;/data2:resId2）
     *
     * @return string|null
     */
    public function getConfigDict(): string {
        return $this->get("ConfigDict");
    }

    /**
     * ConfigDict: 容器配置字典（多个用；隔开，如：/data1:resId1;/data2:resId2）
     *
     * @param string $configDict
     */
    public function setConfigDict(string $configDict) {
        $this->set("ConfigDict", $configDict);
    }


}
