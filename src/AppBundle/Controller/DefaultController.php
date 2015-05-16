<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Показывает главную страницу
     *
     * @Route("/", name="main_page")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $city = $this->getDataByIP();
        $articles = $em->getRepository('AdminBundle:Article')->findForPath(null,3);

        return array(
            'articles' => $articles,
            'city' => $city,
//            'cityMarker' => $cityMarker
        );
    }

    /**
     * Смена региона
     *
     * @Route("/region/change/{iso}", name="region_change")
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

    /**
     * Проверка домена на доступность
     *
     * @Route("/services/whois", name="services_whois")
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

    /**
     * Contacts
     *
     * @Route("/contacts", name="contact_page")
     * @Method("GET")
     * @Template()
     */
    public function contactAction()
    {

        return array(

        );
    }

    /**
     * Domains
     *
     * @Route("/domains", name="domains_page")
     * @Method("GET")
     * @Template()
     */
    public function domainsAction()
    {
        return array();
    }

    /**
     * Advertising
     *
     * @Route("/advertising", name="advertising_page")
     * @Method("GET")
     * @Template()
     */
    public function advertisingAction()
    {
        return array();
    }

    /**
     * Internet shop site
     *
     * @Route("/shop", name="shop_page")
     * @Method("GET")
     * @Template()
     */
    public function shopAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AdminBundle:Article')->findForPath(array(2),3);

        return array(
            'articles' => $articles,
        );
    }

    /**
     * Simple site
     *
     * @Route("/vizitka", name="vizitka_page")
     * @Method("GET")
     * @Template()
     */
    public function vizitkaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AdminBundle:Article')->findForPath(array(1),3);

        return array(
            'articles' => $articles,
        );
    }

    /**
     * Corp site
     *
     * @Route("/corp", name="corp_page")
     * @Method("GET")
     * @Template()
     */
    public function corpAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AdminBundle:Article')->findForPath(array(3),3);

        return array(
            'articles' => $articles,
        );
    }

    /**
     * Landing site
     *
     * @Route("/landing", name="landing_page")
     * @Method("GET")
     * @Template()
     */
    public function landingAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AdminBundle:Article')->findForPath(array(4),3);

        return array(
            'articles' => $articles,
        );
    }

    /**
     * Promotion
     *
     * @Route("/promotion", name="promotion_page")
     * @Method("GET")
     * @Template()
     */
    public function promotionAction()
    {
        return array();
    }

    /**
     * Main page
     *
     * @Route("/installments", name="installments_page")
     * @Method("GET")
     * @Template()
     */
    public function installmentsAction()
    {
        return array();
    }

    /**
     * Main page
     *
     * @Route("/social", name="social_page")
     * @Method("GET")
     * @Template()
     */
    public function socialAction()
    {
        return array();
    }

    /**
     * Completed sites
     *
     * @Route("/gotovie", name="gotovie_page")
     * @Method("GET")
     * @Template()
     */
    public function gotovieAction()
    {
        return array();
    }

    /**
     * Support
     *
     * @Route("/support", name="support_page")
     * @Method("GET")
     * @Template()
     */
    public function supportAction()
    {
        return array();
    }

}