<!-- The specialist page needs some different thought. Skills should be able to be filters 
-> I may choose to use "cards" for each specialist, rather than a table


<!-- Edit Modal -->
<div class="modal fade" id="swModal" tabindex="-1" aria-labelledby="swModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="swModalLabel">Specialist Info</h5>
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
							<td><input type="text" name="manufacturer-field" value="Apple" required></td>
						</tr>

						<tr>
							<td><label for="license-start-modal-field">Skillset: </label></td>
							<td><input type="text" name="model-field" value="Macbook Pro"></td>
						</tr>

						<tr>
							<td><label for="license-end-modal-field">Number of Problems: </label></td>
							<td>0</td>
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
				<td><input type="text" id="spec-search" onkeyup="searchTable()" placeholder="Search"></td><br></tr>
			</tr>
			<tr>
				<td>
					<label for="os-modal-field">Filter Skillset: </label>
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
			</tr>
		</table>
		

			

	</div>

</div>
<table class="table" id="add-spec-table">
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
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
		</tr>
		<td><button>Submit</button></td>
	</tbody>
</table>

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
			<td>james</td>
			<td>James Tell</td>
			<td></td>
			<td>2</td>
			<td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#swModal">View Details</button></td>
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