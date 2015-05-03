<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * Main page
     *
     * @Route("/", name="main_page")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//        $entities = $em->getRepository('AppBundle:Shop\Category')->findAll();

        return array(
            //            'entities' => $entities,
        );
    }

    /**
     * Main page
     *
     * @Route("/contacts", name="contact_page")
     * @Method("GET")
     * @Template()
     */
    public function contactAction()
    {
        
        return array();
    }

    /**
     * Main page
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
     * Main page
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
     * Main page
     *
     * @Route("/shop", name="shop_page")
     * @Method("GET")
     * @Template()
     */
    public function shopAction()
    {
        return array();
    }

    /**
     * Main page
     *
     * @Route("/vizitka", name="vizitka_page")
     * @Method("GET")
     * @Template()
     */
    public function vizitkaAction()
    {
        return array();
    }

    /**
     * Main page
     *
     * @Route("/corp", name="corp_page")
     * @Method("GET")
     * @Template()
     */
    public function corpAction()
    {
        return array();
    }

    /**
     * Main page
     *
     * @Route("/landing", name="landing_page")
     * @Method("GET")
     * @Template()
     */
    public function landingAction()
    {
        return array();
    }

    /**
     * Main page
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
     * Main page
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
     * Main page
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