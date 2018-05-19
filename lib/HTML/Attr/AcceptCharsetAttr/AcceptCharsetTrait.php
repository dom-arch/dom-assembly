<?php

namespace DOMAssembly\HTML\Attr\AcceptCharsetAttr {

    use DOMAssembly\HTML\Attr\AcceptCharsetAttr;

    trait AcceptCharsetTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setAcceptCharset(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = AcceptCharsetAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setAcceptCharsetDefault()
        {
            return $this->setAcceptCharset(AcceptCharsetAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setAcceptCharsetUTF8()
        {
            return $this->setAcceptCharset(AcceptCharsetAttr::VALUE_UTF_8);
        }
    }
}