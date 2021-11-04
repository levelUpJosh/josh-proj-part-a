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
                            <td><label for="name-field">Priority: </label></td>
                            <td><select class="form-select " aria-label="Select priority " id="priority-modal-dropdown">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option selected value="Low">Low</option>
                                </select></td>

                        </tr>

                        <tr>
                            <td><label for="hw-id-field">Hardware ID* : </label></td>
                            <td><input type="text" name="hw-id-field" value=""></td>
                        </tr>

                        <tr>
                            <td><label for="sw-id-field">Software ID (Optional): </label></td>
                            <td><input type="text" name="sw-id-field" value=""></td>
                        </tr>


                        <tr>
                            <td><label for="emp-id-field">Employee ID*: </label></td>
                            <td><input type="text" name="emp-id-field" value=""></td>
                        </tr>

                        <tr>
                            <td><label for="notes-field">Notes: </label></td>
                            <td><input type="text" name="notes-field" value="" /></td>

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
<div class="modal  fade" id="callEditModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="callEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callEditModalLabel">Problem Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
  <hr>
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
                                        <td><label for="name-field">Priority: </label></td>
                                        <td><select class="form-select " aria-label="Select priority " id="priority-modal-dropdown">
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option selected value="Low">Low</option>
                                            </select></td>

                                    </tr>

                                    <tr>
                                        <td><label for="hw-id-field">Hardware ID* : </label></td>
                                        <td><input type="text" name="hw-id-field" value=""></td>
                                    </tr>

                                    <tr>
                                        <td><label for="sw-id-field">Software ID (Optional): </label></td>
                                        <td><input type="text" name="sw-id-field" value=""></td>
                                    </tr>


                                    <tr>
                                        <td><label for="emp-id-field">Employee ID*: </label></td>
                                        <td><input type="text" name="emp-id-field" value=""></td>
                                    </tr>

                                    <tr>
                                        <td><label for="notes-field">Notes: </label></td>
                                        <td><textarea type="text" name="notes-field" value="" ></textarea></td>

                                    </tr>

                                    <tr>
                                        <td><label for="name-field">Problem Type: </label></td>
                                        <td><select class="form-select " aria-label="Select priority " id="priority-modal-dropdown">
                                                <option>Hardware</option>
                                                <option>Software</option>
                                                <option>Networking</option>
                                            </select></td>

                                    </tr>
                                    <tr>
                                        <td><label for="solved-field">Solved: </label></td>
                                        <td><select class="form-select " type="text" name="solved-field" value="">
                                                <option id="unresolved-option" class="bg-danger text-light">Unresolved</option>
                                                <option id="resolved-option" class="bg-success text-dark">Resolved</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <div id="solution-details-div">
                                        <tr>
                                            <td><label for="solution-notes-field">Solution Description:</label></td>
                                            <td><textarea name="solution-notes-field"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="solution-owner-field">Solved by:</label></td>
                                            <td><select class="form-select " name="solution-owner-field"></select></td>
                                        </tr>
                                    </div>
                                    <tr>
                                        <td><button type="submit" class="btn btn-primary">Save changes</button></td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                    <div class="row col-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Hardware Affected</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td scope="col">Hardware ID</td>
                                            <td scope="col">Manufacturer</td>
                                            <td scope="col">Model</td>
                                            <td scope="col">Version</td>
                                            <td scope="col">Details</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Apple</td>
                                            <td>Macbook Pro</td>
                                            <td>15in i7 2019</td>
                                            <td><button class="btn btn-secondary">View</button>
                                            <td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Software</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td scope="col">Call ID</td>
                                            <td scope="col">Caller Name</td>
                                            <td scope="col">Caller Name</td>
                                            <td scope="col">Details</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Example</td>
                                            <td></td>

                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Call History</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Call ID</th>
                                            <th scope="col">Caller Name</th>
                                            <th scope="col">Caller Name</th>
                                            <th scope="col">Notes</th>
                                            <th scope="col">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Example</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="col-4 btn btn-primary">Add New</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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