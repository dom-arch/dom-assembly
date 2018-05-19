<?php

namespace DOMAssembly\HTML\Attr\ReversedAttr {

    use DOMAssembly\HTML\Attr\ReversedAttr;

    trait ReversedTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setReversed(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = ReversedAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}