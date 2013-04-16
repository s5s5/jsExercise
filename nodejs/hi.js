//hi.js

var http = require('http');

http.createServer(function(request, response) {
	response.writeHead(200, {'Content-Type': 'text/html'});
	response.write('<title>Hi~ Node.js</title>');
	response.write('<h1>Hi~ Node.js</h1>');
	response.write('主机名：' + hostName + '<br>');
	response.write('操作系统：' + Type + '<br>');
	response.write('发型版本：' + Release + '<br>');
	response.write('运行时间：' + (upTime / 3600) + 'h<br>');
	response.write('负载均值(1m,5m,15m)：' + loadAvg + '<br>');
	response.write('内存大小：' + (totalMem / 1048576) + 'MB<br>');
	response.write('剩余内存：' + (freeMem / 1048576) + 'MB<br>');
	response.write('CUP：' + JSON.stringify(cPus) + '<br>');
	response.end('<p>by <a href="http://s5s5.me/">s5s5</a></p>');
}).listen(80);
console.log("HTTP server is listening at port 80.");

var sys = require("os");
var hostName = sys.hostname();
var Type = sys.type();
var Release = sys.release();
var upTime = sys.uptime();
var loadAvg = sys.loadavg();
var totalMem = sys.totalmem();
var freeMem = sys.freemem();
var cPus = sys.cpus();


