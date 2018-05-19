<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelTagTrait
    {
        /**
         * @return $this
         */
        public function setRelTag()
        {
            return $this->setRel(RelAttr::VALUE_TAG);
        }
    }
}