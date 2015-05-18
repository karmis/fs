<?php
/**
 * Created by PhpStorm.
 * User: karmis
 * Date: 17.05.15
 * Time: 23:04
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Service controller.
 *
 * @Route("/service")
 */
class ServiceController extends Controller {

    /**
     * Проверка домена на доступность
     *
     * @Route("/whois", name="services_whois")
     * @Method("POST")
     */
    public function whoisAction(Request $request)
    {
        $whois = $this->get('bs.whois');
        $domain = $request->request->get('name');
        if($whois->init($domain)){
            if($whois->isAvailable()){
                $answer = array('status'=> 'available');
            } else {
                $answer = array('status'=> 'busy');
            }
        } else {
            $answer = array(
                'status'=> 'error',
                'detail'=>$whois->getError()
            );
        }

        return new JsonResponse($answer);
    }

    /**
     * Определяет город по ip
     *
     * @Route("/geoip", name="service_geoip")
     * @Method("GET")
     * @Template()
     */
    public function geoipAction()
    {
        $city = $this->getDataByIP();

        return array(
            'city' => $city
        );
    }

    /**
     * Смена региона
     *
     * @Route("/geoip/region/change/{iso}", name="service_geoip_region_change")
     * @Method("GET")
     */
    public function changeRegionAction($iso)
    {
        $ips =$this->container->getParameter('cities_ip');
        if(isset($ips[$iso])){
            $this->getDataByIP($ips[$iso], true);
        }


        return $this->redirectToRoute('main_page');
    }

    private function getDataByIP($ip = null, $reset = false)
    {
        $data = $this->get('session')->get('city');
        if(!empty($data) && !$reset){
            return $data;
        }

        if(empty($ip) || $ip == null){
            $ip = $ip = $this->container->get('request')->getClientIp();
        }

        $sxGeo = $this->get('sx.geoip');
        $data = $sxGeo->getCityFull($ip);
        if(!empty($data) && count($data) > 0) {
            $iso = $data['region']['iso'];
            $city = $data['city']['name_ru'];
        } else {
            $iso = "GLOBAL";
            $city = "";
        }

        $phone = $this->container->getParameter('cities_phones')[$iso];
        $data = array(
            'name' => $city,
            'phone' => $phone
        );

        $this->get('session')->set('city', $data);

        return $data;
    }

}