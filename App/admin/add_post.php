   <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos
                    include "conecion.php";
                    mysql_select_db('sociamed', $conecion);

                    $sql  = ("SELECT Clientes.empresa,
                                  Plan_cliente.id_cliente
                                 FROM Clientes INNER JOIN Plan_cliente ON Clientes.id_cliente = Plan_cliente.id_cliente" );

                    $peticion =  mysql_query($sql, $conecion);
                    ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/appMerk.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css" />
        <link rel="stylesheet" href="../bootstrapvalidator/dist/css/bootstrapValidator.min.css"/>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="../js/jquery-1.11.1.min.js"></script>
      <script src="../js/bootstrap.js"></script>
       <script type="text/javascript" src="../bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
      <script src="../js/dropzone.js"></script>
	<script src="../js/appmerk.js"></script>
      <style type="text/css">

@media all and (-webkit-min-device-pixel-ratio: 1.5) {

}
#loading-font {
  position: absolute;
  display: none;
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
  width: 88px;
  height: 88px;
  top: 450px;
  left: 50%;
  margin-left: -44px;
}
.ie #loading-font {
  display: none;
}
#loading-font span {
  display: none;
}
article section {
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
}
.wf-active article section,
.wf-inactive article section {
  opacity: 1;
  -ms-filter: none;
  filter: none;
}
.wf-loading #loading-font {
  display: block;
  -webkit-animation: rotating 2s linear infinite;
  -moz-animation: rotating 2s linear infinite;
  -o-animation: rotating 2s linear infinite;
  -ms-animation: rotating 2s linear infinite;
  animation: rotating 2s linear infinite;
}
.ie .wf-loading #loading-font {
  display: block;
}
.wf-loading article section {
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
}
.wf-loading.ie article section {
  visibility: hidden;
}
a#fork-me {
  position: absolute;
  top: 0;
  right: 0;
  border: 0;
  width: 140px;
  height: 140px;
  background-image: url("../images/fork-me.png");
}
@media all and (-webkit-min-device-pixel-ratio: 1.5) {
  a#fork-me {
    background-image: url("../images/fork-me@2x.png");
    -webkit-background-size: 140px 140px;
    -moz-background-size: 140px 140px;
    background-size: 140px 140px;
  }
}
a#fork-me span {
  display: none;
}
article > header > img {
  display: none;
}
article > header h1#logo {
  margin: 0 auto;
  padding-top: 0;
  border: none !important;
  width: 247px;
  height: 267px;
  background-image: url("../images/logo.png");
}
@media all and (-webkit-min-device-pixel-ratio: 1.5) {
  article > header h1#logo {
    background-image: url("../images/logo@2x.png");
    -webkit-background-size: 247px 267px;
    -moz-background-size: 247px 267px;
    background-size: 247px 267px;
  }
}
article > header h1#logo span {
  display: none;
}
article > header #intro {
  background: #000;
  margin-top: 3.2em;
  margin-bottom: 3.2em;
  padding: 0;
}
article > header #intro h2 {
  padding: 1.4em 1.9em;
  color: #fff;
  font-weight: 200;
  font-size: 1.66em;
  line-height: 140%;
}
article > header #social-buttons {
  margin: 1em 0 2em 0;
  text-align: center;
}
article > header #social-buttons a {
  background: none;
}
article > header #social-buttons .social-button {
  display: inline-block;
}
@media screen and (max-width: 600px) {
  article > header #social-buttons .social-button {
    display: block;
  }
}
article > header #social-buttons .twitter-share-button {
  margin-left: 20px;
}
article > header #social-buttons .facebook-social-button {
  margin-right: 20px;
}
article > header #social-buttons .fb-like span {
  vertical-align: top;
}
article section strong {
  font-weight: 600;
}
article section a {
  color: #fff;
  background: #000;
  display: inline-block;
  padding: 0px 0.5em;
  text-decoration: underline;
}
article section h1,
article section h2,
article section h3 {
  color: #000;
  line-height: 140%;
}
article section h1 {
  border-top: 3px solid #000;
  font-weight: 600;
  margin: 4em 0 2em 0;
  font-size: 2.22em;
  text-transform: uppercase;
}
article section h2 {
  font-weight: 400;
  margin: 2em 0 0.7em 0;
  font-size: 2.22em;
}
article section h3 {
  font-size: 2em;
}
article section hr {
  border: none;
  display: block;
  height: 2px;
  background: #000;
  margin: 3.75em 0;
}
article section table {
  width: 100%;
  border: 1px solid #000;
  border-left: none;
  border-top: none;
}
article section table td,
article section table th {
  border: 1px solid #000;
  border-right: none;
  border-bottom: none;
  padding: 0.5em 0.9em;
  vertical-align: top;
}
article section table tbody tr:first-of-type td:first-of-type {
  border-top-color: #000;
}
article section table tbody tr td:first-of-type {
  background: #000;
  color: #fff;
  border-top-color: #fff;
  text-align: right;
}
article section table tbody tr td {
  background: #fff;
}
article section ul li {
  border-top: 1px dotted #000;
  padding: 0.4em 0 0.4em 20px;
  background: url("../images/arrow.png") no-repeat left 0.9em;
}
article section ul li:first-of-type {
  border: none;
}
@media all and (-webkit-min-device-pixel-ratio: 1.5) {
  article section ul li {
    background-image: url("../images/arrow@2x.png");
    -webkit-background-size: 12px 9px;
    -moz-background-size: 12px 9px;
    background-size: 12px 9px;
  }
}
article section ul,
article section ol,
article section p {
  margin: 1.4em 0;
}
article section pre {
  margin: 1.8em 0;
}
article section pre {
  overflow: auto;
  background: #fff;
  padding: 0.5em 0.8em;
}
article section blockquote {
  margin: 3.1em 0;
  background: #000;
  padding: 1.3em 1.9em;
  color: #fff;
  font-weight: 200;
  font-size: 1.1em;
  line-height: 140%;
}
article section blockquote p {
  margin: 0;
}
article section blockquote a {
  display: inline;
  padding: 0;
  background: transparent;
}
footer {
  margin-top: 19em;
  background: #000;
  padding-top: 3em;
  padding-bottom: 6.25em;
  color: #fff;
  zoom: 1;
}
footer a {
  color: #fff;
  text-decoration: none;
}
footer h1 {
  color: #fff;
  line-height: 140%;
  font-weight: 600;
  margin: 0 0 0.5em 0;
  font-size: 2.22em;
}
footer p {
  margin: 0.5em 0;
}
footer section {
  padding-bottom: 1.5em;
}
footer:before,
footer:after {
  content: "";
  display: table;
}
footer:after {
  clear: both;
}
article,
footer > div {
  margin-left: auto;
  margin-right: auto;
}
viewport {
  width: device-width;
}
@media screen and (max-width: 37.5em) {
  & {
    table: tr;
  }
  article,
  footer > div {
    width: auto;
    margin-left: 1em;
    margin-right: 1em;
  }
  table td {
    display: block;
  }
  article section table tbody tr td:first-of-type {
    text-align: left;
  }
  table thead {
    display: none;
  }
}
@media screen and (min-width: 37.5em) {
  article,
  footer > div {
    width: 32.470588235294116rem;
  }
}
@media screen and (min-width: 57em) {
  article,
  footer > div {
    width: 40.94117647058823rem;
  }
  footer section {
    width: 19.764705882352942rem;
    display: inline-block;
    vertical-align: top;
  }
  footer section h1 span {
    display: block;
  }
  footer section:nth-child(odd) {
    padding-right: 1em;
  }
  footer section:nth-child(even) {
    padding-left: 1em;
  }
}
@media screen and (min-width: 70em) {
  article section pre {
    margin-left: -3.5294117647058822rem;
    width: 49.411764705882355rem;
    padding: 1em 1.2em;
  }
}
@media screen and (max-width: 16.875em) {
  html {
    font-size: 0.9375em;
  }
}
@media screen and (max-width: 19.9375em) {
  html {
    font-size: 1em;
  }
}
@media screen and (min-width: 32.5em) and (max-width: 37.4375em),screen and (min-width: 45em) and (max-width: 56.9375em) {
  html {
    font-size: 1.125em;
  }
}
@media screen and (min-width: 56.9em) {
  html {
    font-size: 1.1875em;
  }
}
@-moz-keyframes rotating {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes rotating {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes rotating {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-ms-keyframes rotating {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@font-face {
  font-family: 'League Gothic';
  font-style: normal;
  font-weight: 500;
  src: local('League Gothic'), url("../fonts/league-gothic.woff") format('woff'), url("../fonts/league-gothic.ttf") format('ttf'), url("../fonts/league-gothic.eot") format('embedded-opentype'), url("../fonts/league-gothic.svg") format('svg');
}
h1#project {
  padding-bottom: 100px;
  background: url("../images/dropzonejs.png") no-repeat center bottom;
}
.dropzone,
.dropzone *,
.dropzone-previews,
.dropzone-previews * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.dropzone {
  position: relative;
  border: 1px solid rgba(0,0,0,0.08);
  background: rgba(0,0,0,0.02);
  padding: 1em;
}
.dropzone.dz-clickable {
  cursor: pointer;
}
.dropzone.dz-clickable .dz-message,
.dropzone.dz-clickable .dz-message span {
  cursor: pointer;
}
.dropzone.dz-clickable * {
  cursor: default;
}
.dropzone .dz-message {
  opacity: 1;
  -ms-filter: none;
  filter: none;
}
.dropzone.dz-drag-hover {
  border-color: rgba(0,0,0,0.15);
  background: rgba(0,0,0,0.04);
}
.dropzone.dz-started .dz-message {
  display: none;
}
.dropzone .dz-preview,
.dropzone-previews .dz-preview {
  background: rgba(255,255,255,0.8);
  position: relative;
  display: inline-block;
  margin: 17px;
  vertical-align: top;
  border: 1px solid #acacac;
  padding: 6px 6px 6px 6px;
}
.dropzone .dz-preview.dz-file-preview [data-dz-thumbnail],
.dropzone-previews .dz-preview.dz-file-preview [data-dz-thumbnail] {
  display: none;
}
.dropzone .dz-preview .dz-details,
.dropzone-previews .dz-preview .dz-details {
  width: 100px;
  height: 100px;
  position: relative;
  background: #ebebeb;
  padding: 5px;
  margin-bottom: 22px;
}
.dropzone .dz-preview .dz-details .dz-filename,
.dropzone-previews .dz-preview .dz-details .dz-filename {
  overflow: hidden;
  height: 100%;
}
.dropzone .dz-preview .dz-details img,
.dropzone-previews .dz-preview .dz-details img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100px;
  height: 100px;
}
.dropzone .dz-preview .dz-details .dz-size,
.dropzone-previews .dz-preview .dz-details .dz-size {
  position: absolute;
  bottom: -28px;
  left: 3px;
  height: 28px;
  line-height: 28px;
}
.dropzone .dz-preview.dz-error .dz-error-mark,
.dropzone-previews .dz-preview.dz-error .dz-error-mark {
  display: block;
}
.dropzone .dz-preview.dz-success .dz-success-mark,
.dropzone-previews .dz-preview.dz-success .dz-success-mark {
  display: block;
}
.dropzone .dz-preview:hover .dz-details img,
.dropzone-previews .dz-preview:hover .dz-details img {
  display: none;
}
.dropzone .dz-preview .dz-success-mark,
.dropzone-previews .dz-preview .dz-success-mark,
.dropzone .dz-preview .dz-error-mark,
.dropzone-previews .dz-preview .dz-error-mark {
  display: none;
  position: absolute;
  width: 40px;
  height: 40px;
  font-size: 30px;
  text-align: center;
  right: -10px;
  top: -10px;
}
.dropzone .dz-preview .dz-success-mark,
.dropzone-previews .dz-preview .dz-success-mark {
  color: #8cc657;
}
.dropzone .dz-preview .dz-error-mark,
.dropzone-previews .dz-preview .dz-error-mark {
  color: #ee162d;
}
.dropzone .dz-preview .dz-progress,
.dropzone-previews .dz-preview .dz-progress {
  position: absolute;
  top: 100px;
  left: 6px;
  right: 6px;
  height: 6px;
  background: #d7d7d7;
  display: none;
}
.dropzone .dz-preview .dz-progress .dz-upload,
.dropzone-previews .dz-preview .dz-progress .dz-upload {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  background-color: #8cc657;
}
.dropzone .dz-preview.dz-processing .dz-progress,
.dropzone-previews .dz-preview.dz-processing .dz-progress {
  display: block;
}
.dropzone .dz-preview .dz-error-message,
.dropzone-previews .dz-preview .dz-error-message {
  display: none;
  position: absolute;
  top: -5px;
  left: -20px;
  background: rgba(245,245,245,0.8);
  padding: 8px 10px;
  color: #800;
  min-width: 140px;
  max-width: 500px;
  z-index: 500;
}
.dropzone .dz-preview:hover.dz-error .dz-error-message,
.dropzone-previews .dz-preview:hover.dz-error .dz-error-message {
  display: block;
}
.dropzone {
  border: 1px solid rgba(0,0,0,0.03);
  min-height: 218px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  background: rgba(0,0,0,0.03);
  padding: 23px;
}
.dropzone .dz-default.dz-message {
  opacity: 1;
  -ms-filter: none;
  filter: none;
  -webkit-transition: opacity 0.3s ease-in-out;
  -moz-transition: opacity 0.3s ease-in-out;
  -o-transition: opacity 0.3s ease-in-out;
  -ms-transition: opacity 0.3s ease-in-out;
  transition: opacity 0.3s ease-in-out;
  background-image: url("../images/arrastrar.png");
  background-repeat: no-repeat;
  background-position: 0 0;
  position: absolute;
  width: 428px;
  height: 123px;
  margin-left: -214px;
  margin-top: -61.5px;
  top: 50%;
  left: 50%;
}
@media all and (-webkit-min-device-pixel-ratio: 1.5) {
  .dropzone .dz-default.dz-message {
    background-image: url("../images/spritemap@2x.png");
    -webkit-background-size: 428px 406px;
    -moz-background-size: 428px 406px;
    background-size: 428px 406px;
  }
}
.dropzone .dz-default.dz-message span {
  display: none;
}
.dropzone.dz-square .dz-default.dz-message {
  background-position: 0 -123px;
  width: 268px;
  margin-left: -134px;
  height: 174px;
  margin-top: -87px;
}
.dropzone.dz-drag-hover .dz-message {
  opacity: 0.15;
  filter: alpha(opacity=15);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=15)";
}
.dropzone.dz-started .dz-message {
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
}
.dropzone .dz-preview,
.dropzone-previews .dz-preview {
  -webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
  box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
  font-size: 14px;
}
.dropzone .dz-preview.dz-image-preview:hover .dz-details img,
.dropzone-previews .dz-preview.dz-image-preview:hover .dz-details img {
  display: block;
  opacity: 0.1;
  filter: alpha(opacity=10);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=10)";
}
.dropzone .dz-preview.dz-success .dz-success-mark,
.dropzone-previews .dz-preview.dz-success .dz-success-mark {
  opacity: 1;
  -ms-filter: none;
  filter: none;
}
.dropzone .dz-preview.dz-error .dz-error-mark,
.dropzone-previews .dz-preview.dz-error .dz-error-mark {
  opacity: 1;
  -ms-filter: none;
  filter: none;
}
.dropzone .dz-preview.dz-error .dz-progress .dz-upload,
.dropzone-previews .dz-preview.dz-error .dz-progress .dz-upload {
  background: #ee1e2d;
}
.dropzone .dz-preview .dz-error-mark,
.dropzone-previews .dz-preview .dz-error-mark,
.dropzone .dz-preview .dz-success-mark,
.dropzone-previews .dz-preview .dz-success-mark {
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
  background-image: url("../images/arrastrar.png");
  background-repeat: no-repeat;
}
@media all and (-webkit-min-device-pixel-ratio: 1.5) {
  .dropzone .dz-preview .dz-error-mark,
  .dropzone-previews .dz-preview .dz-error-mark,
  .dropzone .dz-preview .dz-success-mark,
  .dropzone-previews .dz-preview .dz-success-mark {
    background-image: url("../images/spritemap@2x.png");
    -webkit-background-size: 428px 406px;
    -moz-background-size: 428px 406px;
    background-size: 428px 406px;
  }
}
.dropzone .dz-preview .dz-error-mark span,
.dropzone-previews .dz-preview .dz-error-mark span,
.dropzone .dz-preview .dz-success-mark span,
.dropzone-previews .dz-preview .dz-success-mark span {
  display: none;
}
.dropzone .dz-preview .dz-error-mark,
.dropzone-previews .dz-preview .dz-error-mark {
  background-position: -268px -123px;
}
.dropzone .dz-preview .dz-success-mark,
.dropzone-previews .dz-preview .dz-success-mark {
  background-position: -268px -163px;
}
.dropzone .dz-preview .dz-progress .dz-upload,
.dropzone-previews .dz-preview .dz-progress .dz-upload {
  -webkit-animation: loading 0.4s linear infinite;
  -moz-animation: loading 0.4s linear infinite;
  -o-animation: loading 0.4s linear infinite;
  -ms-animation: loading 0.4s linear infinite;
  animation: loading 0.4s linear infinite;
  -webkit-transition: width 0.3s ease-in-out;
  -moz-transition: width 0.3s ease-in-out;
  -o-transition: width 0.3s ease-in-out;
  -ms-transition: width 0.3s ease-in-out;
  transition: width 0.3s ease-in-out;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-image: url("../images/arrastrar.png");
  background-repeat: repeat-x;
  background-position: 0px -400px;
}
@media all and (-webkit-min-device-pixel-ratio: 1.5) {
  .dropzone .dz-preview .dz-progress .dz-upload,
  .dropzone-previews .dz-preview .dz-progress .dz-upload {
    background-image: url("../images/spritemap@2x.png");
    -webkit-background-size: 428px 406px;
    -moz-background-size: 428px 406px;
    background-size: 428px 406px;
  }
}
.dropzone .dz-preview.dz-success .dz-progress,
.dropzone-previews .dz-preview.dz-success .dz-progress {
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
}
.dropzone .dz-preview .dz-error-message,
.dropzone-previews .dz-preview .dz-error-message {
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: opacity 0.3s ease-in-out;
  -moz-transition: opacity 0.3s ease-in-out;
  -o-transition: opacity 0.3s ease-in-out;
  -ms-transition: opacity 0.3s ease-in-out;
  transition: opacity 0.3s ease-in-out;
}
.dropzone .dz-preview:hover.dz-error .dz-error-message,
.dropzone-previews .dz-preview:hover.dz-error .dz-error-message {
  opacity: 1;
  -ms-filter: none;
  filter: none;
}
.dropzone a.dz-remove,
.dropzone-previews a.dz-remove {
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fafafa), color-stop(1, #eee));
  background-image: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
  background-image: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
  background-image: -o-linear-gradient(top, #fafafa 0%, #eee 100%);
  background-image: -ms-linear-gradient(top, #fafafa 0%, #eee 100%);
  background-image: linear-gradient(top, #fafafa 0%, #eee 100%);
  -webkit-border-radius: 2px;
  border-radius: 2px;
  border: 1px solid #eee;
  text-decoration: none;
  display: block;
  padding: 4px 5px;
  text-align: center;
  color: #aaa;
  margin-top: 26px;
}
.dropzone a.dz-remove:hover,
.dropzone-previews a.dz-remove:hover {
  color: #666;
}
@-moz-keyframes loading {
  0% {
    background-position: 0 -400px;
  }

  100% {
    background-position: -7px -400px;
  }
}
@-webkit-keyframes loading {
  0% {
    background-position: 0 -400px;
  }

  100% {
    background-position: -7px -400px;
  }
}
@-o-keyframes loading {
  0% {
    background-position: 0 -400px;
  }

  100% {
    background-position: -7px -400px;
  }
}
@-ms-keyframes loading {
  0% {
    background-position: 0 -400px;
  }

  100% {
    background-position: -7px -400px;
  }
}
@keyframes loading {
  0% {
    background-position: 0 -400px;
  }

  100% {
    background-position: -7px -400px;
  }
}
#dropzone {
  margin: 30px 0;
  -webkit-box-shadow: 0 0 50px rgba(0,0,0,0.13);
  box-shadow: 0 0 50px rgba(0,0,0,0.13);
  padding: 4px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
#dropzone .dropzone {
  -webkit-box-shadow: none;
  box-shadow: none;
}
@media screen and (max-width: 37.5em) {
  .dropzone .dz-default.dz-message {
    background-position: 0 -123px;
    width: 268px;
    margin-left: -134px;
    height: 174px;
    margin-top: -87px;
  }
}
}
      </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
              <img src="../images/Crear_Estudios.png">
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="usuario nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenido Byron Garcia</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-star"> Plan Dedicado</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"> Salir</a></li>
          </ul>
        </div>
      </div>
    </div>
        <h2 class="reporte">Reporte</h2>
<div id="cont-appMerk" class="container-fluid">
      <div class="row">
              <!-- Alertas
                    <div class="alert alert-success" role="alert"> Positivo</div>
                    <div class="alert alert-info" role="alert">Recuerde...</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    <div class="alert alert-danger" role="alert"> ¡Cuidado!</div>
            -->
        <div class="col-md-12 main">
          <div id="contReporte" class="row placeholders col-sm-offset-1">
      <!-- Reporte Graficos -->
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="cFace" data-dimension="150" data-text="50 post" data-info="Facebook" data-width="30" data-fontsize="16" data-percent="45" data-fgcolor="#3b5998" data-bgcolor="#dfe3ee" data-type="half" data-fill="#fff"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <div id="cTwee" data-dimension="150" data-text="140 post" data-info="Twitter" data-width="30" data-fontsize="16" data-percent="75" data-fgcolor="#9AE4E8" data-bgcolor="#eee" data-type="half" data-fill="#fff"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="cYoutube" data-dimension="150" data-text="1 video" data-info="Youtube" data-width="30" data-fontsize="16" data-percent="50" data-fgcolor="#B50505" data-bgcolor="#eee" data-type="half" data-fill="#fff"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <div id="cReportes" data-dimension="150" data-text="1 reporte" data-info="Estadisticas" data-width="30" data-fontsize="16" data-percent="30" data-fgcolor="#E49A39" data-bgcolor="#eee" data-type="half" data-fill="#fff"></div>
            </div>
          </div>
        <div class="row">
          <header class="col-sm-12 cont-filtros">
                          <h2 class="titu-2 col-sm-3"><span class="glyphicon glyphicon-calendar"></span> Registro de Post</h2>
          </header>

           <div class="col-xs-12 col-sm-12">
                    <form id="formNo1" action="reg_post.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Empresa</label>
                        <select id="selEmpresa" class="col-sm-5 col-xs-12 select-1" name='empresa'>
                              <option value="">Seleccione una Empresa</option>
                              <?php
                                            while ( $fila = mysql_fetch_array($peticion)) {
                                                      echo "<option value=".$fila ['id_cliente'].">".$fila ['empresa']."</option>";
                                            }
                                            mysql_close($conecion);
                              ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Campaña</label>
                        <select id="selCampana"  class="col-sm-5 col-xs-12 select-1" name='campana'>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tipo</label>
                        <select id="selTipo"  class="col-sm-5 col-xs-12 select-1" name='categoria'>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Red</label>
                        <div class="col-sm-5">
                            <div class="radio">
                                <label>
                                    <input type="radio" name='red' value='1' /> Facebook
                                </label>
                                <label>
                                    <input type="radio" name='red' value='2' /> Twitter
                                </label>
                                <label>
                                    <input type="radio" name='red' value='3' /> Youtube
                                </label>
                            </div>
                        </div>
                    </div>
                  <div class="form-group">
                       <label class="col-sm-3 control-label">Imagen</label>
                        <div action="http://www.torrentplease.com/dropzone.php" name='imagen' class="dropzone dz-clickable col-sm-5" id="demo-upload">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                        </div>
                </div>
                   <div class="form-group">
                       <label class="col-sm-3 control-label">Imagen</label>
                       <input class="input-2" type='file' name='imagen'>
                </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contenido</label>
                        <div class="col-sm-5">
                            <textarea class="textarea-1" name='descripcion'></textarea>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Día de publicación</label>
                        <div class="col-sm-5">
                            <select class="col-sm-5 col-xs-12 select-1" name='dia'>
                                 <option >Seleccione un día</option>
                                 <option value="lunes">Lunes</option>
                                <option value="martes">Martes</option>
                                <option value="miercoles">Miercoles</option>
                                <option value="jueves">Jueves</option>
                                <option value="viernes">Viernes</option>
                      </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Semana</label>
                        <div class="col-sm-5">
                            <select class="col-sm-5 col-xs-12 select-1" name='semana'>
                                <option >Seleccione una semana</option>
                                 <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                      </select>
                        </div>
                    </div>
                       <input type="hidden" name="estado" value="0">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                            <button type="submit" class="btn btn-default">Guardar</button>
                        </div>
                    </div>
            </form>
          </div>

          </div>
          </div>
          </div>
      </div>
    </div>

<script>
$(document).ready(function() {
    $('#formNo1').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
                 empresa: {
                message: 'El nombre de empresa es obligatorio',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            campana: {
                message: 'El nombre de empresa es obligatorio',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            categoria: {
                message: 'El nombre de empresa es obligatorio',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            red: {
                validators: {
                    notEmpty: {
                        message: 'El tipo es  obligatorio'
                    }
                }
            },
            descripcion: {
                message: 'El nombre de empresa es obligatorio',
                validators: {
                    notEmpty: {
                        message: 'El contenido es  obligatorio'
                    }
                }
            },
              dia: {
                message: 'El nombre de empresa es obligatorio',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            semana: {
                message: 'El nombre de empresa es obligatorio',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            }
        }
    });
});
</script>


</body>
</html>