<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Account Activation</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:28px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Account Activation
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>

        <p style="margin:0 0 18px 0;">
            Thank you for your interest in <strong>{$companyname}</strong>.
        </p>

        <p style="margin:0 0 18px 0;">
            To complete activation of your account, a representative will contact you shortly to adjust your account accordingly.
        </p>

        <p style="margin:0 0 18px 0;">
            If you wish to complete activation sooner, you may send an email to:  
            <a href="mailto:{$adminmail}?subject=ACTIVATE ACCOUNT" 
               style="color:#0F015E; text-decoration:none; font-weight:600;">{$adminmail}</a>.
        </p>

        <p style="margin:0 0 18px 0;">
            In the email, please provide your <strong>Username</strong> so we can complete the process and enable you to start ordering immediately.
        </p>

        <p style="margin:20px 0 0 0;">Best regards,<br>{$adminsignature}</p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        <p style="margin:0 0 12px 0;">
            &copy; {$companyname} — All rights reserved.
        </p>
        <p style="margin:0; font-size:12px; color:#999;">
            This email was sent regarding your account activation at {$companyname}.
        </p>
    </div>

</div>

</body>
</html>
