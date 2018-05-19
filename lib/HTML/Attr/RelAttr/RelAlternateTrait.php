<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelAlternateTrait
    {
        /**
         * @return $this
         */
        public function setRelAlternate()
        {
            return $this->setRel(RelAttr::VALUE_ALTERNATE);
        }
    }
}