<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\CharsetAttr\CharsetTrait;
    use DOMAssembly\HTML\Attr\ContentAttr\ContentTrait;
    use DOMAssembly\HTML\Attr\HttpEquivAttr\HttpEquivTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;

    class MetaTag
        extends VoidTag
    {
        use CharsetTrait;
        use ContentTrait;
        use HttpEquivTrait;
        use NameTrait;

        const
        NAME = 'meta',
        NAME_APPLICATION_NAME = '',
        NAME_AUTHOR = '',
        NAME_DESCRIPTION = '',
        NAME_GENERATOR = '',
        NAME_REFERRER = '',
        NAME_KEYWORDS = '';

        /**
         * @return $this
         */
        public function setNameApplicationName()
        {
            return $this->setName(static::NAME_APPLICATION_NAME);
        }

        /**
         * @return $this
         */
        public function setNameAuthor()
        {
            return $this->setName(static::NAME_AUTHOR);
        }

        /**
         * @return $this
         */
        public function setNameDescription()
        {
            return $this->setName(static::NAME_DESCRIPTION);
        }

        /**
         * @return $this
         */
        public function setNameGenerator()
        {
            return $this->setName(static::NAME_GENERATOR);
        }

        /**
         * @return $this
         */
        public function setNameReferrer()
        {
            return $this->setName(static::NAME_REFERRER);
        }

        /**
         * @return $this
         */
        public function setNameKeywords()
        {
            return $this->setName(static::NAME_KEYWORDS);
        }
    }
}