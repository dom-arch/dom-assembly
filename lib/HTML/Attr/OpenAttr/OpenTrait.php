<?php

namespace DOMAssembly\HTML\Attr\OpenAttr {

    use DOMAssembly\HTML\Attr\OpenAttr;

    trait OpenTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setOpen(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = OpenAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}