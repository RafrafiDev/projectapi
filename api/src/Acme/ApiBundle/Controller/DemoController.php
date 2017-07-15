<?php
/**
 * Created by PhpStorm.
 * User: ak
 * Date: 18/06/17
 * Time: 01:25 م
 */

namespace Acme\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Extractor\AnnotationsProviderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DemoController extends FOSRestController implements AnnotationsProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getXxxAction()
    {

        $data = array("xxx" => "xxx");

        return new JsonResponse($data);
    }

    /**
     * Returns an array ApiDoc annotations.
     *
     * @return \Nelmio\ApiDocBundle\Annotation\ApiDoc[]
     */
    public function getAnnotations()
    {
        // TODO: Implement getAnnotations() method.
    }
}