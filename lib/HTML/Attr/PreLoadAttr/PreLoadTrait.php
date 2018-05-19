<?php

namespace DOMAssembly\HTML\Attr\PreLoadAttr {

    use DOMAssembly\HTML\Attr\PreLoadAttr;

    trait PreLoadTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setPreLoad(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = PreLoadAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setPreLoadDefault()
        {
            return $this->setPreLoad(PreLoadAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setPreLoadAuto()
        {
            return $this->setPreLoad(PreLoadAttr::VALUE_AUTO);
        }

        /**
         * @return $this
         */
        public function setPreLoadMetadata()
        {
            return $this->setPreLoad(PreLoadAttr::VALUE_METADATA);
        }

        /**
         * @return $this
         */
        public function setPreLoadNone()
        {
            return $this->setPreLoad(PreLoadAttr::VALUE_NONE);
        }
    }
}