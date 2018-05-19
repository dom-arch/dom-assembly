<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelNoOpenerTrait
    {
        /**
         * @return $this
         */
        public function setRelNoOpener()
        {
            return $this->setRel(RelAttr::VALUE_NO_OPENER);
        }
    }
}