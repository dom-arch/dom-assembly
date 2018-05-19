<?php

namespace DOMAssembly\HTML\Attr\HighAttr {

    use DOMAssembly\HTML\Attr\HighAttr;

    trait HighTrait
    {
        /**
         * @param float $value
         * @return $this
         */
        public function setHigh(
            float $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = HighAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}