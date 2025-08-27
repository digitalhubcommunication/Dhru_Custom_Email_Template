<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Order Calculated</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:28px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Order Successfully Calculated
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>

        <p style="margin:0 0 18px 0;">
            Your order for <strong>{$service}</strong> has been successfully calculated.
        </p>

        {if $comments}
        <div style="background:#f9f9f9; border:1px solid #eee; border-radius:8px; padding:15px; margin:15px 0; font-style:italic; color:#555;">
            ** {$comments}
        </div>
        {/if}

        <!-- Reply Section -->
        <div style="background:#eaf2ff; border:1px solid #c5d8ff; border-radius:8px; padding:15px; margin:15px 0;">
            {$reply}
        </div>

        <!-- Order Details Card -->
        <div style="background:#f9f9f9; border:1px solid #eee; border-radius:8px; padding:20px; margin:20px 0;">
            <p style="margin:6px 0;"><strong>Service:</strong> {$service}</p>
            <p style="margin:6px 0;"><strong>Credit:</strong> {$ordercredit}</p>

            {foreach from=$custom key=id item=cst}
            <p style="margin:6px 0;"><strong>{$cst.name}:</strong> {$cst.value}</p>
            {/foreach}
        </div>

        <p style="margin:20px 0 0 0;">
            You can provide your feedback here: {$feedbacklink}<br>
            Best regards,<br>
            {$adminsignature}
        </p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        &copy; {$companyname} — All rights reserved.
    </div>

</div>

</body>
</html>
