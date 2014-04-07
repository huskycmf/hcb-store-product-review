<?php
namespace HcbStoreProductReview\ORM\QueryBuilder;

use Doctrine\ORM\QueryBuilder;
use HcbStoreProduct\Entity\Product as ProductEntity;
use Doctrine\ORM\EntityManagerInterface;

class ProductReviews
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param ProductEntity $productEntity
     * @param string $alias
     * @return QueryBuilder
     */
    public function get(ProductEntity $productEntity, $alias = 'r')
    {
        /* @var $repository \Doctrine\ORM\EntityRepository */
        $repository = $this->entityManager->getRepository('HcbStoreProductReview\Entity\Review');

        $qb = $repository->createQueryBuilder($alias);
        $qb->join($alias.'.product', 'p');
        $qb->where('p = :product')
           ->setParameter('product', $productEntity);

        return $qb;
    }
}
