<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
{{-- <link rel="stylesheet" href="./style.css"> --}}
 <style>
    body {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;

  font-family: sans-serif;
  background: #02A3DA;
}

#chest-wrap {
  max-width: 600px;
  width: 100%;
}

#chest .cls-1 {
  fill: #573e1d;
}
#chest .cls-2 {
  fill: #3c2415;
}
#chest .cls-3 {
  fill: #f7bc49;
}
#chest .cls-4 {
  fill: #885d26;
}
#chest .cls-5 {
  fill: #3a2415;
}
#chest .cls-6 {
  fill: #f9ed24;
}
#chest .cls-7 {
  -webkit-clip-path: url(#clip-path);
          clip-path: url(#clip-path);
}
#chest .cls-8 {
  -webkit-clip-path: url(#clip-path-2);
          clip-path: url(#clip-path-2);
}
#chest .cls-9 {
  -webkit-clip-path: url(#clip-path-3);
          clip-path: url(#clip-path-3);
}
#chest .cls-10 {
  fill: #ffe30a;
}
#chest .cls-11 {
  -webkit-clip-path: url(#clip-path-4);
          clip-path: url(#clip-path-4);
}
#chest .cls-12,
#chest .cls-17 {
  fill: none;
  stroke: #3c2415;
  stroke-miterlimit: 10;
}
#chest .cls-12 {
  stroke-width: 22.6px;
}
#chest .cls-13 {
  -webkit-clip-path: url(#clip-path-5);
          clip-path: url(#clip-path-5);
}
#chest .cls-14 {
  fill: #fed00d;
}
#chest .cls-15 {
  -webkit-clip-path: url(#clip-path-6);
          clip-path: url(#clip-path-6);
}
#chest .cls-16 {
  fill: #5b3d1b;
}
#chest .cls-17 {
  stroke-width: 23.52px;
}
#chest .cls-18 {
  -webkit-clip-path: url(#clip-path-7);
          clip-path: url(#clip-path-7);
}
#chest .cls-19,
#chest .cls-24,
#chest .cls-25,
#chest .cls-26 {
  fill: #fff;
}
#chest .cls-19 {
  opacity: 0.34;
}
#chest .cls-20 {
  -webkit-clip-path: url(#clip-path-8);
          clip-path: url(#clip-path-8);
}
#chest .cls-21 {
  -webkit-clip-path: url(#clip-path-9);
          clip-path: url(#clip-path-9);
}
#chest .cls-22 {
  -webkit-clip-path: url(#clip-path-10);
          clip-path: url(#clip-path-10);
}
#chest .cls-23 {
  fill: #f9ed32;
}
#chest .cls-24 {
  opacity: 0.65;
}
#chest .cls-25 {
  opacity: 0.86;
}
#chest .cls-1 {
  fill: #573e1d;
}
#chest .cls-2 {
  fill: #3c2415;
}
#chest .cls-3 {
  fill: #f7bc49;
}
#chest .cls-4 {
  fill: #885d26;
}
#chest .cls-5 {
  fill: #3a2415;
}
#chest .cls-6 {
  fill: #f9ed24;
}
#chest .cls-7 {
  -webkit-clip-path: url(#clip-path);
          clip-path: url(#clip-path);
}
#chest .cls-8 {
  -webkit-clip-path: url(#clip-path-2);
          clip-path: url(#clip-path-2);
}
#chest .cls-9 {
  -webkit-clip-path: url(#clip-path-3);
          clip-path: url(#clip-path-3);
}
#chest .cls-10 {
  fill: #ffe30a;
}
#chest .cls-11 {
  -webkit-clip-path: url(#clip-path-4);
          clip-path: url(#clip-path-4);
}
#chest .cls-12,
#chest .cls-17 {
  fill: none;
  stroke: #3c2415;
  stroke-miterlimit: 10;
}
#chest .cls-12 {
  stroke-width: 22.6px;
}
#chest .cls-13 {
  -webkit-clip-path: url(#clip-path-5);
          clip-path: url(#clip-path-5);
}
#chest .cls-14 {
  fill: #fed00d;
}
#chest .cls-15 {
  -webkit-clip-path: url(#clip-path-6);
          clip-path: url(#clip-path-6);
}
#chest .cls-16 {
  fill: #5b3d1b;
}
#chest .cls-17 {
  stroke-width: 23.52px;
}
#chest .cls-18 {
  -webkit-clip-path: url(#clip-path-7);
          clip-path: url(#clip-path-7);
}
#chest .cls-19,
#chest .cls-24,
#chest .cls-25,
#chest .cls-26 {
  fill: #fff;
}
#chest .cls-19 {
  opacity: 0.34;
}
#chest .cls-20 {
  -webkit-clip-path: url(#clip-path-8);
          clip-path: url(#clip-path-8);
}
#chest .cls-21 {
  -webkit-clip-path: url(#clip-path-9);
          clip-path: url(#clip-path-9);
}
#chest .cls-22 {
  -webkit-clip-path: url(#clip-path-10);
          clip-path: url(#clip-path-10);
}
#chest .cls-23 {
  fill: #f9ed32;
}
#chest .cls-24 {
  opacity: 0.65;
}
#chest .cls-25 {
  opacity: 0.86;
}

#chest-sparkles,
#chest-lock,
#chest-top,
#chest-bottom {
  transform-origin: 250px 200px;
}

#chest.shake-chest #chest-lock {
  -webkit-animation: shakeChestTop 1.2s infinite ease;
          animation: shakeChestTop 1.2s infinite ease;
}
#chest.shake-chest #chest-bottom {
  -webkit-animation: shakeChestBottom 1.2s infinite ease;
          animation: shakeChestBottom 1.2s infinite ease;
}
#chest.shake-chest #chest-top {
  -webkit-animation: shakeChestTop 1.2s infinite ease;
          animation: shakeChestTop 1.2s infinite ease;
}
#chest.shake-chest #chest-sparkles {
  -webkit-animation: shakeChestTop 1.2s infinite ease;
          animation: shakeChestTop 1.2s infinite ease;
}
#chest.open-chest #chest-lock {
  -webkit-animation: openLock 3s ease forwards;
          animation: openLock 3s ease forwards;
}
#chest.open-chest #chest-top {
  -webkit-animation: openChestTop 3s ease forwards;
          animation: openChestTop 3s ease forwards;
}
#chest.open-chest #chest-sparkles {
  opacity: 0;
  transition: 0.6s ease;
}

#chest-sparkles #sparkle_mid {
  opacity: 0;
  -webkit-animation: fadeIn 2s infinite alternate;
          animation: fadeIn 2s infinite alternate;
}
#chest-sparkles #sparkle_left {
  opacity: 0;
  -webkit-animation: fadeIn 2s infinite alternate 0.75s;
          animation: fadeIn 2s infinite alternate 0.75s;
}
#chest-sparkles #sparkle_right {
  opacity: 0;
  -webkit-animation: fadeIn 2s infinite alternate 1.5s;
          animation: fadeIn 2s infinite alternate 1.5s;
}

#open-chest {
  background: #D8127D;
  color: #FFF101;
  padding: 15px 40px;
  font-weight: 700;
  border-radius: 5px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: pointer;
}

#reset-chest {
  color: #FFF101;
  font-weight: 500;
  margin-top: 20px;
  cursor: pointer;
}

@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes shakeChestBottom {
  0% {
    transform: translateY(0) rotate(0deg);
  }
  15% {
    transform: translateY(-5px) rotate(-2deg);
  }
  25% {
    transform: translateY(-10px) rotate(0deg);
  }
  60% {
    transform: translateY(0) rotate(0deg);
  }
}
@keyframes shakeChestBottom {
  0% {
    transform: translateY(0) rotate(0deg);
  }
  15% {
    transform: translateY(-5px) rotate(-2deg);
  }
  25% {
    transform: translateY(-10px) rotate(0deg);
  }
  60% {
    transform: translateY(0) rotate(0deg);
  }
}
@-webkit-keyframes shakeChestTop {
  0% {
    transform: translateY(0) rotate(0deg);
  }
  15% {
    transform: translateY(-10px) rotate(2deg);
  }
  25% {
    transform: translateY(-20px) rotate(-2deg);
  }
  35% {
    transform: translateY(-20px) rotate(2deg);
  }
  60% {
    transform: translateY(0) rotate(0deg);
  }
}
@keyframes shakeChestTop {
  0% {
    transform: translateY(0) rotate(0deg);
  }
  15% {
    transform: translateY(-10px) rotate(2deg);
  }
  25% {
    transform: translateY(-20px) rotate(-2deg);
  }
  35% {
    transform: translateY(-20px) rotate(2deg);
  }
  60% {
    transform: translateY(0) rotate(0deg);
  }
}
@-webkit-keyframes openLock {
  0% {
    transform: rotate(0deg) scale(1);
    opacity: 1;
  }
  8% {
    transform: rotate(4deg) scale(1);
    opacity: 1;
  }
  17% {
    transform: rotate(-6deg) scale(1);
    opacity: 1;
  }
  24% {
    transform: rotate(5deg) scale(1);
    opacity: 1;
  }
  30% {
    transform: rotate(-8deg) scale(1);
    opacity: 1;
  }
  45% {
    transform: rotate(-8deg) scale(2);
    opacity: 0;
  }
  100% {
    transform: rotate(0deg) scale(2);
    opacity: 0;
  }
}
@keyframes openLock {
  0% {
    transform: rotate(0deg) scale(1);
    opacity: 1;
  }
  8% {
    transform: rotate(4deg) scale(1);
    opacity: 1;
  }
  17% {
    transform: rotate(-6deg) scale(1);
    opacity: 1;
  }
  24% {
    transform: rotate(5deg) scale(1);
    opacity: 1;
  }
  30% {
    transform: rotate(-8deg) scale(1);
    opacity: 1;
  }
  45% {
    transform: rotate(-8deg) scale(2);
    opacity: 0;
  }
  100% {
    transform: rotate(0deg) scale(2);
    opacity: 0;
  }
}
@-webkit-keyframes openChestTop {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  35% {
    transform: translateY(0);
    opacity: 1;
  }
  45% {
    transform: translateY(-8%);
    opacity: 1;
  }
  75% {
    transform: translateY(-20%);
    opacity: 0;
  }
  100% {
    transform: translateY(-20%);
    opacity: 0;
  }
}
@keyframes openChestTop {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  35% {
    transform: translateY(0);
    opacity: 1;
  }
  45% {
    transform: translateY(-8%);
    opacity: 1;
  }
  75% {
    transform: translateY(-20%);
    opacity: 0;
  }
  100% {
    transform: translateY(-20%);
    opacity: 0;
  }
}
h1{
    font-size: 250px;
    color:white;
}
 </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="chest-wrap">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -50 500 400" id="chest" class="shake-chest"><defs><clipPath id="clip-path"><rect class="cls-1" x="115.28" y="168.67" width="275.85" height="130.18"/></clipPath><clipPath id="clip-path-2"><rect class="cls-2" x="45.02" y="167.49" width="410.31" height="44.75" rx="19.76"/></clipPath><clipPath id="clip-path-3"><rect class="cls-3" x="61.56" y="184.2" width="13.99" height="73.92" rx="7"/></clipPath><clipPath id="clip-path-4"><rect class="cls-3" x="425.19" y="184.2" width="13.99" height="73.92" rx="7"/></clipPath><clipPath id="clip-path-5"><polygon class="cls-3" points="398.15 303.73 99.7 303.73 99.7 167.25 122.3 167.25 122.3 281.13 375.55 281.13 375.55 167.25 398.15 167.25 398.15 303.73"/></clipPath><clipPath id="clip-path-6"><circle class="cls-4" cx="153.22" cy="249.46" r="12"/></clipPath><clipPath id="clip-path-7"><polygon class="cls-3" points="409.93 192.24 87.04 192.24 87.04 30.79 110.56 30.79 110.56 168.72 386.41 168.72 386.41 30.79 409.93 30.79 409.93 192.24"/></clipPath><clipPath id="clip-path-8"><rect class="cls-3" x="237.79" y="30.79" width="23.52" height="153.96"/></clipPath><clipPath id="clip-path-9"><circle class="cls-4" cx="368.5" cy="167.49" r="12"/></clipPath><clipPath id="clip-path-10"><rect class="cls-3" x="201.18" y="145.5" width="95.67" height="83.43"/></clipPath></defs><title>Aktiv 1</title><g id="Lag_2" data-name="Lag 2"><g id="Layer_1" data-name="Layer 1"><g id="chest"><g id="chest-bottom"><polygon class="cls-5" points="378.28 170.42 366.31 123.87 130.2 123.87 117.42 172.75 378.28 170.42"/><polygon class="cls-1" points="133.42 126.08 133.42 167.49 122.3 167.49 133.42 126.08"/><polygon class="cls-1" points="375.55 167.25 363.54 167.25 363.54 125.86 375.55 167.25"/><ellipse class="cls-6" cx="248.68" cy="178.45" rx="126.38" ry="36.8"/><rect class="cls-1" x="115.28" y="168.67" width="275.85" height="130.18"/><g class="cls-7"><rect class="cls-4" x="78.51" y="246.01" width="393.48" height="6.72"/></g><rect class="cls-2" x="45.02" y="167.49" width="410.31" height="44.75" rx="19.76"/><g class="cls-8"><rect class="cls-4" y="156.9" width="496.25" height="33.24"/></g><rect class="cls-3" x="61.56" y="184.2" width="13.99" height="73.92" rx="7"/><g class="cls-9"><rect class="cls-10" x="38.82" y="117.12" width="29.73" height="208.08"/></g><rect class="cls-3" x="425.19" y="184.2" width="13.99" height="73.92" rx="7"/><g class="cls-11"><rect class="cls-10" x="402.45" y="117.12" width="29.73" height="208.08"/></g><polyline class="cls-12" points="117.42 167.67 117.42 298.84 393.27 298.84 393.27 167.67"/><polygon class="cls-3" points="398.15 303.73 99.7 303.73 99.7 167.25 122.3 167.25 122.3 281.13 375.55 281.13 375.55 167.25 398.15 167.25 398.15 303.73"/><g class="cls-13"><rect class="cls-10" x="76.88" y="164" width="29.73" height="146.08"/><rect class="cls-10" x="122.48" y="164.22" width="264.1" height="125.08"/></g><polygon class="cls-3" points="122.3 167.25 133.42 126.08 363.54 126.08 375.55 167.25 398.15 167.25 381.71 121.65 117.42 121.65 99.7 167.25 122.3 167.25"/><polygon class="cls-10" points="106.61 167.67 124.11 121.65 117.42 121.65 99.7 167.25 106.61 167.67"/><polygon class="cls-14" points="386.58 167.49 371.79 125.86 363.54 125.86 375.55 167.25 386.58 167.49"/><circle class="cls-4" cx="153.22" cy="249.46" r="12"/><g class="cls-15"><circle class="cls-2" cx="153.22" cy="243.24" r="12"/></g></g><g id="chest-top"><rect class="cls-16" x="102.45" y="35.07" width="299.37" height="149.69"/><rect class="cls-2" x="153.22" y="39.8" width="56.15" height="93.85"/><rect class="cls-4" x="144.67" y="35.07" width="56.15" height="90.43"/><rect class="cls-2" x="305.04" y="39.8" width="56.15" height="93.85"/><rect class="cls-4" x="296.85" y="39.8" width="56.15" height="85.7"/><polyline class="cls-17" points="104.59 35.07 104.59 184.75 403.96 184.75 403.96 35.07"/><polygon class="cls-3" points="409.93 192.24 87.04 192.24 87.04 30.79 110.56 30.79 110.56 168.72 386.41 168.72 386.41 30.79 409.93 30.79 409.93 192.24"/><g class="cls-18"><polygon class="cls-10" points="96.36 213.21 66.63 213.21 66.63 5.13 96.36 5.13 125.06 30.94 125.06 39.19 96.36 39.33 96.36 213.21"/><rect class="cls-10" x="222.84" y="5.13" width="29.73" height="208.08"/><polygon class="cls-10" points="393.27 173.33 110.56 173.33 110.56 28.47 421.74 28.47 421.3 37.51 393.27 37.08 393.27 173.33"/></g><rect class="cls-19" x="110.56" y="35.07" width="275.85" height="9.47"/><rect class="cls-3" x="237.79" y="30.79" width="23.52" height="153.96"/><g class="cls-20"><polygon class="cls-10" points="246.15 214.03 216.42 214.03 216.42 0 246.15 0 269.66 37.41 246.15 37.41 246.15 214.03"/></g><circle class="cls-4" cx="368.5" cy="167.49" r="12"/><g class="cls-21"><circle class="cls-2" cx="368.5" cy="161.27" r="12"/></g></g><g id="chest-lock"><rect class="cls-2" x="207.23" y="153.94" width="95.67" height="83.43"/><rect class="cls-3" x="201.18" y="145.5" width="95.67" height="83.43"/><g class="cls-22"><polygon class="cls-23" points="168.47 107.57 329.12 268.9 305.6 106.39 168.47 107.57"/></g><path class="cls-2" d="M250.79,208h0a6.86,6.86,0,0,1-6.82-7.61l2.36-21.72h8.93l2.36,21.72A6.87,6.87,0,0,1,250.79,208Z"/><circle class="cls-2" cx="250.79" cy="178.67" r="12.47"/><rect class="cls-24" x="201.18" y="144.18" width="95.67" height="11.01"/><rect class="cls-25" x="201.11" y="144.13" width="95.74" height="3.72"/></g><g id="chest-sparkles"><path id="sparkle_mid" class="cls-26" d="M207.1,115.46S187.64,110,183.29,91.65c-4.65,19.17-23.82,23.81-23.82,23.81s18.39,4.39,23.82,23.82C187.42,119.6,207.1,115.46,207.1,115.46Z"/><path id="sparkle_left" class="cls-26" d="M177,159s-13.23-3.7-16.19-16.18c-3.16,13-16.18,16.18-16.18,16.18s12.5,3,16.18,16.19C163.66,161.78,177,159,177,159Z"/><path id="sparkle_right" class="cls-26" d="M349.3,122.91s-13.22-3.7-16.18-16.18c-3.16,13-16.19,16.18-16.19,16.18s12.5,3,16.19,16.19C335.93,125.72,349.3,122.91,349.3,122.91Z"/></g></g></g></g></svg>
</div>

<div id="open-chest">Abrir Cobre</div>
{{-- <div id="reset-chest">Reset animation</div> --}}
<!-- partial -->
  {{-- <script  src="./script.js"></script> --}}
  <script>
    const CHEST = document.querySelector('#chest');
    const OPEN_BUTTON = document.querySelector('#open-chest');
    const RESET_BUTTON = document.querySelector('#reset-chest');

    function openChest() {
        CHEST.classList.remove('shake-chest');
        CHEST.classList.add('open-chest');
    }

    function resetChest() {
        CHEST.classList.remove('open-chest');
        CHEST.classList.add('shake-chest');
    }

    OPEN_BUTTON.addEventListener('click', openChest);
    RESET_BUTTON.addEventListener('click', resetChest);
  </script>

</body>
</html>
