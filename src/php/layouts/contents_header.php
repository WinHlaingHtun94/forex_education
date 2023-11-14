<header>
    <div class="header col">
        <h1 class="logo">
            <span>logo</span>
            <a href="/">
                <figure>
                    <img src="../../assets/img/logo.png" alt="logo" width="546" height="317">
                </figure>
            </a>
        </h1>
        <div class="humberger spOnly">
            <span></span>
        </div>
        <ul class="col nav">
            <li><a href="<?php echo SITE_URL;?>#about" class="<?php if($thisPage == 'index'){echo 'active';}?>">About</a></li>
            <li><a href="<?php echo SITE_URL;?>analysis/" class="<?php if($thisPage == 'analysis'){echo 'active';}?>">Analysis</a></li>
            <li><a href="<?php echo SITE_URL;?>courses/" class="<?php if($thisPage == 'detail'){echo 'active';}?>">Courses</a></li>
            <li><a href="<?php echo SITE_URL;?>calender/" class="<?php if($thisPage == 'calender'){echo 'active';}?>">Tools</a></li>
            <li><a href="<?php echo SITE_URL;?>broker/" class="<?php if($thisPage == 'broker'){echo 'active';}?>">Brokers</a></li>
            <li><a href="<?php echo SITE_URL;?>#contact" class="<?php if($thisPage == 'contact'){echo 'active';}?>">Contact</a></li>
            <li><button class="mode"><img src="<?php echo SITE_URL;?>assets/img/sun.png" alt="sun"><img src="<?php echo SITE_URL;?>assets/img/moon.png" alt="moon"></button></li>
        </ul>
    </div>
    <div class="api">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
        "symbols": [
            {
            "description": "EURUSD",
            "proName": "FOREXCOM:EURUSD"
            },
            {
            "description": "GBPUSD",
            "proName": "FOREXCOM:GBPUSD"
            },
            {
            "description": "AUDUSD",
            "proName": "FOREXCOM:AUDUSD"
            },
            {
            "description": "NZDUSD",
            "proName": "FOREXCOM:NZDUSD"
            },
            {
            "description": "USDCAD",
            "proName": "FOREXCOM:USDCAD"
            },
            {
            "description": "USDJPY",
            "proName": "FOREXCOM:USDJPY"
            },
            {
            "description": "XAUUSD",
            "proName": "FOREXCOM:XAUUSD"
            }
        ],
        "showSymbolLogo": true,
        "colorTheme": "dark",
        "isTransparent": false,
        "displayMode": "adaptive",
        "locale": "en"
        }
        </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</header>
