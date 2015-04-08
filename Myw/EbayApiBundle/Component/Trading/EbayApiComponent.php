<?php
/**
 * Created by JetBrains PhpStorm.
 * User: m.benhenda
 * Date: 07/04/15
 * Time: 16:54
 * To change this template use File | Settings | File Templates.
 */

namespace Myw\EbayApiBundle\Component;

use JMS\Serializer\Annotation\ExclusionPolicy;

class EbayApiComponent implements EbayApiInterface {

    protected $api;
    protected $method;

    public function setApi($api){

    }
    public function setMethod($method){

    }

}