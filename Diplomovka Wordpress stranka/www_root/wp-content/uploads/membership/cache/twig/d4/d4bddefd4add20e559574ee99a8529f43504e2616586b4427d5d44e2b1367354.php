<?php

/* @users/partials/posts.twig */
class __TwigTemplate_54866f1ddfb8626c05df1bd9238381d16b5b7df597179368573fd43d084e69fb extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "\t<div class=\"item mp-post mbsOneProfilePost";
            if ($this->getAttribute($context["post"], "image", array())) {
                echo " has-image";
            }
            echo "\" data-post-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
\t\t";
            // line 3
            if ($this->getAttribute($context["post"], "image", array())) {
                echo "<a class=\"mp-link-image\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\"></a>";
            }
            // line 4
            echo "\t\t<div class=\"content\">
\t\t\t<a class=\"header\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo " </a>
\t\t\t<div class=\"meta\">
\t\t\t\t<small class=\"date\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date", array()), "html", null, true);
            echo "</small>
\t\t\t</div>
\t\t\t<div class=\"extra\">
\t\t\t\t<div><small>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "category", array()), "html", null, true);
            echo "</small></div>
\t\t\t\t";
            // line 11
            if ($this->getAttribute($context["post"], "comments_count", array())) {
                // line 12
                echo "\t\t\t\t\t<small>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "comments_count", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), "html", null, true);
                echo "</small>
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t</div>
\t\t</div>
\t\t";
            // line 16
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "base", array()), "plugins", array()), "socialShare", array()), "enabled", array()) == 1) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "base", array()), "plugins", array()), "socialShare", array()), "ids", array())))) {
                // line 17
                echo "\t\t\t<div class=\"mbsSocShareContainerForPost\">
\t\t\t\t";
                // line 18
                echo $this->env->getExtension('Membership_Activity_Twig')->getSocShareProject(array("projectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 19
($context["settings"] ?? null), "base", array()), "plugins", array()), "socialShare", array()), "ids", array()), 0, array(), "array"), "url" => $this->getAttribute(                // line 20
$context["post"], "link", array()), "title" => $this->getAttribute(                // line 21
$context["post"], "title", array()), "type" => "pp", "id" => $this->getAttribute(                // line 23
$context["post"], "id", array())));
                // line 24
                echo "
\t\t\t</div>
\t\t";
            }
            // line 27
            echo "\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@users/partials/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  87 => 24,  85 => 23,  84 => 21,  83 => 20,  82 => 19,  81 => 18,  78 => 17,  76 => 16,  72 => 14,  64 => 12,  62 => 11,  58 => 10,  52 => 7,  45 => 5,  42 => 4,  32 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/partials/posts.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/partials/posts.twig");
    }
}
