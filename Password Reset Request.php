<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Password Reset</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:28px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Password Reset Request
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>

        <p style="margin:0 0 18px 0;">
            Someone has requested a password reset for your account.  
            If you did not make this request, simply disregard this email.  
            This email is sent only to the address on file and the link will expire after 48 hours.
        </p>

        <p style="margin:0 0 18px 0;">
            To reset your password, please click the link below:
        </p>

        <!-- Reset Link Button -->
        <div style="text-align:center; margin:25px 0;">
            <a href="{$link}" target="_blank" 
               style="background:#0F015E; color:#fff; padding:12px 28px; border-radius:6px; text-decoration:none; font-size:15px; font-weight:600; display:inline-block;">
               Reset Password
            </a>
        </div>

        <p style="margin:20px 0 0 0;">Best regards,<br>{$adminsignature}</p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        <p style="margin:0 0 12px 0;">
            &copy; {$companyname} — All rights reserved.
        </p>
        <p style="margin:0; font-size:12px; color:#999;">
            If you did not request a password reset, no action is needed.
        </p>
    </div>

</div>

</body>
</html>
