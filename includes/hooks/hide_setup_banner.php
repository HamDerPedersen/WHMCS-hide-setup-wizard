<?php
/**
 * Made by ZPCore.net
 */
add_hook('AdminAreaFooterOutput', 1, function($vars) {
    return '
    <style>
        .theme-header,
        .theme-header .wizard-banner,
        .theme-header [id*="Wizard"],
        .theme-header [id*="wizard"],
        .setup-wizard-banner,
        #setupWizardBanner,
        .wizard-sidebar {
            display: none !important;
            visibility: hidden !important;
            height: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .col-md-8, .col-sm-8, .app-main .col-md-8 { 
            width: 100% !important; 
            flex: 0 0 100% !important; 
            max-width: 100% !important; 
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var banner = document.querySelector(".theme-header");
            if (banner) {
                banner.remove();
            }
            var mainContent = document.querySelector(".col-md-8");
            if (mainContent) {
                mainContent.style.setProperty("width", "100%", "important");
                mainContent.style.setProperty("max-width", "100%", "important");
                mainContent.style.setProperty("flex", "0 0 100%", "important");
            }
        });
    </script>';
});
