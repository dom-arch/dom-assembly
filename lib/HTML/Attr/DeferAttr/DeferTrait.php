<?php

namespace DOMAssembly\HTML\Attr\DeferAttr {

    use DOMAssembly\HTML\Attr\DeferAttr;

    trait DeferTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setDefer(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = DeferAttr::of($document, DeferAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(DeferAttr::NAME);
        }
    }
}