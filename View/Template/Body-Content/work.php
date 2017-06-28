<div id="projects"></div>

<?php
$nthDivider = 2;
include "Divider/divider.php"
?>

<div class="section">
    <div class="container">
        <!--<h1 class="text-center title object-non-visible" id="portfolio">Portfolio</h1>-->
        <div class="separator"></div>
        <p class="lead text-center object-non-visible">You can find here the description of some projects I worked on.<br> Clic on the project to see the description!</p>
        <br>
        <div class="row object-non-visible" data-animation-effect="fadeIn">
            <div class="col-md-12">

                <!-- isotope filters start -->
                <div class="filters text-center object-non-visible">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".site-building">Site building</a></li>
                        <li><a href="#" data-filter=".app-development">App development</a></li>
                        <!--<li><a href="#" data-filter=".web-design">Web design</a></li>-->
                    </ul>
                </div>

                <div class="isotope-container row grid-space-20 object-non-visible">
                    <div class="col-sm-6 col-md-3 isotope-item site-building">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="images/Projets/titreGogl.png" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-1">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Site Building</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Image Search Engine</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-1-label">Image Search Engine (Experimental)</h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Project Description</h3>
                                                <p>The aim of this project was to create an web site that can allow people to search for images.</p>
                                                <p>The images have to be able to be searched with three types of research:
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-caret-right pr-10 text-colored"></i>A research using tags, who will make the images appear according to the tags that have been assigned to the image.
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-caret-right pr-10 text-colored"></i>A research using the content of the image, which wil make appear an image whom the content is closer (pixel-wise) to that of another image used as referece.
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-caret-right pr-10 text-colored"></i>A research using the two previous one.
                                                    </li>
                                                </ul>
                                                </p>
                                                <p>The main aim of this project was to show what was the limit of the image search on the internet. In this project, after using the researches, it became clear that it is relly difficult for a machine to compare two images (for example: by assigning a tag that says "horse" on a pineapple image...), and only the combined use of multiple search method can give good result.</p>
                                                <h3>Used Technologies:</h3>
                                                <p>HTML - CSS - PHP - Bootstrap - MySQL Database</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="images/Projets/projetGoogle.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="images/Projets/titreSalmon.png" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-2">
                                    <i class="fa fa-search-plus"></i>
                                    <span>App. Development</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Account Management Software</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-2-label">Account Management Software</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Project Description</h3>
                                                <p>The aim of this project was to create an application who allows some users to change the data of an account table.</p>
                                                <p>The informations concerning the accounts had to be kept in a database implemented in the intranet of the company. The application had to be a replicate of an Excel sheet and have to replicate a table by implementing the calculs the company was using for their accounts</p>
                                                <p>Furthermore, the tables could only be updated if a user have the rights to do it, so, a system of management of rights have to be implemented.</p>
                                                <h3>Used Technologies:</h3>
                                                <p>HTML - CSS - PHP - Bootstrap - MySQL Database</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="images/Projets/ProjetSalmon.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="images/Projets/titreDev.png" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-3">
                                    <i class="fa fa-search-plus"></i>
                                    <span>App. Development</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Internship Notation Software</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-3-label">Internship Notation Software</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Project Description</h3>
                                                <p>The aim of this project was to create an application who allows the professors to give grades to the student at the end of their internship.</p>
                                                <p>The informations concerning the grades had to be kept in a database in order to be used later. The application is also able to allow the professors to give a penalty to a student, should he not meet the requirements of some tasks asked during the internship (such as answering to a survey).</p>
                                                <p>The application is also able to allow the English professor to give a grade regarding the abstract of the report the students have to make. Furthermore, the Section Head is able to see and grade every students who don't have an assigned teacher.</p>
                                                <h3>Used Technologies:</h3>
                                                <p>HTML - CSS - PHP - Bootstrap - Ajax - Phonegap - MySQL Database</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="images/Projets/ProjetDev.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
