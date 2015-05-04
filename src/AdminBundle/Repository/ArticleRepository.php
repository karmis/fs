<?php
/**
 * Created by PhpStorm.
 * User: karmis
 * Date: 03.05.15
 * Time: 16:26
 */
namespace AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository
{
    private function joinPath()
    {
        return $query = $this->createQueryBuilder("article")
            ->leftJoin("article.paths", "path");
    }

    public function findForPath($paths = null, $count = 3)
    {
        if ($paths == null) {
            $query = $this->createQueryBuilder("article")
                ->where('article.published = :is');
        } else {
            $query = $this->joinPath()
                ->where('article.published = :is');
            if (is_array($paths) && count($paths) > 0) {
                $query->andWhere('path.id IN (:paths)')
                    ->setParameter('paths', $paths);
            }
        }
        $query->setParameter('is', true)
            ->orderBy('article.recommended', 'DESC')
            ->setMaxResults($count)
            ->orderBy('article.created', 'DESC');


        return $query->getQuery()->getResult();
    }

    public function findById($id)
    {
        $query = $this->createQueryBuilder("article")
            ->where('article.published = :is')
            ->andWhere('article.id = :id')
            ->setParameter('is', true)
            ->setParameter('id', $id)
            ->getQuery();

        return $query->getSingleResult();
    }
}
