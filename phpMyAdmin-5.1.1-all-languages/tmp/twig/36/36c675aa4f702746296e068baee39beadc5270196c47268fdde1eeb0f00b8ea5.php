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

/* login/footer.twig */
class __TwigTemplate_b8bc486c93b68196413f0de7ee1b5f1895983b00fb18cc637525e96f845a0ce5 extends \Twig\Template
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
        // line 1
        echo "</div>
";
        // line 2
        if ((($context["check_timeout"] ?? null) == true)) {
            // line 3
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "login/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/footer.twig", "/Applications/MAMP/htdocs/IDAW/phpMyAdmin-5.1.1-all-languages/templates/login/footer.twig");
    }
}
