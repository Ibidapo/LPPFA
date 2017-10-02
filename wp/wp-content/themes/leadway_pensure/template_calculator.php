<?php /* Template Name: Calculator */ ?>

<?php

?>

<?php get_header(); ?>
<!-- Body of Disclaimer  -->
<div class="container-fluid" id="disclaim-overlay">
    <div class="row">
         <div class="col-12 col-md-6" style="border-right:1px solid white"> 

           <h4 class="hidden-sm-down text-center">COMPOUND INTEREST CALCULATOR</h4>
            <h5 class="hidden-md-up text-center">COMPOUND INTEREST CALCULATOR</h5>
            <p class="text-center">Use our compound interest calculator to plan your resources over time.</p>
            <ul class="text-center" style="list-style-type: none">
                <li>Input values to activate dynamic graph <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calc-list1.png"/></li>
                <li>Review graphs to analyze wealth valuation <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calc-list2.png"/></li>
                <li>Enroll for Pension Plan immediately <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calc-list3.png"/></li>
            </ul>

         </div> 
<div class="col-12 col-md-6" style=""> 
     
        <h4 class="hidden-sm-down text-center">DISCLAIMER</h4>
            <h5 class="hidden-md-up text-center">DISCLAIMER</h5>
            <p class="text-center">The Calculator on this page is indicating and strictly for information purposes. Leadway Pensure PFA's obligations
                with respect to its services on this page are governed solely by the agreements under which they are provided and
                nothing hereof should be construed to alter such 'Service' agreements".</p>
            <div class="text-center"><a href="#" class="btn btn-outline-white" id="agree">I agree</a>
                <a href="/" class="btn btn-outline-white">I do not agree</a>
            </div>

         </div>
        </div>
    </div>
<!-- disclaimer content 

        <div class="col-12 col-md-10 offset-md-1 text-center">
           
        </div>
    </div>
   
</div>
--> 
<!-- Body of Calculator Page -->
<div class="container" id="calc-page">
    <div class="row" style="margin-top: 1rem">
        <div class="hidden-sm-down col-12 text-center"><h3>PENSURE CALCULATOR</h3></div>
        <div class="hidden-md-up col-12 text-center"><h5>PENSURE CALCULATOR</h5></div>
        <div class="col-12">
            <a class="btn btn-outline-blue-sm d-claim" data-toggle="collapse" href="#d-claim" aria-expanded="false" aria-controls="d-claim">Disclaimer</a>
            <div class="collapse" id="d-claim">
                <div class="row">
                    <div class="col-md-6" id="blue-vr">
                        <?= get_field("disclaimer_col_1"); ?>
                    </div>
                    <div class="col-md-6">
                        <?= get_field("disclaimer_col_2"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center"><h5>How much do I need to contribute monthly to get my desired Pension?</h5></div>
        <div class="col-md-6" id="des-monthly">
            <form>
                <div class="form-group row">
                    <label for="des-col" class="col-6 col-md-7 col-form-label">Desired Monthly Pension payment after retirement(₦)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="des-col" placeholder="e.g. 100000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="des-ret" class="col-6 col-md-7 col-form-label">How long do you have to retirement?(Yr)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="des-ret" placeholder="e.g. 15">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="des-int" class="col-6 col-md-7 col-form-label">Desired interest rate on your pensions(%)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="des-int" placeholder="e.g. 8">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="des-pen" class="col-6 col-md-7 col-form-label">For how long will you collect pension?(Yr)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="des-pen" placeholder="e.g. 10">
                    </div>
                </div>
                <fieldset disabled>
                    <div class="form-group row">
                        <label for="req-rsa" class="col-6 col-md-7 col-form-label">Your required RSA balance is:</label>
                        <div class="col-6 col-md-5">
                            <input class="form-control" type="text" id="req-rsa" placeholder="Result displays here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="monthly-contr" class="col-6 col-md-7 col-form-label">Your required Monthly contribution is:</label>
                        <div class="col-6 col-md-5">
                            <input class="form-control" type="text" id="monthly-contr" placeholder="Result displays here">
                        </div>
                    </div>
                </fieldset>
            </form>
            <div class="text-center">
                <button class="btn btn-primary" id="des-calc">Calculate</button>
            </div>
        </div>
        <div class="col-md-6">
            <div id="des-chart"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center"><h5>Based on my current contributions, how much can I collect when I retire?</h5></div>
        <div class="col-md-6" id="pro-monthly">
            <form>
                <div class="form-group row">
                    <label for="lump" class="col-6 col-md-7 col-form-label">Lump Sum initial amount(if any)?(₦)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="lump" placeholder="e.g. 2500000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mon-cont" class="col-6 col-md-7 col-form-label">How much do you contribute monthly?(₦)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="mon-cont" placeholder="e.g. 100000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="yr-ret" class="col-6 col-md-7 col-form-label">How many years do you have to retirement?(Yr)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="yr-ret" placeholder="e.g. 15">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pen-int" class="col-6 col-md-7 col-form-label">Desired interest rate on your pensions (%)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="pen-int" placeholder="e.g. 8">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="yr-col" class="col-6 col-md-7 col-form-label">For how long will you collect pension?(Yr)</label>
                    <div class="col-6 col-md-5">
                        <input class="form-control" type="number" id="yr-col" placeholder="e.g. 10">
                    </div>
                </div>
                <fieldset disabled>
                    <div class="form-group row">
                        <label for="closing-rsa" class="col-6 col-md-7 col-form-label">Your closing RSA balance is:</label>
                        <div class="col-6 col-md-5">
                            <input class="form-control" type="text" id="closing-rsa" placeholder="Result displays here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="monthly-pen" class="col-6 col-md-7 col-form-label">Your monthly Pension allowance is:</label>
                        <div class="col-6 col-md-5">
                            <input class="form-control" type="text" id="monthly-pen" placeholder="Result displays here">
                        </div>
                    </div>
                </fieldset>
            </form>
            <div class="text-center">
                <button class="btn btn-primary" id="calc">Calculate</button>
            </div>
        </div>
        <div class="col-md-6">
            <div id="pen-chart"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 calc-nb">
            <span>Disclaimer</span>: <?= get_field("disclaimer_bottom_text") ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/accounting.min.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
    $(document).ready(function(){

        $('#agree').click(function () {
            $('#disclaim-overlay').fadeOut();
        });

        function roundToTwo(num) {
            return +(Math.round(num + "e+2") + "e-2");
        }

        accounting.settings = {
            currency: {
                symbol : "₦",   // default currency symbol is '$'
                format: "%s%v", // controls output: %s = symbol, %v = value/number (can be object: see below)
                decimal : ".",  // decimal point separator
                thousand: ",",  // thousands separator
                precision : 2   // decimal places
            },
            number: {
                precision : 2,  // default precision on numbers is 0
                thousand: ",",
                decimal : "."
            }
        };

        var penChart =  Highcharts.chart('pen-chart', {

            chart: {
                type: 'column'
            },

            title: {
                text: 'RSA Balance Projection'
            },

            xAxis: {
                type: 'linear',
                tickInterval: 1
            },

            yAxis: {
                title: {
                    text: 'Money Value'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },

            plotOptions: {
                series: {
                    pointStart: (new Date()).getFullYear()
                }
            },

            series: [{
                name: 'Yearly Balance',
                data: []
            }]

        });
        var desChart = Highcharts.chart('des-chart', {

            chart: {
                type: 'column'
            },

            title: {
                text: 'RSA Balance Projection'
            },

            xAxis: {
                type: 'linear',
                tickInterval: 1
            },

            yAxis: {
                title: {
                    text: 'Money Value'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },

            plotOptions: {
                series: {
                    pointStart: (new Date()).getFullYear()
                }
            },

            series: [{
                name: 'Yearly Balance',
                data: []
            }]

        });

        $('#des-calc').click(function(){

            var isValid = true;
            $('#des-monthly input[type="number"]').each(function() {
                if ($.trim($(this).val()) == '') {
                    isValid = false;
                    $(this).css({"background": "#FFCECE"}).attr("placeholder", "*Field is required*");
                } else {
                    $(this).css({"background": ""});
                }
            });

            if (isValid == false) {
                event.preventDefault();
            } else {

                var smallC = Number($('input[id=des-col]').val());
                var yrsRetire = Number($('input[id=des-ret]').val());
                var return1 = Number($('input[id=des-int]').val());
                var tenor1 = Number($('input[id=des-pen]').val());
                var years = 12;

                var contrmonth = yrsRetire * 12;
                var rtt = return1 / 100;
                var rateret = rtt / 12;
                var bbb = Math.pow((1 + rateret), years);
                var bigC = smallC * ((1 / rateret) - (1 / (rateret * bbb)));
                var ccc = Math.pow((1 + rtt), tenor1);
                var fv = bigC * ((1 / rtt) - (1 / (rtt * ccc)));
                var ddd = Math.pow((1 + rateret), contrmonth);
                var pmt = fv / ((ddd - 1) / rateret);

                var fvShow = accounting.formatMoney(fv);
                var pmtShow = accounting.formatMoney(pmt);
                pmt = roundToTwo(pmt);

                $("#req-rsa").val(fvShow);
                $("#monthly-contr").val(pmtShow);

                var desData = [];
                var yrContr = pmt * 12;
                var newYrContr = roundToTwo(yrContr);

                for (var i = 0; i < yrsRetire; i++){
                    desData.push(newYrContr);
                    newYrContr += yrContr;
                    newYrContr = roundToTwo(newYrContr);
                }

                desChart.series[0].setData(desData);
            }
        });

        $('#calc').click(function(){

            var isValid = true;
            $('#pro-monthly input[type="number"]').each(function() {
                if ($.trim($(this).val()) == '') {
                    isValid = false;
                    $(this).css({"background": "#FFCECE"}).attr("placeholder", "*Field is Required*");
                } else {
                    $(this).css({"background": ""});
                }
            });

            if (isValid == false) {
                event.preventDefault();
            } else {

                var n2 = Number($('input[id=yr-ret]').val());
                var r2 = Number($('input[id=pen-int]').val());
                var openbal = Number($('input[id=lump]').val());
                var pmt1 = Number($('input[id=mon-cont]').val());
                var T2 = Number($('input[id=yr-col]').val());
                var smallt = 1;

                var N = n2 * 12;
                var rtt1 = r2 / 100;
                var rateret2 = rtt1 / 12;
                var eee = Math.pow((1 + rateret2), smallt);
                var ans = (1 / rateret2) - (1 / (rateret2 * eee));
                var fff = Math.pow((1 + rateret2), N);
                var fv1 = (openbal * fff) + (pmt1 * ((fff - 1) / rateret2));
                var hhh = Math.pow((1 + rtt1), T2);
                var C1 = fv1 / ((1 / rtt1) - (1 / (rtt1 * hhh)));
                var tc = C1 / ans;
                var contr = tc / 12;

                fv1 = accounting.formatMoney(fv1);
                contr = accounting.formatMoney(contr);

                $("#closing-rsa").val(fv1);
                $("#monthly-pen").val(contr);

                var data = [];
                var yrContr = (pmt1 * 12) + ((pmt1 * 12 * r2) / 100);
                var openBalance = openbal + yrContr;
                openBalance = roundToTwo(openBalance);

                for (var i = 0; i < n2; i++) {
                    data.push(openBalance);
                    openBalance += yrContr;
                    openBalance = roundToTwo(openBalance);
                }

                penChart.series[0].setData(data);
            }
        });

        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            document.getElementById("calc-page").setAttribute("class", "container-fluid");
        } else {
            document.getElementById("calc-page").setAttribute("class", "container");
        }
    });
</script>

</body>
</html>