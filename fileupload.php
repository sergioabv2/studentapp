<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="msapplication-tap-highlight" content="no"/>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

 <style>
  html{
      height: 100%;
      font-size: 1rem;
    }
    body{
      height: 100%; width: 100%;
      display: flex;
      flex-direction: column;
      margin: auto; padding:0;
      justify-content: center;
      align-items: center;
      font-family: Arial, Helvetica, sans-serif;
      color: #111;
      background-color: #fafafa;
      -webkit-tap-highlight-color: rgba(0,0,0,0); 
      user-select: none;
      touch-action: none;
    }
    /* Dark mode*/
    body[data-theme="dark"] {
      color: #fafafa;
      background-color: #111; 
    }
    /* Form layout */
    .form { width: 90%!important; max-width: 584px; display: inline-block; }
    .form > legend svg { fill: currentColor; width: 1.2em; height: 1.2em; vertical-align: text-top; }
    /* Theme switch */
    #theme { position: fixed; left: 50%; top:2em; transform: translateX(-50%); -webkit-transform: translateX(-50%); }
    #theme label { text-align:center; padding: 0 0 3.5em 0; text-indent: -1.5em}




svg {
  fill: currentColor;
}

[hidden] {
  display: none;
  visibility: hidden;
}

[data-theme=dark] {
  scrollbar-color: transparent #888 !important;
}
[data-theme=dark] ::-webkit-scrollbar-thumb:hover {
  background: #888;
}
[data-theme=dark] .message-area-dialog form {
  background-color: #111;
  border: 1px solid #343434;
  box-shadow: 0 0.5em 2em 0.25em rgba(128, 128, 128, 0.25);
}
[data-theme=dark] .message-area-dialog form button:hover, [data-theme=dark] .message-area-dialog form button:focus {
  background-color: #1a1a1a;
}
[data-theme=dark] .message-area-dialog form button:active {
  background-color: #272727;
  color: #fafafa;
}
[data-theme=dark] .message-area-dialog form i::after {
  color: #111;
}

body {
  scrollbar-color: transparent #555 !important;
  scrollbar-width: thin !important;
  scroll-behavior: smooth;
}
body ::-webkit-scrollbar {
  width: 0.3333333333em;
}
body ::-webkit-scrollbar-track {
  background: transparent;
  opacity: 0.5;
}
body ::-webkit-scrollbar-thumb {
  background: #555;
}
body ::-webkit-scrollbar-thumb:hover {
  background: #111;
}
body ::-webkit-scrollbar-corner {
  display: none;
}
body ::-webkit-resizer {
  color: currentColor;
  height: 0.5em;
  width: 100%;
}

.form {
  text-align: left;
  color: currentColor;
}
.form, .form .legend, .form .fieldset, .form label {
  position: relative;
  display: block;
  width: 100%;
  margin: 0;
  padding: 0;
  border: 0;
}
.form .legend {
  font-size: 1.2em;
  font-weight: lighter;
}
.form .fieldset {
  margin-top: 0.6666666667em;
}
.form .fieldset:last-of-type {
  margin-bottom: 0.6666666667em;
}
.form .fieldset label {
  outline: none;
}
.form .fieldset label:first-letter {
  text-transform: uppercase;
}
.form .fieldset input:not([type=checkbox]) + label, .form .fieldset input:not([type=radio]) + label, .form .fieldset textarea + label, .form .fieldset select + label {
  position: absolute;
  padding: 1em 0.6666666667em;
  width: calc(100% - 1.25em);
  top: 0;
  left: 0;
  opacity: 0.4;
  z-index: 2;
  transition: opacity 0.1s linear, padding 0.2s ease-in, font 0.2s ease-in;
}
.form .fieldset textarea, .form .fieldset select, .multimedia {
  display: block;
  width: calc(100% - 1.25em);
  padding: 0.5em 0.5em 0.5em 0.5em;
  margin: 0 0 1px 0;
  font: inherit;
  line-height: 1;
  overflow: hidden;
  text-overflow: ellipsis;
  color: currentColor;
  background-color: rgba(127, 127, 127, 0.2);
  border: 0;
  border-radius: 0.25em;
  cursor: default;
  z-index: 1;
  outline-color: currentColor;
}
 .metronome {
  display: block;
  width: calc(100% - 1.25em);
  padding: 0.5em 0.5em 0.5em 0.5em;
  margin: 0 0 1px 0;
  font: inherit;
  line-height: 1;
  overflow: hidden;
  text-overflow: ellipsis;
  color: currentColor;
  border: 0;
  border-radius: 0.25em;
  cursor: default;
  z-index: 1;
  outline-color: currentColor;
}

#stop{
  display:none;
}


.form .fieldset input::-moz-placeholder, .form .fieldset textarea::-moz-placeholder, .form .fieldset select::-moz-placeholder {
  opacity: 0;
  text-indent: 3em;
  -moz-transition: opacity 0.1s linear, text-indent 0.2s ease-in;
  transition: opacity 0.1s linear, text-indent 0.2s ease-in;
}
.form .fieldset input:-ms-input-placeholder, .form .fieldset textarea:-ms-input-placeholder, .form .fieldset select:-ms-input-placeholder {
  opacity: 0;
  text-indent: 3em;
  -ms-transition: opacity 0.1s linear, text-indent 0.2s ease-in;
  transition: opacity 0.1s linear, text-indent 0.2s ease-in;
}
.form .fieldset input::placeholder, .form .fieldset textarea::placeholder, .form .fieldset select::placeholder {
  opacity: 0;
  text-indent: 3em;
  transition: opacity 0.1s linear, text-indent 0.2s ease-in;
}
.form .fieldset input:focus, .form .fieldset input:active, .form .fieldset input.active, .form .fieldset textarea:focus, .form .fieldset textarea:active, .form .fieldset textarea.active, .form .fieldset select:focus, .form .fieldset select:active, .form .fieldset select.active {
  cursor: text;
}
.form .fieldset input:focus::-moz-placeholder, .form .fieldset input:active::-moz-placeholder, .form .fieldset input.active::-moz-placeholder, .form .fieldset textarea:focus::-moz-placeholder, .form .fieldset textarea:active::-moz-placeholder, .form .fieldset textarea.active::-moz-placeholder, .form .fieldset select:focus::-moz-placeholder, .form .fieldset select:active::-moz-placeholder, .form .fieldset select.active::-moz-placeholder {
  opacity: 0.5;
  text-indent: 0;
}
.form .fieldset input:focus:-ms-input-placeholder, .form .fieldset input:active:-ms-input-placeholder, .form .fieldset input.active:-ms-input-placeholder, .form .fieldset textarea:focus:-ms-input-placeholder, .form .fieldset textarea:active:-ms-input-placeholder, .form .fieldset textarea.active:-ms-input-placeholder, .form .fieldset select:focus:-ms-input-placeholder, .form .fieldset select:active:-ms-input-placeholder, .form .fieldset select.active:-ms-input-placeholder {
  opacity: 0.5;
  text-indent: 0;
}
.form .fieldset input:focus::placeholder, .form .fieldset input:active::placeholder, .form .fieldset input.active::placeholder, .form .fieldset textarea:focus::placeholder, .form .fieldset textarea:active::placeholder, .form .fieldset textarea.active::placeholder, .form .fieldset select:focus::placeholder, .form .fieldset select:active::placeholder, .form .fieldset select.active::placeholder {
  opacity: 0.5;
  text-indent: 0;
}
.form .fieldset input:focus + label, .form .fieldset input:active + label, .form .fieldset input.active + label, .form .fieldset textarea:focus + label, .form .fieldset textarea:active + label, .form .fieldset textarea.active + label, .form .fieldset select:focus + label, .form .fieldset select:active + label, .form .fieldset select.active + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
  opacity: 1;
}
.form .fieldset input:focus + label::after, .form .fieldset input:active + label::after, .form .fieldset input.active + label::after, .form .fieldset textarea:focus + label::after, .form .fieldset textarea:active + label::after, .form .fieldset textarea.active + label::after, .form .fieldset select:focus + label::after, .form .fieldset select:active + label::after, .form .fieldset select.active + label::after {
  content: ":";
}
.form .fieldset input:valid + label, .form .fieldset textarea:valid + label, .form .fieldset select:valid + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
}
.form .fieldset input:valid + label::after, .form .fieldset textarea:valid + label::after, .form .fieldset select:valid + label::after {
  content: ":";
}
.form .fieldset input:not(:-moz-placeholder-shown) + label, .form .fieldset textarea:not(:-moz-placeholder-shown) + label, .form .fieldset select:not(:-moz-placeholder-shown) + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
}
.form .fieldset input:not(:-ms-input-placeholder) + label, .form .fieldset textarea:not(:-ms-input-placeholder) + label, .form .fieldset select:not(:-ms-input-placeholder) + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
}
.form .fieldset input:not(:placeholder-shown) + label, .form .fieldset textarea:not(:placeholder-shown) + label, .form .fieldset select:not(:placeholder-shown) + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
}
.form .fieldset input:not(:-moz-placeholder-shown) + label::after, .form .fieldset textarea:not(:-moz-placeholder-shown) + label::after, .form .fieldset select:not(:-moz-placeholder-shown) + label::after {
  content: ":";
}
.form .fieldset input:not(:-ms-input-placeholder) + label::after, .form .fieldset textarea:not(:-ms-input-placeholder) + label::after, .form .fieldset select:not(:-ms-input-placeholder) + label::after {
  content: ":";
}
.form .fieldset input:not(:placeholder-shown) + label::after, .form .fieldset textarea:not(:placeholder-shown) + label::after, .form .fieldset select:not(:placeholder-shown) + label::after {
  content: ":";
}
.form .fieldset input:not(:-ms-input-placeholder) + label, .form .fieldset textarea:not(:-ms-input-placeholder) + label, .form .fieldset select:not(:-ms-input-placeholder) + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
}
.form .fieldset input:not(:-ms-input-placeholder) + label::after, .form .fieldset textarea:not(:-ms-input-placeholder) + label::after, .form .fieldset select:not(:-ms-input-placeholder) + label::after {
  content: ":";
}
.form .fieldset input:not(:-moz-placeholder) + label, .form .fieldset textarea:not(:-moz-placeholder) + label, .form .fieldset select:not(:-moz-placeholder) + label {
  background-color: inherit;
  padding: 0.4em 0.8em;
  font-size: 0.75em;
}
.form .fieldset input:not(:-moz-placeholder) + label::after, .form .fieldset textarea:not(:-moz-placeholder) + label::after, .form .fieldset select:not(:-moz-placeholder) + label::after {
  content: ":";
}
.form .fieldset input, .form .fieldset select {
  width: calc(100% - 3.5em);
  padding-right: 3em;
}
.form .fieldset textarea {
  border-top: 1.5em solid transparent;
  padding-top: 0;
  min-height: 6em;
  height: 6em;
  resize: vertical;
  overflow-y: auto;
}

.form .verify {
  display: none;
}
.form .checkbox {
  position: relative;
}
.form .checkbox input[type=checkbox] {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: absolute;
  top: calc(50% - 0.75em);
  left: 0;
  height: 1.5em;
  width: 1.5em;
  padding: 0;
  margin: 0;
  opacity: 0;
  z-index: 0;
}
.form .checkbox input[type=checkbox] + label {
  width: inherit;
  position: inherit;
  padding: inherit;
  font-size: inherit;
}
.form .checkbox input[type=checkbox] + label::after {
  content: unset;
}
.form .checkbox input[type=checkbox]:focus + label::before, .form .checkbox input[type=checkbox]:active + label::before {
  outline: 1px currentColor !important;
}
.form .checkbox input[type=checkbox]:checked + label::after {
  content: "";
  transform: rotate(45deg) scale(1);
  opacity: 1;
}
.form .checkbox label {
  position: relative;
  width: calc(100% - 2.5em) !important;
  line-height: 1.5;
  padding-left: 2.5em !important;
  z-index: 2;
}
.form .checkbox label::before, .form .checkbox label::after {
  content: "" !important;
  position: absolute;
  transform-origin: center center;
  opacity: 1;
  z-index: 3;
}
.form .checkbox label::before {
  top: calc(50% - 0.75em);
  left: 0;
  height: 1.5em;
  width: 1.5em;
  border-radius: 0.25em;
  background-color: rgba(127, 127, 127, 0.25);
}
.form .checkbox label::after {
  top: calc(50% - 0.625em);
  left: 0.5em;
  height: 0.75em;
  width: 0.3em;
  transform: rotate(45deg) scale(0.5);
  border: 0 solid currentColor;
  border-width: 0 0.2em 0.2em 0;
  opacity: 0;
  transition: opacity 0.15s linear, transform 0.15s ease-in;
}
.form > button {
  width: 100%;
  padding: 1em 0.6666666667em;
  float: none;
  overflow: hidden;
  font-weight: bolder;
  text-transform: capitalize;
  text-overflow: ellipsis;
  border: 0;
  border-radius: 0.25em;
  cursor: pointer;
}
.form > button[type=submit] {
  display: block;
}
.form > button[type=reset] {
  display: none;
}
.form > button:not(:last-of-type) {
  margin-bottom: 0.5em;
}

.message-area {
  position: relative;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  touch-action: none;
}
.message-area textarea {
  min-height: 8em !important;
  max-height: 50vh;
  resize: vertical;
  overflow-y: auto;
  z-index: 1;
}
.message-area textarea:first-letter, .message-area textarea::first-letter {
  text-transform: uppercase;
}
.message-area textarea::-moz-placeholder {
  font: inherit;
}
.message-area textarea:-ms-input-placeholder {
  font: inherit;
}
.message-area textarea::placeholder {
  font: inherit;
}
.message-area-dialog {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  display: none;
  width: 100%;
  font-size: 0.75em;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.25s linear;
  -webkit-backdrop-filter: blur(3px);
          backdrop-filter: blur(3px);
  z-index: 1900;
  touch-action: none;
}
.message-area-dialog[open] {
  display: inline-block;
}
.message-area-dialog.fade {
  opacity: 1;
  visibility: visible;
}
.message-area-dialog form {
  position: absolute;
  left: 50%;
  top: 50%;
  width: calc(70% - 2em);
  display: inline-block;
  overflow: hidden;
  padding: 1em 1em 0 1em;
  margin: 0;
  border: 1px solid #cdcdcd;
  border-radius: 0.25em;
  text-align: center;
  transform: translate(-50%, -50%);
  background-color: #FFF;
  box-shadow: 0 0.5em 2em 0.25em rgba(128, 128, 128, 0.25);
}
.message-area-dialog form i {
  position: relative;
  font-style: normal;
  display: block;
  text-align: left;
  text-indent: 2.5em;
  line-height: 1.75;
  word-break: break-word;
  word-wrap: normal;
  margin: 0.5em 0.5em 1.5em 0.5em;
  padding: 0;
}
.message-area-dialog form i::before, .message-area-dialog form i::after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  top: 0.1em;
  width: 1em;
  height: 0.15em;
  text-align: center;
  transform: rotate(-45deg);
  background-color: inherit;
}
.message-area-dialog form i::before {
  width: 0;
  height: 0;
  border-left: 0.75em solid transparent;
  border-right: 0.75em solid transparent;
  border-top: 1.35em solid currentColor;
  background: transparent;
  transform: rotate(180deg);
}
.message-area-dialog form i::after {
  content: "!";
  left: -1.9em;
  top: 0.05em;
  transform: none;
  font-weight: 900;
  color: #FFF;
  background: none;
}
.message-area-dialog form button {
  background: none;
  width: calc(50% + 1em);
  border-radius: 0;
  border: 0;
  border-top: 1px solid transparent;
  border-color: inherit;
  padding: 0.5em 0;
  margin: 0;
  line-height: 2em;
  outline: 0;
  color: currentColor;
  cursor: pointer;
  opacity: 1;
}
.message-area-dialog form button:hover, .message-area-dialog form button:focus {
  background-color: #e6e6e6;
}
.message-area-dialog form button:active {
  background-color: #b3b3b3;
  color: #FFF;
}
.message-area-dialog form button:first-letter {
  text-transform: uppercase;
}
.message-area-dialog form button[type=button] {
  font-weight: 600;
}
.message-area-dialog form button:not(:first-of-type) {
  border-left: 1px solid transparent;
  border-color: inherit;
}
.message-area-dialog form button:first-of-type {
  float: left;
  margin-left: -1em;
}
.message-area-dialog form button:last-of-type {
  float: right;
  margin-right: -1em;
}
.message-area-dialog form button:only-of-type {
  float: none;
  width: calc(100% + 2em);
}
.message-area-listing {
  position: relative;
  font: inherit;
  border: 0;
  margin: 0.5em 0 0 0;
  padding: 0;
  overflow: hidden;
  touch-action: none;
}
.message-area-listing[data-state] {
  cursor: default;
}
.message-area-listing[data-state] a {
  pointer-events: none;
  opacity: 0.15;
  filter: blur(2px);
}
.message-area-listing[data-state=rename] .rename {
  width: calc(100% - 3em) !important;
  left: 3em;
  right: auto;
  text-indent: -200% !important;
  padding: 0 4em 0 2em;
  text-align: left;
  opacity: 1;
}
.message-area-listing[data-state=rename] .rename i {
  display: block;
  cursor: text;
}
.message-area-listing[data-state=rename] button:not(.rename) svg path:first-child {
  display: none;
}
.message-area-listing[data-state=rename] button:not(.rename) svg path:last-child {
  display: block;
}
.message-area-listing[data-state=upload] .rename, .message-area-listing[data-state=send] .rename, .message-area-listing[data-state=sent] .rename {
  display: none !important;
}
.message-area-listing[data-state=upload] .upload, .message-area-listing[data-state=send] .upload, .message-area-listing[data-state=sent] .upload {
  opacity: 1;
  right: 0;
}
.message-area-listing[data-state=upload] .delete svg path:first-child, .message-area-listing[data-state=send] .delete svg path:first-child, .message-area-listing[data-state=sent] .delete svg path:first-child {
  display: none;
}
.message-area-listing[data-state=upload] .delete svg path:last-child, .message-area-listing[data-state=send] .delete svg path:last-child, .message-area-listing[data-state=sent] .delete svg path:last-child {
  display: block;
}
.message-area-listing[data-state=upload] {
  cursor: wait;
}
.message-area-listing[data-state=upload] .upload {
  text-indent: -200% !important;
  cursor: wait;
}
.message-area-listing[data-state=upload] .upload output {
  display: block;
}
.message-area-listing[data-state=delete] .upload {
  right: 2em;
}
.message-area-listing[data-state=delete] .rename {
  right: 0;
}
.message-area-listing[data-state=delete] .delete {
  opacity: 1;
  text-indent: -2em !important;
}
.message-area-listing[data-state=delete] .delete svg {
  right: auto;
  left: 0.5em;
}
.message-area-listing[data-state=delete] button:not(.delete) svg path:first-child {
  display: none;
}
.message-area-listing[data-state=delete] button:not(.delete) svg path:last-child {
  display: block;
}
.message-area-listing a {
  position: relative;
  overflow: hidden;
  display: inline-block;
  width: calc(100% - 9.5em);
  padding: 0.5em 0.5em 0.5em 3em;
  color: currentColor;
  line-height: 1.25;
  text-decoration: none;
  white-space: nowrap;
  text-overflow: ellipsis;
  opacity: 0.5;
  z-index: 1;
  outline: 0;
  transition: opacity 0.15s linear;
}
.message-area-listing a:hover, .message-area-listing a:focus {
  opacity: 1;
}
.message-area-listing a svg, .message-area-listing a img {
  position: absolute;
  left: 0;
  top: 0.5em;
}
.message-area-listing a i {
  display: block;
  font-style: normal;
  font-size: 0.75em;
  line-height: 1;
  opacity: 0.25;
}
.message-area-listing svg, .message-area-listing img {
  margin: 0;
  width: 2em;
  height: 2em;
  -o-object-fit: contain;
     object-fit: contain;
}
.message-area-listing svg {
  fill: currentColor;
}
.message-area-listing figure {
  position: absolute;
  left: 0;
  top: 0;
  width: calc(100% - 6em);
  height: 3em;
  padding: 0;
  margin: 0;
  background-color: transparent;
  z-index: 0;
}
.message-area-listing button {
  position: absolute;
  z-index: 2;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0.5;
  visibility: visible;
}
.message-area-listing button:hover, .message-area-listing button[aria-expanded=true] {
  background-color: rgba(127, 127, 127, 0.5);
}
.message-area-listing button[aria-expanded=true] {
  width: 10em !important;
  border-radius: 1em !important;
  text-indent: 0 !important;
  z-index: 2 !important;
  overflow: hidden;
  cursor: default;
}
.message-area-listing button.upload {
  right: 2em;
}
.message-area-listing button.rename {
  right: 4em;
}
.message-area-listing button svg path:last-child:not(:only-child) {
  display: none;
}
.message-area-listing button i, .message-area-listing button output {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  display: none;
  white-space: nowrap;
  outline: 0;
}
.message-area-listing button i {
  overflow: hidden;
  width: calc(100% - 6em);
  text-overflow: ellipsis;
  font-style: normal;
  line-height: 2;
  margin: 0 4em 0 0;
  padding: 0 0 0 2em;
  text-indent: 0 !important;
  -webkit-touch-callout: all;
  -webkit-user-select: all;
     -moz-user-select: all;
          user-select: all;
}
.message-area-listing button output {
  --progress: 0;
  width: 100%;
  text-indent: 0;
  text-align: center;
  line-height: 2.75;
  font-size: 0.75em;
  z-index: -1;
}
.message-area-listing button output::before {
  position: absolute;
  content: "";
  display: block;
  left: 0;
  top: 0;
  bottom: 0;
  width: 0%;
  width: calc(var(--progress) * 1%);
  background-color: rgba(127, 127, 127, 0.75);
  transition: width 0.15s ease-in;
  z-index: -1;
}
.message-area label {
  z-index: 2;
}
.message-area button, .message-area-listing button {
  position: relative;
  display: inline-block;
  overflow: visible;
  vertical-align: middle;
  padding: 0;
  margin: 0;
  font: inherit;
  color: currentColor;
  background: transparent;
  border: 0;
  outline: none;
  cursor: pointer;
  opacity: 0.5;
  z-index: 3;
}
.message-area button:hover, .message-area button:focus, .message-area button:active, .message-area button:focus-within, .message-area-listing button:hover, .message-area-listing button:focus, .message-area-listing button:active, .message-area-listing button:focus-within {
  opacity: 1 !important;
}
.message-area button::before, .message-area button::after, .message-area-listing button::before, .message-area-listing button::after {
  position: absolute;
  left: 0;
  top: 0;
  color: currentColor;
  background: none;
  width: 100%;
  text-align: center;
  text-transform: capitalize;
  text-indent: 0;
}
.message-area button.back, .message-area button.rename, .message-area button.upload, .message-area button.delete, .message-area-listing button.back, .message-area-listing button.rename, .message-area-listing button.upload, .message-area-listing button.delete {
  position: absolute;
  width: 2em;
  height: 2em;
  border-radius: 50%;
  color: inherit;
  text-indent: -9999rem;
  z-index: 4;
  transition: opacity 0.15s linear, background 0.15s linear;
}
.message-area button.back svg, .message-area button.rename svg, .message-area button.upload svg, .message-area button.delete svg, .message-area-listing button.back svg, .message-area-listing button.rename svg, .message-area-listing button.upload svg, .message-area-listing button.delete svg {
  width: 1em;
  height: 1em;
}
.message-area button.back svg, .message-area-listing button.back svg {
  transform: rotate(-90deg);
}
.message-area button.ready svg path:first-child, .message-area button.recording svg path:first-child, .message-area-listing button.ready svg path:first-child, .message-area-listing button.recording svg path:first-child {
  display: inline-block;
}
.message-area button.ready svg path:not(:first-child), .message-area button.recording svg path:not(:first-child), .message-area-listing button.ready svg path:not(:first-child), .message-area-listing button.recording svg path:not(:first-child) {
  display: none;
}
.message-area button.recording, .message-area-listing button.recording {
  --peak: 0;
  background-color: red !important;
  box-shadow: 0 0 0 calc(var(--peak) * 0.075em) rgba(255, 0, 0, calc(var(--peak) * 0.05));
}
.message-area button.recording::before, .message-area button.play::before, .message-area button.pause::before, .message-area-listing button.recording::before, .message-area-listing button.play::before, .message-area-listing button.pause::before {
  content: attr(data-time);
  top: -1.75em;
}
.message-area button.play svg path:first-child, .message-area button.pause svg path:first-child, .message-area-listing button.play svg path:first-child, .message-area-listing button.pause svg path:first-child {
  display: none;
}
.message-area button.play svg path:nth-child(2), .message-area-listing button.play svg path:nth-child(2) {
  display: inline-block;
}
.message-area button.play svg path:nth-child(3), .message-area-listing button.play svg path:nth-child(3) {
  display: none !important;
}
.message-area button.pause svg path:nth-child(2), .message-area-listing button.pause svg path:nth-child(2) {
  display: none !important;
}
.message-area button.pause svg path:nth-child(3), .message-area-listing button.pause svg path:nth-child(3) {
  display: inline-block;
}
.message-area button svg, .message-area-listing button svg {
  position: absolute;
  top: 0.5em;
  left: 0.5em;
  fill: currentColor;
  width: 2em;
  height: 2em;
  vertical-align: middle;
}
.message-area button svg svg path:first-child, .message-area-listing button svg svg path:first-child {
  display: inline-block;
}
.message-area button svg svg path:last-child, .message-area-listing button svg svg path:last-child {
  display: none;
}
.message-area nav {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  display: block;
  overflow: hidden;
  width: calc(100% - 1em);
  height: calc(100% - 0.5em);
  margin: 0;
  padding: 0.5em 0.5em 0 0.5em;
  text-align: center;
  white-space: nowrap;
  outline: none;
  z-index: 3;
}
.message-area nav [type=file], .message-area nav audio {
  display: none;
  visibility: hidden;
}
.message-area nav > button {
  top: calc(50% - 1em);
  visibility: hidden;
  opacity: 0;
}
.message-area nav > button:nth-of-type(2n) {
  margin: 0 10%;
}
.message-area nav > button:last-of-type {
  margin: 0;
}
.message-area nav > button:nth-of-type(1) {
  transform: scale(1) translateX(-100%);
}
.message-area nav > button:nth-of-type(3) {
  transform: scale(1) translateX(100%);
}
.message-area nav ~ .close, .message-area nav ~ .back {
  right: 0.25em;
  top: 0.25em;
  visibility: hidden;
  opacity: 0;
}
.message-area nav.select > button {
  visibility: visible;
  opacity: 0.5;
  transform: scale(1) translateX(0);
}
.message-area nav.selected ~ .close, .message-area nav.selected ~ .back {
  visibility: visible;
  opacity: 0.5;
}
.message-area nav.selected > button {
  visibility: hidden;
  opacity: 0;
}
.message-area nav.selected > button:nth-of-type(1) {
  transform: scale(1) translateX(0);
}
.message-area nav.selected > button:nth-of-type(3) {
  transform: scale(1) translateX(0);
}
.message-area nav.selected.type {
  pointer-events: none;
}
.message-area nav.selected.type > button:not(:nth-of-type(1)) {
  transform: scale(1) translateX(100%);
}
.message-area nav.selected.type ~ textarea::-moz-placeholder {
  text-align: left;
}
.message-area nav.selected.type ~ textarea:-ms-input-placeholder {
  text-align: left;
}
.message-area nav.selected.type ~ textarea::placeholder {
  text-align: left;
}
.message-area nav.selected.speak > button:nth-of-type(1) {
  transform: scale(1) translateX(-100%);
}
.message-area nav.selected.speak > button:nth-of-type(3) {
  transform: scale(1) translateX(100%);
}
.message-area nav.selected.speak > button:nth-of-type(2) {
  visibility: visible;
  opacity: 1;
  transform: scale(1.25);
  background-color: rgba(127, 127, 127, 0.5);
}
.message-area nav.selected.upload > button:not(:nth-of-type(3)) {
  transform: scale(1) translateX(-100%);
}
.message-area nav.selected.upload > button:nth-of-type(3) {
  margin-left: calc(-20% + 1em);
  transform: scale(1.25) translateX(-100%);
  visibility: visible;
  opacity: 1;
  background-color: rgba(127, 127, 127, 0.5);
}
.message-area nav.selected.playback .toolbar {
  opacity: 1;
  visibility: visible;
}
.message-area nav.selected.playback .seekbar {
  opacity: 1;
  visibility: visible;
}
.message-area nav .visualizer {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0);
  z-index: -1;
}
.message-area nav .toolbar {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  top: calc(50% - .65em);
  bottom: 0;
  width: calc(100% - 1em);
}
.message-area nav .toolbar button {
  opacity: 0.5;
  visibility: visible;
  transform: scale(0.75) !important;
  float: none;
}
.message-area nav .toolbar button::after {
  font-size: 0.85em;
}
.message-area nav .toolbar button:first-child {
  margin-right: 33%;
}
.message-area nav .toolbar button:last-child {
  margin-left: 33%;
}
.message-area nav .seekbar {
  --position: 0;
  position: absolute;
  bottom: 0.9em;
  left: 0;
  width: 100%;
  height: 1em;
  font-size: 0.6em;
  transition: opacity 0.25s linear;
}
.message-area nav .seekbar:hover i::before {
  opacity: 1;
}
.message-area nav .seekbar::before, .message-area nav .seekbar::after {
  position: absolute;
}
.message-area nav .seekbar::before {
  content: attr(data-start);
  left: 0;
}
.message-area nav .seekbar::after {
  content: attr(data-end);
  right: 0;
}
.message-area nav .seekbar i {
  width: calc(100% - 10em);
  position: relative;
  display: inline-block;
  font-style: normal;
  text-indent: -9999rem;
  cursor: pointer;
}
.message-area nav .seekbar i::before, .message-area nav .seekbar i::after {
  content: "";
  top: 25%;
  left: 0;
  position: absolute;
  display: block;
  height: 50%;
  width: 100%;
  background-color: currentColor;
  opacity: 0.15;
}
.message-area nav .seekbar i::before {
  width: calc(100% * var(--position));
  opacity: 0.7;
  transition: width 5ms ease-in-out;
}
.message-area nav button {
  float: none;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  transform: scale(1);
  transition: transform 0.15s ease-in-out, opacity 0.15s linear, background 0.15s linear;
}
.message-area nav button:first-letter {
  text-transform: uppercase;
}
.message-area nav button::before, .message-area nav button::after {
  font-size: 0.5em;
  transition: opacity 0.15s linear, background 0.15s linear;
}
.message-area nav button::before {
  height: 100%;
  border-radius: 50%;
}
.message-area nav button::after {
  top: 100%;
  line-height: 2;
  opacity: 0;
}
.message-area nav button:hover, .message-area nav button:focus, .message-area nav button:active {
  transform: scale(1.25);
  background-color: rgba(127, 127, 127, 0.5);
}
.message-area nav button:hover::after, .message-area nav button:focus::after, .message-area nav button:active::after {
  opacity: 1;
  transition: opacity 0.15s linear;
}
.message-area nav button:hover::after {
  content: attr(aria-label);
  opacity: 1;
}
.message-area nav button:focus::after {
  content: attr(aria-label);
}
.message-area nav button:focus:not(:focus-visible)::after {
  content: none;
}
.message-area nav button:focus:not(:-moz-focusring)::after {
  content: none;
}














html.modal-active, body.modal-active {
  overflow: hidden;
}

#modal-container {
  position: fixed;
  display: table;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  transform: scale(0);
  z-index: 10;
}

#modal-container.two {
  transform: scale(1);
}
#modal-container.two .modal-background {
  background: rgba(0, 0, 0, 0);
  animation: fadeIn 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.two .modal-background .modal {
  opacity: 0;
  animation: scaleUp 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.two + .content {
  animation: scaleBack 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.two.out {
  animation: quickScaleDown 0s 0.5s linear forwards;
}
#modal-container.two.out .modal-background {
  animation: fadeOut 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.two.out .modal-background .modal {
  animation: scaleDown 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.two.out + .content {
  animation: scaleForward 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}

#modal-container .modal-background {
  display: table-cell;
  background: rgba(0, 0, 0, 0.8);
  text-align: center;
  vertical-align: middle;
}
#modal-container .modal-background .modal {
  width: 80%;

  display: inline-block;
  border-radius: 3px;
  font-weight: 300;
  position: relative;
}



@keyframes fadeIn {
  0% {
    background: rgba(0, 0, 0, 0);
  }
  100% {
    background: rgba(0, 0, 0, 0.7);
  }
}
@keyframes fadeOut {
  0% {
    background: rgba(0, 0, 0, 0.7);
  }
  100% {
    background: rgba(0, 0, 0, 0);
  }
}
@keyframes scaleUp {
  0% {
    transform: scale(0.8) translateY(1000px);
    opacity: 0;
  }
  100% {
    transform: scale(1) translateY(0px);
    opacity: 1;
  }
}
@keyframes scaleDown {
  0% {
    transform: scale(1) translateY(0px);
    opacity: 1;
  }
  100% {
    transform: scale(0.8) translateY(1000px);
    opacity: 0;
  }
}
@keyframes scaleBack {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0.85);
  }
}
@keyframes scaleForward {
  0% {
    transform: scale(0.85);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes quickScaleDown {
  0% {
    transform: scale(1);
  }
  99.9% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}








#dotTarget{
  display:flex;
  margin: auto;
}

.beat{
  width:20px;
  height:30px;
  background:#7d7d7d;
  border-radius:2px;
  margin:0px 5px;
  cursor:pointer;
  transition:.25s;
}

.beat:hover{
  background-color:#57cc65;
}

.active{
  background:#57cc65;
}

.on-temp{
  background:#bfcc57;
  transform:scale(1, 1.5);
}

.box{
  padding:40px;
}

.beat-count{
  text-align:center;
  width:25px;
  border:none;
  background:none;
  font-size:24px;
}

.header-btn{
  font-size:24px;
  border:none;
  padding:5px 10px;
  margin:10px 10px 30px 10px;
  background:#ffffff29;
  cursor:pointer;
  transition:.3s;
}

.button-active{
  background:#83fda842;
}

#digitalDisplayContainer{
  display:none;
}

.sign-svg{
  fill:#000000; 
  transform:translate(-480.000000px, -192.000000px);
} 

ul{
   list-style:none;
}



.input-section {
  z-index: 2;
  position: relative;
  width: 100%;
  max-width: 80vw;
  height: 40px;
  margin: 10px auto 0;
  overflow: hidden;
}

.input-section .thin-fill {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
  height: 3px;
  background: transparent;
  border-radius: 1px;
  z-index: -2;
}

.input-section .thick-fill {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  background: orange;
  border-radius: 1px;
  border: 2px solid white;
  z-index: -1;
  height: 15px;
  width: 29.6%; /* When input value is 147 (default) */
}

.tempoSlider {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  background: transparent;
  border: none;
  width: 100%;
  height: 100%;
  margin: 0;
}

.tempoSlider:focus {
  outline: none;
}

.tempoSlider::-webkit-slider-runnable-track {
  width: 100%;
  height: 15px;
  cursor: pointer;
  background: transparent;
}

.tempoSlider::-webkit-slider-thumb {
  height: 25px;
  width: 25px;
  border-radius: 2px;
  background: #2d303b;
  border: 1px solid white;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -5px;
  
}

.tempoSlider::-moz-range-track {
  width: 100%;
  height: 15px;
  cursor: pointer;
  background: transparent;
}

.tempoSlider::-moz-range-thumb {
  height: 30px;
  width: 32px;
  border-radius: 2px;
  border: 1px solid white;
  background: #0ec3cc;
  cursor: pointer;
  -moz-appearance: none;
  margin-top: -11px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}

.tempoSlider::-ms-track {
  width: 100%;
  height: 15px;
  cursor: pointer;
  background: transparent;
}

.tempoSlider::-ms-thumb {
  height: 30px;
  width: 32px;
  border-radius: 2px;
  border: 1px solid white;
  background: #0ec3cc;
  cursor: pointer;
  -ms-appearance: none;
  margin-top: -1px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}

.tempoSlider::-ms-tooltip {
  display: none;
}


.main-btn{
  border: white;
  background: transparent;
  border-radius: 50%; /* Esto hace que el contorno sea circular */
  cursor: pointer;
  font-size: 20px;
  float: right;
  margin-right: 20px;
}



.dropdown {
  position: relative;
  display:block;
  margin-top:0.5em;
  padding:0;
}


.dropdown select {
  width:100%;
  margin:0;
  background:none;
  border: 1px solid transparent;
  outline: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  appearance: none;
  -webkit-appearance: none;
  font-size:1.25em;
  color: white;
  padding: .6em 1.9em .5em .8em;
  line-height:1.3;
}



.dropdown::after {
  content: "";
  position: absolute;
  width: 9px;
  height: 8px;
  top: 50%;
  right: 1em;
  z-index: 2; 
  pointer-events:none;
}






.video-modal,
.video-modal .overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 3000;
}
.video-modal {
	overflow: hidden;
	position: fixed;
	opacity: 0.0;

  -webkit-transform: translate(500%,0%);
  transform: translate(500%,0%);

  -webkit-transition: -webkit-transform 0s linear 0s;
  transition: transform 0s linear 0s;


  /* using flexbox for vertical centering */

  /* Flexbox display */
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;

  /* Vertical alignment */
  -webkit-box-align: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;

  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.video-modal .overlay {
  z-index: 0;
  background: rgba(13,1,61,0.82); /* overlay color */

  opacity: 0.0;

  -webkit-transition: opacity 0.2s ease-out 0.05s;
  transition: opacity 0.2s ease-out 0.05s;
}


.video-modal-content {
	position: relative;
	top: auto;
	right: auto;
	bottom: auto;
	left: auto;
	z-index: 1;
  
	margin: 0 auto;

	overflow-y: visible;

	background: #000;
  
  width: calc(100% - 12em);
  height: 0;
  padding-top: calc((100% - 12em) * 0.5625); /* 16:9 calc */
}

/* Scaling to fit within the current Viewport size:
   When viewport aspect ratio is greater than 16:9
   work off the height instead of the width for calc */
 @media (min-aspect-ratio: 16/9) {
  .video-modal-content {
    width: 0;
    height: calc(100vh - 10em);
    padding-top: 0;
    padding-left: calc((100vh - 10em) * 1.7778); /* 16:9 calc */
  }
}

/* Mobile Layout Tweaks - side margins reduced */
@media (max-width: 640px) {
	.video-modal-content {
		width: calc(100% - 1em);
    padding-top: calc((100% - 1em) * 0.5625); /* 16:9 calc */
	}
}

/* modal close button */
.close-video-modal {
	display: block;
    position: absolute;
    left: 0;
    top: -40px;

    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
}

/* set the iframe element to stretch to fit its parent element */
iframe#youtube {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 1;

	background: #000;
	box-shadow: 0px 2px 16px rgba(0,0,0,0.5);
}

/* show the modal: 
   add class to the body to reveal */
.show-video-modal .video-modal {
	opacity: 1.0;

	transform: translate(0%,0%);
	-webkit-transform: translate(0%,0%);
}
.show-video-modal .video-modal .overlay {
	opacity: 1.0;
}
.show-video-modal .video-modal-content {
	transform: translate(0%,0%);
	-webkit-transform: translate(0%,0%);
}
 </style>  

<body data-theme="dark" >
   
<div class="dropdown"> 
  <select id="colorselector">
     <option value="red">3. Lección: Intervalos de 3era y 4ta</option>
     <option value="yellow">3. Pieza: Mountain climbing</option>
  </select>
</div>
    
 
  <div class="metronome">  
    <div hidden>
    <button class="main-btn blue flex-centered" id="tap" hidden>Tap</button> 
              <button class="min-btn" id="beatMinus">-</button>
              <input type="number" class="beat-count" id="beatCount" value="4" readonly>
              <button class="min-btn" id="beatPlus">+</button>
    </div>
    
     <ul id="dotTarget" hidden>
            <li class="beat"></li>
            <li class="beat"></li>
            <li class="beat"></li>
            <li class="beat"></li>
          </ul>
          <div id='digitalDisplayContainer'>
            <h3 id="beatFlag">1</h3><h3 id="beatNbr">/4</h3>
          </div>

        
       <span id="tempo-disp" style="font-size:40px;">60</span>  bpm
      
          <button class="main-btn" id="start">
    <i class="ri-play-fill" style="font-size: 44px; color: white;"></i>
          </button>
      <button class="main-btn" id="stop">
               <i class="ri-pause-fill" style="font-size: 44px; color: white;"></i>
             </button>
      
      
      <div class="input-section">
    <input type="range" min="0" max="200" value="60" class="tempoSlider" step="1" oninput="temp(this.value)" id="tempo">
    <div class="thin-fill"></div>
    <div class="thick-fill"></div>
  </div>   
  </div>  
    
   <form lang="en" spellcheck="false" class="form" method="POST" action="https://script.google.com/macros/s/AKfycbwUmJjQ4eGBYyvDCYRe285gdmqQlzSBOG43WJuEgkjJ-zafCUoYpeUkGiLaJl8B0mnOWg/exec">  
   <div id="red" class="colors"> 
    <fieldset class="fieldset message" spellcheck="true" 
              data-no-support="Web Audio API not supported." 
              data-no-permission="No permission to use audio device." 
              data-no-file="No file recognized."
              data-write="write" 
              data-speak="speak" 
              data-upload="upload" 
              data-close="close" 
              data-select="select file" 
              data-drag="Select or drag file here" 
              data-rec="record"  
              data-record="Click mic to start recording" 
              data-recording="recording..." 
              data-error="error" 
              data-error-type="%n file type not allowed." 
              data-error-size="%n is larger than %s." 
              data-audio="%n has recorded a message." 
              data-file="%n has attached a file." 
              data-play="play"  
              data-pause="pause" 
              data-pause="pause" 
              data-playing="playing" 
              data-rename="rename" 
              data-confirm="confirm"  
              data-confirm-delete="Delete this item permanently?"
              data-ok="ok" 
              data-delete="delete">
      <textarea id="msg-text" placeholder="Type a message" accesskey="m" minlength="24" required></textarea>
      <label for="msg-text">Message</label>
    </fieldset>

      <div class="multimedia" style="font-size: 35px;">
 <div data-youtube-id="bwiHhgPjkR8" 
class="js-trigger-video-modal" onclick="toggle_video_modal()"> <i class="ri-youtube-fill" style="float: left; margin-left: 17%;"></i></div>
   <div class="pdfreveal" id="two"><i class="ri-file-pdf-2-fill" style="float: right; margin-right: 17%;"></i></div>
             </div>
      

     </div>
<br>
    <button type="reset">Reset</button>
    <button type="submit" value="Upload">Send</button>
    <input type="hidden" name="AudioData" id="AudioData">
    <div class="verify">
      <input type="number" id="msg-verify" placeholder="2+7=" max="99" />
      <label for="msg-verify">Verification question</label>
    </div>
  </form>
 
 
  
  <div id="modal-container">
  <div class="modal-background">
    <div class="modal">  
<section>
  <iframe src="https://drive.google.com/file/d/1j2A5qGmYobWmu1zCcThIx9hvi9YYeoBS/preview" frameborder="0" height="500px" width="100%"></iframe>
</section>
    </div>
  </div>
</div>
  
<section class="video-modal">

    <!-- Modal Content Wrapper -->
    <div 
         id="video-modal-content" class="video-modal-content"
     >
      
       <!-- iframe -->
       <iframe 
          id="youtube" 
          width="100%" 
          height="100%" 
          frameborder="0" 
          allow="autoplay" 
          allowfullscreen 
          src=
        ></iframe>

        <a 
        	href="#" 
        	class="close-video-modal" 
        >
        	<!-- X close video icon -->
          <svg 
            version="1.1" 
            xmlns="http://www.w3.org/2000/svg" 
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0"
            y="0"
            viewBox="0 0 32 32" 
            style="enable-background:new 0 0 32 32;" 
            xml:space="preserve" 
            width="24" 
            height="24" 
          >

            <g id="icon-x-close">
                <path fill="#ffffff" d="M30.3448276,31.4576271 C29.9059965,31.4572473 29.4852797,31.2855701 29.1751724,30.980339 L0.485517241,2.77694915 C-0.122171278,2.13584324 -0.104240278,1.13679247 0.52607603,0.517159487 C1.15639234,-0.102473494 2.17266813,-0.120100579 2.82482759,0.477288136 L31.5144828,28.680678 C31.9872448,29.1460053 32.1285698,29.8453523 31.8726333,30.4529866 C31.6166968,31.0606209 31.0138299,31.4570487 30.3448276,31.4576271 Z" id="Shape"></path>
                <path fill="#ffffff" d="M1.65517241,31.4576271 C0.986170142,31.4570487 0.383303157,31.0606209 0.127366673,30.4529866 C-0.12856981,29.8453523 0.0127551942,29.1460053 0.485517241,28.680678 L29.1751724,0.477288136 C29.8273319,-0.120100579 30.8436077,-0.102473494 31.473924,0.517159487 C32.1042403,1.13679247 32.1221713,2.13584324 31.5144828,2.77694915 L2.82482759,30.980339 C2.51472031,31.2855701 2.09400353,31.4572473 1.65517241,31.4576271 Z" id="Shape"></path>
            </g>

          </svg>
        </a>

    </div><!-- end modal content wrapper -->


    <!-- clickable overlay element -->
    <div class="overlay"></div>


</section>
  

</body>


 <script>

// Leave a Mp3 Audio Message / File Upload Contact Form
// -----------------------------------------------------
// Compatibility: IE 11+ (Edge), due to use of element dataset for i18n, 
//        WebAudio / MediaRecorder API, Promises / getUserMedia via mediaDevices.
//        On the fly lame mp3 conversion, fallback to script processor if audioWorklet unavailable.
//        Silent fallback to file upload or text input only if WebAudio API fails.
// Created: 2020.10.27, 14:20h, rakoon <dirkdigweed@gmx.net>

 document.addEventListener('DOMContentLoaded', function(e){ 
      var i18n = {};
      messageArea('.message');
    })

$(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});

$('.pdfreveal').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});

function toggle_video_modal() {
	    $(".js-trigger-video-modal").on("click", function(e){
           
	        e.preventDefault();
          var id = $(this).attr('data-youtube-id');
          var autoplay = '?autoplay=1';
          var related_no = '&rel=0';

          var src = '//www.youtube.com/embed/'+id+autoplay+related_no;

          $("#youtube").attr('src', src);
          
          $("body").addClass("show-video-modal noscroll");
	    
      });

	    // Close and Reset the Video Modal
      function close_video_modal() {
        
        event.preventDefault();
        $("body").removeClass("show-video-modal noscroll");
        $("#youtube").attr('src', '');
        
      }
	    $('body').on('click', '.close-video-modal, .video-modal .overlay', function(event) {
          close_video_modal();
	        
      });
      $('body').keyup(function(e) {
          if (e.keyCode == 27) { 
            close_video_modal();
          }
      });
	}

  

const slider = document.querySelector(".tempoSlider");
const sliderMax = slider.getAttribute("max");
const sliderThickFill = document.querySelector(".thick-fill");
const currentLeads = document.getElementById("tempo-disp");


function handleChange() {
  const leads = this.value;
  currentLeads.textContent = leads;
  const sliderLineWidth = leads / sliderMax * 100;
   var hue = 70 - (this.value / 200 * 70);
  sliderThickFill.style.backgroundColor = 'hsl(' + hue + ', 100%, 50%)';
  sliderThickFill.style.width = sliderLineWidth + "%";
}

slider.addEventListener("input", handleChange);





var audioCtx = new (window.AudioContext || window.webkitAudioContext)(),
    SubAudioCtx = new (window.AudioContext || window.webkitAudioContext)(),
    volume = audioCtx.createGain(),
    subvolume = SubAudioCtx.createGain(),
    noteFlag = 0,
    curtime = 0.0,
    timer,
    delta = 0;


// Elements INIT
var tempo = 60000 / (document.getElementById('tempo').value),
    
    tempo_rge = document.getElementById('tempo'),
    tempo_disp = document.getElementById('tempo-disp'),
    firstBeating = document.getElementById('checkBox'),
    plus = document.getElementById('plus'),
    minus = document.getElementById('minus'),
    extraPlus = document.getElementById('extraPlus'),
    extraMinus = document.getElementById('extraMinus'),
    beatPlus = document.getElementById('beatPlus'),
    beatMinus = document.getElementById('beatMinus'),
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    tap = document.getElementById('tap'),
    beatFlag = document.getElementById('beatFlag'),
    beatNbr = document.getElementById('beatNbr'),
    beatCount = document.getElementById('beatCount'),
    digitalDisplayContainer = document.getElementById('digitalDisplayContainer'),  
    dotTarget = document.getElementById('dotTarget'),
    dotsDisplay = document.getElementById('dotsDisplay'),    
    digitalDisplay = document.getElementById('digitalDisplay'),
    bothDisplay = document.getElementById('bothDisplay'),
    beatDots = document.getElementsByClassName('beat'),
    semiquaver = document.getElementById('semiquaver');


function temp(v){
  tempo_disp.innerHTML = v;  
}

function vol(l){
  volume.gain.setValueAtTime(l, audioCtx.currentTime);
}

function schedule(){
  while(curtime < audioCtx.currentTime + 0.1){
    if(noteFlag >= beatCount.value){
      noteFlag = 0;
    }
    playNote(curtime); 

    
    console.log(curtime);
    console.log(curtime);
    
    updateTime();

    var child = document.querySelectorAll('#dotTarget li');      
    
    if(noteFlag === 0){
      child[noteFlag].className += " on-temp";
      child[child.length - 1].classList.remove("on-temp");
    }
    else{
      child[noteFlag].className += " on-temp";
      child[noteFlag - 1].classList.remove("on-temp");
    }
    beatFlag.innerHTML = noteFlag+1;
    noteFlag++;
  }
  timer = window.setTimeout(schedule, 0.1);
}

function updateTime(){
  curtime += 60.0 / parseInt(tempo_rge.value, 10);
}

function playNote(t){
  var note = audioCtx.createOscillator();
  note.connect(volume);
  volume.connect(audioCtx.destination);
  
  note.type = 'sine';
  

 /* 
var now = audioCtx.currentTime;
var attackTime = .1;
var releaseTime = 0.01;

volume.gain.setValueAtTime(0, now);
volume.gain.linearRampToValueAtTime(2, now + attackTime);
volume.gain.linearRampToValueAtTime(0, now + attackTime + releaseTime);*/

note.frequency.setValueAtTime(2100, audioCtx.currentTime);  

/*  if(firstBeating.checked){
    if(noteFlag == 0){
      note.frequency.setValueAtTime(1600, audioCtx.currentTime);    
    }
    else{
      for(var i=0; i < beatDots.length; i++){    
        if(beatDots[noteFlag].className == "beat active"){
            note.frequency.setValueAtTime(800, audioCtx.currentTime);
           }
        else{
           note.frequency.setValueAtTime(400, audioCtx.currentTime);       
        }
      } 
    }
  }  
  else{
      for(var i=0; i < beatDots.length; i++){    
        if(beatDots[noteFlag].className == "beat active"){
          note.frequency.setValueAtTime(800, audioCtx.currentTime);
        }
        else{
          note.frequency.setValueAtTime(400, audioCtx.currentTime);       
        }
      } 
    }*/
  
  note.start(t);
  note.stop(t + 0.04);  
}

function playSubNote(nt){
  var subnote = SubAudioCtx.createOscillator();
  
  subvolume.connect(SubAudioCtx.destination);
  subvolume.gain.setValueAtTime(0.2, SubAudioCtx.currentTime);   
  
  subnote.connect(subvolume);
  subnote.type = 'sine';
  subnote.frequency.setValueAtTime(400, SubAudioCtx.currentTime);  
  
  subnote.start(nt);
  subnote.stop(nt + 0.04); 
}

function clickDots(){
  for(u = 0; u < beatDots.length; u++){
    beatDots[u].addEventListener('click', function(){
      if(this.className === "beat active"){
         this.className = "beat";
      }
      else{
        this.className += " active";     
      }
    });
  }  
}
clickDots()

start.addEventListener('click', function(){
  curtime = audioCtx.currentTime;
  schedule(); 
  this.style.display = "none";
  stop.style.display = "block";
});

stop.addEventListener('click', function(){
  window.clearInterval(timer);
  noteFlag = 0;
  beatFlag.innerHTML = 1;
  for(u = 0; u < beatDots.length; u++){
    beatDots[u].classList.remove("on-temp");
  }

  this.style.display = "none";
  start.style.display = "block";
});

tap.addEventListener('click', function(){
  var d = new Date();
  var temp = d.getTime();
  
  var tap_temp = Math.ceil(60000 / (temp - delta));
  
  tempo_disp.innerHTML = tap_temp; 
  tempo_rge.value = tap_temp;
  delta = temp;
  
  if(tap_temp > 240){
    tempo_disp.innerHTML = 240;
    tempo_rge.value = 240;
  } 
});

plus.addEventListener('click', function(){
    tempo_rge.value +++ 1;
    tempo_disp.innerHTML = tempo_rge.value;
});

extraPlus.addEventListener('click', function(){
    tempo_rge.value = tempo_rge.value +++ 5;
    tempo_disp.innerHTML = tempo_rge.value;
});

beatPlus.addEventListener('click', function(){
    beatCount.value = beatCount.value +++ 1;
    if( beatCount.value > 12){
      beatCount.value = 12;
    }
    beatNbr.innerHTML =  "/"+beatCount.value;
    var i = 0,
    target = document.getElementById('dotTarget');
    target.innerHTML = "";
    while(i < beatCount.value){
      var dot = document.createElement("li");
      dot.className = "beat";  
      target.append(dot);  
      i++;
    }
    clickDots()
});

minus.addEventListener('click', function(){
    tempo_rge.value --- 1;
    tempo_disp.innerHTML = tempo_rge.value;
});

extraMinus.addEventListener('click', function(){
    tempo_rge.value = tempo_rge.value --- 5;
    tempo_disp.innerHTML = tempo_rge.value;
});

beatMinus.addEventListener('click', function(){
    beatCount.value = beatCount.value --- 1;
    if( beatCount.value < 1){
      beatCount.value = 1;
    }
    beatNbr.innerHTML =  "/"+beatCount.value;
    var i = 0,
    target = document.getElementById('dotTarget');
    target.innerHTML = "";
    while(i < beatCount.value){
      var dot = document.createElement("li");
      dot.className = "beat";  
      target.append(dot);  
      i++;
    }
    clickDots();
});


dotsDisplay.addEventListener('click', function(){
    dotsDisplay.className = 'header-btn button-active';
    if(digitalDisplay.className == 'header-btn button-active' || bothDisplay.className == 'header-btn button-active'){
      digitalDisplay.classList.remove('button-active');
      bothDisplay.classList.remove('button-active');
    }
    dotTarget.style.display = 'flex';
    digitalDisplayContainer.style.display = 'none';
});



digitalDisplay.addEventListener('click', function(){
    digitalDisplay.className = 'header-btn button-active';
    if(dotsDisplay.className == 'header-btn button-active' || bothDisplay.className == 'header-btn button-active'){
      dotsDisplay.classList.remove('button-active');
      bothDisplay.classList.remove('button-active');
    }
    digitalDisplayContainer.style.display = 'flex';
    dotTarget.style.display = 'none';
});

bothDisplay.addEventListener('click', function(){
    bothDisplay.className = 'header-btn button-active';
    if(dotsDisplay.className == 'header-btn button-active' || digitalDisplay.className == 'header-btn button-active'){
      dotsDisplay.classList.remove('button-active');
      digitalDisplay.classList.remove('button-active');
    }
    dotTarget.style.display = 'flex';
    digitalDisplayContainer.style.display = 'flex';
});





function messageArea (selector, uploadurl, i18n, configuration) {
  'use strict';
  var settings = configuration ? configuration : {};
  var W = window, N = W.navigator, D = W.document,
     AC = W.AudioContext || W.webkitAudioContext, FR = W.FileReader, PE = W.PointerEvent,
     T8 = { speak:'speak', type:'type', upload:'upload', back:'back', play:'play', pause:'pause', start:'start', stop:'stop',
       label:'choose an input', recording:'recording...', playback:'Click to preview record.', cancel:'cancel', ok:'ok', 
       record:'Click the microphone to record', drag:'Select or drag a file here', confirm:'confirm', ok:'ok',
       select:'select file', audio:'%n has recorded a message.', file:'%n has attached a file.', saved:'saved',
       error:'error', errorType:'file type not allowed.', errorSize:'%n is larger than %s.', delete:'delete',
       noSupport:'Audio API not supported.', noPermission:'No access to microphone.', rename:'rename', add:'add', 
       confirmDelete:'Delete this item permanently?', noFile:'No file recognized.'},
   PTS = { pause:'M2 7h2V2H2v5zm3-5v5h2V2H5z', arrow:'M1 4l.8.7L4 2.4v6.1h1V2.4l2.2 2.3L8 4 4.5.5 1 4z', 
       ok:'M3 8L.5 5.4l.7-.8L3 6.5 7.8 1l.7.8z', stop:'M2 2h5v5H2z', play:'M3 2v5l4-2.5z',
       no:'M1 1.7l2.8 2.8L1 7.3l.7.7 2.8-2.8L7.3 8l.7-.7-2.8-2.8L8 1.7 7.3 1 4.5 3.8 1.7 1l-.7.7z',
       rename:'M5,2H0.5v5H5V2z M7,2v5h1.5V2H7z M6.3,1h1V0.5H4.8V1h1v7h-1v0.5h2.5V8h-1V1z',
       trash:'M6.5 8.5h-4l-.5-6h5l-.5 6zM4 8h2l.4-5H4v5zM7.5 2h-6V1H3V.5h3V1h1.5z', add:'M4 .5V4H.5v1H4v3.5h1V5h3.5V4H5V.5H4z',
       key:'M8 .5H1L.5 1v7l.5.5h7l.5-.5V1L8 .5zm-.2 7.3H1.2V1.2h6.7v6.6zM3 2.5h1.3v4h-.8V7h2v-.5h-.7v-4H6V3h.5V2h-4v1H3v-.5z', 
       mic:'M4.5 5.5C5.3 5.5 6 4.8 6 4V2C6 1.2 5.3.5 4.5.5S3 1.2 3 2v2c0 .8.7 1.5 1.5 1.5zM6.8 4c0 1.2-1 2.3-2.3 2.3S2.3 5.2 2.3 4h-.8c0 1.5 1.2 2.8 2.6 3v1.5h.8V7a3.1 3.1 0 002.6-3h-.7z', 
       preview: 'M6 .5v2h2l-2-2zM3.1 5.1c0 .5.4 1 1 1s1-.4 1-1-.4-1-1-1-1 .4-1 1zM5.5.5H1v8h7V3H5.5V.5zm.2 4.6l-.3.9 1 1.1-.5.4L5 6.4a3 3 0 01-.9.2c-.9 0-1.5-.7-1.5-1.5 0-.9.7-1.5 1.5-1.5s1.6.6 1.6 1.5z',
       up:'M4.5 1.4c.6 0 1.3.2 1.7.7.5.5.7 1 .8 1.5a2 2 0 011.8 2 2 2 0 01-2 2H1.9C1 7.6.3 6.8.3 5.9c0-.9.7-1.7 1.6-1.7H2c0-.7.2-1.5.8-2 .4-.5 1.1-.8 1.7-.8zm0 1.7L3 4.5l.3.4 1-.9v2.6h.5V4l.9.8.3-.3-1.5-1.4z' },
   APP = D.body || D.documentElement.body,
   CLN = settings['class'] || 'message-area',
   URL = W.URL || W.webkitURL, MAX = 2048000,
   UPL = uploadurl ? uploadurl : (T8.uploadurl ? T8.uploadurl : null),
   ACC = 'audio/*,video/*,image/*,.pdf,.txt,.rtf,.doc,.docx', REC = false,
   ALL = D.querySelectorAll(selector);
  // Check compatibility for FileReader/List API
  if(!FR) return;
  // Merge translation with i18n if present
  if(i18n) merge(T8, i18n);
  // Create message areas
  [].forEach.call(ALL, function(a) { Area.call(a); });
  // Main
  function Area () {
    var wrap = this, area = wrap.querySelector('textarea');
    if(!area) return;
    var t8 = (wrap.dataset) ? merge(T8, wrap.dataset) : T8, id = area.id || area.name,
       nav = createEl('nav', {'dropzone':true, 'draggable':false,'tabindex':-1}),
     label = wrap.querySelector('[for="'+ id +'"]'),
      tBtn = createEl('button', {'type':'button','aria-label':t8.type}, null, svg(PTS.key), nav),
      sBtn = AC ? createEl('button', {'type':'button','aria-label':t8.speak}, null, svg(PTS.mic), nav) : null,
      uBtn = createEl('button', {'type':'button','aria-label':t8.upload}, null, svg(PTS.up), nav),
      uUrl = t8.uploadurl ? t8.uploadurl : (UPL ? UPL : null),
      back = createEl('button', {'type':'button','class':'back','aria-label':t8.close}, null, svg(PTS.arrow)),
    output = createEl('fieldset', {'id':id+'-uploads','class':CLN+'-output'}, null),
    browse = createEl('input', {'type':'file','id':id +'-files','accept':ACC}, null, null, nav),
     files = [];
    // Inject elements in order
    wrap.className += ' '+ CLN;
    wrap.appendChild(nav);
    wrap.appendChild(back);
    // Form, label, area & placeholder text
    t8.originalLabel = label.textContent;
    t8.originalPlaceholder = area.getAttribute('placeholder');
    label.textContent = t8.label;
    area.setAttribute('tabindex', -1);
    area.setAttribute('readonly', true);
    if(area.form) {
      area.form.setAttribute('enctype', 'multipart/form-data');
      area.form.onsubmit = function(){ area.removeAttribute('readonly'); }; 
    }
    // Show area navigation
    setTimeout(function(){ nav.className = 'select'; }, 250);
    // UI listeners
    nav.onclick = present;
    tBtn.onclick = select;
    uBtn.onclick = select;
    back.onclick = deselect;
    browse.onchange = select;
    if(AC) sBtn.onclick = select;
    // Set drag & drop listeners
    nav.ondragenter = dragEnter;
    nav.ondragover = dragOver;
    nav.ondrop = drop;
    nav.ondragleave = dragLeave;
    // Add global document drag listeners
    addListeners(D, 'dragstart, dragover', dragStart);
    addListeners(D, 'drop', preventAll);
    // Private methods
    function present (e) {
      if (nav.className.match('selected')) return;
      preventAll(e);
      nav.className = 'select choose';
      setTimeout(function(){ nav.className = 'select'; }, 500);
    }
    function select (e) {
      nav.className = 'selected';
      label.setAttribute('data-cache', t8.label);
      if(this === tBtn) {
        var areaC = area.getAttribute('data-cache');
        if(areaC) { area.value = areaC; area.removeAttribute('data-cache'); }
        nav.className += ' type';  
        label.textContent = t8.originalLabel;
        area.removeAttribute('readonly');
        Msg(t8.originalPlaceholder);
      }
      else if(this === sBtn) {
        getMedia( { audio:true }, 
          function(stream){
            var ps = '<path d="'+ PTS.play +'"/><path d="'+ PTS.pause +'"/>';
            nav.className += ' speak'; 
            label.textContent = t8.speak;
            sBtn.className = 'ready'; 
            sBtn.setAttribute('aria-label', t8.start);
            sBtn.firstElementChild.innerHTML += ps;
            Recorder(stream, { btn: sBtn, parent: nav, btnCnl: back });
            Msg(t8.record);
          },
          function(err){ Dialog('alert', err.name ? err.message : t8.noPermission); }
        );
      }
      else if(this === uBtn) { 
        nav.className += ' upload';
        label.textContent = t8.upload;
        Msg(t8.drag); 
        this.setAttribute('aria-label', t8.select);
        this.onclick = function(){ browse.click(); };
      }
      else if(this === browse) { 
        nav.className += ' upload';
        handle(e);
      }
      area.focus();
    }
    function deselect (e) {
      var lablC = label.getAttribute('data-cache');
      if(lablC) { label.textContent = lablC; label.removeAttribute('data-cache'); }
      if(area.value.length) { area.setAttribute('data-cache', area.value); area.value = ''; }
      nav.className = 'select';
      area.setAttribute('readonly', true);
      back.className = 'back';
      if(AC) {
        var t = nav.querySelector('div');
        if(t) t.parentNode.removeChild(t);
        sBtn.firstChild.innerHTML = '<path d="'+ PTS.mic +'"/>';
        sBtn.setAttribute('aria-label', t8.speak);
        sBtn.removeAttribute('class');
        sBtn.onclick = select;
      }
      uBtn.setAttribute('aria-label', t8.upload);
      uBtn.onclick = select;
      back.onclick = deselect;
      nav.focus();
    }
    // Drag and drop
    function dragStart (e) {
      preventAll(e); 
      var t = e.dataTransfer;
      t.effectAllowed = 'none';
      t.dropEffect = 'none';
      select.call(uBtn);
    }
    function dragEnter (e) {
      preventAll(e);
      e.target.setAttribute('data-dragging','enter');
    }
    function dragOver (e) {
      preventAll(e);
      e.target.setAttribute('data-dragging','over');
      e.dataTransfer.dropEffect = 'copy';
    }
    function dragLeave (e) {
      e.target.removeAttribute('data-dragging');
    }
    function drop (e) {
      handle(e);
      dragLeave(e);
    }
    // File handling, upload & listing
    function handle (e) {
      var file;
      if (e.type === 'change') file = e.target.files[0];
      if (e.type === 'drop') file = e.dataTransfer.files[0];
      if (!file) return Dialog('alert', t8.noFile);
      var ex = file.name.substr(file.name.lastIndexOf('.') + 1),
         acc = browse.accept || ACC, max = MAX || 4096,
        mime = file.type.split('/')[0],
        typM = acc.replace(/[,\*]/g,'').split('/').indexOf(mime) > -1,
        extM = acc.replace(/\./g,'').split(',').indexOf(ex) > -1;
      if((typM || extM) && file.size <= max) {
        var r = new FR();
        r.readAsDataURL(file);
        r.onload = function(e) { Listing(file, r.result, 'upload', ex); };
      }
      else if(file.size > MAX) Dialog('alert', t8.errorSize.replace('%n', file.name).replace('%s', formatBytes(max,1))); 
      else Dialog('alert', t8.errorType.replace('%n', ex.toUpperCase())); 
    }
    // Listing
    function Listing (file, data, type, ext) {
      var txt, a, prt, del, upl, prg, ren, nam, mime;
      txt = truncate(file.name, 24) +' <i>'+ formatBytes(file.size) +'</i>';
      prt = createEl('fieldset', {'class': CLN +'-listing '+ type});
      prg = createEl('output', {'role':'progress','data-unit':'%'});
      nam = createEl('i', {'role':'textbox','spellcheck':false,'contenteditable':true});
      mime = file.type.split('/')[0];
      wrap.insertAdjacentElement('afterend', prt);
      if (ext.match(/(svg|png|jpg|jpeg|gif|bmp|webp)/ig)) {
        var im = createEl('img', {'src': data}, null);
        a = createEl('a', {'href':data,'title':file.name,'target':'_blank','rel':'noopener'}, txt, im, prt);
      } 
      else if (ext.match(/(mp3|wav|ogg|weba)/ig)) {
        a = createEl('a', {'href':'#','title':file.name,'rel':'noopener'}, txt, svg(PTS.mic), prt);
        var au = createEl('audio', {'src': data}, null, null, a),
          path = audioToPath(data, 100, 32, 100), // width, height, lines
        figure = createEl('figure',{} , null, svg(path,'0 0 100 32'), prt);
        console.log(audioToPath(data, 100, 32, 100));
        a.onclick = function () { au.play(); }
      }
      else {
        a = createEl('a', {'href':data,'title':file.name,'rel':'download noopener'}, txt, svg(PTS.up), prt);
        a.download = file.name;
      }
      a.className = mime +' '+ ext;
      a.setAttribute('draggable', false);
      ren = createEl('button', {'type':'button','class':'rename'}, t8.rename, svg([PTS.rename,PTS.no]), prt);
      upl = createEl('button', {'type':'button','class':'upload'}, t8.upload, svg([PTS.arrow,PTS.ok]), prt);
      del = createEl('button', {'type':'button','class':'delete'}, t8.delete, svg([PTS.trash,PTS.no]), prt);
      upl.appendChild(prg); 
      ren.appendChild(nam); 
      files.push([file.name, file.size, data]);
      a.ondblclick = rename;
      ren.onclick = rename;
      del.onclick = remove;
      upl.onclick = upload;
      // deselect();
      a.focus();
      function rename (e){
        var ex = a.title.substr(a.title.lastIndexOf('.')), 
          name = a.title.replace(ex,''); 
        expand(ren);
        prt.setAttribute('data-state','rename');
        ren.setAttribute('disabled','');
        nam.innerHTML = name;
        nam.setAttribute('tabindex', 0);
        W.getSelection().selectAllChildren(nam);
        nam.onkeydown = function (e) { 
          var key = e.key || e.keyCode || e.which;
          if(key == 13 || key === 'Enter') upl.click(); 
        };
        upl.onclick = function (e) {
          var nm = nam.innerHTML;
          a.title = nm + ex; 
          a.firstChild.textContent = truncate(nm, 20) + ex;
          reset();
        };
        ren.onclick = function () { nam.focus(); };
        del.onclick = reset;
      }
      function remove (e){ 
        expand(del);
        prt.setAttribute('data-state','delete');
        ren.onclick = reset;
        upl.onclick = function(){
          reset();
          prt.style.opacity = 0;
          setTimeout(function(){ 
            prt.parentElement.removeChild(prt); 
            var n = D.querySelector('.'+ CLN +'-output a'); 
            if(n) n.focus();
          }, 250);
        } 
      }
      function upload (e){ 
        expand(upl);
        prt.setAttribute('data-state','send');
        prg.setAttribute('style', '--progress:0;');
        del.onclick = reset;
        upl.onclick = function(){
          var unit = prg.getAttribute('data-unit') || '%';
          prt.setAttribute('data-state', 'upload');
          progress(1, unit);
          var i = 5;
          var int = setInterval(function(){ 
            if(i <= 100){ progress(i, unit); i = i+5; } 
            else { clearInterval(int); prt.setAttribute('data-state', 'sent'); upl.onclick = upload; }
          }, 500);
          del.onclick = function(){ clearInterval(int); }; 
        }
      }
      function progress (n, unit){
        W.requestAnimationFrame(progress);
        prg.innerHTML = n + unit;
        prg.style = '--progress:'+ n +';';
      }
      function expand (el) { 
        D.addEventListener('click', block, true);
        prt.addEventListener('keydown', trap, true);
        a.setAttribute('tabindex',-1);
        a.setAttribute('disabled','');
        el.setAttribute('aria-expanded', true);
        el.focus();
      }
      function reset () {
        prt.removeAttribute('data-state');
        [del, ren, upl].forEach(function(b) { 
          b.setAttribute('aria-expanded', false);
          b.removeAttribute('disabled');
          b.removeAttribute('tabindex');
        });
        D.removeEventListener('click', block, true);
        prt.removeEventListener('keydown', trap, true);
        a.removeAttribute('tabindex');
        a.removeAttribute('disabled');
        del.onclick = remove; 
        ren.onclick = rename; 
        upl.onclick = upload;
        a.focus();
      }
      function block (e) {
        if(prt.contains(e.target)) return;
        preventAll(e);
        prt.className += ' static';
        var btns = prt.querySelectorAll('button');
        if(btns[0] !== e.target) btns[0].focus();
        else btns[btns.length - 1].focus();
        setTimeout(function(){ prt.classList.remove('static'); }, 500);
      }
    }
    // Recorder
    function Recorder (stream, config) {
      var audio, context, node, input, output, analyser, encoder, worklet, ms;
      var recording = false, playing = false;
      // UI elements
      var btn = config.btn instanceof Element ? config.btn : null, 
       parent = config.parent instanceof Element ? config.parent : btn.parentElement,
       btnCnl = config.btnCnl instanceof Element ? config.btnCnl : null, 
      toolbar = createEl('div', {'role':'toolbar', 'class':'toolbar'}),
       btnDel = createEl('button', {'type':'reset','aria-label':t8.delete}, null, svg(PTS.trash), toolbar),
       btnAdd = createEl('button', {'type':'button','aria-label':t8.add}, null, svg(PTS.add), toolbar),
       seeker = createEl('output', {'role':'slider','class':'seekbar'}, null, null, toolbar),
       canvas = createEl('canvas', {'class':'visualizer', 'role':'illustration'});
      // Set up audio stream, node, process, analyser, worker
      W.localStream = stream;
      context = new AC(); 
      // Use audioWorkletNode if available, or try to create script / processor nodes
      worklet = !W.AudioWorklet; // ! testing
      if (worklet) { 
        worklet = inputProcessorWorklet.toString();
        if (worklet) {
          worklet = worklet.slice(worklet.indexOf('{')+1, worklet.lastIndexOf('}'));
          worklet = URL.createObjectURL(new Blob([worklet], {type:'application/javascript'}));
          context.audioWorklet.addModule(worklet).then(function(){
            node = new AudioWorkletNode(context, 'input-processor');
            URL.revokeObjectURL(worklet);
          });
        }
        else {
          context.audioWorklet.addModule('input-processor-worklet.js').then(function(){
            node = new AudioWorkletNode(context, 'input-processor');
          });
        }
      }
      else if (context.createJavaScriptNode) node = context.createJavaScriptNode(0, 1, 1);
      else if (context.createScriptProcessor) node = context.createScriptProcessor(0, 1, 1);
      else return Dialog('alert', t8.noSupport);
      input = context.createMediaStreamSource(stream);
      analyser = context.createAnalyser();
      input.connect(analyser);
      // Encoder
      encoder = mp3EncoderWorker.toString(); 
      if(encoder) {
        encoder = URL.createObjectURL(new Blob(['(',encoder,')();'], {type:'application/javascript'}));
        encoder = new Worker(encoder);
        URL.revokeObjectURL(encoder);
      } 
      else encoder = new Worker('mp3-encoder-worker.js');
      encoder.postMessage({ cmd: 'init', config: { sampleRate: context.sampleRate, bitRate: 16} });
      encoder.onerror = function(err){ Dialog('alert', err.message); };
      // Visualize audio stream
      visualize(new Uint8Array(analyser.frequencyBinCount));
      // Event listener
      btn.onclick = toggle;
      btnCnl.onclick = exit;
      // Private methods
      function toggle (e) { 
        recording ? stop() : start(); 
      }
      function exit (e) { 
        encoder.terminate();
        context.close();
        [].forEach.call(W.localStream.getTracks(), function(t){ t.stop(); });
        if(parent.contains(toolbar)) parent.removeChild(toolbar);
        if(parent.contains(canvas)) parent.removeChild(canvas);
        btn.removeAttribute('data-time');
        input = null;
        output = null;
        deselect(e);
      }
      function reset (e) { 
        recording = false;
        if(output) output.disconnect();
        input.connect(analyser); 
        if(parent.contains(toolbar)) parent.removeChild(toolbar);
        btn.className = 'ready';
        btn.removeAttribute('data-time');
        btn.setAttribute('aria-label', t8.start);
        btn.onclick = toggle;
        btnCnl.onclick = exit;
      }
      function cancel (e) {
        Dialog('confirm', t8.confirmDelete, reset);
      }
      function start () {
        recording = true;
        ms = Date.now(); 
        input.connect(node);
        node.connect(context.destination);
        Msg(t8.recording);
        btn.className = 'recording';
        btn.setAttribute('aria-label', t8.stop);
        btn.onclick = toggle;
        btnCnl.onclick = cancel;
        if (worklet) node.port.onmessage = process;
        else node.onaudioprocess = process;
      }
      function process (e) {
        if (!recording) return;
        var buffer = worklet ? e.data.inputBuffer[0] : e.inputBuffer.getChannelData(0);
        encoder.postMessage({ cmd: 'encode', buffer: buffer });
        btn.setAttribute('data-time', formatMs((Date.now() - ms)/1000)); 
      }
      function pause () {
        recording = false;
        btn.className += ' paused';
        if (worklet) node.port.onmessage = null;
        else node.onaudioprocess = null;
      }
      function resume () {
        recording = true;
        btn.classList.remove('paused');
        if (worklet) node.port.onmessage = process;
        else node.onaudioprocess = process;
      }
      function stop (e) {  
        recording = false;
        node.disconnect();
        input.disconnect();
        audio = new Audio();
        encoder.postMessage({ cmd: 'finish' });
        encoder.onmessage = function (e) {
          if (e.data.cmd === 'end') blobToDataURL(
            new Blob(e.data.buffer, { 
              type: 'audio/mp3' 
            }),
            function(res){ 
              audio.src = res; 
              var base64String = res.split(',')[1]; 
        document.getElementById("AudioData").value = base64String;
              }
          );
        };
        seeker.innerHTML = '<i></i>';
        parent.appendChild(toolbar);
        parent.className += ' playback';
        btn.className = 'play';
        btn.setAttribute('aria-label', t8.play);
        output = context.createMediaElementSource(audio);
        output.connect(context.destination);
        output.connect(analyser);
        Msg(t8.playback);
        btn.onclick = playback;
        btnCnl.onclick = cancel;
        btnDel.onclick = cancel;
        btnAdd.onclick = function(e){ 
          var file = {
            type: 'audio/mp3', 
            size: inBytes(audio.src),
            name: 'Record-'+ new Date(ms).toISOString().split('.')[0] +'.mp3', 
            duration: audio.duration
          };
          Listing(file, audio.src, 'record', 'mp3');
          reset();
        };
      }
      function playback (e) {
        playing = !playing;
        btn.setAttribute('aria-label', playing ? t8.pause : t8.play); 
        btn.className = playing ? 'pause' : 'play'; 
        playing ? audio.play() : audio.pause();
        seeker.setAttribute('data-end', formatMs(audio.duration));
        seeker.setAttribute('data-start', formatMs(audio.currentTime));
        seeker.firstElementChild.onclick = seek;
        audio.ontimeupdate = function (e) {
          var time = formatMs(this.currentTime) +' / '+ formatMs(this.duration||0);
          btn.setAttribute('data-time', time);
          seeker.firstElementChild.innerHTML = time;
          seeker.style = '--position:'+ (this.currentTime/this.duration) +';';
          seeker.setAttribute('data-start', formatMs(this.currentTime));
        };
        audio.onended = function (e) { 
          playing = false;
          seeker.removeAttribute('style');
          btn.setAttribute('aria-label', t8.play);
          btn.className = 'play';
        }
        function seek (e) {
          var re = this.getBoundingClientRect(), 
           ratio = Math.abs((e.clientX - re.left)/re.width);
          audio.currentTime = audio.duration * ratio;
        }
      }
      function visualize (frequencies) {
        var bars = 200, bar, barWidth, barHeight, barX, barY;
        var dpr = W.devicePixelRatio || 1;
        analyser.fftSize = 512; 
        analyser.smoothingTimeConstant = 0.6;
        parent.appendChild(canvas);
        var rect = area.getBoundingClientRect();
        canvas.width = rect.width * dpr;
        canvas.height = rect.height * dpr;
        // canvas.scale(dpr, dpr);
        bar = canvas.getContext('2d');
        bar.fillStyle = 'rgba(127,127,127,0.25)';
        draw();
        function draw () {
          W.requestAnimationFrame(draw);
          analyser.getByteFrequencyData(frequencies);
          bar.clearRect(0, 0, canvas.width, canvas.height);
          for (var i = 0; i < bars; i++) {
            barWidth = canvas.width / bars;
            barHeight = frequencies[i];
            barX = i * (barWidth + 5);
            barY = (canvas.height / 2) - (barHeight / 2);
            bar.fillRect(barX, barY, barWidth, barHeight);
          }
          if(recording) {
            var val = 0, len = frequencies.length;
            for (var j = 0; j < len; j++) val += frequencies[j];
            btn.style.setProperty('--peak', (val/len).toFixed(2));
          }
        }
      }
    }
    // Audio Data to SVG path 
    function audioToPath (url, width, height, num) {
      var w = width || 100, h = height || 32, n = num || 100; 
    }
    // Dialogs, drawers & messages
    function Msg (str) {
      str = str ? str.charAt(0).toUpperCase() + str.slice(1) : null;
      area.setAttribute('placeholder', str); 
      // area.focus();
    }
    function Drawer (drawer, knob, persist) {
      var a = knob || W.event.target || this;
      if(!a.hasAttribute('aria-controls') && !D.querySelector(a.href) && !a.for) return;
      var n = a.getAttribute('aria-controls') || a.href || a.for;
      var el = drawer || D.getElementById(n.replace('#',''));
      if(!el) return;
      var btn = el.querySelector('.close, .back, .cancel');
      if(!btn) btn = createEl('button', {'type':'button','class':'back'},t8.back,svg(PTS.close),el);
      persist = persist || el.hasAttribute('data-persist') || el.className.match('persist');
      var isOpen = el.hasAttribute('open');
      a.setAttribute('aria-expanded', isOpen ? true : false);
      a.onclick = isOpen ? close : open;
      btn.onclick = close;
      this.open = function open (e) {
        el.setAttribute('open');
        a.setAttribute('aria-expanded', true);
        if(!persist) addListeners(D, 'click', block, true);
        else addListeners(D, 'click', escape, false);
        btn.onclick = close;
        el.onkeydown = trap;
        btn.focus();
      }
      this.close = function close (e) {
        el.removeAttribute('open');
        a.setAttribute('aria-expanded', false);
        if(!persist) removeListeners(D, 'click', block, true);
        else removeListeners(D, 'click', escape, false);
      }
      function escape (e) {
        var k; e = e || W.event;
        k = e.key || e.keyCode || e.which;
        if(k === 'Escape' || k === 'Esc' || k === 27) close();
        if(e.type === 'click' && !el.contains(e.target)) close();
      }
      function block (e) {
        if(el.contains(e.target)) return;
        preventAll(e);
        el.className += ' static';
        btn.focus();
        setTimeout(function(){ el.classList.remove('static'); }, 500);
      } 
    }
    function Dialog (type, str, callback, persist) {
      var modal, dialog, message, content, field, buttons, ok, no;
      message = str ? str.charAt(0).toUpperCase() + str.slice(1) : undefined;
      buttons = '<button type="reset">'+ t8.cancel +'</button><button type="button">'+ t8.confirm +'</button>';
      dialog = createEl('form', {'role':'document','aria-live':'polite'}, '<i>'+message+'</i>'+ buttons);
      modal = createEl('div', {'class':CLN +'-dialog','role':'dialog','open':''}, null, dialog, wrap);
      field = createEl('input', {'type':'text','placeholder':'Name','required':''});
      ok = dialog.querySelector('button[type=button]');
      no = dialog.querySelector('button[type=reset]');
      if(type === 'prompt') no.injectAdjacentElement('beforeEnd', field);
      else if(type === 'alert') dialog.removeChild(no);
      if(type !== 'confirm') ok.innerHTML = t8.ok;
      if(!persist) addListeners(D, 'click', block, true);
      else addListeners(D, 'click', escape, false);
      ok.onclick = callback instanceof Function ? action : close;
      no.onclick = close;
      modal.onkeydown = trap;
      modal.className += ' fade';
      ok.focus();
      function close (e) {
        modal.removeAttribute('open');
        if(!persist) removeListeners(D, 'click', block, true);
        else removeListeners(D, 'click', escape, false);
        setTimeout(function(){ modal.parentElement.removeChild(modal); }, 250);
      }
      function action (e) {
        close(); 
        return callback.call(field.value); 
      }
      function escape (e) {
        var k; e = e || W.event;
        k = e.key || e.keyCode || e.which;
        if(k === 'Escape' || k === 'Esc' || k === 27) close();
        if(e.type === 'click' && !dialog.contains(e.target)) close();
      }
      function block (e) {
        if(dialog.contains(e.target)) return;
        preventAll(e);
        modal.className += ' static';
        ok.focus();
        setTimeout(function(){ modal.classList.remove('static'); }, 500);
      }
    }
  }
  // Helper
  function preventAll (e) {
    e.stopPropagation(); e.preventDefault();
  }
  function merge (o1, o2) {
    return [o1, o2].reduce(function(a, o) { for(var k in o) a[k] = o[k]; return a; }, {});
  }
  function truncate (str, n) {
    var l = str.length, h = parseInt(n/2,10);
    return (l > n) ? str.substr(0, h-1) +'…'+ str.slice(l-h) : str;
  }
  function createEl (name, atts, text = null, elem = null, parent = null) {
    var el = D.createElement(name);
    for(var k in atts) el.setAttribute(k, atts[k]);
    if(text) el.innerHTML = text; 
    if(elem instanceof Element) el.appendChild(elem);
    if(parent) parent.appendChild(el);
    return el;
  }
  function svg (path, box, cln, label) { 
    var el = D.createElementNS('http://www.w3.org/2000/svg','svg'); 
    el.setAttribute('viewBox', box ? box : '0 0 9 9');
    if(cln) el.className = cln;
    if(path instanceof Array) path.forEach(function(p){ el.innerHTML += '<path d="'+ p +'"/>'; });
    else if (path) el.innerHTML = '<path d="'+ path +'"/>';
    if(!label) el.setAttribute('aria-hidden', true); 
    else el.setAttribute('aria-label', label);
    return el;
  }
  function removeListeners (el, types, call, active = false) {
    types.split(',').forEach(function(t){ el.removeEventListener(t.trim(), call, active); });
  }
  function addListeners (el, types, call, active = false) {
    removeListeners(el, types, call, active);
    types.split(',').forEach(function(t){ el.addEventListener(t.trim(), call, active); });
  }  
  function dataURLtoBlob (url) {
      var a = url.split(','), mime = a[0].match(/:(.*?);/)[1],
        str = atob(a[1]), n = str.length, u8a = new Uint8Array(n);
      while(n--) u8a[n] = str.charCodeAt(n);
      return new Blob([u8a], {type:mime});
  }    
  function blobToDataURL (blob, res) {
    var r = new FR();
    r.onload = function (){ return res instanceof Function ? res(r.result) : r.result; };
    r.readAsDataURL(blob);
  }
  function formatMs (n) {
    var h = Math.floor(n/3600), 
        m = Math.floor((n-(h*3600))/60), 
        s = Math.floor(n-(h*3600)-(m*60));
    if (m < 10) m = '0'+ m; 
    if (s < 10) s = '0'+ s;
    return m +':'+ s;
  }
  function formatBytes (bytes, dec) {
    var s = ['Bytes','KB','MB','GB','TB','PB','EB','ZB','YB'],
      dec = dec ? dec : 2;
    for(var i = 0, r = bytes, b = 1024; r > b; i++) r /= b;
    return parseFloat(r.toFixed(dec)) +' '+ s[i];
  }
  function inBytes (str) { // byte size of utf-8 string
    if(typeof str !== 'string') return 0;
    var b = str.length;
    for (var i=str.length-1; i>=0; i--) {
      var c = str.charCodeAt(i);
      if (c > 0x7f && c <= 0x7ff) b++;
      else if (c > 0x7ff && c <= 0xffff) b += 2;
      if (c >= 0xDC00 && c <= 0xDFFF) i--;
    }
    return b;
  }
  function trap (e) { // Trap focus in element
    var els = this.querySelectorAll('a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input:not([disabled]):not([hidden]):not([type=hidden]), select:not([disabled]):not([hidden])');
    if (!els || e.key !== 'Tab' || e.keyCode !== 9) return;
    var f = els[0], l = els[els.length-1], a = D.activeElement;
    if (e.shiftKey && a === f) { e.preventDefault(); l.focus(); }
    else if (a === l) { e.preventDefault(); f.focus(); }
  }
  function getMedia (constraints, res, err) { // Shim old getUserMedia API
    if (N.mediaDevices === undefined) N.mediaDevices = {};
    if (N.mediaDevices.getUserMedia === undefined) {
      N.mediaDevices.getUserMedia = function(constraints) {
        var gum = N.getUserMedia || N.webkitGetUserMedia || N.mozGetUserMedia || N.msGetUserMedia;
        if (!gum) return;
        return new Promise(function(res, err) { gum.call(N, constraints, res, err); });
      }
    }
    else return N.mediaDevices.getUserMedia(constraints).then(res).catch(err);
  }
}

// Inline audio worklet
// input-processor-worklet.js
function inputProcessorWorklet () {
  registerProcessor('input-processor', class extends AudioWorkletProcessor {
    constructor () { super(); }
    process (inputs, outputs, parameters) {
      var output = outputs[0], buffers = [];
      output.forEach(function(channel) {
        for (var i = 0; i < channel.length; i++) {
          buffers.push(channel[i]);
        }
      });
      this.port.postMessage({inputBuffer: buffers});
      return true;
    }
  });
}

// Inline worker
// mp3-encoder-worker.js
function mp3EncoderWorker () {
  importScripts('https://cdn.jsdelivr.net/gh/zhuker/lamejs/lame.min.js');
  var mp3Encoder, maxSamples = 1152, samplesMono, config, dataBuffer;
  self.onmessage = function (e) {
    switch (e.data.cmd) {
      case 'init': init(e.data.config); break;
      case 'encode': encode(e.data.buffer); break;
      case 'finish': finish(); break;
    }
  };
  function init (configuration) {
    config = configuration || {debug: true};
    mp3Encoder = new lamejs.Mp3Encoder(1, config.sampleRate || 44100, config.bitRate || 128);
    clearBuffer();
  }
  function encode (arrayBuffer) {
    samplesMono = convertBuffer(arrayBuffer);
    var remaining = samplesMono.length;
    for (var i = 0; remaining >= 0; i += maxSamples) {
      var left = samplesMono.subarray(i, i + maxSamples);
      var buff = mp3Encoder.encodeBuffer(left);
      appendToBuffer(buff);
      remaining -= maxSamples;
    }
  }
  function finish () {
    appendToBuffer(mp3Encoder.flush());
    self.postMessage({ cmd: 'end', buffer: dataBuffer });
    clearBuffer(); //free up memory
  }
  function clearBuffer () {
    dataBuffer = [];
  }
  
  function appendToBuffer (mp3Buffer) {
    dataBuffer.push(new Int8Array(mp3Buffer));
  }
  function convertBuffer (arrayBuffer){
    var data = new Float32Array(arrayBuffer);
    var out = new Int16Array(arrayBuffer.length);
    floatTo16BitPCM(data, out)
    return out;
  }
  function floatTo16BitPCM (input, output) {
    for (var i = 0; i < input.length; i++) {
      var s = Math.max(-1, Math.min(1, input[i]));
      output[i] = (s < 0 ? s * 0x8000 : s * 0x7FFF);
    }
  }
}


 </script>  
      
</html>

      