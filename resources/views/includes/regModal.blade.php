<!-- Registration modal -->
 <div class="modal fade" id="regModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="reg_form" id="form-container">
                <label for="">First Name</label><br>
                <input type="text" ng-model="fname"><br>
                <label for="">Middle Name</label><br>
                <input type="text" ng-model="mname"><br>
                <label for="">Last Name</label><br>
                <input type="text" ng-model="lname"><br>
                <label for="">Student ID</label><br>
                <input type="text" ng-model="idno"><br>
                <label for=""> Sex </label><br>
                <select id="sex" ng-model="sex">
                    <option value="" disabled>Choose:</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>
                <label for="college">College:</label><br>
    
                <select id="college" ng-change="getProgByColleges(college.id)" ng-model="college" ng-options="college.college_name for college in colleges">
                    <option value="" disabled>Choose:</option>
                </select><br>
                <label for="prog">Program:</label><br>
                <select ng-model="prog"  ng-options="program.prog_name for program in programs">
                    <option value="" disabled>Choose:</option>
                
                </select> <br>
                <label for="prog">Educational Attainment:</label><br>
                <select id="educAttainment" ng-model="educAttainment" ng-options="attainment.name for attainment in attainments">
                    <option value="">Choose:</option>
                </select> <br>
                <label for="">Username</label><br>
                <input type="text" ng-model="username"><br>
                <label for="">Password</label><br>
                <input type="password" ng-model="password"><br>
                <label for="">Confirm Password</label><br>
                <input type="password" ng-model="cpassword"><br>
        </div>

      </div>
         <!-- Modal footer -->
        <div class="modal-footer">
          <div class="mx-auto">
          <button type="button" class="btn btn-success" ng-click="signUp()">Submit</button>
          </div>
        </div>
    </div>
  </div>