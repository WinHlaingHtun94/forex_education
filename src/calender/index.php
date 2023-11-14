<?php
	require_once('../php/init.php');
	require_once('../php/layouts/page_header.php');
	$thisPage = "calender";
?>

<body>

	<!-- wrapper -->
	<div id="wrapper">

		<!-- innerWrapper -->
		<div id="innerWrapper">

			<!-- header -->
			<?php require_once("../php/layouts/contents_header.php"); ?>
			<!-- /header -->

			<!-- ctArea -->
			<div id="ctArea">
				<div class="ctCalender">
                    <h2 class="leadTitle">Economic Calender</h2>
					<div class="calender">
						<iframe src="https://sslecal2.investing.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,10,35,43,56,36,110,11,26,12,4,5&calType=week&timeZone=26&lang=1" width="100%" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
					</div>
                    <h2 class="leadTitle">Advanced Real-Time Chart</h2>
					<div class="calender">
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container" style="height:100%;width:100%">
						<div id="tradingview_eeac2" style="height:calc(100% - 32px);width:100%"></div>
						<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
						<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
						<script type="text/javascript">
						new TradingView.widget(
						{
						"autosize": true,
						"symbol": "FOREXCOM:XAUUSD",
						"interval": "240",
						"timezone": "Etc/UTC",
						"theme": "light",
						"style": "1",
						"locale": "en",
						"enable_publishing": false,
						"withdateranges": true,
						"hide_side_toolbar": false,
						"allow_symbol_change": true,
						"container_id": "tradingview_eeac2"
						}
						);
						</script>
						</div>
						<!-- TradingView Widget END -->
					</div>
                    <h2 class="leadTitle">Forex Cross Rates</h2>
					<div class="calender">
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
						{
						"width": "100%",
						"height": "100%",
						"currencies": [
							"EUR",
							"USD",
							"JPY",
							"GBP",
							"CHF",
							"AUD",
							"CAD",
							"NZD"
						],
						"isTransparent": true,
						"colorTheme": "light",
						"locale": "en"
						}
						</script>
						</div>
						<!-- TradingView Widget END -->
					</div>
                </div>
			</div>
			<!-- ctArea -->

			<!-- footer -->
			<?php require_once("../php/layouts/contents_footer.php"); ?>
			<!-- /footer -->

		</div>
		<!-- / innerWrap -->

	</div>
	<!-- / wrapper -->


	<?php require_once("../php/layouts/page_footer.php"); ?>
