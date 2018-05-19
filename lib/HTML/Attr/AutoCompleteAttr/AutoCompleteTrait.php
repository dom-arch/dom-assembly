<?php

namespace DOMAssembly\HTML\Attr\AutoCompleteAttr {

    use DOMAssembly\HTML\Attr\AutoCompleteAttr;

    trait AutoCompleteTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setAutoComplete(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = AutoCompleteAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteOn()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ON);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteOff()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_OFF);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteHonorificPrefix()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_HONORIFIC_PREFIX);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteGivenName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_GIVEN_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAdditionalName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDITIONAL_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteFamilyName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_FAMILY_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteNickname()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_NICKNAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteEmail()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_EMAIL);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteUsername()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_USERNAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteNewPassword()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_NEW_PASSWORD);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCurrentPassword()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CURRENT_PASSWORD);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteOrganizationTitle()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ORGANIZATION_TITLE);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteOrganization()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ORGANIZATION);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteStreetAddress()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_STREET_ADDRESS);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLine1()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LINE_1);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLine2()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LINE_2);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLine3()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LINE_3);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLevel1()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LEVEL_1);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLevel2()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LEVEL_2);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLevel3()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LEVEL_3);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteAddressLevel4()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_ADDRESS_LEVEL_4);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCountry()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_COUNTRY);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCountryName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_COUNTRY_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompletePostalCode()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_POSTAL_CODE);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCC()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCGivenName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_GIVEN_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCAdditionalName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_ADDITIONAL_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCFamilyName()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_FAMILY_NAME);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCNumber()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_NUMBER);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCExp()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_EXP);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCExpMonth()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_EXP_MONTH);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCExpYear()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_EXP_YEAR);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCCSC()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_CSC);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteCCType()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_CC_TYPE);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteTransactionCurrency()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_TRANSACTION_CURRENCY);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteTransactionAmount()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_TRANSACTION_AMOUNT);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteLanguage()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_LANGUAGE);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteBday()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_BDAY);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteBdayDay()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_BDAY_DAY);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteBdayMonth()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_BDAY_MONTH);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteBdayYear()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_BDAY_YEAR);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteSex()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_SEX);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteTel()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_TEL);
        }

        /**
         * @return $this
         */
        public function setAutoCompleteUrl()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_URL);
        }

        /**
         * @return $this
         */
        public function setAutoCompletePhoto()
        {
            return $this->setAutoComplete(AutoCompleteAttr::VALUE_PHOTO);
        }
    }
}