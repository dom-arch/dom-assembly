<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelDNSPreFetchTrait
    {
        /**
         * @return $this
         */
        public function setRelDNSPreFetch()
        {
            return $this->setRel(RelAttr::VALUE_DNS_PRE_FETCH);
        }
    }
}