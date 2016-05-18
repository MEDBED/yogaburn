<?php

namespace AppBundle\Controller;

/**
 * Description of IpnController
 *
 * @author med
 */


use AppBundle\Entity\ArrivalIPN;
use AppBundle\Entity\Vendor;
use Guzzle\Http\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BuyController
 *
 * @Route("/buy")
 * @package AppBundle\Tests\Controller
 */

class IPNController extends Controller
{
    /**
     * @Route("/{accountId}/ipn")
     * @param Request $request
     * @param Vendor  $vendor
     * @return Response
     */
    public function buyAction()
    {
        
    }
}