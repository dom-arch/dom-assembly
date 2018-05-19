<?php

namespace DOMAssembly\HTML\Attr\FormTargetAttr {

    use DOMAssembly\HTML\Attr\FormTargetAttr;

    trait FormTargetTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setFormTarget(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = FormTargetAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setFormTargetDefault()
        {
            return $this->setFormTarget(FormTargetAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setFormTargetSelf()
        {
            return $this->setFormTarget(FormTargetAttr::VALUE_SELF);
        }

        /**
         * @return $this
         */
        public function setFormTargetBlank()
        {
            return $this->setFormTarget(FormTargetAttr::VALUE_BLANK);
        }

        /**
         * @return $this
         */
        public function setFormTargetParent()
        {
            return $this->setFormTarget(FormTargetAttr::VALUE_PARENT);
        }

        /**
         * @return $this
         */
        public function setFormTargetTop()
        {
            return $this->setFormTarget(FormTargetAttr::VALUE_TOP);
        }
    }
}