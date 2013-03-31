function ajax(url, fnSucc, fnFaild) {
//1.创建Ajax对象
	var oAjax = null;

	if (window.XMLHttpRequest) {	//使用window undefind来做兼容
		oAjax = new XMLHttpRequest();
	}
	else {
		oAjax = new ActiveXObject("Microsoft.XMLHTTP");
	}

//2.连接服务器
	//open(方法, url, 是否异步)
	oAjax.open('GET', url, true);

//3.发送请求
	oAjax.send();

//4.接收服务器的返回
	oAjax.onreadystatechange = function () {
		if (oAjax.readyState == 4) {	//完成
			if (oAjax.status == 200) {	//成功
				fnSucc(oAjax.responseText);
			}
			else {
				if (fnFaild) {
					fnFaild(oAjax.status);
				}
			}
		}
	};
}