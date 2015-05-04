<?php
/**
 * Created by PhpStorm.
 * User: karmis
 * Date: 04.05.15
 * Time: 6:07
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Article controller.
 *
 * @Route("/статьи")
 */
class ArticleController extends Controller
{
    /**
     * List articles
     *
     * @Route("/все", name="article_list")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AdminBundle:Article')->findBy(
            array(
                'published' => true,
            ),
            array(
                'recommended' => 'DESC',
                'created' => 'DESC'
            )
        );

        return array(
            'entities' => $articles,
        );
    }

    /**
     * List articles
     *
     * @Route("/номер/{id}", name="article_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AdminBundle:Article')->findById($id);

        if(!$article){
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        return array(
            'entity' => $article,
        );
    }
}