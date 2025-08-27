<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$companyname} - OTP Verification</title>
</head>
<body style="margin:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:600px; margin:40px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(135deg,#0F015E,#6a11cb); padding:25px; text-align:center;">
        <h2 style="margin:0; color:#fff; font-size:22px; font-weight:600;">
            OTP Verification
        </h2>
    </div>

    <!-- Body -->
    <div style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
        <p style="margin:0 0 18px 0;">Dear <strong>{$username}</strong>,</p>

        <p style="margin:0 0 18px 0;">
            Use the following One-Time Password (OTP) to complete your verification process:
        </p>

        <!-- OTP Code -->
        <div style="background:#eaf2ff; border:1px solid #c5d8ff; border-radius:8px; padding:20px; margin:20px 0; text-align:center;">
            <span style="font-size:22px; font-weight:bold; color:#0F015E;">{$otp}</span>
        </div>

        <p style="margin:18px 0 0 0;">
            This OTP is valid for <strong>{$otp_validity} minutes</strong>. Please do not share it with anyone.
        </p>

        <p style="margin:20px 0 0 0;">{$adminsignature}</p>
    </div>

    <!-- Footer -->
    <div style="background:#fafafa; padding:22px; text-align:center; font-size:13px; color:#777; border-top:1px solid #eee;">
        &copy; {$companyname} — All rights reserved.
    </div>

</div>

</body>
</html>
