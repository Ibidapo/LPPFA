<?php /* Template Name: Company */ ?>

<?php
$intro_title = get_field("intro_title");
$intro_content = get_field("intro_content");
$mission_statement_box_title = get_field("mission_statement_box_title");
$values_box_title = get_field("values_box_title");
$values = get_field("values");
$companies = get_field("companies");
$custodians = get_field("custodians");

?>

<?php
include_once 'mail/company.php';
?>

<?php get_header(); ?>
<!-- Body and Main Content of Page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 company-bg">
            <div class="bg-txt">
                <div class="bg-head">
                    <h2 class="hidden-sm-down"><?= $intro_title ?></h2>

                    <h3 class="hidden-md-up"><?= $intro_title ?></h3>
                </div>
                <?= $intro_content ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 company-tab">
            <ul class="hidden-sm-down nav nav-fill nav-tabs" id="compTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#meet" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/meet.png"> Meet Leadway</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#lead" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/people.png"> Leadership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#f-rep" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/script.png"> Financial Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#csr" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/village.png"> C.S.R</a>
                </li>
            </ul>
            <h3 class="hidden-md-up text-center" data-aos="fade">Our Company</h3>
            <form class="hidden-md-up mx-auto">
                <div class="form-group text-center">
                    <select class="form-control" id="m-compTab" data-aos="fade">
                        <option value="0">Meet Leadway</option>
                        <option value="1">Leadership</option>
                        <option value="2">Financial Reports</option>
                        <option value="3">C.S.R</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row tab-content">
        <div class="tab-pane fade show active col-12" role="tabpanel" id="meet">
            <div class="row comp-prof">
                <div class="col-12 col-md-7 text-center">
                    <p class="prof-label v-align">
                        <?= get_field("company_profile_subscription_text") ?>
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <form class="form-inline v-align" action="<?php the_permalink(); ?>" method="post">
                        <input type="hidden" name="company_submitted" value="1">
                        <div class="form-group mx-auto text-center">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                            <a class="btn btn-outline-purple" role="button" type="submit">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mission">
                <div class="vr hidden-sm-down"></div>
                <div class="col-md-6">
                    <h2 class="hidden-sm-down text-center"><?= $mission_statement_box_title ?></h2>

                    <h3 class="hidden-md-up text-center"><?= $mission_statement_box_title ?></h3>
                    <?= get_field("mission_statement") ?>
                </div>
                <div class="col-md-6 text-center">
                    <h2 class="hidden-sm-down"><?= $values_box_title ?></h2>

                    <h3 class="hidden-md-up" style="margin-top: 30px"><?= $values_box_title ?></h3>
                    <?= get_field("values_intro_text") ?>

                    <div id="accordion6" role="tablist" aria-multiselectable="true">
                        <?php foreach ($values as $key => $value): ?>
                            <div class="card">
                                <div class="card-header" role="tab" id="val<?= $key + 1 ?>">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion6" href="#compVal-<?= $key ?>"
                                           aria-expanded="true" aria-controls="compVal-<?= $key ?>">
                                            <?= $value['title'] ?>
                                        </a>
                                    </h5>
                                </div>
                                <div id="compVal-<?= $key ?>" class="collapse <?= $key == 0 ? "show" : "" ?>"
                                     role="tabpanel" aria-labelledby="val<?= $key + 1 ?>">
                                    <div class="card-block">
                                        <?= $value['content'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="row comps">
                <div class="vr hidden-sm-down"></div>
                <div class="col-md-4 text-center">
                    <h1 class="hidden-md-down v-align">Our Companies</h1>

                    <h3 class="hidden-lg-up v-align">Our Companies</h3>
                </div>
                <div class="col-md-8">
                    <div id="comps-slide" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner" role="listbox">
                            <?php foreach ($companies as $key => $company): ?>
                                <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                                    <div class="card">
                                        <img class="card-img-top mx-auto" src="<?= $company['logo']['url'] ?>">

                                        <div class="card-block">
                                            <p class="card-text">
                                                <?= $company['description'] ?>
                                            </p>

                                            <div class="text-center">
                                                <a href="<?= $company['website_link'] ?>"
                                                   class="btn btn-outline-purple">Visit site</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach ?>
                        </div>
                        <a class="carousel-control-prev" href="#comps-slide" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#comps-slide" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row custodian text-center">
                <div class="col-12"><h3>Custodians</h3></div>
                <?php foreach ($custodians as $custodian): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="<?= $custodian['logo']['url'] ?>"
                                 alt="<?= $custodian['logo']['alt'] ?>">
                            <div class="card-block">
                                <p class="card-text">
                                    <?= $custodian['address'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="lead">
            <div class="row">
                <div class="col-12 board-mgt text-center">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#board-dir" role="tab">Board of
                                Directors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mgt-team" role="tab">Management Team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content row">
                <div class="tab-pane fade show col-12 active" id="board-dir" role="tabpanel">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dir1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Oye Hassan-Odukale">
                                        <figcaption class="figure-caption text-center">
                                           <!-- <?= get_field('chairman_name')?> -->
                                            Oye Hassan-Odukale<br>
                                            <span class="designation">Charmain</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <!-- <?= get_field('chairman_description') ?> -->
                                    <p>Apart from being the Managing Director/ Chief Executive Officer of Leadway Assurance Group,
                                    Oye Hassan-Odukale is now the Chairman of Leadway Pensure PFA. He is a product of Mayflower School,
                                    Ikenne, Ogun State. He graduated from University of Houston, Texas from where he obtained both Bachelors
                                    and Masters Degrees in Business Administration, specializing in Finance.</p>
                                    <p>He started his career in insurance with SCIB & Company Insurance Brokers (an affiliate of Segwicks
                                    Insurance Brokers) in 1980 and joined Leadway Assurance Company Limited in 1981, becoming Managing
                                    Director and Chief Executive Officer of the company in 1994. He is a Munich Re scholar, being the First
                                    West African recipient of Munich Re and Georgia State University International Visiting Fellows insurance
                                    Program. He is accredited by the Securities and Exchange Commission as an Investment Manager and Portfolio
                                    Adviser.</p>
                                    <p>Oye Hassan-Odukale is on the Board of a number of reputable companies such as First Bank of Nigeria,
                                    and the immediate past Chairman, Nigeria Insurance Association. He is also Member of the Order of the
                                    Federal Republic (MFR).</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir2" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/female.png" class="figure-img img-fluid rounded" alt="Adedeji Aderonke">
                                        <figcaption class="figure-caption text-center">
                                            Aderonke Adedeji<br>
                                            <span class="designation">Managing Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Presently the Managing Director of Leadway Pensure PFA, Mrs Adedeji was formerly
                                        Executive Director at LPPFA.
                                        Prior to that she was an Executive Director of both MBC International Bank
                                        Limited and MBC Securities Limited.
                                        She is an Associate member of The Institute of Chartered Accountant of Nigeria
                                        (ACA) and a Fellow of Chartered
                                        Association of Certified Accountants, UK (FCCA).</p>

                                    <p>She was Head of Capital Issues Division of ICON Limited (Merchant Bankers) for 7
                                        years from where she moved to
                                        MBC International Bank in 1993. She was appointed an Executive Director at MBC
                                        International Bank in 2001. Her
                                        experience covers Retail Banking, Corporate Banking, Private Banking, Investment
                                        Banking, Corporate Services and
                                        Securities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir3" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Balla Swamy">
                                        <figcaption class="figure-caption text-center">
                                            Dr. Balla Swamy<br>
                                            <span class="designation">Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Dr. Balla Swamy is a Veterinary Graduate (B.V.Sc) from Andhra Pradesh
                                        Agricultural University,
                                        Hyderabad and Post-graduate in Business Administration (M.B.A Marketing) from
                                        Dr. B.R. Ambedkar Open
                                        University, Hyderabad, India. He is also Associate of the Insurance Institute of
                                        India and attended
                                        various training programmes at national and international levels on Insurance,
                                        Reinsurance and Management
                                        studies including Corporate Governance.</p>

                                    <p>With an experience of two years in Rural India, joined as Direct Recruit
                                        Specialist Officer in 1985, The
                                        New India Assurance Co Ltd, Mumbai, (Wholly Owned by the Govt. of India) and
                                        Largest General Insurance Company
                                        with A- Excellent Rating given by A.M. Best Company, U.S.A. rated A-(Excellent –
                                        Stable outlook) by AM Best.
                                        indicating that the Company has the Highest degree of Financial strength to
                                        honor its Policyholders obligations.</p>

                                    <p>He worked in various Offices and attained Administrative and Underwriting skills
                                        in ranks of Assistant
                                        Administrative Officer, Assistant Manager for a period of twelve years in
                                        handling major catastrophic losses
                                        and Rural Mass Insurance Programmes. He is recognized as Specialist for
                                        Agriculture and Rural Insurance business
                                        in Andhra Pradesh.</p>

                                    <p>He assumed the marketing activities from 1997 to 2004 as Divisional Manager and
                                        Senior Divisional Manager in
                                        Andhra Pradesh and serviced Major Divisional Office at Vishalkaptnam. His
                                        services were recognized and deputed to
                                        Philippines to head the operations of 78 years old Branch Office of The New
                                        India Assurance Co Ltd, in Manila.
                                        The office grew with two branch offices and two general agencies, resulting in
                                        premium growth and profitability
                                        out of expansion of reinsurance support from the corporate office and remained
                                        as major player in Philippines from
                                        the year 2004 to 2007.</p>

                                    <p>In the year 2008, he was elevated to Chief Manager and posted as Head of
                                        Reinsurance Department of The New India
                                        Assurance Co Ltd, at Head Office, Mumbai up to the year 2010. Subsequently, he
                                        was recognized to handle the Health
                                        Insurance Department of The New India Assurance Co Ltd, the largest Health
                                        Insurer in India. To his credit,
                                        successful implementation of Health Insurance Module in centralized web based
                                        Insurance Systems and centralized
                                        payment of all the claims to the customers and hospitals directly through
                                        electronic payment, resulting in the
                                        bagging of Award of Best Health Insurer by Outlook Express Magazine. The New
                                        India Assurance Co Ltd also instituted
                                        the Health Achievers Award in coordination with Times of India to recognize the
                                        services of the best doctors,
                                        hospitals and innovations in the field of Health Management Services.</p>

                                    <p>He was deputed to Prestige Assurance Plc as its Managing Director in November
                                        2014 subsequent to his elevation
                                        to the exalted position of Deputy General Manager in the same year.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir4" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Kofo Majekodunmi">
                                        <figcaption class="figure-caption text-center">
                                            Kofo Majekodunmi<br>
                                            <span class="designation">Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>He is an Executive Director of FBN Capital. Prior to this, he was the Deputy
                                        Managing Director
                                        of MBC International Bank Limited with general management oversight. He attended
                                        Cranleigh School, Surrey,
                                        England after which he proceeded to The London School of Economics & Political
                                        Science where he obtained a
                                        law degree and was called to The Nigerian Bar in 1988. He later obtained his MBA
                                        from the Lagos Business School.
                                        He headed various Departments and Divisions in the Bank before his appointment
                                        as the Executive Director of MBC
                                        in 2000. He has attended development programmes in Paris, Australia and others.
                                        He is a member of the Nigerian
                                        Economic Summit and Institute of Directors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir5" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Ike Osakwe">
                                        <figcaption class="figure-caption text-center">
                                            Ike Osakwe<br>
                                            <span class="designation">Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Mr. Ike Osakwe is a Chartered Accountant and practicing Management Consultant.
                                        Educated in England,
                                        he holds degrees in Chemistry from the University of Oxford and has served
                                        Articles in the London offices
                                        of KPMG Audit. Qualifying in 1980, as a member of the Institute of Chartered
                                        Accountants for England and Wales,
                                        he returned to Nigeria to work as an expatriate for ITT.</p>

                                    <p>He now serves as the Managing Director of GRID Consulting Ltd., a company that
                                        specialises in the planning and
                                        implementation of change processes and systems for Commerce, Industry,
                                        Government and NGOs.</p>

                                    <p>Mr. Osakwe has over 28 years' experience in financial, strategic and corporate
                                        planning, as well as
                                        organisational and financial management systems development, both in Nigeria and
                                        internationally. He has brought
                                        his vast experience in the dynamics of most major industrial sectors to bear in
                                        his work on corporate governance.
                                        He has held several government and Board appointments and currently serves on
                                        the Boards of Oando Plc., Thomas Wyatt
                                        Nig. Plc. and FedEx Red Star Nig Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir6" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Tunde Hassan-Odukale">
                                        <figcaption class="figure-caption text-center">
                                            Tunde Hassan-Odukale<br>
                                            <span class="designation">Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Presently the Executive Director in charge of Investments and Management Systems
                                        at Leadway Assurance Group.
                                        Formerly the Managing Director of Leadway Pensure PFA. He is a graduate of the
                                        University of London and City
                                        University, London. He holds a Bachelors Degree in Pure Mathematics and a
                                        postgraduate Diploma in Actuarial Science.
                                        He attended The Advanced Management Program of Lagos Business School and is an
                                        ordinary member of both the Royal
                                        Society of Mathematics and Pensions Management Institute.</p>

                                    <p>He is accredited by the Securities and Exchange Commission as an Investment
                                        Adviser and Portfolio Manager.
                                        He has attended several courses locally and abroad on Investment Management and
                                        Portfolio design. He is a Director
                                        of Stanbic Bank Nigeria Limited, Union Assurance Limited (Subsidiary of Union
                                        Bank of Nigeria) and Total Health
                                        Trust Limited, a health Management Company. Apart from his finance background,
                                        Mr. Hassan-Odukale has a strong bias
                                        for Information Technology.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir7" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Ibrahim Waziri">
                                        <figcaption class="figure-caption text-center">
                                            Ibrahim Waziri<br>
                                            <span class="designation">Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Mallam Ibrahim Dahiru Waziri possesses broad educational qualifications in
                                        diverse disciplines including
                                        Accounting, Economics, Banking & Finance, Oil & Gas, and Power, Business
                                        Management and Human Resource.</p>

                                    <p>He has over 30 years post-graduation experience in Academics, Public
                                        Administration, Banking and Oil & Gas
                                        Industries with particular strengths and interest in Gas resource development
                                        and management, Corporate Governance,
                                        Human Capital, Leading Change/ Organizational renewal Corporate Finance, and
                                        Relationship Management. He is a Fellow
                                        of the Institute of Directors and a former member of Nigeria’s Federal House of
                                        Representative.</p>

                                    <p>He is currently the Chairman of the Board of Directors, Transmission Company of
                                        Nigeria (TCN); a Non-Executive
                                        Director of First Bank of Nigeria; FBNBank, UK; First Exploration and Petroleum
                                        Development Company Limited amongst
                                        other Company Directorships. He has also served on the board of several
                                        Companies, with vast and diverse experience
                                        in Corporate Management & Governance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir8" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Lanre Idris">
                                        <figcaption class="figure-caption text-center">
                                            Lanre Idris<br>
                                            <span class="designation">ED, Operations</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Prior to his appointment as an Executive Director of Leadway Pensure PFA Ltd., he
                                        had previously been the Chief
                                        Operating Officer of the company. He was formerly the Chief Technology Officer,
                                        Prestel Communications Ltd., Benin
                                        and Tehila Communications Ltd., Lagos. He has extensive experience in
                                        information systems and operations management,
                                        and has attended many local and international seminars. He is an alumnus of the
                                        Obafemi Awolowo University, Ile-Ife,
                                        where he obtained a honors degree in Electrical and Electronic Engineering, and
                                        the Lagos Business School, Lekki
                                        Lagos, where he took the Senior Management program.</p>

                                    <p>He is a member of the Information Systems Audit & Control Association, the
                                        British Computer Society and the
                                        International Institute for Business Analysis. He is an ardent technocrat with
                                        over 22 years of ornate service
                                        experience and over 12 years of which has been in senior management and
                                        executive rank. He a strategic thinker,
                                        with a mix of technology and business skills. He is passionate about nature
                                        conservation and sustainable environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dir9" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Olusakin Labeodan">
                                        <figcaption class="figure-caption text-center">
                                            Olusakin Labeodan<br>
                                            <span class="designation">ED, Sales & Marketing</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Presently an Executive Director with the Leadway Pensure PFA Ltd, Lagos, Nigeria.
                                        Prior to his appointment
                                        as an Executive Director of Leadway Pensure PFA Ltd., Mr. Olusakin Labeodan
                                        served as the Chief Marketing Officer
                                        as well as the Group Head, Distribution of the Company. He holds a Bachelors
                                        Degree in Statistics from the University
                                        of Ibadan and an MBA (Strategic Management) from Milpark Business.</p>

                                    <p>Olusakin's consistent and successful career experience in Public, Private and
                                        International Organisations continue
                                        to enrich his leadership capabilities especially in the areas of Sales and
                                        Marketing, Business Development, Customer
                                        Services, Finance & Investments, Research, Information & Communication
                                        Technology (ICT), Private Banking and Pension
                                        Fund Administration.</p>

                                    <p>He has attended several advanced local and international seminars and trainings,
                                        which includes High Performance
                                        & Creative Negotiator, Senior Management Program (SMP43), Mastering Strategy and
                                        Commerce Web Development at IESE
                                        Business School, Barcelona, Spain; Lagos Business School (LBS) Lagos and
                                        Nigeria; Dimension Data Learning Solutions,
                                        Johannesburg, South Africa. He is a Full Member, South African Institute of
                                        Management (SAIM) and the Computer Society
                                        of South Africa (CSSA), now Institute of Information Technology Professionals
                                        South Africa (IITPSA).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="nav nav-tabs row text-center board" role="tablist">
                        <div class="tag">Members</div>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir2" role="tab">
                            Aderonke Adedeji<br>
                            <span class="designation">Managing Director</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir3" role="tab">
                            Dr. Balla Swamy<br>
                            <span class="designation">Director</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir4" role="tab">
                            Kofo Majekodunmi<br>
                            <span class="designation">Director</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir5" role="tab">
                            Ike Osakwe<br>
                            <span class="designation">Director</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir6" role="tab">
                            Tunde Hassan-Odukale<br>
                            <span class="designation">Director</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir7" role="tab">
                            Ibrahim Waziri<br>
                            <span class="designation">Director</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir8" role="tab">
                            Lanre Idris<br>
                            <span class="designation">ED, Operations</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir9" role="tab">
                            Olusakin Labeodan<br>
                            <span class="designation">ED, Sales & Marketing</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3 active mx-auto" data-toggle="tab" href="#dir1" role="tab">
                            Oye Hassan-Odukale<br>
                            <span class="designation">Chairman</span>
                        </a>
                    </nav>
                </div>
                <div class="tab-pane fade col-12" id="mgt-team" role="tabpanel">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="mgt1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Abayomi Adesope">
                                        <figcaption class="figure-caption text-center">
                                            Abayomi Adesope<br>
                                            <span class="designation">Chief Financial Officer</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Varied Accounting and Administration experience spanning Advertising,
                                        Stockbroking,
                                        Mortgage Banking and Telecommunications. He is a graduate of Accounting from the
                                        Obafemi Awolowo University (OAU) Ile-Ife
                                        Member, Institute of Chartered Accountants of Nigeria (ICAN) and a Student
                                        Member of the Chartered Institute of Stockbrokers (CIS).</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt2" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Adesegun Akadiri">
                                        <figcaption class="figure-caption text-center">
                                            Adesegun Akadiri<br>
                                            <span class="designation">Head, Internal Audit & Control</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Audit experience which cuts across Insurance and Telecommunications industries.
                                        B.Sc
                                        and MBA from Ogun State University (Ago-Iwoye), Nigeria. Formerly, Audit Senior
                                        (Adeolu Balogun & Co),
                                        Head of Internal Audit (Law Union & Rock Insurance plc.) and Revenue Assurance
                                        Manager
                                        (Globacom Limited). Fellow, Institute of Chartered Accountant of Nigeria (ICAN)
                                        and Chartered Institute
                                        of Taxation of Nigeria (CITN).</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt3" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Osarhieme Osaghae">
                                        <figcaption class="figure-caption text-center">
                                            Osarhieme Osaghae<br>
                                            <span class="designation">Head, Business Development</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>B.Sc. (Political Science), University of Ibadan. Extensive experience in sales
                                        and marketing
                                        Former Head of Sales, Road Truckers Nigeria Limited. Core competence in Business
                                        Development,
                                        Sales and Marketing strategies</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt4" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/female.png" class="figure-img img-fluid rounded" alt="Titilola Bashorun">
                                        <figcaption class="figure-caption text-center">
                                            Titilola Bashorun<br>
                                            <span class="designation">Head, Human Resources</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>She is a Business Administration graduate with a Masters in Human Resources from
                                        the
                                        University of Bradford, UK. HR professional with varied years of experience in
                                        financial
                                        services, consulting and private industry with competences in Talent management,
                                        Performance
                                        Management, Organisational Development, Change and People Management.</p>

                                    <p>Vast experience in coaching and mentoring, career counselling and Personality
                                        assessment
                                        administration. Good interpersonal skills and has strong passion for best
                                        practices.</p>

                                    <p>Associate of the Chartered Institute of Personnel Development (CIPD), UK;
                                        Certified Pension Institute
                                        of Nigeria (CPIN), Nigerian Institute of Management (NIM) and Chartered
                                        Institute of Personnel Management
                                        on Nigeria (CIPM). Also holds the British Psychological Society Certificate of
                                        competence in Occupational
                                        Testing - Knight Chapman Psychological Ltd (KCP).</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt5" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Akindele Fayombo">
                                        <figcaption class="figure-caption text-center">
                                            Akindele O. Fayombo<br>
                                            <span class="designation">Head, Compliance</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Certified Compliance and Ethics Professional (CCEP-I) by the Society of Corporate
                                        Compliance and Ethics (USA).
                                        Holds a Bachelors (HONS) degree in Political Science and Education and Masters
                                        degree (in-view) in International
                                        Relations and Strategic Studies from the Lagos State University, Ojo, Lagos.</p>

                                    <p>Attended several trainings and seminars at reputable institutions, amongst which
                                        are the Society for Corporate
                                        Compliance and Ethics (SCCE, Minneapolis, United States of America), the Pan
                                        African University (Lagos Business School),
                                        IBFC Agusto, etc.</p>

                                    <p>He has evolved from being a political scientist and educator to an epitome of
                                        strategic thinker and financial
                                        realist with abilities to analyze business instances and its’ requirements,
                                        design and execute business operational
                                        processes with significant indices, tight schedule and budget.</p>

                                    <p>In his capacity as the Compliance officer, he oversees the Company's compliance
                                        with all regulatory requirements,
                                        in the interest of all stakeholders. He is also responsible for promoting a
                                        compliance culture within the organization
                                        and liaising with our regulator.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt6" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Olusola Ayodele">
                                        <figcaption class="figure-caption text-center">
                                            Olusola Ayodele<br>
                                            <span class="designation">Head, Customer Relationship Management</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>He has varied experience in Business development , Sales & Marketing and Customer
                                        Service.
                                        A graduate of Business Administration from Ogun State Polytechnic; holds a Post
                                        Graduate Diploma
                                        in Economics from Lagos State University and MBA from Ladoke Akintola
                                        University, Ogbomosho.</p>

                                    <p>He is an Associate Member Nigerian Institute of Management (ANIM) & National
                                        Institute of Marketing (ANIM).
                                        He has attended several courses including Senior Management Program (SMP) at
                                        Lagos Business School.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt7" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Sunkanmi Shuaib">
                                        <figcaption class="figure-caption text-center">
                                            Sunkanmi Shuaib<br>
                                            <span class="designation">Head, Information Technology</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>He is a computer science graduate with a Master of Science degree in Enterprise
                                        Systems
                                        Professional from Sheffield Hallam University in UK. An Information Technology
                                        expert with
                                        over 15 years of professional experience and ICT knowledge. Vast experience in
                                        aligning IT
                                        with business strategy.</p>

                                    <p>He has over the years worked in the area of automation of business processes as
                                        well as
                                        banking applications implementation and customisation, Electronic and mobile
                                        banking solutions,
                                        database and infrastructure management.</p>

                                    <p>His experience has traversed locally and abroad in the banking and financial
                                        service industry.
                                        He has worked on several data migration and IT integration projects in the
                                        banking industry.
                                        He is also credited with delivering a major integration project involving four
                                        major banks during
                                        the banking consolidation exercise in Nigeria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mgt8" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/male.png" class="figure-img img-fluid rounded" alt="Austin Okoje">
                                        <figcaption class="figure-caption text-center">
                                            Austin Okoje<br>
                                            <span class="designation">Head, Risk Management/Strategy</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>He has over 16 years in the financial services sector. His core skills are people
                                        management,
                                        practical approach to risk management, Treasury and Investment operations. Asset
                                        and Liability Manager
                                        and Money Market Securities Trader, Broad Bank of Nigeria Limited. Also
                                        responsible for setting up and
                                        overseeing the T-bills dealing desk, Union Bank of Nigeria Plc.</p>

                                    <p>He is an acknowledged authority in taking long-term view of interest rates and
                                        managing portfolio to
                                        capitalize on interest rate movement. Member of the Certified Institute of
                                        Pensions (CIPN) and Nigerian
                                        Institute of Management (NIM).</p>

                                    <p>He is a Certified Risk and Compliance Management Professional (CRCMP) by the
                                        International Association
                                        of Risk and Compliance Professionals (USA). He holds a Masters in Linguistics
                                        from the prestigious
                                        University of Ibadan and MBA.</p>

                                    <p>He has undertaken senior management/executive education programs covering various
                                        business areas at
                                        leading institutions including Senior Management Program (SMP) at the Lagos
                                        Business School.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="mgt9" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="http://lppfa-wp.inspireleadership.biz/wp-content/uploads/2017/09/female.png" class="figure-img img-fluid rounded" alt="Adedeji Aderonke">
                                        <figcaption class="figure-caption text-center">
                                            Aderonke Adedeji<br>
                                            <span class="designation">Managing Director</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history">
                                    <p>Presently the Managing Director of Leadway Pensure PFA, Mrs Adedeji was formerly
                                        Executive Director at LPPFA.
                                        Prior to that she was an Executive Director of both MBC International Bank
                                        Limited and MBC Securities Limited.
                                        She is an Associate member of The Institute of Chartered Accountant of Nigeria
                                        (ACA) and a Fellow of Chartered
                                        Association of Certified Accountants, UK (FCCA).</p>

                                    <p>She was Head of Capital Issues Division of ICON Limited (Merchant Bankers) for 7
                                        years from where she moved to
                                        MBC International Bank in 1993. She was appointed an Executive Director at MBC
                                        International Bank in 2001. Her
                                        experience covers Retail Banking, Corporate Banking, Private Banking, Investment
                                        Banking, Corporate Services and
                                        Securities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="nav nav-tabs row text-center board" role="tablist">
                        <div class="tag">Members</div>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt1" role="tab">
                            Abayomi Adesope<br>
                            <span class="designation">Chief Financial Officer</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt2" role="tab">
                            Adesegun Akadiri<br>
                            <span class="designation">Head, Internal Audit & Control</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt3" role="tab">
                            Osarhieme Osaghae<br>
                            <span class="designation">Head, Business Development</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt4" role="tab">
                            Titilola Bashorun<br>
                            <span class="designation">Head, Human Resources</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt5" role="tab">
                            Akindele O. Fayombo<br>
                            <span class="designation">Head, Compliance</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt6" role="tab">
                            Olusola Ayodele<br>
                            <span class="designation">Head, Customer Relationship Management</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt7" role="tab">
                            Sunkanmi Shuaib <br>
                            <span class="designation">Head, Information Technology</span>
                        </a>
                        <a class="nav-link col-md-3" data-toggle="tab" href="#mgt8" role="tab">
                            Austin Okoje<br>
                            <span class="designation">Head, Risk Management/Strategy</span>
                        </a>
                        <a class="nav-link col-sm-6 col-md-3 mx-auto active" data-toggle="tab" href="#mgt9" role="tab">
                            Aderonke Adedeji<br>
                            <span class="designation">Managing Director</span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="row custodian text-center">
                <div class="col-12"><h3>Custodians</h3></div>
                <?php foreach ($custodians as $custodian): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="<?= $custodian['logo']['url'] ?>"
                                 alt="<?= $custodian['logo']['alt'] ?>">
                            <div class="card-block">
                                <p class="card-text">
                                    <?= $custodian['address'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="f-rep">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2>Reports</h2>

                    <p>Download and review our fund performance over the years</p>
                    <ul>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a
                                href="<?php echo get_bloginfo('template_directory'); ?>/document/FinancialYearEndReport2016.pdf"
                                target="_blank">2016</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a
                                href="<?php echo get_bloginfo('template_directory'); ?>/document/FinancialYearEndReport2015.pdf"
                                target="_blank">2015</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a
                                href="<?php echo get_bloginfo('template_directory'); ?>/document/FinancialYearEndReport2014.pdf"
                                target="_blank">2014</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a
                                href="<?php echo get_bloginfo('template_directory'); ?>/document/FinancialYearEndReport2013.pdf"
                                target="_blank">2013</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a
                                href="<?php echo get_bloginfo('template_directory'); ?>/document/FinancialYearEndReport2012.pdf"
                                target="_blank">2012</a></li>
                    </ul>
                </div>
                <div class="hidden-sm-down col-md-6 text-center">
                    <img class="img-fluid"
                         src="<?php echo get_bloginfo('template_directory'); ?>/images/yearly-fin-rep.png">
                </div>
            </div>
        </div>
        <div class="tab-pane fade col-12 text-center" role="tabpanel" id="csr">
            <h1>Coming Soon!</h1>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script>
    $(document).ready(function () {

        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $(".container").attr("class", "container-fluid");
        }

        $('#compTab a[href="' + window.location.hash + '"]').tab('show'); // Select tab by name if provided in location hash

        $('#compTab a[data-toggle="tab"], #board-dir a[data-toggle="tab"], #mgt-team a[data-toggle="tab"]').on('shown.bs.tab', function () {
            $('body,html').animate({
                scrollTop: 480
            }, 800);
        });

        $(".dropdown-menu.oc a:first-child").click(function () {
            $('a[href="#meet"]').tab('show');
        });

        $(".dropdown-menu.oc a:nth-child(2)").click(function () {
            $('a[href="#lead"]').tab('show');
        });

        $(".dropdown-menu.oc a:nth-child(3)").click(function () {
            $('a[href="#f-rep"]').tab('show');
        });

        $(".dropdown-menu.oc a:nth-child(4)").click(function () {
            $('a[href="#csr"]').tab('show');
        });

        $('#m-compTab').change(function () {
            var i = $(this).val();

            if (i == 0) {
                $('a[href="#meet"]').tab('show');
            } else if (i == 1) {
                $('a[href="#lead"]').tab('show');
            } else if (i == 2) {
                $('a[href="#f-rep"]').tab('show');
            } else if (i == 3) {
                $('a[href="#csr"]').tab('show');
            }
        });
    });
</script>

</body>
</html>