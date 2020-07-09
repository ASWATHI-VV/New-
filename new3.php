<!doctype html>
<html>
<head>
   <title>timestamp</title>
   <script>
      var time =new Date();
      function show(id){
          if (id == 1){
              document.getElementById('james').value=time;
          }
          if (id == 2){
              document.getElementById('tom').value=time;
          }
      }
    </script>
</head>
<body>
   <form action= "new1.php" method= "POST">
   FIRST NAME: <input type="text" name="fname"><br/>
   LAST NAME:  <input type="text" name="lname"><br/>
   ABOUT: <textarea name="about"></textarea><br/>
   </form>
   <input type="text" id="james" value=""><br/>
    <button id='1' onClick="show(this.id)">Click submit</button>
   
       <br>
</body>
</html>