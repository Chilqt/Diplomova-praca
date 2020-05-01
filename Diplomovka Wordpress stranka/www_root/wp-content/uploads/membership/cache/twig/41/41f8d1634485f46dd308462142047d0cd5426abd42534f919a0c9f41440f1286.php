<?php

/* @base/error.twig */
class __TwigTemplate_b10899a5063ada912d0cad532bb5c41803a76e273bce94e9cca1f5a7acac4c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"sc-membership\">
\t<div class=\"ui negative message\">
\t\t";
        // line 3
        if (array_key_exists("header", $context)) {
            // line 4
            echo "\t\t\t<div class=\"header\" >
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 8
        echo "\t\t<p>";
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "</p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@base/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@base/error.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Base/views/error.twig");
    }
}
