<html>
<head>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: ;
        }
        .container{
            width:100%;
            height: 550px;
            display: flex;
            max-width: 850px;
            background: ;
            box-shadow: 0 10px 15px rgba(0, 0, 0.1);
        }
        .login{
            width: 400px;
        }
        form{
            width: 250px;
            margin: 60px auto;
        }
        h1{
            margin:20px;
            margin-top: 130px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }
        hr{
            border-top: 2px;
        }
        p{
            text-align: center;
            margin: 10px;
        }
        .right img{
            width: 450px;
            height: 100%;
        }
        form label{
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
        }
        input{
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 20px;
            border: 1px;
            background-color: #D9D9D9;
        }
        button{
            border: none;
            outline: none;
            padding: 8px;
            width: 100px;
            color: ;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 30px;
            background: #00BFFF;
            margin-left: 75px;
        }
        button:hover {
            background: red;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="right">
            <img src="gambar2.jpeg" alt="">
        </div>
        <div class="login">
            <form action="">
                <h1>Login</h1>
                <p>SparkWash Financials</p>
                <label for=""></label>
                <input type="text" 
                placeholder="Username">
                <label for="">
                <input type="text" 
                placeholder="Password">
                <button>Login</button>
                </label>
            </form>
        </div>

    </div>
</body>
</html>