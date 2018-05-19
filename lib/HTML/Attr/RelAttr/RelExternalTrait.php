<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelExternalTrait
    {
        /**
         * @return $this
         */
        public function setRelExternal()
        {
            return $this->setRel(RelAttr::VALUE_EXTERNAL);
        }
    }
}