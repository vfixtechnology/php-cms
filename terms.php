<?php
    error_reporting(0);
    include "admin/conn.php";

    //fetch faq
    $faq = mysqli_query($con,"SELECT * FROM faqs ORDER BY id DESC");
    
      //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Terms & Conditions - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
 

    <!-- Main Header -->
    <?php include "header.php"; ?>
        <!--End Header Upper-->


    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                    </div>
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-20.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Terms & Conditions</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li>Faq’s</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section class="faq-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                
                <h2 class="pb-3">Terms & Conditions</h2>
                <p><b>PLEASE READ THESE TERMS AND CONDITIONS OF USE CAREFULLY. THESE TERMS AND CONDITIONS MAY HAVE CHANGED SINCE YOUR LAST VISIT TO THIS WEBSITE. BY USING THIS WEBSITE, YOU (“YOU”) INDICATE YOUR ACCEPTANCE OF THESE TERMS AND CONDITIONS. IF YOU DO NOT ACCEPT THESE TERMS AND CONDITIONS, THEN DO NOT USE THIS WEBSITE OR USE ANY OF Global Worldwide Solution’S SERVICES. IF YOU ARE PARTY TO A SEPARATE CLICK THROUGH OR SIGNED AGREEMENT WITH Global Worldwide Solution RELATING TO SERVICES OR DELIVERABLES, THAT AGREEMENT SHALL SUPERSEDE THIS AGREEMENT WITH RESPECT TO SUCH SERVICES OR DELIVERABLES.</b></p>
    <br><br><h5 class=" text-left"><b>1. Copyright and Trademark Information</b></h5>
               
                <p class="text-left">This website (this "Website"), and the information which it contains, such as text, graphics, images, data, reports, links, information obtained from Global Worldwide Solution's licensors, services and other material and Deliverables (as defined below) contained on this Website or provided through Services (as defined below) made available on the Website (collectively, "Content") are the property of Global Worldwide Solution, its affiliates and its licensors, and are protected from unauthorized copying and dissemination by United States copyright law, trademark law, international conventions and other intellectual property laws. By way of example only, and not as a limitation, "Global Worldwide Solution" and the Global Worldwide Solution logo are registered trademarks of Global Worldwide Solution, Inc., under the applicable laws of the United States and/or other countries. Other Global Worldwide Solution product or service names or logos appearing on this Website are either trademarks or registered trademarks of Global Worldwide Solution, Inc. and/or its affiliates. The absence of a product or service name or logo from this list does not constitute a waiver of Global Worldwide Solution's trademark or other intellectual property rights concerning that name or logo.</p>
                <p class="text-left">All other product names are trademarks or registered trademarks of their respective owners.</p>
            <h5 class=" text-left"><b>2. Services, Subscriptions and Fees</b></h5>
                <p class="text-left"><b>Services Available Through this Website</b>. Global Worldwide Solution makes available certain services and features via this Website (each a “Service” and collectively, “Services”). Depending on the Service, such Service may be (1) publicly accessible without any purchase of the Service required; (2) accessible only to those who have purchased the Service; or (3) accessible to only those who have subscribed to that Service for a fee. By using this Website, You agree to only use the Service or Services that are publicly accessible or that You have purchased or to which You have subscribed. If You choose to use, purchase or subscribe to one of Global Worldwide Solution's Services as may be made available from time to time, additional terms and conditions may be imposed by Global Worldwide Solution via a separate click through or signed agreement. </p>
                <p class="text-left"><b>Rights to Use Website and Services</b>. Your right to use the Website and Services is limited in scope, revocable, personal, non-transferable and non-exclusive. Provided that You comply at all times with these Terms and Conditions and any separate agreement between You and Global Worldwide Solution, and subject to the limitations set forth herein, Global Worldwide Solution will provide You with access to the Website and, to the extent You subscribe or purchase Services, the Services. You are responsible for obtaining any equipment and Internet service necessary to access the Website and Services</p>
                <p class="text-left"><b>Deliverables; User Licenses</b>. You will receive specific ordered report or other deliverable (“Deliverable”) or You will receive a certain number of “User” licenses. If You choose to subscribe to Global Worldwide Solution’s Services on an ongoing basis, all Users will have access to Services, as well as any additional features made generally available on the Website while You are in good standing. Users may use help, FAQ’s, and other support made generally available on the Website. If You are simply purchasing a Deliverable available from the Website, then these terms apply only to that purchase and do not provide any ongoing right to access or use the Services. Numerous reports, data and other services are offered at the Website for additional fees. All terms used but not defined herein are set forth on the Website. You hereby covenant to ensure that all users that gain access to the Website and/or the Services from You are bound by these terms. Except as expressly set forth in this Agreement or other written agreement between You and Global Worldwide Solution, no license or other right in or to the Website, Services or Content are granted to You, by implication, estoppel, or otherwise, and all such licenses and rights are hereby reserved. </p>
                <p class="text-left"><b>Fees</b>. You shall pay all fees or charges to Your account with Global Worldwide Solution in accordance with the fees, charges, and billing terms in effect at the time You subscribe to the Services or that You order the applicable Content from the Services. You shall be responsible for any and all use, sales or other taxes arising from Your use of any Deliverables or Services provided by Global Worldwide Solution or its third party suppliers. Payments must be made according to these Terms and Conditions or any separate written agreement with Global Worldwide Solution. </p>
                <p class="text-left"><b>Login Credentials</b>. If Global Worldwide Solution provides You with a username and/or password ("Login Credentials"), You agree that You are responsible for protecting Your Login Credentials from unauthorized use, and You are responsible for all activity that occurs under those Login Credentials. You agree to notify us immediately if You believe that any of Your Login Credentials has been or may be used without Your permission so that appropriate action can be taken. Global Worldwide Solution is not responsible for any loss or damage caused by, or expense incurred by You as a result of, Your failure to safeguard Your Login Credentials. </p>
                <p class="text-left"><b>Term</b> Your subscription to Services or access to paid Content shall commence on the date You first used the Services or download or otherwise receive such Content, and shall continue for the period of time for which You have subscribed to the Services, unless earlier terminated or extended pursuant hereto. If You choose to subscribe to our Services on an ongoing basis, these terms and conditions will renew automatically for successive periods of time equal to the duration of Your initial subscription or for such renewal period as You may otherwise provide on the Website pages in which You subscribe to the Services, unless (1) for an annual subscription or other subscription term or renewal term longer than one month, either You or Global Worldwide Solution provide notice of termination more than thirty (30) days before the end of the then-applicable subscription term; or (2) for all other subscriptions, You or Global Worldwide Solution provide notice of termination before the end of the then-applicable subscription term. Either party may terminate a subscription Agreement for breach upon thirty (30) days prior written or e-mailed notice unless such breach is cured in that thirty (30) day period. You will have a perpetual license to use any Content You download during the Term, subject to the terms and conditions of Section 4. </p>
                <p class="text-left"><b>Publicity</b>. Unless otherwise agreed by Global Worldwide Solution, Your purchase of a Service constitutes granting the right to use Your name and Your company’s name and logo in Global Worldwide Solution’s on-line and/or printed marketing materials and/or in the Website, to disclose that You and/or Your company are a client of Global Worldwide Solution. </p>
            <h5 class=" text-left"><b>3. The Website Does Not Provide Commercial Advice</b></h5>
                <p class="text-left">This Website, Services and the Content are for informational purposes only. Global Worldwide Solution collects data from data providers all over the world; Global Worldwide Solution has not verified any such data or any Content on the Website and cannot and does not provide any assurances or warranties whatsoever regarding the accuracy or completeness of any such data or Content.</p>
            <h5 class=" text-left"><b>4. Use of Content</b></h5>
                <p class="text-left">You may view, copy, download, and print Content, subject to the following conditions: (i) the Content may be used solely for Your internal informational purposes, and no part of the Website, Services, or Content may be reproduced, transmitted or otherwise distributed in any form, by any means, electronic or mechanical, including photocopying and recording for any other purpose; (ii) the Content shall not be accessed or used in any manner restricted by the robot.txt file available on this Website; and (iii) copyright, trademark and other proprietary notices may not be removed from any Content or other materials obtained from the Services.</p>
                <p class="text-left">You shall not: (a) modify, adapt or create derivative works based on the Website, the Services available from Global Worldwide Solution or the Website’s Content; (b) "frame" or "mirror" any Content or create Internet “links” to or from the Website; or (c) disassemble, reverse engineer, or decompile the Services provided via this Website or Content, or access the Website or Content in order to build a competitive product or service, build a product or service using similar ideas, features, functions or graphics, or copy any ideas, features, functions or graphics. </p>
                <p class="text-left">Any special rules for the use of certain Content accessible through subscription services on this Website may be included elsewhere within the Website and are incorporated into these Terms and Conditions by reference.</p>
                <p class="text-left">The Content is protected by copyright under both United States and foreign laws. Title to the Content remains with Global Worldwide Solution or its licensors. Except as expressly set forth in these Terms and Conditions or other click through or written agreement between You and Global Worldwide Solution, no license or other right in or to this Website or Content are granted to You, by implication, estoppel, or otherwise, and all such licenses and rights are hereby reserved. Any use of the Content not expressly permitted by these Terms and Conditions is a breach of these Terms and Conditions and may violate copyright, trademark, and other laws. Content and features are subject to change or termination without notice in the sole discretion of Global Worldwide Solution.</p>
                <p class="text-left">If You violate any of these Terms and Conditions, Your permission to use the Content automatically terminates and You must immediately destroy any copies You have made of any portion of the Content.</p>
            <h5 class=" text-left"><b>5. Limitation and Disclaiming of Liability</b></h5>
                <p class="text-left">ALL CONTENT PROVIDED ON THIS SITE IS PROVIDED "AS IS." SPECIFICALLY, BUT WITHOUT LIMITATION, Global Worldwide Solution DOES NOT WARRANT THAT: (i) THE INFORMATION ON THIS SITE, WHETHER CONTRIBUTED BY Global Worldwide Solution OR A THIRD PARTY, IS CORRECT, ACCURATE, RELIABLE OR COMPLETE; (ii) THE FUNCTIONS CONTAINED ON THIS SITE WILL BE UNINTERRUPTED OR ERROR-FREE; (iii) DEFECTS WILL BE CORRECTED, OR (iv) THIS SITE OR THE SERVER(S) THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS.</p>
                <p class="text-left">UNDER NO CIRCUMSTANCES SHALL Global Worldwide Solution BE LIABLE FOR ANY INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES, OR FOR DAMAGES FOR LOSS OF PROFITS, LOSS OF DATA, LOSS OF USE OR COSTS OF OBTAINING SUBSTITUTE GOODS OR SERVICES, ARISING OUT OR RELATING TO THE USE OF, OR THE INABILITY TO USE, THIS WEBSITE, THE SERVICES OR THE INFORMATION CONTAINED ON THIS SITE, WHETHER BASED UPON WARRANTY, CONTRACT, TORT OR OTHERWISE, EVEN IF Global Worldwide Solution HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
                <p class="text-left">IN NO EVENT SHALL Global Worldwide Solution'S TOTAL LIABILITY TO YOU FOR ALL DAMAGES, LOSSES AND CAUSES OF ACTION RESULTING FROM YOUR USE OF THIS SITE INCLUDING THE USE OF ANY SERVICES, WHETHER IN CONTRACT, TORT OR OTHERWISE, EXCEED, IN THE AGGREGATE, THE GREATER OF (A) AMOUNTS PAID BY YOU TO Global Worldwide Solution FOR THE SERVICES IN THE TWELVE (12) MONTHS IMMEDIATELY PRECEDING THE APPLICABLE CLAIM; OR (B) ONE U.S. DOLLAR ($1). THIS LIMITATION IS CUMULATIVE AND NOT PER CLAIM.</p>
            <h5 class=" text-left"><b>6. Your Submissions</b></h5>
                <p class="text-left">You may choose to display, upload, submit, transmit or publish on or through this Website ("post") text, graphics, images, videos, sounds, data, reports, links, information, suggestions, improvements, works of authorship or any other materials to Global Worldwide Solution or any other user of the Website via the communications platform included on the Website, as it may be available from time to time (collectively, "Submissions").</p>
                <p class="text-left">By posting Submissions, You hereby grant to Global Worldwide Solution and its affiliates a non-exclusive, fully-paid, irrevocable, royalty-free, perpetual, worldwide license to use, modify, publicly perform, publicly display, reproduce and distribute such Submissions on and through this Website or other sites owned by Global Worldwide Solution or its affiliates or to incorporate such Submissions into any other products or services of Global Worldwide Solution or its affiliates. Global Worldwide Solution shall have a non-exclusive, fully-paid, irrevocable, royalty-free, perpetual, worldwide license to use or incorporate any suggestions, ideas, enhancement requests, feedback, recommendations or other information You provide relating to this Website, the services available through this Website and/or any Content</p>
                <p class="text-left">You further grant Global Worldwide Solution and its affiliates a non-exclusive, fully-paid, irrevocable, royalty-free, perpetual, worldwide license to use the profile information You provide to Global Worldwide Solution, and all other information regarding Your use of the Website, the Content and the Services for any lawful purpose, including without limitation, for marketing and advertising purposes.</p>
                <p class="text-left">You are solely responsible for the Submissions that You post, any material or information that You transmit to others, and Your interactions with others. You represent and warrant that: (i) You own the Submissions posted by You or otherwise have the right to grant the license set forth in the above paragraphs; and (ii) the posting of Your Submissions does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person. You agree to pay for all royalties, fees and any other monies owing any person by reason of any Submissions posted by You.</p>
            <h5 class=" text-left"><b>7. Standards of User Conduct</b></h5>
                <p class="text-left">You may not use this Website to:</p>
                <p class="text-left">(1) post any Submissions or transmit via or through the Website any information, data, text, images, files, links, software, chat, communication or other content that is, or which Global Worldwide Solution considers in its sole discretion to be, unlawful, harmful, threatening, abusive, harassing, defamatory, vulgar, offensive, obscene, pornographic, hateful or threatening to any group defined by race, religion, gender, national origin or sexual orientation, or otherwise objectionable, including without limitation blatant expressions of bigotry, prejudice, racism, hatred or excessive profanity or post any obscene, lewd, lascivious, excessively violent, harassing or otherwise objectionable content;</p>
                <p class="text-left">(2) sell or promote any products or services that are unlawful in the location at which the Submission is posted or received;</p>
                <p class="text-left">(3) sell or promote controlled pharmaceutical substances, tobacco, fire arms or alcoholic beverages;</p>
                <p class="text-left">(4) introduce viruses, worms, Trojan horses and/or harmful code on the Internet;</p>
                <p class="text-left">(5) display material that exploits children under 18 years of age;</p>
                <p class="text-left">(6) post any Submissions or otherwise infringe in any way or violate any copyright, patent, trademark, service mark, trade name, trade secret or other intellectual property right of any third party;</p>
                <p class="text-left">(7) promote, solicit or participate in multi-level marketing or pyramid schemes;</p>
                <p class="text-left">(8) harass, embarrass or cause distress or discomfort upon another participant, user, or other individual or entity;</p>
                <p class="text-left">(9) impersonate any other person, including but not limited to, a customer, supplier, Global Worldwide Solution official, expert or bulletin board leader, guide or host;</p>
                <p class="text-left">(10) post or disclose any personally identifying information or private information about children or any third parties without their consent (or their parent's consent in case of a child under 18 years of age);</p>
                <p class="text-left">(11) post or transmit any unsolicited advertising, promotional materials, or any other forms of solicitation on our bulletin boards, including without limitation solicitations of credit card numbers, solicitations for sponsors, or promotion of raffles or contests;</p>
                <p class="text-left">(12) intentionally or unintentionally violate any applicable local, state, national or international law, including but not limited to any regulations having the force of law while using or accessing the Website or in connection with your use of the Website, in any manner; or</p>
                <p class="text-left">(13) invade the privacy or violate any personal or proprietary right (including intellectual property rights) of any person or entity.</p>
                <p class="text-left">Global Worldwide Solution reserves the right, without prior notice and in its sole discretion, to decide whether Submissions violate these terms and conditions for any of the above reasons or for any other reason, and if Global Worldwide Solution does so, to remove such Submissions which You post to the Website and/or terminate Your access to any restricted access Services of Global Worldwide Solution.</p>
            <h5 class=" text-left"><b>8. Links to Third-Party Web Sites</b></h5>
                <p class="text-left">This Website may contain links to non-Global Worldwide Solution web sites. These links are provided to You as a convenience, and Global Worldwide Solution is not responsible for the content of any linked web site. Any non-Global Worldwide Solution web site accessed from this Website is independent from Global Worldwide Solution, and Global Worldwide Solution has no control over the content of that web site. In addition, a link to any non-Global Worldwide Solution web site does not imply that Global Worldwide Solution endorses or accepts any responsibility for the content or use of such web site.</p>
            <h5 class=" text-left"><b>9. No Third-Party Approvals or Implied Endorsements</b></h5>
                <p class="text-left">Any third party which is the subject of profiles, reports or other information, provided by Global Worldwide Solution through this website or otherwise, likely has not approved or sponsored Global Worldwide Solution's provision of such information.  Further, in no event shall any reference to any third party or third party product or service be construed as an approval or endorsement by Global Worldwide Solution of that third party or of any product or service provided by a third party.</p>
            <h5 class=" text-left"><b>10. Notice and Take Down Procedures; Copyright Agent</b></h5>
                <p class="text-left">If You believe any materials accessible on or from this Website infringe Your copyright, You may request removal of those materials (or access thereto) from this Website by contacting Global Worldwide Solution’s copyright agent (identified below) and providing the following information:</p>
                <p class="text-left">a) Identification of the copyrighted work that You believe to be infringed. Please describe the work, and where possible include a copy or the location (e.g., URL) of an authorized version of the work.</p>
                <p class="text-left">b) Identification of the material that You believe to be infringing and its location. Please describe the material, and provide us with its URL or any other pertinent information that will allow us to locate the material.</p>
                <p class="text-left">c) Your name, address, telephone number and (if available) e-mail address.</p>
                <p class="text-left">d) A statement that You have a good faith belief that the complained of use of the materials is not authorized by the copyright owner, its agent or the law.</p>
                <p class="text-left">e) A statement that the information that You have supplied is accurate, and indicating that under penalty of perjury, You are the copyright owner or are authorized to act on the copyright owner's behalf.</p>
                <p class="text-left">f) A signature or the electronic equivalent from the copyright holder or authorized representative.</p>
            <h5 class=" text-left"><b>11. Indemnity</b></h5>    
                <p class="text-left">You agree to indemnify, defend and hold harmless Global Worldwide Solution, its affiliates, officers, directors, employees, consultants, agents, representatives, licensors, and suppliers, from any and all claims, losses, liability, damages and/or costs (including reasonable attorneys’ fees and costs) arising out of or relating to (1) Your use of the Website, Services and/or Content; (2) Your violation of these Terms and Conditions, including without limitation any representations and warranties hereunder and any agreements incorporated by reference; and/or (3) Your infringement, or infringement by any other user of Your account(s), of any intellectual property or other right of any person or entity.</p>
            <h5 class=" text-left"><b>12. Export and Sanctions Compliance</b></h5> 
                <p class="text-left">The laws of the United States of America prohibit the export of certain software and data to particular persons, territories and foreign states. You agree not to export, reexport, resell, or transfer any Global Worldwide Solution data or services in any manner that will violate any laws. Without limiting the foregoing, You agree that You are not a Restricted Party; that You will not export, reexport, resell, or transfer any Global Worldwide Solution data or services to any person or entity that is a Restricted Party; that You will implement and maintain reasonable and appropriate procedures for preventing unauthorized access to Global Worldwide Solution data or services; and that You will notify Global Worldwide Solution immediately upon learning that You or a user of the Global Worldwide Solution data or services provided to You under this Agreement becomes a Restricted Party.</p>
                <p class="text-left">For purposes of this Section 12, a “Restricted Party” is any person or entity that is (1) located or established in, organized under the laws of, or controlled by the government or by one or more nationals of Cuba, Iran, North Korea, Sudan, Syria, or any other country that may, from time to time, become subject to U.S. export controls for anti-terrorism reasons or designated as a country that is subject to a general prohibition on U.S. persons’ engaging in financial and/or export transactions; (2) on the U.S. Department of Commerce Denied Persons List, Entity List, or Unverified List; U.S. Department of the Treasury list of Specially Designated Nationals and Blocked Persons; or U.S. Department of State List of Debarred Parties; (3) part of, affiliated with, or controlled by or acting on behalf of any non-U.S. military organization; or (4) engaged in end use activities that are subject to restriction under U.S. export laws, including without limitation nuclear, missile, or chemical or biological weapon-related activities.</p>
            <h5 class=" text-left"><b>13. Anti-corruption Laws; Foreign Corrupt Practices Act</b></h5> 
                <p class="text-left">a) You represent, warrant and covenant to Global Worldwide Solution that You have not and will not, in connection with the data or services provided under this Agreement, make, promise or offer to make any payment or transfer of anything of value, directly or indirectly: (i) to any Government Official, or to any other person or entity, if such payment or transfer is intended to induce any official action by such Government Official; to obtain, retain or direct business to any person; to secure an improper advantage; or otherwise violate the Foreign Corrupt Practices Act any other law applicable to You.</p>
                <p class="text-left">b) You agree to notify Global Worldwide Solution immediately of the occurrence of the foregoing.</p>
                <p class="text-left">c) For purposes of this Section 13, a “Government Official” means any employee or officer of a government in any country, including any federal, regional or local department, agency, or enterprise owned or controlled by such government; any official or employee of a political party; any official or employee of a public international organization; any candidate for political officer; and any person acting in an official capacity for, or on behalf of, such a person.</p>  
            <h5 class=" text-left"><b>14. Enforcement of Terms and Conditions</b></h5>
                <p class="text-left">These Terms and Conditions are governed and interpreted pursuant to the laws of the State of New York, United States of America, without reference to its conflicts of law principles, to the extent such principles would apply the law of any other jurisdiction.</p>
                <p class="text-left">All disputes arising out of or relating to these Terms and Conditions shall be finally resolved by arbitration before a single arbitrator conducted in the English language in New York, New York, U.S.A. under the Commercial Arbitration Rules of the American Arbitration Association. The parties shall appoint as sole arbitrator a retired judge who presided in the State of New York. The parties shall bear equally the cost of the arbitration (except that the prevailing party shall be entitled to an award of reasonable attorneys' fees incurred in connection with the arbitration in such an amount as may be determined by the arbitrator). All decisions of the arbitrator shall be final and binding on both parties and enforceable in any court of competent jurisdiction. Notwithstanding this, application may be made to any court for a judicial acceptance of the award or order of enforcement. Notwithstanding the foregoing, Global Worldwide Solution shall be entitled to seek injunctive relief, security or other equitable remedies from the United States District Court for the Southern District of New York or any other court of competent jurisdiction.</p>
                <p class="text-left">If any part of these terms is held to be unlawful, void or unenforceable, that part will be deemed severable and shall not affect the validity and enforceability of the remaining provisions.</p>
                <p class="text-left">Global Worldwide Solution may, at its sole discretion and without notice, revise these terms at any time by updating this posting.</p>
            <h5 class=" text-left"><b>15. Other Terms</b></h5>
                <p class="text-left">These Terms and Conditions do not create a partnership, franchise, joint venture, agency, fiduciary or employment relationship between the parties.</p>
                <p class="text-left">on behalf of, or in the name of, the other or to bind the other in any manner.</p>
                <p class="text-left">You may not assign or transfer these Terms and Conditions without Global Worldwide Solution's prior written consent.</p>
                <p class="text-left">Global Worldwide Solution retains ownership of all intellectual property rights to its Content, technology, software, documentation and tools used in connection with the Website, Services, and/or Content.</p>
                <p class="text-left">Notices delivered under these Terms and Conditions must be given in writing and will be effective when received.</p>
                <p class="text-left">The headings and captions used in these Terms and Conditions are used for convenience only and are not to be considered in construing or interpreting these Terms and Conditions.</p>
            <h5 class=" text-left"><b>16. Entire Agreement</b></h5>
                <p class="text-left">These Terms and Conditions are the entire agreement between the parties relating to the subject matter herein, supersedes all previous communications, understandings and agreements (whether oral or written) and shall not be modified except in writing signed by both parties, in Your express acceptance of other terms in the course of Your use of this Website or by posting by Global Worldwide Solution of new Terms and Conditions from time to time; provided that, if You have an existing click through agreement or written agreement with Global Worldwide Solution regarding Services or Content, that existing click through agreement or written agreement shall continue in full force and effect without amendment by these Terms and Conditions.</p>
            
            </div>
         
        </div>
        </div>
    </section>



    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>

</html>













