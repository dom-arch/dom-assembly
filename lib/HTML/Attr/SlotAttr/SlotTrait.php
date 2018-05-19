<?php

namespace DOMAssembly\HTML\Attr\SlotAttr {

    use DOMAssembly\HTML\Attr\SlotAttr;
    use DOMAssembly\HTML\Tag\SlotContainerTag;

    trait SlotTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setSlot(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = SlotAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @param SlotContainerTag $slot
         * @return $this
         */
        public function setSlotFromSlot(
            SlotContainerTag $slot
        )
        {
            return $this->setSlot($slot->getName());
        }
    }
}