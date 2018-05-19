<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelIconTrait
    {
        /**
         * @return $this
         */
        public function setRelIcon()
        {
            return $this->setRel(RelAttr::VALUE_ICON);
        }
    }
}