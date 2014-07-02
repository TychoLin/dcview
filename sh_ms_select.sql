SELECT SN, 文章序號, 回覆編號, 回覆文章編號, 相關筆數, 標題, 內容 FROM [DcBid].[dbo].[flea]
WHERE 回覆編號 IN
(SELECT TOP 500 文章序號 FROM [DcBid].[dbo].[flea] WHERE 日期時間 > '2014-06-20' AND 文章序號 IS NOT NULL
ORDER BY 文章序號 DESC)

SELECT SN, 會員代號, 作者暱稱, pclass, brandid, 狀態, 已交易, 文章序號, 回覆編號, 回覆文章編號, 相關筆數, 標題, 內容, 地點, 價格, Email, 電話
FROM [DcBid].[dbo].[flea]
WHERE 文章序號 IN
(SELECT TOP 100 文章序號 FROM [DcBid].[dbo].[flea] WHERE 日期時間 > '2014-06-20' AND 文章序號 IS NOT NULL
ORDER BY 文章序號 DESC)