
<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
          <style>
footer{
   
 background-color: #101010;
 color:#9d9d9d;
 bottom: 0;

 width: 100%;
}
.row-style{
                margin-top: 10px;
                
            } 
.new{
    padding-left: 450px;
    
}
.btn{
      font-size:25px;
}
.panel-info > .panel-heading {
 color: #333;
 background-color: #1ab698;
  border-color: #ddd;
            }
            .row1{
                padding-top: 80px;
                padding-left: 750px;
                padding-bottom: 50px;
                min-width: 500px;
           
               
               
</style>
    
</head>
<body>
    <div class="container">           
            <div class="row1 row-style">
                <div class="col-xs-11">
     <div class=" panel panel-info">   
                        <div class="panel-heading">
                            <h4>Enter your Pass ID</h4>
                        </div>
                        <div class="panel-body">
                            <form action="entry.php" method="POST">
                                 
                            <div class="form-group">
                                    <label for="pass_id">pass_id</label>
                                    <input type="text" class="form-control" name="pass_id"required="true"> 
                            <div class="form-group">
                                    <label for="depart_depo">Depart Depo</label>
                                    <input type="text" class="form-control" name="depart_depo"required="true">               
                                
                                </div>
                                
                            
                            
                             <div class="form-group">
                                   <!--<button type="Submit" class="btn btn-warning">go</button>
                                    </div>-->
                               <button type="submit" class="templatemo-blue-button width-100">GO</button>
                        
                                
                            </div>
         </div>
                    </div>
            
    <!--<div class="container">
        <?php while ($row = mysqli_fetch_array($select_query_result1)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>Buss_Pass</h4></div>
          </div>
          <div class="row">
              <div class="col-xs-2">holder_name</div>
              <div class="col-xs-10"><?php echo $row['holder_name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">pass_id</div>
              <div class="col-xs-10"><?php echo $row['pass_id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">type</div>
              <div class="col-xs-10"><?php echo $row['type']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">holder_address</div>
              <div class="col-xs-10"><?php echo $row['holder_address']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">holder_email</div>
              <div class="col-xs-10"><?php echo $row['holder_email']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">cost</div>
              <div class="col-xs-10"><?php echo $row['cost']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">password</div>
              <div class="col-xs-10"><?php echo $row['password']; ?></div>
          </div>
          <hr/>-->
        <?php } ?>
          <!--    <div class="container">
        <?php while ($row = mysqli_fetch_array($select_query_result1)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>Depo</h4></div>
          </div>
          <div class="row">
              <div class="col-xs-2">bus-id</div>
              <div class="col-xs-10"><?php echo $row['bus_id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">depo_name</div>
              <div class="col-xs-10"><?php echo $row['depo_name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">pincode</div>
              <div class="col-xs-10"><?php echo $row['pincode']; ?></div>
          </div>
          <hr/>
        <?php } ?>
          
         -->
    </div>
          
</body>
</html>

