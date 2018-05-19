<?php

namespace DOMAssembly\HTML\Attr\DirAttr {

    use DOMAssembly\HTML\Attr\DirAttr;

    trait DirTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setDir(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = DirAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setDirAuto()
        {
            return $this->setDir(DirAttr::VALUE_AUTO);
        }

        /**
         * @return $this
         */
        public function setDirLtr()
        {
            return $this->setDir(DirAttr::VALUE_LTR);
        }

        /**
         * @return $this
         */
        public function setDirRtl()
        {
            return $this->setDir(DirAttr::VALUE_RTL);
        }
    }
}