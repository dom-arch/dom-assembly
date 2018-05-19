<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AbbrAttr\AbbrTrait;
    use DOMAssembly\HTML\Attr\ColSpanAttr\ColSpanTrait;
    use DOMAssembly\HTML\Attr\HeadersAttr\HeadersTrait;
    use DOMAssembly\HTML\Attr\RowSpanAttr\RowSpanTrait;
    use DOMAssembly\HTML\Attr\ScopeAttr\ScopeTrait;

    class ThTag
        extends BlockContainerTag
    {
        use AbbrTrait;
        use ColSpanTrait;
        use HeadersTrait;
        use RowSpanTrait;
        use ScopeTrait;

        const
        NAME = 'th',
        SCOPE_AUTO = 'auto',
        SCOPE_COL = 'col',
        SCOPE_ROW = 'row',
        SCOPE_ROW_GROUP = 'rowgroup',
        SCOPE_DEFAULT = ThTag::SCOPE_AUTO;

        /**
         * @return $this
         */
        public function setScopeDefault()
        {
            return $this->setScope(static::SCOPE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setScopeAuto()
        {
            return $this->setScope(static::SCOPE_AUTO);
        }

        /**
         * @return $this
         */
        public function setScopeCol()
        {
            return $this->setScope(static::SCOPE_COL);
        }

        /**
         * @return $this
         */
        public function setScopeRow()
        {
            return $this->setScope(static::SCOPE_ROW);
        }

        /**
         * @return $this
         */
        public function setScopeRowGroup()
        {
            return $this->setScope(static::SCOPE_ROW_GROUP);
        }
    }
}