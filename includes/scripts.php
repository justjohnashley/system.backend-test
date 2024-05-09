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
        $('#libtable2').DataTable();
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

        var SummaryPie = document.getElementById("CircPie");
        if (SummaryPie) {
            new Chart(CircPie, {
                type: 'pie',
                data: Circulation,
                options: {
                    legend: {
                        display: false
                    },
                    responsive: true, 
                maintainAspectRatio: false
                }
            });
        }
    </script>

<script>
        var MCirc = document.getElementById("CircBar");
        if (MCirc) {
            new Chart(CircBar, {
                type: 'bar',
                data: <?php echo json_encode($barChartData); ?>,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    scales: {
                        xAxes: [{
                            barPercentage: 0.4,
                            categoryPercentage: 0.5
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            }
                        }]
                    }
                }
            });
        }
    </script>

<script>
    var CTotal = <?php echo json_encode($CircTotal); ?>;

    var CsTotal = document.getElementById("CircDonut");
    if (CsTotal) {
        new Chart(CsTotal, {
            type: 'doughnut',
            data: CTotal,
            options: {
                legend: {
                    display: false
                },
                responsive: true, 
                maintainAspectRatio: false
                
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

<script>

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById('validation'); 

    form.setAttribute('novalidate', true);

    form.addEventListener('submit', function(event) {
        var isValid = true;
        var inputs = form.querySelectorAll('input[type=text]'); 

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                input.classList.add('is-invalid');
                isValid = false; 
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            event.preventDefault(); 
            event.stopPropagation(); 
            alert('Please fill out the following fields correctly.');
        }
    });
    form.querySelectorAll('input').forEach(function(input) {
        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            }
        });
    });
    var yearInput = document.getElementById('year');

    yearInput.addEventListener('input', function() {
        var year = parseInt(this.value);
        var currentYear = new Date().getFullYear();

        if (isNaN(year) || year < 1800 || year > currentYear) {
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
        }
    });

    var isbnInput = document.getElementById('isbnumber');

    isbnInput.addEventListener('input', function() {
        var isbn = this.value.trim();
        var isValid = false;

        if (isbn.length === 10 || isbn.length === 13) {
            isValid = true;
            for (var i = 0; i < isbn.length; i++) {
                if (isNaN(parseInt(isbn[i]))) {
                    isValid = false;
                    break;
                }
            }
        }

        if (!isValid) {
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
        }
    });
});
</script>