<?php

namespace DOMAssembly\HTML\Attr\CharsetAttr {

    use DOMAssembly\HTML\Attr\CharsetAttr;

    trait CharsetTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setCharset(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = CharsetAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setCharsetDefault()
        {
            return $this->setCharset(CharsetAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setCharsetUTF8()
        {
            return $this->setCharset(CharsetAttr::VALUE_UTF_8);
        }
    }
}