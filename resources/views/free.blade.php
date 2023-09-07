<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Judea</title>
  <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
  {{-- <link rel="stylesheet" href="./style.css"> --}}
  <style>
    html, body {
  padding: 0;
  margin: 0;
  background: black;
}

p {
  font-family: "VT323";
  font-size: 8em;
  text-align: center;
  animation-name: example;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}

@keyframes example {
  0% {
    color: lime;
    text-shadow: 0 0 20px green;
  }
  25% {
    color: green;
    text-shadow: 2px 2px 2px lime;
    transform: translate(-2px, 1px);
  }
  40% {
    color: lime;
    text-shadow: none;
    transform: translate(0, 0);
  }
  50% {
    color: green;
    text-shadow: 5px 5px 2px blue, -5px -5px 2px red;
    transform: translate(0px, 5px);
  }
  70% {
    color: lime;
    text-shadow: none;
    transform: translate(0, 0);
  }
  80% {
    color: lime;
    text-shadow: 0 0 20px green;
    transform: translate(-2px, 1px);
  }
  100% {
    color: lime;
    text-shadow: none;
  }
}
  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<p>Gracias</p>
<!-- partial -->

</body>
</html>
