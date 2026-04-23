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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class AppConfigVersion extends Response
{
    

    /**
     * ReleaseVersion: UHadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *
     * @return string|null
     */
    public function getReleaseVersion()
    {
        return $this->get("ReleaseVersion");
    }

    /**
     * ReleaseVersion: UHadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *
     * @param string $releaseVersion
     */
    public function setReleaseVersion($releaseVersion)
    {
        $this->set("ReleaseVersion", $releaseVersion);
    }

    /**
     * HadoopVersion: Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1 |hadoop2.8.5-udh2.2
     *
     * @return string|null
     */
    public function getHadoopVersion()
    {
        return $this->get("HadoopVersion");
    }

    /**
     * HadoopVersion: Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1 |hadoop2.8.5-udh2.2
     *
     * @param string $hadoopVersion
     */
    public function setHadoopVersion($hadoopVersion)
    {
        $this->set("HadoopVersion", $hadoopVersion);
    }

    /**
     * Framework: 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->get("Framework");
    }

    /**
     * Framework: 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *
     * @param string $framework
     */
    public function setFramework($framework)
    {
        $this->set("Framework", $framework);
    }

    /**
     * FrameworkVersion: 框架版本
     *
     * @return string|null
     */
    public function getFrameworkVersion()
    {
        return $this->get("FrameworkVersion");
    }

    /**
     * FrameworkVersion: 框架版本
     *
     * @param string $frameworkVersion
     */
    public function setFrameworkVersion($frameworkVersion)
    {
        $this->set("FrameworkVersion", $frameworkVersion);
    }

    /**
     * UseCases: 框架示例
     *
     * @return UseCases[]|null
     */
    public function getUseCases()
    {
        $items = $this->get("UseCases");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UseCases($item));
        }
        return $result;
    }

    /**
     * UseCases: 框架示例
     *
     * @param UseCases[] $useCases
     */
    public function setUseCases(array $useCases)
    {
        $result = [];
        foreach ($useCases as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
