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

/* base/template.html.twig */
class __TwigTemplate_f6e08dd6eee457c0ccb6f974e61cb29299a7abc7f7af50a12b0dc4f31c91596b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'vendor_css' => [$this, 'block_vendor_css'],
            'css' => [$this, 'block_css'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'vendor_js' => [$this, 'block_vendor_js'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"UTF-8\">
    <title>Dore jQuery</title>
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
    ";
        // line 27
        $this->displayBlock('vendor_css', $context, $blocks);
        // line 28
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />

    ";
        // line 30
        $this->displayBlock('css', $context, $blocks);
        // line 31
        echo "
</head>

<body
        class=\"menu-default show-spinner\" id=\"app-container\">

<!-- START: HEADER -->
";
        // line 38
        $this->loadTemplate("base/header.html.twig", "base/template.html.twig", 38)->display($context);
        // line 39
        echo "<!-- END: HEADER -->

<!-- START: HEADER -->
";
        // line 42
        $this->loadTemplate("base/menu.html.twig", "base/template.html.twig", 42)->display($context);
        // line 43
        echo "<!-- END: HEADER -->

<main>
    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-12\">

                <h1>";
        // line 51
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
                <nav aria-label=\"breadcrumb\" class=\"breadcrumb-container d-none d-sm-block d-lg-inline-block\">
                    <ol class=\"breadcrumb pt-0\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"/\">Home</a>
                        </li>
                    </ol>
                </nav>
                <div class=\"separator mb-5\"></div>
            </div>

        </div>

        <!-- START: PAGE CONTENT -->
        ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "        <!-- END: PAGE CONTENT -->

    </div>
</main>

<script src=\"/js/vendor/jquery-3.3.1.min.js\"></script>
<script src=\"/js/vendor/bootstrap.bundle.min.js\"></script>
<script src=\"/js/vendor/perfect-scrollbar.min.js\"></script>
<script src=\"/js/vendor/mousetrap.min.js\"></script>
<script src=\"/js/dore.script.js\"></script>
";
        // line 76
        $this->displayBlock('vendor_js', $context, $blocks);
        // line 77
        echo "<script src=\"/js/scripts.js\"></script>
";
        // line 78
        $this->displayBlock('js', $context, $blocks);
        // line 79
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_vendor_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_vendor_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 78,  260 => 76,  242 => 65,  224 => 51,  206 => 30,  188 => 27,  170 => 5,  157 => 79,  155 => 78,  152 => 77,  150 => 76,  138 => 66,  136 => 65,  119 => 51,  109 => 43,  107 => 42,  102 => 39,  100 => 38,  91 => 31,  89 => 30,  83 => 28,  81 => 27,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>{% block title %}{% endblock %}</title>
    <meta charset=\"UTF-8\">
    <title>Dore jQuery</title>
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
    {% block vendor_css %}{% endblock %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />

    {% block css %}{% endblock %}

</head>

<body
        class=\"menu-default show-spinner\" id=\"app-container\">

<!-- START: HEADER -->
{% include 'base/header.html.twig' %}
<!-- END: HEADER -->

<!-- START: HEADER -->
{% include 'base/menu.html.twig' %}
<!-- END: HEADER -->

<main>
    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-12\">

                <h1>{% block page_title %}{% endblock %}</h1>
                <nav aria-label=\"breadcrumb\" class=\"breadcrumb-container d-none d-sm-block d-lg-inline-block\">
                    <ol class=\"breadcrumb pt-0\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"/\">Home</a>
                        </li>
                    </ol>
                </nav>
                <div class=\"separator mb-5\"></div>
            </div>

        </div>

        <!-- START: PAGE CONTENT -->
        {% block content %}{% endblock %}
        <!-- END: PAGE CONTENT -->

    </div>
</main>

<script src=\"/js/vendor/jquery-3.3.1.min.js\"></script>
<script src=\"/js/vendor/bootstrap.bundle.min.js\"></script>
<script src=\"/js/vendor/perfect-scrollbar.min.js\"></script>
<script src=\"/js/vendor/mousetrap.min.js\"></script>
<script src=\"/js/dore.script.js\"></script>
{% block vendor_js %}{% endblock %}
<script src=\"/js/scripts.js\"></script>
{% block js %}{% endblock %}

</body>

</html>", "base/template.html.twig", "/app/templates/base/template.html.twig");
    }
}
