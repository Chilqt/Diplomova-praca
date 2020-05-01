<?php

/* @groups/settings.twig */
class __TwigTemplate_88ad8a503cd4e0868fb3d6b36f36ff04c506148705383c6e6b7320bbab02f1a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@groups/group.twig", "@groups/settings.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@groups/group.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"mp-group-settings\">
\t\t<div class=\"ui basic vertical segment\">
\t\t\t<div class=\"ui secondary pointing menu settings-tabs\">
\t\t\t\t<a class=\"active item\" data-tab=\"main\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</a>
\t\t\t\t";
        // line 8
        if (($this->getAttribute(($context["requestedGroup"] ?? null), "isCurrentUserCreator", array()) == 1)) {
            // line 9
            echo "\t\t\t\t\t<a class=\"item\" data-tab=\"privacy\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Privacy")), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t<a class=\"item\" data-tab=\"tags\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tags")), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"ui active tab\" data-tab=\"main\">
\t\t\t<div class=\"ui form basic vertical segment group-settings-form\">
\t\t\t\t<h3 class=\"ui header\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group settings")), "html", null, true);
        echo "</h3>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Name")), "html", null, true);
        echo "</label>
\t\t\t\t\t <input type=\"text\" name=\"name\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestedGroup"] ?? null), "name", array()), "html", null, true);
        echo "\" placeholder=\"Group Name\">
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Description")), "html", null, true);
        echo "</label>
\t\t\t\t\t<textarea max=\"2000\" rows=\"2\" name=\"description\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Description")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestedGroup"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Category")), "html", null, true);
        echo "</label>
\t\t\t\t\t<select name=\"category\">
\t\t\t\t\t\t<option value=\"0\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("None")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 30
        if (twig_length_filter($this->env, ($context["groupCategoryList"] ?? null))) {
            // line 31
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oneGcItem"]) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["oneGcItem"], "id", array(), "array") == $this->getAttribute(($context["requestedGroup"] ?? null), "category_id", array(), "array"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "name", array(), "array"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneGcItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<button class=\"ui primary mini button update-button\">";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Update")), "html", null, true);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 43
        if (($this->getAttribute(($context["requestedGroup"] ?? null), "isCurrentUserCreator", array()) == 1)) {
            // line 44
            echo "\t\t\t\t<div class=\"ui form basic vertical segment\">
\t\t\t\t\t<h3 class=\"ui header\">";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group deletion")), "html", null, true);
            echo "</h3>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<div class=\"ui checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"delete-confirmation\" class=\"hidden confirm-deletion\">
\t\t\t\t\t\t\t\t<label for=\"delete-confirmation\">";
            // line 50
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Confirm deletion (All group data will be deleted and cannot be restored)")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"ui button negative mini confirm-deletion-button\" style=\"display: none\">";
            // line 53
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete group")), "html", null, true);
            echo "</button>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t";
        }
        // line 58
        echo "\t\t</div>
\t\t";
        // line 59
        if (($this->getAttribute(($context["requestedGroup"] ?? null), "isCurrentUserCreator", array()) == 1)) {
            // line 60
            echo "\t\t\t<div class=\"ui tab\" data-tab=\"privacy\">
\t\t\t\t<div class=\"ui form vertical segment privacy-settings\">
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 63
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Community type")), "html", null, true);
            echo "</label>

\t\t\t\t\t\t";
            // line 65
            $context["typeOptions"] = array("open" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open")), "closed" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Closed")), "private" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Private")));
            // line 70
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\" name=\"type\">
\t\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["typeOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 74
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 75
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "type", array()) == $context["option"])) {
                    echo " selected";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t</select>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 82
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity viewing")), "html", null, true);
            echo "</label>

\t\t\t\t\t\t";
            // line 84
            $context["readActivityOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All users can view group activity")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can view activity")));
            // line 88
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\" name=\"read-activity\">
\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["readActivityOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 91
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
                // line 92
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "read-activity", array(), "array") == $context["option"])) {
                    echo " selected";
                }
                // line 93
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 98
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity post writing")), "html", null, true);
            echo "</label>

\t\t\t\t\t\t";
            // line 100
            $context["postActivityOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All users can write posts")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can write posts")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Administrators only can write posts")));
            // line 105
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\"  name=\"post-activity\">
\t\t\t\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["postActivityOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 109
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 110
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "post-activity", array(), "array") == $context["option"])) {
                    echo " selected";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t\t\t</select>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 117
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity commenting")), "html", null, true);
            echo "</label>

\t\t\t\t\t\t";
            // line 119
            $context["commentActivityOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All users can comment")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can comment")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Administrators only can comment")));
            // line 124
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\" name=\"post-comments\">
\t\t\t\t\t\t\t";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commentActivityOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 127
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 128
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 129
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "post-comments", array(), "array") == $context["option"])) {
                    echo " selected";
                }
                // line 130
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 135
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Members viewing")), "html", null, true);
            echo "</label>

                        ";
            // line 137
            $context["membersViewingOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All members can view group members")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can view list of group members")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Only group administrator can view group members")));
            // line 142
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\" name=\"members-viewing\">
                            ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["membersViewingOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 145
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 146
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
                                        ";
                // line 147
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "members-viewing", array(), "array") == $context["option"])) {
                    echo " selected";
                }
                // line 148
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 153
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invitations")), "html", null, true);
            echo "</label>

\t\t\t\t\t\t";
            // line 155
            $context["invitationOptions"] = array("members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All group members can send invitations")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Only group administrators can send invitations")));
            // line 159
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\" name=\"invitations\">
\t\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["invitationOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 163
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 164
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "invitations", array(), "array") == $context["option"])) {
                    echo " selected";
                }
                // line 165
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>";
            // line 170
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send notification to group admin?")), "html", null, true);
            echo "</label>

                        ";
            // line 172
            $context["invitationOptions"] = array("1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")));
            // line 176
            echo "
\t\t\t\t\t\t<select class=\"ui dropdown\" name=\"notifications\">
                            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["invitationOptions"] ?? null));
            foreach ($context['_seq'] as $context["option"] => $context["title"]) {
                // line 179
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 180
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"
                                        ";
                // line 181
                if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "notifications", array(), "array") == $context["option"])) {
                    echo " selected";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 189
        echo "\t\t<div class=\"ui tab\" data-tab=\"tags\">
\t\t\t<div class=\"ui basic vertical segment\">
\t\t\t\t<div class=\"ui fluid right labeled left icon action small input add-tag-input-container\">
\t\t\t\t\t<i class=\"tags icon\"></i>
\t\t\t\t\t<input type=\"text\" placeholder=\"Enter new tag\" class=\"add-tag-input\">
\t\t\t\t\t<button class=\"ui icon button add-tag-button\">
\t\t\t\t\t\t<i class=\"add icon\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"ui basic vertical segment\">
\t\t\t\t<div class=\"tags-container\">
\t\t\t\t\t";
        // line 202
        if ($this->getAttribute(($context["requestedGroup"] ?? null), "tags", array())) {
            // line 203
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("@groups/partials/tags-list.twig", "@groups/settings.twig", 203)->display(array_merge($context, array("tags" => $this->getAttribute(($context["requestedGroup"] ?? null), "tags", array()))));
            // line 204
            echo "\t\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tags for this group have not been added yet.")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--
\t\t\t<div class=\"ui segment\">
\t\t\t\t<div class=\"content ui labels\">
\t\t\t\t\t<div class=\"ui grid\">
\t\t\t\t\t\t<div class=\"sixteen wide column\">
\t\t\t\t\t\t\t<i class=\"tags icon\"></i>
\t\t\t\t\t\t\t<tag :tag=\"tag\" v-for=\"tag in tags\"></tag>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sixteen wide column\">
\t\t\t\t\t\t\t<button class=\"item mini ui button mp-group-add-tag-button\" v-if=\"isAdmin\" @click=\"addTag\">
\t\t\t\t\t\t\t\t";
        // line 221
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add tag")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui small modal mp-add-tag\">
\t\t\t\t\t\t<i class=\"close icon\"></i>
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t";
        // line 228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new tag")), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"ui form\">
\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 233
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New tag")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"newTag\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<button class=\"ui button secondary cancel\">Cancel</button>
\t\t\t\t\t\t\t<button class=\"ui positive primary button\" :class=\"{'disabled': !newTag.length }\">";
        // line 240
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@groups/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 240,  514 => 233,  506 => 228,  496 => 221,  480 => 207,  474 => 205,  471 => 204,  468 => 203,  466 => 202,  451 => 189,  444 => 184,  435 => 182,  431 => 181,  427 => 180,  424 => 179,  420 => 178,  416 => 176,  414 => 172,  409 => 170,  404 => 167,  395 => 165,  391 => 164,  387 => 163,  384 => 162,  380 => 161,  376 => 159,  374 => 155,  369 => 153,  364 => 150,  355 => 148,  351 => 147,  347 => 146,  344 => 145,  340 => 144,  336 => 142,  334 => 137,  329 => 135,  324 => 132,  315 => 130,  311 => 129,  307 => 128,  304 => 127,  300 => 126,  296 => 124,  294 => 119,  289 => 117,  283 => 113,  274 => 111,  270 => 110,  266 => 109,  263 => 108,  259 => 107,  255 => 105,  253 => 100,  248 => 98,  243 => 95,  234 => 93,  230 => 92,  225 => 91,  221 => 90,  217 => 88,  215 => 84,  210 => 82,  204 => 78,  195 => 76,  191 => 75,  187 => 74,  184 => 73,  180 => 72,  176 => 70,  174 => 65,  169 => 63,  164 => 60,  162 => 59,  159 => 58,  151 => 53,  145 => 50,  137 => 45,  134 => 44,  132 => 43,  125 => 39,  119 => 35,  116 => 34,  101 => 32,  96 => 31,  94 => 30,  90 => 29,  85 => 27,  77 => 24,  73 => 23,  67 => 20,  63 => 19,  58 => 17,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/settings.twig", "/home/cz027000/www_root/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/settings.twig");
    }
}
