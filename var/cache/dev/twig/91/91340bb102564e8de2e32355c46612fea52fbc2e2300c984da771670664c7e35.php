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

/* base/header.html.twig */
class __TwigTemplate_67f568f7101ef5004c68c1d5ed6135d605ab5104f2923cf109db708d20592af2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar fixed-top\">
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
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar fixed-top\">
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
</nav>", "base/header.html.twig", "/app/templates/base/header.html.twig");
    }
}
