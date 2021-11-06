
<?php $panel = 'software'?>
<!-- Add Modal -->
<div class="modal fade" id="softwareAddModal" tabindex="-1" aria-labelledby="softwareAddModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="softwareAddModalLabel">Add Software</h5>
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
							<td><label for="name-modal-field">Name: </label></td>
							<td><input type="text" name="manufacturer-field" value="" required></td>
						</tr>

						<tr>
							<td><label for="license-start-modal-field">License Start: </label></td>
							<td><input type="date" name="model-field" value=""></td>
						</tr>

						<tr>
							<td><label for="license-end-modal-field">License End: </label></td>
							<td><input type="date" name="version-field" value="01/01/2022"></td>
						</tr>


						<tr>
							<td><label for="key-modal-field">Product Key: </label></td>
							<td><input type="text" value=""></td>
						</tr>

						<tr>
							<td><label for="os-modal-field">Operating System: </label></td>
							<td><input list="os-modal-dropdown" id="os-choice" name="os-modal-field" value="" /></td>
							<datalist id="os-modal-dropdown">
								<option value="MacOS">
								<option value="Windows">
								<option value="Linux">
								<option value="iOS">
								<option value="Android">
							</datalist>
						</tr>
						<tr>
							<td><label for="house-modal-field">Developed in house?: </label></td>
							<td><input type="checkbox"></td>
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
<div class="modal fade" id="softwareEditModal" tabindex="-1" aria-labelledby="softwareEditModalLabel" aria-hidden="true" data-bs-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="softwareEditModalLabel">Software Info</h5>
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
							<td><label for="name-modal-field">Name: </label></td>
							<td><input type="text" name="manufacturer-field" value="Microsoft Office 365 Entreprise" required></td>
						</tr>

						<tr>
							<td><label for="license-start-modal-field">License Start: </label></td>
							<td><input type="date" name="model-field" value="2021-01-01"></td>
						</tr>

						<tr>
							<td><label for="license-end-modal-field">License End: </label></td>
							<td><input type="date" name="version-field" value="2022-01-01"></td>
						</tr>


						<tr>
							<td><label for="key-modal-field">Product Key: </label></td>
							<td><input type="text" value="AA9-08B-778-90T7"></td>
						</tr>

						<tr>
							<td><label for="os-modal-field">Operating System: </label></td>
							<td><input list="os-modal-dropdown" id="os-choice" name="os-modal-field" value="Windows" /></td>
							<datalist id="os-modal-dropdown">
								<option value="MacOS">
								<option value="Windows">
								<option value="Linux">
								<option value="iOS">
								<option value="Android">
							</datalist>
						</tr>
						<tr>
							<td><label for="house-modal-field">Developed in house?: </label></td>
							<td><input type="checkbox" checked></td>
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
			<?php
				checkReturnUrl($userType);
				?>
			</div>
		</div>
	</div>
</div>


<div class="position-sticky fixed-top row bg-light">
	<div>
		<label for="sw-search">Enter Search Query: </label>
		<input type="text" id="sw-search" onkeyup="searchTable()" placeholder="Search">
		<button type="button" data-bs-toggle="modal" data-bs-target="#softwareAddModal" class="btn btn-primary col-2 float-right m-3">Add New Software</button>
	</div>

</div>
<table class="table" id="add-sw-table">
	<thead>
		<th scope="col">Software ID</th>
		<th scope="col">Name</th>
		<th scope="col">License Start</th>
		<th scope="col">License End</th>
		<th scope="col">Key</th>
		<th scope="col">OS</th>
		<th scope="col">In house?</th>
	</thead>
	<tbody>
		<tr id="add-employee-row" class="table-dark">
			<td>N/A</td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="date"></td>
		</tr>
		<td><button>Submit</button></td>
	</tbody>
</table>

<table class="table" id="sw-table">
	<thead>
		<th scope="col">Software ID</th>
		<th scope="col">Name</th>
		<th scope="col">License Start</th>
		<th scope="col">License End</th>
		<th scope="col">Key</th>
		<th scope="col">OS</th>
		<th scope="col">In house?</th>
		<th scope="col">Details</th>

	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Microsoft Office 365 Enterprise</td>
			<td>01/01/2021</td>
			<td>01/01/2022</td>
			<td>AA9-08B-778-90T7</td>
			<td>Windows</td>
			<td>No</td>
			<td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#softwareEditModal">View Details</button></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Apple Final Cut Pro X</td>
			<td>01/01/2021</td>
			<td>01/01/2022</td>
			<td>AA9-08B-778-90T7</td>
			<td>macOS</td>
			<td>No</td>
			<td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="">View Details</button></td>
		</tr>
		<tr>
		<td>3</td>
			<td>Make-It-All Maker</td>
			<td>01/01/2021</td>
			<td>01/01/2022</td>
			<td>AA9-08B-778-90T7</td>
			<td>Windows</td>
			<td>Yes</td>
			<td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="">View Details</button></td>
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
		input = document.getElementById("sw-search");
		//console.log(input);
		// Retrieve the search from the field
		search = input.value.toUpperCase();

		// Find the table and all table rows
		table = document.getElementById("sw-table");
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