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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class CreateListenerParamHealthCheckConfig extends Request
{
    

    /**
     * Enabled: 是否开启健康检查功能。默认值为：true
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否开启健康检查功能。默认值为：true
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Type: 健康检查方式。应用型限定取值：“Port”/"HTTP/GRPC"，默认值：“Port”
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 健康检查方式。应用型限定取值：“Port”/"HTTP/GRPC"，默认值：“Port”
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Domain: （应用型专用）HTTP/GRPC检查域名
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->get("Domain");
    }

    /**
     * Domain: （应用型专用）HTTP/GRPC检查域名
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->set("Domain", $domain);
    }

    /**
     * Path: （应用型专用）HTTP/GRPC检查路径
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->get("Path");
    }

    /**
     * Path: （应用型专用）HTTP/GRPC检查路径
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->set("Path", $path);
    }

    /**
     * Method: （应用型专用）HTTP检查方法。只支持GET和HEAD。
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->get("Method");
    }

    /**
     * Method: （应用型专用）HTTP检查方法。只支持GET和HEAD。
     *
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->set("Method", $method);
    }

    /**
     * ResponseCode: （应用型专用）HTTP时为2xx,3xx格式(逗号分隔)，GRPC时为数字码(逗号分隔)
     *
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->get("ResponseCode");
    }

    /**
     * ResponseCode: （应用型专用）HTTP时为2xx,3xx格式(逗号分隔)，GRPC时为数字码(逗号分隔)
     *
     * @param string $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->set("ResponseCode", $responseCode);
    }

    /**
     * Port: （应用型专用）端口
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: （应用型专用）端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * HTTPVersion: （应用型专用）检查协议
     *
     * @return string|null
     */
    public function getHTTPVersion()
    {
        return $this->get("HTTPVersion");
    }

    /**
     * HTTPVersion: （应用型专用）检查协议
     *
     * @param string $httpVersion
     */
    public function setHTTPVersion($httpVersion)
    {
        $this->set("HTTPVersion", $httpVersion);
    }

    /**
     * TimeOut: （应用型专用）超时时间，秒，必须小于Interval
     *
     * @return integer|null
     */
    public function getTimeOut()
    {
        return $this->get("TimeOut");
    }

    /**
     * TimeOut: （应用型专用）超时时间，秒，必须小于Interval
     *
     * @param int $timeOut
     */
    public function setTimeOut($timeOut)
    {
        $this->set("TimeOut", $timeOut);
    }

    /**
     * Interval: （应用型专用）间隔时间，秒，必须大于TimeOut
     *
     * @return integer|null
     */
    public function getInterval()
    {
        return $this->get("Interval");
    }

    /**
     * Interval: （应用型专用）间隔时间，秒，必须大于TimeOut
     *
     * @param int $interval
     */
    public function setInterval($interval)
    {
        $this->set("Interval", $interval);
    }

    /**
     * UpCounts: （应用型专用）判定成功的连续次数
     *
     * @return integer|null
     */
    public function getUpCounts()
    {
        return $this->get("UpCounts");
    }

    /**
     * UpCounts: （应用型专用）判定成功的连续次数
     *
     * @param int $upCounts
     */
    public function setUpCounts($upCounts)
    {
        $this->set("UpCounts", $upCounts);
    }

    /**
     * DownCounts: （应用型专用）判定失败的连续次数
     *
     * @return integer|null
     */
    public function getDownCounts()
    {
        return $this->get("DownCounts");
    }

    /**
     * DownCounts: （应用型专用）判定失败的连续次数
     *
     * @param int $downCounts
     */
    public function setDownCounts($downCounts)
    {
        $this->set("DownCounts", $downCounts);
    }
}
