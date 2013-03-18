function selectFile(fileEle) {
	if (typeof FileReader === 'undefined') {
		showtip('当前浏览器版本不支持上传图片，请升级。');
		return;
	}
	var mi = document.getElementById("mergerImg");
	var target = document.getElementById("images");
	mi.innerHTML = "";
	target.innerHTML = "";

	for (var i = 0; i < fileEle.files.length; i++) {
		var file = fileEle.files[i];
		showFile(file);
	}

}

function showFile(file) {
	try {
		var target = document.getElementById("images");
		var reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function (e) {
			var img = new Image();
			img.src = e.target.result;
			if (img.width) {
				console.info(img.width + " x " + img.height);
			} else {}
			target.appendChild(img);
			target.appendChild(document.createElement("br"));
		};
		reader.error = function (e) {
			console.info(e);
		};
	} catch (e) {
		console.info(e);
	}
}

function preview() {
	var width = document.getElementById("maxWidth").value;
	width = width || 500;
	var imgs = document.getElementsByTagName("img");
	for (var i = 0; i < imgs.length; i++) {
		var img = imgs[i];
		if (img.width > width) {
			img.width = width;
			img.height = img.height * (width / img.width);
		}
	}
}

function merger() {
	var maxWidth = document.getElementById("maxWidth").value;
	maxWidth = maxWidth || 500;
	var target = document.getElementById("images");

	var imgs = document.getElementsByTagName("img");
	var height = 0;
	for (var i = 0; i < imgs.length; i++) {
		var img = imgs[i];
		if (img.width > maxWidth) {
			height += img.height * (maxWidth / img.width);
			continue;
		}
		height += img.height;
	}

	var canvas =  document.createElement("canvas");
	canvas.height = height+20;
	canvas.width = maxWidth;
	var ctx = canvas.getContext("2d");

	var dheight = 10;
	for (var i = 0; i < imgs.length; i++) {
		var img = imgs[i];
		var cheight = img.height;
		var cwidth = img.width;
		if (cwidth > maxWidth) {
			cwidth = maxWidth;
			cheight = img.height * (maxWidth / img.width);
		}

		ctx.drawImage(img, 10, dheight, cwidth, cheight);
		dheight += cheight;
	}

	var dataurl = canvas.toDataURL('image/png');
	var mergerImg = new Image();
	mergerImg.src = dataurl;
	document.getElementById("mergerImg").appendChild(mergerImg);
	target.innerHTML = "";
}