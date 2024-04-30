<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="chuck">
    <a href="https://api.chucknorris.io/"><img src="https://downloadwap.com/thumbs2/wallpapers/p2/2019/movies/12/c0tyd10013628150.jpg"></a>
</div>
<div id="form">
    <h1>Request API for Chuck Norris jokes</h1>

    <label for="jokes"><b>Choose a Category</b></label><br>
    <select name="jokes" id="jokes">
        <option value="food">Food</option>
        <option value="animal">Animal</option>
        <option value="career">Career</option>
        <option value="celebrity">Celebrity</option>
        <option value="dev">Dev</option>
        <option value="explicit">Explicit</option>
        <option value="fashion">Fashion</option>
        <option value="history">History</option>
        <option value="money">Money</option>
        <option value="movie">Movie</option>
        <option value="music">Music</option>
        <option value="political">Political</option>
        <option value="religion">Religion</option>
        <option value="science">Science</option>
        <option value="sport">Sport</option>
        <option value="travel">Travel</option>
    </select><br>

    <button type="button" class="apiButton"><b>Click here for jokes</b></button><br><br>
    <div id="result"></div>
</div>

<script>
    document.querySelector(".apiButton").addEventListener("click", function(event){
        event.preventDefault();
        var category = document.getElementById("jokes").value;
        if (!category) {
            alert("Seleziona una Categoria");
            return;
        }

        fetch("https://api.chucknorris.io/jokes/random?category=" + encodeURIComponent(category))
            .then(function(resp){
                return resp.json();
            })
            .then(function(data){
                document.querySelector("#result").innerHTML = data.value;
            })
            .catch(function(error) {
                console.error('There was a problem with the fetch operation:', error);
            });
    });
</script>

</body>
</html>

<style>

        #form{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            text-align: center;
            font-family: "Poppins", sans-serif;
            height: 300px;
            width: 600px;
            background-color: rgb(240, 240, 240);
            border-radius: 40px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(0, 0, 0, 255);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 25px;
        }

  

        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            height: 150px;
        }

        select{
            color: black;
            border-style: solid;
            border-width: 1px;
            background-color: white;
            border-color: grey;
            border-radius: 5px;
            width: 400px;
            height: 30px;
        }

        button{
            color: white;
            border-style: solid;
            border-width: 3px;
            background-color: black;
            border-color: white;
            width: 400px;
            height: 40px;
            margin-top: 10px;
            border-radius: 20px;
        }

        button:hover {background-color: #262626}

        button:active {
            background-color: #262626;
            transform: translateY(2px);
        }

        #result{
            margin-top: 20px;
            color: black;
            font-weight: bold;
        }

    </style>