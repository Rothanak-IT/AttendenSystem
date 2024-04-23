<header class="header">
               <a href="">Student Dashbord</a>
               <div class="logout">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
               </div>
          </header>
          <aside>
               <ul>
               <li>
                    <a href="student_profile.php">My Profille</a>
                    </li>
                    <li>
                         <a href="">My Course</a>
                    </li>
                    <li>
                         <a href="">My Result</a>
                    </li>
               </ul>
          </aside>
          <div>
               <div class="content"> 
               </div>
          </div>
          <h1>
               <?php echo $_SESSION['name']; ?>
          </h1>
