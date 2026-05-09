<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stones & Cabinets | Premium Collections</title>
    <meta name="description" content="Premium Kitchen Cabinets, Bathroom Cabinets, Quartz Stones, and Granite Stones for your home.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Main Styles -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="brand-logo">Stones & Cabinets</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a href="/products">Products <span class="caret">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products/door-styles">Door Styles</a></li>
                        <li><a href="/products/kitchen-cabinets">Kitchen Cabinets</a></li>
                        <li><a href="/products/bathroom-cabinets">Bathroom Cabinets</a></li>
                        <li><a href="/products/bathroom-essentials">Bathroom Essentials</a></li>
                        <li><a href="/products/quartz-stones">Quartz Stones</a></li>
                        <li><a href="/products/granite-stones">Granite Stones</a></li>
                        <li><a href="/products/sinks">Sinks</a></li>
                        <li><a href="/products/finishing-products">Finishing Products</a></li>
                        <li><a href="/products/accessories">Accessories</a></li>
                    </ul>
                </li>
                <li><a href="/specials">Specials</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/custom-build">Custom Build</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
            <div class="nav-actions">
                <div class="custom-language-selector">
                    <div class="selected-lang" onclick="toggleLangDropdown()">
                        <span id="current-lang">English</span>
                        <span class="lang-caret">▾</span>
                    </div>
                    <ul class="lang-dropdown" id="lang-list">
                        <li onclick="changeLanguage('en', 'English')">English</li>
                        <li onclick="changeLanguage('fr', 'French')">French</li>
                </div>
                <div id="google_translate_element" style="visibility: hidden; height: 0; overflow: hidden; position: absolute;"></div>
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </nav>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', 
                includedLanguages: 'en,fr', 
                autoDisplay: false
            }, 'google_translate_element');
        }

        function toggleLangDropdown() {
            document.getElementById('lang-list').classList.toggle('show');
        }

        function changeLanguage(langCode, langName) {
            // Update UI immediately for responsiveness
            document.getElementById('current-lang').innerText = langName;
            document.getElementById('lang-list').classList.remove('show');

            let attempts = 0;
            const maxAttempts = 20; // Try for 4 seconds (20 * 200ms)

            function attemptChange() {
                const selectField = document.querySelector(".goog-te-combo");
                if (selectField) {
                    // Only trigger if the value is different
                    if (selectField.value !== langCode) {
                        selectField.value = langCode;
                        selectField.dispatchEvent(new Event('change'));
                        
                        // Some versions of Google Translate also need a 'click' or 'input' event
                        selectField.dispatchEvent(new Event('click'));
                    }
                    
                    // Verify if it worked. Google Translate usually adds a class or 
                    // changes the value back if it fails to initialize.
                    // If it hasn't changed after a few attempts, we keep trying.
                    if (attempts < maxAttempts && selectField.value !== langCode) {
                        attempts++;
                        setTimeout(attemptChange, 200);
                    }
                } else {
                    if (attempts < maxAttempts) {
                        attempts++;
                        setTimeout(attemptChange, 200);
                    }
                }
            }
            attemptChange();
        }

        // Sync UI with current selection on load
        window.addEventListener('load', function() {
            setTimeout(function() {
                var selectField = document.querySelector(".goog-te-combo");
                if (selectField && selectField.value) {
                    var langMap = { 'en': 'English', 'fr': 'French' };
                    if (langMap[selectField.value]) {
                        document.getElementById('current-lang').innerText = langMap[selectField.value];
                    }
                }
            }, 1000);
        });

        // Close dropdown when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('.selected-lang') && !event.target.matches('.selected-lang *')) {
                var dropdowns = document.getElementsByClassName("lang-dropdown");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        // Persistent interval to keep the Google Translate banner hidden
        setInterval(function() {
            const selectors = [
                '.goog-te-banner-frame',
                '.VIpgJd-ZVi9od-ORHb-nS19wv',
                '.VIpgJd-ZVi9od-v016ju-ORHb',
                'iframe[class*="VIpgJd"]'
            ];
            
            selectors.forEach(selector => {
                const el = document.querySelector(selector);
                if (el) {
                    el.style.display = 'none';
                    el.style.opacity = '0';
                    el.style.height = '0';
                    el.style.pointerEvents = 'none';
                    el.style.visibility = 'hidden';
                }
            });
            document.body.style.top = '0';
            document.documentElement.style.marginTop = '0';
        }, 100);
    </script>

    <style>
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Custom Language Selector Styles */
        .custom-language-selector {
            position: relative;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #333;
            display: block !important;
        }

        .selected-lang {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            transition: all 0.3s ease;
            min-width: 90px;
            justify-content: space-between;
        }

        .selected-lang:hover {
            border-color: #1a1a1a;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .lang-caret {
            font-size: 10px;
            color: #999;
        }

        .lang-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            list-style: none;
            padding: 5px 0;
            margin: 5px 0 0;
            width: 100%;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            display: none;
            z-index: 1000;
        }

        .lang-dropdown.show {
            display: block;
        }

        .lang-dropdown li {
            padding: 8px 15px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .lang-dropdown li:hover {
            background: #f5f5f5;
            color: #1a1a1a;
        }

        /* Extremely Aggressive Google Banner Hiding */
        iframe.goog-te-banner-frame,
        .goog-te-banner-frame,
        .VIpgJd-ZVi9od-ORHb-nS19wv,
        .VIpgJd-ZVi9od-v016ju-ORHb,
        #goog-gt-tt,
        .goog-te-balloon-frame,
        .goog-te-gadget-icon,
        .goog-te-gadget-simple,
        .goog-te-menu-value,
        .goog-te-menu-frame {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            height: 0 !important;
            width: 0 !important;
            pointer-events: none !important;
        }
        
        body {
            top: 0 !important;
            position: static !important;
        }
        
        html {
            margin-top: 0 !important;
        }
        
        .goog-te-gadget {
            display: none !important;
        }

        /* Hide the "Translated to..." notification and any other injected Google UI containers */
        #goog-gt-tt, 
        .goog-te-balloon-frame,
        .goog-te-gadget-icon {
            display: none !important;
            visibility: hidden !important;
        }
    </style>
    <main class="content-wrapper">
