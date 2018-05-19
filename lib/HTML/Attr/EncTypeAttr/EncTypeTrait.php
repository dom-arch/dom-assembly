<?php

namespace DOMAssembly\HTML\Attr\EncTypeAttr {

    use DOMAssembly\HTML\Attr\EncTypeAttr;

    trait EncTypeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setEncType(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = EncTypeAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setEncTypeFormData()
        {
            return $this->setEncType(EncTypeAttr::VALUE_FORM_DATA);
        }

        /**
         * @return $this
         */
        public function setEncTypeTextPlain()
        {
            return $this->setEncType(EncTypeAttr::VALUE_TEXT_PLAIN);
        }

        /**
         * @return $this
         */
        public function setEncTypeURLEncoded()
        {
            return $this->setEncType(EncTypeAttr::VALUE_URL_ENCODED);
        }
    }
}