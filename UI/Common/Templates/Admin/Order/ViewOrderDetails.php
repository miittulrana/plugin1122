<?php
defined( 'ABSPATH' ) or die( 'No script kiddies, please!' );
// Scripts
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('fleet-management-admin');

// Styles
wp_enqueue_style('fleet-management-admin');
?>
<?php if ($errorMessage != ""): ?>
    <div class="admin-info-message admin-wide-message admin-error-message"><?=esc_br_html($errorMessage);?></div>
<?php elseif ($okayMessage != ""): ?>
    <div class="admin-info-message admin-wide-message admin-okay-message"><?=esc_br_html($okayMessage);?></div>
<?php endif; ?>
<?php if ($ksesedDebugHTML != ""): ?>
    <div class="admin-info-message admin-wide-message admin-debug-html"><?=$ksesedDebugHTML;?></div>
<?php endif; ?>
<p>&nbsp;</p>
<div class="fleet-management-tabbed-admin">
<div class="order-details">
    <span class="title"><?=(esc_html($lang['LANG_VIEW_DETAILS_TEXT']).' - '.esc_html($lang['LANG_ORDER_CODE2_TEXT']));?>:
    <?=(esc_html($order['booking_code']).($order['coupon_code'] ? ' ('.esc_html($lang['LANG_COUPON_TEXT']).': '.esc_html($order['coupon_code']).')' : ''));?>
    </span>
    <input type="submit" value="<?=esc_attr($lang['LANG_CUSTOMER_BACK_TO_ORDERS_LIST_TEXT']);?>" onclick="window.location.href='<?=esc_js($backToListURL);?>'" class="button-back" />
    <hr  />
    <table class="view-order-table" cellpadding="4" cellspacing="1">
        <tbody>
        <tr>
          <td align="left" class="table-title" colspan="2">
              <strong><?=esc_html($lang['LANG_CUSTOMER_DETAILS_FROM_DB_TEXT']);?></strong>
          </td>
        </tr>
        <?php if($customerTitleVisible || $customerFirstNameVisible || $customerLastNameVisible): ?>
            <tr>
                <td width="160px"><?=esc_html($lang['LANG_CUSTOMER_TEXT']);?></td>
                <td><?=esc_html($customer['full_name_with_title']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerBirthdateVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_DATE_OF_BIRTH_TEXT']);?></td>
                <td><?=esc_html($customer['birthdate_i18n']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerStreetAddressVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_STREET_ADDRESS_TEXT']);?></td>
                <td><?=esc_html($customer['street_address']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerCityVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_CITY_TEXT']);?></td>
                <td><?=esc_html($customer['city']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerStateVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_STATE_TEXT']);?></td>
                <td><?=esc_html($customer['state']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerZIP_CodeVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_ZIP_CODE_TEXT']);?></td>
                <td><?=esc_html($customer['zip_code']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerCountryVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_COUNTRY_TEXT']);?></td>
                <td><?=esc_html($customer['country']);?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerPhoneVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_PHONE_TEXT']);?></td>
                <td><?=$customer['trusted_phone_html'];?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerEmailVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_EMAIL_TEXT']);?></td>
                <td><?=$customer['trusted_email_html'];?></td>
            </tr>
        <?php endif; ?>
        <?php if($customerCommentsVisible): ?>
            <tr>
                <td><?=esc_html($lang['LANG_ADDITIONAL_COMMENTS_TEXT']);?></td>
                <td><?=esc_br_html($customer['comments']);?></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <br />
    <?=$trustedInvoiceHTML;?>
    <br />
    <table class="view-order-table" cellpadding="4" cellspacing="1">
        <tr>
            <td colspan="2" align="left" class="table-title"><strong><?=esc_html($lang['LANG_ORDER_STATUS_TEXT']);?></strong></td>
        </tr>
        <tr>
            <td colspan="2">
                <strong><span style="color:<?=esc_attr($order['payment_status_color']);?>;"><?=esc_html($order['payment_status_text']);?></span>,
                <span style="color:<?=esc_attr($order['status_color']);?>;"><?=esc_html($order['status_text']);?></span></strong>
            </td>
        </tr>
    </table>
</div>
</div>