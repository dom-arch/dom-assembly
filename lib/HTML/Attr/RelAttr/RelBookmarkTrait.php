<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelBookmarkTrait
    {
        /**
         * @return $this
         */
        public function setRelBookmark()
        {
            return $this->setRel(RelAttr::VALUE_BOOKMARK);
        }
    }
}