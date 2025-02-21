<?php header("strict-transport-security: max-age=31356000");
header("Content-Security-Policy: script-src 'self','none','unsafe-inline','unsafe-eval'");
header("Referrer-Policy: 'no-referrer','no-referrer-when-downgrade','same-origin'");
header("Permissions-Policy: geolocation=(self 'https://demo8.lakhetech.com/'), microphone=()");
// echo "<b>HSTS Enabled!</b>";