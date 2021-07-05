 <div>
<nav class="navbar navbar-expand-sm " style="background-color: none; font-style: italic; top: 10px; position:absolute;" >
        <a class="navbar-brand" href="#" style=" font-style: italic;font-size: large;"><b>CORONAVIRUS</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav"  >
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><b>HOME</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#symptoms" ><b>Symptoms</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Vaccinations.php" ><b>Vaccinations</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Statistics.php" ><b>Statistics</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posts_view.php"><b>Posts</b></a>
                </li>
                
            </ul>
            <ul class="navbar-nav" >
                <li class="nav-item" style="margin-left: 600px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <b>Add Posts</b></button>
                </li>
            </ul>
        </div>
        <!-- The Modal -->
  <div class="modal fade" id="myModal" style="color : black">
    <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
          <h4 class="modal-title">Add Post</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="GET" action="add_Post.php">
        <!-- Modal body -->
        <div class="modal-body">
         
            <div class="form-group">
                <label for="Publisher">Publisher:</label>
                <input type="text" class="form-control" id="Publisher" name="Publisher" width="100" required>
              </div>
              
                <label for="subject"> subject:</label>
                <br/>
               <textarea name="subject" cols="60" rows="10" id="subject" required></textarea>
              
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary" >Add</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
    </nav>
</div>
<br/>