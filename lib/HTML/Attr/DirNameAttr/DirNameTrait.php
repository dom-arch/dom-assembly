<?php

namespace DOMAssembly\HTML\Attr\DirNameAttr {

    use DOMAssembly\HTML\Attr\DirNameAttr;

    trait DirNameTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setDirName(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = DirNameAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setDirNameAuto()
        {
            return $this->setDirName(DirNameAttr::VALUE_AUTO);
        }

        /**
         * @return $this
         */
        public function setDirNameLtr()
        {
            return $this->setDirName(DirNameAttr::VALUE_LTR);
        }

        /**
         * @return $this
         */
        public function setDirNameRtl()
        {
            return $this->setDirName(DirNameAttr::VALUE_RTL);
        }
    }
}