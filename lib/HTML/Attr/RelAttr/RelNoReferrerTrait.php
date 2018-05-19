<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelNoReferrerTrait
    {
        /**
         * @return $this
         */
        public function setRelNoReferrer()
        {
            return $this->setRel(RelAttr::VALUE_NO_REFERRER);
        }
    }
}