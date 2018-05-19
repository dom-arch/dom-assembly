<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AutoFocusAttr\AutoFocusTrait;
    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\FormActionAttr\FormActionTrait;
    use DOMAssembly\HTML\Attr\FormEncTypeAttr\FormEncTypeTrait;
    use DOMAssembly\HTML\Attr\FormMethodAttr\FormMethodTrait;
    use DOMAssembly\HTML\Attr\FormNoValidateAttr\FormNoValidateTrait;
    use DOMAssembly\HTML\Attr\FormTargetAttr\FormTargetTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;
    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class ButtonTag
        extends InlineContainerTag
    {
        use AutoFocusTrait;
        use DisabledTrait;
        use FormActionTrait;
        use FormEncTypeTrait;
        use FormMethodTrait;
        use FormNoValidateTrait;
        use FormTargetTrait;
        use NameTrait;
        use TypeTrait;
        use ValueTrait;

        const
            NAME = 'button',
            TYPE_BUTTON = 'button',
            TYPE_RESET = 'reset',
            TYPE_SUBMIT = 'submit';

        /**
         * @return $this
         */
        public function setTypeButton()
        {
            return $this->setType(static::TYPE_BUTTON);
        }

        /**
         * @return $this
         */
        public function setTypeReset()
        {
            return $this->setType(static::TYPE_RESET);
        }

        /**
         * @return $this
         */
        public function setTypeSubmit()
        {
            return $this->setType(static::TYPE_SUBMIT);
        }
    }
}