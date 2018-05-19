<?php

namespace DOMAssembly\HTML\Attr\FormEncTypeAttr {

    use DOMAssembly\HTML\Attr\FormEncTypeAttr;

    trait FormEncTypeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setFormEncType(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = FormEncTypeAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setFormEncTypeFormData()
        {
            return $this->setFormEncType(FormEncTypeAttr::VALUE_FORM_DATA);
        }

        /**
         * @return $this
         */
        public function setFormEncTypeTextPlain()
        {
            return $this->setFormEncType(FormEncTypeAttr::VALUE_TEXT_PLAIN);
        }

        /**
         * @return $this
         */
        public function setFormEncTypeURLEncoded()
        {
            return $this->setFormEncType(FormEncTypeAttr::VALUE_URL_ENCODED);
        }
    }
}