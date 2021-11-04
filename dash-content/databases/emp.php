<!-- Add Modal -->
<div class="modal fade" id="empAddModal" tabindex="-1" aria-labelledby="empAddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="empModalLabel">Add Employee Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <h3>Details</h3>
        <table class="table">
			<form>
				<tr>
					<td>ID:</td>
					<td>1</td>
				</tr>

				<tr>
					<td><label for="fname-modal-field">First Name: </label></td>
					<td><input type="text" name="fname-modal-field" value=""></td>
				</tr>
				
				<tr>
					<td><label for="lname-modal-field">Last Name: </label></td>
					<td><input type="text" name="lname-modal-field" value=""></td>
				</tr>
				
				<tr>
					<td><label for="dept-modal-field">Department: </label></td>
					<td><input type="text" name="dept-modal-field" value=""></td>
				</tr>
				
				
				<tr>
					<td><label for="phone-modal-field">Phone: </label></td>
					<td><input type="text" name="phone-modal-field" value=""></td>
				</tr>

				<tr>
					<td><button type="button" class="btn btn-primary">Save changes</button></td>
				</tr>
			</form>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="empModal" tabindex="-1" aria-labelledby="empModalLabel" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="empModalLabel">Employee Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <h3>Details</h3>
        <table class="table">
			<form>
				<tr>
					<td>ID:</td>
					<td>1</td>
				</tr>

				<tr>
					<td><label for="fname-modal-field">First Name: </label></td>
					<td><input type="text" name="fname-modal-field" value="Melanie"></td>
				</tr>
				
				<tr>
					<td><label for="lname-modal-field">Last Name: </label></td>
					<td><input type="text" name="lname-modal-field" value="Marquez"></td>
				</tr>
				
				<tr>
					<td><label for="dept-modal-field">Department: </label></td>
					<td><input type="text" name="dept-modal-field" value="Dictum???"></td>
				</tr>
				
				
				<tr>
					<td><label for="phone-modal-field">Phone: </label></td>
					<td><input type="text" name="phone-modal-field" value="(01825) 767371"></td>
				</tr>

				<tr>
					<td><button type="button" class="btn btn-primary">Save changes</button></td>
				</tr>
			</form>
		</table>
		<h3>Problem History</h3>

		<table class="table">
			<thead>
				<tr>
					<td scope="col">Problem ID</td>
					<td scope="col">Notes</td>
					<td scope="col">Solved?</td>
					<td scope="col">Details</td>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-danger text-white">
					<td>3</td>
					<td>Example</td>
					<td>Unsolved</td>
					<td><button class="btn btn-secondary">Info</button></td>
				</tr>
				<tr class="bg-success text-white">
					<td>4</td>
					<td>Example2</td>
					<td>Solved</td>
					<td><button class="btn btn-secondary">Info</button></td>
				</tr>
			</tbody>
		</table>

		<h3>Call History</h3>

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
		<label for="emp-search">Enter Search Query: </label>
		<input type="text" id="emp-search" onkeyup="searchTable()" placeholder="Search">
		<button type="button" data-bs-toggle="modal" data-bs-target="#empAddModal" class="btn btn-primary col-2 float-right m-3">Add New Employee</button>
	</div>

</div>
<table class="table" id="add-emp-table">
	<thead>
		<th scope="col">Employee ID</th>
		<th scope="col">First Name</th>
		<th scope="col">Last Name</th>
		<th scope="col">Department</th>
		<th scope="col">Phone Number</th>
	</thead>
	<tbody>
		<tr id="add-employee-row" class="table-dark">
			<td>N/A</td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><button>Submit</button></td>
		</tr>
	</tbody>
</table>

<table class="table" id="emp-table">
	<thead class="position-sticky">
		<th scope="col">Employee ID</th>
		<th scope="col">First Name</th>
		<th scope="col">Last Name</th>
		<th scope="col">Department</th>
		<th scope="col">Phone Number</th>
		<th scope="col">Details</th>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Melanie</td>
			<td>Marquez</td>
			<td>Dictum Mi Ac Foundation</td>
			<td>(01825) 767371</td>
			<td><button data-bs-toggle="modal" data-bs-target="#empModal" class="btn btn-secondary">Details</button></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Nash</td>
			<td>Gibson</td>
			<td>Hendrerit Donec Incorporated</td>
			<td>0500 034329</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Quail</td>
			<td>Peterson</td>
			<td>Ut Associates</td>
			<td>055 8776 8264</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Lamar</td>
			<td>Douglas</td>
			<td>Felis Eget Industries</td>
			<td>0347 260 4441</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Hillary</td>
			<td>Evans</td>
			<td>Eu Industries</td>
			<td>076 4856 3460</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Sydney</td>
			<td>Brewer</td>
			<td>A Sollicitudin Orci Ltd</td>
			<td>070 0784 0724</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Cade</td>
			<td>Kelly</td>
			<td>Et Libero Associates</td>
			<td>0500 771681</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Jack</td>
			<td>Hinton</td>
			<td>Nec Diam LLP</td>
			<td>(0161) 402 2459</td>
		</tr>
		<tr>
			<td>9</td>
			<td>Oprah</td>
			<td>Cervantes</td>
			<td>Nam Corporation</td>
			<td>055 7554 2133</td>
		</tr>
		<tr>
			<td>10</td>
			<td>Vera</td>
			<td>Kaufman</td>
			<td>Augue Incorporated</td>
			<td>(011846) 08736</td>
		</tr>
		<tr>
			<td>11</td>
			<td>Shay</td>
			<td>Head</td>
			<td>Id Erat Corporation</td>
			<td>(0112) 332 8557</td>
		</tr>
		<tr>
			<td>12</td>
			<td>Slade</td>
			<td>Shannon</td>
			<td>Fermentum Fermentum Associates</td>
			<td>(024) 4571 7845</td>
		</tr>
		<tr>
			<td>13</td>
			<td>Zia</td>
			<td>Barlow</td>
			<td>Euismod Enim LLP</td>
			<td>(015554) 13587</td>
		</tr>
		<tr>
			<td>14</td>
			<td>Gail</td>
			<td>Zimmerman</td>
			<td>Accumsan Convallis LLC</td>
			<td>(0116) 718 6487</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Alana</td>
			<td>Hernandez</td>
			<td>Arcu Industries</td>
			<td>(016977) 1821</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Aquila</td>
			<td>Dyer</td>
			<td>Molestie Orci Foundation</td>
			<td>0800 1111</td>
		</tr>
		<tr>
			<td>17</td>
			<td>Eaton</td>
			<td>Wiley</td>
			<td>Vivamus Sit Foundation</td>
			<td>(014165) 22705</td>
		</tr>
		<tr>
			<td>18</td>
			<td>Flynn</td>
			<td>Duke</td>
			<td>Tincidunt Neque Vitae Associates</td>
			<td>(0117) 717 2216</td>
		</tr>
		<tr>
			<td>19</td>
			<td>Haley</td>
			<td>Grant</td>
			<td>Odio Auctor Vitae Ltd</td>
			<td>076 1569 6633</td>
		</tr>
		<tr>
			<td>20</td>
			<td>Allen</td>
			<td>Huffman</td>
			<td>Molestie In Tempus Ltd</td>
			<td>055 8752 3638</td>
		</tr>
		<tr>
			<td>21</td>
			<td>Hoyt</td>
			<td>Lester</td>
			<td>Eu Enim Corp.</td>
			<td>(01207) 739437</td>
		</tr>
		<tr>
			<td>22</td>
			<td>Velma</td>
			<td>Hoffman</td>
			<td>Cursus In Institute</td>
			<td>0800 1111</td>
		</tr>
		<tr>
			<td>23</td>
			<td>TaShya</td>
			<td>Bentley</td>
			<td>Ac Tellus Suspendisse Inc.</td>
			<td>(01711) 22938</td>
		</tr>
		<tr>
			<td>24</td>
			<td>Phoebe</td>
			<td>Walters</td>
			<td>Elit Pharetra Corp.</td>
			<td>(01058) 77873</td>
		</tr>
		<tr>
			<td>25</td>
			<td>Preston</td>
			<td>Duke</td>
			<td>Penatibus Et Consulting</td>
			<td>0800 518 2142</td>
		</tr>
		<tr>
			<td>26</td>
			<td>Kylie</td>
			<td>Rutledge</td>
			<td>Ornare PC</td>
			<td>0341 800 1854</td>
		</tr>
		<tr>
			<td>27</td>
			<td>Audra</td>
			<td>Wilder</td>
			<td>Amet Diam Eu PC</td>
			<td>07193 734103</td>
		</tr>
		<tr>
			<td>28</td>
			<td>Bevis</td>
			<td>Terrell</td>
			<td>Non Dapibus LLP</td>
			<td>076 9614 4231</td>
		</tr>
		<tr>
			<td>29</td>
			<td>Steel</td>
			<td>Hale</td>
			<td>Quam Quis Diam Ltd</td>
			<td>076 4296 8204</td>
		</tr>
		<tr>
			<td>30</td>
			<td>Ifeoma</td>
			<td>Melton</td>
			<td>Adipiscing Lobortis Institute</td>
			<td>056 4783 5512</td>
		</tr>
		<tr>
			<td>31</td>
			<td>Jason</td>
			<td>Donovan</td>
			<td>Viverra Maecenas Ltd</td>
			<td>0800 812531</td>
		</tr>
		<tr>
			<td>32</td>
			<td>Lucas</td>
			<td>Mcguire</td>
			<td>Mollis Nec Cursus Institute</td>
			<td>0800 776753</td>
		</tr>
		<tr>
			<td>33</td>
			<td>Brady</td>
			<td>Nieves</td>
			<td>Neque Pellentesque Associates</td>
			<td>(01487) 642644</td>
		</tr>
		<tr>
			<td>34</td>
			<td>Tashya</td>
			<td>Rios</td>
			<td>Mauris Nulla LLC</td>
			<td>07314 058367</td>
		</tr>
		<tr>
			<td>35</td>
			<td>Reece</td>
			<td>Pruitt</td>
			<td>Per Inceptos Hymenaeos Incorporated</td>
			<td>(020) 7146 4867</td>
		</tr>
		<tr>
			<td>36</td>
			<td>Juliet</td>
			<td>Bryant</td>
			<td>Erat Vel Corp.</td>
			<td>0800 383175</td>
		</tr>
		<tr>
			<td>37</td>
			<td>Keelie</td>
			<td>Armstrong</td>
			<td>Nulla Tincidunt Neque PC</td>
			<td>070 6875 9625</td>
		</tr>
		<tr>
			<td>38</td>
			<td>Forrest</td>
			<td>Hughes</td>
			<td>Rutrum Limited</td>
			<td>(01339) 92462</td>
		</tr>
		<tr>
			<td>39</td>
			<td>Channing</td>
			<td>Frazier</td>
			<td>Erat Institute</td>
			<td>0845 46 45</td>
		</tr>
		<tr>
			<td>40</td>
			<td>Nash</td>
			<td>Frazier</td>
			<td>Id Enim Industries</td>
			<td>(01564) 371465</td>
		</tr>
		<tr>
			<td>41</td>
			<td>Cecilia</td>
			<td>Knowles</td>
			<td>Sem Industries</td>
			<td>07624 154443</td>
		</tr>
		<tr>
			<td>42</td>
			<td>Violet</td>
			<td>Lawson</td>
			<td>Venenatis A Industries</td>
			<td>0800 198 3461</td>
		</tr>
		<tr>
			<td>43</td>
			<td>William</td>
			<td>Compton</td>
			<td>Posuere Cubilia Industries</td>
			<td>0321 007 7806</td>
		</tr>
		<tr>
			<td>44</td>
			<td>Laura</td>
			<td>Weeks</td>
			<td>Mattis Cras Industries</td>
			<td>0342 979 9153</td>
		</tr>
		<tr>
			<td>45</td>
			<td>Logan</td>
			<td>Mcbride</td>
			<td>Senectus Et Netus PC</td>
			<td>0800 1111</td>
		</tr>
		<tr>
			<td>46</td>
			<td>Rooney</td>
			<td>Donaldson</td>
			<td>Fermentum Fermentum PC</td>
			<td>(01211) 44187</td>
		</tr>
		<tr>
			<td>47</td>
			<td>Melvin</td>
			<td>Byrd</td>
			<td>Nec Ante PC</td>
			<td>07624 101402</td>
		</tr>
		<tr>
			<td>48</td>
			<td>Jerome</td>
			<td>Waller</td>
			<td>Et Euismod Et Inc.</td>
			<td>0800 379 8169</td>
		</tr>
		<tr>
			<td>49</td>
			<td>Ferdinand</td>
			<td>Bradshaw</td>
			<td>Libero Integer Institute</td>
			<td>0845 46 47</td>
		</tr>
		<tr>
			<td>50</td>
			<td>Dara</td>
			<td>Gaines</td>
			<td>Magnis Ltd</td>
			<td>055 7926 1216</td>
		</tr>
		<tr>
			<td>51</td>
			<td>Venus</td>
			<td>Solomon</td>
			<td>Erat Vitae Risus LLP</td>
			<td>0800 814843</td>
		</tr>
		<tr>
			<td>52</td>
			<td>Gil</td>
			<td>Santos</td>
			<td>Enim Etiam Foundation</td>
			<td>055 1463 7849</td>
		</tr>
		<tr>
			<td>53</td>
			<td>Brady</td>
			<td>Serrano</td>
			<td>Vehicula Risus Nulla Industries</td>
			<td>0931 382 7874</td>
		</tr>
		<tr>
			<td>54</td>
			<td>Vaughan</td>
			<td>Franks</td>
			<td>Fermentum Vel Mauris LLC</td>
			<td>(01032) 68826</td>
		</tr>
		<tr>
			<td>55</td>
			<td>Ferris</td>
			<td>Sweet</td>
			<td>In Sodales Elit Corp.</td>
			<td>(012417) 14083</td>
		</tr>
		<tr>
			<td>56</td>
			<td>Bradley</td>
			<td>Dejesus</td>
			<td>Mi Tempor Foundation</td>
			<td>070 4292 0448</td>
		</tr>
		<tr>
			<td>57</td>
			<td>Kellie</td>
			<td>Sexton</td>
			<td>Consequat Nec Inc.</td>
			<td>055 4247 5481</td>
		</tr>
		<tr>
			<td>58</td>
			<td>Price</td>
			<td>Sweeney</td>
			<td>Facilisis Eget Ipsum Inc.</td>
			<td>0899 213 4422</td>
		</tr>
		<tr>
			<td>59</td>
			<td>Sasha</td>
			<td>Compton</td>
			<td>Erat Industries</td>
			<td>0800 276524</td>
		</tr>
		<tr>
			<td>60</td>
			<td>Savannah</td>
			<td>Cohen</td>
			<td>Semper Tellus Id Incorporated</td>
			<td>(01865) 76934</td>
		</tr>
		<tr>
			<td>61</td>
			<td>Adena</td>
			<td>Dominguez</td>
			<td>Mauris Vestibulum Corporation</td>
			<td>(0114) 186 3762</td>
		</tr>
		<tr>
			<td>62</td>
			<td>Teegan</td>
			<td>Ferrell</td>
			<td>Vehicula Aliquet Libero LLC</td>
			<td>(01785) 708824</td>
		</tr>
		<tr>
			<td>63</td>
			<td>Drew</td>
			<td>Emerson</td>
			<td>Sit Amet Consulting</td>
			<td>056 2318 4227</td>
		</tr>
		<tr>
			<td>64</td>
			<td>Samantha</td>
			<td>Blackburn</td>
			<td>Tempor Arcu PC</td>
			<td>076 3371 5644</td>
		</tr>
		<tr>
			<td>65</td>
			<td>Jermaine</td>
			<td>Boyd</td>
			<td>Interdum Ligula Inc.</td>
			<td>056 8684 8515</td>
		</tr>
		<tr>
			<td>66</td>
			<td>Brett</td>
			<td>Potts</td>
			<td>Quis Industries</td>
			<td>0933 725 7616</td>
		</tr>
		<tr>
			<td>67</td>
			<td>Paula</td>
			<td>Olson</td>
			<td>Ornare Corp.</td>
			<td>(01183) 561752</td>
		</tr>
		<tr>
			<td>68</td>
			<td>Jenna</td>
			<td>Chang</td>
			<td>Mauris Blandit Foundation</td>
			<td>(027) 3485 1763</td>
		</tr>
		<tr>
			<td>69</td>
			<td>Shea</td>
			<td>Nichols</td>
			<td>Orci Company</td>
			<td>0500 846487</td>
		</tr>
		<tr>
			<td>70</td>
			<td>Adele</td>
			<td>Melendez</td>
			<td>Nec Metus Facilisis LLC</td>
			<td>0935 181 8583</td>
		</tr>
		<tr>
			<td>71</td>
			<td>Indira</td>
			<td>Vazquez</td>
			<td>Risus At Industries</td>
			<td>(0111) 617 6725</td>
		</tr>
		<tr>
			<td>72</td>
			<td>Hiroko</td>
			<td>Mendoza</td>
			<td>Elit Etiam Institute</td>
			<td>0800 189 6222</td>
		</tr>
		<tr>
			<td>73</td>
			<td>Nigel</td>
			<td>Mayer</td>
			<td>Accumsan Institute</td>
			<td>0311 784 6382</td>
		</tr>
		<tr>
			<td>74</td>
			<td>Beatrice</td>
			<td>Tran</td>
			<td>Vehicula Inc.</td>
			<td>0361 141 4472</td>
		</tr>
		<tr>
			<td>75</td>
			<td>Hamilton</td>
			<td>Battle</td>
			<td>Ac Feugiat Associates</td>
			<td>0500 074825</td>
		</tr>
		<tr>
			<td>76</td>
			<td>Beck</td>
			<td>Bentley</td>
			<td>Consectetuer Adipiscing Company</td>
			<td>076 7666 7452</td>
		</tr>
		<tr>
			<td>77</td>
			<td>Valentine</td>
			<td>Bass</td>
			<td>Aenean Gravida Nunc Limited</td>
			<td>(0101) 751 3166</td>
		</tr>
		<tr>
			<td>78</td>
			<td>Phoebe</td>
			<td>Dawson</td>
			<td>Consectetuer Mauris Industries</td>
			<td>07624 825715</td>
		</tr>
		<tr>
			<td>79</td>
			<td>Keegan</td>
			<td>Romero</td>
			<td>Quisque Associates</td>
			<td>(021) 3590 0212</td>
		</tr>
		<tr>
			<td>80</td>
			<td>Doris</td>
			<td>Wiley</td>
			<td>Neque Morbi Inc.</td>
			<td>(016977) 2541</td>
		</tr>
		<tr>
			<td>81</td>
			<td>Louis</td>
			<td>Palmer</td>
			<td>Quis Arcu PC</td>
			<td>0921 747 8212</td>
		</tr>
		<tr>
			<td>82</td>
			<td>Naida</td>
			<td>Villarreal</td>
			<td>Mattis Cras Eget Foundation</td>
			<td>(021) 9484 7347</td>
		</tr>
		<tr>
			<td>83</td>
			<td>Hanae</td>
			<td>Hawkins</td>
			<td>Placerat PC</td>
			<td>0954 259 1148</td>
		</tr>
		<tr>
			<td>84</td>
			<td>Colton</td>
			<td>O'brien</td>
			<td>Sit Amet Faucibus Inc.</td>
			<td>056 6664 1573</td>
		</tr>
		<tr>
			<td>85</td>
			<td>Neil</td>
			<td>Burns</td>
			<td>Proin Vel Associates</td>
			<td>(028) 5649 2916</td>
		</tr>
		<tr>
			<td>86</td>
			<td>Nathan</td>
			<td>Todd</td>
			<td>Vitae Corp.</td>
			<td>07624 687125</td>
		</tr>
		<tr>
			<td>87</td>
			<td>Damon</td>
			<td>Jennings</td>
			<td>Cursus Nunc Industries</td>
			<td>0800 1111</td>
		</tr>
		<tr>
			<td>88</td>
			<td>Melvin</td>
			<td>Clarke</td>
			<td>Ridiculus Mus Aenean Inc.</td>
			<td>(0110) 405 6475</td>
		</tr>
		<tr>
			<td>89</td>
			<td>Clark</td>
			<td>Hatfield</td>
			<td>Ut Mi Duis Inc.</td>
			<td>(016977) 8454</td>
		</tr>
		<tr>
			<td>90</td>
			<td>Leilani</td>
			<td>Villarreal</td>
			<td>Malesuada Fames Ac Ltd</td>
			<td>056 3562 0232</td>
		</tr>
		<tr>
			<td>91</td>
			<td>Ross</td>
			<td>Brady</td>
			<td>Varius Nam Porttitor Corporation</td>
			<td>(01721) 875723</td>
		</tr>
		<tr>
			<td>92</td>
			<td>Brianna</td>
			<td>Stout</td>
			<td>Luctus Ut Pellentesque Limited</td>
			<td>076 3334 3012</td>
		</tr>
		<tr>
			<td>93</td>
			<td>Louis</td>
			<td>Zamora</td>
			<td>Eu Foundation</td>
			<td>0895 163 6831</td>
		</tr>
		<tr>
			<td>94</td>
			<td>Keiko</td>
			<td>Diaz</td>
			<td>Neque Venenatis LLP</td>
			<td>0500 428760</td>
		</tr>
		<tr>
			<td>95</td>
			<td>Orla</td>
			<td>Potter</td>
			<td>Lectus Pede Et Corporation</td>
			<td>(01464) 83135</td>
		</tr>
		<tr>
			<td>96</td>
			<td>Wynne</td>
			<td>Manning</td>
			<td>Odio Auctor PC</td>
			<td>0845 46 43</td>
		</tr>
		<tr>
			<td>97</td>
			<td>Leslie</td>
			<td>Carr</td>
			<td>Nascetur Ridiculus Associates</td>
			<td>07836 415629</td>
		</tr>
		<tr>
			<td>98</td>
			<td>Emery</td>
			<td>Rogers</td>
			<td>Porta Elit LLC</td>
			<td>(0191) 830 6195</td>
		</tr>
		<tr>
			<td>99</td>
			<td>Lacy</td>
			<td>Benton</td>
			<td>Turpis LLP</td>
			<td>076 7727 6510</td>
		</tr>
		<tr>
			<td>100</td>
			<td>Juliet</td>
			<td>Navarro</td>
			<td>Porttitor Scelerisque LLC</td>
			<td>0818 735 6898</td>
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
		input = document.getElementById("emp-search");
		//console.log(input);
		// Retrieve the search from the field
		search = input.value.toUpperCase();

		// Find the table and all table rows
		table = document.getElementById("emp-table");
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