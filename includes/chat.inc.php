<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var from = null, start = 0, url = "php/chat.php";
        $(document).ready(function(){
            from = prompt("please enter your name")
           $("form").submit(function(e){
            $.post(url, {
            message: $("#message").val(),
            from: from 
            });
            $("#message").val("hi");
            return false;
           })
        })
    </script>
    <style>
      body{
          margin: 0;
          overflow: hidden;
          font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

      }
      #messages{
        height: 88vh;
        overflow-x: hidden;
        padding: 10px;
      }

      form{
          display: flex;
      }

      input{
          font-size: 1,2rem;
          padding: 10px;
          margin: 10px 5px;
          appearance: none;
          -webkit-appearance: none;
          border: 1px solid #F8F8FF;
          border-radius: 5px;
      }
      #message{
          flex: 2;
      }
    </style>
</head>
<body>
    <div id="messages"></div>
    <form>
    <input type="text" id="message" autocomplete="off" autofocus placeholder="Type messages">
    <input type="submit" value="send">
    </form>
</body>
</html> -->