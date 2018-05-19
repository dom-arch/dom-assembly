<?php

namespace DOMAssembly\HTML\Attr\FormAttr {

    use DOMAssembly\HTML\Attr\FormAttr;
    use DOMAssembly\HTML\Tag\FormContainerTag;

    trait FormTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setForm(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = FormAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @param FormContainerTag $form
         * @return $this
         */
        public function setFormFromForm(
            FormContainerTag $form
        )
        {
            return $this->setForm($form->getId());
        }
    }
}