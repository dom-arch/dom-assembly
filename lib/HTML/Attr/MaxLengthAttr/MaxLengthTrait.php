<?php

namespace DOMAssembly\HTML\Attr\MaxLengthAttr {

    use DOMAssembly\HTML\Attr\MaxLengthAttr;

    trait MaxLengthTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setMaxLength(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = MaxLengthAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}