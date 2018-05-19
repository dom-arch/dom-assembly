<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelNextTrait
    {
        /**
         * @return $this
         */
        public function setRelNext()
        {
            return $this->setRel(RelAttr::VALUE_NEXT);
        }
    }
}