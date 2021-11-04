<!-- The specialist page needs some different thought. Skills should be able to be filters 
-> I may choose to use "cards" for each specialist, rather than a table-->

<!-- Add Modal -->
<div class="modal fade" id="specialistAddModal" tabindex="-1" aria-labelledby="specialistAddModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="specialistAddModalLabel">Add Specialist</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<h3>Details</h3>
				<table class="table">
					<form method="post" autocomplete="false">
						<tr>
							<td>ID:</td>
							<td>1</td>
						</tr>

						<tr>
							<td>Username:</td>
							<td><input type="text" name="name-edit-field" value="" required></td>
						</tr>

						<tr>
							<td><label for="name-edit-field">Name: </label></td>
							<td><input type="text" name="name-edit-field" value="" required></td>
						</tr>

						<tr>
							<td><label for="password-edit-field">Password: </label></td>
							<td>GENERATED</td>
						</tr>

						<tr>
							<td><label for="skill-edit-field">Skillset: </label></td>
							<td><input type="text" name="skill-edit-field" value=""></td>
						</tr>

						<tr>
							<td><label for="problem-number-field">Number of Problems: </label></td>
							<td>0</td> <!-- Generated automatically presumably-->
						</tr>
						<tr>
							<td><button type="submit" class="btn btn-primary">Save changes</button></td>
						</tr>
					</form>
				</table>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Edit Modal -->
	<div class="modal fade" id="specialistEditModal" tabindex="-1" aria-labelledby="specialistEditLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="specialistEditModalLabel">Specialist Info</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h3>Details</h3>
					<table class="table">
						<form method="post">
							<tr>
								<td>ID:</td>
								<td>1</td>
							</tr>

							<tr>
								<td>username:</td>
								<td>bert</td>
							</tr>

							<tr>
								<td><label for="name-edit-field">Name: </label></td>
								<td><input type="text" name="name-edit-field" value="Bert" required></td>
							</tr>

							<tr>
								<td><label for="password-edit-field">Change Password: </label></td>
								<td><input type="password" name="password-edit-field" value="" required></td>
							</tr>

							<tr>
								<td><label for="skill-edit-field">Skillset: </label></td>
								<td><input type="text" name="skill-edit-field" value="Hardware"></td>
							</tr>

							<tr>
								<td><label for="problem-number-field">Number of Problems: </label></td>
								<td>0</td> <!-- Generated automatically presumably-->
							</tr>
							<tr>
								<td><button type="submit" class="btn btn-primary">Save changes</button></td>
							</tr>
						</form>
					</table>
					<h3>Problem History</h3>

					<table class="table">
						<thead>
							<tr>
								<td scope="col">Problem ID</td>
								<td scope="col">Notes</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>3</td>
								<td>Example</td>
							</tr>
						</tbody>
					</table>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<div class="position-sticky fixed-top row bg-light">
		<div>
			<table>
				<tr>
					<td><label for="spec-search">Search Names: </label></td>
					<td><input type="text" id="spec-search" onkeyup="searchTable()" placeholder="Search"></td>
					<td>
						<label class="m-1" for="os-modal-field">Filter Skillset: </label>
					</td>
					<td>
						<input list="os-modal-dropdown" id="os-choice" name="os-modal-field" />
						<datalist id="os-modal-dropdown">
							<option value="Printers">
							<option value="Office">
							<option value="Other Software">
							<option value="Networking">
							<option value="MacOS">
							<option value="Windows">
							<option value="Linux">
							<option value="iOS">
							<option value="Android">
						</datalist>
					</td>
					<td><button type="button" data-bs-toggle="modal" data-bs-target="#specialistAddModal" class="btn btn-primary float-right m-3">Add New Specialist</button></td>

				</tr>
				<tr>

				</tr>
			</table>




		</div>

	</div>
	<!-- <table class="table" id="add-spec-table">
	<thead>
		<th scope="col">Specialist ID</th>
		<th scope="col">Username</th>
		<th scope="col">Name</th>
		<th scope="col">Skillset</th>
		<th scope="col">Number of Problems (30days)</th>
	</thead>
	<tbody>
		<tr id="add-employee-row" class="table-dark">
			<td>N/A</td>
			<td><input type="text">1</td>
			<td><input type="text">bert</td>
			<td><input type="text">Bert</td>
			<td><input type="text">Hardware</td>
		</tr>
		<td><button>Submit</button></td>
	</tbody>
</table> -->

	<table class="table" id="spec-table">
		<thead>
			<th scope="col">Specialist ID</th>
			<th scope="col">Username</th>
			<th scope="col">Name</th>
			<th scope="col">Skillset</th>
			<th scope="col">Number of Problems (30days)</th>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>bert</td>
				<td>Bert</td>
				<td>Hardware</td>
				<td>2</td>
				<td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#specialistEditModal">View Details</button></td>
			</tr>
		</tbody>

	</table>

	<script>
		if ("<?php echo $userType ?>" != 'operator') {
			window.location.replace('/errors/404'); // no unauthorised access
		}

		function searchTable() {
			// Allows text to be entered in the search box to find in the table.
			// Does not involve searching the database again therefore reduces security risk of SQL injection.

			// Set the variables
			var input, search, table, tr, td, i, txt, count;

			// Find the input text field
			input = document.getElementById("spec-search");
			//console.log(input);
			// Retrieve the search from the field
			search = input.value.toUpperCase();

			// Find the table and all table rows
			table = document.getElementById("spec-table");
			tr = table.getElementsByTagName("tr");

			// Reset the count of rows to zero
			// This is used to recolour the new searched table for readability purposes
			count = 0;

			// for loop through all rows
			for (i = 0; i < tr.length; i++) {
				// Get all table data (elements/cells) 
				all_td = tr[i].getElementsByTagName("td");
				console.log(all_td);

				// for loop through all cells in the row
				for (j = 0; j < all_td.length; j++) {

					// get the current cell
					td = all_td[j];
					console.log(td.textContent);

					// if a cell exists
					if (td) {

						// Get the text content of the cell
						txt = td.textContent || td.innerText;
						console.log(txt);

						// if the uppercase cell contains the uppercase search then
						if (txt.toUpperCase().indexOf(search) > -1) {
							// add 1 to the count of found rows
							count++;

							// use count to stripe the table for readability
							if (count % 2 == 1) {
								tr[i].classList.toggle("table-light", true) // true here means only add the class, don't remove it
							} else {
								tr[i].classList.toggle("table-light", false) // where false here means only remove the class.
							}
							tr[i].classList.remove("d-none"); // remove the class hiding the row
							// exit the loop to avoid checking any further cells from this row
							break;
						} else {

							// Hide rows that did not contain the search
							tr[i].classList.add("d-none");
						}
					}
				}
			}
		}
		searchTable(); //run this so that the table stripes properly
	</script>