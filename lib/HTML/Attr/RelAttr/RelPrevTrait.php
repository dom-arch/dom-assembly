<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelPrevTrait
    {
        /**
         * @return $this
         */
        public function setRelPrev()
        {
            return $this->setRel(RelAttr::VALUE_PREV);
        }
    }
}