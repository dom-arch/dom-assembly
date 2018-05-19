<?php

namespace DOMAssembly\HTML\Attr\HeightAttr {

    use DOMAssembly\HTML\Attr\HeightAttr;

    trait HeightTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setHeight(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = HeightAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}