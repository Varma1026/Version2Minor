<div class="container">
			<div class="row mt-md-5 justify-content-center">
				<div class="col-md-10">
					<div class="card p-4 mb-5 shadow">
						<h2 class="text-center py-4">STUDENT REGISTRATION</h2>
						<div class="row">
						<form id="studentRegisterForm">
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="text" class="form-control shadow-none" id="fullName" name="fullName" placeholder="name@example.com">
									<label for="floatingInput">Full Name</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="number" class="form-control shadow-none" id="phoneNumber" name="phoneNumber" placeholder="name@example.com">
									<label for="floatingInput">Phone numner</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="text" class="form-control shadow-none" id="rollNumber" name="rollNumber" placeholder="name@example.com">
									<label for="floatingInput">Roll Number</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="email" class="form-control shadow-none" id="email" name="email" placeholder="name@example.com">
									<label for="floatingInput">Email</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<select class="form-select" id="floatingSelect" id="branch" name="branch" aria-label="Floating label select example">
										<option value="" selected>Open this select menu</option>
										<option value="CSE">CSE</option>
										<option value="MECH">MECH</option>
										<option value="EEE">EEE</option>
										<option value="ECE">ECE</option>
										<option value="CIVIL">CIVIL</option>
										<option value="IT">IT</option>
									</select>
									<label for="floatingSelect">Branch</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="text" class="form-control shadow-none" id="parentName" name="parentName" placeholder="name@example.com">
									<label for="floatingInput">Parnet/Guardian Name</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="text" class="form-control shadow-none" id="section" name="section" placeholder="name@example.com">
									<label for="floatingInput">Section</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="number" class="form-control shadow-none" id="parentNumber" name="parentNumber" placeholder="name@example.com">
									<label for="floatingInput">Parent/Guardian Number</label>
								</div>
							</div>
							<div class="col-md-12 mb-4">
								<div>
									<label class="mb-2" for="gender">Gender</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
									<label class="form-check-label ml-5" for="inlineRadio1">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
									<label class="form-check-label mr-5" for="inlineRadio2">Female</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender" value="Others">
									<label class="form-check-label mr-5" for="inlineRadio2">Others</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="text" class="form-control shadow-none" id="password" name="password" placeholder="name@example.com">
									<label for="floatingInput">Password</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="password" class="form-control shadow-none" id="confirmPassword" name="confirmPassword" placeholder="name@example.com">
									<label for="floatingInput">Confirm Password</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<select class="form-select" id="floatingSelect" id="question" name="question" aria-label="Floating label select example">
										<option value="" selected>Open this select menu</option>
										<option value="Your pet name?">Your pet name?</option>
										<option value="Your native place?">Your native place?</option>
										<option value="Your school friend?">Your school friend?</option>
										<option value="Your grandmother's native place?">Your grandmother's native place?</option>
										<option value="Your favourite town?">Your favourite town?</option>            
									</select>
									<label for="floatingSelect">Security Question</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-4">
									<input type="text" class="form-control shadow-none" id="answer" name="answer" placeholder="name@example.com">
									<label for="floatingInput">Security Answer</label>
								</div>
							</div>
							<div class=" col-md-6 registerStudent-response text-danger fw-bold"></div>
							<button class="btn col-12 mx-auto py-3 LOGIN" onclick="registerStudent()" type="button">Register</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>