<!-- add college modal -->
 <div class="modal fade" id="addCollegeModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add College</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
              <label for="usr">College Acronym:</label>
              <input type="text" class="form-control" placeholder="@example: CEIT" ng-model="acronym">
          </div>
          <div class="form-group">
              <label for="pwd">College Name:</label>
              <input type="text" class="form-control" placeholder="College of ...." ng-model="cname">
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" ng-click="addCollege()">Submit</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- update college modal -->
 <div class="modal fade" id="editCollegeModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit College</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h4>ID: <span ng-bind="upid" ng-model="upid"></span></h4>
          <div class="form-group">
              <label for="usr">College Acronym:</label>
              <input type="text" class="form-control" placeholder="@example: CEIT" ng-model="upacronym">
          </div>
          <div class="form-group">
              <label for="pwd">College Name:</label>
              <input type="text" class="form-control" placeholder="College of ...." ng-model="upcname">
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" ng-click="editCollege(upid,upacronym,upcname)">Update College</button>
        </div>
        
      </div>
    </div>
  </div>


<!-- add program modal -->
 <div class="modal fade" id="addProgModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Program</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
              <label for="college">Select College:</label>
              <select class="form-control" ng-model="pcollege">
                @verbatim
                  <option ng-repeat="college in colleges" value="{{college.id}}">
                      {{ college.college_acronym }}
                   </option>
                @endverbatim
              </select>
          </div>
          <div class="form-group">
              <label for="pacronym">Program Acronym:</label>
              <input type="text" class="form-control" placeholder="@example: BSIT" ng-model="pacronym">
          </div>
          <div class="form-group">
              <label for="pwd">Program Name:</label>
              <input type="text" class="form-control" placeholder="Bachelor of ...." ng-model="pname">
          </div>
          
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" ng-click="addProgram()">Submit</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- program update modal -->
<!-- add program modal -->
 <div class="modal fade" id="upProgModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Program</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h4>ID: <span ng-bind="upid" ng-model="upid"></span></h4>
          <div class="form-group">
              <label for="college">Select College:</label>
              <select class="form-control" ng-model="upcollege">
                @verbatim
                  <option ng-repeat="college in colleges" value="{{college.id}}">
                      {{ college.college_acronym }}
                   </option>
                @endverbatim
              </select>
          </div>
          <div class="form-group">
              <label for="pacronym">Program Acronym:</label>
              <input type="text" class="form-control" placeholder="@example: BSIT" ng-model="uppacronym">
          </div>
          <div class="form-group">
              <label for="pwd">Program Name:</label>
              <input type="text" class="form-control" placeholder="Bachelor of ...." ng-model="uppname">
          </div>
          
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" ng-click="updateProg()">Submit</button>
        </div>
        
      </div>
    </div>
  </div>