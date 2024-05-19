<?php
global $get_projects;
$root_link = 'index.php';
?>
    <ul class="navigation">
        <li class="li"><a class="a active" href="<?=$root_link?>#home">Home</a></li>
        <li class="dropdown li">
            <a href="<?=$root_link?>#about" class="dropbtn a">About us</a>
            <div class="dropdown_content">
                <a class="a" href="<?=$root_link?>#about">Association</a>
                <a class="a" href="<?=$root_link?>#about">Management</a>
                <a class="a" href="<?=$root_link?>#about">Thematic Priorities</a>
                <a class="a" href="<?=$root_link?>#team">Team</a>
            </div>
        </li>
        <li class="dropdown li">
            <a href="<?=$root_link?>#projects" class="dropbtn a">Projects</a>
            <div class="dropdown_content">
                <?php

                foreach ($get_projects as $key => $project) { ?>
                    <a class="a" href="<?=$root_link?>#projects"><?= $project['name'] ?></a>
                <?php } ?>
                <!--           -->
                <!--            <a class="a" href="#whistleblowers_journalists">Whistleblowers and Journalists</a>-->
                <!--            <a class="a" href="#human_rights_defenders">Human Rights Defenders</a>-->
                <!--            <a class="a" href="#equality">Equality</a>-->
                <!--            <a class="a" href="#independence_judges_lawyers">Independence of Judges and Lawyers</a>-->
                <!--            <a class="a" href="#child_rights">Child Rights</a>-->
            </div>
        </li>
        <li class="dropdown li">
            <a href="<?=$root_link?>#petitions" class="dropbtn a">Petitions</a>
            <div class="dropdown_content">
                <a class="a" href="<?=$root_link?>#petitions">Current Petitions</a>
                <a class="a" href="<?=$root_link?>#petitions">Completed Cases</a>
                <a class="a" href="<?=$root_link?>#take_action">Take Action</a>
            </div>
        </li>
        <li class="dropdown li">
            <a href="<?=$root_link?>#press_release" class="dropbtn a">Press Release</a>
            <div class="dropdown_content">
                <a class="a" href="all_press_released.php?sort=all">View All</a>
                <a class="a" href="all_press_released.php?sort=new">New</a>
                <a class="a" href="all_press_released.php?sort=archive">Archive</a>
            </div>
        </li>
        <li class="dropdown li">
            <a href="<?=$root_link?>#events" class="dropbtn a">Events</a>
            <div class="dropdown_content">
                <a class="a" href="<?=$root_link?>#statements">Statements</a>
                <a class="a" href="<?=$root_link?>#conferences">Conferences</a>
                <a class="a" href="<?=$root_link?>#trainings">Trainings</a>
            </div>
        </li>
        <li class="li"><a class="a" href="<?=$root_link?>#take_action">Contact us</a></li>
    </ul>
