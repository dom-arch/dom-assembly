<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelPreFetchTrait
    {
        /**
         * @return $this
         */
        public function setRelPreFetch()
        {
            return $this->setRel(RelAttr::VALUE_PRE_FETCH);
        }
    }
}