<?php

    /**
     *
     * Generated by DezDevTools @ 2016-03-13 19:14:28
     *
     * @author Ivan Gontarenko
     * @licence MIT
     *
    */

    namespace SiteDezz\Model\Entity\GeneratedEntity;

    use Dez\ORM\Model\Table as OrmEntity;

    class Entity_dba5d91846ce1a5e63734dfcbcb481cb extends OrmEntity {

        static protected $table     = 'articles';
        
        /**
         * @return mixed
         */
        public function getCategoryId() {
            return $this->get( 'category_id' );
        }

        /**
         * @param mixed $category_id
         * @return $this
         */
        public function setCategoryId( $category_id ) {
            $this->set( 'category_id', $category_id );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getTitle() {
            return $this->get( 'title' );
        }

        /**
         * @param mixed $title
         * @return $this
         */
        public function setTitle( $title ) {
            $this->set( 'title', $title );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getSlug() {
            return $this->get( 'slug' );
        }

        /**
         * @param mixed $slug
         * @return $this
         */
        public function setSlug( $slug ) {
            $this->set( 'slug', $slug );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getContent() {
            return $this->get( 'content' );
        }

        /**
         * @param mixed $content
         * @return $this
         */
        public function setContent( $content ) {
            $this->set( 'content', $content );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getIsCopypaste() {
            return $this->get( 'is_copypaste' );
        }

        /**
         * @param mixed $is_copypaste
         * @return $this
         */
        public function setIsCopypaste( $is_copypaste ) {
            $this->set( 'is_copypaste', $is_copypaste );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getCopypasteSource() {
            return $this->get( 'copypaste_source' );
        }

        /**
         * @param mixed $copypaste_source
         * @return $this
         */
        public function setCopypasteSource( $copypaste_source ) {
            $this->set( 'copypaste_source', $copypaste_source );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getStatus() {
            return $this->get( 'status' );
        }

        /**
         * @param mixed $status
         * @return $this
         */
        public function setStatus( $status ) {
            $this->set( 'status', $status );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getViews() {
            return $this->get( 'views' );
        }

        /**
         * @param mixed $views
         * @return $this
         */
        public function setViews( $views ) {
            $this->set( 'views', $views );
            return $this;
        }
        
        /**
         * @return mixed
         */
        public function getCreatedAt() {
            return $this->get( 'created_at' );
        }

        /**
         * @param mixed $created_at
         * @return $this
         */
        public function setCreatedAt( $created_at ) {
            $this->set( 'created_at', $created_at );
            return $this;
        }
        
    }