<?php

namespace DOMAssembly\HTML\Attr\MutedAttr {

    use DOMAssembly\HTML\Attr\MutedAttr;

    trait MutedTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setMuted(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = MutedAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}