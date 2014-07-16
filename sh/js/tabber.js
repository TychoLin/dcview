/*
* tabber Javascript with JQuery-1.3.2.min.js  
* 2009-03-13 by Escape
*/
function tabber(obj,cssName){
	//已被選擇的 li 其 class 為帶入的 cssName
	
	//把全 li 的 cssName 移掉
	$(obj).siblings('li.'+cssName).removeClass(cssName);
	//把目前被點擊的 li 加上 cssName
	$(obj).addClass(cssName);
	
	//取得目前被點擊的 li id
	var id = $(obj).attr("id");
	
	//將放置內容的 div hide 起來 (同一層 only class content
	$("#tabber_content_"+id).siblings('div').hide();
	
	//秀出目前被點擊的 li id 對應的內容 div id
	$("#tabber_content_"+id).show();
}