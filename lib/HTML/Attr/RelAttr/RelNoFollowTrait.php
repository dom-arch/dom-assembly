<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelNoFollowTrait
    {
        /**
         * @return $this
         */
        public function setRelNoFollow()
        {
            return $this->setRel(RelAttr::VALUE_NO_FOLLOW);
        }
    }
}