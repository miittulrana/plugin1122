<?php
defined( 'ABSPATH' ) or die( 'No script kiddies, please!' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?=esc_html($lang['LANG_INVOICE_PRINT_TEXT']);?></title>
<script type="text/javascript">
window.print();
</script>
</head>
<body>
    <div align="center">
        <table cellpadding="3" border="0" width="750" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
            <tr>
                <td width="400" align="left" valign="top">
                    <span style="font-size:24px; font-weight:bold;"><?=esc_html($settings['conf_company_name']);?></span><br />
                    <br />
                    <span><?=esc_html($settings['conf_company_street_address']);?></span><br />
                    <span><?=esc_html($settings['conf_company_city']);?></span><br />
                    <span><?=($settings['conf_company_state'].' '.$settings['conf_company_zip_code']);?></span><br />
                    <span><?=esc_html($settings['conf_company_country']);?></span><br />
                </td>
                <td width="200" align="right" valign="top">
                    <span>
                        <strong><?=esc_html($lang['LANG_PHONE_TEXT']);?>:</strong> <?=esc_html($settings['conf_company_phone']);?>
                    </span><br />
                    <span>
                        <strong><?=esc_html($lang['LANG_EMAIL_TEXT']);?>:</strong> <?=esc_html($settings['conf_company_email']);?>
                    </span><br />
                </td>
            </tr>
        </table>
        <br />
    <?=$invoiceHTML;?>
    </div>
</body>
</html>