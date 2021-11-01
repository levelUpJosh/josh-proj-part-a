<div class="position-sticky fixed-top row bg-light">
	<div>
		<label for="call-search">Enter Search Query: </label>
		<input type="text" id="call-search" onkeyup="searchTable()" placeholder="Search">
		<button type="button" class="btn btn-primary col-2 float-right m-3">Add New Call</button>
	</div>

</div>
<table class="table" id="add-call-table">
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
            <td><button class="btn btn-secondary">View Details</button></td>
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