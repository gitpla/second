<?php

/* base.html.twig */
class __TwigTemplate_696a930fdb2357d8668ae372f61f300e27a7df50b8a2408c2ee1e4e447f8ab53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e97bed82542634c87e7df702b4917c9d12962b93532fac52e7b26ef83a96df2c = $this->env->getExtension("native_profiler");
        $__internal_e97bed82542634c87e7df702b4917c9d12962b93532fac52e7b26ef83a96df2c->enter($__internal_e97bed82542634c87e7df702b4917c9d12962b93532fac52e7b26ef83a96df2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 30
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
        <div class=\"container body-container\">
            ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "        </div>

        ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "
        ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "
    </body>
</html>
";
        
        $__internal_e97bed82542634c87e7df702b4917c9d12962b93532fac52e7b26ef83a96df2c->leave($__internal_e97bed82542634c87e7df702b4917c9d12962b93532fac52e7b26ef83a96df2c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e56ae568460e70c9469ac2ad6b7ac24700d662aed81548cdf4b803143b3d672 = $this->env->getExtension("native_profiler");
        $__internal_9e56ae568460e70c9469ac2ad6b7ac24700d662aed81548cdf4b803143b3d672->enter($__internal_9e56ae568460e70c9469ac2ad6b7ac24700d662aed81548cdf4b803143b3d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_9e56ae568460e70c9469ac2ad6b7ac24700d662aed81548cdf4b803143b3d672->leave($__internal_9e56ae568460e70c9469ac2ad6b7ac24700d662aed81548cdf4b803143b3d672_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74072a5c5305bbf67b812c1ef11bfdb72c027dbe9373589be0d2d9cbdc5cc0f6 = $this->env->getExtension("native_profiler");
        $__internal_74072a5c5305bbf67b812c1ef11bfdb72c027dbe9373589be0d2d9cbdc5cc0f6->enter($__internal_74072a5c5305bbf67b812c1ef11bfdb72c027dbe9373589be0d2d9cbdc5cc0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_74072a5c5305bbf67b812c1ef11bfdb72c027dbe9373589be0d2d9cbdc5cc0f6->leave($__internal_74072a5c5305bbf67b812c1ef11bfdb72c027dbe9373589be0d2d9cbdc5cc0f6_prof);

    }

    // line 30
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_758a0960b56d9e32098a71810128edbacd6f4a9ca846381fe17a26c42918e6a7 = $this->env->getExtension("native_profiler");
        $__internal_758a0960b56d9e32098a71810128edbacd6f4a9ca846381fe17a26c42918e6a7->enter($__internal_758a0960b56d9e32098a71810128edbacd6f4a9ca846381fe17a26c42918e6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_758a0960b56d9e32098a71810128edbacd6f4a9ca846381fe17a26c42918e6a7->leave($__internal_758a0960b56d9e32098a71810128edbacd6f4a9ca846381fe17a26c42918e6a7_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_75acffd26f97883a9bac6fd928452984a0eda29680c7410e7ca119da7d412504 = $this->env->getExtension("native_profiler");
        $__internal_75acffd26f97883a9bac6fd928452984a0eda29680c7410e7ca119da7d412504->enter($__internal_75acffd26f97883a9bac6fd928452984a0eda29680c7410e7ca119da7d412504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 53
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 73
        echo "
                                ";
        // line 74
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 75
            echo "                                    <li>
                                        <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 81
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.locale_extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 86
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_index", array("_locale" => $this->getAttribute($context["locale"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_75acffd26f97883a9bac6fd928452984a0eda29680c7410e7ca119da7d412504->leave($__internal_75acffd26f97883a9bac6fd928452984a0eda29680c7410e7ca119da7d412504_prof);

    }

    // line 53
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_32492f825aa7d05db0f1136f15fcddbebf7137d36e3b6eb9210f5382b724577d = $this->env->getExtension("native_profiler");
        $__internal_32492f825aa7d05db0f1136f15fcddbebf7137d36e3b6eb9210f5382b724577d->enter($__internal_32492f825aa7d05db0f1136f15fcddbebf7137d36e3b6eb9210f5382b724577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 54
        echo "                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 65
        echo "                                    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 66
            echo "                                        <li>
                                            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 72
        echo "                                ";
        
        $__internal_32492f825aa7d05db0f1136f15fcddbebf7137d36e3b6eb9210f5382b724577d->leave($__internal_32492f825aa7d05db0f1136f15fcddbebf7137d36e3b6eb9210f5382b724577d_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b4304cf4084f0bfd642fbf649db9b5af6385c25b5c6d899c61b109c2991afef = $this->env->getExtension("native_profiler");
        $__internal_1b4304cf4084f0bfd642fbf649db9b5af6385c25b5c6d899c61b109c2991afef->enter($__internal_1b4304cf4084f0bfd642fbf649db9b5af6385c25b5c6d899c61b109c2991afef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 105
        $this->displayBlock('sidebar', $context, $blocks);
        // line 117
        echo "                    </div>
                </div>
            ";
        
        $__internal_1b4304cf4084f0bfd642fbf649db9b5af6385c25b5c6d899c61b109c2991afef->leave($__internal_1b4304cf4084f0bfd642fbf649db9b5af6385c25b5c6d899c61b109c2991afef_prof);

    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c34a201515b62e15135942eb3e4488a493b03278e938e83d9abde38d53d7bea = $this->env->getExtension("native_profiler");
        $__internal_7c34a201515b62e15135942eb3e4488a493b03278e938e83d9abde38d53d7bea->enter($__internal_7c34a201515b62e15135942eb3e4488a493b03278e938e83d9abde38d53d7bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7c34a201515b62e15135942eb3e4488a493b03278e938e83d9abde38d53d7bea->leave($__internal_7c34a201515b62e15135942eb3e4488a493b03278e938e83d9abde38d53d7bea_prof);

    }

    // line 105
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f2f1ad4717ecf3ad4484f5319f9cf3b4d4c12fd267f21428d685ed94877ce27e = $this->env->getExtension("native_profiler");
        $__internal_f2f1ad4717ecf3ad4484f5319f9cf3b4d4c12fd267f21428d685ed94877ce27e->enter($__internal_f2f1ad4717ecf3ad4484f5319f9cf3b4d4c12fd267f21428d685ed94877ce27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 106
        echo "                            <div class=\"section about\">
                                <div class=\"well well-lg\">
                                    <p>
                                        ";
        // line 109
        echo $this->env->getExtension('translator')->trans("help.app_description");
        echo "
                                    </p>
                                    <p>
                                        ";
        // line 112
        echo $this->env->getExtension('translator')->trans("help.more_information");
        echo "
                                    </p>
                                </div>
                            </div>
                        ";
        
        $__internal_f2f1ad4717ecf3ad4484f5319f9cf3b4d4c12fd267f21428d685ed94877ce27e->leave($__internal_f2f1ad4717ecf3ad4484f5319f9cf3b4d4c12fd267f21428d685ed94877ce27e_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_90c9017c8927c204767d2b26ce7ff55b50aaae36f78edf18bd4e1bc073803864 = $this->env->getExtension("native_profiler");
        $__internal_90c9017c8927c204767d2b26ce7ff55b50aaae36f78edf18bd4e1bc073803864->enter($__internal_90c9017c8927c204767d2b26ce7ff55b50aaae36f78edf18bd4e1bc073803864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_90c9017c8927c204767d2b26ce7ff55b50aaae36f78edf18bd4e1bc073803864->leave($__internal_90c9017c8927c204767d2b26ce7ff55b50aaae36f78edf18bd4e1bc073803864_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_314556e317403e10e89320b7b0a854468d7892f156994243245a869b765f6c5e = $this->env->getExtension("native_profiler");
        $__internal_314556e317403e10e89320b7b0a854468d7892f156994243245a869b765f6c5e->enter($__internal_314556e317403e10e89320b7b0a854468d7892f156994243245a869b765f6c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "        ";
        // line 151
        echo "
            <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

            <script>
                \$(document).ready(function() {
                    hljs.initHighlightingOnLoad();
                });
            </script>
        ";
        
        $__internal_314556e317403e10e89320b7b0a854468d7892f156994243245a869b765f6c5e->leave($__internal_314556e317403e10e89320b7b0a854468d7892f156994243245a869b765f6c5e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 152,  376 => 151,  374 => 143,  368 => 142,  348 => 128,  344 => 127,  338 => 123,  332 => 122,  320 => 112,  314 => 109,  309 => 106,  303 => 105,  292 => 101,  283 => 117,  281 => 105,  276 => 102,  274 => 101,  270 => 99,  264 => 98,  257 => 72,  250 => 68,  246 => 67,  243 => 66,  240 => 65,  233 => 56,  229 => 55,  226 => 54,  220 => 53,  206 => 88,  191 => 86,  187 => 85,  181 => 81,  174 => 77,  170 => 76,  167 => 75,  165 => 74,  162 => 73,  160 => 53,  141 => 37,  135 => 33,  129 => 32,  118 => 30,  109 => 25,  106 => 24,  104 => 13,  98 => 12,  86 => 10,  76 => 160,  74 => 142,  71 => 141,  69 => 122,  65 => 120,  63 => 98,  59 => 96,  57 => 32,  52 => 30,  45 => 27,  43 => 12,  38 => 10,  32 => 6,);
    }
}
