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

require("include_check.php");
confirm_logged_in();
?>
<div class="container-fluid">
	<div class="row-fluid">
	
		<div class="span2">
			    <div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h4>Πηγές κινδύνου</h4>
				Επιλέξτε την πηγή του κινδύνου στην εργασία και έπειτα επιλέξτε την τιμή της 
				σοβαρότητας, έκθεσης και πιθανότητας. Η κλίμακα της έκθεσης και πιθανότητας εμφανίζεται με 
				γραμμικούς συντελεστές βαρύτητας ενώ η κλίμακα της σοβαρότητας με διαβαθμισμένους 
				συντελεστές βαρύτητας. <br/><br/>
				Η τιμή της επικινδυνότητας προκύπτει ως γινόμενο των 3 συντελεστών βαρύτητας.<br/><br/>
				Έπειτα περιγράφεται η τιμή της επικινδυνότητας ανάλογα με την κατηγορία και προτείνονται οι 
				απαραίτητες ενέργειες για την μείωση της τιμής της.
				</div>
		</div>
		
		<div class="span10">
			<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Πηγές κινδύνου</a></li>
				<li><a href="#tabs-2">Μετρήσεις</a></li>
				<li><a href="#tabs-3">Έλεγχοι εξοπλισμού</a></li>
				<li><a href="#tabs-4" onclick="get_epikindynotita();">Επικινδυνότητα (προεπισκόπηση)</a></li>
			</ul>
			
			<div id="tabs-1">
			<?php 
				$ped="meleti_piges";
				$dig="0|0|0|0|0|0|0|0|0|0|0|0|0";
				$tb_name="meleti_piges";
				$tb_title = "Πηγές κινδύνου";
				$fields="fields: {
					id: {key: true,create: false,edit: false,list: false},
					user_id: {create: false,edit: false,list: false},
					meleti_id: {create: false,edit: false,list: false},
					ktirio_id: {title: 'Κτίριο',width: '20%',listClass: 'center',options: ".getktiria()."},
					type: {title: 'Πηγές κινδύνου',width: '20%',listClass: 'center',options: ".getpigesk()."},
					perigrafi: {title: 'Περιγραφή',width: '20%',listClass: 'center'},
					sobarotita: {title: 'Σοβαρότητα',width: '5%',listClass: 'center',options: 
						{
						'1':'1-Αμελητέα',
						'2':'4-Σημαντική',
						'3':'8-Σοβαρή',
						'4':'16-Πολύ σοβαρή',
						'5':'25-Καταστρεπτική'
						}},
					ekthesi: {title: 'Έκθεση',width: '5%',listClass: 'center',options: 
						{
						'1':'1-Πολύ σπάνια',
						'2':'2-Περιορισμένη',
						'3':'3-Ευκαιριακή',
						'4':'4-Συχνή',
						'5':'5-Διαρκής'
						}},
					pithanotita: {title: 'Πιθανότητα',width: '5%',listClass: 'center',options: 
						{
						'1':'1-Μηδενική',
						'2':'2-Πολύ μικρή',
						'3':'3-Μικρή',
						'4':'4-Μεσαία',
						'5':'5-Υψηλή'
						}},
					provlepsi: {title: 'Πρόβλεψη',width: '10%',listClass: 'center',options: 
						{
						'1':'Ναι',
						'2':'Όχι'
						}},
					metra: {title: 'Μέτρα εξάλειψης',width: '15%',listClass: 'center', type: 'textarea'}		
				}";
				include('includes/jtable.php');
			?>	
			</div>
			
			<div id="tabs-2">
			<?php 
				$ped="meleti_measurements";
				$dig="0|0|0|0|0|0|0|0|0|0|0|0|0";
				$tb_name="meleti_measurements";
				$tb_title = "Επιτόπιες μετρήσεις";
				$fields="fields: {
					id: {key: true,create: false,edit: false,list: false},
					user_id: {create: false,edit: false,list: false},
					meleti_id: {create: false,edit: false,list: false},
					ktirio_id: {title: 'Κτίριο',width: '10%',listClass: 'center',options: ".getktiria()."},
					type: {title: 'Τύπος',width: '10%',listClass: 'center'},
					thesi: {title: 'Θέση μέτρησης',width: '10%',listClass: 'center'},
					date: {title: 'Ημ/νια',width: '10%',listClass: 'center', type: 'date', displayFormat: 'yy-mm-dd'},
					value: {title: 'Τιμή μέτρησης',width: '10%',listClass: 'center'},
					unit: {title: 'Μονάδα',width: '10%',listClass: 'center'},
					provlepsi: {title: 'Πρόβλεψη πρόληψης',width: '15%',listClass: 'center',options: 
						{
						'1':'Ναι',
						'2':'Όχι'
						}},
					metra: {title: 'Πρόσθετα μέτρα',width: '35%',listClass: 'center', type: 'textarea'}	
				}";
				include('includes/jtable.php');
			?>
			Προσθέστε εδώ τις παραμέτρους τις οποίες μετράτε κατά τις επισκέψεις σας στο χώρο της επιχείρησης όπως τιμές θορύβου, τιμές χημικών παραγόντων, φωτισμού κλπ.
			</div>
			
			<div id="tabs-3"> 
			<?php 
				$ped="meleti_taktikoielegxoi";
				$dig="0|0|0|0|0|0|0|0|0|0|0|0|0";
				$tb_name="meleti_taktikoielegxoi";
				$tb_title = "Τακτικοί έλεγχοι εξοπλισμού";
				$fields="fields: {
					id: {key: true,create: false,edit: false,list: false},
					user_id: {create: false,edit: false,list: false},
					meleti_id: {create: false,edit: false,list: false},
					type: {title: 'Τύπος ελέγχου',width: '20%',listClass: 'center'},
					date: {title: 'Ημ/νία ελέγχου',width: '20%',listClass: 'center', type: 'date', displayFormat: 'yy-mm-dd'},
					name: {title: 'Όνομα ελεγκτή',width: '20%',listClass: 'center'},
					eidikotita: {title: 'Ειδικότητα ελεγκτή',width: '20%',listClass: 'center'},
					sxolia: {title: 'Παρατηρήσεις',width: '20%',listClass: 'center'}
				}";
				include('includes/jtable.php');
			?>
			
			</div>
			
			<div id="tabs-4"> 
			<div id="check_epikindynotita"></div>
			<div id='wait' style="display:none;position:absolute;top:130px;left:500px;"><img src="images/ajax-loader.gif"></div>
			<script>
			function get_epikindynotita(){
				document.getElementById('wait').style.display="inline";
				//AJAX call
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.onreadystatechange=function()  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("check_epikindynotita").innerHTML=xmlhttp.responseText;
					document.getElementById('wait').style.display="none";
				}}
				xmlhttp.open("GET","includes/functions_epikindynotita.php?epikindynotita=1",true);
				xmlhttp.send();
			}
			get_epikindynotita();
			</script>
<!--
			Ανανεώστε τη σελίδα μετά την προσθήκη δεδομένων στην καρτέλα "Πηγές κινδύνου" για προεπισκόπηση των αποτελεσμάτων. 
			<?php
			echo calc_epikindynotita();
			?>
-->
			</div>
		
		
			</div>
		</div>
	</div>
</div>
