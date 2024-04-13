<script src="assets/js/webfont/webfont.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="assets/plugin/DataTables/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<script src="script.js"></script>
<script src="charts.js"></script>

<script>

$(document).ready( function () {
    $('#libtable').DataTable();
} );

</script>

<script type="text/javascript">

function updateClock() {
            var now = new Date();
            var dn = now.getDay(),
                mm = now.getMonth(),
                dd = now.getDate(),
                yr = now.getFullYear(),
                hr = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pr = "AM";

            if (hr == 0) {
                hr = 12;
            }
            if (hr > 12) {
                hr = hr - 12;
                pr = "PM";
            }

            Number.prototype.pad = function(digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursay", "Friday", "Saturday"];
            var ids = ["today", "month", "day", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dn], month[mm], dd.pad(2), yr.pad(2), hr.pad(2), min.pad(2), sec.pad(2), pr];

            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];

        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }

</script>