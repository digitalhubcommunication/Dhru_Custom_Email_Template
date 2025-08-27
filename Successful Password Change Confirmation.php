<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Password Changed</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:28px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Password Changed Successfully
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>

        <p style="margin:0 0 18px 0;">
            Your password for our login system has been successfully changed.  
            The new password is not shown here to protect your privacy. Your username is confirmed below:
        </p>

        <!-- Account Info Card -->
        <div style="background:#f9f9f9; border:1px solid #eee; border-radius:8px; padding:20px; margin:20px 0;">
            <p style="margin:6px 0; font-weight:bold;">=============================</p>
            <p style="margin:6px 0;"><strong>Username:</strong> {$username}</p>
            <p style="margin:6px 0;"><strong>Password:</strong> ***HIDDEN***</p>
            <p style="margin:6px 0; font-weight:bold;">=============================</p>
        </div>

        <p style="margin:0 0 18px 0;">
            If you did not request this change, your account may have been compromised. Please contact us immediately.
        </p>

        <p style="margin:20px 0 0 0;">Best regards,<br>{$adminsignature}</p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        <p style="margin:0 0 12px 0;">
            &copy; {$companyname} — All rights reserved.
        </p>
        <p style="margin:0; font-size:12px; color:#999;">
            This email is sent regarding your account security.
        </p>
    </div>

</div>

</body>
</html>
