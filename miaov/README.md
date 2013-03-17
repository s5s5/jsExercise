#学习笔记

##js基础一
1. 课程介绍——本集主要讲些什么
2. JS组成中的：ECMAScript简介
3. JS组成中的：DOM简介
4. JS组成中的：BOM简介
5. ECMAScript、DOM、BOM三者的兼容性问题
6. 变量类型——typeof检测类型
7. typeof 返回的数据类型种类：number、string、boolean、undefined、object、function
8. object对象类型——基本类型(number、string、boolean、undefined)与复合类型(由基本类型所组成)的对比、数组
9. 良好的代码习惯：变量从始至终，只存放一种类型的数据


##js基础二
1. 数据类型转换实例：数字求和
2. parseInt函数介绍
3. NaN的含义、特点、矛盾
4. isNaN方法、具体应用
5. 隐式类型转换：==、===、-、*、/
6. 加号的功能与"减、乘、除"运算符的比较
7. 变量作用域、全局、局部
8. 闭包的简单概念

##js基础三
1. 命名规范的必要性、意义
2. 匈牙利命名法、变量的命名规范、函数的命名规范
3. 运算符——%取模（求余数）
4. %取模（求余数）实例：隔行变色、数字转时间
5. 赋值运算符、关系运算符
6. 逻辑运动符：&&（与） ||（或）!（否）
7. 括号运算符与优先级
8. 程序流程控制、switch、?:（三目运算符、三元运算符）、break（跳出）、continue（跳过）
9. 什么是真？什么是假？
10. json、for in
11. 课程总结

##js基础四
1. 函数返回值：return，没有return的函数返回值是什么？
2. 函数传参、arguments（可变参、不定参）
3. arguments应用实例：任意数字求和
4. 实例：CSS函数
5. 获取非行间样式：currentStyle、getComputedStyle(obj, false)[attr]
6. 封装可重用的getStyle()函数
7. 函数传参的可读性

##js基础五
1. 数组定义、length使用
2. push、pop、shift、unshift方法
3. 排序：sort方法、字符串排序、数字排序
4. cancat、join方法
5. split方法
6. splice方法：删除、插入、替换

##DOM基础
1. DOM简介、DOM标准、DOM节点
2. 获取元素的子节点：childNodes、兼容性问题
3. 节点类型：nodeType、文本节点、元素节点
4. children的使用
5. 获取元素父节点parentNode
6. 获取定位元素的父节点offsetParent
7. 获取首尾子元素：firstChild、firstElementChild、lastChild、lastElementChild
8. 获取兄弟节点：nextSibling、nextElemnetSibling、previousSibling、previousElementSibling
9. 元素属性操作：“.”与“[]”回顾、setAttribute、getAttribute、removeAttribute
10. 通过className获取元素、封装getByClass函数

##DOM中级
1. 创建元素 createElement、appendChild
2. 添加元素的性能差异
3. insertBefore方法及实例
4. 删除元素：removeChild方法
5. 文档碎片：document.createDocumentFragment()
6. 性能测试方法

##BOM
1. window.open() 方法及相关参数
2. 运行代码框实例
3. document.write() 方法
4. about:blank 打开新窗口及返回值
5. close()关闭当前窗口及新开窗口特性
6. window.navigator.userAgent 检测浏览器版本
7. window.location 读写地址栏
8. 可社区尺寸、滚动距离
9. 系统对话框及返回值
10. 侧边栏广告实例
11. window.onscroll 事件及处理窗口变化等细节
12. 解决滚动条闪烁问题：固定定位与滑动效果
13. 返回顶部效果实例
14. 解决定时器与事件冲突的问题

##事件基础（一）
1. 什么是事件对象
2. document对象范围
3. event事件对象、clientX、clientY
4. 事件对象的兼容性问题及解决方案
5. 事件冒泡原理
6. 取消事件冒泡：cancelBubble、弹出层实例
7. 跟随鼠标的DIV实例

##事件基础（二）
1. 可视区坐标
2. 滚动条所滚动的距离：scrollTop
3. 滚动条所滚动的距离——解决谷歌浏览器兼容性问题
4. 跟随鼠标的DIV实例——消除滚动条的影响
5. 一串跟随鼠标的DIV实例
   ——思考题：在鼠标不移动时，也能实现鼠标跟随
6. 键盘事件：onkeydown、keyCode
7. 用键盘来控制DIV移动实例
   ——思考题：如何消除不卡顿的DIV移动
8. 提交留言实例——ctrl+回车的提交方式