<?php

namespace DOMAssembly\HTML\Attr\WidthAttr {

    use DOMAssembly\HTML\Attr\WidthAttr;

    trait WidthTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setWidth(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = WidthAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}