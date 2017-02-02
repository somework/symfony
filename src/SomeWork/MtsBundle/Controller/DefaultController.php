<?php

namespace SomeWork\MtsBundle\Controller;

use SomeWork\MtsBundle\Document\Category;
use SomeWork\MtsBundle\Document\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SomeWorkMtsBundle:Default:index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws \InvalidArgumentException
     */
    public function getAction()
    {
        $dm = $this->get('doctrine_mongodb')
            ->getManager();
        $category = new Category('111');
        $category->setName('qwedqwd');

        $product = new Product('222');
        $product->setCategory($category);
        $dm->persist($category);
        $dm->flush();

        /**
         * @var Category $category
         */
        $category = $dm->getRepository('SomeWorkMtsBundle:Category')
            ->findOneBy([]);

        return $this->json([
            'ID'       => $category->getId(),
            'PRODUCTS' => $category->getProducts()->getKeys(),
        ]);
    }
}
