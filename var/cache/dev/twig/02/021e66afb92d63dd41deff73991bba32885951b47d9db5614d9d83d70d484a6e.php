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

/* base/menu.html.twig */
class __TwigTemplate_3f6a17616bec11c177d366009f3646c0bd019e7466f1b42b33af861a36ed8a87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/menu.html.twig"));

        // line 1
        echo "<div class=\"menu\">
    <div class=\"main-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"#opcoes\">
                        <i class=\"iconsminds-air-balloon-1\"></i> Opções
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"sub-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\" data-link=\"opcoes\">
                <li>
";
        // line 21
        echo "                </li>
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
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"menu\">
    <div class=\"main-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"#opcoes\">
                        <i class=\"iconsminds-air-balloon-1\"></i> Opções
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"sub-menu\">
        <div class=\"scroll\">
            <ul class=\"list-unstyled\" data-link=\"opcoes\">
                <li>
{#                    <a href=\"{{ path('api_has_fire') }}\">#}
{#                        <i class=\"simple-icon-map\"></i> <span class=\"d-inline-block\">Locais de incêndio</span>#}
{#                    </a>#}
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
</div>", "base/menu.html.twig", "/app/templates/base/menu.html.twig");
    }
}
