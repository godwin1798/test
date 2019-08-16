var app = angular.module("adminApp", []);

app.controller("adminController", function($scope,$http) {
  	$scope.programs = [];
  	$scope.colleges = [];

	// add college function
	$scope.addCollege = function(){
		if($scope.acronym && $scope.cname){
			//college an object used to send to the server
 			var college = { acronym:$scope.acronym, cname:$scope.cname} 
			$http.post('/addCollege',college).then(function(response){
				alert('College Successfully Added');
				 $("#addCollegeModal").modal("hide");
				$scope.displayCollege();

				$scope.acronym = '';
				$scope.cname = '';
			});
		}else{
			console.log('invalid');
		}
	}
	// display college function
	$scope.displayCollege = function(){
		$http.get('/displayCollege',{})
		.then(function(data){
			$scope.colleges = data.data;
			console.log($scope.colleges);
		})
	}

	$scope.removeCollege = function(id){
		if(confirm("Are you want to remove this?")){
			var data = { id:id }
			$http.post('/deleteCollege',data)
			.then(function(response){
				if(response.data == 1){
					$scope.displayCollege();
					alert('Successfully Deleted');
					
				}
			});
		}else{
			alert('Data is safe!..');
		}
	}
	// show edit college modal function
	$scope.showEditCollegeModal = function(id,acronym,name){
		if(id && acronym && name){
			$scope.upid = id;
			$scope.upacronym = acronym;
			$scope.upcname = name;
			$("#editCollegeModal").modal("show");
		}	
	}

	// update college function
	$scope.editCollege = function(){
		var update = { id:$scope.upid, acronym:$scope.upacronym, name:$scope.upcname }
		$http.post('/updateCollege',update)
		.then(function(response){
			$("#editCollegeModal").modal("hide");
			$scope.displayCollege();
			$scope.displayProg();
			alert('Successfully Updated');

			$scope.upid = '';
			$scope.upacronym = '';
			$scope.upcname = '';
		});
	}

		$scope.addProgram = function(){
			var prog = { acronym: $scope.pacronym, name: $scope.pname, collegeId: $scope.pcollege }
			$http.post('/addProgram',prog)
			.then(function(response){
				if(response.status == 200){
					$('#addProgModal').modal("hide");
					$scope.displayProg();
					alert('Program Successfully Added!');

					$scope.pacronym = '';
					$scope.pname = '';
					$scope.pcollege = '';
				}				
			})
		}

		// display programs
		$scope.displayProg = function(){
			$http.get('/displayProg',{})
			.then(function(data){
				  if(data.status == 200){
					$scope.programs = data.data;
					console.log($scope.programs);
				}
			})			
		}

		// remove program function
		$scope.removeProgram = function(progid){
			var prog = { id: progid }
			if(confirm('Are you sure you want to delete?')){
				$http.post('/removeProgram',prog)
				.then(function(response){
					if(response.status == 200){
						$scope.displayProg();
						alert('Successfully Removed!');		
					}
				})
			}else{
				alert('data is safe');
			}
		}

		$scope.showUpProgModal = function(id,collegeid,pacronym,pname){
			$scope.upid = id;
			$scope.upcollege = collegeid;
			$scope.uppacronym = pacronym;
			$scope.uppname = pname;			
			$('#upProgModal').modal('show');
		}

		$scope.updateProg = function(){
			if(confirm('Are you sure to update?')){
				var newProg = {id: $scope.upid,collegeId:$scope.upcollege, acronym: $scope.uppacronym, name: $scope.uppname }
				$http.post('/updateProg',newProg)
				.then(function(response){
					if(response.status == 200){
						$('#upProgModal').modal('hide');
						$scope.displayProg();
						alert('Successfully Updated');
					}else{
						$('#upProgModal').modal('hide');
						alert('Failed to update');
					}
				})
			}else{
				$('#upProgModal').modal('hide');
				alert('Nothing changed!');
			}
		}

	$scope.displayProg();
	$scope.displayCollege();
});