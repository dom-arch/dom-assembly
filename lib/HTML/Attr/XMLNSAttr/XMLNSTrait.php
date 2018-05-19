<?php

namespace DOMAssembly\HTML\Attr\XMLNSAttr {

    use DOMAssembly\HTML\Attr\XMLNSAttr;

    trait XMLNSTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setXMLNS(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = XMLNSAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setXMLNSDefault()
        {
            return $this->setXMLNS(XMLNSAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setXMLNSXHTML()
        {
            return $this->setXMLNS(XMLNSAttr::VALUE_XHTML);
        }
    }
}