<?php

if (!defined('WHMCS')) {
    die('This file cannot be accessed directly');
}

add_hook('AdminAreaHeadOutput', 1, function () {
    return <<<'HTML'
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a[href*="configsetuptasks.php"]').forEach(function (link) {
        if (!link.textContent || !link.textContent.toLowerCase().includes('setup task')) {
            return;
        }

        const banner = link.closest('.alert, .panel, .card, .well, .message, .notification');
        const target = banner || link.parentElement;
        if (target) {
            target.remove();
        }
    });
});
</script>
HTML;
});
