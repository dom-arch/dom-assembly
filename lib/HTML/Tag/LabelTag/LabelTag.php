<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\ForAttr\ForTrait;

    class LabelTag
        extends InlineContainerTag
    {
        use ForTrait;

        const NAME = 'label';

        /**
         * @param InputTag $input
         * @return $this
         */
        public function setForFromInput(
            InputTag $input
        )
        {
            return $this->setFor($input->getId());
        }

        /**
         * @param TextareaTag $textarea
         * @return $this
         */
        public function setForFromTextarea(
            TextareaTag $textarea
        )
        {
            return $this->setFor($textarea->getId());
        }

        /**
         * @param SelectTag $select
         * @return $this
         */
        public function setForFromSelect(
            SelectTag $select
        )
        {
            return $this->setFor($select->getId());
        }
    }
}