<?php

namespace DOMAssembly\HTML\Attr\AllowFullScreenAttr {

    use DOMAssembly\HTML\Attr\AllowFullScreenAttr;

    trait AllowFullScreenTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setAllowFullScreen(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = AllowFullScreenAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}