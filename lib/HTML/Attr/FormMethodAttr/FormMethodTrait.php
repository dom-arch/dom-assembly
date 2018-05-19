<?php

namespace DOMAssembly\HTML\Attr\FormMethodAttr {

    use DOMAssembly\HTML\Attr\FormMethodAttr;

    trait FormMethodTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setFormMethod(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = FormMethodAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setFormMethodGET()
        {
            return $this->setFormMethod(FormMethodAttr::VALUE_GET);
        }

        /**
         * @return $this
         */
        public function setFormMethodPOST()
        {
            return $this->setFormMethod(FormMethodAttr::VALUE_POST);
        }

        /**
         * @return $this
         */
        public function setFormMethodPUT()
        {
            return $this->setFormMethod(FormMethodAttr::VALUE_PUT);
        }

        /**
         * @return $this
         */
        public function setFormMethodDELETE()
        {
            return $this->setFormMethod(FormMethodAttr::VALUE_DELETE);
        }
    }
}