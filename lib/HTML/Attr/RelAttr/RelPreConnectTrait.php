<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelPreConnectTrait
    {
        /**
         * @return $this
         */
        public function setRelPreConnect()
        {
            return $this->setRel(RelAttr::VALUE_PRE_CONNECT);
        }
    }
}