<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News</title>
<link rel="stylesheet" href="css/News.css" id="applicationStylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: News;
		--web-view-id: News;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: News;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#News {
		position: absolute;
		width: 1920px;
		height: 5105px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: News;
		--web-view-id: News;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	#Rechteck_49 {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_49 {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 480px;
		height: 200px;
		left: 975px;
		top: 1622px;
	}
	#fh-wien50_l {
		fill: rgba(216,218,217,1);
	}
	.fh-wien50_l {
		position: absolute;
		overflow: visible;
		width: 462px;
		height: 298px;
		left: 975px;
		top: 1328px;
	}
	#iStock-490686254 {
		position: absolute;
		width: 2027px;
		height: 926px;
		left: 0px;
		top: 96px;
		overflow: visible;
	}
	#Du_mchtest_herausfinden_was__m {
		left: 319px;
		top: 280px;
		position: absolute;
		overflow: visible;
		width: 555px;
		height: 308px;
		line-height: 44px;
		margin-top: -5.5px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 33px;
		color: rgba(3,49,108,1);
	}
	#yourmoneymatters_l {
		left: 317px;
		top: 931px;
		position: absolute;
		overflow: visible;
		width: 233px;
		white-space: nowrap;
		line-height: 48px;
		margin-top: -14px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(3,49,108,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Button_l {
		position: absolute;
		width: 180px;
		height: 54px;
		left: 319px;
		top: 614px;
		overflow: visible;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
	}
	#Pfad_935 {
		fill: rgba(136,200,220,1);
	}
	.Pfad_935 {
		overflow: visible;
		position: absolute;
		width: 180px;
		height: 54px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Jetzt_anmelden_l {
		left: 19px;
		top: 12px;
		position: absolute;
		overflow: visible;
		width: 145px;
		white-space: nowrap;
		line-height: 25.5px;
		margin-top: -2.75px;
		text-align: center;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Rechteck_47 {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_47 {
		position: absolute;
		overflow: visible;
		width: 164px;
		height: 80px;
		left: 0px;
		top: 942px;
	}
	#Pfeil {
		transform: matrix(1,0,0,1,109.6666,967.5) rotate(90deg);
		transform-origin: center;
		position: absolute;
		width: 23.333px;
		height: 28.333px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ebene_1_ma {
		position: absolute;
		width: 23.333px;
		height: 28.333px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_139 {
		position: absolute;
		width: 23.333px;
		height: 28.333px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Linie_14_mc {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 3px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Linie_14_mc {
		overflow: visible;
		position: absolute;
		width: 28.333px;
		height: 3px;
		left: 0px;
		top: 11.667px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_134 {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 3px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Pfad_134 {
		overflow: visible;
		position: absolute;
		width: 14.849px;
		height: 25.455px;
		left: 16.667px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfeil_me {
		transform: matrix(1,0,0,1,36.6665,967.4999) rotate(-90deg);
		transform-origin: center;
		position: absolute;
		width: 23.333px;
		height: 28.333px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ebene_1_mf {
		position: absolute;
		width: 23.333px;
		height: 28.333px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_139_mg {
		position: absolute;
		width: 23.333px;
		height: 28.333px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Linie_14_mh {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 3px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Linie_14_mh {
		overflow: visible;
		position: absolute;
		width: 28.333px;
		height: 3px;
		left: 0px;
		top: 11.667px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_134_mi {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 3px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Pfad_134_mi {
		overflow: visible;
		position: absolute;
		width: 14.849px;
		height: 25.455px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rechteck_45_mj {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_45_mj {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 480px;
		height: 200px;
		left: 483px;
		top: 1622px;
	}
	#Rechteck_53 {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_53 {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 480px;
		height: 200px;
		left: 483px;
		top: 2133px;
	}
	#Rechteck_54 {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_54 {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 480px;
		height: 200px;
		left: 975px;
		top: 2133px;
	}
	#iStock-1349465204 {
		position: absolute;
		width: 462px;
		height: 298px;
		left: 483px;
		top: 1328px;
		overflow: visible;
	}
	#iStock-1303397527 {
		position: absolute;
		width: 462px;
		height: 298px;
		left: 483px;
		top: 1839px;
		overflow: visible;
	}
	#iStock-1367145986 {
		position: absolute;
		width: 462px;
		height: 298px;
		left: 975px;
		top: 1328px;
		overflow: visible;
	}
	#iStock-1257563298 {
		position: absolute;
		width: 462px;
		height: 298px;
		left: 975px;
		top: 1839px;
		overflow: visible;
	}
	#Greenwashing__ein_Kind_unserer {
		left: 503px;
		top: 1677px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 60px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Wie_nachhaltig_sind_Bitcoin__C {
		left: 503px;
		top: 2188px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Jetzt_reinlesen {
		left: 503px;
		top: 1759px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 20px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: News___1.html;
		cursor: pointer;
		line-height: 25.5px;
		margin-top: -5.25px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(3,49,108,1);
	}
	#Jetzt_reinlesen_mt {
		left: 503px;
		top: 2270px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 20px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: News___1.html;
		cursor: pointer;
		line-height: 25.5px;
		margin-top: -5.25px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(3,49,108,1);
	}
	#Jetzt_reinlesen_mu {
		left: 995px;
		top: 1759px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 20px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: News___1.html;
		cursor: pointer;
		line-height: 25.5px;
		margin-top: -5.25px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(3,49,108,1);
	}
	#Jetzt_reinlesen_mv {
		left: 995px;
		top: 2270px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 20px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: News___1.html;
		cursor: pointer;
		line-height: 25.5px;
		margin-top: -5.25px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(3,49,108,1);
	}
	#Wie_dein_Geld_zur_Klima-Abkhlu {
		left: 995px;
		top: 1677px;
		position: absolute;
		overflow: visible;
		width: 421px;
		height: 60px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Fast_Fashion__ein_ungesunder_T {
		left: 995px;
		top: 2188px;
		position: absolute;
		overflow: visible;
		width: 443px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#n_3_Mai_2022 {
		left: 503px;
		top: 1646px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(136,200,220,1);
	}
	#n_0_April__2022 {
		left: 503px;
		top: 2157px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(136,200,220,1);
	}
	#n__Mai_2022 {
		left: 995px;
		top: 1646px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(136,200,220,1);
	}
	#n_3_April__2022 {
		left: 995px;
		top: 2157px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(136,200,220,1);
	}
	#Das_Neueste_vom_birds_of_trust {
		left: 319px;
		top: 1210px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 103px;
		line-height: 50px;
		margin-top: -5px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 40px;
		color: rgba(136,200,220,1);
	}
	#besserverstehen {
		left: 319px;
		top: 1172px;
		position: absolute;
		overflow: visible;
		width: 627px;
		height: 24px;
		line-height: 22px;
		margin-top: -2px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Was_meinen_unsere_Nutzerinnen {
		left: 319px;
		top: 3305px;
		position: absolute;
		overflow: visible;
		width: 299px;
		height: 80px;
		line-height: 40px;
		margin-top: -5px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(3,49,108,1);
	}
	#Bildlaufgruppe_1 {
		mix-blend-mode: normal;
		position: absolute;
		width: 954px;
		height: 335px;
		left: 647px;
		top: 3431px;
		overflow: hidden;
	}
	#Wiederholungsraster_11 {
		position: absolute;
		width: 1936px;
		height: 335px;
		left: 0px;
		top: 0px;
		overflow: hidden;
	}
	#Group {
		position: absolute;
		width: 954px;
		height: 338px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Madeleine_25 {
		left: 492px;
		top: 277px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Hannes_43 {
		left: 0px;
		top: 277px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Angestellte {
		left: 492px;
		top: 314px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#Angestellter {
		left: 0px;
		top: 314px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#Ich_war_absolut_begeistert_vom {
		left: 492px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 240px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Lorem_ipsum_dolor_sit_amet_con_nd {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 240px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Group_ne {
		position: absolute;
		width: 954px;
		height: 338px;
		left: 974px;
		top: 0px;
		overflow: visible;
	}
	#Madeleine_25_nf {
		left: 492px;
		top: 277px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Hannes_43_ng {
		left: 0px;
		top: 277px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Angestellte_nh {
		left: 492px;
		top: 314px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#Angestellter_ni {
		left: 0px;
		top: 314px;
		position: absolute;
		overflow: visible;
		width: 264px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#Ich_war_absolut_begeistert_vom_nj {
		left: 492px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 240px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Lorem_ipsum_dolor_sit_amet_con_nk {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 240px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Pfeil-re {
		position: absolute;
		width: 47.857px;
		height: 30px;
		left: 396.857px;
		top: 3401px;
		overflow: visible;
	}
	#Gruppe_37 {
		position: absolute;
		width: 47.857px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfeil-re_nn {
		transform: matrix(1,0,0,1,318.9998,3401) rotate(180deg);
		transform-origin: center;
		position: absolute;
		width: 47.857px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_37_no {
		position: absolute;
		width: 47.857px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Follow_Us_-_Blog {
		position: absolute;
		width: 1281px;
		height: 656px;
		left: 319px;
		top: 3966px;
		overflow: visible;
	}
	#Gruppe_315_nq {
		position: absolute;
		width: 298px;
		height: 584px;
		left: 655px;
		top: 72px;
		overflow: visible;
	}
	#Rechteck_45_nr {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_45_nr {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 316px;
		height: 308px;
		left: 0px;
		top: 294px;
	}
	#Bild1_ns {
		position: absolute;
		width: 298px;
		height: 298px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_216_nt {
		position: absolute;
		width: 246px;
		height: 93px;
		left: 16px;
		top: 479px;
		overflow: visible;
	}
	#birdsoftrust_20_April_nu {
		left: 62px;
		top: 6px;
		position: absolute;
		overflow: visible;
		width: 185px;
		height: 41px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(0,0,0,1);
	}
	#Gruppe_214_nv {
		position: absolute;
		width: 96px;
		height: 25px;
		left: 0px;
		top: 68px;
		overflow: visible;
	}
	#Gruppe_213_nw {
		opacity: 0.36;
		position: absolute;
		width: 96px;
		height: 25px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#n_0_nx {
		left: 79px;
		top: 2px;
		position: absolute;
		overflow: visible;
		width: 18px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: lighter;
		font-size: 14px;
		color: rgba(0,0,0,1);
	}
	#Bild_1_ny {
		position: absolute;
		width: 47px;
		height: 25px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Bild_2_nz {
		position: absolute;
		width: 47px;
		height: 25px;
		left: 24px;
		top: 0px;
		overflow: visible;
	}
	#Rechteck_44_n {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_44_n {
		position: absolute;
		overflow: visible;
		width: 22px;
		height: 23px;
		left: 25px;
		top: 2px;
	}
	#n_0_n {
		left: 25px;
		top: 2px;
		position: absolute;
		overflow: visible;
		width: 18px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: lighter;
		font-size: 14px;
		color: rgba(0,0,0,1);
	}
	#Gruppe_215_n {
		position: absolute;
		width: 52.817px;
		height: 52.256px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ellipse_12_n {
		fill: rgba(136,200,220,1);
	}
	.Ellipse_12_n {
		position: absolute;
		overflow: visible;
		width: 52.256px;
		height: 52.256px;
		left: 0px;
		top: 0px;
	}
	#Ebene_2_n {
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 22.338px;
		overflow: visible;
	}
	#Ebene_1_n {
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_113_n {
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_113_n {
		fill: rgba(0,0,0,1);
	}
	.Pfad_113_n {
		overflow: visible;
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Lorem_ipsum_dolor_sit_amet_con_n {
		left: 16px;
		top: 311px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 160px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(0,0,0,1);
	}
	#Gruppe_316_n {
		position: absolute;
		width: 298px;
		height: 584px;
		left: 983px;
		top: 72px;
		overflow: visible;
	}
	#Rechteck_45_oa {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_45_oa {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 316px;
		height: 308px;
		left: 0px;
		top: 294px;
	}
	#Bild1_ob {
		position: absolute;
		width: 298px;
		height: 298px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_216_oc {
		position: absolute;
		width: 246px;
		height: 93px;
		left: 16px;
		top: 479px;
		overflow: visible;
	}
	#birdsoftrust_3_April_od {
		left: 62px;
		top: 6px;
		position: absolute;
		overflow: visible;
		width: 185px;
		height: 41px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(0,0,0,1);
	}
	#Gruppe_214_oe {
		position: absolute;
		width: 88px;
		height: 25px;
		left: 0px;
		top: 68px;
		overflow: visible;
	}
	#Gruppe_213_of {
		opacity: 0.36;
		position: absolute;
		width: 88px;
		height: 25px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#n__og {
		left: 79px;
		top: 2px;
		position: absolute;
		overflow: visible;
		width: 10px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: lighter;
		font-size: 14px;
		color: rgba(0,0,0,1);
	}
	#Bild_1_oh {
		position: absolute;
		width: 47px;
		height: 25px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Bild_2_oi {
		position: absolute;
		width: 47px;
		height: 25px;
		left: 24px;
		top: 0px;
		overflow: visible;
	}
	#Rechteck_44_oj {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_44_oj {
		position: absolute;
		overflow: visible;
		width: 22px;
		height: 23px;
		left: 25px;
		top: 2px;
	}
	#n_5_ok {
		left: 25px;
		top: 2px;
		position: absolute;
		overflow: visible;
		width: 18px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: lighter;
		font-size: 14px;
		color: rgba(0,0,0,1);
	}
	#Gruppe_215_ol {
		position: absolute;
		width: 52.817px;
		height: 52.256px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ellipse_12_om {
		fill: rgba(136,200,220,1);
	}
	.Ellipse_12_om {
		position: absolute;
		overflow: visible;
		width: 52.256px;
		height: 52.256px;
		left: 0px;
		top: 0px;
	}
	#Ebene_2_on {
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 22.338px;
		overflow: visible;
	}
	#Ebene_1_oo {
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_113_op {
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_113_oq {
		fill: rgba(0,0,0,1);
	}
	.Pfad_113_oq {
		overflow: visible;
		position: absolute;
		width: 52.817px;
		height: 12.542px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Lorem_ipsum_dolor_sit_amet_con_or {
		left: 16px;
		top: 311px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 160px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(0,0,0,1);
	}
	#birdsoftrust_os {
		left: 653px;
		top: 30px;
		position: absolute;
		overflow: visible;
		width: 151px;
		white-space: nowrap;
		line-height: 22px;
		margin-top: -2px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(46,92,132,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Jetzt_birds_of_trust_auf_Insta_ot {
		left: 653px;
		top: -4px;
		position: absolute;
		overflow: visible;
		width: 414px;
		white-space: nowrap;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Follow_Us {
		left: 0px;
		top: -5px;
		position: absolute;
		overflow: visible;
		width: 137px;
		white-space: nowrap;
		line-height: 40px;
		margin-top: -5px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(3,49,108,1);
	}
	#Du_willst_noch__mehr_wissen {
		left: 0px;
		top: 55px;
		position: absolute;
		overflow: visible;
		width: 457px;
		height: 105px;
		line-height: 50px;
		margin-top: -5px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 40px;
		color: rgba(136,200,220,1);
	}
	#Dann_werde_Teil_unserer_birds_ {
		left: 0px;
		top: 175px;
		position: absolute;
		overflow: visible;
		width: 457px;
		height: 76px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#Gruppe_233 {
		position: absolute;
		width: 123.395px;
		height: 30.203px;
		left: 0px;
		top: 288px;
		overflow: visible;
	}
	#Gruppe_166_oy {
		position: absolute;
		width: 14.095px;
		height: 30.203px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_165_oz {
		position: absolute;
		width: 14.095px;
		height: 30.203px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_157_o {
		position: absolute;
		width: 30.203px;
		height: 30.203px;
		left: 38px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_156_o {
		position: absolute;
		width: 30.203px;
		height: 30.203px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_160 {
		position: absolute;
		width: 31.395px;
		height: 30px;
		left: 92px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_159_o {
		position: absolute;
		width: 31.395px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_241 {
		position: absolute;
		width: 1921px;
		height: 590px;
		left: 0px;
		top: 2515px;
		overflow: visible;
	}
	#Rechteck_23_o {
		fill: rgba(243,249,251,1);
	}
	.Rechteck_23_o {
		position: absolute;
		overflow: visible;
		width: 1921px;
		height: 590px;
		left: 0px;
		top: 0px;
	}
	#Nachhaltige_ETFs__Risiko_oder_ {
		left: 892px;
		top: 187px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Episode_8 {
		left: 892px;
		top: 156px;
		position: absolute;
		overflow: visible;
		width: 463px;
		height: 24px;
		line-height: 22px;
		margin-top: -2px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(46,92,132,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#der_BOTcast_fr_nachhaltige_Gel {
		left: 319px;
		top: 239px;
		position: absolute;
		overflow: visible;
		width: 419px;
		height: 30px;
		line-height: 30px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		color: rgba(3,49,108,1);
	}
	#Green_Money_Talks {
		left: 319px;
		top: 188px;
		position: absolute;
		overflow: visible;
		width: 419px;
		height: 53px;
		line-height: 50px;
		margin-top: -5px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 40px;
		color: rgba(136,200,220,1);
	}
	#podcast {
		left: 319px;
		top: 150px;
		position: absolute;
		overflow: visible;
		width: 419px;
		height: 24px;
		line-height: 22px;
		margin-top: -2px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Button_pb {
		position: absolute;
		width: 195px;
		height: 40px;
		left: 811px;
		top: 400px;
		overflow: visible;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
	}
	#Rechteck_7_pc {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 3px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rechteck_7_pc {
		position: absolute;
		overflow: visible;
		width: 195px;
		height: 40px;
		left: 0px;
		top: 0px;
	}
	#Zu_allen_Podcast-Folgen {
		left: 16px;
		top: 10px;
		position: absolute;
		overflow: visible;
		width: 169px;
		white-space: nowrap;
		line-height: 25.5px;
		margin-top: -5.25px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(3,49,108,1);
	}
	#Gruppe_240 {
		position: absolute;
		width: 64px;
		height: 64px;
		left: 811px;
		top: 150px;
		overflow: visible;
	}
	#Ellipse_14 {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 3px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Ellipse_14 {
		position: absolute;
		overflow: visible;
		width: 64px;
		height: 64px;
		left: 0px;
		top: 0px;
	}
	#Polygon_1 {
		fill: rgba(136,200,220,1);
	}
	.Polygon_1 {
		overflow: visible;
		position: absolute;
		width: 39px;
		height: 29px;
		transform: translate(-661px, -2583px) matrix(1,0,0,1,679,2600) rotate(90deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
	}
	#Wiederholungsraster_3 {
		position: absolute;
		width: 790px;
		height: 150px;
		left: 811px;
		top: 240px;
		overflow: hidden;
	}
	#Group_pi {
		position: absolute;
		width: 790.5px;
		height: 37.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Episode_7_Inklusives_Banking_- {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 578px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#n_03755 {
		left: 656px;
		top: 3px;
		position: absolute;
		overflow: visible;
		width: 132px;
		height: 20px;
		text-align: right;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(112,112,112,1);
	}
	#Linie_40 {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_40 {
		overflow: visible;
		position: absolute;
		width: 790px;
		height: 1px;
		left: 0.5px;
		top: 37.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_pm {
		position: absolute;
		width: 790.5px;
		height: 37.5px;
		left: 0px;
		top: 58px;
		overflow: visible;
	}
	#Episode_6_Frauen_und_Finanzen {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 578px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#n_03021 {
		left: 656px;
		top: 3px;
		position: absolute;
		overflow: visible;
		width: 132px;
		height: 20px;
		text-align: right;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(112,112,112,1);
	}
	#Linie_40_pp {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_40_pp {
		overflow: visible;
		position: absolute;
		width: 790px;
		height: 1px;
		left: 0.5px;
		top: 37.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_pq {
		position: absolute;
		width: 790.5px;
		height: 37.5px;
		left: 0px;
		top: 116px;
		overflow: visible;
	}
	#Episode_5_Wenn_das_Cash_nicht_ {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 578px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
	}
	#n_03802 {
		left: 656px;
		top: 3px;
		position: absolute;
		overflow: visible;
		width: 132px;
		height: 20px;
		text-align: right;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(112,112,112,1);
	}
	#Linie_40_pt {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_40_pt {
		overflow: visible;
		position: absolute;
		width: 790px;
		height: 1px;
		left: 0.5px;
		top: 37.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Footer_pu {
		position: absolute;
		width: 1284px;
		height: 240.778px;
		left: 317px;
		top: 4835px;
		overflow: visible;
	}
	#AGB_pv {
		left: 330px;
		top: 64.278px;
		position: absolute;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Datenschutz_pw {
		left: 330px;
		top: 125.278px;
		position: absolute;
		overflow: visible;
		width: 99px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Newsletteranmeldung_px {
		left: 330px;
		top: 94.278px;
		position: absolute;
		overflow: visible;
		width: 176px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Impressum_py {
		left: 330px;
		top: 155.278px;
		position: absolute;
		overflow: visible;
		width: 89px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;

		cursor: pointer;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Alle_Texte_sowie_die_Hinweise__pz {
		left: 658px;
		top: 67.278px;
		position: absolute;
		overflow: visible;
		width: 627px;
		height: 100px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(112,112,112,1);
	}
	#E__infobirdsoftrustat_p {
		left: 0px;
		top: 128.278px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#T__43_660_2004_512_p {
		left: 0px;
		top: 158.278px;
		position: absolute;
		overflow: visible;
		width: 268px;
		height: 24px;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Gruppe_209_p {
		position: absolute;
		width: 143.093px;
		height: 22.5px;
		left: 2px;
		top: 218.278px;
		overflow: visible;
	}
	#Gruppe_166_p {
		position: absolute;
		width: 10.5px;
		height: 22.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_165_p {
		position: absolute;
		width: 10.5px;
		height: 22.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ebene_2_p {
		position: absolute;
		width: 23.53px;
		height: 22.5px;
		left: 119.563px;
		top: 0px;
		overflow: visible;
	}
	#Ebene_1_p {
		position: absolute;
		width: 23.53px;
		height: 22.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_170_p {
		position: absolute;
		width: 23.53px;
		height: 22.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_169_p {
		position: absolute;
		width: 13.062px;
		height: 4.416px;
		left: 5.234px;
		top: 6.125px;
		overflow: visible;
	}
	#Linie_12_p {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 2px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_12_p {
		overflow: visible;
		position: absolute;
		width: 13.062px;
		height: 2px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Linie_14_qa {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 2px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_14_qa {
		overflow: visible;
		position: absolute;
		width: 13.062px;
		height: 2px;
		left: 0px;
		top: 4.416px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_887_qb {
		fill: transparent;
		stroke: rgba(136,200,220,1);
		stroke-width: 2px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_887_qb {
		overflow: visible;
		position: absolute;
		width: 25.53px;
		height: 24.522px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Gruppe_157_qc {
		position: absolute;
		width: 22.5px;
		height: 22.5px;
		left: 74.86px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_156_qd {
		position: absolute;
		width: 22.5px;
		height: 22.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ebene_2_qe {
		position: absolute;
		width: 265.298px;
		height: 49.278px;
		left: 2px;
		top: 40px;
		overflow: visible;
	}
	#Ebene_1_qf {
		position: absolute;
		width: 265.298px;
		height: 49.278px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_113_qg {
		position: absolute;
		width: 265.298px;
		height: 49.278px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_113_qh {
		fill: rgba(0,0,0,1);
	}
	.Pfad_113_qh {
		overflow: visible;
		position: absolute;
		width: 71.113px;
		height: 16.887px;
		left: 101.165px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Gruppe_112_qi {
		position: absolute;
		width: 265.298px;
		height: 28.519px;
		left: 0px;
		top: 20.759px;
		overflow: visible;
	}
	#Pfad_114_qj {
		fill: rgba(136,200,220,1);
	}
	.Pfad_114_qj {
		overflow: visible;
		position: absolute;
		width: 24.885px;
		height: 25.404px;
		left: 0px;
		top: 3.115px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_115_qk {
		fill: rgba(136,200,220,1);
	}
	.Pfad_115_qk {
		overflow: visible;
		position: absolute;
		width: 12.572px;
		height: 27.963px;
		left: 26.7px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_116_ql {
		fill: rgba(136,200,220,1);
	}
	.Pfad_116_ql {
		overflow: visible;
		position: absolute;
		width: 18.618px;
		height: 19.137px;
		left: 41.867px;
		top: 8.827px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_117_qm {
		fill: rgba(136,200,220,1);
	}
	.Pfad_117_qm {
		overflow: visible;
		position: absolute;
		width: 25.293px;
		height: 25.404px;
		left: 63.005px;
		top: 3.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_118_qn {
		fill: rgba(136,200,220,1);
	}
	.Pfad_118_qn {
		overflow: visible;
		position: absolute;
		width: 17.653px;
		height: 19.878px;
		left: 90.633px;
		top: 8.641px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_119_qo {
		fill: rgba(136,200,220,1);
	}
	.Pfad_119_qo {
		overflow: visible;
		position: absolute;
		width: 21.992px;
		height: 19.878px;
		left: 117.11px;
		top: 8.641px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_120_qp {
		fill: rgba(136,200,220,1);
	}
	.Pfad_120_qp {
		overflow: visible;
		position: absolute;
		width: 16.726px;
		height: 25.404px;
		left: 141.103px;
		top: 2.559px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_121_qq {
		fill: rgba(136,200,220,1);
	}
	.Pfad_121_qq {
		overflow: visible;
		position: absolute;
		width: 14.945px;
		height: 25.367px;
		left: 165.393px;
		top: 3.152px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_122_qr {
		fill: rgba(136,200,220,1);
	}
	.Pfad_122_qr {
		overflow: visible;
		position: absolute;
		width: 18.618px;
		height: 19.137px;
		left: 182.452px;
		top: 8.827px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_123_qs {
		fill: rgba(136,200,220,1);
	}
	.Pfad_123_qs {
		overflow: visible;
		position: absolute;
		width: 24.773px;
		height: 19.359px;
		left: 203.589px;
		top: 9.161px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_124_qt {
		fill: rgba(136,200,220,1);
	}
	.Pfad_124_qt {
		overflow: visible;
		position: absolute;
		width: 17.652px;
		height: 19.878px;
		left: 230.698px;
		top: 8.641px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_125_qu {
		fill: rgba(136,200,220,1);
	}
	.Pfad_125_qu {
		overflow: visible;
		position: absolute;
		width: 14.945px;
		height: 25.367px;
		left: 250.353px;
		top: 3.152px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_903_qv {
		fill: transparent;
		stroke: rgba(231,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_903_qv {
		overflow: visible;
		position: absolute;
		width: 1275.998px;
		height: 1px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Gruppe_289_qw {
		position: absolute;
		width: 23.547px;
		height: 22.5px;
		left: 34px;
		top: 218.278px;
		overflow: visible;
	}
	#Pfad_950_qx {
		fill: rgba(136,200,220,1);
	}
	.Pfad_950_qx {
		overflow: visible;
		position: absolute;
		width: 23.547px;
		height: 22.5px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Gruppe_305_qy {
		position: absolute;
		width: 1134.835px;
		height: 6357.301px;
		left: 275.66px;
		top: 834.246px;
		overflow: visible;
	}
	#Musteransicht_qz {
		opacity: 0.06;
		transform: translate(-275.66px, -834.246px) matrix(1,0,0,1,286.5772,947.5233) rotate(-12deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1114px;
		white-space: nowrap;
		line-height: 209px;
		margin-top: -21px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 167px;
		color: rgba(112,112,112,1);
	}
	#Musteransicht_q {
		opacity: 0.06;
		transform: translate(-275.66px, -834.246px) matrix(1,0,0,1,286.5772,4589.2698) rotate(-12deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1114px;
		white-space: nowrap;
		line-height: 209px;
		margin-top: -21px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 167px;
		color: rgba(112,112,112,1);
	}
	#Musteransicht_ra {
		opacity: 0.06;
		transform: translate(-275.66px, -834.246px) matrix(1,0,0,1,286.5772,5545.2698) rotate(-12deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1114px;
		white-space: nowrap;
		line-height: 209px;
		margin-top: -21px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 167px;
		color: rgba(112,112,112,1);
	}
	#Musteransicht_rb {
		opacity: 0.06;
		transform: translate(-275.66px, -834.246px) matrix(1,0,0,1,286.5772,6856.2698) rotate(-12deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1114px;
		white-space: nowrap;
		line-height: 209px;
		margin-top: -21px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 167px;
		color: rgba(112,112,112,1);
	}
	#Musteransicht_rc {
		opacity: 0.06;
		transform: translate(-275.66px, -834.246px) matrix(1,0,0,1,286.5772,2261.27) rotate(-12deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1114px;
		white-space: nowrap;
		line-height: 209px;
		margin-top: -21px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 167px;
		color: rgba(112,112,112,1);
	}
	#Musteransicht_rd {
		opacity: 0.06;
		transform: translate(-275.66px, -834.246px) matrix(1,0,0,1,286.5772,3745.27) rotate(-12deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1114px;
		white-space: nowrap;
		line-height: 209px;
		margin-top: -21px;
		text-align: left;
		font-family: Mirador;
		font-style: normal;
		font-weight: bold;
		font-size: 167px;
		color: rgba(112,112,112,1);
	}
	#Kontaktflappe_q {
		position: absolute;
		width: 55px;
		height: 223px;
		left: 1865px;
		top: 282px;
		overflow: visible;
	}
	#Rechteck_20_q {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_20_q {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		position: absolute;
		overflow: visible;
		width: 73px;
		height: 241px;
		left: 0px;
		top: 0px;
	}
	#Gruppe_166_q {
		position: absolute;
		width: 14px;
		height: 30px;
		left: 21px;
		top: 15px;
		overflow: visible;
	}
	#Gruppe_165_q {
		position: absolute;
		width: 14px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Ebene_2_q {
		position: absolute;
		width: 31.373px;
		height: 30px;
		left: 12px;
		top: 179px;
		overflow: visible;
	}
	#Ebene_1_ra {
		position: absolute;
		width: 31.373px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_170_rb {
		position: absolute;
		width: 31.373px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_169_rc {
		position: absolute;
		width: 17.416px;
		height: 5.888px;
		left: 6.979px;
		top: 8.167px;
		overflow: visible;
	}
	#Linie_12_rd {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 3px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_12_rd {
		overflow: visible;
		position: absolute;
		width: 17.416px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Linie_14_re {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 3px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Linie_14_re {
		overflow: visible;
		position: absolute;
		width: 17.416px;
		height: 3px;
		left: 0px;
		top: 5.888px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_887_rf {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 3px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_887_rf {
		overflow: visible;
		position: absolute;
		width: 34.373px;
		height: 33.032px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Gruppe_157_rg {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 13px;
		top: 123px;
		overflow: visible;
	}
	#Gruppe_156_rh {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_159_ri {
		position: absolute;
		width: 30px;
		height: 28.667px;
		left: 13px;
		top: 70px;
		overflow: visible;
	}
	#Men_rj {
		position: absolute;
		width: 1920px;
		height: 112px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rechteck_73_rk {
		fill: rgba(255,255,255,1);
	}
	.Rechteck_73_rk {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 68px;
		left: 0px;
		top: 44px;
	}
	#Men_rl {
		position: absolute;
		width: 1920px;
		height: 106px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_904_rm {
		fill: rgba(243,249,251,1);
	}
	.Pfad_904_rm {
		overflow: visible;
		position: absolute;
		width: 1920px;
		height: 50px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Home_rn {
		left: 773px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 55px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Home.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Konto_ro {
		left: 869px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Konto__bersicht.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Finanzieren_rp {
		left: 975px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 120px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#ber_Uns_rq {
		left: 1678px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 90px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Wissen__News_rr {
		left: 1139px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 148px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Methodik_rs {
		left: 1328px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 96px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#DE__EN_rt {
		left: 1784px;
		top: 15px;
		position: absolute;
		overflow: visible;
		width: 59px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Partner_Werden_ru {
		left: 1469px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 163px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#FAQ_rv {
		left: 1810px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 36px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(0,0,0,1);
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	#Rechteck_5_rw {
		fill: rgba(3,49,108,1);
	}
	.Rechteck_5_rw {
		position: absolute;
		overflow: visible;
		width: 149px;
		height: 3px;
		left: 1139px;
		top: 50px;
	}
	#Login_rx {
		left: 1660.09px;
		top: 15px;
		position: absolute;
		overflow: visible;
		width: 45px;
		white-space: nowrap;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Teaser.html;
		cursor: pointer;
		line-height: 26px;
		margin-top: -4px;
		text-align: left;
		font-family: HK Grotesk;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(3,49,108,1);
	}
	#Ebene_2_ry {
		position: absolute;
		width: 19.443px;
		height: 25.155px;
		left: 1714.557px;
		top: 9.018px;
		overflow: visible;
	}
	#Ebene_1_rz {
		position: absolute;
		width: 19.443px;
		height: 25.155px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_117_r {
		position: absolute;
		width: 19.443px;
		height: 25.155px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_141_r {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 2px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_141_r {
		overflow: visible;
		position: absolute;
		width: 21.443px;
		height: 12.677px;
		left: 0px;
		top: 13.478px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_142_r {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 2px;
		stroke-linejoin: round;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_142_r {
		overflow: visible;
		position: absolute;
		width: 12.933px;
		height: 12.931px;
		left: 4.257px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Ebene_2_r {
		position: absolute;
		width: 25.181px;
		height: 25.155px;
		left: 1574.819px;
		top: 9.018px;
		overflow: visible;
	}
	#Ebene_1_r {
		position: absolute;
		width: 25.181px;
		height: 25.155px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_118_r {
		position: absolute;
		width: 25.181px;
		height: 25.155px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_143_r {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 1.7857099771499634px;
		stroke-linejoin: round;
		stroke-linecap: round;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_143_r {
		overflow: visible;
		position: absolute;
		width: 11.411px;
		height: 11.411px;
		left: 15.925px;
		top: 15.899px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_144_r {
		fill: transparent;
		stroke: rgba(3,49,108,1);
		stroke-width: 1.7857099771499634px;
		stroke-linejoin: round;
		stroke-linecap: round;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Pfad_144_r {
		overflow: visible;
		position: absolute;
		width: 22.263px;
		height: 22.263px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Ebene_2_sa {
		position: absolute;
		width: 310.421px;
		height: 57.66px;
		left: 319px;
		top: 44.088px;
		overflow: visible;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Home.html;
		cursor: pointer;
	}
	#Ebene_1_sa {
		position: absolute;
		width: 310.421px;
		height: 57.66px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Gruppe_113_sa {
		position: absolute;
		width: 310.421px;
		height: 57.66px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Pfad_113_sb {
		fill: rgba(0,0,0,1);
	}
	.Pfad_113_sb {
		overflow: visible;
		position: absolute;
		width: 83.208px;
		height: 19.759px;
		left: 118.371px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Gruppe_112_sc {
		position: absolute;
		width: 310.421px;
		height: 33.37px;
		left: 0px;
		top: 24.29px;
		overflow: visible;
	}
	#Pfad_114_sd {
		fill: rgba(136,200,220,1);
	}
	.Pfad_114_sd {
		overflow: visible;
		position: absolute;
		width: 29.117px;
		height: 29.725px;
		left: 0px;
		top: 3.645px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_115_se {
		fill: rgba(136,200,220,1);
	}
	.Pfad_115_se {
		overflow: visible;
		position: absolute;
		width: 14.711px;
		height: 32.719px;
		left: 31.241px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_116_sf {
		fill: rgba(136,200,220,1);
	}
	.Pfad_116_sf {
		overflow: visible;
		position: absolute;
		width: 21.784px;
		height: 22.391px;
		left: 48.988px;
		top: 10.328px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_117_sg {
		fill: rgba(136,200,220,1);
	}
	.Pfad_117_sg {
		overflow: visible;
		position: absolute;
		width: 29.595px;
		height: 29.725px;
		left: 73.722px;
		top: 3.645px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_118_sh {
		fill: rgba(136,200,220,1);
	}
	.Pfad_118_sh {
		overflow: visible;
		position: absolute;
		width: 20.656px;
		height: 23.259px;
		left: 106.048px;
		top: 10.111px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_119_si {
		fill: rgba(136,200,220,1);
	}
	.Pfad_119_si {
		overflow: visible;
		position: absolute;
		width: 25.733px;
		height: 23.259px;
		left: 137.029px;
		top: 10.111px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_120_sj {
		fill: rgba(136,200,220,1);
	}
	.Pfad_120_sj {
		overflow: visible;
		position: absolute;
		width: 19.571px;
		height: 29.725px;
		left: 165.103px;
		top: 2.994px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_121_sk {
		fill: rgba(136,200,220,1);
	}
	.Pfad_121_sk {
		overflow: visible;
		position: absolute;
		width: 17.487px;
		height: 29.682px;
		left: 193.524px;
		top: 3.688px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_122_sl {
		fill: rgba(136,200,220,1);
	}
	.Pfad_122_sl {
		overflow: visible;
		position: absolute;
		width: 21.784px;
		height: 22.391px;
		left: 213.484px;
		top: 10.328px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_123_sm {
		fill: rgba(136,200,220,1);
	}
	.Pfad_123_sm {
		overflow: visible;
		position: absolute;
		width: 28.986px;
		height: 22.652px;
		left: 238.216px;
		top: 10.718px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_124_sn {
		fill: rgba(136,200,220,1);
	}
	.Pfad_124_sn {
		overflow: visible;
		position: absolute;
		width: 20.654px;
		height: 23.259px;
		left: 269.936px;
		top: 10.111px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pfad_125_so {
		fill: rgba(136,200,220,1);
	}
	.Pfad_125_so {
		overflow: visible;
		position: absolute;
		width: 17.487px;
		height: 29.682px;
		left: 292.935px;
		top: 3.688px;
		transform: matrix(1,0,0,1,0,0);
	}
</style-->
	<script id="applicationScript" src="js/News.js"></script>

<!--script id="applicationScript" src="js/News.js">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastTrigger = null;
	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.application = null;
	this.applicationStylesheet = null;
	this.showByMediaQuery = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.viewStates = [];
	this.views = [];
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;
	this.horizontalScrollbarsNeeded = false;
	this.verticalScrollbarsNeeded = false;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			} 
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1)); cursor: pointer";
		notification.setAttribute("style", styleRule);

		notification.className = "PageRefreshedClass";
		notification.addEventListener("click", function() {
			notification.parentNode.removeChild(notification);
		});
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				try {
					notification.parentNode.removeChild(notification);
				} catch(error) {}
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			var cssText = rule && rule.cssText;

			if (rule.media!=null && cssText.match("--web-view-name:")) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {HTMLElement} selectedView if provided shows the view passed in
	 **/
	 self.hideAllViews = function(selectedView, animation) {
		var views = self.views;
		var queryIndex = 0;
		var numberOfViews = views!=null ? views.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfViews;i++) {
			var viewData = views[i];
			var view = viewData && viewData.view;
			var mediaRule = viewData && viewData.mediaRule;
			
			if (view==selectedView) {
				self.currentQuery.mediaText = mediaRule.conditionText;
				self.currentQuery.index = queryIndex;
				self.currentQuery.rule = mediaRule;
				self.enableMediaQuery(mediaRule);
			}
			else {
				if (animation) {
					self.fadeOut(mediaRule)
				}
				else {
					self.disableMediaQuery(mediaRule);
				}
			}
			
			queryIndex++;
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();
		self.dispatchViewChange();

		var visibleView = self.getVisibleView();

		return visibleView==selectedView ? selectedView : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var isOverlay = view ? self.isOverlay(view) : false;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);

			if (isOverlay && view && setViewOptions) {
				self.setViewVariables(null, view);
			}
			else {
				if (view && setViewOptions) self.setViewOptions(view);
				if (view && setViewOptions) self.setViewVariables(view);
			}
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	self.getElementView = function(element) {
		var view = element;
		var viewFound = false;

		while (viewFound==false || view==null) {
			if (view && self.viewsDictionary[view.id]) {
				return view;
			}
			view = view.parentNode;
		}
	}

	/**
	 * Show overlay over view
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 */
	self.showOverlay = function(event, id, x, y) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var anchorLeft = false;
		var anchorTop = false;
		var anchorRight = false;
		var anchorBottom = false;
		var display = null;
		var reparent = true;
		var view = null;
		
		if (overlay==null || overlay==false) {
			self.log("Overlay not found, '"+ id + "'");
			return;
		}

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var isAnimated = animation!="";
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}
		
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {

			// act as switch if same button
			if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
				if (self.lastTrigger==button) {
					self.removeOverlay(isAnimated);
					return;
				}
			}
			else {
				self.removeOverlay(isAnimated);
			}
		}

		if (reparent) {
			view = self.getElementView(button);
			if (view) {
				view.appendChild(overlay);
			}
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);
			
			var display = overlay && overlay.style.display;
			
			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				//self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		var horizontal = self.prefix + "center-horizontally";
		var vertical = self.prefix + "center-vertically";
		var style = overlay.style;
		var transform = [];

		centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
		centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
		anchorLeft = self.getIsStyleDefined(id, "left");
		anchorRight = self.getIsStyleDefined(id, "right");
		anchorTop = self.getIsStyleDefined(id, "top");
		anchorBottom = self.getIsStyleDefined(id, "bottom");

		
		if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
			style = self.viewsDictionary[overlay.id].styleDeclaration.style;
		}
		
		if (centerHorizontally) {
			style.left = "50%";
			style.transformOrigin = "0 0";
			transform.push("translateX(-50%)");
		}
		else if (anchorRight && anchorLeft) {
			style.left = x + "px";
		}
		else if (anchorRight) {
			//style.right = x + "px";
		}
		else {
			style.left = x + "px";
		}
		
		if (centerVertically) {
			style.top = "50%";
			transform.push("translateY(-50%)");
			style.transformOrigin = "0 0";
		}
		else if (anchorTop && anchorBottom) {
			style.top = y + "px";
		}
		else if (anchorBottom) {
			//style.bottom = y + "px";
		}
		else {
			style.top = y + "px";
		}

		if (transform.length) {
			style.transform = transform.join(" ");
		}

		self.currentOverlay = overlay;
		self.lastTrigger = button;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;
			
			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);
		
				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
					self.currentOverlay = null;
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
				self.currentOverlay = null;
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);
	
			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);
	
			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;
		
		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale. 
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;
		var style = view.style;

		if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
			style = self.viewsDictionary[view.id].styleDeclaration.style;
		}

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);
		
		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
			
			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);
			
			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
	
			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}
	
			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;
	
		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}
		
		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
		
				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
				
				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule; 
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];
				
				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;
				
				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;
			
			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			
			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		
		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	/**
	 * Get the first defined value of property. Returns empty string if not defined
	 * @param {String} id id of element
	 * @param {String} property 
	 */
	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.getIsStyleDefined = function(id, property) {
		var value = self.getCSSPropertyValueForElement(id, property);
		return value!==undefined && value!="";
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);
			
			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}
		
		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue = null;
		var view = null;
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				var mediaViewInfoFound = false;
				var mediaId = null;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];

					selectorText = mediaRule.selectorText;
					
					if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						selectorIDText = "#" + mediaId;
						selectorClassText = "." + mediaId + "_Class";
						view = self.getElement(mediaId);
						
						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(view, mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						mediaViewInfoFound = true;
					}

					if (selectorIDText==selectorText || selectorClassText==selectorText) {
						var styleObject = self.viewsDictionary[mediaId];
						if (styleObject) {
							styleObject.styleDeclaration = mediaRule;
						}
						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText;
				
				if (selectorText==null) continue;

				selectorText = selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					view = self.getElement(selectorText);
					self.addView(view, selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view
	 * @param {HTMLElement} view view element
	 * @param {String} id id of view element
	 * @param {CSSRule} cssRule of view element
	 * @param {CSSMediaRule} mediaRule media rule of view element
	 * @param {String} stateName name of state if applicable
	 **/
	self.addView = function(view, viewId, cssRule, mediaRule, stateName) {
		var viewData = {};
		viewData.name = viewId;
		viewData.rule = cssRule;
		viewData.id = viewId;
		viewData.mediaRule = mediaRule;
		viewData.stateName = stateName;

		self.views.push(viewData);
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = viewData;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 **/
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 **/
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];
		
		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;
				
				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view 
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly 
			// and fade??out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);
		
		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		id = id ? id.trim() : id;
		var element = id ? document.getElementById(id) : null;

		return element;
	}

	self.getElementById = function(id) {
		id = id ? id.trim() : id;
		var element = id ? document.getElementById(id) : null;

		return element;
	}

	self.getElementByClass = function(className) {
		className = className ? className.trim() : className;
		var elements = document.getElementsByClassName(className);

		return elements.length ? elements[0] : null;
	}

	self.resizeHandler = function(event) {
		
		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {	
				var view = visibleViews[index];
				self.scaleViewIfNeeded(view);
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleViewsToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view 
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented 

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query 
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];
			
			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];

					if (self.isOverlay(view)) {
						self.removeOverlay(view);
					}
					else {
						self.hideElement(view);
					}
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}
		
	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();
				
				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script-->
</head>
<body>
<div id="News">
	<svg class="Rechteck_49">
		<rect id="Rechteck_49" rx="0" ry="0" x="0" y="0" width="462" height="182">
		</rect>
	</svg>
	<svg class="fh-wien50_l">
		<rect id="fh-wien50_l" rx="0" ry="0" x="0" y="0" width="462" height="298">
		</rect>
	</svg>
	<img id="iStock-490686254" src="img/iStock-490686254.png" srcset="img/iStock-490686254.png 1x, img/iStock-490686254@2x.png 2x">
		
	<div id="Du_mchtest_herausfinden_was__m">
		<span>Du m??chtest herausfinden, was <br/>mit deinem Geld auf der Bank so <br/>alles finanziert wird & diesen Weg mitbestimmen? <br/><br/>Dann ist unser neuer Workshop genau das Richtige f??r dich. </span>
	</div>
	<div id="yourmoneymatters_l">
		<span>#yourmoneymatters</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="Button_l">
		<svg class="Pfad_935" viewBox="0 0 180 54">
			<path id="Pfad_935" d="M 0 0 L 180 0 L 180 54 L 0 54 L 0 0 Z">
			</path>
		</svg>
		<div id="Jetzt_anmelden_l">
			<span>Jetzt anmelden</span>
		</div>
	</div>
	<svg class="Rechteck_47">
		<rect id="Rechteck_47" rx="0" ry="0" x="0" y="0" width="164" height="80">
		</rect>
	</svg>
	<div id="Pfeil" class="Pfeil">
		<div id="Ebene_1_ma">
			<div id="Gruppe_139">
				<svg class="Linie_14_mc" viewBox="0 0 3 28.333">
					<path id="Linie_14_mc" d="M 0 0 L 0 28.3333797454834">
					</path>
				</svg>
				<svg class="Pfad_134" viewBox="1.061 2.121 23.333 11.667">
					<path id="Pfad_134" d="M 1.060660004615784 13.78800010681152 L 12.72729969024658 2.121320009231567 L 24.39399909973145 13.78800010681152">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<div id="Pfeil_me" class="Pfeil">
		<div id="Ebene_1_mf">
			<div id="Gruppe_139_mg">
				<svg class="Linie_14_mh" viewBox="0 0 3 28.333">
					<path id="Linie_14_mh" d="M 0 0 L 0 28.3333797454834">
					</path>
				</svg>
				<svg class="Pfad_134_mi" viewBox="1.061 2.121 23.333 11.667">
					<path id="Pfad_134_mi" d="M 1.060660004615784 13.78800010681152 L 12.72729969024658 2.121320009231567 L 24.39399909973145 13.78800010681152">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<svg class="Rechteck_45_mj">
		<rect id="Rechteck_45_mj" rx="0" ry="0" x="0" y="0" width="462" height="182">
		</rect>
	</svg>
	<svg class="Rechteck_53">
		<rect id="Rechteck_53" rx="0" ry="0" x="0" y="0" width="462" height="182">
		</rect>
	</svg>
	<svg class="Rechteck_54">
		<rect id="Rechteck_54" rx="0" ry="0" x="0" y="0" width="462" height="182">
		</rect>
	</svg>
	<img id="iStock-1349465204" src="img/iStock-1349465204.png" srcset="img/iStock-1349465204.png 1x, img/iStock-1349465204@2x.png 2x">
		
	<img id="iStock-1303397527" src="img/iStock-1303397527.png" srcset="img/iStock-1303397527.png 1x, img/iStock-1303397527@2x.png 2x">
		
	<img id="iStock-1367145986" src="img/iStock-1367145986.png" srcset="img/iStock-1367145986.png 1x, img/iStock-1367145986@2x.png 2x">
		
	<img id="iStock-1257563298" src="img/iStock-1257563298.png" srcset="img/iStock-1257563298.png 1x, img/iStock-1257563298@2x.png 2x">
		
	<div id="Greenwashing__ein_Kind_unserer">
		<span>Greenwashing ??? ein Kind unserer Zeit oder nur miese Gesch??ftemacherei?</span>
	</div>
	<div id="Wie_nachhaltig_sind_Bitcoin__C">
		<span>Wie nachhaltig sind Bitcoin & Co?</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="Jetzt_reinlesen">
		<span>Jetzt reinlesen</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="Jetzt_reinlesen_mt">
		<span>Jetzt reinlesen</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="Jetzt_reinlesen_mu">
		<span>Jetzt reinlesen</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="Jetzt_reinlesen_mv">
		<span>Jetzt reinlesen</span>
	</div>
	<div id="Wie_dein_Geld_zur_Klima-Abkhlu">
		<span>Wie dein Geld zur Klima-Abk??hlung beitragen kann.</span>
	</div>
	<div id="Fast_Fashion__ein_ungesunder_T">
		<span>Fast Fashion ??? ein ungesunder Trend </span>
	</div>
	<div id="n_3_Mai_2022">
		<span>13. Mai 2022</span>
	</div>
	<div id="n_0_April__2022">
		<span>20. April  2022</span>
	</div>
	<div id="n__Mai_2022">
		<span>5. Mai 2022</span>
	</div>
	<div id="n_3_April__2022">
		<span>13. April  2022</span>
	</div>
	<div id="Das_Neueste_vom_birds_of_trust">
		<span>Das Neueste vom birds of trust-Blog</span>
	</div>
	<div id="besserverstehen">
		<span>#besserverstehen</span>
	</div>
	<div id="Was_meinen_unsere_Nutzerinnen">
		<span>Was meinen unsere Nutzer:innen</span>
	</div>
	<div id="Bildlaufgruppe_1">
		<div id="Wiederholungsraster_11">
			<div id="Group" class="">
				<div id="Madeleine_25">
					<span>Madeleine, 25</span>
				</div>
				<div id="Hannes_43">
					<span>Hannes, 43</span>
				</div>
				<div id="Angestellte">
					<span>Angestellte</span>
				</div>
				<div id="Angestellter">
					<span>Angestellter</span>
				</div>
				<div id="Ich_war_absolut_begeistert_vom">
					<span>???Ich war absolut begeistert vom letzten Seminar. Die Vortragenden konnten die Inhalte super verst??ndlich erkl??ren und mir sind keine Fragen offengeblieben. Endlich habe ich den Durchblick und kann mit ruhigem Gewissen investieren und wei?? auch noch, wie ich mit gr??nen Investments etwas f??r eine nachhaltige Zukunft tun kann.??? </span>
				</div>
				<div id="Lorem_ipsum_dolor_sit_amet_con_nd">
					<span>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet."</span>
				</div>
			</div>
			<div id="Group_ne" class="">
				<div id="Madeleine_25_nf">
					<span>Madeleine, 25</span>
				</div>
				<div id="Hannes_43_ng">
					<span>Hannes, 43</span>
				</div>
				<div id="Angestellte_nh">
					<span>Angestellte</span>
				</div>
				<div id="Angestellter_ni">
					<span>Angestellter</span>
				</div>
				<div id="Ich_war_absolut_begeistert_vom_nj">
					<span>???Ich war absolut begeistert vom letzten Seminar. Die Vortragenden konnten die Inhalte super verst??ndlich erkl??ren und mir sind keine Fragen offengeblieben. Endlich habe ich den Durchblick und kann mit ruhigem Gewissen investieren und wei?? auch noch, wie ich mit gr??nen Investments etwas f??r eine nachhaltige Zukunft tun kann.??? </span>
				</div>
				<div id="Lorem_ipsum_dolor_sit_amet_con_nk">
					<span>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet."</span>
				</div>
			</div>
		</div>
	</div>
	<div id="Pfeil-re" class="Pfeil_re">
		<img id="Gruppe_37" src="img/Gruppe_37.png" srcset="img/Gruppe_37.png 1x, img/Gruppe_37@2x.png 2x">
			
		</svg>
	</div>
	<div id="Pfeil-re_nn" class="Pfeil_re">
		<img id="Gruppe_37_no" src="img/Gruppe_37_no.png" srcset="img/Gruppe_37_no.png 1x, img/Gruppe_37_no@2x.png 2x">
			
		</svg>
	</div>
	<div id="Follow_Us_-_Blog" class="Follow_Us___Blog">
		<div id="Gruppe_315_nq">
			<svg class="Rechteck_45_nr">
				<rect id="Rechteck_45_nr" rx="0" ry="0" x="0" y="0" width="298" height="290">
				</rect>
			</svg>
			<img id="Bild1_ns" src="img/Bild1_ns.png" srcset="img/Bild1_ns.png 1x, img/Bild1_ns@2x.png 2x">
				
			<div id="Gruppe_216_nt">
				<div id="birdsoftrust_20_April_nu">
					<span>birdsoftrust</span><br/><span style="font-style:normal;font-weight:lighter;">20. April</span>
				</div>
				<div id="Gruppe_214_nv">
					<div id="Gruppe_213_nw">
						<div id="n_0_nx">
							<span>20</span>
						</div>
						<img id="Bild_1_ny" src="img/Bild_1_ny.png" srcset="img/Bild_1_ny.png 1x, img/Bild_1_ny@2x.png 2x">
							
						<img id="Bild_2_nz" src="img/Bild_2_nz.png" srcset="img/Bild_2_nz.png 1x, img/Bild_2_nz@2x.png 2x">
							
						<svg class="Rechteck_44_n">
							<rect id="Rechteck_44_n" rx="0" ry="0" x="0" y="0" width="22" height="23">
							</rect>
						</svg>
						<div id="n_0_n">
							<span>40</span>
						</div>
					</div>
				</div>
				<div id="Gruppe_215_n">
					<svg class="Ellipse_12_n">
						<ellipse id="Ellipse_12_n" rx="26.127899169921875" ry="26.127899169921875" cx="26.127899169921875" cy="26.127899169921875">
						</ellipse>
					</svg>
					<div id="Ebene_2_n">
						<div id="Ebene_1_n">
							<div id="Gruppe_113_n">
								<svg class="Pfad_113_n" viewBox="144.891 0 52.817 12.542">
									<path id="Pfad_113_n" d="M 168.2411804199219 12.54227447509766 C 167.8211364746094 12.54227447509766 167.4266357421875 12.3341703414917 167.15771484375 11.95836162567139 C 166.6829376220703 11.29495048522949 166.7095184326172 10.318115234375 167.2308959960938 9.343507766723633 C 167.6418609619141 8.567933082580566 168.2290496826172 7.772597789764404 168.970703125 6.988410949707031 C 168.8742065429688 6.814169883728027 168.7678527832031 6.639458656311035 168.6504058837891 6.465274810791016 C 167.0174713134766 4.040791511535645 163.7938079833984 2.341738939285278 160.2377166748047 2.030543327331543 C 152.6326141357422 1.368636965751648 145.2698059082031 6.241406917572021 145.1968231201172 6.28901195526123 L 144.8907470703125 5.835519790649414 C 144.9672241210938 5.785888195037842 152.4799346923828 0.7994511127471924 160.2858581542969 1.48614513874054 C 164.0022125244141 1.811497688293457 167.3803100585938 3.601196527481079 169.1038818359375 6.161131858825684 C 169.1983337402344 6.300160884857178 169.28515625 6.440433979034424 169.3674774169922 6.5827317237854 C 172.5817108154297 3.421666145324707 178.2508239746094 0.5325412154197693 184.9274597167969 0.06489218026399612 C 196.3937683105469 -0.7304430603981018 197.6927490234375 6.050986766815186 197.7074279785156 6.120112419128418 L 197.1681365966797 6.212573051452637 C 197.1220245361328 5.953028678894043 195.9157104492188 -0.1630210280418396 184.9649200439453 0.6107933521270752 C 178.3308563232422 1.074916005134583 172.7280731201172 3.96051025390625 169.6323394775391 7.082324504852295 C 170.2266082763672 8.333178520202637 170.3578186035156 9.619498252868652 169.9987487792969 10.79183387756348 C 169.6964416503906 11.78214931488037 169.1307525634766 12.41393089294434 168.4493560791016 12.52584171295166 C 168.3797149658203 12.53849315643311 168.3085784912109 12.54227924346924 168.2411804199219 12.54227924346924 L 168.2411804199219 12.54227924346924 Z M 169.2264404296875 7.509474277496338 C 168.5878448486328 8.208353996276855 168.0776214599609 8.913043022155762 167.7110137939453 9.599990844726562 C 167.2914276123047 10.38796710968018 167.25244140625 11.15062999725342 167.600830078125 11.64011383056641 C 167.7945404052734 11.90873432159424 168.0738372802734 12.03334903717041 168.3622283935547 11.98698139190674 C 168.828369140625 11.91075134277344 169.2355499267578 11.41598606109619 169.4776000976562 10.63133430480957 C 169.7784271240234 9.65340518951416 169.6857757568359 8.573217391967773 169.2264251708984 7.509475708007812 L 169.2264251708984 7.509475708007812 Z">
									</path>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Lorem_ipsum_dolor_sit_amet_con_n">
				<span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</span>
			</div>
		</div>
		<div id="Gruppe_316_n">
			<svg class="Rechteck_45_oa">
				<rect id="Rechteck_45_oa" rx="0" ry="0" x="0" y="0" width="298" height="290">
				</rect>
			</svg>
			<img id="Bild1_ob" src="img/Bild1_ob.png" srcset="img/Bild1_ob.png 1x, img/Bild1_ob@2x.png 2x">
				
			<div id="Gruppe_216_oc">
				<div id="birdsoftrust_3_April_od">
					<span>birdsoftrust</span><br/><span style="font-style:normal;font-weight:lighter;">3. April</span>
				</div>
				<div id="Gruppe_214_oe">
					<div id="Gruppe_213_of">
						<div id="n__og">
							<span>4</span>
						</div>
						<img id="Bild_1_oh" src="img/Bild_1_oh.png" srcset="img/Bild_1_oh.png 1x, img/Bild_1_oh@2x.png 2x">
							
						<img id="Bild_2_oi" src="img/Bild_2_oi.png" srcset="img/Bild_2_oi.png 1x, img/Bild_2_oi@2x.png 2x">
							
						<svg class="Rechteck_44_oj">
							<rect id="Rechteck_44_oj" rx="0" ry="0" x="0" y="0" width="22" height="23">
							</rect>
						</svg>
						<div id="n_5_ok">
							<span>25</span>
						</div>
					</div>
				</div>
				<div id="Gruppe_215_ol">
					<svg class="Ellipse_12_om">
						<ellipse id="Ellipse_12_om" rx="26.127899169921875" ry="26.127899169921875" cx="26.127899169921875" cy="26.127899169921875">
						</ellipse>
					</svg>
					<div id="Ebene_2_on">
						<div id="Ebene_1_oo">
							<div id="Gruppe_113_op">
								<svg class="Pfad_113_oq" viewBox="144.891 0 52.817 12.542">
									<path id="Pfad_113_oq" d="M 168.2411804199219 12.54227447509766 C 167.8211364746094 12.54227447509766 167.4266357421875 12.3341703414917 167.15771484375 11.95836162567139 C 166.6829376220703 11.29495048522949 166.7095184326172 10.318115234375 167.2308959960938 9.343507766723633 C 167.6418609619141 8.567933082580566 168.2290496826172 7.772597789764404 168.970703125 6.988410949707031 C 168.8742065429688 6.814169883728027 168.7678527832031 6.639458656311035 168.6504058837891 6.465274810791016 C 167.0174713134766 4.040791511535645 163.7938079833984 2.341738939285278 160.2377166748047 2.030543327331543 C 152.6326141357422 1.368636965751648 145.2698059082031 6.241406917572021 145.1968231201172 6.28901195526123 L 144.8907470703125 5.835519790649414 C 144.9672241210938 5.785888195037842 152.4799346923828 0.7994511127471924 160.2858581542969 1.48614513874054 C 164.0022125244141 1.811497688293457 167.3803100585938 3.601196527481079 169.1038818359375 6.161131858825684 C 169.1983337402344 6.300160884857178 169.28515625 6.440433979034424 169.3674774169922 6.5827317237854 C 172.5817108154297 3.421666145324707 178.2508239746094 0.5325412154197693 184.9274597167969 0.06489218026399612 C 196.3937683105469 -0.7304430603981018 197.6927490234375 6.050986766815186 197.7074279785156 6.120112419128418 L 197.1681365966797 6.212573051452637 C 197.1220245361328 5.953028678894043 195.9157104492188 -0.1630210280418396 184.9649200439453 0.6107933521270752 C 178.3308563232422 1.074916005134583 172.7280731201172 3.96051025390625 169.6323394775391 7.082324504852295 C 170.2266082763672 8.333178520202637 170.3578186035156 9.619498252868652 169.9987487792969 10.79183387756348 C 169.6964416503906 11.78214931488037 169.1307525634766 12.41393089294434 168.4493560791016 12.52584171295166 C 168.3797149658203 12.53849315643311 168.3085784912109 12.54227924346924 168.2411804199219 12.54227924346924 L 168.2411804199219 12.54227924346924 Z M 169.2264404296875 7.509474277496338 C 168.5878448486328 8.208353996276855 168.0776214599609 8.913043022155762 167.7110137939453 9.599990844726562 C 167.2914276123047 10.38796710968018 167.25244140625 11.15062999725342 167.600830078125 11.64011383056641 C 167.7945404052734 11.90873432159424 168.0738372802734 12.03334903717041 168.3622283935547 11.98698139190674 C 168.828369140625 11.91075134277344 169.2355499267578 11.41598606109619 169.4776000976562 10.63133430480957 C 169.7784271240234 9.65340518951416 169.6857757568359 8.573217391967773 169.2264251708984 7.509475708007812 L 169.2264251708984 7.509475708007812 Z">
									</path>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Lorem_ipsum_dolor_sit_amet_con_or">
				<span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</span>
			</div>
		</div>
		<div id="birdsoftrust_os">
			<span>@birdsoftrust</span>
		</div>
		<div id="Jetzt_birds_of_trust_auf_Insta_ot">
			<span>Jetzt birds of trust auf Instagram folgen</span>
		</div>
		<div id="Follow_Us">
			<span>Follow Us</span>
		</div>
		<div id="Du_willst_noch__mehr_wissen">
			<span>Du willst noch <br/>mehr wissen?</span>
		</div>
		<div id="Dann_werde_Teil_unserer_birds_">
			<span>Dann werde Teil unserer birds of trust Community auf Instagram, Facebook, LinkedIn & Co! Tausche dich dort aus und bilde dich weiter.  </span>
		</div>
		<div id="Gruppe_233">
			<div id="Gruppe_166_oy">
				<img id="Gruppe_165_oz" src="img/Gruppe_165_oz.png" srcset="img/Gruppe_165_oz.png 1x, img/Gruppe_165_oz@2x.png 2x">
					
				</svg>
			</div>
			<div id="Gruppe_157_o">
				<img id="Gruppe_156_o" src="img/Gruppe_156_o.png" srcset="img/Gruppe_156_o.png 1x, img/Gruppe_156_o@2x.png 2x">
					
				</svg>
			</div>
			<div id="Gruppe_160">
				<img id="Gruppe_159_o" src="img/Gruppe_159_o.png" srcset="img/Gruppe_159_o.png 1x, img/Gruppe_159_o@2x.png 2x">
					
				</svg>
			</div>
		</div>
	</div>
	<div id="Gruppe_241">
		<svg class="Rechteck_23_o">
			<rect id="Rechteck_23_o" rx="0" ry="0" x="0" y="0" width="1921" height="590">
			</rect>
		</svg>
		<div id="Nachhaltige_ETFs__Risiko_oder_">
			<span>Nachhaltige ETFs ??? Risiko oder Zukunft?</span>
		</div>
		<div id="Episode_8">
			<span>Episode #8</span>
		</div>
		<div id="der_BOTcast_fr_nachhaltige_Gel">
			<span>der BOTcast f??r nachhaltige Geldfragen</span>
		</div>
		<div id="Green_Money_Talks">
			<span>Green Money Talks</span>
		</div>
		<div id="podcast">
			<span>#podcast</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="Button_pb" class="Button">
			<svg class="Rechteck_7_pc">
				<rect id="Rechteck_7_pc" rx="0" ry="0" x="0" y="0" width="195" height="40">
				</rect>
			</svg>
			<div id="Zu_allen_Podcast-Folgen">
				<span>Zu allen Podcast-Folgen</span>
			</div>
		</div>
		<div id="Gruppe_240">
			<svg class="Ellipse_14">
				<ellipse id="Ellipse_14" rx="32" ry="32" cx="32" cy="32">
				</ellipse>
			</svg>
			<svg class="Polygon_1" viewBox="0 0 39 29">
				<path id="Polygon_1" d="M 19.49999809265137 0 L 39 29 L 0 29 Z">
				</path>
			</svg>
		</div>
		<div id="Wiederholungsraster_3">
			<div id="Group_pi" class="">
				<div id="Episode_7_Inklusives_Banking_-">
					<span>Episode #7: Inklusives Banking - geht das ??berhaupt?</span>
				</div>
				<div id="n_03755">
					<span>00:37:55</span>
				</div>
				<svg class="Linie_40" viewBox="0 0 790 1">
					<path id="Linie_40" d="M 0 0 L 790 0">
					</path>
				</svg>
			</div>
			<div id="Group_pm" class="">
				<div id="Episode_6_Frauen_und_Finanzen">
					<span>Episode #6: Frauen und Finanzen</span>
				</div>
				<div id="n_03021">
					<span>00:30:21</span>
				</div>
				<svg class="Linie_40_pp" viewBox="0 0 790 1">
					<path id="Linie_40_pp" d="M 0 0 L 790 0">
					</path>
				</svg>
			</div>
			<div id="Group_pq" class="">
				<div id="Episode_5_Wenn_das_Cash_nicht_">
					<span>Episode #5: Wenn das Cash nicht flie??t - Corona</span>
				</div>
				<div id="n_03802">
					<span>00:38:02</span>
				</div>
				<svg class="Linie_40_pt" viewBox="0 0 790 1">
					<path id="Linie_40_pt" d="M 0 0 L 790 0">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<div id="Footer_pu" class="Footer">
		<div onclick="application.goToTargetView(event)" id="AGB_pv">
			<span>AGB</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="Datenschutz_pw">
			<span>Datenschutz</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="Newsletteranmeldung_px">
			<span>Newsletteranmeldung</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="Impressum_py">
			<span>Impressum</span>
		</div>
		<div id="Alle_Texte_sowie_die_Hinweise__pz">
			<span>Alle Texte sowie die Hinweise und Informationen stellen keine Anlagenberatung oder Empfehlung dar. Sie wurden nach betem Wissen und Gewissen aus ??ffentlich zug??nglichen Quellen ??bernommen. Alle zur Verf??gung gestellten Informationen (alle Gedanken, Prognosen, Kommentare, Hinweise, Ratschl??ge etc.) dienen allein der Bildung und der privaten Unterhaltung.</span>
		</div>
		<div id="E__infobirdsoftrustat_p">
			<span>E</span><span style="font-style:normal;font-weight:normal;">  info@birdsoftrust.at</span>
		</div>
		<div id="T__43_660_2004_512_p">
			<span>T</span><span style="font-style:normal;font-weight:normal;">  +43 660 2004 512</span>
		</div>
		<div id="Gruppe_209_p">
			<div id="Gruppe_166_p">
				<img id="Gruppe_165_p" src="img/Gruppe_165_p.png" srcset="img/Gruppe_165_p.png 1x, img/Gruppe_165_p@2x.png 2x">
					
				</svg>
			</div>
			<div id="Ebene_2_p">
				<div id="Ebene_1_p">
					<div id="Gruppe_170_p">
						<div id="Gruppe_169_p">
							<svg class="Linie_12_p" viewBox="0 0 13.062 2">
								<path id="Linie_12_p" d="M 13.06191730499268 0 L 0 0">
								</path>
							</svg>
							<svg class="Linie_14_qa" viewBox="0 0 13.062 2">
								<path id="Linie_14_qa" d="M 13.06191730499268 0 L 0 0">
								</path>
							</svg>
						</div>
						<svg class="Pfad_887_qb" viewBox="0.893 0.893 23.53 22.5">
							<path id="Pfad_887_qb" d="M 22.5402774810791 0.8928599953651428 L 2.775206327438354 0.8928599953651428 C 1.739854693412781 0.8928599953651428 0.8928599953651428 1.739941954612732 0.8928599953651428 2.775206089019775 L 0.8928599953651428 15.81197738647461 C 0.8928599953651428 16.84733009338379 1.739854693412781 17.69432258605957 2.775206327438354 17.69432258605957 L 7.223461151123047 17.69432258605957 L 7.223461151123047 22.66218376159668 C 7.223461151123047 23.31180381774902 8.008955001831055 23.6372013092041 8.468321800231934 23.17783546447754 L 13.95183944702148 17.69431686401367 L 22.54029273986816 17.69431686401367 C 23.57564544677734 17.69431686401367 24.42268943786621 16.84732246398926 24.42268943786621 15.81197071075439 L 24.42268943786621 2.775206089019775 C 24.42268943786621 1.739949822425842 23.57564544677734 0.892859935760498 22.54029273986816 0.892859935760498 Z">
							</path>
						</svg>
					</div>
				</div>
			</div>
			<div id="Gruppe_157_qc">
				<img id="Gruppe_156_qd" src="img/Gruppe_156_qd.png" srcset="img/Gruppe_156_qd.png 1x, img/Gruppe_156_qd@2x.png 2x">
					
				</svg>
			</div>
		</div>
		<div id="Ebene_2_qe">
			<div id="Ebene_1_qf">
				<div id="Gruppe_113_qg">
					<svg class="Pfad_113_qh" viewBox="144.891 0 71.113 16.887">
						<path id="Pfad_113_qh" d="M 176.330078125 16.8870735168457 C 175.7644958496094 16.8870735168457 175.2333374023438 16.60688018798828 174.8713073730469 16.10088539123535 C 174.2320404052734 15.20765972137451 174.2678375244141 13.89243602752686 174.9698333740234 12.5802116394043 C 175.5231628417969 11.53596496582031 176.3137359619141 10.46511459350586 177.3123016357422 9.409276962280273 C 177.1823883056641 9.174676895141602 177.0391845703125 8.93944263458252 176.8810577392578 8.704919815063477 C 174.6824493408203 5.44056224822998 170.3420562744141 3.152934789657593 165.5541076660156 2.733936786651611 C 155.3144989013672 1.842737197875977 145.4011077880859 8.403500556945801 145.3028717041016 8.467597007751465 L 144.8907470703125 7.857008457183838 C 144.9937133789062 7.790183067321777 155.1089172363281 1.076377749443054 165.6189270019531 2.000952005386353 C 170.6226806640625 2.439011096954346 175.1709747314453 4.848684787750244 177.4916229248047 8.295416831970215 C 177.6187896728516 8.482607841491699 177.7357025146484 8.671473503112793 177.8465423583984 8.863064765930176 C 182.1742401123047 4.606963634490967 189.8071899414062 0.717006504535675 198.7966918945312 0.08735758066177368 C 214.235107421875 -0.9834925532341003 215.9840545654297 8.147115707397461 216.0038299560547 8.240187644958496 L 215.2776947021484 8.364678382873535 C 215.2156524658203 8.015224456787109 213.5914459228516 -0.2195078581571579 198.8471374511719 0.8223662972450256 C 189.9149627685547 1.447267413139343 182.3713073730469 5.332469940185547 178.2031555175781 9.535723686218262 C 179.0032806396484 11.21988964080811 179.1799468994141 12.95180797576904 178.6964569091797 14.53025722503662 C 178.2894287109375 15.8636302947998 177.5278015136719 16.71426963806152 176.6103668212891 16.86494636535645 C 176.5166168212891 16.88198471069336 176.4208221435547 16.88708114624023 176.330078125 16.88708114624023 L 176.330078125 16.88708114624023 Z M 177.6566467285156 10.11084270477295 C 176.7968139648438 11.05182456970215 176.10986328125 12.00062561035156 175.6162261962891 12.9255428314209 C 175.0513153076172 13.98648548126221 174.9988250732422 15.01334476470947 175.4678955078125 15.67239284515381 C 175.7287139892578 16.03406715393066 176.1047515869141 16.20184898376465 176.4930725097656 16.13941955566406 C 177.1206665039062 16.03678321838379 177.6688995361328 15.37062454223633 177.9948120117188 14.31415843963623 C 178.3998413085938 12.99746131896973 178.2750854492188 11.54308128356934 177.6566162109375 10.11084461212158 L 177.6566162109375 10.11084461212158 Z">
						</path>
					</svg>
					<div id="Gruppe_112_qi">
						<svg class="Pfad_114_qj" viewBox="0 34.193 24.885 25.404">
							<path id="Pfad_114_qj" d="M 24.88474655151367 49.65814971923828 C 24.88474655151367 55.77734375 21.65824127197266 59.597412109375 15.76161289215088 59.597412109375 C 12.79455280303955 59.597412109375 10.97745227813721 58.74440002441406 8.455575942993164 56.51919555664062 L 3.337669849395752 59.56026458740234 L 2.558952569961548 59.56026458740234 L 2.558952569961548 37.38278198242188 L 0 34.93498992919922 L 0 34.19341278076172 L 10.08730030059814 34.19341278076172 L 10.08730030059814 45.02256774902344 L 10.16159057617188 45.02256774902344 C 10.90343952178955 42.0926513671875 13.09150409698486 39.71914672851562 16.80006980895996 39.71914672851562 C 21.65824127197266 39.71914672851562 24.8847541809082 43.50206756591797 24.8847541809082 49.65814971923828 Z M 16.87407493591309 49.65814971923828 C 16.87407493591309 45.94950866699219 15.57615756988525 43.05680084228516 13.35095310211182 43.05680084228516 C 11.16289138793945 43.05680084228516 10.08729267120361 45.69011688232422 10.08729267120361 49.54698181152344 L 10.08729267120361 49.73242950439453 C 10.08729267120361 56.03715515136719 11.16289138793945 58.18807220458984 13.35095310211182 58.18807220458984 C 15.57615756988525 58.18807220458984 16.87407493591309 55.77734375 16.87407493591309 49.65813446044922 Z">
							</path>
						</svg>
						<svg class="Pfad_115_qk" viewBox="38.241 29.731 12.572 27.963">
							<path id="Pfad_115_qk" d="M 50.81301498413086 56.95250701904297 L 50.81301498413086 57.69436645507812 L 38.24070739746094 57.69436645507812 L 38.24070739746094 56.95250701904297 L 40.76285934448242 54.50508117675781 L 40.76285934448242 42.08106994628906 L 38.24070739746094 39.63362121582031 L 38.24070739746094 38.89176940917969 L 48.29114532470703 38.89176940917969 L 48.29114532470703 54.50508117675781 L 50.81301498413086 56.95250701904297 Z M 40.61420440673828 33.47718048095703 C 40.61420440673828 31.47457122802734 42.20906448364258 29.73141098022461 44.50829315185547 29.73141098022461 C 46.80778121948242 29.73141098022461 48.43943786621094 31.47457122802734 48.43943786621094 33.47718048095703 C 48.43943786621094 35.62802886962891 46.80778121948242 37.26004028320312 44.50829315185547 37.26004028320312 C 42.20907211303711 37.26004028320312 40.61420440673828 35.62802886962891 40.61420440673828 33.47718048095703 Z">
							</path>
						</svg>
						<svg class="Pfad_116_ql" viewBox="59.963 42.373 18.618 19.136">
							<path id="Pfad_116_ql" d="M 78.58090972900391 42.66971206665039 L 78.58090972900391 50.82875442504883 L 77.76476287841797 50.82875442504883 L 72.16474914550781 45.89622497558594 C 71.01514434814453 46.48977279663086 70.01382446289062 49.04879760742188 70.01382446289062 51.90434646606445 L 70.01382446289062 58.32024002075195 L 73.87068939208984 60.76767349243164 L 73.87068939208984 61.5095329284668 L 59.96338653564453 61.5095329284668 L 59.96338653564453 60.76767349243164 L 62.48554992675781 58.32024002075195 L 62.48554992675781 45.89622497558594 L 59.96338653564453 43.44877624511719 L 59.96338653564453 42.70692443847656 L 70.01382446289062 42.70692443847656 L 70.01382446289062 47.60223770141602 L 70.16212463378906 47.60223770141602 C 70.86684417724609 44.70946502685547 72.60999298095703 42.37310791015625 76.17026519775391 42.37310791015625 C 77.09719085693359 42.37310791015625 78.02451324462891 42.4842529296875 78.58090972900391 42.66971206665039 Z">
							</path>
						</svg>
						<svg class="Pfad_117_qm" viewBox="90.238 34.193 25.293 25.404">
							<path id="Pfad_117_qm" d="M 115.53076171875 58.29906463623047 L 115.53076171875 59.04091644287109 L 105.4802398681641 59.04091644287109 L 105.4802398681641 53.92300796508789 L 105.4430999755859 53.92300796508789 C 104.7015991210938 57.18666839599609 102.1054382324219 59.59732055664062 98.39687347412109 59.59732055664062 C 93.53871154785156 59.59732055664062 90.2379150390625 55.77725219726562 90.2379150390625 49.65804672241211 C 90.2379150390625 43.50196075439453 93.53871154785156 39.71904373168945 98.39687347412109 39.71904373168945 C 102.1054382324219 39.71904373168945 104.7015991210938 42.09255981445312 105.4430999755859 45.3930778503418 L 105.4802398681641 45.3930778503418 L 105.4802398681641 37.38268280029297 L 102.9212951660156 34.74937057495117 L 102.9212951660156 34.19331741333008 L 112.9717407226562 34.19331741333008 L 112.9717407226562 55.85162353515625 L 115.53076171875 58.299072265625 Z M 105.4802398681641 49.73233032226562 L 105.4802398681641 49.54688262939453 C 105.4802398681641 45.69001770019531 103.9969024658203 42.87126922607422 101.8460540771484 42.87126922607422 C 99.62084197998047 42.87126922607422 98.32257843017578 45.94940567016602 98.32257843017578 49.65803909301758 C 98.32257843017578 53.36667251586914 99.62084197998047 56.40802001953125 101.8460540771484 56.40802001953125 C 103.9969024658203 56.40802001953125 105.4802398681641 53.58919143676758 105.4802398681641 49.73233032226562 Z">
							</path>
						</svg>
						<svg class="Pfad_118_qn" viewBox="129.807 42.107 17.653 19.878">
							<path id="Pfad_118_qn" d="M 147.4598999023438 56.01484680175781 C 147.4598999023438 61.13275909423828 142.156494140625 61.98577117919922 138.7077331542969 61.98577117919922 C 136.5564270019531 61.98577117919922 134.8876647949219 61.65203094482422 133.404296875 61.24391174316406 L 130.80810546875 61.76317596435547 L 130.1033935546875 61.76317596435547 L 130.1033935546875 53.97509765625 L 130.8453063964844 53.97509765625 L 137.7803344726562 60.98445892333984 C 137.9286499023438 61.13275909423828 138.1513061523438 61.16996765136719 138.2624816894531 61.16996765136719 C 140.33935546875 61.16996765136719 140.7842712402344 60.13152313232422 140.7842712402344 59.01870727539062 C 140.7842712402344 57.34990692138672 139.782958984375 56.27424621582031 138.3367614746094 55.75504302978516 L 135.5923461914062 54.67979431152344 C 132.1431579589844 53.34468078613281 129.8068237304688 51.56437683105469 129.8068237304688 48.22677230834961 C 129.8068237304688 43.51690292358398 134.4798889160156 42.10749435424805 138.2624816894531 42.10749435424805 C 139.9312438964844 42.10749435424805 141.7487182617188 42.366943359375 143.4176025390625 42.81220245361328 L 146.013427734375 42.29293441772461 L 146.718017578125 42.29293441772461 L 146.718017578125 49.78442001342773 L 145.9765319824219 49.78442001342773 L 139.0043334960938 42.96050262451172 C 138.8927917480469 42.84934234619141 138.7445068359375 42.81220245361328 138.55908203125 42.81220245361328 C 136.7791137695312 42.81220245361328 136.2227172851562 44.03610229492188 136.2227172851562 45.40802001953125 C 136.2227172851562 47.04001998901367 137.0385131835938 47.78152847290039 139.1897583007812 48.6345329284668 L 141.9342346191406 49.67298126220703 C 145.2346496582031 50.97116851806641 147.4598999023438 52.7139892578125 147.4598999023438 56.01484680175781 Z">
							</path>
						</svg>
						<svg class="Pfad_119_qo" viewBox="167.728 42.108 21.992 19.878">
							<path id="Pfad_119_qo" d="M 189.7204437255859 52.04650497436523 C 189.7204437255859 57.98027420043945 184.7139739990234 61.98577499389648 178.7058410644531 61.98577499389648 C 172.7352142333984 61.98577499389648 167.7284088134766 57.98027420043945 167.7284088134766 52.04650497436523 C 167.7284088134766 46.11273574829102 172.7352142333984 42.10750579833984 178.7058410644531 42.10750579833984 C 184.7139739990234 42.10750579833984 189.7204437255859 46.11266708374023 189.7204437255859 52.04650497436523 Z M 181.6357574462891 52.04650497436523 C 181.6357574462891 44.70367431640625 180.8199157714844 42.84934997558594 178.7058410644531 42.84934997558594 C 176.6292572021484 42.84934997558594 175.8130645751953 44.70367431640625 175.8130645751953 52.04650497436523 C 175.8130645751953 59.27853012084961 176.6293029785156 61.24393844604492 178.7058410644531 61.24393844604492 C 180.8199157714844 61.24393844604492 181.6357574462891 59.27852249145508 181.6357574462891 52.04650497436523 Z">
							</path>
						</svg>
						<svg class="Pfad_120_qp" viewBox="202.092 33.397 16.726 25.404">
							<path id="Pfad_120_qp" d="M 218.8176574707031 33.95293426513672 L 218.8176574707031 38.99662780761719 L 218.0758361816406 38.99662780761719 L 213.1064453125 34.47220230102539 C 212.4389038085938 34.84281539916992 212.142333984375 35.51031112670898 212.142333984375 36.17787551879883 L 212.142333984375 39.9979362487793 L 218.8176574707031 39.9979362487793 L 218.8176574707031 40.73978805541992 L 212.142333984375 40.73978805541992 L 212.142333984375 55.61126327514648 L 216.1474304199219 58.05868148803711 L 216.1474304199219 58.8005485534668 L 202.0918884277344 58.8005485534668 L 202.0918884277344 58.05868148803711 L 204.6133728027344 55.61126327514648 L 204.6133728027344 40.73978805541992 L 202.0918884277344 40.73978805541992 L 202.0918884277344 39.9979362487793 L 204.6133728027344 39.9979362487793 L 204.6133728027344 39.70133590698242 C 204.6133728027344 35.21370315551758 208.1371459960938 33.39661026000977 213.8114624023438 33.39661026000977 C 215.4056091308594 33.39661026000977 217.5194091796875 33.76750183105469 218.817626953125 33.95293426513672 Z">
							</path>
						</svg>
						<svg class="Pfad_121_qq" viewBox="236.881 34.246 14.945 25.367">
							<path id="Pfad_121_qq" d="M 251.8255004882812 52.71506500244141 C 251.306640625 56.46083831787109 249.2672424316406 59.61334991455078 245.2620849609375 59.61334991455078 C 241.8125305175781 59.61334991455078 238.8825988769531 57.35099792480469 238.8825988769531 52.82656097412109 L 238.8825988769531 40.99618148803711 L 236.8807067871094 40.99618148803711 L 236.8807067871094 40.25432205200195 L 238.8825988769531 40.25432205200195 L 245.5954284667969 34.24620056152344 L 246.41162109375 34.24620056152344 L 246.41162109375 40.25432205200195 L 251.603271484375 40.25432205200195 L 251.603271484375 40.99618148803711 L 246.41162109375 40.99618148803711 L 246.41162109375 53.1975212097168 C 246.41162109375 54.75482940673828 247.2271118164062 55.79327392578125 248.4884948730469 55.79327392578125 C 249.8236083984375 55.79327392578125 250.6390686035156 54.75480651855469 251.15869140625 52.60396957397461 L 251.8255004882812 52.71506500244141 Z">
							</path>
						</svg>
						<svg class="Pfad_122_qr" viewBox="261.312 42.373 18.618 19.136">
							<path id="Pfad_122_qr" d="M 279.9298095703125 42.66971206665039 L 279.9298095703125 50.82875442504883 L 279.1129760742188 50.82875442504883 L 273.513671875 45.89622497558594 C 272.3641357421875 46.48977279663086 271.3624267578125 49.04879760742188 271.3624267578125 51.90434646606445 L 271.3624267578125 58.32024002075195 L 275.2196655273438 60.76767349243164 L 275.2196655273438 61.5095329284668 L 261.3119506835938 61.5095329284668 L 261.3119506835938 60.76767349243164 L 263.8341064453125 58.32024002075195 L 263.8341064453125 45.89622497558594 L 261.3119506835938 43.44877624511719 L 261.3119506835938 42.70692443847656 L 271.3624267578125 42.70692443847656 L 271.3624267578125 47.60223770141602 L 271.5104370117188 47.60223770141602 C 272.2153930664062 44.70946502685547 273.958251953125 42.37310791015625 277.5188598632812 42.37310791015625 C 278.4461669921875 42.37310791015625 279.3735961914062 42.4842529296875 279.9298706054688 42.66971206665039 Z">
							</path>
						</svg>
						<svg class="Pfad_123_qs" viewBox="291.586 42.851 24.773 19.359">
							<path id="Pfad_123_qs" d="M 316.3584594726562 60.911865234375 L 316.3584594726562 61.65373229980469 L 306.2711181640625 61.65373229980469 L 306.2711181640625 57.20330810546875 L 306.1607055664062 57.20330810546875 C 305.158447265625 60.02207946777344 303.6754760742188 62.21012878417969 300.0036010742188 62.21012878417969 C 296.51806640625 62.21012878417969 294.1069946289062 60.13320922851562 294.1069946289062 55.31185150146484 L 294.1069946289062 46.04040908813477 L 291.5855102539062 43.59296798706055 L 291.5855102539062 42.85111236572266 L 301.635986328125 42.85111236572266 L 301.635986328125 55.12639617919922 C 301.635986328125 57.27766418457031 302.3028564453125 58.31612396240234 303.6754760742188 58.31612396240234 C 305.4188842773438 58.31612396240234 306.2711181640625 56.35029602050781 306.2711181640625 54.45890808105469 L 306.2711181640625 46.04040908813477 L 303.749755859375 43.59296798706055 L 303.749755859375 42.85111236572266 L 313.8001098632812 42.85111236572266 L 313.8001098632812 58.46442413330078 L 316.3584594726562 60.91185760498047 Z">
							</path>
						</svg>
						<svg class="Pfad_124_qt" viewBox="330.412 42.107 17.652 19.878">
							<path id="Pfad_124_qt" d="M 348.0635375976562 56.01484680175781 C 348.0635375976562 61.13275909423828 342.7615356445312 61.98577117919922 339.3114013671875 61.98577117919922 C 337.1608276367188 61.98577117919922 335.4916381835938 61.65203094482422 334.0079345703125 61.24391174316406 L 331.412841796875 61.76317596435547 L 330.707763671875 61.76317596435547 L 330.707763671875 53.97509765625 L 331.4495849609375 53.97509765625 L 338.3853759765625 60.98445892333984 C 338.53271484375 61.13275909423828 338.7549438476562 61.16996765136719 338.8668212890625 61.16996765136719 C 340.9437255859375 61.16996765136719 341.3882446289062 60.13152313232422 341.3882446289062 59.01870727539062 C 341.3882446289062 57.34990692138672 340.3873291015625 56.27424621582031 338.9403686523438 55.75504302978516 L 336.1967163085938 54.67979431152344 C 332.747802734375 53.34468078613281 330.411865234375 51.56437683105469 330.411865234375 48.22677230834961 C 330.411865234375 43.51690292358398 335.0839233398438 42.10749435424805 338.8668212890625 42.10749435424805 C 340.5360717773438 42.10749435424805 342.3524169921875 42.366943359375 344.0216064453125 42.81220245361328 L 346.6180419921875 42.29293441772461 L 347.3231201171875 42.29293441772461 L 347.3231201171875 49.78442001342773 L 346.5812377929688 49.78442001342773 L 339.608642578125 42.96050262451172 C 339.496826171875 42.84934234619141 339.349609375 42.81220245361328 339.1641235351562 42.81220245361328 C 337.3831787109375 42.81220245361328 336.8267211914062 44.03610229492188 336.8267211914062 45.40802001953125 C 336.8267211914062 47.04001998901367 337.6435546875 47.78152847290039 339.7940673828125 48.6345329284668 L 342.5379028320312 49.67298126220703 C 345.83935546875 50.97116851806641 348.0635375976562 52.7139892578125 348.0635375976562 56.01484680175781 Z">
							</path>
						</svg>
						<svg class="Pfad_125_qu" viewBox="358.563 34.246 14.945 25.367">
							<path id="Pfad_125_qu" d="M 373.5075073242188 52.71506500244141 C 372.9893188476562 56.46083831787109 370.94921875 59.61334991455078 366.9439697265625 59.61334991455078 C 363.4952392578125 59.61334991455078 360.5646362304688 57.35099792480469 360.5646362304688 52.82656097412109 L 360.5646362304688 40.99618148803711 L 358.562744140625 40.99618148803711 L 358.562744140625 40.25432205200195 L 360.5646362304688 40.25432205200195 L 367.278076171875 34.24620056152344 L 368.0936279296875 34.24620056152344 L 368.0936279296875 40.25432205200195 L 373.2852172851562 40.25432205200195 L 373.2852172851562 40.99618148803711 L 368.0936279296875 40.99618148803711 L 368.0936279296875 53.1975212097168 C 368.0936279296875 54.75482940673828 368.9091796875 55.79327392578125 370.1705932617188 55.79327392578125 C 371.5055541992188 55.79327392578125 372.3211059570312 54.75480651855469 372.8406372070312 52.60396957397461 L 373.5075073242188 52.71506500244141 Z">
							</path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<svg class="Pfad_903_qv" viewBox="2645 7050.722 1275.998 1">
			<path id="Pfad_903_qv" d="M 2645 7050.7216796875 L 3920.998046875 7050.7216796875">
			</path>
		</svg>
		<div id="Gruppe_289_qw">
			<svg class="Pfad_950_qx" viewBox="-90 -52.727 23.547 22.5">
				<path id="Pfad_950_qx" d="M -66.4534912109375 -38.93214416503906 L -66.4534912109375 -30.22700500488281 L -71.50028991699219 -30.22700500488281 L -71.50028991699219 -38.34923934936523 C -71.50028991699219 -40.38967514038086 -72.23023986816406 -41.78205871582031 -74.05718231201172 -41.78205871582031 C -75.45191955566406 -41.78205871582031 -76.28153991699219 -40.84334182739258 -76.64677429199219 -39.93575286865234 C -76.77993774414062 -39.61133193969727 -76.81422424316406 -39.15950012207031 -76.81422424316406 -38.7053108215332 L -76.81422424316406 -30.22700500488281 L -81.86233520507812 -30.22700500488281 C -81.86233520507812 -30.22700500488281 -81.79430389404297 -43.98339080810547 -81.86233520507812 -45.40874099731445 L -76.81422424316406 -45.40874099731445 L -76.81422424316406 -43.25685882568359 C -76.82440185546875 -43.24063491821289 -76.83749389648438 -43.22336578369141 -76.84718322753906 -43.20767211914062 L -76.81422424316406 -43.20767211914062 L -76.81422424316406 -43.25685882568359 C -76.14366149902344 -44.28975677490234 -74.9459228515625 -45.76534271240234 -72.26503753662109 -45.76534271240234 C -68.94338989257812 -45.76534271240234 -66.4534912109375 -43.59540557861328 -66.4534912109375 -38.93214416503906 M -87.14329528808594 -52.72700500488281 C -88.87028503417969 -52.72700500488281 -90 -51.59414672851562 -90 -50.10443496704102 C -90 -48.64717102050781 -88.90299987792969 -47.48005294799805 -87.21025085449219 -47.48005294799805 L -87.176513671875 -47.48005294799805 C -85.416015625 -47.48005294799805 -84.32110595703125 -48.64717102050781 -84.32110595703125 -50.10443496704102 C -84.35432434082031 -51.59414672851562 -85.416015625 -52.72700500488281 -87.14329528808594 -52.72700500488281 M -89.70016479492188 -30.22700500488281 L -84.65364074707031 -30.22700500488281 L -84.65364074707031 -45.40874099731445 L -89.70016479492188 -45.40874099731445 L -89.70016479492188 -30.22700500488281 Z">
				</path>
			</svg>
		</div>
	</div>
	<!--div id="Gruppe_305_qy">
		<div id="Musteransicht_qz">
			<span>Musteransicht</span>
		</div>
		<div id="Musteransicht_q">
			<span>Musteransicht</span>
		</div>
		<div id="Musteransicht_ra">
			<span>Musteransicht</span>
		</div>
		<div id="Musteransicht_rb">
			<span>Musteransicht</span>
		</div>
		<div id="Musteransicht_rc">
			<span>Musteransicht</span>
		</div>
		<div id="Musteransicht_rd">
			<span>Musteransicht</span>
		</div>
	</div-->
	<div id="Kontaktflappe_q" class="Kontaktflappe">
		<svg class="Rechteck_20_q">
			<rect id="Rechteck_20_q" rx="0" ry="0" x="0" y="0" width="55" height="223">
			</rect>
		</svg>
		<div id="Gruppe_166_q">
			<img id="Gruppe_165_q" src="img/Gruppe_165_q.png" srcset="img/Gruppe_165_q.png 1x, img/Gruppe_165_q@2x.png 2x">
				
			</svg>
		</div>
		<div id="Ebene_2_q">
			<div id="Ebene_1_ra">
				<div id="Gruppe_170_rb">
					<div id="Gruppe_169_rc">
						<svg class="Linie_12_rd" viewBox="0 0 17.416 3">
							<path id="Linie_12_rd" d="M 17.41588973999023 0 L 0 0">
							</path>
						</svg>
						<svg class="Linie_14_re" viewBox="0 0 17.416 3">
							<path id="Linie_14_re" d="M 17.41588973999023 0 L 0 0">
							</path>
						</svg>
					</div>
					<svg class="Pfad_887_rf" viewBox="0.893 0.893 31.373 30">
						<path id="Pfad_887_rf" d="M 29.75608444213867 0.8928599953651428 L 3.402654886245728 0.8928599953651428 C 2.022186279296875 0.8928599953651428 0.8928599953651428 2.022302627563477 0.8928599953651428 3.402654886245728 L 0.8928599953651428 20.7850170135498 C 0.8928599953651428 22.16548728942871 2.022186279296875 23.2948112487793 3.402654886245728 23.2948112487793 L 9.333661079406738 23.2948112487793 L 9.333661079406738 29.91862487792969 C 9.333661079406738 30.78478622436523 10.3809871673584 31.21864891052246 10.99347591400146 30.60615921020508 L 18.30483245849609 23.29480171203613 L 29.756103515625 23.29480171203613 C 31.13657379150391 23.29480171203613 32.26596450805664 22.16547584533691 32.26596450805664 20.78500747680664 L 32.26596450805664 3.402654886245728 C 32.26596450805664 2.022313117980957 31.13657379150391 0.892859935760498 29.756103515625 0.892859935760498 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Gruppe_157_rg">
			<img id="Gruppe_156_rh" src="img/Gruppe_156_rh.png" srcset="img/Gruppe_156_rh.png 1x, img/Gruppe_156_rh@2x.png 2x">
				
			</svg>
		</div>
		<img id="Gruppe_159_ri" src="img/Gruppe_159_ri.png" srcset="img/Gruppe_159_ri.png 1x, img/Gruppe_159_ri@2x.png 2x">
			
		</svg>
	</div>
	<div id="Men_rj" class="Men_">
		<svg class="Rechteck_73_rk">
			<rect id="Rechteck_73_rk" rx="0" ry="0" x="0" y="0" width="1920" height="68">
			</rect>
		</svg>
		<div id="Men_rl">
			<svg class="Pfad_904_rm" viewBox="0 0 1920 50">
				<path id="Pfad_904_rm" d="M 0 0 L 1920 0 L 1920 50 L 0 50 L 0 0 Z">
				</path>
			</svg>
			<div onclick="application.goToTargetView(event)" id="Home_rn">
                <a class="h5 text-dark" href="index.php">Home</a>
			</div>
			<div onclick="application.goToTargetView(event)" id="Konto_ro">
                <a class="h5 text-dark" href="Konto__bersicht.php">Konto</a>
			</div>
			<div onclick="application.goToTargetView(event)" id="Finanzieren_rp">
                <a class="h5 text-dark" href="Teaser/TeaserFinanzieren.php">Finanzieren</a>
			</div>
			<div onclick="application.goToTargetView(event)" id="ber_Uns_rq">
                <a class="h5 text-dark" href="Teaser/Teaser??berUns.php">??ber uns</a>
			</div>
			<div id="Wissen__News_rr">
                <a class="h5 text-dark" href="News.php"><b>Wissen & News</b></a>
			</div>
			<div onclick="application.goToTargetView(event)" id="Methodik_rs">
                <a class="h5 text-dark" href="Teaser/TeaserMethodik.php">Methodik</a>
			</div>
			<div onclick="application.goToTargetView(event)" id="DE__EN_rt">
				<span>DE </span><span style="color:rgba(112,112,112,1);">| EN</span>
			</div>
			<div onclick="application.goToTargetView(event)" id="Partner_Werden_ru">
                <a class="h5 text-dark" href="Teaser/TeaserPartnerWerden.php">Partner werden</a>
			</div>
			<div onclick="application.goToTargetView(event)" id="FAQ_rv">
                <a class="h5 text-dark" href="Teaser/TeaserFAQ.php">FAQ</a>
			</div>

			<div onclick="application.goToTargetView(event)" id="Login_rx">
			<?php                                                                                                                                               //Falls die folgenden Bedingungen in den if statements erf??llt werden sollen die Seiten ausgegeben werden
				if (isset($_SESSION["useruid"])) {
					echo "<a class='btn btn-warning h5' href='includes/logoutForm.php'>Log out</a>";
				} else {
					echo "<a class='btn btn-primary h5' href='Anmeldung.php'>Login</a></li>";
				}
			?>
			</div>
			<div id="Ebene_2_ry">
				<div id="Ebene_1_rz">
					
				</div>
			</div>
			<div id="Ebene_2_r">
				<div id="Ebene_1_r">
					<div id="Gruppe_118_r">
						<svg class="Pfad_143_r" viewBox="18.839 18.809 9.256 9.256">
							<path id="Pfad_143_r" d="M 18.83860015869141 21.83567047119141 L 24.44058799743652 27.43770980834961 C 25.27626800537109 28.27423477172852 26.63207244873047 28.27423477172852 27.46650123596191 27.43770980834961 C 28.30387687683105 26.60331726074219 28.30387687683105 25.24673080444336 27.46650123596191 24.41273880004883 L 21.86441612243652 18.80940246582031">
							</path>
						</svg>
						<svg class="Pfad_144_r" viewBox="0.893 0.893 20.477 20.477">
							<path id="Pfad_144_r" d="M 21.3698616027832 11.1312894821167 C 21.3698616027832 16.78590965270996 16.78593635559082 21.3698616027832 11.13128852844238 21.3698616027832 C 5.476641654968262 21.3698616027832 0.8928599953651428 16.78590965270996 0.8928599953651428 11.1312894821167 C 0.8928599953651428 5.476668834686279 5.476829528808594 0.8928599953651428 11.1312894821167 0.8928599953651428 C 16.7857494354248 0.8928599953651428 21.3698616027832 5.47663402557373 21.3698616027832 11.13125514984131 Z">
							</path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div onclick="application.goToTargetView(event)" id="Ebene_2_sa">
			<div id="Ebene_1_sa">
				<div id="Gruppe_113_sa">
					<svg class="Pfad_113_sb" viewBox="144.891 0 83.208 19.759">
						<path id="Pfad_113_sb" d="M 181.6774597167969 19.75930976867676 C 181.0156860351562 19.75930976867676 180.3941650390625 19.43145942687988 179.9705505371094 18.83940505981445 C 179.2225646972656 17.79425430297852 179.2644348144531 16.25532913208008 180.0858306884766 14.71991348266602 C 180.7332458496094 13.49805736541748 181.6583099365234 12.24507236480713 182.8267364501953 11.00964832305908 C 182.6747283935547 10.73514652252197 182.5071563720703 10.45990467071533 182.3221435546875 10.18549060821533 C 179.7495727539062 6.365915298461914 174.6709442138672 3.68919563293457 169.0686340332031 3.198932409286499 C 157.08740234375 2.156152725219727 145.4878997802734 9.832805633544922 145.3729553222656 9.907805442810059 L 144.8907318115234 9.193364143371582 C 145.0112152099609 9.11517333984375 156.8468933105469 1.259446859359741 169.1444702148438 2.341276884078979 C 174.999267578125 2.853843927383423 180.3211975097656 5.673369407653809 183.0364990234375 9.706338882446289 C 183.1853485107422 9.92536735534668 183.3221282958984 10.14635562896729 183.4518280029297 10.37053489685059 C 188.5155944824219 5.390533924102783 197.4467926025391 0.8389520645141602 207.9652862548828 0.1022088900208473 C 226.0295562744141 -1.150776982307434 228.0759735107422 9.532814979553223 228.0991058349609 9.641715049743652 L 227.2494659423828 9.787381172180176 C 227.1768646240234 9.37848949432373 225.2763977050781 -0.2568498551845551 208.0243225097656 0.9622319936752319 C 197.5728912353516 1.693419456481934 188.7461700439453 6.239438533782959 183.8690490722656 11.15760135650635 C 184.8052978515625 13.12822151184082 185.0120086669922 15.15471267700195 184.4463195800781 17.00163269042969 C 183.9700469970703 18.56179428100586 183.0788726806641 19.55711555480957 182.00537109375 19.73341941833496 C 181.8957061767578 19.75335502624512 181.7835845947266 19.75931739807129 181.6774597167969 19.75931739807129 L 181.6774597167969 19.75931739807129 Z M 183.2296295166016 11.83054161071777 C 182.2235412597656 12.93156909942627 181.4197540283203 14.04174900054932 180.8421783447266 15.12398147583008 C 180.18115234375 16.3653736114502 180.1197662353516 17.5668888092041 180.6686401367188 18.3380298614502 C 180.9737854003906 18.7612190246582 181.4137725830078 18.95753860473633 181.8681640625 18.88449096679688 C 182.6024780273438 18.7643985748291 183.2439727783203 17.98493576049805 183.6253204345703 16.74878120422363 C 184.0992126464844 15.20813083648682 183.9532470703125 13.50638484954834 183.2296295166016 11.83054351806641 L 183.2296295166016 11.83054351806641 Z">
						</path>
					</svg>
					<div id="Gruppe_112_sc">
						<svg class="Pfad_114_sd" viewBox="0 34.193 29.117 29.725">
							<path id="Pfad_114_sd" d="M 29.11727905273438 52.2884635925293 C 29.11727905273438 59.44845199584961 25.34199142456055 63.91826629638672 18.44243240356445 63.91826629638672 C 14.97071933746338 63.91826629638672 12.84455585479736 62.920166015625 9.893745422363281 60.31648254394531 L 3.905358791351318 63.87478637695312 L 2.994192838668823 63.87478637695312 L 2.994192838668823 37.92523956298828 L 0 35.06111145019531 L 0 34.19341278076172 L 11.80300331115723 34.19341278076172 L 11.80300331115723 46.86443328857422 L 11.88992881774902 46.86443328857422 C 12.75795555114746 43.43618392944336 15.31817722320557 40.65898895263672 19.65751457214355 40.65898895263672 C 25.34199142456055 40.65898895263672 29.11728858947754 45.08533477783203 29.11728858947754 52.2884635925293 Z M 19.74410820007324 52.2884635925293 C 19.74410820007324 47.94903564453125 18.22543525695801 44.5643310546875 15.62175464630127 44.5643310546875 C 13.0615348815918 44.5643310546875 11.80299282073975 47.64553070068359 11.80299282073975 52.15839385986328 L 11.80299282073975 52.3753776550293 C 11.80299282073975 59.75244903564453 13.0615348815918 62.26921081542969 15.62175464630127 62.26921081542969 C 18.22543525695801 62.26921081542969 19.74410820007324 59.44845199584961 19.74410820007324 52.2884521484375 Z">
							</path>
						</svg>
						<svg class="Pfad_115_se" viewBox="38.241 29.731 14.711 32.719">
							<path id="Pfad_115_se" d="M 52.95138168334961 61.58242416381836 L 52.95138168334961 62.45046234130859 L 38.24070739746094 62.45046234130859 L 38.24070739746094 61.58242416381836 L 41.19184112548828 58.71871566772461 L 41.19184112548828 44.18156433105469 L 38.24070739746094 41.31784439086914 L 38.24070739746094 40.44981384277344 L 50.00058364868164 40.44981384277344 L 50.00058364868164 58.71871566772461 L 52.95138168334961 61.58242416381836 Z M 41.01790237426758 34.11427688598633 C 41.01790237426758 31.77105522155762 42.8840217590332 29.73140907287598 45.57431411743164 29.73140907287598 C 48.26492309570312 29.73140907287598 50.17408752441406 31.77105522155762 50.17408752441406 34.11427688598633 C 50.17408752441406 36.63095474243164 48.26492309570312 38.54055404663086 45.57431411743164 38.54055404663086 C 42.88403701782227 38.54055404663086 41.01790237426758 36.63095474243164 41.01790237426758 34.11427688598633 Z">
							</path>
						</svg>
						<svg class="Pfad_116_sf" viewBox="59.963 42.373 21.784 22.391">
							<path id="Pfad_116_sf" d="M 81.74748229980469 42.72015380859375 L 81.74748229980469 52.26693725585938 L 80.79251098632812 52.26693725585938 L 74.24002075195312 46.49545669555664 C 72.89488983154297 47.18995666503906 71.72324371337891 50.18422698974609 71.72324371337891 53.52547073364258 L 71.72324371337891 61.03260803222656 L 76.23611450195312 63.89631652832031 L 76.23611450195312 64.76435852050781 L 59.96338272094727 64.76435852050781 L 59.96338272094727 63.89631652832031 L 62.91452026367188 61.03260803222656 L 62.91452026367188 46.49545669555664 L 59.96338272094727 43.6317253112793 L 59.96338272094727 42.76369094848633 L 71.72324371337891 42.76369094848633 L 71.72324371337891 48.49163055419922 L 71.89678192138672 48.49163055419922 C 72.72135162353516 45.10683822631836 74.76099395751953 42.37310791015625 78.92681121826172 42.37310791015625 C 80.01139831542969 42.37310791015625 81.096435546875 42.50315475463867 81.74748229980469 42.72015380859375 Z">
							</path>
						</svg>
						<svg class="Pfad_117_sg" viewBox="90.238 34.193 29.595 29.725">
							<path id="Pfad_117_sg" d="M 119.8327026367188 62.39908981323242 L 119.8327026367188 63.26711654663086 L 108.0727310180664 63.26711654663086 L 108.0727310180664 57.27873992919922 L 108.0292663574219 57.27873992919922 C 107.1616668701172 61.09748840332031 104.1239318847656 63.91817092895508 99.78459930419922 63.91817092895508 C 94.10011291503906 63.91817092895508 90.23790740966797 59.4483642578125 90.23790740966797 52.28836822509766 C 90.23790740966797 45.0852165222168 94.10011291503906 40.65888595581055 99.78459930419922 40.65888595581055 C 104.1239318847656 40.65888595581055 107.1616668701172 43.43610382080078 108.0292663574219 47.2979850769043 L 108.0727310180664 47.2979850769043 L 108.0727310180664 37.92514419555664 L 105.0785675048828 34.84395599365234 L 105.0785675048828 34.19331359863281 L 116.8384017944336 34.19331359863281 L 116.8384017944336 59.53538131713867 L 119.8327026367188 62.39910507202148 Z M 108.0727310180664 52.37528228759766 L 108.0727310180664 52.15829849243164 C 108.0727310180664 47.64542770385742 106.3370895385742 44.34725189208984 103.8204345703125 44.34725189208984 C 101.2167510986328 44.34725189208984 99.69767761230469 47.94893264770508 99.69767761230469 52.28834533691406 C 99.69767761230469 56.62776947021484 101.2167510986328 60.1864128112793 103.8204345703125 60.1864128112793 C 106.3370895385742 60.1864128112793 108.0727310180664 56.88813781738281 108.0727310180664 52.37527465820312 Z">
							</path>
						</svg>
						<svg class="Pfad_118_sh" viewBox="129.807 42.107 20.656 23.259">
							<path id="Pfad_118_sh" d="M 150.4624176025391 58.38027954101562 C 150.4624176025391 64.36868286132812 144.2569732666016 65.36676788330078 140.2216339111328 65.36676788330078 C 137.7044372558594 65.36676788330078 135.7518005371094 64.97627258300781 134.0161437988281 64.49872589111328 L 130.9783935546875 65.10631561279297 L 130.1538238525391 65.10631561279297 L 130.1538238525391 55.99360656738281 L 131.0218963623047 55.99360656738281 L 139.1365356445312 64.19514465332031 C 139.3100433349609 64.36868286132812 139.5705871582031 64.41221618652344 139.7006530761719 64.41221618652344 C 142.1307830810547 64.41221618652344 142.6513519287109 63.19715118408203 142.6513519287109 61.89505767822266 C 142.6513519287109 59.94241714477539 141.4797058105469 58.68379592895508 139.7875823974609 58.07628631591797 L 136.5763854980469 56.81814956665039 C 132.5405426025391 55.25596618652344 129.8068237304688 53.17285919189453 129.8068237304688 49.26757049560547 C 129.8068237304688 43.75662231445312 135.2747039794922 42.10749053955078 139.7006530761719 42.10749053955078 C 141.6532592773438 42.10749053955078 143.7798461914062 42.41107559204102 145.7325897216797 42.93205642700195 L 148.7698974609375 42.32446670532227 L 149.5943908691406 42.32446670532227 L 149.5943908691406 51.09015274047852 L 148.7267456054688 51.09015274047852 L 140.5686798095703 43.1055793762207 C 140.4381866455078 42.97551727294922 140.2646942138672 42.93205642700195 140.0477142333984 42.93205642700195 C 137.9649810791016 42.93205642700195 137.3139801025391 44.3641242980957 137.3139801025391 45.96939086914062 C 137.3139801025391 47.87897109985352 138.2685089111328 48.74659729003906 140.7856292724609 49.74468612670898 L 143.9969329833984 50.95975875854492 C 147.8587341308594 52.47874450683594 150.4624176025391 54.51800155639648 150.4624176025391 58.38027954101562 Z">
							</path>
						</svg>
						<svg class="Pfad_119_si" viewBox="167.728 42.108 25.733 23.259">
							<path id="Pfad_119_si" d="M 193.4609375 53.73698425292969 C 193.4609375 60.68000411987305 187.6029510498047 65.36678314208984 180.5729370117188 65.36678314208984 C 173.5867767333984 65.36678314208984 167.7283782958984 60.68000411987305 167.7283782958984 53.73698425292969 C 167.7283782958984 46.79396820068359 173.5867767333984 42.10750198364258 180.5729370117188 42.10750198364258 C 187.6029510498047 42.10750198364258 193.4609375 46.79388427734375 193.4609375 53.73698425292969 Z M 184.0011444091797 53.73698425292969 C 184.0011444091797 45.14523696899414 183.0465698242188 42.97552490234375 180.5729370117188 42.97552490234375 C 178.1431274414062 42.97552490234375 177.1881256103516 45.14523696899414 177.1881256103516 53.73698425292969 C 177.1881256103516 62.19907379150391 178.1431732177734 64.49876403808594 180.5729370117188 64.49876403808594 C 183.0465698242188 64.49876403808594 184.0011444091797 62.19905090332031 184.0011444091797 53.73698425292969 Z">
							</path>
						</svg>
						<svg class="Pfad_120_sj" viewBox="202.092 33.397 19.571 29.725">
							<path id="Pfad_120_sj" d="M 221.6624603271484 34.04755020141602 L 221.6624603271484 39.9491081237793 L 220.7944641113281 39.9491081237793 L 214.9798889160156 34.65514755249023 C 214.1987609863281 35.08879089355469 213.8517913818359 35.86981964111328 213.8517913818359 36.65092086791992 L 213.8517913818359 41.12072372436523 L 221.6624603271484 41.12072372436523 L 221.6624603271484 41.98876190185547 L 213.8517913818359 41.98876190185547 L 213.8517913818359 59.38964462280273 L 218.5380554199219 62.25334548950195 L 218.5380554199219 63.12137603759766 L 202.0918884277344 63.12137603759766 L 202.0918884277344 62.25334548950195 L 205.0422210693359 59.38964462280273 L 205.0422210693359 41.98876190185547 L 202.0918884277344 41.98876190185547 L 202.0918884277344 41.12072372436523 L 205.0422210693359 41.12072372436523 L 205.0422210693359 40.77367401123047 C 205.0422210693359 35.52276992797852 209.1653289794922 33.39661026000977 215.8047943115234 33.39661026000977 C 217.6700744628906 33.39661026000977 220.1433868408203 33.8305778503418 221.6624298095703 34.04755020141602 Z">
							</path>
						</svg>
						<svg class="Pfad_121_sk" viewBox="236.881 34.246 17.487 29.682">
							<path id="Pfad_121_sk" d="M 254.3673706054688 55.85634613037109 C 253.7602844238281 60.23922729492188 251.3739624023438 63.92792892456055 246.6876220703125 63.92792892456055 C 242.6513214111328 63.92792892456055 239.2231140136719 61.28078079223633 239.2231140136719 55.9868049621582 L 239.2231140136719 42.14425277709961 L 236.8807373046875 42.14425277709961 L 236.8807373046875 41.27621841430664 L 239.2231140136719 41.27621841430664 L 247.0776519775391 34.24620056152344 L 248.0326690673828 34.24620056152344 L 248.0326690673828 41.27621841430664 L 254.1073608398438 41.27621841430664 L 254.1073608398438 42.14425277709961 L 248.0326690673828 42.14425277709961 L 248.0326690673828 56.42086410522461 C 248.0326690673828 58.24303817749023 248.9868621826172 59.45811080932617 250.4627990722656 59.45811080932617 C 252.0249938964844 59.45811080932617 252.9791870117188 58.24302673339844 253.587158203125 55.72635650634766 L 254.3673706054688 55.85634613037109 Z">
							</path>
						</svg>
						<svg class="Pfad_122_sl" viewBox="261.312 42.373 21.784 22.391">
							<path id="Pfad_122_sl" d="M 283.0964050292969 42.72015380859375 L 283.0964050292969 52.26693725585938 L 282.1406555175781 52.26693725585938 L 275.5889892578125 46.49545669555664 C 274.243896484375 47.18995666503906 273.0718383789062 50.18422698974609 273.0718383789062 53.52547073364258 L 273.0718383789062 61.03260803222656 L 277.585205078125 63.89631652832031 L 277.585205078125 64.76435852050781 L 261.3119812011719 64.76435852050781 L 261.3119812011719 63.89631652832031 L 264.2631225585938 61.03260803222656 L 264.2631225585938 46.49545669555664 L 261.3119812011719 43.6317253112793 L 261.3119812011719 42.76369094848633 L 273.0718383789062 42.76369094848633 L 273.0718383789062 48.49163055419922 L 273.2450256347656 48.49163055419922 C 274.0699157714844 45.10683822631836 276.1091613769531 42.37310791015625 280.2754211425781 42.37310791015625 C 281.3604125976562 42.37310791015625 282.4455871582031 42.50315475463867 283.0964660644531 42.72015380859375 Z">
							</path>
						</svg>
						<svg class="Pfad_123_sm" viewBox="291.585 42.851 28.986 22.652">
							<path id="Pfad_123_sm" d="M 320.5719299316406 63.98373413085938 L 320.5719299316406 64.85177612304688 L 308.7689819335938 64.85177612304688 L 308.7689819335938 59.6444091796875 L 308.6397094726562 59.6444091796875 C 307.4669189453125 62.94261169433594 305.7317199707031 65.5028076171875 301.4354248046875 65.5028076171875 C 297.3569946289062 65.5028076171875 294.5358581542969 63.07263946533203 294.5358581542969 57.43123626708984 L 294.5358581542969 46.58285522460938 L 291.5854797363281 43.71913909912109 L 291.5854797363281 42.85110855102539 L 303.3454284667969 42.85110855102539 L 303.3454284667969 57.21423721313477 C 303.3454284667969 59.73140716552734 304.1257019042969 60.94648742675781 305.7317199707031 60.94648742675781 C 307.7716979980469 60.94648742675781 308.7689819335938 58.64630889892578 308.7689819335938 56.43322372436523 L 308.7689819335938 46.58285522460938 L 305.8186950683594 43.71913909912109 L 305.8186950683594 42.85110855102539 L 317.5784912109375 42.85110855102539 L 317.5784912109375 61.12001419067383 L 320.5719299316406 63.98372650146484 Z">
							</path>
						</svg>
						<svg class="Pfad_124_sn" viewBox="330.412 42.107 20.654 23.259">
							<path id="Pfad_124_sn" d="M 351.0657958984375 58.38027954101562 C 351.0657958984375 64.36868286132812 344.862060546875 65.36676788330078 340.8250427246094 65.36676788330078 C 338.3087158203125 65.36676788330078 336.3555603027344 64.97627258300781 334.6195373535156 64.49872589111328 L 331.5830383300781 65.10631561279297 L 330.7580871582031 65.10631561279297 L 330.7580871582031 55.99360656738281 L 331.6260681152344 55.99360656738281 L 339.7415161132812 64.19514465332031 C 339.9139404296875 64.36868286132812 340.1739807128906 64.41221618652344 340.3048706054688 64.41221618652344 C 342.7350158691406 64.41221618652344 343.2551879882812 63.19715118408203 343.2551879882812 61.89505767822266 C 343.2551879882812 59.94241714477539 342.083984375 58.68379592895508 340.3908996582031 58.07628631591797 L 337.1806030273438 56.81814956665039 C 333.1451416015625 55.25596618652344 330.411865234375 53.17285919189453 330.411865234375 49.26757049560547 C 330.411865234375 43.75662231445312 335.8785705566406 42.10749053955078 340.3048706054688 42.10749053955078 C 342.2580261230469 42.10749053955078 344.3833618164062 42.41107559204102 346.3363952636719 42.93205642700195 L 349.3744201660156 42.32446670532227 L 350.1995239257812 42.32446670532227 L 350.1995239257812 51.09015274047852 L 349.3314208984375 51.09015274047852 L 341.1728515625 43.1055793762207 C 341.0420532226562 42.97551727294922 340.8697509765625 42.93205642700195 340.6527099609375 42.93205642700195 C 338.5688171386719 42.93205642700195 337.9178161621094 44.3641242980957 337.9178161621094 45.96939086914062 C 337.9178161621094 47.87897109985352 338.87353515625 48.74659729003906 341.3899230957031 49.74468612670898 L 344.6003723144531 50.95975875854492 C 348.4633178710938 52.47874450683594 351.0657958984375 54.51800155639648 351.0657958984375 58.38027954101562 Z">
							</path>
						</svg>
						<svg class="Pfad_125_so" viewBox="358.563 34.246 17.487 29.682">
							<path id="Pfad_125_so" d="M 376.0493774414062 55.85634613037109 C 375.4430236816406 60.23922729492188 373.0559692382812 63.92792892456055 368.3695068359375 63.92792892456055 C 364.3342590332031 63.92792892456055 360.9051818847656 61.28078079223633 360.9051818847656 55.9868049621582 L 360.9051818847656 42.14425277709961 L 358.5628051757812 42.14425277709961 L 358.5628051757812 41.27621841430664 L 360.9051818847656 41.27621841430664 L 368.7603759765625 34.24620056152344 L 369.7146606445312 34.24620056152344 L 369.7146606445312 41.27621841430664 L 375.789306640625 41.27621841430664 L 375.789306640625 42.14425277709961 L 369.7146606445312 42.14425277709961 L 369.7146606445312 56.42086410522461 C 369.7146606445312 58.24303817749023 370.6688842773438 59.45811080932617 372.1449279785156 59.45811080932617 C 373.7069702148438 59.45811080932617 374.6612548828125 58.24302673339844 375.2690734863281 55.72635650634766 L 376.0493774414062 55.85634613037109 Z">
							</path>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>