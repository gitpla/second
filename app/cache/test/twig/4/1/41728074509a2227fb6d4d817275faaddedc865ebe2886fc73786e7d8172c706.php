<?php

/* security/login.html.twig */
class __TwigTemplate_41728074509a2227fb6d4d817275faaddedc865ebe2886fc73786e7d8172c706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91cc01bf981be49d1c15f08cf95ae9a06ce9f0522919e99fbaa48c86719f2cc0 = $this->env->getExtension("native_profiler");
        $__internal_91cc01bf981be49d1c15f08cf95ae9a06ce9f0522919e99fbaa48c86719f2cc0->enter($__internal_91cc01bf981be49d1c15f08cf95ae9a06ce9f0522919e99fbaa48c86719f2cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91cc01bf981be49d1c15f08cf95ae9a06ce9f0522919e99fbaa48c86719f2cc0->leave($__internal_91cc01bf981be49d1c15f08cf95ae9a06ce9f0522919e99fbaa48c86719f2cc0_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7df0499f752687378a7a1eacddb77996b2304aa21fa8c05af9c9e48db3bc767c = $this->env->getExtension("native_profiler");
        $__internal_7df0499f752687378a7a1eacddb77996b2304aa21fa8c05af9c9e48db3bc767c->enter($__internal_7df0499f752687378a7a1eacddb77996b2304aa21fa8c05af9c9e48db3bc767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_7df0499f752687378a7a1eacddb77996b2304aa21fa8c05af9c9e48db3bc767c->leave($__internal_7df0499f752687378a7a1eacddb77996b2304aa21fa8c05af9c9e48db3bc767c_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_bf49b42d254f865157f62a4ad226fee711ad0c2cf00409249eb302a4067ae5a2 = $this->env->getExtension("native_profiler");
        $__internal_bf49b42d254f865157f62a4ad226fee711ad0c2cf00409249eb302a4067ae5a2->enter($__internal_bf49b42d254f865157f62a4ad226fee711ad0c2cf00409249eb302a4067ae5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("security_login_check");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\"></i>
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>anna_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php app/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php app/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_bf49b42d254f865157f62a4ad226fee711ad0c2cf00409249eb302a4067ae5a2->leave($__internal_bf49b42d254f865157f62a4ad226fee711ad0c2cf00409249eb302a4067ae5a2_prof);

    }

    // line 83
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c0e2c8f1bbd4c4a8645b771b19738cc6dc8e7602cb52698a4461edecb7e4156f = $this->env->getExtension("native_profiler");
        $__internal_c0e2c8f1bbd4c4a8645b771b19738cc6dc8e7602cb52698a4461edecb7e4156f->enter($__internal_c0e2c8f1bbd4c4a8645b771b19738cc6dc8e7602cb52698a4461edecb7e4156f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 84
        echo "
    ";
        // line 85
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 87
        echo $this->env->getExtension('app.source_code_extension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_c0e2c8f1bbd4c4a8645b771b19738cc6dc8e7602cb52698a4461edecb7e4156f->leave($__internal_c0e2c8f1bbd4c4a8645b771b19738cc6dc8e7602cb52698a4461edecb7e4156f_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf8ed138f817e92315bc055c0a99a29e043ebd1e18fdb5824b402f8816946ffa = $this->env->getExtension("native_profiler");
        $__internal_cf8ed138f817e92315bc055c0a99a29e043ebd1e18fdb5824b402f8816946ffa->enter($__internal_cf8ed138f817e92315bc055c0a99a29e043ebd1e18fdb5824b402f8816946ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            \$('#username').val('anna_admin');
            \$('#password').val('kitten');
        });
    </script>
";
        
        $__internal_cf8ed138f817e92315bc055c0a99a29e043ebd1e18fdb5824b402f8816946ffa->leave($__internal_cf8ed138f817e92315bc055c0a99a29e043ebd1e18fdb5824b402f8816946ffa_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 91,  219 => 90,  210 => 87,  205 => 85,  202 => 84,  196 => 83,  180 => 74,  176 => 73,  167 => 67,  163 => 66,  152 => 58,  144 => 53,  134 => 46,  130 => 45,  126 => 44,  117 => 38,  104 => 28,  99 => 26,  93 => 23,  87 => 20,  83 => 19,  78 => 17,  73 => 15,  67 => 11,  61 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
