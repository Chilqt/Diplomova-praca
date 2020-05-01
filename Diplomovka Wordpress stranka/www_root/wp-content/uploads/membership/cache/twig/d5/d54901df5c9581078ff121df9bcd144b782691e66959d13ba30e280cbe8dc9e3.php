<?php

/* @users/account-confirmed.twig */
class __TwigTemplate_cf87b61aacb6f99d4602c06fea7434a676a433a0603a79509c9cefee4666adb7 extends Twig_Template
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
\t<div class=\"ui positive message\">
\t\t<div class=\"header\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your email has been confirmed.")), "html", null, true);
        echo "</div>
\t\t";
        // line 4
        if (($context["isLoggedIn"] ?? null)) {
            // line 5
            echo "\t\t\t<p> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Now your account is active.")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here is you profile link.")), "html", null, true);
            echo "
\t\t\t\t<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("profile")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("profile")), "html", null, true);
            echo "</a>
\t\t\t</p>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Now your account is active.")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You can login in to your account here.")), "html", null, true);
            echo "
\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login")), "html", null, true);
            echo "</a>
\t\t\t</p>
\t\t";
        }
        // line 13
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@users/account-confirmed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 10,  44 => 9,  36 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/account-confirmed.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/account-confirmed.twig");
    }
}
