<?php

namespace DOMAssembly\HTML\Attr\CrossOriginAttr {

    use DOMAssembly\HTML\Attr\CrossOriginAttr;

    trait CrossOriginTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setCrossOrigin(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = CrossOriginAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setCrossOriginAnonymous()
        {
            return $this->setCrossOrigin(CrossOriginAttr::VALUE_ANONYMOUS);
        }

        /**
         * @return $this
         */
        public function setCrossOriginUseCredentials()
        {
            return $this->setCrossOrigin(CrossOriginAttr::VALUE_USE_CREDENTIALS);
        }
    }
}