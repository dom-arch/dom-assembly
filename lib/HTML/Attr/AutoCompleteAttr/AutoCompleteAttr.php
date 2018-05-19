<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AutoCompleteAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'autocomplete',
            VALUE_ON = 'on',
            VALUE_OFF = 'off',
            VALUE_NAME = 'name',
            VALUE_HONORIFIC_PREFIX = 'honorific-prefix',
            VALUE_GIVEN_NAME = 'given-name',
            VALUE_ADDITIONAL_NAME = 'additional-name',
            VALUE_FAMILY_NAME = 'family-name',
            VALUE_NICKNAME = 'nickname',
            VALUE_EMAIL = 'email',
            VALUE_USERNAME = 'username',
            VALUE_NEW_PASSWORD = 'new-password',
            VALUE_CURRENT_PASSWORD = 'current-password',
            VALUE_ORGANIZATION_TITLE = 'organization-title',
            VALUE_ORGANIZATION = 'organization',
            VALUE_STREET_ADDRESS = 'street-address',
            VALUE_ADDRESS_LINE_1 = 'address-line1',
            VALUE_ADDRESS_LINE_2 = 'address-line2',
            VALUE_ADDRESS_LINE_3 = 'address-line3',
            VALUE_ADDRESS_LEVEL_1 = 'address-level1',
            VALUE_ADDRESS_LEVEL_2 = 'address-level2',
            VALUE_ADDRESS_LEVEL_3 = 'address-level3',
            VALUE_ADDRESS_LEVEL_4 = 'address-level4',
            VALUE_COUNTRY = 'country',
            VALUE_COUNTRY_NAME = 'country-name',
            VALUE_POSTAL_CODE = 'postal-code',
            VALUE_CC_NAME = 'cc-name',
            VALUE_CC_GIVEN_NAME = 'cc-given-name',
            VALUE_CC_ADDITIONAL_NAME = 'cc-additional-name',
            VALUE_CC_FAMILY_NAME = 'cc-family-name',
            VALUE_CC_NUMBER = 'cc-number',
            VALUE_CC_EXP = 'cc-exp',
            VALUE_CC_EXP_MONTH = 'cc-exp-month',
            VALUE_CC_EXP_YEAR = 'cc-exp-year',
            VALUE_CC_CSC = 'cc-csc',
            VALUE_CC_TYPE = 'cc-type',
            VALUE_TRANSACTION_CURRENCY = 'transaction-currency',
            VALUE_TRANSACTION_AMOUNT = 'transaction-amount',
            VALUE_LANGUAGE = 'language',
            VALUE_BDAY = 'bday',
            VALUE_BDAY_DAY = 'bday-day',
            VALUE_BDAY_MONTH = 'bday-month',
            VALUE_BDAY_YEAR = 'bday-year',
            VALUE_SEX = 'sex',
            VALUE_TEL = 'tel',
            VALUE_URL = 'url',
            VALUE_PHOTO = 'photo';
    }
}