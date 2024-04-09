<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lilac</title>
<style>
  /* CSS for the layout */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  .search-bar {
    background-color: #f0f0f0;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 10px;
    box-sizing: border-box;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }
  .search-bar input {
    width: 190%;
    border: none;
    outline: none;
    font-size: 16px;
    padding: 5px;
  }
  .card-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .card1 {
    width: calc(25% - 20px); /* Adjust as needed */
    background-color: #f0f0f0;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    width: 200%;
  }
  .card {
    width: calc(25% - 20px); /* Adjust as needed */
    background-color: #f0f0f0;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    width: 45%;
  }
</style>
</head>
<body>
<br><br><br>
    @yield('content');
  
</body>
</html>