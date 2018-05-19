<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AcceptAttr\AcceptTrait;
    use DOMAssembly\HTML\Attr\AutoCompleteAttr\AutoCompleteTrait;
    use DOMAssembly\HTML\Attr\AutoFocusAttr\AutoFocusTrait;
    use DOMAssembly\HTML\Attr\CaptureAttr\CaptureTrait;
    use DOMAssembly\HTML\Attr\CheckedAttr\CheckedTrait;
    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\FormActionAttr\FormActionTrait;
    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\FormMethodAttr\FormMethodTrait;
    use DOMAssembly\HTML\Attr\FormNoValidateAttr\FormNoValidateTrait;
    use DOMAssembly\HTML\Attr\FormTargetAttr\FormTargetTrait;
    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\ListAttr\ListTrait;
    use DOMAssembly\HTML\Attr\MaxAttr\MaxTrait;
    use DOMAssembly\HTML\Attr\MaxLengthAttr\MaxLengthTrait;
    use DOMAssembly\HTML\Attr\MinLengthAttr\MinLengthTrait;
    use DOMAssembly\HTML\Attr\MinAttr\MinTrait;
    use DOMAssembly\HTML\Attr\MultipleAttr\MultipleTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\PatternAttr\PatternTrait;
    use DOMAssembly\HTML\Attr\PlaceholderAttr\PlaceholderTrait;
    use DOMAssembly\HTML\Attr\ReadonlyAttr\ReadonlyTrait;
    use DOMAssembly\HTML\Attr\RequiredAttr\RequiredTrait;
    use DOMAssembly\HTML\Attr\SelectionDirectionAttr\SelectionDirectionTrait;
    use DOMAssembly\HTML\Attr\SelectionEndAttr\SelectionEndTrait;
    use DOMAssembly\HTML\Attr\SelectionStartAttr\SelectionStartTrait;
    use DOMAssembly\HTML\Attr\SizeAttr\SizeTrait;
    use DOMAssembly\HTML\Attr\SpellCheckAttr\SpellCheckTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;
    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class InputTag
        extends VoidTag
    {
        use AcceptTrait;
        use AutoCompleteTrait;
        use AutoFocusTrait;
        use CaptureTrait;
        use CheckedTrait;
        use DisabledTrait;
        use FormTrait;
        use FormActionTrait;
        use FormMethodTrait;
        use FormNoValidateTrait;
        use FormTargetTrait;
        use HeightTrait;
        use ListTrait;
        use MaxTrait;
        use MaxLengthTrait;
        use MinTrait;
        use MinLengthTrait;
        use MultipleTrait;
        use NameTrait;
        use PatternTrait;
        use PlaceholderTrait;
        use ReadonlyTrait;
        use RequiredTrait;
        use SelectionDirectionTrait;
        use SelectionEndTrait;
        use SelectionStartTrait;
        use SizeTrait;
        use SpellCheckTrait;
        use SrcTrait;
        use TypeTrait;
        use ValueTrait;
        use WidthTrait;

        const NAME = 'input',
        TYPE_BUTTON = 'button',
        TYPE_CHECKBOX = 'checkbox',
        TYPE_COLOR = 'color',
        TYPE_DATE = 'date',
        TYPE_DATE_TIME_LOCAL = 'datetime-local',
        TYPE_EMAIL = 'email',
        TYPE_FILE = 'file',
        TYPE_HIDDEN = 'hidden',
        TYPE_IMAGE = 'image',
        TYPE_MONTH = 'month',
        TYPE_NUMBER = 'number',
        TYPE_PASSWORD = 'password',
        TYPE_RADIO = 'radio',
        TYPE_RANGE = 'range',
        TYPE_RESET = 'reset',
        TYPE_SEARCH = 'search',
        TYPE_SUBMIT = 'submit',
        TYPE_TEL = 'tel',
        TYPE_TEXT = 'text',
        TYPE_TIME = 'time',
        TYPE_URL = 'url',
        TYPE_WEEK = 'week';

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
        public function setTypeCheckbox()
        {
            return $this->setType(static::TYPE_CHECKBOX);
        }

        /**
         * @return $this
         */
        public function setTypeColor()
        {
            return $this->setType(static::TYPE_COLOR);
        }

        /**
         * @return $this
         */
        public function setTypeDate()
        {
            return $this->setType(static::TYPE_DATE);
        }

        /**
         * @return $this
         */
        public function setTypeDateTimeLocal()
        {
            return $this->setType(static::TYPE_DATE_TIME_LOCAL);
        }

        /**
         * @return $this
         */
        public function setTypeEmail()
        {
            return $this->setType(static::TYPE_EMAIL);
        }

        /**
         * @return $this
         */
        public function setTypeFile()
        {
            return $this->setType(static::TYPE_FILE);
        }

        /**
         * @return $this
         */
        public function setTypeHidden()
        {
            return $this->setType(static::TYPE_HIDDEN);
        }

        /**
         * @return $this
         */
        public function setTypeImage()
        {
            return $this->setType(static::TYPE_IMAGE);
        }

        /**
         * @return $this
         */
        public function setTypeMonth()
        {
            return $this->setType(static::TYPE_MONTH);
        }

        /**
         * @return $this
         */
        public function setTypeNumber()
        {
            return $this->setType(static::TYPE_NUMBER);
        }

        /**
         * @return $this
         */
        public function setTypePassword()
        {
            return $this->setType(static::TYPE_PASSWORD);
        }

        /**
         * @return $this
         */
        public function setTypeRadio()
        {
            return $this->setType(static::TYPE_RADIO);
        }

        /**
         * @return $this
         */
        public function setTypeRange()
        {
            return $this->setType(static::TYPE_RANGE);
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
        public function setTypeSearch()
        {
            return $this->setType(static::TYPE_SEARCH);
        }

        /**
         * @return $this
         */
        public function setTypeSubmit()
        {
            return $this->setType(static::TYPE_SUBMIT);
        }

        /**
         * @return $this
         */
        public function setTypeTel()
        {
            return $this->setType(static::TYPE_TEL);
        }

        /**
         * @return $this
         */
        public function setTypeText()
        {
            return $this->del(static::NAME);
        }

        /**
         * @return $this
         */
        public function setTypeTime()
        {
            return $this->setType(static::TYPE_TIME);
        }

        /**
         * @return $this
         */
        public function setTypeUrl()
        {
            return $this->setType(static::TYPE_URL);
        }

        /**
         * @return $this
         */
        public function setTypeWeek()
        {
            return $this->setType(static::TYPE_WEEK);
        }
    }
}