<script src="assets/js/webfont/webfont.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="assets/plugin/DataTables/datatables.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/charts.js"></script>


<script src="assets/js/script.js"></script>
<script src="charts.js"></script>

<script>

    $(document).ready(function () {
        $('#libtable').DataTable();
    });

    $(document).ready(function () {
        $('#logtable1').DataTable();
    });

    $(document).ready(function () {
        $('#logtable2').DataTable();
    });


</script>

<script>
        var Circulation = <?php echo json_encode($CSumPie); ?>;

        var SummaryPie = document.getElementById("chDonut");
        if (SummaryPie) {
            new Chart(chDonut, {
                type: 'pie',
                data: Circulation,
                options: {
                    legend: {
                        display: false
                    }
                }
            });
        }
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
            pr = hr >= 12 ? "PM" : "AM";

        if (hr == 0) {
            hr = 12;
        }
        if (hr > 12) {
            hr = hr - 12;
            pr = "PM";
        }

        Number.prototype.pad = function (digits) {
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            var alertBoxes = document.querySelectorAll('.alert');
            alertBoxes.forEach(function (alertBox) {
                alertBox.style.transition = 'opacity 1s';
                alertBox.style.opacity = '0';
                setTimeout(function () {
                    alertBox.style.display = 'none';
                }, 1000);
            });
        }, 5000);
    });
</script>