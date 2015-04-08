<?php
/**
 * Created by JetBrains PhpStorm.
 * User: m.benhenda
 * Date: 07/04/15
 * Time: 17:46
 * To change this template use File | Settings | File Templates.
 */

namespace Myw\EbayApiBundle\Configurator;

use Myw\EbayApiBundle\Manager\EbayManagerInterface;
use Myw\EbayApiBundle\Component\EbayApiInterface;

class EbayApiConfigurator {

    private $apiManager;

    public function __construct(EbayManagerInterface $ebayApiManager)
    {
        $this->apiManager = $ebayApiManager;
    }

    public function configure(EbayComponentInterface $ebayComponent)
    {
        //instanciate $api/$mothod
        //$ebayComponent->setApi($this->apiManager->getApi());
    }
}