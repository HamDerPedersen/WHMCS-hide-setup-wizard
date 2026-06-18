<?php

if (!defined('WHMCS')) {
    die('This file cannot be accessed directly');
}

add_hook('AdminAreaHeadOutput', 1, function () {
    return <<<'HTML'
<script>
document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('a[href*="configsetuptasks.php"]');
    if (!links.length) {
        return;
    }

    links.forEach(function (link) {
        const banner = link.closest(
            '.alert, .panel, .card, .well, .message, .notification'
        );
        if (banner) {
            banner.remove();
        }
    });
});
</script>
HTML;
});
