<?php

    /**
    *
    * Generated by DezDevTools @ 2016-03-13 17:35:06
    *
    * @author Ivan Gontarenko
    * @licence MIT
    *
    */

    namespace SiteDezz\Model\Entity;

    use Dez\ORM\Collection\ModelCollection;
    use Dez\ORM\Model\QueryBuilder;
    use SiteDezz\Model\Entity\GeneratedEntity\Entity_dba5d91846ce1a5e63734dfcbcb481cb;

    class Articles extends Entity_dba5d91846ce1a5e63734dfcbcb481cb
    {

        const STATUS_PUBLISHED = 'published';

        const STATUS_UNPUBLISHED = 'unpublished';

        /**
         * @return ModelCollection
         * @throws \Dez\ORM\Exception
         */
        public function xrefs()
        {
            return $this->hasMany(ArticleTagRef::class, 'article_id', 'id');
        }

        /**
         * @return ArticleCategories
         * @throws \Dez\ORM\Exception
         */
        public function category()
        {
            return $this->hasOne(ArticleCategories::class, 'id', 'category_id');
        }

        /**
         * @param string $tags
         * @return $this
         */
        public function createTags($tags)
        {
            foreach ($this->xrefs() as $xref) {
                /** @var ArticleTagRef $xref */
                $xref->tag()->delete();
                $xref->delete();
            }

            $tags = array_map(function($tag){
                return trim($tag);
            }, explode(',', $tags));

            foreach ($tags as $tag) {
                $tagModel = (new ArticleTags())
                    ->setName($tag)->setTag(\URLify::filter($tag))
                ;
                $tagModel->save(true);
            }

            return $this;
        }

        /**
         * @return QueryBuilder
         */
        public static function popular()
        {
            return static::query()->order('views', 'desc');
        }

        /**
         * @return QueryBuilder
         */
        public static function published()
        {
            return static::query()->where('status', static::STATUS_PUBLISHED);
        }

    }