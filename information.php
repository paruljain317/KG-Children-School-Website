<?php

        include ('admin/dbcon.php');

        $q = "select * from info";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>



<?php include "header.php" ?>

<div class="container">
    <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
            <br><h3><?php echo $result['title']?></h3>
        </div>
    </div><!-- end title -->


	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">1</th>
					<th style="text-align: justify;" scope="col">Name of the school with Address:(Strictly as per affiliation sanction letter or as permitted by the Board) with pin No.</th>
					<th scope="col">K.G. Children School<br>
					Add- Girgaon, Maharajpur, Bhind Road, Gwalior – 474020</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;">E-mail</span></td>
					<td><a>Kgschool_gwl@yahoo.co.in</a></td>
					</tr>
					<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> Ph. No.</span></td>
					<td>0751-2479501</td>
					</tr>
					<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> Fax No.</span></td>
					<td></td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">2</th>
					<th style="text-align: justify;" scope="col">Year of establishment</th>
					<th scope="col">2006</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">3</th>
					<th style="text-align: justify;" scope="col">Whether NOC from state/UT or recommendation of Embassy of India obtained</th>
					<th scope="col">Yes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;"> NOC No.</span></td>
					<td><a>f-73-58/2006/20-3</a></td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> NOC issuing date</span></td>
					<td>29.06.2007</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">4</th>
					<th style="text-align: justify;" scope="col">Is the School is recognized, if yes by which authority</th>
					<th scope="col">Yes, Central Board of Secondary Education, New Delhi</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">5</th>
					<th style="text-align: justify;" scope="col">Status of affiliation:<br>
					Permanent/Regular/Provisional</th>
					<th scope="col">Provisional</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;"> Affiliation No</span></td>
					<td><a>1030337</a></td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;">Affiliation with the Board since.</span></td>
					<td><a>2008</a></td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> Extension of affiliation upto.</span></td>
					<td><a>31.03.2022</a></td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">6</th>
					<th style="text-align: justify;" scope="col">Name of Trusty/society/Company Registered under Section 25 of the Company Act 1956.</th>
					<th scope="col">Shri Suraj Shiksha Samit</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>Period upto which Registration of Trust/Society is valid</td>
					<td><a>For ever</a></td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">7</th>
					<th style="text-align: justify;" scope="col">List of members of School Managing Committee with their address/tenure and post held.</th>
					<td scope="col"></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>S.No</td>
					<td>Name
					<span style="padding-left: 320px;">Tenure</span></td>
					<td>Post held</td>
				</tr>
				<tr>
					<td>i</td>
					<td>Kailash Narayan Shrivastava
					<span style="padding-left: 175px;">3yrs.</span></td>
					<td>Chairman</td>
				</tr>
				<tr>
					<td>ii</td>
					<td>Mrs. Madhu Rathore
					<span style="padding-left: 226px;">3 Yrs.</span></td>
					<td>Vice Chairman</td>
				</tr>

				<tr>
					<td>iii</td>
					<td>Mrs. Sumita Shrivastava
					<span style="padding-left: 201px;">3 Yrs.</span></td>
					<td>Secretary</td>
				</tr>

				<tr>
					<td>iv</td>
					<td>Mrs. Arti Sinha
					<span style="padding-left: 261px;">3 Yrs</span></td>
					<td>Member</td>
				</tr>

				<tr>
					<td>v</td>
					<td>Mrs. Kiran Pankaj Vohra
					<span style="padding-left: 201px;">3 Yrs.</span></td>
					<td>Member</td>
				</tr>

				<tr>
					<td>vi</td>
					<td>Mrs. Sujata Singh
					<span style="padding-left: 236px;"> 3 Yrs.</span></td>
					<td>Member</td>
				</tr>

				<tr>
					<td>vii</td>
					<td>Shyam Gambhir
					<span style="padding-left: 243px;">3 Yrs.</span></td>
					<td>Member</td>
				</tr>

				<tr>
					<td>viii</td>
					<td>Ms. Meera Shrivastava
					<span style="padding-left: 201px;">3 Yrs.</span></td>
					<td>Member</td>
				</tr>

				<tr>
					<td>ix</td>
					<td>Joint Director/ Lok Shikshan
					<span style="padding-left: 158px;">3 Yrs</span></td>
					<td>Honorary Member</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">8</th>
					<th style="text-align: justify;" scope="col">Name and official Address of the<br>
					Manager/President/Chairman/Correspondent</th>
					<th scope="col">Ms. Meera Shrivastava<br>
					Mall Road, Morar, Gwalior, Pin-474006</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;">E-mail</span></td>
					<td><a>meerashri@hotmail.com</a></td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> Ph. No.</span></td>
					<td>0751-2365160</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> Fax No.</span></td>
					<td>Not available</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">9</th>
					<th style="text-align: justify;" scope="col">Area of the campus</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;"> In Acres</span></td>
					<td>2.55 Acres</td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> In Sq. mtrs.</span></td>
					<td>10350.08</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> Built up area (sq. mtrs)</span></td>
					<td>2800</td>
				</tr>
				<tr>
					<td></td>
					<td>[iv]<span style="padding-left: 40px;">Area of Playground in sq.mtrs</span></td>
					<td>1003.72</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">10</th>
					<th style="text-align: justify;" scope="col">Other facilities</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;"> Swimming Pool</span></td>
					<td>Not available</td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;">Indoor games</span></td>
					<td>Available, Carom, Chess, Table Tennis</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;">Gymnasium</span></td>
					<td>Not Available</td>
				</tr>
				<tr>
					<td></td>
					<td>[iv]<span style="padding-left: 40px;">Dance room</span></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>[v]<span style="padding-left: 40px;">Music room</span></td>
					<td>Available</td>
				</tr>
				<tr>
					<td></td>
					<td>[vi]<span style="padding-left: 40px;">Hostels</span></td>
					<td>Not available</td>
				</tr>
				<tr>
					<td></td>
					<td>[vii]<span style="padding-left: 40px;"> Health and Medical Checkup</span></td>
					<td>Regularly being conducted</td>
				</tr>
			</tbody>
			<thead>
				<tr>
				<th scope="col">11</th>
				<th style="text-align: justify;" scope="col">Details of Fee structure</th>
				<td scope="col"></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;"> Pre-Nursery</span></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> Nursery</span></td>
					<td>@ Rs. 700/- per month</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> I to V</span></td>
					<td>@ Rs. 900/- per month</td>
				</tr>
				<tr>
					<td></td>
					<td>[iv]<span style="padding-left: 40px;"> VI to VIII</span></td>
					<td>@ Rs. 1200/- per month</td>
				</tr>
				<tr>
					<td></td>
					<td>[v]<span style="padding-left: 40px;"> IX &amp; X</span></td>
					<td>@ Rs. 1325/- per month</td>
				</tr>
				<tr>
					<td></td>
					<td>[vi]<span style="padding-left: 40px;">XI &amp; XII</span></td>
					<td>Not applicable</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">12</th>
					<th style="text-align: justify;" scope="col">Transport facility</th>
					<th scope="col">Available</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;"> Own Bus</span></td>
					<td>Yes</td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> Bus hired on contract basis</span></td>
					<td>Yes</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> Details of transport charges</span></td>
					<td>As per prevailing fuel charges &amp; distance wise.</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">13</th>
					<th style="text-align: justify;" scope="col">Particulars of teaching staff (to be uploaded time to time)</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th style="padding-left: 15px;">NAME</th>
					<th>DESI.<span style="padding-left: 34px;">DOB</span><span style="padding-left: 34px;">DATE </span><span style="padding-left: 34px;">TRAINED/UNTRAIND</span><span style="padding-left: 34px;">PROBATION/CO0NFIRMED</span></th>
					<th>Adhoc/PTT</th>
				</tr>
			</thead>
			<tbody>
				<!-- <tr>
					<td style="padding-left: 15px;">Mrs. Vandana Chaurasia</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left: 15px;"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left: 15px;"></td>
					<td></td>
					<td></td>
				</tr> -->
			</tbody>
			<thead>
				<tr>
					<th scope="col">14</th>
					<th style="text-align: justify;" scope="col">Mode of payment of salary</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;">Name of the Bank through which salary is drawing</span></td>
					<td>Bank of India,<br>
					St. Paul’s Branch,<br>
					Morar Gwalior.</td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> Through single cheque transfer advice</span></td>
					<td>YES</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;"> Individual cheque</span></td>
					<td>NO</td>
				</tr>
				<tr>
					<td></td>
					<td>[iv]<span style="padding-left: 40px;">Cash</span></td>
					<td>NO</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">15</th>
					<th style="text-align: justify;" scope="col">Library facilities</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>[i]<span style="padding-left: 40px;">Size of the Library in sq. ft.</span></td>
					<td>20x 20 = 400</td>
				</tr>
				<tr>
					<td></td>
					<td>[ii]<span style="padding-left: 40px;"> No. of periodical</span></td>
					<td>02</td>
				</tr>
				<tr>
					<td></td>
					<td>[iii]<span style="padding-left: 40px;">No. of Dailies</span></td>
					<td>05</td>
				</tr>
				<tr>
					<td></td>
					<td>[iv]<span style="padding-left: 40px;"> No. of reference books class wise</span></td>
					<td>I to X 2200</td>
				</tr>
				<tr>
					<td></td>
					<td>[v]<span style="padding-left: 40px;">No. of magazines</span></td>
					<td>06</td>
				</tr>
				<tr>
					<td></td>
					<td>[vi]<span style="padding-left: 40px;"> Others</span></td>
					<td>5635</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col">16</th>
					<th style="text-align: justify;" scope="col">Name of the Grievance redressal with E-mail, Ph. No.<br>
					Fax No.</th>
					<td scope="col">Mrs. Vandana Chaurasia<br>
					09617976551<br>
					Kgchildren_gwalior@yahoo.com</td>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">17</th>
					<th style="text-align: justify;" scope="col">Members of Sexual Harassment Committee</th>
					<td scope="col">1. Ms. Meera Shrivastava<br>
					2. Mrs. Vandana Chaurasia3. Mrs. Kalpana Gupta</td>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">18</th>
					<th style="text-align: justify;" scope="col">Academic session period</th>
					<th scope="col">April to March</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">19</th>
					<th style="text-align: justify;" scope="col">Vacation Period</th>
					<th scope="col">May to June</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">20</th>
					<th style="text-align: justify;" scope="col">Admission period</th>
					<th scope="col">April to July</th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<?php include "footer.php" ?>