<html>

</body>

<script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" />
<nav id="menu">
    <div class="menu-item">
        <div class="menu-text">
            <a href="sem1finalwebsite.html"> Home  </a>
        </div>
        
        </div>
    </div>
    <div class="menu-item highlight">
        <div class="menu-text">
            <a href="browniespage.html"> Brownies  </a>
        </div>
       
        </div>
    </div>
    <div class="menu-item highlight">
        <div class="menu-text">
            <a href="cakepage.html"> Cakes  </a>
        </div>
       
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-text">
            <a href="cookiespage.html"> Cookies  </a>
        </div>
        
        </div>
    </div>
</nav>
</div>

<style>
                body {
                  background-image: url('https://static.vecteezy.com/system/resources/thumbnails/002/375/040/small/modern-white-background-free-vector.jpg');
                }
                body{
	height: 1vh;
	margin: 0;
	padding: 0;
	background: #3b3646;
}

*{
	box-sizing: border-box;
}

.centerBox{
	display: flex;
	justify-content: center;
	align-items: center;
	height: 600px
}

.categoryWrapper{
	height: 310px;
	width: 460px;
	background: url("http://ohlookawebsite.com/bathroomtestfull.jpg") no-repeat center center;
	display: flex;
	justify-content: center;
	align-items: center;
	position: relative;
}

.categoryWrapper:after{
	position: absolute;
	top:0;
	left: 0;
	right:0;
	bottom: 0;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a29ca9+0,95909b+99 */
background: #a29ca9; /* Old browsers */
background: -moz-linear-gradient(-45deg, #a29ca9 0%, #95909b 99%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, #a29ca9 0%,#95909b 99%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, #a29ca9 0%,#95909b 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a29ca9', endColorstr='#95909b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	content: '';
	opacity: 0;
		-webkit-transition: opacity 0.9s ease 0s; 
}

.categoryWrapper:hover:after{
	opacity: 0.4;
}

.categoryWrapper h1{
	color:white;
	font-size: 50px;
	letter-spacing: 2px;
	-webkit-transition: all 0.15s ease 0s; 
	position: relative;
	z-index: 10;
}

.categoryWrapper:hover h1{
	transform: translateY(-10px);
}

.categoryWrapper button{
	position: absolute;
	transform: translatey(60px);
	-webkit-appearance: none;
	border: none;
	background: none;
	color:white;
	width: 250px;
	height:50px;
	font-size: 20px;
	padding: 0;
	margin: 0;
	outline: none;
	z-index: 10;
}

.categoryWrapper button span{
	display: block;
	position: relative;
	line-height: 50px;
	height: 50px;
	cursor: pointer;
}

.categoryWrapper button > span:after{
	content:'';
	position: absolute;
	top:0;
	left: 50%;
	width: 20px;
	height: 0;
	
	border: 1px solid white;
	border-left: none;
	border-bottom: none;
	
	    transition: height 0.15s ease-out, width 0.15s ease-out 0.15s;
}

.categoryWrapper:hover button > span:after{
	width: calc(50% - 1px);
	height: calc(100% - 2px);
	transition: width 0.15s ease-out, height 0.15s ease-out 0.15s;
}

.categoryWrapper button > span:before{
	content:'';
	position: absolute;
	top:0;
	right: 50%;
	width: 20px;
	height: 0;
	
	border: 1px solid white;
	border-right: none;
	border-bottom: none;
	
	    transition: height 0.15s ease-out, width 0.15s ease-out 0.15s;
}

.categoryWrapper:hover button > span:before{
	width: calc(50% - 1px);
	height: calc(100% - 2px);
	transition: width 0.15s ease-out, height 0.15s ease-out 0.15s;
}

.categoryWrapper button > span > span:before{
	content:'';
	position: absolute;
	bottom:0;
	right: 0%;
	width: 1px;
	height: 1px;
	opacity: 0;
	
}

.categoryWrapper:hover button > span > span:before{
	opacity: 1;
	border-bottom: 1px solid white;
	width: calc(50%);
	height: 1px;
	transition: opacity 0s ease-out 0.29s, width 0.15s ease-out 0.3s;
}

.categoryWrapper button > span > span:after{
	content:'';
	position: absolute;
	bottom:0;
	left: 0%;
	width: 1px;
	height: 1px;
	opacity: 0;
	
}

.categoryWrapper:hover button > span > span:after{
	opacity: 1;
	border-bottom: 1px solid white;
	width: calc(50%);
	height: 1px;
	transition: opacity 0s ease-out 0.29s, width 0.15s ease-out 0.3s;
}

.categoryWrapper button > span > span > span{
	transition: color 0.15s ease-out 0.3s;
	color: transparent;
}

.categoryWrapper:hover button > span > span > span{
	color:white;
}

.categoryWrapper button > span > span > span:after{
	position: absolute;
	top:0;left:0;right:0;bottom:0;
	color:#1f2e4d;
	content: attr(data-attr-span);
	width: 0%;
	height: 100%;
	background:white;
	white-space: nowrap;
	text-align: center;
	margin: auto;
	overflow: hidden;
	display: flex;
	justify-content: center;
	transition: width 0.2s;
}

.categoryWrapper button:hover > span > span > span:after{
	width: 100%;
}

</style>


<div class="centerBox">
	
	<div class="categoryWrapper">
		<h1>This is the best recipe for you:<?php echo $_POST["bestFoods"]; ?></h1>
	</div>
	
</div>


</html>