<?php
/*
Copyright (C) 2013 - Labros Asfaleia v.1.0 beta
Author: Labros Karoyntzos 

Labros Asfaleia v.1.0 beta from Labros Karountzos is free software: 
you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, version 3 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License version 3
along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.

Το παρόν με την ονομασία Labros Asfaleia v.1.0 beta με δημιουργό τον Λάμπρο Καρούντζο
στοιχεία επικοινωνίας info@chem-lab.gr www.chem-lab.gr
είναι δωρεάν λογισμικό. Μπορείτε να το τροποποιήσετε και επαναδιανείμετε υπό τους
όρους της άδειας GNU General Public License όπως δίδεται από το Free Software Foundation
στην έκδοση 3 αυτής της άδειας.
Το παρόν σχόλιο πρέπει να παραμένει ως έχει ώστε να τηρείται η παραπάνω άδεια κατά τη διανομή.
*/
?>

<?php
require("include_check.php");
confirm_logged_in();
?>
<div class="container-fluid">
	<div class="row-fluid">
	
		<div class="span2">
			    <div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h4>Ωράριο εργασίας Τ.Α.</h4>
				Δηλώστε το πρόγραμμα εργασίας του Τ.Α. και του Ι.Ε.<br/>
				Μπορείτε να δηλώσετε διαφορετικές ημέρες και ώρες σε κάθε υποκατάστημα ή μπορείτε 
				να κατανείμετε το ωράριο σε διαφορετικές ημέρες και ώρες για το ίδιο υποκατάστημα.
				</div>
				
				<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h4>Πρόγραμμα Τ.Α. και Ι.Ε.</h4>
				Εμφανίζεται το πλήρες πρόγραμμα (αφορά όλες τις μελέτες) του Τ.Α. για το τρέχον έτος. 
				Σε κάθε αλλαγή του προγράμματος απαιτείται ανανέωση της σελίδας για επαναδημιουργία του 
				προγράμματος. <br/><br/>
				Πρέπει να φροντίσετε στην επιλογή του ωραρίου για την τρέχουσα μελέτη αυτό 
				να μην συμπίπτει με το ωράριο που έχει δηλωθεί σε άλλες επιχειρήσεις.
				Βρείτε μία ημέρα που είναι κενή ή ελέξτε το ωράριο για τη μέρα που δηλώνετε.<br/><br/>
				Επίσης φροντίστε κάποιες ημέρες τα προγράμματα Τ.Α. και Ι.Ε. να συμπίπτουν ώστε να ελέγχεται 
				η επιχείρηση με τη συνεργασία των δύο.<br/><br/>
				Μπορείτε να εκτυπώσετε το πρόγραμμα σε pdf. 
				</div>
		</div>
		
		<div class="span10">
			<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Ωράριο εργασίας</a></li>
				<li><a href="#tabs-2">Πρόγραμμα Τ.Α.</a></li>
				<li><a href="#tabs-3">Πρόγραμμα Ι.Ε.</a></li>
				<li><a href="#tabs-4">Ελάχιστες απαιτήσεις</a></li>
			</ul>
			
			<div id="tabs-1">
			<img src="images/calendar.png"><br/>
			
			<!--
			Ωράριο Τεχνικού Ασφαλείας:
			<form name="wrario_form" action="index.php" method="POST">
			<table class="table table-bordered table-hover">
			<tr>
			<td>Ειδος τεχνικου</td>
			<td>Ναι/Οχι</td>
			<td>Καθε</td>
			<td>Ημερα</td>
			<td>Απο</td>
			<td>Εως</td>
			<td>Ληξη</td>
			</tr>
			<tr>
			<td>T.A.</td>
			<td><input type="checkbox" id="ta_is" name="ta_is"></input></td>
			<td><select id="ta_kathe" name="ta_kathe" class="input-medium">
					<option value="0">Κάθε...</option>
					<option value="1">πρώτη</option>
					<option value="2">δεύτερη</option>
					<option value="3">τρίτη</option>
					<option value="4">τέταρτη</option>
				</select>
			</td>
			<td><select id="ta_mera" name="ta_mera" class="input-medium">
					<option value="0">Ημέρα...</option>
					<option value="1">Δευτέρα</option>
					<option value="2">Τρίτη</option>
					<option value="3">Τετάρτη</option>
					<option value="4">Πέμπτη</option>
					<option value="5">Παρασκευή</option>
				</select>
			</td>
			<td><input type="text" id="ta_timestart" name="ta_timestart" class="input-medium" placeholder="Από (ώρα).."></td>
			<td><input type="text" id="ta_timeend" name="ta_timeend" class="input-medium" placeholder="Έως (ώρα).."></td>
			<td><input type="text" id="ta_datepicker" name="ta_end" class="input-medium" placeholder="Λήξη (Ημ/νία).."></td>
			</tr>
			<tr>
			<td>Ι.Ε.</td>
			<td><input type="checkbox" id="ie_is" name="ie_is"></input></td>
			<td><select id="ie_kathe" name="ie_kathe" class="input-medium">
					<option value="0">Κάθε...</option>
					<option value="1">πρώτη</option>
					<option value="2">δεύτερη</option>
					<option value="3">τρίτη</option>
					<option value="4">τέταρτη</option>
				</select>
			</td>
			<td><select id="ie_mera" name="ie_mera" class="input-medium">
					<option value="0">Ημέρα...</option>
					<option value="1">Δευτέρα</option>
					<option value="2">Τρίτη</option>
					<option value="3">Τετάρτη</option>
					<option value="4">Πέμπτη</option>
					<option value="5">Παρασκευή</option>
				</select>
			</td>
			<td><input type="text" id="ie_timestart" name="ie_timestart" class="input-medium" placeholder="Από (ώρα).."></td>
			<td><input type="text" id="ie_timeend" name="ie_timeend" class="input-medium" placeholder="Έως (ώρα).."></td>
			<td><input type="text" id="ie_datepicker" name="ie_end" class="input-medium" placeholder="Λήξη (Ημ/νία).."></td>
			</tr>
			</table>
			
			<button type="submit" name="submit" value="wrario_ie_submit" class="btn">Αποθηκευση</button>
			</form>	
			-->
				
				<?php 
				$ped="meleti_programma_ta";
				$dig="0|0|0|0|0|0|0|0|0|0|0|0|0";
				$tb_name="meleti_programma_ta";
				$tb_title = "Ωράριο τεχνικού ασφαλείας";
				$fields="fields: {
					id: {key: true,create: false,edit: false,list: false},
					user_id: {create: false,edit: false,list: false},
					meleti_id: {create: false,edit: false,list: false},
					ktirio_id: {title: 'Κτίριο',width: '20%',listClass: 'center',options: ".getktiria()."},
					kathe: {title: 'Κάθε',width: '10%',listClass: 'center',options: 
						{
						'1':'πρώτη',
						'2':'δεύτερη',
						'3':'τρίτη',
						'4':'τέταρτη'
						}},
					day: {title: 'Ημέρα',width: '10%',listClass: 'center',options: 
						{
						'0':'Κυριακή',
						'1':'Δευτέρα',
						'2':'Τρίτη',
						'3':'Τετάρτη',
						'4':'Πέμπτη',
						'5':'Παρασκευή',
						'6':'Σάββατο'
						}},
					time_start: {title: 'Από',width: '20%',listClass: 'center'},
					time_end: {title: 'Μέχρι',width: '20%',listClass: 'center'},
					date_start: {title: 'Αρχή',width: '20%', type: 'date', displayFormat: 'yy-mm-dd', width: '10%', listClass: 'center'},
					date_end: {title: 'Τέλος',width: '20%', type: 'date', displayFormat: 'yy-mm-dd', width: '10%', listClass: 'center'}
				}";
				include('includes/jtable.php');
				
				$ped="meleti_programma_ie";
				$dig="0|0|0|0|0|0|0|0|0|0|0|0|0";
				$tb_name="meleti_programma_ie";
				$tb_title = "Ωράριο Ιατρού εργασίας";
				$fields="fields: {
					id: {key: true,create: false,edit: false,list: false},
					user_id: {create: false,edit: false,list: false},
					meleti_id: {create: false,edit: false,list: false},
					ktirio_id: {title: 'Κτίριο',width: '20%',listClass: 'center',options: ".getktiria()."},
					kathe: {title: 'Κάθε',width: '20%',listClass: 'center',options: 
						{
						'1':'πρώτη',
						'2':'δεύτερη',
						'3':'τρίτη',
						'4':'τέταρτη'
						}},
					day: {title: 'Ημέρα',width: '20%',listClass: 'center',options: 
						{
						'0':'Κυριακή',
						'1':'Δευτέρα',
						'2':'Τρίτη',
						'3':'Τετάρτη',
						'4':'Πέμπτη',
						'5':'Παρασκευή',
						'6':'Σάββατο'
						}},
					time_start: {title: 'Από',width: '20%',listClass: 'center'},
					time_end: {title: 'Μέχρι',width: '20%',listClass: 'center'},
					date_start: {title: 'Αρχή',width: '20%', type: 'date', displayFormat: 'yy-mm-dd', width: '10%', listClass: 'center'},
					date_end: {title: 'Τέλος',width: '20%', type: 'date', displayFormat: 'yy-mm-dd', width: '10%', listClass: 'center'}
				}";
				include('includes/jtable.php');
				?>
				
				
			</div>
			
			<div id="tabs-2"> 
			Ανανεώστε τη σελίδα σε κάθε αλλαγή στην καρτέλα "ωράριο εργασίας" ώστε να επαναφορτωθεί το πρόγραμμα του Τεχνικού ασφαλείας.<br/>
			<?php
			$trexon_y = date("Y");
			echo draw_calendar($trexon_y,"meleti_programma_ta");
			?>
			</div>
			<div id="tabs-3">
			Ανανεώστε τη σελίδα σε κάθε αλλαγή στην καρτέλα "ωράριο εργασίας" ώστε να επαναφορτωθεί το πρόγραμμα του Ιατρού εργασίας.<br/>
			<?php
			echo draw_calendar($trexon_y,"meleti_programma_ie");
			?>
			</div>
			
			<div id="tabs-4">
			<img src="images/extras.png"><br/>
			Εδώ αναγράφονται οι ελάχιστες ώρες απασχόλησης που θα πρέπει να δηλώσει ο Τ.Α. και ο Ι.Ε. ανάλογα με την κατηγορία της επιχείρησης 
			και τον αριθμό των εργαζομένων όπως δηλώθηκαν. Παρακάτω αναγράφονται οι συνολικές ώρες των προγραμμάτων που έχουν δηλωθεί για τον 
			Τ.Α. και τον Ι.Ε. και ελέγχονται αν υπερκαλύπτονται τα γεγονότα.<br/><br/>
			<h1>Ελάχιστες ώρες εργασίας Τ.Α. και Ι.Ε.</h1>
			
			<?php
			$el_wres = elaxistes_wres();
			echo "Τεχνικός ασφαλείας: ".$el_wres[0]."<br/>";
			echo "Ιατρός εργασίας: ".$el_wres[1]."<br/>";
			?>
			
			<h1>Ώρες εργασίας Τ.Α. και Ι.Ε. (βάση προγράμματος)</h1>
			
			<?php
			$wres = programma_wres();
			echo "Τεχνικός ασφαλείας: ".$wres[0]."<br/>";
			echo "Ιατρός εργασίας: ".$wres[1]."<br/>";
			?>
			
			<h1>Γεγονότα που υπερκαλύπτεται το ωράριο:</h1>
			<?php			
			echo print_overlaping("meleti_programma_ta");
			echo print_overlaping("meleti_programma_ie");
			?>
			</div>
		
		
			</div>
		</div>
	</div>
</div>