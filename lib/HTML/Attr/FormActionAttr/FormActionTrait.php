<?php

namespace DOMAssembly\HTML\Attr\FormActionAttr {

    use DOMAssembly\HTML\Attr\FormActionAttr;

    trait FormActionTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setFormAction(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = FormActionAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}