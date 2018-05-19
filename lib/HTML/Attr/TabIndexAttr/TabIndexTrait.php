<?php

namespace DOMAssembly\HTML\Attr\TabIndexAttr {

    use DOMAssembly\HTML\Attr\TabIndexAttr;

    trait TabIndexTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setTabIndex(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = TabIndexAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}