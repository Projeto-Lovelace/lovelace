<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/main.html.twig */
class __TwigTemplate_1b0709e413f04172c10dd3cb27960bd922fa686be71c18ceff2b13f213367599 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>Portal Lovelace</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"font/iconsmind-s/css/iconsminds.css\" />
    <link rel=\"stylesheet\" href=\"font/simple-line-icons/css/simple-line-icons.css\" />

    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap.rtl.only.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/fullcalendar.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/dataTables.bootstrap4.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/datatables.responsive.bootstrap4.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/select2.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/perfect-scrollbar.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/owl.carousel.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap-stars.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/nouislider.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap-datepicker3.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/component-custom-switch.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/dore.dark.green.min.css\">
    <link rel=\"stylesheet\" href=\"css/main.css\" />
</head>

<body id=\"app-container\" class=\"menu-default show-spinner\">
<nav class=\"navbar fixed-top\">
    <div class=\"d-flex align-items-center navbar-left\">
        <a href=\"#\" class=\"menu-button d-none d-md-block\">
            <svg class=\"main\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 9 17\">
                <rect x=\"0.48\" y=\"0.5\" width=\"7\" height=\"1\" />
                <rect x=\"0.48\" y=\"7.5\" width=\"7\" height=\"1\" />
                <rect x=\"0.48\" y=\"15.5\" width=\"7\" height=\"1\" />
            </svg>
            <svg class=\"sub\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18 17\">
                <rect x=\"1.56\" y=\"0.5\" width=\"16\" height=\"1\" />
                <rect x=\"1.56\" y=\"7.5\" width=\"16\" height=\"1\" />
                <rect x=\"1.56\" y=\"15.5\" width=\"16\" height=\"1\" />
            </svg>
        </a>

        <a href=\"#\" class=\"menu-button-mobile d-xs-block d-sm-block d-md-none\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 26 17\">
                <rect x=\"0.5\" y=\"0.5\" width=\"25\" height=\"1\" />
                <rect x=\"0.5\" y=\"7.5\" width=\"25\" height=\"1\" />
                <rect x=\"0.5\" y=\"15.5\" width=\"25\" height=\"1\" />
            </svg>
        </a>

        <div class=\"search\" data-search-path=\"Pages.Search.html?q=\">
            <input placeholder=\"Search...\">
            <span class=\"search-icon\">
                    <i class=\"simple-icon-magnifier\"></i>
                </span>
        </div>

        <a class=\"btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block\"
           href=\"https://1.envato.market/5kAb\">&nbsp;BUY&nbsp;</a>
    </div>


    <a class=\"navbar-logo\" href=\"Dashboard.Default.html\">
        <span class=\"logo d-none d-xs-block\"></span>
        <span class=\"logo-mobile d-block d-xs-none\"></span>
    </a>

    <div class=\"navbar-right\">
        <div class=\"header-icons d-inline-block align-middle\">
            <div class=\"d-none d-md-inline-block align-text-bottom mr-3\">
                <div class=\"custom-switch custom-switch-primary-inverse custom-switch-small pl-1\"
                     data-toggle=\"tooltip\" data-placement=\"left\" title=\"Dark Mode\">
                    <input class=\"custom-switch-input\" id=\"switchDark\" type=\"checkbox\" checked>
                    <label class=\"custom-switch-btn\" for=\"switchDark\"></label>
                </div>
            </div>

            <div class=\"position-relative d-none d-sm-inline-block\">
                <button class=\"header-icon btn btn-empty\" type=\"button\" id=\"iconMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"simple-icon-grid\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right mt-3  position-absolute\" id=\"iconMenuDropdown\">
                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-equalizer d-block\"></i>
                        <span>Settings</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-male-female d-block\"></i>
                        <span>Users</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-puzzle d-block\"></i>
                        <span>Components</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-bar-chart-4 d-block\"></i>
                        <span>Profits</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-file d-block\"></i>
                        <span>Surveys</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-suitcase d-block\"></i>
                        <span>Tasks</span>
                    </a>

                </div>
            </div>

            <div class=\"position-relative d-inline-block\">
                <button class=\"header-icon btn btn-empty\" type=\"button\" id=\"notificationButton\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"simple-icon-bell\"></i>
                    <span class=\"count\">3</span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right mt-3 position-absolute\" id=\"notificationDropdown\">
                    <div class=\"scroll\">
                        <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                            <a href=\"#\">
                                <img src=\"img/profile-pic-l-2.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">Joisse Kaycee just sent a new comment!</p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                            <a href=\"#\">
                                <img src=\"img/notification-thumb.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">1 item is out of stock!</p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                            <a href=\"#\">
                                <img src=\"img/notification-thumb-2.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">New order received! It is total \$147,20.</p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"d-flex flex-row mb-3 pb-3 \">
                            <a href=\"#\">
                                <img src=\"img/notification-thumb-3.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">3 items just added to wish list by a user!
                                    </p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class=\"header-icon btn btn-empty d-none d-sm-inline-block\" type=\"button\" id=\"fullScreenButton\">
                <i class=\"simple-icon-size-fullscreen\"></i>
                <i class=\"simple-icon-size-actual\"></i>
            </button>

        </div>

        <div class=\"user d-inline-block\">
            <button class=\"btn btn-empty p-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                <span class=\"name\">Sarah Kortney</span>
                <span>
                        <img alt=\"Profile Picture\" src=\"img/profile-pic-l.jpg\" />
                    </span>
            </button>

            <div class=\"dropdown-menu dropdown-menu-right mt-3\">
                <a class=\"dropdown-item\" href=\"#\">Account</a>
                <a class=\"dropdown-item\" href=\"#\">Features</a>
                <a class=\"dropdown-item\" href=\"#\">History</a>
                <a class=\"dropdown-item\" href=\"#\">Support</a>
                <a class=\"dropdown-item\" href=\"#\">Sign out</a>
            </div>
        </div>
    </div>
</nav>

<div class=\"menu\">
    <div class=\"main-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\">
                <li class=\"active\">
                    <a href=\"#dashboard\">
                        <i class=\"iconsminds-shop-4\"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href=\"#layouts\">
                        <i class=\"iconsminds-digital-drawing\"></i> Pages
                    </a>
                </li>
                <li>
                    <a href=\"#applications\">
                        <i class=\"iconsminds-air-balloon-1\"></i> Applications
                    </a>
                </li>
                <li>
                    <a href=\"#ui\">
                        <i class=\"iconsminds-pantone\"></i> UI
                    </a>
                </li>
                <li>
                    <a href=\"#menu\">
                        <i class=\"iconsminds-three-arrow-fork\"></i> Menu
                    </a>
                </li>
                <li>
                    <a href=\"Blank.Page.html\">
                        <i class=\"iconsminds-bucket\"></i> Blank Page
                    </a>
                </li>
                <li>
                    <a href=\"https://dore-jquery-docs.coloredstrategies.com\" target=\"_blank\">
                        <i class=\"iconsminds-library\"></i> Docs
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"sub-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\" data-link=\"dashboard\">
                <li>
                    <a href=\"Dashboard.Default.html\">
                        <i class=\"simple-icon-rocket\"></i> <span class=\"d-inline-block\">Default</span>
                    </a>
                </li>
                <li>
                    <a href=\"Dashboard.Analytics.html\">
                        <i class=\"simple-icon-pie-chart\"></i> <span class=\"d-inline-block\">Analytics</span>
                    </a>
                </li>
                <li class=\"active\">
                    <a href=\"Dashboard.Ecommerce.html\">
                        <i class=\"simple-icon-basket-loaded\"></i> <span class=\"d-inline-block\">Ecommerce</span>
                    </a>
                </li>
                <li>
                    <a href=\"Dashboard.Content.html\">
                        <i class=\"simple-icon-doc\"></i> <span class=\"d-inline-block\">Content</span>
                    </a>
                </li>
            </ul>
            <ul class=\"list-unstyled\" data-link=\"layouts\" id=\"layouts\">
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseAuthorization\" aria-expanded=\"true\"
                       aria-controls=\"collapseAuthorization\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Authorization</span>
                    </a>
                    <div id=\"collapseAuthorization\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Auth.Login.html\">
                                    <i class=\"simple-icon-user-following\"></i> <span
                                            class=\"d-inline-block\">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Auth.Register.html\">
                                    <i class=\"simple-icon-user-follow\"></i> <span
                                            class=\"d-inline-block\">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Auth.ForgotPassword.html\">
                                    <i class=\"simple-icon-user-unfollow\"></i> <span class=\"d-inline-block\">Forgot
                                            Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseProduct\" aria-expanded=\"true\"
                       aria-controls=\"collapseProduct\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Product</span>
                    </a>
                    <div id=\"collapseProduct\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Product.List.html\">
                                    <i class=\"simple-icon-credit-card\"></i> <span class=\"d-inline-block\">Data
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Product.Thumbs.html\">
                                    <i class=\"simple-icon-list\"></i> <span class=\"d-inline-block\">Thumb
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Product.Images.html\">
                                    <i class=\"simple-icon-grid\"></i> <span class=\"d-inline-block\">Image
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Product.Detail.html\">
                                    <i class=\"simple-icon-book-open\"></i> <span class=\"d-inline-block\">Detail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseProfile\" aria-expanded=\"true\"
                       aria-controls=\"collapseProfile\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Profile</span>
                    </a>
                    <div id=\"collapseProfile\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Profile.Social.html\">
                                    <i class=\"simple-icon-share\"></i> <span class=\"d-inline-block\">Social</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Profile.Portfolio.html\">
                                    <i class=\"simple-icon-link\"></i> <span class=\"d-inline-block\">Portfolio</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseBlog\" aria-expanded=\"true\"
                       aria-controls=\"collapseBlog\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Blog</span>
                    </a>
                    <div id=\"collapseBlog\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Blog.html\">
                                    <i class=\"simple-icon-list\"></i> <span class=\"d-inline-block\">List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Blog.Detail.html\">
                                    <i class=\"simple-icon-book-open\"></i> <span class=\"d-inline-block\">Detail</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Blog.Detail.Alt.html\">
                                    <i class=\"simple-icon-picture\"></i> <span class=\"d-inline-block\">Detail
                                            Alt</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMisc\" aria-expanded=\"true\"
                       aria-controls=\"collapseMisc\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Miscellaneous</span>
                    </a>
                    <div id=\"collapseMisc\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Misc.Coming.Soon.html\">
                                    <i class=\"simple-icon-hourglass\"></i> <span class=\"d-inline-block\">Coming
                                            Soon</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Error.html\">
                                    <i class=\"simple-icon-exclamation\"></i> <span
                                            class=\"d-inline-block\">Error</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Faq.html\">
                                    <i class=\"simple-icon-question\"></i> <span class=\"d-inline-block\">Faq</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Invoice.html\">
                                    <i class=\"simple-icon-bag\"></i> <span class=\"d-inline-block\">Invoice</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Knowledge.Base.html\">
                                    <i class=\"simple-icon-graduation\"></i> <span class=\"d-inline-block\">Knowledge
                                            Base</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Mailing.html\">
                                    <i class=\"simple-icon-envelope-open\"></i> <span
                                            class=\"d-inline-block\">Mailing</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Pricing.html\">
                                    <i class=\"simple-icon-diamond\"></i> <span class=\"d-inline-block\">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Search.html\">
                                    <i class=\"simple-icon-magnifier\"></i> <span class=\"d-inline-block\">Search</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
            <ul class=\"list-unstyled\" data-link=\"applications\">
                <li>
                    <a href=\"Apps.MediaLibrary.html\">
                        <i class=\"simple-icon-picture\"></i> <span class=\"d-inline-block\">Library</span>
                    </a>
                </li>
                <li>
                    <a href=\"Apps.Todo.List.html\">
                        <i class=\"simple-icon-check\"></i> <span class=\"d-inline-block\">Todo</span>
                    </a>
                </li>
                <li>
                    <a href=\"Apps.Survey.List.html\">
                        <i class=\"simple-icon-calculator\"></i> <span class=\"d-inline-block\">Survey</span>
                    </a>
                </li>
                <li>
                    <a href=\"Apps.Chat.html\">
                        <i class=\"simple-icon-bubbles\"></i> <span class=\"d-inline-block\">Chat</span>
                    </a>
                </li>
            </ul>
            <ul class=\"list-unstyled\" data-link=\"ui\">
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseForms\" aria-expanded=\"true\"
                       aria-controls=\"collapseForms\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Forms</span>
                    </a>
                    <div id=\"collapseForms\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Ui.Forms.Components.html\">
                                    <i class=\"simple-icon-event\"></i> <span class=\"d-inline-block\">Components</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Forms.Layouts.html\">
                                    <i class=\"simple-icon-doc\"></i> <span class=\"d-inline-block\">Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Forms.Validation.html\">
                                    <i class=\"simple-icon-check\"></i> <span class=\"d-inline-block\">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Forms.Wizard.html\">
                                    <i class=\"simple-icon-magic-wand\"></i> <span
                                            class=\"d-inline-block\">Wizard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseDataTables\" aria-expanded=\"true\"
                       aria-controls=\"collapseDataTables\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Datatables</span>
                    </a>
                    <div id=\"collapseDataTables\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Ui.Datatables.Rows.html\">
                                    <i class=\"simple-icon-screen-desktop\"></i> <span class=\"d-inline-block\">Full
                                            Page UI</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Datatables.Scroll.html\">
                                    <i class=\"simple-icon-mouse\"></i> <span class=\"d-inline-block\">Scrollable</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Datatables.Pagination.html\">
                                    <i class=\"simple-icon-notebook\"></i> <span
                                            class=\"d-inline-block\">Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Datatables.Default.html\">
                                    <i class=\"simple-icon-grid\"></i> <span class=\"d-inline-block\">Default</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseComponents\" aria-expanded=\"true\"
                       aria-controls=\"collapseComponents\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Components</span>
                    </a>
                    <div id=\"collapseComponents\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Ui.Components.Alerts.html\">
                                    <i class=\"simple-icon-bell\"></i> <span class=\"d-inline-block\">Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Badges.html\">
                                    <i class=\"simple-icon-badge\"></i> <span class=\"d-inline-block\">Badges</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Buttons.html\">
                                    <i class=\"simple-icon-control-play\"></i> <span
                                            class=\"d-inline-block\">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Cards.html\">
                                    <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Cards</span>
                                </a>
                            </li>

                            <li>
                                <a href=\"Ui.Components.Carousel.html\">
                                    <i class=\"simple-icon-picture\"></i> <span class=\"d-inline-block\">Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Charts.html\">
                                    <i class=\"simple-icon-chart\"></i> <span class=\"d-inline-block\">Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Collapse.html\">
                                    <i class=\"simple-icon-arrow-up\"></i> <span
                                            class=\"d-inline-block\">Collapse</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Dropdowns.html\">
                                    <i class=\"simple-icon-arrow-down\"></i> <span
                                            class=\"d-inline-block\">Dropdowns</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Editors.html\">
                                    <i class=\"simple-icon-book-open\"></i> <span
                                            class=\"d-inline-block\">Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Icons.html\">
                                    <i class=\"simple-icon-star\"></i> <span class=\"d-inline-block\">Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.InputGroups.html\">
                                    <i class=\"simple-icon-note\"></i> <span class=\"d-inline-block\">Input
                                            Groups</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Jumbotron.html\">
                                    <i class=\"simple-icon-screen-desktop\"></i> <span
                                            class=\"d-inline-block\">Jumbotron</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Modal.html\">
                                    <i class=\"simple-icon-docs\"></i> <span class=\"d-inline-block\">Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Navigation.html\">
                                    <i class=\"simple-icon-cursor\"></i> <span
                                            class=\"d-inline-block\">Navigation</span>
                                </a>
                            </li>

                            <li>
                                <a href=\"Ui.Components.PopoverandTooltip.html\">
                                    <i class=\"simple-icon-pin\"></i> <span class=\"d-inline-block\">Popover &
                                            Tooltip</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Sortable.html\">
                                    <i class=\"simple-icon-shuffle\"></i> <span class=\"d-inline-block\">Sortable</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Tables.html\">
                                    <i class=\"simple-icon-grid\"></i> <span class=\"d-inline-block\">Tables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

            <ul class=\"list-unstyled\" data-link=\"menu\" id=\"menuTypes\">
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuTypes\" aria-expanded=\"true\"
                       aria-controls=\"collapseMenuTypes\" class=\"rotate-arrow-icon\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Menu Types</span>
                    </a>
                    <div id=\"collapseMenuTypes\" class=\"collapse show\" data-parent=\"#menuTypes\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Menu.Default.html\">
                                    <i class=\"simple-icon-control-pause\"></i> <span
                                            class=\"d-inline-block\">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Menu.Subhidden.html\">
                                    <i class=\"simple-icon-arrow-left mi-subhidden\"></i> <span
                                            class=\"d-inline-block\">Subhidden</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Menu.Hidden.html\">
                                    <i class=\"simple-icon-control-start mi-hidden\"></i> <span
                                            class=\"d-inline-block\">Hidden</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Menu.Mainhidden.html\">
                                    <i class=\"simple-icon-control-rewind mi-hidden\"></i> <span
                                            class=\"d-inline-block\">Mainhidden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuLevel\" aria-expanded=\"true\"
                       aria-controls=\"collapseMenuLevel\" class=\"rotate-arrow-icon collapsed\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Menu Levels</span>
                    </a>
                    <div id=\"collapseMenuLevel\" class=\"collapse\" data-parent=\"#menuTypes\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Sub
                                            Level</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuLevel2\"
                                   aria-expanded=\"true\" aria-controls=\"collapseMenuLevel2\"
                                   class=\"rotate-arrow-icon collapsed\">
                                    <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Another
                                            Level</span>
                                </a>
                                <div id=\"collapseMenuLevel2\" class=\"collapse\">
                                    <ul class=\"list-unstyled inner-level-menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Sub
                                                        Level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuDetached\" aria-expanded=\"true\"
                       aria-controls=\"collapseMenuDetached\" class=\"rotate-arrow-icon collapsed\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Detached</span>
                    </a>
                    <div id=\"collapseMenuDetached\" class=\"collapse\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Sub
                                            Level</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">

                <h1>Dashboard Ecommerce</h1>
                <nav class=\"breadcrumb-container d-none d-sm-block d-lg-inline-block\" aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb pt-0\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">Library</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
                    </ol>
                </nav>
                <div class=\"separator mb-5\"></div>


            </div>
            <div class=\"col-lg-12 col-xl-6\">

                <div class=\"icon-cards-row\">
                    <div class=\"owl-container\">
                        <div class=\"owl-carousel dashboard-numbers\">
                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-clock\"></i>
                                    <p class=\"card-text mb-0\">Pending Orders</p>
                                    <p class=\"lead text-center\">16</p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-basket-coins\"></i>
                                    <p class=\"card-text mb-0\">Completed Orders</p>
                                    <p class=\"lead text-center\">32</p>
                                </div>
                            </a>

                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-arrow-refresh\"></i>
                                    <p class=\"card-text mb-0\">Refund Requests</p>
                                    <p class=\"lead text-center\">2</p>
                                </div>
                            </a>

                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-mail-read\"></i>
                                    <p class=\"card-text mb-0\">New Comments</p>
                                    <p class=\"lead text-center\">25</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>




                <div class=\"row\">
                    <div class=\"col-md-12 mb-4\">
                        <div class=\"card\">
                            <div class=\"position-absolute card-top-buttons\">

                                <button class=\"btn btn-header-light icon-button\" type=\"button\"
                                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"simple-icon-refresh\"></i>
                                </button>

                                <div class=\"dropdown-menu dropdown-menu-right mt-3\">
                                    <a class=\"dropdown-item\" href=\"#\">Sales</a>
                                    <a class=\"dropdown-item\" href=\"#\">Orders</a>
                                    <a class=\"dropdown-item\" href=\"#\">Refunds</a>
                                </div>

                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Sales</h5>
                                <div class=\"dashboard-line-chart chart\">
                                    <canvas id=\"salesChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6 col-lg-12 mb-4\">
                <div class=\"card\">
                    <div class=\"position-absolute card-top-buttons\">
                        <button class=\"btn btn-header-light icon-button\">
                            <i class=\"simple-icon-refresh\"></i>
                        </button>
                    </div>

                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Recent Orders</h5>
                        <div class=\"scroll dashboard-list-with-thumbs\">
                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/marble-cake-thumb.jpg\" alt=\"Marble Cake\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-2 position-absolute badge-top-right\">NEW</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Marble Cake</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Latashia Nagy - 100-148 Warwick
                                                Trfy, Kansas City, USA</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/fruitcake-thumb.jpg\" alt=\"Fruitcake\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-2 position-absolute badge-top-right\">NEW</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Fruitcake</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Marty Otte - 166-156 Rue de
                                                Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/chocolate-cake-thumb.jpg\" alt=\"Chocolate Cake\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-1 position-absolute badge-top-right\">PROCESS</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Chocolate Cake</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Linn Ronning - Rasen 2-14, 98547
                                                Kühndorf, Germany</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/fat-rascal-thumb.jpg\" alt=\"Fat Rascal\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-3 position-absolute badge-top-right\">DONE</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Fat Rascal</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Rasheeda Vaquera - 37 Rue des
                                                Grands Prés, 03100 Montluçon, France</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/streuselkuchen-thumb.jpg\" alt=\"Streuselkuchen\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-3 position-absolute badge-top-right\">DONE</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Streuselkuchen</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Mimi Carreira - 36-71 Victoria
                                                St, Birmingham, UK</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/cremeschnitte-thumb.jpg\" alt=\"Cremeschnitte\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-3 position-absolute badge-top-right\">DONE</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Cremeschnitte</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Lenna Majeed - 6 Hertford St
                                                Mayfair, London, UK</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Product Categories</h5>
                        <div class=\"dashboard-donut-chart chart\">
                            <canvas id=\"categoryChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-4 mb-4\">
                <div class=\"card dashboard-link-list\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Cakes</h5>
                        <div class=\"d-flex flex-row\">
                            <div class=\"w-50\">
                                <ul class=\"list-unstyled mb-0\">
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Marble Cake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fruitcake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Chocolate Cake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fat Rascal</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Financier</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Genoise</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Gingerbread</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Goose Breast</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Parkin</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Petit Gâteau</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Salzburger Nockerl</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Soufflé</a>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"w-50\">
                                <ul class=\"list-unstyled mb-0\">
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Streuselkuchen</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Tea Loaf</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Napoleonshat</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Merveilleux</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Magdalena</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Cremeschnitte</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Cheesecake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Bebinca</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fruitcake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Chocolate Cake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fat Rascal</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Financier</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tickets</h5>
                        <div class=\"scroll dashboard-list-with-user\">
                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l.jpg\" alt=\"Mayra Sibley\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Mayra Sibley</p>
                                        <p class=\"text-muted mb-0 text-small\">09.08.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-7.jpg\" alt=\"Mimi Carreira\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Mimi Carreira</p>
                                        <p class=\"text-muted mb-0 text-small\">05.08.2018 - 10:20</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-6.jpg\" alt=\"Philip Nelms\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Philip Nelms</p>
                                        <p class=\"text-muted mb-0 text-small\">05.08.2018 - 09:12</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-3.jpg\" alt=\"Terese Threadgill\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Terese Threadgill</p>
                                        <p class=\"text-muted mb-0 text-small\">01.08.2018 - 18:20</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-5.jpg\" alt=\"Kathryn Mengel\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Kathryn Mengel</p>
                                        <p class=\"text-muted mb-0 text-small\">27.07.2018 - 11:45</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-4.jpg\" alt=\"Esperanza Lodge\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Esperanza Lodge</p>
                                        <p class=\"text-muted mb-0 text-small\">24.07.2018 - 15:00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-12 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Calendar</h5>
                        <div class=\"calendar\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-lg-12 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Best Sellers</h5>
                        <table class=\"data-table data-table-standard responsive nowrap\"
                               data-order=\"[[ 1, &quot;desc&quot; ]]\">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Sales</th>
                                <th>Stock</th>
                                <th>Category</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Marble Cake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1452</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">62</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Fruitcake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1245</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">65</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Chocolate Cake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1200</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">45</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Bebinca</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1150</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">4</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Napoleonshat</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1050</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">41</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Magdalena</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">998</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">24</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Salzburger Nockerl</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">924</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">20</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Soufflé</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">905</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">64</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Cremeschnitte</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">845</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">12</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Cheesecake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">830</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">36</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Gingerbread</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">807</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">21</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Goose Breast</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">795</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">9</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src=\"js/vendor/jquery-3.3.1.min.js\"></script>
<script src=\"js/vendor/bootstrap.bundle.min.js\"></script>
<script src=\"js/vendor/Chart.bundle.min.js\"></script>
<script src=\"js/vendor/chartjs-plugin-datalabels.js\"></script>
<script src=\"js/vendor/moment.min.js\"></script>
<script src=\"js/vendor/fullcalendar.min.js\"></script>
<script src=\"js/vendor/datatables.min.js\"></script>
<script src=\"js/vendor/perfect-scrollbar.min.js\"></script>
<script src=\"js/vendor/owl.carousel.min.js\"></script>
<script src=\"js/vendor/progressbar.min.js\"></script>
<script src=\"js/vendor/jquery.barrating.min.js\"></script>
<script src=\"js/vendor/select2.full.js\"></script>
<script src=\"js/vendor/nouislider.min.js\"></script>
<script src=\"js/vendor/bootstrap-datepicker.js\"></script>
<script src=\"js/vendor/Sortable.js\"></script>
<script src=\"js/vendor/mousetrap.min.js\"></script>
<script src=\"js/dore.script.js\"></script>
<script src=\"js/scripts.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>Portal Lovelace</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"font/iconsmind-s/css/iconsminds.css\" />
    <link rel=\"stylesheet\" href=\"font/simple-line-icons/css/simple-line-icons.css\" />

    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap.rtl.only.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/fullcalendar.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/dataTables.bootstrap4.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/datatables.responsive.bootstrap4.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/select2.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/perfect-scrollbar.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/owl.carousel.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap-stars.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/nouislider.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/bootstrap-datepicker3.min.css\" />
    <link rel=\"stylesheet\" href=\"css/vendor/component-custom-switch.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/dore.dark.green.min.css\">
    <link rel=\"stylesheet\" href=\"css/main.css\" />
</head>

<body id=\"app-container\" class=\"menu-default show-spinner\">
<nav class=\"navbar fixed-top\">
    <div class=\"d-flex align-items-center navbar-left\">
        <a href=\"#\" class=\"menu-button d-none d-md-block\">
            <svg class=\"main\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 9 17\">
                <rect x=\"0.48\" y=\"0.5\" width=\"7\" height=\"1\" />
                <rect x=\"0.48\" y=\"7.5\" width=\"7\" height=\"1\" />
                <rect x=\"0.48\" y=\"15.5\" width=\"7\" height=\"1\" />
            </svg>
            <svg class=\"sub\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18 17\">
                <rect x=\"1.56\" y=\"0.5\" width=\"16\" height=\"1\" />
                <rect x=\"1.56\" y=\"7.5\" width=\"16\" height=\"1\" />
                <rect x=\"1.56\" y=\"15.5\" width=\"16\" height=\"1\" />
            </svg>
        </a>

        <a href=\"#\" class=\"menu-button-mobile d-xs-block d-sm-block d-md-none\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 26 17\">
                <rect x=\"0.5\" y=\"0.5\" width=\"25\" height=\"1\" />
                <rect x=\"0.5\" y=\"7.5\" width=\"25\" height=\"1\" />
                <rect x=\"0.5\" y=\"15.5\" width=\"25\" height=\"1\" />
            </svg>
        </a>

        <div class=\"search\" data-search-path=\"Pages.Search.html?q=\">
            <input placeholder=\"Search...\">
            <span class=\"search-icon\">
                    <i class=\"simple-icon-magnifier\"></i>
                </span>
        </div>

        <a class=\"btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block\"
           href=\"https://1.envato.market/5kAb\">&nbsp;BUY&nbsp;</a>
    </div>


    <a class=\"navbar-logo\" href=\"Dashboard.Default.html\">
        <span class=\"logo d-none d-xs-block\"></span>
        <span class=\"logo-mobile d-block d-xs-none\"></span>
    </a>

    <div class=\"navbar-right\">
        <div class=\"header-icons d-inline-block align-middle\">
            <div class=\"d-none d-md-inline-block align-text-bottom mr-3\">
                <div class=\"custom-switch custom-switch-primary-inverse custom-switch-small pl-1\"
                     data-toggle=\"tooltip\" data-placement=\"left\" title=\"Dark Mode\">
                    <input class=\"custom-switch-input\" id=\"switchDark\" type=\"checkbox\" checked>
                    <label class=\"custom-switch-btn\" for=\"switchDark\"></label>
                </div>
            </div>

            <div class=\"position-relative d-none d-sm-inline-block\">
                <button class=\"header-icon btn btn-empty\" type=\"button\" id=\"iconMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"simple-icon-grid\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right mt-3  position-absolute\" id=\"iconMenuDropdown\">
                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-equalizer d-block\"></i>
                        <span>Settings</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-male-female d-block\"></i>
                        <span>Users</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-puzzle d-block\"></i>
                        <span>Components</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-bar-chart-4 d-block\"></i>
                        <span>Profits</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-file d-block\"></i>
                        <span>Surveys</span>
                    </a>

                    <a href=\"#\" class=\"icon-menu-item\">
                        <i class=\"iconsminds-suitcase d-block\"></i>
                        <span>Tasks</span>
                    </a>

                </div>
            </div>

            <div class=\"position-relative d-inline-block\">
                <button class=\"header-icon btn btn-empty\" type=\"button\" id=\"notificationButton\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"simple-icon-bell\"></i>
                    <span class=\"count\">3</span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right mt-3 position-absolute\" id=\"notificationDropdown\">
                    <div class=\"scroll\">
                        <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                            <a href=\"#\">
                                <img src=\"img/profile-pic-l-2.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">Joisse Kaycee just sent a new comment!</p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                            <a href=\"#\">
                                <img src=\"img/notification-thumb.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">1 item is out of stock!</p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                            <a href=\"#\">
                                <img src=\"img/notification-thumb-2.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">New order received! It is total \$147,20.</p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"d-flex flex-row mb-3 pb-3 \">
                            <a href=\"#\">
                                <img src=\"img/notification-thumb-3.jpg\" alt=\"Notification Image\"
                                     class=\"img-thumbnail list-thumbnail xsmall border-0 rounded-circle\" />
                            </a>
                            <div class=\"pl-3\">
                                <a href=\"#\">
                                    <p class=\"font-weight-medium mb-1\">3 items just added to wish list by a user!
                                    </p>
                                    <p class=\"text-muted mb-0 text-small\">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class=\"header-icon btn btn-empty d-none d-sm-inline-block\" type=\"button\" id=\"fullScreenButton\">
                <i class=\"simple-icon-size-fullscreen\"></i>
                <i class=\"simple-icon-size-actual\"></i>
            </button>

        </div>

        <div class=\"user d-inline-block\">
            <button class=\"btn btn-empty p-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                <span class=\"name\">Sarah Kortney</span>
                <span>
                        <img alt=\"Profile Picture\" src=\"img/profile-pic-l.jpg\" />
                    </span>
            </button>

            <div class=\"dropdown-menu dropdown-menu-right mt-3\">
                <a class=\"dropdown-item\" href=\"#\">Account</a>
                <a class=\"dropdown-item\" href=\"#\">Features</a>
                <a class=\"dropdown-item\" href=\"#\">History</a>
                <a class=\"dropdown-item\" href=\"#\">Support</a>
                <a class=\"dropdown-item\" href=\"#\">Sign out</a>
            </div>
        </div>
    </div>
</nav>

<div class=\"menu\">
    <div class=\"main-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\">
                <li class=\"active\">
                    <a href=\"#dashboard\">
                        <i class=\"iconsminds-shop-4\"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href=\"#layouts\">
                        <i class=\"iconsminds-digital-drawing\"></i> Pages
                    </a>
                </li>
                <li>
                    <a href=\"#applications\">
                        <i class=\"iconsminds-air-balloon-1\"></i> Applications
                    </a>
                </li>
                <li>
                    <a href=\"#ui\">
                        <i class=\"iconsminds-pantone\"></i> UI
                    </a>
                </li>
                <li>
                    <a href=\"#menu\">
                        <i class=\"iconsminds-three-arrow-fork\"></i> Menu
                    </a>
                </li>
                <li>
                    <a href=\"Blank.Page.html\">
                        <i class=\"iconsminds-bucket\"></i> Blank Page
                    </a>
                </li>
                <li>
                    <a href=\"https://dore-jquery-docs.coloredstrategies.com\" target=\"_blank\">
                        <i class=\"iconsminds-library\"></i> Docs
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"sub-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\" data-link=\"dashboard\">
                <li>
                    <a href=\"Dashboard.Default.html\">
                        <i class=\"simple-icon-rocket\"></i> <span class=\"d-inline-block\">Default</span>
                    </a>
                </li>
                <li>
                    <a href=\"Dashboard.Analytics.html\">
                        <i class=\"simple-icon-pie-chart\"></i> <span class=\"d-inline-block\">Analytics</span>
                    </a>
                </li>
                <li class=\"active\">
                    <a href=\"Dashboard.Ecommerce.html\">
                        <i class=\"simple-icon-basket-loaded\"></i> <span class=\"d-inline-block\">Ecommerce</span>
                    </a>
                </li>
                <li>
                    <a href=\"Dashboard.Content.html\">
                        <i class=\"simple-icon-doc\"></i> <span class=\"d-inline-block\">Content</span>
                    </a>
                </li>
            </ul>
            <ul class=\"list-unstyled\" data-link=\"layouts\" id=\"layouts\">
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseAuthorization\" aria-expanded=\"true\"
                       aria-controls=\"collapseAuthorization\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Authorization</span>
                    </a>
                    <div id=\"collapseAuthorization\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Auth.Login.html\">
                                    <i class=\"simple-icon-user-following\"></i> <span
                                            class=\"d-inline-block\">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Auth.Register.html\">
                                    <i class=\"simple-icon-user-follow\"></i> <span
                                            class=\"d-inline-block\">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Auth.ForgotPassword.html\">
                                    <i class=\"simple-icon-user-unfollow\"></i> <span class=\"d-inline-block\">Forgot
                                            Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseProduct\" aria-expanded=\"true\"
                       aria-controls=\"collapseProduct\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Product</span>
                    </a>
                    <div id=\"collapseProduct\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Product.List.html\">
                                    <i class=\"simple-icon-credit-card\"></i> <span class=\"d-inline-block\">Data
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Product.Thumbs.html\">
                                    <i class=\"simple-icon-list\"></i> <span class=\"d-inline-block\">Thumb
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Product.Images.html\">
                                    <i class=\"simple-icon-grid\"></i> <span class=\"d-inline-block\">Image
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Product.Detail.html\">
                                    <i class=\"simple-icon-book-open\"></i> <span class=\"d-inline-block\">Detail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseProfile\" aria-expanded=\"true\"
                       aria-controls=\"collapseProfile\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Profile</span>
                    </a>
                    <div id=\"collapseProfile\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Profile.Social.html\">
                                    <i class=\"simple-icon-share\"></i> <span class=\"d-inline-block\">Social</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Profile.Portfolio.html\">
                                    <i class=\"simple-icon-link\"></i> <span class=\"d-inline-block\">Portfolio</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseBlog\" aria-expanded=\"true\"
                       aria-controls=\"collapseBlog\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Blog</span>
                    </a>
                    <div id=\"collapseBlog\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Blog.html\">
                                    <i class=\"simple-icon-list\"></i> <span class=\"d-inline-block\">List</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Blog.Detail.html\">
                                    <i class=\"simple-icon-book-open\"></i> <span class=\"d-inline-block\">Detail</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Blog.Detail.Alt.html\">
                                    <i class=\"simple-icon-picture\"></i> <span class=\"d-inline-block\">Detail
                                            Alt</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMisc\" aria-expanded=\"true\"
                       aria-controls=\"collapseMisc\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Miscellaneous</span>
                    </a>
                    <div id=\"collapseMisc\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Pages.Misc.Coming.Soon.html\">
                                    <i class=\"simple-icon-hourglass\"></i> <span class=\"d-inline-block\">Coming
                                            Soon</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Error.html\">
                                    <i class=\"simple-icon-exclamation\"></i> <span
                                            class=\"d-inline-block\">Error</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Faq.html\">
                                    <i class=\"simple-icon-question\"></i> <span class=\"d-inline-block\">Faq</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Invoice.html\">
                                    <i class=\"simple-icon-bag\"></i> <span class=\"d-inline-block\">Invoice</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Knowledge.Base.html\">
                                    <i class=\"simple-icon-graduation\"></i> <span class=\"d-inline-block\">Knowledge
                                            Base</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Mailing.html\">
                                    <i class=\"simple-icon-envelope-open\"></i> <span
                                            class=\"d-inline-block\">Mailing</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Pricing.html\">
                                    <i class=\"simple-icon-diamond\"></i> <span class=\"d-inline-block\">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Pages.Misc.Search.html\">
                                    <i class=\"simple-icon-magnifier\"></i> <span class=\"d-inline-block\">Search</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
            <ul class=\"list-unstyled\" data-link=\"applications\">
                <li>
                    <a href=\"Apps.MediaLibrary.html\">
                        <i class=\"simple-icon-picture\"></i> <span class=\"d-inline-block\">Library</span>
                    </a>
                </li>
                <li>
                    <a href=\"Apps.Todo.List.html\">
                        <i class=\"simple-icon-check\"></i> <span class=\"d-inline-block\">Todo</span>
                    </a>
                </li>
                <li>
                    <a href=\"Apps.Survey.List.html\">
                        <i class=\"simple-icon-calculator\"></i> <span class=\"d-inline-block\">Survey</span>
                    </a>
                </li>
                <li>
                    <a href=\"Apps.Chat.html\">
                        <i class=\"simple-icon-bubbles\"></i> <span class=\"d-inline-block\">Chat</span>
                    </a>
                </li>
            </ul>
            <ul class=\"list-unstyled\" data-link=\"ui\">
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseForms\" aria-expanded=\"true\"
                       aria-controls=\"collapseForms\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Forms</span>
                    </a>
                    <div id=\"collapseForms\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Ui.Forms.Components.html\">
                                    <i class=\"simple-icon-event\"></i> <span class=\"d-inline-block\">Components</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Forms.Layouts.html\">
                                    <i class=\"simple-icon-doc\"></i> <span class=\"d-inline-block\">Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Forms.Validation.html\">
                                    <i class=\"simple-icon-check\"></i> <span class=\"d-inline-block\">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Forms.Wizard.html\">
                                    <i class=\"simple-icon-magic-wand\"></i> <span
                                            class=\"d-inline-block\">Wizard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseDataTables\" aria-expanded=\"true\"
                       aria-controls=\"collapseDataTables\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Datatables</span>
                    </a>
                    <div id=\"collapseDataTables\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Ui.Datatables.Rows.html\">
                                    <i class=\"simple-icon-screen-desktop\"></i> <span class=\"d-inline-block\">Full
                                            Page UI</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Datatables.Scroll.html\">
                                    <i class=\"simple-icon-mouse\"></i> <span class=\"d-inline-block\">Scrollable</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Datatables.Pagination.html\">
                                    <i class=\"simple-icon-notebook\"></i> <span
                                            class=\"d-inline-block\">Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Datatables.Default.html\">
                                    <i class=\"simple-icon-grid\"></i> <span class=\"d-inline-block\">Default</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseComponents\" aria-expanded=\"true\"
                       aria-controls=\"collapseComponents\" class=\"rotate-arrow-icon opacity-50\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Components</span>
                    </a>
                    <div id=\"collapseComponents\" class=\"collapse show\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Ui.Components.Alerts.html\">
                                    <i class=\"simple-icon-bell\"></i> <span class=\"d-inline-block\">Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Badges.html\">
                                    <i class=\"simple-icon-badge\"></i> <span class=\"d-inline-block\">Badges</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Buttons.html\">
                                    <i class=\"simple-icon-control-play\"></i> <span
                                            class=\"d-inline-block\">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Cards.html\">
                                    <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Cards</span>
                                </a>
                            </li>

                            <li>
                                <a href=\"Ui.Components.Carousel.html\">
                                    <i class=\"simple-icon-picture\"></i> <span class=\"d-inline-block\">Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Charts.html\">
                                    <i class=\"simple-icon-chart\"></i> <span class=\"d-inline-block\">Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Collapse.html\">
                                    <i class=\"simple-icon-arrow-up\"></i> <span
                                            class=\"d-inline-block\">Collapse</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Dropdowns.html\">
                                    <i class=\"simple-icon-arrow-down\"></i> <span
                                            class=\"d-inline-block\">Dropdowns</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Editors.html\">
                                    <i class=\"simple-icon-book-open\"></i> <span
                                            class=\"d-inline-block\">Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Icons.html\">
                                    <i class=\"simple-icon-star\"></i> <span class=\"d-inline-block\">Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.InputGroups.html\">
                                    <i class=\"simple-icon-note\"></i> <span class=\"d-inline-block\">Input
                                            Groups</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Jumbotron.html\">
                                    <i class=\"simple-icon-screen-desktop\"></i> <span
                                            class=\"d-inline-block\">Jumbotron</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Modal.html\">
                                    <i class=\"simple-icon-docs\"></i> <span class=\"d-inline-block\">Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Navigation.html\">
                                    <i class=\"simple-icon-cursor\"></i> <span
                                            class=\"d-inline-block\">Navigation</span>
                                </a>
                            </li>

                            <li>
                                <a href=\"Ui.Components.PopoverandTooltip.html\">
                                    <i class=\"simple-icon-pin\"></i> <span class=\"d-inline-block\">Popover &
                                            Tooltip</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Sortable.html\">
                                    <i class=\"simple-icon-shuffle\"></i> <span class=\"d-inline-block\">Sortable</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Ui.Components.Tables.html\">
                                    <i class=\"simple-icon-grid\"></i> <span class=\"d-inline-block\">Tables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

            <ul class=\"list-unstyled\" data-link=\"menu\" id=\"menuTypes\">
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuTypes\" aria-expanded=\"true\"
                       aria-controls=\"collapseMenuTypes\" class=\"rotate-arrow-icon\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Menu Types</span>
                    </a>
                    <div id=\"collapseMenuTypes\" class=\"collapse show\" data-parent=\"#menuTypes\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"Menu.Default.html\">
                                    <i class=\"simple-icon-control-pause\"></i> <span
                                            class=\"d-inline-block\">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Menu.Subhidden.html\">
                                    <i class=\"simple-icon-arrow-left mi-subhidden\"></i> <span
                                            class=\"d-inline-block\">Subhidden</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Menu.Hidden.html\">
                                    <i class=\"simple-icon-control-start mi-hidden\"></i> <span
                                            class=\"d-inline-block\">Hidden</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"Menu.Mainhidden.html\">
                                    <i class=\"simple-icon-control-rewind mi-hidden\"></i> <span
                                            class=\"d-inline-block\">Mainhidden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuLevel\" aria-expanded=\"true\"
                       aria-controls=\"collapseMenuLevel\" class=\"rotate-arrow-icon collapsed\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Menu Levels</span>
                    </a>
                    <div id=\"collapseMenuLevel\" class=\"collapse\" data-parent=\"#menuTypes\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Sub
                                            Level</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuLevel2\"
                                   aria-expanded=\"true\" aria-controls=\"collapseMenuLevel2\"
                                   class=\"rotate-arrow-icon collapsed\">
                                    <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Another
                                            Level</span>
                                </a>
                                <div id=\"collapseMenuLevel2\" class=\"collapse\">
                                    <ul class=\"list-unstyled inner-level-menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Sub
                                                        Level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseMenuDetached\" aria-expanded=\"true\"
                       aria-controls=\"collapseMenuDetached\" class=\"rotate-arrow-icon collapsed\">
                        <i class=\"simple-icon-arrow-down\"></i> <span class=\"d-inline-block\">Detached</span>
                    </a>
                    <div id=\"collapseMenuDetached\" class=\"collapse\">
                        <ul class=\"list-unstyled inner-level-menu\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"simple-icon-layers\"></i> <span class=\"d-inline-block\">Sub
                                            Level</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">

                <h1>Dashboard Ecommerce</h1>
                <nav class=\"breadcrumb-container d-none d-sm-block d-lg-inline-block\" aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb pt-0\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">Library</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
                    </ol>
                </nav>
                <div class=\"separator mb-5\"></div>


            </div>
            <div class=\"col-lg-12 col-xl-6\">

                <div class=\"icon-cards-row\">
                    <div class=\"owl-container\">
                        <div class=\"owl-carousel dashboard-numbers\">
                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-clock\"></i>
                                    <p class=\"card-text mb-0\">Pending Orders</p>
                                    <p class=\"lead text-center\">16</p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-basket-coins\"></i>
                                    <p class=\"card-text mb-0\">Completed Orders</p>
                                    <p class=\"lead text-center\">32</p>
                                </div>
                            </a>

                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-arrow-refresh\"></i>
                                    <p class=\"card-text mb-0\">Refund Requests</p>
                                    <p class=\"lead text-center\">2</p>
                                </div>
                            </a>

                            <a href=\"#\" class=\"card\">
                                <div class=\"card-body text-center\">
                                    <i class=\"iconsminds-mail-read\"></i>
                                    <p class=\"card-text mb-0\">New Comments</p>
                                    <p class=\"lead text-center\">25</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>




                <div class=\"row\">
                    <div class=\"col-md-12 mb-4\">
                        <div class=\"card\">
                            <div class=\"position-absolute card-top-buttons\">

                                <button class=\"btn btn-header-light icon-button\" type=\"button\"
                                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"simple-icon-refresh\"></i>
                                </button>

                                <div class=\"dropdown-menu dropdown-menu-right mt-3\">
                                    <a class=\"dropdown-item\" href=\"#\">Sales</a>
                                    <a class=\"dropdown-item\" href=\"#\">Orders</a>
                                    <a class=\"dropdown-item\" href=\"#\">Refunds</a>
                                </div>

                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Sales</h5>
                                <div class=\"dashboard-line-chart chart\">
                                    <canvas id=\"salesChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6 col-lg-12 mb-4\">
                <div class=\"card\">
                    <div class=\"position-absolute card-top-buttons\">
                        <button class=\"btn btn-header-light icon-button\">
                            <i class=\"simple-icon-refresh\"></i>
                        </button>
                    </div>

                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Recent Orders</h5>
                        <div class=\"scroll dashboard-list-with-thumbs\">
                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/marble-cake-thumb.jpg\" alt=\"Marble Cake\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-2 position-absolute badge-top-right\">NEW</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Marble Cake</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Latashia Nagy - 100-148 Warwick
                                                Trfy, Kansas City, USA</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/fruitcake-thumb.jpg\" alt=\"Fruitcake\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-2 position-absolute badge-top-right\">NEW</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Fruitcake</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Marty Otte - 166-156 Rue de
                                                Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/chocolate-cake-thumb.jpg\" alt=\"Chocolate Cake\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-1 position-absolute badge-top-right\">PROCESS</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Chocolate Cake</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Linn Ronning - Rasen 2-14, 98547
                                                Kühndorf, Germany</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/fat-rascal-thumb.jpg\" alt=\"Fat Rascal\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-3 position-absolute badge-top-right\">DONE</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Fat Rascal</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Rasheeda Vaquera - 37 Rue des
                                                Grands Prés, 03100 Montluçon, France</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/streuselkuchen-thumb.jpg\" alt=\"Streuselkuchen\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-3 position-absolute badge-top-right\">DONE</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Streuselkuchen</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Mimi Carreira - 36-71 Victoria
                                                St, Birmingham, UK</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3\">
                                <a class=\"d-block position-relative\" href=\"#\">
                                    <img src=\"img/cremeschnitte-thumb.jpg\" alt=\"Cremeschnitte\"
                                         class=\"list-thumbnail border-0\" />
                                    <span
                                            class=\"badge badge-pill badge-theme-3 position-absolute badge-top-right\">DONE</span>
                                </a>
                                <div class=\"pl-3 pt-2 pr-2 pb-2\">
                                    <a href=\"#\">
                                        <p class=\"list-item-heading\">Cremeschnitte</p>
                                        <div class=\"pr-4 d-none d-sm-block\">
                                            <p class=\"text-muted mb-1 text-small\">Lenna Majeed - 6 Hertford St
                                                Mayfair, London, UK</p>
                                        </div>
                                        <div class=\"text-primary text-small font-weight-medium d-none d-sm-block\">
                                            09.04.2018</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Product Categories</h5>
                        <div class=\"dashboard-donut-chart chart\">
                            <canvas id=\"categoryChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-4 mb-4\">
                <div class=\"card dashboard-link-list\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Cakes</h5>
                        <div class=\"d-flex flex-row\">
                            <div class=\"w-50\">
                                <ul class=\"list-unstyled mb-0\">
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Marble Cake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fruitcake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Chocolate Cake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fat Rascal</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Financier</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Genoise</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Gingerbread</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Goose Breast</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Parkin</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Petit Gâteau</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Salzburger Nockerl</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Soufflé</a>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"w-50\">
                                <ul class=\"list-unstyled mb-0\">
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Streuselkuchen</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Tea Loaf</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Napoleonshat</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Merveilleux</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Magdalena</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Cremeschnitte</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Cheesecake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Bebinca</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fruitcake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Chocolate Cake</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Fat Rascal</a>
                                    </li>
                                    <li class=\"mb-1\">
                                        <a href=\"#\">Financier</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tickets</h5>
                        <div class=\"scroll dashboard-list-with-user\">
                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l.jpg\" alt=\"Mayra Sibley\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Mayra Sibley</p>
                                        <p class=\"text-muted mb-0 text-small\">09.08.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-7.jpg\" alt=\"Mimi Carreira\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Mimi Carreira</p>
                                        <p class=\"text-muted mb-0 text-small\">05.08.2018 - 10:20</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-6.jpg\" alt=\"Philip Nelms\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Philip Nelms</p>
                                        <p class=\"text-muted mb-0 text-small\">05.08.2018 - 09:12</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-3.jpg\" alt=\"Terese Threadgill\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Terese Threadgill</p>
                                        <p class=\"text-muted mb-0 text-small\">01.08.2018 - 18:20</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-5.jpg\" alt=\"Kathryn Mengel\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Kathryn Mengel</p>
                                        <p class=\"text-muted mb-0 text-small\">27.07.2018 - 11:45</p>
                                    </a>
                                </div>
                            </div>

                            <div class=\"d-flex flex-row mb-3 pb-3 border-bottom\">
                                <a href=\"#\">
                                    <img src=\"img/profile-pic-l-4.jpg\" alt=\"Esperanza Lodge\"
                                         class=\"img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall\" />
                                </a>
                                <div class=\"pl-3\">
                                    <a href=\"#\">
                                        <p class=\"font-weight-medium mb-0 \">Esperanza Lodge</p>
                                        <p class=\"text-muted mb-0 text-small\">24.07.2018 - 15:00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-12 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Calendar</h5>
                        <div class=\"calendar\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-lg-12 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Best Sellers</h5>
                        <table class=\"data-table data-table-standard responsive nowrap\"
                               data-order=\"[[ 1, &quot;desc&quot; ]]\">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Sales</th>
                                <th>Stock</th>
                                <th>Category</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Marble Cake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1452</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">62</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Fruitcake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1245</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">65</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Chocolate Cake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1200</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">45</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Bebinca</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1150</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">4</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Napoleonshat</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">1050</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">41</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Magdalena</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">998</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">24</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Salzburger Nockerl</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">924</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">20</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Soufflé</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">905</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">64</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Cremeschnitte</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">845</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">12</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Cheesecake</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">830</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">36</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Gingerbread</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">807</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">21</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class=\"list-item-heading\">Goose Breast</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">795</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">9</p>
                                </td>
                                <td>
                                    <p class=\"text-muted\">Cupcakes</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src=\"js/vendor/jquery-3.3.1.min.js\"></script>
<script src=\"js/vendor/bootstrap.bundle.min.js\"></script>
<script src=\"js/vendor/Chart.bundle.min.js\"></script>
<script src=\"js/vendor/chartjs-plugin-datalabels.js\"></script>
<script src=\"js/vendor/moment.min.js\"></script>
<script src=\"js/vendor/fullcalendar.min.js\"></script>
<script src=\"js/vendor/datatables.min.js\"></script>
<script src=\"js/vendor/perfect-scrollbar.min.js\"></script>
<script src=\"js/vendor/owl.carousel.min.js\"></script>
<script src=\"js/vendor/progressbar.min.js\"></script>
<script src=\"js/vendor/jquery.barrating.min.js\"></script>
<script src=\"js/vendor/select2.full.js\"></script>
<script src=\"js/vendor/nouislider.min.js\"></script>
<script src=\"js/vendor/bootstrap-datepicker.js\"></script>
<script src=\"js/vendor/Sortable.js\"></script>
<script src=\"js/vendor/mousetrap.min.js\"></script>
<script src=\"js/dore.script.js\"></script>
<script src=\"js/scripts.js\"></script>
</body>

</html>", "dashboard/main.html.twig", "/app/templates/dashboard/main.html.twig");
    }
}
