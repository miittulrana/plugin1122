<?php
/**
 * Unicode Common Locale Data Repository (CLDR) Language-Specific File
 * @Language - Russian
 * @Author - Kestutis Matuliauskas
 * @Email - info@hackathon.lt
 * @Website - http://codecanyon.net/user/KestutisIT
 */
return array(
    // Ext Settings
    'EXT_NAME' => 'Car Rental',
    'EXT_FLEET' => 'Car Rental Fleet',
    'EXT_FLEET_SHORT' => 'Car Fleet',
    'EXT_SYSTEM' => 'Car Rental System',

    // Admin - Ajax
    'LANG_FEATURE_DELETION_DIALOG_TEXT' => 'Do you really want to delete this feature?',
    'LANG_CUSTOMER_DELETION_DIALOG_TEXT' => 'Do you really want to delete this customer? Remember that all reservations made by this customer, invoices and all reserved cars will also be deleted.',
    'LANG_CUSTOMER_REQUIRED_ERROR_TEXT' => 'Error: Customer is required!',
    'LANG_MANUFACTURER_DELETION_DIALOG_TEXT' => 'Do you really want to delete this manufacturer? Remember that cars, made by this manufacturer and related reservations also will be deleted.',
    'LANG_ITEM_MODEL_DELETION_DIALOG_TEXT' => 'Do you want to delete this car model? Remember that all corresponding reservations will also be deleted.',
    'LANG_ITEM_DELETION_DIALOG_TEXT' => 'Do you want to delete this car? Remember that all corresponding reservations will also be deleted.',
    'LANG_ATTRIBUTE_DELETION_DIALOG_TEXT' => 'Do you really want to delete this attribute? All cars, using this attribute and related reservations will be unassigned from it, but not deleted.',
    'LANG_CLASS_DELETION_DIALOG_TEXT' => 'Do you really want to delete this class? Remember that cars, using this class and related reservations also will be deleted.',
    'LANG_EXTRA_DELETION_DIALOG_TEXT' => 'Do you want to delete this extra? Remember that all corresponding discounts will also be deleted.',
    'LANG_LOCATION_DELETION_DIALOG_TEXT' => 'Do you want to delete this location? All related distances and upcoming reservations from/to this location will be deleted. Cars won\'t be deleted, just locations will be unassigned from them .',
    'LANG_PRICE_GROUP_DELETION_DIALOG_TEXT' => 'Do you really want to delete this price group? Remember that all price plans attached to this price group will also be deleted.',
    'LANG_PRICE_PLANS_NONE_AVAILABLE_TEXT' => 'No available price plans found!',
    'LANG_PRICE_GROUP_PLEASE_SELECT_TEXT' => 'Please select a price group first!',
    'LANG_INVOICE_S_TEXT' => 'Invoice #%s',
    'LANG_ORDER_CANCELLATION_DIALOG_TEXT' => 'Are you sure that you want to cancel this reservation?',
    'LANG_ORDER_DELETION_DIALOG_TEXT' => 'Are you sure that you want to delete this reservation? Remember once reservation deleted, it will be deleted forever from your database.',
    'LANG_ORDER_CONFIRMATION_DIALOG_TEXT' => 'Are you sure that you want to confirm this reservation and it is paid as needed?',
    'LANG_ORDER_MARKING_AS_COMPLETED_EARLY_DIALOG_TEXT' => 'Are you sure that you want to mark this reservation as completed right now?',
    'LANG_ORDER_REFUND_DIALOG_TEXT' => 'Are you sure that you want to refund this reservation to customer? Remember that you will have to send payment refund manually to the customer.',
    'LANG_EMAIL_DOES_NOT_EXIST_ERROR_TEXT' => 'Sorry, no email found for this id.',
    'LANG_PRICE_PLAN_DOES_NOT_EXIST_ERROR_TEXT' => 'Sorry, no data found.',

    // Admin - Global
    'LANG_ORDERS_VIEW_TEXT' => 'Посмотреть заказы',
    'LANG_ORDERS_VIEW_UNPAID_TEXT' => 'Посмотреть неоплаченные заказы',
    'LANG_ORDERS_NONE_YET_TEXT' => 'Отзывов пока нет заказы',
    'LANG_ORDER_DETAILS_TEXT' => 'Данные бронирования',
    'LANG_CUSTOMER_DETAILS_FROM_DB_TEXT' => 'Информация о клиенте (последняя версия из базы данных)',
    'LANG_ORDER_STATUS_TEXT' => 'Бронирование статус',
    'LANG_ORDER_STATUS_UPCOMING_TEXT' => 'Upcoming',
    'LANG_ORDER_STATUS_DEPARTED_TEXT' => 'Вылетел',
    'LANG_ORDER_STATUS_COMPLETED_EARLY_TEXT' => 'Completed Early',
    'LANG_ORDER_STATUS_COMPLETED_TEXT' => 'Completed',
    'LANG_ORDER_STATUS_ACTIVE_TEXT' => 'Активный',
    'LANG_ORDER_STATUS_CANCELLED_TEXT' => 'Отменен',
    'LANG_ORDER_STATUS_PAID_TEXT' => 'Платный',
    'LANG_ORDER_STATUS_UNPAID_TEXT' => 'Неоплаченный',
    'LANG_ORDER_STATUS_REFUNDED_TEXT' => 'Возвращено',
    'LANG_INVOICE_PRINT_TEXT' => 'Печать счета',
    'LANG_CUSTOMER_BACK_TO_ORDERS_LIST_TEXT' => 'Вернуться к клиенте бронирования список заказа',
    'LANG_CUSTOMERS_BY_LAST_USED_PERIOD_TEXT' => 'Customers by Last Used Period',
    'LANG_CUSTOMERS_BY_DATE_CREATED_PERIOD_TEXT' => 'Customers by Date Created Period',
    'LANG_ORDERS_PERIOD_FROM_TO_TEXT' => 'Reserv. Period: %s - %s',
    'LANG_PICKUPS_PERIOD_FROM_TO_TEXT' => 'Pick-ups Period: %s - %s',
    'LANG_RETURNS_PERIOD_FROM_TO_TEXT' => 'Returns Period: %s - %s',
    'LANG_ORDERS_BY_CUSTOMER_TEXT' => 'Customer Reservations',
    'LANG_ORDERS_BY_S_TEXT' => 'Reservations by %s',
    'LANG_ALL_ORDERS_TEXT' => 'All Reservations',
    'LANG_ALL_PICKUPS_TEXT' => 'All Pick-ups',
    'LANG_ALL_RETURNS_TEXT' => 'All Returns',
    'LANG_MAX_ITEM_UNITS_PER_ORDER_TEXT' => 'Maximum car units per reservation',
    'LANG_TOTAL_ITEM_UNITS_IN_STOCK_TEXT' => 'Total car units in garage',
    'LANG_MAX_EXTRA_UNITS_PER_ORDER_TEXT' => 'Maximum extra units per reservation',
    'LANG_TOTAL_EXTRA_UNITS_IN_STOCK_TEXT' => 'Total extra units in stock',
    'LANG_PREPAYMENT_ITEMS_PRICE_TEXT' => 'Cars Price',
    'LANG_PREPAYMENT_ITEMS_DEPOSIT_TEXT' => 'Cars Deposit',
    'LANG_PREPAYMENT_EXTRAS_PRICE_TEXT' => 'Extras Price',
    'LANG_PREPAYMENT_EXTRAS_DEPOSIT_TEXT' => 'Extras Deposit',
    'LANG_PREPAYMENT_PICKUP_FEES_TEXT' => 'Pick-Up Fees',
    'LANG_PREPAYMENT_ADDITIONAL_FEES_TEXT' => 'Additional Fees',
    'LANG_PREPAYMENT_RETURN_FEES_TEXT' => 'Returns Fees',
    'LANG_PRICING_REGULAR_PRICE_TEXT' => 'Обычная цена',
    'LANG_PRICE_TYPE_TEXT' => 'Тип цена',
    'LANG_SETTING_ON_THE_LEFT_TEXT' => 'On the Left',
    'LANG_SETTING_ON_THE_RIGHT_TEXT' => 'On the Right',
    'LANG_SETTING_DROPDOWN_STYLE_TEXT' => 'Dropdown style',
    'LANG_SETTING_DROPDOWN_STYLE_1_TEXT' => '[ELEMENT]:',
    'LANG_SETTING_DROPDOWN_STYLE_2_TEXT' => '- Select [ELEMENT] -', // MB
    'LANG_SETTING_INPUT_STYLE_TEXT' => 'Input style',
    'LANG_SETTING_INPUT_STYLE_1_TEXT' => '[TEXT]:',
    'LANG_SETTING_INPUT_STYLE_2_TEXT' => '- [TEXT] -', // MB
    'LANG_SETTING_LOAD_FROM_OTHER_PLACE_TEXT' => 'Load from other place',
    'LANG_SETTING_LOAD_FROM_PLUGIN_TEXT' => 'Load from this plugin',
    'LANG_CALENDAR_NO_CALENDARS_FOUND_TEXT' => 'Календари не найдены для выбранной даты диапазона',
    'LANG_PAGE_SELECT_TEXT' => ' - Choose page - ',
    'LANG_SELECT_EMAIL_TYPE_TEXT' => '--- Выберите тип электронной почта ---',
    'LANG_TOTAL_REQUESTS_LEFT_TEXT' => 'Total requests left',
    'LANG_FAILED_REQUESTS_LEFT_TEXT' => 'failed requests left',
    'LANG_EMAIL_ATTEMPTS_LEFT_TEXT' => 'e-mail attempts left',

    // Item Model Element
    'LANG_ITEM_MODEL_MANAGER_TEXT' => 'Car Model Manager',
    'LANG_ITEM_MODEL_ADD_EDIT_TEXT' => 'Add / Edit Car Model',

    // Item Element
    'LANG_ITEM_TEXT' => 'Aвтомобиль',
    'LANG_ITEM_MANAGER_TEXT' => 'Car Manager',
    'LANG_ITEM_ADD_EDIT_TEXT' => 'Add / Edit Car',
    'LANG_ITEM_BACK_TO_LIST_TEXT' => 'Back to Car List',
    'LANG_ITEM_UNIQUE_IDENTIFIER_TEXT' => 'Unique Identifier',
    'LANG_ITEM_UNIQUE_IDENTIFIER_SHORT_TEXT' => 'Car UID',
    'LANG_ITEM_UNIQUE_IDENTIFIER_USAGE_NOTES_TEXT' => 'Used for Google Enhanced Ecommerce tracking
and when plugin is network-enabled in multisite mode',
    'LANG_ITEM_PRIVATE_NOTES_S_TEXT' => 'Private notes: %s',
    'LANG_ITEM_PUBLIC_NOTES_S_TEXT' => 'Public notes: %s',
    'LANG_ITEM_NOTES_FOR_MODEL_S_UID_S_S_TEXT' => 'Notes for car (model: %s, License plate #: %s): %s',
    'LANG_ITEM_ORDERABLE_TEXT' => 'Reservable', // This is ok to use exact item
    'LANG_ITEM_NOT_ORDERABLE_TEXT' => 'This car is not reservable.',
    'LANG_ITEM_AVAILABLE_FOR_ORDERING_TEXT' => 'Available for reservation', // This is ok to use exact item
    'LANG_ITEM_NOT_AVAILABLE_FOR_ORDERING_TEXT' => 'Этот автомобиль не доступен for reservation.',

    // Manufacturer Element
    'LANG_MANUFACTURER_TEXT' => 'Поставщик автомобилей',
    'LANG_MANUFACTURER_ID_TEXT' => 'Поставщик автомобилей Id',
    'LANG_MANUFACTURER_IDS_TEXT' => 'Поставщик автомобилей Ids',
    'LANG_MANUFACTURER_SELECT_TEXT' => 'Поставщик автомобилей:',
    'LANG_MANUFACTURER_SELECT2_TEXT' => '- Select Поставщик автомобилей -', // MB
    'LANG_MANUFACTURER_ADD_EDIT_TEXT' => 'Add / Edit Поставщик автомобилей',

    // Class Element
    'LANG_CLASS_TEXT' => 'Класса',
    'LANG_CLASS_ID_TEXT' => 'Класса Id',
    'LANG_CLASS_IDS_TEXT' => 'Класса Ids',
    'LANG_CLASS_SELECT_TEXT' => 'Класса:',
    'LANG_CLASS_SELECT2_TEXT' => '- Select Класса -', // MB
    'LANG_CLASS_ADD_NEW_TEXT' => 'Add New Класса',
    'LANG_CLASS_LIST_TEXT' => 'Класса List',
    'LANG_CLASS_ADD_EDIT_TEXT' => 'Add / Edit Class',

    // Additional Fees Observer
    'LANG_ADDITIONAL_FEES_TEXT' => 'Additional Fees',
    'LANG_ADDITIONAL_FEES_NOTES_TEXT' => 'Notes for Additional Fees',
    'LANG_ADDITIONAL_FEES_NONE_AVAILABLE_TEXT' => 'No additional fees available.',

    // Additional Fee Element
    'LANG_ADDITIONAL_FEE_TEXT' => 'Additional Fee',
    'LANG_ADDITIONAL_FEE_MANAGER_TEXT' => 'Additional Fee Manager',
    'LANG_ADDITIONAL_FEE_SHORT_TEXT' => 'Fee',
    'LANG_ADDITIONAL_FEE_ADD_NEW_TEXT' => 'Add New Additional Fee',
    'LANG_ADDITIONAL_FEE_LIST_TEXT' => 'Additional Fee List',
    'LANG_ADDITIONAL_FEE_ADD_EDIT_TEXT' => 'Add / Edit Additional Fee',
    'LANG_ADDITIONAL_FEE_BACK_TO_LIST_TEXT' => 'Back to Additional Fee List',
    'LANG_ADDITIONAL_FEE_NAME_TEXT' => 'Additional Fee Name',
    'LANG_ADDITIONAL_FEE_NAME_SHORT_TEXT' => 'Fee Name',
    'LANG_ADDITIONAL_FEE_OPTIONAL_TO_ALL_LOCATIONS_TEXT' => 'optional, leave blank to apply same additional fee to all locations',
    'LANG_ADDITIONAL_FEE_TAXABLE_TEXT' => 'Taxable',
    'LANG_ADDITIONAL_FEE_TAX_EXEMPT_TEXT' => 'Tax Exempt',
    'LANG_ADDITIONAL_FEE_APPLICATION_TEXT' => 'Fee Application',
    'LANG_ADDITIONAL_FEE_PER_ITEM_TEXT' => 'Per Item',
    'LANG_ADDITIONAL_FEE_PER_ORDER_TEXT' => 'Per Order',
    'LANG_ADDITIONAL_FEE_PRIVATE_NOTES_S_TEXT' => 'Private notes: %s',
    'LANG_ADDITIONAL_FEE_PUBLIC_NOTES_S_TEXT' => 'Public notes: %s',
    'LANG_ADDITIONAL_FEE_BENEFICIAL_ENTITY_TEXT' => 'Beneficial Entity',
    'LANG_ADDITIONAL_FEE_PICKUP_LOCATION_TEXT' => 'Pick-up location, if provided (otherwise - site)',
    'LANG_ADDITIONAL_FEE_RETURN_LOCATION_TEXT' => 'Return location, if provided (otherwise - site)',
    'LANG_ADDITIONAL_FEE_SITE_TEXT' => 'Site',
    'LANG_ADDITIONAL_FEE_SAVE_TEXT' => 'Save additional fee',
    'LANG_ADDITIONAL_FEE_DEFAULT_NAME1_TEXT' => 'Distance Fee',

    // OK / Error Messages - Additional Fee Element
    'LANG_ADDITIONAL_FEE_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing additional fee!',
    'LANG_ADDITIONAL_FEE_UPDATED_TEXT' => 'Completed: Additional fee has been updated successfully!',
    'LANG_ADDITIONAL_FEE_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new additional fee!',
    'LANG_ADDITIONAL_FEE_INSERTED_TEXT' => 'Completed: New additional fee has been added successfully!',
    'LANG_ADDITIONAL_FEE_REGISTERED_TEXT' => 'Additional fee name registered for translation.',
    'LANG_ADDITIONAL_FEE_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing additional fee. No rows were deleted from database!',
    'LANG_ADDITIONAL_FEE_DELETED_TEXT' => 'Completed: Additional fee has been deleted successfully!',

    // Attribute Element
    'LANG_ATTRIBUTE_ADD_EDIT_TEXT' => 'Add / Edit Attribute',

    // Feature Element
    'LANG_FEATURE_TEXT' => 'Feature',
    'LANG_FEATURE_ADD_EDIT_TEXT' => 'Add / Edit Feature',
    'LANG_FEATURE_BACK_TO_LIST_TEXT' => 'Back to Feature List',
    'LANG_FEATURE_ADD_TO_ALL_ITEM_MODELS_TEXT' => 'Add to all car models',
    'LANG_FEATURE_TITLE_TEXT' => 'Feature Title',
    'LANG_FEATURE_KEY_TEXT' => 'Key Feature',
    'LANG_FEATURE_SAVE_TEXT' => 'Save feature',

    // (Item Model) Option Element
    'LANG_ITEM_MODEL_OPTION_ADD_EDIT_TEXT' => 'Add / Edit Car Model Option',
    'LANG_ITEM_OPTION_ADD_EDIT_TEXT' => 'Add / Edit Car Option',
    'LANG_BLOCK_ITEM_MODEL_TEXT' => 'Block Car Model',
    'LANG_BLOCK_ITEM_TEXT' => 'Block Car',

    // Item Model Element
    'LANG_ITEM_MODEL_PRICES_TEXT' => 'Car Model Prices',
    'LANG_PRICE_PLAN_ADD_EDIT_TEXT' => 'Add / Edit Car Price Plan',
    'LANG_PRICE_PLAN_DISCOUNT_ADD_EDIT_TEXT' => 'Add / Edit Price Plan Discount',

    // Extras Element
    'LANG_EXTRAS_MANAGER_TEXT' => 'Extras Manager',
    'LANG_EXTRA_ADD_EDIT_TEXT' => 'Add / Edit Extra',
    'LANG_EXTRA_OPTION_ADD_EDIT_TEXT' => 'Add / Edit Extra Option',
    'LANG_EXTRA_DISCOUNT_ADD_EDIT_TEXT' => 'Add / Edit Extra Discount',
    'LANG_BLOCK_EXTRA_TEXT' => 'Block Extra',

    // Location Element
    'LANG_LOCATION_GLOBAL_TEXT' => 'Global Location',
    'LANG_LOCATION_MANAGER_TEXT' => 'Location Manager',
    'LANG_LOCATION_ADD_EDIT_TEXT' => 'Add / Edit Location',
    'LANG_LOCATION_STATUS_OPEN_TEXT' => 'Открыта',
    'LANG_LOCATION_STATUS_CLOSED_TEXT' => 'Закрыто',
    'LANG_LOCATION_LUNCH_TEXT' => 'Обеда',
    'LANG_LOCATION_LUNCH_TIME_TEXT' => 'Время обеда',

    // Distance Element
    'LANG_DISTANCE_ADD_EDIT_TEXT' => 'Add / Edit Distance',

    // OK / Error Messages - Orders Observer
    'LANG_ORDERS_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for one or more of existing orders!',
    'LANG_ORDERS_D_UPDATED_TEXT' => 'Completed: %s orders updated successfully!',

    // Order Element
    'LANG_ORDER_MANAGER_TEXT' => 'Reservation Manager',
    'LANG_ORDER_SEARCH_RESULTS_TEXT' => 'Reservation Search Results',
    'LANG_ITEM_MODELS_AVAILABILITY_SEARCH_RESULTS_TEXT' => 'Car Models Availability Search Results',
    'LANG_ITEMS_AVAILABILITY_SEARCH_RESULTS_TEXT' => 'Cars Availability Search Results',
    'LANG_EXTRAS_AVAILABILITY_SEARCH_TEXT' => 'Extras Availability Search Results',
    'LANG_CUSTOMER_SEARCH_RESULTS_TEXT' => 'Customer Search Results',
    'LANG_CUSTOMER_ADD_EDIT_TEXT' => 'Add/Edit Customer',
    'LANG_CUSTOMER_ADD_EDIT2_TEXT' => 'Add/edit customer', // Uppercase lowercase
    'LANG_CUSTOMER_ADD_NEW_TEXT' => 'Add New Customer',
    'LANG_CUSTOMER_ADD_NEW2_TEXT' => 'Add new customer', // Uppercase lowercase
    'LANG_CUSTOMER_BACK_TO_LIST_TEXT' => 'Back to Customer List',
    'LANG_ORDER_ADD_EDIT_TEXT' => 'Add/Edit Reservation',

    // Customer Element
    'LANG_CUSTOMER_MANAGER_TEXT' => 'Customer Manager',
    'LANG_CUSTOMER_LOOKUP_TEXT' => 'Customer Lookup',

    // Notification Element
    'LANG_NOTIFICATION_MANAGER_TEXT' => 'Notification Manager',

    // Tax Element
    'LANG_TAX_MANAGER_TEXT' => 'Tax Manager',
    'LANG_TAX_ADD_EDIT_TEXT' => 'Add / Edit Tax',

    // Payment Method Element
    'LANG_PAYMENT_METHOD_ADD_EDIT_TEXT' => 'Add / Edit Payment Method',
    'LANG_PAYMENT_METHOD_BACK_TO_LIST_TEXT' => 'Back to Payment Method List',
    'LANG_PAYMENT_METHOD_ID_TEXT' => 'Payment Method Id',
    'LANG_PAYMENT_METHOD_CODE_TEXT' => 'Payment Method Code',
    'LANG_PAYMENT_METHOD_NAME_TEXT' => 'Payment Method Name',
    'LANG_PAYMENT_METHOD_CLASS_TEXT' => 'Payment Method Class',
    'LANG_PAYMENT_METHOD_EMAIL_TEXT' => 'Payment Method E-Mail',
    'LANG_PAYMENT_METHOD_DESCRIPTION_TEXT' => 'Payment Method Description',
    'LANG_PAYMENT_METHOD_PUBLIC_KEY_TEXT' => 'Public Key',
    'LANG_PAYMENT_METHOD_PUBLIC_KEY_SHORT_TEXT' => 'Public',
    'LANG_PAYMENT_METHOD_PRIVATE_KEY_TEXT' => 'Private Key',
    'LANG_PAYMENT_METHOD_PRIVATE_KEY_SHORT_TEXT' => 'Private',
    'LANG_PAYMENT_METHOD_ORDER_TEXT' => 'Payment Method Order',
    'LANG_PAYMENT_METHOD_ORDER_OPTIONAL_TEXT' => 'optional, leave blank to add to the end',
    'LANG_PAYMENT_METHOD_SAVE_TEXT' => 'Save payment method',

    // Prepayment Element
    'LANG_PREPAYMENT_ADD_EDIT_TEXT' => 'Add / Edit Prepayment',

    // Ext - Popular
    'LANG_ITEM_MODEL_TEXT' => 'Модель автомобиля',
    'LANG_EXTRA_TEXT' => 'Дополнительно',
    'LANG_RENTAL_OPTION_TEXT' => 'Дополнительно',
    'LANG_ITEM_MODELS_TEXT' => 'Aвтомобилей model',
    'LANG_ITEMS_TEXT' => 'Aвтомобилей',
    'LANG_EXTRAS_TEXT' => 'Варианты аренды',
    'LANG_RENTAL_OPTIONS_TEXT' => 'Варианты аренды',
    'LANG_ITEM_MODEL_SHOW_TEXT' => 'Посмотреть car model',
    'LANG_COUPON_TEXT' => 'Coupon',

    // Search Element
    'LANG_SEARCH_TEXT' => 'Поиск',
    'LANG_SEARCH_DEFAULT_SEARCH_PAGE_URL_SLUG_TEXT' => 'search', // Latin letters only
    'LANG_TAX_WITH_TEXT' => 'с НДС',
    'LANG_TAX_WITHOUT_TEXT' => 'без НДС',
    'LANG_TAX_SHORT_TEXT' => 'НДС',
    'LANG_DEPOSIT_TEXT' => 'Депозит',
    'LANG_DISCOUNT_TEXT' => 'Скидка',
    'LANG_PREPAYMENT_TEXT' => 'Сумма предоплаты',
    'LANG_ITEM_MODELS_NONE_AVAILABLE_TEXT' => 'Нет доступных автомобилей',
    'LANG_ITEM_MODELS_NONE_AVAILABLE_IN_THIS_CLASS_TEXT' => 'Нет автомобилей, доступных в этом классе',
    'LANG_ITEMS_NONE_AVAILABLE_TEXT' => 'Нет доступных автомобилей',
    'LANG_ITEMS_NONE_AVAILABLE_IN_THIS_CLASS_TEXT' => 'Нет автомобилей, доступных в этом классе',
    'LANG_EXTRAS_NONE_AVAILABLE_TEXT' => 'Нет доступных аренды',
    'LANG_MANUFACTURERS_NONE_AVAILABLE_TEXT' => 'No manufacturers available',
    'LANG_LOCATIONS_NONE_AVAILABLE_TEXT' => 'No locations available',
    'LANG_ORDER_MARK_PAID_TEXT' => 'Взять платные',
    'LANG_ORDER_MARK_COMPLETED_EARLY_TEXT' => 'Mark Completed Early',
    'LANG_ORDER_REFUND_TEXT' => 'Возврат oплата',
    'LANG_LOCATION_SELECT2_TEXT' => '- Выбрать место -',
    'LANG_LOCATIONS_ALL_TEXT' => 'Все филиалы',
    'LANG_PRICING_DAILY_TEXT' => 'Ежедневниый',
    'LANG_PRICING_HOURLY_TEXT' => 'Почасовой',
    'LANG_PRICING_PER_ORDER2_TEXT' => 'За бронирование',
    'LANG_PRICING_COMBINED_DAILY_AND_HOURLY_TEXT' => 'Комбинированный - ежедневниый и почасовой',
    'LANG_PRICING_PER_ORDER_TEXT' => 'за бронирование',
    'LANG_PRICING_PER_ORDER_SHORT_TEXT' => '',
    'LANG_PRICING_PER_YEAR_TEXT' => 'yearr',
    'LANG_PRICING_PER_YEAR_SHORT_TEXT' => 'yr',
    'LANG_PRICING_PER_MONTH_TEXT' => 'month',
    'LANG_PRICING_PER_MONTH_SHORT_TEXT' => 'mth',
    'LANG_PRICING_PER_WEEK_TEXT' => 'week',
    'LANG_PRICING_PER_WEEK_SHORT_TEXT' => 'wk',
    'LANG_PRICING_PER_DAY_TEXT' => 'день',
    'LANG_PRICING_PER_DAY_SHORT_TEXT' => 'д.',
    'LANG_PRICING_PER_NIGHT_TEXT' => 'night',
    'LANG_PRICING_PER_NIGHT_SHORT_TEXT' => 'n.',
    'LANG_PRICING_PER_HOUR_TEXT' => 'час',
    'LANG_PRICING_PER_HOUR_SHORT_TEXT' => 'час',
    'LANG_PRICING_PER_MINUTE_TEXT' => 'minute',
    'LANG_PRICING_PER_MINUTE_SHORT_TEXT' => 'min',

    // Search step no. 1 - item search
    'LANG_ORDER_TEXT' => 'резервирование',
    'LANG_PICKUP_TEXT' => 'Выдача',
    'LANG_RETURN_TEXT' => 'Возврата',
    'LANG_INFORMATION_TEXT' => 'информация',
    'LANG_CITY_AND_LOCATION_TEXT' => 'Город и место:',
    'LANG_SEARCH_PICKUP_CITY_AND_LOCATION_SELECT_TEXT' => 'Город и место выдачи:',
    'LANG_SEARCH_PICKUP_CITY_AND_LOCATION_SELECT2_TEXT' => '- Select Город и место выдачи -', // MB
    'LANG_SEARCH_RETURN_CITY_AND_LOCATION_SELECT_TEXT' => 'Город и место возврата:',
    'LANG_SEARCH_RETURN_CITY_AND_LOCATION_SELECT2_TEXT' => '- Select Город и место возврата -', // MB
    'LANG_ORDER_PERIOD_SELECT_TEXT' => 'Период бронирование:',
    'LANG_ORDER_PERIOD_SELECT2_TEXT' => ' - Select Period -', // MB
    'LANG_COUPON_CODE_TEXT' => 'Код купона',
    'LANG_ORDER_CODE_INPUT_TEXT' => 'Я имею номер резервирование:',
    'LANG_ORDER_CODE_INPUT2_TEXT' => '- Я имею номер резервирование -', // MB
    'LANG_COUPON_CODE_INPUT_TEXT' => 'Я имею код купона:',
    'LANG_COUPON_CODE_INPUT2_TEXT' => '- Я имею код купона -', // MB
    'LANG_LOCATION_PICKUP_TEXT' => 'Место встречи',
    'LANG_LOCATION_RETURN_TEXT' => 'Место высадки',
    'LANG_ALL_BODY_TYPES_DROPDOWN_TEXT' => '---- Все типи ----',
    'LANG_ALL_TRANSMISSION_TYPES_DROPDOWN_TEXT' => '---- Все передачи ----',
    'LANG_SELECT_PICKUP_LOCATION_TEXT' => '--Выберите место встречи--',
    'LANG_SELECT_RETURN_LOCATION_TEXT' => '--Выберите место высадки--',
    'LANG_PICKUP_DATE_TEXT' => 'Пикап дата',
    'LANG_RETURN_DATE_TEXT' => 'Дата сдачи',
    'LANG_ORDER_NO_PERIOD_SELECTED_ERROR_TEXT' => 'Введите, пожалуйста, периода бронирования!',
    'LANG_ORDER_PERIOD_REQUIRED_ERROR_TEXT' => 'Error: Reservation period is required!',
    'LANG_LOCATION_PICKUP_REQUIRED_ERROR_TEXT' => 'Error: Pick-up location is required!',
    'LANG_LOCATION_RETURN_REQUIRED_ERROR_TEXT' => 'Error: Return location is required!',
    'LANG_LOCATION_PICKUP_SELECT_ERROR_TEXT' => 'Пожалуйста, выберите место встречи!',
    'LANG_LOCATION_RETURN_SELECT_ERROR_TEXT' => 'Пожалуйста, выберите место высадки!',
    'LANG_SHOW_ITEM_DESCRIPTION_TEXT' => 'Показать описание автомобиля',
    'LANG_ORDER_UPDATE_MY_ORDER_TEXT' => 'Обновление Мой бронирование',
    'LANG_CANCEL_ORDER_TEXT' => 'Pазбронировать',
    'LANG_ORDER_CHANGE_DATE_TIME_AND_LOCATION_TEXT' => 'Изменить дата, время и место',
    'LANG_ORDER_CHANGE_ORDERED_ITEM_MODELS_TEXT' => 'Изменить автомобили',
    'LANG_ORDER_CHANGE_ORDERED_ITEMS_TEXT' => 'Изменить автомобили',
    'LANG_CHANGE_EXTRAS_TEXT' => 'Изменить дополнительно',
    'LANG_CHANGE_RENTAL_OPTIONS_TEXT' => 'Изменить дополнительно',
    'LANG_IN_THIS_LOCATION_TEXT' => 'В этом месте',
    'LANG_AFTERHOURS_PICKUP_IS_NOT_ALLOWED_TEXT' => 'Невозможно',
    'LANG_AFTERHOURS_RETURN_IS_NOT_ALLOWED_TEXT' => 'Невозможно',

    // Search step no. 3 - search results
    'LANG_DISTANCE_AWAY_TEXT' => '%s',
    'LANG_ORDER_DATA_TEXT' => 'Детали Бронирование',
    'LANG_ORDER_CODE_TEXT' => 'Бронирование номер',
    'LANG_ORDER_CODE2_TEXT' => 'Бронирование номер', // Uppercase lowercase
    'LANG_ORDER_EDIT_TEXT' => 'редактировать',
    'LANG_ORDER_VIEW_DETAILS_TEXT' => 'View Reservation Details',
    'LANG_ORDER_PICKUP_TEXT' => 'Подобрать',
    'LANG_ORDER_BUSINESS_HOURS_TEXT' => 'Pабочее время',
    'LANG_ORDER_FEE_TEXT' => 'Плата',
    'LANG_ORDER_RETURN_TEXT' => 'Bозвращение',
    'LANG_ORDER_NIGHTLY_RATE_TEXT' => 'после часов',
    'LANG_ORDER_AFTERHOURS_TEXT' => 'После часов',
    'LANG_ORDER_EARLY_TEXT' => 'Early',
    'LANG_ORDER_LATE_TEXT' => 'Late',
    'LANG_ORDER_AFTERHOURS_PICKUP_TEXT' => 'После срабатывания часов',
    'LANG_ORDER_AFTERHOURS_PICKUP_IMPOSSIBLE_TEXT' => 'Hевозможно',
    'LANG_ORDER_AFTERHOURS_RETURN_TEXT' => 'После возвращения часов',
    'LANG_ORDER_AFTERHOURS_RETURN_IMPOSSIBLE_TEXT' => 'Hевозможно',
    'LANG_SEARCH_RESULTS_TEXT' => 'Результат поиска',

    // Search step no. 4 - booking options
    'LANG_SELECT_RENTAL_OPTIONS_TEXT' => 'Выберите дополнительно',
    'LANG_SELECTED_ITEMS_TEXT' => 'Выбранный автомобиль',
    'LANG_FOR_DEPENDANT_ITEM_TEXT' => ' (для %s)',
    'LANG_NO_EXTRAS_AVAILABLE_CLICK_CONTINUE_TEXT' => 'Не Автоаксессуары доступны. Нажмите на кнопку Продолжить',

    // Search step no. 5 - booking details
    'LANG_PICKUP_DATE_AND_TIME_TEXT' => 'Пикап Дата &amp; Bремя',
    'LANG_RETURN_DATE_AND_TIME_TEXT' => 'Бросьте-офф Дата &amp; Bремя',
    'LANG_UNIT_PRICE_TEXT' => 'Цена за единицу',
    'LANG_LOCATION_PICKUP_FEE_TEXT' => 'Пикап заряд',
    'LANG_LOCATION_PICKUP_FEE2_TEXT' => 'Пикап заряд', // Uppercase lowercase
    'LANG_LOCATION_RETURN_FEE_TEXT' => 'Бросьте-офф заряд',
    'LANG_LOCATION_RETURN_FEE2_TEXT' => 'Бросьте-офф заряд', // Uppercase lowercase
    'LANG_LOCATION_NIGHTLY_RATE_APPLIED_TEXT' => '(Стоимость за сутки применяется)',
    'LANG_ITEMS_QUANTITY_SUFFIX_TEXT' => 'автомобиль(-ей)',
    'LANG_EXTRAS_QUANTITY_SUFFIX_TEXT' => 'дополнительный(о)',
    'LANG_PAY_NOW_OR_AT_PICKUP_TEXT' => 'Заплатить сейчас / в месте',
    'LANG_PAYMENT_PAY_NOW_TEXT' => 'Заплатить сейчас',
    'LANG_PAYMENT_PAY_AT_PICKUP_TEXT' => 'Оплата в месте',
    'LANG_PAYMENT_PAY_LATER_OR_ON_RETURN_TEXT' => 'Оплатить позже / о возвращении',
    'LANG_PAYMENT_PAY_LATER_TEXT' => 'Оплатить позже',
    'LANG_PAYMENT_PAY_ON_RETURN_TEXT' => 'Оплатить о возвращении',
    'LANG_ORDER_RENTAL_DETAILS_TEXT' => 'Детали аренды',
    'LANG_PAYMENT_GROSS_TOTAL_TEXT' => 'Промежуточный итог',
    'LANG_PAYMENT_GRAND_TOTAL_TEXT' => 'Общий итог',
    'LANG_CUSTOMER_DETAILS_TEXT' => 'Информация о клиенте',
    'LANG_CUSTOMER_SEARCH_FOR_EXISTING_TEXT' => 'Информация о клиенте',
    'LANG_CUSTOMER_EXISTING_TEXT' => 'Существующий клиент',
    'LANG_CUSTOMER_DATE_CREATED_TEXT' => 'Date Created',
    'LANG_CUSTOMER_DATE_CREATED_IP_TEXT' => 'Date Created IP',
    'LANG_CUSTOMER_DATE_CREATED_REAL_IP_TEXT' => 'Date Created Real IP',
    'LANG_CUSTOMER_LAST_USED_TEXT' => 'Last Used',
    'LANG_CUSTOMER_LAST_USED_IP_TEXT' => 'Last Used IP',
    'LANG_CUSTOMER_LAST_USED_REAL_IP_TEXT' => 'Last Used Real IP',
    'LANG_CUSTOMER_ACCOUNT_STATUS_TEXT' => 'Account Status',
    'LANG_CUSTOMER_STATUS_LOCKED_TEXT' => 'Locked',
    'LANG_CUSTOMER_STATUS_UNLOCKED_TEXT' => 'Unlocked',
    'LANG_CUSTOMER_FETCH_DETAILS_TEXT' => 'Fetch детали',
    'LANG_CUSTOMER_OR_ENTER_DETAILS_TEXT' => 'ИЛИ',
    'LANG_CUSTOMER_TEXT' => 'Клиент',
    'LANG_CUSTOMER_SELECT_TEXT' => 'Select Customer',
    'LANG_CITY_TEXT' => 'Город',
    'LANG_STATE_TEXT' => 'Государство',
    'LANG_COUNTRY_TEXT' => 'Страна',
    'LANG_ADDITIONAL_COMMENTS_TEXT' => 'Дополнительные комментарии',
    'LANG_CUSTOMER_ID_TEXT' => 'Идентификатор клиента',
    'LANG_CUSTOMER_NAME_TEXT' => 'Customer Name',
    'LANG_CUSTOMER_PHONE_TEXT' => 'Customer Phone',
    'LANG_CUSTOMER_EMAIL_TEXT' => 'Customer E-mail',
    'LANG_CUSTOMER_FIELD_TEXT' => 'Customer Field',
    'LANG_PAYMENT_PAY_BY_SHORT_TEXT' => 'Оплата',
    'LANG_SEARCH_I_AGREE_WITH_TERMS_AND_CONDITIONS_TEXT' => 'Я согласен с',
    'LANG_TERMS_AND_CONDITIONS_TEXT' => '& Условия',
    'LANG_FIELD_REQUIRED_TEXT' => 'Это поле является обязательным',

    // Search step no. 6 - process booking
    'LANG_PAYMENT_DETAILS_TEXT' => 'Детали платежа',
    'LANG_PAYMENT_OPTION_TEXT' => 'Вариант оплаты',
    'LANG_PAYMENT_PROCESSING_TEXT' => 'Обработка платежа ...',
    'LANG_ORDER_PLEASE_WAIT_UNTIL_WILL_BE_PROCESSED_TEXT' => 'Пожалуйста, подождите, ваш заказ будет обработан ...',

    // display-booking-confirm.php
    'LANG_STEP5_PAY_ONLINE_TEXT' => 'Оплаченный онлайн',
    'LANG_STEP5_PAY_AT_PICKUP_TEXT' => 'Оплата в месте',
    'LANG_ORDER_RECEIVED_YOUR_CODE_S_TEXT' => 'Ваше бронирование подтверждено. Бронирование No. %s.',
    'LANG_ORDER_CONFIRMED_YOUR_CODE_S_TEXT' => 'Ваше бронирование подтверждено. Бронирование No. %s.',
    'LANG_ORDER_UPDATED_YOUR_CODE_S_TEXT' => 'Ваше бронирование подтверждено. Бронирование No. %s.',
    'LANG_INVOICE_SENT_TO_YOUR_EMAIL_ADDRESS_TEXT' => 'Счет-фактура направлен в ваш адрес электронной почты',

    // display-booking-failure.php
    'LANG_ORDER_FAILURE_TEXT' => 'Ошибка бронирования',
    'LANG_SEARCH_ALL_ITEM_MODELS_TEXT' => 'Искать все автомобили',
    'LANG_SEARCH_FIELD_TEXT' => 'Search Field',
    'LANG_SEARCH_FOR_TEXT' => 'Search For',
    'LANG_SEARCH_FOR2_TEXT' => 'Search for', // Uppercase lowercase
    'LANG_SEARCH_OPTIONS_TEXT' => 'Rental Options',
    'LANG_SEARCH_NO_OPTIONS_AVAILABLE_TEXT' => 'No rental options available.',

    // display-item-models-price-table.php
    'LANG_DAY_PRICE_TEXT' => 'День цена',
    'LANG_HOUR_PRICE_TEXT' => 'Час цена',
    'LANG_NO_ITEM_MODELS_IN_THIS_CATEGORY_TEXT' => 'Там нет автомобилей в этой категории',
    'LANG_PRICE_FOR_DAY_FROM_TEXT' => 'Цена за день, начиная с',
    'LANG_PRICE_FOR_HOUR_FROM_TEXT' => 'Цена за час, начиная с',
    'LANG_PRICE_WITH_APPLIED_TEXT' => 'с прикладной',
    'LANG_WITH_APPLIED_DISCOUNT_TEXT' => 'Cкидка',

    // class.ItemsAvailability.php
    'LANG_MONTH_DAY_TEXT' => 'День',
    'LANG_MONTH_DAYS_TEXT' => 'Дней',
    'LANG_ITEMS_AVAILABILITY_FOR_TEXT' => 'Наличие автомобилей в',
    'LANG_ITEMS_AVAILABILITY_IN_NEXT_30_DAYS_TEXT' => 'Наличие автомобилей в 30 дней',
    'LANG_ITEMS_PARTIAL_AVAILABILITY_FOR_TEXT' => 'Частично доступны автомобилей в',
    'LANG_ITEMS_AVAILABILITY_THIS_MONTH_TEXT' => 'Наличие автомобилей в этом месяце',
    'LANG_ITEMS_AVAILABILITY_NEXT_MONTH_TEXT' => 'Наличие автомобилей в следующем месяце',
    'LANG_ITEM_MODEL_ID_TEXT' => 'ИД:',
    'LANG_TOTAL_ITEMS_TEXT' => 'Всего автомобилей:',

    // class.ExtrasAvailability.php
    'LANG_EXTRAS_AVAILABILITY_FOR_TEXT' => 'Наличие аренды в',
    'LANG_EXTRAS_AVAILABILITY_IN_NEXT_30_DAYS_TEXT' => 'Наличие аренды в 30 дней',
    'LANG_EXTRAS_PARTIAL_AVAILABILITY_FOR_TEXT' => 'Частично доступны аренды в',
    'LANG_EXTRAS_AVAILABILITY_THIS_MONTH_TEXT' => 'Наличие аренды в этом месяце',
    'LANG_EXTRAS_AVAILABILITY_NEXT_MONTH_TEXT' => 'Наличие аренды в следующем месяце',
    'LANG_EXTRA_ID_TEXT' => 'ИД',
    'LANG_TOTAL_EXTRAS_TEXT' => 'Всего аренды:',

    // class.ItemModelsController.php
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME1_TEXT' => 'Топливо',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL1_TEXT' => 'Топливо',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME2_TEXT' => 'Kоробка передач',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL2_TEXT' => 'Kоробка передач',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME3_TEXT' => 'Топливные потребление',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL3_TEXT' => 'Топливные потребление',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME4_TEXT' => 'Пассажировместимость',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL4_TEXT' => 'Пассажировместимость',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME5_TEXT' => 'Объем двигателя',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL5_TEXT' => 'Объем двигателя',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME6_TEXT' => 'Количество мешков',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL6_TEXT' => 'Количество мешков',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME7_TEXT' => 'Количество дверей',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL7_TEXT' => 'Количество дверей',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_NAME8_TEXT' => 'Пробег',
    'LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL8_TEXT' => 'Пробег',
    'LANG_PRICING_PRICE_FROM_TEXT' => 'Цена от',
    'LANG_PRICING_INQUIRE_TEXT' => 'Call',
    'LANG_PRICING_GET_A_QUOTE_TEXT' => 'Позвоните цене',
    'LANG_FEATURES_TEXT' => 'Oсобенности',
    'LANG_PRICING_GET_IT_TEXT' => 'Забронировать',

    // class.LocationsController.php
    'LANG_LOCATIONS_BUSINESS_HOURS_TEXT' => 'Business Hours',
    'LANG_LOCATION_FEES_TEXT' => 'Место сборы',
    'LANG_EARLY_PICKUP_TEXT' => 'Early Pick-Up',
    'LANG_LATE_PICKUP_TEXT' => 'Late Pick-Up',
    'LANG_EARLY_RETURN_TEXT' => 'Early Return',
    'LANG_LATE_RETURN_TEXT' => 'Late Return',
    'LANG_EARLY_PICKUP_FEE_TEXT' => 'Early pick-up fee',
    'LANG_LATE_RETURN_FEE_TEXT' => 'Late return fee',
    'LANG_LOCATION_VIEW_TEXT' => 'View Location',

    // class.ItemModelController.php
    'LANG_ITEM_MODEL_MINIMUM_ALLOWED_AGE_TEXT' => 'Минимальный возраст водителя',
    'LANG_ITEM_MODEL_MAXIMUM_ALLOWED_AGE_TEXT' => 'Maximum Driver Age',
    'LANG_ITEM_MODEL_MIN_ALLOWED_AGE_TEXT' => 'Минимальный возраст водителя',
    'LANG_ITEM_MODEL_MAX_ALLOWED_AGE_TEXT' => 'Max. driver age',
    'LANG_ITEM_MODEL_IMAGE1_TEXT' => 'Main Image',
    'LANG_ITEM_MODEL_IMAGE2_TEXT' => 'Interior Image',
    'LANG_ITEM_MODEL_IMAGE3_TEXT' => 'Boot Image',
    'LANG_ITEM_MODEL_FEATURES_TEXT' => 'Car Model Features',
    'LANG_ITEM_MODEL_PRICE_GROUP_OPTIONAL_TEXT' => 'optional, leave blank to show \'Get a quote\' phrase instead of price',
    'LANG_ITEM_MODEL_FIXED_DEPOSIT_TEXT' => 'Fixed Deposit',
    'LANG_ITEM_MODEL_FIXED_DEPOSIT_NOTES_TEXT' => 'taxes are not applicable for deposit - it is a refundable amount without taxes',
    'LANG_ITEM_MODEL_ADDITIONAL_INFORMATION_TEXT' => 'Дополнительная информация',
    'LANG_ITEM_MODEL_LIST_TEXT' => 'Car Model List',
    'LANG_ITEM_MODEL_SLIDER_TEXT' => 'Car Model Slider',
    'LANG_ITEM_MODEL_PRICE_TABLE_TEXT' => 'Car Model Price Table',
    'LANG_ITEM_MODEL_AVAILABILITY_CALENDAR_TEXT' => 'Car Model Availability Calendar',
    'LANG_ITEM_MODEL_SAVE_TEXT' => 'Save car model',
    'LANG_ITEM_MODEL_ANY_TEXT' => 'Any Car Model',
    'LANG_ITEM_MODEL_UNLIMITED_NUMBER_OF_ITEMS_TEXT' => 'There are unlimited number of cars of this model.',
    'LANG_ITEM_MODEL_NO_ITEMS_AVAILABLE_TEXT' => 'No cars available of this model.',
    'LANG_ITEM_MODEL_VISIT_PAGE_TEXT' => 'Показать описание автомобиля',

    // class.LocationController.php
    'LANG_CONTACTS_TEXT' => 'Contacts',
    'LANG_CONTACT_DETAILS_TEXT' => 'Contact Details',
    'LANG_BUSINESS_HOURS_FEES_TEXT' => 'Business Hours Fees',
    'LANG_AFTERHOURS_FEES_TEXT' => 'After Hours Fees',

    // template.CancelledDetails.php
    'LANG_ORDER_S_CANCELLED_SUCCESSFULLY_TEXT' => 'Бронирование %s отменено успешно.',
    'LANG_ORDER_NOT_CANCELLED_CODE_S_DOES_NOT_EXIST_TEXT' => 'Бронирование не было отменено. Reservation code %s - does not exist.',

    // template.Step8EditBooking.php
    'LANG_SEARCH_CHANGE_ORDER_TEXT' => 'Изменение
оговорка',
    'LANG_SEARCH_CHANGE_ORDER2_TEXT' => 'Изменение оговорка',
    'LANG_ORDER_NO_CODE_ERROR_TEXT' => 'Пожалуйста, введите номер оговорка!',

    // Errors
    'LANG_ERROR_REQUIRED_FIELD_TEXT' => 'Обязательное поле',
    'LANG_ERROR_IS_EMPTY_TEXT' => 'пустой',
    'LANG_ERROR_SLIDER_CANT_BE_DISPLAYED_TEXT' => 'Слайдер не может быть отображен',
    'LANG_CUSTOMER_DETAILS_NOT_FOUND_ERROR_TEXT' => 'Ни один клиент не существует с обеспеченными деталей. Пожалуйста, создайте новую учетную запись.',
    'LANG_ERROR_CUSTOMER_DETAILS_NO_ERROR_TEXT' => 'Нет ошибки',
    'LANG_CUSTOMER_EXCEEDED_LOOKUP_ATTEMPTS_ERROR_TEXT' => 'Вы превысили подробно клиент попытки поиска. Пожалуйста, введите свои данные вручную в форму, приведенную ниже.',
    'LANG_ERROR_ORDER_DOES_NOT_EXIST_TEXT' => 'не существует',
    'LANG_ITEM_MODELS_PLEASE_SELECT_AT_LEAST_ONE_ITEM_MODEL_ERROR_TEXT' => 'Пожалуйста, выберите по крайней мере один автомобиль',
    'LANG_ITEMS_PLEASE_SELECT_AT_LEAST_ONE_ITEM_ERROR_TEXT' => 'Пожалуйста, выберите по крайней мере один автомобиль',
    'LANG_ERROR_SEARCH_ENGINE_DISABLED_TEXT' => 'Извините, онлайн бронирование в настоящее время не имеется. Пожалуйста, попробуйте позже.',
    'LANG_SEARCH_OUT_BEFORE_IN_ERROR_TEXT' => 'Извините вы ввели неверный ища критерии. Пожалуйста, попробуйте с действительным ища критерии.',
    'LANG_SEARCH_MINIMUM_DURATION_CANT_BE_LESS_THAN_S_ERROR_TEXT' => 'Минимальное число ночи должно быть не меньше, чем %s.',
    'LANG_SEARCH_ERROR_PLEASE_MODIFY_YOUR_SEARCH_CRITERIA_TEXT' => 'Пожалуйста, измените ваш ища критерии.',
    'LANG_ERROR_PICKUP_IS_NOT_POSSIBLE_ON_TEXT' => 'Бронирование не возможно для даты заезда:',
    'LANG_ERROR_PLEASE_MODIFY_YOUR_PICKUP_TIME_BY_WEBSITE_TIME_TEXT' => 'Пожалуйста измените критерии поиска по словам дата и время',
    'LANG_ERROR_CURRENT_DATE_TIME_TEXT' => 'Гостиницы текущие дата и время:',
    'LANG_ERROR_EARLIEST_POSSIBLE_PICKUP_DATE_TIME_TEXT' => 'Возможно короткий срок даты и времени пикап:',
    'LANG_ERROR_OR_NEXT_BUSINESS_HOURS_OF_PICKUP_LOCATION_TEXT' => 'или в первый раз после него, когда выбран пикап расположение открыта',
    'LANG_ERROR_PICKUP_DATE_CANT_BE_LESS_THAN_RETURN_DATE_TEXT' => 'Не пикап дата & время может быть меньше, чем от высадки даты & времени. Пожалуйста, выберите правильное время & пикап & высадки Дата',
    'LANG_ERROR_PICKUP_LOCATION_IS_CLOSED_AT_THIS_DATE_TEXT' => 'Pick-up branch %s at address %s is closed at this date (%s).',
    'LANG_ERROR_PICKUP_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT' => 'Pick-up branch %s at address %s is closed at this time (%s).',
    'LANG_ERROR_RETURN_LOCATION_IS_CLOSED_AT_THIS_DATE_TEXT' => 'Return branch %s at address %s is closed at this date (%s).',
    'LANG_ERROR_RETURN_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT' => 'Return branch %s at address %s is closed at this time (%s).',
    'LANG_ERROR_AFTERHOURS_PICKUP_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT' => 'After hours pickup branch is %s at address %s but that branch is also closed at this time.',
    'LANG_ERROR_AFTERHOURS_RETURN_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT' => 'After hours return branch is %s at address %s but that branch is also closed at this time.',
    'LANG_ERROR_LOCATION_OPEN_HOURS_ARE_TEXT' => 'Эта место на %s, %s рабочие часы %s.',
    'LANG_ERROR_LOCATION_WEEKLY_OPEN_HOURS_ARE_TEXT' => 'Эта место часы работы в течение недели в:',
    'LANG_ERROR_AFTERHOURS_PICKUP_LOCATION_OPEN_HOURS_ARE_TEXT' => 'После часа Pick-up отраслевые открытые часы %s.',
    'LANG_ERROR_AFTERHOURS_RETURN_LOCATION_OPEN_HOURS_ARE_TEXT' => 'После часа Return отраслевые открытые часы %s.',
    'LANG_ERROR_AFTERHOURS_PICKUP_IS_NOT_ALLOWED_AT_LOCATION_TEXT' => 'После часа срабатывания машину не допускается в этом месте.',
    'LANG_ERROR_AFTERHOURS_RETURN_IS_NOT_ALLOWED_AT_LOCATION_TEXT' => 'После часа оставите машину не допускается в этом месте.',
    'LANG_SEARCH_MAXIMUM_DURATION_CANT_BE_MORE_THAN_S_ERROR_TEXT' => 'Максимальное количество дней не должно быть выше, чем %s.',
    'LANG_ORDER_INVALID_CODE_ERROR_TEXT' => 'Неверный бронирования личности или это заказ больше не существует.',
    'LANG_ERROR_INVALID_SECURITY_CODE_TEXT' => 'Неверный код безопасности.',
    'LANG_ITEM_MODEL_AGE_S_ERROR_TEXT' => 'Based on your birthdate, your age does not match the minimum driver age requirement for %s.',
    'LANG_ITEM_MODEL_AGE_ERROR_TEXT' => 'Based on your birthdate, your age does not match the minimum driver age requirement for one of selected car models.',
    'LANG_ORDER_NO_S_PICKED_UP_ERROR_TEXT' => 'Резервация #%s уже помечен как ушел, и не доступен для дальнейшего редактирования.',
    'LANG_ORDER_NO_S_CANCELLED_ERROR_TEXT' => 'Резервация #%s была отменена.',
    'LANG_ORDER_NO_S_REFUNDED_ERROR_TEXT' => 'Резервация #%s уже возвращен и более не предлагается. ',
    'LANG_ERROR_PAYMENT_METHOD_IS_NOT_YET_IMPLEMENTED_TEXT' => 'Ошибка: Вы пытались оплатить с помощью метод оплаты, который еще не доступен для использования в системе.',
    'LANG_ORDER_OTHER_ERROR_TEXT' => 'Другая ошибка бронирования. Если вы держите видите это сообщение, свяжитесь с администратором сайта.',

    // Assistant Element
    'LANG_ASSISTANT_TEXT' => 'Помощник',

    // OK / Error Messages - Attribute Element
    'LANG_ATTRIBUTE_TITLE_EXISTS_ERROR_TEXT' => 'Error: Attribute with this title already exists!',
    'LANG_ATTRIBUTE_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing attribute!',
    'LANG_ATTRIBUTE_UPDATED_TEXT' => 'Completed: Attribute has been updated successfully!',
    'LANG_ATTRIBUTE_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new attribute!',
    'LANG_ATTRIBUTE_INSERTED_TEXT' => 'Completed: New attribute has been added successfully!',
    'LANG_ATTRIBUTE_REGISTERED_TEXT' => 'Attribute title registered for translation.',
    'LANG_ATTRIBUTE_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing attribute. No rows were deleted from database!',
    'LANG_ATTRIBUTE_DELETED_TEXT' => 'Completed: Attribute has been deleted successfully!',

    // OK / Error Messages - Block Element
    'LANG_BLOCK_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new block!',
    'LANG_BLOCK_INSERTED_TEXT' => 'Completed: New block has been added successfully!',
    'LANG_BLOCK_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing block. No rows were deleted from database!',
    'LANG_BLOCK_DELETED_TEXT' => 'Completed: Block has been deleted successfully!',
    'LANG_BLOCK_DELETE_OPTIONS_ERROR_TEXT' => 'Failed: No cars or extras were deleted from block!',
    'LANG_BLOCK_OPTIONS_DELETED_TEXT' => 'Completed: All cars and extras were deleted from block!',

    // OK / Error Messages - Body Type Element
    'LANG_CLASS_TITLE_EXISTS_ERROR_TEXT' => 'Error: Body type with this title already exists!',
    'LANG_CLASS_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing body type!',
    'LANG_CLASS_UPDATED_TEXT' => 'Completed: Body type has been updated successfully!',
    'LANG_CLASS_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new body type!',
    'LANG_CLASS_INSERTED_TEXT' => 'Completed: New body type has been added successfully!',
    'LANG_CLASS_REGISTERED_TEXT' => 'Body type title registered for translation.',
    'LANG_CLASS_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing body type. No rows were deleted from database!',
    'LANG_CLASS_DELETED_TEXT' => 'Completed: Body type has been deleted successfully!',

    // Closings Observer
    'LANG_CLOSINGS_FOR_LOCATIONS_TEXT' => 'Closings for Locations',
    'LANG_CLOSINGS_OF_YOUR_LOCATIONS_TEXT' => 'Closings of Your Locations',
    'LANG_CLOSINGS_FOR_PARTNER_LOCATIONS_TEXT' => 'Closings for Partner Locations',
    'LANG_CLOSINGS_FOR_GLOBAL_LOCATIONS_TEXT' => 'Closings for Global Locations',
    'LANG_CLOSINGS_FOR_AREAS_TEXT' => 'Closings for Areas',
    'LANG_CLOSINGS_FOR_CITIES_TEXT' => 'Closings for Cities',
    'LANG_CLOSINGS_FOR_STATES_TEXT' => 'Closings for States',
    'LANG_CLOSINGS_FOR_ZIP_CODES_TEXT' => 'Closings for ZIP Codes',
    'LANG_CLOSINGS_FOR_COUNTRIES_TEXT' => 'Closings for Countries',
    'LANG_CLOSINGS_CLOSED_DATES_TEXT' => 'Closed Dates',
    'LANG_CLOSINGS_CLOSED_DATES_CLICK_ON_DATES_IN_CALENDAR_TEXT' => 'Click on the dates in calendar, if you want to have your specific or all locations closed',
    'LANG_CLOSINGS_CLOSED_DATES_SAVE_TEXT' => 'Save closed dates',
    'LANG_CLOSINGS_CLOSED_DATES_NONE_TEXT' => 'No closed dates.',

    // OK / Error Messages - Closings Observer
    'LANG_CLOSINGS_ACCESS_ERROR_TEXT' => 'Sorry, you are not allowed to add these closings.',
    'LANG_CLOSINGS_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for one or more of existing closings!',
    'LANG_CLOSINGS_D_UPDATED_TEXT' => 'Completed: %s closings updated successfully!',
    'LANG_CLOSINGS_FOR_GIVEN_PARAMS_UPDATED_TEXT' => 'Completed: Closings for given parameters has been updated successfully!',
    'LANG_CLOSINGS_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for one of new closings!',
    'LANG_CLOSINGS_INSERTED_TEXT' => 'Completed: New closings has been added successfully!',
    'LANG_CLOSINGS_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for one of existing closings. No rows were deleted from database!',
    'LANG_CLOSINGS_DELETED_TEXT' => 'Completed: Closings for given parameters has been deleted successfully!',

    // Closing Element
    'LANG_CLOSING_CLOSED_DATE_TEXT' => 'Closed Date',

    // Countries Observer
    'LANG_COUNTRIES_TEXT' => 'Countries',

    // OK / Error Messages - Countries Observer
    'LANG_COUNTRIES_UNABLE_TO_LOAD_ISO3166_FILE_ERROR_TEXT' => 'Unable to load %s ISO 3166 countries file from none of it\'s 2 paths.',

    // OK / Error Messages - Customer Element
    'LANG_CUSTOMER_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected customer does not exist!',
    'LANG_CUSTOMER_TITLE_REQUIRED_ERROR_TEXT' => 'Error: Customer title is required!',
    'LANG_CUSTOMER_FIRST_NAME_REQUIRED_ERROR_TEXT' => 'Error: Customer first name is required!',
    'LANG_CUSTOMER_LAST_NAME_REQUIRED_ERROR_TEXT' => 'Error: Customer last name is required!',
    'LANG_CUSTOMER_BIRTHDATE_REQUIRED_ERROR_TEXT' => 'Error: Customer birthdate is required!',
    'LANG_CUSTOMER_STREET_ADDRESS_REQUIRED_ERROR_TEXT' => 'Error: Customer street address is required!',
    'LANG_CUSTOMER_CITY_REQUIRED_ERROR_TEXT' => 'Error: Customer city is required!',
    'LANG_CUSTOMER_STATE_REQUIRED_ERROR_TEXT' => 'Error: Customer state is required!',
    'LANG_CUSTOMER_ZIP_CODE_REQUIRED_ERROR_TEXT' => 'Error: Customer zip code is required!',
    'LANG_CUSTOMER_COUNTRY_REQUIRED_ERROR_TEXT' => 'Error: Customer country is required!',
    'LANG_CUSTOMER_PHONE_REQUIRED_ERROR_TEXT' => 'Error: Customer phone is required!',
    'LANG_CUSTOMER_EMAIL_REQUIRED_ERROR_TEXT' => 'Error: Customer email is required!',
    'LANG_CUSTOMER_COMMENTS_REQUIRED_ERROR_TEXT' => 'Error: Customer comments is required!',
    'LANG_CUSTOMER_FIRST_NAME_DOES_NOT_MATCH_ERROR_TEXT' => 'Error: Customer first name does not match existing customer first name!',
    'LANG_CUSTOMER_LAST_NAME_DOES_NOT_MATCH_ERROR_TEXT' => 'Error: Customer last name does not match existing customer last name!',
    'LANG_CUSTOMER_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing customer!',
    'LANG_CUSTOMER_UPDATED_TEXT' => 'Completed: Customer has been updated successfully!',
    'LANG_CUSTOMER_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new customer!',
    'LANG_CUSTOMER_INSERTED_TEXT' => 'Completed: New customer has been added successfully!',
    'LANG_CUSTOMER_LAST_USED_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for customer last used date!',
    'LANG_CUSTOMER_LAST_USED_UPDATED_TEXT' => 'Completed: Customer last used date has been updated!',
    'LANG_CUSTOMER_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing customer. No rows were deleted from database!',
    'LANG_CUSTOMER_DELETED_TEXT' => 'Completed: Customer has been deleted successfully!',

    // Discount Element
    'LANG_DISCOUNT_ITEM_ORDER_IN_ADVANCE_TEXT' => 'Add/Edit Car Discount for Order in Advance',
    'LANG_DISCOUNT_ITEM_ORDER_DURATION_TEXT' => 'Add/Edit Car Discount for Order Duration',
    'LANG_DISCOUNT_EXTRA_ORDER_IN_ADVANCE_TEXT' => 'Add/Edit Extra Discount for Order in Advance',
    'LANG_DISCOUNT_EXTRA_ORDER_DURATION_TEXT' => 'Add/Edit Extra Discount for Order Duration',
    'LANG_DISCOUNT_DURATION_BEFORE_TEXT' => 'Duration Before:',
    'LANG_DISCOUNT_DURATION_UNTIL_TEXT' => 'Duration Until:',
    'LANG_DISCOUNT_DURATION_FROM_TEXT' => 'Duration From:',
    'LANG_DISCOUNT_DURATION_TILL_TEXT' => 'Duration Till:',

    // OK / Error Messages - Distance Element
    'LANG_DISTANCE_PICKUP_NOT_SELECTED_ERROR_TEXT' => 'Error: Pick up location must be selected!',
    'LANG_DISTANCE_RETURN_NOT_SELECTED_ERROR_TEXT' => 'Error: Return location must be selected!',
    'LANG_DISTANCE_SAME_PICKUP_AND_RETURN_ERROR_TEXT' => 'Error: Pick-up and return locations cannot be the same!',
    'LANG_DISTANCE_EXISTS_ERROR_TEXT' => 'Error: This distance already exists!',
    'LANG_DISTANCE_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing distance!',
    'LANG_DISTANCE_UPDATED_TEXT' => 'Completed: Distance has been updated successfully!',
    'LANG_DISTANCE_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new distance!',
    'LANG_DISTANCE_INSERTED_TEXT' => 'Completed: New distance has been added successfully!',
    'LANG_DISTANCE_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing distance. No rows were deleted from database!',
    'LANG_DISTANCE_DELETED_TEXT' => 'Completed: Distance has been deleted successfully!',

    // (E-mail) Notification Element
    'LANG_EMAIL_NOTIFICATION_BACK_TO_LIST_TEXT' => 'Back to E-mail Notification List',
    'LANG_EMAIL_NOTIFICATION_SENDER_NAME_TEXT' => 'Sender\'s Name',
    'LANG_EMAIL_NOTIFICATION_SENDER_EMAIL_TEXT' => 'Sender\'s E-mail',
    'LANG_EMAIL_NOTIFICATION_RECIPIENT_EMAIL_TEXT' => 'Recipient\'s E-mail',
    'LANG_EMAIL_NOTIFICATION_REPLY_TO_NAME_TEXT' => 'Reply-To Name',
    'LANG_EMAIL_NOTIFICATION_REPLY_TO_EMAIL_TEXT' => 'Reply-To E-mail',

    // OK / Error Messages - (E-mail) Notification Element
    'LANG_EMAIL_NOTIFICATION_DELETION_DIALOG_TEXT' => 'Do you really want to delete this notification?',
    'LANG_EMAIL_NOTIFICATION_INVALID_TYPE_ERROR_TEXT' => 'Error: Invalid notification type!',
    'LANG_EMAIL_NOTIFICATION_SUBJECT_AND_BODY_EXISTS_FOR_THIS_TYPE_ERROR_TEXT' => 'Error: Other email already exist with this subject and body for this notification type!',
    'LANG_EMAIL_NOTIFICATION_DOES_NOT_EXIST_ERROR_TEXT' => 'Sorry, no e-mail notification found for this id.',
    'LANG_EMAIL_NOTIFICATION_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing email!',
    'LANG_EMAIL_NOTIFICATION_UPDATED_TEXT' => 'Completed: Email has been updated successfully!',
    'LANG_EMAIL_NOTIFICATION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new notification!',
    'LANG_EMAIL_NOTIFICATION_INSERTED_TEXT' => 'Completed: New notification has been added successfully!',
    'LANG_EMAIL_NOTIFICATION_REGISTERED_TEXT' => 'Email subject and body registered for translation.',
    'LANG_EMAIL_NOTIFICATION_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing e-mail. No rows were deleted from database!',
    'LANG_EMAIL_NOTIFICATION_DELETED_TEXT' => 'Completed: E-mail has been deleted successfully!',
    'LANG_EMAIL_NOTIFICATION_UNABLE_TO_SEND_TO_S_ERROR_TEXT' => 'Failed: System was unable to send the e-mail to %s!',
    'LANG_EMAIL_NOTIFICATION_SENT_TO_S_TEXT' => 'Completed: Email was sent successfully to %s!',

    // OK / Error Messages - Extra Element
    'LANG_EXTRA_SKU_EXISTS_ERROR_TEXT' => 'Error: Extra with this stock keeping unit (SKU) already exist!',
    'LANG_EXTRA_MORE_UNITS_PER_ORDER_THAN_IN_STOCK_ERROR_TEXT' => 'Error: You can\'t allow to reserve more extra units per one reservation than you have in stack!',
    'LANG_EXTRA_ITEM_MODEL_ASSIGN_ERROR_TEXT' => 'Error: You are not allowed to assign extras to that car model!',
    'LANG_EXTRA_ITEM_MODEL_SELECT_ERROR_TEXT' => 'Error: Please select a car model!',
    'LANG_EXTRA_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing extra!',
    'LANG_EXTRA_UPDATED_TEXT' => 'Completed: Extra has been updated successfully!',
    'LANG_EXTRA_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new extra!',
    'LANG_EXTRA_INSERTED_TEXT' => 'Completed: New extra has been added successfully!',
    'LANG_EXTRA_REGISTERED_TEXT' => 'Extra name registered for translation.',
    'LANG_EXTRA_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing extra. No rows were deleted from database!',
    'LANG_EXTRA_DELETED_TEXT' => 'Completed: Extra has been deleted successfully!',

    // OK / Error Messages - (Extra) Order Option Element
    'LANG_EXTRA_ORDER_ID_QUANTITY_OPTION_SKU_ERROR_TEXT' => 'Error: New extra can\'t be blocked because of bad reservation id (%s), SKU (%s) or quantity (%s)!',
    'LANG_EXTRA_ORDER_OPTION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new extra (SKU - %s) reservation/block!',
    'LANG_EXTRA_ORDER_OPTION_INSERTED_TEXT' => 'Completed: New extra (SKU - %s) has been blocked/reserved!',
    'LANG_EXTRA_ORDER_OPTION_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing reserved/blocked extra. No rows row were deleted from database!',
    'LANG_EXTRA_ORDER_OPTION_DELETED_TEXT' => 'Completed: Extra has been removed from reservation/block!',

    // OK / Error Messages - (Extra) Discount Element
    'LANG_EXTRA_DISCOUNT_DAYS_INTERSECTION_ERROR_TEXT' => 'Error: Extra discount days range intersects other extra discount for select extra (or all extras)!',
    'LANG_EXTRA_DISCOUNT_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing extra discount!',
    'LANG_EXTRA_DISCOUNT_UPDATED_TEXT' => 'Completed: Extra discount has been updated successfully!',
    'LANG_EXTRA_DISCOUNT_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new extra discount!',
    'LANG_EXTRA_DISCOUNT_INSERTED_TEXT' => 'Completed: New extra discount has been added successfully!',
    'LANG_EXTRA_DISCOUNT_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing extra discount. No rows were deleted from database!',
    'LANG_EXTRA_DISCOUNT_DELETED_TEXT' => 'Completed: Extra discount has been deleted successfully!',

    // OK / Error Messages - (Extra) Option Element
    'LANG_EXTRA_OPTION_PLEASE_SELECT_ERROR_TEXT' => 'Error: Please select an extra!',
    'LANG_EXTRA_OPTION_NAME_EXISTS_ERROR_TEXT' => 'Error: Option with chosen name already exists for this extra!',
    'LANG_EXTRA_OPTION_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing extra option!',
    'LANG_EXTRA_OPTION_UPDATED_TEXT' => 'Completed: Extra option has been updated successfully!',
    'LANG_EXTRA_OPTION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new extra option!',
    'LANG_EXTRA_OPTION_INSERTED_TEXT' => 'Completed: New extra option has been added successfully!',
    'LANG_EXTRA_OPTION_REGISTERED_TEXT' => 'Extra option name registered for translation.',
    'LANG_EXTRA_OPTION_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing extra option. No rows were deleted from database!',
    'LANG_EXTRA_OPTION_DELETED_TEXT' => 'Completed: Extra option has been deleted successfully!',

    // OK / Error Messages - Feature Element
    'LANG_FEATURE_TITLE_EXISTS_ERROR_TEXT' => 'Error: Feature with this title already exists!',
    'LANG_FEATURE_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing feature!',
    'LANG_FEATURE_UPDATED_TEXT' => 'Completed: Feature has been updated successfully!',
    'LANG_FEATURE_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new feature!',
    'LANG_FEATURE_INSERTED_TEXT' => 'Completed: New feature has been added successfully!',
    'LANG_FEATURE_REGISTERED_TEXT' => 'Feature title registered for translation.',
    'LANG_FEATURE_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing feature. No rows were deleted from database!',
    'LANG_FEATURE_DELETED_TEXT' => 'Completed: Feature has been deleted successfully!',

    // Install Element
    'LANG_COMPANY_DEFAULT_NAME_TEXT' => 'Car Rental Company',
    'LANG_COMPANY_DEFAULT_STREET_ADDRESS_TEXT' => '625 2nd Street',
    'LANG_COMPANY_DEFAULT_CITY_TEXT' => 'San Francisco',
    'LANG_COMPANY_DEFAULT_STATE_TEXT' => 'CA',
    'LANG_COMPANY_DEFAULT_ZIP_CODE_TEXT' => '94107',
    'LANG_COMPANY_DEFAULT_COUNTRY_TEXT' => '',
    'LANG_COMPANY_DEFAULT_PHONE_TEXT' => '(450) 600 4000',
    'LANG_COMPANY_DEFAULT_EMAIL_TEXT' => 'info@yourdomain.com',
    'LANG_PAYMENT_METHOD_DEFAULT_PAYPAL_TEXT' => 'Онлайн - PayPal',
    'LANG_PAYMENT_METHOD_DEFAULT_PAYPAL_DESCRIPTION_TEXT' => 'Безопасная моментальная оплата',
    'LANG_PAYMENT_METHOD_DEFAULT_STRIPE_TEXT' => 'Кредитная карта (через Stripe.com)',
    'LANG_PAYMENT_METHOD_DEFAULT_BANK_TEXT' => 'Банковский перевод',
    'LANG_PAYMENT_METHOD_DEFAULT_BANK_DETAILS_TEXT' => 'Ваши банковские реквизиты',
    'LANG_PAYMENT_METHOD_DEFAULT_PAY_OVER_THE_PHONE_TEXT' => 'Оплатить по телефону',
    'LANG_PAYMENT_METHOD_DEFAULT_PAY_ON_ARRIVAL_TEXT' => 'Оплатить по приезду',
    'LANG_PAYMENT_METHOD_DEFAULT_PAY_ON_ARRIVAL_DETAILS_TEXT' => 'Требуется кредитная карта',
    'LANG_EMAIL_DEFAULT_DEAR_TEXT' => 'Дорогой',
    'LANG_EMAIL_DEFAULT_REGARDS_TEXT' => 'С уважением',
    'LANG_EMAIL_DEFAULT_TITLE_ORDER_DETAILS_TEXT' => 'Данные бронирования - No. [RESERVATION_CODE]',
    'LANG_EMAIL_DEFAULT_TITLE_ORDER_CONFIRMED_TEXT' => 'Бронирование No. [RESERVATION_CODE] - подтверждено',
    'LANG_EMAIL_DEFAULT_TITLE_ORDER_CANCELLED_TEXT' => 'Бронирование No. [RESERVATION_CODE] - отменен',
    'LANG_EMAIL_DEFAULT_ADM_TITLE_ORDER_DETAILS_TEXT' => 'Извещение: новая бронирования - [RESERVATION_CODE]',
    'LANG_EMAIL_DEFAULT_ADM_TITLE_ORDER_CONFIRMED_TEXT' => 'Извещение: бронирование оплачены - [RESERVATION_CODE]',
    'LANG_EMAIL_DEFAULT_ADM_TITLE_ORDER_CANCELLED_TEXT' => 'Извещение: бронирование отменен - [RESERVATION_CODE]',
    'LANG_EMAIL_DEFAULT_BODY_ORDER_RECEIVED_TEXT' => 'Ваши данные бронирования были получены.',
    'LANG_EMAIL_DEFAULT_BODY_ORDER_DETAILS_TEXT' => 'Ваши данные бронирования:',
    'LANG_EMAIL_DEFAULT_BODY_PAYMENT_RECEIVED_TEXT' => 'Мы получили вашего платежа. Ваш заказ теперь подтверждено.',
    'LANG_EMAIL_DEFAULT_BODY_ORDER_CANCELLED_TEXT' => 'Ваше бронирование No. [RESERVATION_CODE] был отменен.',
    'LANG_EMAIL_DEFAULT_ADM_BODY_ORDER_RECEIVED_TEXT' => 'Новая бронирование No. [RESERVATION_CODE] получено от [CUSTOMER_NAME].',
    'LANG_EMAIL_DEFAULT_ADM_BODY_ORDER_DETAILS_TEXT' => 'Данные бронирования:',
    'LANG_EMAIL_DEFAULT_ADM_BODY_ORDER_PAID_TEXT' => 'Бронирование No. [RESERVATION_CODE] недавно оплачивается [CUSTOMER_NAME].',
    'LANG_EMAIL_DEFAULT_ADM_BODY_ORDER_CANCELLED_TEXT' => 'Бронирование No. [RESERVATION_CODE] для [CUSTOMER_NAME] недавно отменен.',
    'LANG_EMAIL_DEFAULT_ADM_BODY_CANCELLED_ORDER_DETAILS_TEXT' => 'Информация о бронирование, который был отменены:',

    // OK / Error Messages - Invoice Element
    'LANG_INVOICE_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected invoice does not exist!',
    'LANG_INVOICE_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing invoice!',
    'LANG_INVOICE_UPDATED_TEXT' => 'Completed: Invoice has been updated successfully!',
    'LANG_INVOICE_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new invoice!',
    'LANG_INVOICE_INSERTED_TEXT' => 'Completed: Invoice has been added successfully!',
    'LANG_INVOICE_APPEND_ERROR_TEXT' => 'Error: MySQL update error when trying to append the existing invoice. No rows were updated in database!',
    'LANG_INVOICE_APPENDED_TEXT' => 'Completed: Invoice has been appended successfully!',
    'LANG_INVOICE_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing invoice. No rows were deleted from database!',
    'LANG_INVOICE_DELETED_TEXT' => 'Completed: Invoice has been deleted successfully!',

    // OK / Error Messages - Item Model Element
    'LANG_ITEM_MODEL_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected car model does not exist!',
    'LANG_ITEM_MODEL_WITH_ID_D_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Car model with ID \'%d\' does not exist!',
    'LANG_ITEM_MODEL_SKU_EXISTS_ERROR_TEXT' => 'Error: Car with this stock keeping unit (SKU) already exist!',
    'LANG_ITEM_MODEL_MORE_UNITS_PER_ORDER_THAN_IN_STOCK_ERROR_TEXT' => 'Error: You can\'t allow to reserve more car units per one reservation than you have in garage!',
    'LANG_ITEM_MODEL_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing car!',
    'LANG_ITEM_MODEL_UPDATED_TEXT' => 'Completed: Car details has been updated successfully!',
    'LANG_ITEM_MODEL_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new car!',
    'LANG_ITEM_MODEL_INSERTED_TEXT' => 'Completed: New car has been added successfully!',
    'LANG_ITEM_MODEL_REGISTERED_TEXT' => 'Car model name registered for translation.',
    'LANG_ITEM_MODEL_ATTRIBUTE_RESET_ERROR_TEXT' => 'Error: MySQL update error when trying to reset car model attribute!',
    'LANG_ITEM_MODEL_ATTRIBUTE_HAD_RESET_TEXT' => 'Completed: Car model attribute had reset successfully!',
    'LANG_ITEM_MODEL_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing car. No rows were deleted from database!',
    'LANG_ITEM_MODEL_DELETED_TEXT' => 'Completed: Car has been deleted successfully!',

    // OK / Error Messages - (ItemModel) Order Option Element
    'LANG_ITEM_MODEL_ORDER_ID_QUANTITY_OPTION_SKU_ERROR_TEXT' => 'Error: New car can\'t be blocked because of bad reservation id (%s), SKU (%s) or quantity (%s)!',
    'LANG_ITEM_MODEL_ORDER_OPTION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new car (SKU - %s) reservation/block!',
    'LANG_ITEM_MODEL_ORDER_OPTION_INSERTED_TEXT' => 'Completed: New car (SKU - %s) has been blocked/reserved!',
    'LANG_ITEM_MODEL_ORDER_OPTION_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing reserved/blocked car. No rows row were deleted from database!',
    'LANG_ITEM_MODEL_ORDER_OPTION_DELETED_TEXT' => 'Completed: Car has been removed from reservation/block!',

    // OK / Error Messages - (ItemModel) Option Element
    'LANG_ITEM_MODEL_OPTION_PLEASE_SELECT_ERROR_TEXT' => 'Error: Please select a car!',
    'LANG_ITEM_MODEL_OPTION_NAME_EXISTS_ERROR_TEXT' => 'Error: Option with chosen name already exists for this car!',
    'LANG_ITEM_MODEL_OPTION_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing car option!',
    'LANG_ITEM_MODEL_OPTION_UPDATED_TEXT' => 'Completed: Car option has been updated successfully!',
    'LANG_ITEM_MODEL_OPTION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new car option!',
    'LANG_ITEM_MODEL_OPTION_INSERTED_TEXT' => 'Completed: New car option has been added successfully!',
    'LANG_ITEM_MODEL_OPTION_REGISTERED_TEXT' => 'Car option name registered for translation.',
    'LANG_ITEM_MODEL_OPTION_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing car option. No rows were deleted from database!',
    'LANG_ITEM_MODEL_OPTION_DELETED_TEXT' => 'Completed: Car option has been deleted successfully!',

    // Item Model Post
    'LANG_ITEM_MODEL_POST_LABEL_NAME_TEXT' => 'Car Page', // name
    'LANG_ITEM_MODEL_POST_LABEL_SINGULAR_NAME_TEXT' => 'Car Pages', // singular_name
    'LANG_ITEM_MODEL_POST_LABEL_MENU_NAME_TEXT' => 'Car Pages', // menu_name
    'LANG_ITEM_MODEL_POST_LABEL_PARENT_ITEM_COLON_TEXT' => 'Parent Car', // parent_item_colon
    'LANG_ITEM_MODEL_POST_LABEL_ALL_ITEMS_TEXT' => 'All Car Pages', // all_items
    'LANG_ITEM_MODEL_POST_LABEL_VIEW_ITEM_TEXT' => 'View Car Page', // view_item
    'LANG_ITEM_MODEL_POST_LABEL_ADD_NEW_ITEM_TEXT' => 'Add New Car Page', // add_new_item
    'LANG_ITEM_MODEL_POST_LABEL_ADD_NEW_TEXT' => 'Add New Page', // add_new
    'LANG_ITEM_MODEL_POST_LABEL_EDIT_ITEM_TEXT' => 'Edit Car Page', // edit_item
    'LANG_ITEM_MODEL_POST_LABEL_UPDATE_ITEM_TEXT' => 'Update Car Page', // update_item
    'LANG_ITEM_MODEL_POST_LABEL_SEARCH_ITEMS_TEXT' => 'Search Car Page', // search_items
    'LANG_ITEM_MODEL_POST_LABEL_NOT_FOUND_TEXT' => 'Not Found', // not_found
    'LANG_ITEM_MODEL_POST_LABEL_NOT_FOUND_IN_TRASH_TEXT' => 'Not found in Trash', // not_found_in_trash
    'LANG_ITEM_MODEL_POST_DESCRIPTION_TEXT' => 'List of car pages',

    // Location Post
    'LANG_LOCATION_POST_LABEL_NAME_TEXT' => 'Car Location', // name
    'LANG_LOCATION_POST_LABEL_SINGULAR_NAME_TEXT' => 'Car Locations', // singular_name
    'LANG_LOCATION_POST_LABEL_MENU_NAME_TEXT' => 'Car Locations', // menu_name
    'LANG_LOCATION_POST_LABEL_PARENT_LOCATION_COLON_TEXT' => 'Parent Car Location', // parent_item_colon
    'LANG_LOCATION_POST_LABEL_ALL_LOCATIONS_TEXT' => 'All Car Location Pages', // all_items
    'LANG_LOCATION_POST_LABEL_VIEW_LOCATION_TEXT' => 'View Car Location Page', // view_item
    'LANG_LOCATION_POST_LABEL_ADD_NEW_LOCATION_TEXT' => 'Add New Car Location Page', // add_new_item
    'LANG_LOCATION_POST_LABEL_ADD_NEW_TEXT' => 'Add New Page', // add_new
    'LANG_LOCATION_POST_LABEL_EDIT_LOCATION_TEXT' => 'Edit Car Location Page', // edit_item
    'LANG_LOCATION_POST_LABEL_UPDATE_LOCATION_TEXT' => 'Update Car Location Page', // update_item
    'LANG_LOCATION_POST_LABEL_SEARCH_LOCATIONS_TEXT' => 'Search Car Location Page', // search_items
    'LANG_LOCATION_POST_LABEL_NOT_FOUND_TEXT' => 'Not Found', // not_found
    'LANG_LOCATION_POST_LABEL_NOT_FOUND_IN_TRASH_TEXT' => 'Not found in Trash', // not_found_in_trash
    'LANG_LOCATION_POST_DESCRIPTION_TEXT' => 'List of car location pages',

    // OK / Error Messages - Location Element
    'LANG_LOCATION_CODE_EXISTS_ERROR_TEXT' => 'Error: Location with this code already exists!',
    'LANG_LOCATION_NAME_EXISTS_ERROR_TEXT' => 'Error: Location with this name already exists!',
    'LANG_LOCATION_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing location!',
    'LANG_LOCATION_UPDATED_TEXT' => 'Completed: Location has been updated successfully!',
    'LANG_LOCATION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new location!',
    'LANG_LOCATION_INSERTED_TEXT' => 'Completed: New location has been added successfully!',
    'LANG_LOCATION_REGISTERED_TEXT' => 'Location name registered for translation.',
    'LANG_LOCATION_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing location. No rows were deleted from database!',
    'LANG_LOCATION_DELETED_TEXT' => 'Completed: Location has been deleted successfully!',

    // Manager Element
    'LANG_MANAGER_TEXT' => 'Менеджер',

    // Manuals Observer
    'LANG_MANUALS_TEXT' => 'Manuals',

    // Manual Element
    'LANG_MANUAL_TEXT' => 'Manual',
    'LANG_MANUAL_INSTRUCTIONS_TEXT' => 'Instructions',
    'LANG_MANUAL_SHORTCODES_TEXT' => 'Shortcodes',
    'LANG_MANUAL_SHORTCODE_PARAMETERS_TEXT' => 'Shortcode Parameters',
    'LANG_MANUAL_URL_PARAMETERS_TEXT' => 'URL Parameters',
    'LANG_MANUAL_UI_OVERRIDING_TEXT' => 'UI Overriding',
    'LANG_MANUAL_TUTORIAL_HOW_TO_OVERRIDE_UI_TEXT' => 'Tutorial - How to Override User Interface (UI)',

    // OK / Error Messages - Manufacturer Element
    'LANG_MANUFACTURER_TITLE_EXISTS_ERROR_TEXT' => 'Error: Manufacturer with this title already exists!',
    'LANG_MANUFACTURER_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing manufacturer!',
    'LANG_MANUFACTURER_UPDATED_TEXT' => 'Completed: Manufacturer has been updated successfully!',
    'LANG_MANUFACTURER_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new manufacturer!',
    'LANG_MANUFACTURER_INSERTED_TEXT' => 'Completed: New manufacturer has been added successfully!',
    'LANG_MANUFACTURER_REGISTERED_TEXT' => 'Manufacturer title registered for translation.',
    'LANG_MANUFACTURER_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing manufacturer. No rows were deleted from database!',
    'LANG_MANUFACTURER_DELETED_TEXT' => 'Completed: Manufacturer has been deleted successfully!',

    // Notification Observer
    'LANG_NOTIFICATIONS_SEND_TEXT' => 'Send Notifications',
    'LANG_NOTIFICATIONS_ARE_DISABLED_TEXT' => 'Notification are disabled',
    'LANG_NOTIFICATIONS_ALL_SENT_TEXT' => 'All notifications sent',

    // Notification Element
    'LANG_NOTIFICATION_ADD_EDIT_TEXT' => 'Add / Edit Email',
    'LANG_NOTIFICATION_PREVIEW_TEXT' => 'Content Preview',
    'LANG_NOTIFICATION_DEMO_CUSTOMER_NAME_TEXT' => 'Demo Customer',
    'LANG_NOTIFICATION_DEMO_CUSTOMER_PHONE_TEXT' => '(415) 600-4000',
    'LANG_NOTIFICATION_DEMO_CUSTOMER_EMAIL_TEXT' => 'customer@demo.com',
    'LANG_NOTIFICATION_DEMO_LOCATION_NAME_TEXT' => 'Demo Location',
    'LANG_NOTIFICATION_DEMO_LOCATION_PHONE_TEXT' => '+1 600 10000',
    'LANG_NOTIFICATION_DEMO_LOCATION_EMAIL_TEXT' => 'info@location.com',

    // OK / Error Messages - Order Element
    'LANG_ORDER_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected reservation does not exist!',
    'LANG_ORDER_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing reservation!',
    'LANG_ORDER_UPDATED_TEXT' => 'Completed: Reservation has been updated successfully!',
    'LANG_ORDER_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new reservation!',
    'LANG_ORDER_INSERTED_TEXT' => 'Completed: New reservation has been added successfully!',
    'LANG_ORDER_CANCEL_ERROR_TEXT' => 'Error: MySQL update error appeared when tried to cancel existing reservation!',
    'LANG_ORDER_CANCELLED_TEXT' => 'Completed: Reservation has been cancelled successfully!',
    'LANG_ORDER_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing reservation. No rows were deleted from database!',
    'LANG_ORDER_DELETED_TEXT' => 'Completed: Reservation has been deleted successfully!',
    'LANG_ORDER_OPTIONS_DELETION_ERROR_TEXT' => 'Failed: No cars or extras were deleted from reservation!',
    'LANG_ORDER_OPTIONS_DELETED_TEXT' => 'Completed: All cars and extras were deleted from reservation!',
    'LANG_ORDER_CONFIRMATION_ERROR_TEXT' => 'Error: MySQL update error appeared when tried to confirm existing reservation!',
    'LANG_ORDER_CONFIRMED_TEXT' => 'Completed: Reservation was confirmed!',
    'LANG_ORDER_UNCONFIRMATION_ERROR_TEXT' => 'Error: MySQL update error appeared when tried to unconfirm existing reservation!',
    'LANG_ORDER_UNCONFIRMED_TEXT' => 'Completed: Reservation was unconfirmed!',
    'LANG_ORDER_MARK_COMPLETED_EARLY_ERROR_TEXT' => 'Failed: Reservation was not marked as completed early!',
    'LANG_ORDER_MARKED_COMPLETED_EARLY_TEXT' => 'Completed: Reservation was marked as completed early!',
    'LANG_ORDER_REFUND_ERROR_TEXT' => 'Failed: Reservation was not refunded!',
    'LANG_ORDER_REFUNDED_TEXT' => 'Completed: Reservation was refunded successfully!',

    // Page Post
    'LANG_PAGE_POST_LABEL_NAME_TEXT' => 'Rental Page', // name
    'LANG_PAGE_POST_LABEL_SINGULAR_NAME_TEXT' => 'Rental Pages', // singular_name
    'LANG_PAGE_POST_LABEL_MENU_NAME_TEXT' => 'Rental Pages', // menu_name
    'LANG_PAGE_POST_LABEL_PARENT_PAGE_COLON_TEXT' => 'Parent Rental Page', // parent_item_colon
    'LANG_PAGE_POST_LABEL_ALL_PAGES_TEXT' => 'All Information Pages', // all_items
    'LANG_PAGE_POST_LABEL_VIEW_PAGE_TEXT' => 'View Rental Page', // view_item
    'LANG_PAGE_POST_LABEL_ADD_NEW_PAGE_TEXT' => 'Add New Rental Page', // add_new_item
    'LANG_PAGE_POST_LABEL_ADD_NEW_TEXT' => 'Add New Page', // add_new
    'LANG_PAGE_POST_LABEL_EDIT_PAGE_TEXT' => 'Edit Rental Page', // edit_item
    'LANG_PAGE_POST_LABEL_UPDATE_PAGE_TEXT' => 'Update Rental Page', // update_item
    'LANG_PAGE_POST_LABEL_SEARCH_PAGES_TEXT' => 'Search Rental Page', // search_items
    'LANG_PAGE_POST_LABEL_NOT_FOUND_TEXT' => 'Not Found', // not_found
    'LANG_PAGE_POST_LABEL_NOT_FOUND_IN_TRASH_TEXT' => 'Not found in Trash', // not_found_in_trash
    'LANG_PAGE_POST_DESCRIPTION_TEXT' => 'List of car information pages',

    // Partner Element
    'LANG_PARTNER_TEXT' => 'Партнер',
    'LANG_PARTNER_ID_TEXT' => 'Partner Id',
    'LANG_PARTNER_SELECT_TEXT' => 'Partner:',
    'LANG_PARTNER_SELECT2_TEXT' => '- Select Partner -', // MB
    'LANG_PARTNER_LOCATION_TEXT' => 'Partner Location',
    'LANG_PARTNER_LOCATION_LIST_TEXT' => 'Partner Location List',
    'LANG_PARTNER_VIA_S_TEXT' => 'с %s',
    'LANG_PARTNER_ANY_TEXT' => 'Any Partner',

    // OK / Error Messages - Partner Element
    'LANG_PARTNER_REQUIRED_ERROR_TEXT' => 'Error: Partner is required!',
    'LANG_PARTNER_FLEET_REQUIRED_ERROR_TEXT' => 'Error: Fleet partner is required!',
    'LANG_PARTNER_LOCATION_REQUIRED_ERROR_TEXT' => 'Error: Location partner is required!',

    // Payments Observer
    'LANG_PAYMENTS_TEXT' => 'Payments',

    // Payment Element
    'LANG_PAYMENT_TEXT' => 'Payment',
    'LANG_PAYMENT_MANAGER_TEXT' => 'Payment Manager',
    'LANG_PAYMENT_CHARGE_TEXT' => 'Charge',

    // OK / Error Messages - Payment Method Element
    'LANG_PAYMENT_METHOD_CODE_EXISTS_ERROR_TEXT' => 'Error: Payment method with this code already exist!',
    'LANG_PAYMENT_METHOD_INVALID_NAME_TEXT' => 'Error: Please enter valid payment method name!',
    'LANG_PAYMENT_METHOD_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected payment method does not exist!',
    'LANG_PAYMENT_METHOD_DISABLED_ERROR_TEXT' => 'Error: Selected payment method is disabled!',
    'LANG_PAYMENT_METHOD_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing payment method!',
    'LANG_PAYMENT_METHOD_UPDATED_TEXT' => 'Completed: Payment method has been updated successfully!',
    'LANG_PAYMENT_METHOD_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new payment method!',
    'LANG_PAYMENT_METHOD_INSERTED_TEXT' => 'Completed: New payment method has been added successfully!',
    'LANG_PAYMENT_METHOD_REGISTERED_TEXT' => 'Payment method name and description registered for translation.',
    'LANG_PAYMENT_METHOD_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing payment method. No rows were deleted from database!',
    'LANG_PAYMENT_METHOD_DELETED_TEXT' => 'Completed: Payment method has been deleted successfully!',

    // OK / Error Messages - Prepayment Element
    'LANG_PREPAYMENT_DAYS_INTERSECTION_ERROR_TEXT' => 'Error: Prepayment plan days range intersects other prepayment plan!',
    'LANG_PREPAYMENT_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing prepayment plan!',
    'LANG_PREPAYMENT_UPDATED_TEXT' => 'Completed: Prepayment plan has been updated successfully!',
    'LANG_PREPAYMENT_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new prepayment plan!',
    'LANG_PREPAYMENT_INSERTED_TEXT' => 'Completed: New prepayment plan has been added successfully!',
    'LANG_PREPAYMENT_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing prepayment plan. No rows were deleted from database!',
    'LANG_PREPAYMENT_DELETED_TEXT' => 'Completed: Prepayment plan has been deleted successfully!',

    // Price Groups Observer
    'LANG_PRICE_GROUPS_TEXT' => 'Price Groups',
    'LANG_PRICE_GROUPS_NONE_AVAILABLE_TEXT' => 'No price groups available!',

    // Price Group Element
    'LANG_PRICE_GROUP_TEXT' => 'Price Group',
    'LANG_PRICE_GROUP_ADD_EDIT_TEXT' => 'Add / Edit Price Group',
    'LANG_PRICE_GROUP_BACK_TO_LIST_TEXT' => 'Back to Price Group List',
    'LANG_PRICE_GROUP_NAME_TEXT' => 'Price Group Name',
    'LANG_PRICE_GROUP_SAVE_TEXT' => 'Save price group',

    // OK / Error Messages - Price Group Element
    'LANG_PRICE_GROUP_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing price group!',
    'LANG_PRICE_GROUP_UPDATED_TEXT' => 'Completed: Price group has been updated successfully!',
    'LANG_PRICE_GROUP_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new price group!',
    'LANG_PRICE_GROUP_INSERTED_TEXT' => 'Completed: New price group has been added successfully!',
    'LANG_PRICE_GROUP_REGISTERED_TEXT' => 'Price group name registered for translation.',
    'LANG_PRICE_GROUP_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing price group. No rows were deleted from database!',
    'LANG_PRICE_GROUP_DELETED_TEXT' => 'Completed: Price group has been deleted successfully!',

    // OK / Error Messages - Price Plan Element
    'LANG_PRICE_PLAN_LATER_DATE_ERROR_TEXT' => 'Error: Start date can\'t be later or equal than end date!',
    'LANG_PRICE_PLAN_INVALID_PRICE_GROUP_ERROR_TEXT' => 'Error: Please select valid price group!',
    'LANG_PRICE_PLAN_EXISTS_FOR_DATE_RANGE_ERROR_TEXT' => 'Error: There is an existing price plan for this date range without coupon code or with same coupon code!',
    'LANG_PRICE_PLAN_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing price plan!',
    'LANG_PRICE_PLAN_UPDATED_TEXT' => 'Completed: Price plan has been updated successfully!',
    'LANG_PRICE_PLAN_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new price plan!',
    'LANG_PRICE_PLAN_INSERTED_TEXT' => 'Completed: New price plan has been added successfully!',
    'LANG_PRICE_PLAN_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing price plan. No rows were deleted from database!',
    'LANG_PRICE_PLAN_DELETED_TEXT' => 'Completed: Price plan has been deleted successfully!',

    // OK / Error Messages - (Price Plan) Discount Element
    'LANG_PRICE_PLAN_DISCOUNT_DAYS_INTERSECTION_ERROR_TEXT' => 'Error: Price plan discount days range intersects other discount for specific price plan or all price plans!',
    'LANG_PRICE_PLAN_DISCOUNT_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing price plan discount!',
    'LANG_PRICE_PLAN_DISCOUNT_UPDATED_TEXT' => 'Completed: Price plan discount has been updated successfully!',
    'LANG_PRICE_PLAN_DISCOUNT_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new price plan discount!',
    'LANG_PRICE_PLAN_DISCOUNT_INSERTED_TEXT' => 'Completed: New price plan discount has been added successfully!',
    'LANG_PRICE_PLAN_DISCOUNT_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing price plan discount. No rows were deleted from database!',
    'LANG_PRICE_PLAN_DISCOUNT_DELETED_TEXT' => 'Completed: Price plan discount has been deleted successfully!',

    // OK / Error Messages - Search Element
    'LANG_SEARCH_FAILURE_TEXT' => 'Search Failure',
    'LANG_SEARCH_NO_COUPON_CODE_ERROR_TEXT' => 'Пожалуйста, выберите код купона!',
    'LANG_SEARCH_COUPON_CODE_REQUIRED_ERROR_TEXT' => 'Error: Coupon code is required!',
    'LANG_SEARCH_PICKUP_DATE_REQUIRED_ERROR_TEXT' => 'Error: Pick-up date is required!',
    'LANG_SEARCH_PICKUP_DATE_SELECT_ERROR_TEXT' => 'Пожалуйста, введите подобрать даты!',
    'LANG_SEARCH_PICKUP_TIME_REQUIRED_ERROR_TEXT' => 'Error: Pick-up time is required!',
    'LANG_SEARCH_PICKUP_TIME_SELECT_ERROR_TEXT' => 'Please select pick-up time!',
    'LANG_SEARCH_RETURN_DATE_REQUIRED_ERROR_TEXT' => 'Error: Return date is required!',
    'LANG_SEARCH_RETURN_DATE_SELECT_ERROR_TEXT' => 'Введите, пожалуйста, дату возвращения!',
    'LANG_SEARCH_RETURN_TIME_REQUIRED_ERROR_TEXT' => 'Error: Return time is required!',
    'LANG_SEARCH_RETURN_TIME_SELECT_ERROR_TEXT' => 'Please select return time!',
    'LANG_SEARCH_TRY_DIFFERENT_DATE_OR_CRITERIA_ERROR_TEXT' => 'Не автомобиль. Пожалуйста, попробуйте разные даты слот или измените критерии поиска.',

    // Settings Observer
    'LANG_SETTINGS_TEXT' => 'Settings',
    'LANG_SETTINGS_POPULATE_DATA_TEXT' => 'Populate Data',
    'LANG_SETTINGS_DROP_DATA_TEXT' => 'Drop Data',
    'LANG_SETTINGS_GLOBAL_TEXT' => 'Global Settings',
    'LANG_SETTINGS_GLOBAL_SHORT_TEXT' => 'Global',
    'LANG_SETTINGS_USE_SESSIONS_TEXT' => 'Use Sessions',
    'LANG_SETTINGS_FRONTEND_STYLE_TEXT' => 'Front-End Style',
    'LANG_SETTINGS_FONT_AWESOME_ICONS_TEXT' => 'Font Awesome Icons',
    'LANG_SETTINGS_SLICK_SLIDER_ASSETS_TEXT' => 'Slick Slider Assets',
    'LANG_SETTINGS_NOTE_FOR_SESSIONS_USAGE_TEXT' => 'Use of sessions is recommended, if supported by the server - that gives better site loading speed & additional security layer.',
    'LANG_SETTINGS_NOTE_FOR_ASSETS_LOADING_PLACE_TEXT' => 'Loading assets from the other place, means that scripts/style/fonts/images will be loaded from the current or parent theme (if defined there), or from other plugin (if defined there).',
    'LANG_SETTINGS_TRACKING_TEXT' => 'Tracking Settings',
    'LANG_SETTINGS_TRACKING_SHORT_TEXT' => 'Tracking',
    'LANG_SETTINGS_SECURITY_TEXT' => 'Security Settings',
    'LANG_SETTINGS_SECURITY_SHORT_TEXT' => 'Security',
    'LANG_SETTINGS_CUSTOMER_TEXT' => 'Customer Settings',
    'LANG_SETTINGS_CUSTOMER_SHORT_TEXT' => 'Customer',
    'LANG_SETTINGS_SEARCH_TEXT' => 'Search Settings',
    'LANG_SETTINGS_SEARCH_SHORT_TEXT' => 'Search',
    'LANG_SETTINGS_ORDER_TEXT' => 'Reservation Settings',
    'LANG_SETTINGS_ORDER_SHORT_TEXT' => 'Reservation',
    'LANG_SETTINGS_SHOW_LOGIN_FORM_WITH_WP_USER_TEXT' => 'Show Login Form (with WP User)',
    'LANG_SETTINGS_CUSTOMER_LOOKUP_FOR_GUESTS_TEXT' => 'Customer Lookup For Guests',
    'LANG_SETTINGS_AUTOMATICALLY_CREATE_ACCOUNT_NEW_WP_USER_TEXT' => 'Automatically Create Account
(New WP User)',
    'LANG_SETTINGS_COMPANY_TEXT' => 'Company Settings',
    'LANG_SETTINGS_COMPANY_SHORT_TEXT' => 'Company',
    'LANG_SETTINGS_PRICE_TEXT' => 'Price Settings',
    'LANG_SETTINGS_PRICE_SHORT_TEXT' => 'Price',
    'LANG_SETTINGS_NOTIFICATION_TEXT' => 'Notification Settings',
    'LANG_SETTINGS_NOTIFICATION_SHORT_TEXT' => 'Notification',
    'LANG_SETTINGS_CHANGE_GLOBAL_SETTINGS_TEXT' => 'Change Global Settings',
    'LANG_SETTINGS_CHANGE_TRACKING_SETTINGS_TEXT' => 'Change Tracking Settings',
    'LANG_SETTINGS_CHANGE_SECURITY_SETTINGS_TEXT' => 'Change Security Settings',
    'LANG_SETTINGS_CHANGE_CUSTOMER_SETTINGS_TEXT' => 'Change Customer Settings',
    'LANG_SETTINGS_CHANGE_SEARCH_SETTINGS_TEXT' => 'Change Search Settings',
    'LANG_SETTINGS_CHANGE_ORDER_SETTINGS_TEXT' => 'Change Reservation Settings',
    'LANG_SETTINGS_CHANGE_COMPANY_SETTINGS_TEXT' => 'Change Company Settings',
    'LANG_SETTINGS_CHANGE_PRICE_SETTINGS_TEXT' => 'Change Price Settings',
    'LANG_SETTINGS_CHANGE_NOTIFICATION_SETTINGS_TEXT' => 'Change Notification Settings',
    'LANG_SETTINGS_UPDATE_GLOBAL_SETTINGS_TEXT' => 'Update global settings',
    'LANG_SETTINGS_UPDATE_TRACKING_SETTINGS_TEXT' => 'Update tracking settings',
    'LANG_SETTINGS_UPDATE_SECURITY_SETTINGS_TEXT' => 'Update security settings',
    'LANG_SETTINGS_UPDATE_CUSTOMER_SETTINGS_TEXT' => 'Update customer settings',
    'LANG_SETTINGS_UPDATE_SEARCH_SETTINGS_TEXT' => 'Update search settings',
    'LANG_SETTINGS_UPDATE_ORDER_SETTINGS_TEXT' => 'Update reservation settings',
    'LANG_SETTINGS_UPDATE_COMPANY_SETTINGS_TEXT' => 'Update company settings',
    'LANG_SETTINGS_UPDATE_PRICE_SETTINGS_TEXT' => 'Update price settings',
    'LANG_SETTINGS_UPDATE_NOTIFICATION_SETTINGS_TEXT' => 'Update notification settings',
    'LANG_SETTINGS_DEFAULT_PROFORMA_INVOICE_SERIES_TEXT' => 'PRO',
    'LANG_SETTINGS_DEFAULT_FINAL_INVOICE_SERIES_TEXT' => 'INV',
    'LANG_SETTINGS_DEFAULT_PHONE_NOTIFICATION_ACCOUNT_SID_TEXT' => 'YOUR_TWILIO_ACCOUNT_SID',
    'LANG_SETTINGS_DEFAULT_PHONE_NOTIFICATION_AUTH_TOKEN_TEXT' => 'YOUR_TWILIO_AUTH_TOKEN',
    'LANG_SETTINGS_DEFAULT_PHONE_NOTIFICATION_SENDER_NUMBER_TEXT' => 'YOUR_TWILIO_SENDER_NUMBER',
    'LANG_SETTINGS_DEFAULT_NOTIFICATION_PHONE_TEXT' => '',
    'LANG_SETTINGS_DEFAULT_NOTIFICATION_EMAIL_TEXT' => 'notify@yourdomain.com',
    'LANG_SETTINGS_DEFAULT_NOREPLY_EMAIL_TEXT' => 'noreply@yourdomain.com',
    'LANG_SETTINGS_DEFAULT_PAGE_URL_SLUG_TEXT' => 'avto-arenda', // Latin letters only
    'LANG_SETTINGS_DEFAULT_ITEM_MODEL_URL_SLUG_TEXT' => 'avtomobil-model', // Latin letters only
    'LANG_SETTINGS_DEFAULT_LOCATION_URL_SLUG_TEXT' => 'avto-mesto', // Latin letters only
    'LANG_SETTINGS_DEFAULT_PAYMENT_CANCELLED_PAGE_TITLE_TEXT' => 'Оплата была отменена',
    'LANG_SETTINGS_DEFAULT_PAYMENT_CANCELLED_PAGE_CONTENT_TEXT' => 'Оплата была отменена. Ваш заказ не подтвердились.',
    'LANG_SETTINGS_DEFAULT_ORDER_CONFIRMED_PAGE_TITLE_TEXT' => 'Бронирование подтверждено',
    'LANG_SETTINGS_DEFAULT_ORDER_CONFIRMED_PAGE_CONTENT_TEXT' => 'Спасибо. Мы получили вашего платежа. Ваш заказ теперь подтверждено.',
    'LANG_SETTINGS_DEFAULT_TERMS_AND_CONDITIONS_PAGE_TITLE_TEXT' => 'Условия пользования за аренду автомобиля',
    'LANG_SETTINGS_DEFAULT_TERMS_AND_CONDITIONS_PAGE_CONTENT_TEXT' => 'Вы должны следовать указаниям и условия для регулярного процесса по прокату автомобилей.',
    'LANG_SETTINGS_DEFAULT_CHANGE_ORDER_PAGE_TITLE_TEXT' => 'Change Reservation',

    // OK / Error Messages - Settings Observer
    'LANG_SETTINGS_GLOBAL_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all global settings were updated!',
    'LANG_SETTINGS_GLOBAL_SETTINGS_UPDATED_TEXT' => 'Completed: Global settings updated successfully!',
    'LANG_SETTINGS_TRACKING_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all tracking settings were updated!',
    'LANG_SETTINGS_TRACKING_SETTINGS_UPDATED_TEXT' => 'Completed: Tracking settings updated successfully!',
    'LANG_SETTINGS_SECURITY_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all security settings were updated!',
    'LANG_SETTINGS_SECURITY_SETTINGS_UPDATED_TEXT' => 'Completed: Security settings updated successfully!',
    'LANG_SETTINGS_CUSTOMER_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all customer settings were updated!',
    'LANG_SETTINGS_CUSTOMER_SETTINGS_UPDATED_TEXT' => 'Completed: Customer settings updated successfully!',
    'LANG_SETTINGS_SEARCH_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all search settings were updated!',
    'LANG_SETTINGS_SEARCH_SETTINGS_UPDATED_TEXT' => 'Completed: Search settings updated successfully!',
    'LANG_SETTINGS_ORDER_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all reservation settings were updated!',
    'LANG_SETTINGS_ORDER_SETTINGS_UPDATED_TEXT' => 'Completed: Reservation settings updated successfully!',
    'LANG_SETTINGS_COMPANY_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all company settings were updated!',
    'LANG_SETTINGS_COMPANY_SETTINGS_UPDATED_TEXT' => 'Completed: Company settings updated successfully!',
    'LANG_SETTINGS_PRICE_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all price settings were updated!',
    'LANG_SETTINGS_PRICE_SETTINGS_UPDATED_TEXT' => 'Completed: Price settings updated successfully!',
    'LANG_SETTINGS_NOTIFICATION_SETTINGS_UPDATE_ERROR_TEXT' => 'Error: Not all notification settings were updated!',
    'LANG_SETTINGS_NOTIFICATION_SETTINGS_UPDATED_TEXT' => 'Completed: Notification settings updated successfully!',

    // OK / Error Messages - Tax Element
    'LANG_TAX_UPDATE_ERROR_TEXT' => 'Error: MySQL update error for existing tax!',
    'LANG_TAX_UPDATED_TEXT' => 'Completed: Tax has been updated successfully!',
    'LANG_TAX_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new tax!',
    'LANG_TAX_INSERTED_TEXT' => 'Completed: New tax has been added successfully!',
    'LANG_TAX_REGISTERED_TEXT' => 'Tax name registered for translation.',
    'LANG_TAX_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing tax. No rows were deleted from database!',
    'LANG_TAX_DELETED_TEXT' => 'Completed: Tax has been deleted successfully!',

    // Transaction Element
    'LANG_TRANSACTION_TEXT' => 'Transaction',
    'LANG_TRANSACTION_ADD_EDIT_TEXT' => 'Add / Edit Transaction',
    'LANG_TRANSACTION_ID_TEXT' => 'Идентификатор транзакции',
    'LANG_TRANSACTION_ID_EXTERNAL_ID_AND_LEGAL_COUNTRY_TEXT' => 'Transaction Id, External Id & Legal Country',
    'LANG_TRANSACTION_EXTERNAL_ID_TEXT' => 'External Идентификатор транзакции',
    'LANG_TRANSACTION_EXTERNAL_ID_SHORT_TEXT' => 'External ID',
    'LANG_TRANSACTION_TYPE_TEXT' => 'Transaction Type',
    'LANG_TRANSACTION_TYPE_SHORT_TEXT' => 'Type',
    'LANG_TRANSACTION_TYPE_PAYMENT_TEXT' => 'Payment',
    'LANG_TRANSACTION_TYPE_REVERSAL_TEXT' => 'Reversal',
    'LANG_TRANSACTION_TYPE_REFUND_TEXT' => 'Refund',
    'LANG_TRANSACTION_LEGAL_COUNTRY_TEXT' => 'Legal Country',
    'LANG_TRANSACTION_LEGAL_COUNTRY_CODE_TEXT' => 'Legal Country Code',
    'LANG_TRANSACTION_PAYER_DETAILS_TEXT' => 'Payer Details',
    'LANG_TRANSACTION_PAYER_EXTERNAL_ID_TEXT' => 'Payer External Id',
    'LANG_TRANSACTION_PAYER_EXTERNAL_ID_SHORT_TEXT' => 'Ext. Id',
    'LANG_TRANSACTION_PAYER_NAME_TEXT' => 'Payer Name',
    'LANG_TRANSACTION_PAYER_NAME_SHORT_TEXT' => 'Name',
    'LANG_TRANSACTION_PAYER_COUNTRY_TEXT' => 'Payer Country',
    'LANG_TRANSACTION_PAYER_COUNTRY_CODE_TEXT' => 'Payer Country Code',
    'LANG_TRANSACTION_PAYER_PHONE_TEXT' => 'Payer Phone',
    'LANG_TRANSACTION_PAYER_EMAIL_TEXT' => 'Плательщик электронной почта',
    'LANG_TRANSACTION_PAYER_CARD_TYPE_TEXT' => 'Payer Card Type',
    'LANG_TRANSACTION_PAYER_CARD_TYPE_SHORT_TEXT' => 'Card Type',
    'LANG_TRANSACTION_PAYER_CARD_NUMBER_TEXT' => 'Payer Card Number',
    'LANG_TRANSACTION_PAYER_CARD_NUMBER_SHORT_TEXT' => 'Card Number',
    'LANG_TRANSACTION_PAYER_ACCOUNT_NUMBER_TEXT' => 'Payer Account Number',
    'LANG_TRANSACTION_PAYER_ACCOUNT_NUMBER_SHORT_TEXT' => 'Acc. No.',
    'LANG_TRANSACTION_PAYER_ROUTING_NUMBER_TEXT' => 'Payer Routing Number',
    'LANG_TRANSACTION_PAYER_ROUTING_NUMBER_SHORT_TEXT' => 'Rt. No.',
    'LANG_TRANSACTION_PAYER_BANK_NAME_TEXT' => 'Payer Bank Name',
    'LANG_TRANSACTION_PAYER_BANK_NAME_SHORT_TEXT' => 'Bank Name',
    'LANG_TRANSACTION_PAYER_BANK_CODE_TEXT' => 'Payer Bank Code',
    'LANG_TRANSACTION_PAYER_BANK_CODE_SHORT_TEXT' => 'Bank Code',
    'LANG_TRANSACTION_PAYER_BANK_IBAN_TEXT' => 'Payer Bank IBAN',
    'LANG_TRANSACTION_PAYER_BANK_IBAN_SHORT_TEXT' => 'Bank IBAN',
    'LANG_TRANSACTION_PAYER_SWIFT_CODE_TEXT' => 'Payer SWIFT Code',
    'LANG_TRANSACTION_PAYER_SWIFT_CODE_SHORT_TEXT' => 'SWIFT Code',
    'LANG_TRANSACTION_PAYER_BRANCH_ADDRESS_TEXT' => 'Payer Branch Address',
    'LANG_TRANSACTION_PAYER_BRANCH_ADDRESS_SHORT_TEXT' => 'Branch Addr.',
    'LANG_TRANSACTION_AMOUNT_TEXT' => 'Transaction Amount',
    'LANG_TRANSACTION_AMOUNT_SHORT_TEXT' => 'Amount',
    'LANG_TRANSACTION_AMOUNT_AND_PAYMENT_METHOD_TEXT' => 'Transaction Amount & Payment Method',
    'LANG_TRANSACTION_AMOUNT_AND_PAYMENT_METHOD_SHORT_TEXT' => 'Amount & Payment Method',
    'LANG_TRANSACTION_DATE_TEXT' => 'Transaction Date',
    'LANG_TRANSACTION_DATE_TYPE_AND_STATUS_TEXT' => 'Date, Type & Status',
    'LANG_TRANSACTION_LOCK_DATE_TEXT' => 'Lock Date',
    'LANG_TRANSACTION_LOCK_TIME_TEXT' => 'Lock Time',
    'LANG_TRANSACTION_STATUS_TEXT' => 'Transaction Status',
    'LANG_TRANSACTION_STATUS_PENDING_TEXT' => 'Status',
    'LANG_TRANSACTION_STATUS_COMPLETED_TEXT' => 'Completed',
    'LANG_TRANSACTION_LOCK_STATUS_TEXT' => 'Lock Status',
    'LANG_TRANSACTION_LOCKED_TEXT' => 'Locked',
    'LANG_TRANSACTION_NOT_LOCKED_TEXT' => 'Not Locked',
    'LANG_TRANSACTION_IP_TEXT' => 'Transaction IP',
    'LANG_TRANSACTION_REAL_IP_TEXT' => 'Transaction Real IP',
    'LANG_TRANSACTION_MARK_AS_COMPLETED_TEXT' => 'Mark as Completed',
    'LANG_TRANSACTION_MARK_AS_COMPLETED_VIA_S_TEXT' => 'Mark as Completed via %s',
    'LANG_TRANSACTION_MARK_AS_REVERSED_TEXT' => 'Mark as Reversed',
    'LANG_TRANSACTION_REFUND_TEXT' => 'Refund',
    'LANG_TRANSACTION_MARK_AS_REFUNDED_TEXT' => 'Mark as Refund',
    'LANG_TRANSACTION_MARK_AS_REFUNDED_VIA_S_TEXT' => 'Mark as Refunded via %s',
    'LANG_TRANSACTION_PROCESSED_TEXT' => 'Transaction processed',
    'LANG_TRANSACTION_ALL_NOTIFICATIONS_SENT_TEXT' => 'All transaction notifications sent',

    // OK / Error Messages - Transaction Element
    'LANG_TRANSACTION_PROCESSING_DIALOG_TEXT' => 'Are you sure that you want to process this action?',
    'LANG_TRANSACTION_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected transaction does not exist!',
    'LANG_TRANSACTION_DOUBLE_PAYMENT_ERROR_TEXT' => 'Failed: This transaction is already completed earlier! Double payments are not allowed for same transaction!',
    'LANG_TRANSACTION_DOUBLE_REVERSAL_ERROR_TEXT' => 'Failed: This transaction is already reversed earlier! Double reversals are not allowed of same transaction!',
    'LANG_TRANSACTION_DOUBLE_REFUND_ERROR_TEXT' => 'Failed: This transaction is already refunded earlier! Double refunds are not allowed of same transaction!',
    'LANG_TRANSACTION_NO_D_UPDATING_ERROR_TEXT' => 'Failed: Transaction no. %d was not updated!',
    'LANG_TRANSACTION_NO_D_UPDATED_TEXT' => 'Completed: Transaction no. %d was updated successfully!',
    'LANG_TRANSACTION_INSERTION_ERROR_TEXT' => 'Error: MySQL insert error for new transaction!',
    'LANG_TRANSACTION_INSERTED_TEXT' => 'Completed: New transaction has been added successfully!',
    'LANG_TRANSACTION_NO_D_MARKING_AS_COMPLETED_ERROR_TEXT' => 'Failed: Transaction no. %d was not marked as completed!',
    'LANG_TRANSACTION_NO_D_MARKED_AS_COMPLETED_TEXT' => 'Completed: Transaction no. %d was marked as completed!',
    'LANG_TRANSACTION_NO_D_LOCKING_ERROR_TEXT' => 'Failed: Transaction no. %d was not locked!',
    'LANG_TRANSACTION_NO_D_LOCKED_TEXT' => 'Completed: Transaction no. %d was locked successfully!',
    'LANG_TRANSACTION_NO_D_DELETION_ERROR_TEXT' => 'Error: MySQL delete error for existing transaction no. %d. No rows were deleted from database!',
    'LANG_TRANSACTION_NO_D_DELETED_TEXT' => 'Completed: Transaction no. %d has been deleted successfully!',

    // ZIP Codes Observer
    'LANG_ZIP_CODES_TEXT' => 'ZIP Codes',

    // ZIP Code Element
    'LANG_ZIP_CODE_TEXT' => 'Почтовый индекс',
    'LANG_ZIP_CODE_PICKUP_TEXT' => 'Pick-Up ZIP Code',
    'LANG_ZIP_CODE_PICKUP2_TEXT' => 'Pick-up ZIP code', // Uppercase lowercase
    'LANG_ZIP_CODE_PICKUP_SELECT_TEXT' => 'Pick-Up ZIP Code:',
    'LANG_ZIP_CODE_PICKUP_SELECT2_TEXT' => '- Select Pick-Up ZIP Code -', // MB
    'LANG_ZIP_CODE_RETURN_TEXT' => 'Return ZIP Code',
    'LANG_ZIP_CODE_RETURN2_TEXT' => 'Return ZIP code', // Uppercase lowercase
    'LANG_ZIP_CODE_RETURN_SELECT_TEXT' => 'Return ZIP Code:',
    'LANG_ZIP_CODE_RETURN_SELECT2_TEXT' => '- Select Return ZIP Code -', // MB

    // OK / Error Messages - ZIP Code Element
    'LANG_ZIP_CODE_DOES_NOT_EXIST_ERROR_TEXT' => 'Error: Selected ZIP code do not exist!',
    'LANG_ZIP_CODE_REQUIRED_ERROR_TEXT' => 'Error: ZIP code is required!',
    'LANG_ZIP_CODE_PICKUP_REQUIRED_ERROR_TEXT' => 'Error: Pick-up ZIP code is required!',
    'LANG_ZIP_CODE_RETURN_REQUIRED_ERROR_TEXT' => 'Error: Return ZIP code is required!',
    'LANG_ZIP_CODE_PICKUP_SELECT_ERROR_TEXT' => 'Please select pick-up ZIP code!',
    'LANG_ZIP_CODE_RETURN_SELECT_ERROR_TEXT' => 'Please select return ZIP code!',
);