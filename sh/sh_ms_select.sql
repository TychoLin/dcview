ms db: 60.199.230.6 sa/dc.1223

article without reply data:
sh_article_no_reply_ms_data.xls
SELECT SN, 文章序號, 回覆編號, 回覆文章編號, 相關筆數, 會員代號 AS user_account,
作者暱稱 AS user_nickname, pclass, brandid, 狀態 AS article_sh_trade_status, 已交易 AS article_sh_is_traded,
標題 AS article_title, 內容 AS article_content, 地點 AS article_sh_area, 價格 AS article_sh_price,
Email AS article_email, 電話 AS article_phone_number, notify AS article_sh_is_notified,
pic1 AS article_img_url1, pic2 AS article_img_url2, 點閱次數 AS article_page_views,
convert(varchar, 日期時間, 120) AS article_create_time, convert(varchar, updatetime, 120) AS article_update_time
FROM [DcBid].[dbo].[flea]
WHERE 刪除 = 0 AND pclass IS NOT NULL AND brandid <> '' AND 地點 <> 0 AND 回覆編號 IS NULL AND 文章序號 IN
(SELECT 文章序號 FROM [DcBid].[dbo].[flea] WHERE 日期時間 >= '2014-04-25' AND 文章序號 IS NOT NULL)

article with reply data:
sh_article_have_reply_ms_data.xls
SELECT SN, 文章序號, 回覆編號, 回覆文章編號, 相關筆數, 會員代號 AS user_account,
作者暱稱 AS user_nickname, pclass, brandid, 狀態 AS article_sh_trade_status, 已交易 AS article_sh_is_traded,
標題 AS article_title, 內容 AS article_content, 地點 AS article_sh_area, 價格 AS article_sh_price,
Email AS article_email, 電話 AS article_phone_number, notify AS article_sh_is_notified,
pic1 AS article_img_url1, pic2 AS article_img_url2, 點閱次數 AS article_page_views,
convert(varchar, 日期時間, 120) AS article_create_time, convert(varchar, updatetime, 120) AS article_update_time
FROM [DcBid].[dbo].[flea]
WHERE 刪除 = 0 AND pclass IS NOT NULL AND brandid <> '' AND 地點 <> 0 AND 回覆文章編號 IS NULL AND 回覆編號 IN
(SELECT 文章序號 FROM [DcBid].[dbo].[flea] WHERE 日期時間 >= '2014-04-25' AND 文章序號 IS NOT NULL)

reply data:
sh_article_reply_ms_data.xls
SELECT SN, 文章序號, 回覆編號, 回覆文章編號, 相關筆數, 會員代號 AS user_account,
作者暱稱 AS user_nickname, pclass, brandid, 狀態 AS article_sh_trade_status, 已交易 AS article_sh_is_traded,
標題 AS article_title, 內容 AS article_content, 地點 AS article_sh_area, 價格 AS article_sh_price,
Email AS article_email, 電話 AS article_phone_number, notify AS article_sh_is_notified,
pic1 AS article_img_url1, pic2 AS article_img_url2, 點閱次數 AS article_page_views,
convert(varchar, 日期時間, 120) AS article_create_time, convert(varchar, updatetime, 120) AS article_update_time
FROM [DcBid].[dbo].[flea]
WHERE 刪除 = 0 AND 回覆文章編號 IS NOT NULL AND 回覆編號 IN
(SELECT 文章序號 FROM [DcBid].[dbo].[flea] WHERE 日期時間 >= '2014-04-25' AND 文章序號 IS NOT NULL)