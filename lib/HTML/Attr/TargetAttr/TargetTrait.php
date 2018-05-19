<?php

namespace DOMAssembly\HTML\Attr\TargetAttr {

    use DOMAssembly\HTML\Attr\TargetAttr;

    trait TargetTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setTarget(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = TargetAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setTargetDefault()
        {
            return $this->setTarget(TargetAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setTargetSelf()
        {
            return $this->setTarget(TargetAttr::VALUE_SELF);
        }

        /**
         * @return $this
         */
        public function setTargetBlank()
        {
            return $this->setTarget(TargetAttr::VALUE_BLANK);
        }

        /**
         * @return $this
         */
        public function setTargetParent()
        {
            return $this->setTarget(TargetAttr::VALUE_PARENT);
        }

        /**
         * @return $this
         */
        public function setTargetTop()
        {
            return $this->setTarget(TargetAttr::VALUE_TOP);
        }
    }
}