var app = angular.module("landingApp", []);

app.controller("landingController", function($scope,$http) {

// show reg modal
	$scope.colleges = [];
	$scope.programs = [];
	$scope.attainments = [];
	$scope.showRegModal = function(){
		$('#regModal').modal('show');
	}


	$scope.getColleges = function(){
		$http.get('/getColleges',{})
		.then(function(response){
			if(response.status == 200){
				$scope.colleges = response.data;
				//console.log($scope.colleges);
			}
		})
	}

	$scope.getColleges();
	//function for displaying programs based on college 
	$scope.getProgByColleges = function(id){
		var data = {id:id}
		$http.post('/getProgByColleges',data)
		.then(function(response){
			if(response.status == 200){
				$scope.programs = response.data;
			}
		})
	}

	//function for displaying education attainments 
	$scope.getAttainments = function(){
		$http.post('/getAttainments',{})
		.then(function(response){
			if(response.status == 200){
				$scope.attainments = response.data;
			}
		})
	}

	$scope.getAttainments();
	//function for user registration
	$scope.signUp = function(){
	
		if($scope.confirmPassword($scope.password,$scope.cpassword) == true){
			var info = {
				fname:$scope.fname, mname: $scope.mname, lname: $scope.lname, idno:$scope.idno,
				sex: $scope.sex, college: $scope.prog.college_id, prog: $scope.prog.id, attain: $scope.educAttainment.id,
				username: $scope.username, pass:$scope.password, role:2
				}

				$http.post('/user/signup',info)
				.then(function(response){
					if(response.status == 200){
						$('#regModal').modal('hide');
						alert('Successfully Registered');
						location.reload();
					}else{
						console.log(response);
					}
				});
			
		}else{
			console.log('not match');
		}
	}
// function for confirming the password
	$scope.confirmPassword = function(pass,repass){
		if(pass == repass){
			return true;
		}else{
			return false;
		}
	}

});