<?php
$names = '';
$CSVfp = fopen("names.csv", "r");
if ($CSVfp !== FALSE) {

	while (!feof($CSVfp)) {
		$data = fgetcsv($CSVfp, 1000, ",");
		if (!empty($data)) {
			$names .= $data[0] . '|';
		}
	}
}
fclose($CSVfp);
$names = substr($names, 0, -1);


$url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
$url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
?>


<html>

<head>
	<meta charset="UTF-8">
	<title>Network Television - 1st Birthday - Pize Winner | NMH | nTv</title>
	<link rel="icon" type="image/png" href="<?= $url ?>/img/logo.jpg" />
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="./style.css?v=7">

	<?php if ($_SERVER['DOCUMENT_ROOT'] != 'C:/xampp/htdocs' && !isset($og)) : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="author" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv" />
		<meta name="ROBOTS" content="index,follow" />
		<meta name="language" content="en" />
		<meta name="copyright" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="description" content="Network Television is randomly selecting a winner for the 1 birthday celebration, the winner will be randomly selected on live television. Stay Tuned!" />
		<meta name="keywords" content="nmh, ntv, oneuptwo, namibia, media, holdings, intouch, interactive, marketing, winner, birthday, anniversary, network, television, africa" />
		<meta property="fb:app_id" content="" />
		<meta property="og:title" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv - Home" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="Network Television is randomly selecting a winner for the 1 birthday celebration, the winner will be randomly selected on live television. Stay Tuned!" />
		<meta property="og:url" content="<?= $url ?>" />
		<meta property="og:site_name" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv " />
		<meta property="og:image" content="<?= $url ?>img/ntv.jpg" />
		<meta name="DC.title" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv - Home" />
		<meta name="DC.description" lang="en" content="Network Television is randomly selecting a winner for the 1 birthday celebration, the winner will be randomly selected on live television. Stay Tuned!" />
		<meta name="DC.date" content="<?= date('Y-m-d') ?>" />
		<meta name="DC.date.issued" content="<?= date('Y-m-d') ?>" />
		<meta name="DC.creator" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv" />
		<meta name="DC.publisher" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv" />
		<meta name="DC.language" content="en" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:description" content="Network Television is randomly selecting a winner for the 1 birthday celebration, the winner will be randomly selected on live television. Stay Tuned!" />
		<meta name="twitter:title" content="Network Television - 1st Birthday - Pize Winner | NMH | nTv - Home" />
		<meta name="twitter:image" content="<?= $url ?>img/ntv.jpg" />
		<link href="<?= $url ?>" rel="canonical">
		<script type="application/ld+json">
			{
				"@context": "https://schema.org/",
				"headline": "Network Television - 1st Birthday - Pize Winner | NMH | nTv",
				"description": "Network Television is randomly selecting a winner for the 1 birthday celebration, the winner will be randomly selected on live television. Stay Tuned!",
				"keywords": "nmh, ntv, oneuptwo, namibia, media, holdings, intouch, interactive, marketing, winner, birthday, anniversary, network, television, africa",
				"@type": "WebPage",
				"author":

				{
					"@type": "Organization",
					"url": "Network Television - 1st Birthday - Pize Winner | NMH | nTv"
				},
				"publisher": {
					"@type": "Organization",
					"name": "Network Television - 1st Birthday - Pize Winner | NMH | nTv",
					"url": "<?= $url ?>",
					"sameAs": [""],
					"logo":

					{
						"@type": "ImageObject",
						"url": "<?= $url ?>img/ntv.jpg",
						"width": "260",
						"height": "60"
					}
				}
			}
		</script>


		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-5DX4V3SLG9"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-5DX4V3SLG9');
		</script>
	<?php endif; ?>

</head>

<body>
	<a href="https://github.com/intouch-interactive-marketing/ntv-birthday-winner-php" target="_blank" class="btn btn-outline btn-primary" style="    
	position: fixed;
    bottom: 20px;
    left: 10px;">Source Code</a>
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="display: flex;align-items: center;justify-content: center;">
				<img style="height: 150px;" src="./img/logo_light.png" alt="">
			</div>
			<div class="col-md-3" style="display: flex;align-items: center;justify-content: center;">
				<img style="height: 150px;" src="./img/dstv.png" alt="">
			</div>
			<div class="col-md-3" style="display: flex;align-items: center;justify-content: center;">
				<img style="height: 150px;" src="./img/gotv.png" alt="">
			</div>
			<div class="col-md-3" style="display: flex;align-items: center;justify-content: center;">
				<img style="height: 150px;" src="./img/tfg.png" alt="">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<button id="roll" class="btn btn-success">Roll</button>
				<div id="msgbox" class="alert alert-warning" style="margin-top:20px;display:none;">You need to add at
					least 2 lines!</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" style="text-align:center">
				<div id="log"></div>
			</div>
		</div>
		<div class="row topbox">
			<div class="col-md-6 col-md-offset-3 rollbox">
				<div class="line"></div>
				<table>
					<tr id="loadout">
					</tr>
				</table>
			</div>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script>
		var winners = [];
		var prizes = [
			'DStv Dish Kit',
			'DStv Explora',
			'First GOtv Decoder',
			'Second GOtv Decoder',
			'Shopping Voucher worth N$3 000 from the Foschini Group'
		];
		$(document).ready(function() {

			var users = [],
				shuffled = [],
				loadout = $("#loadout"),
				insert_times = 30,
				duration_time = 10000;
			$("#roll").click(function() {

				let people = "<?= $names ?>";
				users = [];
				var lines = people.split('|');


				for (let w = 0; w < winners.length; w++) {
					for (let l = 0; l < lines.length; l++) {
						if (winners[w] == lines[l]) {
							lines.splice(l, 1);
						}
					}
				}


				if (lines.length < 2) {
					$("#msgbox").slideToggle(100);
					setTimeout(function() {
						$("#msgbox").slideToggle(100);
					}, 3000);
					return false;
				}
				for (var i = 0; i < lines.length; i++) {
					if (lines[i].length > 0) {
						users.push(lines[i]);
					}
				}
				$("#roll").attr("disabled", true);
				var scrollsize = 0,
					diff = 0;
				$(loadout).html("");
				$("#log").html("");
				loadout.css("left", "100%");
				if (users.length < 10) {
					insert_times = 20;
					duration_time = 5000;
				} else {
					insert_times = 10;
					duration_time = 10000;
				}
				for (var times = 0; times < insert_times; times++) {
					shuffled = users;
					shuffled.shuffle();
					for (var i = 0; i < users.length; i++) {
						loadout.append('<td><div class="roller"><div>' + shuffled[i] + '</div></div></td>');
						scrollsize = scrollsize + 192;
					}
				}


				diff = Math.round(scrollsize / 2);
				diff = randomEx(diff - 300, diff + 300);
				$("#loadout").animate({
					left: "-=" + diff
				}, duration_time, function() {
					$("#roll").attr("disabled", false);
					$('#loadout').children('td').each(function() {
						var center = window.innerWidth / 2;
						if ($(this).offset().left < center && $(this).offset().left + 250 > center) {

							var prizeIndex = Math.floor(Math.random() * prizes.length);
							var prize = prizes[prizeIndex];
							prizes.splice(prizeIndex, 1);


							if (prize) {

								var text = $(this).children().text();
								$("#log").append('The Winner of the <strong style="font-size:18px">' + prize + '</strong> is<br/> <span class=\"badge\">' + text + '</span>');
								winners[winners.length] = text
							}

						}
					});

				});


			});
			Array.prototype.shuffle = function() {
				var counter = this.length,
					temp, index;
				while (counter > 0) {
					index = (Math.random() * counter--) | 0;
					temp = this[counter];
					this[counter] = this[index];
					this[index] = temp;
				}
			}

			function randomEx(min, max) {
				return Math.floor(Math.random() * (max - min + 1) + min);
			}
		});
	</script>


</body>

</html>