<?php

namespace DOMAssembly\HTML\Attr\NoModuleAttr {

    use DOMAssembly\HTML\Attr\NoModuleAttr;

    trait NoModuleTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setNoModule(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = NoModuleAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}