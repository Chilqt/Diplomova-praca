<?php

/* @users/partials/users-report-modal.twig */
class __TwigTemplate_698f6ed767e80e8396e69f4d9549615afe1a29694f0f5873f0392f3939c0ef3f extends Twig_Template
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
        echo "<div class=\"ui small modal\" id=\"report-user-modal\">
    <i class=\"close icon\"></i>
    <div class=\"header\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report")), "html", null, true);
        echo " <span class=\"recipient-name\"></span>
    </div>
    <div class=\"content\">
        <div class=\"ui form\">
            <div class=\"field\">
                <label>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")), "html", null, true);
        echo "</label>
                <textarea rows=\"5\"></textarea>
            </div>
        </div>
    </div>
    <div class=\"actions\">
        <button class=\"ui button mini secondary cancel\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
        <button class=\"ui positive mini primary button\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send")), "html", null, true);
        echo "</button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@users/partials/users-report-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  40 => 14,  31 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/partials/users-report-modal.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/partials/users-report-modal.twig");
    }
}