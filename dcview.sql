-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17-1~dotdeb.1 - (Debian)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dcview.tblArticle
DROP TABLE IF EXISTS `tblArticle`;
CREATE TABLE IF NOT EXISTS `tblArticle` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_account` varchar(20) NOT NULL,
  `user_nickname` varchar(20) NOT NULL,
  `sh_sub_category_id` int(10) unsigned NOT NULL,
  `article_status` int(10) unsigned NOT NULL DEFAULT '1',
  `article_title` varchar(128) DEFAULT NULL,
  `article_content` text,
  `article_sh_trade_status` int(10) unsigned NOT NULL,
  `article_sh_price` int(10) unsigned NOT NULL,
  `article_sh_area` int(10) unsigned NOT NULL,
  `article_email` varchar(254) DEFAULT NULL,
  `article_phone_number` char(10) DEFAULT NULL,
  `article_img_url1` varchar(2000) DEFAULT NULL,
  `article_img_url2` varchar(2000) DEFAULT NULL,
  `article_create_time` datetime NOT NULL,
  `article_update_time` datetime NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblArticle: ~100 rows (approximately)
DELETE FROM `tblArticle`;
/*!40000 ALTER TABLE `tblArticle` DISABLE KEYS */;
INSERT INTO `tblArticle` (`article_id`, `user_id`, `user_account`, `user_nickname`, `sh_sub_category_id`, `article_status`, `article_title`, `article_content`, `article_sh_trade_status`, `article_sh_price`, `article_sh_area`, `article_email`, `article_phone_number`, `article_img_url1`, `article_img_url2`, `article_create_time`, `article_update_time`) VALUES
	(1, 85, 'haytot', 'Kalamiku', 38, 1, 'CANON 遮光罩 ET EW ES', '01.EW-68A   EF 28-70 f3.5-5.6                              200                  \n02.EW-68B   EF 35-105 f4.5-5.6                             300                  \n03.EW-63B   EF 28 f1.8, EF 28-105 f3.5-4.5                 100                  \n04.EW-60B   EF 35-105 f4.5-5.6                             200                  \n05.ET-65III EF 85 f1.8, EF 100 f2.0 USM, EF 135 f2.8       400                  \n06.ET-86    EF 70-200 f2.8L IS                             300                  \n07.ET-54    EF 55-200 f4.5-5.6 II USM                      200                  \n08.ET-67    EF 100 f2.8 macro                              450                  \n09.ET-62II  EF 100-300 f5.6L                               450                  \n10.EW-75II  EF 20 f2.8 USM, EF 20-35 f2.8L                 450    \n\n量少  請來信詢問是否有貨', 1, 0, 2, 'kalamiku@gmail.com', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(2, 95, 'edward037', 'edward037', 10, 1, '售E-450', 'E-450雙鏡組(14-42、40-150)，盒單皆在，公司貨已過保，品相良好。\n配件有：相機包、兩顆原電、清潔組、保護鏡、充電器、記憶卡', 1, 5000, 1, 'edward037@yahoo.com.tw', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(3, 94, 'ppp8010101', '阿培培', 1, 1, '公司貨Canon EF 24-70mm F4 L IS USM ', 'Canon EF 24-70mm F4 L IS USM \n公司貨，白盒，配件都有，購買日期2013.4.20，保固18個月 \n5D3準焦，鏡頭、遮光罩、買來已貼鐵人膠帶無任何刮傷， \n地點桃園，預售價格23500。', 1, 23500, 1, 'ppp801010101@hotmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(4, 79, 'topguns', 'topguns', 1, 1, '全新 Canon EF 70-200mm f2.8L IS ll USM 彩虹公司貨 最新版銀盒', '全新 Canon EF 70-200mm f2.8L IS ll USM 彩虹公司貨\n只有打開檢視保卡\n保證未使用過！！', 1, 63500, 1, 'topguns0619@gmail.com', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(5, 80, 'goto', '後藤', 2, 1, 'Canon 16-35II F2.8 USM 彩虹公司貨 ', '售 EF 16-35L II  F2.8\n彩虹公司貨 、盒單全、外觀如新  \nUB鏡 新式中捏鏡頭蓋、2014/04買的、保固18個月\n用過一次而已、僅遮光罩有細微痕跡\n售4萬\n\n另有一片 B+W XS-PRO 82mm 超薄框UV \n全新品、公司貨、收納盒和外紙盒都完整\n含鏡頭一起買、廉售2000\n\n歡迎嘉義縣市看鏡、外縣市宅配免運費\n意洽 LINE ID : cloud8510', 1, 40000, 2, 'hdw869@yahoo.com.tw', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(6, 76, 'rockywang', 'rockywang', 0, 1, '出售canon EF 50 f1.8 II(近新品、公司貨未過保)', '出售canon EF 50 f1.8 II近新品少用置於防潮箱、盒單齊全、公司貨未過保(103/7/25過保)，附保護鏡\n\n歡迎新竹、桃園、中壢面交試鏡\n\n誠可小議，王先生 \n\nhttps://www.flickr.com/photos/rocky-wang/14371531970/\n\nhttps://www.flickr.com/photos/rocky-wang/14556609444/', 1, 2200, 1, 'rocky.wanghd@gmail.com', '0923286768', 'https://www.flickr.com/photos/rocky-wang/14371516530/', 'https://www.flickr.com/photos/rocky-wang/14371500690/', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(7, 58, 'versacehome', 'ykuohui', 0, 1, '婚紗銘機Fuji S5PRO DSLR一台(通用Nikon鏡頭及副廠鏡頭)', '售水貨盒單配件全,收藏的98%新燙K金飾件的收藏級 Fuji S5pro數位單眼一台(富士CCD發色婚紗愛用銘幾),快門數9700(機身內建可看到)\n\n如新圖https://www.flickr.com/photos/95068811@N08/14527635576/\n(目前應該也找不到我這台這樣新)!機身太新了!快門數只有9,700(相機內直接可看快門數與是否換過快門廉)!原廠電池幾新*1(機身內建可測為幾乎NEW),副廠電池也新*1,創見8G CF卡*1\n照片圖中https://www.flickr.com/photos/95068811@N08/14363990970/\n有裝市售近三千元的漢寶尼真皮義大利手挽帶如新,可含圖中橘色牛皮收納袋算您加購價1000元(送您一張8G CF卡),不買也可以!另外我還有原廠MB-D200垂直把手要賣!\n(此最後一台愛機(以前共有三台),所有資訊螢幕皆有過年後新貼高度防刮防汙梳水的最新5H硬度保護貼如新無刮痕)\n\n閃燈控燈系統是現在Fuji 微單所無法比的!發色爬文即知優於XT1XE2等富士新微單,F1b人像模式優於Canon,F2風景模式也與Nikon Vivi鮮豔模式不惶多讓!而且通用Nikon所有AF鏡頭(包括Sigma..等副廠)及手動老鏡皆可測光聯動!\n評論參考:\nhttp://www.mobile01.com/topicdetail.php?f=246&t=2909534&p=3\nhttp://mb618.pixnet.net/blog/post/82644567\nhttp://www.mobile01.com/topicdetail.php?f=246&t=3036916&m=s&s=17&r=2&last=39674797\nhttp://www.mobile01.com/topicdetail.php?f=246&t=312443&p=1\nhttp://www.mobile01.com/topicdetail.php?f=547&t=1448158\n溪湖彰化以北沿一高至台北皆可面交!\n\n[原作者於 2014/7/3 0:43:22 修改本留言內容]\n\n[原作者於 2014/7/3 0:46:41 修改本留言內容]', 1, 12500, 0, 'ak6ufc9e@yahoo.com.tw', '0972-376-9', 'https://www.flickr.com/photos/95068811@N08/14527635576/', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(8, 97, 'djdog311', '瞬間感動就是美', 7, 1, 'Nikon D7000+ Sigma 17-50 F2.8+ Sigma 50 F1.4+SB700', '全套設備出清\nD7000 + Sigma 17-50 + B+W XS-PRO 77mm 保護鏡 28000 不分售\n垂直手把 兩顆電池 快門線\n\nSigma 50MM F1.4 9000\nSB 7000 閃燈 附送 碗公遮光罩 9000\n\n全套一起帶 45000 \n\n歡迎面交 看機唷\n\nLine djdog311\n\n', 1, 45000, 2, 'inickliu@gmail.com', NULL, 'http://img.ruten.com.tw/s2/a/50/6a/21407021940842_549.jpg', 'http://img.ruten.com.tw/s2/a/50/6a/21407021940842_458.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(9, 40, 'adidsss', '日光午后', 2, 1, 'canon 7D公司貨，品項新', '公司貨，品項9.5新，快門數約26XXX張，緩慢增加中 \n盒單皆在，已過保固，有貼硬式螢幕保護貼 \n相機升級出售 \n19000即售 \n附贈sandisk 4G CF卡跟 SD轉CF高速轉接卡，讓你的7D可以用SD卡\n意者請來信 \n新竹市歡迎面交，本周末可台北面交 \n或line :adidsss', 1, 19000, 1, 'adidsss@gmail.com', '0915112875', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(10, 26, 'stephenjae', 'stephenjae', 40, 1, 'Manfrotto Tri Backpack M 3in1 斜肩後背包 M', '6月初入手，帶出門一次(一天不到)，跟新的沒啥兩樣\nKATA 3in1 22DL的後繼款\n\n覺得稍大故出售\n吊牌包裝袋該在的都在\n\n外長：25 cm\n外寬：25 cm\n外高：43 cm\n內長：16.5 cm\n內寬：20 cm\n內高：28 cm\n重量：1.03 kg\n\n台北面交佳 ', 1, 3800, 1, 'stephenjae@hotmail.com', NULL, 'https://dl.dropboxusercontent.com/u/105312420/DSCF0720_s.JPG', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(11, 8, 'lightingfury', '路亞小葵', 1, 1, 'CANON 580EX II 含配件全部', 'CANON 580EX II 一枚有使用痕跡，功能正常水貨過保。(09~10年購入盒單都不見了)\n環閃 RAY FLASH 580EX II 一個。(有盒，極輕微使用痕跡)\n原廠 SHOE  CORD2 一個+球型腳座。(離機線接腳有傷如圖不影響使用)\n離閃控制器 PAWN 一個如圖。\nJASDEN 碗公一個(黃+白罩 & 白+銀反光片)\n\n以上全部一起賣14000。再送一支燈架。\n因換系統要出清全部CANON部分，固不拆賣。\n\n照片連結\nhttps://drive.google.com/folderview?id=0Bw75qRWlpKxtc1lJNjFXWHFYYUE&usp=sharing\n.\n.\n\n[原作者於 2014/7/3 1:28:40 修改本留言內容]\n\n[原作者於 2014/7/3 1:30:43 修改本留言內容]', 1, 14000, 2, 'tyler.eye@gmail.com', NULL, 'http://i304.photobucket.com/albums/nn176/lightingfury/tyler_use/DSC_0672.jpg', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(12, 79, 'haytot', 'Kalamiku', 38, 1, 'CANON 遮光罩 ET EW ES', '11.ES-71II  EF 50 f1.4                                     450                  \n12.EW-83CII EF 17-35 f2.8L                                 550                  \n13.EW-83BII EF 28-70 f2.8L                                 550                  \n14.ET-83BII EF 200 f2.8L II                                650                  \n15.EW-83E   EF-S 10-22 f3.5-4.5 USM                        550                  \n16.EW-60C   EF-S 18-55 f3.5-5.6 IS                         250                  \n17.EW-60D   同上                                           250                  \n18.ET-60    EF 75-300 f4-5.6, EF 55-200 f4-5.6             300                  \n19.ET-74    EF 70-200 f4L USM                              550                  \n20.Canon Tripod Mount Ring B (B) || EF 100mm f2.8 L        500    \n\n量少 請來信詢問是否有貨', 1, 0, 2, 'kalamiku@gmail.com', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(13, 96, 'cola520cc', '綠茶多酚', 40, 1, 'LOWEPRO Pro Runner 350 AW', 'LOWEPRO Pro Runner 350 AW \n\n全新沒使用 \n\n台北桃園面交 其他可用 郵寄 ', 1, 2500, 1, 'delllg2013@gmail.com', NULL, 'https://farm8.staticflickr.com/7436/13057654384_40c52f16a5.jpg', NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(14, 87, 'achiou', 'achiou', 2, 1, 'Sigma AF 17-50mm f2.8 EX DC OS HSM (for canon)', '賣一顆 Sigma AF 17-50mm f2.8 EX DC OS HSM (for canon) \n\n恆伸公司貨，有盒有單，保固中，保固到2015年3月 \n\n有些入塵，但不影響成像 \n\n附原廠遮光罩及原廠鏡頭保護袋 \n\n賣12500元，宅配12600元 \n\n屏東市可面交，但要配合我的時間地點，其他地方用宅配的\n\n意者來信洽談：s8741024@gmail.com', 1, 12500, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/SmIsizqp5uK2nHvEaUDt5g--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/5fa5b296-2905-4fc3-bd47-100dc506fe8e.jpg', 'https://s.yimg.com/aw/api/res/1.2/Ncl8eOBESJ0ZmcMbLfcw0A--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/48218a6c-2c60-4218-8c12-4b72e1788b4b.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(15, 50, 'achiou', 'achiou', 33, 1, 'Kenko Pro 1D MC Protector(W) 67mm UV保護鏡(盒裝)', '賣一片 Kenko Pro 1D MC Protector(W) 67mm UV保護鏡 \n\n無刮傷，有盒裝 \n\n賣450元 郵寄500元 \n\n屏東市可面交，但要配合我的時間地點，其他地方用郵寄的 \n\n意者來信洽談：s8741024@gmail.com', 1, 450, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/Xht5K9Z32OsqEfIysPwJrQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/733d78d5-6026-45fa-bed8-a78ad2698f09.jpg', 'https://s.yimg.com/aw/api/res/1.2/_4dWw1499A.DA8PND1EIJA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/a3ec2457-1076-4fa1-aa75-1ea86b242dd2.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(16, 37, 'achiou', 'achiou', 2, 1, 'Canon EF-S 10-22mm f3.5-4.5 USM (有盒有單)', '賣 一顆 Canon EF-S 10-22mm f3.5-4.5 USM (有盒有單) \n\n有盒有單 平輸貨 \n\n附一個鏡頭袋 \n\n保持良好 \n\n賣13500元，宅配13600元 \n\n屏東市可面交，但要配合我的時間地點，其他地方用郵寄的 \n\n意者來信洽談：s8741024@gmail.com', 1, 13500, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/JV4sx6Ptwvq7ZLTfeK0_WA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/49a30c50-9f98-48a5-9bfc-9b431ffa7da0.jpg', 'https://s.yimg.com/aw/api/res/1.2/SwnZVxVdNv3int9I4d5T_g--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/c44369cb-a45a-493c-a697-b6c7a4b385af.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(17, 73, 'achiou', 'achiou', 2, 1, 'Canon EOS 60D (有盒有單)', '賣一台Canon EOS 60D 單機身 平輸貨 \n\n有盒有單 \n\n所有的東西：機身、保卡、原廠電池、原廠充電器、原廠背帶、AV線、 傳輸線、光碟、說明書 \n\n快門只有7000多而已 \n\n賣14500元，郵寄14600元 \n\n屏東市可面交，但要配合我的時間跟地點，其他地方用郵寄的\n\n意者來信洽談：s8741024@gmail.com', 1, 14500, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/UpLWB87S5xQg5w2QU8MXHA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/2efaa962-8d2d-4f7c-956c-b95d471fd664.jpg', 'https://s.yimg.com/aw/api/res/1.2/tnt8hehsWbEoPzzgRttCJA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/cffd9bf0-4c7c-4571-85c9-9d18ca616915.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(18, 85, 'laba7389175', '。阿。U。咪。', 33, 1, 'NiSi 95mm 超薄框UV保護鏡 雙面多層鍍膜 九昱公司貨', 'NiSi 95mm 超薄框UV保護鏡 雙面多層鍍膜 九昱公司貨\n\n外盒有使用痕跡 鏡片和全新的一樣 少用故出售\n\n捷運新莊站 面交\n\n郵寄80\n\n\n', 1, 1800, 1, NULL, '0989092072', 'https://farm6.staticflickr.com/5481/14372634590_58bd73c11c_o.jpg', 'https://farm6.staticflickr.com/5483/14579409463_8568319531_o.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(19, 56, 'tm776900', 'YungS', 2, 1, '售6D 24-105 70-200 50 1.4 YN560III ', '【物品內容】 1. Canon EOS 6D 公司貨\n　　　　　　　　　　　 2. Canon EF 24-105mm F4L IS USM 公司貨\n　　　　　　　　　　　 3. Canon EF 70-200mm F4L IS USM 平輸貨\n　　　　　　　　　　　 4. Canon EF 50mm f1.4 USM 公司貨\n                       5. YN-560III 閃光燈\n　　　　　　　　　　　 6. TOSHIBA 32GB綠卡 R95,W60\n【交易價格】 1. 43,000 NTD\n　　　　　　　　　　　 2. 16,000 NTD\n　　　　　　　　　　　 3. 32,000 NTD\n　　　　　　　　　　　 4. 9,500 NTD\n                      5. 1,500 NTD\n　　　　　　　　　　　 6. 700 NTD\n【詳細說明】\n1. 單鏡組彩盒公司貨(103/3/23購入)，保卡已寫資料跟註冊，\n快門不超過5000次(早上再查)，完好如新，CCD可能有小小黑點(有空再確認)，\n含彩盒、公司貨保卡等原廠完整配件，背帶完全沒有使用過，原廠電池X1 、副廠電池X3 (各使用一次而已)，\n贈送電子快門線、Toshiba 32GB R95,W60 綠卡以及當時花1500買的單槍腳架)。\n\n2. 白盒公司貨(102/07/30過保 UA鏡)，\n有白盒、公司貨保卡、B+W保護鏡 + B+W CPL(框有撞傷，但鏡片沒事)、鏡頭袋、遮光罩，\n鏡頭無發霉等問題，外觀良好。\n\n3. 彩盒平輸(相機王103/05/04購入 UB鏡)，\n有彩盒、店家保卡、鏡頭袋、B+W薄框保護鏡、遮光罩，\n鏡頭跟新的一樣...使用不到五次，也沒有網路上所傳的災情。\n\n4. 彩盒公司貨(2013/4/3購入)，有彩盒、公司貨保卡、副廠遮光罩，鏡頭如新，\n只有鏡頭蓋有摩擦過痕跡，自動/手動對焦都沒問題。\n\n5. YN-560III 已過保，燈頭無變黃，有盒、底座，肥皂盒搞丟了。\n\n6. 公司貨保固內，只是外盒丟了，把備用的售出..只有用過一次。\n\n【交易地區】 台北捷運系統(市政府-後山埤)，其餘地區站內信談，\n若要宅配/寄送 +120 運費 (依大小、重量)。\n\n請直接E-mail來信。', 1, 102700, 1, 'tm776900@hotmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(20, 57, 'wenson0218', 'hello茶米茶', 8, 1, '清nikon（D600/N50/1.8G/N24-85/2.8-4D）', 'D600=38500（快門1千↑↓）\nN50/1.8G=4500\nN24-85/2.8-4D=11000（序號57xxxxx）\n\n以上都公司貨盒單完整，品項約9成新↗\n\n一起帶走可小議，"機身+鏡頭"優先售\n\n\n\n[原作者於 2014/7/2 22:17:59 修改本留言內容]', 1, 38500, 0, 'two0218@yahoo.com.tw', NULL, 'http://140.111.81.5/~two/sell/D600-1.jpg', 'http://140.111.81.5/~two/sell/D600-2.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(21, 41, 'djdog311', '瞬間感動就是美', 0, 1, 'SB 7000 閃燈 附送 碗公遮光罩 9000 ', 'SB 7000 閃燈 附送 碗公遮光罩 9000 \n\nline djdog311', 1, 9000, 0, 'inickiu@gmail.com', '0935391908', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(22, 10, 'achiou', 'achiou', 8, 1, 'Nikon D90+18-105mm VR 防震頂級組(公司貨，有盒有單)', '賣 Nikon D90+18-105mm VR 防震頂級組(公司貨)  \n\n有盒有單  \n\n全部的東西有：盒子、D90機身、18-105mm VR 鏡頭、原廠電池、原廠充電器、原廠背帶(全新) 、色差線(全新)、傳輸線、保單、說明書、光碟   \n\n附一個保護鏡  \n\n賣13800元，郵寄13900元 \n\n屏東市可面交，但要配合我的時間跟地點，其他地方用郵寄的 \n\n意者來信洽談：s8741024@gmail.com', 1, 13800, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/SIe77AmemAm4du8Fisbepw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/f07a21cf-2419-4af7-b9d4-5b346ffb1701.jpg', 'https://s.yimg.com/aw/api/res/1.2/_xE0VU4Q5uZMfIji3S1JNw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/25779709-f6e1-4a52-a43c-c51595b58f05.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(23, 38, 'achiou', 'achiou', 8, 1, 'Nikon D80+18-105mm VR', '賣 Nikon D80+18-105mm VR 平輸貨 \n\n機身有盒有單，鏡頭無盒無單，機身缺機身蓋  \n\n全部的東西如圖有：d80機身、d80盒子、18-105mm VR 鏡頭、副廠電池、原廠充電器、機身保單、說明書 \n\n另附一條快門線    \n\n賣11000元，郵寄11100元 \n\n屏東市可面交，但要配合我的時間跟地點，其他地方用郵寄的\n\n意者來信洽談：s8741024@gmail.com', 1, 11000, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/_JvNWuDuUQQ_aqokYmhvcg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/08dc264e-e7ff-4f35-8203-f72bc50dc9ef.jpg', 'https://s.yimg.com/aw/api/res/1.2/NYfctwqkOWdqTPmVOc_7bQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/728a5183-3917-4c51-880e-c3c34820e086.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(24, 11, 'hongtek', '跳tone不插電', 7, 1, 'Nikon AF-S 16-35 F4/G ED VR 平輸', 'Nikon AF-S 16-35mm F4/G ED VR 水貨過保,盒單、配件全，\n101年6月購入，含保護鏡，平時放防潮箱，外觀新，台中可面交!\n\n[原作者於 2014/7/3 0:11:49 修改本留言內容]', 1, 29000, 2, 'mororugn@gmail.com', NULL, 'http://i.imgur.com/SuLWQqy.jpg', 'http://i.imgur.com/E4HqsAY.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(25, 4, '0927449926', '0927449926', 0, 1, 'CANON 16-35MM 16-35 彩虹公司貨', 'CANON 16-35MM 16-35 彩虹公司貨\n盒單 配件都在\n年分UY\n正常使用痕跡 無重大傷痕 歡迎面交試鏡\n\n台北 桃園 宜蘭 可面交\n0982296356\nbeat_boy_style@hotmail.com', 1, 36000, 1, 'beat_boy_style@hotmail.com', '0982296356', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(26, 10, 'gn00498167', '我好壞', 8, 1, '徵N24-70/2.8 公水不拘', '希望有UV\n高雄屏東可面交\n有意願者請來信 最好附上照片及購買日期\n並且說明欲售價位\ntt20431@yahoo.com.tw\n\n[原作者於 2014/7/3 1:27:31 修改本留言內容]', 2, 0, 3, 'tt20431@yahoo.com.tw', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(27, 68, 's0920117', '鬼束旭', 8, 1, 'NIKON D7000 單機身 國祥公司貨 快門數13700 品相新穎！', '此機為國祥公司貨，100年8月購入，保固至101年8月已經過保，\n\n快門數實測13700，機身外觀品相新穎，蒙皮完整，\n\n僅觀景窗上方有一處小刮傷(圖2)。\n\n\n\n\n所附配件計有：\n\nD7000單機身、原廠電池、原廠充電器、原廠背帶、傳輸線、AV傳輸線、光碟、保證書、完整盒裝。\n\n\n\n高雄市面交地點：高雄市三民區覺民路238號(236巷口)的7-11\n\n(236巷在民孝路與民豐路中間地段)\n\n聯絡電話：0986924577，敝姓林。\n\n若有疑問請盡量來電或用MAIL聯絡！\n\n外縣市的朋友若有興趣，也可以到我的奇摩賣場或露天賣場參考看看！直接搜尋『FREE&SOUL 3C』即可找到我的賣場^^\n\n露天賣場可直接連結：http://class.ruten.com.tw/user/index00.php?s=ss0920117 ', 1, 16000, 3, 's0920117@yahoo.com.tw', '0986924577', 'https://s.yimg.com/aw/api/res/1.2/zutLxSR2lAVw7NH967w8tw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MjQ7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/ee603303-9f78-4f03-a24a-88940c3a3ef2.jpg', 'https://s.yimg.com/aw/api/res/1.2/mv1jZ7YwKcNVT5es4xysuQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MjQ7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/7e0bddb5-fd28-4781-a2c2-2fea099b31b8.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(28, 82, 'fdxkuoqp', '阿男馬克杯', 7, 1, 'Nikon鏡頭出租 14mm, 16mm, 17-35mm, 20-35mm, 35mm, 85mm', '出租\nSigma 14mm f/3.5\nTamron SP AF 14mm f/2.8\nZenitar 16mm f/2.8 MC Fisheye\nNikon AF-S 17-35mm f/2.8D ED-IF \nNikon 20-35mm f/2.8D\nSigma 35mm F1.4 DG HSM Art\nNikon AF-S 85mm f/1.4G\n\n詳見連結 https://flic.kr/p/obumLT', 1, 250, 3, 'markcup.cs96g@g2.nctu.edu.tw', '0911160310', 'https://farm3.staticflickr.com/2909/14558546875_3063c40acc_z.jpg', NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(29, 69, 'achiou', 'achiou', 2, 1, 'Canon EOS 500D(有盒有單)', '賣一台 Canon EOS 500D 平輸貨 \n\n有盒有單 \n\n配件有：原廠充電器、二顆電池(一原廠一副廠)、原廠60d背帶、av線、說明書 \n\n賣5500元，郵寄5600元 \n\n屏東市可面交，但要配合我時間地點，其他地方用郵寄的 \n\n意者來信洽談：s8741024@gmail.com', 1, 5500, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/SEp_F0bEJkI586HPclC1HQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/2e145020-56c4-4d39-bb94-96a29b0f32de.jpg', 'https://s.yimg.com/aw/api/res/1.2/EqMNujj_cb57esW8lQftxg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/fe9da8b2-1111-4df9-93ff-855bc03f3a4b.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(30, 44, 'achiou', 'achiou', 2, 1, 'Canon EF-S 17-85mm f4-5.6 IS USM', '賣一顆Canon EF-S 17-85mm f4-5.6 IS USM \n\n無盒無單 \n\n功能正常，有一小霉絲，不影響成像，如圖二 \n\n賣4000元，宅配4100元 \n\n屏東市可面交，但要配合我的時間，其他地方用宅配\n\n意者來信洽談：s8741024@gmail.com', 1, 4000, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/xiVgNzCt1oFthAOEYREv9w--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/d89df705-eea4-432a-b40f-f1574246878b.jpg', 'https://s.yimg.com/aw/api/res/1.2/8udTnmVEn4e1xDUEjxt_Mw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/7c29d396-6b19-4f4a-a9f5-fb55a20d42b2.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(31, 73, 'aluks021358', '松鼠@@', 8, 1, '[高雄售]NIKON D7000、T11-16mm、50mm f1.8、16-85mm', '出清防潮箱!!\n\nNIKON D7000: $16500\n過保九成新公司貨，盒書配件皆在，背帶&線材未使用，附內閃柔光罩組，原廠遙控器，快門數9908\n\nNIKON 50mm F1.8G: $5500\n全新公司貨，今年4月購買，盒書遮光罩鏡頭袋皆在\n\nNIKON 16-85mm VR: $14000\n九成新拆鏡公司貨，盒書遮光罩鏡頭袋皆在，附Hoya uv保護鏡，2013.9月購買\n\nTOKINA T11-16MM F2.8 一代: $13000\n九成新公司貨，盒書遮光罩齊全，附MARUMI CPL & B+W 保護鏡\n\n\n高雄地區歡迎相約面交，平時上班不方便接電話，用LINE聯絡較方便 感謝\nLINE ID : ALUKS\n\n[原作者於 2014/7/3 0:44:14 修改本留言內容]', 1, 99999, 3, NULL, '0981055199', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(32, 80, 'jis280', 'jis280', 8, 1, 'Nikon 18-70mm F3.5-4.5G ED', '外觀8成新~無盒單~\n\n功能完好~原廠前後蓋~\n\n無保護鏡~', 1, 3600, 2, 'lin12281012@yahoo.com.tw', '0973470000', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(33, 45, 'wan516888', 'wan516888', 0, 1, '售NIKKOR 10-24mm 鏡頭 AF-S DX　f/3.5-4.5G ED', '代友出售\n1.NIKKOR LENS　10-24mm 鏡頭 AF-S DX　f/3.5-4.5G ED  NT15000\n無盒無單.鏡頭保養如新無刮傷.無入塵 限桃竹苗區面交試鏡\nline id: wan516888line\n聯絡電話 0931-516588(上班中如未接來電請先line或簡訊)\n王先生', 1, 15000, 1, 'wan516888@yahoo.com.tw', '0931516588', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(34, 69, 'm21617', 'wesnboy', 8, 1, 'TOKINA 12-24mm F4 PRO DX II FOR NIKON (T124 2代鏡)', 'TOKINA 12-24mm F4 II FOR NIKON (T124 2代鏡)\n\n鏡身整體無刮傷9成9新，鏡面無刮傷、無發霉，常駐防潮箱，僅鏡頭蓋字體金漆有使用痕跡。\n\n整體品相如新。 \n\n附含配件包括有： \n\nT124 II鏡頭、遮光罩、鏡身前後蓋、原廠保證書、完整盒裝、購買收據。 \n\n購於102/03/09過保\n\n歡迎約看鏡，電洽莊先生\nLine:ChuangDean', 1, 10000, 2, 'm21617@hotmail.com', '0928232196', 'https://www.facebook.com/weisheng.zhuang/media_set?set=a.10201297970130328.1073741871.1804822542&type=3', 'https://www.facebook.com/photo.php?fbid=3945027283175&set=a.2408939081930.86950.1804822542&type=3&theater', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(35, 52, 'sim4000', 'sim4000', 14, 1, 'SONY 35mm F2.8 ZA', '【物品內容】 SONY FE 35mm F2.8 Zeiss ZA 公司貨\n\n【詳細說明】 公司貨 盒單俱在 附 Kenko PRO1D保護鏡\n\n                    品項良好 保固至 2016/01/16 FE & NEX皆可使用\n\n【交易地區】 台北 東門、忠孝新生等沿線\n\n實拍分享：http://blog.xuite.net/sim3000/wretch/198400462\n\n【聯絡方式】 simer3000小老鼠yahoo.com.tw 或 Line  0911-322383', 1, 16800, 1, NULL, '0911-32238', 'https://farm4.staticflickr.com/3836/14354184627_34fde16108_z.jpg', 'https://farm6.staticflickr.com/5491/14507536403_5de1ed0b7e_z.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(36, 58, 'lengcoyod', '禾火楓', 1, 1, 'EF 35mm f/2 公司貨', 'EF 35mm f/2 公司貨\n已過保，有盒有單\n保護鏡NISI DW1 WIDE BAND PRO MC UV\n外觀如照片，有擦到一點\n\n[原作者於 2014/7/2 22:34:55 修改本留言內容]\n\n[原作者於 2014/7/2 22:35:24 修改本留言內容]', 1, 6500, 2, 'lengcoyo@gmail.com', NULL, 'https://lh3.googleusercontent.com/-aLo1F-nbOY4/U7QUHfg10II/AAAAAAAACZA/saj8eLwxYok/s600/IMG_5652.jpg', 'https://lh4.googleusercontent.com/-1dWQ2SvkQVw/U7QUHXGC0sI/AAAAAAAACZE/XjU7IlQczN8/s600/IMG_5657.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(37, 90, 'waterv', 'waterv', 12, 1, '售廣角鏡-Pentax DA14mm--f2.8', '售：DA14mm -f2.8\n說明：億華過保、鏡片無傷無霉霧！正常使用痕跡，無故障。\n配件：外盒，前後蓋，遮光罩，四星芒保護鏡\n售價：13000\n-中部歡迎約試鏡，運費-另計！貴重物品建議面交，必免爭議寄送無退！感謝', 1, 13000, 2, 'watervwaterv@yahoo.com.tw', NULL, 'https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-xap1/t1.0-0/10250070_1420704848208401_7868525431523599251_n.jpg', 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-xap1/t1.0-0/10415582_1420704741541745_5474844504261187166_n.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(38, 85, 'andyk7', 'andyk7', 4, 1, '售(KIPON) CANON EF轉Fuji X轉接環', '售(KIPON)CANON EF轉Fuji X轉接環~有光圈環~\n\n沒有CANON鏡頭了,故售出~~\n\n平日景美木柵公館新店面交,晚上和假日三重新莊板橋\n\n只能接EF\n\n', 1, 2700, 1, NULL, '0955131514', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(39, 18, 'versacehome', 'ykuohui', 10, 1, 'Olympus 夜之眼 OM  55/f1.2 &#40060;&#40158;焦外散景銘鏡(For C,N家)', '售Olympus 夜之眼 OM G.Zuiko Auto-S 55/1.2 &#40060;&#40158;焦外散景銘鏡\n(附晶片轉接環Canon可用,另有Nikon版)\n\n90%如新,含金屬遮光罩,原廠前後蓋,金屬遮光罩上蓋及Canon 後蓋,OM-EOS晶片對焦金屬環,及B+W 55mm MRC UV,日本製!\n\n鏡頭照片:https://www.flickr.com/photos/95068811@N08/14364183617/in/photostream/\n\n這顆稀有55mm/f1.2大光圈,拍人唯美,尤以魚鱗散景著稱!目前為止我有3支OM 的F1.2， 55/1.2， 50/1.2, 42/1.2， 42/1.2 剛到手中未試過. 55/1.2 拍過似乎比50/1.2 好, 原因: 1.OM 55/1.2 有明顯特殊的魚鱗散景; 2.OM 55/1.2 全開沒有紫邊; 3.55/1.2 全開感覺銳利較OM 50/1.2多,其他評論參考:\nhttps://www.ptt.cc/bbs/DSLR/M.1291881302.A.E95.html\nhttp://ce.sysu.edu.cn/hope2008/beautydesign/ShowArticle.asp?ArticleID=9808\n\n\n[原作者於 2014/7/3 0:17:29 修改本留言內容]', 1, 13000, 0, 'ak6ufc9e@yahoo.com.tw', '0972-376-9', 'https://www.flickr.com/photos/95068811@N08/14364183617/in/photostream/', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(40, 45, 'versacehome', 'ykuohui', 33, 1, '收藏級幾新的愛展能姐妹鏡28-70/f2.6-2.8 For Canon ,盒裝30年紀念版', '售99%NEW-新加玻30週年限量紀念版難得一見的愛展能姐妹鏡Canon EF 自動對焦用28-70/f26-2.8全套(含原廠Tokina(合併法國愛展能電影名鏡28-70/f2.6-2.8後所生產一模一樣的30週年紀念鏡),原廠收藏皮盒,原廠前後蓋及遮光罩(沒用過),B+W 77mm MRC UV)\n這支1995年八月可自動對焦的非環保鏡片含鉛,業界號稱『愛展能姐妹鏡』(與超高價>6萬的愛展能28-70/f2.6-2.8表現一模一樣(Tokina收購後改名生產),故得此姊妹鏡盛名),尤其少見內對焦設計更不易入塵！ \n整支全金屬頂級質感99%新,異於後來很差的第二版後的系列鏡頭喔!\n鏡頭照片https://www.flickr.com/photos/95068811@N08/12814942275/\nhttps://www.flickr.com/photos/95068811@N08/12814942275/\n台北沿一高至彰化溪湖皆可面交,嘉義地區或宜蘭地區要看排時間！\n\n\n[原作者於 2014/7/3 1:16:11 修改本留言內容]', 1, 15000, 0, 'ak6ufc9e@yahoo.com.tw', '0972-376-9', 'https://www.flickr.com/photos/95068811@N08/12814942275/', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(41, 22, 'chan20020617', 'donotcry', 26, 1, 'RICOH GR (相機王平輸，保固至2014年底)', '代友出售\n\n12/26相機王購入，平輸，相機王店保一年。 \n使用一切正常，外觀新，螢幕有貼保護膜，快門數3XXX。 \n完整盒裝，原電＋充電頭＋傳輸線， 手工皮製手腕帶。 \n\n可用品項良好的GRD3交換，歡迎面交試機。\n\n[原作者於 2014/7/3 2:48:25 修改本留言內容]', 1, 15000, 1, 'chan20020617@gmail.com', '0975090949', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(42, 97, 'grass', 'grass', 24, 1, 'Panasonic GF1(粉紅) + 14-42mm鏡頭..', 'Panasonic GF1(粉紅) + 14-42mm鏡頭..\n機身為粉紅色..繁體中文機..\n約95成新..無碰撞傷..盒子配件都在..\n含14-42mm鏡頭一顆..有保護鏡..\n售NT:4600..議價無誠勿擾..\n購買請自取面交..', 1, 4600, 2, NULL, '0938-61210', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(43, 9, 'azrael107', 'Aazrael', 1, 1, 'Canon 550D+SIGMA 18-200 mm (可拆賣 600D.70D)', '550D公司貨過保,相機快門數18xxx,平時不用時都會放防潮箱,外觀正常,蒙皮無脫落,歡迎試拍看看 \n\nSIGMA 18-200 mm F3.5-6.3 DC OS HSM公司貨過保(附Marumi保護鏡與遮光罩)\n\n相機跟鏡頭的盒子保證書全部都還在 \n高單價物品請當面試用檢查 \n\n此金額含550D機身、SIGMA 18-200 mm旅遊鏡(附Marumi保護鏡與遮光罩)、手把電池(兩種電池模式)、閃燈柔光罩(熱靴型)、電池兩顆(一原一副)、快門線(無定時功能)、紅外線遙控器、基本清潔組一組,東西都很新 \n\n此搭配不管一般出遊或出國皆可一鏡到底,不用鏡頭換來換去的,非常方便,適合新手入門,因為升級全幅相機,故出售,以上誠可議 \n\n白天因上班關係請傳訊息給我,我會回覆你訊息 \n下午5點過後都會接電話,謝謝\n\n物品可拆賣\n單機身 7500元\n鏡頭 8000元', 1, 15000, 3, 'azrael0107@hotmail.com.tw', '0972322921', 'http://attach4.mobile01.com/mp/2/2086052/58ee6b2f7dd833315fdecf888cfe2c6c.jpg', 'http://attach4.mobile01.com/mp/2/2086052/aae50111c66480c297a8f3a480ea39c9.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(44, 74, 'freewillxlover', 'freewillxlover', 8, 1, 'Nikon AF 35mm F2D 公司貨', 'Nikon 35mm F2D，2012年過保公司貨，用不到3次，幾乎全新，長住防潮箱，盒裝單據完整，新莊可自取或相約台北火車站捷運站附近面交，意者可參考我在Y拍或露天同步拍賣的照片', 1, 7500, 1, 'jimmy.imei@msa.hinet.net', '0910926600', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(45, 23, 'aaron06210606', 'aaron0621', 2, 1, 'Canon EF 24-70mm f/2.8L II USM。公司貨', '2014/4月份購買新款鏡頭，有圖片\n\n購買時已註冊，所以有18個月保固\n\n保固期至2015/10月份\n\n買來時請人貼了鐵人膠帶\n\n所以附件都在\n\n只有遮光罩不在，購買當天送朋友用\n\n假設你對鏡頭有很高的標準，相信我，這一定是你的首選\n\n只面交喔，要是偏遠地區，你要寄送，只要錢來 我也可以\n\n面交的地點為台北市，新北市，地點方便也可以\n\n也可以來我公司交面(台北市安和路)\n\n信箱：aaron06210606@gmail.com\nline：aaron06210606\n\n也可以來信交換商品\n\n只貼換Canon EF 50mm F1.2 L USM。公司貨或水貨\n但是年份不能太久，能保固期是最好', 1, 58888, 1, 'aaron06210606@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(46, 22, 'mis950014', 'ken0722', 9, 1, 'Olympus 12-40mm F2.8公司貨 ', 'Olympus 12-40mm f2.8 公司貨 拆鏡 2014.4.2購買已上網註冊保固兩年\n\n少用常住防潮箱...因比較習慣使用定焦鏡故出售\n\n有單..無盒...鏡頭蓋有小小痕跡如圖...近全新\n\n附 kenko pro01 D 保護鏡 原廠遮光罩\n\n捷運站面交\n\nhttp://www.mobile01.com/mpitemdetail.php?id=1041440', 1, 23000, 1, 'guest00787@yahoo.com.tw', '0970202508', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(47, 11, 'bill8211082222', 'hsiaoap', 7, 1, 'Nikon AF 300mm F4(非af-s)', '鏡頭裝況良好\n無盒單\n所有配件就原廠前鏡頭套、後蓋\n有內建濾鏡\n有需要照片請email\n彰化嘉義可面交', 1, 15000, 3, 'bill8211082222@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(48, 85, 'legend0924', 'Legend睿', 2, 1, '徵 腳架 跟  Tokina 12-24mm F4 T124', '徵t12-24\n\n預算約 5500~6000\n\n地點台南or高雄\n\n\n徵 三腳架  (不要244b)\n\n易收納收和長度約45左右(放機車用..)\n\n球型雲台佳\n\n預算1000~2000\n\n', 2, 0, 3, 'legend0924@yahoo.com.tw', '0926277552', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(49, 16, 'izgg', '阿冰', 1, 1, 'Sigma 35mm F1.4 DG HSM for CANON 人像鏡 恆伸公司貨', '恆伸公司貨 買了之後很少用到 不習慣此鏡頭售出\n\n前後玉、鏡頭完美無任何刮傷 像新的一樣\n\n原裝盒子、鏡頭袋、遮光罩、保證卡、售後服務保證書、說明書皆在，保存良好。\n\n另送HOYA多層鍍膜UV保護鏡\n\n貴重物品建議當面購買  台南市北區可面交', 1, 21000, 3, 'izgg1@hotmail.com', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(50, 20, 'lololala0914', '溺水的鯨魚', 0, 1, '售CANON 70-200mm F4 L IS 小小白 公司貨', '【預售物品】CANON 小小白 70-200mm F4 L IS USM 公司貨 UZ鏡 \n【購買日期】100年7月26日 \n【面交地點】雲林、嘉義 \n【交易價格】26000元(含運) \n【附屬配件】遮光罩、前後鏡頭蓋 \n【交易方式】面交或宅配、郵寄 \n【聯絡方式】0985695914 黃先生 \n【備　　註】外觀9成5新、無摔、無入塵、保存良好、贈腳架環 \n\n[原作者於 2014/7/2 23:28:3 修改本留言內容]', 1, 26000, 2, 'lololala0914@yahoo.com.tw', '0985695914', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(51, 57, 'qq29011160', '29011160', 2, 1, '售35L UZ公司貨', '35L\nUZ公司貨 盒單在\n附信乃達保護鏡\n可來信 ', 1, 29000, 2, 'qq29011160@hotmail.com', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(52, 19, 'k_schumacher12', 'Kschumi12', 14, 1, '徵 a65', '徵 a65\n\n預算7~8000 (與a57相同預算)\n\n地區 桃園或雙北\n\n可line  k_schumi12', 2, 8000, 1, 'k_schumachetr12@hotmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(53, 26, 'versacehome', 'ykuohui', 0, 1, 'Nikon AI 50/f1.4 手動鏡C家及微單可轉用', '售Nikon AI 50/f1.4 手動鏡可轉接於Canon更利於C家對焦精準實用\n \n雙高斯結構發色漂亮,成像值量優異, 最新的AFs50/1.4G號稱全新開發的光學系&#32479;，其實到目前，還&#27809;有一只大光圈標頭能脫離&#21452;高斯結構，AFs 50/1.4G只是後&#38236;&#32452;再分出一片，修正一&#28857;离&#36724;慧差，包括50/1.8G至多稱改進。不過N家的G鏡只有銳利特色!散景較平,並無以往手動老&#38236;有發色佳,色階散景綿密有層次..等優點,且老&#38236;多為純光學玻璃鏡片保存度數十年以上遠較AF的G&#38236;來的耐久與保值,而此&#38236;AI 50/1.4K,在微單時代來臨輕巧小巧更適合可接Fuji,Sony..等微型單眼相機系統,一&#38236;多系統通用是將來潮流!\n\n品像很新如圖其他照片https://www.flickr.com/photos/95068811@N08/13715921383/ ,前後玉無傷均功能均正常,含原廠前後蓋及贈Nikon原廠HR-1軟式伸縮遮光罩,含HOYA JAPAN UV售5000(如果配圖中的B+W MRC UV是$5500)\nCanon用家可加購薄薄的Nikon-EOS金屬轉接環,讓您通用各種N家優值名&#38236;! 如果您嫌EF 50/1.4馬達會常壞,S50/1.4太大又重,又有多系統共用鏡需求,這顆發色異於Canon EF 50/1.4及Nikon Af 50/1.4D(或G鏡)的鏡頭,更小巧C/P更高! 可轉接於M4/3變成100mm人像&#38236;,亦可轉接於富士XE2..及Sony A7微單眼相機\n溪湖彰化以北沿一高至台北皆可面交!', 1, 5000, 0, 'ak6ufc9e@yahoo.com.tw', '0972-376-9', 'https://www.flickr.com/photos/95068811@N08/13715921383/', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(54, 37, 'lightingfury', '路亞小葵', 32, 1, '電動背景，寬2.72公尺含四支背景紙(11公尺長)，含四支橫桿鋁管', '電動遙控背景，寬度2.72M，220V，因網拍需求，整組當初購入價格將近三萬。\n因家中寬度不夠，背景下來以後左右無法架燈。另購入1.36米背景組後用不到故出售。\nSuperior 背景紙 2.72mx11m 四支 (白色用掉約3米，去背藍幕未使用，紅黑只測試過)。\n四支三節式背景橫桿鋁管(單支長3M三節)。', 1, 22000, 2, 'tyler.eye@gmail.com', NULL, 'http://i304.photobucket.com/albums/nn176/lightingfury/tyler_use/10482130_827576497254755_330665637_o.jpg', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(55, 52, 'hi1592002', '1155998877', 1, 1, 'canon 24-70  一代美品', '如題\n\n水貨，盒單都在，配件都在(鏡頭前後蓋&遮光罩\n\nuz鏡(一代最新年份\n\n高雄面交，外縣市郵寄\n\n有問題歡迎來信 3Q~', 1, 30000, 0, 'hi1592002@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(56, 48, 'sonychou', 'littlefacebook', 35, 1, 'Metz 50AF for nikon 閃光燈', 'Metz 50AF for nikon 閃光燈 億華水貨 只帶出門極少用 \n\n有包包的正常磨痕  功能正常 有單無盒 附PDA檔說明書 及柔光罩', 1, 4800, 1, 'sonygermini@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(57, 100, 'jojocccc', 'jojocccc', 2, 1, '全新Canon EF 24-70mm F4 L IS USM白盒公司貨', '為全新公司貨.... \n我會先登錄保固,發票不隨付.... \n保固你跟我購買之日起開始18個月... \n\n忠孝復興站.頂好市場面交... ', 1, 25500, 1, 'gcri3388@ms33.hinet.net', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(58, 58, 'zipthiskimo', 'JohnKao0409', 1, 1, '自售 CANON 24-105mm 拆鏡平輸 九成新 含遮光罩、保護鏡、鏡頭套、保固卡', '\n\n品名：CANON EF 24-105mm鏡頭 F4 L IS USM 平輸 過保 \n購買日期：2013.01.18\n購買地點：相機王（忠孝店）\n製造日期：2012.09.28\n鏡頭外觀：約九成新，使用完皆有擦拭保養並放置防潮箱避免受潮，因很愛惜物品，整體上都保養得很好。\n可面交地點：景美、木柵、新店\n\n24 mm-105 mm 是一款適合一鏡到底的人出遊使用的旅遊鏡，\n不管是近拍或遠攝都很適合歐！！\n\n小弟因工作繁忙的關係，使用頻率逐漸降低，期待有緣人將它帶回家~\n\n聯絡方式如下：\n聯絡電話：0929667655\n聯絡時間：am 9:00 - pm 9:00 \n聯絡人：高先生\n\n如有任何疑問可來電詢問(請顯示號碼) 或留言，小弟看到會立即回覆您，\n感謝您！\n\n包含:日本Marumi保護鏡(77mm) + 遮光罩 + 鏡頭套 + 相機王保固卡 (已過保)\nhttp://goods.ruten.com.tw/item/show?21406228404058#auc', 1, 16000, 1, 'zipthiskimo@msn.com', '0929667655', 'http://img.ruten.com.tw/s2/d/e7/5a/21406228404058_732.jpg', 'http://img.ruten.com.tw/s2/d/e7/5a/21406228404058_318.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(59, 8, 'mg98741', 'mg98741', 23, 1, 'Panasonic M43 20mm F1.7 鏡頭', 'GF1 拆機，無盒過保\n\n無入塵，正常使用痕跡\n\n附保護鏡，前後鏡頭蓋', 1, 0, 1, 'mg98741@gmail.com', '0921875679', 'http://www.turboimagehost.com/p/19286994/P1110191-1400.jpg.html', 'http://www.turboimagehost.com/p/19286995/P1110196-1400.jpg.html', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(60, 18, 'zombie777', 'ZOMBIE7', 2, 1, '公司貨 小白兔 70-200LII ', '鏡身近新 盒單在 保單沒押日期 過保約一年 鏡頭是沒年代的版本 \n\n含B+W保護鏡  \n\n85LII 或 135F2 可貼換 感謝\n\n台北東區 南區交易 林先生\n\n[原作者於 2014/7/2 22:36:42 修改本留言內容]', 1, 56000, 1, 'jhihyuan.lin@gmail.com', '0983-470-3', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(61, 92, 'soulens', 'soulens', 26, 1, 'Ricoh GRD II / GRD2 公司貨', 'Ricoh GRD II / GRD2 公司貨 拍攝張數22K多\n正常使用痕跡，外觀九成新；無摔無傷、皮革處有使用痕跡無掉皮掉漆。\n盒單齊全、功能正常，附原電、原廠座充、原廠GRD皮套(八成新有使用痕跡)、手腕帶\n\n台北市、中壢市可面交。\n\n[原作者於 2014/7/2 23:35:38 修改本留言內容]', 1, 2800, 1, 'mmariolandtw@yahoo.com.tw', NULL, 'http://i.imgur.com/eesrOhA.jpg', 'http://i.imgur.com/tLoSCRd.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(62, 29, 'crv1668', 'crv1668', 8, 1, 'NIKON D600 保內公司貨', '售NIKON D600 公司貨序號8039開頭\n有換過一次快門，現快門數為22XX\n機身只在室內拍照，近全新狀態\n因國祥作業的關系，機身的保固到104年的4月\n配件齊全，另原電二顆，SCANDISK 32G記憶卡二張\n背帶和螢幕蓋未使用\n機身終身清CCD免費，且為保固內的公司貨\n不議價,可接受出售的價格再來信留MAIL或電話\n中部地區看機試機', 1, 38000, 2, 'crv1668@yahoo.com.tw', NULL, NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(63, 30, 'andyisjohnsonaudio', '安迪強森', 33, 1, '出售一片馬路米( MARUMI )77mm 薄框保護鏡 DHG', '出售一片馬路米( MARUMI )77mm DHG 薄框UV保護鏡 ,適合口徑77mm鏡頭.少用品相極新!!敝姓張：我在板橋,可相約捷運府中站面交.', 1, 600, 1, NULL, '0988297792', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(64, 82, 'luvince1201', 'luvince1201', 10, 1, 'Olympus E-M1 拆機 單機身 EM1', '今年2/28北京購入，已註冊中國olympus 2年保固＋1年額外店家保固。出動約1﹣2次拍小朋友活動，快門應該只增加2、300張而已，基本上還是新機。常來往兩岸的人很痕划算喔！中國維修點如下：http://olympus-imaging.cn/support/maintainnet.php，或送香港、日本也有國際保固。台北市可約面交。', 1, 28000, 1, 'luvince1201@yahoo.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(65, 79, 'hi1592002', '1155998877', 1, 1, 'simga 50 1.4', '如題(for canon\n\n盒單都在，保固還有一年\n\n遮光罩遺失(反應在售價上\n\n品項新\n\n有問題歡迎來信', 1, 8000, 0, 'hi1592002@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(66, 28, 'corey624', 'Jwuu', 4, 1, '全新Zeiss Touit 32mm F1.8 for fuji x mount	', '全新平輸 Zeiss Touit 32mm F1.8 For fuji x-mount \n\n全新未使用 平輸1年保卡  \n\n高雄台中面交可約時間 ', 1, 15300, 3, 'chw.john@hotmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(67, 70, 'jeffrey620323', 'jeffrey620323', 30, 1, 'Sigma 35mm F1.4 Art 公司貨 外觀近全新', '少用\n買了廣角16-35 F2.8 II後就很少用了\n保固還有兩年\n\n含HOYA保護鏡21000\n不含 HOYA保護鏡 20500\n新北市新莊可約面交', 1, 21000, 1, 'jeffrey620323@gmai.com', '0975292099', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(68, 3, 'mg98741', 'mg98741', 23, 1, 'Panasonic M43 20mm F1.7 鏡頭', 'GF1 拆機，無盒過保 \n\n無入塵，正常使用痕跡 \n\n附保護鏡，前後鏡頭蓋 \n\n新北面交\n\n[原作者於 2014/7/3 11:28:2 修改本留言內容]\n\n[原作者於 2014/7/3 11:29:35 修改本留言內容]\n\n[原作者於 2014/7/3 11:30:14 修改本留言內容]\n\n[原作者於 2014/7/3 11:31:56 修改本留言內容]', 1, 6000, 1, 'mg98741@gmail.com', '0921875679', 'http://www.turboimagehost.com/p/19287003/P1110194.jpg.html', 'http://www.turboimagehost.com/p/19287003/P1110194.jpg.html', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(69, 26, 'yao27', 'yao27', 0, 1, '售不用的canon器材, 20-35mm f3.5-f4.5  , ef 24mm 定焦 f2.8', '出清一些防潮箱用不到東西\n售 ef 20-35mm f3.5-f4.5 到17-40mm 的前身,全幅廣角鏡的超值選擇\n狀況如下:\n  公司或無單無盒,鏡片乾淨無入塵,用不到10次,外觀幾乎全新\n  有 kenko uv ,前後蓋 加一原廠 EW-83 遮光罩\n  售 6500 元\n\n售 24mm f2.8\n  公水貨不知,由於太久未使用,拿出來時,自動對焦與光圈失效,光圈只能用2.8,也許防潮箱太乾要,鏡頭要上油,但手動對焦時對焦提示還可用,鏡片乾淨無入塵\n  有 kenko uv ,前後蓋 外觀9成新\n  有能處裡的玩家自行修復,不退貨\n  售 3500 元\n  \n', 1, 3500, 0, 'yao5627@gmail.com', '0932003216', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(70, 92, 'lightingfury', '路亞小葵', 1, 1, '5D MARK II + 24-70mm 2.8L一代 等物件。', '5D MARK II 公司貨有盒有單過保。反光鏡有輕微入塵不影響。快門數七萬八千多。\nEF 24-70mm f2.8L UX年份 有盒有單過保。遮光罩有使用痕跡。\n含77mm B+W保護鏡 & 77mm B+W CPL & KENKO 77mm ND8。\nBG-E6華揚購入過保。盒子找不到應該是不見了。\n二顆原廠LP-E6。\nSANDISK 32G 60MB/S。\n\n相簿連結\nhttps://drive.google.com/folderview?id=0Bw75qRWlpKxtQUs3THNhanMweDA&usp=drive_web\n\n以上全部合售 70000。\n如要機鏡拆買亦可來信。\n拍商品&餐飲平面，錄影用沒幾次加起來不超過10分鐘。\n相機沒有特別擦拭，有點灰塵。平日都擺防潮箱如下圖。\n\n[原作者於 2014/7/3 2:46:29 修改本留言內容]\n\n[原作者於 2014/7/3 2:50:2 修改本留言內容]\n\n[原作者於 2014/7/3 2:51:19 修改本留言內容]', 1, 70000, 2, 'tyler.eye@gmail.com', NULL, 'http://i304.photobucket.com/albums/nn176/lightingfury/tyler_use/DSC_0675.jpg', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(71, 86, 'shaweio168', 'shaweio168', 0, 1, '  Lee 9nd 軟式漸層減光鏡 ', ' \nLee Filter .9nd Soft 軟式漸層減光鏡 含護套\n\n限桃園、八德面交\n\nLine:shaweio168\n或電：0926171643', 1, 2500, 1, NULL, '0926171643', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(72, 50, 'todayki', 'todayki', 33, 1, '85L 1.2 II公司貨 5D3/6D/5D2/650D/Sigma 35L 50L 24L', 'UZ鏡, 公司貨過保, 盒單全 \n\n很少帶出門, 大多時間都是在家亂拍一通 \n\n鏡身極新, 遮光罩有些細紋,現在已整個包鐵人膠帶 \n\n附B+W MRC UV銅框保護鏡 也是很新　售47000 誠可小議 \n\n高雄市可驗鏡面交 ', 1, 47000, 3, 'kiwitoday77@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(73, 30, 'freewillxlover', 'freewillxlover', 8, 1, 'Nikon MB-D80 公司貨', 'Nikon MB-D80手把，2012年過保國祥公司貨，只用過1次，幾乎全新，長住防潮箱，盒裝單據完整，新莊可自取或相約台北火車站捷運站附近面交，意者可參考我在Y拍或露天同步拍賣的照片', 1, 4500, 1, 'jimmy.imei@msa.hinet.net', '0910926600', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(74, 14, 'ymy7171', '葉小慶', 0, 1, 'Lowepro Flipside 300 火箭手 雙肩後背包', '如題~後背包可掛腳架\n開口在內側，非常安全\n買了半年才背出去兩次 \n還是習慣用側背包 \n包包是黑色的 \n新竹可面交\n', 1, 2500, 0, 'ymy7171@hotmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(75, 92, 'hwap1001', 'juodo', 7, 1, 'Nikon 85mm F1.4D', '買來極少用，放防潮箱保存，品相完好如新，無任何損壞，\n公司貨，合子、保單都在，2009年10月30過保', 1, 19000, 0, 'juodolin@gmail.com', '0922081098', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(76, 52, 's0920117', '鬼束旭', 8, 1, 'NIKON 85MM F1.4 G + MARUMI DHG 少用如新(85 1.4)！', '此鏡為德昌水貨，2013年6月購買，德昌保固到2014年6月剛過保，\n\n鏡身外觀無刮傷無掉漆，整體品相如新。\n\n前後玉無刮傷無發霉。\n\n附MARUMI DHG超薄多層膜保護鏡。\n\n\n\n\n所附配件計有：\n\nNIKON 85MM F1.4鏡頭、MARUMI DHG超薄多層膜保護鏡、原廠遮光罩、原廠前後蓋、店家保證卡、說明書、完整盒裝。 \n\n\n\n高雄市面交地點：高雄市三民區覺民路238號(236巷口)的7-11\n\n(236巷在民孝路與民豐路中間地段)\n\n聯絡電話：0986924577，敝姓林。\n\n若有疑問請盡量來電或用MAIL聯絡！\n\n外縣市的朋友若有興趣，也可以到我的奇摩賣場或露天賣場參考看看！直接搜尋『FREE&SOUL 3C』即可找到我的賣場^^\n\n露天賣場可直接連結：http://class.ruten.com.tw/user/index00.php?s=ss0920117 ', 1, 37000, 3, 's0920117@yahoo.com.tw', '0986924577', 'https://s.yimg.com/aw/api/res/1.2/jcOkMx5r.b2D5UTgnccqbg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MjQ7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/c855e177-1dd6-4f8d-a804-9aaeeb953303.jpg', 'https://s.yimg.com/aw/api/res/1.2/4WKG2tK9mLcIJ9DdgKP03A--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MjQ7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/e9ecd187-e341-4a5e-ac7e-7d1e7df96289.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(77, 2, 'kt6009', '小小光', 10, 1, '售保內銀色EM5 12-40 F2.8 14-140MM鏡頭', '1.售保內銀色EM5 保固約剩2個月.使用正常\n完整盒裝 無缺件.加送一顆原廠電池..共兩顆.副廠快門線　14000\n\n2.12-40 F2.8 含原廠前後蓋,遮光罩.日本購入 21000\n\n3.P家14-140MM鏡頭 原廠公司貨.9000\n\n照片\nhttps://www.flickr.com/photos/125437046@N03/\n\nLINE:5168K\n\n盡量用LINE連絡...新北市汐止可以自取.南港約取\n\n其他地方郵寄或宅配..謝謝 ', 1, 14000, 1, 'kt6009@yahoo.com.tw', '0925855031', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(78, 33, 'minru52012', '捲毛才是王道', 7, 1, '售 Sigma 12-24mm F4.5-5.6DG ', 'for nikon\n完整盒單，皮套，kenbo保護鏡\n功能一切正常，無霉及明顯入塵\n此顆無法上保護鏡，保護鏡是上在原廠送的遮光罩上\n使用遮光罩後會有暗角\nhttp://miupix.cc/pm-24MUUE\n\n全幅最廣的鏡頭，一代變形抑制最好\n因為一代很少人賣，剛好有版友賣就立即入手\n買來原本想拍風景，結果因為還是喜歡拍攝人像\n買來擺在防潮箱沒拿出去拍過.....\n所以還是割愛給喜歡拍氣勢大景的攝友\n\n貴重物品建議面交，郵寄使用黑貓送運費自付\n\n\n\n[原作者於 2014/7/3 0:43:10 修改本留言內容]\n\n[原作者於 2014/7/3 0:43:54 修改本留言內容]', 1, 13000, 2, 'minru52012@gmail.com', '0921766456', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(79, 52, 'versacehome', 'ykuohui', 33, 1, 'OM-EOS晶片轉接環', '售如圖對焦精準的Olympus OM轉Canon EOS晶片轉接環共有兩個!一個售550含運\n圖片:https://www.flickr.com/photos/95068811@N08/14549749632/\n\n如果有買鏡頭可面交算您500元\n', 1, 500, 0, 'ak6ufc9e@yahoo.com.tw', '0972-376-9', 'https://www.flickr.com/photos/95068811@N08/14549749632/', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(80, 66, 'm21617', 'wesnboy', 8, 1, 'TOKINA 12-24mm F4 PRO DX II FOR NIKON (T124 2代鏡)', 'TOKINA 12-24mm F4 II FOR NIKON (T124 2代鏡) \n\n鏡身整體無刮傷9成9新，鏡面無刮傷、無發霉，常駐防潮箱，僅鏡頭蓋字體金漆有使用痕跡。 \n\n整體品相如新。 \n\n附含配件包括有： \n\nT124 II鏡頭、遮光罩、鏡身前後蓋、原廠保證書、完整盒裝、購買收據。 \n\n購於102/03/09過保 \n\n歡迎約看鏡，電洽莊先生 \nLine:ChuangDean ', 1, 10000, 2, 'm21617@hotmail.com', '0928232196', 'https://flic.kr/p/o9CtEj', 'https://flic.kr/p/o9CuAY', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(81, 7, 'shaweio168', 'shaweio168', 0, 1, 'LEE Filters 9ND GRAD SOFT 軟式漸層減光鏡', 'LEE Filters 9ND GRAD SOFT 軟式漸層減光鏡 含護套 \n有輕微刮傷，不影響拍照，也已反應在價格上，不再議價\n限桃園、八德面交 \n\nLine:shaweio168 \n或電：0926171643 \n', 1, 2200, 1, NULL, '0926171643', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(82, 58, 'jazz1218', 'jazz老貓', 36, 1, 'LEXAR Pro SDHC UHS-I 32GB 600X', '請朋友從美國代購\n因之前有急用\n先在台灣購買其他卡先用\n最近拿到卡\nLEXAR Pro SDHC UHS-I 32GB 600X  一張1000與\nLexar 32GB Professional 1066x Compact Flash Memory Card (UDMA 7) 一張3500\n各多了兩片', 1, 1000, 3, 'jazz005799@yahoo.com.tw', '0983309937', 'http://attach4.mobile01.com/mp/4/704784/9bc158c947ea16ca25ea2e63748c6110.jpg', 'http://attach4.mobile01.com/mp/4/704784/9ed6c007b3bc778d4c8623ee5b1bec14.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(83, 7, 'iamsunnyman', 'iamsunnyman', 7, 1, ' 1個月 D610 公司貨+ wu1b +全新 50 1.8G公司貨 《 D600 D700 D80', '一 ● 1個多月 D610 國祥公司貨 品相極新、無任何碰撞、盒單配件齊全 快門數 3XXX \n\n 附 1.多功能電子快門線 2.Sandisk C10 16G記憶卡一張\n 以上 售 41500\n\n二●另有 wu1b 盒裝齊全 售1300 \n\n三●另有 全新 nikkor 50 1.8g 公司貨 \n (朋友送的,完全未開封使用過,送UV保護鏡) 售 6300\n\n \n一 + 二 合購42500\n\n一 + 二 + 三 合購 48500 \n\n一 + 三 合購 47500  \n\n原高雄市市區 或 鳳山區 可面交 謝謝. \n\n\n或是以 D7100 貼換補差額也可以。 \n希望換購 D7100 公水不限( 公司貨優先) \n希望快門數1萬以內, 售價在20000元以內 ,謝謝. \n\n因為沒有其他相機可拍這台機子,請見諒.', 1, 41500, 3, 'iamjaguar2001@yahoo.com.tw', '0934072437', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(84, 28, 'csvc7777', 'csvc', 7, 1, 'D7000 國祥 公司貨 盒單完整 過保', 'D7000 國祥 公司貨 盒單完整 過保 ~ NT$15500\nSIGMA 18-250mm F3.5-6.3 DC OS for NIKON  恆伸公司貨 盒單完整 過保 ~ NT$8500\n本人常年國外出差 以上少出勤 都保存在防潮箱裡 品像蠻新 只有些微使用的痕跡!!', 1, 15500, 3, 'nano@pie.com.tw', '0920327777', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(85, 60, 'flt910', 'flt910', 1, 1, 'Canon 50L F1.2 近全新 附B+W鏡', 'Canon EF 50mm F1.2L USM&#160;\n經典人像50L，附B+W MRC鏡&#160;\n近全新，外觀功能優良&#160;\n平輸UZ鏡，盒單配件等齊全&#160;\n北部可面交，不換物不議價&#160;\n有意請mail留聯絡方式&#160;\nflt910351@yahoo.com.tw&#160;', 1, 34500, 0, 'flt910351@yahoo.com.tw', NULL, 'http://www.photosharp.com.tw/Images/ShowPublishImage.aspx?Id=flt910&FileName=20140628081119.jpg', NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(86, 62, 'csvc7777', 'csvc', 8, 1, 'SIGMA 18-250mm F3.5-6.3 DC OS 恆伸公司貨 (過保) For NIKON', 'SIGMA 18-250mm F3.5-6.3 DC OS 恆伸公司貨 (過保) For NIKON\n  很少出勤 單盒完整 約9成新 僅些微使用痕跡!\n已經躺在防潮箱很久了 最近要買幾件新品 故要清出一些位子來!', 1, 8500, 3, 'nano@pie.com.tw', '0920327777', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(87, 84, 't0261866', '((chen))', 0, 1, 'Canon EF50mm f1.8 II -功能正常', 'Canon EF50mm f1.8 II 大光圈人像鏡頭，自動鏡頭。\n主鏡+前後蓋，無盒無單。\n功能正常，唯邊邊有一處小霉絲，\n拍攝相片並無在畫面呈現或影響。\n介意者勿買，成交後無法退換。\n最好面交自取(蘆洲各捷運站)，掛號郵寄+80元。\n請先mail聯絡，確認後在電話。\n\n[原作者於 2014/7/3 11:27:53 修改本留言內容]', 1, 1000, 1, 't0261866@yahoo.com.tw', '0928039103', 'http://img6.dcview.com/album/20140703/20140703112045-161046.jpg', 'http://img6.dcview.com/album/20140703/20140703112202-161046.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(88, 75, 'achiou', 'achiou', 8, 1, 'TAMRON AF 18-250mm F3.5-6.3 Di II Marco (for nikon', '賣 TAMRON AF 18-250mm F3.5-6.3 Di II Marco (for nikon) \n\n平輸貨，已過保，有盒無單，有點垂頭 \n\n全部的東西就：盒子、鏡頭、說明書、原廠遮光罩 \n\n賣5500元，宅配5600元 \n\n屏東市可面交，但要配合我的時間跟地點，其他地方用宅配的\n\n意者來信洽談：s8741024@gmail.com', 1, 5500, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/Sndv82TxueFwznJSvrjyxA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MDA7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/d68b767e-1099-4d8e-a4e7-5c246e8803ed.jpg', 'https://s.yimg.com/aw/api/res/1.2/08aG.NythT.PwFtVdngulg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MDA7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/f80149ff-1750-4ecd-b682-5ed7b5e89b0b.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(89, 23, 'achiou', 'achiou', 8, 1, 'SIGMA 17-70mm F2.8-4.5 DC Macro for nikon (公司貨 有盒單', '賣SIGMA 17-70mm F2.8-4.5 DC Macro for nikon \n\n公司貨，有盒有單 \n\n全部的東西有：鏡頭、前後蓋、遮光罩、保卡、說明書 \n\n保存很好，機身很新 \n\n賣5500元，宅配5600元 \n\n屏東市可面交，但要配合我的時間地點，其他地方用宅配\n\n意者來信洽談：s8741024@gmail.com', 1, 5500, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/QmZxkcg3hb86p17S9Wg4jQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MDA7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/4b271574-dad5-4c8d-ae25-40e30d29ec73.jpg', 'https://s.yimg.com/aw/api/res/1.2/HLGRsXm71nfM2phqXFzYvg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00MDA7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/e058307c-e1b3-4dc9-87a8-e7201dbda923.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(90, 59, 'achiou', 'achiou', 0, 1, 'nikon d90 單機身 有盒有單', '賣一台nikon d90 單機身 平輸貨 \n\n有盒有單 \n\n配件有：原廠電池、原廠充電器、原廠背帶、av線、傳輸線 \n\n盒子只有外盒，無內裝 \n\n賣9000元，郵寄9100元 \n\n屏東市可面交，但要配合我的時間地點，其他地方用宅配的 \n\n意者來信洽談：s8741024@gmail.com', 1, 9000, 3, 's8741024@gmail.com', NULL, 'https://s.yimg.com/aw/api/res/1.2/4rVzFGfwnwhZqG3vhxy.Lg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/1344e572-692d-4aba-804a-7c90a7e7fae0.jpg', 'https://s.yimg.com/aw/api/res/1.2/o0eXsClSa8hRQ01VhNMSVQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00NDk7cT04NTt3PTYwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/abde08df-6459-4d52-ad51-a641ec255908.jpg', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(91, 74, 'kidd1122', 'kidd1122', 8, 1, 'Nikon SB-700 閃光燈 公司貨', 'NIKON Speedlight SB-700 閃光燈 公司貨 保固到2012.10.30。\n\n正常，盒單配件全。', 1, 7500, 1, 's931236034@gmail.com', '0958201599', NULL, NULL, '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(92, 60, 'soulens', 'soulens', 1, 1, 'Canon EF 28-135 交換 40 2.8 or 50 1.8', 'Canon EF 28-135mm f3.5-5.6 IS USM\n\n超音波防手震、L鏡之外最強的廣角望遠防手震鏡。\n\n九成新有輕微使用痕跡、前後玉無傷無黴、無明顯入塵、會些微垂頭、附原廠遮光罩、無盒無單\n\n接受貼換輕便型定焦鏡 Canon 40mm F2.8 (+1500) or 50mm 1.8 II(+3000)\n\n台北市、中壢市可面交。\n\n其他照片\nhttp://i.imgur.com/769JygT.jpg', 3, 4900, 1, 'mmariolandtw@yahoo.com.tw', NULL, 'http://i.imgur.com/i5ylxjx.jpg', 'http://i.imgur.com/EjuCP71.jpg', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(93, 60, 'iamokay', '天理何在', 8, 1, '[台中] NIKON D3 公司貨 + Sigma 50mm 1.4 ART 公司貨', '盒單齊全 品項佳 快門約3萬6\n\n【NIKON D3 + Sigma 50mm 1.4 ART】D3過保，S50今年5月購入\n\n● 搭載 1210 萬畫素全片幅 CMOS 感光元件\n● Nikon EXPEED 影像處理引擎\n● 1005 區 RGB 測光系統，並提升 AF，AE 以及 AWB 的精確度\n● 每秒 9 張高速連拍（DX模式下可達每秒 11 張）\n● 擁有 51 個自動對焦點\n● 感光度範圍：Auto，200 - 6400，並可向上延伸 Hi0.3、Hi0.5、Hi0.7、Hi1(12800)、Hi2(25600) 或向下Lo1(100)\n● 超清晰 3 吋 92 萬畫素 LCD 螢幕\n● 支援 LiveView 即時取景模式\n● 內建電子式水平儀\n● DX 裁切模式\n● 一體成形鎂合金材機身，實現完美的防滴防塵功能\n● HDMI 高畫質輸出\n● 光學觀景窗視野率 100%，放大倍率 70%\n● 雙 CF 記憶卡支援UDMA插槽，可做雙卡備份、雙倍儲存或RAW JPG分別儲存', 1, 88000, 2, 'sweetme350@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(94, 100, 'sonychou', 'littlefacebook', 0, 1, 'Tokina T116 Nikon 用　', 'Tokina T116 Nikon 用　一代無馬達板　　立福公司貨　有單無盒　　付簡易型鏡頭保護袋\n\n2013.06.30過保　　少用很新。', 1, 9500, 1, 'sonygermini@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(95, 91, 'johnalan', '艾倫在線', 4, 1, '售新版X-T1,恆昶公司貨,或換X-E2', '售新版恆昶公司貨X-T1 , 或換X-E2 \n\n購入日期是2014年4月底,公司貨 \n\nX-T1是42A版的公司貨,不僅沒有漏光問題,按鍵也改善, \n\n按起來很有Click感, 上方轉盤也不會死硬了 ! \n\n配件齊全 \n\n也可以貼錢換X-E2 (平輸) \n', 1, 36700, 1, 'alan1142@yahoo.com.tw', '0921978800', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(96, 27, 'tchhsu', 'peanuts32', 4, 1, 'XF 18mm F/2相機王水貨', '今年5月29日購入，保固中\n少用同新品，盒單完整', 1, 7000, 1, 'tchhsu@yahoo.com.tw', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(97, 94, 'hi1592002', '1155998877', 1, 1, '品項新 canon 85 1.8', '如題\n\n盒在單不在\n\n品項新\n\n附b+w保護鏡&遮光罩\n\n歡迎來信索取照片&討論', 1, 9000, 0, 'hi1592002@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(98, 48, 'iamokay', '天理何在', 2, 1, '[台中] Canon EOS 1D 收藏級 公司貨 (30D 40D 50D 7D 5D 6D)', '收藏級 公司貨 500萬 CCD 品項佳 無維修\n\n(攝像乾淨) (最接近底片發色)\n\n【盒單不在】\n【公司貨】\n【標準配備皆有】\n【雙原電NP-E3(一顆於5月改鋰電)】\n【快門實測13223】\n【沒有維修記錄】\n\n參考位置：http://www.mobile01.com/mpitemdetail.php?id=1026948', 1, 9500, 2, 'sweetme350@gmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(99, 39, 'cphsug2014', 'corihsu', 0, 1, '售9‧5成新 Nissin Di466 閃光燈 for 3/4', '用不到10次，Nissin Di466 閃光燈 白色\n近全新含完整盒裝及保卡（2013/8購入）\n讓給4/3系統的朋友\n\n買再送你充電器含4顆電池\n\n只要4000元含運\n新竹可面交\n\n\n[原作者於 2014/7/3 10:35:31 修改本留言內容]', 1, 4000, 1, 'Cphsug@tsmc.com', '0987054111', NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(100, 55, 'ppp801010101', 'HSINPEI', 1, 1, 'CANON EF 35mm F1.4 L ，保固中、公司貨', 'CANON EF 35mm F1.4 L \n公司貨，2013.12.01購買，(保固18個月)\n5D3準焦，買來已貼鐵人膠帶、前後玉，無任何刮傷，\n遮光罩已貼鐵人膠帶，無刮傷，但有使用痕跡，\n配件完整，預售價格35000(如含B+W，+500NT)', 1, 35000, 1, 'ppp801010101@hotmail.com', NULL, NULL, NULL, '2014-07-03 00:00:00', '2014-07-03 00:00:00');
/*!40000 ALTER TABLE `tblArticle` ENABLE KEYS */;


-- Dumping structure for table dcview.tblReply
DROP TABLE IF EXISTS `tblReply`;
CREATE TABLE IF NOT EXISTS `tblReply` (
  `reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_account` varchar(20) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_create_time` datetime NOT NULL,
  `reply_update_time` datetime NOT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblReply: ~18 rows (approximately)
DELETE FROM `tblReply`;
/*!40000 ALTER TABLE `tblReply` DISABLE KEYS */;
INSERT INTO `tblReply` (`reply_id`, `article_id`, `user_id`, `user_account`, `reply_content`, `reply_create_time`, `reply_update_time`) VALUES
	(1, 1, 54, 'haytot', '沒有原廠盒子~不過是原廠的', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(2, 2, 99, 'edward037', '金額誤值，更正為7000。', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(3, 3, 67, 'ray526', '請問有念保護鏡嗎？可以約台北面交嗎？0980377388', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(4, 4, 49, 'gatter69', '你好，價錢還有空間嗎', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(5, 5, 32, 'goto', '議價請直接用E-Mail或 LINE詢問\n版面上議價 一律不回\n\n要出4萬含保護鏡一起買的\n可以省下時間不用問了\n我不會答應\n\n感謝各位~\n', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(6, 6, 98, 'rockywang', '補充兩張照片如下\n\nhttps://www.flickr.com/photos/rocky-wang/14371516530/\nhttps://www.flickr.com/photos/rocky-wang/14371500690/', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(7, 7, 44, 'betty1122', '哇 大大這臺真是神機 我用X-T1+X-E2兩台跟你換一台好了 反正畫質成相已經被秒 ', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(8, 7, 48, 'jason-lai', 'MB-D200垂直把手要賣多少?', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(9, 7, 36, 'bryan0730', 'to betty1122...\n我猜你應該沒真正使用過s5pro哦', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(10, 8, 94, 'wwwsps20001', '請問，SB7000是哪顆閃燈呢?', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(11, 8, 60, 'djdog311', '打錯 XD\nSB700\n\n標題:\nNikon D7000+ Sigma 17-50 F2.8+ Sigma 50 F1.4+SB700\n', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(12, 8, 83, 'yangl524', '請問D7000快門數多少? 公?水?', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(13, 9, 84, 'adidsss', 'Up', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(14, 10, 73, 'aifoto', 'http://www.bigcamera.com.tw/goods.php?catId=112 全新3600', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(15, 10, 6, 'stephenjae', '怎麼降價了-_-\n那改賣3200，有興趣請來信', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(16, 11, 66, 'lightingfury', '剛找到柔光罩，一併含在裡面，價格不變。\nhttps://docs.google.com/file/d/0Bw75qRWlpKxtZlFrVW1qSExJUDA/edit\n\nhttps://docs.google.com/file/d/0Bw75qRWlpKxtLXA3NVpGVVpHUzA/edit', '2014-07-03 00:00:00', '2014-07-03 00:00:00'),
	(17, 12, 45, 'haytot', '沒有原廠盒子~不過是原廠的', '2014-07-02 00:00:00', '2014-07-02 00:00:00'),
	(18, 13, 55, 'cola520cc', 'up', '2014-07-03 00:00:00', '2014-07-03 00:00:00');
/*!40000 ALTER TABLE `tblReply` ENABLE KEYS */;


-- Dumping structure for table dcview.tblReport
DROP TABLE IF EXISTS `tblReport`;
CREATE TABLE IF NOT EXISTS `tblReport` (
  `article_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_account` varchar(20) NOT NULL,
  `report_comment` varchar(120) NOT NULL,
  `report_create_time` datetime NOT NULL,
  PRIMARY KEY (`article_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='report article';

-- Dumping data for table dcview.tblReport: ~19 rows (approximately)
DELETE FROM `tblReport`;
/*!40000 ALTER TABLE `tblReport` DISABLE KEYS */;
INSERT INTO `tblReport` (`article_id`, `user_id`, `user_account`, `report_comment`, `report_create_time`) VALUES
	(4, 1, '', 'bug 2', '2014-06-30 14:59:10'),
	(4, 2, '', 'hello', '2014-06-30 17:14:42'),
	(4, 3, '', 'hello', '2014-06-30 17:14:42'),
	(4, 4, '', 'hello', '2014-06-30 17:14:42'),
	(4, 5, '', 'hello', '2014-06-30 17:14:42'),
	(4, 6, '', 'hello', '2014-06-30 17:14:42'),
	(4, 7, '', 'hello', '2014-06-30 17:14:42'),
	(4, 8, '', 'hello', '2014-06-30 17:14:42'),
	(4, 9, '', 'hello', '2014-06-30 17:14:42'),
	(4, 10, '', 'hello', '2014-06-30 17:14:42'),
	(4, 11, '', 'hello', '2014-06-30 17:14:42'),
	(4, 12, '', 'hello', '2014-06-30 17:14:42'),
	(4, 13, '', 'hello', '2014-06-30 17:14:42'),
	(4, 14, '', 'hello', '2014-06-30 17:14:42'),
	(4, 15, '', 'hello', '2014-06-30 17:14:42'),
	(4, 16, '', 'hello', '2014-06-30 17:14:42'),
	(4, 17, '', 'hello', '2014-06-30 17:14:42'),
	(4, 18, '', 'hello', '2014-06-30 17:14:42'),
	(4, 19, '', 'hello world hello world hello world hello world', '2014-06-30 17:14:42');
/*!40000 ALTER TABLE `tblReport` ENABLE KEYS */;


-- Dumping structure for table dcview.tblSHMainCategory
DROP TABLE IF EXISTS `tblSHMainCategory`;
CREATE TABLE IF NOT EXISTS `tblSHMainCategory` (
  `sh_main_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sh_main_category_name` varchar(36) NOT NULL,
  `sh_main_category_rank` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`sh_main_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblSHMainCategory: ~2 rows (approximately)
DELETE FROM `tblSHMainCategory`;
/*!40000 ALTER TABLE `tblSHMainCategory` DISABLE KEYS */;
INSERT INTO `tblSHMainCategory` (`sh_main_category_id`, `sh_main_category_name`, `sh_main_category_rank`) VALUES
	(1, '數位相機', 1),
	(2, '手機相關', 1),
	(3, '其他', 1);
/*!40000 ALTER TABLE `tblSHMainCategory` ENABLE KEYS */;


-- Dumping structure for table dcview.tblSHSubCategory
DROP TABLE IF EXISTS `tblSHSubCategory`;
CREATE TABLE IF NOT EXISTS `tblSHSubCategory` (
  `sh_sub_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sh_main_category_id` int(10) unsigned NOT NULL,
  `sh_sub_category_name` varchar(36) NOT NULL,
  `sh_sub_category_rank` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`sh_sub_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblSHSubCategory: ~56 rows (approximately)
DELETE FROM `tblSHSubCategory`;
/*!40000 ALTER TABLE `tblSHSubCategory` DISABLE KEYS */;
INSERT INTO `tblSHSubCategory` (`sh_sub_category_id`, `sh_main_category_id`, `sh_sub_category_name`, `sh_sub_category_rank`) VALUES
	(1, 1, 'Canon', 1),
	(2, 1, 'Canon SLR', 1),
	(3, 1, 'Fujifilm', 1),
	(4, 1, 'Fujifilm SLR', 1),
	(5, 1, 'Konica Minolta', 1),
	(6, 1, 'Konica Minolta SLR', 1),
	(7, 1, 'Nikon', 1),
	(8, 1, 'Nikon SLR', 1),
	(9, 1, 'Olympus', 1),
	(10, 1, 'Olympus SLR', 1),
	(11, 1, 'Pentax', 1),
	(12, 1, 'Pentax SLR', 1),
	(13, 1, 'Sony', 1),
	(14, 1, 'Sony DSLR', 1),
	(15, 1, 'BenQ', 1),
	(16, 1, 'Casio', 1),
	(17, 1, 'Contax', 1),
	(18, 1, 'Epson', 1),
	(19, 1, 'GE', 1),
	(20, 1, 'Kodak', 1),
	(21, 1, 'Kyocera', 1),
	(22, 1, 'Leica', 1),
	(23, 1, 'Panasonic', 1),
	(24, 1, 'Panasonic DSLR', 1),
	(25, 1, 'Premier', 1),
	(26, 1, 'Ricoh', 1),
	(27, 1, 'Toshiba', 1),
	(28, 1, 'Samsung', 1),
	(29, 1, 'Sanyo', 1),
	(30, 1, 'Sigma', 1),
	(31, 1, '傳統相機', 1),
	(32, 1, '其他相機', 1),
	(33, 3, '鏡頭', 1),
	(34, 3, '列印設備', 1),
	(35, 3, '閃光燈', 1),
	(36, 3, '記憶/儲存', 1),
	(37, 3, '電池', 1),
	(38, 3, '腳架', 1),
	(39, 3, '電源充電', 1),
	(40, 3, '背包皮套', 1),
	(41, 3, '讀卡機', 1),
	(42, 2, 'Acer', 1),
	(43, 2, 'Alcatel', 1),
	(44, 2, 'Apple', 1),
	(45, 2, 'ASUS', 1),
	(46, 2, 'bara', 1),
	(47, 2, 'BenQ', 1),
	(48, 2, 'BungBungame', 1),
	(49, 2, 'FET', 1),
	(50, 2, 'HTC', 1),
	(51, 2, 'HUAWEI', 1),
	(52, 2, 'LG', 1),
	(53, 2, 'Samsung', 1),
	(54, 2, 'SONY', 1),
	(55, 2, '小米', 1),
	(56, 2, '其他', 1);
/*!40000 ALTER TABLE `tblSHSubCategory` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
