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
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AdminBundle:Article')->findForPath(null,3);

        return array(
            'articles' => $articles,
        );
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
        
        return array();
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