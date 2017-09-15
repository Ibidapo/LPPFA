<?php /* Template Name: Career */ ?>

<?php
include_once 'mail/career.php';
?>

<?php get_header(); ?>
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
    (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->
<!-- Body and Main Content of page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 career-bg">
            <div class="bg-txt">
                <div class="bg-head">
                    <h2 class="hidden-sm-down">Careers</h2>

                    <h3 class="hidden-md-up">Careers</h3>
                </div>
                <?= get_field("intro_section") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 career-tab">
            <ul class="hidden-sm-down nav nav-fill nav-tabs" id="careerTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#vac" role="tab">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/vacancy.png">
                        Explore Vacancies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#cv" role="tab">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/CV.png"> Upload CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#alm" role="tab">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/alumni.png"> Alumni
                        Network</a>
                </li>
            </ul>
            <form class="hidden-md-up mx-auto">
                <div class="form-group text-center">
                    <select class="form-control" id="m-careerTab" data-aos="fade">
                        <option value="0">Explore Vacancies</option>
                        <option value="1">Upload CV</option>
                        <option value="2">Alumni Network</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row tab-content">
        <div class="tab-pane fade show active col-12" role="tabpanel" id="vac">
            <div class="row">
                <div class="col-12 col-md-7 ext-center">
                    <h2 class="hidden-sm-down vac-hd">Join our Team</h2>

                    <h4 class="hidden-md-up vac-hd">Join our Team</h4>
                    <span>Be part of a great mission, make your next career move.</span>

                    <div id="accordion5" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="vac1">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion5" href="#bm" aria-expanded="true"
                                       aria-controls="bm">
                                        Brand Manager
                                    </a>
                                </h5>
                            </div>
                            <div id="bm" class="collapse show" role="tabpanel" aria-labelledby="vac1">
                                <div class="card-block">
                                    <h6>Role Summary</h6>

                                    <p>We are looking for an experienced Brand Manager who is passionate about
                                        uncovering consumer insights
                                        and delivering innovative marketing campaigns. You will join a dynamic and
                                        fast-paced environment and
                                        you will generate strategies that grow market share and brand’s reputation,
                                        improve customer experience
                                        and drive growth.</p>
                                    <a type="button" class="btn btn-outline-loc">Requirements</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="vac2">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion5" href="#ra"
                                       aria-expanded="false" aria-controls="ra">
                                        Research Analyst
                                    </a>
                                </h5>
                            </div>
                            <div id="ra" class="collapse" role="tabpanel" aria-labelledby="vac2">
                                <div class="card-block">
                                    <h6 class="text-center">Role Summary</h6>

                                    <p>To gather and analyze research data, top level strategizing, planning,
                                        forecasting and simulations.
                                        Helps in allocating resources, measure performance from large data base for
                                        investment purposes.</p>
                                    <a type="button" class="btn btn-outline-loc">Requirements</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="vac3">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion5" href="#se"
                                       aria-expanded="false" aria-controls="se">
                                        Sales Exexcutives
                                    </a>
                                </h5>
                            </div>
                            <div id="se" class="collapse" role="tabpanel" aria-labelledby="vac3">
                                <div class="card-block">
                                    <h6>Role Summary</h6>

                                    <p>To coordinate and synchronize the activities of the sales unit in house and the
                                        agents (foot soldiers)
                                        to ensure maximization of human and material resources.</p>
                                    <a type="button" class="btn btn-outline-loc">Requirements</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="vac4">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion5" href="#fia"
                                       aria-expanded="false" aria-controls="fia">
                                        Fixed Income Analyst
                                    </a>
                                </h5>
                            </div>
                            <div id="fia" class="collapse" role="tabpanel" aria-labelledby="vac4">
                                <div class="card-block">
                                    <h6>Role Summary</h6>

                                    <p>We are looking for an individual whose primary function is to deeply examine the
                                        bonds and T-Bills market,
                                        trading on both securities, providing research and valuation report on the
                                        composition of the bond portfolio
                                        to make buy/hold and sell decision thereby minimizing cost and maximizing
                                        profit.</p>
                                    <a type="button" class="btn btn-outline-loc">Requirements</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="vac5">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion5" href="#fa"
                                       aria-expanded="false" aria-controls="fa">
                                        Fund Accountant
                                    </a>
                                </h5>
                            </div>
                            <div id="fa" class="collapse" role="tabpanel" aria-labelledby="vac5">
                                <div class="card-block">
                                    <h6>Role Summary</h6>

                                    <p>The role will be responsible for all aspects of day-to-day Accounting for a group
                                        of assigned funds.</p>
                                    <a type="button" class="btn btn-outline-loc">Requirements</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="vac6">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion5" href="#lo"
                                       aria-expanded="false" aria-controls="lo">
                                        Legal Officer
                                    </a>
                                </h5>
                            </div>
                            <div id="lo" class="collapse" role="tabpanel" aria-labelledby="vac6">
                                <div class="card-block">
                                    <h6>Role Summary</h6>

                                    <p>To co-ordinate and amange the entire legal framework of LPPFA particularly the
                                        review of policies,
                                        procedures, manuals, contracts and any other legal documentation.</p>
                                    <a type="button" class="btn btn-outline-loc">Requirements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="hanger"></div>
                    <div class="hanged">
                        <div class="sub-box text-center">
                            <p style="margin-top: 1rem; font-weight: 300">Want regular updates on job openings and
                                personal development tips</p>

                            <p>Sign Up for our news-letter</p>
                            <!-- Begin MailChimp Signup Form -->

                            <div id="mc_embed_signup">
                                <form action="//leadway-pensure.us10.list-manage.com/subscribe/post?u=a7d286c921166498a0b699255&amp;id=47a1abe4d1"
                                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                      class="validate  text-center" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group">
                                            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                            </label>
                                            <input type="email" placeholder="Johnsnow@xxxx.com" name="EMAIL"
                                                   class="required email chimp text-center" style="width:100%"
                                                   id="mce-EMAIL">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_a7d286c921166498a0b699255_47a1abe4d1"
                                                   tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="Follow" name="subscribe"
                                                   id="mc-embedded-subscribe" class="btn btn-outline-loc ctips-button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="pen-calc-bg text-center">
                            <div class="pen-calc mx-auto">
                                <h3>Pensions Calculator</h3>
                                <a type="button" class="btn btn-outline-white">Calculate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 career-cult-hd">
                    <h3 class="hidden-sm-down">Learn more about our culture</h3>
                    <h4 class="hidden-md-up">Learn more about our culture</h4>
                </div>
                <div class="col-12 career-cult-box">
                    <div class="row">
                        <div class="col-sm-6 cult-box1">
                            <p class="v-align">Our people are at the core of our success, hence the attention to ensuring
                            both mental and physical fitness of our team all the time.<br>
                        </div>
                        <div class="col-sm-6 cult-box2">
                            <h3 class="v-align">Hangouts & Retreats</h3>
                        </div>
                        <div class="col-sm-6 cult-box3">
                            <h3 class="v-align">Learning & Development</h3>
                        </div>
                        <div class="col-sm-6 cult-box6">
                            <p class="v-align">Head over now to our blog section for tips on how to assemble your CV and
                                other relevant documents<br><a href="#" class="btn btn-outline-white-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="cv">
            <form enctype="multipart/form-data" action="<?php the_permalink(); ?>#cv" method="post">
                <input type="hidden" name="career_submitted" value="1"/>
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-md-12 text-center">
                        <h4>Personal Information</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="s-name">Surname</label>
                                    <input required name="surname" type="text" class="form-control" id="s-name" value="<?= array_get($_POST, 'surname')?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="o-name">Other Names</label>
                                    <input name="other_names" type="text" class="form-control" id="o-name" value="<?= array_get($_POST, 'other_names')?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mail">E-mail</label>
                                    <input name="email" type="email" class="form-control" id="mail" required value="<?= array_get($_POST, 'email')?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p-no">Phone No</label>
                                    <input required name="phone_number" type="tel" class="form-control" id="p-no" value="<?= array_get($_POST, 'phone_number')?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="d-o-b">Date of Birth</label>
                                    <input name="date_of_birth" type="date" class="form-control" id="d-o-b" value="<?= array_get($_POST, 'date_of_birth')?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" class="form-control" id="address" rows="4"><?= array_get($_POST, 'address')?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="app">Applicant Type</label>
                                    <select name="applicant_type" class="form-control" id="app">
                                        <option disabled>Please select</option>
                                        <option>Young graduate</option>
                                        <option>Experienced</option>
                                        <option>Global talent</option>
                                        <option>Executive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gen">Gender</label>
                                    <select name="gender" class="form-control" id="gen">
                                        <option disabled>Please select</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-md-12 text-center">
                        <h4>Educational Qualification</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="i-name">Institutional Name</label>
                                    <select name="institution_name" class="form-control" id="i-name">
                                        <option disabled>Please select</option>
                                        <option value="28">Abia state University</option>
                                        <option value="1">Abubakar Tafawa Belewa University, Bauchi</option>
                                        <option value="64">Achievers University, Owo</option>
                                        <option value="29">Adamawa State University</option>
                                        <option value="30">Adekunle Ajasin University Akungba</option>
                                        <option value="65">Afe Babalola University, Ado-Ekiti - Ekiti State</option>
                                        <option value="66">African University of Science & Technology, Abuja</option>
                                        <option value="2">Ahamadu Bello University, Zaria</option>
                                        <option value="67">Ajayi Crowther University, Ibadan</option>
                                        <option value="31">Akwa Ibom State University Of Technology, Uyo</option>
                                        <option value="68">Al-Hikmah University, Ilorin</option>
                                        <option value="32">Ambrose Ali University, Ekpoma</option>
                                        <option value="69">American University of Nigeria, Yola</option>
                                        <option value="33">Anambra State University Of Science and Technology, Uli
                                        </option>
                                        <option value="70">Babcock University,Ilishan-Remo</option>
                                        <option value="3">Bayero University, Kano</option>
                                        <option value="71">Bells University of Technology, Otta</option>
                                        <option value="72">Benson Idahosa University,Benin City</option>
                                        <option value="34">Benue State University, Markurdi</option>
                                        <option value="73">Bingham University, New Karu</option>
                                        <option value="74">Bowen University, Iwo</option>
                                        <option value="35">Bukka Abba I brahim University, Damaturu</option>
                                        <option value="75">Caleb University, Lagos</option>
                                        <option value="76">Caritas University, Enugu</option>
                                        <option value="77">CETEP City University, Ibadan</option>
                                        <option value="78">Covenant University Ota</option>
                                        <option value="79">Crawford University Igbesa</option>
                                        <option value="80">Crescent University</option>
                                        <option value="36">Cross Rivers State University Of Science and Technology,
                                            Calabar
                                        </option>
                                        <option value="37">Delta State University, Abraka</option>
                                        <option value="38">Ebonyi State University, Abakaliki</option>
                                        <option value="39">Ekiti State University Of Science and Technology</option>
                                        <option value="40">Enugu State University Of Science and Technology, Enugu
                                        </option>
                                        <option value="4">Fed. University of Petroleum Resources</option>
                                        <option value="110">Federal polytechnic bauchi</option>
                                        <option value="6">Federal University Of Technology, Akure</option>
                                        <option value="7">Federal University Of Technology, Minna</option>
                                        <option value="8">Federal University Of Technology, Owerri</option>
                                        <option value="5">Federal University Of Technology, Yola</option>
                                        <option value="81">Fountain Unveristy, Oshogbo</option>
                                        <option value="82">Godfrey Okoye University, Ugwuomu-Nike - Enugu State</option>
                                        <option value="41">Gombe State University , Gombe</option>
                                        <option value="42">Ibrahim Badamasi Babaginda University, Lapai</option>
                                        <option value="83">Igbinedion University Okada</option>
                                        <option value="43">Imo State University, Owerri</option>
                                        <option value="84">Joseph Ayo Babalola University, Ikeji-Arakeji</option>
                                        <option value="44">Kaduna State University, Kaduna</option>
                                        <option value="45">Kano State University Of Science and Technology, Wudil
                                        </option>
                                        <option value="85">Katsina University, Katsina</option>
                                        <option value="46">Kebbi State University, Kebbi</option>
                                        <option value="47">Kogi State University Aniyigba</option>
                                        <option value="48">Kwara State University, Ilorin</option>
                                        <option value="49">Ladoke Akintola University Of Technology, Ogbomoso</option>
                                        <option value="106">Lagos City Polytechnic</option>
                                        <option value="113">Lagos State Polytechnic</option>
                                        <option value="50">Lagos State University Ojo, Lagos</option>
                                        <option value="86">Lead City University, Ibadan</option>
                                        <option value="87">Madonna University, Okija</option>
                                        <option value="9">Micheal Okpara University Of Agricture, Umudike</option>
                                        <option value="112">Middlesex University</option>
                                        <option value="51">Nassarawa State University, Keffi</option>
                                        <option value="10">National Open University Of Nigeria, Lagos</option>
                                        <option value="52">Niger Delta University, Yenagoa</option>
                                        <option value="11">Nigerian Defence Academy, Kaduna</option>
                                        <option value="88">Nigerian-Turkish Nile University, Abuja</option>
                                        <option value="12">Nnamdi Azikiwe University, Awka</option>
                                        <option value="89">Novena University, Ogume</option>
                                        <option value="13">Obafemi Awolwo University, Ile Ife</option>
                                        <option value="90">Obong University, Obong Ntak</option>
                                        <option value="91">Oduduwa University, Ipetumodu - Osun State</option>
                                        <option value="53">Olabisi Onabanjo University Ago-Iwoye</option>
                                        <option value="54">Ondo State University Of Science & Technology, Okitipupa
                                        </option>
                                        <option value="108">Osun State College of Technology</option>
                                        <option value="111">Osun state polytechnic</option>
                                        <option value="55">Osun State University, Oshogboo</option>
                                        <option value="92">Pan African University, Lagos</option>
                                        <option value="93">Paul University, Awka - Anambra State</option>
                                        <option value="56">Plateau State University, Bokkos</option>
                                        <option value="94">Redeemer's University, Mowe</option>
                                        <option value="95">Renaissance University, Enugu</option>
                                        <option value="96">Rhema University, Obeama-Asa - Rivers State</option>
                                        <option value="57">Rivers State University Of Science & Technology</option>
                                        <option value="97">Salem University, Lokoja</option>
                                        <option value="58">Sokoto State University, Sokoto</option>
                                        <option value="59">Tai Solarin Univ. Of Education, Ijebu-Ode</option>
                                        <option value="98">Tansian University, Umunya</option>
                                        <option value="60">Taraba State University, Jalingo</option>
                                        <option value="61">Umaru Musa Yar'Adua University, Katsina</option>
                                        <option value="14">University Of Abuja,Gwagwalada</option>
                                        <option value="62">University Of Ado- Ekiti</option>
                                        <option value="15">University Of Agriculture, Abeokuta</option>
                                        <option value="16">University Of Agriculture, Makurdi</option>
                                        <option value="17">University Of Benin</option>
                                        <option value="18">University Of Calabar</option>
                                        <option value="63">University Of Education, Ikere Ekiti</option>
                                        <option value="19">University Of Ibadan</option>
                                        <option value="20">University Of Ilorin</option>
                                        <option value="21">University Of Jos</option>
                                        <option value="22">University Of Lagos</option>
                                        <option value="23">University Of Maiidugri</option>
                                        <option value="109">University of Manchester</option>
                                        <option value="99">University of Mkar, Mkar</option>
                                        <option value="24">University Of Nigeria,Nsukka</option>
                                        <option value="25">University Of Port- Harcourt</option>
                                        <option value="26">University Of Uyo</option>
                                        <option value="27">Usuman Danfodiyo University</option>
                                        <option value="100">Veritas University</option>
                                        <option value="101">Wellspring University, Evbuobanosa - Edo State</option>
                                        <option value="102">Wesley Univ. of Science & Tech.,Ondo</option>
                                        <option value="103">Western Delta University, Oghara</option>
                                        <option value="104">Wukari Jubilee University</option>
                                        <option value="107">Yaba College of Technology</option>
                                        <option value="105">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="edu-qlt">Qualification</label>
                                    <select name="qualification" class="form-control" id="edu-qlt">
                                        <option>Please select</option>
                                        <option value="8">Bachelor of Applied Science (BASc)</option>
                                        <option value="9">Bachelor of Architecture (BArch)</option>
                                        <option value="27">Bachelor of Art (French)</option>
                                        <option value="6">Bachelor of Arts (BA)</option>
                                        <option value="10">Bachelor of Business Administration (BBA)</option>
                                        <option value="11">Bachelor of Commerce (BComm)</option>
                                        <option value="12">Bachelor of Computer Science (BCompSc)</option>
                                        <option value="14">Bachelor of Design (Visual design discipline) (BDes)</option>
                                        <option value="13">Bachelor of Divinity (BD)</option>
                                        <option value="15">Bachelor of Education (Bed)</option>
                                        <option value="16">Bachelor of Engineering ( BEng or BE)</option>
                                        <option value="33">Bachelor of Engineering (B.Eng or B.E))</option>
                                        <option value="20">Bachelor of Laws (LLB)</option>
                                        <option value="17">Bachelor of Pharmacy (BPharm)</option>
                                        <option value="7">Bachelor of Science (BSc)</option>
                                        <option value="19">Bachelor of Science in Forestry (BSF)</option>
                                        <option value="18">Bachelor of Technology (BTech)</option>
                                        <option value="23">Doctorate (Phd)</option>
                                        <option value="4">Higher National Diploma (HND)</option>
                                        <option value="32">Master of Laws (LL.M)</option>
                                        <option value="22">Masters Degree (Msc)</option>
                                        <option value="28">Masters of Business Administration (MBA)</option>
                                        <option value="3">National Certificate in Education (NCE)</option>
                                        <option value="1">National Innovation Diploma (NID)</option>
                                        <option value="2">Ordinary National Diploma (OND)</option>
                                        <option value="21">Post Graduate Diploma (PGD)</option>
                                        <option value="5">Professional Diploma (Post HND)</option>
                                        <option value="25">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="deg">Class of Degree</label>
                                    <select name="class_of_degree" class="form-control" id="deg">
                                        <option value="">Please select</option>
                                        <option value="First Class">First Class</option>
                                        <option value="Second Class Upper">Second Class Upper</option>
                                        <option value="Second Class Lower">Second Class Lower</option>
                                        <option value="Third Class">Third Class</option>
                                        <option value="Upper Credit">Upper Credit</option>
                                        <option value="Lower Credit">Lower Credit</option>
                                        <option value="Pass">Pass</option>
                                        <option value="Distinction">Distinction</option>
                                        <option value="Merit">Merit</option>
                                        <option value="None">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="yr-qlt">Year Completed</label>
                                    <input name="year_completed" type="text" class="form-control" id="yr-qlt">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cont">Country Obtained</label>
                                    <select name="country_obtained" class="form-control" id="cont">
                                        <option>Please select</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d Ivoire (Ivory Coast)">Cote d Ivoire (Ivory Coast)</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El salvador">El salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France Metropolitan
                                        <option value="French Guiana">French Guiana
                                        <option value="French Polynesia">French Polynesia
                                        <option value="French Southern Territories">French Southern Territories
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald
                                            Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                        </option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakstan">Kazakstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgystan">Kyrgystan</option>
                                        <option value="Lao">Lao</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia (FYR)">Macedonia (FYR)</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory Occupied">Palestinian Territory Occupied
                                        </option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines
                                        </option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands
                                        </option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="United States Minor Outlying Islands">United States Minor
                                            Outlying Islands
                                        </option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-md-12 text-center">
                        <h4>Professional Qualification</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prof-qlt">Qualification</label>
                                    <select name="professional_qualification" class="form-control" id="prof-qlt">
                                        <option value="">Please select</option>
                                        <option value="19">Advertising Practioners Council of Nigeria (APCON)</option>
                                        <option value="22">African Institute for Applied Economics (AIAE)</option>
                                        <option value="3">Association of Chartered Certified Accountants (ACCA)</option>
                                        <option value="58">Association of General and Private Medical Practitioners of
                                            Nigeria
                                        </option>
                                        <option value="59">Association of National Accountants of Nigeria</option>
                                        <option value="60">Business Education Exams Council</option>
                                        <option value="61">Centre for Law and Development</option>
                                        <option value="75">Certified Information Systems Auditor (CISA)</option>
                                        <option value="13">Certified Institute of Cost Management (CICM)</option>
                                        <option value="35">Certified Institute of Warehousing &amp; Materials Management
                                            (CISM)
                                        </option>
                                        <option value="62">Certified Pension Institute of Nigeria</option>
                                        <option value="37">Certified Pension Institute of Nigeria (CPIN)</option>
                                        <option value="77">Chartered Financial Analyst (CFA)</option>
                                        <option value="27">Chartered Institute of Administration (CIA)</option>
                                        <option value="5">Chartered Institute of Bankers of Nigeria(CIBN)</option>
                                        <option value="51">Chartered Institute of Commerce of Nigeria (CICN)</option>
                                        <option value="39">Chartered Institute of Cost &amp; Management Accountants of
                                            Nigeria (CICMA)
                                        </option>
                                        <option value="54">Chartered Institute of Logistics &amp; Transport (CTP)
                                        </option>
                                        <option value="9">Chartered Institute of Marketing of Nigeria (NIMN)</option>
                                        <option value="55">Chartered Institute Of Personnel Development (CIPD)</option>
                                        <option value="11">Chartered Institute of Personnel Management of Nigeria
                                            (CIPM)
                                        </option>
                                        <option value="12">Chartered Institute of Stockbrokers (CIS)</option>
                                        <option value="12">Chartered Institute of Stockbrokers (CIS)</option>
                                        <option value="12">Chartered Institute of Stockbrokers (CIS)</option>
                                        <option value="6">Chartered Institute of Taxation of Nigeria (CITN)</option>
                                        <option value="10">Chartered Insurance Institute of Nigeria(CIIN)</option>
                                        <option value="71">Cisco Certified Network Associate (CCNA)</option>
                                        <option value="72">Cisco Certified Network Professionals (CCNP)</option>
                                        <option value="32">Council for the Regulation of Engineering in Nigeria
                                            (COREN)
                                        </option>
                                        <option value="36">Institute of Certified Public Accountants of Nigeria (CPAN)
                                        </option>
                                        <option value="4">Institute of Chartered Accountant of Nigeria (ICAN)</option>
                                        <option value="1">Institute of Chartered Accountants (ACA)</option>
                                        <option value="25">Institute of Chartered Economists of Nigeria (ICEN)</option>
                                        <option value="23">Institute of Credit &amp; Risk Management (ICRM)</option>
                                        <option value="53">Institute of Data Processing Management of Nigeria (IDPMN)
                                        </option>
                                        <option value="18">Institute of Directors (IOD)</option>
                                        <option value="48">Institute of Finance &amp; Control of Nigeria (IFCN)</option>
                                        <option value="38">Institute of Forensic Accountants of Nigeria (IFAN)</option>
                                        <option value="42">Institute of Industrial Security &amp; Safety of Nigeria
                                            (IISSN)
                                        </option>
                                        <option value="44">Institute of Investment Management &amp; Research (INMR)
                                        </option>
                                        <option value="47">Institute of Professional Recruitment Consultants (IPRCN)
                                        </option>
                                        <option value="43">Institute of Public Analysts of Nigeria (IPAN)</option>
                                        <option value="50">Institute of Treasury Management (ITM)</option>
                                        <option value="70">International Air Transport Association (IATA)</option>
                                        <option value="73">Microsoft Certified Information Technology Professionals
                                            (MCITP)
                                        </option>
                                        <option value="52">Nigeria Institute of Civil Engineers (ICEN)</option>
                                        <option value="7">Nigeria Institute of Estate Surveyors &amp; Valuers (NIESV)
                                        </option>
                                        <option value="57">Nigeria Institute of Estate Surveyors and Valuers</option>
                                        <option value="30">Nigeria Institute of Public Relations (NIPR)</option>
                                        <option value="15">Nigeria Institute of Quantity Surveyors (NIQS)</option>
                                        <option value="64">Nigerian Bar Association</option>
                                        <option value="33">Nigerian Institute of Architects (NIA)</option>
                                        <option value="34">Nigerian Institute of Building (NIOB)</option>
                                        <option value="46">Nigerian Institute of Industrial Management (NIIM)</option>
                                        <option value="14">Nigerian Institute of Management (NIM)</option>
                                        <option value="28">Nigerian Institute of Professional Secretaries (NIPS)
                                        </option>
                                        <option value="21">Nigerian Institute of Public Relations (NIPR)</option>
                                        <option value="45">Nigerian Institute of Safety Professionals (NISP)</option>
                                        <option value="16">Nigerian Institute of Social and Economic Research (NISER)
                                        </option>
                                        <option value="17">Nigerian Institute of Town Planners (NITP)</option>
                                        <option value="65">Nigerian Medical Association</option>
                                        <option value="66">Nigerian Society of Engineers</option>
                                        <option value="29">Pipeline Professionals Association of Nigeria (PLAN)</option>
                                        <option value="24">Portfolio &amp; Debt Management Institute (PDMIN)</option>
                                        <option value="67">Science Teachers Association of Nigeria</option>
                                        <option value="68">Strategic Management Centre</option>
                                        <option value="49">The Chartered Institute of Logistics &amp; Transport
                                            (CILTN)
                                        </option>
                                        <option value="41">The Chartered Institute of Purchasing &amp; Supply (CIPS)
                                        </option>
                                        <option value="74">The Chartered Insurance Institute</option>
                                        <option value="26">The Institute of Certified Geographers of Nigeria (ICGN)
                                        </option>
                                        <option value="31">The Institute of Chartered Secretaries of Nigeria (ICSN)
                                        </option>
                                        <option value="40">The Institute of Credit Administration of Nigeria (ICAN)
                                        </option>
                                        <option value="20">The Nigerian Institute of Safety Professionals (NISP)
                                        </option>
                                        <option value="69">West African College of Physician</option>
                                        <option value="2">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cont-prof">Country Obtained</label>
                                    <select name="professional_qualification_country_obtained" class="form-control" id="cont-prof">
                                        <option>Please select</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d Ivoire (Ivory Coast)">Cote d Ivoire (Ivory Coast)</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El salvador">El salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France Metropolitan
                                        <option value="French Guiana">French Guiana
                                        <option value="French Polynesia">French Polynesia
                                        <option value="French Southern Territories">French Southern Territories
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald
                                            Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                        </option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakstan">Kazakstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgystan">Kyrgystan</option>
                                        <option value="Lao">Lao</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia (FYR)">Macedonia (FYR)</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory Occupied">Palestinian Territory Occupied
                                        </option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines
                                        </option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands
                                        </option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="United States Minor Outlying Islands">United States Minor
                                            Outlying Islands
                                        </option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="yr-prof">Year Completed</label>
                                    <input name="professional_qualification_year_completed" type="text" class="form-control" id="yr-prof">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-md-12 text-center">
                        <h4>Working Experience</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="c-name">Company Name</label>
                                    <input name="work_experience_company" type="text" class="form-control" id="c-name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ind">Industry</label>
                                    <select name="work_experience_industry" class="form-control" id="ind">
                                        <option value="">Please select</option>
                                        <option value="13">Aviation</option>
                                        <option value="2">Banking</option>
                                        <option value="40">Building and Construction</option>
                                        <option value="26">Catering and Logistics</option>
                                        <option value="33">Construction</option>
                                        <option value="28">Consulting</option>
                                        <option value="19">entertainment</option>
                                        <option value="32">Event Management</option>
                                        <option value="24">Financial Services (Pension Fund Administration)</option>
                                        <option value="38">FMCG</option>
                                        <option value="37">Haulage & Logistics</option>
                                        <option value="29">Health services</option>
                                        <option value="12">Hospitality</option>
                                        <option value="23">Information and Communication Technology</option>
                                        <option value="15">Infrastructure</option>
                                        <option value="4">Manufacturing</option>
                                        <option value="39">Manufacturing and retailing</option>
                                        <option value="27">Market Research</option>
                                        <option value="30">Marketing Communication</option>
                                        <option value="31">Media Services</option>
                                        <option value="20">Not for profit</option>
                                        <option value="7">Oil & Gas</option>
                                        <option value="16">Other Financial Services</option>
                                        <option value="34">Pharmaceutical</option>
                                        <option value="36">Real Estate</option>
                                        <option value="5">Retailing</option>
                                        <option value="25">Security Services</option>
                                        <option value="17">Services</option>
                                        <option value="22">Shipping</option>
                                        <option value="6">Telecommunications</option>
                                        <option value="35">Telecoms Infrastructure</option>
                                        <option value="14">Transportation</option>
                                        <option value="18">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job">Job Title</label>
                                    <input name="work_experience_job_title" type="text" class="form-control" id="job">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="spec">Specialization</label>
                                    <select name="work_experience_specialization" class="form-control" id="spec">
                                        <option class="disabled">Please select</option>
                                        <option value="4">Accounting</option>
                                        <option value="41">Actuarial Science</option>
                                        <option value="36">Admin</option>
                                        <option value="26">Advertising/branding</option>
                                        <option value="8">Asset Management</option>
                                        <option value="5">Audit</option>
                                        <option value="9">Banking</option>
                                        <option value="31">Branding</option>
                                        <option value="14">Business Development</option>
                                        <option value="37">Client Service</option>
                                        <option value="35">Compensation and Benefit</option>
                                        <option value="30">Consulting</option>
                                        <option value="3">Corporate Affairs/ Relations</option>
                                        <option value="10">Customer Service</option>
                                        <option value="25">Engineering</option>
                                        <option value="39">Facilities Management</option>
                                        <option value="6">Finance</option>
                                        <option value="44">Food Science and Technology</option>
                                        <option value="21">General Management</option>
                                        <option value="1">Human Resources</option>
                                        <option value="15">Information Technology</option>
                                        <option value="40">Insurance</option>
                                        <option value="7">Investment Banking</option>
                                        <option value="48">Investment Management</option>
                                        <option value="2">Legal Compliance</option>
                                        <option value="24">Logistics</option>
                                        <option value="13">Marketing</option>
                                        <option value="46">Marketing/Sales</option>
                                        <option value="16">Office Administration</option>
                                        <option value="27">Operations</option>
                                        <option value="47">Pension funds management</option>
                                        <option value="38">Personal Assistant</option>
                                        <option value="23">Procurement/Supply Chain</option>
                                        <option value="45">Production</option>
                                        <option value="34">Projects</option>
                                        <option value="11">Public Relations</option>
                                        <option value="42">Real Estate</option>
                                        <option value="28">Research</option>
                                        <option value="12">Sales</option>
                                        <option value="29">Security</option>
                                        <option value="18">Shipping</option>
                                        <option value="43">Supply Chain</option>
                                        <option value="32">Surveying</option>
                                        <option value="20">Technical</option>
                                        <option value="33">Treasury</option>
                                        <option value="19">Warehousing</option>
                                        <option value="22">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="w-cont">Country Obtained</label>
                                    <select name="work_experience_country_obtained" class="form-control" id="w-cont">
                                        <option>Please select</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d Ivoire (Ivory Coast)">Cote d Ivoire (Ivory Coast)</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El salvador">El salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France Metropolitan
                                        <option value="French Guiana">French Guiana
                                        <option value="French Polynesia">French Polynesia
                                        <option value="French Southern Territories">French Southern Territories
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald
                                            Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                        </option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakstan">Kazakstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgystan">Kyrgystan</option>
                                        <option value="Lao">Lao</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia (FYR)">Macedonia (FYR)</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory Occupied">Palestinian Territory Occupied
                                        </option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines
                                        </option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands
                                        </option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="United States Minor Outlying Islands">United States Minor
                                            Outlying Islands
                                        </option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="desc">Job Description</label>
                                    <textarea name="work_experience_job_description" class="form-control" id="desc" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="f-date">From Date</label>
                                    <input name="work_experience_from_date" type="date" class="form-control" id="f-date">
                                </div>
                                <div class="form-group">
                                    <label for="t-date">To Date</label>
                                    <input name="work_experience_end_date" type="date" class="form-control" id="t-date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-md-12 text-center">
                        <h4>Upload Curriculum Vitae(CV)</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="custom-file">
                                    <input name="cv" type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                                <span class="fileNB">File should be less than 1MB (and of type; jpg, jpeg, png, doc or docx)</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-purple">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane fade col-12 text-center" role="tabpanel" id="alm">
            <h1>Coming Soon!</h1>
        </div>
    </div>
</div>


<?php get_footer(); ?>

<?php if(!empty($response)):?>
    <script>
        swal({
            title: "<?= ucfirst(array_get($response, 'type', 'error')); ?>!",
            text: "<?= array_get($response, 'message') ?>",
            type: "<?= array_get($response, 'type', 'error') ?>"
        });
    </script>
<?php endif ?>

<script>
    $(document).ready(function() {
        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $(".container").attr("class", "container-fluid");
        }

        $('#careerTab a[data-toggle="tab"]').on('shown.bs.tab', function () {
            $('body,html').animate({
                scrollTop: 480
            }, 800);
        });

        $("#m-careerTab").change(function () {
            var i = $(this).val();

            if (i == 0) {
                $('a[href="#vac"]').tab('show');
            } else if (i == 1) {
                $('a[href="#cv"]').tab('show');
            } else if (i == 2) {
                $('a[href="#alm"]').tab('show');
            }
        });

        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.custom-file-control').append(fileName);
        });
    });
</script>

</body>
</html>