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
        $__internal_99b514d93ff59ef008a812df2925a30016d86e443620e54ee186bc9a387006be = $this->env->getExtension("native_profiler");
        $__internal_99b514d93ff59ef008a812df2925a30016d86e443620e54ee186bc9a387006be->enter($__internal_99b514d93ff59ef008a812df2925a30016d86e443620e54ee186bc9a387006be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_99b514d93ff59ef008a812df2925a30016d86e443620e54ee186bc9a387006be->leave($__internal_99b514d93ff59ef008a812df2925a30016d86e443620e54ee186bc9a387006be_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c33bc63038ad65df0fd199ebde275e034134f38e3413cba13fd883a94cf27214 = $this->env->getExtension("native_profiler");
        $__internal_c33bc63038ad65df0fd199ebde275e034134f38e3413cba13fd883a94cf27214->enter($__internal_c33bc63038ad65df0fd199ebde275e034134f38e3413cba13fd883a94cf27214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_c33bc63038ad65df0fd199ebde275e034134f38e3413cba13fd883a94cf27214->leave($__internal_c33bc63038ad65df0fd199ebde275e034134f38e3413cba13fd883a94cf27214_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef3756421805e1e69b10419f2ae9ee59c419f80957bd7dd9a8e429ac162bf2ac = $this->env->getExtension("native_profiler");
        $__internal_ef3756421805e1e69b10419f2ae9ee59c419f80957bd7dd9a8e429ac162bf2ac->enter($__internal_ef3756421805e1e69b10419f2ae9ee59c419f80957bd7dd9a8e429ac162bf2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_ef3756421805e1e69b10419f2ae9ee59c419f80957bd7dd9a8e429ac162bf2ac->leave($__internal_ef3756421805e1e69b10419f2ae9ee59c419f80957bd7dd9a8e429ac162bf2ac_prof);

    }

    // line 30
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5b7a95c3950e269a31b0aee985f1f562f01b0419e92532233344cb911bf32f82 = $this->env->getExtension("native_profiler");
        $__internal_5b7a95c3950e269a31b0aee985f1f562f01b0419e92532233344cb911bf32f82->enter($__internal_5b7a95c3950e269a31b0aee985f1f562f01b0419e92532233344cb911bf32f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_5b7a95c3950e269a31b0aee985f1f562f01b0419e92532233344cb911bf32f82->leave($__internal_5b7a95c3950e269a31b0aee985f1f562f01b0419e92532233344cb911bf32f82_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_b6f444940bfee4fe254db73e7265533139cac49e0df69ffc819706ad9d437233 = $this->env->getExtension("native_profiler");
        $__internal_b6f444940bfee4fe254db73e7265533139cac49e0df69ffc819706ad9d437233->enter($__internal_b6f444940bfee4fe254db73e7265533139cac49e0df69ffc819706ad9d437233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b6f444940bfee4fe254db73e7265533139cac49e0df69ffc819706ad9d437233->leave($__internal_b6f444940bfee4fe254db73e7265533139cac49e0df69ffc819706ad9d437233_prof);

    }

    // line 53
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_e604b2fd8a80d8b224266596eb64c0058ed1aa5bf4b9b569daf80f29ee76e9e2 = $this->env->getExtension("native_profiler");
        $__internal_e604b2fd8a80d8b224266596eb64c0058ed1aa5bf4b9b569daf80f29ee76e9e2->enter($__internal_e604b2fd8a80d8b224266596eb64c0058ed1aa5bf4b9b569daf80f29ee76e9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        
        $__internal_e604b2fd8a80d8b224266596eb64c0058ed1aa5bf4b9b569daf80f29ee76e9e2->leave($__internal_e604b2fd8a80d8b224266596eb64c0058ed1aa5bf4b9b569daf80f29ee76e9e2_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef7e91eafb14f812735c48011241f0e5050451bb743a21509c43f97321a0be6b = $this->env->getExtension("native_profiler");
        $__internal_ef7e91eafb14f812735c48011241f0e5050451bb743a21509c43f97321a0be6b->enter($__internal_ef7e91eafb14f812735c48011241f0e5050451bb743a21509c43f97321a0be6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef7e91eafb14f812735c48011241f0e5050451bb743a21509c43f97321a0be6b->leave($__internal_ef7e91eafb14f812735c48011241f0e5050451bb743a21509c43f97321a0be6b_prof);

    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
        $__internal_b31d7856168c14a73bfce6456e44acf2917bb8b7be3bc3cdc041928af2acc1be = $this->env->getExtension("native_profiler");
        $__internal_b31d7856168c14a73bfce6456e44acf2917bb8b7be3bc3cdc041928af2acc1be->enter($__internal_b31d7856168c14a73bfce6456e44acf2917bb8b7be3bc3cdc041928af2acc1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b31d7856168c14a73bfce6456e44acf2917bb8b7be3bc3cdc041928af2acc1be->leave($__internal_b31d7856168c14a73bfce6456e44acf2917bb8b7be3bc3cdc041928af2acc1be_prof);

    }

    // line 105
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4647b8cec5948cd0d05ed1e8398890802ddbd649e166c302c4f36d1069aa804b = $this->env->getExtension("native_profiler");
        $__internal_4647b8cec5948cd0d05ed1e8398890802ddbd649e166c302c4f36d1069aa804b->enter($__internal_4647b8cec5948cd0d05ed1e8398890802ddbd649e166c302c4f36d1069aa804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_4647b8cec5948cd0d05ed1e8398890802ddbd649e166c302c4f36d1069aa804b->leave($__internal_4647b8cec5948cd0d05ed1e8398890802ddbd649e166c302c4f36d1069aa804b_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_eb3b172b7f6ba58c3025c05001755ab56fa212494687cbe26d9a0ba3b7c56834 = $this->env->getExtension("native_profiler");
        $__internal_eb3b172b7f6ba58c3025c05001755ab56fa212494687cbe26d9a0ba3b7c56834->enter($__internal_eb3b172b7f6ba58c3025c05001755ab56fa212494687cbe26d9a0ba3b7c56834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_eb3b172b7f6ba58c3025c05001755ab56fa212494687cbe26d9a0ba3b7c56834->leave($__internal_eb3b172b7f6ba58c3025c05001755ab56fa212494687cbe26d9a0ba3b7c56834_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cfaa1bf52adc5393fb8a768c2c2e8d77bca8ca38fd7ed0f960c1873e2b2be93 = $this->env->getExtension("native_profiler");
        $__internal_2cfaa1bf52adc5393fb8a768c2c2e8d77bca8ca38fd7ed0f960c1873e2b2be93->enter($__internal_2cfaa1bf52adc5393fb8a768c2c2e8d77bca8ca38fd7ed0f960c1873e2b2be93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2cfaa1bf52adc5393fb8a768c2c2e8d77bca8ca38fd7ed0f960c1873e2b2be93->leave($__internal_2cfaa1bf52adc5393fb8a768c2c2e8d77bca8ca38fd7ed0f960c1873e2b2be93_prof);

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
