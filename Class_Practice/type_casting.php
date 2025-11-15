<?php 

$str = (int) 36.4;
echo $str , "<br>";
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DuckDuckGo Mini Search</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: "Segoe UI", system-ui, sans-serif;
      background-color: #f8f9fa;
      color: #222;
      margin: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    h1 {
      color: #de5833;
      margin-bottom: 1rem;
      font-size: 2.5rem;
      user-select: none;
    }
    form {
      display: flex;
      align-items: center;
      background: #fff;
      border-radius: 30px;
      padding: 6px 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      width: 90%;
      max-width: 500px;
    }
    input[type="text"] {
      flex: 1;
      border: none;
      outline: none;
      font-size: 1rem;
      padding: 10px 15px;
      border-radius: 30px;
    }
    button {
      background: #de5833;
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 1rem;
      transition: background 0.2s;
    }
    button:hover {
      background: #c14d2f;
    }
    footer {
      margin-top: 2rem;
      color: #777;
      font-size: 0.9rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>DuckDuckGo</h1>
  <form action="https://duckduckgo.com/" method="get" target="_blank">
    <input type="text" name="q" placeholder="Search privately..." required />
    <button type="submit">🔍 Search</button>
  </form>
  <footer>Powered by DuckDuckGo • Privacy-first Search</footer>
</body>
</html>

$int = (double) 5.366526523;
var_dump($int);
echo "<br>", $int;

?>