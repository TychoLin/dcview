/*
* tabber Javascript with JQuery-1.3.2.min.js  
* 2009-03-13 by Escape
*/
function tabber(obj,cssName){
	//�w�Q��ܪ� li �� class ���a�J�� cssName
	
	//��� li �� cssName ����
	$(obj).siblings('li.'+cssName).removeClass(cssName);
	//��ثe�Q�I���� li �[�W cssName
	$(obj).addClass(cssName);
	
	//���o�ثe�Q�I���� li id
	var id = $(obj).attr("id");
	
	//�N��m���e�� div hide �_�� (�P�@�h only class content
	$("#tabber_content_"+id).siblings('div').hide();
	
	//�q�X�ثe�Q�I���� li id ���������e div id
	$("#tabber_content_"+id).show();
}