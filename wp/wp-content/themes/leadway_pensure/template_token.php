<<<<<<< HEAD
<?php /* Template Name: Enroll */ ?>

<?php

?>

<?php get_header(); ?>

            <!-- Body and Main Content of page -->
    <div class="container-fluid" id="enroll-cont">
        <!-- Navbar -->
        <nav class="navbar hidden-sm-down pOff fixed-top">
            <!-- desktop price charts start -->
            <table class="table table-responsive mOff">
                <tbody>
                <tr>
                    <td>
                        <div id="google_translate_element"></div>
                    </td>
                    <td>
                        <span><i class="fa fa-phone" aria-hidden="true" style="color: #2068a4"></i> 080-Pensure</span>
                    </td>
                    <td>
                        <span class="head-td"> RSA FUNDS</span><br>
                        <span>&#8358;2.3433 <img src="images/pos.png" alt=""></span>
                    </td>
                    <td>
                        <span class="head-td">RETIREE FUNDS</span><br>
                        <span> &#8358;2.3433 <img src="images/neg.png" alt=""></span>
                    </td>
                    <td>
                        <span class="head-td">RSA ACCOUNTS </span><br>
                        <span> 500,000 </span>
                    </td>
                    <td>
                        <a href="calculator.html" class="nav-calc"> <img src="images/calc.png"> <span>Calculator</span></a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-secondary v-trends"><span>&#8594;</span> VIEW TRENDS </button>
                    </td>
                    <td>
                        <span id="date"></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </nav>
        <div class="row" id="background">
            <div class="col-12" style="color:white">
                <div class="row" id="ad-text">

                    <div class="col-sm-6 col-md-5 hidden-xs-down" id="sms-msg">
                        Receive your token via SMS today to get started
                    </div>
                    <div class="col-sm-3 offset-sm-9 col-md-3 offset-md-9 back">
                        <a class="" href="#">
                            <figure>
                                <img src="images/logo-alt.png" alt="" class="img-fluid back-logo">
                                <figcaption class="back"> <i class="fa fa-arrow-left" aria-hidden="true"></i> back to Leadway-Pensure.com </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row enroll">
                    <div class="col-sm-4 hidden-xs-down" id="enroll-msg">
                        <span id="v-mob" style=""> Enroll via mobile today! </span>
                        <p style="font-size:8em;font-weight:600"> 0<sup style="font-size:.2em;position: absolute;
        top: 29%;">%</sup> <span style="font-size:.3em;position: absolute;
        top: 41%;"> Hassle. </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9 offset-sm-3 col-md-7 offset-md-5 token" style="position:absolute; bottom:14%">
                <div class="row" id=token-form>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="req-tab">
                                Request token
                            </div>
                            <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="requ-tab" >
                                Requirements
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="r-token">
                            <h6 class="text-center form-pad mOff enroll-heading" style="color:white"> Fill out the form below to recieve your token instantly! </h6>
                            <form data-parsley-validate id="token-data">
                                <div class="row ">
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> First name </label>
                                        <input name= firstname class="form-control e-fields text-center" type="text" placeholder="Otaru" required="" id='f-name'>
                                    </div>
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Last name </label>
                                        <input name=lastname class="form-control e-fields text-center" type="text" placeholder="Daudu" required="" id='l-name'>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Mobile no </label>
                                        <input name=mobileno class="form-control e-fields text-center" type="number" placeholder="08074808306" required="">
                                    </div>
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Email </label>
                                        <input name=emailaddress class="form-control e-fields text-center" type="text" placeholder="Otarudaudu@iNspireleadership.biz" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center form-pad">

                                       <!-- <a href="enroll.html"> -->
                                        <input class="btn btn-purple validate" id="token-submit" type="" value="Get token">
                                      <!--  </a> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="requirement">
                            <p class=text-center style="padding:150px"> Comming soon! </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-10 token-entry">
            <form data-parsley-validate>
                <div class="row">
                    <div class="col-12 col-sm-4 email-field">
                        <input class="form-control e-fields" type="text" placeholder="Email-address" required="">
                    </div>
                    <div class="col-12 col-sm-4 token-field">
                        <input class="form-control e-fields"  type="text" placeholder="Token no" required="">
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <input type=submit href="" class="btn btn-purple" value="Enroll now">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/progressbar.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/dropzone.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parsley.min.js"></script>
<script>

    $('.enroll-error').modal({
        show: false
    });

</script>
<script>
    var progressbar = new ProgressBar.Line('#progressMark', {
        // Stroke color.
        // Default: '#555'
        color: '#3a3a3a',

        // Width of the stroke.
        // Unit is percentage of SVG canvas' size.
        // Default: 1.0
        // NOTE: In Line shape, you should control
        // the stroke width by setting container's height.
        // WARNING: IE doesn't support values over 6, see this bug:
        //          https://github.com/kimmobrunfeldt/progressbar.js/issues/79
        strokeWidth: 3.1,

        // If trail options are not defined, trail won't be drawn

        // Color for lighter trail stroke
        // underneath the actual progress path.
        // Default: '#eee'
        trailColor: '#f4f4f4',

        // Width of the trail stroke. Trail is always centered relative to
        // actual progress path.
        // Default: same as strokeWidth
        trailWidth: 1.5,

        // Inline CSS styles for the created SVG element
        // Set null to disable all default styles.
        // You can disable individual defaults by setting them to `null`
        // If you specify anything in this object, none of the default styles
        // apply
        svgStyle: {
            display: 'block',

            // Important: make sure that your container has same
            // aspect ratio as the SVG canvas. See SVG canvas sizes above.
            width: '100%',
            height: '33px'
        },

        // Text options. Text element is a <p> element appended to container
        // You can add CSS rules for the text element with the className
        // NOTE: When text is set, 'position: relative' will be set to the
        // container for centering. You can also prevent all default inline
        // styles with 'text.style: null'
        // Default: null
        text: {
            // Initial value for text.
            // Default: null
            value: '0%',

            // Class name for text element.
            // Default: 'progressbar-text'
            className: 'progressbar__label',

            // Inline CSS styles for the text element.
            // If you want to modify all CSS your self, set null to disable
            // all default styles.
            // If the style option contains values, container is automatically
            // set to position: relative. You can disable behavior this with
            // autoStyleContainer: false
            // If you specify anything in this object, none of the default styles
            // apply
            // Default: object speficied below
            style: {
                // Text color.
                // Default: same as stroke color (options.color)
                color: '#a890ba',
                position: 'absolute',
                fontSize: '10px',
                left: '50%',
                top: '50%',
                padding: '50px',
                marginTop: '8px',
                // You can specify styles which will be browser prefixed
                transform: {
                    prefix: true,
                    value: 'translate(-50%, -50%)'
                }
            },

            // Only effective if the text.style is not null
            // By default position: relative is applied to container if text
            // is set. Setting this to false disables that feature.
            autoStyleContainer: true,

            // Only effective if the shape is SemiCircle.
            // If true, baseline for text is aligned with bottom of
            // the SVG canvas. If false, bottom line of SVG canvas
            // is in the center of text.
            // Default: true
            alignToBottom: true
        },

        // Fill color for the shape. If null, no fill.
        // Default: null
        fill: 'rgba(0, 0, 0, 0.5)',

        // Duration for animation in milliseconds
        // Default: 800
        duration: 1200,

        // Easing for animation. See #easing section.
        // Default: 'linear'
        easing: 'easeOut',

        // See #custom-animations section
        // Built-in shape passes reference to itself and a custom attachment
        // object to step function
        from: {color: '#2068a4'},
        to: {color: '#233d70'},
        step: function (state, circle, attachment) {
            circle.path.setAttribute('stroke', state.color);
        },

        // If true, some useful console.warn calls will be done if it seems
        // that progressbar is used incorrectly
        // Default: false
        warnings: false

    });
    //progressbar.animate(0.5, {
    //duration: 800,
    //from: { color: '#000' },
    //to: { color: '#eee' },
    //}, function() {
    //  console.log('Animation has finished');
    //});

</script>

<script>

    function convertFormToJSON(form) {

        var array = jQuery(form).serializeArray();
        var json = {};

        jQuery.each(array, function () {
            json[this.name] = this.value || '';
        });
        return json

    }

    function base64ToBlob(base64, mime)
    {
        mime = mime || '';
        var sliceSize = 1024;
        var byteChars = window.atob(base64);
        var byteArrays = [];

        for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
            var slice = byteChars.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

        return new Blob(byteArrays, {type: mime});
    }

</script>

<script>
    $(document).ready(function () {

        function _(x) {
            return document.getElementById(x).value;
        }

        function __(x) {
            return document.getElementById(x);
        }

        function parse(a, b, c) {
            for (; a < b.length; a++) {
                $(b[a]).val(c[a]);
            }
        }

        var accessed = 0
        //test block for _(x)
        function show(response) {
            alert(response);
        };

        //accessing values of personal information form fields
        var responseA = _('gender');
        var responseB = _('status');
        var responseC = _('birthday');
        var responseD = _('soo');
        var responseE = _('lga');
        var responseF = _('nation');
        var responseG = _('idt');
        var responseH = _('p-email');
        var responseI = _('p-mno');
        var responseJ = _('org');
        var responseK = _('orgAdd');
        var responseL = _('orgLga');
        var responseM = _('orgState');
        var responseN = _('orgNo');
        var responseO = _('doe');
        var responseP = _('sop');
        var responseQ = _('cpfa');
        var responseR = _('pin');
        var responseS = _('k-title');
        var responseT = _('k-lname');
        var responseU = _('k-fname');
        var responseV = _('relationship');
        var responseW = _('k-gender');
        var responseX = _('k-add');
        var responseY = _('k-soo');
        var responseZ = _('k-lga');
        var responseA1 = _('k-mno');


        //accessing all select box ids

        var selectA = __('gender');
        var selectB = __('status');
        var selectC = __('soo');
        var selectD = __('nation');
        var selectE = __('idt');

        //accessing id of input fields

        var inputA = __('lga')

        //accessing innerHTML of Display fields for personal information form responses
        var displayA = __('dGender');
        var displayB = __('dStatus');
        var displayC = __('dBirthday');
        var displayD = __('dSoo');
        var displayE = __('dLga');
        var displayF = __('dNation');
        var displayG = __('dIdt');
        var displayH = __('dp-email');
        var displayI = __('dp-mno');
        var displayJ = __('dOrg');
        var displayK = __('dOrgAdd');
        var displayL = __('dOrgLga');
        var displayM = __('dOrgState');
        var displayN = __('dOrgNo');
        var displayO = __('dDoe');
        var displayP = __('dSop');
        var displayQ = __('dcpfa');
        var displayR = __('dpin');
        var displayS = __('dk-title');
        var displayT = __('dk-fname');
        var displayU = __('dk-lname');
        var displayV = __('drelationship');
        var displayW = __('dkgender');
        var displayX = __('dkadd');
        var displayY = __('dksoo');
        var displayZ = __('dklga');
        var displayA1 = __('dkmno');

        var responseArray1 = [responseA, responseB, responseC, responseD, responseE, responseF, responseG, responseH, responseI];
        var displayArray1 = [displayA, displayB, displayC, displayD, displayE, displayF, displayG, displayH, displayI];


        function validateemail(x) {
            var atposition = x.indexOf("@");
            var dotposition = x.lastIndexOf(".");
            if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
                alert("Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition);
                return false;
            }
        }

 // parsing local goverment html|values based on selected state for pid section

              $('#soo').change(function(){


                var state = document.getElementById('soo').value; 
                console.log(state);
                var lga = document.getElementById('lga');
                var lgalabel = document.getElementById('lga-label');
                lga.parentNode.removeChild(lga);
                lgalabel.parentNode.removeChild(lgalabel);
                var newSelectBox = document.createElement('select');
                newSelectBox.id = 'lga';
                newSelectBox.setAttribute( 'class', 'form-control language col-sm-7 mx-auto' ); 
                newSelectBox.style = 'border: 1px solid white';
                newSelectBox.name = 'pidlga';
                var newLabel = document.createElement('label');
                newLabel.class ='field-label';
                newLabel.id = "lga-label";                 
                var newLabelText = document.createTextNode('LGA');
                var selectHolder = document.getElementById('lgaholder');
                selectHolder.appendChild(newLabel); 
                newLabel.appendChild(newLabelText);
                selectHolder.appendChild(newSelectBox);
                var lga = document.getElementById('lga');

                
                
                if (state === "abia"){

                    lgaArray = [ "Aba North| aba north", "Aba South| aba south", "Arochukwu| Arochukwu", "Bende|bende", "Ikwuano| ikwuano", "Isiala-Ngwa North | isiala-ngwa north", "Isiala-Ngwa South | isiala-ngwa south", "Isuikwato| isuikwato", "Obi Nwa| obi nwa", "Ohafia| ohafia", "Osisioma | osisioma","Ngwa| ngwa", "Ugwunagbo| ugwunagbo", "Ukwa East| ukwa", "Ukwa West| ukwa west","Umuahia North| umuahia north","Umuahia South| umuahia south", "Umu-Neochi| umu-neochi" ];
                   


                }else if (state === "abuja"){
                    lgaArray =  [ "Gwagwalada|gwagwalada", "Kuje| kuje", "Abaji| abaji", "Abuja Municipal| Abuja municipal", "Bwari| bwari", "Kwali|kwali" ];

                }else if (state === "adamawa"){
                    lgaArray  = ["Demsa|demsa", "Fufore|fufore", "Ganaye|ganaye", "Gireri|gireri", "Gombi|gombi", "Guyuk|guyuk", "Hong|hong", "Jada|jada", "Lamurde|lamurde", "Madagali|madagali", "Maiha|maiha", "Mayo-Belwa|mayo-belwa", "Michika|michika", "Mubi North|mubi north", "Mubi South| mubi south", "Numan|numan", "Shelleng|shelleng", "Song|song", "Toungo|toungo", "Yola North| yola north", "Yola South|yola south"];

                }else if (state === "akwaibom"){
                    lgaArray = ["Abak|abak", "Eastern Obolo|eastern obolo", "Eket|eket","Esit Eket|esit eket","Essien Udim|essien udim", "Etim Ekpo|etim ekpo", "Etinan|etinan", "Ibeno|ibeno", "Ibeskipo Asutan|ibeskipo asutan","Ibiono Ibom|ibiono ibom","ika|ika","ikono|ikono", "Ikot Abasi|ikot abasi","Ikot Ekpene|ikot ekpene", "Ini|ini","Itu|itu","Mbo|mbo","Mkpat Enin|mkpat enin","Nsit Atai|nsit atai","Nsit Ibom|nsit ibom", "Nsit Ubium|nsit ubium","Obot Akara|obot akara","Okobo|okobo","Onna | onna","Oron|oron","Oruk Anam| oruk anam", "Udung Uko | udung uko", "ukanafun|ukanafun", "Uruan|uruan", "Urue-Offong/Oruko| urue-offong/oruko"];
                }else if (state === "anambra"){
                    lgaArray = ["Aguata|aguata", "Anambra East | anambra east", "Anambra West|anambra west", "Anaocha|anaocha", "Awka North|awka north", "Ayamelum|ayamelum", "Dunukofia|dunukofia", "Ekwusigo|ekwusigo", "Idemili North | idemili north", "Ihiala|ihiala", "Njikoka|njikoka", "Nnewi north| nnewi north", "nnewi south| nnewi south", "Ogbaru|ogbaru", "Onitsha north|onitsha north", "Onitsha south | onitsha south", "Orumba North|orumba north", "Oyi|oyi"];
                }else if (state === "bauchi"){
                    lgaArray = ["Alkaleri|alkaleri", "Bauchi|bauchi", "Bogoro|bogoro", "Damban|damban", "Darazo|darazo", "Dass|dass", "Ganjuwa|ganjuwa","Giade|giade", "Itas/Gadau|itas/gadau","Jama'are|jama'are","Katagum|katagum", "Kirfi|kirfi", "Misau|misau", "Ningi|ningi", "Shira|shira", "Tafawa-Balewa|tafawa-balewa","Toro|toro","Warji|warji","Zaki|zaki"];, 
                }else if(state === "bayelsa"){
                    lgaArray = ["Brass|brass", "Ekeremor|ekeremor","Kolokuma/Opokuma|Kolokuma/Opokuma","Nembe|nembe","Ogbia|ogbia","Sagbama|sagbama","Southern Jaw|southern jaw", "yenegoa"] 
                }else if(state === "benue"){
                    lgaArray = ["Ado|ado", "Agatu|agatu", "Apa|apa", "Buruku|buruku", "Gboko|gboko", "Guma|guma", "Gwer East|gwer east", "Gwer West|gwer west","Kastina-Ala|kastina-ala","Kwande|kwande","Logo|logo","Makurdi|makurdi", "Obi|obi","Ogbadibo|ogbadibo","Oju|oju","Okpokwu|okpokwu","Ohimini|ohimini","Oturkpo|oturkpo","Tarka|tarka","Ukum|ukum","Ushongo|ushongo","Vandeikya|vandeikya"];
                }else if(state === "bornu"){
                    lgaArray = ["Abadam|abadam", "Askira|askira", "Bama|bama", "Bayo|bayo", "Biu| biu", "Chibok|chibok", "Damboa|damboa", "Dikwa|dikwa", "Gubio|gubio", "Guzamala|guzamala", "Gwoza|gwoza", "Hawul|hawul", "Jere|jere", "Kaga|kaga","Kala/Balge|kala/balge","Kondua|kondua","Kukuwa|kukuwa","Kwaya Kusar|Kwaya kusar", "Mafa|mafa","Magumeri|magumeri","Maiduguri|maiduguri","Marte|marte","Mobbar|mobbar","Monguno|monguno","Ngala|ngala","Nganzai|nganzai","Shani|shani"];
                }else if(state === "cross-river"){
                    Akpabuyo 

                    lgaArray = ["Akpabuyo|akpabuyo", "Odukpani|Odukpani","Akamkpa|Akamkpa","Biase|Biase","Abi|Abi","Ikom|Ikom", "Yarkur|Yakur", "Odubra|Odubra", "Boki|boki", "Ogoja|Ogoja", "Boki|Boki", "Ogoja|Ogoja", "Yala|yala", "Obanliku|Obanliku", "Obudu|Obudu","Calabar South |Calabar South", "Etung|Etung", "Bekwara|Bekwara", "Bakassi|Bakassi", "Calabar Municipality| Calabar Municipality"];
                }else if(state === "delta"){
                    lgaArray = [ "Asaba Oshimili| Asaba Oshimili", "Aniocha|Aniocha", "Aniocha south| Aniocha south", "Ika South|Ika South", "Ika North-East| Ika North-East", "Ndokwa West| Ndokwa West", "Ndokwa East|Ndokwa East", "Isoko south| Isoko South","Isoko North| Isoko North", "Bomadi|Bomadi", "Burutu|Burutu", "Ughelli South| Ughelli South", "Ughelli North| Ughelli North", "Ethiope West | Ethiope West", "Ethiope East| Ethiope East", "Sapele| Sapele", "Okpe|Okpe", "Warri North|Warri North", "Warri South|Warri South", "Uvwie|Uvwie", "Udu|Udu", "Warri Central|Warri Central", "Ukwani|Ukwani","Oshimili North|Oshimili North", "Patani|Patani"];
                }else if (state === "ebonyi"){
                    lgaArray = ["Afikpo South| Afikpo South", "Afikpo North|Afikpo North", "Onicha|Onicha","Ohaozara|Ohaozara","Abakaliki|Abakaliki","Ishielu|Ishielu","lkwo|lkwo","Ezza|Ezza","Ezza South| Ezza South","Ohaukwu|Ohaukwu","Ebonyi|Ebonyi","Ivo|Ivo"];
                }else if (state === "edo"){
                    lgaArray = [];
                }else if (state === "ekiti"){
                    lgaArray = [];
                }else if (state === "enugu"){
                    lgaArray = [];
                }else if (state === "gombe"){
                    lgaArray = [];
                }else if (state === "imo"){
                    lgaArray = [];
                }else if (state === "jigawa"){
                    lgaArray = [];
                }else if (state === "kaduna"){
                    lgaArray = [];
                }else if (state === "kano"){
                    lgaArray = [];
                }else if (state === "kastina"){
                    lgaArray = [];
                }else if (state === "kebbi"){
                    lgaArray = [];
                }else if (state === "kogi"){
                     lgaArray = [];
                }else if (state === "kwara"){
                    lgaArray = [];
                }else if (state === "lagos"){
                    lgaArray = [];
                }else if (state === "nasarawa"){
                   lgaArray = [];
                }else if ( state === "niger"){
                   lgaArray = [];
                }else if ( state === "ogun"){
                    lgaArray = [];
                }else if (state === "ondo"){
                    lgaArray = [];
                }else if (state === "osun"){
                    lgaArray = [];
                }else if (state === "oyo"){
                    lgaArray = [];
                }else if (state === "plateau"){
                    lgaArray = [];
                }else if (state === "rivers"){
                    lgaArray = [];
                }else if (state === "sokoto"){
                     lgaArray = [];
                }else if (state === "taraba"){
                    lgaArray = [];
                }else if (state === "yobe"){
                    lgaArray = [];
                }else if (state === "zamfara"){
                    lgaArray = [];
                }else{

                 return false 
                };

                 for (var lgaOption in lgaArray){
                  var selectedLga = lgaArray[lgaOption].split("|");
                  var optionsFeed =  document.createElement("option"); 
                  optionsFeed.value = selectedLga[1]; 
                  optionsFeed.innerHTML = selectedLga[0];
                 console.log(selectedLga)
                 lga.appendChild(optionsFeed)
                //$(div.lga).find(select).appendChild()

                 }

            }); 



               // parsing local goverment html|values based on selected state for employment section

              $('#orgState').change(function(){


                var state = document.getElementById('orgState').value; 
                console.log(state);
                var lga = document.getElementById('orgLga');
                var lgalabel = document.getElementById('orgLgaLabel');
                lga.parentNode.removeChild(lga);
                lgalabel.parentNode.removeChild(lgalabel);
                var newSelectBox = document.createElement('select');
                newSelectBox.id = 'orgLga';
                newSelectBox.setAttribute( 'class', 'form-control language col-sm-7 mx-auto' ); 
                newSelectBox.style = 'border: 1px solid white';
                newSelectBox.name = 'organisationlga';
                var newLabel = document.createElement('label');
                newLabel.setAttribute('class', 'field-label');
                newLabel.id = "orgLgaLabel";                 
                var newLabelText = document.createTextNode('LGA');
                var selectHolder = document.getElementById('orgLgaHolder');
                selectHolder.appendChild(newLabel); 
                newLabel.appendChild(newLabelText);
                selectHolder.appendChild(newSelectBox);
                var lga = document.getElementById('orgLga');

                
                
                if (state === "abia"){

                    lgaArray = [ "Aba North|a", "Aba South|b", "Arochukwu|c", "Bende|d", "Ikwuano|e", "Isiala-Ngwa North |f", "Isiala-Ngwa South |b", "Isuikwato|c", "Obi Nwa|d", "Ohafia|e", "Osisioma |f","Ngwa|g", "Ugwunagbo|g", "Ukwa East|g", "Ukwa West|g","Umuahia North|g","Umuahia South|g", "Umu-Neochi|h" ];
                   


                }else if (state === "abuja"){
                    lgaArray =  [ "Gwagwalada|g", "Kuje|h", "Abaji|i", "Abuja Municipal|j", "Bwari|k", "Kwali|i" ];

                }else 

                 return false 

                 for (var lgaOption in lgaArray){
                  var selectedLga = lgaArray[lgaOption].split("|");
                  var optionsFeed =  document.createElement("option"); 
                  optionsFeed.value = selectedLga[1]; 
                  optionsFeed.innerHTML = selectedLga[0];
                 console.log(selectedLga)
                 lga.appendChild(optionsFeed)

                 }

            }); 


               // parsing local goverment html|values based on selected state for next of kin section

              $('#k-soo').change(function(){


                var state = document.getElementById('k-soo').value; 
                console.log(state);
                var lga = document.getElementById('k-lga');
                var lgalabel = document.getElementById('k-lga-label');
                lga.parentNode.removeChild(lga);
                lgalabel.parentNode.removeChild(lgalabel);
                var newSelectBox = document.createElement('select');
                newSelectBox.id = 'k-lga';
                newSelectBox.setAttribute( 'class', 'form-control language col-sm-7 mx-auto' ); 
                newSelectBox.style = 'border: 1px solid white';
                newSelectBox.name = 'kinlga';
                var newLabel = document.createElement('label');
                newLabel.setAttribute('class','field-label');
                newLabel.id = "k-lga-label";                 
                var newLabelText = document.createTextNode('LGA');
                var selectHolder = document.getElementById('k-lga-holder');
                selectHolder.appendChild(newLabel); 
                newLabel.appendChild(newLabelText);
                selectHolder.appendChild(newSelectBox);
                var lga = document.getElementById('k-lga');

                
                
                if (state === "abia"){

                    lgaArray = [ "Aba North|a", "Aba South|b", "Arochukwu|c", "Bende|d", "Ikwuano|e", "Isiala-Ngwa North |f", "Isiala-Ngwa South |b", "Isuikwato|c", "Obi Nwa|d", "Ohafia|e", "Osisioma |f","Ngwa|g", "Ugwunagbo|g", "Ukwa East|g", "Ukwa West|g","Umuahia North|g","Umuahia South|g", "Umu-Neochi|h" ];
                   


                }else if (state === "abuja"){
                    lgaArray =  [ "Gwagwalada|g", "Kuje|h", "Abaji|i", "Abuja Municipal|j", "Bwari|k", "Kwali|i" ];

                }else 

                 return false 

                 for (var lgaOption in lgaArray){
                  var selectedLga = lgaArray[lgaOption].split("|");
                  var optionsFeed =  document.createElement("option"); 
                  optionsFeed.value = selectedLga[1]; 
                  optionsFeed.innerHTML = selectedLga[0];
                 console.log(selectedLga)
                 lga.appendChild(optionsFeed)
                //$(div.lga).find(select).appendChild()

                 }

            }); 


        //setting initial progress-text content
        $('#progress-text').html("The journey of a thousand miles begins with one step, here it begins with four!")

        var formInstance = $('.demo-form');
        $('.form-navigation .next').click(function () {

        });

        // switch screen function on click
        $("#1c").click(function () {

            if ($('.demo-form').parsley().validate({group: 'block1', force: true})) {
                alert("validated")
                //updating values of personal information form fields
                responseA = _('gender');
                responseB = _('status');
                responseC = _('birthday');
                responseD = _('soo');
                responseE = _('lga');
                responseF = _('nation');
                responseG = _('idt');
                responseH = _('p-email');
                responseI = _('p-mno');

                //grouping response and display areas
                responseArray1 = [responseA, responseB, responseC, responseD, responseE, responseF, responseG, responseH, responseI];
                displayArray1 = [displayA, displayB, displayC, displayD, displayE, displayF, displayG, displayH, displayI];


                $("#pid, #pid-head, #pid-form, #pid-button").fadeOut(300, function () {
                    $("#employer, #employer-head, #employer-form, #employer-button").fadeIn(500, progressbar.animate(0.2, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('20%')));

                    //setting progress-text
                    $('#progress-text').html("We know you should do it for the passion, doing it for the money isn't bad too...")
                });


                $("#2b").click(function () {
                    $("#employer, #employer-head, #employer-form, #employer-button").fadeOut(300, function () {
                        $("#pid, #pid-head, #pid-form, #pid-button").fadeIn(500, progressbar.animate(0, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('0%')));
                        $('#progress-text').html("The journey of a thousand miles begins with one step, here it begins with four!")
                    });
                });

            } else {
                return false;
            }

        });


        $("#2c").click(function () {
            if ($('.demo-form').parsley().validate({group: 'block2'})) {
                alert("block2 validated")
                // updating values for employment responses
                responseJ = _('org');
                responseK = _('orgAdd');
                responseL = _('orgLga');
                responseM = _('orgState');
                responseN = _('orgNo');
                responseO = _('doe');
                responseP = _('sop');
                responseQ = _('cpfa');
                responseR = _('pin');


                // grouping response and display areas
                responseArray2 = [responseJ, responseK, responseL, responseM, responseN, responseO, responseP, responseQ, responseR];
                displayArray2 = [displayJ, displayK, displayL, displayM, displayN, displayO, displayP, displayQ, displayR];

                $("#employer, #employer-head, #employer-form, #employer-button").fadeOut(300, function () {
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('40%')));
                    $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                });

                $("#3b").click(function () {
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function () {
                        $("#employer, #employer-head, #employer-form, #employer-button").fadeIn(500, progressbar.animate(0.2, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('20%')));
                        $('#progress-text').html("We know you should do it for the passion, doing it for the money isn't bad too...")
                    });
                });
            } else {
                return false;
            }
        });
        $("#3c").click(function () {

            if ($('.demo-form').parsley().validate({group: 'block3'})) {
                alert("block3 validated")

                // updating values for employment responses
                responseS = _('k-title');
                responseT = _('k-lname');
                responseU = _('k-fname');
                responseV = _('relationship');
                responseW = _('k-gender');
                responseX = _('k-add');
                responseY = _('k-soo');
                responseZ = _('k-lga');
                responseA1 = _('k-mno');


                // grouping response and display areas
                responseArray3 = [responseS, responseT, responseU, responseV, responseW, responseX, responseY, responseZ, responseA1];
                displayArray3 = [displayS, displayT, displayU, displayV, displayW, displayX, displayY, displayZ, displayA1];


                $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function () {
                    $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeIn(500, progressbar.animate(0.6, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('60%')));
                    $('#progress-text').html(" It's about time we saw that pretty face :)")
                });


                $("#4b").click(function () {
                    $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeOut(300, function () {
                        $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('40%')));
                        $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                    });

                });
            } else {
                return false;
            }
        });


        $("#4c").click(function () {

                var form = document.getElementById('enroll-form');
                var json = convertFormToJSON(form)
                console.log(JSON.stringify(json));

            if (document.querySelector('.dz-image-preview') !== null || $("#user-image").val() !== null) {
                $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeOut(300, function () {
                    $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeIn(500, progressbar.animate(0.8, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('80%')));
                    $('#progress-text').html(" Just checking we crossed our t's and dotted our i's! ")
                });


                $("#5b").click(function () {
                    $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeOut(300, function () {
                        $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeIn(500, progressbar.animate(0.6, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('60%')));
                        $('#progress-text').html(" It's about time we saw that pretty face :)")
                    });
                });
                parse(accessed, displayArray1, responseArray1);
                parse(accessed, displayArray2, responseArray2);
                parse(accessed, displayArray3, responseArray3);

            } else {
                alert("Upload your image to continue")
                return false
            }
        });

        function uint8ToString(buf) {
            var i, length, out = '';
            for (i = 0, length = buf.length; i < length; i += 1) {
                out += String.fromCharCode(buf[i]);
            }
            return out;
        }

        $('#5c').click(function () {

            //getting my form id
            var form = document.getElementById('enroll-form')

            // binding the submit action to ajax push
            jQuery(form).bind('submit', function (event) {
                event.preventDefault();
                var form = this;
                var json = convertFormToJSON(form);
                


                if($('#user-image').val() == null) {
                    alert ("please enter an image")
                    return;
                }

                var image = $('#user-image').prop('files')[0];

                var reader = new FileReader();
                reader.readAsBinaryString(image);

                var blob;
                reader.onload = function() {
                    blob = btoa(reader.result);
                    json['image'] = blob;

                    console.log(JSON.stringify(json))

        //Converting JSON object to string format
                    var myJSON = JSON.stringify(json);

                  

                    $.ajax({
                        type: "POST",
                        url: "submit.php",
                        data: myJSON,
                        dataType: "json",
                    }).done(function () {
                        $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeOut(300, function () {
                            //pass in thank you view
                            $('#thankyou').fadeIn(500, progressbar.animate(1, {
                                duration: 800,
                                from: {color: '#2068a4'},
                                to: {color: '#233d70'},
                            }, progressbar.setText('100%')));
                            $('#progress-text').html(" Welcome onboard the leading team ")
                        });


                    }).fail(function () {

                        //codeblock for activating modal programmatically
                        $('.enroll-error').modal('show')
                    })
                };

            })
        });

    });
  console.log(myJSON)

</script>
<script>
    Dropzone.options.upload = false
    $(document).ready(function () {
        $("#upload").dropzone({
            url: "/uploads",
            dictDefaultMessage: ' Click or drag a passport sized photograph',
            addRemoveLinks: true,
            thumbnailHeight: 144,
            thumbnailWidth: 144,
            maxFiles: '1',
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function (file, done) {
                reader = new FileReader();
                reader.onload = handleReaderLoad;
                reader.readAsDataURL(file);
                function handleReaderLoad(evt) {
                    document.getElementById("9")
                        .setAttribute('value', evt.target.result);
                    form = $('#upload');
                    $.ajax({
                        type: "POST",
                        url: "/upload",
                        data: form.serialize(),
                    });
                }
            },
            init: function () {
                this.on("addedfile", function () {
                    if (this.files[1] != null) {
                        this.removeFile(this.files[0]);
                    }
                });
            }
        })
    });
</script>
=======
<?php /* Template Name: Token */ ?>

<?php get_header(); ?>

<style>
    .spinner {
        text-align: center;
        width: 20px;
        height: 20px;
        display: none;

        position: relative;
        margin: 10px auto;
    }

    .double-bounce1, .double-bounce2 {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #333;
        opacity: 0.6;
        position: absolute;
        top: 0;
        left: 0;

        -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
        animation: sk-bounce 2.0s infinite ease-in-out;
    }

    .double-bounce2 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    @-webkit-keyframes sk-bounce {
        0%, 100% {
            -webkit-transform: scale(0.0)
        }
        50% {
            -webkit-transform: scale(1.0)
        }
    }

    @keyframes sk-bounce {
        0%, 100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        }
        50% {
            transform: scale(1.0);
            -webkit-transform: scale(1.0);
        }
    }
</style>

<!-- Body and Main Content of page -->
<div class="container-fluid" id="enroll-cont">

    <?php include_once('partials/chart-header.php') ?>

    <div class="row" id="background">
        <div class="col-12" style="color:white">
            <div class="row" id="ad-text">

                <div class="col-sm-6 col-md-5 hidden-xs-down" id="sms-msg">
                    Receive your token via EMAIL today to get started
                </div>
                <div class="col-sm-3 offset-sm-9 col-md-3 offset-md-9 back">
                    <a class="" href="#">
                        <figure>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" alt=""
                                 class="img-fluid back-logo">
                            <figcaption class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> back to
                                Leadway-Pensure.com
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="row enroll">
                <div class="col-sm-4 hidden-xs-down" id="enroll-msg">
                    <span id="v-mob" style=""> Enroll via mobile today! </span>

                    <p style="font-size:8em;font-weight:600"> 0<sup style="font-size:.2em;position: absolute;
        top: 29%;">%</sup> <span style="font-size:.3em;position: absolute;
        top: 41%;"> Hassle. </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 offset-sm-3 col-md-7 offset-md-5 token" style="position:absolute; bottom:14%">
            <div class="row" id=token-form>
                <div class="col-12">
                    <div class="row">
                        <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="req-tab">
                            Requirement
                        </div>
                        <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="requ-tab">
                            Request Token
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div id="requirement">
                        <h6 class="text-center form-pad mOff enroll-heading" style="color:white"> Fill out the form
                            below to recieve your token instantly! </h6>

                        <form data-parsley-validate id="token-data" class="token-data">
                            <input type="hidden" name="formName" value="token-form" />

                            <div class="row ">
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> First Name </label>
                                    <input name=firstname class="form-control e-fields text-center" type="text"
                                           placeholder="stark" required="" id='f-name' data-parsley-group="block1">
                                </div>
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Middle Name </label>
                                    <input name=middlename class="form-control e-fields text-center" type="text"
                                           placeholder="snow" required="" id='l-name' data-parsley-group="block1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Surname </label>
                                    <input name=surname class="form-control e-fields text-center" type="text"
                                           placeholder="John" required="" data-parsley-group="block1">
                                </div>
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Email </label>
                                    <input name=emailaddress class="form-control e-fields text-center" type="text"
                                           placeholder="Johnsnow@xxxxxxx" required="" data-parsley-group="block1" id="token-email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Mobile no </label>
                                    <input name=mobileno class="form-control e-fields text-center" type="number" 
                                           placeholder="080xxxxxxx" data-parsley-minlength="11"
                                           data-parsley-maxlength="15" required="" data-parsley-group="block1">
                                </div>
                                <div class="col-12 col-sm-6 text-center form-pad" id="button-holder">
                                    <!-- enrollment field -->

                                    <button class="btn btn-purple" id="recaptcha"> I'm not a Robot</button>

                                    <!--  g-recaptcha 6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7 -->
                                </div>
							</div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center form-pad">

                            <!-- <a href="enroll.html"> -->
                            <div class="spinner">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                            <!--  </a> -->
                        </div>
                    </div>
                    </form>
                </div>
                <div id="r-token">
                    <div class="requirementHolder">
                        <h6 class="text-center">
                            You're opting to board the <span style="color:#"> Leading </span> team.</br> Below a re the
                            requirements necessary to complete the process </h6>

                        <ol class="enrollmentRequirement text-center">
                            <li> Fill out your name, phone number, mobile no and email address to recieve token</li>
                            <li> Information on your Personal, Employment and next of Kin</li>
                            <li> White background passport (max size = 500kb)</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-10 token-entry">
        <form data-parsley-validate method="POST" action="/enroll" id="token-validation-form">
            <input type="hidden" name="formName" value="token-validate-form" />
            <div class="row">
                <div class="col-12 col-sm-4 email-field">
                    <input name="email" class="form-control e-fields" type="text" placeholder="Email-address"
                           required="" id="logon-email" readonly="">
                </div>
                <div class="col-12 col-sm-4 token-field">
                    <input name="otp" class="form-control e-fields" type="text" placeholder="Token no" required="true">
                </div>
                <div class="col-12 col-sm-3 text-center">
                    <input type=submit class="btn btn-purple" value="Enroll now" id="call-json">
                </div>
            </div>
        </form>

        <form action="/enroll" id="validated-token-form" method="POST">
            <input type="hidden" name="token" id="valid-token">
            <input type="hidden" name="email" id="valid-email">
        </form>
    </div>
</div>

</div>
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/progressbar.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parsley.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/sweetalert/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        $('#requ-tab').click(function () {
            $('#r-token').fadeOut(100, function () {
                $('#requirement').fadeIn(200)
            });
        });

        $('#req-tab').click(function () {
            $('#requirement').fadeOut(100, function () {
                $('#r-token').fadeIn(200)
            });
        });
    });
    // function for submitting token request form after validation successful

    function notRobot() {

        var submitTokenForm = document.getElementById('token-data').submit;
    }

    //$('token-submit').click(function(){

    //var tokenFormValidationCheck = document.getElementById('token-data');
    //console.log(tokenFormValidationCheck);

    //if($('.token-data').parsley().validate({group: 'block1'})){

    //alert ("successful validation check");
    //var tokenSubmit = document.getElementById('token-submit');
    //tokensubmit.setAttribute('data-sitekey', '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7' );
    //tokensubmit.setAttribute('data-callback', 'notRobot()');
    //tokensubmit.setAttribute('type', 'submit');

    //}else {

    //}
    //});

    function convertFormToJSON(form) {

        var array = jQuery(form).serializeArray();
        var json = {};

        json['clientID'] = '9dy8earw04r09wjefsdp90zsjs';
        jQuery.each(array, function () {
            json[this.name] = this.value || '';
        });
        return json;

    }
    
   $('#recaptcha').click(function(){
       
       var tokenEmail = document.getElementById('token-email').value;
       var g_captcha_response = $("#g-recaptcha-response").val() 
         console.log(g_captcha_response);
         console.log(tokenEmail);   
           
       $('#logon-email').val(tokenEmail);
       
       });
    
   


    //sample string generation block

    $('#call-json').click(function () {
        var form = document.getElementById('token-data');
        var json = convertFormToJSON(form);
        console.log(JSON.stringify(json))
    });


    var spinner = $(".spinner");

    var form = $("#token-data");
    form.bind('submit', function (event) {
        event.preventDefault();
        spinner.show();

        $.ajax({
            type: "POST",
            url: "<?php echo get_bloginfo('template_directory'); ?>/submit.php",
            data: form.serialize(),
            dataType: "json"
        }).done(function (body) {
            spinner.hide();
            var responseText = body.response.Message;
            if (body.response.StatusCode == "00") {
                responseText = "A mail has been sent to your email address with instructions. Please check.";
                swal({
                    title: "Successful!",
                    text: responseText,
                    type: "success"
                });

                $('#logon-email').val(body.request.emailaddress);
            } else {
                swal({
                    title: "Error!",
                    text: responseText,
                    type: "error"
                });
            }
        }).fail(function (body) {
            spinner.hide();
        })
    });

    // validate OTP form
    // redirects to enroll page if successful
    var validateForm = $('#token-validation-form');
    validateForm.bind('submit', function (event) {
        event.preventDefault();
        spinner.show();

        $.ajax({
            type: "POST",
            url: "<?php echo get_bloginfo('template_directory'); ?>/submit.php",
            data: validateForm.serialize(),
            dataType: "json"
        }).done(function (body) {
            spinner.hide();
            var responseText = body.response.Message;
            if (body.response.StatusCode == "00") {
                swal({
                    title: "Successful!",
                    text: responseText,
                    type: "success"
                });
                $('#valid-token').val(body.request.otp);
                $('#valid-email').val(body.request.email);
                $('#validated-token-form').submit();
            } else {
                swal({
                    title: "Error!",
                    text: responseText,
                    type: "error"
                });
            }
        }).fail(function (response) {
            spinner.hide();
            swal({
                title: "Error!",
                type: "error"
            });
        })
    });
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
>>>>>>> 5d17c2a9d125503ea7fc21761d5db32663c80f0d

</body>
</html>