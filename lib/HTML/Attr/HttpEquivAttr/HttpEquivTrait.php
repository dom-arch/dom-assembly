<?php

namespace DOMAssembly\HTML\Attr\HttpEquivAttr {

    use DOMAssembly\HTML\Attr\HttpEquivAttr;

    trait HttpEquivTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setHttpEquiv(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = HttpEquivAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setHttpEquivContentSecurityPolicy()
        {
            return $this->setHttpEquiv(HttpEquivAttr::VALUE_CONTENT_SECURITY_POLICY);
        }

        /**
         * @return $this
         */
        public function setHttpEquivContentType()
        {
            return $this->setHttpEquiv(HttpEquivAttr::VALUE_CONTENT_TYPE);
        }

        /**
         * @return $this
         */
        public function setHttpEquivDefaultStyle()
        {
            return $this->setHttpEquiv(HttpEquivAttr::VALUE_DEFAULT_STYLE);
        }

        /**
         * @return $this
         */
        public function setHttpEquivRefresh()
        {
            return $this->setHttpEquiv(HttpEquivAttr::VALUE_REFRESH);
        }

        /**
         * @return $this
         */
        public function setHttpEquivXUACompatible()
        {
            return $this->setHttpEquiv(HttpEquivAttr::VALUE_X_UA_COMPATIBLE);
        }
    }
}