<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelPreLoadTrait
    {
        /**
         * @return $this
         */
        public function setRelPreLoad()
        {
            return $this->setRel(RelAttr::VALUE_PRE_LOAD);
        }
    }
}