<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelSearchTrait
    {
        /**
         * @return $this
         */
        public function setRelSearch()
        {
            return $this->setRel(RelAttr::VALUE_SEARCH);
        }
    }
}