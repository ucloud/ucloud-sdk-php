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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class HttpCodeV2Detail extends Response
{
    

    /**
     * Time: 时间
     *
     * @return integer|null
     */
    public function getTime()
    {
        return $this->get("Time");
    }

    /**
     * Time: 时间
     *
     * @param int $time
     */
    public function setTime($time)
    {
        $this->set("Time", $time);
    }

    /**
     * Total: 当前分组的总状态码数
     *
     * @return integer|null
     */
    public function getTotal()
    {
        return $this->get("Total");
    }

    /**
     * Total: 当前分组的总状态码数
     *
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->set("Total", $total);
    }

    /**
     * Http100: http100数量
     *
     * @return integer|null
     */
    public function getHttp100()
    {
        return $this->get("Http100");
    }

    /**
     * Http100: http100数量
     *
     * @param int $http100
     */
    public function setHttp100($http100)
    {
        $this->set("Http100", $http100);
    }

    /**
     * Http101: http101数量
     *
     * @return integer|null
     */
    public function getHttp101()
    {
        return $this->get("Http101");
    }

    /**
     * Http101: http101数量
     *
     * @param int $http101
     */
    public function setHttp101($http101)
    {
        $this->set("Http101", $http101);
    }

    /**
     * Http102: http102数量
     *
     * @return integer|null
     */
    public function getHttp102()
    {
        return $this->get("Http102");
    }

    /**
     * Http102: http102数量
     *
     * @param int $http102
     */
    public function setHttp102($http102)
    {
        $this->set("Http102", $http102);
    }

    /**
     * Http200: http200数量
     *
     * @return integer|null
     */
    public function getHttp200()
    {
        return $this->get("Http200");
    }

    /**
     * Http200: http200数量
     *
     * @param int $http200
     */
    public function setHttp200($http200)
    {
        $this->set("Http200", $http200);
    }

    /**
     * Http201: http201数量
     *
     * @return integer|null
     */
    public function getHttp201()
    {
        return $this->get("Http201");
    }

    /**
     * Http201: http201数量
     *
     * @param int $http201
     */
    public function setHttp201($http201)
    {
        $this->set("Http201", $http201);
    }

    /**
     * Http202: http202数量
     *
     * @return integer|null
     */
    public function getHttp202()
    {
        return $this->get("Http202");
    }

    /**
     * Http202: http202数量
     *
     * @param int $http202
     */
    public function setHttp202($http202)
    {
        $this->set("Http202", $http202);
    }

    /**
     * Http203: http203数量
     *
     * @return integer|null
     */
    public function getHttp203()
    {
        return $this->get("Http203");
    }

    /**
     * Http203: http203数量
     *
     * @param int $http203
     */
    public function setHttp203($http203)
    {
        $this->set("Http203", $http203);
    }

    /**
     * Http204: http204数量
     *
     * @return integer|null
     */
    public function getHttp204()
    {
        return $this->get("Http204");
    }

    /**
     * Http204: http204数量
     *
     * @param int $http204
     */
    public function setHttp204($http204)
    {
        $this->set("Http204", $http204);
    }

    /**
     * Http205: http205数量
     *
     * @return integer|null
     */
    public function getHttp205()
    {
        return $this->get("Http205");
    }

    /**
     * Http205: http205数量
     *
     * @param int $http205
     */
    public function setHttp205($http205)
    {
        $this->set("Http205", $http205);
    }

    /**
     * Http206: http206数量
     *
     * @return integer|null
     */
    public function getHttp206()
    {
        return $this->get("Http206");
    }

    /**
     * Http206: http206数量
     *
     * @param int $http206
     */
    public function setHttp206($http206)
    {
        $this->set("Http206", $http206);
    }

    /**
     * Http207: http207数量
     *
     * @return integer|null
     */
    public function getHttp207()
    {
        return $this->get("Http207");
    }

    /**
     * Http207: http207数量
     *
     * @param int $http207
     */
    public function setHttp207($http207)
    {
        $this->set("Http207", $http207);
    }

    /**
     * Http300: http300数量
     *
     * @return integer|null
     */
    public function getHttp300()
    {
        return $this->get("Http300");
    }

    /**
     * Http300: http300数量
     *
     * @param int $http300
     */
    public function setHttp300($http300)
    {
        $this->set("Http300", $http300);
    }

    /**
     * Http301: http301数量
     *
     * @return integer|null
     */
    public function getHttp301()
    {
        return $this->get("Http301");
    }

    /**
     * Http301: http301数量
     *
     * @param int $http301
     */
    public function setHttp301($http301)
    {
        $this->set("Http301", $http301);
    }

    /**
     * Http302: http302数量
     *
     * @return integer|null
     */
    public function getHttp302()
    {
        return $this->get("Http302");
    }

    /**
     * Http302: http302数量
     *
     * @param int $http302
     */
    public function setHttp302($http302)
    {
        $this->set("Http302", $http302);
    }

    /**
     * Http303: http303数量
     *
     * @return integer|null
     */
    public function getHttp303()
    {
        return $this->get("Http303");
    }

    /**
     * Http303: http303数量
     *
     * @param int $http303
     */
    public function setHttp303($http303)
    {
        $this->set("Http303", $http303);
    }

    /**
     * Http304: http304数量
     *
     * @return integer|null
     */
    public function getHttp304()
    {
        return $this->get("Http304");
    }

    /**
     * Http304: http304数量
     *
     * @param int $http304
     */
    public function setHttp304($http304)
    {
        $this->set("Http304", $http304);
    }

    /**
     * Http305: http305数量
     *
     * @return integer|null
     */
    public function getHttp305()
    {
        return $this->get("Http305");
    }

    /**
     * Http305: http305数量
     *
     * @param int $http305
     */
    public function setHttp305($http305)
    {
        $this->set("Http305", $http305);
    }

    /**
     * Http306: http306数量
     *
     * @return integer|null
     */
    public function getHttp306()
    {
        return $this->get("Http306");
    }

    /**
     * Http306: http306数量
     *
     * @param int $http306
     */
    public function setHttp306($http306)
    {
        $this->set("Http306", $http306);
    }

    /**
     * Http307: http307数量
     *
     * @return integer|null
     */
    public function getHttp307()
    {
        return $this->get("Http307");
    }

    /**
     * Http307: http307数量
     *
     * @param int $http307
     */
    public function setHttp307($http307)
    {
        $this->set("Http307", $http307);
    }

    /**
     * Http400: http400数量
     *
     * @return integer|null
     */
    public function getHttp400()
    {
        return $this->get("Http400");
    }

    /**
     * Http400: http400数量
     *
     * @param int $http400
     */
    public function setHttp400($http400)
    {
        $this->set("Http400", $http400);
    }

    /**
     * Http401: http401数量
     *
     * @return integer|null
     */
    public function getHttp401()
    {
        return $this->get("Http401");
    }

    /**
     * Http401: http401数量
     *
     * @param int $http401
     */
    public function setHttp401($http401)
    {
        $this->set("Http401", $http401);
    }

    /**
     * Http402: http402数量
     *
     * @return integer|null
     */
    public function getHttp402()
    {
        return $this->get("Http402");
    }

    /**
     * Http402: http402数量
     *
     * @param int $http402
     */
    public function setHttp402($http402)
    {
        $this->set("Http402", $http402);
    }

    /**
     * Http403: http403数量
     *
     * @return integer|null
     */
    public function getHttp403()
    {
        return $this->get("Http403");
    }

    /**
     * Http403: http403数量
     *
     * @param int $http403
     */
    public function setHttp403($http403)
    {
        $this->set("Http403", $http403);
    }

    /**
     * Http404: http404数量
     *
     * @return integer|null
     */
    public function getHttp404()
    {
        return $this->get("Http404");
    }

    /**
     * Http404: http404数量
     *
     * @param int $http404
     */
    public function setHttp404($http404)
    {
        $this->set("Http404", $http404);
    }

    /**
     * Http405: http405数量
     *
     * @return integer|null
     */
    public function getHttp405()
    {
        return $this->get("Http405");
    }

    /**
     * Http405: http405数量
     *
     * @param int $http405
     */
    public function setHttp405($http405)
    {
        $this->set("Http405", $http405);
    }

    /**
     * Http406: http406数量
     *
     * @return integer|null
     */
    public function getHttp406()
    {
        return $this->get("Http406");
    }

    /**
     * Http406: http406数量
     *
     * @param int $http406
     */
    public function setHttp406($http406)
    {
        $this->set("Http406", $http406);
    }

    /**
     * Http407: http407数量
     *
     * @return integer|null
     */
    public function getHttp407()
    {
        return $this->get("Http407");
    }

    /**
     * Http407: http407数量
     *
     * @param int $http407
     */
    public function setHttp407($http407)
    {
        $this->set("Http407", $http407);
    }

    /**
     * Http408: http408数量
     *
     * @return integer|null
     */
    public function getHttp408()
    {
        return $this->get("Http408");
    }

    /**
     * Http408: http408数量
     *
     * @param int $http408
     */
    public function setHttp408($http408)
    {
        $this->set("Http408", $http408);
    }

    /**
     * Http409: http409数量
     *
     * @return integer|null
     */
    public function getHttp409()
    {
        return $this->get("Http409");
    }

    /**
     * Http409: http409数量
     *
     * @param int $http409
     */
    public function setHttp409($http409)
    {
        $this->set("Http409", $http409);
    }

    /**
     * Http410: http410数量
     *
     * @return integer|null
     */
    public function getHttp410()
    {
        return $this->get("Http410");
    }

    /**
     * Http410: http410数量
     *
     * @param int $http410
     */
    public function setHttp410($http410)
    {
        $this->set("Http410", $http410);
    }

    /**
     * Http411: http411数量
     *
     * @return integer|null
     */
    public function getHttp411()
    {
        return $this->get("Http411");
    }

    /**
     * Http411: http411数量
     *
     * @param int $http411
     */
    public function setHttp411($http411)
    {
        $this->set("Http411", $http411);
    }

    /**
     * Http412: http412数量
     *
     * @return integer|null
     */
    public function getHttp412()
    {
        return $this->get("Http412");
    }

    /**
     * Http412: http412数量
     *
     * @param int $http412
     */
    public function setHttp412($http412)
    {
        $this->set("Http412", $http412);
    }

    /**
     * Http413: http413数量
     *
     * @return integer|null
     */
    public function getHttp413()
    {
        return $this->get("Http413");
    }

    /**
     * Http413: http413数量
     *
     * @param int $http413
     */
    public function setHttp413($http413)
    {
        $this->set("Http413", $http413);
    }

    /**
     * Http414: http414数量
     *
     * @return integer|null
     */
    public function getHttp414()
    {
        return $this->get("Http414");
    }

    /**
     * Http414: http414数量
     *
     * @param int $http414
     */
    public function setHttp414($http414)
    {
        $this->set("Http414", $http414);
    }

    /**
     * Http415: http415数量
     *
     * @return integer|null
     */
    public function getHttp415()
    {
        return $this->get("Http415");
    }

    /**
     * Http415: http415数量
     *
     * @param int $http415
     */
    public function setHttp415($http415)
    {
        $this->set("Http415", $http415);
    }

    /**
     * Http416: http416数量
     *
     * @return integer|null
     */
    public function getHttp416()
    {
        return $this->get("Http416");
    }

    /**
     * Http416: http416数量
     *
     * @param int $http416
     */
    public function setHttp416($http416)
    {
        $this->set("Http416", $http416);
    }

    /**
     * Http417: http417数量
     *
     * @return integer|null
     */
    public function getHttp417()
    {
        return $this->get("Http417");
    }

    /**
     * Http417: http417数量
     *
     * @param int $http417
     */
    public function setHttp417($http417)
    {
        $this->set("Http417", $http417);
    }

    /**
     * Http418: http418数量
     *
     * @return integer|null
     */
    public function getHttp418()
    {
        return $this->get("Http418");
    }

    /**
     * Http418: http418数量
     *
     * @param int $http418
     */
    public function setHttp418($http418)
    {
        $this->set("Http418", $http418);
    }

    /**
     * Http421: http421数量
     *
     * @return integer|null
     */
    public function getHttp421()
    {
        return $this->get("Http421");
    }

    /**
     * Http421: http421数量
     *
     * @param int $http421
     */
    public function setHttp421($http421)
    {
        $this->set("Http421", $http421);
    }

    /**
     * Http422: http422数量
     *
     * @return integer|null
     */
    public function getHttp422()
    {
        return $this->get("Http422");
    }

    /**
     * Http422: http422数量
     *
     * @param int $http422
     */
    public function setHttp422($http422)
    {
        $this->set("Http422", $http422);
    }

    /**
     * Http423: http423数量
     *
     * @return integer|null
     */
    public function getHttp423()
    {
        return $this->get("Http423");
    }

    /**
     * Http423: http423数量
     *
     * @param int $http423
     */
    public function setHttp423($http423)
    {
        $this->set("Http423", $http423);
    }

    /**
     * Http424: http424数量
     *
     * @return integer|null
     */
    public function getHttp424()
    {
        return $this->get("Http424");
    }

    /**
     * Http424: http424数量
     *
     * @param int $http424
     */
    public function setHttp424($http424)
    {
        $this->set("Http424", $http424);
    }

    /**
     * Http425: http425数量
     *
     * @return integer|null
     */
    public function getHttp425()
    {
        return $this->get("Http425");
    }

    /**
     * Http425: http425数量
     *
     * @param int $http425
     */
    public function setHttp425($http425)
    {
        $this->set("Http425", $http425);
    }

    /**
     * Http426: http426数量
     *
     * @return integer|null
     */
    public function getHttp426()
    {
        return $this->get("Http426");
    }

    /**
     * Http426: http426数量
     *
     * @param int $http426
     */
    public function setHttp426($http426)
    {
        $this->set("Http426", $http426);
    }

    /**
     * Http449: http449数量
     *
     * @return integer|null
     */
    public function getHttp449()
    {
        return $this->get("Http449");
    }

    /**
     * Http449: http449数量
     *
     * @param int $http449
     */
    public function setHttp449($http449)
    {
        $this->set("Http449", $http449);
    }

    /**
     * Http451: http451数量
     *
     * @return integer|null
     */
    public function getHttp451()
    {
        return $this->get("Http451");
    }

    /**
     * Http451: http451数量
     *
     * @param int $http451
     */
    public function setHttp451($http451)
    {
        $this->set("Http451", $http451);
    }

    /**
     * Http500: http500数量
     *
     * @return integer|null
     */
    public function getHttp500()
    {
        return $this->get("Http500");
    }

    /**
     * Http500: http500数量
     *
     * @param int $http500
     */
    public function setHttp500($http500)
    {
        $this->set("Http500", $http500);
    }

    /**
     * Http501: http501数量
     *
     * @return integer|null
     */
    public function getHttp501()
    {
        return $this->get("Http501");
    }

    /**
     * Http501: http501数量
     *
     * @param int $http501
     */
    public function setHttp501($http501)
    {
        $this->set("Http501", $http501);
    }

    /**
     * Http502: http502数量
     *
     * @return integer|null
     */
    public function getHttp502()
    {
        return $this->get("Http502");
    }

    /**
     * Http502: http502数量
     *
     * @param int $http502
     */
    public function setHttp502($http502)
    {
        $this->set("Http502", $http502);
    }

    /**
     * Http503: http503数量
     *
     * @return integer|null
     */
    public function getHttp503()
    {
        return $this->get("Http503");
    }

    /**
     * Http503: http503数量
     *
     * @param int $http503
     */
    public function setHttp503($http503)
    {
        $this->set("Http503", $http503);
    }

    /**
     * Http504: http504数量
     *
     * @return integer|null
     */
    public function getHttp504()
    {
        return $this->get("Http504");
    }

    /**
     * Http504: http504数量
     *
     * @param int $http504
     */
    public function setHttp504($http504)
    {
        $this->set("Http504", $http504);
    }

    /**
     * Http505: http505数量
     *
     * @return integer|null
     */
    public function getHttp505()
    {
        return $this->get("Http505");
    }

    /**
     * Http505: http505数量
     *
     * @param int $http505
     */
    public function setHttp505($http505)
    {
        $this->set("Http505", $http505);
    }

    /**
     * Http506: http506数量
     *
     * @return integer|null
     */
    public function getHttp506()
    {
        return $this->get("Http506");
    }

    /**
     * Http506: http506数量
     *
     * @param int $http506
     */
    public function setHttp506($http506)
    {
        $this->set("Http506", $http506);
    }

    /**
     * Http507: http507数量
     *
     * @return integer|null
     */
    public function getHttp507()
    {
        return $this->get("Http507");
    }

    /**
     * Http507: http507数量
     *
     * @param int $http507
     */
    public function setHttp507($http507)
    {
        $this->set("Http507", $http507);
    }

    /**
     * Http509: http509数量
     *
     * @return integer|null
     */
    public function getHttp509()
    {
        return $this->get("Http509");
    }

    /**
     * Http509: http509数量
     *
     * @param int $http509
     */
    public function setHttp509($http509)
    {
        $this->set("Http509", $http509);
    }

    /**
     * Http510: http510数量
     *
     * @return integer|null
     */
    public function getHttp510()
    {
        return $this->get("Http510");
    }

    /**
     * Http510: http510数量
     *
     * @param int $http510
     */
    public function setHttp510($http510)
    {
        $this->set("Http510", $http510);
    }
}
