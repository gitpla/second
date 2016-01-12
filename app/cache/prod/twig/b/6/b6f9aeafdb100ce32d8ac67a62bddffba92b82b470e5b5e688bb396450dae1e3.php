<?php

/* blog/post_show.html.twig */
class __TwigTemplate_b6f9aeafdb100ce32d8ac67a62bddffba92b82b470e5b5e688bb396450dae1e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        echo "blog_post_show";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()));
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 17
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Blog:commentForm", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))));
            echo "
        ";
        } else {
            // line 20
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("security_login_form");
            echo "\">
                    <i class=\"fa fa-sign-in\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 27
        echo "    </div>

    <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("post.num_comments", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array()))), "html", null, true);
        echo "</h3>

    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            echo "        <div class=\"row post-comment\">
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "authorEmail", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.commented_on"), "html", null, true);
            echo "
                <strong>";
            // line 35
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "publishedAt", array()), "medium", "short"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 38
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <div class=\"post-comment\">
            <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method"))) {
            // line 50
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 56
        echo "
    ";
        // line 60
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 62
        echo $this->env->getExtension('app.source_code_extension')->showSourceCode($this->env, $this);
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  154 => 60,  151 => 56,  144 => 52,  140 => 51,  137 => 50,  134 => 49,  131 => 48,  120 => 43,  117 => 42,  108 => 38,  102 => 35,  96 => 34,  92 => 32,  87 => 31,  82 => 29,  78 => 27,  72 => 24,  67 => 22,  63 => 21,  60 => 20,  54 => 18,  51 => 17,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
