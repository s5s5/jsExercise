function getStyle(obj, attr) {
	if (obj.currentStyle) {
		return obj.currentStyle[attr];
	}
	else {
		return getComputedStyle(obj, null)[attr];
	}
}

function startMove(obj, json, fn) {
	var bStop = true; //运动是否值
	for (var attr in json) {
		//1.取当前的值
		var iCur = 0;
		if (attr === 'opacity') {
			iCur = parseInt(parseFloat(getStyle(obj, attr)))
		}
	}
}
