<?php
namespace HcbStoreProductReview\Stdlib\Extractor;

use Doctrine\ORM\EntityManager;
use Zf2Libs\Stdlib\Extractor\ExtractorInterface;
use Zf2Libs\Stdlib\Extractor\Exception\InvalidArgumentException;
use HcbStoreProductReview\Entity\Review as ReviewEntity;

class Resource implements ExtractorInterface
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Extract values from an object
     *
     * @param  ReviewEntity $reviewEntity
     *
     * @throws \Zf2Libs\Stdlib\Extractor\Exception\InvalidArgumentException
     * @return array
     */
    public function extract($reviewEntity)
    {
        if (!$reviewEntity instanceof ReviewEntity) {
            throw new InvalidArgumentException
            ("Expected HcbStoreProductReview\\Entity\\Review object, invalid object given");
        }

        $productEntity = $reviewEntity->getProduct()->current();
        $title = $productEntity->getLocalized()->current()->getTitle();

        return array('id'=> $reviewEntity->getId(),
                     'productTitle'=>$title,
                     'adv'=>$reviewEntity->getAdvantage(),
                     'dis'=>$reviewEntity->getDisadvantage(),
                     'comment'=>$reviewEntity->getComment(),
                     'enabled'=>$reviewEntity->getEnabled(),
                     'timestamp'=>$reviewEntity->getCreatedTimestamp()
                                               ->format('Y-m-d H:i:s'));
    }
}
