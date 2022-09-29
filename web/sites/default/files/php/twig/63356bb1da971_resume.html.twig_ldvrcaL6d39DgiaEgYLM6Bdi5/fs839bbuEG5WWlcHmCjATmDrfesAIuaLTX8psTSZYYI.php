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

/* modules/custom/resume/templates/resume.html.twig */
class __TwigTemplate_ca511b452b644009bca8db678b8e0c1f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "Name:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "title", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "<br>
Email Id:";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_email", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "<br>
Social Account: ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_social_accounts", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "<br>
SSC: ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_ssc", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "<br>
HSC: ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_hsc", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "<br>
Under Graduation CGPA: ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_under_graduation_cgpa", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "<br>
Post Graduation: ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_post_gra", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "<br>
projects: ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_projects", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "<br>
Skills: ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_skills", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "<br>
Achievements: ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_achievements", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "<br>
Experience: ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_experience", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "<br>
Languages: ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_languages_known", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "<br>
Country: ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_country", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "<br>
City: ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_city", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "<br>
Pincode: ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_pincode", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "<br>
Mobile No: ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "field_mo", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "<br>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/resume/templates/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 16,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/resume/templates/resume.html.twig", "/var/www/html/project1/web/modules/custom/resume/templates/resume.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
