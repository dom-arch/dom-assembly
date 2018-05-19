<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelAuthorTrait
    {
        /**
         * @return $this
         */
        public function setRelAuthor()
        {
            return $this->setRel(RelAttr::VALUE_AUTHOR);
        }
    }
}