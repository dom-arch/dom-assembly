<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelPingbackTrait
    {
        /**
         * @return $this
         */
        public function setRelPingback()
        {
            return $this->setRel(RelAttr::VALUE_PINGBACK);
        }
    }
}