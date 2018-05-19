<?php

namespace DOMAssembly\HTML\Attr\MethodAttr {

    use DOMAssembly\HTML\Attr\MethodAttr;

    trait MethodTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setMethod(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = MethodAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setMethodGET()
        {
            return $this->setMethod(MethodAttr::VALUE_GET);
        }

        /**
         * @return $this
         */
        public function setMethodPOST()
        {
            return $this->setMethod(MethodAttr::VALUE_POST);
        }

        /**
         * @return $this
         */
        public function setMethodPUT()
        {
            return $this->setMethod(MethodAttr::VALUE_PUT);
        }

        /**
         * @return $this
         */
        public function setMethodDELETE()
        {
            return $this->setMethod(MethodAttr::VALUE_DELETE);
        }
    }
}