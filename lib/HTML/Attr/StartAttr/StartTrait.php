<?php

namespace DOMAssembly\HTML\Attr\StartAttr {

    use DOMAssembly\HTML\Attr\StartAttr;

    trait StartTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setStart(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = StartAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}