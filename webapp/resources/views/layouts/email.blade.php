<!DOCTYPE html>
<html>
<head>

<style type="text/css">
body{
	margin:0;
	padding: 0;
	font-family: sans-serif, serif, arial;
	background: #eee;
}
a{
	text-decoration: none;
}
*{
	box-sizing: border-box;
}
.main{
	background: #eee;
	box-sizing: border-box;
	padding: 20px;
}

.center{
	text-align: center;
}
.mt{
	margin-top: 20px;
}
.mb{
	margin-bottom: 20px;
}
.mr{
	margin-right: 20px;
}
.ml{
	margin-left: 20px;
}

.box{
	background: #fff;
	padding: 20px;
	border:1px solid #ddd;
	max-width: 450px;
	margin: 0 auto;
}

.btn{
	padding: 20px;
	display: inline-block;
	background: #ddd;
	color: #fff;
	border:none;
	border-radius: 5px;
	text-align: center;
	font-size: 18px;
	width: 100%;
}
.btn.pink{
	background: #e91e63;
}
.inline{
	display: inline-block;
}
</style>

@yield("extra_css")
</head>
<body>

<div class="main">
	@yield("content")
</div>
</body>
</html>