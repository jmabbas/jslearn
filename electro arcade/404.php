<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package electro
 */
electro_get_header(); ?>

<style>
	#container-gameover {
	width:100%; 
	border:3px
	solid #fff;
	margin:10;
	padding:10;	
	text-align:center;
	display: flex;
	justify-content: center;
	max-width: 100%;
    flex-direction: revert;
    align-items: baseline;
}

 
#gameover {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top:5px;
    text-align:center;
    font-size: 70px;
    
  }

.background404 {
  background: white;
}

/*container text*/
.container-text {
float:bottom;
  margin-left: 5%;
  margin-right: 5%;
  margin-bottom: 6%;
  margin-top: 3%;
  bottom:0;
}

.continue, #gameover, .journey, a.continue:active{
  color: #BD3479;
  text-transform: uppercase;
  font-family: 'Press Start 2P', cursive;
  letter-spacing: 2px;
}

.journey{
  color: #000;
  text-transform: uppercase;
  font-family: 'Press Start 2P', cursive;
  letter-spacing: 2px;
}

.continue{
  margin-left: 30%;
  font-size: 18px;
}

.journey{
    display: block;
    margin: auto;
    margin-left: auto;
    margin-right: auto;
    margin-top:2%;
    margin-bottom: 3%;
    width: 100%;
    text-align:center;
    position:relative;
    font-size: 18px;
}


a {
  text-decoration: none;
}

/*pixel art-left*/
.container-pixel-left {
float:left;
  margin-left: 5%;
  margin-bottom: 4%;
  margin-top: 2%;
}
/*pixel art-right*/
.container-pixel-right {
float:right;
  margin-right: 5%;
  margin-bottom: 2%;
  margin-top: 5%;
}
#art {
	width: 150px;
	height: 130px;
}
	
.container-text a.click-link {
  font-family: 'Press Start 2P', cursive;
  color: #bd3479;
  font-size: 16px;
}

#art:after {
  content: '';
	display: inline;
  float: left;
  clear: both;
	width: 5px;
	height: 5px;
  margin-left:10%;
	background: transparent;
	box-shadow:24px 36px #222222,30px 36px #222222,36px 36px #222222,42px 36px #222222,48px 36px #222222,54px 36px #222222,24px 42px #222222,24px 48px #222222,30px 42px #222222,36px 42px #222222,42px 42px #222222,48px 42px #222222,54px 42px #222222,30px 48px #222222,36px 48px #222222,42px 48px #222222,48px 48px #222222,54px 48px #222222,60px 36px #222222,60px 48px #222222,60px 42px #222222,66px 36px #222222,66px 42px #222222,66px 48px #222222,18px 54px #222222,12px 54px #222222,6px 54px #222222,18px 60px #222222,18px 66px #222222,18px 72px #222222,18px 78px #222222,18px 84px #222222,18px 90px #222222,18px 96px #222222,18px 102px #222222,18px 108px #222222,12px 108px #222222,6px 60px #222222,6px 66px #222222,6px 72px #222222,6px 78px #222222,6px 84px #222222,6px 90px #222222,6px 96px #222222,6px 102px #222222,6px 108px #222222,12px 60px #222222,12px 66px #222222,12px 78px #222222,12px 84px #222222,12px 96px #222222,12px 102px #222222,12px 90px #222222,12px 72px #222222,72px 54px #222222,78px 54px #222222,84px 54px #222222,72px 60px #222222,72px 66px #222222,84px 60px #222222,84px 66px #222222,78px 66px #222222,78px 60px #222222,90px 36px #222222,90px 48px #222222,90px 42px #222222,96px 36px #222222,108px 36px #222222,102px 36px #222222,114px 36px #222222,120px 36px #222222,126px 36px #222222,132px 36px #222222,132px 42px #222222,132px 48px #222222,126px 48px #222222,120px 48px #222222,114px 48px #222222,108px 48px #222222,102px 48px #222222,96px 48px #222222,96px 42px #222222,102px 42px #222222,108px 42px #222222,126px 42px #222222,120px 42px #222222,114px 42px #222222,138px 54px #222222,150px 54px #222222,144px 54px #222222,150px 60px #222222,150px 66px #222222,150px 72px #222222,150px 78px #222222,150px 84px #222222,150px 90px #222222,150px 96px #222222,150px 102px #222222,138px 60px #222222,138px 66px #222222,138px 78px #222222,138px 72px #222222,138px 84px #222222,138px 96px #222222,138px 90px #222222,138px 102px #222222,144px 102px #222222,144px 84px #222222,144px 66px #222222,144px 60px #222222,144px 72px #222222,144px 78px #222222,144px 90px #222222,144px 96px #222222,138px 108px #222222,144px 108px #222222,150px 108px #222222,18px 114px #222222,24px 114px #222222,30px 114px #222222,30px 126px #222222,24px 126px #222222,18px 126px #222222,18px 120px #222222,30px 120px #222222,24px 120px #222222,36px 132px #222222,42px 132px #222222,48px 132px #222222,48px 138px #222222,42px 138px #222222,36px 138px #222222,36px 144px #222222,42px 144px #222222,48px 144px #222222,54px 150px #222222,66px 150px #222222,60px 150px #222222,54px 156px #222222,54px 162px #222222,60px 162px #222222,66px 156px #222222,66px 162px #222222,60px 156px #222222,72px 168px #222222,72px 174px #222222,72px 180px #222222,78px 180px #222222,78px 168px #222222,84px 168px #222222,78px 174px #222222,84px 180px #222222,84px 174px #222222,90px 150px #222222,90px 156px #222222,90px 162px #222222,96px 150px #222222,102px 150px #222222,102px 156px #222222,102px 162px #222222,96px 162px #222222,96px 156px #222222,108px 144px #222222,120px 144px #222222,114px 144px #222222,108px 138px #222222,108px 132px #222222,114px 132px #222222,120px 132px #222222,120px 138px #222222,114px 138px #222222,126px 126px #222222,132px 126px #222222,138px 126px #222222,126px 120px #222222,126px 114px #222222,132px 114px #222222,132px 120px #222222,138px 120px #222222,138px 114px #222222,60px 60px #BD3479,54px 54px #BD3479,24px 54px #BD3479,30px 54px #BD3479,42px 54px #BD3479,36px 54px #BD3479,48px 54px #BD3479,60px 54px #BD3479,66px 54px #BD3479,66px 60px #BD3479,24px 60px #BD3479,24px 66px #BD3479,24px 72px #BD3479,24px 78px #BD3479,24px 84px #BD3479,24px 90px #BD3479,24px 96px #BD3479,24px 102px #BD3479,24px 108px #BD3479,30px 108px #BD3479,30px 102px #BD3479,30px 96px #BD3479,30px 90px #BD3479,30px 84px #BD3479,30px 78px #BD3479,30px 72px #BD3479,30px 66px #BD3479,30px 60px #BD3479,36px 60px #BD3479,48px 60px #BD3479,54px 60px #BD3479,42px 60px #BD3479,66px 66px #BD3479,72px 72px #BD3479,84px 72px #BD3479,78px 72px #BD3479,66px 72px #BD3479,90px 72px #BD3479,90px 66px #BD3479,90px 60px #BD3479,90px 54px #BD3479,96px 54px #BD3479,108px 54px #BD3479,102px 54px #BD3479,114px 54px #BD3479,120px 54px #BD3479,132px 54px #BD3479,126px 54px #BD3479,132px 60px #BD3479,132px 66px #BD3479,132px 72px #BD3479,132px 78px #BD3479,132px 84px #BD3479,132px 90px #BD3479,132px 96px #BD3479,132px 102px #BD3479,132px 108px #BD3479,126px 108px #BD3479,120px 108px #BD3479,120px 114px #BD3479,120px 126px #BD3479,114px 126px #BD3479,108px 126px #BD3479,36px 114px #BD3479,36px 120px #BD3479,36px 126px #BD3479,42px 126px #BD3479,48px 126px #BD3479,54px 132px #BD3479,54px 138px #BD3479,54px 144px #BD3479,60px 144px #BD3479,66px 144px #BD3479,72px 144px #BD3479,72px 150px #BD3479,72px 156px #BD3479,72px 162px #BD3479,84px 162px #BD3479,84px 156px #BD3479,84px 150px #BD3479,84px 144px #BD3479,90px 144px #BD3479,96px 144px #BD3479,102px 144px #BD3479,102px 138px #BD3479,102px 132px #BD3479,102px 126px #BD3479,78px 144px #BD3479,78px 150px #BD3479,78px 162px #BD3479,78px 156px #BD3479,60px 126px #BD3479,54px 126px #BD3479,60px 132px #BD3479,60px 138px #BD3479,66px 138px #BD3479,66px 132px #BD3479,66px 126px #BD3479,72px 126px #BD3479,72px 132px #BD3479,72px 138px #BD3479,78px 138px #BD3479,78px 132px #BD3479,78px 126px #BD3479,84px 126px #BD3479,84px 138px #BD3479,84px 132px #BD3479,90px 138px #BD3479,90px 132px #BD3479,96px 126px #BD3479,96px 132px #BD3479,96px 138px #BD3479,90px 126px #BD3479,120px 120px #BD3479,114px 114px #BD3479,114px 108px #BD3479,114px 120px #BD3479,114px 102px #BD3479,120px 102px #BD3479,126px 102px #BD3479,126px 96px #BD3479,126px 90px #BD3479,126px 78px #BD3479,126px 60px #BD3479,126px 66px #BD3479,126px 72px #BD3479,126px 84px #BD3479,120px 90px #BD3479,120px 96px #BD3479,114px 96px #BD3479,114px 90px #BD3479,36px 108px #BD3479,66px 78px #BD3479,66px 84px #BD3479,66px 90px #BD3479,66px 96px #BD3479,66px 102px #BD3479,66px 108px #BD3479,66px 114px #BD3479,66px 120px #BD3479,60px 120px #BD3479,60px 114px #BD3479,60px 102px #BD3479,60px 108px #BD3479,60px 96px #BD3479,60px 90px #BD3479,60px 78px #BD3479,60px 66px #BD3479,60px 84px #BD3479,60px 72px #BD3479,42px 120px #BD3479,54px 120px #BD3479,48px 120px #BD3479,54px 114px #BD3479,48px 114px #BD3479,42px 114px #BD3479,42px 108px #BD3479,48px 108px #BD3479,54px 108px #BD3479,72px 78px #BD3479,54px 66px #BD3479,48px 66px #BD3479,36px 66px #BD3479,42px 66px #BD3479,36px 72px #BD3479,42px 72px #BD3479,48px 72px #BD3479,54px 72px #BD3479,54px 78px #BD3479,54px 84px #BD3479,54px 90px #BD3479,54px 96px #BD3479,54px 102px #BD3479,48px 102px #BD3479,42px 102px #BD3479,36px 102px #BD3479,36px 96px #BD3479,42px 96px #BD3479,48px 96px #BD3479,48px 90px #BD3479,48px 84px #BD3479,36px 78px #BD3479,48px 78px #BD3479,42px 78px #BD3479,42px 84px #BD3479,36px 90px #BD3479,36px 84px #BD3479,42px 90px #BD3479,72px 120px #BD3479,78px 120px #BD3479,90px 120px #BD3479,84px 120px #BD3479,96px 120px #BD3479,108px 120px #BD3479,102px 120px #BD3479,96px 78px #BD3479,102px 78px #BD3479,108px 84px #BD3479,108px 78px #BD3479,90px 78px #BD3479,84px 78px #BD3479,78px 78px #BD3479,96px 60px #BD3479,96px 66px #BD3479,96px 72px #BD3479,102px 72px #BD3479,102px 66px #BD3479,102px 60px #BD3479,108px 60px #BD3479,108px 72px #BD3479,108px 66px #BD3479,114px 60px #BD3479,120px 60px #BD3479,120px 66px #BD3479,114px 66px #BD3479,114px 72px #BD3479,120px 72px #BD3479,120px 78px #BD3479,114px 78px #BD3479,114px 84px #BD3479,120px 84px #BD3479,72px 84px #BD3479,72px 90px #BD3479,72px 96px #BD3479,72px 102px #BD3479,72px 108px #BD3479,72px 114px #BD3479,78px 114px #BD3479,78px 108px #BD3479,78px 102px #BD3479,78px 96px #BD3479,78px 90px #BD3479,78px 84px #BD3479,90px 84px #BD3479,102px 84px #BD3479,96px 84px #BD3479,84px 84px #BD3479,84px 90px #BD3479,96px 96px #BD3479,102px 108px #BD3479,108px 114px #BD3479,102px 102px #BD3479,90px 96px #BD3479,96px 90px #BD3479,90px 90px #BD3479,102px 90px #BD3479,102px 96px #BD3479,108px 90px #BD3479,108px 96px #BD3479,108px 102px #BD3479,108px 108px #BD3479,102px 114px #BD3479,90px 114px #BD3479,84px 114px #BD3479,84px 102px #BD3479,84px 96px #BD3479,84px 108px #BD3479,90px 102px #BD3479,96px 102px #BD3479,90px 108px #BD3479,96px 108px #BD3479,96px 114px #BD3479;
}

/*pixel art-2*/

.container-pixel-2 {
  transform: scale(0.4, 0.4);
  margin-right: 85%;
}

#art-2 {
	width: 20px;
	height: 20px;
}

#art-2:after {
	content: '';
	display: block;
	width: 6px;
	height: 6px;
	background: transparent;
	box-shadow:90px 0px #222222,96px 0px #222222,102px 0px #222222,84px 0px #222222,108px 0px #222222,78px 0px #222222,78px 6px #222222,108px 6px #222222,84px 12px #222222,96px 12px #222222,90px 12px #222222,108px 12px #222222,84px 6px #222222,90px 6px #222222,96px 6px #222222,102px 6px #222222,102px 12px #222222,78px 12px #222222,72px 18px #222222,66px 18px #222222,72px 24px #222222,66px 24px #222222,60px 18px #222222,60px 24px #222222,60px 30px #222222,66px 30px #222222,72px 30px #222222,114px 18px #222222,120px 18px #222222,126px 18px #222222,126px 24px #222222,126px 30px #222222,120px 30px #222222,120px 24px #222222,114px 24px #222222,114px 30px #222222,54px 36px #222222,48px 36px #222222,42px 36px #222222,54px 48px #222222,48px 48px #222222,42px 48px #222222,48px 42px #222222,54px 42px #222222,42px 42px #222222,36px 54px #222222,30px 54px #222222,24px 54px #222222,24px 60px #222222,36px 60px #222222,36px 72px #222222,36px 66px #222222,24px 66px #222222,24px 72px #222222,24px 90px #222222,24px 78px #222222,24px 84px #222222,24px 96px #222222,24px 102px #222222,36px 78px #222222,36px 84px #222222,36px 90px #222222,36px 96px #222222,36px 102px #222222,36px 108px #222222,24px 108px #222222,36px 114px #222222,36px 120px #222222,24px 114px #222222,24px 120px #222222,36px 126px #222222,30px 126px #222222,24px 126px #222222,132px 36px #222222,138px 36px #222222,144px 36px #222222,144px 42px #222222,144px 48px #222222,138px 48px #222222,132px 48px #222222,132px 42px #222222,138px 42px #222222,150px 54px #222222,156px 54px #222222,150px 60px #222222,150px 72px #222222,150px 66px #222222,150px 78px #222222,150px 84px #222222,150px 90px #222222,150px 96px #222222,150px 102px #222222,150px 114px #222222,150px 120px #222222,150px 108px #222222,150px 126px #222222,162px 54px #222222,162px 60px #222222,162px 66px #222222,162px 72px #222222,162px 78px #222222,162px 84px #222222,162px 90px #222222,162px 96px #222222,162px 102px #222222,162px 108px #222222,162px 114px #222222,162px 120px #222222,162px 126px #222222,42px 132px #222222,54px 132px #222222,48px 132px #222222,42px 138px #222222,42px 144px #222222,48px 144px #222222,54px 144px #222222,54px 138px #222222,48px 138px #222222,60px 150px #222222,66px 150px #222222,72px 150px #222222,60px 156px #222222,60px 162px #222222,66px 162px #222222,72px 162px #222222,72px 156px #222222,66px 156px #222222,78px 168px #222222,78px 174px #222222,78px 180px #222222,84px 180px #222222,96px 180px #222222,90px 180px #222222,144px 132px #222222,138px 132px #222222,132px 138px #222222,132px 144px #222222,144px 144px #222222,144px 138px #222222,138px 144px #222222,138px 138px #222222,126px 150px #222222,126px 156px #222222,120px 162px #222222,114px 162px #222222,114px 156px #222222,120px 150px #222222,114px 150px #222222,126px 162px #222222,120px 156px #222222,84px 168px #222222,90px 168px #222222,102px 168px #222222,108px 168px #222222,96px 168px #222222,108px 174px #222222,108px 180px #222222,102px 180px #222222,96px 174px #222222,84px 174px #222222,90px 174px #222222,102px 174px #222222,30px 60px #222222,30px 66px #222222,30px 72px #222222,30px 78px #222222,30px 84px #222222,30px 90px #222222,30px 96px #222222,30px 102px #222222,30px 114px #222222,30px 120px #222222,30px 108px #222222,156px 60px #222222,156px 66px #222222,156px 72px #222222,156px 78px #222222,156px 84px #222222,156px 90px #222222,156px 96px #222222,156px 102px #222222,156px 108px #222222,156px 114px #222222,156px 120px #222222,156px 126px #222222,102px 24px #FFFF00,102px 18px #FFFF00,108px 18px #FFFF00,108px 24px #FFFF00,102px 30px #FFFF00,108px 30px #FFFF00,102px 36px #FFFF00,108px 48px #FFFF00,114px 42px #FFFF00,108px 36px #FFFF00,108px 42px #FFFF00,114px 36px #FFFF00,120px 36px #FFFF00,126px 36px #FFFF00,126px 42px #FFFF00,126px 48px #FFFF00,120px 48px #FFFF00,120px 42px #FFFF00,114px 48px #FFFF00,138px 54px #FFFF00,144px 54px #FFFF00,144px 60px #FFFF00,144px 66px #FFFF00,144px 72px #FFFF00,144px 78px #FFFF00,144px 84px #FFFF00,144px 90px #FFFF00,144px 102px #FFFF00,144px 96px #FFFF00,144px 108px #FFFF00,144px 114px #FFFF00,144px 126px #FFFF00,144px 120px #FFFF00,138px 126px #FFFF00,132px 126px #FFFF00,126px 144px #FFFF00,126px 138px #FFFF00,120px 144px #FFFF00,114px 144px #FFFF00,108px 144px #FFFF00,108px 150px #FFFF00,108px 156px #FFFF00,108px 162px #FFFF00,84px 162px #FFFF00,102px 162px #FFFF00,96px 162px #FFFF00,78px 162px #FFFF00,90px 162px #FFFF00,84px 156px #FFFF00,90px 156px #FFFF00,96px 156px #FFFF00,102px 156px #FFFF00,78px 156px #FFFF00,78px 150px #FFFF00,84px 150px #FFFF00,90px 150px #FFFF00,96px 150px #FFFF00,102px 150px #FFFF00,102px 144px #FFFF00,96px 144px #FFFF00,90px 144px #FFFF00,84px 144px #FFFF00,78px 144px #FFFF00,42px 114px #FFFF00,48px 114px #FFFF00,54px 114px #FFFF00,42px 120px #FFFF00,42px 126px #FFFF00,48px 126px #FFFF00,54px 126px #FFFF00,54px 120px #FFFF00,48px 120px #FFFF00,60px 144px #FFFF00,60px 138px #FFFF00,60px 132px #FFFF00,66px 144px #FFFF00,72px 144px #FFFF00,66px 138px #FFFF00,72px 138px #FFFF00,138px 84px #FFFF00,132px 84px #FFFF00,126px 84px #FFFF00,120px 84px #FFFF00,120px 78px #FFFF00,126px 78px #FFFF00,126px 72px #FFFF00,132px 66px #FFFF00,132px 78px #FFFF00,138px 66px #FFFF00,138px 60px #FFFF00,132px 60px #FFFF00,132px 72px #FFFF00,138px 72px #FFFF00,138px 78px #FFFF00,138px 114px #FFFF00,138px 120px #FFFF00,138px 96px #FFFF00,138px 90px #FFFF00,138px 102px #FFFF00,138px 108px #FFFF00,132px 96px #FFFF00,132px 90px #FFFF00,120px 90px #FFFF00,126px 90px #FFFF00,126px 96px #FFFF00,132px 102px #FFFF00,132px 108px #FFFF00,132px 114px #FFFF00,132px 120px #FFFF00,126px 132px #FFFF00,120px 138px #FFFF00,114px 132px #FFFF00,120px 132px #FFFF00,78px 138px #FFFF00,114px 138px #FFFF00,96px 18px #FFFF00,96px 24px #FFFF00,96px 30px #FFFF00,96px 36px #FFFF00,96px 60px #FFFF00,96px 66px #FFFF00,96px 72px #FFFF00,96px 78px #FFFF00,96px 84px #FFFF00,96px 90px #FFFF00,96px 96px #FFFF00,96px 102px #FFFF00,96px 108px #FFFF00,96px 114px #FFFF00,96px 120px #FFFF00,126px 108px #FFFF00,126px 102px #FFFF00,120px 102px #FFFF00,120px 108px #FFFF00,102px 120px #FFFF00,120px 96px #FFFF00,102px 66px #FFFF00,102px 60px #FFFF00,108px 66px #FFFF00,108px 60px #FFFF00,120px 72px #FFFF00,102px 114px #FFFF00,90px 84px #FFFF00,90px 90px #FFFF00,132px 54px #FFFF00,126px 54px #222222,120px 54px #222222,114px 54px #222222,114px 60px #222222,114px 66px #222222,120px 66px #222222,126px 66px #222222,126px 60px #222222,120px 60px #222222,108px 72px #222222,132px 132px #222222,126px 120px #222222,126px 114px #222222,120px 114px #222222,126px 126px #222222,120px 120px #222222,120px 126px #222222,108px 96px #222222,108px 90px #222222,108px 84px #222222,108px 78px #222222,108px 102px #222222,108px 108px #222222,84px 24px #c5c3c3,90px 18px #c5c3c3,84px 18px #c5c3c3,78px 18px #c5c3c3,78px 24px #c5c3c3,90px 24px #c5c3c3,90px 30px #c5c3c3,84px 30px #c5c3c3,78px 30px #c5c3c3,90px 36px #222222,90px 66px #c5c3c3,90px 60px #c5c3c3,84px 66px #c5c3c3,78px 66px #c5c3c3,78px 60px #c5c3c3,78px 36px #c5c3c3,84px 36px #c5c3c3,84px 60px #c5c3c3,78px 48px #c5c3c3,78px 42px #c5c3c3,60px 36px #c5c3c3,72px 36px #c5c3c3,66px 36px #c5c3c3,66px 42px #c5c3c3,60px 48px #c5c3c3,60px 42px #c5c3c3,66px 48px #c5c3c3,72px 48px #c5c3c3,72px 42px #c5c3c3,54px 54px #c5c3c3,48px 54px #c5c3c3,42px 54px #c5c3c3,42px 60px #c5c3c3,42px 72px #c5c3c3,42px 78px #c5c3c3,42px 84px #c5c3c3,42px 90px #c5c3c3,42px 102px #c5c3c3,42px 108px #c5c3c3,42px 96px #c5c3c3,42px 66px #c5c3c3,48px 108px #c5c3c3,54px 108px #c5c3c3,54px 60px #c5c3c3,48px 60px #c5c3c3,48px 66px #c5c3c3,54px 66px #c5c3c3,54px 72px #c5c3c3,48px 84px #c5c3c3,48px 78px #c5c3c3,48px 72px #c5c3c3,48px 90px #c5c3c3,48px 96px #c5c3c3,48px 102px #c5c3c3,54px 102px #c5c3c3,54px 96px #c5c3c3,54px 90px #c5c3c3,54px 84px #c5c3c3,54px 78px #c5c3c3,60px 72px #c5c3c3,66px 72px #c5c3c3,66px 78px #c5c3c3,60px 78px #c5c3c3,60px 84px #c5c3c3,60px 90px #c5c3c3,60px 96px #c5c3c3,60px 102px #c5c3c3,60px 108px #c5c3c3,66px 102px #c5c3c3,66px 108px #c5c3c3,78px 132px #FFFF00,72px 132px #FFFF00,90px 96px #FFFF00,90px 102px #FFFF00,90px 108px #FFFF00,60px 54px #222222,66px 54px #222222,72px 54px #222222,72px 60px #222222,72px 66px #222222,66px 66px #222222,60px 66px #222222,60px 60px #222222,66px 60px #222222,78px 72px #222222,78px 78px #222222,78px 90px #222222,78px 96px #222222,78px 102px #222222,72px 114px #222222,66px 114px #222222,60px 114px #222222,60px 120px #222222,60px 126px #222222,66px 132px #FFFF00,66px 126px #222222,72px 126px #222222,72px 120px #222222,66px 120px #222222,90px 72px #FFFF00,90px 78px #FFFF00,78px 84px #222222,90px 114px #FFFF00,90px 120px #FFFF00,84px 114px #FFFF00,84px 120px #FFFF00,84px 72px #FFFF00,84px 78px #FFFF00,84px 84px #FFFF00,84px 90px #FFFF00,84px 96px #FFFF00,84px 102px #FFFF00,84px 108px #FFFF00,102px 72px #FFFF00,102px 78px #FFFF00,102px 84px #FFFF00,102px 90px #FFFF00,102px 102px #FFFF00,102px 108px #FFFF00,102px 96px #FFFF00,84px 42px #222222,90px 42px #222222,96px 42px #222222,84px 48px #222222,90px 48px #222222,96px 48px #222222,84px 54px #222222,90px 54px #222222,96px 54px #222222,78px 54px #222222,108px 54px #222222,102px 54px #222222,102px 42px #222222,102px 48px #222222,78px 126px #222222,84px 126px #222222,96px 126px #222222,90px 126px #222222,102px 126px #222222,96px 138px #222222,102px 138px #222222,102px 132px #222222,96px 132px #222222,90px 132px #222222,84px 132px #222222,84px 138px #222222,90px 138px #222222,108px 132px #FFFF00,108px 138px #FFFF00,72px 72px #222222,72px 78px #222222,72px 90px #222222,72px 108px #222222,72px 102px #222222,72px 96px #222222,72px 84px #222222,114px 72px #222222,114px 78px #222222,114px 84px #222222,114px 90px #222222,114px 96px #222222,114px 102px #222222,78px 120px #222222,78px 114px #222222,78px 108px #222222,114px 126px #222222,114px 120px #222222,114px 114px #222222,114px 108px #222222,108px 114px #222222,108px 120px #222222,108px 126px #222222,66px 84px #c5c3c3,66px 90px #c5c3c3,66px 96px #c5c3c3;
}
 </style>
<div id="container-gameover">
    <div class="container-pixel-left">
  <div id="art"></div>
    </div>



	<div class="container-text">
  <h1 id="gameover">Game Over</h1>
  <p class=journey>Your journey has come to an end...</p>
   <div class="container-pixel-2">
  	<div id="art-2"></div>
  </div>
  <a href="https://electroarcade.com.au/" class="click-link" target="_self">Click here to insert coins</a><a href="">
  <h3 class="continue">&nbsp;</h3>
  </a>
 </div>
  <div class="container-pixel-right">
  <div id="art"></div>
    </div> 
</div>

<?php get_footer();