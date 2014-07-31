<?php
require_once("common.inc.php");

if (!isset($_GET["id"])) {
	die();
}

$te = new TblEdm();
$sql_params = array(
	"fields" => array("*", "DATE_FORMAT(edm_publish_date, '%Y/%m/%d') AS edm_publish_date"),
	"where_cond" => array("edm_id = ?" => $_GET["id"]),
);
$edm_data = $te->read($te->generateReadSQL($sql_params));

if (count($edm_data) != 1) {
	die();
}

$edm_data = $edm_data[0];
$edm_data["edm_thumbnail_path1"] = get_path($edm_data["edm_thumbnail_path1"]);
$edm_data["edm_thumbnail_path2"] = get_path($edm_data["edm_thumbnail_path2"]);

$tei = new TblEdmInfo();
$sql_params = array(
	"fields" => array("*"),
	"where_cond" => array("edm_id = ?" => $_GET["id"]),
	"order_by_clause" => "edm_info_type, edm_info_rank",
);
$edm_info_list = $tei->read($tei->generateReadSQL($sql_params));
foreach ($edm_info_list as &$value) {
	$value["edm_info_title"] = htmlentities($value["edm_info_title"], ENT_COMPAT, "UTF-8");
	$value["edm_info_author"] = htmlentities($value["edm_info_author"], ENT_COMPAT, "UTF-8");
	$value["edm_info_summary"] = htmlentities($value["edm_info_summary"], ENT_COMPAT, "UTF-8");
	$value["edm_info_summary"] = limit_str($value["edm_info_summary"], 60)."...";
	$value["edm_info_thumbnail_path"] = get_path($value["edm_info_thumbnail_path"]);

	$var = "edm_info_list".$value["edm_info_type"];
	if (!isset($$var)) {
		$$var = array();
	}
	array_push($$var, $value);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>數位視野電子報第<?php echo $edm_data["edm_volume"]; ?>期</title>

<style type="text/css">
<!--

body {	
	margin: 0px;
	font: 12px Verdana;
	color: #666;
}
a:link{
	font: Verdana;
	color: #567fab;
	text-decoration: underline;
}
a:hover{
	font: Verdana;
	color: #f65862;
	text-decoration: underline;
}
a:visited {
	color: #567FAB;
}
a:active {
	color: #567FAB;
}

-->
</style>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="750">
	<tbody>
		<tr>
			<td background="img/top_bg.gif" width="300">
				<img src="img/logo.gif" alt="DCView數位視野" usemap="#Map" border="0" height="74" width="300">
			</td>
			<td class="txt_blk" align="right" background="img/top_bg.gif" width="448">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td align="right"><a href="http://forum.dcview.com/" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">討論區</a>
								<img src="img/l_01.gif" align="absmiddle" height="11" width="11"><a href="http://gallery.dcview.com/" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">作品發表</a>
								<img src="img/l_01.gif" align="absmiddle" height="11" width="11"><a href="http://article.dcview.com/" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">文章總覽</a>
								<img src="img/l_01.gif" align="absmiddle" height="11" width="11"><a href="http://www.dcview.com.tw/forums/camlist.asp" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">相機專區</a>
							</td>
						</tr>
						<tr>
							<td align="right" height="50">
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td style="color: rgb(224, 100, 108); font-size: 12px;" height="30" valign="middle">第<?php echo $edm_data["edm_volume"]; ?>期 <?php echo $edm_data["edm_publish_date"]; ?> 出刊　<font color="#567fab">成為粉絲好康多多</font><a href="http://www.facebook.com/pages/DCView/402684696689" target="_blank"><img src="img/facebook.gif" alt="加入DCView粉絲團" align="absmiddle" border="0" height="16" width="16"></a>&nbsp;</td>
			<td style="color: rgb(102, 102, 102); font-size: 12px;" align="right" height="30">如無法看到完整訊息，請點選<a href="http://www.dcview.com.tw/e_paper/20140515.htm" target="Newwindow">此處查看</a>。<a href="http://www.dcview.com.tw/e_paper/epaper_list.htm" target="_blank">前期電子報</a>
			</td>
		</tr>
	</tbody>
</table>
<br>
<table align="center" cellpadding="0" cellspacing="0" width="750">
	<tbody>
		<tr>
			<td valign="top" width="482">
				<!--==============================& #28966;&#40670;&#26032;&#32862; start==============================-->
				<table style="margin-bottom: 10px;" cellpadding="0" cellspacing="0" width="480">
					<tbody>
						<tr>
							<td height="536">
								<table style="border-top: 1px solid rgb(130, 180, 229); margin-bottom: 6px;" cellpadding="0" cellspacing="0" height="23" width="480">
									<tbody>
										<tr>
											<td bgcolor="#dceaf9" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(86, 127, 171);"><img src="img/space.gif" height="16" width="5">焦點新聞</span>
											</td>
										</tr>
									</tbody>
								</table>
								<?php if (isset($edm_info_list1)) { ?>
								<?php foreach ($edm_info_list1 as $value) { ?>
								<table style="width: 480px; height: 152px;" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td rowspan="2" align="left" valign="top" width="214">
												<table style="margin: 0pt 0pt 6px;" ;="" align="left" bgcolor="#d8d8d8" cellpadding="1" cellspacing="1" height="136" width="206">
													<tbody>
														<tr>
															<td align="center" bgcolor="#ffffff"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow"><img style="border: 0px solid ; width: 200px; height: 130px;" alt="<?php echo $value["edm_info_title"]; ?>" src="<?php echo $value["edm_info_thumbnail_path"]; ?>"></a>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td style="font-size: 15px; font-weight: bold;" align="left" height="28" valign="top" width="264"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(224, 100, 108); text-decoration: none;"><?php echo $value["edm_info_title"]; ?></a>
											</td>
										</tr>
										<tr>
											<td style="font-size: 13px; color: rgb(102, 102, 102); line-height: 21px;" align="left" height="108" valign="top"><?php echo $value["edm_info_summary"]; ?><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(86, 127, 171); text-decoration: underline;">閱讀全文</a>
											</td>
										</tr>
									</tbody>
								</table>
								<?php } ?>
								<?php } ?>
								<table style="margin: 6px 0pt;" cellpadding="0" cellspacing="0" width="480">
									<tbody>
										<tr>
											<td bgcolor="#f3f3f3">
												<table border="0" cellpadding="0" cellspacing="0" width="480">
													<tbody>
														<tr>
															<td bgcolor="#e2e4e7" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);"><img src="img/space.gif" height="16" width="5"></span><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);">新聞追蹤</span>
															</td>
														</tr>
													</tbody>
												</table>
												<table style="margin: 3px 0pt 6px;" align="center" cellpadding="0" cellspacing="2" width="471">
													<tbody>
														<?php if (isset($edm_info_list2)) { ?>
														<?php foreach ($edm_info_list2 as $value) { ?>
														<tr>
															<td style="font-size: 13px;" align="left" height="20">
																<a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(66, 127, 155); text-decoration: none;"><?php echo $value["edm_info_title"]; ?></a>
															</td>
														</tr>
														<?php } ?>
														<?php } ?>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<!--==============================& #28966;&#40670;&#26032;&#32862; end==============================-->
				<!--==============================& #36948;&#20154;&#37096;&#33853;&#31934;&#36984; start==============================-->
				<table style="margin-bottom: 10px;" cellpadding="0" cellspacing="0" width="480">
					<tbody>
						<tr>
							<td>
								<table style="border-top: 1px solid rgb(130, 180, 229); margin-bottom: 6px;" cellpadding="0" cellspacing="0" height="23" width="480">
									<tbody>
										<tr>
											<td bgcolor="#dceaf9" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(86, 127, 171);"><img src="img/space.gif" height="16" width="5">達人部落精選</span>
											</td>
										</tr>
									</tbody>
								</table>
								<?php
								if (isset($edm_info_list3)) {
									$value = array_shift($edm_info_list3);
									if (!empty($value)) {
								?>
								<table cellpadding="0" cellspacing="0" width="480">
									<tbody>
										<tr>
											<td rowspan="2" align="left" valign="top" width="215">
												<table style="margin: 0pt 0pt 6px;" ;="" bgcolor="#d8d8d8" cellpadding="1" cellspacing="1" height="136" width="206">
													<tbody>
														<tr>
															<td align="center" bgcolor="#ffffff"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow"><img style="border: 0px solid ; width: 200px; height: 130px;" src="<?php echo $value["edm_info_thumbnail_path"]; ?>" alt="<?php echo $value["edm_info_title"]; ?>"></a>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td style="font-size: 15px; font-weight: bold;" align="left" width="263"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(224, 100, 108); text-decoration: none;"><?php echo $value["edm_info_title"]; ?></a>
											</td>
										</tr>
										<tr>
											<td style="font-size: 13px; color: rgb(102, 102, 102); line-height: 21px;" align="left" height="110" valign="top"><span style="font-size: 12px; color: rgb(115, 129, 144);">作者： <?php echo $value["edm_info_author"]; ?><br>
													</span><?php echo $value["edm_info_summary"]; ?><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(86, 127, 171); text-decoration: underline;">閱讀全文</a>
											</td>
										</tr>
									</tbody>
								</table>
								<?php } ?>
								<table style="margin: 6px 0pt;" cellpadding="0" cellspacing="0" width="480">
									<tbody>
										<tr>
											<td bgcolor="#f3f3f3">
												<table border="0" cellpadding="0" cellspacing="0" width="480">
													<tbody>
														<tr>
															<td bgcolor="#e2e4e7" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);"><img src="img/space.gif" height="16" width="5"></span><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);">延伸閱讀</span>
															</td>
														</tr>
													</tbody>
												</table>
												<table style="margin: 3px 0pt 6px;" align="center" cellpadding="0" cellspacing="2" width="465">
													<tbody>
														<?php
														$iterate_times = ceil(count($edm_info_list3) / 2);
														for ($count = 0; $count < $iterate_times; $count++) {
														?>
														<tr>
															<?php
															$inner_count  = 0;
															while (count($edm_info_list3) > 0) {
																$value = array_shift($edm_info_list3);
															?>
															<td style="font-size: 13px;" align="left" height="22">‧ <a href="<?php echo $value["edm_info_url"]; ?>"><?php echo $value["edm_info_title"]; ?></a>
															</td>
															<?php
																$inner_count++;
																if ($inner_count == 2) {
																	break;
																}
															}
															?>
														</tr>
														<?php } ?>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td>
								<div align="right"><a href="http://blog.dcview.com/application-form.php" target="Newwindow" style="color: rgb(224, 100, 108); text-decoration: none; font-size: 12px;">◎ 你是攝影達人嗎？歡迎你加入達人部落格的行列 <strong><font color="#e0646c">Go!!</font></strong></a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<table style="margin-bottom: 10px;" cellpadding="0" cellspacing="0" width="480">
					<tbody>
						<tr>
							<td height="198">
								<table style="border-top: 1px solid rgb(130, 180, 229); margin-bottom: 6px;" cellpadding="0" cellspacing="0" height="23" width="480">
									<tbody>
										<tr>
											<td bgcolor="#dceaf9" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(86, 127, 171);"><img src="img/space.gif" height="16" width="5">攝影好讀</span>
											</td>
										</tr>
									</tbody>
								</table>
								<?php if (isset($edm_info_list4)) { ?>
								<?php foreach ($edm_info_list4 as $value) { ?>
								<table cellpadding="0" cellspacing="0" width="480">
									<tbody>
										<tr>
											<td rowspan="2" align="left" valign="top" width="215">
												<table style="margin: 0pt 0pt 6px;" ;="" bgcolor="#d8d8d8" cellpadding="1" cellspacing="1" height="136">
													<tbody>
														<tr>
															<td align="center" bgcolor="#ffffff"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow"><img style="border: 0px solid ; width: 200px; height: 130px;" src="<?php echo $value["edm_info_thumbnail_path"]; ?>" alt="<?php echo $value["edm_info_title"]; ?>"></a>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td style="font-size: 15px; font-weight: bold;" align="left" width="263"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(224, 100, 108); text-decoration: none;"><?php echo $value["edm_info_title"]; ?></a>
											</td>
										</tr>
										<tr>
											<td align="left" valign="top">
												<span style="font-size: 12px; color: rgb(115, 129, 144);">作者：<?php echo $value["edm_info_author"]; ?></span><br>
												<span style="font-size: 13px; color: rgb(102, 102, 102); line-height: 21px;"><?php echo $value["edm_info_summary"]; ?></span><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(86, 127, 171); text-decoration: underline;">閱讀全文</a>
											</td>
										</tr>
									</tbody>
								</table>
								<?php } ?>
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td>
								<div align="right"><a href="http://service.dcview.com/qa.php?qaid=106" target="Newwindow" style="color: rgb(224, 100, 108); text-decoration: none; font-size: 12px;">◎ 想推廣影像類好書嗎？歡迎你加入影像圖書館的行列 <strong><font color="#e0646c">Go!!</font></strong></a>

								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<!--==============================& #36948;&#20154;&#37096;&#33853;&#31934;&#36984; end==============================-->
			</td>
			<td valign="top" width="4">
				<br>
			</td>
			<td align="right" valign="top" width="262">
				<table style="border-top: 1px solid rgb(204, 204, 204); margin-bottom: 6px; width: 240px;" cellpadding="0" cellspacing="0">
					<tbody>
						<?php
						if (isset($edm_info_list5)) {
							$value = array_shift($edm_info_list5);
							if (!empty($value)) {
						?>
						<tr>
							<td colspan="2" align="left" bgcolor="#eeeeee" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);"><img src="img/space.gif" height="16" width="5">本週作品精選</span>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="left"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow"><img style="border: 0px solid ; width: 239px; height: 159px;" src="<?php echo $value["edm_info_thumbnail_path"]; ?>" alt="<?php echo $value["edm_info_title"]; ?>"></a>
							</td>
						</tr>
						<tr>
							<td align="left" height="25" width="160">
								<br>
							</td>
							<td style="text-align: right; width: 5000px;"><?php echo $value["edm_info_author"]; ?> / <?php echo $value["edm_info_title"]; ?>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0" width="240">
									<tbody>
										<tr>
											<?php foreach ($edm_info_list5 as $value) { ?>
											<td align="left"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow"><img alt="<?php echo $value["edm_info_title"]; ?>" src="<?php echo $value["edm_info_thumbnail_path"]; ?>" style="border: 0px solid ; width: 75px; height: 75px;"></a>
											</td>
											<?php } ?>
										</tr>
										<tr>
											<td colspan="3" align="right" height="20" valign="bottom"><a href="http://gallery.dcview.com/" target="Newwindow" style="font-size: 13px; color: rgb(86, 127, 171); text-decoration: underline;">看更多精選作品</a>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<table style="border-top: 1px solid rgb(204, 204, 204); margin-bottom: 0px;" cellpadding="0" cellspacing="0" width="240">
					<tbody>
						<tr>
							<td align="left" bgcolor="#eeeeee" height="20" width="135"><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);"><img src="img/space.gif" height="15" width="5">活動快訊</span>
							</td>
							<td align="right" bgcolor="#eeeeee" height="25" width="105"><a href="http://school.dcview.com/" target="Newwindow"><img src="img/more.gif" alt="more" border="0" height="12" width="43"><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);"><img src="img/space.gif" border="0" height="15" width="5"></span></a>
							</td>
						</tr>
					</tbody>
				</table>
				<table style="border: 1px solid rgb(204, 204, 204); margin-bottom: 6px;" cellpadding="5" cellspacing="0" width="240">
					<tbody>
						<?php if (isset($edm_info_list6)) { ?>
						<?php foreach ($edm_info_list6 as $value) { ?>
						<tr>
							<td align="center" width="240">
								<table style="margin: 0pt 0pt 6px 6px;" align="center" bgcolor="#d8d8d8" cellpadding="1" cellspacing="1" height="106" width="156">
									<tbody>
										<tr>
											<td bgcolor="#ffffff"><a href="<?php echo $value["edm_info_url"]; ?>"><img style="border: 0px solid ; width: 150px; height: 100px;" alt="<?php echo $value["edm_info_title"]; ?>" src="<?php echo $value["edm_info_thumbnail_path"]; ?>"></a>
												<br>
											</td>
										</tr>
									</tbody>
								</table>
								<a target="newwindow" href="<?php echo $value["edm_info_url"]; ?>" style="color: rgb(66, 127, 155); text-decoration: none;"><?php echo $value["edm_info_author"]; ?> - <?php echo $value["edm_info_title"]; ?></a>
							</td>
						</tr>
						<?php } ?>
						<?php } ?>
					</tbody>
				</table>
				<table style="margin: 10px 0pt;" cellpadding="0" cellspacing="0" width="240">
					<tbody>
						<tr>
							<td align="left" width="240"><a href="http://www.canon.com.tw/product/ICP/L4.asp?ID=00000945" target="Newwindow"><img longdesc="http://www.coolpix.com.tw/iam/index.php" alt="" src="img/2920.gif" style="border: 0px solid ; width: 240px; height: 180px;"></a>
							</td>
						</tr>
					</tbody>
				</table>
				<table style="border-top: 1px solid rgb(204, 204, 204); margin-bottom: 6px;" cellpadding="0" cellspacing="0" width="240">
					<tbody>
						<tr>
							<td align="left" bgcolor="#eeeeee" height="25"><span style="font-size: 13px; font-weight: bold; color: rgb(102, 102, 102);"><img src="img/space.gif" height="16" width="5">資訊情報</span>
							</td>
						</tr>
						<?php if (isset($edm_info_list7)) { ?>
						<?php foreach ($edm_info_list7 as $value) { ?>
						<tr>
							<td align="left" height="26"><a href="<?php echo $value["edm_info_url"]; ?>" target="Newwindow" style="color: rgb(66, 127, 155); text-decoration: none;"> <?php echo $value["edm_info_title"]; ?></a>
							</td>
						</tr>
						<?php } ?>
						<?php } ?>
					</tbody>
				</table>
				<!--==============================& #26412;&#36913;&#20316;&#21697;&#31934;&#36984; start==============================-->
				<!--==============================A D end==============================-->
				<!--==============================& #36039;&#35338;&#24773;&#22577; start==============================-->
				<!--==============================& #36039;&#35338;&#24773;&#22577; end==============================-->
			</td>
		</tr>
	</tbody>
</table>
<table style="margin-top: 10px;" align="center" border="0" cellpadding="0" cellspacing="0" width="750">
	<tbody>
		<tr>
			<td background="img/copy_bg.gif">
				<table align="center" border="0" cellpadding="0" cellspacing="0" height="80" width="650">
					<tbody>
						<tr>
							<td align="right" width="220"><a href="http://tw.dcview.com/" target="_blank"><img src="img/logo_dcview_edm_f.gif" alt="DCView數位視野" border="0" height="80" width="207"></a>
							</td>
							<td width="25">
								<img src="img/l_02.gif" height="71" width="25">
							</td>
							<td style="font-size: 12px;"><a href="http://service.dcview.com" target="Newwindow" style="color: rgb(102, 102, 102);">服務說明與客服中心</a>
								<img src="img/l_01.gif" alt="l01" align="absmiddle" height="11" width="11"><a href="http://service.dcview.com/sales/" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">整合行銷服務</a>
								<img src="img/l_01.gif" alt="l01" align="absmiddle" height="11" width="11"><a href="http://service.dcview.com/qa_list.php?classid=6" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">行銷合作</a>
								<img src="img/l_01.gif" alt="l01" align="absmiddle" height="11" width="11"><a href="http://service.dcview.com/sales/advertisement.php" target="Newwindow" style="color: rgb(102, 102, 102); font-size: 12px;">廣告刊登</a>
								<br>
								<img src="img/copy.gif" alt="copy" height="38" width="331">
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<blockquote>
	<p id="Map" name="Map">
		<map name="Map" id="Map">
			<area shape="rect" coords="-1,2,233,72" href="http://www.dcview.com.tw/e_paper/epaper_list.htm" target="Newwindow" alt="DCView 數位視野">
		</map>
	</p>
</blockquote>
</body>
</html>