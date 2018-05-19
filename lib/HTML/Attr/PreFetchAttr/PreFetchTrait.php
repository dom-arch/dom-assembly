<?php

namespace DOMAssembly\HTML\Attr\PreFetchAttr {

    use DOMAssembly\HTML\Attr\PreFetchAttr;

    trait PreFetchTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setPreFetch(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = PreFetchAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setPreFetchDefault()
        {
            return $this->setPreFetch(PreFetchAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setPreFetchAuto()
        {
            return $this->setPreFetch(PreFetchAttr::VALUE_AUTO);
        }

        /**
         * @return $this
         */
        public function setPreFetchMetadata()
        {
            return $this->setPreFetch(PreFetchAttr::VALUE_METADATA);
        }

        /**
         * @return $this
         */
        public function setPreFetchNone()
        {
            return $this->setPreFetch(PreFetchAttr::VALUE_NONE);
        }
    }
}