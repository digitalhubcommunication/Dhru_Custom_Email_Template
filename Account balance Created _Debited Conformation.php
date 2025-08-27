<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Account Funding</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:28px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Account Funding Confirmation
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>

        <p style="margin:0 0 18px 0;">
            Thank you for funding your <strong>{$companyname}</strong> account.
        </p>

        <div style="background:#f9f9f9; border:1px solid #eee; border-radius:8px; padding:20px; margin:20px 0; line-height:1.6;">
            {if $creditadded}
            <p style="margin:6px 0; font-weight:bold;">Credit Added: {$creditadded}</p>
            {/if}

            {if $creditrebated}
            <p style="margin:6px 0; font-weight:bold;">Credit Rebated: {$creditrebated}</p>
            {/if}

            {if $sellcreditadded}
            <p style="margin:6px 0; font-weight:bold;">Sell Credit Added: {$sellcreditadded}</p>
            {/if}

            {if $sellcreditrebated}
            <p style="margin:6px 0; font-weight:bold;">Sell Credit Rebated: {$sellcreditrebated}</p>
            {/if}

            <p style="margin:6px 0; font-weight:bold;">Account Balance After Funding: {$credit.credit}</p>

            {if $sellcreditadded or $sellcreditrebated}
            <p style="margin:6px 0; font-weight:bold;">Total Available Sell Credit: {$credit.selling_limit}</p>
            {/if}

            {if $usernote}
            <p style="margin:6px 0;">Note: {$usernote}</p>
            {/if}

            <p style="margin:6px 0;">Transaction ID: {$transactionid}</p>
        </div>

        <p style="margin:20px 0 0 0;">Best regards,<br>{$adminsignature}</p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        &copy; {$companyname} — All rights reserved.
    </div>

</div>

</body>
</html>
