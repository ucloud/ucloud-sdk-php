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
namespace UCloud\UGN\Apis;

use UCloud\Core\Request\Request;

class ListUGNRegionsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUGNRegions"]);
    }

    

    /**
     * SelectedRegions: 数组，已选区域，例如：cn-bj2， cn-wlcb
     *
     * @return string[]|null
     */
    public function getSelectedRegions()
    {
        return $this->get("SelectedRegions");
    }

    /**
     * SelectedRegions: 数组，已选区域，例如：cn-bj2， cn-wlcb
     *
     * @param string[] $selectedRegions
     */
    public function setSelectedRegions(array $selectedRegions)
    {
        $this->set("SelectedRegions", $selectedRegions);
    }
}
