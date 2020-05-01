<?php

/* @groups/partials/group-users-list.twig */
class __TwigTemplate_e5c952148b06971a1231584272a14a100c00f78f93604b73e5798eca2387bf93 extends Twig_Template
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
        if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
            // line 2
            echo "\t";
            $this->loadTemplate("@groups/partials/group-users-list.twig", "@groups/partials/group-users-list.twig", 2, "1853829046")->display(array_merge($context, array("users" => ($context["users"] ?? null))));
        } else {
            // line 29
            echo "\t";
            $this->loadTemplate("@users/partials/users-list.twig", "@groups/partials/group-users-list.twig", 29)->display(array_merge($context, array("users" => ($context["users"] ?? null))));
        }
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "@groups/partials/group-users-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 31,  25 => 29,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/group-users-list.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/group-users-list.twig");
    }
}


/* @groups/partials/group-users-list.twig */
class __TwigTemplate_e5c952148b06971a1231584272a14a100c00f78f93604b73e5798eca2387bf93_1853829046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@users/partials/users-list.twig", "@groups/partials/group-users-list.twig", 2);
        $this->blocks = array(
            'actionButtons' => array($this, 'block_actionButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@users/partials/users-list.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t";
        if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUser(($context["user"] ?? null))) {
            // line 5
            echo "\t\t\t\t
\t\t\t\t";
            // line 6
            if ((($context["listType"] ?? null) == "approved")) {
                // line 7
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "groupInfo", array()), "is_creator", array()) != 1)) {
                    // line 8
                    echo "\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"block\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Block")), "html", null, true);
                    echo "</button>
\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"remove-from-group\">";
                    // line 9
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove from group")), "html", null, true);
                    echo "</button>
\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t
\t\t\t\t";
            // line 13
            if ((($context["listType"] ?? null) == "unapproved")) {
                // line 14
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"approve\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Approve")), "html", null, true);
                echo "</button>
\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unapprove\">";
                // line 15
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unapprove")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t
\t\t\t\t";
            // line 18
            if ((($context["listType"] ?? null) == "blocked")) {
                // line 19
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unblock\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unblock")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t
\t\t\t\t";
            // line 22
            if ((($context["listType"] ?? null) == "invited")) {
                // line 23
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"cancel-invitation\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel invitation")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t";
        }
        // line 26
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "@groups/partials/group-users-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 26,  152 => 25,  146 => 23,  144 => 22,  141 => 21,  135 => 19,  133 => 18,  130 => 17,  125 => 15,  120 => 14,  118 => 13,  115 => 12,  112 => 11,  107 => 9,  102 => 8,  99 => 7,  97 => 6,  94 => 5,  91 => 4,  88 => 3,  71 => 2,  29 => 31,  25 => 29,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/group-users-list.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/group-users-list.twig");
    }
}
