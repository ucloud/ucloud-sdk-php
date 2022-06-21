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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Request\Request;

class RenewUPhoneRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RenewUPhone"]);
        $this->markRequired("CityId");
        $this->markRequired("UPhoneIds");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * UPhoneIds: 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望重启的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *
     * @return string[]|null
     */
    public function getUPhoneIds()
    {
        return $this->get("UPhoneIds");
    }

    /**
     * UPhoneIds: 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望重启的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *
     * @param string[] $uPhoneIds
     */
    public function setUPhoneIds(array $uPhoneIds)
    {
        $this->set("UPhoneIds", $uPhoneIds);
    }

    /**
     * ProductType: 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     *
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * Customize: 自定义设备参数设置的开关，true时会读取用户设置的下列设备参数信息；false时随机读取ucloud内置设备参数。默认false
     *
     * @return boolean|null
     */
    public function getCustomize()
    {
        return $this->get("Customize");
    }

    /**
     * Customize: 自定义设备参数设置的开关，true时会读取用户设置的下列设备参数信息；false时随机读取ucloud内置设备参数。默认false
     *
     * @param boolean $customize
     */
    public function setCustomize($customize)
    {
        $this->set("Customize", $customize);
    }

    /**
     * Brand: 品牌
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->get("Brand");
    }

    /**
     * Brand: 品牌
     *
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->set("Brand", $brand);
    }

    /**
     * Model: 设备型号
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->get("Model");
    }

    /**
     * Model: 设备型号
     *
     * @param string $model
     */
    public function setModel($model)
    {
        $this->set("Model", $model);
    }

    /**
     * Manufacture: 厂商
     *
     * @return string|null
     */
    public function getManufacture()
    {
        return $this->get("Manufacture");
    }

    /**
     * Manufacture: 厂商
     *
     * @param string $manufacture
     */
    public function setManufacture($manufacture)
    {
        $this->set("Manufacture", $manufacture);
    }

    /**
     * SerialNumber: 序列号
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->get("SerialNumber");
    }

    /**
     * SerialNumber: 序列号
     *
     * @param string $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->set("SerialNumber", $serialNumber);
    }

    /**
     * BaseBand: 基带版本
     *
     * @return string|null
     */
    public function getBaseBand()
    {
        return $this->get("BaseBand");
    }

    /**
     * BaseBand: 基带版本
     *
     * @param string $baseBand
     */
    public function setBaseBand($baseBand)
    {
        $this->set("BaseBand", $baseBand);
    }

    /**
     * Board: 主板名
     *
     * @return string|null
     */
    public function getBoard()
    {
        return $this->get("Board");
    }

    /**
     * Board: 主板名
     *
     * @param string $board
     */
    public function setBoard($board)
    {
        $this->set("Board", $board);
    }

    /**
     * DisplayID: 显示的版本号
     *
     * @return string|null
     */
    public function getDisplayID()
    {
        return $this->get("DisplayID");
    }

    /**
     * DisplayID: 显示的版本号
     *
     * @param string $displayID
     */
    public function setDisplayID($displayID)
    {
        $this->set("DisplayID", $displayID);
    }

    /**
     * Device: 设备名
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->get("Device");
    }

    /**
     * Device: 设备名
     *
     * @param string $device
     */
    public function setDevice($device)
    {
        $this->set("Device", $device);
    }

    /**
     * FingerPrint: 系统指纹
     *
     * @return string|null
     */
    public function getFingerPrint()
    {
        return $this->get("FingerPrint");
    }

    /**
     * FingerPrint: 系统指纹
     *
     * @param string $fingerPrint
     */
    public function setFingerPrint($fingerPrint)
    {
        $this->set("FingerPrint", $fingerPrint);
    }

    /**
     * ProductName: 产品名称
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->get("ProductName");
    }

    /**
     * ProductName: 产品名称
     *
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->set("ProductName", $productName);
    }

    /**
     * BuildID: build的版本号
     *
     * @return string|null
     */
    public function getBuildID()
    {
        return $this->get("BuildID");
    }

    /**
     * BuildID: build的版本号
     *
     * @param string $buildID
     */
    public function setBuildID($buildID)
    {
        $this->set("BuildID", $buildID);
    }

    /**
     * BuildHost: 固件编译主机
     *
     * @return string|null
     */
    public function getBuildHost()
    {
        return $this->get("BuildHost");
    }

    /**
     * BuildHost: 固件编译主机
     *
     * @param string $buildHost
     */
    public function setBuildHost($buildHost)
    {
        $this->set("BuildHost", $buildHost);
    }

    /**
     * BootLoader: bootloader版本号
     *
     * @return string|null
     */
    public function getBootLoader()
    {
        return $this->get("BootLoader");
    }

    /**
     * BootLoader: bootloader版本号
     *
     * @param string $bootLoader
     */
    public function setBootLoader($bootLoader)
    {
        $this->set("BootLoader", $bootLoader);
    }

    /**
     * BuildTags: 系统标记
     *
     * @return string|null
     */
    public function getBuildTags()
    {
        return $this->get("BuildTags");
    }

    /**
     * BuildTags: 系统标记
     *
     * @param string $buildTags
     */
    public function setBuildTags($buildTags)
    {
        $this->set("BuildTags", $buildTags);
    }

    /**
     * BuildVersionInc: 版本增加说明
     *
     * @return string|null
     */
    public function getBuildVersionInc()
    {
        return $this->get("BuildVersionInc");
    }

    /**
     * BuildVersionInc: 版本增加说明
     *
     * @param string $buildVersionInc
     */
    public function setBuildVersionInc($buildVersionInc)
    {
        $this->set("BuildVersionInc", $buildVersionInc);
    }

    /**
     * IMEI: 串号
     *
     * @return string|null
     */
    public function getIMEI()
    {
        return $this->get("IMEI");
    }

    /**
     * IMEI: 串号
     *
     * @param string $imei
     */
    public function setIMEI($imei)
    {
        $this->set("IMEI", $imei);
    }

    /**
     * PhoneNumber: 手机号码
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->get("PhoneNumber");
    }

    /**
     * PhoneNumber: 手机号码
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->set("PhoneNumber", $phoneNumber);
    }

    /**
     * ICCID: SIM卡唯一标识
     *
     * @return string|null
     */
    public function getICCID()
    {
        return $this->get("ICCID");
    }

    /**
     * ICCID: SIM卡唯一标识
     *
     * @param string $iccid
     */
    public function setICCID($iccid)
    {
        $this->set("ICCID", $iccid);
    }

    /**
     * IMSI: 移动识别码
     *
     * @return string|null
     */
    public function getIMSI()
    {
        return $this->get("IMSI");
    }

    /**
     * IMSI: 移动识别码
     *
     * @param string $imsi
     */
    public function setIMSI($imsi)
    {
        $this->set("IMSI", $imsi);
    }

    /**
     * IMEISV: 移动设备标识码软件
     *
     * @return string|null
     */
    public function getIMEISV()
    {
        return $this->get("IMEISV");
    }

    /**
     * IMEISV: 移动设备标识码软件
     *
     * @param string $imeisv
     */
    public function setIMEISV($imeisv)
    {
        $this->set("IMEISV", $imeisv);
    }

    /**
     * RadioMac: 移动网络mac地址
     *
     * @return string|null
     */
    public function getRadioMac()
    {
        return $this->get("RadioMac");
    }

    /**
     * RadioMac: 移动网络mac地址
     *
     * @param string $radioMac
     */
    public function setRadioMac($radioMac)
    {
        $this->set("RadioMac", $radioMac);
    }

    /**
     * WiFiName: 当前连接Wi-Fi名称
     *
     * @return string|null
     */
    public function getWiFiName()
    {
        return $this->get("WiFiName");
    }

    /**
     * WiFiName: 当前连接Wi-Fi名称
     *
     * @param string $wiFiName
     */
    public function setWiFiName($wiFiName)
    {
        $this->set("WiFiName", $wiFiName);
    }

    /**
     * BSSID: Wi-Fi 物理地址
     *
     * @return string|null
     */
    public function getBSSID()
    {
        return $this->get("BSSID");
    }

    /**
     * BSSID: Wi-Fi 物理地址
     *
     * @param string $bssid
     */
    public function setBSSID($bssid)
    {
        $this->set("BSSID", $bssid);
    }

    /**
     * AndroidID: AOSP唯一标识
     *
     * @return string|null
     */
    public function getAndroidID()
    {
        return $this->get("AndroidID");
    }

    /**
     * AndroidID: AOSP唯一标识
     *
     * @param string $androidID
     */
    public function setAndroidID($androidID)
    {
        $this->set("AndroidID", $androidID);
    }


}
