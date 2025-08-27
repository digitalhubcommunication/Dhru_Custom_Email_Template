<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Account Blocked</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:28px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Account Blocked Notification
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear User,</p>

        <p style="margin:0 0 18px 0;">
            Your account has been blocked due to the following reason:
        </p>

        <!-- Block Reason Card -->
        <div style="background:#f9f9f9; border:1px solid #eee; border-radius:8px; padding:20px; margin:20px 0; font-weight:bold; color:#d9534f;">
            ===============================<br>
            {$blockreson}<br>
            ===============================
        </div>

        <p style="margin:20px 0 0 0;">For further assistance, please contact support.<br>{$adminsignature}</p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        <p style="margin:0 0 12px 0;">
            &copy; {$companyname} — All rights reserved.
        </p>
        <p style="margin:0; font-size:12px; color:#999;">
            This email was sent regarding your account status.
        </p>
    </div>

</div>

</body>
</html>
