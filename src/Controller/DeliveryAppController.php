<?php
/**
 * Created by 21w.pl
 * User: Sylwester Kowal
 * Date: 2016-10-05
 * Time: 21:30
 */
namespace Delivery\Controller;

use App\Controller\AppController as BaseController;

class DeliveryAppController extends BaseController
{

    public function getRefererHost()
    {
        $result = parse_url($this->referer());
        return (isset($result['host'])) ? $result['host'] : false;
    }

    public function generateCode($host)
    {
        return crc32($host);
    }
}