<?php /* Template Name: FAQs */ ?>

<?php
$general_faqs = get_field("general_faqs");
$contribution_faqs = get_field("contribution_faqs");
$retirement_faqs = get_field("retirement_faqs");
$retiree_funds_faqs = get_field("retiree_funds_faqs");

?>

<?php get_header(); ?>

<!-- Main Body of Page and Content -->
<div class="container" id="m-top">
    <div class="row" id="faq">
        <div class="col-12">
            <h3 class="text-center">General FAQs</h3>
            <div id="accordion7" role="tablist" aria-multiselectable="true">
                <?php foreach($general_faqs as $key => $faq): $num=$key+1?>
                <div class="card">
                    <div class="card-header" role="tab" id="gen<?= $num ?>">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion7" href="#emp<?= $num ?>" aria-expanded="true" aria-controls="emp<?= $num ?>">
                                <?= $faq['title'] ?>
                            </a>
                        </h5>
                    </div>
                    <div id="emp<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="gen<?= $num ?>">
                        <div class="card-block">
                            <?= $faq['content'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center">FAQs on Contributions</h3>
            <div id="accordion8" role="tablist" aria-multiselectable="true">
                <?php foreach($contribution_faqs as $key => $faq): $num=$key+1?>
                    <div class="card">
                        <div class="card-header" role="tab" id="contr<?= $num ?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion7" href="#cntr<?= $num ?>" aria-expanded="true" aria-controls="cntr<?= $num ?>">
                                    <?= $faq['title'] ?>
                                </a>
                            </h5>
                        </div>
                        <div id="cntr<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="cntr<?= $num ?>">
                            <div class="card-block">
                                <?= $faq['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center">FAQs on Retirement</h3>
            <div id="accordion9" role="tablist" aria-multiselectable="true">
                <?php foreach($retirement_faqs as $key => $faq): $num=$key+1?>
                    <div class="card">
                        <div class="card-header" role="tab" id="retr<?= $num ?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion7" href="#ret<?= $num ?>" aria-expanded="true" aria-controls="ret<?= $num ?>">
                                    <?= $faq['title'] ?>
                                </a>
                            </h5>
                        </div>
                        <div id="ret<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="ret<?= $num ?>">
                            <div class="card-block">
                                <?= $faq['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="col-12">
            <h3 class="text-center">FAQs on Retiree Fund</h3>
            <div id="accordion10" role="tablist" aria-multiselectable="true">
                <?php foreach($retiree_funds_faqs as $key => $faq): $num=$key+1?>
                    <div class="card">
                        <div class="card-header" role="tab" id="retrf1<?= $num ?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion7" href="#retf<?= $num ?>" aria-expanded="true" aria-controls="retf<?= $num ?>">
                                    <?= $faq['title'] ?>
                                </a>
                            </h5>
                        </div>
                        <div id="retf<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="retrf1<?= $num ?>">
                            <div class="card-block">
                                <?= $faq['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center">FAQs on the Multi-fund Structure</h3>
            <div id="accordion11" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="multi1">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion11" href="#str1" aria-expanded="true" aria-controls="str1">
                                What is the Multi-fund structure?
                            </a>
                        </h5>
                    </div>
                    <div id="str1" class="collapse show" role="tabpanel" aria-labelledby="multi1">
                        <div class="card-block">
                            The Multi-fund structure is a framework designed to align the retirement savings of contributors to
                            their risk appetite by maintaining four Funds with distinctly different tolerance for risk. The aggressive
                            fund (Fund I) would have a much higher allocation to variable income instrument than Fund II. Similarly,
                            Fund II’s allocation will be higher than Fund III’s allocation. Fund IV, the retiree Fund will have the
                            lowest allocation to variable income securities.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi2">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str2" aria-expanded="false" aria-controls="str2">
                                What are Variable Income Instruments?
                            </a>
                        </h5>
                    </div>
                    <div id="str2" class="collapse" role="tabpanel" aria-labelledby="multi2">
                        <div class="card-block">
                            A variable income Instrument refers to an investment whose terminal return profile is not predetermined
                            at the start of such an investment. Such an investment provides contributors a rate of return that is
                            dynamic and determined by market forces, thus greater risks as well as rewards. The PENCOM framework
                            defined Variable income instruments as the sum of a PFA’s investments in Ordinary Shares; Real Estate
                            Investment Trust; Infrastructure Funds; and Private Equity Funds.
                            <table class="table table-bordered text-center mx-auto">
                                <thead>
                                <tr>
                                    <th rowspan="2"> Fund Type - Default Description</th>
                                    <th colspan="2"> Exposure to Variable Investment Instruments</th>
                                </tr>
                                <tr>
                                    <th> Minimum</th>
                                    <th> Maximum</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Fund I – Based on individual choices</td>
                                    <td> 20% </td>
                                    <td> 75% </td>
                                </tr>
                                <tr>
                                    <td>Fund II – Contributors 49 years and lower</td>
                                    <td> 10% </td>
                                    <td> 55% </td>
                                </tr>
                                <tr>
                                    <td>Fund III – Contributors of 50 years and above</td>
                                    <td> 5% </td>
                                    <td> 20% </td>
                                </tr>
                                <tr>
                                    <td>Fund IV – Contributors in RSA Retirees</td>
                                    <td> 0% </td>
                                    <td> 10% </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi3">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str3" aria-expanded="false" aria-controls="str3">
                                Is the Multi-fund structure optional for PFAs?
                            </a>
                        </h5>
                    </div>
                    <div id="str3" class="collapse" role="tabpanel" aria-labelledby="multi3">
                        <div class="card-block">
                            The multi-fund structure is not optional. All PFAs will offer the Multi-fund Structure for their
                            RSA Fund. Nonetheless, there is a transition period of 6 months, effective from the commencement
                            date for all PFAs to stream-line their respective portfolios.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi4">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str4" aria-expanded="false" aria-controls="str4">
                                How does the Multi-fund structure differ from the old structure?
                            </a>
                        </h5>
                    </div>
                    <div id="str4" class="collapse" role="tabpanel" aria-labelledby="multi4">
                        <div class="card-block">
                            The old structure invested the funds of all RSA contributors with the same investment criteria
                            regardless of risk appetite and age. The multi-fund structure seeks to align contributor’s investments
                            with their age profile and risk appetite.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi5">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str5" aria-expanded="false" aria-controls="str5">
                                How do I know which Fund is suitable for me?
                            </a>
                        </h5>
                    </div>
                    <div id="str5" class="collapse" role="tabpanel" aria-labelledby="multi5">
                        <div class="card-block">
                            <p>Fund I is an aggressive Fund and it is targeted at contributors with a high risk appetite. It is also
                                suitable for young contributors who have a long time before they retire. The long duration ensures that
                                the contributors have enough time to realize potential gains and recover from potential losses that may
                                occur in variable income instruments. Contributors in this Fund must be younger than 50 years old.</p>
                            <p>Fund II is a balanced Fund and it is suitable for middle aged contribu-tors and those with a medium
                                risk appetite. It is designed to be less risky when compared to Fund I. All Contributors, other than
                                those who are retired may find Fund II suitable.</p>
                            <p>Fund III is a conservative Fund and it is designed for contributors close to retirement and contributors
                                with a low risk appetite. It is ideally suited to contributors between the ages of 50 and 60 years.
                                However, younger contributors may participate in this Fund.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi6">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str6" aria-expanded="false" aria-controls="str6">
                                When is the commencement date of the Multi-fund structure?
                            </a>
                        </h5>
                    </div>
                    <div id="str6" class="collapse" role="tabpanel" aria-labelledby="multi6">
                        <div class="card-block">
                            The Pension commission (PENCOM) will provide the operational framework for the implementation soon,
                            and then the multi-fund structure will commence. There is a transition period of 6 months from the
                            commencement date for all PFAs to streamline their respective portfolios.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi7">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str7" aria-expanded="false" aria-controls="str7">
                                Do I need to choose a Fund today?
                            </a>
                        </h5>
                    </div>
                    <div id="str7" class="collapse" role="tabpanel" aria-labelledby="multi7">
                        <div class="card-block">
                            You do not need to choose a Fund immediately. Leadway Pensure will allocate contributors to either
                            Fund II or Fund III based on their age at the time of implementation. Active Contributors who are below
                            50 years old will be assigned to Fund II and Active Contributors who are 50 years and above will be
                            assigned to Fund III. However, contributors who wish to be in Fund I or Fund II must make a formal
                            request to Leadway Pensure.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi8">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str8" aria-expanded="false" aria-controls="str8">
                                Can I switch to any fund of my choice?
                            </a>
                        </h5>
                    </div>
                    <div id="str8" class="collapse" role="tabpanel" aria-labelledby="multi8">
                        <div class="card-block">
                            A Retirement Savings Account (“RSA”) contributor under the age of 50 may switch between Fund III,
                            II and I by simply making a formal request to Leadway Pensure. An RSA contributor who is 50 years
                            and above may switch between Fund III and Fund II only. Such a contribu-tor will not be allowed to
                            choose Fund I.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi9">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str9" aria-expanded="false" aria-controls="str9">
                                How often can I switch between Fund types?
                            </a>
                        </h5>
                    </div>
                    <div id="str9" class="collapse" role="tabpanel" aria-labelledby="multi9">
                        <div class="card-block">
                            Once a formal application has been made to Leadway Pensure, an active Contributor may switch from
                            one Fund Type to another Fund Type once in 12 months without paying any fees. However, further requests
                            for switches will attract a fee which will be determined by the Pension Commission.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi10">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str10" aria-expanded="false" aria-controls="str10">
                                Will I be able to move back to the default fund?
                            </a>
                        </h5>
                    </div>
                    <div id="str10" class="collapse" role="tabpanel" aria-labelledby="multi10">
                        <div class="card-block">
                            Yes. Contributors can switch between funds as long as the age limits are not breached. However,
                            switches more than once in 12 months will attract a fee.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi11">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str11" aria-expanded="false" aria-controls="str11">
                                How do I benefit from the new structure?
                            </a>
                        </h5>
                    </div>
                    <div id="str11" class="collapse" role="tabpanel" aria-labelledby="multi11">
                        <div class="card-block">
                            <p>The multi- Fund structure allows Leadway Pensure better serve its con-tributors by building
                                portfolios that closely reflect their risk appe-tite. This implies that contributors with a
                                large risk appetite are com-pensated for taking more risk whilst contributors with a low risk
                                appe-tite are appropriately compensated.</p>
                            <p>The new structure also recognizes that a contributor’s risk appetite may change over time due
                                to a myriad of factors, thus the flexibility to switch from one fund to the other is an added
                                advantage.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi12">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str12" aria-expanded="false" aria-controls="str12">
                                Can I opt to be in separate funds for RSA and my AVC?
                            </a>
                        </h5>
                    </div>
                    <div id="str12" class="collapse" role="tabpanel" aria-labelledby="multi12">
                        <div class="card-block">
                            All contributions whether mandatory and voluntary must be under the same fund type.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="multi13">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion11" href="#str13" aria-expanded="false" aria-controls="str13">
                                Will LPPFA provide financial advice before making a decision to switch?
                            </a>
                        </h5>
                    </div>
                    <div id="str13" class="collapse" role="tabpanel" aria-labelledby="multi13">
                        <div class="card-block">
                            Our relationship managers are trained to provide guidance. We will also make information on the
                            performance of each fund available on our website and by email to enable contributors stay updated
                            and make informed decisions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script>
	$(document).ready(function () {
		
		//Resize container based on desktop or mobile viewport.
		var size = window.innerWidth;
		if (size <= 991) {
			$("#m-top").attr("class", "container-fluid");
		}
		
		$('html,body').animate({
		  scrollTop: $(window.location.hash).offset().top
		});
	});
</script>

</body>
</html>