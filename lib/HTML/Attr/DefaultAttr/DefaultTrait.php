<?php

namespace DOMAssembly\HTML\Attr\DefaultAttr {

    use DOMAssembly\HTML\Attr\CaptureAttr;

    trait DefaultTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setDefault(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = CaptureAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}