//hi.js

var http = require('http');
var sys = require("os");
var hostName = sys.hostname();
var Type = sys.type();
var Release = sys.release();
var upTime = sys.uptime();
var loadAvg = sys.loadavg();
var totalMem = sys.totalmem();
var freeMem = sys.freemem();
var cPus = sys.cpus();
var ex = process.execPath;
var cw = process.cwd();
var en = process.env;
var ve = process.version;
var ins = process.installPrefix;
var pi = process.pid;
var ti = process.title;
var ar = process.arch;
var pl = process.platform;

http.createServer(function (request, response, process) {
	response.writeHead(200, {'Content-Type': 'text/html'});
	response.write('<meta charset="utf-8" />');
	response.write('<title>Hi~ Node.JS</title>');
	response.write('<h1>Hi~ Node.JS</h1>');
	response.write('主机名：' + hostName + '<br>');
	response.write('操作系统：' + Type + '<br>');
	response.write('发型版本：' + Release + '<br>');
	response.write('运行时间：' + (upTime / 3600) + 'h<br>');
	response.write('负载均值(1m,5m,15m)：' + loadAvg + '<br>');
	response.write('内存大小：' + (totalMem / 1048576) + 'MB<br>');
	response.write('剩余内存：' + (freeMem / 1048576) + 'MB<br>');
	response.write('CUP：<input value=' + JSON.stringify(cPus) + '><br>');
	response.write('启动该进程的可执行程序的绝对路径名：' + ex + '<br>');
	response.write('进程的当前工作目录：' + cw + '<br>');
	response.write('系统信息：<input value=' + JSON.stringify(en) + '><br>');
	response.write('Node.JS 版本：' + ve + '<br>');
	response.write('Node.JS 安装前缀：' + ins + '<br>');
	response.write('进程PID：' + pi + '<br>');
	response.write('进程名字：' + ti + '<br>');
	response.write('进程架构：' + ar + '<br>');
	response.write('进程平台：' + pl + '<br>');
	response.end('<p>by <a href="http://s5s5.me/">s5s5</a></p>');
}).listen(80);




