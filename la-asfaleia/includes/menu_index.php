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
?>
<div class="hero-unit">
<h1>Συγχαρητήρια!</h1>
<p>Αναλάβατε τεχνικός ασφαλείας σε μια επιχείρηση. Πόσο εύκολος είναι ο ρόλος του τεχνικού ασφαλείας στον παραγωγικό τομέα όμως;</p>
<p>
</div>
<img src="images/person.png"><br/>
Το λογισμικό <span class="label label-important">la-asfaleia</span> υλοποιήθηκε με στόχο την παροχή βοήθειας σε θέματα υγειινής και ασφάλειας για το ευρύ κοινό αλλά πιο συγκεκριμένα 
για τους συναδέλφους τεχνικούς ασφαλείας. <br/><br/>
<span class="badge badge-inverse">1</span>Ο πρώτος στόχος αφορά την ενημέρωση σχετικά με τη νομοθεσία, τους ενδεχόμενους κινδύνους που προκύπτουν κατά την εργασία και τα μέτρα 
πρόληψης που μπορούν να εκμηδενίσουν τα -πλέον συχνά στη χώρα μας- εργατικά ατυχήματα. <br/><br/>
<span class="badge badge-inverse">2</span>Ο δεύτερος στόχος αφορά το τεχνικό κομμάτι της εκτίμησης επαγγελματικών κινδύνων σε κάθε επιχείρηση. Η συγκεκριμένη εργασία του τεχνικού 
ασφαλείας αποτελεί ίσως το σημαντικότερο κομμάτι της δουλειάς του σε κάθε επιχείρηση. Η γνώση είναι σίγουρα δύναμη για τον άνθρωπο που πρέπει 
να δει, να εκτιμήσει και ενδεχομένως να μετρήσει τις πηγές κινδύνου και έπειτα να ενημερώσει τον εργοδότη προτείνοντας τα κατάλληλα μέτρα πρόληψης. 
Η εκτίμηση επαγγελματικών κινδύνων βάση της εγχώριας νομοθεσίας δεν υπόκειται σε συγκεκριμένη αναγκαστική μεθοδολογία. Άλλωστε κάθε επιχείρηση 
έχει τις ιδιαιτερότητές της και η μεθοδολογία που ακολουθείται για την εκτίμηση επαγγελματικών κινδύνων συνήθως ξεκινά από το μηδέν. Στη διεθνή 
βιβλιογραφία όμως όπως και σε δημοσιεύσεις υπάρχουν γενικοί κανόνες που μπορεί να ακολουθήσει ο Τ.Α. ώστε να ποσοτικοποιήσει τους 
ενδεχόμενους κινδύνους και ανάλογα με τα αποτελέσματα να προτείνει μέτρα ώστε να αποτρέψει δυσάρεστες για το προσωπικό αλλά και για τον εργοδότη 
καταστάσεις. <br/><br/>
Το λογισμικό αυτό έρχεται να δώσει τη "βάση" από όπου μπορεί να ξεκινήσει ο Τ.Α. για να υλοποιήσει την εκτίμηση επαγγελματικών κινδύνων. Είναι απλό 
στη μορφή του και στη χρήση του καθώς υλοποιήθηκε από συναδέλφους για συναδέλφους. Εύχομαι να το απολαύσετε.

<br/><br/>
<a href="#peri_popup" role="button" class="btn" data-toggle="modal">Περί...</a>
<a href="#contributors_popup" role="button" class="btn" data-toggle="modal">Συντελεστές</a>
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>
<a href="JavaScript:newPopup('../chat2/');" role="button" class="btn">Chat with users</a>


<!-- ###################### Κρυφό peri_popup για εμφάνιση ###################### -->
<div id="peri_popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">la-asfaleia v.
<?php
echo APPLICATION_VERSION;
?>
</h3>
</div>
<div class="modal-body">
<p>
<b>Το λογισμικό αυτό είναι "ανοιχτού κώδικα":</b><br/>
Το λογισμικό αυτό διανέμεται δωρεάν σύμφωνα με τους όρους της άδειας <span class="label label-important">GPLv3</span>. Ο κώδικας πρέπει να παραμένει ελεύθερος όταν το 
λογισμικό τροποποιείται ή διανέμεται. Εάν πληρώσατε γι' αυτό το λογισμικό ζητήστε τα χρήματά σας πίσω και επικοινωνήστε με το δημιουργό. <br/>
Το λογισμικό διανέμεται "ως έχει" χωρίς καμία υποστήριξη. Ο δημιουργός δεν μπορεί να θεωρηθεί υπεύθυνος για τυχόν λάθη στα αποτελέσματα ή/και 
άλλες δυσάρεστες καταστάσεις στην περίπτωση που ο χρήστης του λογισμικού βασιστεί στα αποτελέσματα που εμφανίζονται εντός του λογισμικού.<br/><br/>

<b>Το λογισμικό αυτό είναι "server side":</b><br/>
Η γλώσσα που χρησιμοποιήθηκε ήταν κατά κύριο λόγο η php. Η php νοείται ως server side καθώς εκτελείται στο σέρβερ χωρίς να έχει ο χρήστης πρόσβαση στον κώδικα. Ο χρήστης καλεί 
κάθε φορά αρχεία με κώδικα php (κατάληξη .php) αυτά εκτελούνται στο server (ο υπολογιστής που βρίσκεται εγκατεστημένο το λογισμικό) και επιστρέφεται το αποτέλεσμα. Επακόλουθο είναι πως εξαιτίας 
αυτής της ιδιαιτερότητας ο χρήστης που επιδεικνύει στο κοινό το λογισμικό σε κάποιο domain ή αλλού πρέπει βάση της άδειας διανομής να δίνει κάποιο τρόπο πρόσβασης στον κώδικα εάν τον 
τροποποίησε έστω και στο ελάχιστο. Για του λόγου το αληθές μπορείτε να δοκιμάσετε να δείτε τον κώδικα του λογισμικού (πατώντας ctrl+U σε Mozilla Firefox) στον οποίο δεν εμφανίζονται τα 
τμήματα της γλώσσας php. <br/><br/>

<b>Το λογισμικό αυτό είναι "OS Independent";</b><br/>
Αυτό σημαίνει πως δεν υπάρχει ελάχιστη απαίτηση ως προς το λειτουργικό σύστημα του χρήστη. Μπορεί επομένως να εγκατασταθεί σε υπολογιστή που λειτουργεί με οποιοδήποτε λειτουργικό σύστημα όπως: 
windows, linux, mac ακόμη και android.<br/><br/>

<b>Που επηρρεάζει η χρήση της γλώσσας προγραμματισμού;</b><br/>
Το λογισμικό επειδή ακριβώς νοείται ως server side μπορεί να εγκατασταθεί σε έναν υπολογιστή και η πρόσβαση να γίνεται από άλλον ή άλλους υπολογιστές ταυτόχρονα. Αυτό διευκολύνει την 
πρόσβαση στο λογισμικό και ευννοεί την πολυσυνεργασία. Εάν βρίσκεστε σε ένα γραφείο με 2 υπολογιστές μπορείτε να εγκαταστήσετε το λογισμικό στον 1 και να έχετε πρόσβαση και από τους 2.<br/><br/>

<b>Ποιές άλλες γλώσσες προγραμματισμού χρησιμοποιήθηκαν;</b><br/>
Πέραν της php χρησιμοποιήθηκε σε μικρότερο βαθμό η javascript (εκτελείται τοπικά στον υπολογιστή του χρήστη) ενώ ως βάση δεδομένων χρησιμοποιήθηκε η Mysql. <br/><br/>

<b>Τι άλλο χρησιμοποιήθηκε;</b><br/>
Για να υλοποιηθεί το λογισμικό χρησιμοποιήθηκαν βιβλιοθήκες (css,js,php,pdf) χωρίς αυτές να τροποποιηθούν. Αυτές αναφέρονται με συνδέσμους παρακάτω. Εδώ πρέπει να τονιστεί πως οι βιβλιοθήκες 
που ενσωματώθηκαν στο λογισμικό είτε είχαν την ίδια άδεια διανομής (gplv3) είτε άλλες άδειες (ΜΙΤ,Apache) οι οποίες όμως μπορούν να ενσωματωθούν στην άδεια διανομής του λογισμικού (gplv3). 
Θεωρούνται δηλαδή gplv3 compatible. Κάθε αρχείο φέρει στην κορυφή την άδεια καθώς και τις τροποποιήσεις του.<br/><br/>

<b>Μπορώ να πάρω αυτό το λογισμικό για να το επεκτείνω ή φτιάξω κάτι άλλο;</b><br/>
Φυσικά! Αυτό είναι άλλωστε και το σκεπτικό. Μοναδική προυπόθεση είναι να παραμένει ο κώδικας ελεύθερος. <br/><br/>

<b>Με ενδιαφέρει πολύ το προσωπικό απόρρητο. Τι γίνεται εκεί;</b><br/>
Το λογισμικό χρησιμοποιεί sessions. Αποθηκεύει δηλαδή κατά τη σύνδεση του χρήστη το id του χρήστη (από τη βάση δεδομένων) για να του δείξει πχ τις μελέτες του στο επόμενο μενού. 
Το ίδιο και με το id της μελέτης για να "θυμάται" σε ποιά μελέτη δουλεύετε κάθε φορά. Πέραν των id και του ονόματος χρήστη και μελέτης δεν αποθηκεύει άλλα προσωπικά δεδομένα 
σεβόμενο την ιδιωτικότητα του χρήστη. Στη βάση δεδομένων αποθηκεύονται πρόσθετα στοιχεία για το χρήστη τα οποία κρατώνται εκεί για την εκτύπωση των εντύπων, του τεύχους κλπ. 
Οποιαδήποτε στιγμή ο χρήστης μπορεί να διαγράψει (να "αδειάσει") τα στοιχεία αυτά από το λογαριασμό του.<br/><br/>
</p>
<p>
<img src="images/libraries/php-med-trans.png">
<img src="images/libraries/powered-by-mysql.png">
<img src="images/libraries/phpmyadmin_logo.png" width="48" height="48"><br/>

<img src="images/libraries/bootstrap-logo.png" width="48" height="48">
<img src="images/libraries/logo-jquery.png" width="48" height="48">
<img src="images/libraries/JQuery_UI_logo.png" width="200" height="48"><br/>

<img src="images/libraries/tcpdf_logo.png" width="48" height="48">
<img src="images/libraries/ckeditor_logo.png" width="48" height="48">
<img src="images/libraries/medoo-logo-256.png" width="48" height="48"><br/>

Επίσης:<br/>
<ul>
<li>jQuery timepicker addon</li>
</ul>

</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Το 'πιασα!</button>
</div>
</div>
<!-- ######################### Κρυφό div για εμφάνιση ######################### -->

<!-- ###################### Κρυφό contributors_popup για εμφάνιση ###################### -->
<div id="contributors_popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Συντελεστές</h3>
</div>
<div class="modal-body">
<p>
Εδώ αναφέρονται οι συντελεστές του προγράμματος. Είναι όλοι οι συνάδελφοι μηχανικοί, προγραμματιστές και άλλοι που χωρίς αυτούς το λογισμικό 
αυτό δεν θα μπορούσε να υλοποιηθεί. Ο καθένας βοήθησε με τον δικό του τρόπο προσθέτοντας και κάτι στο σύνολο. <br/><br/>
<span class="label label-important">Main Developers</span><br/>
<ul>
<li>Λάμπρος Καρούντζος<br/>
Ασχολήθηκε με το development του la-asfaleia. Η πρώτη διανομή του la-asfaleia.</li>
<li>Κώστας Τσακίρης<br/>
Ασχολήθηκε με το development του la-kenak. Πολλές ιδέες από εκείνο το λογισμικό χρησιμοποιούνται και εδώ.</li>
</ul>
<span class="label label-success">Μηχανικοί</span><br/>
<ul>
<li>Κώστας Διδώνης<br/>
Έδωσε ιδέες για το αρχικό "στήσιμο" του λογισμικού σε server καθώς και ιδέες για την λειτουργικότητα.</li>
</ul>
<span class="label label-Info">Κείμενα</span><br/>
Τα κείμενα του λογισμικού έχουν αναφορά σε βιβλιογραφικές πηγές είτε παρήχθησαν εκ του μηδενός.<br/>
<span class="label label-warning">Μεταφράσεις</span><br/>
Δεν υπάρχουν ακόμα μεταφράσεις του λογισμικού.<br/>
<span class="label label-inverse">Ιδέες</span><br/>
<ul>
<li>TakisX (michanikos.gr)<br/>
Έδωσε ιδέες για τη χρήση check-list στο λογισμικό.</li>
</ul>
</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Τους ευχαριστώ!</button>
</div>
</div>
<!-- ######################### Κρυφό div για εμφάνιση ######################### -->