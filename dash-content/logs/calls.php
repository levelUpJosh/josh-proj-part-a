<?php $panel = 'call'?>
<!-- Add Modal -->
<div class="modal fade" id="callAddModal" tabindex="-1" aria-labelledby="callAddModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callAddModalLabel">New Call</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<h3>Details</h3>
				<table class="table">
					<form method="post">
						<tr>
							<td>ID:</td>
							<td></td>
						</tr>

						<tr>
							<td><label for="name-field">Caller Name: </label></td>
							<td><input type="text" name="name-field" class="col-12"></td>

						</tr>

						<tr>
							<td><label for="operator-id-field">operator ID* : </label></td>
							<td><input type="text" name="operator-id-field" class="col-12" value="">Autoassign this field?</td>
						</tr>
						<tr>
							<td><label for="success-edit-field">Call Success? : </label></td>
							<td><select name="success-edit-field" class="col-12">
									<option>Received (Employee initiated call)</option>
									<option>Answered</option>
									<option>Did not answer</option>
							</td>
						</tr>

						<tr>
							<td><label for="notes-field">Notes: </label></td>
							<td><textarea type="text" name="notes-field" class="col-12" value="" rows=10></textarea></td>

						</tr>

						<tr>
							<td><label for="reason-field">Reason: </label></td>
							<td><input type="text" name="reason-field" class="col-12 value="" /></td>

						</tr>
						<tr>
							<td><button type=" submit" class="btn btn-primary">Save changes</button></td>
						</tr>
					</form>
				</table>
				<div class="modal-footer">
				<?php
				checkReturnUrl($userType);?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Edit Modal -->
<div class="modal  fade" id="callEditModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="callEditModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callEditModalLabel">Call Info</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<!-- 				<p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
				<hr> -->
				<div class="row">
					<div class="card col-6">
						<div class="card-body">
							<table class="table">
								<h3 class="card-title">Details</h3>
								<form class="card-text" method="post">

									<tr>
										<td>ID:</td>
										<td></td>
									</tr>

									<tr>
										<td><label for="name-edit-field">Caller Name: </label></td>
										<td><input type="text" name="name-field" class="col-12"></td>

									</tr>

									<tr>
										<td><label for="operator-id-edit-field">operator ID* : </label></td>
										<td><input type="text" name="operator-id-field" class="col-12" value="">Autoassign this field?</td>
									</tr>

									<tr>
										<td><label for="success-edit-field">Call Success? : </label></td>
										<td><select name="success-edit-field" class="col-12">
												<option>Received (Employee initiated call)</option>
												<option>Answered</option>
												<option>Did not answer</option>
										</td>
									</tr>

									<tr>
										<td><label for="date-edit-field">Date: </label></td>
										<td><input type="date" name="date-field" class="col-12" value=""></td>

									</tr>

									<tr>
										<td><label for="time-edit-field">Time: </label></td>
										<td><input type="time" name="time-field" class="col-12" value=""></td>

									</tr>

									<tr>
										<td><label for="notes-edit-field">Notes: </label></td>
										<td><textarea type="text" name="notes-field" class="col-12" value="" rows=10></textarea></td>

									</tr>

									<tr>
										<td><label for="reason-edit-field">Reason: </label></td>
										<td><input type="text" name="reason-field" class="col-12 value="" /></td>

						</tr>
									</div>
									<tr>
										<td><button type=" submit" class="btn btn-primary">Save changes</button></td>
									</tr>
								</form>
							</table>
						</div>
					</div>
					<div class="card col-6">
						<div class="card-body">
							<h3 class="card-title">Associated Problems</h3>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Problem ID</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>3</td>
									</tr>
								</tbody>
							</table>
							<button class="col-4 btn btn-primary" onclick="location.replace('<?php echo $userType?>-dash?content=logs/problems&show_add_modal=Y&return_url=logs/calls')">Add New</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			<?php
				checkReturnUrl($userType);?>
			</div>
		</div>
	</div>
</div>

<div class="position-sticky fixed-top row bg-light">
	<div>
		<label for="call-search">Enter Search Query: </label>
		<input type="text" id="call-search" onkeyup="searchTable()" placeholder="Search">
		<button type="button" data-bs-toggle="modal" data-bs-target="#callAddModal" class="btn btn-primary col-2 float-right m-3">Add New Call</button>
	</div>

</div>
<!-- <table class="table" id="add-call-table">
	<thead>
		<th scope="col">Call ID</th>
		<th scope="col">Caller Name</th>
		<th scope="col">Operator Name</th>
		<th scope="col">Notes</th>
		<th scope="col">Reasons</th>
		<th scope="col">Submit</th>
	</thead>
	<tbody>
		<tr>
			<td>N/A</td>
			<td><input type="text"></td>
			<td>Alice</td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><button class="btn btn-primary">Submit</button></td>
		</tr>
	</tbody>
</table>
 -->
<table class="table" id="call-table">
	<thead>
		<th scope="col">Call ID</th>
		<th scope="col">Caller Name</th>
		<th scope="col">Operator Name</th>
		<th scope="col">Date</th>
		<th scope="col">Time</th>
		<th scope="col">Notes</th>
		<th scope="col">Reasons</th>
		<th scope="col">Details</th>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Some1</td>
			<td>Alice</td>
			<td>26/07/2021</td>
			<td>3pm</td>
			<td>Hello</td>
			<td>To say hello</td>
			<td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#callEditModal">View Details</button></td>
		</tr>
	</tbody>

</table>

<script>
	function searchTable() {
		// Allows text to be entered in the search box to find in the table.
		// Does not involve searching the database again therefore reduces security risk of SQL injection.

		// Set the variables
		var input, search, table, tr, td, i, txt, count;

		// Find the input text field
		input = document.getElementById("call-search");
		//console.log(input);
		// Retrieve the search from the field
		search = input.value.toUpperCase();

		// Find the table and all table rows
		table = document.getElementById("call-table");
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