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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Feed controller.
 *
 * @Route("/feed")
 * @Method("POST")
 */
class FeedController extends Controller
{
    /**
     * Заказ из калькулятора
     *
     * @Route("/orderFromCalc", name="feed_calc_order")
     * @Method("POST")
     */
    public function calcOrderAction(Request $request)
    {
        $name = $request->request->get('name');
        $tel = $request->request->get('tel');
        $email = $request->request->get('email');
        $siteName = $request->request->get('site_type_name');
        $salePromotion = $request->request->get('checkbox_skidka');
        if(isset($salePromotion)){
            $salePromotionText = 'С продвижением';
        } else {
            $salePromotionText = 'Без продвижения';
        }
        $design = $request->request->get('dizayn');

        switch($design) {
            case 'gotoviy':
                $designText = 'Готовый дизайн';
                break;

            case 'individualniy':
                $designText = 'Индивидуальный дизайн';
                break;

            default:
                $designText = $design;
                break;
        }

        $template = $this->renderView(
            'AppBundle:Email:orderFromCalc.html.twig',
            array(
                'name' => $name,
                'tel' => $tel,
                'email' => $email,
                'siteName' => $siteName,
                'design' => $designText,
                'salePromotion' => $salePromotionText
            )
        );

        $this->sendEmail($template);

        $answer = array('answer' => 'ok');
        return new JsonResponse($answer);
    }

    private function sendEmail($template)
    {
        $mailer = $this->get('mailer');
        $message = $mailer->createMessage()
            ->setSubject('You have Completed Registration!')
            ->setFrom('robot@colornew.ru')
            ->setTo('init.reg@gmail.com')
            ->setBody($template,'text/html')
        ;
        $mailer->send($message);
    }


}