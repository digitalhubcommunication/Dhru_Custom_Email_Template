<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - Registration</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:30px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            Welcome to {$companyname}
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>
        
        <p style="margin:0 0 18px 0;">
            Thank you for signing up for a <strong>{$companyname}</strong> account.  
            Below you will find your registration details along with a link to the terms that apply to your account.  
            Please keep this information safe for future reference.
        </p>

        <!-- Registration Details Card -->
        <div style="background:#f9f9f9; border:1px solid #eee; border-radius:8px; padding:20px; margin:20px 0;">
            <h3 style="margin:0 0 15px 0; font-size:16px; color:#0F015E;">🔐 Registration Details</h3>
            <p style="margin:6px 0;"><strong>Username:</strong> {$username}</p>
            <p style="margin:6px 0;">
                <strong>Password:</strong> 
                {if $password_uncrypt} {$password_uncrypt} {else} **HIDDEN** {/if}
            </p>
            <p style="margin:6px 0;"><strong>Master Pin:</strong> {$pin}</p>
        </div>

        <p style="margin:18px 0;">
            You will need your <strong>Username</strong> and <strong>Password</strong> each time you log in to your 
            <strong>{$companyname}</strong> account.  
            To review or update your registration details, sign in anytime at:  
        </p>

        <!-- CTA Button -->
        <div style="text-align:center; margin:25px 0;">
            <a href="{$siteaddress}" target="_blank" 
               style="background:#0F015E; color:#fff; padding:12px 28px; border-radius:6px; text-decoration:none; font-size:15px; font-weight:600; display:inline-block;">
               Go to My Account
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
            This email was sent to you regarding your {$companyname} account.  
            If you did not register, please ignore this message.
        </p>
    </div>

</div>

</body>
</html>
