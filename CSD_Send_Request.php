<html>
<head>
<title>Complex system Developement- Add new Server</title>
<link rel="stylesheet" type="text/css" href="CSD_Main_Layout.css">
<style>

  .form form{

  width:500px;
  background: #FCE4EC  ;
  border-radius: 50px;
  border-width: thick;
  overflow: hidden;
  justify-content: center;
  padding: 45px 300px 40px 300px;


  }
  .form input{
    background: white;
    font-family: Poppins-Medium;
    color: #333333;
    line-height: 1.2;
    position: relative;
    border-bottom: 2px solid #d9d9d9;
    padding-bottom: 5px;
    margin-bottom: 5px;
    -webkit-box-shadow: 0 2px 10px 1px rgba(0,0,0,0.5);
    box-shadow: 0 2px 10px 1px rgba(0,0,0,0.5);
  }
  .form label{
    float: left;
    display: inline-block;
    width: 100px;

  }
</style>
</head>

<body>
  <header>
    <h2>Data center Infrastructure and Traffic Management</h2>
  </header>
  <section>
    <left_col>
      <button type="button" onclick="window.location.href='CSD_main1.php' ">Home</button><br><br>
      <button type="button" onclick="window.location.href='CSD_add_new_server.php' ">Add New servers</button><br><br>
      <button type="button" onclick="window.location.href='CSD_delete_server.php' ">Delete server</button><br><br>
    </left_col>
    <right_col><h1 style ="text-align:center">New Request</h1>
      <div class="form">
      <form name="add_new_server" style ="text-align:center" action="CSD_main1.php">
        <label>Requestor:</label> <input type="text" name="requestor"><br><br>
        <label>Request Name:</label> <input type="text" name="server_name"><br><br>
        <input type="submit" name="Submit">
      </div>
  </section>
  <footer><div style="text-align:right">Data Center Infrastructure and Traffic Management</div>
  </footer>
</body>
</html>