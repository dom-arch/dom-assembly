<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelCanonicalTrait
    {
        /**
         * @return $this
         */
        public function setRelCanonical()
        {
            return $this->setRel(RelAttr::VALUE_CANONICAL);
        }
    }
}