<?php

    /**
    *
    * Generated by DezDevTools @ 2016-03-13 17:41:51
    *
    * @author Ivan Gontarenko
    * @licence MIT
    *
    */

    namespace SiteDezz\Model\Entity;

    use Dez\ORM\Collection\ModelCollection;
    use SiteDezz\Model\Entity\GeneratedEntity\Entity_6694884f727937d6fa8f476277719566;

    class ArticleCategories extends Entity_6694884f727937d6fa8f476277719566
    {

        /**
         * @return array
         */
        public static function tree()
        {
            $treeArray = [];
            $references = [];

            /** @var ArticleCategories $item */
            foreach(static::all() as $item) {
                $referenceItem = &$references[$item->id()];

                $referenceItem['id'] = $item->id();
                $referenceItem['parent_id'] = $item->getParentId();
                $referenceItem['title'] = $item->getTitle();
                $referenceItem['slug'] = $item->getSlug();

                if($item->getParentId() == 0) {
                    $treeArray[$item->id()] = &$referenceItem;
                } else {
                    $references[$item->getParentId()]['children'][$item->id()] = &$referenceItem;
                }
            }

            return $treeArray;
        }

        /**
         * @param int $id
         * @param array $ids
         * @return array
         */
        public static function childIDs($id = 0, &$ids = [])
        {
            if(count($ids) == 0 && $id > 0) {
                $ids[] = $id;
            }

            $childCategories = ArticleCategories::query()->where('parent_id', $id)->find();

            foreach ($childCategories as $category) {
                $ids[] = (integer) $category->id();
                ArticleCategories::childIDs($category->id(), $ids);
            }

            return $ids;
        }

        /**
         * @param int $id
         * @param ModelCollection $collection
         * @return ModelCollection
         */
        public static function parentCategories($id = 0, ModelCollection $collection)
        {
            $category = ArticleCategories::one($id);

            $collection->prepend($category);

            if($category->getParentId() > 0) {
                static::parentCategories($category->getParentId(), $collection);
            }

            return $collection;
        }

    }