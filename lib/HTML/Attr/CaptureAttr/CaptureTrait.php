<?php

namespace DOMAssembly\HTML\Attr\CaptureAttr {

    use DOMAssembly\HTML\Attr\CaptureAttr;

    trait CaptureTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setCapture(
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