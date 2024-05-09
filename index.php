<?php
global $get_projects;
$data_assets['css'] = [
    './css/style.css',
    './css/accordion.css',
];
include("./components/header.php");

$get_press_release = CustomQuery("SELECT * FROM `news` ORDER BY  `date` DESC LIMIT 4;");


?>

<header class="header">
    <div id="home" class="header_nav">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <?php include("./components/nav_links.php") ?>
        <div class="donate">
            <a href="https://www.gofundme.com/f/defend-the-defenders-freedom-and-justice?member=33198191&sharetype=teams&utm_campaign=p_na+share-sheet&utm_medium=copy_link&utm_source=customer¬">Donate</a>
        </div>
        <div class="burger" onclick="open_modal('burger_menu')">
            <img src="img/Vector.svg" alt="">
        </div>
    </div>
    <div class="header_content" id="home">
        <div class="bg"></div>
        <div class="text">
            <h1 class="h1">Fight injustice and human rights violations around the world</h1>
            <a class="button" href="https://www.gofundme.com/f/defend-the-defenders-freedom-and-justice?member=33198191&sharetype=teams&utm_campaign=p_na+share-sheet&utm_medium=copy_link&utm_source=customer¬">Donate</a>

        </div>
    </div>
</header>
<main>
    <section class="about" id="about">
        <div class="title">
            <h2 class="h2">About us</h2>

            <p class="p"> "Justice for All International" is a committed non-profit organization dedicated to
                addressing
                global
                injustices and advocating for the promotion and protection of human rights. Our mission is driven by
                the
                fundamental desire to safeguard the rights of entrepreneurs, activists, journalists, and bloggers
                who
                face persecution for their work.</p>
        </div>

        <div class="content_item">

            <div class="slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <h3 class="h3">Association</h3>
                            <p class="p">"Justice for All International" offers indispensable legal support,
                                providing
                                complimentary professional assistance in preparing and submitting complaints about
                                human
                                rights violations to United Nations protection mechanisms. This service underscores
                                our
                                pivotal role in the global human rights landscape.</p>
                            <p class="p">By engaging in strategic litigation, we aim to influence legal reforms and
                                establish precedents that protect and promote human rights at the international
                                level.</p>
                        </div>
                        <div class="swiper-slide">
                            <h3 class="h3">Management</h3>
                            <p class="p">Guided by Article 5 of our Statute and the decisions of our constitutive
                                General Assembly, our organization is supported by a diverse range of financial
                                sources.
                                These include membership fees, donations, legacies, sponsorships, and public
                                subsidies,
                                as well as revenues from our assets. This broad base of support, all compliant with
                                Swiss law, ensures our capability to continue our mission effectively and
                                sustainably.</p>
                        </div>
                        <div class="swiper-slide">
                            <h3 class="h3">Thematic Priorities</h3>
                            <p class="p">At "Justice for All International," our thematic priorities include
                                challenging
                                unjust laws and setting new precedents in human rights legislation. We focus on
                                enhancing civil societies and supporting democratic processes in countries where
                                these
                                principles are most at risk. Our strategic litigation and advocacy efforts aim to
                                create
                                a world where justice and human rights are not just ideals, but realities for all
                                individuals, ensuring that every effort and resource is dedicated to this cause.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="img"><img src="img/aboutus.jpg" alt=""></div>
        </div>

    </section>

    <section class="team" id="team">
        <div class="content">
            <h2>TEAM</h2>
            <div class="card first team_1">
                <div>
                    <h3 class="h3">Sharof Azizov</h3>
                    <p class="subtitle">Geneva, Switzerland</p>
                    <p class="p">Founder and Executive Director of Justice pour Tous Internationale, Sharof Azizov is a distinguished International Human Rights Litigation Consultant with over 25 years of extensive experience in various rule of law and human rights capacities, including a decade spent at the UN OHCHR. He holds an LLM in International Human Rights Law from the University of Essex and possesses a deep and nuanced understanding of international litigation, particularly concerning human rights and humanitarian issues related to business and human rights. Mr. Azizov has substantial field experience across a wide range of countries, including Uzbekistan, Kyrgyzstan, Kazakhstan, Croatia, Kosovo, Northern Macedonia, Serbia, Georgia, Armenia, Azerbaijan, UK, USA, France, Belgium, Maldives, Sri Lanka, Saudi Arabia, Jordan, Qatar, Tunisia, and Sierra Leone, where he has provided strategic advice and counsel to victims of political persecution, corruption, and excessive regulatory compliance. His expertise also encompasses a strong grasp of International Humanitarian Law and a thorough familiarity with UN and regional mechanisms dedicated to the promotion and protection of human rights and fundamental freedoms.</p>
                    <p class="p">Highly skilled in engaging with United Nations special procedures mandate holders, including the UN Working Group on Business and Human Rights, Mr. Azizov has significant experience working with UN treaty bodies and special rapporteurs. His professional activities include meticulous human rights monitoring and reporting on conditions such as torture and other ill-treatments in prisons, as well as the protection of a wide array of vulnerable groups including entrepreneurs, human rights defenders, bloggers, whistleblowers, journalists, and minorities. Mr. Azizov is adept at conducting human rights due diligence, supervising elections, and overseeing court hearings. He excels in interviewing victims and collecting pertinent documentation from diverse sources, such as NGOs, ombudsman offices, and judicial and law enforcement agencies, ensuring thorough follow-up on case progress and sustaining collaborative relationships with governmental officials, diplomats, and human rights NGOs worldwide. Additionally, he provides victims of human rights violations with valuable guidance on international litigation matters, ensuring compliance with human rights laws and regulations relevant to their specific cases. Mr. Azizov offers comprehensive support in identifying and addressing human rights violations experienced by victims, assists in drafting and submitting human rights complaints to the appropriate United Nations special procedures mandate holders and relevant United Nations treaty bodies upon request, and devises effective international litigation strategies to safeguard their rights and freedoms.</p>
                </div>
                <div class="img"><img src="img/Azizov.png" alt=""></div>
            </div>
            <div class="card team_2">
                <div class="img"><img src="img/Leticia.png" alt=""></div>
                <div>
                    <h3 class="h3">Leticia Maria Marques Magalhaes</h3>
                    <p class="subtitle">Geneva, Switzerland</p>
                    <p class="p"> Leticia Maria Marques Magalhaes is the founder and current President of the Board of Justice pour Tous Internationale. A Swiss national with a distinguished background in medicine, Ms. Magalhaes brings a deeply empathetic perspective to her role, emphasizing the crucial relationship between health and human dignity. This understanding significantly enriches the Association's mission, particularly in its support for vulnerable groups such as entrepreneurs, human rights defenders, political activists, bloggers, and journalists, who often confront serious risks.
                    </p>
                    <p class="p">
                        Ms. Magalhaes provides what could be described as spiritual leadership to Justice pour Tous Internationale, nurturing the organization's core values and vision. Her efforts extend beyond mere administration, as she actively fosters the development of civil societies and democratic institutions. Her compassionate guidance ensures that the Association not only assists with immediate human rights concerns, such as preparing and submitting complaints to United Nations protection mechanisms, but also contributes to long-term societal and democratic enhancements.
                    </p>
                </div>


            </div>
            <div class="card team_3">
                <div class="img"><img src="img/angelina.jpg" alt=""></div>
                <div>
                    <h3 class="h3">Anhelina Rozhkovan</h3>
                    <p class="subtitle">Geneva, Switzerland</p>
                    <p class="p">Anhelina bringing her exceptional skills in web development and design to the forefront of our digital initiatives. With a keen eye for aesthetics and functionality, Anhelina has expertly developed and designed our website, creating a user-friendly and visually appealing platform that effectively communicates our mission and engages our audience. Her technical prowess and creative vision ensure that our digital presence resonates with our supporters and amplifies our advocacy efforts.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="projects_mobile">
            <div class="accordion">
                <?php
                foreach ($get_projects as $key => $project) { ?>
                    <div class="accordion-item">
                        <div class="accordion-header"><?= $project['name'] ?></div>
                        <div class="accordion-content"><?= $project['text'] ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="projects">
            <div class="">
                <h2 class="h2">Projects</h2>
                <ul>
                    <?php
                    foreach ($get_projects as $key => $project) {
                        echo '<li class="li" data-lm="' . $key . '">
                    <h3 class="h3">' . $project["name"] . '</h3>
                </li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="content_item a1">
                <div class="text">
                    <?php
                    foreach ($get_projects as $key => $project) {
                        echo '<p class="p ' . (!$key ? 'active' : '') . '">' . $project['text'] . '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </section>
    <section class="slider_block">
        <div class="swiper mySwiper_img">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/01.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/02.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/03.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/04.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/05.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/06.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/07.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/8.JPG" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/9.JPG" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/010.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/11.JPG" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/012.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/013.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/014.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/15.JPG" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/016.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/17.JPG" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/18.JPG" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/19.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/20.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/21.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/22.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/23.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/24.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/25.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/26.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/27.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/28.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/29.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/30.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/31.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/32.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/33.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/34.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="img/35.png" alt="">
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="petitions" id="petitions">
        <h2 class="h2">Petitions</h2>
        <div class="slider">
            <div class="slider_item">
                <div class="swiper mySwiper_petitions">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="title_wrapper">
                                <h3 class="h3" id="current_petitions">Current Petitions</h3>
                            </div>

                            <p class="p">"Justice for All International" is actively engaged in advocating for
                                high-profile
                                cases
                                involving significant human rights violations. Currently, our petitions focus on
                                addressing the
                                unjust treatment and arbitrary detention of individuals such as Julian Assange and
                                Craig Murray.
                            </p>
                            <p class="p">Our petition for Julian Assange emphasizes the ongoing injustice of his
                                nearly
                                14-year-long
                                arbitrary detention by the UK. We call for his immediate release and urge the United
                                Nations
                                High
                                Commissioner for Human Rights and Special Procedures mandate holders to address his
                                case with
                                the
                                urgency it deserves.</p>
                            <p class="p">This petition also highlights the misleading assurances provided by the
                                U.S. regarding
                                First Amendment protections, casting doubt on the fairness of Assange's potential
                                extradition to
                                the
                                United States.</p>
                            <p class="p">Regarding Craig Murray, our petition brings attention to his prosecution
                                under the UK
                                Terrorism Act 2000, particularly for his peaceful support of the Palestinian
                                people's right to
                                self-defense. His case has experienced a lack of decisive action and attention from
                                the OHCHR,
                                despite repeated appeals and submissions. We seek to highlight the broader
                                implications of his
                                case
                                for freedom of speech and the protection of human rights defenders.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="title_wrapper">
                                <h3 class="h3" id="completed_cases">Completed cases</h3>
                            </div>

                            <p class="p">"Justice for All International" is proud to highlight a significant achievement in our ongoing commitment to defending human rights and the rule of law. We recently submitted a crucial case to the United Nations Special Procedures, focusing on the impact of international sanctions on entrepreneurial freedom—a topic seldom addressed in human rights discourse.</p>
                            <p class="p"> Our submission revolved around the case of Ms. Alena Bekker, a German entrepreneur whose business faced severe legal repercussions due to the EU's sanctions regime. Ms. Bekker's company, Texforum-Interhandel e.K., attempted to import linen briquettes from Belarus, which were wrongly reclassified as wood products under EU sanctions, leading to unwarranted criminal charges. This case highlighted the excessive compliance and arbitrary enforcement by authorities, which not only stifled entrepreneurial activity but also infringed on basic human rights, including the right to a fair trial and equality before the law.</p>
                            <p class="p">Through our advocacy, this case has brought to light the broader implications of sanctions on small and medium-sized enterprises and the need for a more principled approach that respects human rights and the rule of law in global trade practices. We continue to stand with Ms. Bekker and advocate for fair legal treatment and economic policies that safeguard the rights of all entrepreneurs.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="take_action" id="take_action">
        <div class="content">
            <h2 class="h2">Take Action</h2>
            <form action="php_scripts/sendemail.php" method="post">
                <label>
                    <input required placeholder="First name" name="firstname" type="text">
                </label>
                <label>
                    <input required placeholder="Last name" name="lastname" type="text">
                </label>
                <label>
                    <input required placeholder="Your email" name="email" type="email">
                </label>
                <label>
                    <input placeholder="Phone number" name="number" type="text">
                </label>
                <label>
                    <input required placeholder="Place of employment" name="place" type="text">
                </label>
                <label>
                    <input required placeholder="Position" name="position" type="text">
                </label>
                <label>
                    <textarea placeholder="Enter your request..." name="message" id="" cols="30" rows="10"></textarea>
                </label>
                <div class="button_wrapper">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </section>
    <section class="press_release" id="press_release" id="view_all" id="news" id="archive">
        <h2>Press release</h2>
        <h3>News</h3>
        <div class="spisok">
            <?php
            foreach ($get_press_release as $key => $item) {
                include('components/press_release_card.php');
            }
            ?>
        </div>
        <div class="hr"></div>
        <a href="all_press_released.php" class="read_more"><span>Read more</span> <img src="img/strelka.svg" alt=""></a>

    </section>
    <section class="events" id="events">
        <h2 class="h2">Events</h2>
        <h3 class="h3" id="statements">Statements</h3>
        <div class="video_wrapper">
            <div class="btn left btn_video_left"></div>
            <div class="btn right btn_video_right"></div>
            <div class="swiper mySwiper_video">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video controls class="video">
                            <source src="img/video2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video controls class="video">
                            <source src="img/video1.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
$data_assets['js'] = [
    './js/script.js',
    './js/swipe_slider.js',
    './js/accordion.js',
];
?>
<?php include_once('components/footer.php') ?>