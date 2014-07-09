<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-TW" lang="zh-TW">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>數位視野 [DCView 二手市場區]</title>
		<link rel="stylesheet" type="text/css" href="./css/ad.css">
		<link rel="stylesheet" type="text/css" href="./css/layout.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/nav.css">
		<link rel="stylesheet" type="text/css" href="./css/content-double.css">
		<link rel="stylesheet" type="text/css" href="./css/dcview_newtemplate.css">
		<link rel="stylesheet" type="text/css" href="./css/dcview.css">
		<link rel="stylesheet" type="text/css" href="./css/homecss.css">
		<!--new-->
		<link rel="stylesheet" href="./css/kickstart/css/kickstart.css" type="text/css" media="all" />
		<link rel="stylesheet" href="./css/kickstart/css/form_style.css" type="text/css" media="all" />
		<!--new end-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="./js/tabber.js"></script>
		<script type="text/javascript">
			var timeout = 500;
			var closetimer = 0;
			var ddmenuitem = 0;
			function mopen(id) {
				mcancelclosetime();
				if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
				ddmenuitem = document.getElementById(id);
				ddmenuitem.style.visibility = 'visible';
			}

			function mclose() {
				if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
			}

			function mclosetime() {
				closetimer = window.setTimeout(mclose, timeout);
			}

			function mcancelclosetime() {
				if(closetimer) {
					window.clearTimeout(closetimer);
					closetimer = null;
				}
			}

			$(function() {
				$('#footer #nav ul li.more').mouseover(function() {
					$('#footer #nav .nav-more').show();
				}).mouseout(function() {
					$('#footer #nav .nav-more').hide();
				});
			});
		</script>
	</head>
	<body bgcolor="#FFFFFF" topmargin="0" marginheight="0" leftmargin="0" marginwidth="0">
		<center>
			<div id="header">
				<!--=logo -->
				<div class="logo">
					<a href="http://www.dcview.com/"><img src="./img/logo-dcview.jpg" alt="dcview-首頁"></a>
				</div>
				<!--=search -->
				<div class="search">
					<form id="siteSearchForm" name="siteSearchForm" action="http://gallery.dcview.com/result.php" method="get" onsubmit="return chk_search()" target="_blank">
						<ul class="search-bar-ul">
							<li class="scbar_icon_td"></li>
							<li class="scbar_txt_td">
								<input type="text">
								<input type="hidden" name="searchkey" id="searchkey" value="">
								<input type="hidden" name="kw" id="kw" value="">
								<input type="hidden" name="mod" id="mod" value="forum">
								<input type="hidden" name="orderby" id="orderby" value="lastpost">
								<input type="hidden" name="ascdesc" id="ascdesc" value="desc">
								<input type="hidden" name="searchsubmit" id="searchsubmit" value="yes">
							</li>
							<li class="scbar_type_td">
								<select id="scbar_type" class="showmenu xg1 xs2" style="border:0px;">
									<option value="1">作品發表</option>
									<option value="2">討論區</option>
								</select>
							</li>
							<li class="scbar_btn_td">
								<button id="scbar_btn" class="pn pnc" value="true" name="searchsubmit" type="button">
									<strong class="xi2 xs2">搜尋</strong>
								</button>
							</li>
							<div class="clear"></div>
						</ul>
					</form>
				</div>
				<!-- clear float -->
				<div class="clear"></div>
				<!--=menu -->
				<div class="menu">
					<ul>
						<li class="list">
							<a href=""><img alt="會員登入" src="./img/meb_login.gif" width="56" height="19"></a>
						</li>
						<li class="list">
							<a href="http://member.dcview.com/tos.php"><img alt="加入會員" src="./img/meb_add.gif" width="56" height="19"></a>
						</li>
					</ul>
				</div>
				<!-- clear float -->
				<div class="clear"></div>
				<!--=nav -->
				<div id="nav">
					<ul id="more">
						<li><a href="http://gallery.dcview.com/"><span>作品發表區</span></a></li>
						<li><a href="http://blog.dcview.com/"><span>達人部落</span></a>

						</li>
						<li><a href="http://forum.dcview.com/"><span>討論區</span></a>

						</li>
						<li><a href="http://article.dcview.com/"><span>文章總覽</span></a>

						</li>
						<li><a href="http://library.dcview.com/"><span>影像圖書館</span></a>

						</li>
						<li><a href="http://school.dcview.com/"><span>影像學院</span></a>

						</li>
						<li class="add"><a href="http://tw.dcview.com/spec/"><span>相機專區</span></a>

						</li>
						<li class="add"><a href="http://www.dcview.com/dvphone/"><span>照相手機</span></a>

						</li>
						<li><a href="http://phototour.dcview.com/"><span>旅行攝</span></a>

						</li>
						<li><a href="http://ishot.dcview.com/"><span>iShot購物</span></a>

						</li>
						<li class="active"><a href=""><span>二手專區</span></a>

						</li>
						<li class="more">	<a href="http://www.dcview.com.tw/dcbid/flealist.asp#" onmouseover="mopen(&#39;m1&#39;)" onmouseout="mclosetime()"><span>更多</span></a>

							<div style="visibility: hidden;" id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	<a href="http://www.dcview.com.tw/e_paper/epaper_list.htm">會員電子報</a>
	<a href="http://www.dcview.com.tw/member/">客服中心</a>

							</div>
						</li>
					</ul>
				</div>
				<!--=adtxt -->
				<div class="adtxt">
					<ul>
						<script type="text/javascript" src="http://ad.dcview.com/index.php?id=11&chr=UTF-8"></script>
					</ul>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div id="content">
				<table width="1000" border="0" cellspacing="4" cellpadding="0">
					<tbody>
						<tr>
							<td valign="top" align="center" width="130">
								<div class="ad">
									<p>
										<script type="text/javascript" src="http://ad.dcview.com/index.php?id=12&chr=UTF-8"></script>
									</p>
								</div>
								<br>
								<table width="240" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td class="navBf1">二手區分類:</td>
										</tr>
										<tr>
											<td align="center">
												<table cellspacing="0" cellpadding="1" border="0" width="240">
													<tbody>
														<tr>
															<td class="navBf1" colspan="2">
																<hr size="1">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A04">Canon</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A14">SLR</a>

															</td>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A07">Fujifilm</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A20">SLR</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A01">Nikon</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A15">SLR</a>

															</td>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A02">Olympus</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A29">SLR</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A19">Panasonic</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A34">SLR</a>

															</td>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A18">Pentax</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A30">SLR</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A03">Sony</a> || <a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A33">SLR</a>

															</td>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A05">CASIO</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A28">Contax</a>

															</td>
															<td class="navBf1">	<a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A22">Leica</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A09">Ricoh</a>

															</td>
															<td class="navBf1">	<a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A23">Samsung</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A21">Sigma</a>

															</td>
															<td class="navBf1">&nbsp;</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A12">傳統相機</a>

															</td>
															<td class="navBf1">	<a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0A13">其他相機</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0B14">照相手機</a>

															</td>
															<td class="navBf1">	<a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=0B15">數位攝影機</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1" colspan="2">
																<hr size="1">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=1">鏡頭 (廣角增距等)</a>

															</td>
															<td class="navBf1" colspan="2"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=2">列印 (印相,輸出等)</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=3">閃光燈</a>

															</td>
															<td class="navBf1" colspan="2"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=4">記憶卡/儲存設備</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=5">電池 (一般，鋰電)</a>

															</td>
															<td class="navBf1" colspan="2"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=6">腳架</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<!--<tr><td class="navBf1" colspan=2><a href="/dcbid/flealist.asp?ptype=7">電源、充電器</a></td></tr> <tr><td colspan=2><img height=1 src="/images/bd_spline.gif" width=240></td></tr>-->
														<tr>
															<td class="navBf1" colspan="2"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype=8">背包、皮套</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<!--<tr><td class="navBf1" colspan=2><a href="/dcbid/flealist.asp?ptype=9">讀卡機</a></td></tr> <tr><td colspan=2><img height=1 src="/images/bd_spline.gif" width=240></td></tr>-->
														<tr>
															<td class="navBf1" colspan="2">
																<hr size="1">
															</td>
														</tr>
														<tr>
															<td class="navBf1" colspan="2"><a href="http://www.dcview.com.tw/dcbid/flealist.asp?ptype">所有類別物品</a>

															</td>
														</tr>
														<tr>
															<td colspan="2">
																<img height="1" src="./img/bd_spline.gif" width="240">
															</td>
														</tr>
														<tr>
															<td class="navBf1" colspan="2">
																<hr size="1">
															</td>
														</tr>
														<tr>
															<td class="navBf1" colspan="2">&nbsp;</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="ad">
									<p>
										<script type="text/javascript" src="http://ad.dcview.com/index.php?id=14&chr=UTF-8"></script>
									</p>
								</div>
								<br>
								<script type="text/javascript">
									google_ad_client = "ca-pub-3464838274425848";
									google_ad_host = "ca-host-pub-7475939466736018";
									google_ad_host_channel = "5765749770";
									google_ad_slot = "3148660819";
									google_ad_width = 234;
									google_ad_height = 60;
								</script>
								<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
								<!-- <div class="sitemajiad" model="1"></div>
								<script type="text/javascript" src="http://ad.sitemaji.com/ysm_dcview.js"></script> -->
							</td>
							<td valign="top" width="15">&nbsp;</td>
							<td valign="top">
								<script type="text/javascript">
									google_ad_client = "ca-pub-3464838274425848";
									google_ad_host = "ca-host-pub-7475939466736018";
									google_ad_host_channel = "5765749770";
									google_ad_slot = "4562858419";
									google_ad_width = 468;
									google_ad_height = 60;
								</script>
								<div style="text-align:center;">
									<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
								</div>
								<?php require_once(MAIN_CONTENT_PATH); ?>
								<!--類別-->
								<div style="clear:both; height:5px;"></div>
								<table cellspacing="0" cellpadding="2" width="98%" border="0">
									<tbody>
										<tr>
											<td class="default"></td>
											<td align="right" class="default">
												<a href="http://www.dcview.com.tw/dcbid/fleamsg.asp?msgid=2">有關團購規定說明</a>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="ad" style="text-align:center;">
									<p>
										<script type="text/javascript" src="http://ad.dcview.com/index.php?id=13&chr=UTF-8"></script>
									</p>
								</div>
								<script type="text/javascript">
									google_ad_client = "ca-pub-3464838274425848";
									google_ad_host = "ca-host-pub-7475939466736018";
									google_ad_host_channel = "5765749770";
									google_ad_slot = "1469791212";
									google_ad_width = 468;
									google_ad_height = 60;
								</script>
								<div style="text-align:center;">
									<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="down-ad">
				<ul>
					<script type="text/javascript" src="http://ad.dcview.com/index.php?id=15&chr=UTF-8"></script>
				</ul>
			</div>
			<!-- clear float -->
			<div class="clearfix"></div>
			<style type="text/css">
				#footer #nav li.more .nav-more {
					position: absolute;
					top: -50px;
					right: 0;
					z-index: 100000;
				}
			</style>
			<div id="footer">
				<!--=footer-main -->
				<div class="footer-main">
					<!--=nav -->
					<div id="nav">
						<ul id="more">
							<li><a href="http://gallery.dcview.com/"><span>作品發表區</span></a>

							</li>
							<li><a href="http://blog.dcview.com/"><span>達人部落</span></a>

							</li>
							<li><a href="http://forum.dcview.com/"><span>討論區</span></a>

							</li>
							<li><a href="http://article.dcview.com/"><span>文章總覽</span></a>

							</li>
							<li><a href="http://library.dcview.com/"><span>影像圖書館</span></a>

							</li>
							<li><a href="http://school.dcview.com/"><span>影像學院</span></a>

							</li>
							<li><a href="http://tw.dcview.com/spec/"><span>相機專區</span></a>

							</li>
							<li class="add"><a href="http://www.dcview.com/dvphone/"><span>照相手機</span></a>

							</li>
							<li class="add"><a href="http://phototour.dcview.com/"><span>旅行攝</span></a>

							</li>
							<li><a href="http://ishot.dcview.com/"><span>iShot購物</span></a>

							</li>
							<li class="active"><a href=""><span>二手專區</span></a>

							</li>
							<li class="more"><a href="http://www.dcview.com.tw/dcbid/flealist.asp#" onmouseover="mopen(&#39;m2&#39;)" onmouseout="mclosetime()"><span>更多</span></a>
								<div class="nav-more" style="visibility: hidden;" id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	<a href="http://www.dcview.com.tw/e_paper/epaper_list.htm">會員電子報</a>

									<!--<a href="http://dcpad.dcview.com/mmzine">影像誌</a>
						<a href="http://www.dcview.com.tw/guide.asp">新手指南</a>
						<a href="http://www.dcview.com.tw/sitemap.asp">網站導覽</a>-->	<a href="http://www.dcview.com.tw/member/">客服中心</a>

									<!--<a href="http://search.dcview.com/search.jsp">進階搜尋</a>
						<a href="http://dcpad.dcview.com/">DCPad</a>
						<a href="http://dcpad.dcview.com/taipeishopping/info/">好康報馬仔</a>-->
								</div>
							</li>
						</ul>
					</div>
					<!--=copyright -->
					<div class="copyright">
						<div class="logo">	<a href="http://www.dcview.com.tw/dcbid/new.html">
					<img src="./img/logo_d2.gif" alt="dcview-首頁" width="200" height="60"></a>

						</div>
						<div class="content">
							<p class="link"><a href="http://service.dcview.com/">服務說明與客服中心</a> ∣ <a href="http://service.dcview.com/sales/">整合行銷服務</a> ∣ <a href="http://service.dcview.com/qa_list.php?classid=6">行銷合作</a> ∣ <a href="http://service.dcview.com/sales/advertisement.php">廣告刊登</a>

							</p>
							<p>DCView 版權所有，若有侵權，本公司將依法訴訟，絕不寬貸</p>
							<p>Copyright c 2002-2013 迪希數位科技股份有限公司 All Rights Reserved.</p>
						</div>
						<div class="tag">DCView 的社群：	<a target="_blank" href="http://www.facebook.com/pages/DCView/402684696689?v=wall&ref=ts"><img title="facebook" alt="facebook" src="./img/facebook_20.png" width="20" height="20"></a>
	<a target="_blank" href="http://www.plurk.com/dcview"><img title="plurk" alt="plurk" src="./img/plurk_20.png" width="20" height="20"></a>

						</div>
					</div>
				</div>
			</div>
			<script src="./js/urchin.js" type="text/javascript"></script>
			<script type="text/javascript">
				_uacct = "UA-2075591-1";
				urchinTracker();
			</script>
			<script type="text/javascript">
				var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
				document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script src="./js/ga.js" type="text/javascript"></script>
			<script type="text/javascript">
				var pageTracker = _gat._getTracker("UA-5051332-7");
				pageTracker._setDomainName(".dcview.com");
				pageTracker._initData();
				pageTracker._trackPageview();
			</script>
		</center>
	</body>
</html>
<?php ob_end_flush(); ?>