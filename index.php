<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TI-89 Titanium Calculator</title>
  <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Cabin:600" rel="stylesheet" />
  <link href="./font/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/calc.css" />
  <!-- <style>
    .lil {
      font-size: 14px !important;
      position: absolute;
      top: -60%;
      width: 100px;
      margin: auto;
      left: 0;
      right: 0;
      font-weight: bold;
    }

    .lil_1 {
      font-size: 14px !important;
      position: absolute;
      top: -112%;
      width: 100px;
      margin: auto;
      left: 0;
      right: 0;
      font-weight: bold;
    }

    .lil_0 {
      font-size: 16px !important;
      position: absolute;
      top: -40%;
      width: 100px;
      margin: auto;
      left: 0;
      right: 0;
      font-weight: bold;
    }

    .lil_4 {
      font-size: 12px !important;
      position: absolute;
      top: -65%;
      width: 100px;
      margin: auto;
      left: 0;
      right: 0;
      font-weight: bold;
    }

    .lil_1 .l2 {
      font-size: 9px !important;
    }

    .lil_1 .l1 {
      font-size: 9px !important;
    }

    .lil_1 .l3 {
      font-size: 9px !important;
    }

    .l1 {
      color: #1097eb !important;
    }

    .l2 {
      color: #aecab2 !important;
    }

    .col div {
      position: relative;
    }

    #calc-screen-history {
      height: 60% !important;
    }

    #calc-screen-status {
      height: 0% !important;
      font-size: 10px !important;
    }

    .is_sec {
      margin-left: 2rem;
      display: none;
    }

    .is_dia {
      margin-left: 1rem;
      font-size: 15px;
      display: none;
    }

    #inputCover {
      float: left !important;
      justify-content: flex-start;

    }

    .vb {
      float: left !important;
    }

    .overlay_screen {
      background-color: #739070;
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      overflow: hidden;
      width: 100%;
      display: flex;

      justify-content: center;
      border: 30px;
      z-index: 5;
    }

    .container {
      border-radius: 30px;
      width: 100%;
      overflow: hidden;
      margin-top: 5px;
      border: 1px solid black;
      height: 85%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: transparent;
      position: relative;
    }

    .top {
      position: absolute;
      top: 0;
      height: 1.3rem;
      background-color: transparent;
      display: flex;
      border-bottom: 1px solid black;
      align-items: center;
      font-size: 12px;
      justify-content: center;
      left: 0;
      right: 0;
    }

    .bottom {
      border-top: 1px solid black;
      width: 100%;
      font-size: 12px;
      text-align: left;
      position: absolute;
      height: 10%;
      bottom: 0;
      left: 0;

    }

    .head_buttons {
      margin-left: 1rem;
      display: flex;
      margin-top: 1.4rem;
      align-items: center;
    }

    .hb {
      width: max-content;
      padding: 5px;
      border: 1px solid black;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      font-weight: bold;
      font-size: 10px !important;
      height: 1.3rem;
    }

    .content {
      margin-left: 1rem;
      font-size: 12px;
      margin-top: 10px;
    }

    .btn_2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-right: 1rem;
      margin-left: 1rem;
    }

    .btn_2 div {
      width: max-content;
      padding: 10px;
      border-radius: 30px;
      font-size: 10px;
      border: 2px dashed black;
      font-weight: bold;
    }

    .content div {
      cursor: pointer;
    }
  </style> -->
</head>

<body>
  <div id="calc-outer" class="hidden">
    <div id="inner-wrap">
      <div id="calc-inner">
        <div id="calc-inner-gradient"></div>
      </div>
      <div id="calc-screen" style="overflow: hidden">
        <div id="calc-screen-tabs">
          <div>F1<br />Tools</div>
          <div>F2<br />Zoom</div>
          <div>F3<br />Trace</div>
          <div>F4<br />Regraph</div>
          <div>F5<br />Math</div>
          <div>F6<br />Draw</div>
          <div>F7<br />Pen</div>
          <div>F8<br />IC</div>
        </div>
        <div id="calc-screen-history">
          <ul class="s_entries"></ul>
        </div>
        <div id="calc-screen-entry-div" style="position: relative">
          <input id="calc-screen-text-entry" class="hidden" value="" readonly="readonly" type="text" />
        </div>
        <div id="calc-screen-status" style="
              display: flex;
              justify-content: space-between;
              padding-top: 2px;
            ">
          <div style="padding-left: 5px">MAIN</div>
          <div class="is_dia" id="dia">♦</div>
          <div class="is_sec" id="sec">2nd</div>
          <div class="is_alpha" id="alpha">⌂</div>
          <div class="is_cap" id="cap">🡅</div>
          <div class="is_alphaLock" id="alphaLock" style="padding-top: 2px">
            <strong>ȁ</strong>
          </div>
          <div class="is_capLock" id="capLock" style="padding-top: 2px">
            <strong>Ȁ</strong>
          </div>
          <div>RAD</div>
          <div>AUTO</div>
          <div style="padding-right: 5px">FUNC</div>
          <!-- 
              <div class="is_sec">2ND</div>
              <div class="modes"></div> -->
        </div>
        <div id="calc-screen-shadow-top"></div>
      </div>
      <div id="calc-screen-spacer"></div>
      <div id="fbutton-group">
        <div class="btn">
          <span class="lil">
            <span class="l1">F6</span>&nbsp<span class="l2"> Y=</span>
          </span>
          <span>F1</span>
        </div>
        <div class="btn">
          <span class="lil" style="left: -20px">
            <span class="l1">F7</span>&nbsp<span class="l2"> WINDOW</span>
          </span>
          <span>F2</span>
        </div>
        <div class="btn">
          <span class="lil" style="left: -10px">
            <span class="l1">F8</span>&nbsp<span class="l2"> GRAPH</span>
          </span>
          <span>F3</span>
        </div>
        <div class="btn">
          <span class="lil">
            <span class="l1"></span>&nbsp<span class="l2">TBLSET</span>
          </span>
          <span>F4</span>
        </div>
        <div class="btn">
          <span class="lil">
            <span class="l1"></span>&nbsp<span class="l2"> TABLE</span>
          </span>
          <span>F5</span>
        </div>
      </div>
      <div id="arrow-group">
        <div id="arrow-left" class="btn">
          <img src="./images/left.png" alt="" height="28px" width="68px" style="margin-top: 0" />
        </div>
        <div id="arrow-updown">
          <div id="arrow-up" class="btn">
            <img src="./images/up.png" alt="" height="28px" width="68px" style="margin-top: 0" />
          </div>
          <div id="arrow-down" class="btn">
            <img src="./images/down.png" alt="" height="28px" width="68px" class="down" style="margin-top: 0" />
          </div>
        </div>
        <div id="arrow-right" class="btn">
          <img src="./images/right.png" alt="" height="28px" width="68px" style="margin-top: 0" />
        </div>
      </div>
      <div id="columns">
        <div id="col-1" class="col">
          <div id="col-1-second" class="btn">
            <img src="./images/2nd.png" alt="2ND" height="32px" width="68px" class="2ndbutton" />
          </div>
          <div id="col-1-diamond" class="btn">
            <img src="./images/diamond.png" alt="♦" height="32px" width="68px" class="diamond" />
          </div>
          <div id="col-1-home" class="btn">
            <img src="./images/home.png" alt="HOME" height="32px" width="68px" class="homebutton" />
          </div>
          <div id="col-1-x" class="btn">
            <img src="./images/x.png" alt="x" height="32px" width="68px" class="xbutton" />
          </div>
          <div id="col-1-equal" class="btn">
            <img src="./images/=.png" alt="=" height="32px" width="68px" class="=button" />
          </div>
          <div id="col-1-pipe" class="btn">
            <img src="./images/aone.png" alt="|" height="32px" width="68px" class="aonebutton" />
          </div>
          <div id="col-1-ee" class="btn">
            <img src="./images/ee.png" alt="EE" height="32px" width="68px" class="eebutton" />
          </div>
          <div id="col-1-store" class="btn">
            <img src="./images/sto.png" alt="STO►" height="32px" width="68px" class="storebutton" />
          </div>
          <div id="col-1-on" class="btn">
            <img src="./images/on.png" alt="ON" height="42px" width="68px" class="onbutton" style="padding-top: 15px" />
          </div>
        </div>
        <div id="col-2" class="col">
          <div id="col-2-shift" class="btn">
            <div class="btn-padding">
              <img src="./images/copy.png" alt="COPY" height="32px" width="68px" class="copybutton" />
            </div>
          </div>
          <div id="col-2-alpha" class="btn">
            <img src="./images/alpha.png" alt="ALPHA" height="32px" width="68px" class="alphabutton" />
          </div>
          <div id="col-2-mode" class="btn">
            <img src="./images/mode.png" alt="MODE" height="32px" width="68px" class="modebutton" />
          </div>
          <div id="col-2-y" class="btn">
            <img src="./images/y.png" alt="Y" height="32px" width="68px" class="ybutton" />
          </div>
          <div id="col-2-leftpar" class="btn">
            <img src="./images/leftbrac.png" alt="(" height="32px" width="68px" class="leftparbutton" />
          </div>
          <div id="col-2-7" class="btn btn-blk">
            <img src="./images/7.png" alt="7" height="32px" width="68px" class="7button" />
          </div>
          <div id="col-2-4" class="btn btn-blk">
            <img src="./images/4.png" alt="4" height="32px" width="68px" class="4button" />
          </div>
          <div id="col-2-1" class="btn btn-blk">
            <img src="./images/1.png" alt="1" height="32px" width="68px" class="1button" />
          </div>
          <div id="col-2-0" class="btn btn-blk">
            <img src="./images/zero.png" alt="0" height="32px" width="68px" class="0button" />
          </div>
        </div>
        <div id="col-3" class="col">
          <div id="col-3-esc" class="btn">
            <img src="./images/esc.png" alt="ESC" height="32px" width="68px" class="escbutton" />
          </div>
          <div id="col-3-apps" class="btn">
            <img src="./images/apps.png" alt="APPS" height="32px" width="68px" class="appsbutton" />
          </div>
          <div id="col-3-cat" class="btn">
            <img src="./images/catalog.png" alt="CATALOG" height="32px" width="68px" class="catalogbutton" />
          </div>
          <div id="col-3-z" class="btn">
            <img src="./images/z.png" alt="z" height="32px" width="68px" class="zbutton" />
          </div>
          <div id="col-3-rightpar" class="btn">
            <img src="./images/righbrac.png" alt=")" height="32px" width="68px" class="rightparbutton" />
          </div>
          <div id="col-3-8" class="btn btn-blk">
            <img src="./images/8.png" alt="8" height="32px" width="68px" class="8button" />
          </div>
          <div id="col-3-5" class="btn btn-blk">
            <img src="./images/5.png" alt="5" height="32px" width="68px" class="5button" />
          </div>
          <div id="col-3-2" class="btn btn-blk">
            <img src="./images/2.png" alt="2" height="32px" width="68px" class="2button" />
          </div>
          <div id="col-3-period" class="btn btn-blk">
            <img src="./images/dot.png" alt="." height="32px" width="68px" class="dotbutton" />
          </div>
        </div>
        <div id="col-4" class="col">
          <div id="col-4-backspace" class="btn">
            <img src="./images/ins.png" alt="back" height="32px" width="68px" class="insbutton" />
          </div>
          <div id="col-4-t" class="btn">
            <img src="./images/t.png" alt="t" height="32px" width="68px" class="tbutton" />
          </div>
          <div id="col-4-comma" class="btn">
            <img src="./images/comma.png" alt="," height="32px" width="68px" class="commabutton" />
          </div>
          <div id="col-4-9" class="btn btn-blk">
            <img src="./images/9.png" alt="9" height="32px" width="68px" class="9button" />
          </div>
          <div id="col-4-6" class="btn btn-blk">
            <img src="./images/6.png" alt="6" height="32px" width="68px" class="6button" />
          </div>
          <div id="col-4-3" class="btn btn-blk">
            <img src="./images/3.png" alt="3" height="32px" width="68px" class="3button" />
          </div>
          <div id="col-4-negative" class="btn btn-blk">
            <img src="./images/brackminus.png" alt="(-)" height="32px" width="68px" class="negatvivebutton" />
          </div>
        </div>
        <div id="col-5" class="col">
          <div id="col-5-clear" class="btn">
            <img src="./images/clear.png" alt="clear" height="32px" width="68px" class="clearbutton" />
          </div>
          <div id="col-5-caret" class="btn" data_1="^" data_2="π" data_3="θ">
            <img src="./images/caret.png" alt="^" height="32px" width="68px" class="caretbutton" />
          </div>
          <div id="col-5-div" class="btn">
            <img src="./images/divide.png" alt="/" height="32px" width="68px" class="dividebutton" />
          </div>
          <div id="col-5-mult" class="btn">
            <img src="./images/multiply.png" alt="*" height="32px" width="68px" class="multiplybutton" />
          </div>
          <div id="col-5-minus" class="btn">
            <img src="./images/minus.png" alt="-" height="32px" width="68px" class="minusbutton" />
          </div>
          <div id="col-5-plus" class="btn">
            <img src="./images/plus.png" alt="+" height="32px" width="68px" class="plusbutton" />
          </div>
          <div id="col-5-enter" class="btn">
            <img src="./images/enter.png" alt="ENTER" height="42px" width="68px" class="enterbutton" style="padding-top: 10px" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="jquery.js"></script>
  <script>
    var initialHeight;
    var inputID = "#calc-screen-text-entry";
    var cursorPosition = 0;
    var expression = "";
    var mode = "D";
    var is_second = false;
    var is_diamond = false;
    var is_caps = false;
    var is_capsLock = false;
    var is_alpha = false;
    var is_alphaLock = false;

    $(function() {
      // Get initial height for use in resizing
      initialHeight = $("#calc-outer").height();

      // Set height to fill window
      $("#calc-outer").css("height", "100%");

      // Resize and show calculator
      resizeWidthAndFont();
      $("#calc-outer").removeClass("hidden");
      $(window).resize(function() {
        resizeWidthAndFont();
      });

      function resizeWidthAndFont() {
        var h = $("#calc-outer").height();
        var newHeight = (h / initialHeight) * 100;
        $("#calc-outer").css("width", h / 2);
        $("body").css("font-size", newHeight + "%");
      }

      // On document load create input overlay, set input to readonly, and focus
      $(inputID).after('<div id="inputCover"><span id="vb"></span></div>');
      $(inputID).attr("readonly", "readonly");
      entryFocus($(inputID).val().length);
    });

    $("#columns").click(function(e) {
      let elementClass = e.target;
      let checker = elementClass.className;

      switch (checker) {
        case "2ndbutton":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_caps) {
            $(".is_cap").toggle();
            is_caps = false;
            $(".is_sec").toggle();
            is_second = true;
          } else if (is_alpha) {
            $(".is_alpha").toggle();
            is_alpha = false;
            $(".is_sec").toggle();
            is_second = true;
          } else if (is_alphaLock) {
            $(".is_alphaLock").toggle();
            is_alphaLock = false;
            $(".is_sec").toggle();
            is_second = true;
          } else if (is_capsLock) {
            $(".is_sec").toggle();
            is_second = true;
            $(".is_capLock").toggle();
            is_capsLock = false;
          } else {
            $(".is_sec").toggle();
            is_second = true;
          }
          break;

        case "diamond":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
            $(".is_dia").toggle();
            is_diamond = true;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_caps) {
            $(".is_cap").toggle();
            is_caps = false;
            $(".is_dia").toggle();
            is_diamond = true;
          } else if (is_alpha) {
            $(".is_alpha").toggle();
            is_alpha = false;
            $(".is_dia").toggle();
            is_diamond = true;
          } else if (is_alphaLock) {
            $(".is_alphaLock").toggle();
            is_alphaLock = false;
            $(".is_dia").toggle();
            is_diamond = true;
          } else if (is_capsLock) {
            $(".is_dia").toggle();
            is_diamond = true;
            $(".is_capLock").toggle();
            is_capsLock = false;
          } else {
            $(".is_dia").toggle();
            is_diamond = true;
          }
          break;
        case "homebutton":
          //yet to decide
          break;
        case "xbutton":
          if (is_second) {
            insert("ln");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            insert("e^(");
            $(".is_dia").toggle();
            is_diamond = false;
          } else {
            insert("x");
          }
          break;
        case "=button":
          if (is_second) {
            insert("'");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("a");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("a");
          } else if (is_capsLock) {
            insert("A");
          } else if (is_caps) {
            insert("A");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("=");
          }
          break;
        case "aonebutton":
          if (is_second) {
            insert("°");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("f");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("f");
          } else if (is_capsLock) {
            insert("F");
          } else if (is_caps) {
            insert("F");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("|");
          }
          break;
        case "eebutton":
          if (is_second) {
            insert("°");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("k");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("k");
          } else if (is_capsLock) {
            insert("K");
          } else if (is_caps) {
            insert("K");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("E");
          }
          break;
        case "storebutton":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("p");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("p");
          } else if (is_capsLock) {
            insert("P");
          } else if (is_caps) {
            insert("P");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("→");
          }
          break;
        case "onbutton":
          //yet to decide
          break;
        case "copybutton":
          if (is_second) {
            $(".is_cap").toggle();
            is_caps = true;
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_caps) {
            $(".is_cap").toggle();
            is_caps = false;
          } else if (is_alpha) {
            $(".is_cap").toggle();
            is_caps = true;
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            $(".is_cap").toggle();
            is_caps = true;
            $(".is_alphaLock").toggle();
            is_alphaLock = false;
          } else if (is_capsLock) {
            $(".is_cap").toggle();
            is_caps = true;
            $(".is_capLock").toggle();
            is_capsLock = false;
          } else {
            $(".is_cap").toggle();
            is_caps = true;
          }
          break;
        case "alphabutton":
          if (is_second) {
            $(".is_alphaLock").toggle();
            is_alphaLock = true;
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
            $(".is_alpha").toggle();
            is_alpha = true;
          } else if (is_caps) {
            $(".is_cap").toggle();
            is_caps = false;
            $(".is_capLock").toggle();
            is_capsLock = true;
          } else if (is_capsLock) {
            $(".is_capLock").toggle();
            is_capsLock = false;
          } else if (is_alpha) {
            $(".is_alpha").toggle();
            is_alpha = false;
            $(".is_alphaLock").toggle();
            is_alphaLock = true;
          } else if (is_alphaLock) {
            $(".is_alphaLock").toggle();
            is_alphaLock = false;
          } else {
            $(".is_alpha").toggle();
            is_alpha = true;
          }
          break;
        case "modebutton":
          //yet to decide
          break;
        case "ybutton":
          if (is_second) {
            insert("sin(");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            insert("sin-1(");
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("y");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("y");
          } else if (is_capsLock) {
            insert("Y");
          } else if (is_caps) {
            insert("Y");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("y");
          }
          break;
        case "leftparbutton":
          if (is_second) {
            insert("{");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("b");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("b");
          } else if (is_capsLock) {
            insert("B");
          } else if (is_caps) {
            insert("B");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("(");
          }
          break;
        case "7button":
          if (is_second) {
            insert("∫");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("g");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("g");
          } else if (is_capsLock) {
            insert("G");
          } else if (is_caps) {
            insert("G");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("7");
          }
          break;
        case "4button":
          if (is_second) {
            insert(":");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("l");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("l");
          } else if (is_capsLock) {
            insert("L");
          } else if (is_caps) {
            insert("L");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("4");
          }
          break;
        case "1button":
          if (is_second) {
            insert('"');
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("q");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("q");
          } else if (is_capsLock) {
            insert("Q");
          } else if (is_caps) {
            insert("Q");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("1");
          }
          break;
        case "0button":
          if (is_second) {
            insert("<");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("v");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("v");
          } else if (is_capsLock) {
            insert("V");
          } else if (is_caps) {
            insert("V");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("0");
          }
          break;
        case "escbutton":
          //yet to decide
          break;
        case "appsbutton":
          //yet to decide
          break;
        case "catalogbutton":
          //yet to decide
          break;
        case "zbutton":
          if (is_second) {
            insert("cos(");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            insert("cos-1(");
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("z");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("z");
          } else if (is_capsLock) {
            insert("Z");
          } else if (is_caps) {
            insert("Z");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("z");
          }
          break;
        case "rightparbutton":
          if (is_second) {
            insert("}");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("c");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("c");
          } else if (is_capsLock) {
            insert("C");
          } else if (is_caps) {
            insert("C");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert(")");
          }
          break;
        case "8button":
          if (is_second) {
            insert("d");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("h");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("h");
          } else if (is_capsLock) {
            insert("H");
          } else if (is_caps) {
            insert("H");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("8");
          }
          break;
        case "5button":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("m");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("m");
          } else if (is_capsLock) {
            insert("M");
          } else if (is_caps) {
            insert("M");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("5");
          }
          break;
        case "2button":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("r");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("r");
          } else if (is_capsLock) {
            insert("R");
          } else if (is_caps) {
            insert("R");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("2");
          }
          break;
        case "dotbutton":
          if (is_second) {
            insert(">");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("w");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("w");
          } else if (is_capsLock) {
            insert("W");
          } else if (is_caps) {
            insert("W");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert(".");
          }
          break;
        case "insbutton":
          backspace();
          break;
        case "tbutton":
          if (is_second) {
            insert("tan(");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            insert("tan-1(");
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("t");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("t");
          } else if (is_capsLock) {
            insert("T");
          } else if (is_caps) {
            insert("T");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("t");
          }
          break;
        case "commabutton":
          if (is_second) {
            insert("[");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("d");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("d");
          } else if (is_capsLock) {
            insert("D");
          } else if (is_caps) {
            insert("D");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert(",");
          }
          break;
        case "9button":
          if (is_second) {
            insert(";");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("i");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("i");
          } else if (is_capsLock) {
            insert("I");
          } else if (is_caps) {
            insert("I");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("9");
          }
          break;
        case "6button":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("n");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("n");
          } else if (is_capsLock) {
            insert("N");
          } else if (is_caps) {
            insert("N");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("6");
          }
          break;
        case "3button":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("s");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("s");
          } else if (is_capsLock) {
            insert("S");
          } else if (is_caps) {
            insert("S");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("3");
          }
          break;
        case "negatvivebutton":
          if (is_second) {
            insert("ans(1)");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert(" ");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert(" ");
          } else if (is_capsLock) {
            insert(" ");
          } else if (is_caps) {
            insert(" ");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("ˉ");
          }
          break;
        case "clearbutton":
          clear();
          expression = "";
          break;
        case "caretbutton":
          if (is_second) {
            insert("π");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            insert("Θ");
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("^");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("^");
          } else if (is_capsLock) {
            insert("^");
          } else if (is_caps) {
            insert("^");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("^");
          }
          break;
        case "dividebutton":
          if (is_second) {
            insert("]");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("e");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("e");
          } else if (is_capsLock) {
            insert("E");
          } else if (is_caps) {
            insert("E");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("/");
          }
          break;
        case "multiplybutton":
          if (is_second) {
            insert("√");
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("j");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("j");
          } else if (is_capsLock) {
            insert("J");
          } else if (is_caps) {
            insert("J");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("*");
          }
          break;
        case "minusbutton":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("o");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("o");
          } else if (is_capsLock) {
            insert("O");
          } else if (is_caps) {
            insert("O");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("-");
          }
          break;
        case "plusbutton":
          if (is_second) {
            $(".is_sec").toggle();
            is_second = false;
          } else if (is_diamond) {
            $(".is_dia").toggle();
            is_diamond = false;
          } else if (is_alpha) {
            insert("u");
            $(".is_alpha").toggle();
            is_alpha = false;
          } else if (is_alphaLock) {
            insert("u");
          } else if (is_capsLock) {
            insert("U");
          } else if (is_caps) {
            insert("U");
            $(".is_cap").toggle();
            is_caps = false;
          } else {
            insert("+");
          }
          break;
        case "enterbutton":
          calculateResult(expression);
          break;
        default:
          console.log("");
          break;
      }
    });

    //Insert a new value into the screen area
    function insert(val) {
      var entry = $(inputID).val();

      if (cursorPosition == entry.length) {
        // append value to end of string
        entry += val;
        expression += val;
      } else {
        entry += val;
        expression += val;
      }
      // replace input value with new entry
      $(inputID).val(entry);

      // advance cursor position and focus input
      $("#vb").text(entry);
    }

    //Function to perform Backspace
    function backspace() {
      var vb = document.getElementById("vb").textContent;
      new_vb = vb.slice(0, -1);
      entry = new_vb;
      expression = entry;
      $("#vb").text(new_vb);
      $(inputID).val(entry);
    }
    //Clear the Screen
    function clear() {
      $(inputID).val("");
      entry = "";
      $("#vb").text("");
      expression = "";
    }

    function calculateResult(expression) {
      $.ajax({
        url: "server/calc.php",
        type: "post",
        async: false,
        data: {
          expression: expression,
          mode: mode,
        },
        success: (response) => {
          $(".s_entries").append(
            `${
          "<li class='s_entry'><div class='v1'>" +
          expression +
          "</div><div class='v2'>" +
          response +
          "</div></li>"
        }`
          );
        },
        error: (e) => {
          console.log(error);
        },
      });
    }
  </script>
</body>

</html>