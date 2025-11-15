<?php 

class fruit {
    public $name;
    public $color;
}

$fruitobj = new fruit;

$fruitobj->name = "Apple";
$fruitobj->color = "Red";

$fruitobj2 = new fruit;

$fruitobj2->name = "Mango";
$fruitobj2->color = "Green";

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Windows Search with Keyboard</title>
<style>
  body {
    margin: 0;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #0078d7, #005a9e);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }
  .window {
    background-color: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(12px);
    border-radius: 16px;
    padding: 40px;
    width: 95%;
    max-width: 600px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.25);
    text-align: center;
  }
  .logo {
    font-size: 38px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
  }
  .logo span.square {
    width: 22px;
    height: 22px;
    background: white;
    border-radius: 3px;
    display: inline-block;
    box-shadow: 22px 0 0 white, 0 22px 0 white, 22px 22px 0 white;
  }
  .search-box {
    display: flex;
    border-radius: 40px;
    overflow: hidden;
    background-color: #fff;
    margin-bottom: 20px;
  }
  input[type="text"] {
    flex: 1;
    border: none;
    padding: 14px 18px;
    font-size: 16px;
    outline: none;
    color: #333;
  }
  button.search-btn {
    background-color: #0078d7;
    border: none;
    color: white;
    padding: 0 24px;
    font-size: 16px;
    cursor: pointer;
  }
  button.search-btn:hover {
    background-color: #0063b1;
  }
  .keyboard {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 6px;
    margin-top: 15px;
  }
  .key {
    background: rgba(255,255,255,0.15);
    color: white;
    border: none;
    border-radius: 6px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.1s;
  }
  .key:hover {
    background: rgba(255,255,255,0.3);
  }
  .footer {
    margin-top: 20px;
    font-size: 0.9rem;
    color: rgba(255,255,255,0.8);
  }
</style>
</head>
<body>
  <div class="window">
    <div class="logo"><span class="square"></span> Windows Search</div>

    <form action="https://duckduckgo.com/" method="get" target="_blank">
      <div class="search-box">
        <input type="text" id="searchInput" name="q" placeholder="Type or use on-screen keyboard..." required>
        <button type="submit" class="search-btn">🔍</button>
      </div>
    </form>

    <div class="keyboard" id="keyboard"></div>
    <div class="footer">Powered by DuckDuckGo • Windows Style UI</div>
  </div>

<script>
  const keys = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890⌫␣".split("");
  co


var_dump($fruitobj);
var_dump($fruitobj2);

?>